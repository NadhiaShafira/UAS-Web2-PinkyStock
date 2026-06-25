<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Filters\CSRF;
use CodeIgniter\Filters\DebugToolbar;
use CodeIgniter\Filters\Honeypot;
use CodeIgniter\Filters\InvalidChars;
use CodeIgniter\Filters\SecureHeaders;

class Filters extends BaseConfig
{
    /**
     * Configures aliases for Filter classes to
     * make reading config easier.
     */
    public $aliases = [
        'csrf'          => CSRF::class,
        'toolbar'       => DebugToolbar::class,
        'honeypot'      => Honeypot::class,
        'invalidchars'  => InvalidChars::class,
        'secureheaders' => SecureHeaders::class,
        
        // KORREKSI DI SINI: Diarahkan ke file filter buatan kita di App\Filters
        'cors'          => \App\Filters\Cors::class, 
        'authFilter'    => \App\Filters\AuthFilter::class,
    ];

    /**
     * List of filter aliases that are always
     * applied before and after every request.
     */
    public $globals = [
        'before' => [
            'cors', // Mengaktifkan CORS kustom secara global agar Vue.js diizinkan kirim data
            // 'honeypot',
            // 'csrf',
        ],
        'after' => [
            'toolbar',
            // 'honeypot',
        ],
    ];

    /**
     * List of filter aliases that works on a
     * particular HTTP method (GET, POST, etc.).
     */
    public $methods = [];

    /**
     * List of filter aliases that should run on any
     * before or after URI patterns.
     */
    public $filters = [];
}