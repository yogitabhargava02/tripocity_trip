<html>  
<head>  
<title>Forgot password</title>  
</head>  
<script>  
function matchPassword() {  
  var pw1 = document.getElementById("pswd1");  
  var pw2 = document.getElementById("pswd2");  
  if(pw1 != pw2)  
  {   
    alert("Passwords did not match");  
  } else {  
    // alert("Password created successfully"); 
    // header(location:index.php) 
    window.location.href = "../index.php";
  }  
}  












</script>  
  
<body>  
<center>  
<form>  
<h1 style="color:green">Forgot password</h1>  
<h3> Confirm password Validation Example </h3>  
<!-- Enter Password -->  
<td>New password</td>  
<input type = "password" name = "pswd1"> <br><br>  
  
<!-- Enter Confirm password -->  
<td> Confirm Password </td>  
<input type = "password" name = "pswd2"> <br><br>  
  
<!?Click to validate confirm password -->  
<button type = "submit" onclick="matchPassword()">Submit</button>  
  
<!-- Click to reset fields -->  
<button  onclick="myFunction()" type = "reset" value = "Reset" >Reset</button>  


<script>
function myFunction() {
  location.replace("C:\xampp\htdocs\tripp\index.php")
}
</script>


</form>  
</center>  
</body>  
</html>  