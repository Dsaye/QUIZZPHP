<?php
    session_start();
    if(!isset($_SESSION['score'])){
        $_SESSION['score']=0;
     }
     if(!isset($_SESSION['n'])){
        $_SESSION['n']=1;
     }else {
        $_SESSION['n']= $_SESSION['n'];
     }
   
   if(!isset($_SESSION['Tab_reponse'])){
    $_SESSION['Tab_reponse']=array();
   }else {
       if($_SESSION['score']==0){
        $_SESSION['Tab_reponse']=array();
       }
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css"> -->
    <title>Document</title>
</head>
<body>
          <div class="container-fluid bg-info " style="height: 650px;">
          <button class="btn btn-danger" style="float: right;"><a href="index.php">Deconnecter</a></button> <br>
            <div class="row">
                <div class="col-md-3 ">
                    <p><?php
                      if(isset($_POST['btn4'])){
                        echo $_SESSION['i']."&nbsp;&nbsp;&nbsp; x  &nbsp;&nbsp;&nbsp; ".  $_SESSION['j'] ."&nbsp;&nbsp;&nbsp;  = &nbsp;&nbsp;&nbsp; ".$_POST['reponse']; 
                        if($_SESSION['result'] == $_POST['reponse']){
                            $_SESSION['score']+=4;
                            $_SESSION['n']+=1;
                            $val= strval($_SESSION['i'].'X'.$_SESSION['j'].'='.$_SESSION['result']) ;
                            array_push( $_SESSION['Tab_reponse'],array($val=> "oui")  );
                            echo "<div class='alert alert-success' role='alert'>
                            Felicitation !
                         </div>";
                        }else {
                            $_SESSION['n']+=1;
                            $val= strval($_SESSION['i'].'X'.$_SESSION['j'].'='.$_SESSION['result']);
                            array_push( $_SESSION['Tab_reponse'],array($val=> "non")  );
                            echo "<div class='alert alert-danger' role='alert'>
                            Mauvaise  !
                        </div>";
                        }
                        if($_SESSION['n']>5){
                            $termin=true;
                            foreach($_SESSION['Tab_reponse'] as $t){
                                foreach ($t as  $q=> $rep){
                                    if($rep=='false'){
                                        echo "<div class='alert alert-danger'>".$q." : ".$rep." </div>";
                                    }else {
                                        echo "<div class='alert alert-success'>".$q." : ".$rep." </div>";
                                    }
                                }
                             
                            }
                        }
                      } 
                     
                      
                      ?>
                      </p>
                      <?php if(!isset($termin)){ ?>
                      <h3 class='fw-bolder mt-3'>Question :<?php echo   $_SESSION['n'] ; ?></h3>
                      <?php } ?>
                </div>
                <div class="col-md-3 offset-md-3">
                    <?php
                    
                         echo  "<h1 class='fw-bolder  mt-3'> Score  :".$_SESSION['score']."/20 </h1>";
                         if($_SESSION['n']>5){
                            echo "<div class='text-center'><h1>Jeux terminé </h1><a href='./etape4.php' class='btn btn-info'>Recommencez</a> </div>";
                            echo "<div class='text-center mt-5'><a href='./accueil.php' class='btn btn-info'>Page accueil</a> </div>";

                           unset($_SESSION['n']);
                           $_SESSION['n']=1;
                           unset( $_SESSION['score']);
                           $_SESSION['score']=0;
                          
                       }
                    ?>
                </div>
            </div>
            <div class="row">
           <?php if(!isset($termin)){ ?>
            <form action="" method="POST" class="text-center">
            <div class='form-group mt-5 '>
                       <label> 
                        <?php
                            $_SESSION['i']=rand(1,10);
                            $_SESSION['j']=rand(1,10);
                             echo  "<h2 class='text-center'>".$_SESSION['i'].'  x  '. $_SESSION['j']."</h2>";
                             $_SESSION['result'] = $_SESSION['i'] *  $_SESSION['j']; 
                             
                         ?>
                        </label>
                        <br>
                        <div class="col-sm-10 offset-1">
                        <input type="number" class="form-control" name="reponse">
                        </div>
                        <button class="btn btn-success btn-large mt-3 " type="submit" name="btn4">valider</button>
            </div>
                
            </form>
            <div class=' mt-5'><h1> </h1><a href='./accueil.php' class='btn btn-success'>Page accueil</a> </div>

            <?php } ?>
            </div>
        </div>
               
            </div>
      </div>
    </div>
  
  
</body>
</html>