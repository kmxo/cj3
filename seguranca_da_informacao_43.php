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

            <?php renderTitle('Segurança da Informação - Parte 4.3', 'Criei um App com 3 personas'); ?>

            
                
                
                    <h5>Admin</h5>
                    </br>

                    <div>
                        
                       
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A persona do Admin basicamente pode dar manutenção nas tabelas auxiliares de Veículos e Seguradoras.
                        <br>

                        </br>
                    <img src="assets/image/48_admin.png" height="100%" width="100%" alt="admin" title="admin">
                    </br>

                    <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Como tudo isso é um negócio que gera lucro, pode ser interessante disponibilizar para o gestor um Dashboard que permita acompanhar o número de negócios realizados no decorrer do tempo.
                        <br>

                    </br>
                    <img src="assets/image/49_dashboard.png" height="100%" width="100%" alt="dashboard" title="dashboard">
                    </br>
                       
                    </div>
                                        
               </p>
<br>
             

                
               
<p>
                    <div align="right"> 
                        <a href="seguranca_da_informacao_44.php" target="_self">Próximo</a>
                    </div>
                    <div align="left">
                        <a href="index.php?p=2" target="_self">Voltar</a>
                    </div>

                </p>


            
        </div>
        
</main>

<?php
require_once("footer.php");