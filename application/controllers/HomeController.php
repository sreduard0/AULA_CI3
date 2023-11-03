<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once 'application/classes/ViewController.php';

class HomeController extends CI_Controller
{
	public function index()
	{
		$View = new ViewController();
		$View->render('homeview', 'layout/layoutview', 'Teste RENDER');
	}
}
