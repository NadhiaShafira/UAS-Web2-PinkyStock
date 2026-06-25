<?php
namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
use App\Models\UserModel;

class Auth extends ResourceController {
    protected $format = 'json';

    public function login() {
        $model = new UserModel();
        $json  = $this->request->getJSON(true);
        
        $username = $json['username'] ?? '';
        $password = $json['password'] ?? '';

        // 1. Cari data user di database berdasarkan username 'admin'
        $user = $model->where('username', $username)->first();

        if ($user) {
            // 2. COCOKKAN PASSWORD MENGGUNAKAN ENKRIPSI VALID (password_verify)
            // Ini akan mencocokkan teks 'admin123' dengan kode acak hash di database kamu
            if (password_verify($password, $user['password'])) {
                
                // Bikin token acak pengenal untuk disimpan di localStorage frontend
                $token = base64_encode(random_bytes(32));

                return $this->respond([
                    'status'   => true,
                    'message'  => 'Login berhasil, selamat datang cantik!',
                    'token'    => $token
                ], 200);
            }
        }

        // Jika tidak cocok, muntahkan error 401
        return $this->respond([
            'status'  => false,
            'message' => 'Username atau Password salah!'
        ], 401);
    }
}