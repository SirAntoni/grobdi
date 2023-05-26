<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitceba985134c703987e10703fa25d513a
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitceba985134c703987e10703fa25d513a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitceba985134c703987e10703fa25d513a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitceba985134c703987e10703fa25d513a::$classMap;

        }, null, ClassLoader::class);
    }
}
