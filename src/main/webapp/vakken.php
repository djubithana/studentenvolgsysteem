<?php  include'inc/head.php';?>
<div class="container-fluid">
	<div class="row">
		<?php  include'inc/sidebar.php';?>
		<div class="main col-md-10">
			<section class="jumbotron text-center header-jumbo">
				<div class="container">
					<h4 class="jumbotron-heading">Vakken Overzicht</h4>
					<button type="button" class="btn_dark_bg" data-toggle="modal" data-target="#vakkenToevoegen">Toevoegen</button>
				</div>
			</section>
			<div class="content">
				<div class="row">

				<!-- content komt hier -->
				<!-- table -->

                                                   <div class="col-md-12">
                                                   <div class="widget">
                                    							<div class="widget-header transparent">
                                    								<h2><strong>Vakken</strong> Overzicht </h2>
                                    								<div class="additional-btn">
                                    									<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                    									<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                    									<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                                    								</div>
                                    							</div>
                                    							<div class="widget-content">

                                    								<div class="table-responsive">
                                    									<table data-sortable="" class="table table-hover" data-sortable-initialized="true">
                                    										<thead>
                                    											<tr>
                                    												<th>No</th>
                                    												<th style="width: 30px" data-sortable="false"><div class="icheckbox_square-aero" style="position: relative;" aria-checked="false" aria-disabled="false"><input class="rows-check" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" type="checkbox"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div></th>
                                    												<th>Vak Naam</th>
                                    												<th>Afkorting</th>

                                    												<th data-sortable="false">Bewerken</th>
                                    											</tr>
                                    										</thead>

                                    										<tbody>
                                    											<tr>
                                    												<td>1</td><td><div class="icheckbox_square-aero" style="position: relative;" aria-checked="false" aria-disabled="false"><input class="rows-check" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" type="checkbox"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div></td>
                                    												<td><strong>Wiskunde</strong></td>
                                                                                    <td>25</td>
                                                                                    <td>
                                    												<div class="btn-group btn-group-xs">
                                                                                    <a data-toggle="tooltip" title="Off" class="btn btn-default"><i class="fa fa-power-off"></i></a>
                                                                                     <a data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-edit"></i></a>
                                                                                     </div>
                                                                                     </td>
                                                                                 </tr>


                                                                            <tbody id="vakkenGegevens">
                                                                         </tbody>

                                                                      </table>

                                    		                	</div>
                                                         </div>
                                                    </div>
                                      	<!-- einde table 3-->


				</div>
			</div>
		</div>
	</div>
</div>


<div id="vakkenToevoegen" tabindex="-1" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">

        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Vakken Toevoegen</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="/action_page.php">

                    <div class="form-group">
                        <div class="offset-md-2 col-md-8">
                            <input type="hidden" class="form-control" id="vaknaam" >
                        </div>
                    </div>

                    <div class="form-group">
                                            <div class="offset-md-2 col-md-8">
                                                <input type="text" class="form-control" id="naam" placeholder="Naam">
                                            </div>
                                        </div>

                    <div class="form-group">
                        <div class="offset-md-2 col-md-8">
                            <input type="text" class="form-control" id="afkorting" placeholder="Afkorting">
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="vakkenToevoegen()">Toevoegen</button>
            </div>
        </div>

    </div>
</div>
    <div id="vakkenBewerken" tabindex="-1" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Vakken Bewerken</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" action="">
                        <input type="hidden" id="vak_id_form" value="" />
                        <div class="form-group">
                            <div class="offset-md-2 col-md-8">
                                <input type="text" class="form-control" id="vaknaam" value="" placeholder="Vak Naam">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="offset-md-2 col-md-8">
                                <input type="text" class="form-control" id="afkorting" value="" placeholder="afkorting">
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="vakkenBewerken()">Bewerken</button>
                </div>
            </div>

        </div>
    </div>
    <div id="vakkenVerwijderen" class="modal fade" role="dialog">
        <div class="modal-dialog modal-md">

            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Vakken Verwijderen</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" action="">
                        <input type="hidden" id="deze_vak_verw" value="" />
                        <p style="text-align:center;">Bent u zeker dat u <Strong><span id="vaknaamVerwijder"></span> <span id="aantalDocentVerwijder"></span></Strong> wilt verwijderen?</p>
                        <div class="offset-md-3 col-md-6">
                            <button type="button"  class="btn btn-primary offset-md-1 col-md-4" data-dismiss="modal">Nee</button>
                            <button type="button"  class="btn btn-primary offset-md-1 col-md-4" onclick="vakkenVerwijderen(document.getElementById('deze_vak_verw').value)">Ja</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <script>

    function addvak(){
        let vak_id = document.getElementById("vak_id").value;
        let vak = document.getElementById("vak").value;
        let afkorting = document.getElementById("afkorting").value;


        let dataString = {
            "vak_id": null,
            "vak": vak,
            "afkorting": afkorting
        };
        let json = JSON.stringify(dataString);

        let xhttp = new XMLHttpRequest();
        xhttp.open("POST", "http://localhost:7070/studentenvolgsysteem/api/vakken/addvak", true);
        xhttp.onreadystatechange = function() {
            if (xhttp.readyState>3 && xhttp.status==200) { loadvak(); clearInputFields();
                $('#vakToevoegen').modal('hide');
                $('.modal-backdrop').remove();
                document.getElementById("error_message").innerHTML = '<div class="alert alert-success alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>U heeft succesvol een nieuwe vak toegevoegd  </div>';
            }
            else{
                document.getElementById("error_message").innerHTML = '<div class="alert alert-danger alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Toevoegen is mislukt</div>';
            }

        };
        xhttp.setRequestHeader("Content-Type", "application/json");
        xhttp.send(json);
    }

    function updatevak() {
        let vak_id = document.getElementById("vak_id").value;
        let vak = document.getElementById("vak").value;
        let afkorting = document.getElementById("afkorting").value;

        let dataString = {
            "vak_id": vak_id,
            "vak": vak,
            "afkorting": afkorting
        };
        let json = JSON.stringify(dataString);

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("POST", "http://localhost:7070/studentenvolgsysteem/api/vakken/updatevak", true);
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState>3 && xmlhttp.status==200) {
                loadvakken();
                clearInputFields();
                $('#vakToevoegen').modal('hide');
                $('.modal-backdrop').remove();
                document.getElementById("error_message").innerHTML = '<div class="alert alert-success alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Aanpassingen waren succesvol</div>';
                document.getElementById("btn").innerHTML = "Toevoegen";
            }
            else{document.getElementById("error_message").innerHTML = '<div class="alert alert-danger alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Iets is mis gegaan tijdens het aanpassen</div>';}

        };
        xmlhttp.setRequestHeader("Content-Type", "application/json");
        xmlhttp.send(json);
    }

    function getvak(vak_id) {

        let vak = document.getElementById("vak").value;
        let afkorting = document.getElementById("afkorting").value;

        let dataString = {
            "vak_id": vak_id,
            "vak": vak,
            "afkorting": afkorting
        };
        let json = JSON.stringify(dataString);

        let xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (xhttp.readyState>3 && xhttp.status==200) {
                let foundVak = JSON.parse(this.responseText);

                document.getElementById("vak_id").value = foundVak.vak_id;
                document.getElementById("vak").value = foundVak.vak;
                document.getElementById("status").value = foundStatus.status;

                document.getElementById("btn").innerHTML = "Wijzigen";
            }
        };
        xhttp.open("POST", "http://localhost:7070/studentenvolgsysteem/api/vak/getVak", true);
        xhttp.setRequestHeader("Content-Type", "application/json");
        xhttp.send(json);
    }

    function editVak(vak_id) {
        getVak(vak_id);
    }

    function saveVak() {
        if(validateForm())
        {
            if(document.getElementById("btn").innerHTML == 'Toevoegen') {
                addVak();
            }else{
                updateVak();
            }
        }
    }

    function validateForm() {
        let pass = true;
        let vak_id = document.getElementById("vak_id").value;
        let vak = document.getElementById("vak").value;
        let afkorting = document.getElementById("afkorting").value;

        if (vak == "")
        {
            alert("Please fill in all fields.");
            pass = false;
        }

        return pass;
    }

    function clearInputFields() {

        document.getElementById("vak_id").value = "";
        document.getElementById("vak").value = "";
        document.getElementById("afkorting").value = "";
        document.getElementById("btn").innerHTML = "Toevoegen";
    }

</script>

<?php  include'inc/bottom.php';?>