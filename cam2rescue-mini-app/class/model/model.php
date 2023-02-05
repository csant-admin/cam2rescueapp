<?php
    class InsertModel extends Config {

        protected function insertDetail($lastname, $firstname, $birthday, $gender, $address, $contact, $username, $password) {
            $sql = "insert into user (`lastname`, `firstname`, `birthday`, `gender`, `address`, `contact`, `email`, `password`) values(?,?,?,?,?,?,?,?)";
            $stmt = $this->connect()->prepare($sql);
            try{
                $stmt->execute([$lastname, $firstname, $birthday, $gender, $address, $contact, $username, $password]);
                return $stmt;
            }catch(PDOException $e) {
                echo "ERROR : " . $e->getMessage();
            }
        }
    }

    class SeachModel extends Config {

        protected function searchUserCred($email, $password) {
            $sql = "select * from user where email = ? and password = ?";
            $stmt = $this->connect()->prepare($sql);
            try{
                $stmt->execute([$email, $password]);
                return $stmt;
            }catch(PDOException $e) {
                echo "ERROR : " . $e->getMessage();
            }
        }
    }

    class UpdateModel extends Config {
        
        protected function updateUserProfile($lastname, $address, $contact, $email, $password) {
            $sql = "update user set lastname = ?, address = ?, contact= ?, email = ?, password = ?";
            $stmt = $this->connect()->prepare($sql);
            try{
                $stmt->execute([$lastname, $address, $contact, $email, $password]);
                return $stmt;
            }catch(PDOException $e) {
                echo "ERROR : " . $e->getMessage();
            }
        }
    }

    class DeleteModel extends Config {
        protected function deleteAccount($id) {
            $sql = "delete from user where id = ?";
            $stmt = $this->connect()->prepare($sql);
            try{
                $stmt->execute([$id]);
                return $stmt;
            }catch(PDOException $e) {
                echo "ERROR : " . e->getMessage();
            }
        }
    }
?>