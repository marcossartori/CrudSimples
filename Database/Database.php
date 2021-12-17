<?php




class DBConnection extends PDO
{
    private $host = "127.0.0.1";
    private $dbname = "teste";
    private $username = "root";
    private $password = "dhcp3229";
    //public  $conn;
    public function __construct()
    {
        parent::__construct("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
        $this->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // always disable emulated prepared statement when using the MySQL driver
        $this->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }
}

