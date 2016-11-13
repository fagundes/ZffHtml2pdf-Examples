<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zff\Html2Pdf\View\Model\Html2PdfModel;

class ExampleController extends AbstractActionController
{
    public function example00Action()
    {

        /**
         * EXAMPLE 00
         */

        $html2pdfModel = new Html2PdfModel();

//        $html2pdf->setDefaultFont('Arial');

        $html2pdfModel->setHtml2PdfOptions([
            'orientation' => 'P',
            'format'      => 'A4',
            'lang'        => 'fr',
            'margins'     => [5, 5, 5, 5]
        ]);
        $html2pdfModel->setFilename('exemple00.pdf');

        return $html2pdfModel;
    }
}