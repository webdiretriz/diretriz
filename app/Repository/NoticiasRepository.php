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
                $data->usuario = DB::table('admin')->where('id', $item->usuario)
                    ->first()->nome;
                return $data;
            });
    }

    /**
     * Realiza a pesquisa dos boletins informativos
     * @param int $limit
     * @return Collection
     */
    public function findAllNews(int $limit = 1): Collection
    {
        $result = DB::table('noticias')
            ->where('divulga', '=', 'S')
            ->orderBy('data', 'desc');
        return $result->limit($limit)
            ->get()->map(function ($item) {
                $data = $item;
                $data->usuario = DB::table('admin')->where('id', $item->idAdmin)
                    ->first()->nome;
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
}
