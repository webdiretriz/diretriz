<?php


namespace App\Models\Traits;

trait Response
{
    /** @var array */
    private $message;

    /** @var array */
    private $messageField;

    /** @var string */
    private $messageFieldValidate;

    /** @var string */
    private $redirect;

    /** @var string */
    private $modal;

    /** @var string */
    private $modalMode;

    /** @var string */
    private $closeModal;

    /** @var array */
    private $field;

    /** @var array */
    private $fieldDisabled;

    /** @var array */
    private $boxDisabled;

    /** @var bool */
    private $clear;

    /** @var array */
    private $formData;

    /** @var string */
    private $formDataName;

    /** @var */
    private $data;

    /** @var bool */
    private $exception;

    /**
     * @return false|string
     */
    public function response()
    {
        //verifica se existe dados
        return collect([
            'message' => $this->message ?? '',
            'clear' => $this->clear ? true : false,
            'errors' => $this->messageField,
            'errorsValidate' => $this->messageFieldValidate,
            'redirect' => $this->redirect,
            'modal' => $this->modal,
            'modalMode' => $this->modalMode,
            'closeModal' => $this->closeModal,
            'field' => $this->field,
            'fieldDisabled' => $this->fieldDisabled,
            'boxDisabled' => $this->boxDisabled,
            'formData' => $this->formData,
            'formDataName' => $this->formDataName,
            'data' => $this->data,
            'exception' => $this->exception
        ])->toJson();
    }

    /**
     * Exibe a messagem do sistema
     * @param string $type
     * @param string $text
     */
    public function message(string $type, string $text, ?string $details = null)
    {
        $info = "<p class='mt-2 d-flex flex-wrap w-100' style='font-size: .8em'>
                <a href='#' id='details' class='font-weight-bold'><i class='fas fa-eye'></i> Ver detalhes:</a>
                <span class='details mt-1 w-100'>{$details}</span>
            </p>";
        $msg = $text . (!empty($details) ? $info : '');
        $this->message = ['type' => $type, 'text' => $msg];
        return $this;
    }

    /**
     * Exibe a messagem no campo
     * @param string $field
     * @param string $text
     */
    public function messageField(string $field, string $text, string $validate = 'invalid')
    {
        $this->messageField[$field] = [$text];
        $this->messageFieldValidate = ($validate == 'invalid' ? 'is-invalid' : 'is-valid');
        return $this;
    }

    /**
     * Limpa os campos do formulário
     * @param $value
     */
    public function clear($value)
    {
        $this->clear = $value;
        return $this;
    }

    /**
     * Abre uma modal especifica
     * @param string $modal
     * @param string $mode
     */
    public function modal(string $modal, string $mode = 'create')
    {
        $this->modal = $modal;
        $this->modalMode = $mode;
        return $this;
    }

    /**
     * Fecha uma modal especifica
     * @param string $modal
     */
    public function closeModal(string $modal)
    {
        $this->closeModal = $modal;
        return $this;
    }

    /**
     * Passa algum valor para campo parametrizado
     * @param string $field
     * @param string $param
     */
    public function fieldParam(string $field, string $param)
    {
        $this->field[$field] = $param;
        return $this;
    }

    /**
     * Realiza o desbloquio do campo
     * @param string $field
     * @param bool $disabled
     * @return bool
     */
    public function fieldDisabled(string $field, bool $disabled = true)
    {
        return $this->fieldDisabled[$field] = $disabled;
    }

    /**
     * Realiza o desbloquio da box
     * @param string $box
     * @param bool $disabled
     * @return bool
     */
    public function boxDisabled(string $box, bool $disabled = true)
    {
        return $this->boxDisabled[$box] = $disabled;
    }

    /**
     * Redireciona a aplicação para uma determinada rota
     * @param string $route
     */
    public function redirectTo(string $route)
    {
        $this->redirect = $route;
        return $this;
    }

    /**
     * Alimenta formulário com dados
     * @param array $data
     */
    public function formData(array $data, string $formName)
    {
        $this->formData = $data;
        $this->formDataName = $formName;
        return $this;
    }

    /**
     * Retorna uma matriz de dados
     * @param $data
     */
    public function data($data){
        $this->data = $data;
        return $this;
    }

    /**
     * Verifica se requisição teve algum erro
     * @param $error
     * @return void
     */
    public function exception($error = true)
    {
        $this->exception = $error;
    }
}
