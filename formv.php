<?php 
    include "config.php";

    $sql = "SELECT *FROM test";

    $result = $conn -> query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet"
    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2> Users </h2>
        <table class="table">
            <head>
                <tr>
                    <th> ID </th>
                    <th> Room </th>
                    <th> Guests </th>
                    <th> First Name </th>
                    <th> Last Name </th>
                    <th> Email </th>
                    <th> Arrival Date </th>
                    <th> Arrival Time </th>
                    <th> Departure Date </th>
                    <th> Departure Time </th>
                    <th> Pick Up </th>
                    <th> Flight Number </th>
                </tr>
                </thread>
                <tbody>
                    <?php 
                        if($result -> num_rows > 0){
                            while($row = $result->fetch_assoc()){
                    ?>
                            <tr>
                                <td> <?php echo $row['id']; ?> </td>
                                <td> <?php echo $row['room']; ?> </td>
                                <td> <?php echo $row['guests']; ?> </td>
                                <td> <?php echo $row['firstName']; ?> </td>
                                <td> <?php echo $row['lastName']; ?> </td>
                                <td> <?php echo $row['email']; ?> </td>
                                <td> <?php echo $row['arrivalDate']; ?> </td>
                                <td> <?php echo $row['arrivalTime']; ?> </td>
                                <td> <?php echo $row['departDate']; ?> </td>
                                <td> <?php echo $row['departTime']; ?> </td>
                                <td> <?php echo $row['pickUp']; ?> </td>
                                <td> <?php echo $row['flightNum']; ?> </td>
                                <td> 
                                    <a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>"> Edit</a> &nbsp;
                                    <a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>"> Delete </a>
                                </td>
                            </tr>
                            <?php   }

                        }
                        ?>
                </tbody>
        </table>
    </div>  
</body>
</html>