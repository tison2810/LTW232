<?php  

require_once 'RBAC.php';
class User {
    private $id;
    private $name;
    private $email;
    private $password;
    private $phone;
    private $address;
    // private $role;
    // private $createdAt;
    // private $updatedAt;

    public function __construct($id, $name, $email, $password, $phone, $address) {
        $this->id = $id;
        $this->setName($name);
        $this->setEmail($email);
        $this->setPassword($password);
        $this->setPhone($phone);
        $this->setAddress($address);
        // $this->setRole($role);
        // $this->createdAt = $createdAt;
        // $this->updatedAt = $updatedAt;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function getAddress() {
        return $this->address;
    }

    // public function getRole() {
    //     return $this->role;
    // }

    // public function getCreatedAt() {
    //     return $this->createdAt;
    // }

    // public function getUpdatedAt() {
    //     return $this->updatedAt;
    // }

    // public function setRole($role) {
    //     if (!Role::isValidRole($role)) {
    //         throw new InvalidArgumentException("Invalid role provided");
    //     }
    //     $this->role = $role;
    // }

    public function toString() {
        $output = "";
        $output .= "ID: " . $this->id . "\n";
        $output .= "Name: " . $this->name . "\n";
        $output .= "Email: " . $this->email . "\n";
        $output .= "Phone: " . $this->phone . "\n";
        $output .= "Address: " . $this->address . "\n";
        // $output .= "Role: " . $this->role . "\n";
        // $output .= "Created At: " . $this->createdAt . "\n";
        // $output .= "Updated At: " . $this->updatedAt . "\n";
        return $output;
    }
    
    public function setName($name) {
        if (strlen($name) < 3 || strlen($name) > 50) {
            throw new InvalidArgumentException("Name must be between 3 and 50 characters");
        }
        $this->name = $name;
    }

    public function setEmail($email) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($email) > 100) {
            throw new InvalidArgumentException("Invalid email address or email address exceeds 100 characters");
        }
        $this->email = $email;
    }

    public function setPassword($password) {
        if (strlen($password) < 8 || strlen($password) > 100) {
            throw new InvalidArgumentException("Password must be between 8 and 100 characters");
        }
        $this->password = $password;
    }

    public function setPhone($phone) {
        if (strlen($phone) > 20) {
            throw new InvalidArgumentException("Phone number must not exceed 20 characters");
        }
        $this->phone = $phone;
    }

    public function setAddress($address) {
        if (strlen($address) > 100) {
            throw new InvalidArgumentException("Address must not exceed 100 characters");
        }
        $this->address = $address;
    }
}

?>