<?php

/*
 * The MIT License
 *
 * Copyright 2017 Depurador.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

/**
 * Description of MaterialDao
 *
 * @author Depurador
 */
class MaterialDao {
	public function registrarMaterial(MaterialDto $materialDto){
		$cnn = conexion::getConexion();
		$mensaje="";
		try {
			$query = $cnn->prepare("INSERT INTO tbl_material VALUES ? ? ? ? ?");
			$query.binndParam(1, null);
			$query.binndParam(2, $materialDto->getFk_id_categoria());
			$query.binndParam(3, $materialDto->getFk_id_proveedor());
			$query.binndParam(4, $materialDto->getReferencia());
			$query.binndParam(5, $materialDto->getDescripcion());
			
			$query->execute();
			$mensaje="Material registrado";
		} catch (Exception $ex) {
			$mensaje=$ex->getMessage();
		}
		$cnn=null;
		return $mensaje;
	}
	
	public function modificarMaterial(MaterialDto $materialDto){
		$cnn = conexion::getConexion();
		$mensaje="";
		try {
			$query = $cnn->prepare("UPDATE tbl_material SET fk_id_categoria=?, fk_id_proveedor=?, referencia=?, descripcion=? WHERE id_material=?");
			$query.binndParam(1, $materialDto->getFk_id_categoria());
			$query.binndParam(2, $materialDto->getFk_id_proveedor());
			$query.binndParam(3, $materialDto->getReferencia());
			$query.binndParam(4, $materialDto->getDescripcion());
			$query.binndParam(5, $materialDto->getId_material());
			
			$query->execute();
			$mensaje="Material actualizado";
		} catch (Exception $ex) {
			$mensaje=$ex->getMessage();
		}
		$cnn=null;
		return $mensaje;
	}
	
	public function obtenerMaterial(MaterialDto $materialDto){
		$cnn = conexion::getConexion();
		$mensaje="";
		try {
			$query = $cnn->prepare("SELECT * FROM tbl_material WHERE id_material=?");
			$query.binndParam(1, $materialDto->getId_material());
			
			$query->execute();
			return $query->fetch();
		} catch (Exception $ex) {
			$mensaje=$ex->getMessage();
			return $mensaje;
		}
		$cnn=null;
	}
	
	public function eliminarMaterial(MaterialDto $materialDto){
		$cnn = conexion::getConexion();
		$mensaje="";
		try {
			$query = $cnn->prepare("DELETE FROM tbl_material WHERE id_material=?");
			$query.binndParam(1, $materialDto->getId_material());
			
			$query->execute();
			$mensaje="Material eliminado";
		} catch (Exception $ex) {
			$mensaje=$ex->getMessage();
		}
		$cnn=null;
		return $mensaje;
	}
	
	public function listarMateriales(MaterialDto $materialDto){
		$cnn = conexion::getConexion();
		$mensaje="";
		try {
			$query = $cnn->prepare("SELECT * FROM tbl_material");
			
			$query->execute();
			return $query->fetchAll();
		} catch (Exception $ex) {
			$mensaje=$ex->getMessage();
			return $mensaje;
		}
		$cnn=null;
	}
}
