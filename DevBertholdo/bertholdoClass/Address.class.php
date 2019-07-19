<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Address
 *
 * @author Alex Renato Costa / Analista de Sistemas
 * @email: alexotaner@gmail.com / alexotaner@ufmg.br
 * @zapVivo: (31)9.8651-9240  
 * 
 */
class Address {
    
    // Método construtivo obrigatório
    public function __construct(){
    
    }
    
    // Método para obter os dados do CEP por meio do WebService 
    function get_address($cep){
            // Removendo caracteres inválidos da digitação do usuário.
            $cep = preg_replace("/[^0-9]/", "", $cep);
            
            // Atribuição do link para consulta do CEP concatenado.
            $url = "http://viacep.com.br/ws/".$cep."/xml/";
            
            // Uso de função nativa para atribuição da variável
            $xml = simplexml_load_file($url);
            
            // Retorna o XML em forma de objeto array
            return $xml;
    }    
    
    // Método destrutor 
    public function __destruct(){
    
    }
        
 }
