<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<div class="container-fluid bg-info " style="height: 650px;">
<button class="btn btn-danger" style="float: right;"><a href="index.php">Deconnecter</a></button> <br>

<h1 class="text-center">CHOISIR VOTRE TABLE DE MULTIPLICATION </h1>

<?php
session_start();
if (isset($_POST['valide']) || isset($_POST['valide_bonne_valeur'])) {
         if(isset($_POST['valide']) AND !empty($_POST['table']) ){
            @$_SESSION['val_aleratoire']=rand(1,10);
            @$_SESSION['table']=$_POST['table'];
            echo "<span class='text-center ml-4 ml-4 fs-1'> Question : ".$_SESSION['table'] ."x ".$_SESSION['val_aleratoire']." 
            <form method='POST' class='mx-auto text-center form p-4  ml-5'>
            <input name='bonne' type='number'> 
            <button type='submit' name='valide_bonne_valeur'>valider</button></span>
            </form></div>";
        }

        if(isset($_POST['valide_bonne_valeur'])){
         $_SESSION['bonne']=$_POST['bonne'];
         $resul= $_SESSION['val_aleratoire']*$_SESSION['table'];
        if( $_SESSION['bonne']==$resul){
            
             echo "<div class='alert alert-success' role='alert'>
             Felicitation ! Rejouez
          </div>";
        }else {
            echo "<div class='alert alert-danger' role='alert'>
            Mauvaise Reponse ! Rejouez
        </div>";
            }
        } 
    }  
                         
  ?>


   <div class="row">
    <div class="col-sm-10offset-1">
    <form method="POST"  >
            
                            <div class="form-group  mt-5">
                                <select name="table" id="" class="form-control">
                                            <option  >choisir une table<table></table></option> 
                                            <option value="1">table 1</option>
                                            <option value="2">table 2</option>
                                            <option value="3">table 3</option>
                                            <option value="4">table 4</option>
                                            <option value="5">table 5</option>
                                            <option value="6">table 6</option>
                                            <option value="7">table 7</option>
                                            <option value="8">table 8</option>
                                            <option value="9">table 9</option>
                                </select>
                            </div>
                           <div class="form-group mt-4">
                           <button type="submit" class='btn btn-success w-4 offset-5' name='valide'>Verifier</button>
                            </div>     
                         </form>
                         <a class='btn btn-success'  href="index.php">Page accueil</a>
    </div>
   </div>
</div>
                         
                            
                       
                        
                   