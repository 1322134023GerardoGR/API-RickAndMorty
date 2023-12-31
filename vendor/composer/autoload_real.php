<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitd925bef689dc8abe3f1e34868bc901b5
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitd925bef689dc8abe3f1e34868bc901b5', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitd925bef689dc8abe3f1e34868bc901b5', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitd925bef689dc8abe3f1e34868bc901b5::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
