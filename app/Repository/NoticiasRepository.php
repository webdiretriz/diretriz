<?php

namespace App\Repository;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class NoticiasRepository
{
    /**
     * Realiza a pesquisa dos boletins informativos
     * @param int $limit
     * @return Collection
     */
    public function findAllBoletim(int $limit = 1): Collection
    {
        $result = DB::table('boletim_informativo')
            ->orderBy('data', 'desc');
        return $result->limit($limit)
            ->get()->map(function ($item) {
                $data = $item;
                $data->id = $item->codigo;
                $data->assunto = $item->titulo;
                $data->capa = url(mix('images/boletim.jpg'));
                $data->link = 'https://www.diretriz.net/imgs/boletim/' . $item->arquivo;
                $data->usuario = DB::table('admin')->where('id', $item->usuario)
                    ->first()->nome;
                return $data;
            });
    }

    /**
     * Realiza a pesquisa as notícias
     * @param int $limit
     * @return Collection
     */
    public function findAllNews(int $limit = 1, int $categoria = null): Collection
    {
        $categoria = empty($categoria) ? false : $categoria;
        return DB::table('noticias')
            ->where('divulga', '=', 'S')
            ->when($categoria, function ($query, $categoria) {
                $query->where('categoria', '=', $categoria);
            })
            ->orderBy('data', 'desc')
            ->limit($limit)
            ->get()->map(function ($item) {
                $data = $item;
                $user = DB::table('admin')->where('id', $item->idAdmin)
                    ->first();
                $data->usuario = empty($user) ? '' : $user->nome;
                $data->link = route('noticias-view', ['id' => $item->id]);
                return $data;
            });
    }

    /**
     * Pesquisa noticia pelo id
     * @param int $id
     * @return \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Query\Builder|object|null
     */
    public function findNewsId(int $id)
    {
        return DB::table('noticias')
            ->join('noticias_categoria', 'noticias_categoria.idcategoria', '=', 'noticias.categoria')
            ->where('id', '=', $id)
            ->first();
    }

    /**
     * Verifica se pode exibir o destaque
     * @return bool
     */
    public function verifyDestaque(): bool
    {
        $start = date('Y-m-d', strtotime('-15 days', strtotime('now')));
        $boletim = DB::table('boletim_informativo')
            ->whereBetween('data', [$start, date('Y-m-d')])
            ->count();
        $news = DB::table('noticias')
            ->whereBetween('data', [$start, date('Y-m-d')])
            ->count();
        return ($boletim > 0 || $news > 0) ?? false;
    }

    /**
     * Pesquisa as categorias com notícias
     * @return Collection
     */
    public function findAllCategory()
    {
        return DB::table('noticias')
            ->select(['noticias_categoria.*'])
            ->join('noticias_categoria', 'noticias_categoria.idcategoria', '=', 'noticias.categoria')
            ->where('noticias.divulga', '=', 'S')
            ->groupBy('noticias_categoria.idcategoria')
            ->get();
    }
}
