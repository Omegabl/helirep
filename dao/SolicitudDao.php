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
 * Description of SolicitudDao
 *
 * @author Depurador
 */
class SolicitudDao {
	public function registrarSolicitud(SolicitudDto $solicitudDto){
		$cnn = conexion::getConexion();
		$mensaje="";
		try {
			$query = $cnn->prepare("INSERT INTO tbl_solicitud VALUES ? ? ? ?");
			$query.binndParam(1, null);
			$query.binndParam(2, $solicitudDto->getFk_id_proyecto());
			$query.binndParam(3, $solicitudDto->getFecha_solicitud());
			$query.binndParam(4, $solicitudDto->getTipo_movimiento());
			
			$query->execute();
			$mensaje="Solicitud registrada";
		} catch (Exception $ex) {
			$mensaje=$ex->getMessage();
		}
		$cnn=null;
		return $mensaje;
	}
	
	public function modificarSolicitud(SolicitudDto $solicitudDto){
		$cnn = conexion::getConexion();
		$mensaje="";
		try {
			$query = $cnn->prepare("UPDATE tbl_solicitud SET fk_id_proyecto=?, fecha_solicitud=?, tipo_movimiento=? WHERE id_solicitud=?");
			$query.binndParam(1, $solicitudDto->getFk_id_proyecto());
			$query.binndParam(2, $solicitudDto->getFecha_solicitud());
			$query.binndParam(3, $solicitudDto->getTipo_movimiento());
			$query.binndParam(4, $solicitudDto->getId_solicitud());
			
			$query->execute();
			$mensaje="Solicitud actualizada";
		} catch (Exception $ex) {
			$mensaje=$ex->getMessage();
		}
		$cnn=null;
		return $mensaje;
	}
	
	public function obtenerSolicitud(SolicitudDto $solicitudDto){
		$cnn = conexion::getConexion();
		$mensaje="";
		try {
			$query = $cnn->prepare("SELECT * FROM tbl_solicitud WHERE id_solicitud=?");
			$query.binndParam(1, $solicitudDto->getId_solicitud());
			
			$query->execute();
			return $query->fetch();
		} catch (Exception $ex) {
			$mensaje=$ex->getMessage();
			return $mensaje;
		}
		$cnn=null;
	}
	
	public function eliminarSolicitud(SolicitudDto $solicitudDto){
		$cnn = conexion::getConexion();
		$mensaje="";
		try {
			$query = $cnn->prepare("DELETE FROM tbl_solicitud WHERE id_solicitud=?");
			$query.binndParam(1, $solicitudDto->getId_solicitud());
			
			$query->execute();
			$mensaje="Solicitud eliminada";
		} catch (Exception $ex) {
			$mensaje=$ex->getMessage();
		}
		$cnn=null;
		return $mensaje;
	}
	
	public function listarSolicitudes(SolicitudDto $solicitudDto){
		$cnn = conexion::getConexion();
		$mensaje="";
		try {
			$query = $cnn->prepare("SELECT * FROM tbl_solicitud");
			
			$query->execute();
			return $query->fetchAll();
		} catch (Exception $ex) {
			$mensaje=$ex->getMessage();
			return $mensaje;
		}
		$cnn=null;
	}
}
