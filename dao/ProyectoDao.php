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
 * Description of ProyectoDao
 *
 * @author Depurador
 */
class ProyectoDao {
	public function registrarProyecto(ProyectoDto $proyectoDto){
		$cnn = conexion::getConexion();
		$mensaje="";
		try {
			$query = $cnn->prepare("INSERT INTO tbl_proyecto VALUES ? ? ? ? ?");
			$query.binndParam(1, null);
			$query.binndParam(2, $proyectoDto->getFk_id_usuario());
			$query.binndParam(3, $proyectoDto->getDescripcion());
			$query.binndParam(4, $proyectoDto->getFecha_inicio());
			$query.binndParam(5, $proyectoDto->getFecha_fin());
			
			$query->execute();
			$mensaje="Proyecto registrado";
		} catch (Exception $ex) {
			$mensaje=$ex->getMessage();
		}
		$cnn=null;
		return $mensaje;
	}
	
	public function modificarProyecto(ProyectoDto $proyectoDto){
		$cnn = conexion::getConexion();
		$mensaje="";
		try {
			$query = $cnn->prepare("UPDATE tbl_proyecto SET fk_id_usuario=?, descripcion=?, fecha_inicio=?, fecha_fin=? WHERE id_proyecto=?");
			$query.binndParam(1, $proyectoDto->getFk_id_usuario());
			$query.binndParam(2, $proyectoDto->getDescripcion());
			$query.binndParam(3, $proyectoDto->getFecha_inicio());
			$query.binndParam(4, $proyectoDto->getFecha_fin());
			$query.binndParam(5, $proyectoDto->getId_proyecto());
			
			$query->execute();
			$mensaje="Proyecto actualizado";
		} catch (Exception $ex) {
			$mensaje=$ex->getMessage();
		}
		$cnn=null;
		return $mensaje;
	}
	
	public function obtenerProyecto(ProyectoDto $proyectoDto){
		$cnn = conexion::getConexion();
		$mensaje="";
		try {
			$query = $cnn->prepare("SELECT * FROM tbl_proyecto WHERE id_proyecto=?");
			$query.binndParam(1, $proyectoDto->getId_proyecto());
			
			$query->execute();
			return $query->fetch();
		} catch (Exception $ex) {
			$mensaje=$ex->getMessage();
			return $mensaje;
		}
		$cnn=null;
	}
	
	public function eliminarProyecto(ProyectoDto $proyectoDto){
		$cnn = conexion::getConexion();
		$mensaje="";
		try {
			$query = $cnn->prepare("DELETE FROM tbl_proyecto WHERE id_proyecto=?");
			$query.binndParam(1, $proyectoDto->getId_proyecto());
			
			$query->execute();
			$mensaje="Proyecto eliminado";
		} catch (Exception $ex) {
			$mensaje=$ex->getMessage();
		}
		$cnn=null;
		return $mensaje;
	}
	
	public function listarProyectos(ProyectoDto $proyectoDto){
		$cnn = conexion::getConexion();
		$mensaje="";
		try {
			$query = $cnn->prepare("SELECT * FROM tbl_proyecto");
			
			$query->execute();
			return $query->fetchAll();
		} catch (Exception $ex) {
			$mensaje=$ex->getMessage();
			return $mensaje;
		}
		$cnn=null;
	}
}
