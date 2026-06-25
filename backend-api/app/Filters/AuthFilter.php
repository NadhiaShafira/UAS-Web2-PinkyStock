<?php
namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Config\Services;

class AuthFilter implements FilterInterface {
    public function before(RequestInterface $request, $arguments = null) {
        // Ambil header Authorization dari request
        $authHeader = $request->getServer('HTTP_AUTHORIZATION');

        // Cek apakah header Authorization ada dan berisi 'Bearer '
        if (!$authHeader || !preg_match('/Bearer\s(\S+)/', $authHeader, $matches)) {
            $response = Services::response();
            return $response->setJSON([
                'status'  => false,
                'message' => 'Akses ditolak! Token tidak ditemukan atau tidak valid.'
            ])->setStatusCode(401); // Error 401 sesuai perintah soal UAS
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null) {
        // Tidak perlu diisi
    }
}