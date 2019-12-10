<?php
  $exercice ='Exercice 9';
  include '../header.php';
  $tabRegionHDF = ['02'=>'Aisne','59'=>'Nord','60'=>'Oise','62'=>'Pas de Calais','80'=>'Somme'];
?>
<h1>Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau.</h1>
<?php foreach ($tabRegionHDF as $key => $value) { ?>
  <p><?= $key ?> <?= $value ?> </p>
<?php
}
?>
  </body>
</html>
