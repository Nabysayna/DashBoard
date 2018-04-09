
<!DOCTYPE html>
<html lang="en">
  	<head>
	    <title>OPERATEURS</title>
<?php include 'PHPExcel/Classes/PHPExcel.php';
?>
</head>
<?php
$objPHPExcel = new PHPExcel;
$s = $objPHPExcel->getActiveSheet();
$s->setCellValue('A1','Hello');
$s->setCellValueByColumnAndRow(2, 1, 'World!');
$writer = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');

// Option 1 : fichier .xlsx apparaissant à côté du .php
$writer->save('./HelloWorld1.xlsx');

// Option 2 : fichier à télécharger par le navigateur
header('Content-Disposition: attachment;filename="HelloWorld2.xlsx"');
$writer->save('php://output');


$objReader = PHPExcel_IOFactory::createReader('Excel2007');
$objPHPExcel = $objReader->load('./HelloWorld1.xlsx');
print $objPHPExcel->getActiveSheet()->getCell('A1')->getValue();
$xlsx = PHPExcel_IOFactory::load('./HelloWorld1.xlsx');
$writer = PHPExcel_IOFactory::createWriter($xlsx, 'CSV');
$writer->setDelimiter(";");
$writer->setEnclosure("");
$writer->save('./HelloWorld1.csv');
$objReader = PHPExcel_IOFactory::createReader('CSV');
$objReader->setDelimiter(';'); 
$objReader->setEnclosure(' ');
$objPHPExcel = $objReader->load('./HelloWorld1.csv');
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('./HelloWorld3.xlsx');
$style = array(
  'borders' => array(
  	'outline' => array(
  		'style' => PHPExcel_Style_Border::BORDER_THICK,
  		'color' => array('argb' => 'FFFF0000'),
  	),
  ),
  'font'  => array(
  	'bold'  => true,
  	'name'  => 'Tahoma',
  	'size'  => 10,
  	'color' => array('rgb' => 'FF0000'),
  ),
  'fill' => array(
  	'type' => PHPExcel_Style_Fill::FILL_SOLID, 
  	'color' => array('rgb' => 'C3C3E5')
  ),
  'alignment' => array( 
  	'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
  	'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
  	'wrap' => true // retour à la ligne automatique
  )
);

// Ajout du style ci-dessus en feuille 2 d'un nouveau fichier
$objPHPExcel = new PHPExcel;
$writer = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$s = $objPHPExcel->createSheet();
$s->setTitle('Feuille style');
$s = $objPHPExcel->setActiveSheetIndex($objPHPExcel->getSheetCount()-1);
$s->setCellValue('A1','Hello style');
$s->getStyle('A1')->applyFromArray($style);
$s->getStyle('B1')->getNumberFormat()->setFormatCode( PHPExcel_Style_NumberFormat::FORMAT_TEXT );
$s->setCellValue('B1','9999999999999999999');  // Sans le format texte les nombres de plus de 15 chiffres sont arrondis
$writer->save('./HelloWorld4.xlsx');
?>
</html>