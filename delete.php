<?php
    include "config.php";

    if(isset($_GET['id'])){
        $test_id = $_GET['id'];

        $sql = "DELETE FROM test WHERE 'id'='$test_id'";

        $result = $conn->query($sql);

        if($result == TRUE){
            echo "Record deleted successfully";
        }else{
            echo "Error: ".$sql."<br>".$conn->error;
        }
    }
?>