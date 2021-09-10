<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Feuille de style -->
    <link rel="stylesheet" href="css/style.css">
    <!-- MDB -->
    <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
    
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <title>Etape 4</title>
</head>
<body>
<div class="container-fluid bg-info " style="min-height: 650px;">
        <div class="row">
            <div class="col-md-4 offset-md-4">
<?php
$a = array();
if (isset($_POST["val1"])) $a[1]=1;
  else $a[1]=0;
if (isset($_POST["val2"])) $a[2]=2;
  else $a[2]=0;
if (isset($_POST["val3"])) $a[3]=3;
  else $a[3]=0;
if (isset($_POST["val4"])) $a[4]=4;
  else $a[4]=0;
if (isset($_POST["val5"])) $a[5]=5;
  else $a[5]=0;
if (isset($_POST["val6"])) $a[6]=6;
  else $a[6]=0;
if (isset($_POST["val7"])) $a[7]=7;
  else $a[7]=0;
if (isset($_POST["val8"])) $a[8]=8;
  else $a[8]=0;
if (isset($_POST["val9"])) $a[9]=9;
  else $a[9]=0;
if (isset($_POST["val10"])) $a[10]=10;  
  else $a[10]=0;
 
 
for($x=1;$x<11;$x++)
 {
 if ($a[$x]!=0)
  {
  echo "<h3>"."Table de multiplication de ".$a[$x]." <h3></br></br>";
  echo "<table >";
  for($i=1;$i<11;$i++)
		{
   $r=$a[$x]*$i;
   echo "<tr><td><h3> ".$i. " </h3></td><td><h3> X </h3></td><td><h3> " .$a[$x]. " </h3></td><td><h3> = </h3></td><td><h3> $r </h3></td></tr>";
		}
  echo "</table><br />";
  }
  
 }
?>
<a class="btn btn-success" href="etape2.php">retour</a>
</div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    <!-- MDB -->
    <script
        type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
</body>
</html>
