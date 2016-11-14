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
        $html2pdfModel->setFilename('example00.pdf');
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
        $html2pdfModel->setFilename('example01.pdf');

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
        $html2pdfModel->setFilename('example02.pdf');
//        $html2pdf->pdf->SetDisplayMode('fullpage');

        return $html2pdfModel;
    }

    public function example03Action()
    {
        $html2pdfModel = new Html2PdfModel();
        $html2pdfModel->setHtml2PdfOptions([
            'orientation' => 'P',
            'format'      => 'A4',
            'lang'        => 'fr',
            'unicode'     => true,
            'encoding'    => 'UTF-8',
            'margins'     => 3
        ]);
        $html2pdfModel->setFilename('example03.pdf');
//        $html2pdf->pdf->SetDisplayMode('fullpage');

        return $html2pdfModel;
    }

    public function example04Action()
    {
        $html2pdfModel = new Html2PdfModel();
        $html2pdfModel->setHtml2PdfOptions([
            'orientation' => 'P',
            'format'      => 'A4',
            'lang'        => 'fr',
            'margins'     => [5, 5, 5, 5]
        ]);
        $html2pdfModel->setFilename('example04.pdf');
//        $html2pdf->pdf->SetDisplayMode('fullpage');

        return $html2pdfModel;
    }

    public function example05Action()
    {
        $html2pdfModel = $this->example04Action();

        $html2pdfModel->setFilename('example05.pdf');

        return $html2pdfModel;
    }

    public function example06Action()
    {
        $html2pdfModel = $this->example04Action();

        $html2pdfModel->setFilename('example06.pdf');

        return $html2pdfModel;
    }

    public function example07Action()
    {
        $html2pdfModel = $this->example04Action();

        $html2pdfModel->setFilename('example07.pdf');

        return $html2pdfModel;
    }

    public function example08Action()
    {
        $html2pdfModel = new Html2PdfModel();
        $html2pdfModel->setHtml2PdfOptions([
            'orientation' => 'P',
            'format'      => 'A4',
            'lang'        => 'fr',
        ]);

        $html2pdfModel->setFilename('example08.pdf');

        return $html2pdfModel;
    }

    public function example09Action()
    {
        $request = $this->getRequest();

        $httpHost = $request->getServer('HTTP_HOST');
        $url      = 'http://' . $httpHost . $this->url()->fromRoute('example', ['action' => 'example09-png'], ['query' => ['px' => 5, 'py' => 20]]);

        if ($request->getQuery('make_pdf', false) !== false) {
            $make_pdf = $request->getQuery('make_pdf');
            $nom      = $request->getQuery('nom');

            $nom = substr(preg_replace('/[^a-zA-Z0-9]/isU', '', $nom), 0, 26);

            $html2pdfModel = new Html2PdfModel([
                'generate' => true,
                'make_pdf' => $make_pdf,
                'nom'      => $nom,
                'url'      => $url,
            ]);
            $html2pdfModel->setHtml2PdfOptions([
                'orientation' => 'P',
                'format'      => 'A4',
                'lang'        => 'fr',
                'margins'     => [5, 5, 5, 5],
            ]);

            $html2pdfModel->setFilename('example09.pdf');

            return $html2pdfModel;
        }

        return [
            'url'      => $url,
            'generate' => false,
        ];
    }

    public function example09PngAction()
    {
        $this->layout('layout/png');
        return [
            'px' => preg_replace('/[^0-9]/isU', '', $this->getRequest()->getQuery('px', 0)),
            'py' => preg_replace('/[^0-9]/isU', '', $this->getRequest()->getQuery('py', 0)),
        ];
    }

    public function example10Action()
    {
        $html2pdfModel = $this->example04Action();

        $html2pdfModel->setFilename('example10.pdf');

        return $html2pdfModel;
    }
}