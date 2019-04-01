<?PHP
include "../entities/livreur.php";
include "../core/livreurC.php";


if (isset($_POST['Cin']) and isset($_POST['Nom']) and isset($_POST['Prenom']) and isset($_POST['Adresse']) and isset($_POST['Ville']) and isset($_POST['NomEntreprise'])and isset($_POST['Telephone']) and isset($_POST['Gouvernerat']) and isset($_POST['Email']) and isset($_POST['Pays']) and isset($_POST['CodePostal'])     )
{
$livreur1=new Livreur($_POST['Cin'],$_POST['Nom'],$_POST['Prenom'],$_POST['Adresse'],$_POST['Ville'],$_POST['NomEntreprise'],$_POST['Telephone'],$_POST['Gouvernerat'],$_POST['Email'],$_POST['Pays'],$_POST['CodePostal']);
$livreur1C=new LivreurC();
$livreur1C->ajouterLivreur($livreur1);
echo " <br> livreur ajoute";

header('Location: checkout_livraison.php');


}
else{
  
  echo"try again ";

}

/*
if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
  if (empty($_POST["Cin"])) 
  {$cinErr = "Cin is required";
   
  }
  else {
    $Cin = test_input($_POST["Cin"]);
    
    // check if cin only contains numbers
     if (!preg_match("/^[0..9 ]*$/",$Cin)) 
     {
      $cinErr = "Only numbers are allowed"; 
     }
   }
   if (empty($_POST["Nom"])) {
    $nomErr = "Name is required";
    
  } else {
    
    $Nom = test_input($_POST["Nom"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$Nom)) {
      $nomErr = "Only letters and white space allowed"; 
      
    }
  }
if (empty($_POST["Prenom"])) {
    $prenomErr = "last name is required";
  
  } else {
    $Prenom = test_input($_POST["Prenom"]);
    
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$Prenom)) {
      $prenomErr = "Only letters and white space allowed"; 
     
    }
  }
  if (empty($_POST["NomEntreprise"])) {
    $nomEntrepriseErr = "NomEntreprise is required";

  } else {
    
    $NomEntreprise = test_input($_POST["NomEntreprise"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$NomEntreprise)) {
     
      $nomEntrepriseErr = "Only letters and white space allowed"; 
    }
  }
 
if (empty($_POST["Gouvernerat"])) {

    $gouverneratErr = "Gouvernerat is required";
  } else {
    
    $Gouvernerat = test_input($_POST["Gouvernerat"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$Gouvernerat)) {
      
      $gouverneratErr = "Only letters and white space allowed"; 
    }
  }
  if (empty($_POST["Ville"])) {
    $villeErr = "ville is required";
    
  } else {
    $Ville = test_input($_POST["Ville"]);
    
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$Ville)) {
      $villeErr = "Only letters and white space allowed"; 
      
    }

  }


   if (empty($_POST["Adresse"])) {
    $adresseErr = "Adresse is required";
   
  } else {
    $Adresse = test_input($_POST["Adresse"]);
    
    // check if name only contains letters and whitespace
    if (!preg_match("/^[0-9a-zA-Z ]*$/",$Adresse)) {
      
      $adresseErr = "Only letters ,  numbers and white space allowed"; 
    }
  }


  if (empty($_POST["Pays"])) {
    $paysErr = "Pays is required";
    
  } else {
    $Pays = test_input($_POST["Pays"]);
    
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$Pays)) {
     
      $paysErr = "Only letters and white space allowed"; 
    }
  }

if (empty($_POST["Telephone"])) 
  {$telephoneErr = "Telephone is required";

  }
  else {
    
    $Telephone = test_input($_POST["Telephone"]);
    // check if cin only contains numbers
     if (!preg_match("/^[0-9\-]|[\+0-9]|[0-9\s]|[0-9()]*ù$/",$Telephone)) 
     {
      $telephoneErr = "Only numbers are allowed"; 
     }
   }
   if (empty($_POST["CodePostal"])) 
  {$codePostalErr = "CodePostal is required";
  }
  else {
    $CodePostal = test_input($_POST["CodePostal"]);
    // check if cin only contains numbers
     if (!preg_match("/^[0..9 ]*$/",$CodePostal)) 
     {
      $codePostalErr = "Only numbers are allowed"; 
     }
   }

   if (empty($_POST["Email"])) {
    $emailErr = "Email is required";
  } else {
    $Email = test_input($_POST["Email"]);
    // check if e-mail address is well-formed
    if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }



}


*/

?>

