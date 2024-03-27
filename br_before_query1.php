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

            <?php renderTitle('Don\'t use a cannon to kill a mosquito', 'Filtering records before displaying to the user'); ?>



            <p>
                <h5>When to use heavy artillery?</h5>
                <br><br>


                  <img class="img-delta" src="assets/image/53_cannon.jpg" height="20%" width="20%" alt="A cannon killing a mosquito" title="A cannon killing a mosquito">



<br>
                 <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;One of the common functionalities of a Custom Application is to display a list of records.
                 <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;And sooner or later you will find the need to filter or sort this list.
                 <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;When that happens, one of the first solutions that comes to the Developer's mind is to create a Business Rule or even an ACL to accomplish the mission, but is this brute force really necessary?
                 <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;There is a saying that goes: Don't use a cannon to kill a mosquito. This means that we shouldn't waste heavy ammunition if the enemy is not dangerous.
                 <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bringing this thought into our context, if the data is not sensitive and there would be no problem if someone had access to it, we can use a simpler solution.
                 <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A simple way to solve the problem is to specify the filter directly in the module that the user has access.
                 <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;When clicking on the module that contains the filter, the search criteria is sent to the database and the result will be the filtered list.
            </p>
<br>




                <p>

                <br><br><a href="index.php?p=1" target="_self">Back</a>
                </p>



        </div>

</main>

<?php
require_once("footer.php");
