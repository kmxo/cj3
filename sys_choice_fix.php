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

            <?php renderTitle('Refactoring an Application to avoid a direct reference to the Choice [sys_choice] table', 'Otherwise your end user can see a lot of sys_ids - <i>March 06, 2024</i>'); ?>

            <p>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In a <a href="sys_choice.php" target="_self">recent article</a> we discussed that it is not a good practice to create a reference field to the Choice [sys_choice] table. 
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Choice table is used internally by the platform and depending on the payload of an operation, for performance reasons the platform can decide that it is better to drop the table and insert all the values instead of perform updates on specific records. 
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;When we insert a new record in a table, a new sys_id is generated. If we have the Choice table as a reference to provide choices for a particular field in our table, these choices will be lost every time the platform decides to recreate the Choice table. 
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A simple way to avoid this problem is to create a field of <b>type Choice</b> which indirectly uses the Choice table but it is the right way, or we can create our own table to maintain the Application choices. 
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Recently I received the mission to do exactly this: create a private choice table for an Application. 
                
                <br>
                <br><h5>&nbsp;&nbsp;&nbsp;&nbsp;The problem</h5>
                
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A long time ago, the platform allowed a developer to choose the Choice table as a reference. 
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;As a consequence, old custom applications may have fields referencing the Choice table directly. 
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This custom application was already in Production, so I needed to fix this on the fly. 
                <br>
                <br>
                <br><h5>&nbsp;&nbsp;&nbsp;&nbsp;The solution</h5>
                
                
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;After a meeting with our ServiceNow Architect, we decided to break down the solution in three steps.
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;As the Tech Lead I delegated the step 1 to my best ServiceNow Developer, while assigning steps 2 and 3 to myself.
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Step 1) Create the new table, grant the proper permission and populate the records. [1]
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Table: choices 
                <br>
                <br>
    <table class="table">
    <thead>
      <tr>
        <th>Label</th>
        <th>Type</th>
        <th>Reference</th>
        <th>Display</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Inactive</td>
        <td>True/False </td>
        <td></td>
        <td>False</td>
      </tr>      
      <tr class="success">
        <td>Table</td>
        <td>String</td>
        <td></td>
        <td>False</td>
      </tr>
      <tr class="">
        <td>Element</td>
        <td>String</td>
        <td></td>
        <td>False</td>
      </tr>
      <tr class="success">
        <td>Label</td>
        <td>String</td>
        <td></td>
        <td>True</td>
      </tr>
      <tr class="">
        <td>Value</td>
        <td>String</td>
        <td></td>
        <td>False</td>
      </tr>
      <tr class="success">
        <td>Sequence</td>
        <td>Integer</td>
        <td></td>
        <td>False</td>
      </tr>
    </tbody>
  </table>
                   
                
                
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Step 2) Create a new reference field in your main table so that the referenced table now will be our own choice table. 
                <br>
                <br><br>

<table class="table">
    <thead>
      <tr>
        <th>Label</th>
        <th>Type</th>
        <th>Reference</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>NewField</td>
        <td>Reference</td>
        <td>choices</td>
      </tr>      
    </tbody>
  </table>                
                
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Step 3) Develop a Fix Script to copy existing choices within the records to the new field. 
                <br>
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The first idea that came to my mind was to match the Choice and choices tables with one thing I was sure they had in common: the value. 
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Within my main table, once I get the values stored in each record that refers the Choice table, I can select the sys_id of the corresponding record from my choices table. The sys_id from my choices table is exactly what I want to store in the new field I created in my main table.  
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The detail here was that in my main table these fields were not a simple reference, both were of type List. 
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;So what I need to do is:
                <br>
                

                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.1 Search each record in my main table;
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.2 For each record, generate an array containing a list of 'value' regarding the field that is a reference to the Choice table;
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.3 With this array of old values, search my table choices to generate a list of sys_Ids (list of records from my choices table);
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.4 Update my main table record with the list of sys_Ids obtained in step 3.3
                <br>
                <br>
                <br><h5>Final thoughts</h5>
                
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;As we can see in <a href="https://support.servicenow.com/kb?id=kb_article_view&sysparm_article=KB0813643" target="_blank">KB0813643</a> this is a problem of the past. Nowadays your corporate instance has a Business Rule [2] as a security measure. 
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;One great benefit of maintaining an internal choice table is that we can create a Data Administrator persona, who can use the platform back-end to deactivate/activate choices or create new ones without any deployment effort.
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;About the technical solution, since both field types were a List of records I was positive that I needed to create a list of sys_Ids to update each record at once. 
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;After creating your GlideRecord variable regarding the main table, remember to use the method setWorkflow(false). With this your Business Rules will not be triggered during the Fix Script execution. 

                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Another useful GlideRecord method when updating an entire table is called autoSysFields(false).  It is used to disable the update of system fields (Updated, Created, etc).
                
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Be aware that a new Fix Script is executed automatically in the moment a new App version is deployed. When we deploy an Application, the platform creates only the table structure and records are not moved. 
                
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In the deployment to the TEST instance, the Fix Script run and didn't update any record because it didn't find matches between my main table and the new choices table. 

                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;After the App deployment I asked my Operations team to import an XML file containing all the choices table records. After that we executed the Fix Script manually to populate the main table new field. 
                <br>

                
                <br>
                <br>
<pre>    
/*
    Carlos Camacho 
    Fix Script name: Fix choices on MainTable
    -------------------------------------------------
    Description:
        Populate the field u_new_field with correct values based on the field core_choice (type = List)
    -------------------------------------------------
    Debug or Execute:
    - camachoDebug: 
                    true: the script will not update any record. Shows sys_ids from existing choices; 
                    false: Do not show debug information and do update the main table new field that refers the App choices table.  

    Variables to replace: 
    - x_aaaa_carlos_maintable: table that contains the field ref to Choice and the new field ref to internal choices table;
    - core_choice: field name (main table) that is a reference (List) to the Choice table.
    - tbchoices: table to store the App choices.
    - u_new_field: field name (main table) that is a reference (List) to the App choices table. 
*/

var camachoDebug = true; 

var grMainTable = new GlideRecord("x_aaaa_carlos_maintable");
grMainTable.setWorkflow(false);
grMainTable.query();
var listArr = [];

while (grMainTable.next()) {

    if (camachoDebug)
       gs.info(grMainTable.number);

    var old_choices = grMainTable.core_choice ? grMainTable.core_choice : "";
    listArr = [];

    if (old_choices) {

        old_choices = old_choices.split(",");

        for (var i = 0; i < old_choices.length; i++) {
            var grOldChoice = new GlideRecord("sys_choice");
            grOldChoice.addQuery('sys_id', old_choices[i]);
            grOldChoice.setLimit(1);
            grOldChoice.query();
            if (grOldChoice.next()) {
                listArr.push(grOldChoice.getValue('value'));
            }
        }

        if (camachoDebug)
           gs.info('OldValues: ' + listArr.toString().split(',') );

        var grNewChoice = new GlideRecord("tbchoices");
        grNewChoice.addEncodedQuery('valueIN' + listArr.toString().split(','));
        grNewChoice.query();
        var newListArr = [];

        while (grNewChoice.next()) {
           newListArr.push(grNewChoice.getValue('sys_id'));
        }

        if (camachoDebug) {

            gs.info('NewValues: ' + newListArr.toString().split(',') );

        } else {

            grMainTable.setValue('u_new_field', newListArr.join(',') );
            grMainTable.update();

        }

    }

}
</pre>

                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="blue">@Carlos Camacho</font>  I have found this scenario to fix one of my Apps and my field is not a <b>List</b> but a <b>Reference</b> to the Choice table.
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No problem, I've got you covered!
                <br>
                <br>

                <pre>    
/*
    Carlos Camacho 
    Fix Script name: Fix choices on MainTable
    -------------------------------------------------
    Description:
        Populate the field u_new_field with correct values based on the field core_choice (type = Reference)
    -------------------------------------------------
    Debug or Execute:
    - camachoDebug: 
                    true: the script will not update any record. Shows sys_ids from existing choices; 
                    false: Do not show debug information and do update the main table new field that refers the App choices table.  

    Variables to replace: 
    - x_aaaa_carlos_maintable: table that contains the field ref to Choice and the new field ref to internal choices table;
    - core_choice: field name (main table) that is a reference (Reference) to the Choice table.
    - tbchoices: table to store the App choices.
    - u_new_field: field name (main table) that is a reference (Reference) to the App choices table. 
*/

var camachoDebug = true; 

var grMainTable = new GlideRecord("x_aaaa_carlos_maintable");
grMainTable.setWorkflow(false);
grMainTable.query();
var listArr = [];

while (grMainTable.next()) {

    if (camachoDebug)
       gs.info(grMainTable.number);

    var old_choice = grMainTable.core_choice ? grMainTable.core_choice : "";

    if (old_choice) {

        var grOldChoice = new GlideRecord("sys_choice");
        grOldChoice.addQuery('sys_id', old_choice);
        grOldChoice.setLimit(1);
        grOldChoice.query();
        if (grOldChoice.next()) {
            var oldValue = grOldChoice.getValue('value');
        }


        if (camachoDebug)
           gs.info('OldValue: ' + oldValue);

        var grNewChoice = new GlideRecord("tbchoices");
        grNewChoice.addQuery('value', oldValue);
        grNewChoice.query();

        if (grNewChoice.next()) {
           var newValue = grNewChoice.getValue('sys_id');
        }

        if (camachoDebug) {

            gs.info('NewValues: ' + newValue );

        } else {

            grMainTable.setValue('u_new_field', newValue);
            grMainTable.update();

        }

    }

}
</pre>

<br>
<iframe width="560" height="315" src="https://www.youtube.com/embed/KX6S3dcKPKA?si=sj-d_6OW4mo3Rkof" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
<br>


                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thanks!
            </p>



            <p>
                __________
                <br>[1] I instructed my colleague to create the records with the same <b>value</b> existing within the Choice [sys_choice] table.
                <br>[2] Business rule "Prevent Reference to Choice [sys_choice]"
                <br>See <a href="https://support.servicenow.com/kb?id=kb_article_view&sysparm_article=KB0813643" target="_blank">KB0813643</a> for reference.
                
                <br>This article was featured in the <a href="https://www.linkedin.com/pulse/bean-done-dcs-release-creatorcon-content-latte-more-4qj9e/?trackingId=bSZRrN4xRKe%2Bn%2F7SV44GEA%3D%3D" target="_blank">Community Café Newsletter</a>.
                <br>
      <!--      <br>
                <a href="assets/download/glitch.zip" target="_blank">
                   <img id="rabbit" src="assets/image/rabbit.png" height="5%" width="5%" alt="White Rabbit" title="White Rabbit">
                </a> -->
                
                </br></br><a href="index.php?p=3" target="_self">Back</a>
                </p>




        </div>

</main>

<?php
require_once("footer.php");
