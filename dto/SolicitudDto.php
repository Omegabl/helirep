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
 * Description of SolicitudDto
 *
 * @author Depurador
 */
class SolicitudDto {
	private $id_solicitud, $fk_id_proyecto, $fecha_solicitud, $tipo_movimiento;
	
	function getId_solicitud() {
		return $this->id_solicitud;
	}

	function getFk_id_proyecto() {
		return $this->fk_id_proyecto;
	}

	function getFecha_solicitud() {
		return $this->fecha_solicitud;
	}

	function getTipo_movimiento() {
		return $this->tipo_movimiento;
	}

	function setId_solicitud($id_solicitud) {
		$this->id_solicitud = $id_solicitud;
	}

	function setFk_id_proyecto($fk_id_proyecto) {
		$this->fk_id_proyecto = $fk_id_proyecto;
	}

	function setFecha_solicitud($fecha_solicitud) {
		$this->fecha_solicitud = $fecha_solicitud;
	}

	function setTipo_movimiento($tipo_movimiento) {
		$this->tipo_movimiento = $tipo_movimiento;
	}

}
