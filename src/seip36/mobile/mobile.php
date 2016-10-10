<?php 
namespace crud\seip36\prac19;
use PDO;
class Mobile{
    public $id = '';
    public $title = '';
    public $data = '';
    public $conn = '';

    public function __construct() {
        //echo "<pre>";
        session_start();
        
        $conn = mysql_connect('localhost','root','') or die("unable to conect databse");
        mysql_select_db("php27") or die("unable to select database");
    }
    
    
    public function prepare($data=''){
        //print_r($data);
        ///die();
       if(array_key_exists('mobile_model',$data)){
           $this->title=$data['mobile_model'];
       }
        if(array_key_exists('id',$data)){
           $this->id=$data['id'];
        }
         return $this;
    }
    
    public function store(){
        //print_r($this->title);
        
        
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=someDatabase', $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $pdo->prepare('INSERT INTO mobiles VALUES(:n)');
            $stmt->execute(array(
              ':n' =>$this->name
            ));

            # Affected Rows?
            echo $stmt->rowCount(); // 1
          } catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        
        
//        $query="INSERT INTO `mobiles` (`id`, `name`) VALUES (NULL, '".$this->title."')";
//       
//        if( mysql_query($query)){
//           echo "</br>"."success fully submitted",'<a href="create.php"> Add another one</a>';
//            
//            $_SESSION['Message']="<h1>success fully submitted</h1>";
//                    header('location:index.php');
//        }
//       else {
//          echo "opps successfully not submitted";
// }
//          return $this;
    }
}
    public function index(){
        //$data = '';
        
        try{
            $query = "SELECT * FROM 'mobiles'";
            $q = $this->conn->query($query) or die('Unable to query');
            while ($row = $q->fetch(PDO::FETCH_ASSOC)){
                $this->data[] = $row;
            }
        } catch (Exception $ex) {
           // echo ;

        }
        return $this->data;
        return $this;
    
    }
//        $query= "SELECT * FROM `mobiles` ";
//      $result = mysql_query($query);
//      
//       while($row = mysql_fetch_assoc($result)){
//           $this->data[]=$row;
//       }
//        return $this->data;
   
    public function show(){
        
        $query = "SELECT * FROM 'mobiles' WHERE id=".$this->id;
            $q=$this->conn()->query(($query)) or die("error query");
                return $q->fetch(PDO::FETCH_ASSOC);
         }             

   public function delete(){
        
        try {
  $pdo = new PDO('mysql:host=localhost;dbname=someDatabase', $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
  $stmt = $pdo->prepare('DELETE FROM mobiles WHERE id = :id');
  $stmt->bindParam(':id',$this->id); // this time, we'll use the bindParam method
  $stmt->execute();
   
  echo $stmt->rowCount(); // 1
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
        
        

    }
     public function update(){
         
         
         $name = "Joe the Plumber";
 
try {
  $pdo = new PDO('mysql:host=localhost;dbname=test1', 'root', '');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
  $stmt = $pdo->prepare('UPDATE someTable SET name = :name WHERE id = :id');
  $stmt->execute(array(
    ':id'   =>$this->id,
    ':name' => $this->name
  ));
   
  echo $stmt->rowCount(); // 1
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
         
    }   
}
