<?php
  $exercice ='Exercice 1';
  include '../header.php';
  $tabMonth = ['janvier','février','mars','avril','mai','juin','juiller','aout','septempbre',
              'novembre','décembre'];
?>
<h1>Créer un tableau months et l'initialiser avec les valeurs suivantes :<br>
    janvier, février, mars, avril, mai, juin, juillet, aout, septembre, octobre, novembre, décembre
</h1>
  <?php
    foreach ($tabMonth as $value) {
    ?>
    <p><?= $value ?></p>
    <?php
    }
  ?>
</body>
</html>
