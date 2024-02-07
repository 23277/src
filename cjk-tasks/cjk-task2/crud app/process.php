<?php

if (isset($_POST['submit'])) {
    
    $fname = $_POST['fname'];     
    $lname = $_POST['lname'];     
    $city = $_POST['city'];       
    $groupid = $_POST['groupid']; 

    
    include 'db.php';

    
    $sql = "INSERT INTO studentinfo (first_name, last_name, city, groupId)
            VALUES ('$fname', '$lname', '$city', '$groupid')";

    
    if ($conn->query($sql) === TRUE) {
        
        echo "New record added";
    } else {
        
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    
    $conn->close();
}
?>