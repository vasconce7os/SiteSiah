<?php
class AdministracaoController extends AdministracaoAppController
{
	public function index()
	{
		
	}
	public function session()
	{
		pr($this-> Session-> read());
		//pr($this-> logged-> Admin-> email);
		//pr($this-> Session-> read('Admin'));
		exit;
	}
}