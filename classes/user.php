<?php
include "Database.php";

class User extends Database {

    #CREATE
    public function create ($first_name,$last_name,$username,$password){

        $password = password_hash($password,PASSWORD_DEFAULT);

        # SQL
        $sql = "INSERT INTO users(first_name,last_name,username,password) VALUES
        ('$first_name','$last_name','$username','$password')";

        #Execution
        if($this->conn->query($sql)){
            header("location: ../views");  //go to index.php inside the views folder
            exit;                         //same as die
        }else{
            die("Error creating user: " . $this->conn->error);
            //die - terminate the current script + show a message
        }

    }

    #LOGIN
    public function login ($username,$password){

        $sql = "SELECT * FROM users WHERE username = '$username'";

        if($result = $this->conn->query($sql)){
            //Check if the username is exiting
            if($result->num_rows == 1){
                //Check if the password is correct
                $row = $result->fetch_assoc();
                //$row is an associative array
                //prin_r($row);
                if(password_verify($password,$row['password'])){
                //SESSION --> save data to your conputer (temporary)
                    session_start();
                    $_SESSION['user_id'] = $row['id'];
                    $_SESSION['username'] =$row['username'];
                    $_SESSION['full_name'] = $row['first_name'] . " ". $row['last_name'];
                    header("location: ../views/dashboard.php");
                    exit;
                }else{
                    die("Password Error: " . $this->conn->error);
                }
            }else{
                die("Error: unfound username: " . $this->conn->error);
            }
        }else{
            die("Qeury error. " .$this->conn->error);
        }
    }


    #READ ALL
    public function getAllUser(){
        $user_id = $_SESSION['user_id'];
        // echo $user_id;

        $sql = "SELECT `id`, first_name, last_name, username FROM users WHERE id != $user_id";
        echo $sql;
        if($result = $this->conn->query($sql)){
             return $result;
         }else{
            die("Error: displaying users" . $this->conn->error);
        }
    }

    #READ 1
    public function getUser($user_id){
        $sql = "SELECT * FROM users WHERE id = '$user_id'";

        if($result = $this->conn->query($sql)){
            return $result->fetch_assoc();
        }else{
            die("Error: displaying user_id" . $this->conn->error);
        }
    }

    #UPDATE
    public function updateUser($user_id,$first_name,$last_name,$username){
        $sql = "UPDATE users SET first_name = '$first_name', last_name = '$last_name', username = '$username' WHERE id = $user_id";

        if($this->conn->query($sql)){
            header("location: ../views/dashboard.php");
            exit;
        }else {
            die("Error updating user: " . $this->conn->error);
        }
    }

    #DELETE
    public function deleteUser($user_id){
        $sql = "DELETE FROM users WHERE id = '$user_id'";

        if($this->conn->query($sql)){
            header("location: ../views/dashboard.php");
            exit;
        }else{
            die("Error: deleting users" . $this->conn->error);
        }
    }
}