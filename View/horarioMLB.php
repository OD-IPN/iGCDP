<title>HorarioMLB</title>
<?php 
include 'header.php';

if(!isset($_SESSION['user'])){
	echo '<script language="javascript">setTimeout("location.href=\"register.php\"", 10); </script>';
}

include '../Model/consultas.php';
$usar = $_SESSION['info'];

if(isset($_GET['v'])){
	$horarios=horariosPrograma($_GET['v'], $conexion);
}else{
	$horarios=consultaHorarios($conexion);	
}
$horarios = json_decode($horarios);
?>
<div class="[ container-js ]">
	<h3>Horario de Grupos</h3>
	<table>
		<tbody>
			<tr>
				<td>
					<span><b>SEDE: </b></span>
					<select name="sede" id="sede">
						<option value="1">ESCOM</option>
					</select>
				</td>
				<td>
					<span><b>PROGRAMA: </b></span>
					<select name="programa" id="programa">
						<option value="2">My Language Budy</option>
					</select>
				</td>
				<td>
					<span><b>IDIOMA: </b></span>
					<select name="idioma" id="idioma">
						<option value="0"> </option>
						<option value="1">Inglés</option>
						<option value="2">Francés</option>
						<option value="3">Alemán</option>
					</select>
				</td>
				<td>
					<span><b>MODALIDAD: </b></span>
					<select name="modalidad" id="modalidad">
						<option value="1">Semanal</option>
					</select>
				</td>
			</tr>
		</tbody>
	</table>
	

	<table class="[ horarios ][ cell ][ table table-striped ]">
		<tbody>
			<tr>
				<td> SEDE </td>
				<td> NOMBRE </td>
				<td> IDIOMA </td>
				<td> </td>
				<td> DÍAS </td>
				<td> </td>
				<td> DISPONIBILIDAD </td>
				<td>  </td>
			</tr>
			<tr>
				<td> <br/>ESCOM </td>
				<td> <br/>esimios </td>
				<td> <br/>Inglés </td>
				<td> Lunes<br/> 9:30 - 11:00</td>
				<td> Martes<br/> 9:30 - 11:00</td>
				<td> Jueves<br/> 11:00 - 12:30</td>
				<td> <br/>8 <br/></td>
				<td> <br/><button class="[ btn-primary ]"> Inscribirse </button> </td>
			</tr>
			<tr>
				<td> <br/>ESCOM </td>
				<td> <br/>esimios </td>
				<td> <br/>Inglés </td>
				<td> Lunes<br/> 9:30 - 11:00</td>
				<td> Martes<br/> 9:30 - 11:00</td>
				<td> Jueves<br/> 11:00 - 12:30</td>
				<td> <br/>8 <br/></td>
				<td> <br/><button class="[ btn-primary ]"> Inscribirse </button> </td>
			</tr>

<?php 
//	for ($i=0; $i < sizeof($horarios); $i++) { 
//		$sede = json_decode((nombreSede($horarios[$i]->sede, $conexion)));
//		echo '<tr id="'.$horarios[$i]->inicio.'/'.$horarios[$i]->modalidad.'" class="[ '.$sede[0]->nombre.' ][ '.$horarios[$i]->programa.' ][ '.$horarios[$i]->idioma.' ][ '.$horarios[$i]->modalidad.' ]" data-id="'.$horarios[$i]->id.'">
//				<td class="[ cell ]">'.$sede[0]->nombre.'</td>
//				<td class="[ cell ]">'.$horarios[$i]->programa.'</td>
//				<td class="[ cell ]">'.$horarios[$i]->idioma.'</td>
//				<td class="[ cell ][ hr ]">'.$horarios[$i]->inicio.' - '.$horarios[$i]->fin.'</td>
//				<td class="[ cell ]">'.$horarios[$i]->modalidad.'</td>
//				<td class="[ cell ]">'.$horarios[$i]->disponibilidad.'</td>
//				<td class="[ cell ]"> <img src="images/mas.png" id="" class="Add" onclick="sumar(this)" /> </td>
//			</tr>';
//	}
 ?>		</tbody>
 	</table>
	
	<br/>
	<h3>Personaliza tu propio horario. - Inglés</h3> 
	<table class="[ misHorarios ][ cell ] table table-striped" id="misHorarios">
		<tr>
			<td> LUNES </td>
			<td> MARTES </td>
			<td> MIÉRCOLES </td>
			<td> JUEVES </td>
			<td> VIERNES </td>
		</tr>
		<tr>
			<td class="[ 1 ][ disp ]"> 8:00 - 9:30 </td>
			<td class="[ 2 ][ disp ]"> 8:00 - 9:30 </td>
			<td class="[ 3 ][ disp ]"> 8:00 - 9:30 </td>
			<td class="[ 4 ][ disp ]"> 8:00 - 9:30 </td>
			<td class="[ 5 ][ disp ]"> 8:00 - 9:30 </td>
		</tr>
		<tr>
			<td class="[ 1 ][ disp ]"> 9:30 - 11:00 </td>
			<td class="[ 2 ][ disp ]"> 9:30 - 11:00 </td>
			<td class="[ 3 ][ disp ]"> 9:30 - 11:00 </td>
			<td class="[ 4 ][ disp ]"> 9:30 - 11:00 </td>
			<td class="[ 5 ][ disp ]"> 9:30 - 11:00 </td>
		</tr>
		<tr>
			<td class="[ 1 ][ disp ]"> 11:00 - 13:30 </td>
			<td class="[ 2 ][ disp ]"> 11:00 - 13:30 </td>
			<td class="[ 3 ][ disp ]"> 11:00 - 13:30 </td>
			<td class="[ 4 ][ disp ]"> 11:00 - 13:30 </td>
			<td class="[ 5 ][ disp ]"> 11:00 - 13:30 </td>
		</tr>
		<tr>
			<td class="[ 1 ][ disp ]"> 12:30 - 14:00</td>
			<td class="[ 2 ][ disp ]"> 12:30 - 14:00</td>
			<td class="[ 3 ][ disp ]"> 12:30 - 14:00</td>
			<td class="[ 4 ][ disp ]"> 12:30 - 14:00</td>
			<td class="[ 5 ][ disp ]"> 12:30 - 14:00</td>
		</tr>
		<tr>
			<td class="[ 1 ][ disp ]"> 14:00 - 15:30 </td>
			<td class="[ 2 ][ disp ]"> 14:00 - 15:30 </td>
			<td class="[ 3 ][ disp ]"> 14:00 - 15:30 </td>
			<td class="[ 4 ][ disp ]"> 14:00 - 15:30 </td>
			<td class="[ 5 ][ disp ]"> 14:00 - 15:30 </td>
		</tr>
		<tr>
			<td class="[ 1 ][ disp ]"> 15:30 - 17:00 </td>
			<td class="[ 2 ][ disp ]"> 15:30 - 17:00 </td>
			<td class="[ 3 ][ disp ]"> 15:30 - 17:00 </td>
			<td class="[ 4 ][ disp ]"> 15:30 - 17:00 </td>
			<td class="[ 5 ][ disp ]"> 15:30 - 17:00 </td>
		</tr>
		<tr>
			<td class="[ 1 ][ disp ]"> 17:00 - 19:30 </td>
			<td class="[ 2 ][ disp ]"> 17:00 - 19:30 </td>
			<td class="[ 3 ][ disp ]"> 17:00 - 19:30 </td>
			<td class="[ 4 ][ disp ]"> 17:00 - 19:30 </td>
			<td class="[ 5 ][ disp ]"> 17:00 - 19:30 </td>
		</tr>
		<tr>
			<td class="[ 0 ][ disp ]"> 19:30 - 21:00 </td>
			<td class="[ 0 ][ disp ]"> 19:30 - 21:00 </td>
			<td class="[ 0 ][ disp ]"> 19:30 - 21:00 </td>
			<td class="[ 0 ][ disp ]"> 19:30 - 21:00 </td>
			<td class="[ 0 ][ disp ]"> 19:30 - 21:00 </td>
		</tr>
	</table>

	<p>
		<br>
		<a href="#"><input type="button" value="Inscribirse" class="[ btn btn-primary ][ button ][ js-inscribir ]" /></a>
	</p>
</div>
<?php include 'footer.php'; ?>