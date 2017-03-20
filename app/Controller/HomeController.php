<?php

namespace Mvc\Controller;

use \Mvc\Model\ArtikelModel;

class HomeController extends \Mvc\Core\App
{
	public function indexAction()
	{
		$artikel = ArtikelModel::all();
		$add_artikel = ArtikelModel::add();
		$edit_artikel = ArtikelModel::edit();
		$delete_artikel = ArtikelModel::delete();

		$isi_halaman = $this->loadView('home', array(
			'content' => $this->loadView('artikel', array(
			'data_artikel' => $artikel,
			'add_artikel' => $add_artikel,
			'edit_artikel' => $edit_artikel,
			'delete_artikel' => $delete_artikel,
			'no' => '1',
			'no_ket' => '#Artikel',
		))));

		echo $this->loadView('layout', array(
			'content' => $isi_halaman
		));
	}

	public function aboutAction()
	{
		echo 'ini halaman about us';
	}

	public function testAction()
	{
		echo 'ini halaman test';
	}

	public function alternatifAction()
	{
		echo $this->loadView('layout', array(
			'content' => $this->loadView('home', array(
				'nama_panggil' => 'Rafi',
				'alamat' => 'Bandung',
		))));
	}
}
