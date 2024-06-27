<?php

namespace App\Controllers;
use App\Models\ModelBarang;

class Admin extends BaseController
{
    public function barang(): string
    {
        $model = new ModelBarang(); // memamanggil model
        return view('admin/admin', ["barang" => $model->findAll()]);
    }
    
    public function tambah()
    {
        $file = $this->request->getFile('gambar');

        if ($file->isValid() && !$file->hasMoved()) {
            $namafile = $file->getRandomName();
            $file->move(FCPATH. 'gambar/', $namafile);
            $data = [
                "nama_barang" => $this->request->getPost("nama_barang"),
                "deskripsi" => $this->request->getPost("deskripsi"),
                "gambar" => $namafile,
                "harga" => $this->request->getPost("harga"),
                "stok" => $this->request->getPost("stok"),
                "nama_kategori" => $this->request->getPost("nama_kategori"),
            ];
            $model = new ModelBarang(); // memamanggil model
            $model->insert($data);
        }
        return redirect()->back();
    }
    public function ubah()
{
    // Ambil data dari form
    $id_barang = $this->request->getPost('id_barang');
    $nama_barang = $this->request->getPost('nama_barang');
    $deskripsi = $this->request->getPost('deskripsi');
    $gambar = $this->request->getPost('gambar');
    $harga = $this->request->getPost('harga');
    $stok = $this->request->getPost('stok');
    $nama_kategori = $this->request->getPost('kategori');

    $modelBarang = new ModelBarang();

    // Persiapkan data yang akan diupdate
    $data = [
        'nama_barang' => $nama_barang,
        'deskripsi' => $deskripsi,
        'gambar' => $gambar,
        'harga' => $harga,
        'stok' => $stok,
        'kategori' => $nama_kategori,
    ];

    // Update data barang
    $ModelBarang->update($id_barang, $data);

    return redirect()->back()->with('success', 'Barang berhasil diubah.');
}

    public function hapus()
    {
        $idBarang = $this->request->getPost("id_barang");
        $model = new ModelBarang(); // memamanggil model
        $model->delete($idBarang);
        return redirect()->back();
    }

}