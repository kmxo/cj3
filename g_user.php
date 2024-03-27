<?php 
require_once("header.php");
require_once("menu.php");
require_once("funcoes.php");

?>

<main class="content">
    
        <div class="content text-content content-wrap">

            <?php renderTitle('g_user', 'g_user Cheat Sheet'); ?>

            
                
                
        
                <p>
					
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Available in Client Scripts, g_user User Object is comprised of properties and methods that contain information about the logged in user.
                    <br>
                    <br>
                    
<pre>
// User name
var name = g_user.userName;
alert('Name: ' + name);

// First name of the current user
var firstName = g_user.firstName;
alert('First name: ' + firstName);

// Last name of the current user
var lastName = g_user.lastName;
alert('Last name: ' + lastName);

// sys_id of the current user
var userSysId = g_user.userID;
alert('User SysId: ' + userSysId);

// Return true if the user has a role
// Attention: Will always return True if the user has the admin role
var userHasItilOrAdmin = g_user.hasRole('itil');
alert('User has ITIL or Admin role? ' + userHasItilOrAdmin);

// Return true if the user has a specific role
// Otherwise return False
var userHasItil = g_user.hasRoleExactly('itil');
alert('User has ITIL role? ' + userHasItil);

</pre>
					
                </p>

                <br>
        


                <p>
				
				
                <br><br><a href="index.php?p=2" target="_self">Back</a>
                </p>


            
        </div>
        
</main>

<?php
require_once("footer.php");