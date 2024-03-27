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

            <?php renderTitle('Car Insurance App - Part 6', 'Step by step demo: Creating the application menu and modules'); ?>

            
                
                
                <p>
                    
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Now that we have created our table, let's implement the Administrator persona.
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To achieve this, we will create:
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Navigation: an Administrator will have a specific module to access the records in the Vehicles table;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- A User Group: this group will be configured so that every time we need to give Administration privileges to a user, we simply add the user to this group.
                    <br>
                    
                    <br>
                    <h5>Step by step demo</h5>
                    
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/IawvthfsuBA?si=HV1twPPV87-Md9TF" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>

                    <br>
                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thanks for watching.
                    <br>

                </p>

                <br>

                <p>
                    <br>
                    <a href="lab.php?p=1" target="_self">Back</a>
                </p>

<!-- 
Part 5 Demo Lab 
Part 6 Demo Lab 
Part 7 Notifications 
Part 8 Dashboard 
Part 9 Load Data (Excel) 
Part 10 Integrations - Nenhum software e uma ilha isolada 
Part 11
-->
            
        </div>
        
</main>

<?php
require_once("footer.php");