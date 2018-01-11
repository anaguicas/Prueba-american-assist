<?php
include "sesion.php";
$host="localhost";
$user="root";
$password="";
$db="biblioteca";
$con = new mysqli($host,$user,$password,$db);

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
			<th>Fecha devolucion</th>
			<th>Avisos</th>
		</thead>
		<?php while ($res=$query->fetch_array()):?>
		<tr>
			<td><?php echo $res["nombre"]; ?></td>
			<td><?php echo $res["descripcion"]; ?></td>
			<td><?php echo $res["estado"]; ?></td>
			<td><?php echo $res["fecha_prestamos"]; ?></td>
			<td><?php echo $res["dias_prestamo"]; ?></td>
			<td><?php echo $res["fecha_devolucion"]; ?></td>
			<td style="width:150px;">
				<?php
				$date2 = new DateTime();
				$date1 = new DateTime($res["fecha_devolucion"]);
				if(!empty($res["fecha_devolucion"])&&$date1->diff($date2)>=$res["fecha_devolucion"]){
					echo "<div class=\"alert alert-warning\"><strong>El libro $res[nombre] debia devolverse en la fecha $res[fecha_devolucion]</strong></div>";
				}
				if($res["estado"]=="disponible"){
					$flag = "update";
					echo "<a href=\"../views/prestar.php?id=$res[id_prestamo];\" class=\"btn btn-sm btn-info\">Prestar</a>";
				} else{
					echo "<a href=\"\" class=\"btn btn-sm btn-info\>No disponible</a>";
				}
				?>
				<script>
				$("#del-"+<?php echo $res["id_prestamo"];?>).click(function(e){
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