<?php 
require_once("header.php");
require_once("menu.php");
require_once("funcoes.php");

?>

<style>
    .div-clark {
        background-color: #fff;
        border: 3px solid grey;
        border-radius: 5px;
        border-style: inset;
        width: 100%;
    }
    .img-clark {
        border: 0px solid #ddd;
        border-radius: 4px;
        padding: 5px;
        padding-left: 5px;
        width: 180px;
        float: left;
    }
    
</style>

<main class="content">
    
        <div class="content text-content content-wrap">

            <?php renderTitle('Welcome to the Demo Lab', "The Laboratory door is open and entry is permitted - <i>January 30, 2024</i>"); ?>

            
                <p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;What is it about?
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Carlos Camacho has launched a small experiment to present content regarding Custom Applications and this special collection was named Demo Lab.
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Comprised of short articles and small videos, the Demo Lab aims to demonstrate the powerful capabilities of App Engine when a business problem requires a custom solution.
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Using PBDR (Plan, Build, Deliver, Run), we have Product Backlog, Personas, Data Structure, User Interfaces and, for the Security Layer, we define User Groups and Roles. And we also have two exclusive videos showing our development team in action!
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="lab.php" target="_self">Welcome to the Demo Lab!</a>
                    <br> 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Demo Lab was featured in the Community Caf&eacute; Newsletter. 
                    <br>
                    <br>
                    <a href="https://www.linkedin.com/posts/activity-7169031088277835777-jRLF?utm_source=share&utm_medium=member_desktop" target="_blank">
                       <img src="assets/image/116_newsletter.png" height="30%" width="30%" alt="The Community Cafe" title="The Community Cafe">
                    </a>
                </p>
                

                <p>
                    
                    <br>
                    <a href="index.php?p=3" target="_self">Back</a>
                </p>


        </div>
        
</main>

<?php
require_once("footer.php");