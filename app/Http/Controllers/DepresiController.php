<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\Depresi;
use App\Models\Question;
use App\Models\QuizResult;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DepresiController extends Controller
{
    // public function tesDepresi()
    // {
        
    //     return view('user.tesDepresi');
    // }

    public function tesDepresi(Request $request)
    {
        $userId = $request->user_id ?? auth()->user()->id;

        // Ambil data skor untuk line chart
        $scoreData = Depresi::where('user_id', $userId)->select('score', 'created_at')->get();

        $lineChartData = $scoreData->map(function($item) {
            return [
                'x' => $item->created_at->setTimezone('Asia/Jakarta')->format('Y-m-d H:i:s'),
                'y' => $item->score
            ];
        });

        // Ambil data depresi untuk pie chart
        $depresiData = Depresi::where('user_id', $userId)->select('depresi')->get();

        // Menghitung jumlah pengguna yang depresi dan tidak depresi
        $depresiCount = $depresiData->where('depresi', true)->count();
        $tidakDepresiCount = $depresiData->where('depresi', false)->count();

        // Menyiapkan data untuk pie chart
        $pieChartData = [$depresiCount, $tidakDepresiCount];
        $pieChartLabels = ['Depresi', 'Tidak Depresi'];

        return view('user.tesDepresi', compact('lineChartData', 'pieChartData', 'pieChartLabels'));
    }

    public function api(Request $request)
    {
        // $request->validate([
        //     'score' => 'required|numeric'
        // ]);

        $userScore = $request->true;
        $depresi = $userScore > 10 ? 1 : 0;

        $quiz_result = new Depresi;
        $quiz_result->user_id = Auth::id();
        $quiz_result->score = $userScore;
        $quiz_result->depresi = $depresi;
        $quiz_result->save();
    }

    // public function kerjakan(Quiz $quiz)
    // {
    //     $cek = QuizResult::where('quiz_id', $quiz->id)->where('user_id', Auth::id())->get();

    //     if ($quiz->by == "guru" && count($cek)) return back()->with('error', 'Kuis Hanya Bisa Dikerjakan Sekali!');

    //     $dataQuiz = [];
    //     $questions  = Question::where('quiz_id', $quiz->id)->get();
    //     $no = 1;

    //     if (!count($questions)) {
    //         return back()->with('error', 'Belum Ada Questions!');
    //     }

    //     foreach ($questions as $key => $value) {
    //         $options = json_decode($value->options, true);

    //         $dataQuiz[] = [
    //             "numb" => $no,
    //             "answer" => $options[$value->answer],
    //             "question" => filter_var($value->question, FILTER_SANITIZE_STRING),
    //             "options" => [$options['a'], $options['b']]
    //         ];

    //         $no++;
    //     }

    //     return view('user.kuis.kerjakan', [
    //         'quiz' => $quiz,
    //         'questions' => $dataQuiz
    //     ]);
    // }


    // public function api(Request $request, $quiz_id)
    // {
    //     $userScore = $request->input('true');
    //     $depresiValue = $request->input('depresi');

    //     $quiz_result = new Depresi;
    //     $quiz_result->user_id = Auth::id();
    //     $quiz_result->score = $userScore;
    //     $quiz_result->depresi = $depresiValue;
    //     $quiz_result->save();

    //     return response()->json(['message' => 'Data berhasil disimpan'], 200);
    // }


    public function rec()
    {
        return redirect()->route('tesDepresi')->with('success', 'Kuis Berhasil Dikerjakan');
    }
}
