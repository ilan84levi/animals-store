<?php

class cats {

    public $id;
    public $name;
    public $color;
    public $age;

    public function __construct($id, $name, $color, $age) {
        $this->id = $id;
        $this->name = $name;
        $this->color = $color;
        $this->age = $age;
    }

}
