<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once 'application/classes/ViewController.php';

class HomeController extends CI_Controller
{
	public function index()
	{
		$View = new ViewController();
		$assets = '	
		<link rel="stylesheet" href="assets/css/home.css">
		<link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
		';
		$View->render('homeview', 'layout/layoutview', 'Teste RENDER', $assets);
	}
}
