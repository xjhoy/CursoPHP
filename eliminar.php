<?php
/*
 * Solo elimina archivos dentro del servidor
 */
$filename = $_POST['archivo'];
unlink($filename);
echo 'el archivo ha sido eliminado con exito';