<?php 
include("identifier.php");
include("connexion.php");
$cin=isset($_GET['ids'])?$_GET['ids']:0;
$requet="select* from stagaire where cin='$cin'";
$res=mysqli_query($idcon,$requet);
$ligne=mysqli_fetch_array($res);
$nom=$ligne[1];
$prenom=$ligne[2];
$ins=$ligne[3];
$dip=$ligne[4];
$niv=$ligne[5];
$spec=$ligne[6];
$tel=$ligne[7];
$email=$ligne[8];
$nomcv=$ligne[9];
?>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script language="javascript" src="verification.js"></script>
  <script src="sweetalert.min.js"></script>
<link rel="stylesheet" href="sweetalert.min.css"> 
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

    <body>
    <?php include('menu.php');?>
    <div class="container">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Edition Stagiaire</div>
                            <div class="panel-body">
                                <form name="form_stagiaire" class="form" method="POST"  enctype="multipart/form-data"  action="editer_action.php"  onSubmit="return verif()">

                                <div class="form-group">
                                <?php $id=isset($_GET['ids'])?$_GET['ids']:0;?>       
                                <label for="cin">CIN:  <?php echo $id;?></label>
                                 <input type="hidden" name='cin' value= <?php echo $id;?>>
                                
                                    </div>

                                    <div class="form-group">
                                        <label for="nom">Nom</label>
                                        <input type="text" name='nom'  placeholder="Nom"   class="form-control" value= <?php echo $nom;?> >                            
                                    </div>

                                    <div class="form-group">
                                        <label for="prenom">Prenom</label>
                                        <input type="text" name='prenom'  placeholder="Prenom" class="form-control" value= <?php echo $prenom;?>> 
                                    </div>
                                    <div class="form-group">
                                        <label for="institut">Institut</label>
                                        <input type="text" name='institut'  placeholder="Institut" class="form-control"  value= <?php echo $ins;?>>                            
                                    </div>

                                    <div class="form-group">
                                        <label for="diplome">Diplome</label>
                                        <input type="text" name='diplome'  placeholder="Diplome" class="form-control" value= <?php echo $dip;?>> 
                                    </div>

                                    <div class="form-group">
                                        <label for="niveau">Niveau d'etude</label>
                                        <select name='niveau' class="form-control" > 
                                            <option value="Niveau" <?php if($niv=='Niveau') echo'selected'?>>Niveau</option>
                                            <option value="Bac+1" <?php if($niv=='Bac+1') echo'selected'?>>Bac+1</option>
                                            <option value="Bac+2" <?php if($niv=='Bac+2') echo'selected'?>>Bac+2</option>
                                            <option value="Bac+3" <?php if($niv=='Bac+3') echo'selected'?>>Bac+3</option>
                                            <option value="Bac+4" <?php if($niv=='Bac+4') echo'selected'?>>Bac+4</option>
                                            <option value="Bac+5" <?php if($niv=='Bac+5') echo'selected'?>>Bac+5</option>
                                            <option value="Bac+6" <?php if($niv=='Bac+6') echo'selected'?>>Bac+6</option>


                                            </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="spec">Specialit??</label>
                                        <input type="text" name='spec' placeholder="Specialit??" class="form-control" value= <?php echo $spec;?>> 
                                    </div>
                        


                                    <div class="form-group">
                                        <label for="tel">N?? Telephone</label>
                                        <input type="text" name='tel'  placeholder="N?? Telephone" class="form-control" value= <?php echo $tel;?>> 
                                    </div>


                                    <div class="form-group">
                                        <label for="mail">E-mail</label>
                                        <input type="text" name='mail'  placeholder="E-mail" class="form-control" value= <?php echo $email;?>> 
                                    </div>
                                    <div class="form-group">
                                        <label for="cv">CV</label>
                                        <input type="file" name='cv'   class="form-control" value= "<?php echo $nomcv;?>"> 
                                    </div>
                                    <input type="submit" value="Editer" class="btn btn-primary">
                                    <input type="reset" value="Annuler" class="btn btn-primary" >

                                </form>
                        </div>
                    </div>
                </div>
                             
         <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
     </body>
</html>
