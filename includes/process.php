<?php 

if(isset($_POST['submit'])){

    include('../includes/db.php');

    $event_name = $_POST['event_name'];
    $event_type = $_POST['event_type'];
    $date = $_POST['date'];

    if($event_name == '' || $event_type == '' || $date == ''){
        echo "<script type='text/javascript'>";
        echo "alert('Kindly Fill all the Fields');";
        echo "window.location.href = '../events';";
        echo "</script>";
    }
    else{
        $sql = "INSERT INTO `entry`(`event_name`, `event_type`, `date`) VALUES ('$event_name','$event_type','$date')";
        $query = mysqli_query($conn, $sql);

        echo $query;
        
        if($query){
            echo "<script type='text/javascript'>";
            echo "alert('Event Inserted Successfully');";
            echo "window.location.href = '/events';";
            echo "</script>";
        }
        else{
            echo "<script type='text/javascript'>";
            echo "alert('Event not Inserted, Kindly Try Again later');";
            echo "window.location.href = '/events';";
            echo "</script>";
        }

    }

}


