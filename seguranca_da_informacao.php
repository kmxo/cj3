<?php 
require_once("header.php");
require_once("menu.php");
require_once("funcoes.php");

?>

<main class="content">
    
        <div class="content text-content content-wrap">

            <?php renderTitle('Segurança da Informação - Usuários não autorizados', 'Garantir a segurança contra usuários não autorizados começa com as roles'); ?>

            
                
                
                <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A fase de autorização acontece logo após o login e nesse momento a plataforma carrega as permissões do usuário logado. 
                </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Recentemente <a href="https://community.servicenow.com/community?id=community_article&sys_id=9b8dc5021b3841101e579979b04bcbdc" target="_blank">publiquei um artigo na comunidade</a> falando um pouco sobre a API Glide User mas sempre há espaço para conversar sobre esse tema. 
                </p>

                </br>
                <p>
                    <h5>Quando o Desenvolvedor está no Studio e clica em File > Publish o que acontece com essa parte de Administração de Usuários?</h5>
                    </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A Administração de Usuários não faz parte dos arquivos da aplicação. Quando um aplicativo é instalado em outra instância, o processo de instalação não vai atualizar a instância de destino com o relacionamento entre Grupos e Roles. 
                    </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Via de regra, quando um <b>Grupo</b> é criado em uma instância ele não é criado em outras instâncias de maneira automática.
                    </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Roles</b>, por sua vez, são arquivos que fazem parte da aplicação escopada.
                    </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E os <b>Access Controls</b>? Sim, também são arquivos que fazem parte da aplicação.
                </p>

                </br>
                <p>
                    <h5>Grupos de Usuários</h5>
                    </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Um grupo nada mais é do que um conjunto de usuários que têm as mesmas funções. Os grupos podem executar tarefas como aprovar registros, resolver incidentes, receber notificações por e-mail ou ter acesso a um Dashboard específico.
                    </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ao invés de adicionar uma role a um usuário específico, adicione uma role a um grupo. Membros de um grupo irão herdar todas as roles que aquele grupo possui.
                </p>

                </br>
                <p>
                    <h5>Menu do Aplicativo e Módulos</h5>
                    <br>
                    <img src="assets/image/12_application_menu.png" height="30%" width="30%" alt="application menu" title="application menu">
                    <br>
                    


                    </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;O acesso ao Menu do Aplicativo e seus Módulos é controlado pelas roles que um usuário possui.
                    </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No Studio e com o seu Aplicativo customizado aberto, clique em File > Settings.
                    <br>
                    <br>
                    <img src="assets/image/13_settings.png" height="30%" width="30%" alt="application settings" title="application settings">
                    <br><br>
                    </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Verifique que a role pode ser definida no parâmetro "User role".
                    <br>
                    <br>
                    <img src="assets/image/14_settings_user_role.png" height="50%" width="50%" alt="application user role" title="application user role">
                    <br><br>
                </p>

                <p>
                __________<br>
                Se os usuários com a role da imagem acima podem acessar tanto o Menu do Aplicativo quanto os módulos, ambos não devem possuir uma role.
                
                </br></br><a href="index.php" target="_self">Voltar</a>
                </p>


            
        </div>
        
</main>

<?php
require_once("footer.php");