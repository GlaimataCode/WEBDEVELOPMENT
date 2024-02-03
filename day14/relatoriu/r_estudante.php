<?php
require_once('pdf/tcpdf_include.php');
include('../koneksaun.php');
//bolu koneksaun
$kon = koneksaun_1();

//bolu dadus estudante
$t_estudante = pg_query($kon, 'SELECT * FROM t_estudante ORDER BY naran_estudante');
$dados = pg_fetch_all($t_estudante);


// Create a new TCPDF object
$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);

// Set document information
$pdf->SetCreator('ETI-DILI');
$pdf->SetAuthor('ETI-DILI');
$pdf->SetTitle('Sistema Informasaun ETI-DILI');
$pdf->SetSubject('Lista Dadus Estudante');

// Set default font
$pdf->SetFont('helvetica', '', 12);

// Add a page
$pdf->AddPage();

// Set some content
$html = '<h1 style="text-align: center">Lista Dadus Estudante</h1> ';
$html .= '<table border="1" style="padding: 6px">
          <tr style="background-color: #4d94ff; color:#fff">
                <th width="30" align="center">No</th>
                <th width="160">Naran</th>
                <th width="60">Sexu</th>
                <th width="80">Emis</th>
                <th width="80">Data Moris</th>
                <th width="75" >Telemovel</th>
        </tr>';
$no =1;
foreach ($dados as $key => $value){
    $html .= '<tr>
                <td align="center">'. $no++ . '</td>
                <td>'. $value['naran_estudante'] . '</td>
                <td>'. $value['sexo'] . '</td>
                <td>'. $value['emis'] . '</td>
                <td>'. $value['data_moris'] . '</td>
                <td>'. $value['nu_telefone'] . '</td>
        </tr>';
}
$html .= '</table>';

$pdf->writeHTML($html, true, false, true, false, '');

// Output the PDF to the browser or save it to a file
$pdf->Output('example.pdf', 'I'); // Use 'D' to force download, 'F' to save to a file, 'I' to display in the browser

// Exit the script
exit;
