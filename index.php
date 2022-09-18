<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

<main>
  <p>Send e-mail</p>
  <form class="contact-form" action="contactform.php" method="POST">
    <input type="text" name="name" placeholder="Full Name">
    <input type="text" name="mail" placeholder="Your email">
    <input type="text" name="subject" placeholder="Subject">
    <textarea name="message" rows="8" cols="80" placeholder="Message"></textarea>
    <button type="submit" name="submit"> Send mail</button>
  </form>
</main>

  </body>
</html>
