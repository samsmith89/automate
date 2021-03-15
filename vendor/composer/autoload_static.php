<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitea234e9327fb5b232e4d0b766e550c17
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WPackio\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WPackio\\' => 
        array (
            0 => __DIR__ . '/..' . '/wpackio/enqueue/inc',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitea234e9327fb5b232e4d0b766e550c17::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitea234e9327fb5b232e4d0b766e550c17::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
