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

            <?php renderTitle('Segurança da Informação - Parte 2', 'Primeiro entre na casa, depois entre no cômodo'); ?>

            
                
                
                <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="seguranca_da_informacao.php" target="_self">No primeiro artigo</a> sobre Segurança da Informação, conversamos sobre o fato de que tudo começa com a criação das roles.
                </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Com relação a boas práticas, falamos também que deve-se atribuir uma role a um grupo e não diretamente a um usuário.
                </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A terceira informação sobre esse assunto pode parecer um <abbr title="algo que está escondido">easter egg</abbr> mas você - leitor(a) atento(a) - já pegou no subtítulo desse artigo: "<u>Primeiro entre na casa, depois no cômodo</u>". Anote a frase em um post-it aí que em breve a gente conversa sobre isso.
                </p>

                </br>
                <p>
                    <h5>Enviei meu Aplicativo para Homologação e não consigo inserir, ler, atualizar ou excluir meus registros. O que aconteceu?</h5>
                    </br>

                    <div class="div-clark">
                        
                       <img class="img-clark" src="assets/image/16_superman.png" alt="Superman" title="Superman">
                       <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quando um dev está desenvolvendo a aplicação no ambiente de desenvolvimento, ele é administrador daquele app. 
                        </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;É possível fazer tudo. Pode criar, modificar e apagar qualquer tipo de componente. 
                        </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tem acesso a todos os campos de todas as tabelas. 
                        Ele é tipo o Superman.</p>
                        <br>
                        
                    </div>
                    
                    </br>
                    <div class="div-clark">
                        
                       <img class="img-clark" src="assets/image/17_clark_kent.png" alt="Clark Kent" title="Clark Kent">
                       <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;As coisas mudam um pouco quando um app é promovido para o ambiente de Homologação. 
                       </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lá apesar do dev ter um usuário e senha para fazer login, ele não tem mais super poderes. 
                       </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;É tipo o Clark Kent no escritório do Planeta Diário, sabe? </p>
                       <br>
                    </div>
                    
               </p>

                </br></br>
                <p>
                    <h5>Veja se você está fazendo isso errado</h5>
                    </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ao abrir uma tabela no Studio há uma aba chamada Application Access.
                    </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Se você clicar em <u>Can create</u> achando que está permitindo ao seu usuário a criação de registros em Homologação ou Produção para tudo... você está fazendo isso errado.
                    </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;De maneira similar, clicar em <u>Can update</u> não irá permitir ao seu usuário editar um registro dessa tabela em Homologação/Produção. 
                    <br>
                    </br>
                    <img src="assets/image/15_app_access.png" height="50%" width="50%" alt="application access" title="application access">
                    <br>
                    


                    </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mas então que tipo de acesso é esse afinal?
                    </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ao deixar checked (verdadeiro) essas opções, você está dizendo a plataforma que <u>outros aplicativos</u> podem realizar essas operações nos registros da sua tabela. Isso é chamado de autorização <i>cross-scope</i>.
                    <br>
                    
                </p>

                </br>
                <p>
                    <h5>É agora que o papo fica bom</h5>
                    </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Entendi... não é alí que eu mexo. Conte-me mais...
                    </br>
                    </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Na edição da tabela dentro do Studio, clique na aba Controls. Rolando a tela para baixo veremos que há uma role especificada para o campo "User role".
                    
                    <br>
                    </br>
                    <img src="assets/image/18_access_controls.png" height="70%" width="70%" alt="controls" title="controls">
                    <br>

                    </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Outra coisa a ser observada é a mensagem de ajuda que explica: 
                    </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i>Regras de Segurança (ACLs) são exigidas caso alguém <u>além do administrador</u> precise trabalhar com essa tabela. Criar regras de segurança padrão irá conceder acesso completo a esta tabela para qualquer um que tenha a user role que você especificar</i>.
                    <br>
                    </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quando o seu usuário logar para fazer os testes na instância de Homologação ele não terá a role de administrador, concorda? 
                    </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Como ele não é admin, precisará ter essa User role atribuída para que possa manipular os registros da sua tabela.
                    </br>
                    </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Coisas importantes que você deve fazer: 
                    <ol>
                    <li> Criar um Grupo* na instância de Homologação; 
                    <li> Atribuir a User role da sua tabela a esse Grupo; e 
                    <li> Colocar o seu usuário testador dentro desse grupo. 
                    </ol>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ao colocar o usuário testador dentro do Grupo que contém a User role especificada para a sua tabela, ele herdará essa role.
                </p>

                </br>
                <p>
                    <h5>E os Access Controls com isso?</h5>
                    </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No Studio, perceba que no Application Explorer existe a navegação para Access Control > Access Controls.
                                    
                    </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quando criamos uma tabela, o Studio cria automaticamente quatro registros nessa seção. Abaixo está o registro da operação <b>create</b> (inclusão) da minha tabela.
                    <br>
                    </br>
                    <img src="assets/image/19_access_controls.png" height="70%" width="70%" alt="access controls" title="access controls">
                    <br>
                    <br>
                    </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Operação: <b>create</b>
                    </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name: <b>(Nome da sua tabela) |  -- None --</b> 
                    </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Requires role: <b>(A mesma User role definida para a sua tabela)</b>
                    </br>
                    </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;É nesse registro que a gente consegue "amarrar tudo". Vem comigo:
                    <br><br>
                    
                    <li>A operação <b>create</b> indica que este registro está permitindo a <b>inclusão</b> de registros para a tabela especificada no campo Name;
                    <li>No campo <b>Name</b> especificamos o <b>nome da tabela</b> em que será permitida essa operação; 
                    <li>O <b>-- None --</b> ao lado do nome da tabela indica que vamos permitir a operação em todos os campos da tabela; 
                    <li>A tabela <b>Requires role</b> lá embaixo informa qual role um Usuário precisa ter para que ele receba o acesso à operação definida nesse registro. 
                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A role definida aqui <u>é o mesmo nome</u> tanto da role definida na configuração da nossa tabela quanto aquela atribuída ao Grupo de Usuários criado na instância de Homologação. Por conta disso, todo usuário que for incluído no Grupo vai herdar essa role e poderá inserir registros na tabela.
                    
                    
                </p>

                </br>
                <p>
                    <h5>Quero permitir que um Usuário leia os registros da minha tabela. É muito complicado?</h5>
                    </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Para cada operação sobre a sua tabela (leitura, inserção, alteração ou exclusão) haverá 1 (um) Access Control.
                                    
                    </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vejamos um Access Control concedendo a leitura de registros da sua tabela:
                    <br>
                    </br>
                    <img src="assets/image/20_access_controls.png" height="70%" width="70%" alt="access controls" title="access controls">
                    <br>
                    <br>
                    </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Operação: <b>read</b>
                    </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name: <b>(Nome da sua tabela) |  -- None --</b> 
                    </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Requires role: <b>(A mesma User role definida para a sua tabela)</b>
                    </br>
                    </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Perceba que nesse registro de Access Control que permite a leitura de registros a única coisa que muda é a operação.
                    </br>
                    </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agora você já pegou a ideia... Precisará de outros dois registros de operações <b>update</b> e <b>delete</b> para permitir, respectivamente, a <b>alteração</b> e a <b>exclusão</b> de registros.
                </p>


                <p>
                __________<br>
                * Um Grupo de Usuários não faz parte dos arquivos de uma aplicação. Por esse motivo ele deve ser criado em todas as instâncias e de preferência com o mesmo nome.
                <br>Para trabalhar com registros de ACL antes deve-se elevar funções para security admin. Clique em User menu > Elevate Roles. Marque a role security_admin e clique em Ok.
                
                
                </br>
                </br><a href="index.php" target="_self">Voltar</a>
                </p>


            
        </div>
        
</main>

<?php
require_once("footer.php");