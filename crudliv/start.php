<?PHP
include "livreur.php";
include "livreurC.php";
$livreur=new Livreur(15006958,'Jouini','Siwar','29 Rue hannibal carthage salambo ','carthage','rien',52435675,'Tunis','siwar.jouini@esprit.tn','tunisie',2025);
$livreurC=new LivreurC();
$livreurC->afficherEmploye($livreur);
echo "****************";
echo "<br>";
echo "Cin:".$livreur->getCin();
echo "<br>";
echo "Nom:".$livreur->getNom();
echo "<br>";
echo "Prenom:".$livreur->getPrenom();
echo "<br>";
echo "Adresse:".$livreur->getAdresse();
echo "<br>";
echo ":Ville".$livreur->getVille();
echo "<br>";
echo "NomEntreprise:".$livreur->getNomEntreprise();
echo "<br>";
echo "Telephone:".$livreur->getTelephone();
echo "<br>";
echo "Gouvernerat:".$livreur->getGouvernerat();
echo "<br>";
echo "Email:".$livreur->getEmail();
echo "<br>";
echo "Pays:".$livreur->getPays();
echo "<br>";
echo "CodePostal:".$livreur->getCodePostal();


 
echo "<br>";


?>