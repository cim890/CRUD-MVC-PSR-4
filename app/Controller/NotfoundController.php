<?php

namespace Mvc\Controller;

class NotfoundController extends \Mvc\Core\App
{
	public function indexAction()
	{
		$isi_halaman = $this->loadView('notfound');
		echo $this->loadView('layout', array(
			'content' => $isi_halaman
		));
	}
}
