<?php

    include "config.php";

    $roomErr = $guestErr = $nameErr = $emailErr = $arrivalErr = $departErr = $pickUpErr = $flightErr = "";
    $room = $guests = $firstName = $lastName = $email = $arrivalDate = $arrivalTime = "";
    $departDate = $departTime = $pickUp = $flightNum = "";

    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])){
    
        if(empty($_POST['room'])) {
            $roomErr = "please select a room type";
        }else{
            $room = $_POST['room'];
        }
        
        if(empty($_POST['guests'])){
            $guestErr = "please enter the number of guests";
        }else{
            $guests = $_POST['guests'];
        }

        if(empty($_POST['firstName']) || empty($_POST['lastName'])){
            $nameErr = "please enter your first and last name";
        }else{
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            if(!preg_match("/^[a-zA-Z-']*$/", $firstName)){
                $nameErr = "only letters and white spaces are allowed.";
            }else if(!preg_match("/^[a-zA-Z-']*$/", $lastName)){
                $nameErr = "only letters and white spaces are allowed.";
            }
        }

        if(empty($_POST['email'])){
            $emailErr = "please enter an email";
        }else{
            $email = $_POST['email'];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $emailErr = "the email address is incorrect";
            }
        }

        if(empty($_POST['arrivalDate'])){
            $arrivalErr = "please enter an arrival date";
        }else if (empty($_POST['arrivalTime'])){
            $arrivalErr = "please enter an arrival time";
        }else{
            $arrivalDate = $_POST['arrivalDate'];
            $arrivalTime = $_POST['arrivalTime'];
        }

        if(empty($_POST['departDate'])){
            $departErr = "please enter a departure date";
        }else if (empty($_POST['departTime'])){
            $departErr = "please enter a departure time";
        }else{
            $departDate = $_POST['departDate'];
            $departTime = $_POST['departTime'];
        }

        if(empty($_POST['pickUp'])){
            $pickUpErr = "please select a pick-up option";
        }else{
            $pickUp = $_POST['pickUp'];
        }

        if(empty($_POST['flightNum'])){
            $flightErr = "please enter your flight number";
        }else{
            $flightNum = $_POST['flightNum'];
        } 

        $sql = "INSERT INTO test (room, guests, firstName, lastName, email, arrivalDate, arrivalTime, 
        departDate, departTime, pickUp, flightNum) 
        VALUES ('$room', '$guests', '$firstName', '$lastName', '$email', '$arrivalDate', '$arrivalTime', 
        '$departDate', '$departTime', '$pickUp', '$flightNum')"; 

        $result = $conn -> query($sql);

        if($result == TRUE){
            echo "New record created successfully";
        }else{
            echo "Error: ".$sql."<br>".$conn->error;
        }

        $conn -> close();
    
    } 
?>

