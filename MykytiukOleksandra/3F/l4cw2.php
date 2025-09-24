<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>

<?php
$a = "placek po węgiersku";
$countA = 2;
$priceA = 15.90;

$b = "pierogi zbójnickie";
$countB = 1;
$priceB = 12.90;

$suma = ($countA * $priceA) + ($countB * $priceB);

echo"<h2>Twoje zamówienie</h2>
<table>
    <tr>
        <th>Nazwa</th>
        <th>Liczba</th>
        <th>Cena</th>
    </tr>
    <tr>
        <td>$a</td>
        <td>$countA</td>
        <td>$priceA</td>
    </tr>
    <tr>
        <td>$b</td>
        <td>$countB</td>
        <td>$$priceB</td>
    </tr>
    <tr>
        <td>Do zapłaty</td>
        <td>-</td>
        <td> number_format($koszt, 2, ',', '.')</td>
    </tr>
</table>
<h2>Dziękujemy!</h2>"
?>
</body>
</html>
