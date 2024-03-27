<?php 
require_once("header.php");
require_once("menu.php");
require_once("funcoes.php");

?>
    <style>
        #hp  {
        float: left;    
        margin: 0 15px 0 0;
        }

      .img-container {
        float: none;
        margin: 0 15px 0 0;
        border: 1px solid red;
        
      }
    </style>

<main class="content">
    
        <div class="content text-content content-wrap">

            <?php renderTitle('The community ranking system', 'The day I became a Mega Guru'); ?>

            
                
                
        
                <p>
					
                    <img src="assets/image/75_newranking.png" height="80%" width="80%" alt="Community ranking" title="Community ranking">
                    <br>
                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I received this notification telling me that now I'm a Mega Guru. Then I start thinking... how does this ranking system works? Do you know? Let's explore it together.
                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;First of all, I liked the prefixes' names. They are: Kilo, Mega, Giga and Tera.
                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The lowest is Kilo and the highest is Tera. Like the storage units, we have the order below.
                    <br>
                    <br>
                    <br>
                    
                    <img id="hp" src="assets/image/76_arrowup.png" height="10%" width="10%" alt="Prefixes" title="Prefixes">
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tera</div>    
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Giga</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mega</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kilo</div>
                        
                    <br>
                    <br>
                    <br>
                    <br>
                    <h5>Levels</h5>
                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;There are six levels and they are: Explorer, Contributor, Expert, Guru, Sage, and Patron as below. 
                    <br>
                    <br>
                    <br>
                    
                    <img id="hp" src="assets/image/76_arrowup.png" height="10%" width="10%" alt="Prefixes" title="Prefixes">
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Patron</div>   
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sage</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Guru</div> 
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Expert</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contributor</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Explorer</div>

                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We start as a Kilo Explorer and, while participating in the community we earn points to advance to Mega Explorer.
                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In each Level, we go from Kilo to Tera before advancing to the next one. With that in mind, we can count a total of 24 possible combinations:
                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;24 - Tera Patron
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;23 - Giga Patron
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;22 - Mega Patron
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;21 - Kilo Patron

                    <font color="green">
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;20 - Tera Sage
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;19 - Giga Sage
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;18 - Mega Sage
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;17 - Kilo Sage
                    </font>

                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16 - Tera Guru
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;15 - Giga Guru
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;14 - Mega Guru
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;13 - Kilo Guru

                    <font color="green">
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;12 - Tera Expert
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;11 - Giga Expert
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10 - Mega Expert
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;09 - Kilo Expert 
                    </font>

                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08 - Tera Contributor
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;07 - Giga Contributor
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;06 - Mega Contributor
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;05 - Kilo Contributor

                    <font color="green">
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;04 - Tera Explorer
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;03 - Giga Explorer
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;02 - Mega Explorer
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;01 - Kilo Explorer
                    </font>

                    <br>
                    <br>
                    <br>
                    <br>
                    <h5>Earning points to advance your Level</h5>
                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Different activities have different weights in order to give you points. 
                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The logic behind is the value that the activity bring to the community. These are the activities and respective weights from highest to lowest:
                    <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<li>Article & Blog Authoring
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<li>Accepted Solution Received
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<li>Helpful Received
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<li>Helpful Comments
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<li>Contributions, Message Views, Comments, Logins 
                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thanks for reading!


                    

                </p>

                <br>
                        
                <p>
                    <br><br><a href="index.php?p=2" target="_self">Back</a>
                </p>


            
        </div>
        
</main>

<?php
require_once("footer.php");