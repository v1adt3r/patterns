<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdc83f411a5c4a344faf8cefd32640fde
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'FactoryMethod\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'FactoryMethod\\' => 
        array (
            0 => __DIR__ . '/../..' . '/FactoryMethod',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdc83f411a5c4a344faf8cefd32640fde::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdc83f411a5c4a344faf8cefd32640fde::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
