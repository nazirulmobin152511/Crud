<?php
namespace crud\seip36\prac19;
use PDO;

class prac19 {
   public $id, $title, $phone;

    public function __construct($init=[]){
        if(session_status()!==PHP_SESSION_ACTIVE)session_start();
        if (array_key_exists('id',$init)) {
            if (is_numeric($init['id']))
                $this->id = $this->decrypt($init['id']);
            else $this->id = null;
        }else $_SESSION['Message']['id']="No id";
        if(array_key_exists('title',$init))
        {
            $this->title=$init['title'];
            if(empty($init['title']))
                $_SESSION['Message']['title']="Please fill up Title";
        }else $_SESSION['Message']['title']="Please fill up Title";
        if(array_key_exists('phone',$init))
        {
            $this->phone=$init['phone'];
        }else $_SESSION['Message']['phone']="Please fill up your phone";
      //  return $this;
      //  print_r($this);die();
    }
    public function encrypt($data='')
    {
        return $data*$data*135792468;
    }
    public function decrypt($data='')
    {
        return sqrt($data/135792468);
    }
    public function pdoConnect(){

        try{
            $pdoConnect= new PDO('mysql:host=localhost;dbname=test1','root','');
            $pdoConnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            echo $e->getMessage();
        }

        return $pdoConnect;
    }


    public function store(){
        try{//$pdoConnect= new PDO('mysql:host=localhost;dbname=bitm','root','');
            $q="INSERT INTO classpractries(name,mobile,is-d) VALUES (?,?,?) ";
            $stmt=$this->pdoConnect()->prepare($q);
            $stmt->execute(array($this->title,$this->phone,0)) or die("Error In Insertion");
            header("location:index.php");
        }catch(PDOException $e){
            echo $e->getMessage();
        }

    }
    public function index(){
        try{
            $q=$this->pdoConnect()->query("SELECT * FROM classpractries where is-d=0");
            }catch(PDOException $e){
        echo $e->getMessage();
        }
        return $q->fetchAll(PDO::FETCH_OBJ);
    }
    public function trashed(){
        try{
            $q=$this->pdoConnect()->query("SELECT * FROM classpractries where is_d=1 order by update_time");
        }catch(PDOException $e){
            echo $e->getMessage();
        }
        return $q->fetchAll(PDO::FETCH_OBJ);
    }
    public function show(){
        try{
            $q=$this->pdoConnect()->query("SELECT * FROM classpractries where id=".$this->id);
            }catch(PDOException $e){
        echo $e->getMessage();
        }
        return $q->fetch(PDO::FETCH_OBJ);
    }
    public function edit(){

        try{
            $q="UPDATE classpractries SET title=:title,phone=:phone WHERE id=:id";
            $stmt=$this->pdoConnect()->prepare($q);
            $stmt->execute(array(
                ':title'=>      $this->title,
                ':phone'=>    $this->phone,
                ':id'=>         $this->id
            )) or die("Error In Insertion");
            header("location:index.php");
        }catch(PDOException $e){
            echo $e->getMessage();
        }
        return $q->fetch(PDO::FETCH_OBJ);
    }
    public function trash(){

        try{
            $q="UPDATE classpractries SET is_deleted=:is_deleted,update_time=:update_time WHERE id=:id";
            $stmt=$this->pdoConnect()->prepare($q);
            $stmt->execute(array(
                ':is_deleted'=>      1,
                ':update_time'=>      date_timestamp_set('Y-m-d i:s:u',time()),
                ':id'=>         $this->id
            )) or die("Error In Insertion");
            header("location:index.php");
        }catch(PDOException $e){
            echo $e->getMessage();
        }
        return $q->fetch(PDO::FETCH_OBJ);
    }
    public function restore(){

        try{
            $q="UPDATE classpractries SET is_deleted=:is_deleted WHERE id=:id";
            $stmt=$this->pdoConnect()->prepare($q);
            $stmt->execute(array(
                ':is_deleted'=>      0,
                ':id'=>         $this->id
            )) or die("Error In Insertion");
            header("location:trashed.php");
        }catch(PDOException $e){
            echo $e->getMessage();
        }
        return $q->fetch(PDO::FETCH_OBJ);
    }
    public function delete(){

        try{
            $q="DELETE FROM classpractries WHERE id=:id";
            $stmt=$this->pdoConnect()->prepare($q);
            $stmt->bindParam(':id',$this->id);
            $stmt->execute() or die("Error In Insertion");
            header("location:trashed.php");
        }catch(PDOException $e){
            echo $e->getMessage();
        }
        return $q->fetch(PDO::FETCH_OBJ);
    }

}
