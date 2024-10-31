<?php
function comprobar_usuario($nombre, $clave){
	// Incluyo los parámetros de conexión y creo el objeto PDO
	include "configuracion_bd.php";
	$bd = new PDO("mysql:dbname=".$bd_config["nombrebd"].";host=".$bd_config["ip"], 
					$bd_config["usuario"],
					$bd_config["clave"]);

	// Creo la sentencia SQL y ejecuto	
	$ins = "select codRes, correo from restaurantes where correo = '$nombre' 
			and clave = '$clave'";
	$resul = $bd->query($ins);	
	if($resul->rowCount() === 1){		
		return $resul->fetch();		
	}else{
		return FALSE;
	}
}
function cargar_categorias(){
	// Incluyo los parámetros de conexión y creo el objeto PDO
	include "configuracion_bd.php";
	$bd = new PDO("mysql:dbname=".$bd_config["nombrebd"].";host=".$bd_config["ip"], 
					$bd_config["usuario"],
					$bd_config["clave"]);

	// Creo la sentencia SQL y ejecuto	
	$ins = "select codCat, nombre from categorias";
	$resul = $bd->query($ins);	
	if (!$resul) {
		return FALSE;
	}
	if ($resul->rowCount() === 0) {    
		return FALSE;
    }
	//si hay 1 o más
	return $resul;	
}
function cargar_categoria($codCat){
	// Incluyo los parámetros de conexión y creo el objeto PDO
	include "configuracion_bd.php";
	$bd = new PDO("mysql:dbname=".$bd_config["nombrebd"].";host=".$bd_config["ip"], 
					$bd_config["usuario"],
					$bd_config["clave"]);

	// Creo la sentencia SQL y ejecuto	
	$ins = "select nombre, descripcion from categorias where codcat = $codCat";
	$resul = $bd->query($ins);	
	if (!$resul) {
		return FALSE;
	}
	if ($resul->rowCount() === 0) {    
		return FALSE;
    }	
	//si hay 1 o más
	return $resul->fetch();	
}
function cargar_productos_categoria($codCat){
	// Incluyo los parámetros de conexión y creo el objeto PDO
	include "configuracion_bd.php";
	$bd = new PDO("mysql:dbname=".$bd_config["nombrebd"].";host=".$bd_config["ip"], 
					$bd_config["usuario"],
					$bd_config["clave"]);

	// Creo la sentencia SQL y ejecuto		
	$sql = "select * from productos where categoria  = $codCat";	
	$resul = $bd->query($sql);	
	if (!$resul) {
		return FALSE;
	}
	if ($resul->rowCount() === 0) {    
		return FALSE;
    }	
	//si hay 1 o más
	return $resul;			
}
// recibe un array de códigos de productos
// devuelve un cursor con los datos de esos productos
function cargar_productos($codigosProductos){
	// Incluyo los parámetros de conexión y creo el objeto PDO
	include "configuracion_bd.php";
	$bd = new PDO("mysql:dbname=".$bd_config["nombrebd"].";host=".$bd_config["ip"], 
					$bd_config["usuario"],
					$bd_config["clave"]);

	// Creo la sentencia SQL y ejecuto	
	$texto_in = implode(",", $codigosProductos);
	$ins = "select * from productos where codProd in($texto_in)";
	$resul = $bd->query($ins);	
	if (!$resul) {
		return FALSE;
	}
	return $resul;	
}
function insertar_pedido($carrito, $codRes){
	// Incluyo los parámetros de conexión y creo el objeto PDO
	include "configuracion_bd.php";
	$bd = new PDO("mysql:dbname=".$bd_config["nombrebd"].";host=".$bd_config["ip"], 
					$bd_config["usuario"],
					$bd_config["clave"]);

	// Creo la sentencia SQL y ejecuto	
	$bd->beginTransaction();	
	$hora = date("Y-m-d H:i:s", time());
	// insertar el pedido
	$sql = "insert into pedidos(fecha, enviado, restaurante) 
			values('$hora',0, $codRes)";
	$resul = $bd->query($sql);	
	if (!$resul) {
		return FALSE;
	}
	// coger el id del nuevo pedido para las filas detalle
	$pedido = $bd->lastInsertId();
	// insertar las filas en pedidoproductos
	foreach($carrito as $codProd=>$unidades){
		$sql = "insert into pedidosproductos(Pedido, Producto, Unidades) 
		             values( $pedido, $codProd, $unidades)";			
		 $resul = $bd->query($sql);	
		if (!$resul) {
			$bd->rollback();
			return FALSE;
		}
	}
	$bd->commit();
	return $pedido;
}



// para el EJ 2
function sacar_id_categoria_del_producto($codProducto){
	// Incluyo los parámetros de conexión y creo el objeto PDO
	include "configuracion_bd.php";
	$bd = new PDO("mysql:dbname=".$bd_config["nombrebd"].";host=".$bd_config["ip"], 
					$bd_config["usuario"],
					$bd_config["clave"]);

	// Creo la sentencia SQL y ejecuto	
	$ins = "select categoria from productos where codprod = $codProducto";
	$resul = $bd->query($ins);	
	if (!$resul) {
		return FALSE;
	}
	if ($resul->rowCount() === 0) {    
		return FALSE;
    }	
	
    foreach ($resul as $cat) {
        return $cat['categoria'];
    }
}