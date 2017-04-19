<?php namespace VnsModules\Demo\Controllers;

class DemoController extends \Http\Controllers\FrontEndController
{
    public function index() {
        return view('VnsModules\Demo::index');
    }
}