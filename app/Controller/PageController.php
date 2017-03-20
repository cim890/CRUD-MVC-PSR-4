<?php

namespace Mvc\Controller;

use \Mvc\Model\ContactModel;

class PageController extends \Mvc\Core\App
{
	public function indexAction()
	{
		$data = array (
			'nama_panggil' => 'Rafi',
			'alamat' => 'Bandung',
			);
		echo $this->loadView('home', $data);
	}

	public function aboutAction()
	{
		$isi_halaman = $this->loadView('about');

		echo $this->loadView('layout', array(
			'content' => $isi_halaman
		));
	}

	public function contactAction()
	{
		$contact = ContactModel::all();
	
		$isi_halaman = $this->loadView('contact', array(
			'data_contact' => $contact,
		));

		echo $this->loadView('layout', array(
			'content' => $isi_halaman
		));
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
