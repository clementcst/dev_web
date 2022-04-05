<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>Notes</title>
</head>

<body>
  <form id="mforms" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <p>
      <label>Valeur 1 :
        <input type="text" name=0 />
       </label>
    </p>
    <p>
      <label>Valeur 2:
        <input type="text" name=1 />
      </label>
    </p>
    <p>
      <label>Valeur 3:
        <input type="text" name=2 />
       </label>
    </p>
    <p>
      <label>Valeur 4:
        <input type="text" name=3 />
      </label>
    </p>
    <p>
      <label>Valeur 5:
        <input type="text" name=4 />
      </label>
    </p>
    <p>
      <label>
        <input type="submit" name=envoyer value="Envoyer" />
      </label>
    </p>
  </form>

      <?php
    include 'tri-bulle.php';
    if (isset($_POST['envoyer']))
    {
      $_POST = trier($_POST,6);
    
      echo "<table border='1' align='center'>";
      echo "<tr>";
      echo"<td>Valeur</td>" ;
      echo"</tr>";
      for ($nbr=0;$nbr<5;$nbr++)
      {
      echo "<tr>";
      echo"<td>";
      echo $_POST[$nbr];
      echo"</td>";
      echo "</tr>";
      }
      echo "</tr>";
      echo "</table>";
    }
    
    ?>

</body>
</html>