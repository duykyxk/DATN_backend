<?php
// 'user' object
class User{

    // database connection and table name
    private $conn;
    private $table_name = "user";

    // object properties
    public $id;
    public $name;
    public $phone;
    public $email;
    public $password;
    public $gender;
    public $address;
    public $roleId;
    // constructor
    public function __construct($db){
        $this->conn = $db;
    }

// create() method will be here
    // create new user record
    function create(){

    // insert query
       $query = "INSERT INTO " . $this->table_name . "
       SET
       email = :email,
       password = :password,
       roleId = :roleId,
       gender = :gender,
       name = :name,
       phone = :phone,
       address = :address"
       ;

    // prepare the query
       $stmt = $this->conn->prepare($query);

    // sanitize
       $this->email=htmlspecialchars(strip_tags($this->email));
       $this->password=htmlspecialchars(strip_tags($this->password));
       $this->gender=htmlspecialchars(strip_tags($this->gender));
       $this->roleId=htmlspecialchars(strip_tags($this->roleId));
       $this->name=htmlspecialchars(strip_tags($this->name));   
       $this->phone=htmlspecialchars(strip_tags($this->phone));
       $this->address=htmlspecialchars(strip_tags($this->address));


    // bind the values
       $stmt->bindParam(':roleId', $this->roleId);
       $stmt->bindParam(':name', $this->name);
       $stmt->bindParam(':phone', $this->phone);
       $stmt->bindParam(':email', $this->email);
       $stmt->bindParam(':gender', $this->gender);
       $stmt->bindParam(':address', $this->address);
       

    // hash the password before saving to database
       $password_hash = password_hash($this->password, PASSWORD_BCRYPT);    
       $stmt->bindParam(':password', $password_hash);

    // execute the query, also check if query was successful
       if($stmt->execute()){
        return true;
    }

    return false;
}
// check if given email exist in the database
function emailExists(){
 
    // query to check if email exists
    $query = "SELECT *
            FROM " . $this->table_name . ", `role`
            WHERE email like ? and `user`.`roleId`=`role`.`id`
            LIMIT 0,1";
 
    // prepare the query
    $stmt = $this->conn->prepare( $query );
 
    // sanitize
    //$this->email=htmlspecialchars(strip_tags($this->email));
 
    // bind given email value
    $stmt->bindParam(1, $this->email);
 
    // execute the query
    $stmt->execute();
 
    // get number of rows
    $num = $stmt->rowCount();
 
    // if email exists, assign values to object properties for easy access and use for php sessions
    if($num>0){
 
        // get record details / values
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
 
        // assign values to object properties
        $this->id = $row['id'];
        $this->name = $row['name'];
        $this->phone = $row['phone'];
        $this->password = $row['password'];
        $this->address = $row['address'];
        $this->gender = $row['gender'];
        $this->roleId = $row['roleId'];
 
 
        // return true because email exists in the database
        return true;
    }
 
    // return false if email does not exist in the database
    return false;
}
 
// update() method will be here
}