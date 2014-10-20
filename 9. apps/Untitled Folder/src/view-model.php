<?php

class ViewModel
{
	protected $data = array();
	
	protected $layout;
	
	public function __construct(array $data, $layout = null)
	{
		$this->data   = $data;
		$this->layout = $layout;
	}
	
	public function getData()
	{
		return $this->data;
	}
	
	public function setData(array $data)
	{
		$this->data = $data;
	}
	
	public function setLayout($layout)
	{
		$this->layout = $layout;
	}
	
	public function getLayout()
	{
		return $this->layout;
	}
}
