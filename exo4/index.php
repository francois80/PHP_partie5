<?php
  $exercice ='Exercice 4';
  include '../header.php';
  $tabMonth = ['janvier','février','mars','avril','mai','juin','juiller','aout','septempbre',
              'novembre','décembre'];
  $tabMonth[7] = 'août';
?>
<h1>
  Avec le tableau de l'exercice 1, modifier le mois de aout pour lui ajouter l'accent manquant.
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
