<?php
include("../clasefb.php");
extract($_REQUEST);


class FrutasControlador
{
	public function inicio(){
		$db=new clasefb();
		$conex=$db->conectar();

		$sql="SELECT * FROM datos_frutas";

		$res=mysqli_query($conex,$sql);
		$campos=mysqli_num_fields($res);
		$filas=mysqli_num_rows($res);
		$i=0;
		$datos[]=array();

		while($data=mysqli_fetch_array($res)){
			for ($j=0; $j < $campos; $j++){
				$datos[$i][$j]=$data[$j];
			}
			$i++;
		}
		mysqli_close($conex);
			header("Location: inicio.php?filas=".$filas."&campos=".$campos."&data=".serialize($datos));
	}
    public function modificar(){
        extract($_REQUEST);
        $db=new clasefb();
        $conex=$db->conectar();
        $sql="SELECT * FROM datos_frutas WHERE id=".$id_frutas."";
		$res=mysqli_query($conex,$sql);
        $data=mysqli_fetch_array($res);
        
        header("Location: editarfrutas.php?data=".serialize($data));
    }

    public function actualizar(){
        extract($_REQUEST);
        $db=new clasefb();
        $conex=$db->conectar();

        $sql="UPDATE datos_frutas set 
        nombre='$nombre',
        sabor='$sabor',
        color='$color',
        origen='$origen'
        WHERE id=$id_frutas";
       	$res=mysqli_query($conex,$sql);
        	if ($res) {
        		?>
        		<script>
        			alert("REGISTRO MODIFICADO");
        			window.location="FrutasControlador.php?operacion=inicio";
        		</script>
        		<?php
        	}else{
        		?>
        		<script>
        			alert("ERROR AL MODIFICAR REGISTRO");
        			window.location="FrutasControlador.php?operacion=inicio";
        		</script>
        		<?php
        	}
        $this->inicio();
    }

   
    public function eliminar(){

    	extract($_REQUEST);//extrayendo variables del url
    	$db=new clasefb();
    	$conex=$db->conectar();//conectando con la base de datos

    	$sql="DELETE FROM datos_frutas WHERE id=".$id_frutas;

		$res=mysqli_query($conex,$sql);
		if ($res)
		 {
			?>
			<script type="text/javascript">
				alert("REGISTRO ELIMINADO");
				window.location="FrutasControlador.php?operacion=inicio";
			</script>
			<?php
		}else{
			?>
			<script type="text/javascript">
				alert("REGISTRO NO ELIMINADO");
				window.location="FrutasControlador.php?operacion=inicio";
			</script>
			<?php
			}
    }





	static function controlador($operacion){
		$fruta=new FrutasControlador();
	switch ($operacion) {
		case 'inicio':
			$fruta->inicio();
			break;
		case 'registrar':
			$fruta->registrar();
			break;
		case 'guardar':
			$fruta->guardar();
			break;
		case 'modificar':
			$fruta->modificar();
			break;
		case 'actualizar':
			$fruta->actualizar();
			break;
		case 'eliminar':
			$fruta->eliminar();
			break;
		default:
			?>
				<script>
					alert("No existe la ruta");
					window.location="FrutasControlador.php?operacion=inicio";
				</script>
			<?php
			break;
	}//switch
}//funcion controlador
}//class
FrutasControlador::controlador($operacion);
?>