<?php
  $con = mysqli_connect('localhost', 'root', '', 'wynajem');

  if($con){
    $sql = "SELECT * FROM pokoje";
    $query = mysqli_query($con, $sql);
    $res = "";
    while ($row = mysqli_fetch_row($query) ) {
      $res .= "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
    }
    mysqli_close($con);
  } else {
    echo "Brak połączenia z bazą";
  }

?>

<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Wynajem pokoi</title>
    <link rel="stylesheet" href="./styl2.css" />
  </head>
  <body>
    <section class="baner">
      <h1>Pensjonat pod dobrym humorem</h1>
    </section>
    <main class="main">
      <section class="lewy">
        <a href="index.html">GŁÓWNA</a>
        <img src="./1.jpg" alt="pokoje" />
      </section>
      <section class="srodek">
        <table>
            <?= $res; ?>
        </table>
      </section>        
      </section>
      <section class="prawy">
        <a href="kalkulator.html">KALKULATOR</a>
        <img src="./3.jpg" alt="pokoje" />
      </section>
    </main>
    <footer class="footer">
      <p>Stronę opracował: 00000000000</p>
    </footer>
  </body>
</html>
