<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2c885785b2285803400b4b4cb2ad3370
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'NagelKilian\\ELearningPlatform\\' => 30,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'NagelKilian\\ELearningPlatform\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit2c885785b2285803400b4b4cb2ad3370::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2c885785b2285803400b4b4cb2ad3370::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2c885785b2285803400b4b4cb2ad3370::$classMap;

        }, null, ClassLoader::class);
    }
}
