<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pages extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Home',
			'active' => 'home'
		];
		return view('pages/home', $data);
	}
	public function kontak()
	{
		$data = [
			'title' => 'Kontak',
			'active' => 'kontak',
			'alamat' => [
				[
					'alamat' => 'pabelan',
					'kota' => 'Surakarta',
				]
			]
		];
		return view('pages/kontak', $data);
	}
	public function profil()
	{
		$data = [
			'title' => 'Profil',
			'active' => 'profil'
		];
		return view('pages/profil', $data);
	}
	public function about()
	{
		$data = [
			'title' => 'Galeri',
			'active' => 'galeri'
		];
		return view('pages/galeri', $data);
	}
}
