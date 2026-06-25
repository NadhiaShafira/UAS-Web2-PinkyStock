<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\BarangModel;

class Barang extends ResourceController
{
    protected $modelName = 'App\Models\BarangModel';
    protected $format    = 'json';

    // 1. AMBIL DATA BARANG (GET)
    public function index()
    {
        // Paksa beri izin CORS langsung saat mengambil data
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method, Authorization");
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

        $model = new BarangModel();
        return $this->respond($model->findAll(), 200);
    }

    // 2. TAMBAH BARANG BARU (POST) - TEMPAT EROR KAKAK SUNTIKKAN CORS LANGSUNG
    public function insert()
    {
        // PENTING: Paksa inject header CORS di awal fungsi agar browser Chrome langsung lolos!
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method, Authorization");
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

        // Jika browser mengirimkan request ujicoba (OPTIONS), langsung jawab OK (200)
        if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
            return $this->respond(null, 200);
        }

        $model = new BarangModel();
        $json = $this->request->getJSON();

        if ($json) {
            $data = [
                'id_kategori' => isset($json->id_kategori) ? intval($json->id_kategori) : 1,
                'nama_barang' => $json->nama_barang,
                'stok'        => intval($json->stok),
                'supplier'    => $json->supplier
            ];

            $model->insert($data);
            return $this->respondCreated([
                'status'   => 201,
                'messages' => ['success' => 'Produk berhasil disimpan ke MySQL!']
            ]);
        }

        return $this->fail('Data kosong', 400);
    }

    // 3. EDIT DATA BARANG (PUT)
    public function update($id = null)
    {
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method, Authorization");
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

        if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
            return $this->respond(null, 200);
        }

        $model = new BarangModel();
        $json = $this->request->getJSON();
        
        if ($json) {
            $data = [
                'id_kategori' => intval($json->id_kategori),
                'nama_barang' => $json->nama_barang,
                'stok'        => intval($json->stok),
                'supplier'    => $json->supplier
            ];
            
            $model->update($id, $data);
            return $this->respond(['message' => 'Data berhasil diperbarui!']);
        }
        return $this->fail('Gagal update');
    }

    // 4. HAPUS DATA BARANG (DELETE)
    public function delete($id = null)
    {
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method, Authorization");
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

        if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
            return $this->respond(null, 200);
        }

        $model = new BarangModel();
        $model->delete($id);
        return $this->respondDeleted(['message' => 'Data berhasil dihapus!']);
    }
}