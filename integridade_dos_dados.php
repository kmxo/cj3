<?php 
require_once("header.php");
require_once("menu.php");
require_once("funcoes.php");

?>

<main class="content">
    
        <div class="content text-content content-wrap">

            <?php renderTitle('Mantenha a integridade dos dados', 'Indo além das UI Policies para garantir dados consistentes'); ?>

            
                
                
                <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Suponha que no seu formulário há dois campos de múltipla escolha (tipo Choice) e eles são dependentes entre si.
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;O primeiro chama-se Departamento e permite escolher dentre: Tecnologia, Recursos Humanos, Materiais de Escritório.
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;O segundo chama-se Solicite um Serviço, e seu valor depende do valor escolhido no Departamento.
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Para exemplificar, ao selecionar o Departamento <u>Recursos Humanos</u> o campo <u>Solicite um Serviço</u> aparece com as opções:
                    <li>Solicitar Férias
                    <li>Licença Saúde 
                    <li>Reembolso de Despesas com Capacitação Profissional 
                </p>

                <br>
                <p>
                    <h5>Os dois campos são obrigatórios. Como garantir que eles sempre serão armazenados?</h5>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Como Consultor ServiceNow você foi informado que precisa garantir que estes dois campos sejam sempre armazenados no banco de dados.
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Uma decisão inicial a ser tomada por você no Front-End (interface com o usuário final) é: vou usar programação via <b>Script</b> ou <b>UI Policies</b> para controlar o surgimento das opções corretas na tela conforme a escolha do Departamento?
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Muitas vezes um Consultor possui experiência anterior em Linguagens de Programação e a primeira coisa que lhe vem na cabeça é criar um Script... mas mantenha a calma.
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Há uma receita de boas práticas que pode ser aplicada nesse cenário como veremos a seguir.
                </p>

                <br>
                <p>
                    <h5>O que você precisa fazer com o campo é MRV? Se sim, use UI Policies. Senão, use Script.</h5>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;O que é essa característica <b>MRV</b> que um campo pode ter?
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>M</b> = Mandatory = Obrigatório
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>R</b> = Read only = Somente Leitura
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>V</b> = Visible = Visível
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Se o que você precisa fazer em um campo é simplesmente torná-lo obrigatório, somente leitura ou visível/escondido, utilize as UI Policies.
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Atenção com a propriedade "Reverse if false = Verdadeiro/Falso" existente nas UI Policies. Se você deixar essa opção como checked (Verdadeiro), a UI Policy terá o comportamento <u>contrário</u> quando ela deixar de ser verdadeira.
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Um exemplo: Se você está exibindo um campo Solicite um Serviço com as opções (Solicitar Férias, Licença Saúde, Reembolso) apenas quando o Departamento Recursos Humanos for selecionado, quando um Departamento diferente for selecionado o campo Solicite um Serviço ficará oculto.
                </p>

                <br>
                <p>
                    <h5>As UI Policies ou Client Scripts são suficientes para garantir a integridade dos dados?</h5>
                    
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alguns browsers podem ter a execução de código Javascript bloqueada e isso pode fazer com que as UI Policies e os Client Scripts não funcionem.
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Para garantir a integridade da informação, a lógica de validação de dados também precisa estar no back-end. Para isso você vai querer usar Data Policies*.
                    
                </p>

                <p>
                __________<br>
                *Data Policies pode aplicar regras para toda informação que entra na plataforma, incluindo import sets, web services e interface mobile.
                
                <br><br><a href="index.php?p=2" target="_self">Voltar</a>
                </p>


            
        </div>
        
</main>

<?php
require_once("footer.php");