<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita2a8463d4075cc74813b09c0db81d472
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LINE\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LINE\\' => 
        array (
            0 => __DIR__ . '/..' . '/linecorp/line-bot-sdk/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita2a8463d4075cc74813b09c0db81d472::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita2a8463d4075cc74813b09c0db81d472::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
