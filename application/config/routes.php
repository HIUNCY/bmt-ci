<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['404_override'] = 'notFoundPage/index';
$route['translate_uri_dashes'] = FALSE;



/* ROUTES UNTUK LOGIN */
$route['default_controller'] = 'Auth/index';
$route['auth/login-siswa'] = 'Auth/siswa';

/* ROUTES UNTUK DASHBOARD */
$route['admin'] = 'Dashboard/index';
$route['staff'] = 'Dashboard/index';
$route['siswa'] = 'Dashboard/index';

/* ROUTES UNTUK SISWA */
$route['(:any)/siswa'] = 'Siswa/index';
$route['(:any)/tambah-siswa'] = 'Siswa/tambahSiswa';
$route['(:any)/createSiswa'] = 'Siswa/createSiswa';
$route['(:any)/edit-siswa/(:num)'] = 'Siswa/editSiswa';
$route['(:any)/updateSiswa'] = 'Siswa/updateSiswa';
$route['(:any)/deleteSiswa/(:num)'] = 'Siswa/deleteSiswa';

/* ROUTES UNTUK KELAS */
$route['(:any)/kelas'] = 'Kelas/index';
$route['(:any)/tambah-kelas'] = 'Kelas/tambahKelas';
$route['(:any)/createKelas'] = 'Kelas/createKelas';
$route['(:any)/edit-kelas/(:num)'] = 'Kelas/editKelas';
$route['(:any)/updateKelas'] = 'Kelas/updateKelas';
$route['(:any)/deleteKelas/(:num)'] = 'Kelas/deleteKelas';

/* ROUTES UNTUK SETORAN */
$route['(:any)/setoran'] = 'Setoran/index';
$route['(:any)/tambah-setoran'] = 'Setoran/tambahSetoran';
$route['(:any)/createSetoran'] = 'Setoran/createSetoran';
$route['(:any)/edit-setoran/(:num)'] = 'Setoran/editSetoran';
$route['(:any)/updateSetoran'] = 'Setoran/updateSetoran';

/* ROUTES UNTUK PENARIKAN */
$route['(:any)/penarikan'] = 'Penarikan/index';
$route['(:any)/tambah-penarikan'] = 'Penarikan/tambahPenarikan';
$route['(:any)/createPenarikan'] = 'Penarikan/createPenarikan';
$route['(:any)/edit-penarikan/(:num)'] = 'Penarikan/editPenarikan';
$route['(:any)/updatePenarikan'] = 'Penarikan/updatePenarikan';

/* ROUTES UNTUK KAS */
$route['(:any)/kas'] = 'Kas/index';
$route['(:any)/data-kas'] = 'Kas/dataKas';

/* ROUTES UNTUK TABUNGAN */
$route['(:any)/tabungan'] = 'Tabungan/index';
$route['(:any)/tabungan-siswa/(:num)'] = 'Tabungan/tabunganSiswa';
$route['(:any)/data-tabungan'] = 'Tabungan/dataTabungan';
$route['(:any)/cetak-tabungan/(:num)'] = 'Tabungan/cetakTabungan';

/* ROUTES UNTUK LAPORAN */
$route['(:any)/laporan'] = 'Laporan/index';
$route['(:any)/cetak-laporan'] = 'Laporan/cetakLaporan';

/* ROUTES UNTUK PENGGUNA */
$route['(:any)/pengguna'] = 'Pengguna/index';
$route['(:any)/tambah-pengguna'] = 'Pengguna/tambahPengguna';
$route['(:any)/createPengguna'] = 'Pengguna/createPengguna';
$route['(:any)/updatePengguna'] = 'Pengguna/updatePengguna';
$route['(:any)/edit-pengguna/(:num)'] = 'Pengguna/editPengguna';
$route['(:any)/deletePengguna/(:num)'] = 'Pengguna/deletePengguna';

/* ROUTES UNTUK PROFIL */
$route['(:any)/profil'] = 'Profil/index';
$route['(:any)/edit-profil'] = 'Profil/editProfil';
$route['(:any)/updateProfil'] = 'Profil/updateProfil';
