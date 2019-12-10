<?php
  $exercice ='Exercice 6';
  include '../header.php';
  $tabRegionHDF = ['02'=>'Aisne','59'=>'Nord','60'=>'Oise','62'=>'Pas de Calais','80'=>'Somme'];
?>
<h1>Avec le tableau de l'exercice 5, afficher la valeur de l'index 59.</h1>
  <p><?= $tabRegionHDF[59] ?> </p>
  </body>
</html>
