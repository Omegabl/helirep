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
 * Description of BodegaDao
 *
 * @author Depurador
 */
class BodegaDao {
	public function registrarBodega(BodegaDto $bodegaDto){
		$cnn = conexion::getConexion();
		$mensaje="";
		try {
			$query = $cnn->prepare("INSERT INTO tbl_bodega VALUES ? ? ? ?");
			$query.binndParam(1, null);
			$query.binndParam(2, $bodegaDto->getFk_id_usuario());
			$query.binndParam(3, $bodegaDto->getDireccion());
			$query.binndParam(4, $bodegaDto->getNombre());
			
			$query->execute();
			$mensaje="Bodega registrada";
		} catch (Exception $ex) {
			$mensaje=$ex->getMessage();
		}
		$cnn=null;
		return $mensaje;
	}
	
	public function modificarBodega(BodegaDto $bodegaDto){
		$cnn = conexion::getConexion();
		$mensaje="";
		try {
			$query = $cnn->prepare("UPDATE tbl_bodega SET fk_id_usuario=?, direccion=?, nombre=? WHERE id_bodega=?");
			$query.binndParam(1, $bodegaDto->getFk_id_usuario());
			$query.binndParam(2, $bodegaDto->getDireccion());
			$query.binndParam(3, $bodegaDto->getNombre());
			$query.binndParam(4, $bodegaDto->getId_bodega());
			
			$query->execute();
			$mensaje="Bodega actualizada";
		} catch (Exception $ex) {
			$mensaje=$ex->getMessage();
		}
		$cnn=null;
		return $mensaje;
	}
	
	public function obtenerBodega(BodegaDto $bodegaDto){
		$cnn = conexion::getConexion();
		$mensaje="";
		try {
			$query = $cnn->prepare("SELECT * FROM tbl_bodega WHERE id_bodega=?");
			$query.binndParam(1, $bodegaDto->getId_bodega());
			
			$query->execute();
			return $query->fetch();
		} catch (Exception $ex) {
			$mensaje=$ex->getMessage();
			return $mensaje;
		}
		$cnn=null;
	}
	
	public function eliminarBodega(BodegaDto $bodegaDto){
		$cnn = conexion::getConexion();
		$mensaje="";
		try {
			$query = $cnn->prepare("DELETE FROM tbl_bodega WHERE id_bodega=?");
			$query.binndParam(1, $bodegaDto->getId_bodega());
			
			$query->execute();
			$mensaje="Bodega eliminada";
		} catch (Exception $ex) {
			$mensaje=$ex->getMessage();
		}
		$cnn=null;
		return $mensaje;
	}
	
	public function listarMateriales(BodegaDto $bodegaDto){
		$cnn = conexion::getConexion();
		$mensaje="";
		try {
			$query = $cnn->prepare("SELECT * FROM tbl_bodega");
			
			$query->execute();
			return $query->fetchAll();
		} catch (Exception $ex) {
			$mensaje=$ex->getMessage();
			return $mensaje;
		}
		$cnn=null;
	}
}
