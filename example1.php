<?php

/**
 * @author Michael Vietluzhskykh
 * @param string $message
 * @return void
 */
function log($message) {
    echo "This is a log message:\t" . $message . "\n";
}

/**
 * @author Michael Vietluzhskykh
 */
class Animal
{
    /**
     * @var string
     */
    private $name;
    
    /**
     * @param string name
     * @return void
     */
    public function __construct($name) {
        $this->name = name;
    }

    /**
     * @return string
     */
    public function className() {
        return "Animal";
    }

    /**
     * @return string
     */
    public function getName() {
        return $this->name;
    }
}

/**
 * @author Michael Vietluzhskykh
 */
class Dog extends Animal
{    
    /**
     * @param string name
     * @return void
     */
    public function __construct($name) {
        // parent::__construct($name);
    }

    /**
     * @return string
     */
    public function className() {
        return "Dog";
    }

    /**
     * @return string
     */
    public function say() {
        return "woof";
    }
}

/**
 * @author Michael Vietluzhskykh
 */
class Cat extends Animal
{
    /**
     * @param string name
     * @return void
     */
    public function __construct($name) {
        // parent::__construct($name);
    }

    /**
     * @return string
     */
    public function className() {
        return "Cat";
    }

    /**
     * @return string
     */
    public function say() {
        return "meow";
    }
}