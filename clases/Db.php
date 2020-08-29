<?php

class Db
{
    public $db;

    public function __construct($var)
    {
        $this->db = new mysqli($var['DB_HOST'], $var['DB_USER'], $var["DB_PASS"], $var['DB_NAME'], $var['DB_PORT']);
    }

    public function getResult($query){

        return $this->db->query($query);
    }

    public function getDataArray($query, $var){

        $data = array();

        $mysql = new mysqli($var['DB_HOST'], $var['DB_USER'], $var["DB_PASS"], $var['DB_NAME'], $var['DB_PORT']);

        $res = $mysql->query($query);

        while ($row = $res->fetch_assoc()) {
            $data[]=$row;
        }

        $mysql->close();

        return $data;
    }
}