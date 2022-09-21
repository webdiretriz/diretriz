<?php

namespace App\Repository;

class DownlodsRepository
{
    /**
     * Retorna o html da arvore de arquivo por pasta
     * @param string $dir
     * @return string
     */
    public function findAll(string $dir = '', string $url = ''): string
    {
        $directory = env('APP_FTP') . DIRECTORY_SEPARATOR . $dir;

        //Verifica se existe o diretório do ftp
        if (!file_exists($directory) && !is_dir($directory)) {
            return "<div class='alert alert-danger'>
            <i class='fas fa-sad-cry me-1'></i>Não foi possível localizar a pasta <b>'{$directory}'</b> no servidor!
            </div>";
        }

        $html = '<div class="alert w-75 alert-info" role="alert">
                        <i class="bi bi-chat-fill me-1"></i>Para fazer o download de algum arquivo, selecione a solução
                        desejada e em seguida, navegue entre os sistemas:
                    </div>
        <div id="jstree">
            <ul>';
        $html .= $this->getStructTree($this->findDirectory($directory), $directory, $url);
        $html .= '</ul>
                    </div>';
        return $html;
    }

    /**
     * Realiza a montagem da strutura de pasta do servidor
     * @param array $directory
     * @param string $dir
     * @return string
     */
    private function getStructTree(array $directory, string $dir, string $url): string
    {
        $html = '';
        foreach ($directory as $key => $item) {
            $file = !is_array($item) && mb_strpos($item, '.') ? explode('.', $item) : $key;

            //pasta vazia
            if (empty($item) && is_dir($dir . DIRECTORY_SEPARATOR . $file))
                $html .= "<li>{$file}</li>";

            //arquivo
            if (is_array($file) && !is_dir($dir . DIRECTORY_SEPARATOR . $item))
                $html .= "<li data-jstree='" . json_encode(['type' => trim(strchr($file[1], '-', true)) === 'ini' ? 'version' : 'files']) . "'>
                            <a href='" . $url . DIRECTORY_SEPARATOR . trim(strchr($item, '-', true)) . "'>{$item}</a>
                </li>";

            //pasta com arquivo ou subpasta
            if (!empty($item) && is_dir($dir . DIRECTORY_SEPARATOR . $key)) {
                $html .= "<li class='jstree-open'>{$key}<ul>";
                $html .= $this->getStructTree($item, $dir . DIRECTORY_SEPARATOR . $key, $url);
                $html .= "</ul>
                </li>";
            }
        }
        return $html;
    }

    /**
     * Retorna o conteúdo do diretório parametrizado
     * @param $dir
     * @return array
     */
    private function findDirectory($dir): array
    {
        $dir = $dir . DIRECTORY_SEPARATOR;
        $fileData = array();

        if (is_dir($dir)) {
            if ($ftp = opendir($dir)) {
                while (($file = readdir($ftp)) !== false) {
                    if ($file === '.' || $file === '..' || $file[0] === '.')
                        continue;

                    if (is_dir($dir . $file))
                        $fileData[$file] = $this->findDirectory($dir . DIRECTORY_SEPARATOR . $file);
                    else
                        $fileData[] = $file . ' - <span class="fs-8">' . date('d/m/Y H:i:s', filectime($dir . $file)) . '</span>';
                }
                closedir($ftp);
            }
        }
        return $fileData;
    }
}
