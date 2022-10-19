<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class ChangelogRepository
{
    /**
     * Pesquisa a versão do sistema de acordo com parametro
     * @param string $sistema
     * @return array
     */
    public function findChangeLog(string $sistema, bool $all = false): array
    {
        $db = DB::connection('mysql_crm')
            ->table('pendencias')
            ->select([
                'pendencias.Codigo_Requisito',
                'sistemas.COD_SISTEMA',
                'grupos.DSC_GRUPO',
                'modulo.Modulo',
                'versoes.Versao',
                'pendencias.Texto_Versao',
                'pendencias.LOCAL_REFER_PENDENCIA',
                'pendencias.Tipo_Requisito_Orig'
            ])
            ->join('modulo', 'modulo.Cod_Modulo', '=', 'pendencias.Cod_Modulo')
            ->join('versoes', 'versoes.Cod_Versao', '=', 'pendencias.Cod_Versao')
            ->join('sistemas', 'sistemas.COD_SISTEMA', '=', 'versoes.Cod_Sistema')
            ->join('grupos', 'grupos.COD_GRUPO', '=', 'sistemas.COD_GRUPO')
            ->where(function ($query) {
                $query->where(function ($q) {
                    $q->whereNotNull('pendencias.Texto_Versao');
                    $q->where('pendencias.Texto_Versao', '!=', '');
                });
                $query->where('pendencias.Texto_Versao_Vazio', '=', '');
            })
            ->where('sistemas.ativo', '=', '*')
            ->where('versoes.TipoInterno', '=', '0')
            ->where('pendencias.Tipo_Requisito', '!=', 'AD')
            ->orderBy('versoes.ordem')
            ->get()->groupBy('DSC_GRUPO')->all();
        $versoes = [];
        if (!empty($db))
            foreach ($db as $key => $item) {
                if ($key === $sistema)
                    $versoes[$key] = collect($item)->groupBy('Versao')
                        ->slice(0, $all ? 100 : 5)
                        ->all();
            }
        return $versoes;
    }
}
