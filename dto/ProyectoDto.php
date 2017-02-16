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
 * Description of ProyectoDto
 *
 * @author Depurador
 */
class ProyectoDto {
	private $id_proyecto, $fk_id_usuario, $descripcion, $fecha_inicio, $fecha_fin;
	
	function getId_proyecto() {
		return $this->id_proyecto;
	}

	function getFk_id_usuario() {
		return $this->fk_id_usuario;
	}

	function getDescripcion() {
		return $this->descripcion;
	}

	function getFecha_inicio() {
		return $this->fecha_inicio;
	}

	function getFecha_fin() {
		return $this->fecha_fin;
	}

	function setId_proyecto($id_proyecto) {
		$this->id_proyecto = $id_proyecto;
	}

	function setFk_id_usuario($fk_id_usuario) {
		$this->fk_id_usuario = $fk_id_usuario;
	}

	function setDescripcion($descripcion) {
		$this->descripcion = $descripcion;
	}

	function setFecha_inicio($fecha_inicio) {
		$this->fecha_inicio = $fecha_inicio;
	}

	function setFecha_fin($fecha_fin) {
		$this->fecha_fin = $fecha_fin;
	}

}
