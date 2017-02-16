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
 * Description of MaterialDto
 *
 * @author Depurador
 */
class MaterialDto {
	private $id_material, $fk_id_categoria, $fk_id_proveedor, $referencia, $descripcion;
	
	function getId_material() {
		return $this->id_material;
	}

	function getFk_id_categoria() {
		return $this->fk_id_categoria;
	}

	function getFk_id_proveedor() {
		return $this->fk_id_proveedor;
	}

	function getReferencia() {
		return $this->referencia;
	}

	function getDescripcion() {
		return $this->descripcion;
	}

	function setId_material($id_material) {
		$this->id_material = $id_material;
	}

	function setFk_id_categoria($fk_id_categoria) {
		$this->fk_id_categoria = $fk_id_categoria;
	}

	function setFk_id_proveedor($fk_id_proveedor) {
		$this->fk_id_proveedor = $fk_id_proveedor;
	}

	function setReferencia($referencia) {
		$this->referencia = $referencia;
	}

	function setDescripcion($descripcion) {
		$this->descripcion = $descripcion;
	}

}
