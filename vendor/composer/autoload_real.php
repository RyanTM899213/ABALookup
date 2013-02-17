<?php

// autoload_real.php generated by Composer

class ComposerAutoloaderInit729dacf2e7fde8929a0e57afb14b3547
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit729dacf2e7fde8929a0e57afb14b3547', 'loadClassLoader'));
        self::$loader = $loader = new \Composer\Autoload\ClassLoader();
        spl_autoload_unregister(array('ComposerAutoloaderInit729dacf2e7fde8929a0e57afb14b3547', 'loadClassLoader'));

        $vendorDir = dirname(__DIR__);
        $baseDir = dirname($vendorDir);

        $map = require __DIR__ . '/autoload_namespaces.php';
        foreach ($map as $namespace => $path) {
            $loader->add($namespace, $path);
        }

        $classMap = require __DIR__ . '/autoload_classmap.php';
        if ($classMap) {
            $loader->addClassMap($classMap);
        }

        $loader->register(true);

        require $baseDir . '/library/Zend/Stdlib/compatibility/autoload.php';
        require $baseDir . '/library/Zend/Session/compatibility/autoload.php';

        return $loader;
    }
}
