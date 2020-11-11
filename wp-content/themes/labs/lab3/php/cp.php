<?php
    require_once get_template_directory() . '/lab3/vendor/autoload.php';

    function createPdf($name){
        $pdf = new FPDF('P', 'mm', 'A4');
        $pdf->SetFont('Arial', '', 24);
        $pdf->AddPage();
        $img = get_template_directory() . "/lab3/images/" . $name;

        $info = getimagesize($img);
        $width  = $info[0];
        $height = $info[1];
        $type   = $info[2];

        switch ($type){
            case 1:
                $type = "gif";
                break;
            case 2:
                $type = "jpg";
                break;
            case 3:
                $type = "png";
                break;
        }

        $filename = mb_substr($name, 0, strpos($name, "."));
        $pdfPuth =  get_template_directory() ."/lab3/pdf/" . $filename . ".pdf";
        $pdf->Image($img, 5, 5, $width / 8, $height / 8, $type);
        $pdf->Output($pdfPuth, "F");
    }
