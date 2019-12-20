<?php
  $exercice ='Exercice 7';
  include '../header.php';
  $tabRegionHDF = ['02'=>'Aisne','59'=>'Nord','60'=>'Oise','62'=>'Pas de Calais','80'=>'Somme'];
  $tabRegionHDF['51'] = 'Marne';
?>
<h1>Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Reims.</h1>
<?php foreach ($tabRegionHDF as $key => $value) { ?>
  <p><?= $key ?> <?= $value ?> </p>
<?php
}
?>
  </body>
</html>
