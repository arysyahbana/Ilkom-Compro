<?php

use App\Http\Controllers\AgendaController;
use App\Http\Controllers\AkademikController;
use App\Http\Controllers\AkreditasiDepartemenController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\BidangKajianController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\GaleriIlkomController;
use App\Http\Controllers\GolonganController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\KalenderAkademikController;
use App\Http\Controllers\KemahasiswaanController;
use App\Http\Controllers\KonsentrasiController;
use App\Http\Controllers\KonsentrasiPenjurusanController;
use App\Http\Controllers\KurikulumController;
use App\Http\Controllers\PangkatController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\PostinganBeritaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgramSarjanaController;
use App\Http\Controllers\PublikasiDosenController;
use App\Http\Controllers\SinopsisMatkulController;
use App\Http\Controllers\StrukturOrganisasiController;
use App\Http\Controllers\SubKemahasiswaanController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\UnduhanController;
use App\Http\Controllers\VisiMisiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});



Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.pages.dashboard.index');
    })->name('dashboard');

    Route::prefix('visi-misi')->group(function () {
        Route::get('/index', [VisiMisiController::class, 'index'])->name('visimisi.index');
        Route::get('/create', [VisiMisiController::class, 'create'])->name('visimisi.create');
        Route::post('/store', [VisiMisiController::class, 'store'])->name('visimisi.store');
        Route::get('/manage', [VisiMisiController::class, 'manage'])->name('visimisi.manage');
        Route::put('/update-manage/{id}', [VisiMisiController::class, 'updateManage'])->name('visimisi.update.manage');
    });
    Route::prefix('kurikulum')->group(function () {
        Route::get('/create', [KurikulumController::class, 'create'])->name('kurikulum.create');
        Route::post('/store', [KurikulumController::class, 'manageStore'])->name('kurikulum.store');
        Route::get('/manage', [KurikulumController::class, 'manage'])->name('kurikulum.manage');
        Route::get('/edit/{id}', [KurikulumController::class, 'edit'])->name('kurikulum.edit');
        Route::put('/update-manage/{id}', [KurikulumController::class, 'manageUpdate'])->name('kurikulum.update.manage');
    });
    Route::prefix('program-sarjana')->group(function () {
        Route::get('/create', [ProgramSarjanaController::class, 'create'])->name('programsarjana.create');
        Route::post('/store', [ProgramSarjanaController::class, 'manageStore'])->name('programsarjana.store');
        Route::get('/manage', [ProgramSarjanaController::class, 'manage'])->name('programsarjana.manage');
        Route::get('/edit/{id}', [ProgramSarjanaController::class, 'edit'])->name('programsarjana.edit');
        Route::put('/update-manage/{id}', [ProgramSarjanaController::class, 'manageUpdate'])->name('programsarjana.update.manage');
    });
    Route::prefix('konsentrasi-penjurusan')->group(function () {
        Route::get('/index', [KonsentrasiPenjurusanController::class, 'index'])->name('konsentrasipenjurusan.index');
        Route::get('/create', [KonsentrasiPenjurusanController::class, 'create'])->name('konsentrasipenjurusan.create');
        Route::post('/store', [KonsentrasiPenjurusanController::class, 'store'])->name('konsentrasipenjurusan.store');
        Route::get('/edit/{id}', [KonsentrasiPenjurusanController::class, 'edit'])->name('konsentrasipenjurusan.edit');
        Route::put('/update/{id}', [KonsentrasiPenjurusanController::class, 'update'])->name('konsentrasipenjurusan.update');
        Route::delete('/destroy/{id}', [KonsentrasiPenjurusanController::class, 'destroy'])->name('konsentrasipenjurusan.destroy');
    });
    Route::prefix('jabatan')->group(function () {
        Route::get('/index', [JabatanController::class, 'index'])->name('jabatan.index');
        Route::get('/create', [JabatanController::class, 'create'])->name('jabatan.create');
        Route::post('/store', [JabatanController::class, 'store'])->name('jabatan.store');
        Route::get('/edit/{id}', [JabatanController::class, 'edit'])->name('jabatan.edit');
        Route::put('/update/{id}', [JabatanController::class, 'update'])->name('jabatan.update');
        Route::delete('/destroy/{id}', [JabatanController::class, 'destroy'])->name('jabatan.destroy');
    });
    Route::prefix('pangkat')->group(function () {
        Route::get('/index', [PangkatController::class, 'index'])->name('pangkat.index');
        Route::get('/create', [PangkatController::class, 'create'])->name('pangkat.create');
        Route::post('/store', [PangkatController::class, 'store'])->name('pangkat.store');
        Route::get('/edit/{id}', [PangkatController::class, 'edit'])->name('pangkat.edit');
        Route::put('/update/{id}', [PangkatController::class, 'update'])->name('pangkat.update');
        Route::delete('/destroy/{id}', [PangkatController::class, 'destroy'])->name('pangkat.destroy');
    });
    Route::prefix('golongan')->group(function () {
        Route::get('/index', [GolonganController::class, 'index'])->name('golongan.index');
        Route::get('/create', [GolonganController::class, 'create'])->name('golongan.create');
        Route::post('/store', [GolonganController::class, 'store'])->name('golongan.store');
        Route::get('/edit/{id}', [GolonganController::class, 'edit'])->name('golongan.edit');
        Route::put('/update/{id}', [GolonganController::class, 'update'])->name('golongan.update');
        Route::delete('/destroy/{id}', [GolonganController::class, 'destroy'])->name('golongan.destroy');
    });
    Route::prefix('konsentrasi')->group(function () {
        Route::get('/index', [KonsentrasiController::class, 'index'])->name('konsentrasi.index');
        Route::get('/create', [KonsentrasiController::class, 'create'])->name('konsentrasi.create');
        Route::post('/store', [KonsentrasiController::class, 'store'])->name('konsentrasi.store');
        Route::get('/edit/{id}', [KonsentrasiController::class, 'edit'])->name('konsentrasi.edit');
        Route::put('/update/{id}', [KonsentrasiController::class, 'update'])->name('konsentrasi.update');
        Route::delete('/destroy/{id}', [KonsentrasiController::class, 'destroy'])->name('konsentrasi.destroy');
    });
    Route::prefix('bidang-kajian')->group(function () {
        Route::get('/index', [BidangKajianController::class, 'index'])->name('bidangkajian.index');
        Route::get('/create', [BidangKajianController::class, 'create'])->name('bidangkajian.create');
        Route::post('/store', [BidangKajianController::class, 'store'])->name('bidangkajian.store');
        Route::get('/edit/{id}', [BidangKajianController::class, 'edit'])->name('bidangkajian.edit');
        Route::put('/update/{id}', [BidangKajianController::class, 'update'])->name('bidangkajian.update');
        Route::delete('/destroy/{id}', [BidangKajianController::class, 'destroy'])->name('bidangkajian.destroy');
    });
    Route::prefix('dosen')->group(function () {
        Route::get('/index', [DosenController::class, 'index'])->name('dosen.index');
        Route::get('/create', [DosenController::class, 'create'])->name('dosen.create');
        Route::post('/store', [DosenController::class, 'store'])->name('dosen.store');
        Route::get('/edit/{id}', [DosenController::class, 'edit'])->name('dosen.edit');
        Route::put('/update/{id}', [DosenController::class, 'update'])->name('dosen.update');
        Route::delete('/destroy/{id}', [DosenController::class, 'destroy'])->name('dosen.destroy');
    });
    Route::prefix('fakultas')->group(function () {
        Route::get('/index', [FakultasController::class, 'index'])->name('fakultas.index');
        Route::post('/create', [FakultasController::class, 'create'])->name('fakultas.create');
        Route::post('/store', [FakultasController::class, 'store'])->name('fakultas.store');
        Route::get('/manage', [FakultasController::class, 'manage'])->name('fakultas.manage');
        Route::put('/update-manage/{id}', [FakultasController::class, 'updateManage'])->name('fakultas.update.manage');
    });
    Route::prefix('galeri-ilkom')->group(function () {
        Route::get('/index', [GaleriIlkomController::class, 'index'])->name('galeriilkom.index');
        Route::post('/store', [GaleriIlkomController::class, 'store'])->name('galeriilkom.store');
        Route::post('/update/{id}', [GaleriIlkomController::class, 'update'])->name('galeriilkom.update');
        Route::post('/destroy/{id}', [GaleriIlkomController::class, 'destroy'])->name('galeriilkom.destroy');
    });
    Route::prefix('tentang')->group(function () {
        Route::get('/index', [TentangController::class, 'index'])->name('tentang.index');
        Route::post('/store', [TentangController::class, 'store'])->name('tentang.store');
        Route::post('/update/{id}', [TentangController::class, 'update'])->name('tentang.update');
        Route::post('/destroy/{id}', [TentangController::class, 'destroy'])->name('tentang.destroy');
    });
    Route::prefix('struktur-organisasi')->group(function () {
        Route::get('/create', [StrukturOrganisasiController::class, 'create'])->name('strukturorganisasi.create');
        Route::post('/store', [StrukturOrganisasiController::class, 'manageStore'])->name('strukturorganisasi.store');
        Route::get('/manage', [StrukturOrganisasiController::class, 'manage'])->name('strukturorganisasi.manage');
        Route::get('/edit/{id}', [StrukturOrganisasiController::class, 'edit'])->name('strukturorganisasi.edit');
        Route::put('/update-manage/{id}', [StrukturOrganisasiController::class, 'manageUpdate'])->name('strukturorganisasi.update.manage');
    });
    Route::prefix('akademik')->group(function () {
        Route::get('/index', [AkademikController::class, 'index'])->name('akademik.index');
        Route::post('/store', [AkademikController::class, 'store'])->name('akademik.store');
        Route::post('/update/{id}', [AkademikController::class, 'update'])->name('akademik.update');
        Route::post('/destroy/{id}', [AkademikController::class, 'destroy'])->name('akademik.destroy');
    });
    Route::prefix('berita')->group(function () {
        Route::get('/index', [BeritaController::class, 'index'])->name('berita.index');
        Route::post('/store', [BeritaController::class, 'store'])->name('berita.store');
        Route::post('/update/{id}', [BeritaController::class, 'update'])->name('berita.update');
        Route::post('/destroy/{id}', [BeritaController::class, 'destroy'])->name('berita.destroy');
    });
    Route::prefix('kemahasiswaan')->group(function () {
        Route::get('/index', [KemahasiswaanController::class, 'index'])->name('kemahasiswaan.index');
        Route::post('/store', [KemahasiswaanController::class, 'store'])->name('kemahasiswaan.store');
        Route::post('/update/{id}', [KemahasiswaanController::class, 'update'])->name('kemahasiswaan.update');
        Route::post('/destroy/{id}', [KemahasiswaanController::class, 'destroy'])->name('kemahasiswaan.destroy');
    });
    Route::prefix('akreditasi-departemen')->group(function () {
        Route::get('/create', [AkreditasiDepartemenController::class, 'create'])->name('akreditasidepartemen.create');
        Route::post('/store', [AkreditasiDepartemenController::class, 'manageStore'])->name('akreditasidepartemen.store');
        Route::get('/manage', [AkreditasiDepartemenController::class, 'manage'])->name('akreditasidepartemen.manage');
        Route::get('/edit/{id}', [AkreditasiDepartemenController::class, 'edit'])->name('akreditasidepartemen.edit');
        Route::put('/update-manage/{id}', [AkreditasiDepartemenController::class, 'manageUpdate'])->name('akreditasidepartemen.update.manage');
    });
    Route::prefix('sinopsis-matkul')->group(function () {
        Route::get('/create', [SinopsisMatkulController::class, 'create'])->name('sinopsismatkul.create');
        Route::post('/store', [SinopsisMatkulController::class, 'manageStore'])->name('sinopsismatkul.store');
        Route::get('/manage', [SinopsisMatkulController::class, 'manage'])->name('sinopsismatkul.manage');
        Route::get('/edit/{id}', [SinopsisMatkulController::class, 'edit'])->name('sinopsismatkul.edit');
        Route::put('/update-manage/{id}', [SinopsisMatkulController::class, 'manageUpdate'])->name('sinopsismatkul.update.manage');
    });
    Route::prefix('kalender-akademik')->group(function () {
        Route::get('/create', [KalenderAkademikController::class, 'create'])->name('kalenderakademik.create');
        Route::post('/store', [KalenderAkademikController::class, 'manageStore'])->name('kalenderakademik.store');
        Route::get('/manage', [KalenderAkademikController::class, 'manage'])->name('kalenderakademik.manage');
        Route::get('/edit/{id}', [KalenderAkademikController::class, 'edit'])->name('kalenderakademik.edit');
        Route::put('/update-manage/{id}', [KalenderAkademikController::class, 'manageUpdate'])->name('kalenderakademik.update.manage');
    });
    Route::prefix('pengumuman')->group(function () {
        Route::get('/index', [PengumumanController::class, 'index'])->name('pengumuman.index');
        Route::post('/store', [PengumumanController::class, 'store'])->name('pengumuman.store');
        Route::put('/update/{id}', [PengumumanController::class, 'update'])->name('pengumuman.update');
        Route::delete('/destroy/{id}', [PengumumanController::class, 'destroy'])->name('pengumuman.destroy');
    });
    Route::prefix('agenda')->group(function () {
        Route::get('/index', [AgendaController::class, 'index'])->name('agenda.index');
        Route::get('/show/{id}', [AgendaController::class, 'show'])->name('agenda.show');
        Route::get('/create', [AgendaController::class, 'create'])->name('agenda.create');
        Route::post('/store', [AgendaController::class, 'store'])->name('agenda.store');
        Route::get('/edit/{id}', [AgendaController::class, 'edit'])->name('agenda.edit');
        Route::put('/update/{id}', [AgendaController::class, 'update'])->name('agenda.update');
        Route::delete('/destroy/{id}', [AgendaController::class, 'destroy'])->name('agenda.destroy');
    });
    Route::prefix('postingan-berita')->group(function () {
        Route::get('/index', [PostinganBeritaController::class, 'index'])->name('postinganberita.index');
        Route::get('/show/{id}', [PostinganBeritaController::class, 'show'])->name('postinganberita.show');
        Route::get('/create', [PostinganBeritaController::class, 'create'])->name('postinganberita.create');
        Route::post('/store', [PostinganBeritaController::class, 'store'])->name('postinganberita.store');
        Route::get('/edit/{id}', [PostinganBeritaController::class, 'edit'])->name('postinganberita.edit');
        Route::put('/update/{id}', [PostinganBeritaController::class, 'update'])->name('postinganberita.update');
        Route::delete('/destroy/{id}', [PostinganBeritaController::class, 'destroy'])->name('postinganberita.destroy');
    });
    Route::prefix('publikasi-dosen')->group(function () {
        Route::get('/index', [PublikasiDosenController::class, 'index'])->name('publikasidosen.index');
        Route::get('/show/{id}', [PublikasiDosenController::class, 'show'])->name('publikasidosen.show');
        Route::get('/create', [PublikasiDosenController::class, 'create'])->name('publikasidosen.create');
        Route::post('/store', [PublikasiDosenController::class, 'store'])->name('publikasidosen.store');
        Route::get('/edit/{id}', [PublikasiDosenController::class, 'edit'])->name('publikasidosen.edit');
        Route::put('/update/{id}', [PublikasiDosenController::class, 'update'])->name('publikasidosen.update');
        Route::delete('/destroy/{id}', [PublikasiDosenController::class, 'destroy'])->name('publikasidosen.destroy');
    });
    Route::prefix('sub-kemahasiswaan')->group(function () {
        Route::get('/index', [SubKemahasiswaanController::class, 'index'])->name('subkemahasiswaan.index');
        Route::get('/show/{id}', [SubKemahasiswaanController::class, 'show'])->name('subkemahasiswaan.show');
        Route::get('/create', [SubKemahasiswaanController::class, 'create'])->name('subkemahasiswaan.create');
        Route::post('/store', [SubKemahasiswaanController::class, 'store'])->name('subkemahasiswaan.store');
        Route::get('/edit/{id}', [SubKemahasiswaanController::class, 'edit'])->name('subkemahasiswaan.edit');
        Route::put('/update/{id}', [SubKemahasiswaanController::class, 'update'])->name('subkemahasiswaan.update');
        Route::delete('/destroy/{id}', [SubKemahasiswaanController::class, 'destroy'])->name('subkemahasiswaan.destroy');
    });
    Route::prefix('alumni')->group(function () {
        Route::get('/index', [AlumniController::class, 'index'])->name('alumni.index');
        Route::post('/store', [AlumniController::class, 'store'])->name('alumni.store');
        Route::put('/update/{id}', [AlumniController::class, 'update'])->name('alumni.update');
        Route::delete('/destroy/{id}', [AlumniController::class, 'destroy'])->name('alumni.destroy');
    });
    Route::prefix('unduhan')->group(function () {
        Route::get('/index', [UnduhanController::class, 'index'])->name('unduhan.index');
        Route::post('/store', [UnduhanController::class, 'store'])->name('unduhan.store');
        Route::put('/update/{id}', [UnduhanController::class, 'update'])->name('unduhan.update');
        Route::delete('/destroy/{id}', [UnduhanController::class, 'destroy'])->name('unduhan.destroy');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
