<?php
namespace App\Controller;

class FormsController extends AppController
{

    public function index()
    {
        $this->objectUtils->useTables($this, ['Forms']);
        $forms = $this->Forms->getForms();
        debug($forms);
        exit;
    }
}