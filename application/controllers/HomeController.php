<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeController extends CI_Controller
{
	public function index()
	{
		$data = [
			'title' => 'Home',
			'content' => $this->load->view('homeview', '', TRUE)
		];
		$this->load->view('layout/layoutview', $data);
	}
}
