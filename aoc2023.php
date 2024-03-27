<?php 
require_once("header.php");
require_once("menu.php");
require_once("funcoes.php");

?>

<main class="content">
    
        <div class="content text-content content-wrap">

            <?php renderTitle('Advent of Code', 'Try to solve programming puzzles using your programming skills'); ?>

                <p>
					
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://adventofcode.com/" target="_blank">Advent of Code</a> is an Advent calendar of small programming puzzles for a variety of skill sets and skill levels that can be solved in any programming language you like.
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Some ServiceNow developers get together every December to have fun solving these puzzles. It is not an official ServiceNow event but we have a slack channel called #advent-of-code and you are invited to give it a try. 
                    <br>
                    <br><h4>How to configure your computer to participate?</h4>
                    
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;There's no right or wrong answer since you can use any programming language. 
                    
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I'm using <a href="https://code.visualstudio.com/download" target="_blank">VSCode</a> as editor and <a href="https://docs.deno.com/runtime/manual/getting_started/installation" target="_blank">deno</a> to run my code. It shows the program output in the VSCode terminal.
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The sintaxe is as simple as: <b>deno run</b> "your file"
                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Suppose we have a file named day1.js with this line of code:
                    <br><br>
<pre>
console.log('Hello World'); 
</pre>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;When we run the program we see the output in the VSCode terminal as below:
                    <br><br>
                    <img src="assets/image/82_hello.png" height="100%" width="100%" alt="Hello World" title="Hello World">
                    <br>
                    <br>
                    <br><h4>Preparing the setup on a Mac </h4>
                    


                    
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://brew.sh/" target="_blank">Homebrew</a> is a package manager and it will be useful in this process.
                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1 - First let's install Homebrew using the bash command in the terminal:
                    <br><br>
<pre>
/bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"
</pre>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2 - When we see the screen below, press [ENTER] to continue
                    <br><br>
                    <img src="assets/image/83_installHomeBrew1.png" height="100%" width="100%" alt="Installing Homebrew 1" title="Installing Homebrew 1">
                    <br>

                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We can see the brew installation window.
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3 - Click on <b>Continue</b> as below:
                    <br><br>
                    <img src="assets/image/85_installHomeBrew.jpg" height="100%" width="100%" alt="Installing Homebrew 3" title="Installing Homebrew 3">
                    <br>

                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4 - Once the installation is finished, click on <b>Close</b> as below:
                    <br><br>
                    <img src="assets/image/86_installHomeBrew.jpg" height="100%" width="100%" alt="Installing Homebrew 4" title="Installing Homebrew 4">
                    <br>

                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5 - To get rid of the installer file, you can click on <b>Move to Bin</b> as below:
                    <br><br>
                    <img src="assets/image/87_installHomeBrew.jpg" height="100%" width="100%" alt="Installing Homebrew 5" title="Installing Homebrew 5">
                    <br>

                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6 - Let's go to the brew directory and then install deno.
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Type these commands in the terminal:
                    <br> <br>
<pre>
cd /opt/homebrew/bin 
</pre>
<pre>
brew install deno 
</pre>
                    
                    <img src="assets/image/84_installHomeBrew.jpg" height="100%" width="100%" alt="Installing Homebrew 2" title="Installing Homebrew 2">
                    <br>


                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We can update the PATH variable to include /opt/homebrew/bin so that we can run the commands in any folder.
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If you don't want to do it now, you already can use deno inside VSCode.
                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1 - Open your VSCode terminal and go to the deno directory:
                    <br><br>
<pre>
cd /opt/homebrew/bin 
</pre>
                    
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2 - Run your program informing the file path and the file name as the example:
                    <br><br>
<pre>
deno run "/filepath/day1.js"
</pre>                    

                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thanks for reading and happy learning!
                    <br>
                    
                    
                    

                    

                </p>

                
                        
                <p>
                    <br><br><a href="index.php?p=3" target="_self">Back</a>
                </p>


            
        </div>
        
</main>

<?php
require_once("footer.php");