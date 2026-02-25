<?php

use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\Admin\JurusanController;
use App\Http\Controllers\Admin\AgendaController;
use App\Http\Controllers\Admin\InformasiController;
use App\Http\Controllers\Admin\KontakController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
})->name('beranda');

Route::get('/sambutan', function () {
    return view('sambutan');
})->name('sambutan');

Route::get('/agenda', function () {
    return view('agenda');
})->name('agenda');

Route::get('/informasi', function () {
    return view('informasi');
})->name('informasi');

Route::get('/guru-staf', function () {
    return view('guru-staf');
})->name('guru-staf');

Route::get('/program-keahlian', function () {
    return view('program-keahlian');
})->name('program-keahlian');

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');

Route::get('/galeri', function () {
    return view('galeri');
})->name('galeri');

Route::get('/galeri/detail-perkemahan', function () {
    return view('detail-perkemahan');
})->name('detail-perkemahan');

// Baris 41: Perhatikan tanda kurung dan petiknya!
Route::get('/galeri/detail-kegiatan2024', function () {
    return view('detail-kegiatan2024');
})->name('detail-kegiatan2024'); // Pastikan tidak ada tanda petik di luar kurung

// Baris 45: Perbaiki Typo yang tadi (name-nya harus bersih)
Route::get('/galeri/detail-kegiatan2023', function () {
    return view('detail-kegiatan2023');
})->name('detail-kegiatan2023');

// Baris 49:
Route::get('/galeri/detail-kegiatan2022', function () {
    return view('detail-kegiatan2022');
})->name('detail-kegiatan2022');

Route::get('/profil-kami/profil-sekolah', function () {
    return view('profil-kami.profil-sekolah');
})->name('profil-sekolah');

Route::get('/profil-kami/identitas-sekolah', function () {
    return view('profil-kami.identitas-sekolah');
})->name('identitas-sekolah');

Route::get('/profil-kami/visi-misi', function () {
    return view('profil-kami.visi-misi');
})->name('visi-misi');

Route::get('/profil-kami/sejarah-singkat', function () {
    return view('profil-kami.sejarah-singkat');
})->name('sejarah-singkat');

Route::get('/unit-kerja/wakasek-kurikulum', function () {
    return view('unit-kerja.wakasek-kurikulum');
})->name('wakasek-kurikulum');

Route::get('/unit-kerja/wakasek-kesiswaan', function () {
    return view('unit-kerja.wakasek-kesiswaan');
})->name('wakasek-kesiswaan');

Route::get('/unit-kerja/wakasek-humas', function () {
    return view('unit-kerja.wakasek-humas');
})->name('wakasek-humas');

Route::get('/unit-kerja/wakasek-sarpras', function () {
    return view('unit-kerja.wakasek-sarpras');
})->name('wakasek-sarpras');

Route::get('/unit-kerja/wakasek-ismuba', function () {
    return view('unit-kerja.wakasek-ismuba');
})->name('wakasek-ismuba');

Route::get('/unit-kerja/Bursa-Kerja-Khusus', function () {
    return view('unit-kerja.Bursa-Kerja-Khusus');
})->name('Bursa-Kerja-Khusus');

Route::get('/unit-kerja/Teaching-Factory', function () {
    return view('unit-kerja.Teaching-Factory');
})->name('Teaching-Factory');

Route::get('/spmb/spmb-2026', function () {
    return view('spmb.spmb-2026');
})->name('spmb-2026');

// Berikan nama 'pendaftaran.form' pada route
Route::get('/spmb/pendaftaran', function () {
    return view('spmb.pendaftaran'); // Pastikan file ada di resources/views/pendaftaran.blade.php
})->name('pendaftaran.form');

Route::post('/pendaftaran', [PendaftaranController::class, 'store'])->name('pendaftaran.store');

// Tambahkan ->name('informasi') di akhir baris ini
Route::get('/informasi', [BeritaController::class, 'index'])->name('informasi');

// Rute detail tetap seperti biasa
Route::get('/detail-informasi/{slug}', [BeritaController::class, 'show'])->name('berita.show');

// Ganti baris HomeController kamu dengan ini
Route::get('/profil-sekolah', function () {
    return view('profil-kami.profil-sekolah');
});

Route::get('/profil-sekolah', function () {
    return view('profil-kami.profil-sekolah');
});

Route::get('/agenda', function () {
    return view('agenda');
})->name('agenda');

Route::get('/informasi', function () {
    return view('informasi');
})->name('informasi');


use App\Http\Controllers\Admin\ProfilController;
use App\Http\Controllers\Admin\SambutanController;
use App\Http\Controllers\Admin\IdentitasController;
use App\Http\Controllers\Admin\VisiMisiController;
use App\Http\Controllers\Admin\SejarahController;

Route::resource('admin/profil-sekolah', ProfilController::class);

// Tambahkan rute ini
Route::resource('admin/profil-sekolah/sambutan', SambutanController::class);
Route::resource('admin/profil-sekolah/identitas-sekolah', IdentitasController::class);
Route::resource('admin/profil-sekolah/visi-misi', VisiMisiController::class);
Route::resource('admin/profil-sekolah/sejarah-singkat', SejarahController::class);


use App\Http\Controllers\Admin\KurikulumController;
use App\Http\Controllers\Admin\KesiswaanController;
use App\Http\Controllers\Admin\HumasController;
use App\Http\Controllers\Admin\SarprasController;
use App\Http\Controllers\Admin\IsmubaController;
use App\Http\Controllers\Admin\BkkController;
use App\Http\Controllers\Admin\TeachingFactoryController;


Route::resource('admin/unit-kerja/wakasek-kesiswaan', KesiswaanController::class);
Route::resource('admin/unit-kerja/wakasek-kurikulum', KurikulumController::class);
Route::resource('admin/unit-kerja/wakasek-sarpras', SarprasController::class);
Route::resource('admin/unit-kerja/wakasek-ismuba', IsmubaController::class);
Route::resource('admin/unit-kerja/teaching-factory', TeachingFactoryController::class);

// Baris ini akan menciptakan rute jurusan.index, jurusan.create, dsb.
Route::resource('admin/program-keahlian', JurusanController::class)->names([
    'index' => 'jurusan.index',
]);

Route::resource('admin/agenda', AgendaController::class);
Route::resource('admin/informasi', InformasiController::class);
Route::resource('admin/kontak', KontakController::class);

use App\Http\Controllers\MainController;

Route::get('/agenda', [MainController::class, 'agenda'])->name('agenda');
Route::get('/', [App\Http\Controllers\MainController::class, 'index'])->name('beranda');
Route::get('/', [MainController::class, 'index'])->name('beranda');
Route::get('/admin/dashboard', [DashboardController::class, 'index']);

Route::get('/admin', function () {
    return view('admin.dashboard'); // Sesuaikan dengan nama view kamu
});

// Contoh jika menggunakan Route Group
Route::prefix('admin')->name('admin.')->group(function () {
    Route::prefix('profil')->name('profil.')->group(function () {
        Route::get('/sambutan', [SambutanController::class, 'index'])->name('sambutan.index');
    });
});

// ATAU jika ditulis manual satu per satu:
Route::get('/admin/profil/sambutan', [SambutanController::class, 'index'])->name('admin.profil.sambutan.index');


Route::prefix('admin')->name('admin.')->group(function () {

    // Route untuk Sambutan
    Route::get('/profil/sambutan', [SambutanController::class, 'index'])->name('profil.sambutan.index');

    // Route untuk Jurusan (Error yang baru muncul)
    Route::get('/jurusan', [JurusanController::class, 'index'])->name('jurusan.index');
    Route::get('/jalur-pendaftaran', [App\Http\Controllers\SpmbController::class, 'adminIndex'])->name('jalur-pendaftaran.index');
});

use App\Http\Controllers\Admin\JalurPendaftaranController;
use App\Http\Controllers\SpmbController;
use App\Http\Controllers\Admin\GuruController;


Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {});

Route::get('/spmb/spmb-2026', [SpmbController::class, 'index'])->name('spmb-2026');

Route::get('/spmb/spmb-2026/pendaftaran', [PendaftaranController::class, 'index']);

// Pastikan ada bagian ->name(...) ini
Route::get('/pendaftaran', function () {
    return view('spmb.pendaftaran');
})->name('pendaftaran.index');

Route::get('/pendaftaran', function () {
    return view('spmb.pendaftaran');
});





// ... import controller lainnya

Route::prefix('admin')->group(function () {

    // Pastikan ada ->name('admin.dashboard') di sini
    // Tambahkan ->name('admin.dashboard') di akhir route dashboard kamu
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    // Untuk menu-menu lainnya, gunakan resource atau name yang sesuai

    Route::resource('identitas-sekolah', IdentitasController::class)->names('identitas-sekolah');
    Route::resource('visi-misi', VisiMisiController::class)->names('visi-misi');
    Route::resource('sejarah-singkat', SejarahController::class)->names('sejarah-singkat');

    // Bagian Unit Kerja
    Route::resource('kurikulum', KurikulumController::class)->names('kurikulum');
    Route::resource('kesiswaan', KesiswaanController::class)->names('kesiswaan');
    Route::resource('sarpras', SarprasController::class)->names('sarpras');
    Route::resource('ismuba', IsmubaController::class)->names('ismuba');

    // Untuk Guru & Staf (sesuai sidebar kamu)
    Route::resource('guru', GuruController::class)->names([
        'index' => 'admin.guru.index',
        'destroy' => 'admin.guru.destroy'
    ]);

    // Menu Bawah
    Route::resource('agenda', AgendaController::class)->names('agenda');
    Route::resource('informasi', InformasiController::class)->names('informasi');
    Route::resource('kontak', KontakController::class)->names('kontak');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    // Dashboard (Fix error image_43a795)
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Profil Sekolah (Fix error image_50713a)
    Route::resource('profil-sekolah', ProfilController::class);
    Route::resource('identitas-sekolah', IdentitasController::class);
    Route::resource('visi-misi', VisiMisiController::class);
    Route::resource('guru', GuruController::class);
});

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    
    // Sesuaikan nama ini agar sidebar bisa memanggil 'admin.profil.sambutan.index'
    Route::resource('profil/sambutan', SambutanController::class)->names([
        'index' => 'profil.sambutan.index',
        'store' => 'profil.sambutan.store',
        'update' => 'profil.sambutan.update',
    ]);

});

use App\Http\Controllers\Admin\PendaftaranController as AdminPendaftaran;

// Gunakan nama ini supaya sidebar kamu tidak error
Route::get('/admin/jalur-pendaftaran', [AdminPendaftaran::class, 'index'])->name('admin.jalur-pendaftaran.index');

// Tambahkan juga route hapusnya agar tidak error RouteNotFound lagi nanti
Route::delete('/admin/jalur-pendaftaran/{id}', [AdminPendaftaran::class, 'destroy'])->name('admin.pendaftaran.destroy');


// Route untuk PENGUNJUNG (Frontend)
Route::get('/wakasek-humas', [HumasController::class, 'index'])->name('wakasek-humas');

// Route untuk ADMIN (Backend) - Taruh di dalam group Admin
Route::prefix('admin')->group(function () {
    Route::get('/humas', [HumasController::class, 'admin_index'])->name('humas.index');
});

// Route Frontend (Untuk Navbar)
Route::get('/unit-kerja/Bursa-Kerja-Khusus', [App\Http\Controllers\Admin\BkkController::class, 'index'])->name('Bursa-Kerja-Khusus');

// Route Admin (Di dalam prefix admin)
Route::prefix('admin')->group(function () {
    Route::get('/bkk', [App\Http\Controllers\Admin\BkkController::class, 'adminIndex'])->name('bkk.index');
});

Route::prefix('admin')->group(function () {
    // Gunakan fungsi 'admin_index' khusus untuk dashboard
    Route::get('/teaching-factory', [TeachingFactoryController::class, 'admin_index'])->name('tefa.index');
    // ... rute admin lainnya
});

// 2. BARU TARUH FRONTEND DI BAWAHNYA
Route::get('/unit-kerja/Teaching-Factory', [TeachingFactoryController::class, 'index'])->name('Teaching-Factory');