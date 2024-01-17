<?php

class Post extends ActiveRecord
{

    static protected $db_table = "posts";
    // static protected $db_table_users = "users";

    public $id;
    protected $user_id;
    public $title;
    public $text;
    public $published;
    public $featured_image;
    protected $time_published;
    protected $time_created;

    function getPublishedInfo()
    {
        return $this->published;
    }

    function getUserId()
    {
        return $this->user_id;
    }
}
