<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/shop', 'Home::shop');
$routes->get('/shop_detail', 'Home::shop_detail');
$routes->get('/auth', 'Auth::index');
$routes->get('/pesan_produk', 'PesanProduk::index');
$routes->get('/admin/barang', 'Admin::barang');
$routes->post('/admin/barang/hapus', 'Admin::hapus');
$routes->post('/admin/ubah_barang', 'barang::ubah');
$routes->post('/admin/barang/tambah_data', 'Admin::tambah');
$routes->get('/admin/costumer', 'costumer::datacostumer');
$routes->get('/admin/pesanan', 'pesanan::datapesanan');

