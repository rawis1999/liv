<?PHP
include "livraison.php";
include "livraisonC.php";


if (isset($_POST['Identifiant']) and isset($_POST['DateDebut']) and isset($_POST['DateFin'])  )
{
$livraison1=new livraison($_POST['Identifiant'],$_POST['DateDebut'],$_POST['DateFin']);
$livraison1C=new LivraisonC();
$livraison1C->ajouterLivraison($livraison1);
echo "livraison effectuee avec succes ";
header('Location: checkout_choix.php');
}
else{
  
  echo"try again ";

}



?>

