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
        $sql = "SELECT * FROM nguoidung";
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
        $sql = "SELECT * FROM nguoidung WHERE ID = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $userData = $stmt->fetch(PDO::FETCH_ASSOC);
        return $this->createUserFromData($userData);
    }

    public function findByEmail($email)
    {
        $sql = "SELECT * FROM nguoidung WHERE Email = :email";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();
        $userData = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($userData) {
            return $this->createUserFromData($userData);
        }
        return null;
    }

    public function findByEmailAdmin($email)
    {
        $sql = "SELECT * FROM nhanvien WHERE Email = :email";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();
        $userData = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($userData) {
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
            $data['Diachi'],
            $data['Role']
        );
    }

    public function updateAdmin(User $user)
    {
        $sql = "UPDATE nguoidung SET 
            HoTen = :name, 
            Email = :email, 
            SoDienThoai = :phone, 
            Diachi = :address, 
            role = :role 
            WHERE ID = :id";
        $stmt = $this->conn->prepare($sql);

        $id = $user->getId();
        $name = $user->getName();
        $email = $user->getEmail();
        $phone = $user->getPhone();
        $address = $user->getAddress();
        $role = $user->getRole();

        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':phone', $phone, PDO::PARAM_STR);
        $stmt->bindParam(':address', $address, PDO::PARAM_STR);
        $stmt->bindParam(':role', $role, PDO::PARAM_STR);
        $stmt->execute();
    }

    public function updateUser(User $user)
    {
        $sql = "UPDATE nguoidung SET 
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
        $sql = "DELETE FROM nguoidung WHERE ID = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $user->getId(), PDO::PARAM_INT);
        $stmt->execute();
    }



    public function createUser($name, $email, $password, $phone, $address, $role)
    {
        $sql = "INSERT INTO nguoidung (HoTen, Email, MatKhau, SoDienThoai, Diachi, Role) VALUES (:name, :email, :password, :phone, :address, :role)";
        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR);
        $stmt->bindParam(':phone', $phone, PDO::PARAM_STR);
        $stmt->bindParam(':address', $address, PDO::PARAM_STR);
        $stmt->bindParam(':role', $role, PDO::PARAM_STR);

        return $stmt->execute();
    }
}


?>