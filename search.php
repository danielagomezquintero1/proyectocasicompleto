<?php
    $key=$_GET['key'];
    $array = array();
    $con=mysqli_connect("localhost","root","","mybd");
    $query=mysqli_query($con, "select * from search where Name LIKE '%{$key}%'");
    while($row=mysqli_fetch_assoc($query))
    {
      $array[] = $row['Name'];
    }
    echo json_encode($array);
    mysqli_close($con);
?>
