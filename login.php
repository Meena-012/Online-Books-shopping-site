<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <style>
    body
    {
    background-image: url('https://cdn.wallpapersafari.com/24/66/1Fcntd.jpg');
    background-repeat: no-repeat;
    object-fit: cover;
    background-attachment: fixed;
  background-size: cover;
    font-family: 'Georgia';
   
}
.login{
        width: 350px;
        overflow: hidden;
        margin: auto;
        margin: 20 0 0 300px;
        padding: 70px;
        background:transparent;
        border-radius: 30px ;
        border-style: solid;
  border-width: 4px;
  color: rgba(92, 86, 86, 0.227);

}
h1{
    text-align: center;
    color: midnightblue;
    padding: 20px;
}
label{
    color:rgb(24, 22, 22);
    font-size: 17px;
}
#Uname{
    width: 300px;
    height: 30px;
    border: none;
    border-style: groove;
    border-radius: 5px;
    padding-left: 8px;
}
#Pass{
    width: 300px;
    height: 30px;
    border: none;
    border-radius: 5px;
    border-style: groove;
    padding-left: 8px;

}
#email{
    width: 300px;
    height: 30px;
    border: none;
    border-style: groove;
    border-radius: 5px;
    padding-left: 8px;

}

.container .btn {
    
    background-color: #f1f1f1;
    color: black;
    font-size: 13px;
    padding: 13px 17px;
    border: none;
    border-style: groove;
    border-radius: 4px;
    text-align: center;
  }
  .container .btn:hover {
    background-color: black;
    color: white;
  }
  
</style>
</head>
<body>
    <center><h1>Login Form</h1></center><br>
    <div class="login">
  <form method="post" action="#" onsubmit="return validateForm()">
        <label><b>Username</b></label>
        <input type="text" name="Uname" id="Uname" placeholder="Username">
        <br><br>
        <label><b>E-mail</b></label><br>
        <input type="email" name="email" id="email" placeholder="E-mail">
        <br><br>
        <label><b>Password</b></label>
        <input type="Password" name="Pass" id="Pass" placeholder="Password">
          <br><br>
        <div class="container">
        <center><button onclick="welcome()" class="btn"><b>Login</b></button></center>
        </div>   
    </form>
</div>

</body>
<script>
    function validateForm() {
        var Uname = document.getElementById("Uname").value;
        var Pass = document.getElementById("Pass").value;
        var email=document.getElementById("email").value;
        // Check if the username and password are not empty
        if (Uname.trim() === "" || Pass.trim() === "" || email.trim() ==="") {
            alert("Please enter username,email and password.");
            return false;
           
        }
        else{
            if(Uname===Pass){
            alert("Login Successfully")
            window.location.href = "index.php";
            }
            else{
                alert("Username and Password should be same")
                
            }
        }

        return false; 
    }
</script>

</html>