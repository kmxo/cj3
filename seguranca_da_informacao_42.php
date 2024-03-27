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

            <?php renderTitle('Segurança da Informação - Parte 4.2', 'Criei um App com 3 personas'); ?>

            
                
                
                    <h5>Seguradora</h5>
                    </br>

                    <div>
                        
                       
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A persona da Seguradora verá a lista das propostas com a situação "Em Análise".
                        </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Todos os funcionários no Grupo da Seguradora tem acesso as propostas nessa situação. Então, caso um funcionário da seguradora saia de férias ou tenha algum imprevisto, outro funcionário pode dar andamento nos trabalhos.
                        <br>

                        </br>
                    <img src="assets/image/46_seguradora.png" height="100%" width="100%" alt="seguradora" title="seguradora">
                    </br>

                    <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Os dois únicos campos disponíveis para a Seguradora são obrigatórios: Ação e Motivo.
                        </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No campo <b>Ação</b> há as opções Aprovar ou Rejeitar e no campo <b>Motivo</b> o funcionário vai justificar a sua decisão.
                        <br>

                    </br>
                    <img src="assets/image/47_seguradora.png" height="100%" width="100%" alt="seguradora" title="seguradora">
                    </br>

                    <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ao salvar o registro, este segue seu workflow e a Situação muda para Aprovado ou Rejeitado, dependendo da decisão da Seguradora.
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;As situações Aprovado ou Rejeitado constituem o fim do workflow. Ao atingir essa situação, a proposta não pode ser mais alterada por ninguém e sua consulta ficará disponível no módulo Histórico.
                        <br>


                        
                    </div>
                                        
               </p>
<br>
             

                
               
                <p>
                    <div align="right"> 
                        <a href="seguranca_da_informacao_43.php" target="_self">Próximo</a>
                    </div>
                    <div align="left">
                        <a href="index.php?p=2" target="_self">Voltar</a>
                    </div>

                </p>


            
        </div>
        
</main>

<?php
require_once("footer.php");