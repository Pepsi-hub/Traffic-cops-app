<?php

include "apps/database/conn.php";

class Profile {
    private $name;
    private $surname;
    private $cellphone;
    private $email;
    private $password;
    private $userImage;
    private $userImage_name;
    
    public function __construct($name, $surname, $cellno, $email, $password, $userImage, $userImage_name) {
        $this->name = $name;
        $this->surname = $surname;
        $this->cellno = $cellno;
        $this->email = $email;
        $this->password = $password;
        $this->userImage = $userImage;
        $this->userImage_name = $userImage_name;
    }
    
    public function isValidImage() {
        $allowed_extensions = array('jpg', 'jpeg', 'png', 'gif');
        $ext = pathinfo($this->userImage_name, PATHINFO_EXTENSION);
        return in_array($ext, $allowed_extensions);
    }
    
   public function create() {
        global $conn;

        if (!$this->isValidImage()) {
            echo "Invalid file type. Only JPG, JPEG, PNG and GIF files are allowed.";
            return false;
        }

        $location = "assets/img/users/" . $this->userImage_name;
        move_uploaded_file($this->userImage, $location);


        $sql = "INSERT INTO `users`(`userId`, `name`, `surname`, `cellphone`, `email`, `password`, `userImage`) 
                VALUES (NULL, '$this->name', '$this->surname', '$this->cellphone', '$this->email', '$this->password', '$this->userImage_name')";
 

        $result = mysqli_query($conn, $sql);

        if ($result) {
            // Send verification email
            $verificationLink = "http://example.com/verify_email.php?code=$verificationCode";
            $emailMessage = "Please click the following link to verify your email: $verificationLink";
            // Send the email using a mailer library or email service provider
            
            header("location: login.php?msg=New profile created successfully");
            return true;
        } else {
            echo "Failed: " . mysqli_error($conn);
            return false;
        }
    }
}

if (isset($_POST['submit'])) {
    $profile = new Profile($_POST['name'], $_POST['surname'], $_POST['cellphone'], $_POST['email'], $_POST['password'], $_FILES['image']['tmp_name'], $_FILES['image']['name']);
    $profile->create();
}

?>
