<?php 
  $polonczenie = mysqli_connect('localhost', 'root', '', 'psy');
  $login = trim($_POST['login'] ?? '');
  $haslo = $_POST['haslo'] ?? '';
  $powtorz = $_POST['powtorz'] ?? '';
  
  if ($login === '' || $haslo === '' || $powtorz === '') {
    echo '<p>wypełnij wszystkie pola</p>';
    
    
    $q1 = "SELECT login FROM uzytkownicy WHERE login = '$login'";
    $r1 = mysqli_query($polonczenie, $q1);
    if (mysqli_num_rows($r1) > 0) {
      echo '<p>login występuje w bazie danych, konto nie zostało dodane</p>';
    }
    elseif ($haslo !== $powtorz) {
      echo '<p>hasła nie są takie same, konto nie zostało dodane</p>';
    }
    else {
      $hash = sha1($haslo);
      $q2 = "INSERT INTO uzytkownicy (login, haslo) VALUES ('$login', '$hash')";
      mysqli_query($q2, $polonczenie);
      echo '<p>Konto zostało dodane</p>';
    }
    mysql_close($polonczenie);
    ?>

<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Forum o psach</title>
    <link rel="stylesheet" href="styl4.css" />
  </head>

  <body>
    <header>
      <h1>Forum wielbicieli psów</h1>
    </header>
    <section id="lewy">
      <img src="obraz.jpg" alt="foksterier" />
    </section>
    <section id="prawy1">
      <h2>Zapisz się</h2><br />
      <form action="logowanie.php" method="post">
        <label>login: </label><input name="login" type="text" /><br />
        <label>hasło: </label><input name="haslo" type="password" /><br />
        <label>powtórz hasło: </label><input name="powtorz" type="password" /><br />
        <button type="submit">Zapisz</button>
      </form>
    </section>
    <section id="prawy2">
      <h2>Zapraszamy wszystkich</h2>
      <ol>
        <li>właścicieli psów</li>
        <li>weterynarzy</li>
        <li>tych, co chcą kupić psa</li>
        <li>tych, co lubią psy</li>
      </ol>
      <a href="regulamin.html">Przeczytaj regulamin</a>
    </section>
    <footer>Stronę wykonał: 00000000000</footer>
  </body>
</html>