<!DOCTYPE html>    
<html>    
<head>    
    <title>Register Form</title>    
    <link rel="stylesheet" type="text/css" href="css/style.css">    
</head> 
<style>
Body {
  font-family: Verdana, Helvetica, sans-serif;
  background-color:       #06F4FF;
}
button {
       background-color: #F1EA01;
       width: 100%;
        color: black;
        padding: 10px;
        margin: 10px 0px;
        border: none;
        cursor: pointer;
        border: 2px solid black; 
         }
 form {
        border: 3px solid black;
    }
 input[type=text], input[type=password] {
        width: 100%;
        margin: 8px 0;
        padding: 10px 18px;
        display: inline-block;
        border: 2px solid black;
        box-sizing: border-box;
    }
 button:hover {
        opacity: 0.7;
    }
  .cancelbtn {
        width: auto;
        padding: 12px 18px;
        margin: 10px 8px;
    }


 .container {
        padding: 18px;
        background-color: #0076E9;
    }
</style>

<body>    
    <h2>Register Page</h2><br>    
    <div class="regis">    
    <form id="regis" method="get" action="regis.php">
        <label><b>E-mail 
        </b>    
        </label>    
        <input type="text" name="E-mail" id="E-mail" placeholder="E-mail">    
        <br><br> 
        <label><b>User Name     
        </b>    
        </label>    
        <input type="text" name="Uname" id="Uname" placeholder="Username">    
        <br><br>    
        <label><b>Password     
        </b>    
        </label>    
        <input type="Password" name="Pass" id="Pass" placeholder="Password">    
        <br><br>    
        <input type="button" name="log" id="log" value="Log In Here">       
        <br><br>    
        <input type="checkbox" id="check">    
        <span>Remember me</span>    
        <br><br>    
        Already registered? <a href="BING CHILLING.php">Login</a>    
    </form>     
</div>    
</body>    
</html> 