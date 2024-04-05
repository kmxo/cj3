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

            <?php renderTitle('Car Insurance App - Part 1', 'Creating custom Apps, defining Personas and the database infrastructure - <i>May 5, 2024</i>'); ?>

            
                
                
                <p>
                    <br>In this Article series we will discuss about the ServiceNow <b>App Engine</b> module and its features.
                    
                    <br> 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Why do we need to develop an Application?</b>
                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;With so many Applications out there it is a fair question. 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If we are talking about Human Resources processes, we have the ServiceNow module HR to solve that kind of problems. 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If the process is related to Customer Service Management, we have the ServiceNow CSM module to help. 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;But what if your process is something so particular that there's no ServiceNow module to solve it?
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This is when the App Engine can help. It allows us to create custom applications.
                </p>

                <p>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>The Car Insurance company</b>
                     <br>
                     <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I created this fictional company about Car Insurance where the main process is controlled by the spreadsheet below.
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Different people with different titles can edit this document.
                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  

                    
                    <br>
                    <img src="assets/image/90_spreadsheet.png" height="80%" width="80%" alt="Spreadsheet" title="Spreadsheet">
                    <br>

                    <div class="div-clark">
                         <p><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>The Agent</b> 
                         <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A Car Insurance Agent is a person who sells, solicits, or negotiate insurance on behalf of a client for compensation.
                         <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Agent needs to inform specific fields in our spreadsheet: Client, Insurance Company, Vehicle, Car Plate and Chassis. 
                         </p>
                         <br>
                     </div>

<br>
                    <div class="div-clark">
                         <p><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>The Employee</b> 
                         <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;After the five fields are provided by an Agent, the Car Insurance Employee is a person who performs the risk analysis and decides to approve or reject the contract. 
                         <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In the current process the field is a Yes/No question called Approved. 
                         <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;It would be good to create another field so that the Employee can inform the reason behind the decision.
                         </p>
                         <br>
                     </div>

                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Current problems</b>
                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- The Employee does not know when there's a contract to be analyzed.
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Since it is a shared document within the company, people can delete information by accident.
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- There is a specific range or car models covered by the company. Since there's no way to prevent the Agent to inform a car model, when one model not covered is informed it is a waste of time because it will be identified later in the process. 
                    <br>

                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>How the development of an App could improve the process?</b>
                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To bring efficiency to the process, the benefits of developing a custom app will be:
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Only people entitled as Agents will be able to create contracts; 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- In a secure way, an Agent can edit a contract and will send to the Employee only when all required fields are fulfilled;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Once the contract is fulfilled by an Agent and sent to the Employee, it will not be available for the Agent anymore and it will be visible to Employees. For that we'll create a field called Status and it will start with the value "Under Construction", then other possible values will be "Approved" and "Rejected";
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- For compliance reasons, contracts with the status Approved or Reject will be protected so that nobody can edit them. The Employee will be able to consult those records as Historical Data at any time. 
                    
                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Automation and monitoring
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- The Employee will receive a Notification when a new contract is available for Risk Analysis; 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- The Employee will have a dashboard to monitor the number of: Contracts under construction, Contracts Approved, and Contracts Rejected. 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- To enforce data integrity we will implement a Persona called Administrator, who will mantain auxiliary tables like Vehicles.
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;It will prevent an Agent to enter information about a Vehicle not covered by the Insurance company. 

                    <br><br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Tables and Columns</b>
                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To store information we need tables and columns. 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;As we have already talked about the three different <b>Personas</b> and which <b>fields</b> each of them will handle, at this point we can design our database infrastructure: 
                        <br>
                        <br>

                    <br>
                    <img src="assets/image/91_database.png" height="60%" width="60%" alt="Database" title="Database">
                    <br>
<!--
                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In Part 2 we will talk about how to organize all the tasks in a visual way so that everyone can see what are the next steps. 
                    -->
                    <br> 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thanks for reading.

                <p>
                <br>
                <br><br><a href="index.php?p=4" target="_self">Back</a>
                </p>


            
        </div>
        
</main>

<?php
require_once("footer.php");