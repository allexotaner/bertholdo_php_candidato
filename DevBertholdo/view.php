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
    // Setando PHP a usar fuso horário desta localidade
    date_default_timezone_set('America/Sao_Paulo');
    
    // Setando informações locais para PHP a usar tudo abaixo
    setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'portuguese');
    
    /* Garantia da classe ser incluída uma única vez */
    require_once('bertholdoclass/Address.class.php');

    /* Se a variável não estiver vazia, ela executa a o procedimento */
    if(!empty($_POST['cep'])){

            $cep = $_POST['cep'];
            
            /* Criando nova instância da Classe Address 
             * Invocando método get_adrress com passagem de argumento
             */
            $newadress = new Address;
            $address = $newadress->get_address($cep);
    }
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="pt-br">
    <head>
        <!-- Required meta tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script type="text/javascript" src="bertholdoJS/ScriptsBertholdo.js"></script>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>                        
        
        <!-- JavaScript para Abertura automática do resultado da pesquinsa -->
        <script type="text/javascript">
            $(document).ready(function() {
            $('#ModalCenter').modal('show');
            })
        </script>
    </head>
    <body> 
        <!-- Objetivo desse ALERT é só para dar uma melhor aparência -->
        <div class="alert alert-primary" role="alert">
            Acessando o webservice de CEP. </br>
            Consulta usando PHP com formato de retorno em XML.
        </div>
        
        <!-- Objetivo dessa Paragráfo é só para dar uma melhor aparência -->
        <p class="h2">Consultando...</p>
        
        <!-- Modal Framework Bootstrap-->
        <div class="modal fade" id="ModalCenter" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="ModalCenterTitle">Consulta CEP</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" action>
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                  <?php
                    echo 'CEP Informado: '.$address->cep.'</br>';
                    echo 'Logradouro: '.$address->logradouro.'<br>';
                    echo 'Bairro: '.$address->bairro.'<br>';
                    echo 'Cidade: '.$address->localidade.'<br>';
                    echo 'Estado: '.$address->uf.'<br>';
                  ?>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="newPage()">Nova Consulta</button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="goBack()">Retornar...</button>
              </div>
            </div>
          </div>
        </div> 
    </body>
</html>