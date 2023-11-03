<?php
class ViewController extends CI_Controller
{
	public function render(string $view, string $layout, string $title)
	{
		$data = [
			'title' => $title,
			'content' => $this->load->view($view, '', TRUE)
		];
		$this->load->view($layout, $data);
	}
}
