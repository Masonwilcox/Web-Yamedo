<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit02370fed44cb13ed7a17c099cff5f4c2
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit02370fed44cb13ed7a17c099cff5f4c2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit02370fed44cb13ed7a17c099cff5f4c2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit02370fed44cb13ed7a17c099cff5f4c2::$classMap;

        }, null, ClassLoader::class);
    }
}
