<?php
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "hotelBooking";

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
        // Create a connection

        $conn = mysqli_connect($serverName, $userName, $password, $dbName) or die("Connection Failed: ".mysqli_connect_error());

        if(isset($_POST['room']) && isset($_POST['guests']) && isset($_POST['firstName']) && isset($_POST['lastName'])
        && isset($_POST['email']) && isset($_POST['arrivalDate']) && isset($_POST['arrivalTime']) 
        && isset($_POST['departDate']) && isset($_POST['departTime']) && isset($_POST['pickUp']) && isset($_POST['flightNum'])){ 
            $room = $_POST['room'];
            $guests = $_POST['guests'];
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $email = $_POST['email'];
            $arrivalDate = $_POST['arrivalDate'];
            $arrivalTime = $_POST['arrivalTime'];
            $departDate = $_POST['departDate'];
            $departTime = $_POST['departTime'];
            $pickUp = $_POST['pickUp'];
            $flightNum = $_POST["flightNum"];

            $sql = "INSERT INTO test (room, guests, firstName, lastName, email, arrivalDate, arrivalTime, 
            departDate, departTime, pickUp, flightNum) 
            VALUES ('$room', '$guests', '$firstName', '$lastName', '$email', '$arrivalDate', '$arrivalTime', 
            '$departDate', '$departTime', '$pickUp', '$flightNum')";

            $query = mysqli_query($conn, $sql);
            
            if ($query){
                echo 'Entry Successful';
            }else{
                echo 'Error Occured';
            }
        }
    }
?>

