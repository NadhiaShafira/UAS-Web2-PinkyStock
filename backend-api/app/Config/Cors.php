<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

/**
 * Cross-Origin Resource Sharing (CORS) Configuration
 *
 * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
 */
class Cors extends BaseConfig
{
    /**
     * The default CORS configuration.
     *
     * @var array{
     *      allowedOrigins: list<string>,
     *      allowedOriginsPatterns: list<string>,
     *      supportsCredentials: bool,
     *      allowedHeaders: list<string>,
     *      exposedHeaders: list<string>,
     *      allowedMethods: list<string>,
     *      maxAge: int,
     *  }
     */
    public array $default = [
        /**
         * Mengizinkan domain Live Server kamu (dan domain lainnya) untuk mengakses API backend.
         */
        'allowedOrigins' => ['*'],

        /**
         * Origin regex patterns untuk Access-Control-Allow-Origin header.
         */
        'allowedOriginsPatterns' => [],

        /**
         * Apakah mengizinkan pengiriman kredensial/cookies (set false jika tidak dipakai).
         */
        'supportsCredentials' => false,

        /**
         * Mengizinkan semua jenis HTTP Headers masuk (termasuk Authorization Token Bearer).
         */
        'allowedHeaders' => ['*'],

        /**
         * Set headers to expose.
         */
        'exposedHeaders' => [],

        /**
         * Mengizinkan metode pengiriman data yang dipakai dalam proses CRUD kita.
         */
        'allowedMethods' => ['GET', 'POST', 'PUT', 'DELETE', 'OPTIONS'],

        /**
         * Set berapa lama (detik) hasil preflight request boleh disimpan di cache browser.
         */
        'maxAge' => 7200,
    ];
}