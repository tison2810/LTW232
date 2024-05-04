<?php

require_once "User.php";

class UserRepository
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function findAll()
    {
        $sql = "SELECT * FROM users";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $usersData = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $users = [];
        foreach ($usersData as $userData) {
            $users[] = $this->createUserFromData($userData);
        }

        return $users;
    }

    public function findById($id)
    {
        $sql = "SELECT * FROM users WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $userData = $stmt->fetch(PDO::FETCH_ASSOC);
        return $this->createUserFromData($userData);
    }

    // public function findByEmail($email)
    // {
    //     $sql = "SELECT * FROM KhachHang WHERE Email = :email";
    //     $stmt = $this->conn->prepare($sql);
    //     $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    //     $stmt->execute();
    //     $userData = $stmt->fetch(PDO::FETCH_ASSOC);

    //     if ($userData) {
    //         return $this->createUserFromData($userData);
    //     }
    //     return null;
    // }

    public function findByEmail($email)
    {
        $sql = "SELECT * FROM khachhang WHERE Email = :email";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();
        $userData = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($userData) {
            // if ($userData) {
            //     print_r($userData);
                // Or if you want formatted output:
                // echo '<pre>', print_r($userData, true), '</pre>';
            // }
            return $this->createUserFromData($userData);
        }
        return null;
    }

    private function createUserFromData($data)
    {
        return new User(
            $data['ID'],
            $data['HoTen'],
            $data['Email'],
            $data['MatKhau'],
            $data['SoDienThoai'],
            $data['Diachi']
        );
    }

    public function updateAdmin(User $user)
    {
        $sql = "UPDATE users SET 
            name = :name, 
            email = :email, 
            phone = :phone, 
            address = :address, 
            -- role = :role 
            WHERE id = :id";
        $stmt = $this->conn->prepare($sql);

        $id = $user->getId();
        $name = $user->getName();
        $email = $user->getEmail();
        $phone = $user->getPhone();
        $address = $user->getAddress();
        // $role = $user->getRole();

        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':phone', $phone, PDO::PARAM_STR);
        $stmt->bindParam(':address', $address, PDO::PARAM_STR);
        // $stmt->bindParam(':role', $role, PDO::PARAM_STR);
        $stmt->execute();
    }

    public function updateUser(User $user)
    {
        $sql = "UPDATE khachhang SET 
        HoTen = :name, 
        MatKhau = :password,
        SoDienThoai = :phone, 
        Diachi = :address
        WHERE ID = :id";

        $stmt = $this->conn->prepare($sql);

        $id = $user->getId();
        $name = $user->getName();
        $password = $user->getPassword();
        $phone = $user->getPhone();
        $address = $user->getAddress();


        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR);
        $stmt->bindParam(':phone', $phone, PDO::PARAM_STR);
        $stmt->bindParam(':address', $address, PDO::PARAM_STR);
        $stmt->execute();
    }

    public function deleteUser(User $user)
    {
        $sql = "DELETE FROM users WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $user->getId(), PDO::PARAM_INT);
        $stmt->execute();
    }



    public function createUser($name, $email, $password, $phone, $address)
    {
        $sql = "INSERT INTO khachhang (HoTen, Email, MatKhau, SoDienThoai, Diachi) VALUES (:name, :email, :password, :phone, :address)";
        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR);
        $stmt->bindParam(':phone', $phone, PDO::PARAM_STR);
        $stmt->bindParam(':address', $address, PDO::PARAM_STR);
        // $stmt->bindParam(':role', $role, PDO::PARAM_STR);

        return $stmt->execute();
    }
}


?>