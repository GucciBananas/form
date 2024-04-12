<?php
$imie = $_POST["imie"];
$nazwisko = $_POST["nazwisko"];
$email = $_POST["email"];
$login = $_POST["login"];
$haslo = $_POST["haslo"];
if (empty($imie) || empty($nazwisko) || empty($email) || empty($login) || empty($haslo)) {
    die("Nie wszystkie pola zostały uzupełnione!");
}
$con = mysqli_connect("localhost", "root", "", "form");
$query = mysqli_query($con, "INSERT INTO accounts VALUES (null,'" .$imie. "','" .$nazwisko. "','" .$email. "','" .$login. "','" .$haslo. "')");
if ($query) {
    echo "Pomyślnie dodano dane do bazy!";
} else {
    echo "Coś poszło nie tak!";
}
mysqli_close($con);
?>