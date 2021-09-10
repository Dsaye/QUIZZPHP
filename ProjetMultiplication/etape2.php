<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="bg-info">
<div class="container-fluid justify-content-center">
<button class="btn btn-danger mt-1" style="float: right;"><a href="index.php">Deconnecter</a></button> <br>
<div class="row mt-5">
    <div class="col-md-6 offset-5">
<form action="resultat2.php" method="post" class="fs-5">
   
			<INPUT TYPE='checkbox' NAME='val0' VALUE=0 /> 0<br />
            <INPUT TYPE='checkbox' NAME='val1' VALUE=1 /> 1<br />
            <INPUT TYPE='checkbox' NAME='val2' VALUE=2 /> 2<br />
            <INPUT TYPE='checkbox' NAME='val3' VALUE=2 /> 3<br />
            <INPUT TYPE='checkbox' NAME='val4' VALUE=4 /> 4<br />
            <INPUT TYPE='checkbox' NAME='val5' VALUE=5 /> 5<br />
            <INPUT TYPE='checkbox' NAME='val6' VALUE=6 /> 6<br />
            <INPUT TYPE='checkbox' NAME='val7' VALUE=7/> 7<br />
            <INPUT TYPE='checkbox' NAME='val8' VALUE=8 /> 8<br />
            <INPUT TYPE='checkbox' NAME='val9' VALUE=8 /> 9<br />
            <INPUT TYPE='checkbox' NAME='val10' VALUE=10 /> 10<br />
			<input type="submit" class="btn btn-success mt-4" value="Envoyer" />
	</form><br />
	
    </div>
    </div>
    </div>
    <a class="btn btn-success" href="accueil.php"> Retour </a>
</body>
</html>