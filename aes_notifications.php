<?php 
require_once("header.php");
require_once("menu.php");
require_once("funcoes.php");

?>

<main class="content">
    
        <div class="content text-content content-wrap">

            <?php renderTitle('App Engine Studio and Team notifications', 'What if I tell you that you can send a notification to your manager when an event occurs in your custom app?'); ?>

            
                
                
                <p>
                We sent to a production instance a custom app where employees can inform webinars they attended, courses, ticket numbers that they solved recently, certifications, and so on.
                    <br>Each semester managers evaluate that information in order to pay bonuses.
                    <br>A manager with only one team can have five to twelve employees. And sometimes a manager can have two or more teams.
                    <br>When each employee sends the form, his/her manager needs to validate it so the system calculates a number of points.
                    <br>
                    <br>The problem:
                    <br>Managers don't want to access the platform every day to see if there are submissions to validate. It would be better to receive a smartphone notification when there were pending records.
                    <br>
                    <br>The solution:
                    <br>To send notifications to their smartphones we created a Flow using App Engine Studio.
                    <br>When a manager receives a notification, we make sure that there is an employee record to validate in the platform.
                </p>

                <p>
                    <h5>What are the steps to accomplish this integration?</h5>
                    <ol>
                        <li>In Microsoft Teams we are going to create a webhook, which is a web address to be used in the next step;
                        <li>Using the App Engine Studio we will create a Flow that will be triggered when the employee saves the record. When the record is saved, we will send a message to the Teams channel.
                    </ol>
                </p>

                <p>
                    <h5>1) Creating the webhook</h5>
                    1.1) A team can have many channels. In your corporate Microsoft Teams, choose a channel to be used, and in the top right corner click on the three points (more options) icon;<br>
                    1.2) Click on Connectors.
                    <br>
                    <br>
                    <img src="assets/image/04_teams1.png" height="60%" width="60%" alt="install connector" title="install connector">
                    <br>
                    <br>
                    1.3) In the "Incoming Webhook" connector, click on [Add].
                    <br>
                    <br>
                    <img src="assets/image/05_teams2.png" height="50%" width="50%" alt="select the connector" title="select the connector">
                    <br>
                    <br>
                    1.4) In the configuration screen, inform:
                    <br> Any name for your webhook;
                    <br> (Optional) You can click on [create] if you like to upload an image as an icon for your webhook. If you do that, every message will contain that image.
                    <br>
                    <br>
                    <img src="assets/image/06_teams3.png" height="50%" width="50%" alt="configuring the connector" title="configuring the connector">
                    <br>
                    <br>
                    1.5) This step is done! Copy the Webhook address because we will use it in step 2.
                    <br>
                    <br>
                    <img src="assets/image/07_teams4.png" height="50%" width="50%" alt="webhook address" title="webhook address">
                    <br>
                    <br>

                </p>

                <p>
                    <h5>2) Creating a Flow</h5>
                    
                    Objective:
                    <br>Every time an employee creates a record in your App table, you will send a Teams notification to his/her manager.
                    
                    <br>In the Automation of your Application, create a Flow.
                    <br>
                    <br>2.1) The unique mandatory field is the Flow name. Click on [Submit]
                    <br>2.2) For the trigger, select Record > Created
                    <br>2.3) Select your Table and click [Done]
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Your Flow name;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A description about what the flow does;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Application: Select your app;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Protection: -- None -- 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Run As: User who initiates session 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Click on [Submit]
                    <br>
                    <br>

                    <img src="assets/image/08_teams.png" height="50%" width="50%" alt="flow properties" title="flow properties">
                    <br>
                    <br>
                    2.4) For the Trigger, select Record > Created
                    
                    <br>
                    <br>
                    <img src="assets/image/09_teams.png" height="50%" width="50%" alt="defining the trigger" title="defining the trigger">
                    <br>
                    <br>
                    2.5) Select your Table and click [Done]
                    <br>
                    <br>
                    <img src="assets/image/10_teams.png" height="50%" width="50%" alt="select your table" title="select your table">
                    <br>
                    <br>
                    2.6) In the ACTIONS section, choose [Post a Message]. The remaining parameters will be:
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Webhook URL:</b> Use that copied in step 1.
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Title:</b> Inform your notification title. 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Message:</b> Type the message to send. You can use fields from the record being created.
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Click on <b>[Test]</b> to see what your notifications will look like.
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;When you are happy with the look and feel of your message, click on <b>[Activate]</b> to activate your Flow.
                    <br>
                </p>

                
                <p>
				
				
                <br><br><a href="index.php?p=1" target="_self">Back</a>
                </p>

            
        </div>
        
</main>

<?php
require_once("footer.php");