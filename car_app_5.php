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

            <?php renderTitle('Car Insurance App - Part 5', 'Step by step demo: Creating a new Application'); ?>

            
                
                
                <p>
                    
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In this video we will create the Car Insurance App. 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We saw previously that in addition to the Persona definition, we have to have a good idea about what data we need to store.
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The main functionality for our Administrator will be the Vehicle table maintenance so before implementing the Administrator persona, in this Demo Lab let's create the table. 
                    <br>
                    
                    <br>
                    <h5>Step by step demo</h5>

                    
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/Cf-W6FYZoDI?si=jIZKtddSTUd3B6Vg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
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
            
        </div>
        
</main>

<?php
require_once("footer.php");