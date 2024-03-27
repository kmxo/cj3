<?php 
require_once("header.php");
require_once("menu.php");
require_once("funcoes.php");

?>

<main class="content">
    
        <div class="content text-content content-wrap">

            <?php renderTitle('How to hide a Related List', 'And I didn\'t even know you could do that...'); ?>

            
                
                
                <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You know that Related List that displays the people who can approve or reject a document?
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The other day a scenario came up where the developer needed to prevent the employee who created a record from approving that document.
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;It wasn't common because usually the operational level creates the document while a manager approves it.
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Leaving this question of personas aside and focusing on the problem, how would be a possible solution?
              
                </p>

                
                <p>
                    
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The first workaround that came to mind was simply inhibiting the Approval list if the user who registered was viewing his own record.
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A workaround is not the ultimate solution. Just a palliative one while we find time to think about the ideal solution.
                </p>

                <br>
                <p>
                    <h5>The action plan</h5>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1) Every record has a field called sys_created_by;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2) On the front-end (client side) we have access to an API called Glide User that has some information about the logged in user. Among them is the name in the userName property.
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;What if we create a Client Script of type onLoad* that compares these two fields and, if they are the same, simply hides the Approvers related list?

                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To see the related list name created for your table, you can access the platform and go to System UI > Related lists.
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Now that you know the related list name, your Client Script would look like this:
                <br>
                <br>
                    <pre id="code">
function onLoad() {
   
   var createdBy = g_form.getValue('sys_created_by');
   var loggedUser = g_user.userName;

   if (createdBy == loggedUser) {
      g_form.hideRelatedList('put your related list name here');
   }

}              
                    </pre>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To get the value of the sys_created_by field it must be in the form. You can leave it read-only or even hidden but it must exist on the form.
                </p>

                
                <p>
                                        

                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    
                </p>

                <p>
                __________<br>
                *A Client Script of type onLoad is executed whenever the form is opened.
                
                <br><br><a href="index.php?p=1" target="_self">Back</a>
                </p>


            
        </div>
        
</main>

<?php
require_once("footer.php");