<?php
  $exercice ='Exercice 5';
  include '../header.php';
  $tabRegionHDF = ['02'=>'Aisne','59'=>'Nord','60'=>'Oise','62'=>'Pas de Calais','80'=>'Somme'];
?>
<h1>Créer un tableau associatif avec comme index le numéro des départements des Hauts de France et en valeur leur nom.
</h1>
<?php foreach ($tabRegionHDF as $key => $value) { ?>
  <p><?= $key ?> <?= $value ?> </p>
<?php
}
?>
  </body>
</html>
