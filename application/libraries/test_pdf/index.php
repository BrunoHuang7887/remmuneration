<?php
use setasign\Fpdi;

require_once('tcpdf/tcpdf.php');
require_once('fpdi/src/autoload.php');

class Pdf extends Fpdi\TcpdfFpdi
{
    /**
     * "Remembers" the template id of the imported page
     */
    protected $tplId;

    /**
     * Draw an imported PDF logo on every page
     */
    function Header()
    {
        if (is_null($this->tplId)) {
            $this->setSourceFile('recipt.pdf');
            $this->tplId = $this->importPage(1);
        }
        $size = $this->useImportedPage($this->tplId,0,0);

        $this->SetFont('freesans', 'B', 20);
        $this->SetTextColor(0);
        $this->SetXY(PDF_MARGIN_LEFT, 5);
        //$this->Cell(0, $size['height'], 'TCPDF and FPDI');
    }

    function Footer()
    {
        // emtpy method body
    }
}
ini_set('memory_limit', '256M');

// initiate PDF
$pdf = new Pdf();
$pdf->SetMargins(PDF_MARGIN_LEFT,40, PDF_MARGIN_RIGHT);
$pdf->SetAutoPageBreak(true, 40);

$pdf->AddPage();

$font_path = 'ipag00303/SourceHanSansTC-Regular.ttf';
	if (file_exists($font_path)) {
		$font_name = $pdf->addTTFfont($font_path, 'TrueTypeUnicode');
		$pdf->SetFont($font_name, '', 10);
	}

// add a page


// get external file content
//$utf8text = file_get_contents('tcpdf/examples/data/utf8test.txt', true);

//$pdf->SetFont('freeserif', '', 50);
// now write some text above the imported page
$pdf->Write(5, "你好");

$pdf->Output();
