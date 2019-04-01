<?PHP
include "config.php";
class LivreurC {
function afficherLivreur ($livreur){
		echo "Cin: ".$livreur->getCin()."<br>";
		echo "Nom: ".$livreur->getNom()."<br>";
		echo "Prénom: ".$livreur->getPrenom()."<br>";
		echo "Adresse: ".$livreur->getAdresse()."<br>";
		echo "Ville: ".$livreur->getVille()."<br>";
		echo "NomEntreprise: ".$livreur->getNomEntreprise()."<br>";
		echo "Telephone: ".$livreur->getTelephone()."<br>";
		echo "Gouvernerat: ".$livreur->getGouvernerat()."<br>";
		echo "Email: ".$livreur->getEmail()."<br>";
		echo "Pays: ".$livreur->getPays()."<br>";
		echo "CodePostal: ".$livreur->getCodePostal()."<br>";
			
	}
	
	function ajouterLivreur($livreur){
		$sql="INSERT INTO  livreur (Cin,Nom,Prenom,Adresse , Ville,NomEntreprise,Telephone,Gouvernerat,Pays,Email,CodePostal) VALUES (:Cin, :Nom,:Prenom , :Adresse ,:Ville , :NomEntreprise,:Telephone, :Gouvernerat, :Pays, :Email, :CodePostal)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $Cin=$livreur->getCin();
        $Nom=$livreur->getNom();
        $Prenom=$livreur->getPrenom();
        $Adresse=$livreur->getAdresse();
        $Ville=$livreur->getVille();
        $NomEntreprise=$livreur->getNomEntreprise();
        $Telephone=$livreur->getTelephone();
        
        $Gouvernerat=$livreur->getGouvernerat();
        $Pays=$livreur->getPays();
        $Email=$livreur->getEmail();
        $CodePostal=$livreur->getCodePostal();
      
		$req->bindValue(':Cin',$Cin);
		$req->bindValue(':Nom',$Nom);
		$req->bindValue(':Prenom',$Prenom);
		$req->bindValue(':Adresse',$Adresse); 
		$req->bindValue(':Ville',$Ville);
		$req->bindValue(':NomEntreprise',$NomEntreprise);
		$req->bindValue(':Telephone',$Telephone);
		
		$req->bindValue(':Gouvernerat',$Gouvernerat);
		$req->bindValue(':Pays',$Pays);
		$req->bindValue(':Email',$Email);
		$req->bindValue(':CodePostal',$CodePostal);
        $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherLivreurs(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From livreur";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerLivreur($cin){
		$sql="DELETE FROM livreur where Cin= :Cin";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':Cin',$cin);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierLivreur($livreur,$cin){
		$sql="UPDATE employe SET Cin=:cinn, Nom=:Nom,Prenom=:Prenom,Ville=:Ville , NomEntreprise=:NomEntreprise, Telephone=:Telephone, Adresse=:Adresse, Gouvernerat=:Gouvernerat, Pays=:Pays, Email=:Email, Codepostal=:Codepostal WHERE Cin=:Cin";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$cinn=$livreur->getCin();
        $Nom=$livreur->getNom();
        $Prenom=$livreur->getPrenom();
        $Ville=$livreur->getVille();
        $NomEntreprise=$livreur->getNomEntreprise();
        $Telephone=$livreur->getTelephone();
        $Adresse=$livreur->getAdresse();
        $Gouvernerat=$livreur->getGouvernerat();
        $Pays=$livreur->getPays();
        $Email=$livreur->getEmail();
       
		$datas = array(':cinn'=>$cinn, ':Cin'=>$cin, ':Nom'=>$Nom,':Prenom'=>$Prenom, ':Ville'=> $Ville, ':NomEntreprise'=>$NomEntreprise, ':Telephone'=>$Telephone, ':Adresse'=>$Adresse, ':Gouvernerat'=>$Gouvernerat, ':Pays'=>$Pays, ':Email'=>$Email,':Codepostal'=> $Codepostal);
		$req->bindValue(':cinn',$cinn);
		$req->bindValue(':cin',$cin);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':nbH',$nb);
		$req->bindValue(':tarifH',$tarif);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererLivreur($cin){
		$sql="SELECT * from employe where Cin=$cin";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	
}

?>