<?php

require_once("colector.php");
require_once("demo.php");
class demoColector

{
 
 private $modelo;
 public function __construct()
 {
 
 $this->modelo = new colector();
 
 
 }
 
public function ListarDEMO()
	{
		try
		{
		    $result= $this->modelo->Listar("demo");
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
 
 
 public function InsertDEMO($nombre, $path)
 {
 try
		{
		    $result= $this->modelo->operacion("insert into demo (nombre,foto,id_demo) values ('$nombre','$path',default)");
                echo "se inserto registro $nombre";
                  
			return $result;
                           

		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }
 
 public function UpdateDEMO($nombre,$id, $path)
 {
 try
		{
		    $result= $this->modelo->operacion("update demo set nombre= '$nombre', foto='$path' where id_demo = $id" );





                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }
 
 public function DeleteDEMO($id)
 {
 try
		{
		     $result= $this->modelo->operacion("delete from demo where id_demo = $id");
                

                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }
 
 
 
}

 ?>







