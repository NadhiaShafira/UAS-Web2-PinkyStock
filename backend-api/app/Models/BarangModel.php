<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    // 1. Sesuaikan nama tabel database kamu
    protected $table            = 'barang';
    
    // 2. Sesuaikan Primary Key dengan yang ada di foto phpMyAdmin kamu
    protected $primaryKey       = 'id_barang';
    
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $protectFields    = true;

    // 3. DAFTAR KOLOM YANG WAJIB DIIZINKAN MASUK (Harus Sama Persis dengan Foto phpMyAdmin)
    protected $allowedFields    = [
        'id_kategori', 
        'nama_barang', 
        'stok', 
        'supplier'
    ];

    // Dates (Biar tidak eror kalau kamu tidak pakai kolom otomatis)
    protected $useTimestamps = false;
}