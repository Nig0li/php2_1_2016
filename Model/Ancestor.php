<?php

namespace Model;


abstract class Ancestor
{
    const TABLE = '';

    public static function findAll()
    {
        $sql = 'SELECT * FROM ' . static::TABLE;
        //var_dump($sql);
        $db = new Db();
        return $db->query($sql, static::class);
    }

    public static function findById(int $id) //тест метода в /tests/test.php - строка 93
    {
        //var_dump($id);
        $sql = 'SELECT * FROM ' . static::TABLE . ' WHERE id=:id';
        //var_dump($sql);
        $mass = [
            ':id' => $id,
        ];
        $db = new Db();
        $res = $db->query($sql, static::class, $mass);
        //var_dump($res);
        if (null == $res) {
            return false;
        } else {
            foreach ($res as $record) {
                return $record;
            }
        }
    }
}