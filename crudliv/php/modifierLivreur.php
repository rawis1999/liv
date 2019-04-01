<HTML>
<head>
</head>
<body>
<?php
include "livreur.php";
include "livreurC.php";
if (isset($_GET['cin'])){
	$livreurC=new LivreurC();
    $result=$livreurC->recupererLivreur($_GET['Cin']);
	foreach($result as $row){
		$Cin=$row['Cin'];
		$Nom=$row['Nom'];
		$Prenom=$row['Prenom'];
		 $Ville=$row['Ville'];
        $NomEntreprise=$row['NomEntreprise'];
        $Telephone=$row['Telephone'];
        $Adresse=$row['Adresse'];
        $Gouvernerat=$row['Gouvernerat'];
        $Pays=$row['Pays'];
        $Email=$row['Email'];
?>
<form method="POST">
<table>
<caption>Modifier Livreur</caption>
<tr>
<td>CIN</td>
<td><input type="number" name="cin" value="<?PHP echo $cin ?>"></td>
</tr>
<tr>
<td>Nom</td>
<td><input type="text" name="nom" value="<?PHP echo $nom ?>"></td>
</tr>
<tr>
<td>Prenom</td>
<td><input type="text" name="prenom" value="<?PHP echo $prenom ?>"></td>
</tr>
<tr>
<td>nb heures</td>
<td><input type="number" name="nbH" value="<?PHP echo $nbH ?>"></td>
</tr>
<tr>
<td>tarif horaire</td>
<td><input type="text" name="tarifH" value="<?PHP echo $tarifH ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="cin_ini" value="<?PHP echo $_GET['cin'];?>"></td>
</tr>
</table>
</form>
<?PHP
	
if (isset($_POST['modifier'])){
	$livreur=new livreur($_POST['cin'],$_POST['nom'],$_POST['prenom'],$_POST['Adresse'],$_POST['Ville'],$_POST['NomRntreprise'],$_POST['Telephone'],$_POST['Gouvernerat'],$_POST['Email'],$_POST['Pays'],$_POST['CodePostal']);
	$livreurC->modifierLivreur($livreur,$_POST['Cin_ini']);
	echo $_POST['Cin_ini'];
	header('Location: afficherLivreur.php');

?>
</body>
</HTMl>