<?php

$fisrtname =$_REQUEST['firstName'];
$lastname =$_REQUEST['lastName'];
$email = $_REQUEST['gmail'];
$age = $_REQUEST['age'];

if(isset($_POST['submit'])){

$host="localhost";
$user ="root";
$password ="";
$db = "most_popular_movies";

$conn = mysqli_connect($host, $user, $password, $db);

if(!$conn){
    die("Connection failed" . mysqli_connect_error());
};

mysqli_select_db($conn, $db);

$insert = "INSERT INTO movies VALUES('$fisrtname', '$lastname', '$email', '$age')";

$result = mysqli_query($conn, $insert);


if($result){
    echo("<h1>Your data is here successfully!</h1>");
}else{
    echo("<h1>Your Data Faild!!</h1>");
};

mysqli_close($conn);

};

?>