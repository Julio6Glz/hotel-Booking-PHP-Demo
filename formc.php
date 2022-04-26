<!DOCTYPE html>
<html lang="en">
<head>
    <style> .Error {color: red;} </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>

    <?php
        $roomErr = $guestErr = $nameErr = $emailErr = $arrivalErr = $departErr = $pickUpErr = $flightErr = "";
    ?>


    <h1> Hotel Booking </h1>
    <p> <span class="Error"> * required field(s) </span> </p>
    <form action="connect_2.php" method="POST">
    <!-- <form method="POST"> -->
        
        <label for="room"> Room Type </label> 
        <select name="room" id="room">
            <option disabled selected hidden> please select </option>
            <option> 1x1 </option>
            <option> 2x1 </option>
        </select>
        <span class="Error"> * <?php echo $roomErr; ?> </span> <br> <br>

        <label for="guests"> Number of Guests </label>
        <input type="number" name="guests" id="guests" placeholder="please select"> 
        <span class="Error"> * <?php echo $guestErr; ?> </span> <br> <br>
        
        <label> Name
            <input type="text" name="firstName" id="firstName" placeholder="First">
            <input type="text" name="lastName" id="lastName" placeholder="Last">
        </label>
        <span class="Error"> * <?php echo $nameErr ?> </span> <br> <br>

        <label for="email"> Email </label>
        <input type='text' name='email' id="email" placeholder="johndoe@company.com"> 
        <span class="Error"> * <?php echo $emailErr ?> </span> <br> <br>

        <label> Arrival
            <input type="date" name="arrivalDate" id="arrivalDate"> 
            <input type="time" name="arrivalTime" id="arrivalTime"> 
        </label>
        <span class="Error"> * <?php echo $arrivalErr ?> </span> <br> <br>

        <label> Departure
            <input type="date" name="departDate" id="departDate"> 
            <input type="time" name="departTime" id="departTime">
        </label>
        <span class="Error"> * <?php echo $departErr ?> </span> <br> <br>

        <label> Free Pick-up:
            <input type="radio" name="pickUp" id="pickUp" value="Yes"> Yes, Sure! 
            <input type="radio" name="pickUp" id="pickUp" value="No"> No, Thank You! 
        </label>
        <span class="Error"> * <?php echo $pickUpErr ?> </span> <br> <br>
        
        <label for="flightNum"> Flight Number </label>
        <input type="text" name="flightNum" id="flightNum">
        <span class="Error"> * <?php echo $flightErr ?> </span> <br> <br>


        <input type="submit" name="submit" id="submit" value="Complete Reservation">

    </form>
</body>
</html>