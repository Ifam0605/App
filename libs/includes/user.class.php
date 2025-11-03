<?php

class user

{
    
    private $conn;
   public static function singup($Username, $email, $Password, $phone)
    {
        
        $Password = md5($Password); // Note: Using md5 for password hashing is not secure. Consider using password_hash() instead.

       // $Password = md5(sha1(md5($Password))); // Double hashing for added security (not recommended, use password_hash instead)
        
        //$Password = password_hash($Password, PASSWORD_BCRYPT); // Final hashing with bcrypt

        //$Password = md5(strrev(md5($Password)));

        $conn = Database::getConnection();
                          

        $sql = "INSERT INTO `auth` (`id`, `username`, `email`, `password`, `phone`, `blocked`, `active`) VALUES (NULL, '$Username', '$email', '$Password', '$phone', '0', '0')";

        $error  = false;



        if ($conn->query($sql) === TRUE) {
            $error = false;
        } else {
            $error = $conn->error;
        }

        $conn->close();
        return $error;
        
    }


    public static function login($Username, $Password){
        $Password = md5($Password); 
        $qury = "SELECT * FROM `auth` WHERE `username` = '$Username'";
        $conn = Database::getConnection();
        $result = $conn->query($qury);

        if($result->num_rows == 1){
            $row = $result->fetch_assoc();
           // print_r($row );
            if($row['password'] === $Password){
                return $row;
        }
        else{
            return false;
        }
    }
    else{
        return false;
    }
}
   

    public function _construct($Username)
    {
        $this->conn = Database::getConnection();
        $this->conn->query();
    }

    public static function authentication ()
    {
        

        
    }

    public static function getBio()
    {
        

        
    }

    public static function setBio()
    {
        

        
    }

    public static function getAvatar()
    {
        

        
    }

    
}