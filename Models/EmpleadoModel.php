<?php 
class EmpleadoModel extends Mysql
{
	// private $intIdUsuario;
	// private $strIdentificacion;

	private $strNombre;
	private $strEmail;
	private $strSexo;
	private $strArea;
	private $strDescripcion;
	private $intBoletin;
	private $intArrayRol;


	public function __construct()
	{
		parent::__construct();
	}	

	public function insertEmpleado(string $nombre, string $email, string $sexo, int $area, string $boletin,string $descripcion ){//$arrayRol
		
		$this->strNombre = $nombre;
		$this->strEmail = $email;
		$this->strSexo = $sexo;
		$this->strArea = $area;
		$this->strDescripcion= $descripcion;
		$this->intBoletin= $boletin;
		// $this->intArrayRol = $arrayRol;
	
		// foreach($arrayRol as $rol_id ){

		// 	$sqlid = "SELECT `AUTO_INCREMENT` FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = 'prueba_tecnica_dev' AND TABLE_NAME = 'empleado';";
		// 	$autoIncrementId = $this->select($sqlid);
			
		// 	$query_insert  = "INSERT INTO empleado_rol(empleado_id,rol_id) VALUES(?,?)";
		// 	$arrData = array($autoIncrementId, $rol_id);
		// }
		// $request_in = $this->insert($query_insert,$arrData);

		// $return = 0;
		// $sql = "SELECT * FROM empleado WHERE email = '{$this->strEmail}'";
		// print_r($sql);
		// echo "SELECT * FROM empleado WHERE email = '{$this->strEmail}'";
				// email = '{$this->strEmail}' or identificacion = '{$this->}' ";
		// $request = $this->select_all($sql);

		// if(empty($request))
		// {
			$query_insert  = "INSERT INTO empleado(nombre,email,sexo,area_id,boletin,descripcion) 
							  VALUES(?,?,?,?,?,?)";
        	$arrData = array($this->strNombre,
    						$this->strEmail,
    						$this->strSexo,
    						$this->strArea,$this->intBoletin,
    						$this->strDescripcion);
							// ,
        	$request_insert = $this->insert($query_insert,$arrData);
        	$return = $request_insert;
		// }else{
		// 	$return = "exist";
		// }
        return $return;
	}



	public function updateEmpleado(int $idUsuario, string $nombre, string $email, string $sexo, int $area,  string  $boletin, string $descripcion){//$arrayRol

		$this->intIdUsuario = $idUsuario;
		$this->strNombre = $nombre;
		$this->strEmail = $email;
		$this->strSexo = $sexo;
		$this->strArea = $area;
		$this->strBoletin = $boletin;
		$this->strDescripcion= $descripcion;
		// $this->intArrayRol = $arrayRol;
			
				$sql = "UPDATE empleado SET id=?, nombre=?, email=?, sexo=?, area_id=?, boletin=? ,descripcion= ?
				WHERE id = $this->intIdUsuario  ";
				$arrData = array($this->intIdUsuario,
								$this->strNombre,
								$this->strEmail,
								$this->strSexo,
								$this->strArea,
								$this->strBoletin,
								$this->strDescripcion);
								
		
			$request = $this->update($sql,$arrData);

		return $request;
	}

	/* OK */
	public function selectEmpleados()
	{
		$sql = "SELECT id,nombre,email,sexo,area_id,boletin,descripcion FROM empleado "; 
		$request = $this->select_all($sql);
		return $request;
	}
	public function selectEmpleado(int $id){
		$this->intIdUsuario = $id;
		$sql = "SELECT id,nombre,email,sexo,area_id,boletin,descripcion 
				FROM empleado
				WHERE id = $this->intIdUsuario";
		$request = $this->select($sql);
		return $request;
	}
	public function selectRoles()
	{
		$sql = "SELECT id,nombre FROM roles"; 
		$request = $this->select_all($sql);
		return $request;
	}
	public function deleteEmpleado(int $intId)
	{
		$this->intIdUsuario = $intId;
		$sql = "DELETE FROM empleado WHERE id = $this->intIdUsuario ";
		$arrData = array(0);
		$request = $this->delete($sql,$arrData);
		return $request;
	}
}

 ?>