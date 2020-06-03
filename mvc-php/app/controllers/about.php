<?php 

class about extends Controller {

	public function index ($nama = "Ahmad Susanto", $pekerjaan = "Programmer", $umur = 31)
	{
		$data['nama']		=	$nama;
		$data['pekerjaan']	=	$pekerjaan;
		$data['umur']		=	$umur;
		

		$data['title'] = 'About';
		$this->view('templates/header', $data);
		$this->view('about/index', $data);
		$this->view('templates/footer');
	}


	public function page ()
	{
		$data['title'] = 'Page';
		$this->view('templates/header', $data);
		$this->view('about/page',$data);
		$this->view('templates/footer');
	}

}

?>