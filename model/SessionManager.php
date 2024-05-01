<?php
final class SessionManager
{
    public function __construct()
    {
        $this->startSession();
    }

    /**
     * Starts a new session if one is not already active.
     */
    private function startSession(): void
    {
        if ($this->isSessionInactive()) {
            session_start();
        }
    }

    /**
     * Ends the current session and clears the session data.
     */
    public function endSession(): void
    {
        if (!$this->isSessionInactive()) {
            session_destroy();
            $_SESSION = [];
        }
    }

    /**
     * Regenerates the session ID to prevent session fixation attacks.
     */
    public function regenerateSession(): void
    {
        if (!$this->isSessionInactive()) {
            session_regenerate_id(true);
        }
    }

    /**
     * Sets a session variable.
     *
     * @param string $key   The key of the session variable.
     * @param mixed  $value The value of the session variable.
     */
    public function set(string $key, $value): void
    {
        if (!$this->isSessionInactive()) {
            $_SESSION[$key] = $value;
        }
    }

    /**
     * Retrieves the value of a session variable.
     *
     * @param string $key The key of the session variable.
     *
     * @return mixed|null The value of the session variable or null if not found.
     */
    public function get(string $key)
    {
        if (!$this->isSessionInactive() && isset($_SESSION[$key])) {
            return $_SESSION[$key];
        }

        return null;
    }

    /**
     * Determines if a user is logged in based on the presence of a user ID in the session.
     *
     * @return bool True if the user is logged in, false otherwise.
     */
    public function isLoggedIn(): bool
    {
        return $this->get('user') !== null;
    }

    /**
     * Checks if the session is inactive.
     *
     * @return bool True if the session is inactive, false otherwise.
     */
    private function isSessionInactive(): bool
    {
        return session_status() === PHP_SESSION_NONE;
    }
}



?>