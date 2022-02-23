<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="prihlasenie.css">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Prihlasenie</title>
</head>
 <body>
     <p>Vitajte, pre prihlásenie zadajte meno a heslo.</p>

     <form method="POST" action="login.php">

     <div class="container" id="container">
     <div class="form-container sign-in-container">
        <div class="form__input-group">
          <label for="username">Meno: </label>
         <input name="meno" typ="text" /><br />

         </div>
        <div class="form__input-group">
          <label for="pass">Heslo: </label>
    
         <input name="heslo" typ="text" /><br />
         <input type="submit" value="Prihlásiť" />
    </form>

</body>
</html>

