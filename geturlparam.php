<?php 
require_once("header.php");
require_once("menu.php");
require_once("funcoes.php");

?>

<main class="content">
    
        <div class="content text-content content-wrap">

            <?php renderTitle('How to get a parameter from the URL', 'Catalog Client Script'); ?>

            
                
                
                <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The mission was to get a sys_id from the URL, query a record and return a value to the front-end.
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In the front-end we have a Record Producer (RP) with a String field.
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;On the onLoad event, we want to populate the field in order to show the value retrieved from the back-end.
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The scenario is defined so let's go to the step by step process.
              
                </p>

                <br>
                <p>
                    <h5>1. Create a Util class in the back-end</h5>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Our <i>Utils</i> class will be a Script Include that receives a sys_id and returns a String.
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<pre>
var KMXOUtils = Class.create();
KMXOUtils.prototype = {
    initialize: function() {
    },
	/*
	* Receives a um sys_id and returns a Task table field value
	*
	* @param {String} - taskId
	* @return {Object}
	*/
	getTaskNumber: function(taskId)
	{
			if (taskId != "" && taskId != null && taskId != undefined) {
				var grTask = new GlideRecord('x_770214_consultor_rwd_activity');
				if (grTask.get(taskId)) {
					
					var number = grTask.getValue('number');
					
					var obj = {};
					obj["number"] = number;
					
					return obj;
				} else {
					return {};
				}
			}
	},

    type: 'KMXOUtils'
};
					</pre>
					
                </p>

                <br>
                <p>
                    <h5>2. Create a class to provide access for the Front-End</h5>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.1) To provide access in this class, the parameter <i>Client callable</i> should be True (checked)
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<pre>
var UtilsAjax = Class.create();
UtilsAjax.prototype = Object.extendsObject(global.AbstractAjaxProcessor, {

	getTaskNumber: function() {
		var taskId = this.getParameter('sysparm_task_id');
		gs.debug('=== Camacho UtilsAjax = Received the sys_id ' + taskId);
		return JSON.stringify(new KMXOUtils().getTaskNumber(taskId));
		
	},
    type: 'UtilsAjax'
});	</pre>					
					

                </p>

                <br>
                <p>
					<h5>3. I'll suppose that you have a String field called task_number in your RP</h5>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.1) Create a Catalog Client Script (Type: OnLoad) to get the URL parameter and call the back-end class:
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<pre>
function onLoad() {
   
   var taskId = getParameterValue("taskid");
	
   if (taskId != "" && taskId != null && taskId != undefined) {
	   console.log('=== CAMACHO Task id: ' + taskId);
	   
	   var gaGetTaskNumber = new GlideAjax('UtilsAjax');
	   gaGetTaskNumber.addParam('sysparm_name', 'getTaskNumber');
	   gaGetTaskNumber.addParam('sysparm_task_id', taskId);
	   gaGetTaskNumber.getXMLAnswer(setmyFormValue);
   }
}

function setmyFormValue(answer) {
	
	//console.log('=== CAMACHO Entered setmyFormValue');
	if (answer) {
		var obj = JSON.parse(answer);
		var numero = obj.number.toString();
		console.log(numero);
		
		g_form.setValue('task_number', numero);
		
	}
}

function getParameterValue(name) {
	var url = top.location.href;
	var value = new URLSearchParams(url).get(name);
	if (value) {
		return value;
	} else {
		return null;
	}
}
					</pre>		
					</p>

                <p>
				
				
                <br><br><a href="index.php?p=1" target="_self">Back</a>
                </p>


            
        </div>
        
</main>

<?php
require_once("footer.php");