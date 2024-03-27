<?php 
require_once("header.php");
require_once("menu.php");
require_once("funcoes.php");

?>

<main class="content">
    
        <div class="content text-content content-wrap">

            <?php renderTitle('Notificações no Teams', 'Não seria incrível receber uma notificação no Teams em um evento do nosso Aplicativo ServiceNow? Vem comigo!'); ?>

            
                
                
                <p>
                Pré-requisitos:
                    <br>Você já deve ter um Aplicativo com ao menos uma tabela criada na plataforma ServiceNow.
                    <br>
                    <br>
                    O seu fluxo de trabalho ServiceNow possui a possibilidade de integração com diversos aplicativos.</br>
                    Essa capacidade de integração com pouca codificação é permitida pelo IntegrationHub.</br>
                    Nesse artigo você vai aprender a enviar uma notificação Teams sempre que um novo registro for criado em uma tabela.</br>
                </p>

                <p>
                    <h5>Quais são os passos necessários para programar essa integração?</h5>
                    <ol>
                        <li>No Microsoft Teams vamos criar um webhook, que é um endereço Web necessário para a próxima atividade;
                        <li>Vamos criar um Flow na plataforma ServiceNow em que o trigger (gatilho para início da execução) será quando um novo registro for criado na nossa tabela. Quando essa condição for satisfeita, enviaremos uma mensagem para o Canal criado no Teams.
                    </ol>
                </p>

                <p>
                    <h5>1) Criando um webhook no Teams</h5>
                    1.1) Um time dentro do Teams pode ter diversos canais. Selecione o canal que deseja configurar e, no canto superior direito, clique nos três pontinhos;<br>
                    1.2) Clique em Connectors.
                    <br>
                    <br>
                    <img src="assets/image/04_teams1.png" height="60%" width="60%" alt="instalar conector" title="instalar conector">
                    <br>
                    <br>
                    1.3) Clique em [Add] no conector "Incoming Webhook".
                    <br>
                    <br>
                    <img src="assets/image/05_teams2.png" height="50%" width="50%" alt="selecionando o conector" title="selecionando o conector">
                    <br>
                    <br>
                    1.4) Na tela de configuração do conector, informe:
                    <br> Um nome qualquer para o seu Webhook;
                    <br> (Opcional) Faça o upload de uma imagem para o seu Webhook. Toda mensagem que chegar terá essa imagem.
                    <br> Clique em [Create].
                    <br>
                    <br>
                    <img src="assets/image/06_teams3.png" height="50%" width="50%" alt="configurando o conector" title="configurando o conector">
                    <br>
                    <br>
                    1.5) Pronto! Clique no ícone indicado para copiar o endereço do seu Webhook.
                    <br> Guarde-o bem pois vamos utilizá-lo no passo 2.
                    <br>
                    <br>
                    <img src="assets/image/07_teams4.png" height="50%" width="50%" alt="endereco do webhook" title="endereco do webhook">
                    <br>
                    <br>

                </p>

                <p>
                    <h5>2) Vamos criar um Flow na plataforma ServiceNow</h5>
                    
                    Objetivo:
                    <br>Sempre que um novo registro for criado na tabela, enviar uma notificação no Teams.
                    
                    <br>
                    <br>2.1) Na plataforma, abra o Flow Designer em Process Automation > Flow Designer 
                    <br>2.2) No Flow Designer, clique em New > Flow 
                    <br>2.3) Na tela Flow properties, defina:
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;O nome do seu Flow;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Uma descrição do que ele faz;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Application: Selecione o seu Aplicativo existente;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Protection: -- None -- 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Run As: User who initiates session 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Clique em [Submit]
                    <br>
                    <br>

                    <img src="assets/image/08_teams.png" height="50%" width="50%" alt="flow properties" title="flow properties">
                    <br>
                    <br>
                    2.4) No Trigger, selecione Record > Created
                    
                    <br>
                    <br>
                    <img src="assets/image/09_teams.png" height="50%" width="50%" alt="definindo trigger" title="definindo trigger">
                    <br>
                    <br>
                    2.5) Selecione a sua tabela no campo Table e clique em [Done]
                    <br>
                    <br>
                    <img src="assets/image/10_teams.png" height="50%" width="50%" alt="selecione uma tabela" title="selecione uma tabela">
                    <br>
                    <br>
                    2.6) Na parte de ACTIONS basta escolher a Action "Post a Message". Os demais parâmetros são:
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Webhook URL:</b> Informe a url do Webhook criado no passo 1.
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Title:</b> Será o título da notificação. 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Message:</b> Configure a mensagem a ser enviada conforme o desejado. Você pode incluir campos do registro criado.
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Clique em <b>[Test]</b> para ver como a notificação chega no canal do Teams.
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quando o teste estiver conforme o desejado, clique em <b>[Activate]</b> para ativar o Flow.
                    <br>
                </p>

                

                <p>
                __________
                <br>Referências:
                <br><a href="https://docs.microsoft.com/pt-br/microsoftteams/platform/webhooks-and-connectors/how-to/add-incoming-webhook" target="_blank">Microsoft, Criar um webhook de entrada</a>. 
                <br><a href="https://www.servicenow.com.br/products/integration-hub.html#:~:text=As%20correntes%20do%20IntegrationHub%20conectam,de%20maneira%20poderosa%20pela%20empresa." target="_blank">ServiceNow, IntegrationHub</a>.
                <br><a href="https://techcommunity.microsoft.com/t5/microsoft-365-pnp-blog/how-to-configure-and-use-incoming-webhooks-in-microsoft-teams/ba-p/2051118" target="_blank">Techcommunity, How to configure and use Incoming Webhooks in Microsoft Teams</a>.
                
                </br></br><a href="index.php" target="_self">Voltar</a>
                </p>


            
        </div>
        
</main>

<?php
require_once("footer.php");