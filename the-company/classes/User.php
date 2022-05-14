<?php
    require_once "Database.php";

    class User extends Database{

        public function createUser($first_name, $last_name, $username, $password){
            // CREATE THE QUERY
            $sql = "INSERT INTO users (first_name, last_name, username, password) VALUES('$first_name', '$last_name', '$username', '$password')";

            // EXECUTE THE QUERY
            if($this->conn->query($sql)){
                header("location: ../views"); // go to the index.php
                exit;                         // the same as die();
            }else{
                die("Error in creating user " . $this->conn->error);
            }
        }

        public function login($username, $password){
            $sql = "SELECT * FROM users WHERE username = '$username'";

            $result = $this->conn->query($sql);

            if($result->num_rows == 1){
                $user_details = $result->fetch_assoc();

                if(password_verify($password, $user_details['password'])){
                    // CREATE SESSION VARIABLES
                    session_start();

                    $_SESSION['user_id'] = $user_details['id'];
                    $_SESSION['username'] = $user_details['username'];
                    $_SESSION['first_name'] = $user_details['first_name'];
                    $_SESSION['last_name'] = $user_details['last_name'];

                    header("location: ../views/dashboard.php");
                    exit;
                }else{
                    die("Password is incorrect");
                }

            }else{
                die("Username not found");
            }
        }

        public function getAllUsers(){
            $sql = "SELECT id, first_name, last_name, username FROM users";

            if($result = $this->conn->query($sql)){
                while($row = $result->fetch_assoc()){
                    $users[] = $row;
                }

                return $users;
            }else{
                die("Error in retrieving users: ".$this->conn->error);
            }
        }

        public function getSpecificUser($user_id){
            $sql = "SELECT * FROM users WHERE id = '$user_id'";

            if($result = $this->conn->query($sql)){
                return $result->fetch_assoc();
            }else{
                die("Error in retrieving user: ".$this->conn->error);
            }
        }

        public function updateUser($user_id, $first_name, $last_name, $username, $password){
            $sql = "UPDATE users
                    SET first_name = '$first_name',
                        last_name = '$last_name',
                        username = '$username',
                        password = '$password'
                    WHERE id = '$user_id'
                    ";

            if($this->conn->query($sql)){
                header('location: ../views/dashboard.php');
                exit;
            }else{
                die("Error in updating user: ".$this->conn->error);
            }
        }

        public function deleteUser($user_id){
            $sql = "DELETE FROM users WHERE id = '$user_id'";

            if($this->conn->query($sql)){
                header("location: ../views/dashboard.php");
                exit;
            }else{
                die("Error in deleting user: ".$this->conn->error);
            }
        }

        public function uploadPhoto($user_id, $image_name, $tmp_name){
            $sql = "UPDATE users SET photo = '$image_name' WHERE id = '$user_id'";

            if($this->conn->query($sql)){
                $destination = "../assets/images/$image_name";
                if(move_uploaded_file($tmp_name, $destination)){
                    header("location: ../views/profile.php");
                    exit;
                }else{
                    die("Error in moving the photo");
                }
            }else{
                die("Error in uploading photo: ".$this->conn->error);
            }
        }
    }

?>