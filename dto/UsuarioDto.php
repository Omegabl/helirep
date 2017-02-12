<?php

/*
 * The MIT License
 *
 * Copyright 2017 APRENDIZ.
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
 * Description of UsuarioDto
 *
 * @author APRENDIZ
 */
class UsuarioDto {
	private $idUsuario=0, $nombre="", $apellido="", $contrasena="", $documento="", $activo=1, $nombreUsuario="", $tbl_rol_id_rol=null;
	
	function getIdUsuario() {
		return $this->idUsuario;
	}

	function getNombre() {
		return $this->nombre;
	}

	function getApellido() {
		return $this->apellido;
	}

	function getContrasena() {
		return $this->contrasena;
	}

	function getDocumento() {
		return $this->documento;
	}

	function getActivo() {
		return $this->activo;
	}

	function getNombreUsuario() {
		return $this->nombreUsuario;
	}

	function getTbl_rol_id_rol() {
		return $this->tbl_rol_id_rol;
	}

	function setIdUsuario($idUsuario) {
		$this->idUsuario = $idUsuario;
	}

	function setNombre($nombre) {
		$this->nombre = $nombre;
	}

	function setApellido($apellido) {
		$this->apellido = $apellido;
	}

	function setContrasena($contrasena) {
		$this->contrasena = $contrasena;
	}

	function setDocumento($documento) {
		$this->documento = $documento;
	}

	function setActivo($activo) {
		$this->activo = $activo;
	}

	function setNombreUsuario($nombreUsuario) {
		$this->nombreUsuario = $nombreUsuario;
	}

	function setTbl_rol_id_rol($tbl_rol_id_rol) {
		$this->tbl_rol_id_rol = $tbl_rol_id_rol;
	}


}
