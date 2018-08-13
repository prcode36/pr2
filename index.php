<?php  include("includes/menu.php");?>

<?php 
     
	
	include("conexion.php");

	$registros=$base->query("SELECT * FROM divisiondelcosto")->fetchAll(PDO::FETCH_OBJ);	   
         
         if(isset($_POST["cr"])){
		
		$ar=$_POST["ar"];
		
		$mo=$_POST["mo"];
		
		$cp=$_POST["cp"];
         
		$cf=$_POST["cf"];
         
		$cd=$_POST["cd"];
         
		$cv=$_POST["cv"];
         
		$ut=$_POST["ut"];
         
        $pv= ($mo + $cp + $cf + $cd + $cv )/(1 - ($ut/100));
         
	
		
		$sql="INSERT INTO divisiondelcosto(articulo,mobra,cprimo,cfab,cprod,chv,utilidad,pventa) values(:ar,:mo,:cp,:cf,:cd,:cv,:ut,:pv)";
		
		$resultado=$base->prepare($sql);
		
		$resultado->execute(array(":ar"=>$ar, ":mo"=>$mo, ":cp"=>$cp, ":cf"=>$cf, ":cd"=>$cd, ":cv"=>$cv, ":ut"=>$ut, ":pv"=>$pv));
		
		header("location:index.php");
         
         
	}
?>


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

    
<h1 class="text-center text-info"><strong><em>PRECIO DE VENTA - CRUD</em></strong></h1>
<br>
<br>
<br>
<br>


<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" class="form-horizontal">
 <div class="table-responsive">
  <table width="50%" border="0" align="center" class="table">
    <tr >
      <td class="bg-info text-success"><strong>Posicion</strong></td>
      <td class="bg-info text-success"><strong>articulo</strong></td>
      <td class="bg-info text-success"><strong>Mano de obra</strong></td>
      <td class="bg-info text-success"><strong>Costo Primo</strong></td>
      <td class="bg-info text-success"><strong>Costo de Fabricacion</strong></td>
      <td class="bg-info text-success"><strong>Costo de Produccion</strong></td>
      <td class="bg-info text-success"><strong>Costo de Ventas</strong></td>
      <td class="bg-info text-success"><strong>utilidad</strong></td>
      <td class="bg-info text-success"><strong>Precio de Venta</strong></td>
      <td class="sin info">&nbsp;</td>
      <td class="sin info">&nbsp;</td>
    </tr> 
   
      <?php foreach($registros as $persona): ?>
	  
         <tr>
           <td><?php echo $persona->id?></td>
           <td><?php echo $persona->articulo?></td>
           <td><?php echo $persona->mobra?> </td>
           <td><?php echo $persona->cprimo?> </td>
           <td><?php echo $persona->cfab?> </td>
           <td><?php echo $persona->cprod?> </td>
           <td><?php echo $persona->chv?> </td>
           <td><?php echo $persona->utilidad?> </td>
           <td><?php echo $persona->pventa?> </td>

           <td class="bot"><a href="borrar.php?id=<?php echo $persona->id?>"><input type='button' name='del' id='del' value='Borrar' class="btn btn-danger"></a></td>
           
           <td class="bot"><a href="editar.php?id=<?php echo $persona->id?>&ar=<?php echo $persona->articulo?>&mo=<?php echo $persona->mobra?>&cp=<?php echo $persona->cprimo?>&cf=<?php echo $persona->cfab?>&cd=<?php echo $persona->cprod?>&cv=<?php echo $persona->chv?>&ut=<?php echo $persona->utilidad?>"><input type='button' name='up' id='up' value='Actualizar' class="btn btn-success"></a></td>
    
         </tr>  

      <?php endforeach; ?>   
                               
	<tr>
      <td></td>
      <td><input type='text' name='ar' size='10' class='centrado' placeholder="Nombre del articulo"></td>
      <td><input type='text' name='mo' size='10' class='centrado' placeholder="Costo $"></td>
      <td><input type='text' name='cp' size='10' class='centrado' placeholder="Costo $"></td>
      <td><input type='text' name='cf' size='10' class='centrado' placeholder="Costo $"></td>
      <td><input type='text' name='cd' size='10' class='centrado' placeholder="Costo $"></td>
      <td><input type='text' name='cv' size='10' class='centrado' placeholder="Costo $"></td>
      <td><input type='text' name='ut' size='10' class='centrado' placeholder="Costo $"></td>
      <td><input type='hidden' name='pventa' size='10' class='centrado' readonly></td> 
      <td class='bot'><input type='submit' name='cr' id='cr' value='Insertar' class="btn btn-info">
      <td></td>
    </tr>    
  </table>
  </div>
</form>
<p>&nbsp;</p>
  <hr>
  <?php   include("includes/footer.php");?>

<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.js"></script>
      


</body>
</html>