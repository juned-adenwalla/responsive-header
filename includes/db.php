<?php 

$conn = mysqli_connect('localhost', 'root', '', 'events');

if(!$conn){
    echo "connection failed";
}