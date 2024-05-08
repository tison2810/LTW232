<?php 

require_once 'model/UserRepository.php';
require_once 'model/SessionManager.php';

class AuthenticateService {
    private $userRepository;
    private $sessionManager;

    public function __construct(UserRepository $userRepository, SessionManager $sessionManager) {
        $this->userRepository = $userRepository;
        $this->sessionManager = $sessionManager;
    }

    public function login($email, $password){
        $user = $this->userRepository->findByEmail($email);

        if ($user && password_verify($password, $user->getPassword())) {
            $this->sessionManager->set('user', $user);
            return true;
        }

        return false;
    }
    public function loginAdmin($email, $password){
        $user = $this->userRepository->findByEmailAdmin($email);

        if ($user && password_verify($password, $user->getPassword())) {
            $this->sessionManager->set('user', $user);
            return true;
        }

        return false;
    }


    /**
     * Check if a user with the provided email already exist.
     * 
     * @param string $email
     * @return bool
     */
    private function is_email_exist($email) {
        $user = $this->userRepository->findByEmail($email);
        return $user != null;
    }

    // private function is_username_exist($username) {
    //     $user = $this->userRepository->findByUsername($username);
    //     return $user != null;
    // }


    public function register($name, $email, $password, $phone, $address, $role) {
        if ($this->is_email_exist($email)) {
            return [
                'success' => false,
                'message' => 'Email already in use'
            ];
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($email) > 100) {
            return [
                'message' => 'Invalid email'
            ];
        }
        if (strlen($name) < 3 || strlen($name) > 50) {
            return [
                'message' => 'Name must be between 3 and 50 characters"'];
        }
        if (strlen($password) < 8 || strlen($password) > 100) {
            return [
                'message' => 'Password must be between 8 and 100 characters'
            ];
        }
        if (strlen($phone) != 10) {
            return [
                'message' => 'Phone number must be 10 characters'
            ];
        }
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $createUserResult = $this->userRepository->createUser($name, $email, $hashedPassword, $phone, $address, $role);
    
        return [
            'success' => $createUserResult,
            'message' => $createUserResult ? 'Registration successful' : 'Registration failed'
        ];
    }
    
    public function logout() {
        unset($_SESSION['user']);
    }

    public function isLoggedIn(){
        return isset($_SESSION['user']);
    }

    public function getLoggedInUser(){
        if ($this->isLoggedIn()) {
            return $_SESSION['user'];
        }
        return null;
    }
}


?>
