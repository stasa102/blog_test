<?php

class Category extends ActiveRecord
{

    static protected $db_table = "categories";

    public $id;
    public $name;
    public $published;



    function getCategoryPublishedInfo()
    {
        return $this->published;
    }
}
