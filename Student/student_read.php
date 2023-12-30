<?php
    $pdffile = './uploads/TimHieuVeScratch.pdf';
    $pdffilename = 'TimHieuVeScratch.pdf';

    header('Content-type:application/pdf');
    header('Content-
    Desposition:inline;filename="'.$pdffilename.'"');
    header("Content-Transfer-Encoding:binary");
    header('Accept-Range:bytes');
    @readfile($pdffile);
?>