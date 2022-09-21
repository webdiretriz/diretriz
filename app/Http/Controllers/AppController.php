<?php

namespace App\Http\Controllers;

use App\Repository\DownlodsRepository;
use Illuminate\Http\Request;

class AppController extends Controller
{
    /** @var DownlodsRepository */
    private $download;

    /**
     * Injeção de dependência
     * @param DownlodsRepository $download
     */
    public function __construct(DownlodsRepository $download)
    {
        $this->download = $download;
    }

    public function home()
    {
        return view('home');
    }

    public function imaq()
    {
        return view('pages.imaq');
    }

    public function legislador()
    {
        return view('pages.legislador');
    }

    public function terra()
    {
        return view('pages.terra');
    }

    public function gestaoRh()
    {
        return view('pages.rh');
    }

    public function seguranca()
    {
        return view('pages.seguranca');
    }

    public function acessoRemoto()
    {
        return view('pages.remoto');
    }

    public function downloads()
    {
        return view('pages.downloads', [
            'files' => $this->download->findAll('ftp', url('ftp'))
        ]);
    }
}
