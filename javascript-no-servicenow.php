<?php 
require_once("header.php");
require_once("menu.php");
require_once("funcoes.php");

?>

<main class="content">
    
        <div class="content text-content content-wrap">

            <?php renderTitle('JavaScript no ServiceNow', 'Vamos analisar alguns conceitos sobre o uso da linguagem na plataforma'); ?>

            
                
                
                <p>
                    <li>JavaScript é uma linguagem de programação muito popular usada no desenvolvimento de páginas Web.</br>
                    <li>Altera o comportamento das páginas e pode ser usada no lado do Servidor e/ou no lado do Cliente.</br>
                    <li>Em ServiceNow você pode usar JavaScript nestes dois lados, além de contar com funcionalidades disponibilizadas pelas APIs da plataforma.</br>
                </p>

                <p>
                    <h5>Por que precisamos usar JavaScript em ServiceNow?</h5>
                    <li>As funcionalidades já disponíveis pelas APIs facilitam bastante a nossa vida mas há situações em que elas não são suficientes para resolver o problema. É aí que a linguagem JavaScript entra em cena.
                    <li>Usamos JavaScript também para fazer integrações com outros aplicativos.
                    <li>É usado quando é necessário fazer automação de processos.
                </p>

                <p>
                    <h5>Onde escrever o código JavaScript?</h5>
                    <li>A plataforma possui um editor de script que é exibido em um formulário quando habilitamos a visualização avançada.<br>
                    <br>
                    <img src="assets/image/01_campo_script.png" height="80%" width="80%" alt="campo script" title="campo script">
                    <br>
                </p>

                <p>
                    <h5>Onde é exibido o resultado de um código JavaScript?</h5>
                    <li>Alerta no browser: podemos executar o método de alerta para exibir informações diretamente no browser.
                    <li>Log: podemos gravar informações em um arquivo de log para análise posterior.
                    <li>Background script: é possível também usar o recurso "Scripts - Background" para executar códigos diretamente no lado Servidor.
                    <br>
                    <br>
                    <img src="assets/image/02_sb.png" height="50%" width="50%" alt="scripts background" title="scripts background">
                    <br>
                </p>

                <p>
                    <h5>Exercício</h5>
                    Pré-requisito: Você já deve ter a sua <abbr title="Personal Development Instance (Instância Pessoal de Desenvolvimento)">PDI</abbr>*
                    <br>1) Acesse a sua PDI e clique em <b>Client Scripts</b>
                    <br>2) Clique em <b>New</b> e preencha os campos conforme abaixo:<br>

                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name: <b>Teste</b><br> 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Table: <b>Incident</b><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UI Type: <b>All</b><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Type: <b>onLoad</b><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Script: Digite <b>alert('Alerta no browser');</b> na linha 3 como vemos na imagem:<br>
                    
                    <br>
                    <img src="assets/image/03_alerta.png" height="50%" width="50%" alt="alerta no browser" title="alerta no browser">
                    <br>
                    <br>3) Clique em <b>Submit</b> para salvar o seu script.
                    <br>4) No menu de navegação esquerdo (application navigator) clique em <b>Self-Service > Incidents</b> para abrir a lista de incidentes.
                    <br>5) <b>Abra</b> um registro qualquer para ver o resultado do alerta que você programou.

                </p>

                <p>
                __________<br>
                * Caso não tenha criado a sua PDI, <a href="https://www.youtube.com/embed/3nlKU8bnJ38" target="_blank">confira esse vídeo</a> do Jorge Vilas Boas.
                
                </br></br><a href="index.php" target="_self">Voltar</a>
                </p>


            
        </div>
        
</main>

<?php
require_once("footer.php");