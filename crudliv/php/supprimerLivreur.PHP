<?PHP
include "livreurC.php";
$livreurC=new LivreurC();
if (isset($_POST["Cin"])){
	$livreurC->supprimerLivreur($_POST["Cin"]);
	header('Location: check_afficherlivreur.php');
}

?>