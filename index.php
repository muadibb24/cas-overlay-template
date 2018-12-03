<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Autenticacion Correcta</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <div class="container">
      <h1>Secured Content</h1>
      <p><big>This is some secure content. You should not be able to see it until you have entered your username
        and password.</big></p>
      <h2>Attributes Returned by CAS</h2>
      <?php
        echo "<pre>";

        if (array_key_exists('REMOTE_USER', $_SERVER)) {
            echo "REMOTE_USER = " . $_SERVER['REMOTE_USER'] . "<br>";
        }

        $headers = getallheaders();
        foreach ($headers as $key => $value) {
            if (strpos($key, 'CAS-') === 0) {
                echo substr($key, 4) . " = " . $value . "<br>";
            }
        }

        echo "</pre>";
      ?>
    </div>
  </body>
</html>