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

            <?php renderTitle('Car Insurance App - Part 2', 'The Kanban board workflow and User Stories'); ?>

            
                
                
                <p>
                    
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In Part 1 we saw two important things to think about when starting a development project: Personas and the database. 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Once we have a clear definition of <b>who</b> is going to use the application and <b>what</b> they can do, we can start implementing our functionalities. 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;One great way to visualize the tasks a team need to implement is the Kanban board.
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In this example I used a digital tool but a Kanban board can be set on a blackboard or on a wall.
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The idea is to show the tasks you have not started, tasks in progress and tasks that are done.
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;From the developer perspective, each Kanban card is what we call User Story - it is a feature to be implemented. 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Kanban is not used only by the IT department, it can be used by any professional or project. When a project is not related to IT, we say that each Kanban card is a work item.
                </p>

                <p>
                                        
                    <br>
                    <img src="assets/image/92_kanban.png" height="70%" width="70%" alt="Kanban" title="Kanban">
                    <br>


                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Card 1 - Database infrastructure</b>
                     <br>
                     <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You can use App Engine Studio or Studio to create your tables. 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Our database diagram in the previous article was a little bit formal, but it translates to ServiceNow like this:
                    
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- A field type boolean is equivalent to: True/False
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- A field type char is equivalent to: String
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- The field Status will be of type: Choice
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We start by creating tables that does not have reference fields. In our case we start by creating the Vehicle table.
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The idea of the field Active in the Vehicle table is that, once an Admin change its value to False, it will not be available when the Agent is creating a record in the Proposal table. 

                    <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Card 2 & 4 - Persona: Insurance Agent</b>
                     <br>
                     <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Before presenting a design to the stakeholders, the developer should know in advance what order/position the fields should be displayed.
                     <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Are there mandatory fields? A field should be hidden/shown depending on some condition? 
                     <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To simplify things here suppose there are no mandatory fields and all fields (except for the status_reason) can be shown to the Agent. Our screen layout will look like this:

                    <br><br>
                    <img src="assets/image/93_design_agent.png" height="80%" width="80%" alt="UX Agent" title="UX Agent">
                    <br>

                    
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Card 5 - Persona: Car Insurance Employee</b>
                        <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Agent can work on a proposal while the "Send to analysis" is not checked. Once this field is checked and the record Updated, it will be available only to the Employee. 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;When the Employee is logged in, the design presented will look like this:

                    <br><br>
                    <img src="assets/image/94_design_employee.png" height="80%" width="80%" alt="UX Employee" title="UX Employee">
                    <br>

                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Note that the Employee can't edit information provided by the Agent. The only available field is the Status reason. The buttons <b>Approve</b> and <b>Reject</b> are also available.
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Once the Employee approves or rejects the proposal, it becomes historical data and the Employee now can only consult the record:

                    <br><br>
                    <img src="assets/image/95_approved.png" height="80%" width="80%" alt="UX Historical data" title="UX Historical data">
                    <br>
                    
                    
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Card 6 - Persona: Admin</b>
                <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;And now let's see the screen design for a logged in Administrator.
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Administrator can maintain the Vehicle table by editing existing records and creating new ones.

                    <br><br>
                    <img src="assets/image/96_admin.png" height="80%" width="80%" alt="UX Admin" title="UX Admin">
                    <br>

                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;With this we have an example of how a workflow process can be implemented. 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We have a Persona called Agent who can create proposals within the system. 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A second Persona representing the Car Insurance Employee is responsible for the approval phase. 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We also have a third Persona - the Administrator - who can maintain system parameters like the Vehicle table. 
                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Each Persona performs different activities within the system. They have well-defined capabilities and facilitate the improvement of this process by allowing us to automate and develop new functionalities.
                    <br> 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Another benefit of ServiceNow custom applications is to avoid <a href="https://en.wikipedia.org/wiki/Shadow_IT" target="_blank">shadow IT</a>. Now the Car Insurance company knows everything about this process: how it works, who carries it out and the revenue it generates.
                    <br> 
                    
                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thanks for reading.
                    
                    <br>
                    
                </p>
                <br>
                <p>
                __________
                
                <br><a href="https://www.youtube.com/watch?v=iVaFVa7HYj4" target="_blank">What is Kanban?</a> by Max Rehkopf
                <br><a href="https://en.wikipedia.org/wiki/Shadow_IT" target="_blank">Shadow IT</a> - Wikipedia

                </br>
                <br>
                <br>
                <a href="lab.php?p=1" target="_self">Back</a>
                </p>

        </div>
        
</main>

<?php
require_once("footer.php");