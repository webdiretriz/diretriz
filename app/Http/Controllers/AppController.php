<?php

namespace App\Http\Controllers;

use App\Repository\DownlodsRepository;
use App\Repository\NoticiasRepository;
use Illuminate\Http\Request;

class AppController extends Controller
{
    /** @var DownlodsRepository */
    private $download;

    /** @var NoticiasRepository */
    private $noticias;

    /**
     * Injeção de dependência
     * @param DownlodsRepository $download
     */
    public function __construct(DownlodsRepository $download, NoticiasRepository $noticias)
    {
        $this->download = $download;
        $this->noticias = $noticias;
    }

    //Página home
    public function home()
    {
        return view('home', [
            'boletim' => $this->noticias->findAllBoletim()->toArray(),
            'news' => $this->noticias->findAllNews(3)->toArray()
        ]);
    }

    //Página iMaq
    public function imaq()
    {
        return view('pages.imaq');
    }

    //Página Legislador
    public function legislador()
    {
        return view('pages.legislador');
    }

    //Página Terra
    public function terra()
    {
        return view('pages.terra');
    }

    //Página Gestão RH
    public function gestaoRh()
    {
        return view('pages.rh');
    }

    //Página Gestão Segurança
    public function seguranca()
    {
        return view('pages.seguranca');
    }

    //Página Acesso Remoto
    public function acessoRemoto()
    {
        return view('pages.remoto');
    }

    //Página Downloads
    public function downloads()
    {
        return view('pages.downloads', [
            'files' => $this->download->findAll('ftp', url('ftp'))
        ]);
    }

    //Página Visualização de noticias
    public function noticiasView(int $id)
    {
        return view('pages.news.view', [
            'news' => $this->noticias->findNewsId($id)
        ]);
    }
}
