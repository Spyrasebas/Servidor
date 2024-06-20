<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbf6d241c4361e4b41f7e4118989d534a
{
    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'pocketmine\\utils\\' => 17,
        ),
        'A' => 
        array (
            'Aternos\\Thanos\\' => 15,
            'Aternos\\Taskmaster\\' => 19,
            'Aternos\\Nbt\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'pocketmine\\utils\\' => 
        array (
            0 => __DIR__ . '/..' . '/pocketmine/binaryutils/src',
        ),
        'Aternos\\Thanos\\' => 
        array (
            0 => __DIR__ . '/..' . '/aternos/thanos/src',
        ),
        'Aternos\\Taskmaster\\' => 
        array (
            0 => __DIR__ . '/..' . '/aternos/taskmaster/src',
        ),
        'Aternos\\Nbt\\' => 
        array (
            0 => __DIR__ . '/..' . '/aternos/nbt/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbf6d241c4361e4b41f7e4118989d534a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbf6d241c4361e4b41f7e4118989d534a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbf6d241c4361e4b41f7e4118989d534a::$classMap;

        }, null, ClassLoader::class);
    }
}