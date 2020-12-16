<?php

/* 
* Данный класс реализует паттерн Singleton,
* король может быть один и только один.
* Полиморфизм реализован с помощью интерфейсов.
* Король может реализовывать различные интерфейсы(поведение),
* но в тоже время всегда оставаться королем.
*/

class King implements Blessable
{
    protected static $instance;
    private $name;

    private function __construct()
    {
        echo "King was born!" . PHP_EOL;
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }

    public static function get_instance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    public function set_name(string $name)
    {
        $this->name = $name;
    }

    public function get_name()
    {
        return $this->name;
    }

    public function greets()
    {
        $class_name = get_class($this);
        echo "Hello! I'm a {$class_name}" . PHP_EOL;
    }

    public function give_a_blessing()
    {
        //Код для благословения
    }
}
