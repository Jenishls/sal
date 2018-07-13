<?php
class Connection
{
    private $host;
    private $user;
    private $password;
    private $database;
    private $connect;

    function __construct()
    {
        $this->host = "localhost";
        $this->user = "root";
        $this->password = "";
        $this->database = "sal";
        $this->connect = $this->getConnection();
    }

    function getConnection()
    {
        $this->connect = new mysqli($this->host,$this->user,$this->password,$this->database);
        if($this->connect->connect_error)
        {
            die("Error :" .$this->connect->error);
        }
        else
        {
            return $this->connect;
        }
    }

    function Iud($sql)
    {
        if($this->connect->query($sql) == FALSE)
        {
            die("Error :". $this->connect->error);
        }
        else
        {
            return true;
        }
    }

    function getData($sql)
    {
        $data = [];
        $result = $this->connect->query($sql);
       if($result->num_rows > 0)
        {
            while($row = $result->fetch_assoc())
            {
                $data[] = $row;
            }
        }
        
        return $data;
    
    }

    // function checkUsername($sql)
    // {
    //     $res= $connect->query($sql);
    //     return $count = $res->num_rows;
    // }

}


?>