<?php

Route::get('/','SiteController@index');

/*
|--------------------------------------------------------------------------
| Halaman User Interface
|--------------------------------------------------------------------------
|
| Halaman User Interface Menggunakan Template Dari Unica
|
*/

// Sites
Route::get('/profile-sekolah', [
		'uses' => 'SiteController@profilesekolah',
		'as' => 'prof.sekolah'
	]);

Route::get('/visi-misi', [
		'uses' => 'SiteController@visimisi',
		'as' => 'visi.misi'
	]);

Route::get('/berita-dan-pengumuman', [
		'uses' => 'SiteController@beritapengumuman',
		'as' => 'berita.pengumuman'
	]);

Route::get('/prestasi', [
		'uses' => 'SiteController@prestasi',
		'as' => 'site.prestasi'
	]);

Route::get('/gallery', [
		'uses' => 'SiteController@gallery',
		'as' => 'site.gallery'
	]);

Route::get('/modul-pelajaran', [
	'uses' => 'SiteController@modul',
	'as' => 'site.modul'
]);

Route::get('/kontak', [
	'uses' => 'SiteController@kontak',
	'as' => 'site.kontak'
]);

/*
|--------------------------------------------------------------------------
| Halaman Admin
|--------------------------------------------------------------------------
|
| Halaman Admin Menggunakan Template klorofil
|
*/

// Auth
Route::get('/Auth-SDN-Sumbergandu','AuthController@index')->name('login');
Route::post('/Auth-SDN-Sumbergandu','AuthController@postlogin')->name('post.login');
Route::get('/Logout-SDN-Sumbergandu','AuthController@logout')->name('logout');

Route::group(['middleware' => ['auth', 'checkRole:Admin']], function(){
	// Home Slide
	Route::get('/home-slide/SDN-Sumbergandu', [
		'uses' => 'SlideController@index',
		'as' => 'home.slide'
	]);

	Route::post('/store-slide/SDN-Sumbergandu', [
		'uses' => 'SlideController@store',
		'as' => 'store.slide'
	]);

	Route::get('/edit-slide/{HomeSlide}/SDN-Sumbergandu', [
		'uses' => 'SlideController@edit',
		'as' => 'edit.slide'
	]);

	Route::post('/update-slide/{HomeSlide}/SDN-Sumbergandu', [
		'uses' => 'SlideController@update',
		'as' => 'update.slide'
	]);

	Route::get('/destroy-slide/{HomeSlide}/SDN-Sumbergandu', [
		'uses' => 'SlideController@destroy',
		'as' => 'destroy.slide'
	]);

	// Data Sekolah
	Route::get('/Data-Sekolah/SDN-Sumbergandu', [
		'uses' => 'DataSekolahController@index',
		'as' => 'data.sekolah'
	]);

	Route::post('/Data-Sekolah/SDN-Sumbergandu', [
		'uses' => 'DataSekolahController@store',
		'as' => 'store.sekolah'
	]);

	Route::get('/Edit-Data-Sekolah/{sekolah}/SDN-Sumbergandu', [
		'uses' => 'DataSekolahController@edit',
		'as' => 'edit.ds'
	]);

	Route::post('/Update-Data-Sekolah/{sekolah}/SDN-Sumbergandu', [
		'uses' => 'DataSekolahController@update',
		'as' => 'update.ds'
	]);

	Route::get('/Destroy-Data-Sekolah/{sekolah}/SDN-Sumbergandu', [
		'uses' => 'DataSekolahController@destroy',
		'as' => 'destroy.ds'
	]);

	// Profile Sekolah
	Route::get('/Profile-Sekolah/SDN-Sumbergandu', [
		'uses' => 'ProfileSekolahController@index',
		'as' => 'profile.sekolah'
	]);

	Route::post('/Store-Profile-Sekolah/SDN-Sumbergandu', [
		'uses' => 'ProfileSekolahController@store',
		'as' => 'profsekolah.store'
	]);

	// Guru
	Route::get('/edit-guru/{guru}/SDN-Sumbergandu','GuruController@edit')->name('edit.guru');
	Route::post('/store-guru/SDN-Sumbergandu','GuruController@store')->name('store.guru');
	Route::post('/update-guru/{guru}/SDN-Sumbergandu','GuruController@update');
	Route::get('/destroy-guru/{guru}/SDN-Sumbergandu','GuruController@destroy');

	// Siswa
	Route::get('/edit-siswa/{siswa}/SDN-Sumbergandu','SiswaController@edit');
	Route::post('/store-siswa/SDN-Sumbergandu','SiswaController@store');
	Route::post('/update-siswa/{siswa}/SDN-Sumbergandu','SiswaController@update');
	Route::get('/destroy-siswa/{siswa}/SDN-Sumbergandu','SiswaController@destroy');

	// Buku Induk
	Route::get('/edit-buku-induk/{bukuinduk}/SDN-Sumbergandu','BukuIndukController@edit');
	Route::get('/destroy-buku-induk/{bukuinduk}/SDN-Sumbergandu','BukuIndukController@destroy');
	Route::post('/update-buku-induk/{bukuinduk}/SDN-Sumbergandu','BukuIndukController@update');

	// Mapel
	Route::get('/data-mapel/SDN-Sumbergandu','MapelController@index')->name('data.mapel');
	Route::post('/store-mapel/SDN-Sumbergandu','MapelController@store');
	Route::get('/edit-mapel/{mapel}/SDN-Sumbergandu','MapelController@edit');
	Route::post('/update-mapel/{mapel}/SDN-Sumbergandu','MapelController@update');
	Route::get('/destroy-mapel/{mapel}/SDN-Sumbergandu','MapelController@destroy');


	// Testimoni Alumni
	Route::get('/testimoni-alumni/SDN-Sumbergandu','TestimoniController@index')->name('testimoni');
	Route::post('/store-testimoni/SDN-Sumbergandu','TestimoniController@store');
	Route::get('/edit-testimoni/{testimoni}/SDN-Sumbergandu','TestimoniController@edit');
	Route::post('/update-testimoni/{testimoni}/SDN-Sumbergandu','TestimoniController@update');
	Route::get('/destroy-testimoni/{testimoni}/SDN-Sumbergandu','TestimoniController@destroy');

	//Publish
	Route::get('/Publish/SDN-Sumbergandu','PostController@index')->name('publish');

	Route::get('/publish-create/SDN-Sumbergandu', [
		'uses' => 'PostController@create',
		'as' => 'post.create'
	]);

	Route::post('/publish-store/SDN-Sumbergandu', [
		'uses' => 'PostController@store',
		'as' => 'post.store'
	]);

	Route::get('/publish-edit/{post}/SDN-Sumbergandu', [
		'uses' => 'PostController@edit',
		'as' => 'post.edit'
	]);

	Route::post('/publish-update/{post}/SDN-Sumbergandu', [
		'uses' => 'PostController@update',
		'as' => 'post.update'
	]);

	Route::get('/publish-destroy/{post}/SDN-Sumbergandu', [
		'uses' => 'PostController@destroy',
		'as' => 'post.destroy'
	]);


	// Prestasi
	Route::get('/Prestasi/SDN-Sumbergandu','PrestasiController@index')->name('prestasi');
	Route::post('/store-prestasi/SDN-Sumbergandu','PrestasiController@store');
	Route::get('/edit-prestasi/{prestasi}/SDN-Sumbergandu','PrestasiController@edit');
	Route::post('/update-prestasi/{prestasi}/SDN-Sumbergandu','PrestasiController@update');
	Route::get('/destroy-prestasi/{prestasi}/SDN-Sumbergandu','PrestasiController@destroy');

	// Gallery
	Route::get('/Gallery/SDN-Sumbergandu','GalleryController@index')->name('gallery');
	Route::post('/store-gallery/SDN-Sumbergandu','GalleryController@store');
	Route::get('/edit-gallery/{gallery}/SDN-Sumbergandu','GalleryController@edit')->name('edit.gallery');
	Route::post('/update-gallery/{gallery}/SDN-Sumbergandu','GalleryController@update');
	Route::get('/destroy-gallery/{gallery}/SDN-Sumbergandu','GalleryController@destroy');

	// Data User
	Route::get('/Data-Users/SDN-Sumbergandu','UserController@index')->name('users');
	Route::post('/store-users/SDN-Sumbergandu','UserController@store');
	Route::get('/edit-users/{user}/SDN-Sumbergandu','UserController@edit');
	Route::get('/edit-password/{user}/SDN-Sumbergandu','UserController@editpassword');
	Route::post('/update-users/{user}/SDN-Sumbergandu','UserController@update');
	Route::post('/update-password/{id}/SDN-Sumbergandu','UserController@updatepassword');
	Route::get('/reset-password/{user}/SDN-Sumbergandu','UserController@resetpw');
	Route::get('/destroy-users/{user}/SDN-Sumbergandu','UserController@destroy');

});

Route::group(['middleware' => ['auth', 'checkRole:Admin,Guru']], function(){
	// Dashboard
	Route::get('/Dashboard/SDN-Sumbergandu','DashboardController@index')->name('dashboard');

	// Guru
	Route::get('/data-guru/SDN-Sumbergandu','GuruController@index')->name('data.guru');
	Route::get('/profile-guru/{guru}/SDN-Sumbergandu','GuruController@profile')->name('guru.profile');

	// Siswa
	Route::get('/data-siswa/SDN-Sumbergandu','SiswaController@index')->name('data.siswa');
	Route::get('/profile-siswa/{siswa}/SDN-Sumbergandu','SiswaController@profile');
	Route::post('/add-nilai-siswa/{id}/SDN-Sumbergandu','SiswaController@addnilai');
	Route::get('/destroy-siswa/{id}/{idmapel}','SiswaController@destroynilai');

	// Buku Induk
	Route::get('/data-buku-induk/SDN-Sumbergandu','BukuIndukController@index')->name('bukuinduk');
	Route::get('/buku-induk/{bukuinduk}/SDN-Sumbergandu','BukuIndukController@profile')->name('profile.bi');

	// Modul
	Route::get('/modul-pelajaran/SDN-Sumbergandu','ModulController@index')->name('modul');
	Route::post('/store-modul/SDN-Sumbergandu','ModulController@store');
	Route::get('/edit-modul/{modul}/SDN-Sumbergandu','ModulController@edit');
	Route::post('/update-modul/{modul}/SDN-Sumbergandu','ModulController@update');
	Route::get('/destroy-modul/{modul}/SDN-Sumbergandu','ModulController@destroy');
	Route::get('/download-modul/{id}/SDN-Sumbergandu','ModulController@download')->name('download');

	// User
	Route::get('/Profile-Users/{user}/SDN-Sumbergandu','UserController@profile');
	Route::get('/edit-avatar/{user}/SDN-Sumbergandu','UserController@editav');
	Route::post('/update-avatar/{id}/SDN-Sumbergandu','UserController@updateav');
	Route::get('/edit-password-users/{user}/SDN-Sumbergandu','UserController@editpassusers');
	Route::post('/update-password-users/{id}/SDN-Sumbergandu','UserController@updtpassusers');

});

// Data Sekolah
Route::get('/{slug}/data-sekolah', [
	'uses' => 'DataSekolahController@singlepost',
	'as' => 'sekolah.single.post'
]);

// Publish
Route::get('/{slug}/post', [
	'uses' => 'SiteController@singlepost',
	'as' => 'site.single.post'
]);

// Prestasi
Route::get('/{slug}/prestasi', [
	'uses' => 'PrestasiController@singlepost',
	'as' => 'prestasi.single.post'
]);

// Gallery
Route::get('/{slug}/gallery', [
	'uses' => 'GalleryController@singlepost',
	'as' => 'gallery.single.post'
]);

