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
 * Description of PaginaDto
 *
 * @author Depurador
 */
class PaginaDto {
	private $id_pagina, $fk_id_menu, $nombre, $url;
	
	function getId_pagina() {
		return $this->id_pagina;
	}

	function getFk_id_menu() {
		return $this->fk_id_menu;
	}

	function getNombre() {
		return $this->nombre;
	}

	function getUrl() {
		return $this->url;
	}

	function setId_pagina($id_pagina) {
		$this->id_pagina = $id_pagina;
	}

	function setFk_id_menu($fk_id_menu) {
		$this->fk_id_menu = $fk_id_menu;
	}

	function setNombre($nombre) {
		$this->nombre = $nombre;
	}

	function setUrl($url) {
		$this->url = $url;
	}

}
