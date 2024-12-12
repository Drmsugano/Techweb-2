<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite8dba66135e5c1f058da3e5eca2e56e4
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Model\\' => 6,
        ),
        'L' => 
        array (
            'Lib\\' => 4,
        ),
        'D' => 
        array (
            'Dao\\' => 4,
        ),
        'C' => 
        array (
            'Controller\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/model/entity',
        ),
        'Lib\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/lib',
        ),
        'Dao\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/model/dao',
        ),
        'Controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/controller',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite8dba66135e5c1f058da3e5eca2e56e4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite8dba66135e5c1f058da3e5eca2e56e4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite8dba66135e5c1f058da3e5eca2e56e4::$classMap;

        }, null, ClassLoader::class);
    }
}
