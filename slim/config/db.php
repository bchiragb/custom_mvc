<?php

class DB {
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $dbname = 'slim';

    public function connect(){
        $conn_str = "mysql:host=$this->host;dbname=$this->dbname";
        $conn = new PDO($conn_str, $this->user, $this->pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    }
}

/*

http://127.0.0.1:8000/admin
https://codedamn.com/learn/reactjs
https://codedamn.com/learn/javascript-basics
https://codedamn.com/learn/nextjs-fundamentals
https://www.youtube.com/watch?v=lIjIQp_RxQk&list=PLWCLxMult9xdD3zH8lDbGwlyaCzOR_74F&index=4
https://www.youtube.com/watch?v=uaeKhfhYE0U
https://www.youtube.com/watch?v=oSIv-E60NiU

*/

