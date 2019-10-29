<?php

    $name = $_POST['name'];
    $address = $_POST['address'];
    $beds = $_POST['beds'];
    $rooms = $_POST['rooms'];
    $keymoney = $_POST['keymoney'];
    $maxpeople = $_POST['maxpeople'];
    $meals = $_POST['meals'];
    $payment = $_POST['payment'];
    $price = $_POST['price'];
    $phone = $_POST['phone'];
    $tag = $_POST['tag'];
    $utility = $_POST['utility'];
    $map= $_POST['map'];
    $latln = $_POST['latlng'];
    $id = $_POST['id'];

    echo $name;
    echo $address;
    echo $beds;
    echo $rooms;
    echo $keymoney;
    echo $maxpeople;
    echo $meals;
    echo $payment;
    echo $price;
    echo $phone;
    echo $tag;
    echo $utility;
    echo $map;
    echo $latln;
    echo $id;


    //Connection details
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "uniacc";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql=  "INSERT INTO uniacc (address, beds, id, keymoney, latlng, map, maxpeople, meals, name, payment, phone, price, rooms, tag, utility) 
            VALUES ('$address', '$beds', '$id', '$keymoney', '$latln', '$map', '$maxpeople', '$meals', '$name', '$payment', '$phone', '$price', '$rooms', '$tag', '$utility') ";


    if ($conn->query($sql) === TRUE) {
        echo("Done");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

header("Location: add.html?success");
?>
