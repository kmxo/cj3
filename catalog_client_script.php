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

            <?php renderTitle('Validating a data field in a Service Portal', 'by using a Catalog Client Script'); ?>



            <p>
                
                

 

                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Use Case: When submitting a Record Producer, a date field can’t be in the past. How to accomplish this?
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We can create a Catalog Client Script.
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1) What is the trigger?
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The script will run when the date field value changed.
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2) What do we need to confirm?
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We need to check if the date provided is in the future.
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3) What if the date is not in the future?
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If the date is not in the future, then we show an error message to inform that the date cannot be in the past.
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Step by step process</b>
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1) Create a Record Producer (RP) and define the Catalog and Category so it will be visible in a Service Portal
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2) Create a variable in your RP. In this example, the variable will have this configuration:
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Type:</b> Date
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Question:</b> Project Deadline
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Name:</b> project_deadline
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Mandatory:</b> Yes (checked)
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3) Create a Catalog Client Script in your RP to check if the project_deadline value changed. If the date is in the past, show an error message to the user.
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Your Catalog Client Script will look like this:
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Name:</b> Validate Project Deadline
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Applies to:</b> A Catalog Item
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>UI Type:</b> Mobile / Service Portal
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Type:</b> onChange
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Variable name:</b> project_deadline
                <br>
 

                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Script:
                <br>
 


                  <img class="img-delta" src="assets/image/56_script.png" height="100%" width="100%" alt="Script" title="Script">

                  <br><br>
                  <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;It's the same script below but as simple text so you can copy it. :)
<pre>
function onChange(control, oldValue, newValue, isLoading) {

    if (isLoading || newValue == '') {
        g_form.hideFieldMsg('project_deadline', true);
        return;
    }

    //If the Project Deadline is in the past, show error message
    var deadlineDate = new Date(getDateFromFormat(newValue, g_user_date_format));
    var nowDate = new Date();

    if (nowDate.getTime() >= deadlineDate.getTime()) {

        g_form.setValue('project_deadline', '');
        g_form.showErrorBox('project_deadline', 'Project deadline should be after today', true);

    } else {

        g_form.hideFieldMsg('project_deadline', true);

    }

}
</pre>                   
                 <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4) Did you manage to test it? Are you able to submit the form if you inform a date in the past? Tell me what you got!

                 

            </p>
<br>




                <p>

                <br><br><a href="index.php?p=2" target="_self">Back</a>
                </p>



        </div>

</main>

<?php
require_once("footer.php");
