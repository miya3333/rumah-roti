<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class App extends BaseConfig
{
    public string $baseURL = 'http://localhost:8080/rumah-roti/public/';
    public array $allowedHostnames = [];
    public string $indexPage = 'index.php';
    public string $uriProtocol = 'REQUEST_URI';
    public string $permittedURIChars = 'a-z 0-9~%.:_\-';
    public string $defaultLocale = 'en';
    public bool $negotiateLocale = false;
    public array $supportedLocales = ['en'];
    public string $appTimezone = 'Asia/Jakarta'; // Ubah ke timezone Indonesia
    public string $charset = 'UTF-8';
    public bool $forceGlobalSecureRequests = false;
    public array $proxyIPs = [];
    public bool $CSPEnabled = false;

    // Tambahkan konfigurasi CSRF
    // public bool $CSRFProtection = true;
    // public string $CSRFTokenName = 'csrf_test_name';
    // public string $CSRFHeaderName = 'X-CSRF-TOKEN';
    // public string $CSRFCookieName = 'csrf_cookie_name';
    // public int $CSRFExpire = 7200;
    // public bool $CSRFRegenerate = true;
    // public bool $CSRFRedirect = true;
    // public array $CSRFExcept = [];
}