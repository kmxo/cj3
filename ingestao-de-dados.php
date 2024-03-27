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
        width: 60%;
    }
    .img-clark {
        border: 1px solid #ddd;
        border-radius: 4px;
        padding: 5px;
        padding-left: 5px;
        width: 90px;
        float: right;
    }
    
</style>

<main class="content">
    
        <div class="content text-content content-wrap">

            <?php renderTitle('Ingestão de dados', 'Extrapolando o limite de importação de registros para uma tabela'); ?>

            
                
                
                <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Para garantir a performance de uma instância, a ServiceNow define uma série de propriedades de sistema para impor limites em algumas operações.<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Uma operação que certamente é capaz de causar lentidão para os usuários é a importação de um número muito grande de registros. Nesse artigo vamos analisar como é possível alterar temporariamente esse limite.<br>
                </p>
<br>
                <p>
                    <h5>Tenho um amigo que tem um recado importante para te dar</h5>

                    <div class="div-clark">
                        <img class="img-clark" src="assets/image/30_spiderman.png" alt="Spiderman" title="Spiderman">
                        <p><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lembre-se sempre: 
                         <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                         <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"Com grandes poderes vêm grandes responsabilidades".
                         </p>
                         <br>
                     </div>

<br>
                     <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Para início de conversa precisamos ter em mãos um arquivo com cem mil registros a ser importado para uma tabela no nosso projeto.
                     <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Existem algumas formas para criar um arquivo de testes. Eu optei por escrever um programa em Java capaz de gerar rapidamente um arquivo do tipo <abbr title="comma-separated values">CSV</abbr> contendo as cem mil linhas. O código-fonte que criei ficou assim:
                     <br>
                     <br>
                    <img src="assets/image/29_java_program.png" height="80%" width="80%" alt="programa java" title="programa java">
                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Conhecer uma Linguagem de Programação muitas vezes pode ser útil para resolver problemas do dia a dia. Caso queira fazer o download do arquivo CSV gerado, <a href="https://www.camachojunior.com.br/download/mytest.zip">clique aqui</a>.
                </p>
<br>
                <p>
                    <h5>Criando uma tabela para o carregamento de dados</h5>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dentro do seu Aplicativo crie uma tabela com apenas dos campos: nome e email.<br>
                    <br>
                    
                    <img src="assets/image/31_tabela.png" height="80%" width="80%" alt="tabela" title="tabela">
                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Para carregar os dados do arquivo CSV para a nossa tabela de destino, há uma sequência lógica a ser executada: 
                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1) Carregar o arquivo para uma tabela Stage (temporária);
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2) Criar um Transform Map para mapear os campos do arquivo com os campos da tabela target (destino);
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3) Executar a transformação.
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A primeira coisa a ser feita é clicar em System Import Sets > <b>Load Data</b>

                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aqui é basicamente selecionar:
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Create table 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Preencher o nome da tabela temporária no campo Label 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Em Source of the import, selecione File 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- No campo File clique em [Choose File] para selecionar o arquivo CSV que contém os 100.000 registros
                    <br>
                    <br>
                    
                    <img src="assets/image/32_tabela_stage.png" height="80%" width="80%" alt="tabela stage" title="tabela stage">
                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Clique em [Submit]
                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2) Criar um Transform Map para mapear os campos do arquivo com os campos da tabela target (destino)
                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Após o passo 1 você precisa aguardar até a conclusão da importação de dados. Quando a importação terminar você verá uma tela como a seguir: 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Clique em [<b>Create transform map</b>]
                    <br>
                    <br>
                    <img src="assets/image/33_import_complete.png" height="80%" width="80%" alt="Import complete" title="Import complete">
                    <br>
                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Em <b>Name</b> defina um nome para esse Mapa de Transformação;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Em <b>Source table</b> informe a tabela Temporária já criada;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Em <b>Target table</b> informe a tabela oficial criada dentro do Studio para receber os dados;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Desmarque "Run business rules";
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Antes de clicar em Submit, clique em [<b>Mapping Assist</b>] para relacionar os campos.
                    <br>
                    <br>
                    <img src="assets/image/34_Use_mapping_Assist_antes_do_submit.png" height="80%" width="80%" alt="Table Transform Map" title="Table Transform Map">
                    <br>
                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Utilize as seta <b>Add ></b> da esquerda para colocar o campo nome da tabela de relacionamento. Depois utilize <b>Add <</b> da direita para colocar o campo nome da tabela Target na tabela de relacionamento. Assim mapeamos que o campo nome da tabela temporária será gravado no campo nome da tabela oficial.
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Repita o processo para o campo email e depois clique em [<b>Save</b>]
                    <br>
                    <br>
                    <img src="assets/image/35_mapping_assist.png" height="80%" width="80%" alt="Mapping Assist" title="Mapping Assist">
                    <br>
                    <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3) Executar a transformação.
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nessa tela basta clicar em [<b>Transform</b>]
                    <br>
                    <br>
                    <img src="assets/image/36_transform.png" height="80%" width="80%" alt="Link Transform" title="Link Transform">
                    <br>
                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Coloque o Transform Map para a tabela da direita e clique em [<b>Transform</b>]
                    <br>
                    <br>
                    <img src="assets/image/37_transform_button.png" height="80%" width="80%" alt="Especificar o import set" title="Especificar o import set">
                    <br>
                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ao término do processo, clique em [<b>Transform history</b>] para conferir os detalhes do processamento.
                    <br>
                    <br>
                    <img src="assets/image/38_transorm_complete.png" height="80%" width="80%" alt="Transformação completa" title="Transformação completa">
                    <br>
                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Confira o total de registros inseridos, atualizados, etc.
                    <br>
                    <br>
                    <img src="assets/image/39_log.png" height="80%" width="80%" alt="Histórico" title="Histórico">
                    <br>
                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Consultando a tabela oficial é possível ver os registros inseridos.
                    <br>
                    <br>
                    <img src="assets/image/40_final_table.png" height="80%" width="80%" alt="Tabela final" title="Tabela final">
                    <br>
                    <br>
                    <br>
                </p>

                
                <p>
                    <h5>Demonstração em Vídeo</h5>
                    
                    <br>
                    <div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/732255614?h=f3691997e6&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Importando arquivos do tipo CSV.mp4"></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
                    
                </p>



                <p>
                __________<br>
                Instâncias corporativas geralmente possuem limites mais rígidos com relação ao número máximo de registros importados.
                <br>Conforme <a href="https://support.servicenow.com/kb?id=kb_article_view&sysparm_article=KB0529145" target="_blank">documentação oficial</a>, criando o parâmetro <b>glide.ui.export.limit</b> na tabela <b>sys_properties</b> é possível aumentar esse limite. Lembre-se sempre do princípio de Peter Parker: Com grandes poderes vêm grandes responsabilidades.
                
                <br><br><a href="index.php?p=2" target="_self">Voltar</a>
                </p>


            
        </div>
        
</main>

<?php
require_once("footer.php");