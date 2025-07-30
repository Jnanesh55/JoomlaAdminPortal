<?php
defined('_JEXEC') or die('Restricted access');
ob_start(); // Start output buffering
require_once(JPATH_COMPONENT . DS . 'FPDF' . DS . 'fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();

$pdf->Image('components/com_studentportal/assets/img/bmslogo.png', 10, 10, 20, 20);

$pdf->SetFont('Arial', '', 10);
$pdf->Cell(0, 2, 'Student Admission Form For Year 2025-2026', 0, 1, 'R');

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(0, 8, 'CET-AIDED-1BM25CS001-T', 0, 0.1, 'R');

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 6, 'B.M.S. College of Engineering', 0, 1, 'C');

$pdf->SetFont('Arial', '', 10);
$pdf->Cell(0, 6, 'An Autonomous Institution, Affiliated to VTU, Belagavi', 0, 1, 'C');
$pdf->Cell(0, 6, 'Bull Temple Rd, Basavanagudi, Bengaluru, Karnataka 560019', 0, 1, 'C');
$pdf->Cell(0, 6, 'Ph:+91-80-26622130-35  URL: www.bmsce.ac.in', 0, 1, 'C');
$pdf->Ln(2);
$pdf->Line(x1, y1, x2, y2);
$pdf->Line(10, $pdf->GetY(), 200, $pdf->GetY());

$pdf->Ln(1);
$pdf->SetFillColor(200, 200, 200);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(190, 5, 'Personal Information', 0, 1, 'L', true);
$pdf->Ln(1);

$pdf->Line(x1, y1, x2, y2);
$pdf->Line(10, $pdf->GetY(), 200, $pdf->GetY());

$pdf->Ln(3);
$y_start = $pdf->GetY();
$pdf->Cell(190, 2, '', 'T'); // Top border
$pdf->Ln();

$pdf->SetFont('Arial', '', 9);
$pdf->Cell(30, 6, "Student Name ", 0);
$pdf->Cell(5, 6, ":", 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(60, 7, "TEST FOR FEE", 0);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(30, 6, "Mobile ", 0);
$pdf->Cell(5, 6, ":", 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(50, 7, "8618710632", 0, 1);
$pdf->Cell(190, 2, '', 'T');
$pdf->Ln();

// Line 1: Student Email Id
$pdf->Cell(30, 6, "Student Email Id", 0);
$pdf->Cell(5, 6, ":", 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(60, 6, "testfee@gmail.com", 0);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(30, 6, "Nationality", 0);
$pdf->Cell(5, 6, ":", 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(50, 6, "Indian", 0, 1);
$pdf->Cell(190, 2, '', 'T');
$pdf->Ln();

// Line 2: Gender & Religion
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(30, 6, "Gender", 0);
$pdf->Cell(5, 6, ":", 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(60, 6, "MALE", 0);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(30, 6, "Religion", 0);
$pdf->Cell(5, 6, ":", 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(50, 6, "Islam", 0, 1);
$pdf->Cell(190, 2, '', 'T');
$pdf->Ln();

// Line 3: DOB & Mother Tongue
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(30, 6, "Date of Birth", 0);
$pdf->Cell(5, 6, ":", 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(60, 6, "03-03-1993", 0);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(30, 6, "Mother Tongue", 0);
$pdf->Cell(5, 6, ":", 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(50, 6, "Hindi", 0, 1);
$pdf->Cell(190, 2, '', 'T');
$pdf->Ln();

// Line 4: Place of Birth & Aadhar
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(30, 6, "Place of Birth", 0);
$pdf->Cell(5, 6, ":", 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(60, 6, "Bijapur", 0);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(30, 6, "Aadhar Card No.", 0);
$pdf->Cell(5, 6, ":", 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(50, 6, "234758972348", 0, 1);
$pdf->Cell(190, 2, '', 'T');
$pdf->Ln();

// Line 5: Domicile State & Pin Code
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(30, 6, "Domicile State", 0);
$pdf->Cell(5, 6, ":", 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(60, 6, "Karnataka", 0);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(30, 6, "Pin Code", 0);
$pdf->Cell(5, 6, ":", 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(50, 6, "128798", 0, 1);
$pdf->Cell(190, 2, '', 'T');
$pdf->Ln();

$pdf->SetFont('Arial', '', 9);
$pdf->Cell(35, 6, "Scholarship", 0);
$pdf->Cell(5, 6, ":", 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(35, 6, "NO", 0);

$pdf->SetFont('Arial', '', 9);
$pdf->Cell(25, 6, "SSP ID", 0);
$pdf->Cell(5, 6, ":", 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(45, 6, "234234121", 0);

$pdf->SetFont('Arial', '', 9);
$pdf->Cell(20, 6, "Pin Code", 0);
$pdf->Cell(5, 6, ":", 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(20, 6, "128798", 0, 1);

$pdf->Cell(190, 2, '', 'T');
$pdf->Ln();
$pdf->Image('components/com_studentportal/assets/img/prologo.png', 169, 56, 31, 38);
// Line 1: Caste & Phone No
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(30, 6, "Caste", 0);
$pdf->Cell(5, 6, ":", 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(60, 6, "ACHARI", 0);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(40, 6, "Phone No With STD Code", 0);
$pdf->Cell(2, 6, ":", 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(0, 6, "972389", 0, 1);
$pdf->Cell(190, 2, '', 'T');
$pdf->Ln();

// Line 2: Sub caste & Blood Group
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(30, 6, "Sub caste", 0);
$pdf->Cell(5, 6, ":", 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(60, 6, "232134", 0);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(30, 6, "Blood Group", 0);
$pdf->Cell(5, 6, ":", 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(60, 6, "A -ve", 0, 1);
$pdf->Cell(190, 2, '', 'T');
$pdf->Ln();

// Line 3: State of Birth & Hobbies
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(30, 6, "State of birth", 0);
$pdf->Cell(5, 6, ":", 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(60, 6, "Karnataka", 0);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(30, 6, "Hobbies", 0);
$pdf->Cell(5, 6, ":", 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(60, 6, "Sports", 0, 1);
$pdf->Cell(190, 2, '', 'T');
$pdf->Ln();

// Line 4: Participation & Awards Won
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(30, 6, "Participation", 0);
$pdf->Cell(5, 6, ":", 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(60, 6, "District", 0);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(30, 6, "Awards Won", 0);
$pdf->Cell(5, 6, ":", 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(60, 6, "1", 0, 1);
$pdf->Cell(190, 2, '', 'T');
$pdf->Ln();

// Line 5: Description & Student Passport No
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(30, 6, "Description", 0);
$pdf->Cell(5, 6, ":", 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(60, 6, "123123", 0);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(30, 6, "Student Passport No", 0);
$pdf->Cell(5, 6, ":", 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(60, 6, "19283798", 0, 1);
$pdf->Cell(190, 2, '', 'T');
$pdf->Ln();

// Line 6: Parents Passport No & Parents Visa No
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(30, 6, "Parents Passport No", 0);
$pdf->Cell(5, 6, ":", 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(60, 6, "89273489", 0);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(30, 6, "Parents Visa No", 0);
$pdf->Cell(5, 6, ":", 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(60, 6, "98237489", 0, 1);
$pdf->Cell(190, 2, '', 'T');
$pdf->Ln();

// Line 7: Parents Visa Exp Date & NRI
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(35, 6, "Parents Visa Exp Date", 0);
$pdf->Cell(3, 6, ":", 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(70, 6, "2025-07-04", 0);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(17, 6, "NRI", 0);
$pdf->Cell(5, 6, ":", 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(60, 6, "No", 0, 1);
$pdf->Cell(190, 2, '', 'T');
$pdf->Ln();

// Line 8: Area & Disability
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(30, 6, "Area", 0);
$pdf->Cell(5, 6, ":", 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(60, 6, "Urban", 0);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(30, 6, "Disablity / Handicap", 0);
$pdf->Cell(5, 6, ":", 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(40, 6, "No", 0, 1);
$pdf->Cell(190, 2, '', 'T');
$pdf->Ln();

// Line 9: Type of Disability & Hostel Facility
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(30, 6, "Type Of Disability", 0);
$pdf->Cell(5, 6, ":", 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(50, 6, "Na", 0);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(40, 6, "Is Hostel Facility Required ?", 0);
$pdf->Cell(5, 6, ":", 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(20, 6, "No", 0, 1);
$pdf->Cell(190, 2, '', 'T');
$pdf->Ln();

$pdf->SetFont('Arial', '', 9);
$pdf->Cell(70, 6, "Is brother/ sister studying in this college?", 0);
$pdf->Cell(5, 6, ":", 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(115, 6, "No", 0, 1);
$pdf->Cell(190, 2, '', 'T');

// Get end Y position
$y_end = $pdf->GetY();
$pdf->Ln();

// Draw left and right vertical lines
$pdf->Line(10, $y_start, 10, $y_end);     // Left side line
$pdf->Line(200, $y_start, 200, $y_end);   // Right side line

$pdf->Ln(8);

$pdf->SetFont('Arial', '', 10);
$pdf->SetLineWidth(0.2);

// Column widths
$w_label = 32;
$w_value = 32;
$h = 10;

// Function to draw one row of 6 cells (with wrapping for long values)
function addSixColumnRow($pdf, $dataRow)
{
    global $w_label, $w_value;

    // Calculate height based on wrapped content
    $lineHeight = 5;
    $maxLines = 1;

    // Calculate how many lines each value will take
    for ($i = 0; $i < count($dataRow); $i++) {
        $text = $dataRow[$i];
        $width = ($i % 2 === 0) ? $w_label : $w_value;
        $numLines = ceil($pdf->GetStringWidth($text) / $width);
        if ($numLines > $maxLines)
            $maxLines = $numLines;
    }
    $cellHeight = $lineHeight * $maxLines;

    // Save X/Y for multiline rendering
    $x = $pdf->GetX();
    $y = $pdf->GetY();

    // Draw each cell
    for ($i = 0; $i < count($dataRow); $i++) {
        $isValue = $i % 2 !== 0;
        $width = $isValue ? $w_value : $w_label;
        $fontStyle = $isValue ? 'B' : '';
        $pdf->SetFont('Arial', $fontStyle, 10);

        // Save current position
        $xPos = $pdf->GetX();
        $yPos = $pdf->GetY();

        // Draw border
        $pdf->Rect($xPos, $yPos, $width, $cellHeight);

        // Write text
        $pdf->MultiCell($width, $lineHeight, $dataRow[$i], 0, 'L');

        // Move cursor to the right for next cell
        $pdf->SetXY($xPos + $width, $yPos);
    }

    // Move to next line
    $pdf->Ln($cellHeight);
}

// Add rows
addSixColumnRow($pdf, array('Admission Quota', 'CET-AIDED', 'CET-AIDED Reg.No.', '987', 'Admission Order No.', '987'));
addSixColumnRow($pdf, array('Claimed Category', 'SCH', 'CET-AIDED Rank', '97', 'Counseling Round', '1'));
addSixColumnRow($pdf, array('Allotted Category', 'SCH', 'Batch', '2025-2029', 'Term', 'Odd Term 2025'));
addSixColumnRow($pdf, array('Entrance Exam', 'JEE', 'CET/COMEDK/OTHER-REG NO', '987', 'Entrance Exam Rank', '97'));
addSixColumnRow($pdf, array('Fees paid at CET/Comedk/Mgmt', '987', 'Admission Date', '2025-07-23', 'Issued Date', '2025-07-23'));
addSixColumnRow($pdf, array('Date of allotment', '2025-07-23', 'Fee receipt no', '1231', 'Fee paid date', '2025-07-23'));

// Last row full width (wrapping handled)
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(50, $h, 'Program - Department', 1);
$pdf->SetFont('Arial', 'B', 10);
$pdf->MultiCell($w_label * 3.43 + $w_value, 10, 'B.E-Computer Science & Engineering', 1);
$pdf->Ln(14);

$pdf->SetFont('Arial', '', 8);
$pdf->Cell(0, 4,'Page 1/5',0,1,'C');

$pdf->Ln(10);

$pdf->SetFont('Arial', '', 10);
$pdf->Cell(0, 2, 'Student Admission Form For Year 2025-2026', 0, 1, 'R');

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(0, 8, 'CET-AIDED-1BM25CS001-T', 0, 0.1, 'R');

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 6, 'B.M.S. College of Engineering', 0, 1, 'C');

$pdf->SetFont('Arial', '', 10);
$pdf->Cell(0, 6, 'An Autonomous Institution, Affiliated to VTU, Belagavi', 0, 1, 'C');
$pdf->Cell(0, 6, 'Bull Temple Rd, Basavanagudi, Bengaluru, Karnataka 560019', 0, 1, 'C');
$pdf->Cell(0, 6, 'Ph:+91-80-26622130-35  URL: www.bmsce.ac.in', 0, 1, 'C');
$pdf->Ln(2);
$pdf->Line(x1, y1, x2, y2);
$pdf->Line(10, $pdf->GetY(), 200, $pdf->GetY());

$pdf->Ln(1);
$pdf->SetFillColor(200, 200, 200);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(190, 5, 'Educational Information', 0, 1, 'L', true);
$pdf->Ln(5);
$pdf->Image('components/com_studentportal/assets/img/bmslogo.png', 10, 10, 20, 20);


$headers = array(
    'SL',
    'Exam',
    'Board',
    'School',
    'Year Of Passing',
    'Total Marks',
    'Obtained Marks/CGPA',
    'Percentage (%)',
    'Physics',
    'Chemistry',
    'Mathematics',
    'PCM %'
);

$pdf->SetFont('Arial', 'B', 9);
$lineHeight = 5;

$widths = array(10, 18, 18, 22, 15, 15, 17, 15, 15, 15, 15, 15);

// Step 2: Calculate maximum number of lines required for each header
$maxLines = 1;
foreach ($headers as $i => $header) {
    $colWidth = $widths[$i];
    $numLines = ceil($pdf->GetStringWidth($header) / ($colWidth - 2));
    if ($numLines > $maxLines)
        $maxLines = $numLines;
}
$cellHeight = $lineHeight * $maxLines;

// Step 3: Store original position
$startX = $pdf->GetX();
$startY = $pdf->GetY();

// Step 4: Draw header row with wrapping
foreach ($headers as $i => $header) {
    $x = $pdf->GetX();
    $y = $pdf->GetY();

    // Draw cell border manually
    $pdf->Rect($x, $y, $widths[$i], $cellHeight);

    // Draw wrapped text
    $pdf->MultiCell($widths[$i], $lineHeight, $header, 0, 'C');

    // Reset X/Y for next cell
    $pdf->SetXY($x + $widths[$i], $y);
}

// Step 5: Move to next line after headers
$pdf->SetXY($startX, $startY + $cellHeight);

$data = array(
    array('1', 'SSLC/10th', 'ICSE', 'Asdlkfjkl', '2000', '100', '90', '90', '-', '-', '-', '-'),
    array('2', 'PUC', 'CBSE', 'Asfdkj', '2000', '300', '280', '93.33', '91', '90', '90', '90.33')
);

$pdf->SetFont('Arial', '', 9);

foreach ($data as $row) {
    $maxLines = 1;
    foreach ($row as $i => $col) {
        $numLines = ceil($pdf->GetStringWidth($col) / ($widths[$i] - 2));
        if ($numLines > $maxLines)
            $maxLines = $numLines;
    }
    $cellHeight = $lineHeight * $maxLines;

    $x = $pdf->GetX();
    $y = $pdf->GetY();

    foreach ($row as $i => $col) {
        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->Rect($x, $y, $widths[$i], $cellHeight);
        $pdf->MultiCell($widths[$i], $lineHeight, $col, 0, 'C');
        $pdf->SetXY($x + $widths[$i], $y);
    }
    $pdf->Ln($cellHeight);
}
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(60, 5, 'SSLC Details', 0, 0, 'L');

$pdf->Cell(60, 5, 'PUC Details', 0, 1, 'C');

$pdf->Ln();

$pdf->SetFont('Arial', '', 9);
$pdf->Cell(30, 6, "School Country ", 0, 0, "L");
$pdf->Cell(5, 6, ":", 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(30, 6, "India", 0, 0);

$pdf->SetFont('Arial', '', 9);
$pdf->Cell(30, 6, "College Country ", 0, 0, "C");
$pdf->Cell(5, 6, ":", 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(30, 6, "India", 0, 0);

$pdf->SetFont('Arial', '', 9);
$pdf->Cell(30, 6, "Aggregate Marks ", 0, 0, "R");
$pdf->Cell(5, 6, ":", 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(30, 6, "280", 0, 1);


// Row 2
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(30, 6, "School Town ", 0, 0, "L");
$pdf->Cell(5, 6, ":", 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(30, 6, "Bijapur", 0, 0);

$pdf->SetFont('Arial', '', 9);
$pdf->Cell(30, 6, "College Town ", 0, 0, "C");
$pdf->Cell(5, 6, ":", 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(30, 6, "Bijapur", 0, 0);

$pdf->SetFont('Arial', '', 9);
$pdf->Cell(30, 6, "PCM/PCB/PCE Max Marks", 0, 0, "R");
$pdf->Cell(5, 6, ":", 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(30, 6, "300", 0, 1);


// Row 3
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(30, 6, "Roll/reg.No ", 0, 0, "L");
$pdf->Cell(5, 6, ":", 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(30, 6, "12312", 0, 0);

$pdf->SetFont('Arial', '', 9);
$pdf->Cell(30, 6, "Roll/reg.No ", 0, 0, "C");
$pdf->Cell(5, 6, ":", 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(30, 6, "1231", 0, 0);

$pdf->SetFont('Arial', '', 9);
$pdf->Cell(30, 6, "PCM/PCB/PCE % ", 0, 0, "R");
$pdf->Cell(5, 6, ":", 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(30, 6, "90.33", 0, 1);


// Row 4
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(30, 6, "Medium Of Instruction ", 0, 0, "L");
$pdf->Cell(5, 6, ":", 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(30, 6, "English", 0, 0);

$pdf->SetFont('Arial', '', 9);
$pdf->Cell(30, 6, "Medium Of Instruction ", 0, 0, "C");
$pdf->Cell(5, 6, ":", 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(30, 6, "English", 0, 0);

$pdf->SetFont('Arial', '', 9);
$pdf->Cell(30, 6, "PCM Obtained Marks", 0, 0, "R");
$pdf->Cell(5, 6, ":", 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(30, 6, "271", 0, 1);

$pdf->Ln();
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(100, 6, 'I declare that the above information is true and correct to the best of my knowledge.', 0, 1, 'L');

$pdf->Ln(10);

$pdf->SetFillColor(200, 200, 200);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(190, 5, 'Educational Information', 0, 1, 'L', true);
$pdf->Cell(190, 2, '', 'T');

$pdf->Ln();
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(190, 5, 'Father Detail                                                      Mother Detail                                            Guardian Detail', 0, 1, 'L');

$pdf->Ln();


function addSixColumnPageTwo($pdf, $dataRow)
{
      $w_label=25;
      $w_value= 39;
    $lineHeight = 8;
   
    $x = $pdf->GetX();
    $y = $pdf->GetY();

    // Draw each cell
    for ($i = 0; $i < count($dataRow); $i++) {
        $isValue = $i % 2 !== 0;
        $width = $isValue ? $w_value : $w_label;
        $fontStyle = $isValue ? 'B' : '';
        $pdf->SetFont('Arial', $fontStyle, 8);

        // Save current position
        $xPos = $pdf->GetX();
        $yPos = $pdf->GetY();

        // Draw border
        $pdf->Rect($xPos, $yPos, $width, $lineHeight);

        // Write text
        $pdf->MultiCell($width, $lineHeight, $dataRow[$i], 0, 'L');

        // Move cursor to the right for next cell
        $pdf->SetXY($xPos + $width, $yPos);
    }

    // Move to next line
    $pdf->Ln($lineHeight);
}

// Add rows
addSixColumnPageTwo($pdf, array('Name', 'Asldkfjkl', 'Name', 'Aslkdfjkl', 'Name', ''));
addSixColumnPageTwo($pdf, array('Mobile', '8972348957', 'Mobile', '8278934578', 'Mobile', ''));
addSixColumnPageTwo($pdf, array('Income', '> 1000000 < 1500000', 'Income', '> 500000 < 1000000', 'Income', ''));
addSixColumnPageTwo($pdf, array('Occupa.', 'Ljaslkdfj', 'Occupa.', 'Jalksdjf', 'Occupa.', ''));
addSixColumnPageTwo($pdf, array('Email', 'aksjfdkl@gmail.com', 'Email', 'asdkjasdh@gmail.com', 'Email', ''));


// Last row full width (wrapping handled)
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(64, $h, 'Emergency Contact', 1);
$pdf->SetFont('Arial', 'B', 8);
$pdf->MultiCell(128, 10, '6789054321', 1);

$pdf->SetFont('Arial', '', 8);
$pdf->Cell(128, $h, 'Are you claiming under OBC/Govt SNQ as per annual income certificate', 1);
$pdf->SetFont('Arial', 'B', 8);
$pdf->MultiCell(64, 10, 'NO', 1);


$pdf->Ln(20);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(35, 8,'Permanent Address',0,0,'L');
$pdf->Cell(7, 8,':',0,0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(140, 8,'Asdlfkj ljasldjfkl lajsldkfj Bijapur Karnataka India',0,0);

$pdf->Ln(10);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(35, 8,'Present(Local) Address',0,0,'L');
$pdf->Cell(7, 8,':',0,0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(140, 8,'Asdlfkj ljasldjfkl lajsldkfj Bijapur Karnataka India',0,0);

$pdf->Ln(20);

$pdf->SetFont('Arial', '', 8);
$pdf->Cell(0, 4,'Page 2/5',0,1,'C');

$pdf->Ln(10);


$pdf->SetFont('Arial', '', 10);
$pdf->Cell(0, 2, 'Student Admission Form For Year 2025-2026', 0, 1, 'R');

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(0, 8, 'CET-AIDED-1BM25CS001-T', 0, 0.1, 'R');

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 6, 'B.M.S. College of Engineering', 0, 1, 'C');

$pdf->SetFont('Arial', '', 10);
$pdf->Cell(0, 6, 'An Autonomous Institution, Affiliated to VTU, Belagavi', 0, 1, 'C');
$pdf->Cell(0, 6, 'Bull Temple Rd, Basavanagudi, Bengaluru, Karnataka 560019', 0, 1, 'C');
$pdf->Cell(0, 6, 'Ph:+91-80-26622130-35  URL: www.bmsce.ac.in', 0, 1, 'C');
$pdf->Ln(2);
$pdf->Line(x1, y1, x2, y2);
$pdf->Line(10, $pdf->GetY(), 200, $pdf->GetY());

$pdf->Ln(1);
$pdf->Image('components/com_studentportal/assets/img/bmslogo.png', 10, 10, 20, 20);



$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(0, 5, 'Declaration by the student', 0, 1, 'C');

// Student declaration paragraph
$pdf->SetFont('Arial', '', 9);
$studentText = "All the particulars furnished above are true to the best of my knowledge and belief. I understand that association whether active or passive with unlawful organization is forbidden. I promise to abide by the rules and discipline of the college from time to time. I will not use mobile phone in the campus.";
$pdf->MultiCell(0, 5, $studentText);
$pdf->Ln(2);

// List of 11 points
$points = array(
    "I will not deliberately abstain from classes, Tests & Exams & other academic activities.",
    "I will not participate in any strikes or demonstration nor will induce others to do so.",
    "I will not indulge in any act, which will lower the prestige of the college.",
    "I will not conduct myself in any manner which will show disrespect to any staff member of the college/ institute or my classmates.",
    "I will not indulge in any act of ragging the students directly or indirectly, nor I will induce others to do this unhealthy act. I also abide by the Government rules and regulations in this regard from time to time.",
    "I will not participate in any unauthorised picnic, parties, tour or moving out of Bangalore without obtaining permission from the Principal / Authority of the College / Hostel Warden.",
    "I am fully aware that usage of mobile phones is prohibited in the campus and will not carry mobile phones while in the academic areas / examination halls (internal and terminal examination).",
    "I will utilise the Library, Laboratory & other facilities of the college with utmost care.",
    "I understand that I am liable to be punished if I violate the general code of discipline & I have no right to question any punishment imposed on me by the college authorities, the punishment being in the form of fine, suspension from the college etc.",
    "I am aware that my admission to 1st SEM Semester B.E-Computer Science & Engineering Degree course under government / management quota is purely provisional, subject to final approval of the Visvesvaraya Technological University, Belgaum and the Director of Technical Education in Karnataka, Bengaluru.",
    "I declare that the particulars given in the application form during admission are correct & I submit myself to the disciplinary jurisdiction of the authorities of the Visvesvaraya Technological University, Belgaum who may be vested with the authority to exercise discipline under the act. I will abide by the statutes, the ordinance and the rules that have been framed and to be framed from time to time by the university."
);

foreach ($points as $index => $point) {
    $pdf->MultiCell(180, 4, ($index + 1) . ". " . $point);
    $pdf->Ln(0.5);
}

$pdf->Ln(10);
$pdf->SetFont('Arial', 'B', 9);
$pdf->MultiCell(180, 5, "I agree to abide by the regulations/ordinance adopted by the university for the maintenance of the discipline among students in the College/Hostel. I will neither involve myself in any unlawful or provocative or communal or antisocial or political activities nor cause physical harm to any fellow students or teachers or officials. I also agree not to involve myself in the damage of any property of the College / University.");
$pdf->Ln(1);
$pdf->MultiCell(180, 5, "I give this undertaking with the full knowledge that any breach of this on my part is liable for the cancellation of my admission in the College and expulsion from Hostel.");

$pdf->Ln(10);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(0, 5, 'Declaration by the parent/guardian', 0, 1, 'L');

// Parent declaration paragraph
$pdf->SetFont('Arial', '', 9);
$parentText = "All the particulars furnished by ward are true to the best of my knowledge & belief. I understand that association of my ward whether active or passive with unlawful organization is totally forbidden. I will abide by the rules and regulations of the College and also I take responsibility that my ward will abide by the rules and discipline of the college. I also take responsibility that my ward will not indulge in any act of ragging the students directly or indirectly nor he will induce others to do this unhealthy act. My ward will also abide by the Govt rules and regulations in this regard from time to time.";
$pdf->MultiCell(0, 5, $parentText);
$pdf->Ln(2);
$pdf->MultiCell(0, 5, "I have read the above rules and code of conduct and discipline of the college and I will hold myself jointly responsible for any misconduct of my ward.");

$pdf->Ln(10);

// Signature lines
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(90, 6, "Signature of the Student with Date", 0, 0, 'C');
$pdf->Cell(90, 6, "Signature of the Parent with Date", 0, 1, 'C');

$pdf->Ln(1);
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(0, 4,'Page 3/5',0,1,'C');

$pdf->Ln(9);


$pdf->SetFont('Arial', '', 10);
$pdf->Cell(0, 2, 'Student Admission Form For Year 2025-2026', 0, 1, 'R');

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(0, 8, 'CET-AIDED-1BM25CS001-T', 0, 0.1, 'R');

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 6, 'B.M.S. College of Engineering', 0, 1, 'C');

$pdf->SetFont('Arial', '', 10);
$pdf->Cell(0, 6, 'An Autonomous Institution, Affiliated to VTU, Belagavi', 0, 1, 'C');
$pdf->Cell(0, 6, 'Bull Temple Rd, Basavanagudi, Bengaluru, Karnataka 560019', 0, 1, 'C');
$pdf->Cell(0, 6, 'Ph:+91-80-26622130-35  URL: www.bmsce.ac.in', 0, 1, 'C');
$pdf->Ln(2);
$pdf->Line(x1, y1, x2, y2);
$pdf->Line(10, $pdf->GetY(), 200, $pdf->GetY());

$pdf->Ln(1);
$pdf->Image('components/com_studentportal/assets/img/bmslogo.png', 10, 10, 20, 20);

$pdf->Ln(5);

$pdf->SetFont('Arial','BU',14);
$pdf->Cell(0,1,'MALPRACTICE DECLARATION FORM',0,1,'C');
$pdf->Ln(10);


$pdf->SetFont('Arial','',10);

$pdf->Write(7, 'I, ');
$pdf->SetFont('Arial','B',10);
$pdf->Write(7, 'TEST FOR FEE');
$pdf->SetFont('Arial','',10);
$pdf->Write(7, ' of ');
$pdf->SetFont('Arial','B',10);
$pdf->Write(7, 'Computer Science & Engineering');
$pdf->SetFont('Arial','',10);
$pdf->Write(7, ' Branch, currently studying in the ');
$pdf->SetFont('Arial','B',10);
$pdf->Write(7, 'Semester 1');
$pdf->SetFont('Arial','',10);
$pdf->Write(7, ' is making the following honest declaration.');
$pdf->Ln(10);

$paragraph1 = "I have thoroughly read the malpractice rules and regulations (published in the document here ";
$pdf->Write(7, $paragraph1);
$pdf->SetTextColor(0,0,255);
$pdf->SetFont('Arial','',10);
$pdf->Write(7, ':https://bmsce.ac.in/home/COE-Rules-and-Regulations');
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial','',10);
$pdf->Write(7, "). I am fully aware of the consequential penalties and punishments. I promise to strictly abide to the rules and regulations. I declare that I will not involve in / encourage any kind of malpractice, in any type of test or assessment or examination (CIE, SEE, etc) during my entire study period in college.");
$pdf->Ln(10);

$pdf->Write(7, "If I am identified to be involved in any kind of malpractice, by any of the college officials or authorities, I shall take complete responsibility for the same.");
$pdf->Ln(15);

$pdf->Cell(70,10,'Signature of the Student',0,0,'L');
$pdf->Cell(60,10,':        ___________________________',0,1,'L');

$pdf->Cell(70,10,'Name of the Parent',0,0,'L');
$pdf->Cell(10,10,':  ');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(60,10,'Asldkfjkl',0,1,'L');
$pdf->SetFont('Arial','',10);

// Signature of the parent
$pdf->Cell(70,10,'Signature of the Parent',0,0,'L');
$pdf->Cell(60,10,':        ___________________________',0,1,'L');

// Contact Numbers
$pdf->Cell(80,10,'Contact Numbers of the Parents/Guardian',0,0,'L');
$pdf->Cell(5,10,'(1)');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(0,10,'8972348957',0,1,'L');
$pdf->SetFont('Arial','',10);
$pdf->Cell(80);
$pdf->Cell(5,10,'(2)');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(0,10,'8278934578',0,1,'L');
$pdf->SetFont('Arial','',10);
$pdf->Ln(30);

// Signatures at bottom
$pdf->Cell(90,10,'Signature of the Proctor with Date',0,0,'L');
$pdf->Cell(90,10,'Signature of the HOD with seal',0,1,'R');

$pdf->Ln(40);
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(0, 4,'Page 4/5',0,1,'C');

$pdf->Ln(10);


$pdf->SetFont('Arial', '', 10);
$pdf->Cell(0, 2, 'Student Admission Form For Year 2025-2026', 0, 1, 'R');

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(0, 8, 'CET-AIDED-1BM25CS001-T', 0, 0.1, 'R');

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 6, 'B.M.S. College of Engineering', 0, 1, 'C');

$pdf->SetFont('Arial', '', 10);
$pdf->Cell(0, 6, 'An Autonomous Institution, Affiliated to VTU, Belagavi', 0, 1, 'C');
$pdf->Cell(0, 6, 'Bull Temple Rd, Basavanagudi, Bengaluru, Karnataka 560019', 0, 1, 'C');
$pdf->Cell(0, 6, 'Ph:+91-80-26622130-35  URL: www.bmsce.ac.in', 0, 1, 'C');
$pdf->Ln(2);
$pdf->Line(x1, y1, x2, y2);
$pdf->Line(10, $pdf->GetY(), 200, $pdf->GetY());

$pdf->Ln(1);
$pdf->Image('components/com_studentportal/assets/img/bmslogo.png', 10, 10, 20, 20);

$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(0, 10, 'UNDERTAKING BY THE STUDENT', 0, 1, 'C');
$pdf->Ln(5);


$pdf->SetFont('Arial', '', 10);


$pdf->MultiCell(0, 8,
    "1. Students who have paid Rs.750/- at KEA " .
    "and are eligible for " .
    "scholarships " .
    "are required to pay the tuition fee of \n Rs ______________________ after receiving the scholarship. " .
    "If the scholarship is " .
    "not sanctioned" . ", the fee must be paid " .
    "by the end of the 1st semester by the student from their own sources."
);


$pdf->Ln(2);

// Line 2
$pdf->SetFont('Arial', '', 10);
$pdf->Write(7, "2. An amount of ");
$pdf->SetFont('Arial', 'B', 10);
$pdf->Write(7, "Rs 250/-");
$pdf->SetFont('Arial', '', 10);
$pdf->Write(7, " collected at the time of admission as ");
$pdf->SetFont('Arial', 'B', 10);
$pdf->Write(7, "Caution Deposit and Library Deposit. ");
$pdf->SetFont('Arial', '', 10);
$pdf->Write(7, "This amount is ");
$pdf->SetFont('Arial', 'B', 10);
$pdf->Write(7, "non-refundable.\n\n");


$pdf->SetFont('Arial', '', 10);
$pdf->Write(7, "3. Students admitted under ");
$pdf->SetFont('Arial', 'B', 10);
$pdf->Write(7, "Aided-College Code E003 ");
$pdf->SetFont('Arial', '', 10);
$pdf->Write(7, "have paid ");
$pdf->SetFont('Arial', 'B', 10);
$pdf->Write(7,  "Rs 10,000 ");
$pdf->SetFont('Arial', '', 10);
$pdf->Write(7, "to KEA as Miscellaneous Fee. As per the college circular, students are required to pay balance Miscellaneous fees of ");
$pdf->SetFont('Arial', 'B', 10);
$pdf->Write(7,  "Rs 10,000 ");
$pdf->SetFont('Arial', '', 10);
$pdf->Write(7, "at the time of admission towards ");
$pdf->SetFont('Arial', 'B', 10);
$pdf->Write(7, "Insurance, sports, and other college-related Miscellaneous fees.\n\n");


$pdf->Ln(10);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(60, 10, 'Verifier Signature', 0, 0, 'C');
$pdf->Cell(60, 10, 'Approved by Accounts section', 0, 0, 'C');
$pdf->Cell(65, 10, 'Signature of the Student with date', 0, 1, 'C');

$pdf->Ln(2);
$pdf->Cell(0,2, '','T',1);

$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(0, 10, 'UNDERTAKING BY THE STUDENT', 0, 1, 'C');
$pdf->Ln(5);


$pdf->SetFont('Arial', '', 10);


$pdf->MultiCell(0, 8,
    "1. Students who have paid Rs.750/- at KEA " .
    "and are eligible for " .
    "scholarships " .
    "are required to pay the tuition fee of \n Rs ______________________ after receiving the scholarship. " .
    "If the scholarship is " .
    "not sanctioned" . ", the fee must be paid " .
    "by the end of the 1st semester by the student from their own sources."
);


$pdf->Ln(2);

// Line 2
$pdf->SetFont('Arial', '', 10);
$pdf->Write(7, "2. An amount of ");
$pdf->SetFont('Arial', 'B', 10);
$pdf->Write(7, "Rs 250/-");
$pdf->SetFont('Arial', '', 10);
$pdf->Write(7, " collected at the time of admission as ");
$pdf->SetFont('Arial', 'B', 10);
$pdf->Write(7, "Caution Deposit and Library Deposit. ");
$pdf->SetFont('Arial', '', 10);
$pdf->Write(7, "This amount is ");
$pdf->SetFont('Arial', 'B', 10);
$pdf->Write(7, "non-refundable.\n\n");


$pdf->SetFont('Arial', '', 10);
$pdf->Write(7, "3. Students admitted under ");
$pdf->SetFont('Arial', 'B', 10);
$pdf->Write(7, "Aided-College Code E003 ");
$pdf->SetFont('Arial', '', 10);
$pdf->Write(7, "have paid ");
$pdf->SetFont('Arial', 'B', 10);
$pdf->Write(7,  "Rs 10,000 ");
$pdf->SetFont('Arial', '', 10);
$pdf->Write(7, "to KEA as Miscellaneous Fee. As per the college circular, students are required to pay balance Miscellaneous fees of ");
$pdf->SetFont('Arial', 'B', 10);
$pdf->Write(7,  "Rs 10,000 ");
$pdf->SetFont('Arial', '', 10);
$pdf->Write(7, "at the time of admission towards ");
$pdf->SetFont('Arial', 'B', 10);
$pdf->Write(7, "Insurance, sports, and other college-related Miscellaneous fees.\n\n");


$pdf->Ln(10);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(60, 10, 'Verifier Signature', 0, 0, 'C');
$pdf->Cell(60, 10, 'Approved by Accounts section', 0, 0, 'C');
$pdf->Cell(65, 10, 'Signature of the Student with date', 0, 1, 'C');


$pdf->Ln(1);

$pdf->SetFont('Arial', '', 8);
$pdf->Cell(0, 4,'Page 5/5',0,1,'C');

ob_end_clean(); // Clean all output
$pdf->Output();
exit;