<?php
namespace crud\seip36\email;

use PDO;

class email {
    
     public $id = '';
     
    public $title = "";
    public $laptop = "";
    public $data = '';
    public $user = 'root';
    public $pw = '';
    public $conn = '';

    
    
    public function __construct(){
        session_start();
        $this->conn = new PDO('mysql:host=localhost;dbname=test1', $this->user, $this->pw);
        
        //echo "<pre>";
//       $conn = mysql_connect("localhost", 'root', '')or die('unable to connect db');
//       mysql_select_db("test1") or die('unable to select db');
    }
    
    public function prepare($data=''){
        if(array_key_exists('mobile_model', $data)){
        $this->title = $data['mobile_model'];
        }
        if(array_key_exists('laptop_model',$data)){
           $this->laptop = $data['laptop_model'];
       }
         if(array_key_exists('id', $data)){
        $this->id = $data['id'];
        }
        return $this;
    }
    
    public function store(){
        
         try {
            $query = "INSERT INTO `pdoemail` (`id`, `mobile`, `laptop`) VALUES (NULL, :title, :la)";
            $stmt = $this->conn->prepare($query);
            $stmt->execute(array(
                ':title' => $this->title,
                ':la' => $this->laptop,
                
            ));
            header('location:index.php');
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
        
//        $query = "INSERT INTO `emails` (`id`, `emailad`) VALUES (NULL, "
//                . "'".$this->title."'"
//                . ")";
//        if( mysql_query($query)){
//            $_SESSION['message']="<h1>successfully submited</h1>";
//            header('location:create.php');
//        }
// else {
//     echo "not submited";
// }
// return $this;
    }
    
    public function index(){
         try{
            $query = "SELECT * FROM `pdoemail`";
            $q = $this->conn->query($query) or die('Unable to query');
            while ($row = $q->fetch(PDO::FETCH_ASSOC)){
                $this->data[] = $row;
            }
        } catch (Exception $ex) {
           echo 'Error: ' . $e->getMessage();

        }
        return $this->data;
        return $this;
    }
    
    public function show(){
       $query = "SELECT * FROM `pdoemail` WHERE id=".$this->id;
       
            $q=$this->conn->query(($query)) or die("error query");
                return $q->fetch(PDO::FETCH_ASSOC);
         }       
       //return $this;
    
    
    public function update(){
       try {
  $pdo = new PDO('mysql:host=localhost;dbname=test1', $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
  $stmt = $pdo->prepare('UPDATE pdoemail SET mobile = :name, laptop= : WHERE id = :id');
  $stmt->execute(array(
    ':id'   =>$this->id,
    ':name' => $this->name
  ));
   
  echo $stmt->rowCount(); // 1
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
    }
    public function delete(){
         try {
                $pdo = new PDO('mysql:host=localhost;dbname=someDatabase', $username, $password);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $stmt = $pdo->prepare('DELETE FROM pdoemail WHERE id = :id');
                $stmt->bindParam(':id',$this->id); // this time, we'll use the bindParam method
                $stmt->execute();

                echo $stmt->rowCount(); // 1
              } catch(PDOException $e) {
                echo 'Error: ' . $e->getMessage();
              }
    }
   
}

