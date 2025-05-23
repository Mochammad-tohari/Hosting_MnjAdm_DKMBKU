<?php

use Illuminate\Support\Facades\Route;

//memanggil file controller yg ada di folder Controllers
use App\Http\Controllers\Controller;

// ??????? table list ???????????

//memanggil file login_controller yg ada di folder Controllers
use App\Http\Controllers\login_controller;

//memanggil file uji_controller yg ada di folder Controllers
use App\Http\Controllers\uji_controller;
//memanggil file uji_model yg ada di folder Models
use App\Models\uji_model;

//memanggil file uji_bidang_controller yg ada di folder Controllers
use App\Http\Controllers\uji_bidang_controller;
//memanggil file uji_bidang_model yg ada di folder Models
use App\Models\uji_bidang_model;

//memanggil file uji_user_controller yg ada di folder Controllers
use App\Http\Controllers\uji_user_controller;
//memanggil file uji_user_model yg ada di folder Models
use App\Models\uji_user_model;

//memanggil file gedung_controller yg ada di folder Controllers
use App\Http\Controllers\gedung_controller;
//memanggil file gedung_model yg ada di folder Models
use App\Models\gedung_model;


//memanggil file ruangan_controller yg ada di folder Controllers
use App\Http\Controllers\ruangan_controller;
//memanggil file ruangan_model yg ada di folder Models
use App\Models\ruangan_model;

//memanggil file murid_madrasah_controller yg ada di folder Controllers
use App\Http\Controllers\murid_madrasah_controller;
//memanggil file murid_madrasah_model yg ada di folder Models
use App\Models\murid_madrasah_model;

//memanggil file bidang_khodim_controller yg ada di folder Controllers
use App\Http\Controllers\bidang_khodim_controller;
//memanggil file bidang_khodim_model yg ada di folder Models
use App\Models\bidang_khodim_model;

//memanggil file khodim_dkm_controller yg ada di folder Controllers
use App\Http\Controllers\khodim_dkm_controller;
//memanggil file khodim_dkm_model yg ada di folder Models
use App\Models\khodim_dkm_model;

//memanggil file bidang_pengurus_dkm_controller yg ada di folder Controllers
use App\Http\Controllers\bidang_pengurus_dkm_controller;
//memanggil file bidang_pengurus_dkm_model yg ada di folder Models
use App\Models\bidang_pengurus_dkm_model;


//memanggil file pengurus_dkm_controller yg ada di folder Controllers
use App\Http\Controllers\pengurus_dkm_controller;
//memanggil file pengurus_dkm_model yg ada di folder Models
use App\Models\pengurus_dkm_model;


//memanggil file bidang_nawa_controller yg ada di folder Controllers
use App\Http\Controllers\bidang_nawa_controller;
//memanggil file bidang_nawa_model yg ada di folder Models
use App\Models\bidang_nawa_model;

//memanggil file pengurus_nawa_controller yg ada di folder Controllers
use App\Http\Controllers\pengurus_nawa_controller;
//memanggil file pengurus_nawa_model yg ada di folder Models
use App\Models\pengurus_nawa_model;


//memanggil file inventaris_controller yg ada di folder Controllers
use App\Http\Controllers\inventaris_controller;
//memanggil file inventaris_model yg ada di folder Models
use App\Models\inventaris_model;


//memanggil file majlistalim_controller yg ada di folder Controllers
use App\Http\Controllers\majlistalim_controller;
//memanggil file majlistalim_model yg ada di folder Models
use App\Models\majlistalim_model;


//memanggil file pengajar_madrasah_controller yg ada di folder Controllers
use App\Http\Controllers\pengajar_madrasah_controller;
//memanggil file pengajar_madrasah_model yg ada di folder Models
use App\Models\pengajar_madrasah_model;


// ??????? end table list ???????????


// ******* header list ****************

//memanggil file contact_header_controller yg ada di folder Controllers
use App\Http\Controllers\contact_header_controller;
//memanggil file contact_header_model yg ada di folder Models
use App\Models\contact_header_model;

// ******* end header list ****************

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

Route::get('/', [Controller::class, 'welcome'])->middleware('auth');


// ******* register & login list ****************

/*  Route Register
 */
Route::get('/register', [login_controller::class, 'register'])->name('register');

/*  Route Register_user
 */
Route::post('/register_user', [login_controller::class, 'register_user'])->name('register_user');

/*  Route login
 */
Route::get('/login', [login_controller::class, 'login'])->name('login');

/*  Route login_user
 */
Route::post('/login_user', [login_controller::class, 'login_user'])->name('login_user');

/*  Route logout
 */
Route::get('/logout', [login_controller::class, 'logout'])->name('logout');

// ******* end register & login list ****************


// ******* table list ****************

/*
fungsi table yang berada di luar row bisa di akses oleh "Admin" dan "Tamu"
Pembatasan hak akses dibatasi di file blade.php masing2 table
*/

//table uji
/*  memanggil file 'uji_controller' yg ada di folder controller
                /data_uji ->file data_uji.blade.php & 'index_uji' -> fungsi 'index_uji' yg ada di file uji_controller
                tag ->middleware('auth') berfungsi untuk keamanan jadi pengguna harus login dahulu jika tidak tidak mendapatkan akses
            */
Route::get('/data_uji', [uji_controller::class, 'index_uji'])->name('index_uji')->middleware('auth');

/*  Pdf Export
 */
Route::get('/export_pdf_uji', [uji_controller::class, 'export_pdf_uji'])->name('export_pdf_uji')->middleware('auth');

/*  Excel Export
 */
Route::get('/export_excel_uji', [uji_controller::class, 'export_excel_uji'])->name('export_excel_uji')->middleware('auth');

/*  Lihat 1 data
 */
Route::get('/lihat_data_uji/{id}', [uji_controller::class, 'lihat_data_uji'])->name('lihat_data_uji')->middleware('auth');


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//table uji_bidang
/*  memanggil file 'uji_bidang_controller' yg ada di folder controller
                /uji_bidang_data_new ->file uji_bidang_data_new.blade.php & 'uji_bidang_index_new' -> fungsi 'uji_bidang_index_new' yg ada di file uji_bidang_controller
                tag ->middleware('auth') berfungsi untuk keamanan jadi pengguna harus login dahulu jika tidak tidak mendapatkan akses
            */
Route::get('/uji_bidang_data_new', [uji_bidang_controller::class, 'uji_bidang_index_new'])->name('uji_bidang_index_new')->middleware('auth');

/*  Pdf Export
 */
Route::get('/uji_bidang_export_pdf', [uji_bidang_controller::class, 'uji_bidang_export_pdf'])->name('uji_bidang_export_pdf')->middleware('auth');

/*  Excel Export
 */
Route::get('/uji_bidang_export_excel', [uji_bidang_controller::class, 'uji_bidang_export_excel'])->name('uji_bidang_export_excel')->middleware('auth');


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//table uji_user
/*  memanggil file 'uji_user_controller' yg ada di folder controller
                /uji_user_data_new_new ->file uji_user_data_new.blade.php & 'uji_user_index_new' -> fungsi 'uji_user_index_new' yg ada di file uji_user_controller
                tag ->middleware('auth') berfungsi untuk keamanan jadi pengguna harus login dahulu jika tidak tidak mendapatkan akses
            */
Route::get('/uji_user_data_new', [uji_user_controller::class, 'uji_user_index_new'])->name('uji_user_index_new')->middleware('auth');

/*  Pdf Export
 */
Route::get('/uji_user_export_pdf', [uji_user_controller::class, 'uji_user_export_pdf'])->name('uji_user_export_pdf')->middleware('auth');

//lihat 1 data
Route::get('/uji_user_view/{id_uji_user}', [uji_user_controller::class, 'uji_user_view'])->name('uji_user_view')->middleware('auth');

/*  Excel Export
 */
Route::get('/uji_user_excel_export', [uji_user_controller::class, 'uji_user_excel_export'])->name('uji_user_excel_export')->middleware('auth');


// insert data tanpa role (untuk umum)
//insert data
Route::get('/uji_user_create_public', [uji_user_controller::class, 'uji_user_create_public'])->name('uji_user_create_public');
Route::post('/uji_user_insert_public', [uji_user_controller::class, 'uji_user_insert_public'])->name('uji_user_insert_public');
//selesai daftar
Route::get('/uji_user_pendaftaran_selesai', [uji_user_controller::class, 'pendaftaran_uji_user_selesai'])->name('pendaftaran_uji_user_selesai');

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//tabel gedung
//tampil data
Route::get('/gedung_data', [gedung_controller::class, 'gedung_index'])->name('gedung_index')->middleware('auth');
//export PDF
Route::get('/gedung_export_pdf', [gedung_controller::class, 'gedung_export_pdf'])->name('gedung_export_pdf')->middleware('auth');
//lihat 1 data
Route::get('/gedung_view/{id_gedung}', [gedung_controller::class, 'gedung_view'])->name('gedung_view')->middleware('auth');

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//tabel ruangan
//tampil data
Route::get('/ruangan_data', [ruangan_controller::class, 'ruangan_index'])->name('ruangan_index')->middleware('auth');
//export PDF
Route::get('/ruangan_export_pdf', [ruangan_controller::class, 'ruangan_export_pdf'])->name('ruangan_export_pdf')->middleware('auth');
//lihat 1 data
Route::get('/ruangan_view/{id_ruangan}', [ruangan_controller::class, 'ruangan_view'])->name('ruangan_view')->middleware('auth');

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//tabel murid madrasah
//tampildata
Route::get('/murid_madrasah_data', [murid_madrasah_controller::class, 'murid_madrasah_index'])->name('murid_madrasah_index')->middleware('auth');
//export PDF
Route::get('/murid_madrasah_export_pdf', [murid_madrasah_controller::class, 'murid_madrasah_export_pdf'])->name('murid_madrasah_export_pdf')->middleware('auth');
//lihat 1 data
Route::get('/murid_madrasah_view/{id_murid}', [murid_madrasah_controller::class, 'murid_madrasah_view'])->name('murid_madrasah_view')->middleware('auth');


// insert data tanpa role (untuk umum)
//insert data
Route::get('/murid_madrasah_create_public', [murid_madrasah_controller::class, 'murid_madrasah_create_public'])->name('murid_madrasah_create_public');
Route::post('/murid_madrasah_insert_public', [murid_madrasah_controller::class, 'murid_madrasah_insert_public'])->name('murid_madrasah_insert_public');
//selesai daftar
Route::get('/murid_madrasah_pendaftaran_selesai', [murid_madrasah_controller::class, 'pendaftaran_murid_selesai'])->name('pendaftaran_murid_selesai');


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//tabel bidang khodim
//tampildata
Route::get('/bidang_khodim_data', [bidang_khodim_controller::class, 'bidang_khodim_index'])->name('bidang_khodim_index')->middleware('auth');
//export PDF
Route::get('/bidang_khodim_export_pdf', [bidang_khodim_controller::class, 'bidang_khodim_export_pdf'])->name('bidang_khodim_export_pdf')->middleware('auth');

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//tabel khodim dkm
//tampildata
Route::get('/khodim_dkm_data', [khodim_dkm_controller::class, 'khodim_dkm_index'])->name('khodim_dkm_index')->middleware('auth');
//export PDF
Route::get('/khodim_dkm_export_pdf', [khodim_dkm_controller::class, 'khodim_dkm_export_pdf'])->name('khodim_dkm_export_pdf')->middleware('auth');
//lihat 1 data
Route::get('/khodim_dkm_view/{id_khodim}', [khodim_dkm_controller::class, 'khodim_dkm_view'])->name('khodim_dkm_view')->middleware('auth');

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//tabel bidang_pengurus_dkm
//tampildata
Route::get('/bidang_pengurus_dkm_data', [bidang_pengurus_dkm_controller::class, 'bidang_pengurus_dkm_index'])->name('bidang_pengurus_dkm_index')->middleware('auth');
//export PDF
Route::get('/bidang_pengurus_dkm_export_pdf', [bidang_pengurus_dkm_controller::class, 'bidang_pengurus_dkm_export_pdf'])->name('bidang_pengurus_dkm_export_pdf')->middleware('auth');

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//tabel pengurus dkm
//tampildata
Route::get('/pengurus_dkm_data', [pengurus_dkm_controller::class, 'pengurus_dkm_index'])->name('pengurus_dkm_index')->middleware('auth');
//export PDF
Route::get('/pengurus_dkm_export_pdf', [pengurus_dkm_controller::class, 'pengurus_dkm_export_pdf'])->name('pengurus_dkm_export_pdf')->middleware('auth');
//lihat 1 data
Route::get('/pengurus_dkm_view/{id_pengurus_dkm}', [pengurus_dkm_controller::class, 'pengurus_dkm_view'])->name('pengurus_dkm_view')->middleware('auth');

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//tabel bidang nawa
//tampildata
Route::get('/bidang_nawa_data', [bidang_nawa_controller::class, 'bidang_nawa_index'])->name('bidang_nawa_index')->middleware('auth');
//export PDF
Route::get('/bidang_nawa_export_pdf', [bidang_nawa_controller::class, 'bidang_nawa_export_pdf'])->name('bidang_nawa_export_pdf')->middleware('auth');

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//tabel pengurus nawa
//tampildata
Route::get('/pengurus_nawa_data', [pengurus_nawa_controller::class, 'pengurus_nawa_index'])->name('pengurus_nawa_index')->middleware('auth');
//export PDF
Route::get('/pengurus_nawa_export_pdf', [pengurus_nawa_controller::class, 'pengurus_nawa_export_pdf'])->name('pengurus_nawa_export_pdf')->middleware('auth');
//lihat 1 data
Route::get('/pengurus_nawa_view/{id_pengurus_nawa}', [pengurus_nawa_controller::class, 'pengurus_nawa_view'])->name('pengurus_nawa_view')->middleware('auth');

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


//tabel inventaris
//tampil data
Route::get('/inventaris_data', [inventaris_controller::class, 'inventaris_index'])->name('inventaris_index')->middleware('auth');
//export PDF
Route::get('/inventaris_export_pdf', [inventaris_controller::class, 'inventaris_export_pdf'])->name('inventaris_export_pdf')->middleware('auth');
//lihat 1 data
Route::get('/inventaris_view/{id_inventaris}', [inventaris_controller::class, 'inventaris_view'])->name('inventaris_view')->middleware('auth');

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//tabel Majlistalim
//view data
Route::get('/majlistalim_data', [majlistalim_controller::class, 'majlistalim_index'])->name('majlistalim_index')->middleware('auth');

// Pdf Export
Route::get('/majlistalim_export_pdf', [majlistalim_controller::class, 'majlistalim_export_pdf'])->name('majlistalim_export_pdf')->middleware('auth');

//lihat 1 data
Route::get('/majlistalim_view/{id_majlistalim}', [majlistalim_controller::class, 'majlistalim_view'])->name('majlistalim_view')->middleware('auth');

//  Excel Export
Route::get('/majlistalim_excel_export', [majlistalim_controller::class, 'majlistalim_excel_export'])->name('majlistalim_excel_export')->middleware('auth');


// insert data tanpa role (untuk umum)
//insert data
Route::get('/majlistalim_create_public', [majlistalim_controller::class, 'majlistalim_create_public'])->name('majlistalim_create_public');
Route::post('/majlistalim_insert_public', [majlistalim_controller::class, 'majlistalim_insert_public'])->name('majlistalim_insert_public');
//selesai daftar
Route::get('/majlistalim_pendaftaran_selesai', [majlistalim_controller::class, 'pendaftaran_majlistalim_selesai'])->name('pendaftaran_majlistalim_selesai');

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//tabel pengajar madrasah
//tampildata
Route::get('/pengajar_madrasah_data', [pengajar_madrasah_controller::class, 'pengajar_madrasah_index'])->name('pengajar_madrasah_index')->middleware('auth');
//export PDF
Route::get('/pengajar_madrasah_export_pdf', [pengajar_madrasah_controller::class, 'pengajar_madrasah_export_pdf'])->name('pengajar_madrasah_export_pdf')->middleware('auth');
//lihat 1 data
Route::get('/pengajar_madrasah_view/{id_pengajar}', [pengajar_madrasah_controller::class, 'pengajar_madrasah_view'])->name('pengajar_madrasah_view')->middleware('auth');

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// ******* end table list ****************

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// ******* header page list ****************

//tabel contact_header
//tampil data
Route::get('/contact_header_page', [contact_header_controller::class, 'contact_header_content'])->name('contact_header_content')->middleware('auth');

// ******* end header page list ****************


// ???????????????   admin section    ??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????/

//Route::middleware(['role:Admin'])->group(function () {} hak akses untuk admin
Route::middleware(['role:Admin'])->group(function () {

    //tabel uji
    /*  memanggil file 'uji_controller' yg ada di folder controller
                /create_data_uji ->file create_data_uji.blade.php & 'create_data_uji' -> fungsi 'create_data_uji' yg ada di file uji_controller
            */
    //Route::get('/create_data_uji', [AdminController::class, 'create_data_uji'])->name('create_data_uji');
    Route::get('/create_data_uji', [uji_controller::class, 'create_data_uji'])->name('create_data_uji');

    /*  memanggil file 'uji_controller' yg ada di folder controller
                'insert_data_uji' -> fungsi 'insert_data_uji' yg ada di file uji_controller
            */
    Route::post('/insert_data_uji', [uji_controller::class, 'insert_data_uji'])->name('insert_data_uji');
    /*  memanggil file 'uji_controller' yg ada di folder controller
                /edit_data_uji ->file edit_data_uji.blade.php & 'edit_data_uji' -> fungsi 'edit_data_uji' yg ada di file uji_controller
            */
    Route::get('/edit_data_uji/{id}', [uji_controller::class, 'edit_data_uji'])->name('edit_data_uji');

    /*  memanggil file 'uji_controller' yg ada di folder controller
                'update_data_uji' -> fungsi 'update_data_uji' yg ada di file uji_controller
                {id} -> parameter yg menjadi acuan dalam hal edit
            */
    Route::post('/update_data_uji/{id}', [uji_controller::class, 'update_data_uji'])->name('update_data_uji');

    /*  memanggil file 'uji_controller' yg ada di folder controller
                'delete_data_uji' -> fungsi 'delete_data_uji' yg ada di file uji_controller
                {id} -> parameter yg menjadi acuan dalam hal edit
            */
    Route::get('/delete_data_uji/{id}', [uji_controller::class, 'delete_data_uji'])->name('delete_data_uji');

    /*  Excel import
     */
    Route::post('/uji_excel_import', [uji_controller::class, 'uji_excel_import'])->name('uji_excel_import');


    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //tabel uji_bidang
    /*  memanggil file 'uji_bidang_controller' yg ada di folder controller
                /uji_bidang_create ->file uji_bidang_create.blade.php & 'uji_bidang_create' -> fungsi 'uji_bidang_create' yg ada di file uji_bidang_controller
            */
    //Route::get('/uji_bidang_create', [AdminController::class, 'uji_bidang_create'])->name('uji_bidang_create');
    Route::get('/uji_bidang_create', [uji_bidang_controller::class, 'uji_bidang_create'])->name('uji_bidang_create');

    /*  memanggil file 'uji_bidang_controller' yg ada di folder controller
                'uji_bidang_insert' -> fungsi 'uji_bidang_insert' yg ada di file uji_bidang_controller
            */
    Route::post('/uji_bidang_insert', [uji_bidang_controller::class, 'uji_bidang_insert'])->name('uji_bidang_insert');

    /*  memanggil file 'uji_bidang_controller' yg ada di folder controller
                /uji_bidang_edit ->file uji_bidang_edit.blade.php & 'uji_bidang_edit' -> fungsi 'uji_bidang_edit' yg ada di file uji_bidang_controller
            */
    Route::get('/uji_bidang_edit/{id_uji_bidang}', [uji_bidang_controller::class, 'uji_bidang_edit'])->name('uji_bidang_edit');

    /*  memanggil file 'uji_bidang_controller' yg ada di folder controller
                'uji_bidang_update' -> fungsi 'uji_bidang_update' yg ada di file uji_bidang_controller
                {id} -> parameter yg menjadi acuan dalam hal update
            */
    Route::post('/uji_bidang_update/{id_uji_bidang}', [uji_bidang_controller::class, 'uji_bidang_update'])->name('uji_bidang_update');

    /*  memanggil file 'uji_bidang_controller' yg ada di folder controller
                'uji_bidang_delete' -> fungsi 'uji_bidang_delete' yg ada di file uji_bidang_controller
                {id} -> parameter yg menjadi acuan dalam hal edit
            */
    Route::get('/uji_bidang_delete/{id_uji_bidang}', [uji_bidang_controller::class, 'uji_bidang_delete'])->name('uji_bidang_delete');

    /*  Excel import
     */
    Route::post('/uji_bidang_import_excel', [uji_bidang_controller::class, 'uji_bidang_import_excel'])->name('uji_bidang_import_excel');

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //tabel uji user
    /*  memanggil file 'uji_user_controller' yg ada di folder controller
    /uji_user_create ->file uji_user_create.blade.php & 'uji_user_create' -> fungsi 'uji_user_create' yg ada di file uji_user_controller
      */
    //Route::get('/uji_user_create', [AdminController::class, 'uji_user_create'])->name('uji_user_create');
    Route::get('/uji_user_create', [uji_user_controller::class, 'uji_user_create'])->name('uji_user_create');

    /*  memanggil file 'uji_user_controller' yg ada di folder controller
                'uji_user_insert' -> fungsi 'uji_user_insert' yg ada di file uji_user_controller
               */
    Route::post('/uji_user_insert', [uji_user_controller::class, 'uji_user_insert'])->name('uji_user_insert');


    /*  memanggil file 'uji_user_controller' yg ada di folder controller
                /uji_user_edit ->file uji_user_edit.blade.php & 'uji_user_edit' -> fungsi 'uji_user_edit' yg ada di file uji_user_controller
                {id_uji_user} -> parameter yg menjadi acuan dalam hal update
            */
    Route::get('/uji_user_edit/{id_uji_user}', [uji_user_controller::class, 'uji_user_edit'])->name('uji_user_edit');

    /*  memanggil file 'uji_user_controller' yg ada di folder controller
                'uji_user_update' -> fungsi 'uji_user_update' yg ada di file uji_user_controller
                {id_uji_user} -> parameter yg menjadi acuan dalam hal update
            */
    Route::post('/uji_user_update/{id_uji_user}', [uji_user_controller::class, 'uji_user_update'])->name('uji_user_update');

    /*  memanggil file 'uji_user_controller' yg ada di folder controller
                    'uji_user_delete' -> fungsi 'uji_user_delete' yg ada di file uji_user_controller
                    {id_uji_user} -> parameter yg menjadi acuan dalam hal edit
                */
    Route::get('/uji_user_delete/{id_uji_user}', [uji_user_controller::class, 'uji_user_delete'])->name('uji_user_delete');

    /*  Excel Import
     */
    Route::post('/uji_user_excel_import', [uji_user_controller::class, 'uji_user_excel_import'])->name('uji_user_excel_import')->middleware('auth');

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //tabel gedung
    //insert data
    Route::get('/gedung_create', [gedung_controller::class, 'gedung_create'])->name('gedung_create');
    Route::post('/gedung_insert', [gedung_controller::class, 'gedung_insert'])->name('gedung_insert');
    //edit data
    Route::get('/gedung_edit/{id_gedung}', [gedung_controller::class, 'gedung_edit'])->name('gedung_edit');
    Route::post('/gedung_update/{id_gedung}', [gedung_controller::class, 'gedung_update'])->name('gedung_update');

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //tabel ruangan
    //insert data
    Route::get('/ruangan_create', [ruangan_controller::class, 'ruangan_create'])->name('ruangan_create');
    Route::post('/ruangan_insert', [ruangan_controller::class, 'ruangan_insert'])->name('ruangan_insert');
    //edit data
    Route::get('/ruangan_edit/{id_ruangan}', [ruangan_controller::class, 'ruangan_edit'])->name('ruangan_edit');
    Route::post('/ruangan_update/{id_ruangan}', [ruangan_controller::class, 'ruangan_update'])->name('ruangan_update');

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //tabel murid madrasah
    //insert data
    Route::get('/murid_madrasah_create', [murid_madrasah_controller::class, 'murid_madrasah_create'])->name('murid_madrasah_create');
    Route::post('/murid_madrasah_insert', [murid_madrasah_controller::class, 'murid_madrasah_insert'])->name('murid_madrasah_insert');
    //edit data
    Route::get('/murid_madrasah_edit/{id_murid}', [murid_madrasah_controller::class, 'murid_madrasah_edit'])->name('murid_madrasah_edit');
    Route::post('/murid_madrasah_update/{id_murid}', [murid_madrasah_controller::class, 'murid_madrasah_update'])->name('murid_madrasah_update');

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //tabel bidang_khodim
    //insert data
    Route::get('/bidang_khodim_create', [bidang_khodim_controller::class, 'bidang_khodim_create'])->name('bidang_khodim_create');
    Route::post('/bidang_khodim_insert', [bidang_khodim_controller::class, 'bidang_khodim_insert'])->name('bidang_khodim_insert');
    //edit data
    Route::get('/bidang_khodim_edit/{id_bidang_khodim}', [bidang_khodim_controller::class, 'bidang_khodim_edit'])->name('bidang_khodim_edit');
    Route::post('/bidang_khodim_update/{id_bidang_khodim}', [bidang_khodim_controller::class, 'bidang_khodim_update'])->name('bidang_khodim_update');

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //tabel khodim_dkm
    //insert data
    Route::get('/khodim_dkm_create', [khodim_dkm_controller::class, 'khodim_dkm_create'])->name('khodim_dkm_create');
    Route::post('/khodim_dkm_insert', [khodim_dkm_controller::class, 'khodim_dkm_insert'])->name('khodim_dkm_insert');
    //edit data
    Route::get('/khodim_dkm_edit/{id_khodim}', [khodim_dkm_controller::class, 'khodim_dkm_edit'])->name('khodim_dkm_edit');
    Route::post('/khodim_dkm_update/{id_khodim}', [khodim_dkm_controller::class, 'khodim_dkm_update'])->name('khodim_dkm_update');

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //tabel bidang_pengurus_dkm
    //insert data
    Route::get('/bidang_pengurus_dkm_create', [bidang_pengurus_dkm_controller::class, 'bidang_pengurus_dkm_create'])->name('bidang_pengurus_dkm_create');
    Route::post('/bidang_pengurus_dkm_insert', [bidang_pengurus_dkm_controller::class, 'bidang_pengurus_dkm_insert'])->name('bidang_pengurus_dkm_insert');
    //edit data
    Route::get('/bidang_pengurus_dkm_edit/{id_bidang_pengurus_dkm}', [bidang_pengurus_dkm_controller::class, 'bidang_pengurus_dkm_edit'])->name('bidang_pengurus_dkm_edit');
    Route::post('/bidang_pengurus_dkm_update/{id_bidang_pengurus_dkm}', [bidang_pengurus_dkm_controller::class, 'bidang_pengurus_dkm_update'])->name('bidang_pengurus_dkm_update');

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //tabel pengurus_dkm
    //insert data
    Route::get('/pengurus_dkm_create', [pengurus_dkm_controller::class, 'pengurus_dkm_create'])->name('pengurus_dkm_create');
    Route::post('/pengurus_dkm_insert', [pengurus_dkm_controller::class, 'pengurus_dkm_insert'])->name('pengurus_dkm_insert');
    //edit data
    Route::get('/pengurus_dkm_edit/{id_pengurus_dkm}', [pengurus_dkm_controller::class, 'pengurus_dkm_edit'])->name('pengurus_dkm_edit');
    Route::post('/pengurus_dkm_update/{id_pengurus_dkm}', [pengurus_dkm_controller::class, 'pengurus_dkm_update'])->name('pengurus_dkm_update');

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //tabel bidang_nawa
    //insert data
    Route::get('/bidang_nawa_create', [bidang_nawa_controller::class, 'bidang_nawa_create'])->name('bidang_nawa_create');
    Route::post('/bidang_nawa_insert', [bidang_nawa_controller::class, 'bidang_nawa_insert'])->name('bidang_nawa_insert');
    //edit data
    Route::get('/bidang_nawa_edit/{id_bidang_nawa}', [bidang_nawa_controller::class, 'bidang_nawa_edit'])->name('bidang_nawa_edit');
    Route::post('/bidang_nawa_update/{id_bidang_nawa}', [bidang_nawa_controller::class, 'bidang_nawa_update'])->name('bidang_nawa_update');

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //tabel pengurus_nawa
    //insert data
    Route::get('/pengurus_nawa_create', [pengurus_nawa_controller::class, 'pengurus_nawa_create'])->name('pengurus_nawa_create');
    Route::post('/pengurus_nawa_insert', [pengurus_nawa_controller::class, 'pengurus_nawa_insert'])->name('pengurus_nawa_insert');
    //edit data
    Route::get('/pengurus_nawa_edit/{id_pengurus_nawa}', [pengurus_nawa_controller::class, 'pengurus_nawa_edit'])->name('pengurus_nawa_edit');
    Route::post('/pengurus_nawa_update/{id_pengurus_nawa}', [pengurus_nawa_controller::class, 'pengurus_nawa_update'])->name('pengurus_nawa_update');

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //tabel inventaris
    //insert data
    Route::get('/inventaris_create', [inventaris_controller::class, 'inventaris_create'])->name('inventaris_create');
    Route::post('/inventaris_insert', [inventaris_controller::class, 'inventaris_insert'])->name('inventaris_insert');
    //edit data
    Route::get('/inventaris_edit/{id_inventaris}', [inventaris_controller::class, 'inventaris_edit'])->name('inventaris_edit');
    Route::post('/inventaris_update/{id_inventaris}', [inventaris_controller::class, 'inventaris_update'])->name('inventaris_update');

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //tabel majlistalim
    //insert data
    Route::get('/majlistalim_create', [majlistalim_controller::class, 'majlistalim_create'])->name('majlistalim_create');
    Route::post('/majlistalim_insert', [majlistalim_controller::class, 'majlistalim_insert'])->name('majlistalim_insert');
    //edit data
    Route::get('/majlistalim_edit/{id_majlistalim}', [majlistalim_controller::class, 'majlistalim_edit'])->name('majlistalim_edit');
    Route::post('/majlistalim_update/{id_majlistalim}', [majlistalim_controller::class, 'majlistalim_update'])->name('majlistalim_update');

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //tabel pengajar madrasah
    //insert data
    Route::get('/pengajar_madrasah_create', [pengajar_madrasah_controller::class, 'pengajar_madrasah_create'])->name('pengajar_madrasah_create');
    Route::post('/pengajar_madrasah_insert', [pengajar_madrasah_controller::class, 'pengajar_madrasah_insert'])->name('pengajar_madrasah_insert');
    //edit data
    Route::get('/pengajar_madrasah_edit/{id_pengajar}', [pengajar_madrasah_controller::class, 'pengajar_madrasah_edit'])->name('pengajar_madrasah_edit');
    Route::post('/pengajar_madrasah_update/{id_pengajar}', [pengajar_madrasah_controller::class, 'pengajar_madrasah_update'])->name('pengajar_madrasah_update');

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



});

// ???????????????  end admin section    ??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????/


//Route::middleware(['role:Tamu'])->group(function () {} hak akses untuk tamu
Route::middleware(['role:Tamu'])->group(function () {

    //table uji
    //Route::get('/create_data_uji', [TamuController::class, 'create_data_uji'])->name('create_data_uji');

    //Route::get('/data_uji', [uji_controller::class,'index_uji'])->name('index_uji');


});
