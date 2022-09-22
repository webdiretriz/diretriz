<?php

namespace App\Exceptions;

use Illuminate\Database\QueryException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [

    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
        });

        /** Erro de SQL - Quando acontece algum erro de SQL */
        $this->renderable(function (QueryException $e, Request $request) {
            return $this->message($request->getMethod(), $e, 409, $request, true);
        });

        /** Erro de SQL - Quando não é encontrado o resultado da pesquisa (FindOrFail) */
        $this->renderable(function (NotFoundHttpException $e, Request $request) {
            return $this->message($request->getMethod(), $e, $e->getStatusCode(), $request, true);
        });

        /** Error personalizado HTTP - Quando é utilizado o abort(..., ...) */
        $this->renderable(function (HttpException $e, Request $request) {
            return $this->message($request->getMethod(), $e, $e->getStatusCode(), $request, !empty($e->getMessage()) ?? false);
        });
    }

    /**
     * Realiza o tratamento da mensagem de retorno dos errors
     */
    private function message(string $method, $e, int $code, Request $request, bool $details = false)
    {
        switch ($code) {
            case '409':
                $message = 'Ação não é permitida, o registro possui dependências';
                break;
            case '404':
                $message = "Não foi possível realizar está ação, porque o dado não existe!";
                break;
            case '400':
                $message = "O servidor não entendeu a requisição.";
                break;
            case '500':
                $message = 'Ops, ocorreu um erro no processamento dos dados!';
                break;
            case '401':
                $message = 'Ops, não foi possível processar a ação solicitada!';
                break;
            default:
                $message = 'O servidor encontrou uma situação com a qual não sabe lidar.';
                $code = 500;
                break;
        }

        if ($method == 'POST') {
            if ($details) {
                $details = "<p class='mt-2 d-flex flex-wrap w-100' style='font-size: .8em'>
                    <a href='#' id='details' class='fw-bold text-primary'><i class='fas fa-eye'></i> Ver detalhes:</a>
                    <span class='details mt-1 w-100'>{$e->getMessage()}</span>
                </p>";
                return response()->json($message . $details, $code);
            } else {
                return response()->json($message, $code);
            }
        }
    }
}
