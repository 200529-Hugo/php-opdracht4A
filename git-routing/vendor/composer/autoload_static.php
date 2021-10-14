<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb5c0b06aabd992459b6104cfa5788414
{
    public static $prefixesPsr0 = array (
        'B' => 
        array (
            'Bramus' => 
            array (
                0 => __DIR__ . '/..' . '/bramus/router/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitb5c0b06aabd992459b6104cfa5788414::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitb5c0b06aabd992459b6104cfa5788414::$classMap;

        }, null, ClassLoader::class);
    }
}
