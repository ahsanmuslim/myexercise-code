<?php 

class mahasiswa extends Controller {

	public function index ()
	{
		$data['title'] = 'Mahasiswa';
		$data['mhs'] = $this->model('mhs_model')->getMhs();	
		$this->view('templates/header', $data); 
		$this->view('mahasiswa/index', $data);
		$this->view('templates/footer');
	}

	public function detail ($nim)
	{
		$data['title'] = 'Detail Mahasiswa';
		$data['mhs'] = $this->model('mhs_model')->getMhsbyNim($nim);	
		$this->view('templates/header', $data); 
		$this->view('mahasiswa/detail', $data);
		$this->view('templates/footer');
	}


	public function tambah () 
	{
		if( $this->model('mhs_model')->tambahDataMhs($_POST) > 0 ){
			Flasher::setFlash('berhasil', 'ditambahkan', 'success');
			header ('Location: ' . BASEURL . '/mahasiswa' );
			exit;
		} else {
			Flasher::setFlash('gagal', 'ditambahkan', 'danger');
			header ('Location: ' . BASEURL . '/mahasiswa' );
			exit;
		}
	}


	public function hapus ($nim) 
	{
		if( $this->model('mhs_model')->hapusDataMhs($nim) > 0 ){
			Flasher::setFlash('berhasil', 'dihapus', 'success');
			header ('Location: ' . BASEURL . '/mahasiswa' );
			exit;
		} else {
			Flasher::setFlash('gagal', 'dihapus', 'danger');
			header ('Location: ' . BASEURL . '/mahasiswa' );
			exit;
		}
	}


	public function getEdit ()
	{
		echo json_encode($this->model('mhs_model')->getMhsbyNim($_POST['nim']));
	}

	public function update () 
	{
		if( $this->model('mhs_model')->updateDataMhs($_POST) > 0 ){
			Flasher::setFlash('berhasil', 'diubah', 'success');
			header ('Location: ' . BASEURL . '/mahasiswa' );
			exit;
		} else {
			Flasher::setFlash('gagal', 'diubah', 'danger');
			header ('Location: ' . BASEURL . '/mahasiswa' );
			exit;
		}
	}

	public function cari ()
	{
		$data['title'] = 'Mahasiswa';
		$data['mhs'] = $this->model('mhs_model')->cariDataMhs();	
		$this->view('templates/header', $data); 
		$this->view('mahasiswa/index', $data);
		$this->view('templates/footer');
	}



}


?>