<?php 
class hobies{
    public $id='';
    public $title="";
    public $data = '';
    
    
    public function __construct() {
        //echo "<pre>";
        session_start();
        $conn=  mysql_connect("localhost", "root", "") or die("Unable to connect mysql");
        mysql_select_db("php27") or die("unable to select database");
    }
    
    public function prepare($data=''){
        if(array_key_exists('Hobies_name', $data)){
        $this->title=$data['Hobies_name'];  
        }
        if(array_key_exists('id', $data)){
         $this->id=$data['id'];  
        }
        return $this;
    }
    
    
    public function store(){
        $query = "INSERT INTO `hobbies` (`id`, `name`) VALUES (NULL,
                 '".$this->title."'
                 )";
        if(mysql_query($query)){
           $_SESSION['message']="<h1>Successfully submited</h1>";
           header('location:index.php');
        }
        else {
                echo "Not submited";
             }
             return $this;
    }
    
    public function index(){
        $data = '';
        $query = "SELECT * FROM `hobbies`";
      $result = mysql_query($query);
     
     while($row = mysql_fetch_assoc($result)){
         $data[]=$row;
     }
    
      return $data;
    }
    
    public function show(){
        $query = "SELECT * FROM `hobbies` WHERE id=".$this->id;
      $result = mysql_query($query);
     
     $row = mysql_fetch_assoc($result);
     
      return $row;
      return $this;
    }
    
    public function delete(){
        $query = "DELETE FROM `hobbies` WHERE `hobbies`.`id` =".$this->id;
        $result = mysql_query($query);
        $_SESSION['message']="<h1>Successfully deleted</h1>";
        header('location:index.php');
    }
    
    public function update(){
        $query = "UPDATE `hobbies` SET `name` = '$this->title' WHERE `hobbies`.`id` = ".$this->id;
        $result = mysql_query($query);
        
        return $result;
    }
}
?>