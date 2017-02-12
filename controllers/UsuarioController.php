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

require_once '../dao/UsuarioDao.php';
require_once '../dto/UsuarioDto';
require_once '../utilidades/conexion.php';

if (isset($_POST['registro'])){
	$uDao=new UsuarioDao();
	$uDto=new UsuarioDto();
	$uDto->setNombre($POST_['nombre']);
	$uDto->setApellido($POST_['apellido']);
	$uDto->setTbl_rol_id_rol($POST_['rol']);
	$uDto->setContrasena($POST_['contrasena']);
	$uDto->setDocumento($POST_['documento']);
	$uDto->setActivo($POST_['activo']);
	$uDto->setNombreUsuario($POST_['nombreUsuario']);
	
	$mensaje = $uDao->registrarUsuario($uDto);
	
	header("Location: ../registroUsuarios.php?mensaje=".$mensaje);
} else if ($_GET['id']!=NULL) {
    $uDao = new UsuarioDao();
    
    $mensaje = $uDao->eliminarUsuario($_GET['id']);
    
    header("Location: ../listarUsuarios.php?mensaje=".$mensaje);
    
} else if (isset($_POST['modificar'])) {
    $uDao = new UsuarioDao();
	$uDto=new UsuarioDto();
	
	$uDto->setNombre($POST_['nombre']);
	$uDto->setApellido($POST_['apellido']);
	$uDto->setTbl_rol_id_rol($POST_['rol']);
	$uDto->setContrasena($POST_['contrasena']);
	$uDto->setDocumento($POST_['documento']);
	$uDto->setActivo($POST_['activo']);
	$uDto->setNombreUsuario($POST_['nombreUsuario']);
    
    $mensaje = $uDao->modificarUsuario($uDto);
    header("Location: ../listarUsuarios.php?mensaje=".$mensaje);
    
} 