<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0a3cc9904de66af3ad5b7c95fd22328e
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0a3cc9904de66af3ad5b7c95fd22328e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0a3cc9904de66af3ad5b7c95fd22328e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
