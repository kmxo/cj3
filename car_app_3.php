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
        width: 100%;
    }
    .img-clark {
        border: 1px solid #ddd;
        border-radius: 4px;
        padding: 5px;
        padding-left: 5px;
        width: 130px;
        float: right;
    }
    
</style>

<main class="content">
    
        <div class="content text-content content-wrap">

            <?php renderTitle('Car Insurance App - Part 3', 'Exploring user interfaces'); ?>

            
                
                
                <p>
                    
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In Part 2 we saw that each persona was able to do their job using the platform back-end. 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In order to allow your users to access the App functionalities, in the back-end we use the <b>Application menu</b> and <b>modules</b>.
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The application menu usually is your Application name. In our example the users can use the filter navigator typing <i>Car Insurance</i> to access the application modules. 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Each persona has access to different modules and this is what differentiates the personas. 
                    <br>
                    <br>
                    <h5>Persona: Agent</h5>

                    
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;When the Agent is logged in, he can see in the back-end: 
                    <br>

                    <br>
                    <img src="assets/image/100_menu_agent.png" height="100%" width="100%" alt="Menu Agent" title="Menu Agent">
                    <br>

                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The module "Proposals - Agent", only visible to Agents, is a list of records and contains records with Status "Under construction" and "Send to analysis" false. 
                    <br>
                    <br>
                    <h5>Persona: Employee</h5>

                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;When an Employee is logged in, the available modules are different as we can see:
                    <br>

                    <br>
                    <img src="assets/image/101_menu_employee.png" height="100%" width="100%" alt="Menu Employee" title="Menu Employee">
                    <br>

                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The module "Proposals - Employee", only visible to Employees, is a list of records and contains records with Status "Under construction" and "Send to analysis" true. 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This filter capability is easily configured when creating the modules and does not require the use of ACLs [1]. 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We talked about it <a href="br_before_query1.php" target="_blank">in this article</a> but now we have a better scenario to explain it.

                    <br>
                    <br>
                    <h5>Persona: Administrator</h5>
                    
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Our third persona - the Administrator - do not manage proposals so the only feature he has is the  Vehicle table maintenance: 
                    <br>

                    <br>
                    <img src="assets/image/102_menu_admin.png" height="100%" width="100%" alt="Menu Admin" title="Menu Admin">
                    <br>

                    <br>
                    <br>
                    
                    <h5>The Service Portal</h5>

                    
                    
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Another common User Interface is the Service Portal. Let's explore some interface examples.
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A Service Portal is comprised of different parts organized in a defined hierarchy. 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1) The first degree are the <b>pages</b>. 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2) Then each page has <b>containers</b>. 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3) And each container has <b>rows</b> and <b>columns</b>.
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4) Inside a column we have the <b>widgets</b>.
                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Inside the Page below, we can see a widget that shows records from our Proposal table. 
                </p>

                <p>
                                        
                    <br>
                    <img src="assets/image/97_sp_datatable.png" height="100%" width="100%" alt="Service Portal" title="Service Portal">
                    <br>


                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Impersonating the Car Insurange Agent</b>
                     <br>
                     <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We can simulate an Agent using the Service Portal to create a new proposal.
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;An Agent would see an interface like this:
                    
                    <br><br>
                    <img src="assets/image/98_sp_record_agent.png" height="80%" width="80%" alt="UX Agent" title="UX Agent">
                    <br>

                    
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Impersonating the Car Insurance Employee</b>
                        <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Similar to what happens in the back-end, the Agent can work on a proposal while the "Send to analysis" is not checked. Once this field is checked and the record Updated, it will be available to the Employee. 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Using the Service Portal, a logged in Employee can Approve or Reject a proposal and the interface can be similiar to this:

                    <br><br>
                    <img src="assets/image/99_sp_record_employee.png" height="80%" width="80%" alt="UX Employee" title="UX Employee">
                    <br>

                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Note that the security rules are valid here so the Employee can't edit information provided by the Agent. 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thanks for reading.
                    
                    <br>
                    
                </p>
                <br>
                <p>
                __________
                <br>[1] <a href="https://docs.servicenow.com/bundle/vancouver-platform-security/page/administer/contextual-security/concept/access-control-rules.html" target="_blank">Access Control List Rules</a> - ServiceNow 
                <br><a href="https://www.servicenow.com/products/service-portal.html" target="_blank">Service Portal</a> - ServiceNow

                </br>
                <br>
                <br>
                <a href="lab.php?p=1" target="_self">Back</a>
                </p>
            
        </div>
        
</main>

<?php
require_once("footer.php");