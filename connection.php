<?php
/**
 * Created by PhpStorm.
 * User: Katarzyna
 * Date: 24-02-2016
 * Time: 00:11
 */

$servername = "localhost";
$username = "root";
$password = "coderslab";
$baseName = "tweet";


// Tworzymy nowe połączenie
$conn = new mysqli($servername, $username, $password, $baseName);

// Sprawdzamy czy połączcenie się udało
if ($conn->connect_error) {
    die("Polaczenie nieudane. Blad: " . $conn->connect_error."<br>");
}
?>;