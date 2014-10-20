<?php

class ViewRenderer
{
	protected $basePath;
	
	protected $extension = '.view.php';
	
	protected $model;
	
	public function __construct()
	{
		$this->basePath = __DIR__ . '/../views/scripts';
	}
	
	public function setExtension($extension)
	{
		$this->extension = $extension;
	}
	
	public function getExtension()
	{
		return $this->extension;
	}
	
	public function setBasePath($basePath)
	{
		$this->basePath = $basePath;
	}
	
	public function getBasePath()
	{
		return $this->basePath;
	}
	
	public function setModel(ViewModel $model)
	{
		$this->model = $model;
	}
	
	public function getModel()
	{
		return $this->model;
	}
	
	public function render($viewScript)
	{
		$data = $this->model->getData();
		extract($data);
		
		ob_start();
		include $this->basePath . '/' . $viewScript . $this->extension;
		$content = ob_get_contents();
		ob_end_clean();
		
		$output = '';
		
		if (!empty($this->model->getLayout())) {
			
			ob_start();
			
			include $this->basePath . '/' . $this->model->getLayout() . $this->extension;
			
			$output = ob_get_contents();
			
			ob_end_clean();
		} else {
			$output = $content;
		}
		
		return $output;
	}
}
