<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Liv</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  

   
    <!-- Navbar Search -->
    

    <!-- Navbar -->


  <div id="wrapper">

    <!-- Sidebar -->
  

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
       
        <!-- DataTables Example -->

        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Example</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
    	<?php
                  include "../core/livreurC.php";
                    $livreur1C=new LivreurC();
                  $listeLivreurs=$livreur1C->afficherLivreurs();

                  //var_dump($listeEmployes->fetchAll());
                       ?>
       
                 
                  <tr>
                    <th>Cin</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Adresse</th>
                    <th>Ville</th>
                    <th>Nom Entreprise</th>
                    <th>Telephone</th>
                    <th>Gouvernerat</th>
                    <th>E-mail</th>
                    <th>Pays</th>
                    <th>Code Postal</th>
                  </tr>
                </thead>
                    <?PHP
                   foreach($listeLivreurs as $row){
	                ?>
	                 
               <tbody>
                  <tr>
                    <td><?PHP echo $row['Cin']; ?></td>
                    <td><?PHP echo $row['Nom']; ?></td> 
                    <td><?PHP echo $row['Prenom']; ?></td>
                    <td><?PHP echo $row['Adresse']; ?></td>
	                <td><?PHP echo $row['Ville']; ?></td>
	                <td><?PHP echo $row['NomEntreprise']; ?></td>
	                <td><?PHP echo $row['Telephone']; ?></td>
	                <td><?PHP echo $row['Gouvernerat']; ?></td>
	                <td><?PHP echo $row['Email']; ?></td>
	                <td><?PHP echo $row['Pays']; ?></td>
	                <td><?PHP echo $row['CodePostal']; ?></td>

	                <td><form method="POST" action="supprimerLivreur.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['Cin']; ?>" name="Cin">

	</form>
	</td>

	<td><a href="modifierLivreur.php?aziz=<?PHP echo $row['Cin']; ?>">
	Modifier</a></td>
	</tr>                       
             
                  <?php
}
?>


 <tfoot>
                  <tr>
                    <th>Cin</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Adresse</th>
                    <th>Ville</th>
                    <th>Nom Entreprise</th>
                    <th>Telephone</th>
                    <th>Gouvernerat</th>
                    <th>E-mail</th>
                    <th>Pays</th>
                    <th>Code Postal</th>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
<div>
<form>
	<a href="checkout_choix.php">
	<input type="button"   value= "Retour ">
	</a>



</form>
</div>
        <p class="small text-center text-muted my-5">
          <em>More table examples coming soon...</em>
        </p>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
     

  
    <!-- /.content-wrapper -->

 
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  
  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="../vendor/datatables/jquery.dataTables.js"></script>
  <script src="../vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="../js/demo/datatables-demo.js"></script>

</body>

</html>



