<?php


class User {
    private $conn;
    public static function singup($Username, $Password, $email, $phone)
{

    $Password = md5(strrev(md5($Password))); // Security through obscurity

    $conn = Database::getConnction();


    $sql = "INSERT INTO `auth` (`id`, `username`, `password`, `email`, `phone`, `blocked`, `active`) 
VALUES (NULL, '$Username', '$Password', '$email', '$phone', '0', '0')";

    $error = false;

    if ($conn->query($sql) === TRUE) {
        $error = false;
    } else {
        //echo "Error: " . $sql . "<br>" . $conn->error;
        $error = $conn->error;
    }

    $conn->close();

    return $error;

}

public static function login($Username, $Password)
    {
        $Password = md5(strrev(md5($Password)));
        $query = "SELECT * FROM auth WHERE username = '$Username' ";
        $conn = Database::getConnction();
        //print("Executing query: $query.\n");
        $result = $conn->query($query);
       // print("Query executed. Number of rows: " . $result->num_rows . "\n");
       
        if ($result->num_rows == 1) {

            $row = $result->fetch_assoc();
            //print_r($row['password'] . "\n");
            //print($Password . "\n");
            if ($row['password'] == $Password) {
                //print("Password match.\n");
                return $row;        /////////////////////////changed //////////////-------------------------
            } else {
                print("Password does not match.\n");
                return false;
            }
        }else {
            return false;
            echo "no query result";

        }

    }

public function __construct($Username){
    $this->conn = Database::getConnction();
    $this->conn->query();

}

public static function authentication()
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

public static function setAvatar()
{

}

}


?>