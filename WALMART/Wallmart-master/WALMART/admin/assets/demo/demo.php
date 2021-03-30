<?php

$conn = new mysqli('localhost','root','','gp');
if($conn->connect_error){
die("conection failed:".$conn->connect_error);
}
else{
    $query="SELECT * FROM frequency";
    $result=mysqli_query($conn,$query);
    $dataPoints = array();
    /*while($row=mysqli_fetch_assoc($result))
    {
            array_push($dataPoints, array("x" => $row['date'], "y" => $row['frequency']));
    }*/
    while($row=mysqli_fetch_assoc($result)){
        echo $row['frequency'];
        echo $row['date'];?> <br><?php
    }
}	