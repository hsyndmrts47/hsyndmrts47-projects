<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // E-posta gönderme ayarları
    $to = "hsyndmrts6@gmail.com";
    $subject = "Yeni Mesaj: $name";
    $body = "İsim: $name\nE-posta: $email\nMesaj: $message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Mesajınız gönderildi!";
    } else {
        echo "Mesaj gönderilirken bir hata oluştu.";
    }
}
?>
