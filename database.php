<?php

$conn = new mysqli("172.31.22.43", "Om200556124", "f24aExs8Lf", "Om200556124");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully";
}


    $size = $_POST["pizzaSize"];
    $name = $_POST["name"];
    $gmail = $_POST["email"];

    // Make sure the TOPPING field exists in your HTML form
    $toppings = isset($_POST["topping"]) ? $_POST["topping"] : [];
    $topping = implode(",", $toppings);
    $dippings = isset($_POST["dippings"]) ? $_POST["dippings"] : [];
    $dipping = implode(",", $dippings);

    $query = "INSERT INTO orders VALUES ('$name', '$gmail', '$size', '$topping', '$dipping')";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Data successfully inserted');</script>";
       
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
    
    echo "";

?>