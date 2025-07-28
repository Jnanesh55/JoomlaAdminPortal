<?php
defined('_JEXEC') or die('Restricted access');

require_once(JPATH_COMPONENT . DS . 'FPDF' . DS . 'fpdf.php');

$id = JRequest::getInt('id');
$db = JFactory::getDBO();
$db->setQuery("SELECT * FROM #__students WHERE id = $id");
$row = $db->loadAssoc();

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetLineWidth(1);
$pdf->Rect(8, 8, 194, 280);
$pdf->SetTextColor(128, 0, 128);
$pdf->SetFont("Arial", "B", 16);
$pdf->Cell(0, 10, "STUDENT PROFILE", 0, 1, "C");
$pdf->Ln(10);
$pdf->Image("components/com_studentportal/assets/img/profile.png", 165, 25, 30, 30);

if ($row) {
    $pdf->SetTextColor(30, 10, 200);
    $pdf->SetFont("Arial", "B", 14);
    $pdf->Cell(0, 10, "Personal Info", 0, 1);

    $pdf->SetFont("Arial", "", 12);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->Cell(50, 10, "Name", 0);
    $pdf->Cell(5, 10, ":", 0);
    $pdf->Cell(0, 10, $row['firstname'] . ' ' . $row['lastname'], 0, 1);
    $pdf->Cell(50, 10, "Email", 0);
    $pdf->Cell(5, 10, ":", 0);
    $pdf->Cell(0, 10, $row['email'], 0, 1);
    $pdf->Cell(50, 10, "Mobile", 0);
    $pdf->Cell(5, 10, ":", 0);
    $pdf->Cell(0, 10, $row['mobile'], 0, 1);
    $pdf->Cell(50, 10, "DOB", 0);
    $pdf->Cell(5, 10, ":", 0);
    $pdf->Cell(0, 10, $row['dob'], 0, 1);
    $pdf->Cell(50, 10, "Gender", 0);
    $pdf->Cell(5, 10, ":", 0);
    $pdf->Cell(0, 10, $row['gender'], 0, 1);
    $pdf->Cell(50, 10, "Address", 0);
    $pdf->Cell(5, 10, ":", 0);
    $pdf->MultiCell(0, 10, $row['address']);
    $pdf->Ln(5);

    $pdf->SetFont("Arial", "B", 14);
    $pdf->SetTextColor(30, 10, 200);
    $pdf->Cell(0, 10, "Educational Info", 0, 1);
    $pdf->SetFont("Arial", "", 12);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->Cell(50, 10, "College", 0);
    $pdf->Cell(5, 10, ":", 0);
    $pdf->Cell(0, 10, $row['collagename'], 0, 1);
    $pdf->Cell(50, 10, "Branch", 0);
    $pdf->Cell(5, 10, ":", 0);
    $pdf->Cell(0, 10, $row['branch'], 0, 1);
    $pdf->Cell(50, 10, "Year", 0);
    $pdf->Cell(5, 10, ":", 0);
    $pdf->Cell(0, 10, $row['year'], 0, 1);
    $pdf->Ln(5);

    $pdf->SetFont("Arial", "B", 14);
    $pdf->SetTextColor(30, 10, 200);
    $pdf->Cell(0, 10, "Technical Info", 0, 1);
    $pdf->SetFont("Arial", "", 12);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->SetDrawColor(100, 100, 100);
    $pdf->SetFillColor(173, 216, 230);

    $pdf->Cell(50, 10, "Skills", 0);
    $pdf->Cell(5, 10, ":", 0);
    $pdf->Cell(80, 10, $row['skills'], 1, 1, "C", true);
    $pdf->Ln(5);
    $pdf->Cell(50, 10, "Interests", 0);
    $pdf->Cell(5, 10, ":", 0);
    $pdf->Cell(80, 10, $row['interests'], 1, 1, "C", true);
}

$pdf->Output('D', 'student_profile_' . $id . '.pdf');
exit;
?>