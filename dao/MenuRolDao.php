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
 * Description of MenuRolDao
 *
 * @author Depurador
 */
class MenuRolDao {
	public function registrarMenuRol(MenuRolDto $menuRolDto){
		$cnn = conexion::getConexion();
		$mensaje="";
		try {
			$query = $cnn->prepare("INSERT INTO tbl_menu_rol VALUES ? ?");
			$query.binndParam(1, $menuRolDto->getFk_id_menu());
			$query.binndParam(2, $menuRolDto->getFk_id_rol());
			
			$query->execute();
			$mensaje="Registrado";
		} catch (Exception $ex) {
			$mensaje=$ex->getMessage();
		}
		$cnn=null;
		return $mensaje;
	}
	
	public function modificarMenuRol(MenuRolDto $menuRolDto){
		$cnn = conexion::getConexion();
		$mensaje="";
		try {
			$query = $cnn->prepare("UPDATE fk_id_rol SET fk_id_rol=? WHERE fk_id_menu=?");
			$query.binndParam(1, $menuRolDto->getFk_id_rol());
			$query.binndParam(2, $menuRolDto->getFk_id_menu());
			
			$query->execute();
			$mensaje="Actualizado";
		} catch (Exception $ex) {
			$mensaje=$ex->getMessage();
		}
		$cnn=null;
		return $mensaje;
	}
	
	public function obtenerMenuRol(MenuRolDto $menuRolDto){
		$cnn = conexion::getConexion();
		$mensaje="";
		try {
			$query = $cnn->prepare("SELECT * FROM tbl_menu_rol WHERE fk_id_menu=? and fk_id_rol=?");
			$query.binndParam(1, $menuRolDto->getFk_id_menu());
			$query.binndParam(1, $menuRolDto->getFk_id_rol());
			
			$query->execute();
			return $query->fetch();
		} catch (Exception $ex) {
			$mensaje=$ex->getMessage();
			return $mensaje;
		}
		$cnn=null;
	}
	
	public function eliminarMenuRol(MenuRolDto $menuRolDto){
		$cnn = conexion::getConexion();
		$mensaje="";
		try {
			$query = $cnn->prepare("DELETE FROM tbl_menu_rol WHERE fk_id_menu=? and fk_id_rol=?");
			$query.binndParam(1, $menuRolDto->getFk_id_menu());
			$query.binndParam(1, $menuRolDto->getFk_id_rol());
			
			$query->execute();
			$mensaje="Eliminado";
		} catch (Exception $ex) {
			$mensaje=$ex->getMessage();
		}
		$cnn=null;
		return $mensaje;
	}
	
	public function listarMenuRol(MenuRolDto $menuRolDto){
		$cnn = conexion::getConexion();
		$mensaje="";
		try {
			$query = $cnn->prepare("SELECT * FROM tbl_menu_rol");
			
			$query->execute();
			return $query->fetchAll();
		} catch (Exception $ex) {
			$mensaje=$ex->getMessage();
			return $mensaje;
		}
		$cnn=null;
	}
}
