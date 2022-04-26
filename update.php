<?php 
    include "config.php";

    if(isset($_POST['submit'])){
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
        $test_id = $_POST['id'];

        $sql = "UPDATE test SET 'room'='$room', 'guests'='$guests', 'firstName'='$firstName', 'lastName'='$lastName', 'email'='$email', 
        'arrivalDate'='$arrivalDate', 'arrivalTime'='$arrivalTime', 'departDate'='$departDate', 'departTime='$departTime', 'pickUp'='$pickUp', 
        'flightNum'='$flightNum' WHERE 'id'='$test_id'";

        $result = $conn -> query($sql);

        if($result == TRUE){
            echo "Record Updated Successfully";
        }else{
            echo "Error: ".$sql."<br>".$conn->error;
        }
    }

    if(isset($_GET['id'])){
        $test_id = $_GET['id'];

        $sql = "SELECT *FROM test WHERE 'id'='$test_id'";

        $result = $conn->query($sql);

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $room = $row['room'];
                $guests = $row['guests'];
                $firstName = $row['firstName'];
                $lastName = $row['lastName'];
                $email = $row['email'];
                $arrivalDate = $row['arrivalDate'];
                $arrivalTime = $row['arrivalTime'];
                $departDate = $row['departDate'];
                $departTime = $row['departTime'];
                $pickUp = $row['pickUp'];
                $flightNum = $row["flightNum"];
                $test_id = $row['id'];
            }
        ?>

        <html>
            <body>
                <h2> User Update Form </h2>      
                <form action="" method="POST"> 
            
                <label for="room"> Room Type </label> 
                <select name="room" id="room">
                    <option disabled selected hidden> please select </option>
                    <option> 1x1 </option>
                    <option> 2x1 </option>
                </select> <br> <br>

                <label for="guests"> Number of Guests </label>
                <input type="number" name="guests" id="guests" placeholder="please select"> <br> <br>
                
                <label> Name
                    <input type="text" name="firstName" id="firstName" placeholder="First">
                    <input type="text" name="lastName" id="lastName" placeholder="Last">
                </label> <br> <br>

                <label for="email"> Email </label>
                <input type='text' name='email' id="email" placeholder="johndoe@company.com"> <br> <br>

                <label> Arrival
                    <input type="date" name="arrivalDate" id="arrivalDate"> 
                    <input type="time" name="arrivalTime" id="arrivalTime"> 
                </label> <br> <br>

                <label> Departure
                    <input type="date" name="departDate" id="departDate"> 
                    <input type="time" name="departTime" id="departTime">
                </label> <br> <br>

                <label> Free Pick-up:
                    <input type="radio" name="pickUp" id="pickUp" value="Yes"> Yes, Sure! 
                    <input type="radio" name="pickUp" id="pickUp" value="No"> No, Thank You! 
                </label> <br> <br>
                
                <label for="flightNum"> Flight Number </label>
                <input type="text" name="flightNum" id="flightNum"> <br> <br>

                <input type="submit" name="submit" id="submit" value="Complete Reservation">

                </form>
            </body>
        </html>

        <?php
        }else{
            header('location: formv.php');
        }
    }

?>