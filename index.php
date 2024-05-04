<?php
require_once 'model/connection.php';
require_once 'model/SessionManager.php';
require_once 'model/User.php';
require_once 'model/RBAC.php';
require_once 'services/AuthenticationService.php';
require_once 'model/UserRepository.php';
require_once 'controllers/UserController.php';
require_once 'middlewares/AuthMiddleware.php';
require_once 'controllers/AdminController.php';


$sessionManager = new SessionManager();
$userRepository = new UserRepository($conn);
$authMiddleware = new AuthMiddleware($sessionManager);
$authService = new AuthenticateService($userRepository, $sessionManager);
$userController = new UserController($authService, $userRepository, $sessionManager);
$adminController = new AdminController($userRepository, $authService, $sessionManager, $authMiddleware);

include 'view/navbar.php';

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'logout') {
        $userController->logout();
    } elseif ($_GET['action'] == 'register') {
        $userController->register();
    } elseif ($_GET['action'] == 'login') {
        $userController->login();
    } elseif ($_GET['action'] == 'dashboard') {
        require_once 'app/views/dashboard.php';
        exit;
    } elseif ($_GET['action'] == 'view_product') {
        require_once 'app/views/view_product.php';
        exit;
    } elseif ($_GET['action'] == 'edit_product') {
        require_once 'app/views/edit_product.php';
        exit;
    } elseif ($_GET['action'] == 'delete_product') {
        require_once 'app/views/delete_product.php';
        exit;
    } elseif ($_GET['action'] == 'add_product') {
        require_once 'app/views/add_product.php';
        exit;
    } elseif ($_GET['action'] == 'view_user') {
        $adminController->index();
        exit;
    } elseif ($_GET['action'] == 'edit_user' && isset($_GET['id'])) {
        $adminController->editUser($_GET['id']);
        exit;
    } elseif ($_GET['action'] == 'update_user' && isset($_GET['id']) && !empty($_POST)) {
        $adminController->updateUser($_GET['id'], $_POST);
        exit;
    } elseif ($_GET['action'] == 'delete_user' && isset($_GET['id'])) {
        $adminController->deleteUser($_GET['id']);
        exit;
    } elseif ($_GET['action'] == 'introduction') {
        require_once 'view/introduction.php';
        exit;
    } elseif ($_GET['action'] == 'news') {
        require_once 'app/views/news.php';
        exit;
    } elseif ($_GET['action'] == 'payment') {
        require_once 'app/views/payment.php';
        exit;
    } elseif ($_GET['action'] == 'contact') {
        require_once 'app/views/contact.php';
        exit;
    } elseif ($_GET['action'] == 'list') {
        require_once 'app/views/list.php';
        exit;
    } elseif ($_GET['action'] == 'cart') {
        require_once 'app/views/cart.php';
        exit;
    } elseif ($_GET['action'] == 'detail') {
        require_once 'app/views/detail.php';
        exit;
    } elseif ($_GET['action'] == 'profile') {
        $userController->profile();
        exit;
    } elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && $_GET['action'] == 'update_profile') {
        $userController->updateProfile($_POST);
        exit;
    } elseif ($_GET['action'] == 'change_info') {
        $userController->profile();
        exit;
    } elseif ($_GET['action'] == 'change_password') {
        $userController->profile();
        exit;
    } elseif ($_GET['action'] == 'site_settings') {
        $userController->profile();
        exit;
    } elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && $_GET['action'] == 'change_password_handler') {
        $userController->change_password_handler();
        exit;
    } elseif ($_GET['action'] == 'delete_account') {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $userController->deleteAccount();
        } else {
            $userController->profile();
            exit;
        }

    }
} else {
    // Redirect to the homepage
    require_once 'home.php';
    exit;
}