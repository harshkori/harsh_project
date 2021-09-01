<html>
<head>
    <title> Transparent Login Form Design </title>
    <link rel="stylesheet" type="text/css" href="/css/style.css">   
</head>
<style></style>

    <body>
    <div class="login-box">
    <img src="img/avatar.jpg" class="avatar">
        <h1>Signup Here</h1>
            <form action="s_post" method="post">
            {{@csrf_field()}}
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username">
            <p>Email </p>
            <input type="email" name="email" placeholder="Enter Email">
            <p>Password </p>

            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="submit" value="Signup">
            </form>
        
        
        </div>
        <span class="error">
@error('email')
{{$message}}
@enderror
</span><br>
<span class="error">
@error('username')
{{$message}}
@enderror

</span>
@error('email')
{{$message}}
@enderror
    </body>
</html>