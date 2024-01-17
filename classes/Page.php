<?php

class Page extends ActiveRecord
{

    static protected $db_table = "pages";

    public $id;
    public $title;
    public $text;
    public $published;
    public $time_published;
    public $time_created;
    public $sort_order;
}
