<?php
  $exercice ='Exercice 8';
  include '../header.php';
  $tabMonth = ['janvier','février','mars','avril','mai','juin','juiller','aout','septempbre',
              'novembre','décembre'];
?>
<h1>Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau.</h1>
  <?php
    foreach ($tabMonth as $value) {
    ?>
    <p><?= $value ?></p>
    <?php
    }
  ?>
</body>
</html>
