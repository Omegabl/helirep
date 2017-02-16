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
 * Description of MaterialSolicitudDto
 *
 * @author Depurador
 */
class MaterialSolicitudDto {
	private $fk_id_material, $fk_id_solicitud, $cantidad;
	
	function getFk_id_material() {
		return $this->fk_id_material;
	}

	function getFk_id_solicitud() {
		return $this->fk_id_solicitud;
	}

	function getCantidad() {
		return $this->cantidad;
	}

	function setFk_id_material($fk_id_material) {
		$this->fk_id_material = $fk_id_material;
	}

	function setFk_id_solicitud($fk_id_solicitud) {
		$this->fk_id_solicitud = $fk_id_solicitud;
	}

	function setCantidad($cantidad) {
		$this->cantidad = $cantidad;
	}

}
