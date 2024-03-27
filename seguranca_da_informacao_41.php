<?php 
require_once("header.php");
require_once("menu.php");
require_once("funcoes.php");

?>
<style>
    .div-clark {
        background-color: #EBEBEB;
        border: 3px solid grey;
        border-radius: 5px;
        border-style: inset;
        
    }
    .img-clark {
        border: 1px solid #ddd;
        border-radius: 4px;
        padding: 5px;
        padding-left: 5px;
        width: 95px;
        float: left;
    }
    
</style>

<main class="content">
    
        <div class="content text-content content-wrap">

            <?php renderTitle('Segurança da Informação - Parte 4.1', 'Criei um App com 3 personas'); ?>

            
                
                
                    <h5>Corretor de Seguros</h5>
                    </br>

                    <div>
                        
                       
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quando logar no sistema, o Corretor de Seguros tem acesso a dois módulos do App "Camacho Seguros" como podemos ver a seguir.
                        </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Na primeira aba ele pode cadastrar os Dados Pessoais do Segurado.
                        <br>

                        </br>
                    <img src="assets/image/42_corretor.png" height="100%" width="100%" alt="corretor" title="corretor">
                    </br>

                    <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Na segunda aba ele pode cadastrar os Dados do Veículo.
                        </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Os campos <b>Veículo</b> e <b>Seguradora de Preferência</b> trazem dados de outras tabelas. Essas tabelas secundárias só poderão ser gerenciadas pela persona do Administrador do aplicativo. Assim, o Corretor de Seguros pode apenas consultar os dados dessas tabelas para efetuar o cadastro da proposta.
                        <br>

                    </br>
                    <img src="assets/image/43_corretor.png" height="100%" width="100%" alt="corretor" title="corretor">
                    </br>

                    <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A aba Análise de Risco, também cadastrada pelo Corretor, contem informações que serão usadas pelo funcionário da Seguradora para decidir se aprova ou não a proposta.
                        <br>

                    </br>
                    <img src="assets/image/44_corretor.png" height="100%" width="100%" alt="corretor" title="corretor">
                    </br>

                    <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A aba Parecer da Seguradora contém campos que são de uso exclusivo do funcionário da Seguradora. 
                        </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Como a persona logada agora é o Corretor de Seguros, ele não tem acesso de leitura nesses campos.
                        </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;O Corretor de Seguros pode editar a vontade as informações das três primeiras abas. Quando ele informar "Sim" no campo "Enviar registro para análise da Seguradora?" e salvar o registro, todos os campos dessa proposta ficarão somente leitura e ele não poderá mais efetuar alterações.
                        </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;O workflow da proposta consiste nas situações: Em Construção, Em Análise, Aprovada, Rejeitada.
                        </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quando um registro de proposta muda para a situação "Em Análise", somente a persona da Seguradora pode atuar sobre ele.
                        <br>

                    </br>
                    <img src="assets/image/45_corretor.png" height="100%" width="100%" alt="corretor" title="corretor">
                    </br>
                        
                    </div>
                                        
               </p>
<br>
             

                
               
                <p>
                    <div align="right"> 
                        <a href="seguranca_da_informacao_42.php" target="_self">Próximo</a>
                    </div>
                    <div align="left">
                        <a href="index.php?p=2" target="_self">Voltar</a>
                    </div>

                </p>


            
        </div>
        
</main>

<?php
require_once("footer.php");