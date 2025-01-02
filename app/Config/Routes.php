<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 $routes->get('login','Login');
 $routes-> post('login/login','Login::login');
 $routes->get('/buat_akun','Buat_akun');
 $routes->post('buat_akun/simpan','Buat_akun::simpan');
 $routes->get('pembayaran','Pembayaran::index');
 $routes->get('Bayar','Bayar::index');
 $routes->post('bayar/simpan','Bayar::simpan');
 $routes->get('formulir','Formulir::index');
 $routes->get('home','Home::index');
 $routes->get('biodata','Biodata::index');
 $routes->get('logout','Login::logout');
