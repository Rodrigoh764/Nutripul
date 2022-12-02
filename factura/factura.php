<?php
// ob_start();

// $html = ob_get_clean();

require_once '../Libreria/dompdf/autoload.inc.php';

use Dompdf\Dompdf;

$dompdf = new Dompdf();

$codigo = file_get_contents("../factura/borrador.php");



$dompdf->loadHtml($codigo);
//letter
$dompdf->setPaper('A4', 'portrait');
//$dompdf->setPaper("letter");
$dompdf->render();
$dompdf->stream("factura.pdf", array("Attachment" => false));

?>
