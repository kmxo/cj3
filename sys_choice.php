<?php
require_once("header.php");
require_once("menu.php");
require_once("funcoes.php");

?>

<style>
    .img-delta {
        border: 3px solid #ddd;
        border-radius: 4px;
        padding: 5px;


    }

</style>

<main class="content">

        <div class="content text-content content-wrap">

            <?php renderTitle('There is a table called sys_choice', 'and it is important to know everything you can about it'); ?>



            <p>
                
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Choice table - which has the internal name sys_choice - is used internally by the ServiceNow platform every time we create a field of type Choice and specify the available choices.
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Points to remember when creating a choice</b> 
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Always use only lowercase and underscores to form the Column name.  
                <br>
                <br><img class="img-delta" src="assets/image/64_choice.png" height="70%" width="70%" alt="Choice field" title="Choice field">
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Column label is what appears for the end user so you are free to use uppercase and spaces.
                
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Use the same logic to create a choice. The value is internal and should contain only lowercase and underscores. The Label is what appears for the end user so you are free to use uppercase and spaces.
                <br>
                <br><img class="img-delta" src="assets/image/65_choice.png" height="70%" width="70%" alt="Choice" title="Choice">
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>What you should never do</b> 
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Never specify the Choice table as a reference in a Reference field. For example:  
                <br>
                <br><img class="img-delta" src="assets/image/63_syschoice.png" height="70%" width="70%" alt="Choice as ref" title="Choice as ref">
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A reference field stores the sys_id of the corresponding record in the reference table. Since the Choice table is a core internal table, its behaviour is different from custom tables and the sys_ids can change. 
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The problem: when a sys_id in a reference column matches the record in the referenced table, it shows the value of the column marked with the attribute Display = True. If for any reason the sys_id is not found in the referenced table, the system will simply show the sys_id. 
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thanks for reading!
            </p>



            <p>
                __________<br>
                See <a href="https://support.servicenow.com/kb?id=kb_article_view&sysparm_article=KB0813643" target="_blank">KB0813643</a> for reference.
                
            
                </br></br><a href="index.php?p=2" target="_self">Back</a>
                </p>




        </div>

</main>

<?php
require_once("footer.php");
