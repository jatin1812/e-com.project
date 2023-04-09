<!DOCTYPE html>
<html>
    <head>
        <title>DigiMart</title>
    <meta charset="UTF-8" />
    <link rel="shortcut icon" href="img/favicon.svg" type="image/x-icon">
    <style>
        body{background: linear-gradient(#ff2e63,white);
        background-repeat: no-repeat;
        font-size: 16px;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
           
        }
        form{width: 40%;
        margin: 0 auto;
    max-width: 500px;
min-height: 350px;
box-shadow: 0px 5px 15px #393e46;

border-radius: 5px;}
        h1{text-align: center}

      .inside{display: block;
    margin: auto;
    width: 70%;
padding:10px 10%;}
.footer{margin: 0 auto;
width: 40%; }


header{display: block;
    position: fixed;

    left:0;
    right: none;
    top: 0;
    width: 100%;
    background:linear-gradient(#00adb5 20%,#ff2e63 90%);
    
}
.headimg{margin-left: 20px;
margin-top: 10px;}
        div{padding: 5%;}
    </style>
    </head>

    <body>
        <header>
            <img class="headimg" src="img/g23.png" height="40px"></header><br><br>
        <h1>Login to DigiMart</h1>
        <form action="" method="post">
            <div>
            <label class="inside" for="userid">Enter email or phone number <input class="inside" type="text" id="userid" required></label>
            <label class="inside"  for="pass">Enter your password <input class="inside" type="password" id="pass"></label>
            <a  class="inside" href="">Forgot password?</a><br><br>
            <button class="inside" type="submit">Submit</button> </div>
        </form>
       
       <div class="footer"> <footer>New to DigiMart? <a href="Untitled-1.html">Sign Up here!</a></footer></div>
    </body>
</html>
