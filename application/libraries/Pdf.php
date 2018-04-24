<?
use setasign\Fpdi;
require_once("fpdi/src/autoload.php");
require_once('tcpdf/tcpdf.php');

class Pdf extends Fpdi\TcpdfFpdi
{
    /**
     * "Remembers" the template id of the imported page
     */
    protected $tplId;
    public $pdfpath;
    /**
     * Draw an imported PDF logo on every page
     */
     function Header()
    {
        if (is_null($this->tplId)) {
            $this->setSourceFile($this->pdfpath);
            $this->tplId = $this->importPage(1);
        }
        $size = $this->useImportedPage($this->tplId,0,0);

        /*$this->SetFont('freesans', 'B', 20);
        $this->SetTextColor(0);
        $this->SetXY(PDF_MARGIN_LEFT, 5);*/
        //$this->Cell(0, $size['height'], 'TCPDF and FPDI');
    }

    /*
    function Footer()
    {
        // emtpy method body
    }
    */
}
