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

            <?php renderTitle('Segurança da Informação - Parte 4', 'Criei um App com 3 personas'); ?>

            
                
                
                <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="seguranca_da_informacao_3.php" target="_self">No terceiro artigo</a> sobre Segurança da Informação conversamos sobre a criação de Grupos de Usuários capazes de agrupar as funcionalidades que uma persona deve ter no seu Aplicativo.
                </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Para continuarmos essa conversa, criei um Aplicativo de Seguro de Veículos para trazer o conceito mais próximo da realidade.
                </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vamos começar olhando um planejamento do que cada persona pode fazer.
                </br>
                    </br>
                    <img src="assets/image/41_personas.png" height="70%" width="70%" alt="personas" title="personas">
                    </br>
                    
                </p>

                <br>
                <p>
                    <h5>Corretor de Seguros</h5>
                    </br>

                    <div class="div-clark">
                        
                       
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;O Corretor de Seguros é um profissional autônomo que entra em contato via Whatsapp com o proprietário do veículo interessado em fazer um seguro novo ou renovar um seguro existente.
                        </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ele terá acesso ao Menu Principal do Aplicativo e também pode executar as funcionalidades (módulos) a seguir:
                        </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- <b>Propostas em Construção</b>: permite cadastrar uma proposta de seguro de veículo e editá-la quantas vezes for necessário. 
                        </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- <b>Histórico</b>: permite consultar propostas que foram Aprovadas ou Rejeitadas pela Seguradora.
                        <br>
                        
                    </div>
                                        
               </p>
<br>
               <p>
                    <h5>Seguradora</h5>
                    </br>

                    <div class="div-clark">
                        
                       
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Um funcionário da seguradora vai receber a proposta cadastrada e fará análise dos dados para emitir um parecer. Esse parecer pode ser Aprovar ou Rejeitar a proposta.
                        </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ele terá acesso ao Menu Principal do Aplicativo e também pode executar as funcionalidades (módulos) a seguir:
                        </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- <b>Propostas em Análise</b>: permite ler as propostas cadastradas pelo Corretor e emitir parecer de Aprovar ou Rejeitar o documento. 
                        </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- <b>Histórico</b>: permite consultar propostas que foram Aprovadas ou Rejeitadas pela Seguradora.
                        
                        <br>
                        
                    </div>
                                        
               </p>               
               <br>
               <p>
                    <h5>Admin</h5>
                    </br>

                    <div class="div-clark">
                        
                       
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;O Administrador do Aplicativo pode cadastrar os tipos de veículos e as empresas seguradoras autorizadas a participar de todo o processo.
                        </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ele terá acesso ao Menu Principal do Aplicativo e também pode executar as funcionalidades (módulos) a seguir:
                        </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- <b>Gerenciar Veículos</b>: permite incluir ou alterar informações de veículos que podem ser segurados. Os dados dessa tabela irão aparecer (somente leitura) no cadastro inicial que é realizado pelo Corretor de Seguros.
                        </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- <b>Gerenciar Seguradoras</b>: permite incluir ou alterar informações de empresas seguradoras que podem participar do processo. Os dados dessa tabela irão aparecer (somente leitura) no cadastro inicial que é realizado pelo Corretor de Seguros.
                        
                        <br>
                        
                    </div>
                                        
               </p> 
               <br>


                </br></br>
               
                <p>
                    <div align="right"> 
                        <a href="seguranca_da_informacao_41.php" target="_self">Próximo</a>
                    </div>
                    <div align="left">
                        <a href="index.php?p=2" target="_self">Voltar</a>
                    </div>

                </p>


            
        </div>
        
</main>

<?php
require_once("footer.php");