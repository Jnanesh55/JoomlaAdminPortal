<?php
ob_end_clean(); 
ob_start();
defined('_JEXEC') or die('Restricted access');

require_once(JPATH_COMPONENT . DS . 'phpexcel' . DS . 'PHPExcel.php');


// DB connection
$db = JFactory::getDBO();
$query = "SELECT*FROM #__students ORDER BY id";
$db->setQuery($query);
$students = $db->loadObjectList();

// Create Excel sheet
$excel = new PHPExcel();
$sheet = $excel->setActiveSheetIndex(0);

// Set header row
$sheet->setCellValue('A1', 'ID');
$sheet->setCellValue('B1', 'First Name');
$sheet->setCellValue('C1', 'Last Name');
$sheet->setCellValue('D1', 'Email');
$sheet->setCellValue('E1','Mobile');
$sheet->setCellValue('F1','Date of Birth');
$sheet->setCellValue('G1','Gender');
$sheet->setCellValue('H1','Address');
$sheet->setCellValue('I1', 'College');
$sheet->setCellValue('J1','Branch');
$sheet->setCellValue('K1', 'Year');
$sheet->setCellValue('L1','Skills');
$sheet->setCellValue('M1', 'Interests');

$sheet->getStyle('A1:M1')->getFont()->setBold(true);

// Fill data
$row = 2;
foreach ($students as $student) {
    $sheet->setCellValue("A$row", $student->id);
    $sheet->setCellValue("B$row", $student->firstname);
    $sheet->setCellValue("C$row", $student->lastname);
    $sheet->setCellValue("D$row", $student->email);
    $sheet->setCellValue("E$row", $student->mobile);
    $sheet->setCellValue("F$row", $student->dob);
    $sheet->setCellValue("G$row", $student->gender);
    $sheet->setCellValue("H$row", $student->address);
    $sheet->setCellValue("I$row", $student->collagename);   
    $sheet->setCellValue("J$row", $student->branch);
    $sheet->setCellValue("K$row", $student->year);
    $sheet->setCellValue("L$row", $student->skills);
    $sheet->setCellValue("M$row", $student->interests);

    $row++;
}

$lastRow = $row - 1;
$styleArray = array(
    'borders' => array(
        'allborders' => array(
            'style' => PHPExcel_Style_Border::BORDER_THIN,
            'color' => array('argb' => 'FF000000'),
        ),
    ),
);

$sheet->getStyle("A1:M$lastRow")->applyFromArray($styleArray);


foreach(range('A','M') as $colomnID){
    $sheet->getColumnDimension($colomnID)->setAutoSize(true);
}


// Set headers for browser download
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="students.xlsx"');
header('Cache-Control: max-age=0');

// Output Excel file
$objWriter = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
$objWriter->save('php://output');
exit;
