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

            <?php renderTitle('Segurança da Informação - Parte 3', 'Primeiro entre na casa, depois entre no cômodo - Demonstração prática'); ?>

            
                
                
                <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="seguranca_da_informacao_2.php" target="_self">No segundo artigo</a> sobre Segurança da Informação vimos que o desenvolvedor é administrador do aplicativo. 
                </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Isso é bom pois você pode fazer tudo no seu aplicativo, mas é ruim... pois você pode fazer tudo no seu aplicativo.
                </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Oi?
                </p>

                <br>
                <p>
                    <h5>Por que é ruim ser um admin o tempo todo?</h5>
                    </br>

                    <div class="div-clark">
                        
                       
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Após enviar o seu Aplicativo para a instância de Homologação, você vai querer simular os mesmos acessos que o seu usuário real terá no ambiente de Produção.
                        </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Para simular os privilégios de acesso do seu usuário final no ambiente de Homologação e fazer os testes corretos, é comum criarmos Grupos de Usuários que agrupem as funcionalidades que ele deve ter.
                        </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ao pensar sobre as características desta pessoa e planejar quais funcionalidades ela poderá executar, você está definindo o que chamamos de <i>persona</i>.
                        
                        <br>
                        
                    </div>
                                        
               </p>

                </br></br>
                <p>
                    <h5>Demonstração em Vídeo</h5>
                    </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;O conteúdo idealizado para esse artigo envolve a criação de diferentes componentes de um aplicativo. 
                    </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Explicar a criação destes componentes e como estão relacionados de forma a garantir a Segurança da Informação seria difícil através de um artigo. Por esse motivo decidimos gravar um vídeo e você pode conferir o resultado abaixo.

                    <br><br>
                    <div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/732258643?h=98dcd15c1c&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Primeiro entre na casa, depois entre no c&amp;ocirc;modo"></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
                    
                </p>

                </br></br>
                <p>
                    <h5>Exercício opcional</h5>
                    
                    </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Para assimilar novos conceitos é importante praticar. 
                    </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Como proposta de exercício, a seguir estão os requisitos para a construção de um Aplicativo semelhante ao demonstrado no Vídeo.
                    </br>
                    </br>
                    <img src="assets/image/22_casa.png" height="100%" width="100%" alt="opcional" title="opcional">
                    </br>
                    </br>
                    </br>
                    </br>
                    <h5>Quer praticar mais?</h5>
                    </br>
                    <img src="assets/image/23_casa_desafios.png" height="100%" width="100%" alt="desafios" title="desafios">
                    


                    
                    
                    
                </p>

                <p>
                </br>
                </br><a href="index.php?p=2" target="_self">Voltar</a>
                </p>


            
        </div>
        
</main>

<?php
require_once("footer.php");