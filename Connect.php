<?php
// $name= mysqli_real_escape_string($conn, $_POST['name']);
//  $username=$_POST['username'];
//  $review=$_POST['review'];

// //database connection
// $conn=new mysqli('localhost', 'root','','trip');
// if($conn->connect_error){
//     echo "$conn->connect_error";
//     die("connection failed".$conn->connect_error);
// }
// else{
// $stmt=$conn->prepare("insert into review(name,username,review) values(?,?,?)");
// $stmt->bind_param("sss",$name,$username,$review);
// $execval=$stmt->execute();
// echo $execval;
// echo "Thanks";
// $stmt->close();
// $conn->close();
// }
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "trip");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$username = mysqli_real_escape_string($link, $_REQUEST['username']);
$review = mysqli_real_escape_string($link, $_REQUEST['review']);

 
// Attempt insert query execution
$sql = "INSERT INTO review(name,username, review) VALUES ('$name', '$username', '$review')";
if(mysqli_query($link, $sql)){
    // echo "Records added successfully.";
    // echo "record added succesfully";
    header("Location: ReviewsSubmitted.php");
    exit;
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
