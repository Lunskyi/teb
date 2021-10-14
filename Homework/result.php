    <?php
    //echo $_POST['date'];
    if (!empty($_POST['date'])&&!empty($_POST['marka_auta'])&&!empty($_POST['model'])&&!empty($_POST['color']))
      {
        $date=substr($_POST['date'],0,4);
        $marka_auta=mb_strtoupper($_POST['marka_auta']);
        $model=mb_strtoupper(trim($_POST['model']));
        if ($date>=2011) {
          echo <<<T
      Dane uzytkownika <br><hr>
      Marka auto: $marka_auta <br>
      Model auto: $model <br>
      Kolor auto: $_POST[color] <br>
      Rok: $date
      T;
      } else {
        echo <<<T
        Dane uzytkownika <br><hr>
        Marka auto: $marka_auta <br>
        Model auto: $model <br>
        Kolor auto: $_POST[color] <br>
        Rok: $date <br><hr>
        Samochud ma ponad 20 lat. Kup nowe auto)
    T;

    }}
      else {
        ?>
        <script type="text/javascript">
          alert("ERROR 404 \nPodaj dani prawidlowo. \nNie moze pole byc puste/nie wybrane.");
          history.back();
        </script>

        <?php
        }
     ?>

      <h2> <a href="auto.php">Powrót do Głównej Stranicy</a></h2>
