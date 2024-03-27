<?php
require_once("header.php");
require_once("menu.php");

try {
    $pdo = require 'connect.php';
    
    $sql = 'SELECT id, title, subtitle, link, data FROM kmxo_artic ORDER BY id';
    
    $cont = 0;

    foreach ($pdo->query($sql) as $row) {
        $cont += 1;

        //Page 1
        if ($cont == 1) {

            $title1 = $row['title'];
            $subtitle1 = $row['subtitle'];
            $link1 = $row['link'];
        }
        if ($cont == 2) {

            $title2 = $row['title'];
            $subtitle2 = $row['subtitle'];
            $link2 = $row['link'];
        }
        if ($cont == 3) {

            $title3 = $row['title'];
            $subtitle3 = $row['subtitle'];
            $link3 = $row['link'];
        }
        if ($cont == 4) {

            $title4 = $row['title'];
            $subtitle4 = $row['subtitle'];
            $link4 = $row['link'];
        }
        if ($cont == 5) {

            $title5 = $row['title'];
            $subtitle5 = $row['subtitle'];
            $link5 = $row['link'];
        }
        if ($cont == 6) {

            $title6 = $row['title'];
            $subtitle6 = $row['subtitle'];
            $link6 = $row['link'];
        }
        if ($cont == 7) {

            $title7 = $row['title'];
            $subtitle7 = $row['subtitle'];
            $link7 = $row['link'];
        }
        if ($cont == 8) {

            $title8 = $row['title'];
            $subtitle8 = $row['subtitle'];
            $link8 = $row['link'];
        }

        //Page 2
        if ($cont == 9) {

            $title9 = $row['title'];
            $subtitle9 = $row['subtitle'];
            $link9 = $row['link'];
        }
        if ($cont == 10) {

            $title10 = $row['title'];
            $subtitle10 = $row['subtitle'];
            $link10 = $row['link'];
        }
        if ($cont == 11) {

            $title11 = $row['title'];
            $subtitle11 = $row['subtitle'];
            $link11 = $row['link'];
        }
        if ($cont == 12) {

            $title12 = $row['title'];
            $subtitle12 = $row['subtitle'];
            $link12 = $row['link'];
        }
        if ($cont == 13) {

            $title13 = $row['title'];
            $subtitle13 = $row['subtitle'];
            $link13 = $row['link'];
        }
        if ($cont == 14) {

            $title14 = $row['title'];
            $subtitle14 = $row['subtitle'];
            $link14 = $row['link'];
        }
        if ($cont == 15) {

            $title15 = $row['title'];
            $subtitle15 = $row['subtitle'];
            $link15 = $row['link'];
        }
        if ($cont == 16) {

            $title16 = $row['title'];
            $subtitle16 = $row['subtitle'];
            $link16 = $row['link'];
        }

        //Page 3
        if ($cont == 17) {

            $title17 = $row['title'];
            $subtitle17 = $row['subtitle'];
            $link17 = $row['link'];
        }
        if ($cont == 18) {

            $title18 = $row['title'];
            $subtitle18 = $row['subtitle'];
            $link18 = $row['link'];
        }
        if ($cont == 19) {

            $title19 = $row['title'];
            $subtitle19 = $row['subtitle'];
            $link19 = $row['link'];
        }
        if ($cont == 20) {

            $title20 = $row['title'];
            $subtitle20 = $row['subtitle'];
            $link20 = $row['link'];
        }
        if ($cont == 21) {

            $title21 = $row['title'];
            $subtitle21 = $row['subtitle'];
            $link21 = $row['link'];
        }
        if ($cont == 22) {

            $title22 = $row['title'];
            $subtitle22 = $row['subtitle'];
            $link22 = $row['link'];
            $data22 = $row['data'];
        }
        if ($cont == 23) {

            $title23 = $row['title'];
            $subtitle23 = $row['subtitle'];
            $link23 = $row['link'];
            $data23 = $row['data'];
        }
        if ($cont == 24) {

            $title24 = $row['title'];
            $subtitle24 = $row['subtitle'];
            $link24 = $row['link'];
            $data24 = $row['data'];
        }

        //Page 4
        if ($cont == 25) {

            $title25 = $row['title'];
            $subtitle25 = $row['subtitle'];
            $link25 = $row['link'];
            $data25 = $row['data'];
        }
        if ($cont == 26) {

            $title26 = $row['title'];
            $subtitle26 = $row['subtitle'];
            $link26 = $row['link'];
            $data26 = $row['data'];
        }
        if ($cont == 27) {

            $title27 = $row['title'];
            $subtitle27 = $row['subtitle'];
            $link27 = $row['link'];
            $data27 = $row['data'];
        }
        if ($cont == 28) {

            $title28 = $row['title'];
            $subtitle28 = $row['subtitle'];
            $link28 = $row['link'];
            $data28 = $row['data'];
        }
        if ($cont == 29) {

            $title29 = $row['title'];
            $subtitle29 = $row['subtitle'];
            $link29 = $row['link'];
            $data29 = $row['data'];
        }
        if ($cont == 30) {

            $title30 = $row['title'];
            $subtitle30 = $row['subtitle'];
            $link30 = $row['link'];
            $data30 = $row['data'];
        }
        if ($cont == 31) {

            $title31 = $row['title'];
            $subtitle31 = $row['subtitle'];
            $link31 = $row['link'];
            $data31 = $row['data'];
        }
        if ($cont == 32) {

            $title32 = $row['title'];
            $subtitle32 = $row['subtitle'];
            $link32 = $row['link'];
            $data32 = $row['data'];
        }


    }

} catch (PDOException $e) {

    //print "Error: " . $e->getMessage();
}
?>

<main class="content">

        <div class="content text-content content-wrap">

            <?php $pag = @$_GET['p'];

                if (empty($pag))
                    $pag = 1;

                if ($pag == '1') { ?>

                <p>

                    
                    <a href="o-que-e.php" target="_self">What is the ServiceNow Platform?</a> 
                    <br>ServiceNow YouTube channel
                    <br>
                    <br>

                    <a href="related_lists.php" target="_self">How to hide a Related List</a>
                    <span class="icofont-code-alt"></span>
                    <br>And I didn't even know you could do that...
                    <br>
                    <br>
                    
                    <a href="csa_delta.php" target="_self">Is it normal to fail a certification every now and then?</a>
                    <br>Nobody is perfect
                    <br>
                    <br>

                    <a href="br_before_query1.php" target="_self">Don't use a cannon to kill a mosquito</a>
                    <br>Filtering records before displaying to the user 
                    <br>
                    <br>
                  
                    <a href="gliderecord.php" target="_self">GlideRecord</a>
                    <span class="icofont-code-alt"></span>
                    <br>GlideRecord Cheat Sheet
                    <br>
                    <br>

                    <a href="aes_notifications.php" target="_self">App Engine Studio and Team notifications</a>
                    <br>What if I tell you that you can send a notification to your manager when an event occurs in your custom app?
                    <br>
                    <br>

                    <a href="geturlparam.php" target="_self">How to get a parameter from the URL</a>
                    <span class="icofont-code-alt"></span>
                    <br>Catalog Client Script
                    <br>
                    <br>
                      
                    <a href="best_practices_01.php" target="_self">Best Practices in Scripting</a>
                    <span class="icofont-code-alt"></span>
                    <br>If you want to Update, please do not Insert!
                    <br>
                    <br>

                </p>

                <div class="bottomnavigation">
                    <div class="olhando-1"> <!-- left -->

                        <ul class="pagination">
                            <li class="page-item disabled"><a class="page-link" href="?p=1">1</a></li>
                            <li class="page-item"><a class="page-link" href="?p=2">2</a></li>
                            <li class="page-item"><a class="page-link" href="?p=3">3</a></li>
                            <li class="page-item"><a class="page-link" href="?p=4">4</a></li>
                          
                        </ul>

                    </div>
                </div>

                <?php

                } elseif ($pag == '2') {

                ?>

                <p>

                    <a href="catalog_client_script.php" target="_self">Validating a data field in a Service Portal</a>
                    <span class="icofont-code-alt"></span>
                    <br>by using a Catalog Client Script
                    <br>
                    <br>
                      
                    <a href="rp_choice_to_list.php" target="_self">Record Producer</a>
                    <br>Transforming Choices (Select 1) into a Multiple List (Select N)
                    <br>
                    <br>
                  
                    <a href="dependent_fields.php" target="_self">Dependent fields</a>
                    <br>Thinking about dependent fields
                    <br>
                    <br>

                    <a href="golden_ticket_matching_tool.php" target="_self">Golden Ticket matching tool</a>
                    <br>featured by JaceNow Youtube channel
                    <br>
                    <br>

                    <a href="sys_choice.php" target="_self">There is a table called sys_choice</a>
                    <br>and it is important to know everything you can about it
                    <br>
                    <br>

                    <a href="ranking.php" target="_self">The community ranking system</a>
                    <br>The day I became a Mega Guru
                    <br>
                    <br>

                    <a href="g_user.php" target="_self">g_user</a>
                    <span class="icofont-code-alt"></span>
                    <br>g_user Cheat Sheet
                    <br>
                    <br>
                    
                    <a href="3years.php" target="_self">Do we love ServiceNow swags? Yes, we do</a>
                    <br>ServiceNow Developer Mentorship Program 2023
                    <br>
                    <br>

                </p>

                <div class="bottomnavigation">
                    <div class="olhando-1"> <!-- left -->

                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="?p=1">1</a></li>
                            <li class="page-item disabled"><a class="page-link" href="?p=2">2</a></li>
                            <li class="page-item"><a class="page-link" href="?p=3">3</a></li>
                            <li class="page-item"><a class="page-link" href="?p=4">4</a></li>
                        </ul>

                    </div>
                </div>

                <?php

                } elseif ($pag == '3') {

                    ?>
    
                    <p>
    
                        <a href="javascript-sn.php" target="_self">Scripting in ServiceNow</a>
                        <span class="icofont-code-alt"></span>
                        <br>A step in our learning journey
                        <br>
                        <br>

                       
                        <a href="aoc2023.php" target="_self">Advent of Code</a>
                        <br>Try to solve programming puzzles using your programming skills
                        <br>
                        <br>
                
                        <a href="theduke.php" target="_self"><?php echo "Robert \"The Duke\" Fedoruk"; ?></a>
                        <br>The day when The Duke purchased his first ServiceNow subscription
                        <br>
                        <br>

                        <a href="slack1.php" target="_self">Another good conversation</a>
                        <br>Best practices for application deployment
                        <br>
                        <br>

                        <a href="labintro.php" target="_self">Welcome to the Demo Lab</a>
                        &nbsp;<span class="icofont-video-alt"></span>
                        <br>The Laboratory door is open and entry is permitted - <i>January 30, 2024</i></i>
                        <br>
                        <br>

                        <a href="<?php echo $link22; ?>" target="_self"><?php echo $title22; ?></a>
                        <br><?php echo $subtitle22; ?> <i><?php echo $data22; ?></i>
                        <br>
                        <br>

                        <a href="<?php echo $link23; ?>" target="_self"><?php echo $title23; ?></a>
                        <br><?php echo $subtitle23; ?> <i><?php echo $data23; ?></i>
                        <br>
                        <br>
                    
                        <a href="<?php echo $link24; ?>" target="_self"><?php echo $title24; ?></a>
                        
                        <br><?php echo $subtitle24; ?> <i><?php echo $data24; ?></i>
                        <br>
                        <br>

                </p>

                <div class="bottomnavigation">
                    <div class="olhando-1"> <!-- left -->

                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="?p=1">1</a></li>
                            <li class="page-item"><a class="page-link" href="?p=2">2</a></li>
                            <li class="page-item disabled"><a class="page-link" href="?p=3">3</a></li>
                            <li class="page-item"><a class="page-link" href="?p=4">4</a></li>
                        </ul>

                    </div>
                </div>

                <?php
                
                } elseif ($pag == '4') {

                ?> 
                    <p>
    
                        <a href="<?php echo $link25; ?>" target="_self"><?php echo $title25; ?></a>
                        <br><?php echo $subtitle25; ?> <i><?php echo $data25; ?></i>
                        <br>
                        <br>

                    
                        <a href="<?php echo $link26; ?>" target="_self"><?php echo $title26; ?></a>
                        <br><?php echo $subtitle26; ?> <i><?php echo $data26; ?></i>
                        <br>
                        <br>

                        <?php 
                         if (isset($title27)) {
                        ?>
                            <a href="<?php echo $link27; ?>" target="_self"><?php echo $title27; ?></a>
                            <br><?php echo $subtitle27; ?> <i><?php echo $data27; ?></i>
                            <br>
                            <br>
                        <?php 
                        } else {
                            echo "<br><br><br>";
                        }
                        ?>

                        <?php 
                         if (isset($title28)) {
                        ?>
                        <a href="<?php echo $link28; ?>" target="_self"><?php echo $title28; ?></a>
                        <br><?php echo $subtitle28; ?> <i><?php echo $data28; ?></i>
                        <br>
                        <br>
                        <?php 
                        } else {
                            echo "<br><br><br>";
                        }
                        ?>

                        <?php 
                         if (isset($title29)) {
                        ?>
                        <a href="<?php echo $link29; ?>" target="_self"><?php echo $title29; ?></a>
                        <br><?php echo $subtitle29; ?> <i><?php echo $data29; ?></i>
                        <br>
                        <br>
                        <?php 
                        } else {
                            echo "<br><br><br>";
                        }
                        ?>

                        <?php 
                         if (isset($title30)) {
                        ?>
                        <a href="<?php echo $link30; ?>" target="_self"><?php echo $title30; ?></a>
                        <br><?php echo $subtitle30; ?> <i><?php echo $data30; ?></i>
                        <br>
                        <br>
                        <?php 
                        } else {
                            echo "<br><br><br>";
                        }
                        ?>

                        <?php 
                         if (isset($title31)) {
                        ?>
                        <a href="<?php echo $link31; ?>" target="_self"><?php echo $title31; ?></a>
                        <br><?php echo $subtitle31; ?> <i><?php echo $data31; ?></i>
                        <br>
                        <br>
                        <?php 
                        } else {
                            echo "<br><br><br>";
                        }
                        ?>

                        <?php 
                         if (isset($title32)) {
                        ?>
                        <a href="<?php echo $link32; ?>" target="_self"><?php echo $title32; ?></a>
                        
                        <br><?php echo $subtitle32; ?> <i><?php echo $data32; ?></i>
                        <br>
                        <br>
                        <?php 
                        } else {
                            echo "<br><br><br>";
                        }
                        ?>

                    </p>

<div class="bottomnavigation">
<div class="olhando-1"> <!-- left -->

    <ul class="pagination">
        <li class="page-item"><a class="page-link" href="?p=1">1</a></li>
        <li class="page-item"><a class="page-link" href="?p=2">2</a></li>
        <li class="page-item"><a class="page-link" href="?p=3">3</a></li>
        <li class="page-item disabled"><a class="page-link" href="?p=4">4</a></li>
    </ul>

</div>
</div>

                <?php

                } else {

                  //Page number invalid. Load page 1.

                  ?>

                <p>
                    
                    <a href="o-que-e.php" target="_self">What is the ServiceNow Platform?</a> 
                    <br>ServiceNow YouTube channel
                    <br>
                    <br>

                    <a href="related_lists.php" target="_self">How to hide a Related List</a>
                    <span class="icofont-code-alt"></span>
                    <br>And I didn't even know you could do that...
                    <br>
                    <br>
                    
                    <a href="csa_delta.php" target="_self">Is it normal to fail a certification every now and then?</a>
                    <br>Nobody is perfect
                    <br>
                    <br>

                    <a href="br_before_query1.php" target="_self">Don't use a cannon to kill a mosquito</a>
                    <br>Filtering records before displaying to the user 
                    <br>
                    <br>
                  
                    <a href="gliderecord.php" target="_self">GlideRecord</a>
                    <span class="icofont-code-alt"></span>
                    <br>GlideRecord Cheat Sheet
                    <br>
                    <br>

                    <a href="aes_notifications.php" target="_self">App Engine Studio and Team notifications</a>
                    <br>What if I tell you that you can send a notification to your manager when an event occurs in your custom app?
                    <br>
                    <br>

                    <a href="geturlparam.php" target="_self">How to get a parameter from the URL</a>
                    <span class="icofont-code-alt"></span>
                    <br>Catalog Client Script
                    <br>
                    <br>
                      
                    <a href="best_practices_01.php" target="_self">Best Practices in Scripting</a>
                    <span class="icofont-code-alt"></span>
                    <br>If you want to Update, please do not Insert!
                    <br>
                    <br>

                </p>

                <div class="bottomnavigation">
                    <div class="olhando-1"> <!-- left -->

                        <ul class="pagination">
                            <li class="page-item disabled"><a class="page-link" href="?p=1">1</a></li>
                            <li class="page-item"><a class="page-link" href="?p=2">2</a></li>
                            <li class="page-item"><a class="page-link" href="?p=3">3</a></li>
                            <li class="page-item"><a class="page-link" href="?p=4">4</a></li>
                          
                        </ul>

                    </div>
                </div>
          
          
          <?php
                }
                ?>

        </div>

</main>

<?php
require_once("footer.php");
