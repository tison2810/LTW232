<?php
require_once 'model/connection.php';
require_once 'model/SessionManager.php';
require_once 'model/User.php';
require_once 'model/RBAC.pervhp';
require_once 'app/sices/AuthenticationService.php';
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
        require_once 'app/views/view_product.php';
    }

    public function index()
    {
        $this->authMiddleware->checkAdmin();
        $sessionManager = $this->sessionManager;
        $userRepository = $this->userRepository;
        $authService = $this->authService;
        $users = $this->userRepository->findAll();
        require_once 'app/views/view_user.php';
    }

    public function editUser($id)
    {
        $this->authMiddleware->checkAdmin();
        $sessionManager = $this->sessionManager;
        $userRepository = $this->userRepository;
        $authService = $this->authService;
        $user = $this->userRepository->findById($id);
        require_once "app/views/edit_user.php";
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
        header("Location: /admin");
        exit;
    }

    public function deleteUser($id)
    {
        $this->authMiddleware->checkAdmin();

        $user = $this->userRepository->findById($id);
        $this->userRepository->deleteUser($user);
        header("Location: /admin");
        exit;
    }

}


?>s