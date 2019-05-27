<?php

trait Singleton
{
    final private function __construct()
    {
    }

    final protected function __clone()
    {
    }

    final protected function __wakeup()
    {
    }

    public static function getInstance()
    {
        static $instance = null;
        if (!$instance) {
            $instance = new self();
        }

        return $instance;
    }
}
class TestSingleton
{
    use Singleton;
    private static $some_settings = [];

    public function setSettings($settings)
    {
        self::$some_settings = $settings;
    }

    public function getSettings()
    {
        return implode(', ', self::$some_settings);
    }
}
$settings = array(
    'key1' => 'value1',
    'key2' => 'value2',
    'key3' => 'value3',
    'key4' => 'value4',
    );
TestSingleton::getInstance()->setSettings($settings);
var_dump(TestSingleton::getInstance()->getSettings());