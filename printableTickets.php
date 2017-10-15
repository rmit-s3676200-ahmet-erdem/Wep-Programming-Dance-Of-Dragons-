<?php

require('fpdp181/fpdp181.php');

//A4 size
//margin 10mm each side

$pdf = new FDPF('p','mm', 'A4');

$pdf -> AddPage();
$pdf ->SetFont('Arial', 'R', 10);

//cell(width, height, text, border[0,1 bordered], end line[0 continue/1 new line], [align L/C/R])
$pdf-> Cell (130, 5, 'echo', 1, 1);
$pdf-> Cell (130, 5, 'echo', 1, 1);


$pdf -> Output();
<?php include_once("/home/eh1/e54061/public_html/wp/debug.php"); ?>
?>
