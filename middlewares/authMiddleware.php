<?php
require_once 'model/SessionManager.php';
require_once 'model/User.php';
require_once 'model/RBAC.php';

class AuthMiddleware
{
    private $sessionManager;

    public function __construct(SessionManager $sessionManager)
    {
        $this->sessionManager = $sessionManager;
    }

    public function checkLoggedIn()
    {
        if (!$this->sessionManager->isLoggedIn()) {
            header('Location: /');
            exit;
        }
    }

    public function checkAdmin()
    {
        $this->checkLoggedIn();

        $user = $this->sessionManager->get('user');

        if (!$user || $user->getRole() != Role::ADMIN) {
            header("Location: /");
            exit;
        }
    }
}

?>