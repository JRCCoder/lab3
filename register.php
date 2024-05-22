<?php
session_start();
include "db_conn.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPmailer/src/Exception.php';
require 'PHPmailer/src/PHPMailer.php';
require 'PHPmailer/src/SMTP.php';

$mail = new PHPMailer(true);

$firstname = $_POST['Firstname'];   
$middlename = $_POST['Middlename'];
$lastname = $_POST['Lastname'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$verification_code = bin2hex(random_bytes(16));

function validatePassword($password) {
    if (!preg_match('/^(?=.*[A-Za-z])(?=.*[\d@#$*])[A-Za-z\d@#$*]+$/', $password)) {
        return false;
    }
    return true;
}

function validateLetters($input) {
    return preg_match('/^[A-Za-z]+$/', $input);
}

function validateEmail($email) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false;
    }
    return true;
}

if(empty($username) || empty($email) || empty($password)) {
    header("Location: registrationform.php?error=Please fill in all fields");
    exit();
} else if($password !== $confirm_password) {
    header("Location: registrationform.php?error=Passwords do not match");
    exit();
} else {
    $sql = "SELECT * FROM user WHERE username='$username' OR email='$email'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0) {
        header("Location: registrationform.php?error=Username or Email already exists");
        exit();
    }
    if (!validateLetters($lastname)) {
        header("Location: registrationform.php?error=Last name should contain only letters");
        exit();
    }
    if (!validateLetters($firstname)) {
        header("Location: registrationform.php?error=First name should contain only letters");
        exit();
    }
    if (!validateLetters($middlename)) {
        header("Location: registrationform.php?error=Middle name should contain only letters");
        exit();
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO user (Firstname, Middlename, Lastname, username, email, password, verification_code) VALUES ('$firstname', '$middlename', '$lastname', '$username', '$email', '$hashed_password', '$verification_code')";
        if(mysqli_query($conn, $sql)){
            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'fontface86@gmail.com';
            $mail->Password = 'alsgaxnbmjbweqoo';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            $mail->setFrom('fontface86@gmail.com');
            $mail->addAddress($email);
            $mail->isHTML(true);
            $mail->Subject = 'Email Verification';
            $mail->Body = 'Please click the "verify" link to verify your email: <a href="http://localhost/lab3/verified.php?email='.$email.'&code='.$verification_code.'">Verify</a>';

            try {
                $mail->send();
                header("Location: sent_notice.php?message=Verification email sent. Please check your email to verify your account.");
            } catch (Exception $e) {
                header("Location: registrationform.php?error=Failed to send verification email. Please try again later.");
            }
        } else {
            echo "ERROR: Hush! Sorry $sql. " . mysqli_error($conn);
        }
    }
}

mysqli_close($conn);
?>
