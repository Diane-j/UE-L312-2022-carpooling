<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita107d7350e3ba27bad6fd56098c7c822
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/class',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita107d7350e3ba27bad6fd56098c7c822::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita107d7350e3ba27bad6fd56098c7c822::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
