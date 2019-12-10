<?php
  $exercice ='Exercice 10';
  include '../header.php';
  $tabRegionHDF = ['02'=>'Aisne','59'=>'Nord','60'=>'Oise','62'=>'Pas de Calais','80'=>'Somme'];
  $tabRegionHDF['51'] = 'Reims';
?>
<h3>Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés.<br>
Cela pourra être, par exemple, de la forme : "Le département" + nom du département + "a le numéro" + numéro du département</h3>
<?php foreach ($tabRegionHDF as $key => $value) { ?>
  <p>Le département <?= $value ?> à le numéro <?= $key ?>.</p>
<?php
}
?>
  </body>
</html>
