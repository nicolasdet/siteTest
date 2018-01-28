<?php

class MY_Controller extends CI_Controller
{
	public $theme;
	public $jsCode = [];
	protected $fake_flashs = [];
	protected $connexion_needed = false;
	protected $connexion_url = 'connexion';
	protected $title = '';

	protected $tracking_active = false;
	protected $tracking_page = '';
	protected $tracking_params = [];

	

	public function __construct($layout = 'main')
	{
		parent::__construct();

		$this->load->model('produit');
		$this->load->model('User', 'user');
		$this->load->model('Commandes', 'commandes');

		date_default_timezone_set('Europe/Paris');

		//$this->forceHttps();
		$this->initTheme($layout);

		if (ENVIRONMENT != 'production' && $this->input->get('debug') == 1)
			$this->output->enable_profiler(true);

		$this->loadAssets();
		
	}



	public function initTheme($layout = 'main') {

		$this->theme = new Stencil();
		$this->theme->layout($layout);
	}

	public function loadAssets()
	{

		$this->theme->css('main');
		$this->theme->js('jquery-3.2.0.min');
		$this->theme->js('famille');

	}

	public function render($viewFile)
	{
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate");
		$this->output->set_header("Cache-Control: post-check=0, pre-check=0");
		$this->output->set_header("Pragma: no-cache");


		$this->theme->title($this->title);

		$this->_includeSlice();
		$this->theme->paint($viewFile);
	}

	protected function _includeSlice()
	{
		$this->theme->slice(array('top', 'header', 'bottom', 'footer'));
	}


	protected function _addJsCode($code)
	{
		$this->jsCode[] = $code;
	}


	/**
	 * Redirige toutes les requêtes vers leur équivalence avec URL en HTTPS, si on est sur l'environnement qui va bien
	protected function forceHttps() {
		if (!is_https() && !is_cli() && FORCE_HTTPS) {

			$url = "https://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
			redirect($url, 'auto', 301);
			exit;
		}
	}
	 */


}
