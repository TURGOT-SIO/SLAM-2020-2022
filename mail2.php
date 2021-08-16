
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <title>ENI -top 10 - partie 3</title>
    <style type="text/css">
    #wrapper{
      margin: 0 200px 0 200px;
    }
    </style>
      <script src='https://www.google.com/recaptcha/api.js'></script>
  </head>
<body>
CAPTCHA incorrect 
<div id="wrapper">
  <h1>Page destiné à envoyé un mail (mail2.php) pour l'exercice CSRF</h1>
     <form action="mail2.php" method="post">
      <fieldset>
      <label>entrez votre email</label>
      <input type="email" name="email" placeholder="votre email ici"></input>
      </fieldset>
      <input type="submit"></input>
      <div class="g-recaptcha" data-sitekey="6LeNVwsUAAAAAJ7YtwylXtfP_DnoGpF4NiXu1Vj9"></div>
     </form>
   <p>voici le script utilisé pour l'envoi du mail</p>
   <textarea cols="150" rows="25">
    
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <title>ENI -top 10 - partie 3</title>
    <style type="text/css">
    #wrapper{
      margin: 0 200px 0 200px;
    }
    </style>
  </head>
<body>
<div id="wrapper">
  <h1>Page destiné à envoyé un mail (mail2.php) pour l'exercice CSRF</h1>
     <form action="mail2.php" method="post">
      <fieldset>
      <label>entrez votre email</label>
      <input type="email" name="email" placeholder="votre email ici"></input>
      </fieldset>
      <input type="submit"></input>
     </form>
 </div>
 </body>
 </html>
 // ouverture PHP
      // mail
      $email = htmlentities($_POST["email"]);
     // Sujet
     $subject = 'Votre compte bancaire';
     // message
     $message = '
     <html>
      <head>
       <title>Exemple pour la vulnérabilité CSRF</title>
      </head>
      <body>
       <p>Consultez votre compte, <a href="http://localhost/evil/csrf.html">Cliquez ici</a></p>
      </body>
     </html>
     ';
     // en-tête du mail
     $headers  = 'MIME-Version: 1.0' . "\r\n";
     $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
     $headers .= 'To: COMPTE bWAPP <'.$email.'>' . "\r\n";
     $headers .= 'From: BANQUIER BWAPP <banque@bee.wapp>' . "\r\n";

     // envoie du mail          
     if(isset($email)){
           mail($email, $subject, $message, $headers);
     }
// fermeture PHP

   </textarea>
 </div>
 </body>
 </html>