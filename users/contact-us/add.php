<?php
require('../database/db.php');

    $nama    = $_POST['nama'];
    $email   = $_POST['email'];
    $pesan   = $_POST['message'];
    $subject = $_POST['subjek'];

    $statement = $connection->prepare(
    "INSERT INTO pesan (pesan, subjek, nama, email) 
    VALUES (:pesan, :subject, :name, :email)
    ");

    $statement->bindParam("pesan", $pesan);
    $statement->bindParam("subject", $subject);
    $statement->bindParam("name", $nama);
    $statement->bindParam("email", $email);

    $statement->execute();
?>