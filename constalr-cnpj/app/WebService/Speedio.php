<?php

namespace App\WebService;

//CLASSE PARA SPEEDIO
class Speedio{

    /**
     * URL base da API DO sPEEDIO
     * @var string
     */

     const URL_BASE = 'https://api-publica.speedio.com.br';

     /**
      * Método responsável por consultar um CNPJ nas APIs do speedio
      *@param string $cnpj
      *@return array
      */
      public function consultarCNPJ($cnpj){
        
        return $this->get('/buscarcnpj?cnpj');
      }
      
    }