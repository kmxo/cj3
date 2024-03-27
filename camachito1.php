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
        width: 400px;
        float: left;
    }
    
</style>

<main class="content">
    
        <div class="content text-content content-wrap">

            <?php renderTitle('Demo Lab to acquire Camachito One', "A dedicated MID Server for our research projects - <i>April 1, 2024</i>"); ?>

            
                
                
                <p>
                <br>
                    <h5>Say hello to Camachito One!</h5>
                    <br>
                    <img class="img-clark" src="assets/image/117_camachito_one.jpg" height="30%" width="30%" alt="Camachito One" title="Camachito One"></a>
                    
                    
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Camachito One is a dedicated MID Server to our Demo Lab. 
                    
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In this introductory article I'll talk about his first day at home so you can know him a little bit better.
                    <br> 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>1 - Configuration</b> 
                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dell Inspiron 15 5547 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Processor: Intel Core i7 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Memory: 16GB RAM 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hard disk: 1TB SSD
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Operating System: Windows 10 Home Single Language

                    <br> 
                    <br> 
                    <br> 
                    <br> 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>2 - Purpose </b> 
                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This MID Server will be used for educational purposes only. 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Some characteristics and even the operating system are not designed for a corporate environment as we will discuss here. 

                    <br> 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>3 - How to access the MID Server from my main laptop </b> 
                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In a real scenario, MID Servers most of the time are virtual machines. The reason behind this statistic as you can imagine is the cost. 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If we have 100 virtual machines it will be way cheaper than maintaining 100 Desktop Servers.
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Since we want our MID Server to be as similar as possible to a real scenario, let's suppose Camachito One is a virtual machine so the only way to have access to it would be by establishing a remote connection. And here my problems began.
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The operating System - Windows 10 Single Home - does not support remote connections natively. I don't give up easily, so I did research to understand how to solve this problem. 

                    <br> 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>4 - Installing TightVNC </b> 
                    <br>
                    <br>
                    <img src="assets/image/121_vnc.png" height="80%" width="80%" alt="TightVNC Software" title="TightVNC Software"></a>
                    

                    <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This is a free open source Remote Desktop software and it was everything I was looking for.
                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I downloaded the Installer for Windows (64-bits). A simple double-click over the downloaded file started the installation.

                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Here you will find the <i>Next Next Finish</i> installer. You can accept the recommended options and it will be good enough.
                    <br>

                    <br>
                    <img src="assets/image/122_installer.png" height="50%" width="50%" alt="TightVNC Setup" title="TightVNC Setup"></a>
                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;During the process you will create a (max) 8-digit password that will be used later. Please write it down and do not forget it.
                    <br>

                    <br>
                    <img src="assets/image/123_password.png" height="50%" width="50%" alt="TightVNC Setup" title="TightVNC Setup"></a>
                    

                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;After the installation is finished, your system has a service up and running to provide the remote access:
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    <br>
                    
                    <img src="assets/image/124_service.png" height="100%" width="100%" alt="Windows service" title="Windows service"></a>
                    

                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Now we can go to our main machine to continue from there. 
                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>5 - Installing a Remote Desktop Viewer (Mac version)</b>
                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In the App Store I searched for “Remote Ripple” and installed it. 
                    <br>
                    <br>
                    
                    <img src="assets/image/125_riple.png" height="50%" width="50%" alt="Apple Store" title="Apple Store"></a>
                    

                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>5.1 Configuring the remote connection </b>
                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;When we open the software there is a button called [New connection] 
                    <br>
                    <br>
                    <img src="assets/image/126_new.png" height="30%" width="30%" alt="New connection" title="New connection"></a>
                    

                    <br>

                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To see a list of IPs within your local network, you can open a terminal and type: 
                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>arp -a [Enter]</b>
                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;With this I discovered the Camachito One IP address to provide in the Host field. 
                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You can leave the Port field blank. 
                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Define a name for your connection and click on the [Connect] button. 
<br>
                    <br>
                    <img src="assets/image/127_new_ip.png" height="80%" width="80%" alt="IP address" title="IP address"></a>
                    

                    
                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Do you remember the password we wrote down while installing the software in our MID Server?
                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;After clicking on the [Connect] button we need to provide that password and click [Ok] like below.

                    <br>
                    <br>
                    <img src="assets/image/128_credentials.png" height="60%" width="60%" alt="Credentials" title="Credentials"></a>
                    
                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In a future article we can configure our MID Server remotely. This is super cool, isn't it? 
                    
                    <br>
                    <br>
                    <img src="assets/image/129access.png" height="60%" width="60%" alt="Remote Access" title="Remote Access"></a>
                    
                    
                    
                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thanks for reading!








                    




                    <br>

                    
                    
                                        




                    
                    

                </p>

                <br>

                <p>
                
                
                <a href="index.php?p=4" target="_self">Back</a>
                </p>


            
        </div>
        
</main>

<?php
require_once("footer.php");