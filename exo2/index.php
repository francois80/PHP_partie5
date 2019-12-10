<?php
  $exercice ='Exercice 2';
  include '../header.php';
  $tabMonth = ['janvier','février','mars','avril','mai','juin','juiller','aout','septempbre',
              'novembre','décembre'];
  $mois = $tabMonth[2];
?>
<h1>Avec le tableau de l'exercice 1, afficher la valeur de la troisième ligne de ce tableau.
</h1>
  <p><?= $mois ?></p>
  </body>
</html>
