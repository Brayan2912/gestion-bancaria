<!DOCTYPE html>
<html>
<head>
<link href="static/css/style.css" rel="stylesheet">
<style>
	#form {
		margin-left: 446px;
    	margin-right: 400px;
    	text-align: center;
	}

	</style>
	<title></title>
</head>
<body>

<form method="post" action="dinerovalidar.php" ><br>
<div class="form-group">

<label style="font-size: 14pt; color:  black;"><b>Solo puede ingresar un monto de 1 000.000 </b></label><br>
<input type="number" name="dinero" class="btn btn-primary "  placeholder="Dinero" required="" />
</div>



<input  class="btn btn-danger" type="submit" name="submit" value="Registrarse"/>
</form>








</body>
</html>