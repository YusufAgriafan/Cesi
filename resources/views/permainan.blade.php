@extends('layout.master2')
@section('tittle', 'Pesi - Permainan')
@section('header', 'header1')
@section('page', 'Permainan')
@section('nav_fitur', 'active')

@section('content')


    <!-- Service Start -->
    <div class="container-xxl service py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Permainan</p>
                <h1 class="display-5 mb-5">Permainan Penanggulangan Depresi</h1>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-4">
                    <div class="nav nav-pills d-flex justify-content-between w-100 h-100 me-4">
                        <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-4 active"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                            <h5 class="m-0"><i class="fa fa-bars text-primary me-3"></i>Memory Game</h5>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-4"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                            <h5 class="m-0"><i class="fa fa-bars text-primary me-3"></i>Teka-Teki Blok</h5>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-4"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                            <h5 class="m-0"><i class="fa fa-bars text-primary me-3"></i>Harmoni</h5>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-4"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
                            <h5 class="m-0"><i class="fa fa-bars text-primary me-3"></i>Mahjong</h5>
                        </button>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="tab-content w-100">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute rounded w-100 h-100" src="img/service-1.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="border rounded p-4">
                                        <nav>
                                            <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                                                <button class="nav-link fw-semi-bold active" id="nav-deskripsi1-tab" data-bs-toggle="tab"
                                                    data-bs-target="#nav-deskripsi1" type="button" role="tab" aria-controls="nav-deskripsi1"
                                                    aria-selected="true">Deskripsi</button>
                                                <button class="nav-link fw-semi-bold" id="nav-tujuan1-tab" data-bs-toggle="tab"
                                                    data-bs-target="#nav-tujuan1" type="button" role="tab" aria-controls="nav-tujuan1"
                                                    aria-selected="false">tujuan</button>
                                                <button class="nav-link fw-semi-bold" id="nav-carakerja1-tab" data-bs-toggle="tab"
                                                    data-bs-target="#nav-carakerja1" type="button" role="tab" aria-controls="nav-carakerja1"
                                                    aria-selected="false">Cara kerja</button>
                                            </div>
                                        </nav>
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="nav-deskripsi1" role="tabpanel"
                                                aria-labelledby="nav-deskripsi1-tab">
                                                <p class="mb-4">Permainan Memori (Memory Game) adalah sebuah permainan yang dirancang untuk mengasah fokus dan konsentrasi pengguna dengan mencocokkan pasangan kartu yang tersembunyi. 
                                        Permainan ini memiliki tujuan utama untuk penanggulangan dan pencegahan depresi, dengan memberikan aktivitas yang menyenangkan dan menenangkan yang dapat membantu mengurangi gejala depresi dan kecemasan. 
                                        Selain itu, isi dari kartu-kartu ini akan mencakup informasi tentang gejala depresi dan cara penanggulangannya, yang bertujuan untuk meningkatkan kesadaran pengguna mengenai kesehatan mental mereka.</p>
                                                <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a>
                                            </div>
                                            <div class="tab-pane fade" id="nav-tujuan1" role="tabpanel"
                                                aria-labelledby="nav-tujuan1-tab">
                                                <p><i class="fa fa-check text-primary me-3"></i>Penanggulangan Depresi</p>
                                                <p><i class="fa fa-check text-primary me-3"></i>Pencegahan Depresi</p>
                                                <p><i class="fa fa-check text-primary me-3"></i>Melatih Daya Ingat dan Konsentrasi</p>
                                            </div>
                                            <div class="tab-pane fade" id="nav-carakerja1" role="tabpanel" aria-labelledby="nav-carakerja1-tab">
                                                <p>1.  Mulai Permainan</p>
                                                <p class="mb-0">2. Kartu akan ditampilkan secara tertutup dalam bentuk grid</p><br>
                                                <p>3. Setiap kartu memiliki pasangan identik yang tersembunyi di antara kartu-kartu lainnya. Isi kartu mencakup informasi tentang gejala depresi dan cara penanggulangannya.</p>
                                                <p class="mb-0">4.  Pengguna dapat memilih dua kartu dalam setiap giliran dengan mengkliknya. Kartu yang dipilih akan terbuka dan menampilkan gambar serta informasi yang ada di baliknya.</p><br>
                                                <p>5. Jika dua kartu yang dipilih memiliki gambar dan informasi yang sama, kartu tersebut akan tetap terbuka dan dianggap sebagai pasangan yang cocok.</p>
                                                <p class="mb-0">6. Jika kartu yang dipilih tidak cocok, kartu tersebut akan kembali tertutup setelah beberapa detik, memungkinkan pengguna untuk mencoba lagi.</p><br>
                                                <p>7. Jumlah giliran yang dilakukan pengguna akan dihitung dan ditampilkan di layar. Semakin sedikit giliran yang dibutuhkan untuk mencocokkan semua pasangan, semakin baik performa pengguna.</p>
                                                <p class="mb-0">8. Permainan selesai ketika semua pasangan kartu berhasil dicocokkan.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="tab-pane-2">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute rounded w-100 h-100" src="img/service-2.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="border rounded p-4">
                                        <nav>
                                            <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                                                <button class="nav-link fw-semi-bold active" id="nav-deskripsi-tab" data-bs-toggle="tab"
                                                    data-bs-target="#nav-deskripsi" type="button" role="tab" aria-controls="nav-deskripsi"
                                                    aria-selected="true">Deskripsi</button>
                                                <button class="nav-link fw-semi-bold" id="nav-tujuan-tab" data-bs-toggle="tab"
                                                    data-bs-target="#nav-tujuan" type="button" role="tab" aria-controls="nav-tujuan"
                                                    aria-selected="false">Tujuan</button>
                                                <button class="nav-link fw-semi-bold" id="nav-carakerja-tab" data-bs-toggle="tab"
                                                    data-bs-target="#nav-carakerja" type="button" role="tab" aria-controls="nav-carakerja"
                                                    aria-selected="false">Cara Kerja</button>
                                            </div>
                                        </nav>
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="nav-deskripsi" role="tabpanel"
                                                aria-labelledby="nav-deskripsi-tab">
                                                <p class="mb-4">Teka-Teki Blok adalah permainan yang dirancang untuk melatih kemampuan berpikir strategis dan spasial Anda. Dengan antarmuka yang sederhana namun menantang, game ini mengajak Anda untuk menyusun blok-blok dengan cara yang benar agar sesuai dan mengisi ruang yang tersedia. 
                                        Permainan ini tidak hanya menyenangkan tetapi juga dapat berkontribusi pada peningkatan kesehatan mental Anda.</p>
                                                <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a>
                                            </div>
                                            <div class="tab-pane fade" id="nav-tujuan" role="tabpanel"
                                                aria-labelledby="nav-tujuan-tab">
                                                <p><i class="fa fa-check text-primary me-3"></i>Meningkatkan fokus dan konsentrasi.</p>
                                                <p><i class="fa fa-check text-primary me-3"></i>Mengembangkan kemampuan pemecahan masalah</p>
                                                <p><i class="fa fa-check text-primary me-3"></i>Mengalihkan pikiran dari stres dan kecemasan sehari-hari.</p>
                                            </div>
                                            <div class="tab-pane fade" id="nav-carakerja" role="tabpanel" aria-labelledby="nav-carakerja-tab">
                                                <p>1.  Mulai Permainan</p>
                                                <p class="mb-0">2. Akan diberikan sejumlah blok dengan bentuk yang berbeda</p><br>
                                                <p>3. Seret dan letakkan blok-blok tersebut ke dalam grid permainan untuk mengisi ruang yang kosong.</p>
                                                <p class="mb-0">4. Akan diberikan sejumlah blok dengan bentuk yang berbeda</p><br>
                                                <p>5. Tujuannya adalah untuk mengisi seluruh grid dengan blok-blok tanpa menyisakan ruang kosong.</p>
                                                <p class="mb-0">6. Jika berhasil menyelesaikan grid, akan diberikan poin</p>
                                            </div>
                                        </div>
                                    </div>                                   
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="tab-pane-3">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute rounded w-100 h-100" src="img/service-3.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="border rounded p-4">
                                        <nav>
                                            <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                                                <button class="nav-link fw-semi-bold active" id="nav-deskripsi2-tab" data-bs-toggle="tab"
                                                    data-bs-target="#nav-deskripsi2" type="button" role="tab" aria-controls="nav-deskripsi2"
                                                    aria-selected="true">Deskripsi</button>
                                                <button class="nav-link fw-semi-bold" id="nav-tujuan2-tab" data-bs-toggle="tab"
                                                    data-bs-target="#nav-tujuan2" type="button" role="tab" aria-controls="nav-tujuan2"
                                                    aria-selected="false">Tujuan</button>
                                                <button class="nav-link fw-semi-bold" id="nav-carakerja2-tab" data-bs-toggle="tab"
                                                    data-bs-target="#nav-carakerja2" type="button" role="tab" aria-controls="nav-carakerja2"
                                                    aria-selected="false">Cara Kerja</button>
                                            </div>
                                        </nav>
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="nav-deskripsi2" role="tabpanel"
                                                aria-labelledby="nav-deskripsi2-tab">
                                                <p class="mb-4">Harmoni adalah permainan yang terinspirasi dari Mahjong, dirancang khusus untuk mengkombinasikan dua tile yang sama. Game ini menantang dan menenangkan, mengajak Anda untuk menemukan pasangan tile yang serupa untuk menghapusnya dari papan. 
                                        Permainan ini tidak hanya mengasyikkan, tetapi juga memiliki manfaat untuk kesehatan mental Anda.
                                        Permainan ini tidak hanya menyenangkan tetapi juga dapat berkontribusi pada peningkatan kesehatan mental Anda.</p>
                                                <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a>
                                            </div>
                                            <div class="tab-pane fade" id="nav-tujuan2" role="tabpanel"
                                                aria-labelledby="nav-tujuan2-tab">
                                                <p><i class="fa fa-check text-primary me-3"></i>Pengalihan Pikiran</p>
                                                <p><i class="fa fa-check text-primary me-3"></i>Stimulasi Kognitif</p>
                                                <p><i class="fa fa-check text-primary me-3"></i>Kepuasan Emosional</p>
                                            </div>
                                            <div class="tab-pane fade" id="nav-carakerja2" role="tabpanel" aria-labelledby="nav-carakerja2-tab">
                                                <p>1.  Mulai Permainan</p>
                                                <p class="mb-0">2. Cari dan klik dua tile yang sama untuk mengkombinasikannya dan menghapusnya dari papan permainan.</p><br>
                                                <p>3. Hanya tile yang tidak terhalang oleh tile lainnya yang dapat dipilih.</p>
                                                <p class="mb-0">4. Tujuannya adalah untuk menghapus semua tile dari papan dengan menemukan semua pasangan yang cocok.</p><br>
                                                <p>5. Tujuannya adalah untuk mengisi seluruh grid dengan blok-blok tanpa menyisakan ruang kosong.</p>
                                                <p class="mb-0">6. Setelah semua pasangan ditemukan dan dihapus, game selesai dengan skor yang ditampilkan</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="tab-pane-4">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute rounded w-100 h-100" src="img/service-3.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="border rounded p-4">
                                        <nav>
                                            <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                                                <button class="nav-link fw-semi-bold active" id="nav-deskripsi3-tab" data-bs-toggle="tab"
                                                    data-bs-target="#nav-deskripsi3" type="button" role="tab" aria-controls="nav-deskripsi3"
                                                    aria-selected="true">Deskripsi</button>
                                                <button class="nav-link fw-semi-bold" id="nav-tujuan3-tab" data-bs-toggle="tab"
                                                    data-bs-target="#nav-tujuan3" type="button" role="tab" aria-controls="nav-tujuan3"
                                                    aria-selected="false">Tujuan</button>
                                                <button class="nav-link fw-semi-bold" id="nav-carakerja3-tab" data-bs-toggle="tab"
                                                    data-bs-target="#nav-carakerja3" type="button" role="tab" aria-controls="nav-carakerja3"
                                                    aria-selected="false">Cara Kerja</button>
                                            </div>
                                        </nav>
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="nav-deskripsi3" role="tabpanel"
                                                aria-labelledby="nav-deskripsi3-tab">
                                                <p class="mb-4">Harmoni adalah permainan yang terinspirasi dari Mahjong, dirancang khusus untuk mengkombinasikan dua tile yang sama. Game ini menantang dan menenangkan, mengajak Anda untuk menemukan pasangan tile yang serupa untuk menghapusnya dari papan. 
                                        Permainan ini tidak hanya mengasyikkan, tetapi juga memiliki manfaat untuk kesehatan mental Anda.
                                        Permainan ini tidak hanya menyenangkan tetapi juga dapat berkontribusi pada peningkatan kesehatan mental Anda.</p>
                                                <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a>
                                            </div>
                                            <div class="tab-pane fade" id="nav-tujuan3" role="tabpanel"
                                                aria-labelledby="nav-tujuan3-tab">
                                                <p><i class="fa fa-check text-primary me-3"></i>Pengalihan Pikiran</p>
                                                <p><i class="fa fa-check text-primary me-3"></i>Stimulasi Kognitif</p>
                                                <p><i class="fa fa-check text-primary me-3"></i>Kepuasan Emosional</p>
                                            </div>
                                            <div class="tab-pane fade" id="nav-carakerja3" role="tabpanel" aria-labelledby="nav-carakerja3-tab">
                                                <p>1.  Mulai Permainan</p>
                                                <p class="mb-0">2. Cari dan klik dua tile yang sama untuk mengkombinasikannya dan menghapusnya dari papan permainan.</p><br>
                                                <p>3. Hanya tile yang tidak terhalang oleh tile lainnya yang dapat dipilih.</p>
                                                <p class="mb-0">4. Tujuannya adalah untuk menghapus semua tile dari papan dengan menemukan semua pasangan yang cocok.</p><br>
                                                <p>5. Tujuannya adalah untuk mengisi seluruh grid dengan blok-blok tanpa menyisakan ruang kosong.</p>
                                                <p class="mb-0">6. Setelah semua pasangan ditemukan dan dihapus, game selesai dengan skor yang ditampilkan</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->  



@endsection