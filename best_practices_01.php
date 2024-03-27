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

            <?php renderTitle('Best Practices in Scripting', 'If you want to Update, please do not Insert!'); ?>



            <p>
                
                

 

                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;There are scenarios when instead of updating a record, a script creates a new one. If it is the correct logic behind the Use Case it’s fine, but as good consultants we need to make sure it doesn’t happen if the client just want to perform updates.
                <br>
 

                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.1 Use Case 1: The get() method
                <br>
 

<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In the script below we may think that the lines 9 to 11 are setting values to an existing record so in line 12 we’re just updating the record.
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In the right panel we can see that, as the record wasn’t found, a new record was created in the sys_user table!
<br><br>


                  <img class="img-delta" src="assets/image/54_script.png" height="100%" width="100%" alt="Script commented" title="Script commented">




                 
                 <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To guarantee that we are updating a record, it is important to wrap the get() method in an if statement like this:
                    <br><br>

                    <img class="img-delta" src="assets/image/55_script.png" height="100%" width="100%" alt="Script" title="Script">
                    
                 <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If the record to be updated does not exist, the <b>else</b> statement is warning us about that fact and we’re not creating any unnecessary record.

 

                 <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.2 Use Case 2: Loading data

 

                 <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Use the coalesce fields to locate records when loading data.

                 <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The coalesce fields will inform the platform how a record can be identified to the respective fields will be updated accordingly.

                 <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Like the first Use Case, we need to make sure that the coalesce fields are consistent. Otherwise, the platform will create new records instead of update the desired ones.

                 

            </p>
<br>




                <p>

                <br><br><a href="index.php?p=1" target="_self">Back</a>
                </p>



        </div>

</main>

<?php
require_once("footer.php");
