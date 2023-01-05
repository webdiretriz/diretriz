<?php

namespace App\Http\Controllers;

use App\Models\Traits\Response;
use App\Repository\ChangelogRepository;
use App\Repository\ContactRepository;
use App\Repository\DownlodsRepository;
use App\Repository\NoticiasRepository;
use Illuminate\Http\Request;

class AppController extends Controller
{
    use Response;

    /** @var DownlodsRepository */
    private $download;

    /** @var NoticiasRepository */
    private $noticias;

    /** @var ContactRepository */
    private $contact;

    /** @var ChangelogRepository */
    private $changelog;

    /**
     * Injeção de dependência
     * @param DownlodsRepository $download
     */
    public function __construct(
        DownlodsRepository $download,
        NoticiasRepository $noticias,
        ContactRepository  $contact,
        ChangelogRepository $changelog
    )
    {
        $this->download = $download;
        $this->noticias = $noticias;
        $this->contact = $contact;
        $this->changelog = $changelog;
    }

    //Página home
    public function home()
    {
        return view('home', [
            'boletim' => $this->noticias->findAllBoletim()->toArray(),
            'news' => $this->noticias->findAllNews(3)->toArray(),
            'destaque' => $this->noticias->findAllAvisos()->count(),
        ]);
    }

    //Realiza a gestão de contato do site
    public function contact(Request $request)
    {
        return $this->message('success', $this->contact->manager($request))
            ->clear(true)
            ->response();
    }

    //Página da diretriz
    public function diretriz()
    {
        return view('pages.diretriz');
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

    //Exibe a página de notas de versão do sistema
    public function changelog(string $sistema)
    {
        $v = $this->changelog->findChangeLog($sistema, isset($_GET['all']));
        if(empty($v))
            return redirect(route('home'));
        return view('pages.changelog', [
            'sistema' => $sistema,
            'versao' => $v
        ]);
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
            'files' => $this->download->findAll('', url(''))
        ]);
    }

    //Página Visualização de noticias
    public function noticiasView(int $id)
    {
        return view('pages.news.view', [
            'news' => $this->noticias->findNewsId($id)
        ]);
    }

    //Página Visualização de noticias
    public function noticiasList(int $categoria = null)
    {
        return view('pages.news.list', [
            'categoria' => $this->noticias->findAllCategory(),
            'news' => $categoria === 999 ? $this->noticias->findAllBoletim(20) : $this->noticias->findAllNews(6, $categoria)
        ]);
    }

    //Quadro de avisos do site
    public function quadroAviso()
    {
        return view('pages.avisos', [
            'avisos' => $this->noticias->findAllAvisos()
        ]);
    }

    //Página da LGPD
    public function lgpdCookies()
    {
        return view('pages.lgpd.cookies');
    }

    //Página da LGPD
    public function lgpdPolitica()
    {
        return view('pages.lgpd.politica');
    }

    //Aceita os termos da LGPD
    public function lgpdAccept()
    {
        setcookie('cookie_notice_accepted', 'true', time() + 60 * 60 * 24 * 15, '/');
        return redirect(route('home'));
    }

    //Página de consentimento LGPD
    public function lgpdConsentimento()
    {
        return view('pages.lgpd.consentimento');
    }

    //Recebe informação do formulário consentimento
    public function lgpdConsentimentoSend(Request $request){
        return $this->message('success', $this->contact->consentimento($request))
            ->clear(true)
            ->response();
    }
}
