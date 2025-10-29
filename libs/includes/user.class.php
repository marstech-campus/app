<?php


class User {
    private $conn;
   // private static $salt = "auths@lt#123hdvdjvjk"; // Security through obscurity
    public static function singup($Username, $Password, $email, $phone)
{

   // $Password = md5(strrev(md5($Password)). User::$salt); // Security through obscurity
        $options = [
    // Increase the bcrypt cost from 12 to 13.
    'cost' => 9,
    ];
    $Password = password_hash($Password, PASSWORD_BCRYPT, $options);

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
        //$Password = md5(strrev(md5($Password)). User::$salt); // Security through obscurity
        $query = "SELECT * FROM auth WHERE username = '$Username' ";
        $conn = Database::getConnction();
        //print("Executing query: $query.\n");
        $result = $conn->query($query);
       // print("Query executed. Number of rows: " . $result->num_rows . "\n");
       
        if ($result->num_rows == 1) {

            $row = $result->fetch_assoc();
            //print_r($row );
            //print($Password . "\n");
            if (password_verify($Password, $row['password'])) {
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