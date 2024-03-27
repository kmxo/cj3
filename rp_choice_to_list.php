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

            <?php renderTitle('Record Producer', 'Transforming Choices (Select 1) into a Multiple List (Select N)'); ?>



            <p>
                
                

 

                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Use Case: In a Record Producer we have a variable of type Multiple Choice.
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A Multiple Choice type allows the user to select 1 option between the available ones.
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- What if we need to allow the user to choose 2 or more options? In this article we'll discuss a possible solution for this scenario.
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In the RP we have a Multiple Choice variable, with some Choices.
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1) Edit this variable and copy its sys_id; 
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2) Change the type to List Collector and, in the Type Specifications tab inform: 
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>List table:</b> Question Choice [question_choice] 
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Reference qualifier:</b> question=(sys_id copied in Step 1)
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3) Save the record and see the effect in the Service Portal, refreshing the Record Producer page.
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The phase 2 is to create a table column to store the information. 
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4) Within your table, create a new column:
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Type:</b> List
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In the Choices tab, create the same options (and values) as the Record Producer. Wait... if you create these values, the sys_id will be different and they won't match. 
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To avoid this, in the Reference Specification tab, provide:
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Reference:</b> Question Choice [question_choice]
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Use Reference Qualifier:</b> Advanced
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>In the textarea:</b> question=(sys_id copied in Step 1)
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5) We must remember to store the RP value in our table column using the RP script area.
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<pre>
current.options = producer.options; //The variable name is defined by you. In my case, I named it as 'options' in both sides.

</pre>                 
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ok, now we're all set. 
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thank you for reading!
 
            </p>
<br>




                <p>

                <br><br><a href="index.php?p=2" target="_self">Back</a>
                </p>



        </div>

</main>

<?php
require_once("footer.php");
