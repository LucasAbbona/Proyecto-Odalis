<?php
class Connection{
    private $host="localhost";
    private $user='root';
    private $psw='';
    private $dbname="odalisaltacostura";
    protected function Connect(){
    return mysqli_connect($this->host,$this->user,$this->psw,$this->dbname);
    }
}