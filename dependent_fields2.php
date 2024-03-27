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



            <?php renderTitle('Dependent fields - Part 2', 'Create tables and load data'); ?>

            <p>
                
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This is just a draft and it needs some work to become an article. 
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Personal notes: 
                <br><br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1) Excel samples to load data.
                <br><br>

                    <img class="img-delta" src="assets/image/66_plan_manufacturer.png" height="50%" width="50%" alt="Excel 1" title="Excel 1">
                <br>
                <br><br>

                <img class="img-delta" src="assets/image/67_plan_vehicle.png" height="50%" width="50%" alt="Excel 2" title="Excel 2">
                <br>
                <br><br>

                <img class="img-delta" src="assets/image/68_plan_model.png" height="50%" width="50%" alt="Excel 3" title="Excel 3">
                <br>
                

                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2) Creating tables according to the database infrastructure described in Part 1.
                <br><br><br>


                <img class="img-delta" src="assets/image/69_manufacturer_table.png" height="50%" width="50%" alt="Table 1" title="Table 1">
                <br>
                <br><br>

                <img class="img-delta" src="assets/image/70_vehicle_table.png" height="50%" width="50%" alt="Table 2" title="Table 2">
                <br>
                <br><br>

                <img class="img-delta" src="assets/image/71_model_table.png" height="50%" width="50%" alt="Table 3" title="Table 3">
                <br>
                
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3) Front-end - Service Portal
                <br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Created the table Cars, created the Record Producer to that table. 


                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.1) Each table should contain the record '--None--' and it will be the default choice (in the Record Producer)
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Script Include should be accessible from all application scopes 
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SI Client callable: No
                <br> <br>
<pre>
var Cars = Class.create();
Cars.prototype = {
    initialize: function() {},
	
	//x_583689_carlos.Cars().getVehicles
	getVehicles: function (current) {
		var vehicleIds = [];
		var vehicleGR = new GlideRecord('x_583689_carlos_vehicle');
		vehicleGR.addEncodedQuery('manufacturer='+current.variables.manufacturer+'^ORvehicleLIKENone');
		//vehicleGR.addEncodedQuery('manufacturer='+current.variables.manufacturer);
		//vehicleGR.addEncodedQuery('vehicleLIKENone');
		vehicleGR.query();
		while (vehicleGR.next()) {
			vehicleIds.push(vehicleGR.getValue('sys_id'));
		}
		if (vehicleIds.length >0) {
			return 'sys_idIN'+vehicleIds.join(',');
		}
	},

	//x_583689_carlos.Cars().getModels
	getModels: function (current) {
		var modelIds = [];
		var modelGR = new GlideRecord('x_583689_carlos_model');
		modelGR.addEncodedQuery('vehicle='+current.variables.vehicle+'^ORmodelLIKENone');
		modelGR.query();
		while (modelGR.next()) {
			modelIds.push(modelGR.getValue('sys_id'));
		}
		if (modelIds.length >0) {
			return 'sys_idIN'+modelIds.join(',');
		}
	},
	

    type: 'Cars'
};
</pre>
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.2) Configuring the three fields within the Record Producer:
<br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1 Manufacturer in the Record Producer 
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type: Reference, Ref qualifier: Simple, map to field: Yes
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Default: --None-- 
<br>

                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2 type: Reference, Ref qualifier: Advanced, map to field: Yes 
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;javascript: new x_583689_carlos.Cars().getVehicles(current);
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Default: --None-- 
                <br>

                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3 type: Reference, Ref qualifier: Advanced, map to field: Yes 
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;javascript: new x_583689_carlos.Cars().getModels(current);
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Default: --None-- 
                <br>
                <br>

                <img class="img-delta" src="assets/image/72_rp_ini.png" height="50%" width="50%" alt="Initial" title="Initial">
                <br>
                <br><br>

                <img class="img-delta" src="assets/image/73_rp_final.png" height="50%" width="50%" alt="Final result" title="Final result">
                <br>
                <br><br>

                <br>
                <br><br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thanks for reading!
            </p>



            <p>
                <br>
                
                <br>
            
                </br></br><a href="index.php?p=2" target="_self">Back</a>
                </p>




        </div>

</main>

<?php
require_once("footer.php");
