<?php 
require_once("header.php");
require_once("menu.php");
require_once("funcoes.php");

?>

<style>
    .div-clark {
        background-color: #fff;
        border: 3px solid grey;
        border-radius: 5px;
        border-style: inset;
        width: 100%;
    }
    .img-clark {
        border: 0px solid #ddd;
        border-radius: 4px;
        padding: 5px;
        padding-left: 5px;
        width: 180px;
        float: left;
    }
    
</style>

<main class="content">
    
        <div class="content text-content content-wrap">

            <?php renderTitle('The nowGurukul Challenge 2024', "A brilliant initiative from NowGurukul & Learn N Grow Together & friends to help the developer journey - <i>March 01, 2024</i>"); ?>

            
                <p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;What is it about?
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Four friends decided to study ServiceNow together by creating an Industry Use Case so that they would have many scenarios to think about and develop the solution.
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In addition to improving their own skills, they thought:
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- We'll do it anyway... What if we share these Use Cases with the community so we can all learn and grow together?
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I loved this project and I am also a participant.
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I finished the first two challenges and in this article I share my personal notes.                    
                </p>
                <br>
                
                <p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The <a href="https://www.servicenow.com/community/developer-articles/nowgurukul-servicenow-hands-on-challenge-2024-week-1/ta-p/2776578" target="_blank">Week 1</a> challenge is to create:
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Tables & fields; 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Groups;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Form layouts;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- List views;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Records within the tables.
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i>Personal notes</i>  
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;For the Employee table we have two views: We can use View Rule to show a view depending on the logged in user. 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If you are completely new to ServiceNow, you can request your PDI (Personal Developer Instance) in the <a href="https://developer.servicenow.com/" target="_blank">developer site</a>. The first thing I suggest after that is to go to Now Learning and follow a Learning Plan called <a href="https://developer.servicenow.com/dev.do#!/learn/learning-plans/washingtondc/new_to_servicenow" target="_blank">New to ServiceNow</a>. 
                </p>
                <br>

                <p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The <a href="https://www.servicenow.com/community/developer-articles/nowgurukul-servicenow-hands-on-challenge-2024-week-2/ta-p/2783425" target="_blank">Week 2</a> challenge is to create:
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- The Application menu and modules;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 1 Catalog Item;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 1 Record Producer.
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i>Personal notes</i> 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dynamic menus: filtering records according to the logged in user;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Module visibility: Only user from a specific Group has access to a specific module;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Requisite: Requested By, Read-only, Auto populated by logged in user.
                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Information about the logged in user? Let's talk about <b>GlideAjax</b>.
                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I created a table called TestUser with the fields User and Phone like this:
                    <br>
                    <br>
                    <img src="assets/image/109_testuser.png" height="70%" width="70%" alt="TestUser table" title="TestUser table">
                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;When I select a user in the form, I want to show the user phone number in the Phone field.
                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To accomplish this let's create a Script Include and a Client Script. 
                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1) The Script Include:
                    <pre>
var getUserDetailsAjax = Class.create();
getUserDetailsAjax.prototype = Object.extendsObject(global.AbstractAjaxProcessor, {

getPhone: function() {
        var userId = this.getParameter('sysparm_user');
        var grgetUserDetailsAjax = new GlideRecord('sys_user');
        grgetUserDetailsAjax.addQuery('sys_id', userId);
        grgetUserDetailsAjax.query();
        gs.debug('I received the userId: ' + userId);
        if (grgetUserDetailsAjax.next()) {
            return grgetUserDetailsAjax.getValue('phone');
        }
    },

	_myFunction: function() {
		/* This is not client callable. You can organise your logic 
		   if your Script gets big. */
	},

    type: 'getUserDetailsAjax'
});
					</pre>                    
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;For security reasons, when we save the Script Include we must specify a role that will have permission to call it from the client-side. 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The <b>gs.debug()</b> we used at Line 9 has the power to let us know if the server-side is receiving what we expect. 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Below we can see a debug output.
                    <br>
                    <br>
                    <img src="assets/image/110_debug.png" height="100%" width="100%" alt="Debug" title="Debug">
                    <br>

                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In order to become a better developer it is important to understand how to debug your code. 
<br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2) The Client Script: 
                    <br>
                    <img src="assets/image/111_client_script_definition.png" height="70%" width="70%" alt="Client Script definition" title="Client Script definition">
                    <br>
<pre>
function onChange(control, oldValue, newValue, isLoading, isTemplate) {
    if (isLoading || newValue === '') {
        return;
    }

    if (newValue === '') {
        g_form.clearValue('u_phone');
    }

	var gaPhone = new GlideAjax('getUserDetailsAjax');
	gaPhone.addParam('sysparm_name', 'getPhone');
	gaPhone.addParam('sysparm_user', newValue);
	gaPhone.getXMLAnswer(_handleResponse);

	function _handleResponse(response) {
		var answer = response;
		
		g_form.setValue('u_phone', answer);
	}

}
</pre>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The methods getXML and getXMLAnswer are different, and we have <a href="https://www.servicenow.com/community/developer-articles/client-side-scripting-go-for-glideajax-with-getxmlanswer/ta-p/2324830" target="_blank">an article from Mark Roethof</a> about this topic. 
                    
                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Let's select a User in our form to see the result:
                    <br>

                    <br>
                    <img src="assets/image/112_interface.png" height="70%" width="70%" alt="Form" title="Form">
                    <br>

                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Now that I know how to use GlideAjax, I can think about creating a Script Include (server-side) that get the information I need in  a Client Script (client-side). 
                    <BR>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Every time a user is using the browser to access a Form, a Catalog Item or a Record Producer, we are talking about client-side. 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;When we are talking about componentes that the user doesn't interacts with like a Business Rule or Script Include, we are talking about server-side. 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;It is in the server-side that we can access information stored in tables, for example, using the <a href="https://developer.servicenow.com/dev.do#!/learn/courses/washingtondc/app_store_learnv2_scripting_washingtondc_scripting_in_servicenow/app_store_learnv2_scripting_washingtondc_server_side_scripting/app_store_learnv2_scripting_washingtondc_gliderecord" target="_blank">GlideRecord</a> capabilities.

                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Community members participating in the nowGurukul Challenge can use the article's comment area to: 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Ask for help;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Share they have completed the task; 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- And compliment others for their achievement. 
                    <br>

                    
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Besides that they have a Whatsapp Support Group where you can share your doubts if you get stuck.
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Do you know that building connections with the right people at the right time could be the key to taking your career to the next level?
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    
<br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="https://lnkd.in/dwKJUKK9" target="_blank"><img src="assets/image/113_whats.png" height="30%" width="30%" alt="Whatsapp Group" title="Whatsapp Group"></a>
                    <br>

                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;So what are you waiting for? <a href="https://www.servicenow.com/community/developer-articles/nowgurukul-servicenow-hands-on-challenge-2024-week-1/ta-p/2776578" target="_blank">Check it out</a> and join the nowGurukul Challenge today!

                </p>
                <br>



                <div class="div-clark">
                        <img class="img-clark" src="assets/image/114_trophy.jpg" alt="Amazing initiative" title="Amazing initiative">
                        <p>
                            <br>Congratulations to the nowGurukul Challenge creators. Amazing initiative my friends!
                            <br><li><a href="https://www.linkedin.com/in/gaganjolly11/" target="_blank">Gagan Jolly</a>
                            </br><li><a href="https://www.linkedin.com/in/anubhav-ritolia-21129622/" target="_blank">Anubhav Ritolia</a>
                            <br><li><a href="https://www.linkedin.com/in/sarthak-shrivastav-140260181/" target="_blank">Sarthak Shrivastva</a>
                            </br><li><a href="https://www.linkedin.com/in/atulgroverservicenowconsultantresearchscholar/" target="_blank">Atul "AG" Grover</a>                            
                            <br>
                         </p>
                         <br>
                </div>

                <br>

                <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thanks for reading.
                <br>
                <br>
                <br>

                <a href="index.php?p=3" target="_self">Back</a>
                </p>


        </div>
        
</main>

<?php
require_once("footer.php");