<?php 
require_once("header.php");
require_once("menu.php");
require_once("funcoes.php");

?>

<main class="content">
    
        <div class="content text-content content-wrap">

            <?php renderTitle('GlideRecord', 'GlideRecord Cheat Sheet'); ?>

            
                
                
        
                <p>
					<br>
                    <h5>Query</h5>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        
<pre>
var grInc = new GlideRecord('incident');
grInc.addQuery('active', true);
grInc.query();

while(grInc.next()) {

            gs.info('Category is ' + grInc.category);

}
</pre>
					
                </p>

                <br>
        
				<p>
                    <h5>Get</h5>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        
<pre>
var grInc = new GlideRecord('incident');

if (grInc.get('sys_id')) {

   gs.info('Category is ' + grInc.category);

} else {

    gs.info('Record not found.');

}
</pre>
					
                </p>


				<p><br>
                    <h5>Or</h5>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Or conditions can be stacked orGr.addOrCondition('state', 6).addOrCondition('state', 7);
<br><br>&nbsp;

        
<pre>
var grInc = new GlideRecord('incident');
var orGr = grInc.addQuery('state', 6);
orGr.addOrCondition('state', 7);
grInc.query();

while(grInc.next()) {

            gs.info('Category is ' + grInc.category);

}
</pre>
					
                </p>


				<p>
					<br>
                    <h5>Insert</h5>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        
<pre>
var grInc = new GlideRecord('incident');
grInc.initialize();
grInc.short_description = 'This is the short description';
grInc.description = 'This is the description of my new record.';
grInc.insert();

</pre>
					
                </p>

                


				<p>
					
                    <h5>Update</h5>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        
<pre>
var grInc = new GlideRecord('incident');

if (grInc.get('sys_id')) {

   grInc.short_description = 'This is the new short description';
   grInc.setWorkflow(false); //Disable business rules for this query
   grInc.autoSysFields(false); //Disable the update of system fields
   grInc.update();

}

</pre>
					
                </p>
                




				<p>
                    <h5>Delete</h5>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        
<pre>
var grInc = new GlideRecord('incident');

if (grInc.get('sys_id')) {

    grInc.deleteRecord(); //Delete the record

}

</pre>
					
                </p>

                <p>
					<br>
                    
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;And below we have a list of operators we can use with the addQuery() method.
                    
                    <br><br>
                    <br>

                    <img class="img-delta" src="assets/image/79_glidequery_operators.png" height="70%" width="70%" alt="Operators" title="Operators">
<br>
        

					
                </p>

                <p>
				
				
                <br><br><a href="index.php?p=1" target="_self">Back</a>
                </p>


            
        </div>
        
</main>

<?php
require_once("footer.php");