<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf675fc9f97c32c815e54ef67c2eef372
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Socialogin\\Linkedin\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Socialogin\\Linkedin\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf675fc9f97c32c815e54ef67c2eef372::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf675fc9f97c32c815e54ef67c2eef372::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf675fc9f97c32c815e54ef67c2eef372::$classMap;

        }, null, ClassLoader::class);
    }
}