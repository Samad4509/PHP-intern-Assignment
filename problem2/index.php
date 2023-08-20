<?php

interface UserInterface {
    public function getUsername();
    public function getPassword();
}

class User implements UserInterface {
    private $username;
    private $password;

    public function __construct($username, $password) {
        $this->username = $username;
        $this->password = $password;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }
}


interface AuthenticatorInterface {
    public function authenticate(UserInterface $user, $password);
}

class SimpleAuthenticator implements AuthenticatorInterface {
    private $validUsers = [];

    public function addUser(UserInterface $user) {
        $this->validUsers[$user->getUsername()] = $user->getPassword();
    }

    public function authenticate(UserInterface $user, $password) {
        $username = $user->getUsername();
        if (isset($this->validUsers[$username]) && $this->validUsers[$username] === $password) {
            return true;
        }
        return false;
    }
}

function createUserInput() {
    echo "Create a new user account\n";
    echo "Enter username: ";
    $username = readline();
    echo "Enter password: ";
    $password = readline();
    return new User($username, $password);
}

function loginUserInput() {
    echo "User Login\n";
    echo "Enter username: ";
    $username = readline();
    echo "Enter password: ";
    $password = readline();
    return new User($username, $password);
}

$authenticator = new SimpleAuthenticator();

while (true) {
    echo "1. Create User\n2. Login\n3. Exit\n";
    echo "Enter your choice: ";
    $choice = readline();

    switch ($choice) {
        case '1':
            $user = createUserInput();
            $authenticator->addUser($user);
            echo "User created successfully.\n";
            break;
        case '2':
            $user = loginUserInput();
            if ($authenticator->authenticate($user, $user->getPassword())) {
                echo "Login successful. Welcome, " . $user->getUsername() . "!\n";
            } else {
                echo "Login failed. Invalid username or password.\n";
            }
            break;
        case '3':
            echo "Goodbye!\n";
            exit;
        default:
            echo "Invalid choice. Please try again.\n";
    }
}

?>
