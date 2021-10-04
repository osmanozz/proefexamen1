<?php

class database{
    private $host;
    private $username;
    private $password; 
    private $database;
    private $dbh;

    public function __construct(){
        $this->host = 'localhost';
        $this->username = 'root';
        $this->password = 'Osmanosman1.';
        $this->database = 'morefish';

        try {
            $dsn = "mysql:host=$this->host;dbname=$this->database";
            $this->dbh = new PDO($dsn, $this->username, $this->password);

        } catch (PDOException $exception) {
            die("Connection failed!-> ".$exception.getMessage());
        }
    }
        
       public function insert($sql, $placeholder, $location=NULL) {

        try {
            $this->dbh->beginTransaction();
            $stmt = $this->dbh->prepare($sql);
            $stmt->execute($placeholder);
            $this->dbh->commit();

        } catch(Expection $e) {
            $this->pdo->rollback();
            throw $e;
        }
       }

       public function login($username, $password) {

            $sql = "SELECT id, username, password FROM medewerker WHERE username= :username";
            $stmt = $this->dbh->prepare($sql);

            $stmt->execute([
                'username'=> $username
            ]);

            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if(!is_null($result)){

                if($username && password_verify($password, $result['password'])){

                    session_start();
                    $_SESSION['id'] = $result['medewerkercode'];
                    $_SESSION['username'] = $result['username'];
                    $_SESSION['is_logged_in'] = true;
                    
                    header("location: overzicht-amsterdam.php");
    
                }else{
                    echo 'Username or password is incorrect.';
                }
       }
    }

    public function select($sql, $placeholder = []){
        $stmt = $this->dbh->prepare($sql);
        $stmt->execute($placeholder);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        if(!empty($result)){
            return $result;
        }

        return;
    }

    public function edit($sql, $placeholder, $file) {
        $stmt = $this->dbh->prepare($sql);
        $stmt->execute($placeholder);
        header("location: " . $file);
    }
    
    public function delete($sql, $placeholder, $file) {

        $statement = $this->dbh->prepare($sql);
        $statement->execute($placeholder);
        header("location: " . $file);
        exit;
    }
}


    ?>