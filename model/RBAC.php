<?php 

class Role {
    const USER = 'USER';
    const ADMIN = 'ADMIN';

    public static function isValidRole($role) {
        return in_array($role, [self::USER, self::ADMIN]);
    }
}


class AccessControl {
    public static function hasAccess(User $user, $permission) {
        switch ($permission) {
            case 'view_users':
                return $user->getRole() === (Role::ADMIN);
            case 'edit_users':
                return $user->getRole() === Role::ADMIN;
            default:
                return false;
        }
    }
}
?>