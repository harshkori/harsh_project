<html>
<head>
    <title> Transparent Login Form Design </title>
    <link rel="stylesheet" type="text/css" href="/css/style.css">   
</head>
<style></style>

    <body><br>
    @if(session('success'))  <center> <label style="background-color:black;padding:10px;text-align:center;color:green;top:20px;font-size:23px;">{{session('success')}}</label></center>
    @elseif(session('error'))  <center> <label style="background-color:black;padding:10px;text-align:center;color:red;top:20px;font-size:23px;">{{session('error')}}</label></center>
    @else
   @endif 
   <div class="login-box">
    <img src="img/avatar.jpg" class="avatar">
        <h1>Login Here</h1>
            <form action="l_post" method="post">
            {{@csrf_field()}}

            <p>Email </p>
            <input type="email" name="email" placeholder="Enter Email">
            <p>Password </p>

            <input type="password" name="password" placeholder="Enter Password">
            <a href="">Forgot Password</a></br></br></br>
<input type="submit" name="submit" value="Signup"><br>
if you dont't have an account <a href="signup" class="link">Signup</a>
            </form>
        
        </div>
    
    </body>
</html>