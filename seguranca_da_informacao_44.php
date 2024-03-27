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

            <?php renderTitle('Segurança da Informação - Parte 4.4', 'Criei um App com 3 personas'); ?>

            
                
                
                    <h5>Notificações</h5>
                    </br>

                    <div>
                        
                       
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No contexto do aplicativo Camacho Seguros encontramos dois momentos em que seria interessante enviar um e-mail notificando a persona sobre a situação do processo.
                       <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1) Quando um Corretor de Seguros conclui uma Proposta e a envia para despacho do Grupo das Seguradoras, enviamos um e-mail para todos deste grupo alertando de que há uma proposta pendente de análise.

                        </br></br></br>
                    <img src="assets/image/51_notifications.png" height="40%" width="40%" alt="E-mail para a Seguradora" title="E-mail para a Seguradora">
                    </br>

                    <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2) Quando um funcionário da Seguradora dá o parecer final sobre uma proposta, enviamos um e-mail para o Grupo dos Corretores informando que o processo ref. aquela proposta foi concluído. O corretor recebe informações sobre a situação e o motivo do deferimento.
                        <br>

                    </br></br></br>
                    <img src="assets/image/52_notifications.png" height="40%" width="40%" alt="E-mail para o Corretor de Seguros" title="E-mail para o Corretor de Seguros">
                    </br>
                       
                    </div>
                                        
               </p>
<br>
             

                
               
                <p>

                    <div align="left">
                        <a href="index.php?p=2" target="_self">Voltar</a>
                    </div>

                </p>


            
        </div>
        
</main>

<?php
require_once("footer.php");