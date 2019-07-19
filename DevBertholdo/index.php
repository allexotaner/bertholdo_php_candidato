<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<!--
 * Description of Address
 *
 * @author Alex Renato Costa / Analista de Sistemas
 * @email: alexotaner@gmail.com / alexotaner@ufmg.br
 * @zapVivo: (31)9.8651-9240  
 * 
-->
<!-- FRAMEWORK UTILIZADO - BOOTSTRAP -->
<html lang="pt-br">
    <head>
        <!-- Meta tags necessárias para acentuação pt-br e viewporte para controle 
        do layout nos navegadores e dispositivos móveis. 
        -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- CSS do Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title> MEU CEP </title>
    </head>
    <body> 
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>                
        
        <!-- Objetivo dessa NAV é só para dar uma melhor aparência -->
        <div class="alert alert-primary" role="alert">
            Acessando o webservice de CEP. </br>
            Consulta usando PHP com formato de retorno em XML.
        </div>
        
        <!-- Objetivo dessa NAV é só para dar uma melhor aparência -->
        <nav class="navbar navbar-light bg-light">
            <form class="form-inline" action="view.php" method="post">
                <label> Insira o CEP: &nbsp; </label>
                <input class="form-control mr-sm-2" type="text" placeholder="Digite o cep" aria-label="CEP" name="cep">
                <button class="btn btn-primary" type="submit">Buscar CEP</button>
            </form>
        <nav>
    </body>
</html>