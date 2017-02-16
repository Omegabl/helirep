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
 * Description of ProveedorDao
 *
 * @author Depurador
 */
class ProveedorDao {
	public function registrarProveedor(ProveedorDto $proveedorDto){
		$cnn = conexion::getConexion();
		$mensaje="";
		try {
			$query = $cnn->prepare("INSERT INTO tbl_proveedor VALUES ? ?");
			$query.binndParam(1, null);
			$query.binndParam(2, $proveedorDto->getNombre());
			
			$query->execute();
			$mensaje="Proveedor registrado";
		} catch (Exception $ex) {
			$mensaje=$ex->getMessage();
		}
		$cnn=null;
		return $mensaje;
	}
	
	public function modificarProveedor(ProveedorDto $proveedorDto){
		$cnn = conexion::getConexion();
		$mensaje="";
		try {
			$query = $cnn->prepare("UPDATE tbl_proveedor SET nombre=? WHERE id_proveedor=?");
			$query.binndParam(1, $proveedorDto->getNombre());
			$query.binndParam(2, $proveedorDto->getId_proveedor());
			
			$query->execute();
			$mensaje="Proveedor actualizado";
		} catch (Exception $ex) {
			$mensaje=$ex->getMessage();
		}
		$cnn=null;
		return $mensaje;
	}
	
	public function obtenerProveedor(ProveedorDto $proveedorDto){
		$cnn = conexion::getConexion();
		$mensaje="";
		try {
			$query = $cnn->prepare("SELECT * FROM tbl_proveedor WHERE id_proveedor=?");
			$query.binndParam(1, $proveedorDto->getId_proveedor());
			
			$query->execute();
			return $query->fetch();
		} catch (Exception $ex) {
			$mensaje=$ex->getMessage();
			return $mensaje;
		}
		$cnn=null;
	}
	
	public function eliminarProveedor(ProveedorDto $proveedorDto){
		$cnn = conexion::getConexion();
		$mensaje="";
		try {
			$query = $cnn->prepare("DELETE FROM tbl_proveedor WHERE id_proveedor=?");
			$query.binndParam(1, $proveedorDto->getId_proveedor());
			
			$query->execute();
			$mensaje="Proveedor eliminado";
		} catch (Exception $ex) {
			$mensaje=$ex->getMessage();
		}
		$cnn=null;
		return $mensaje;
	}
	
	public function listarProveedores(ProveedorDto $proveedorDto){
		$cnn = conexion::getConexion();
		$mensaje="";
		try {
			$query = $cnn->prepare("SELECT * FROM tbl_proveedor");
			
			$query->execute();
			return $query->fetchAll();
		} catch (Exception $ex) {
			$mensaje=$ex->getMessage();
			return $mensaje;
		}
		$cnn=null;
	}
}
