<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zff\Html2Pdf\View\Model\Html2PdfModel;

class ExampleController extends AbstractActionController
{
    public function example00Action()
    {
        $html2pdfModel = new Html2PdfModel();
        $html2pdfModel->setHtml2PdfOptions([
            'orientation' => 'P',
            'format'      => 'A4',
            'lang'        => 'fr',
            'margins'     => [5, 5, 5, 5]
        ]);
        $html2pdfModel->setFilename('exemple00.pdf');
//        $html2pdf->setDefaultFont('Arial');

        return $html2pdfModel;
    }

    public function example01Action()
    {
        $html2pdfModel = new Html2PdfModel();
        $html2pdfModel->setHtml2PdfOptions([
            'orientation' => 'P',
            'format'      => 'A4',
            'lang'        => 'fr',
            'margins'     => [5, 5, 5, 5]
        ]);
        $html2pdfModel->setFilename('exemple01.pdf');

        return $html2pdfModel;
    }

    public function example02Action()
    {
        $html2pdfModel = new Html2PdfModel();
        $html2pdfModel->setHtml2PdfOptions([
            'orientation' => 'P',
            'format'      => 'A4',
            'lang'        => 'fr',
            'unicode'     => true,
            'encoding'    => 'UTF-8',
            'margins'     => [15, 5, 15, 5]
        ]);
        $html2pdfModel->setFilename('exemple02.pdf');
//        $html2pdf->pdf->SetDisplayMode('fullpage');

        return $html2pdfModel;
    }
}