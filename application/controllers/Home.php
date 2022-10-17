<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('home');
	}
	public function view1()
	{
		$this->load->view('view1');
		$this->load->view('home');
	}
	public function view2()
	{
		$this->load->view('view2');
		$this->load->view('home');
	}
	public function view3()
	{
		$this->load->view('view3');
		$this->load->view('home');
	}
	public function view4()
	{
		$this->load->view('view4');
		$this->load->view('home');
	}
	public function view5()
	{
		$this->load->view('view5');
		$this->load->view('home');
	}
	public function view6()
	{
		$this->load->view('view6');
		$this->load->view('home');
	}
	public function view7()
	{
		$this->load->view('view7');
		$this->load->view('home');
	}
	public function view8()
	{
		$this->load->view('view8');
		$this->load->view('home');
	}
	public function view9()
	{
		$this->load->view('view9');
		$this->load->view('home');
	}
	public function view10()
	{
		$this->load->view('view10');
		$this->load->view('home');
	}
}
