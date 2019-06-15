<?php
class Database{
  public $host = DB_HOST;
  public $user = DB_USER;
  public $pass = DB_PASS;
  public $dbname = DB_NAME;

  public $link;
  public $error;

  public function __construct(){
      $this->connectDB();
  }

  private function connectDB(){
    $this->link = new mysqli (  $this->host,  $this->user,  $this->pass,  $this->dbname);
    if(!  $this->link){
        $this->error = "Connecction fail" .  $this->link->connect_error;
        return false;
    }
    $this->link->set_charset("utf8"); // for bangla
  }
  //select or read data
  public function select($query){
    $result = $this->link->query($query) or die ($this->link->error.__LINE__);
    if($result->num_rows > 0){
      return $result;
    }else {
      return false;
    }

  }

  public function select1($query){
    $result = $this->link->query($query) or die ($this->link->error.__LINE__);
    if($result){
      return $result;
    }else {
      return false;
    }

  }
  //insert data 

  public function insert($query){

      $inset_row = $this->link->query($query) or die ($this->link->error.__LINE__);

      if($inset_row){

        header("Location:suces.php?msg=".urlencode('successful.'));
        exit();
      }else{

        die("error : (".$this->link->errno.")".$this->link->error);
      }
    }

     //update data 

    public function update($query){

      $update_row = $this->link->query($query) or die ($this->link->error.__LINE__);

      if($update_row){

        header("Location:suces.php?msg=".urlencode('successful.'));
        exit();
      }else{

        die("error : (".$this->link->errno.")".$this->link->error);
      }
    }

    //delete data 

    public function delete($query){

      $delete_row = $this->link->query($query) or die ($this->link->error.__LINE__);

      if($delete_row){

        header("Location:suces.php?msg=".urlencode('successful.'));
        exit();
      }else{

        die("error : (".$this->link->errno.")".$this->link->error);
      }
    }

}

 ?>
