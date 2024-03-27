<?php 
require_once("header.php");
require_once("menu.php");
require_once("funcoes.php");

?>

<main class="content">
    
        <div class="content text-content content-wrap">

            <?php renderTitle('Armazenando dados do usuário logado', 'Existem cenários em que desejamos armazenar dados do usuário na tabela do nosso aplicativo',''); ?>

            
                
                
                <p>
                    Ao criar uma tabela a plataforma cria pra gente campos que são usados internamente para auditoria. Veja:
                    </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Created by:</b> guarda o usuário que criou o registro;
                    </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Created:</b> Data e Hora da criação do registro;
                    </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Updated by:</b> guarda o usuário que fez a última alteração no registro;
                    </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Updated:</b> Data e hora da última alteração.
                </p>

                <p>
                    Caso de Uso I
                    </br>
                    </br>O requisito é que ao abrir um Formulário, seja gravado o usuário logado em um campo chamado Solicitante que é do tipo Referência para a tabela User.
                    </br>Vamos criar um Client Script para armazenar o usuário logado no carregamento do formulário (evento onLoad).
                    </br>1) Criar na nossa tabela um campo como segue.
                    </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Label: Solicitante
                    </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tipo: Referência
                    </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tabela: User
                    </br>
                </p>

                <p>
                    2) Agora vamos ao Client Script.

                    </br>
                    <pre id="code">
function onLoad() {

   //Guarda o nome completo do usuário logado
   var currentUser = g_user.firstName + ' ' + g_user.lastName;
   //Guarda o ID do usuário logado
   var currentUserId = g_user.userID;

   //Armazenando o usuário logado no campo Solicitante
   g_form.setValue('solicitante', currentUserId, currentUser);

}                    
                    </pre>
                    Assim, sempre que o usuário abrir o formulário para inserir ou editar um registro da nossa tabela, nós guardamos no campo solicitante a referência para os dados dele.
                </p>

                <p>
                    Caso de Uso II
                    </br>
                    </br>Certa vez um cliente tinha o requisito de gravar na tabela dele o Departamento e a Descrição do departamento do usuário logado.
                    </br>O problema aqui é que esses campos não estão na tabela sys_user, mas na cmn_department.
                    </br>O relacionamento entre tabelas na plataforma ServiceNow funciona assim:
                    </br><li>Todo registro criado na tabela principal, nesse caso a sys_user, recebe um código único de 32 bytes chamado sys_id.
                    </br><li>Para estabelecer o link entre a tabela principal e as tabelas de campos do tipo Referência o sys_id da tabela principal é armazenado nas tabelas de referência, o que nos permite recuperar a informação sempre que necessário.
                </p>

                <p>
                    Para dar conta desse requisito podemos seguir essa estratégia:
                    </br>1) Criar dois campos do tipo String na nossa tabela e nomeá-los como deptonome e deptodescricao.
                    </br>2) Na programação do back-end - que é o lado do Servidor - vamos criar um Script Include chamado PopulaCombo2 usando o seguinte código JavaScript.
                    </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;O Script Include recebe o sys_id do usuário e devolve duas informações sobre o Departamento ao qual ele pertence.
                    <pre id="code">
var PopulaCombo2 = Class.create();
PopulaCombo2.prototype = Object.extendsObject(global.AbstractAjaxProcessor, {

   Dados_usuario: function() {
  
   //Recuperando usuario
   var sysID = this.getParameter('sysparm_userid');
   var user = new GlideRecord('sys_user');
   user.get(sysID);
  
   //Recuperando dados do departamento 
   var depto = new GlideRecord('cmn_department');
   depto.get(user.department);
   var deptoName = depto.getValue('name');
   var deptoDescription = depto.getValue('description');

   //Prepara objeto a ser retornado como JSON
   var obj = {}; 
   obj["deptoName"] = deptoName; 
   obj["deptoDescription"] = deptoDescription; 

   return JSON.stringify(obj);
 },

   type: 'PopulaCombo2'
});
                    </pre>

                </p>

                <p>
                    3) Crie um Client Script para a sua tabela. Você vai querer usar esse código no evento onLoad, ou seja, toda vez que um formulário contendo um registro da sua tabela for aberto.
                    <br>Existem várias formas de obter o sys_id do usuário logado. Nesse exemplo temos no formulário um campo referência para a sys_user chamado funcionario.
                    <pre id="code">
function onLoad() {

    var userID = g_form.getValue('funcionario');

    var ga = new GlideAjax('PopulaCombo2'); //nome do Script Include
    ga.addParam('sysparm_name', 'Dados_usuario'); //metodo a ser chamado
    ga.addParam('sysparm_userid', userID); //parametro esperado pelo metodo
    ga.getXMLAnswer(userInfoParse);

    function userInfoParse(response) {
    if (response == '') {
        g_form.addErrorMessage('Não encontrei usuário com o parametro informado.');
    } else {
        var obj = JSON.parse(response);
        g_form.setValue('deptonome', obj.deptoName.toString());
        g_form.setValue('deptodescricao', obj.deptoDescription.toString());
    }

}
                    </pre>

                </p>







                <p>
                __________<br>
                
                Deixo pra você uma reflexão sobre a importância de dar bons nomes às suas classes e métodos. Ao criar o nosso Script Include nomeamos a classe como PopulaCombo2. Esse talvez não seja o melhor nome pois na interface com o usuário nós não estamos populando um combobox (caixa de seleção), estamos?
                <br>Vale a pena gastar alguns minutos pensando nos nomes que damos as nossas classes e métodos. Você vai perceber que não é uma tarefa fácil... mas é importante fazer o melhor que pudermos.
                
                </br></br><a href="index.php" target="_self">Voltar</a>
                </p>

            
        </div>
        
</main>

<?php
require_once("footer.php");