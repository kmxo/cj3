<?php
require_once("header.php");
require_once("menu.php");
?>
<style>
    .div-clark {
        background-color: #EBEBEB;
        border: 3px solid grey;
        border-radius: 5px;
        border-style: inset;
        
        
    }
    .img-clark {
        border: 1px solid #ddd;
        border-radius: 4px;
        padding: 5px;
        padding-left: 5px;
        width: 215px;
        float: left;
    }
    
</style>

<main class="content">

        <div class="content text-content content-wrap">

                <p>

                    <h5>Welcome to the Demo Lab</h5>
                    <br>
                    <div class="div-clark">
                        
                        
                        <p><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Demo Lab is a space where we will create experiments to demonstrate the platform's features.
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I hope you enjoy!
                            <br>
                         </p>
                     </div>
                     <br>


                    <a href="lab_car_app_1.php" target="_self">Car Insurance App - Part 1</a> 
                    <br>Creating custom Apps, defining Personas and the database infrastructure
                    <br>
                    <br>

                    <a href="lab_sys_choice_fix.php" target="_self">Refactoring an Application to avoid a direct reference to the Choice [sys_choice] table</a>
                    <br>Otherwise your end user can see a lot of sys_ids
                    <br>
                    <br>

                    <a href="lab_camachito1.php" target="_self">Demo Lab to acquire Camachito One</a>
                    <br>A dedicated MID Server for our research projects
                    <br>
                    <br>

                    <br>
                    
                    
                    

                </p>

        </div>

</main>

<?php
require_once("footer.php");
