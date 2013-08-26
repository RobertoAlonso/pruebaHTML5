<?php
  /*session_start();*/
  
error_reporting(0);
  
$nombre_archivo = 'pedidos.txt';
$contenido ="Nombre: ".$_POST["cliente"]." , ".
			"Empresa: ".$_POST["empresa"]." , ".
			"Telefono: ".$_POST["tlfno"]." , ".
			"E-mail: ".$_POST["email"]." ; ".
			"Productos: ".$_POST["productos"]." , ".
			"Cordero:".$_POST["1"]." / ".
			"Paletilla:".$_POST["2"]." / ".
			"Pierna:".$_POST["3"]." / ".
			"Carret:".$_POST["4"]." / ".
			"Hígados:".$_POST["5"]." / ".
			"Riñones:".$_POST["6"]." / ".
			"Mollejas:".$_POST["7"]." / ".
			"Cuello:".$_POST["8"]." / ".
			"Mantos:".$_POST["9"]." / ".
			"Costilla o falda:".$_POST["10"]." / ".
			"Asaduras:".$_POST["11"]." / ".
			"Callos:".$_POST["12"]." / ".
			"Cabeza:".$_POST["13"]." / ".
			"Chuletillas:".$_POST["14"]." / ".
			"Manos:".$_POST["15"]." / ".
			"Oveja:".$_POST["16"]." / ".
			"Lechal:".$_POST["17"]." / ".
			"Lechal esquinado:".$_POST["18"]." / ".
			"Cabrito:".$_POST["19"]." / ".
			"Cabrito esquinado:".$_POST["20"]." / ".
			"Cerdo:".$_POST["21"]." / ".
			"Despiece de cerdo:".$_POST["22"]." / ".
			"Envio: ".$_POST["envio"]." , ".
			"Direccion: ".$_POST["direccion"]." , ".
			"Fecha: ".$_POST["fecha"]." ; ".
			"Hora: ".$_POST["hora"]." , ".
			"Comentarios: ".$_POST["comentarios"]." ; ".
			"\r\n"."\r\n";

			
			
			
			
			
if (is_writable($nombre_archivo))
{
    if (!$gestor = fopen($nombre_archivo, 'a'))
	{
         echo "No se puede abrir el archivo para guardar los datos.</p>";
         exit;
    }
    if (fwrite($gestor, $contenido) === FALSE)
	{
        echo "No se puede escribir al archivo para guardar los datos.</p>";
        exit;
    }
    echo "Los datos se han enviado correctamente.</p></p>";
    fclose($gestor);
}
else
{
    echo "No se puede escribir sobre el archivo para guardar su texto. Por favor, si el problema persiste contacte con el administrador.</p>";
}
?>
