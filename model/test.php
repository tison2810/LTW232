<?php
require_once 'RBAC.php';
require_once 'connection.php';
require_once 'UserRepository.php';
require_once 'User.php';

// Assuming you have a valid database connection called $conn
$userRepository = new UserRepository($conn);

// Fetch all users to display in a list
$allUsers = $userRepository->findAll();

// Simulate the current logged-in user
$loggedInUserId = 1; // Replace this with the actual user ID you want to use
$loggedInUser = $userRepository->findById($loggedInUserId);


// Check if the logged-in user has permission to view users
if (AccessControl::hasAccess($loggedInUser, 'view_users')) {
    echo "<h1>User List</h1>";
    echo "<ul>";
    foreach ($allUsers as $user) {
        echo "<li>";
        echo $user->getName() . " " . $user->getName();
        echo "</li>";
    }
    echo "</ul>";
} else {
    echo "Access denied. You don't have permission to view the user list.";
}

?>