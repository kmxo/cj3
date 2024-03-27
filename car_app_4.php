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

            <?php renderTitle('Car Insurance App - Part 4', 'Software Maintenance is a broad activity'); ?>

            
                
                
                <p>
                    
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Our stakeholders decided that the version was ready to be deployed in Production. 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You worked with the Operations team and the Car Insurance Application was successfully deployed. Congrats!
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;What happens now?
                    <br>
                    
                    <br>
                    <h5>Software Maintenance</h5>

                    
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Our Car Insurance Application will evolve over time. By adding new functionalities and modifying others, it will grow more complex. 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;What can we do in order to reduce this complexity?
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Software maintenance includes error correction, enhancements of capabilities, removal of obsolete capabilities, and optimization. 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The platform has tools to help the developer in this mission.
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Let's explore one tool you can run to improve the quality of your software.
                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In the platform back-end you can find your App in the module <b>"My Company Applications"</b>:
                    <br>


                    <br>
                    <img src="assets/image/103_my_company_apps.png" height="100%" width="100%" alt="My Company Applications" title="My Company Applications">
                    <br>

                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Click on your App and scrow down. In the Related Links, you will find the tool "Scan Application"
                    <br>
                    <br>
                    <h5>Scan Application tool</h5>

                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Click on "Scan Application" to execute the tool
                    <br>

                    <br>
                    <img src="assets/image/104_related_links.png" height="100%" width="100%" alt="Related Links" title="Related Links">
                    <br>

                     
                    
                    
                    <br>
                    <br>
                    <h5>Scan Findings</h5>
                    
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A finding points to a component (Source column) that can be refactored in order to improve the quality of your software. 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Check column explains what can be improved.
                    <br>

                    <br>
                    <img src="assets/image/105_scan_result.png" height="100%" width="100%" alt="Scan result" title="Scan result">
                    <br>

                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Scan Application tool can be executed at any time. 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;It is a good practice to use this tool before moving a version to the test instance. 
                  

                    <br>
                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thanks for reading.
                    
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