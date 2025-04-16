<?php
require 'vendor/autoload.php';
use Cloudinary\Configuration\Configuration;
use Cloudinary\Api\Upload\UploadApi;

// Ensure configuration is properly set
Configuration::instance([
    'cloud' => [
        'cloud_name' => 'dswzvbhix',
        'api_key'    => '443489439765691',
        'api_secret' => 'QQqfhuPJ_mv5L3u3ikvvA_DsZy4'
    ],
    'url' => [
        'secure' => true
    ]
]);

try {
    $upload = (new UploadApi())->upload('https://res.cloudinary.com/demo/image/upload/sample.jpg');
    echo "Cloudinary is working! Image URL: " . $upload['secure_url'];
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
