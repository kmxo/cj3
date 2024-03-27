<?php 
require_once("header.php");
require_once("menu.php");
require_once("funcoes.php");

?>

<main class="content">
    
        <div class="content text-content content-wrap">

            <?php renderTitle('Notificações via e-mail', 'Confira como criar uma notificação que envia um e-mail para Usuários ou Grupos'); ?>

            
                
                
                <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;O procedimento de criar arquivos do seu Aplicativo no Studio é o mesmo independente do tipo do arquivo a ser criado.
                </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1 – No Studio, clique em [<b>Create Application File</b>]
                </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2 – Escolha o tipo do arquivo. Nesse caso, <b>Notification</b>.
                <br>
                <br>
                    <img src="assets/image/25_create.png" height="70%" width="70%" alt="criando novo componente" title="criando novo componente">
                    <br>
                    <br>
                    </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3 – Clique em [<b>Create</b>]
                <br>
                <br>
                    <img src="assets/image/24_captura.png" height="70%" width="70%" alt="novo registro" title="novo registro">
                <br>   
                <br>    
                    
                </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Na tela de configuração da notificação, inicialmente preencha a <b>Tabela</b> a ser monitorada e o campo <b>Name</b>. Pode salvar o registro. Perceba que teremos que preencher basicamente três abas:    
                    
                    
                    <li>When to send (quando enviar)
                    <li>Who will receive (quem vai receber) 
                    <li>What it will contain (o que o email vai conter)

                    <br>
                    </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vamos por partes:


                </p>

                </br>
                <p>
                    <h5>1 – When to send (quando enviar)</h5>
                    </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Neste exemplo o objetivo é enviar um e-mail <u>quando um registro for criado</u>.
                    </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Marque o checkbox “Inserted” como na figura:
                    <br>
                    <br>
                     <img src="assets/image/26_when.png" height="70%" width="70%" alt="quando" title="quando">
                    <br>   
                    <br>  

                </p>

                </br>
                <p>
                    <h5>2 - Who will receive (quem vai receber)</h5>
                    </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nesta aba você pode selecionar Grupos de Usuários e/ou Nome de Usuários que irão receber o e-mail.
                    <br>
                    <br>
                     <img src="assets/image/27_who.png" height="70%" width="70%" alt="quem" title="quem">
                    <br>   
                    <br>  
                </p>

                <p>
                    <h5>3 - What it will contain (o que o email vai conter)</h5>
                    <br>
                    <br>
                     <img src="assets/image/28_what.png" height="70%" width="70%" alt="o que" title="o que">
                    <br>   
                    <br>  
                    </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aqui é basicamente informar o assunto e o corpo do e-mail.
                    </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Feito isso, clique em [<b>Submit</b>] e pronto. Sua notificação está criada.
                    
                </p>

                <p>
                
                
                
                </br></br><a href="index.php" target="_self">Voltar</a>
                </p>


            
        </div>
        
</main>

<?php
require_once("footer.php");