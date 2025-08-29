<?php

class User {
    private $username;
    private $password;

    // Setter for username
    public function setUsername($username) {
        $this->username = $username;
    }

    // Getter for username
    public function getUsername() {
        return $this->username;
    }

    // Setter for password
    public function setPassword($password) {
        // Example: We can add password validation logic here
        if (strlen($password) >= 6) {
            $this->password = $password;
            echo "Password set successfully. <br>";
        } else {
            echo "Password must be at least 6 characters.<br>";
        }
    }

    // Method to display user details
    public function displayUser() {
        echo "Username: " . $this->username . "<br>";
        // We are not showing the password for security reasons
    }
}

// Object creation and method calls
$user = new User();

$user->setUsername("Akiva");
$user->setPassword("secure123"); // Valid
$user->displayUser();

?>
