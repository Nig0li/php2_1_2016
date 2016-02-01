<?php

namespace Model\table;

use Model\Ancestor;
use Model\Db;

class News extends Ancestor
{
    const TABLE = 'news';

    protected $id;
    protected $title;
    protected $text;
    //protected $autor;

    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getText()
    {
        return $this->text;
    }

    public static function getThreeLastRecord(int $limit)
    {
        $sql = 'SELECT * FROM ' . static::TABLE . ' ORDER BY id DESC LIMIT ' . $limit;
        //var_dump($sql);
        $db = new Db();
        return $db->query($sql, static::class);
    }

}