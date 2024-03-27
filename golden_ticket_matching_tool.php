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

            <?php renderTitle('Golden Ticket matching tool', 'featured by JaceNow Youtube channel'); ?>



            <p>
                
                

 

                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<cite>"Alone, we can do so little; Together, we can do so much"</cite> – Helen Keller 
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please let me share with you a story based on true events.
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Simon Hendery <a href="https://www.linkedin.com/posts/simonhendery_servicenow-know23-servicenowcommunity-activity-7067931956381978624-bzx4?utm_source=share&utm_medium=member_desktop" target="_blank">shared his thoughts</a> about having a matching tool when Golden Ticket's owners could donate it in case they don't have someone in mind.
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In the mentioned post, Simon asked the developer community for help. When I read it I immediately thought... <font color='green'><b>YES!</b></font>
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;When I said to Simon that I've developed the App, it was like throwing a rock into a river. I could see a ripple moving away from where the rock landed:
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1) Just a few days online and the tool found the first match. Cheers Simon! The idea was yours! 
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2) Jace Benson posted about it spreading the idea:
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<iframe src="https://www.linkedin.com/embed/feed/update/urn:li:share:7068824921124073472" height="565" width="504" frameborder="0" allowfullscreen="" title="Embedded post"></iframe>
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3) Allen Andreas asked about the statistics and the section <a href="assets/image/62_golden_tickect_04.png" target="_blank">Our Numbers</a> was implemented. Now everyone can see the tool numbers in real-time.
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4) The tool was featured in JaceNow Youtube channel. Thanks Jace!
                <br>
                <br>

                    <a href="https://www.youtube.com/@JaceNow" target="_blank"><img class="img-delta" src="assets/image/60_news_with_jace.png" height="50%" width="50%" alt="JaceNow" title="JaceNow"></a>
<br>
<br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Analysing the solution's infrastructure</b> 
                <br>
                <br><br>

                    <img class="img-delta" src="assets/image/61_explained.png" height="70%" width="70%" alt="Infrastructure" title="Infrastructure"></a>

                <br><br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1) The User Interface 
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Both the donor and the learner access the User Interface where they can provide name, email and a message.
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;For data integrity reasons, we don't allow a user to register the same e-mail twice.   
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fully responsive, the form can be accessed by any device. We also use SSL (Secure Sockets Layer) to encrypt the information between the User Interface and our website.
                <br>
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2) The Database layer  
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;When the data is submitted, it is stored in a table. We have a flag to identify if the user was already matched or not. 
                <br>
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3) Scheduled Job 
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We've created a scheduled job that runs in a daily basis.
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The job query the database and verify the amount of donors and learners who contains the flag "not matched". 
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If we identify that there are one or more donors and learners not matched, the service match them preparing a record in a new table.
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The match rule is a simple FIFO (First In, First Out) algorithm. When the form is submitted by the user, we store the date and time. Our algorithm order the records by date and time and relates the first (oldest) available donor with the first (oldest) available learner. These two records are then flagged as "matched" and the algorithm keep looking for the next pair of records (donor x learner) available. 
                <br>
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4) Sending the E-mail  
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We've created a second scheduled job that now can query a list of prepared matches. If any, this service sends an email to each match informing the donor and learner contact information so they can connect and proceed with the donation process.
                <br>
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thank you everyone. 
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <br>
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Screenshots  
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <br><a href="assets/image/62_golden_tickect_01.png" target="_blank">
                          <img class="img-delta" src="assets/image/62_golden_tickect_01.png" height="20%" width="20%" alt="About" title="About"></a>
                    </a>
                    <a href="assets/image/62_golden_tickect_02.png" target="_blank">
                          <img class="img-delta" src="assets/image/62_golden_tickect_02.png" height="20%" width="20%" alt="Form to ask for a ticket" title="Form to ask for a ticket"></a>
                    </a>
                    <a href="assets/image/62_golden_tickect_03.png" target="_blank">
                          <img class="img-delta" src="assets/image/62_golden_tickect_03.png" height="20%" width="20%" alt="Form to donate your ticket" title="Form to donate your ticket"></a>
                    </a>
                    <a href="assets/image/62_golden_tickect_04.png" target="_blank">
                          <img class="img-delta" src="assets/image/62_golden_tickect_04.png" height="20%" width="20%" alt="Our Numbers" title="Our Numbers"></a>
                    </a>
                    <a href="assets/image/62_golden_tickect_05.png" target="_blank">
                          <img class="img-delta" src="assets/image/62_golden_tickect_05.png" height="20%" width="20%" alt="Disclaimer" title="Disclaimer"></a>
                    </a>

            </p>



            <p>

                __________<br>
                <a href="https://www.servicenow.com/company/media/press-room/riseup.html?state=seamless" target="_blank">RiseUp with ServiceNow program</a>.
                <br>
                </br></br><a href="index.php?p=2" target="_self">Back</a>
                </p>




        </div>

</main>

<?php
require_once("footer.php");
