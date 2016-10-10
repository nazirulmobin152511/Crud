<?php 
class Birthday{
   public $title='';
   public $id='';
   
   
   public function __construct() {
       $conn=  mysql_connect('localhost','root','') or die("Unable to connect db");
       mysql_select_db("php27");
   }


   public function prepare($data=''){
       $this->title=$data['birthday'];
       print_r($this->title);
   }
   public function store(){
        $query= "INSERT INTO `hobbies` (`id`, `hobbi`) VALUES (NULL, ''), (NULL, "
            . "'.$this->title.'"
            . ")";
    mysql_query($query);
   }
}
?>