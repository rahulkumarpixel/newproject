<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc3592b4eed6a6bd0006d4763ebbd3f57
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Automattic\\WooCommerce\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Automattic\\WooCommerce\\' => 
        array (
            0 => __DIR__ . '/..' . '/automattic/woocommerce/src/WooCommerce',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc3592b4eed6a6bd0006d4763ebbd3f57::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc3592b4eed6a6bd0006d4763ebbd3f57::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc3592b4eed6a6bd0006d4763ebbd3f57::$classMap;

        }, null, ClassLoader::class);
    }
}
