<?php

class Event
{

    public $description;

    public $id;


    public function show()
    {
        return $this->description;
    }

    public function isComplete()
    {
        return $this->id;
    }

    public function toUpper()
    {
        return strtoupper($this->description);
    }

    public function when()
    {
        return "tommorrow";
    }
}