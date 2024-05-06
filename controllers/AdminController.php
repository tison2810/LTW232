<?php
require_once 'model/connection.php';
require_once 'model/SessionManager.php';
require_once 'model/User.php';
require_once 'model/RBAC.php';
require_once 'services/AuthenticationService.php';
require_once 'model/UserRepository.php';
require_once 'middlewares/AuthMiddleware.php';

class AdminController
{
    private $userRepository;
    private $authService;
    private $sessionManager;
    private $authMiddleware;

    public function __construct(UserRepository $userRepository, AuthenticateService $authService, SessionManager $sessionManager, AuthMiddleware $authMiddleware)
    {
        $this->userRepository = $userRepository;
        $this->authService = $authService;
        $this->sessionManager = $sessionManager;
        $this->authMiddleware = $authMiddleware;
    }

    public function index_pro()
    {
        $this->authMiddleware->checkAdmin();
        $sessionManager = $this->sessionManager;
        $userRepository = $this->userRepository;
        $authService = $this->authService;
        $users = $this->userRepository->findAll();
        require_once 'view/profile.php';
    }

    public function index()
    {
        $this->authMiddleware->checkAdmin();
        $sessionManager = $this->sessionManager;
        $userRepository = $this->userRepository;
        $authService = $this->authService;
        $users = $this->userRepository->findAll();
        require_once 'view/profile.php';
    }

    public function editUser($id)
    {
        $this->authMiddleware->checkAdmin();
        $sessionManager = $this->sessionManager;
        $userRepository = $this->userRepository;
        $authService = $this->authService;
        $user = $this->userRepository->findById($id);
        require_once "view/profile.php";
    }

    public function updateUser($id, $data)
    {
        $this->authMiddleware->checkAdmin();

        $user = $this->userRepository->findById($id);
        // Update the user object with the new data
        $user->setName($data['name']);
        $user->setEmail($data['email']);
        $user->setPhone($data['phone']);
        $user->setAddress($data['address']);
        $user->setRole($data['role']);

        $this->userRepository->updateAdmin($user);
        header("Location: /profile/view_user");
        exit;
    }

    public function deleteUser($id)
    {
        $this->authMiddleware->checkAdmin();

        $user = $this->userRepository->findById($id);
        $this->userRepository->deleteUser($user);
        header("Location: /profile/view_user");
        exit;
    }

    public function createUser()
    {
        $this->authMiddleware->checkAdmin();

        if (isset($_POST['create_user'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $role = $_POST['role'];

            $registerResult = $this->authService->register($name, $email, $password, $phone, $address, $role);
            if ($registerResult['success']) {
                header("Location: /profile/view_user");
                exit;
            } else {
                $errorMessage = $registerResult['message'];
            }
        exit;
        }
    }
}
?>