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

            <?php renderTitle('Dependent fields', 'Thinking about dependent fields'); ?>



            <p>
                
                

 

                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In this article we'll discuss about dependent fields.
                <br><br>

                    <img class="img-delta" src="assets/image/58_uml.png" height="50%" width="50%" alt="Database diagram" title="Database diagram">
<br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The diagram above represents a database infrastructure that we need to maintain in our ServiceNow application.
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Suppose we've finished the gathering requirements phase and, as a Technical Consultant, the User Stories that we need to develop are:
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1) In the front-end, provide a Record Producer so the user can create a new record containing: a) Manufacturer, b) Vehicle and c) Vehicle model*. 
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2) In the back-end, a user with a special role is able to edit that fields if necessary.
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Step by step process</b> 
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Since we're talking about choices that will be available to the end user, all tables involved should be previously populated with the correct information before the delivery of this Record Producer. For example: If the source of the information is an external database, we need to create an integration to make sure that the tables are always populated with accurate information. 
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In this article we'll suppose that you already have it solved and the database infrastructure is up to date. 
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1) The Front-end 
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;As common user interfaces to input data we have Record Producers (Service Portal), Workspaces and Mobile. The interface we need to provide in this scenario is a Record Producer. 
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We should arrange the Choice Lists  according to our database infrastructure. So the first choice will be Manufacturer, then Vehicle and the last will be the Model. 
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A good practice is to include the option None. With this, our Choice Lists can be set as mandatory fields and we reduce the chance of receiving innacurate data.
                <br><br>

                    <img class="img-delta" src="assets/image/59_rp.png" height="70%" width="70%" alt="Record Producer" title="Record Producer">
<br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Did you see that we've created a field called Active in every table? If the process admin set a record as inactive in the back-end, we want to hide that option within the Record Producer Choice List. To to that, we need to use some code within our Record Producer variables like this:
                
                <pre>
javascript:'active=true'
</pre>                  
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This will retrieve only active records from the database.
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;When a Manufacturer is selected, we need to populate the Vehicle Choice List with the vehicles related to that selected Manufacturer. You'll need to configure your Vehicle Choice List with some code too:
                <br><br>
                <pre>
javascript:'active=true^manufacturer=' + current.variables.manufacturer
</pre>   
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Commenting the code: The first 'manufacturer' is the Vehicle's table column name which is a reference to the Manufacturer's table. The 'current.variables.manufacturer' will read the option the user selected in the RP Choice List named 'manufacturer'.
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You got the idea. Use the same logic for the Model Choice List.
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2) The Back-end 
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In the back-end the three fields, by default, retrieve all records from the tables. 
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Remember to keep it simple 
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Since the Vehicle should show available vehicles depending on the selected manufacturer, we can configure in the Cars table this dependency:
                
                <br><br>
                <img src="assets/image/77_vehicle.png" height="80%" width="80%" alt="Vehicle field" title="Vehicle field">
                <br>

                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Model should show available models depending on the selected Vehicle, then we can configure in the Cars table this dependency:
                
                <br><br>
                <img src="assets/image/78_model.png" height="80%" width="80%" alt="Vehicle field" title="Vehicle field">
                <br>

                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thanks for reading!
            </p>



            <p>
                __________<br>
                Do not consider the model efficiency. It was created just for educational purposes.
                <br><a href="sys_choice.php" target="_self">There's a table called sys_choice</a> but it isn't in the scope of this article.
            
                </br></br><a href="index.php?p=2" target="_self">Back</a>
                </p>




        </div>

</main>

<?php
require_once("footer.php");
