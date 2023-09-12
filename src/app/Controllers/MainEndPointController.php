<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
// use App\Models\NomeModel;
use Exception;

class MainEndPointController extends ResourceController
{
    use ResponseTrait;
    private $ModelResponse;
    private $uri;
    private $template = 'meet/template/main.php';
    private $title = 'meet/title';
    private $menu = 'meet/menu';
    private $message = 'meet/message';

    public function __construct()
    {
        // $this->ModelResponse = new NomeModel();
        $this->uri = new \CodeIgniter\HTTP\URI(current_url());
        helper([
            'myPrint',
            'myEndPoint',
            'myDate',
            'myIdUFF',
            'form'
        ]);
        return NULL;
    }

    # route POST /www/sigla/rota
    # route GET /www/sigla/rota
    # Informação sobre o controller
    # retorno do controller [view]
    public function index($parameter = NULL)
    {
        $request = service('request');
        $processRequest = (array)$request->getVar();
        $loadView = array(
            $this->title,
            $this->menu,
            $this->message,
        );
        try {
            # URI da API
            $uri = base_url() . '/sigla/rota/' . $parameter;
            # Decisão URI da API
            if ($processRequest !== array()) {
                $uri = base_url() . '/sigla/rota/path/path/' . $processRequest;
            } else {
                $uri = base_url() . '/sigla/rota/path/path/' . $parameter;
            }
            # Carrega a configuração de API
            $APIform = \Config\Services::curlrequest();
            # Recebe a API
            $requestAPIform = $APIform->request('GET', $uri);
            # Recebe o JSON da API
            $requestJSONform = json_decode($requestAPIform->getBody(), true); // true para exibir em array
            $requestJSONform = array();
            $apiRespond = [
                'http' => array(
                    'header'  => 'Content-type: application/x-www-form-urlencoded',
                    'method'  => 'GET/POST',
                ),
                'message' => 'API loading data (dados para carregamento da API)',
                'date' => date('Y-m-d'),
                // 'method' => '__METHOD__',
                // 'function' => '__FUNCTION__',
                // 'getURI' => $this->uri->getSegments(),
                // 'protocol' => strtoupper(myIdUFF()),
                'page_title' => 'Funções',
                'result' => $requestJSONform,
                'loadView' => $loadView
            ];
        } catch (\Exception $e) {
            $apiRespond = array(
                'message' => array('danger' => $e->getMessage()),
                'loadView' => $loadView
            );
        }
        return view($this->template, $apiRespond);
    }

    # Consumo de API
    # route GET /www/meet/jitsi/endpoint/main/(:any)
    # route POST /www/meet/jitsi/endpoint/main/(:any)
    # Informação sobre o controller
    # retorno do controller [VIEW]
    public function easyIntegrates($parameter = NULL)
    {
        $request = service('request');
        $processRequest = (array)$request->getVar();
        $loadView = array(
            $this->title,
            $this->menu,
            $this->message,
            '/meet/room'
        );
        try {
            # Recebe o JSON da API
            $requestJSONform = array();
            $apiRespond = [
                'http' => array(
                    'header'  => 'Content-type: application/x-www-form-urlencoded',
                    'method'  => 'GET/POST',
                ),
                'message' => 'API loading data (dados para carregamento da API)',
                'date' => date('Y-m-d'),
                // 'method' => '__METHOD__',
                // 'function' => '__FUNCTION__',
                // 'getURI' => $this->uri->getSegments(),
                // 'protocol' => strtoupper(myIdUFF()),
                'page_title' => 'Integração com o Jitsi Meet',
                'result' => $requestJSONform,
                'loadView' => $loadView
            ];
        } catch (\Exception $e) {
            $apiRespond = array(
                'page_title' => 'ERRO - Integração com o Jitsi Meet',
                'message' => array('danger' => $e->getMessage()),
                'loadView' => $loadView
            );
        }
        return view($this->template, $apiRespond);
    }
}
