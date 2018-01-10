<?php

include "config.php";
$host="localhost";
$user="root";
$password="";
$db="biblioteca";
$con = new mysqli($host,$user,$password,$db);

$user_id=null;
$sql1="select * from prestamos inner join usuarios on prestamos.user_id = usuarios.id_user inner join libros on prestamos.libro_id = libros.id_libro";

$query = $con->query($sql1);
?>

<?php if($query->num_rows>0):?>
<table class="table table-bordered table-hover">
<thead>
	<th>Nombre Libro</th>
	<th>Descripcion</th>
	<th>Estado</th>
	<th>Fecha prestamos</th>
	<th>Días prestamo</th>
	<th></th>
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
	<td><?php echo $r["nombre"]; ?></td>
	<td><?php echo $r["descripcion"]; ?></td>
	<td><?php echo $r["estado"]; ?></td>
	<td><?php echo $r["fecha_prestamos"]; ?></td>
	<td><?php echo $r["dias_prestamo"]; ?></td>
	<td style="width:150px;">
		<a href="./prestar.php?id=<?php echo $r["id"];?>" class="btn btn-sm btn-info">Prestar</a>
		<script>
		$("#del-"+<?php echo $r["id"];?>).click(function(e){
			e.preventDefault();
			p = confirm("Estas seguro?");
			
		});
		</script>
	</td>
</tr>
<?php endwhile;?>
</table>
<?php else:?>
	<p class="alert alert-warning">No hay libro</p>
<?php endif;?>