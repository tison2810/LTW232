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
                'message' => 'Error: Email already in use'
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
