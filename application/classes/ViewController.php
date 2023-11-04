<?php
class ViewController extends CI_Controller
{
	public function render(string $view, string $layout, string $title, string $assets = null)
	{
		$data = [
			'title' => $title,
			'assets' => $assets ? $assets : '',
			'content' => $this->load->view($view, '', TRUE)
		];
		$this->load->view($layout, $data);
	}
}
