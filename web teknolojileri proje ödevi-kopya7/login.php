<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Kullanıcı adı ve şifrenin boş olmadığını kontrol et
    if (empty($username) || empty($password)) {
        echo "Kullanıcı adı ve şifre alanları boş bırakılamaz.";
        exit;
    }

    // Kullanıcı adının mail formatında olup olmadığını kontrol et
    if (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
        echo "Geçersiz e-posta formatı.";
        exit;
    }

    // Kullanıcı adı ve şifreyi kontrol et
    $correctUsername = "b231210080@sakarya.edu.tr";
    $correctPassword = "b231210080";

    if ($username === $correctUsername && $password === $correctPassword) {
        echo "Hoşgeldiniz b231210080";
    } else {
        echo "Kullanıcı adı veya şifre yanlış.";
        header("refresh:5;login.html");
        exit;
    }
} else {
    echo "Bu sayfaya doğrudan erişim sağlanamaz.";
}
?>
