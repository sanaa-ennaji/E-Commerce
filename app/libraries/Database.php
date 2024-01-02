<?php
//PDO Database Class
class Database{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;

    private $dbh;
    private $stmt;
    private $error;
    private static $_instance ;


    public function __construct(){
        $con = new PDO("mysql:host = $this->host",$this->user, $this->pass);
        $sql = 'CREATE DATABASE IF NOT EXISTS Ecommerce';
        $con->exec($sql);


        $dsn = 'mysql:host='. $this->host . ';dbname='. $this->dbname;
        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            echo $this->error;
        }
    }

    public static function getInstance(){

        if (is_null(self::$_instance)) {

            self::$_instance = new self();
        }
        
        return self::$_instance;

    }


    //Prepare statement
    public function exec($sql){
        $this->stmt = $this->dbh->exec($sql);
    }
    public function query($sql){
        $this->stmt = $this->dbh->prepare($sql);
    }

    //Bind values
    public function bind($params, $value, $type = null){
        if(is_null($type)){
            switch(true){
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }

        $this->stmt->bindValue($params, $value, $type);

    }
    //execute prepared stmt
    public function execute(){
       return $this->stmt->execute();
    }

    //Fetchall
    public function resultSet(){
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);     
    }

    //Fetch one
    public function single(){
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }

    //Row count
    public function rowCount(){
        return $this->stmt->rowCount();
    }

}

?>

