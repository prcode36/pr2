<?php   include("includes/menu2.php");?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CRUD PV</title>
<link rel="shortcut icon" href="img/favicon.ico">
<link href="css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="css/estilos.css">
<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="css/animate.css">
</head>
<body>

<h1 class="text-center text-warning"><strong><em>ACTUALIZAR</em></strong></h1>

<?php   

	include("conexion.php");
	
	if(!isset($_POST["bot_actualizar"])){   
         
         $id=$_GET["id"];
         $ar=$_GET["ar"];
	 	 $mo=$_GET["mo"];
	 	 $cp=$_GET["cp"];
		 $cf=$_GET["cf"];
		 $cd=$_GET["cd"];
		 $cv=$_GET["cv"];
         $ut=$_GET["ut"];
 
         $pv= ($mo + $cp + $cf + $cd + $cv )/(1 - ($ut/100));
         
	}else{
         $id=$_POST["id"];
         $ar=$_POST["ar"];
	 	 $mo=$_POST["mo"];
	 	 $cp=$_POST["cp"];
		 $cf=$_POST["cf"];
		 $cd=$_POST["cd"];
		 $cv=$_POST["cv"];
         $ut=$_POST["ut"];
         $pv= ($mo + $cp + $cf + $cd + $cv )/(1 - ($ut/100));
         
         
		$sql="UPDATE divisiondelcosto set articulo=:ar, mobra=:mo, cprimo=:cp, cfab=:cf, cprod=:cd, chv=:cv, utilidad=:ut, pventa=:pv WHERE id=:miid";
		
		$resultado=$base->prepare($sql);
		
		$resultado->execute(array(":miid"=>$id, ":ar"=>$ar, ":mo"=>$mo, ":cp"=>$cp, ":cf"=>$cf, ":cd"=>$cd, ":cv"=>$cv, ":ut"=>$ut, ":pv"=>$pv ));
         
         
         header("location:index.php");
        
         
	}
?>

<p>&nbsp;</p>
<form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <table align="center" class="table table-bordered table-responsive table-striped table-hover">
   
      <label for="id"></label>
      <input type="hidden" name="id" id="id" value="<?php echo $id?>">
    
    <tr class="danger">
      <td class="text-danger"><strong>Articulos</strong></td>
      <td><label for="ar"></label>
      <input type="text" name="ar" id="ar" value="<?php echo $ar?>"></td>
    </tr>
    <tr>
      <td class="text-danger"><strong>Mano de Obra</strong></td>
      <td><label for="mo"></label>
      <input type="text" name="mo" id="mo" value="<?php echo $mo?>"></td>
    </tr>
    <tr class="danger">
      <td class="text-danger"><strong>Costo Primo</strong></td>
      <td><label for="cp"></label>
      <input type="text" name="cp" id="cp" value="<?php echo $cp?>"></td>
    </tr>
    <tr>
      <td class="text-danger"><strong>Costo de Fabricacion</strong></td>
      <td><label for="cf"></label>
      <input type="text" name="cf" id="cf" value="<?php echo $cf?>"></td>
    </tr> 
     <tr class="danger">
      <td class="text-danger danger"><strong>Costo de Produccion</strong></td>
      <td><label for="cd"></label>
      <input type="text" name="cd" id="cd" value="<?php echo $cd?>"></td>
    </tr> 
     <tr>
      <td class="text-danger"><strong>Costo de Venta</strong></td>
      <td><label for="cv"></label>
      <input type="text" name="cv" id="cv" value="<?php echo $cv?>"></td>
    </tr> 
     <tr class="danger">
      <td class="text-danger"><strong>utilidad</strong></td>
      <td><label for="ut"></label>
      <input type="text" name="ut" id="ut" value="<?php echo $ut?>"></td>
    </tr> 
    <tr>
      <td colspan="2">
           <br>
     <input type="submit" class="pull-right btn btn-success btn-lg" name="bot_actualizar" id="bot_actualizar" value="Actualizar">
         </td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>

  <hr>
  <?php   include("includes/footer.php");?>

<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.js"></script>
      
</html>
