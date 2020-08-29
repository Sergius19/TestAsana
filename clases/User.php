<?php

class User
{
    public function addUser($name, $password, $email, $var){

        $query="INSERT INTO users ( name, password, email ) VALUES( '$name', '$password', '$email' )";
        $db = new Db($var);
        $result = $db->getResult($query, $var);

        if($result){

            return [
                "status" => "success",
                "message" => "Account Successfully Created"
            ];

        } else {

            return [
                "status" => "danger",
                "message " => "Failed to insert data information!"
            ];
        }
    }


    public static function getUserByName($name, $var){

        $query="SELECT * FROM users WHERE name='$name'";
        $db = new Db($var);
        $result = $db->getDataArray($query, $var);

        return $result[0];
    }


    public static function updateUser($id, $name, $password, $email, $path, $file_name, $var){

        $query="UPDATE users SET name='$name', email='$email', password='$password',`image` = '$path', `image_file_name`='$file_name'  WHERE id='$id'";
        $db = new Db($var);
        $result = $db->getResult($query, $var);

        if($result){

            return [
                "status" => "success",
                "message" => "Account Successfully Updated"
            ];
        } else {

            return [
                "status" => "danger",
                "message " => "Failed to insert data information!"
            ];
        }
    }

}
