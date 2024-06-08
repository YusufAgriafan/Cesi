<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diskusi extends Model
{
    use HasFactory;

    protected $fillable = [
        'isi',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function balasan()
    {
        return $this->hasMany(Komentar::class, 'diskusi_id');
    }
}
