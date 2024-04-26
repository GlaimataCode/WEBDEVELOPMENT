<?php
require_once('pdf/tcpdf_include.php');
include('../koneksaun.php');
//bolu koneksaun
$kon = koneksaun_1();


$id = $_GET['id'];
//bolu dadus estudante
$t_estudante = pg_query($kon, "SELECT * FROM t_estudante WHERE id_estudante ='$id' ");
$dados = pg_fetch_all($t_estudante);

class PDF extends TCPDF{
        private $header_cont = false;
        public function Header(){
                if(!$this->header_cont){
                        $this->setY(5);
                        $this->setTextColor(0,0,0);
                        $this->setFont('times', 'B', 7);
                        $this->Cell(0, 20, 'Kartaun Estudante ETI-DILI', 0, false, 'C', 0, '', 0, false, 'M', 'M');

                        $img = 'pdf/images/logo_ls.jpg';
                        $this->Image($img, 2, 4, 8);
                        //X, Y, W

                        $img = 'pdf/images/logo_ls.jpg';
                        $this->Image($img, 45, 4, 8);

                        $this->header_cont = true;
                }
        }
}



// Create a new TCPDF object
$pdf = new PDF('P', 'mm', array(54, 86), true, 'UTF-8', false);

// Set document information
$pdf->SetCreator('ETI-DILI');
$pdf->SetAuthor('ETI-DILI');
$pdf->SetTitle('Sistema Informasaun ETI-DILI');
$pdf->SetSubject('Lista Dadus Estudante');

// Set default font
$pdf->SetFont('times', '', 7);

// Add a page
$pdf->AddPage();

$pdf->SetY($pdf->GetY() + 1);
$pdf->setMargins(1, 3 ,1);
$hr = '<hr>';
$pdf->writeHTML($hr, true, false, true, false, '');

// Set some content
$pdf->SetTextColor(0,0,255);

foreach($dados as $k => $v){
        $html = '
        <table>
                <tr><td colspan="2" align="center"><img src="pdf/images/2.JPG" width="40px"></td></tr>
                <tr><td width="40">EMIS</td><td width="auto">: '.$v['emis'].'</td></tr>
                <tr><td width="40">Naran</td><td width="auto">: '.$v['naran_estudante'].'</td></tr>
                <tr><td width="40">Sexu</td><td width="auto">: '.$v['sexo'].'</td></tr>
                <tr><td width="40">Data Moris</td><td width="auto">: '.$v['data_moris'].'</td></tr>
        </table>
        ';
}
$pdf->writeHTML($html, true, false, true, false, '');

//================================================================
$pdf->SetFont('times', '', 6);
$pdf->SetTextColor(234, 50, 0);
$html= '<i align="center">Verifika Kartaun iha Ne!</i>';
$pdf->writeHTML($html, true, false, true, false, '');
//=====================================================================
$style = array(
        'border' =>0,
        'vpadding' => 'auto',
        'hpadding' => 'auto',
        'fcolor' => array(0,0,0),
        'bcolor' => array(255, 0, 255),
        'module_width' => 1,
        'module_height'=> 1
);

//====================================================================
$url = "192.168.213.62/webdevelopment/day14/relatoriu/kartaun.php?id=$id";
$pdf->write2DBarcode($url, 'QRCODE,H', 20, 44, 15, 15, $style, 'N');

//=======================================================================
$loron = date('d-m-y');
// Output the PDF to the browser or save it to a file
$pdf->Output('Kartaun.pdf', 'I'); // Use 'D' to force download, 'F' to save to a file, 'I' to display in the browser

// Exit the script
exit;
?>