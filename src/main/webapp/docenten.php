<?php  include'inc/head.php';?>
<div class="container-fluid">
	<div class="row">
		<?php  include'inc/sidebar.php';?>
		<div class="main col-md-10">
		<section class="jumbotron text-center header-jumbo">
			<div class="container">
				<h4 class="jumbotron-heading">Docenten Overzicht</h4>
				<button type="button" class="btn_dark_bg" data-toggle="modal" data-target="#docentenToevoegen">Toevoegen</button>
                <button type="button" class="btn_dark_bg" data-toggle="modal" data-target="#vakAanDocentToevoegen">Vak toevoegen aan docent</button>

            </div>
		</section>
		<div class="content">
            <div id="error_message"></div>
			<div class="row">
                <!-- table 2-->
                <div class="col-md-12">
                    <div class="widget">

                        <div class="widget-content">

                            <div class="table-responsive">
                                <table data-sortable="" class="table" data-sortable-initialized="true">
                                    <thead>
                                    <tr>
                                        <th>Voornaam</th>
                                        <th>Achternaam</th>
                                        <th>Email</th>
                                        <th>Geslacht</th>
                                        <th>Mobiel</th>
                                        <th>Status</th>
                                        <th>Opties</th>
                                    </tr>
                                    </thead>

                                    <tbody id="docGegevens">

                                    </tbody>


                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- table 2-->

                </div>
		</div>
		</div>
	</div>
</div>

<div id="docentenToevoegen" tabindex="-1" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">

        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Docent Toevoegen</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="">
                    <div class="form-group">
                        <div class="offset-md-2 col-md-8">
                            <input type="text" class="form-control" id="voornaam" placeholder="Voornaam">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="offset-md-2 col-md-8">
                            <input type="text" class="form-control" id="achternaam" placeholder="Achternaam">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="offset-md-2 col-md-8">
                            <input type="email" class="form-control" id="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="offset-md-2 col-md-8">
                            <input type="number" class="form-control" id="telefoon" placeholder="Telefoon">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="offset-md-2 col-md-8">
                            <input type="number" class="form-control" id="mobiel" placeholder="Mobiel">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="offset-md-2 col-md-8">
                            <select type="text" class="form-control" id="geslacht">
                                <option value="" disabled>Geslacht</option>
                                <option value="m">Man</option>
                                <option value="v">Vrouw</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="docentToevoegen()">Toevoegen</button>
            </div>
        </div>

    </div>
</div>
    <div id="docentBewerken" tabindex="-1" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Docent Bewerken</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" action="">
                        <input type="hidden" id="docent_id_form" value="" />
                        <div class="form-group">
                            <div class="offset-md-2 col-md-8">
                                <input type="text" class="form-control" id="voornaamDocent" value="" placeholder="Voornaam">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="offset-md-2 col-md-8">
                                <input type="text" class="form-control" id="achternaamDocent" value="" placeholder="Achternaam">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="offset-md-2 col-md-8">
                                <input type="email" class="form-control" id="emailDocent" value="" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="offset-md-2 col-md-8">
                                <input type="number" class="form-control" id="telefoonDocent" value="" placeholder="Telefoon">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="offset-md-2 col-md-8">
                                <input type="number" class="form-control" id="mobielDocent" value="" placeholder="Mobiel">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="offset-md-2 col-md-8">
                                <select type="text" class="form-control" id="geslachtDocent">
                                    <option value="" disabled>Geslacht</option>
                                    <option value="m">Man</option>
                                    <option value="v">Vrouw</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="docentBewerken()">Bewerken</button>
                </div>
            </div>

        </div>
    </div>
    <div id="docentVerwijderen" class="modal fade" role="dialog">
        <div class="modal-dialog modal-md">

            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Docent Verwijderen</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" action="">
                        <input type="hidden" id="deze_docent_verw" value="" />
                        <p style="text-align:center;">Bent u zeker dat u <Strong><span id="voornaamDocentVerwijder"></span> <span id="achternaamDocentVerwijder"></span></Strong> wilt verwijderen?</p>
                        <div class="offset-md-3 col-md-6">
                            <button type="button"  class="btn btn-primary offset-md-1 col-md-4" data-dismiss="modal">Nee</button>
                            <button type="button"  class="btn btn-primary offset-md-1 col-md-4" onclick="docentVerwijderen(document.getElementById('deze_docent_verw').value)">Ja</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <div id="vakAanDocentToevoegen" tabindex="-1" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Student toevoegen aan klas</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" action="/action_page.php">

                        <div class="form-group">
                            <div class="offset-md-2 col-md-8">
                                <input type="hidden" class="form-control" id="docent_vak_id">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="offset-md-2 col-md-8">
                                <select id = "vakkenList" class="form-control">
                                    <option value="" disabled>Vakken</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="offset-md-2 col-md-8">
                                <select id = "docentenList" class="form-control">
                                    <option value="" disabled>Docenten</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button id="btn" type="button" onclick="vakToevoegenAanDocent()" class="btn btn-primary">Toevoegen</button>
                </div>
            </div>

        </div>
    </div>

    <script>
        populateVakken();
        populateDocenten();

        function vakToevoegenAanDocent(){
            let docent_vak_id = document.getElementById("docent_vak_id").value;
            let vak_id = document.getElementById("vakkenList").value;
            let docent_id = document.getElementById("docentenList").value;

            let data = {
                "docent_vak_id": null,
                "vak_id":{"vak_id": vak_id, "vaknaam": document.getElementById("vakkenList").text},
                "docent_id":  {"docent_id": docent_id, "achternaam": document.getElementById("docentenList").text, "voornaam": document.getElementById("docentenList").text}
            };
            let json = JSON.stringify(data);

            let url = "http://localhost:7070/studentenvolgsysteem/api/docentenVakken/addDocentVak";

            let xhttp = new XMLHttpRequest();
            xhttp.open("POST", url , true);
            xhttp.onreadystatechange = function() {
                if (xhttp.readyState>3 && xhttp.status==200) {
                    clearInputFields();
                    $('#vakAanDocentToevoegen').modal('hide');
                    $('.modal-backdrop').remove();
                    document.getElementById("error_message").innerHTML = '<div class="alert alert-success alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Succesvol toegevoegd  </div>';
                }
                else{
                    document.getElementById("error_message").innerHTML = '<div class="alert alert-danger alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Toevoegen is mislukt</div>';
                }

            };
            xhttp.setRequestHeader("Content-Type", "application/json");
            xhttp.send(json);
        }

        function populateVakken() {
            let URL = "http://localhost:7070/studentenvolgsysteem/api/vakken/list";

            let select = document.getElementById("vakkenList");

            let xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    let vakkenDataList = JSON.parse(this.responseText);
                    for (let index = 0; index < vakkenDataList.length; index++) {
                        let option = document.createElement("OPTION");
                        option.text = vakkenDataList[index].vaknaam;
                        option.value = vakkenDataList[index].vak_id;
                        select.add(option);
                    }
                }
            };
            xhttp.open("GET", URL, true);
            xhttp.send();
        }

        function populateDocenten() {
            let URL = "http://localhost:7070/studentenvolgsysteem/api/docenten/list";

            let select = document.getElementById("docentenList");

            let xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    let docentenDataList = JSON.parse(this.responseText);
                    for (let index = 0; index < docentenDataList.length; index++) {
                        let option = document.createElement("OPTION");
                        option.text = docentenDataList[index].achternaam + ", " + docentenDataList[index].voornaam;
                        option.value = docentenDataList[index].docent_id;
                        select.add(option);
                    }
                }
            };
            xhttp.open("GET", URL, true);
            xhttp.send();
        }

        function docentOphalen(docent_id) {

            let dataString = {
                "docent_id": docent_id,
            }
            let json = JSON.stringify(dataString)

            let xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (xhttp.readyState>3 && xhttp.status==200) {
                    let docentGevonden = JSON.parse(this.responseText);
                    document.getElementById("docent_id_form").value = docentGevonden.docent_id;
                    document.getElementById("deze_docent_verw").value = docentGevonden.docent_id;
                    document.getElementById("voornaamDocent").value = docentGevonden.voornaam;
                    document.getElementById("achternaamDocent").value = docentGevonden.achternaam;
                    document.getElementById("voornaamDocentVerwijder").innerHTML = docentGevonden.voornaam;
                    document.getElementById("achternaamDocentVerwijder").innerHTML = docentGevonden.achternaam;
                    document.getElementById("emailDocent").value = docentGevonden.email;
                    document.getElementById("telefoonDocent").value = docentGevonden.telefoon;
                    document.getElementById("mobielDocent").value = docentGevonden.mobiel;
                    document.getElementById("geslachtDocent").value = docentGevonden.geslacht;
                }
            };
            xhttp.open("POST", "http://localhost:7070/studentenvolgsysteem/api/docenten/getDocent", true);
            xhttp.setRequestHeader("Content-Type", "application/json");
            xhttp.send(json);
        }

        function docentVerwijderen(docent_id) {

            let dataString = {
                "docent_id": docent_id,
            }
            let json = JSON.stringify(dataString)

            let xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (xhttp.readyState>3 && xhttp.status==200) {
                    docentenOphalen();
                    clearInputFields();
                    $('#docentVerwijderen').modal('hide');
                    $('.modal-backdrop').remove();
                    document.getElementById("error_message").innerHTML = '<div class="alert alert-success alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Succesvol een docent verwijderd</div>';
                    }
                else{document.getElementById("error_message").innerHTML = '<div class="alert alert-danger alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Iets is mis gegaan tijdens het verwijderen</div>';}
            };
            xhttp.open("POST", "http://localhost:7070/studentenvolgsysteem/api/docenten/removeDocent", true);
            xhttp.setRequestHeader("Content-Type", "application/json");
            xhttp.send(json);
        }
        function docentBewerken() {
            let docent_id = document.getElementById("docent_id_form").value;
            let voornaam = document.getElementById("voornaamDocent").value;
            let achternaam = document.getElementById("achternaamDocent").value;
            let email = document.getElementById("emailDocent").value;
            let telefoon = document.getElementById("telefoonDocent").value;
            let mobiel = document.getElementById("mobielDocent").value;
            let geslacht = document.getElementById("geslachtDocent").value;

            let dataString = {
                "docent_id":docent_id,
                "voornaam": voornaam,
                "achternaam": achternaam,
                "email": email,
                "telefoon": telefoon,
                "mobiel": mobiel,
                "geslacht": geslacht
            }
            let json = JSON.stringify(dataString)

            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("POST", "http://localhost:7070/studentenvolgsysteem/api/docenten/updateDocent", true);
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState>3 && xmlhttp.status==200) {
                    docentenOphalen();
                    clearInputFields();
                    $('#docentBewerken').modal('hide');
                    $('.modal-backdrop').remove();
                    document.getElementById("error_message").innerHTML = '<div class="alert alert-success alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Aanpassingen waren succesvol</div>';
                    }
                    else{document.getElementById("error_message").innerHTML = '<div class="alert alert-danger alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Iets is mis gegaan tijdens het aanpassen</div>';}
            };
            xmlhttp.setRequestHeader("Content-Type", "application/json");
            xmlhttp.send(json);
        }

        function docentenOphalen() {
            let OPHAAL_URL = "http://localhost:7070/studentenvolgsysteem/api/docenten/list";

            let xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    let docentenDataList = JSON.parse(this.responseText);
                    let docentenLijst = '';
                    docentenDataList.reverse();

                    if(docentenDataList.length > 0){
                        for (let index = 0; index < docentenDataList.length; index++) {
                            docentenLijst +=
                                ' <tr>' +
                                ' <td>'+ docentenDataList[index].voornaam +' </td> ' +
                                ' <td>'+ docentenDataList[index].achternaam + '</td> ' +
                                ' <td>'+ docentenDataList[index].email + '</td> ' +
                                ' <td>'+ docentenDataList[index].geslacht + '</td> ' +
                                ' <td>'+ docentenDataList[index].mobiel + '</td> ' +
                                ' <td>active</td> ' +
                                ' <td> '+
                                '<div class="btn-group btn-group-xs">'+
                                '<a onclick="docentOphalen('+ docentenDataList[index].docent_id +')" data-toggle="modal" data-target="#docentBewerken" title="Edit" class="btn btn-default"><i class="fa fa-edit"></i></a>'+
                                '<a onclick="docentOphalen('+ docentenDataList[index].docent_id +')" data-toggle="modal" data-target="#docentVerwijderen" title="delete" class="btn btn-default"><i class="fa fa-trash-alt"></i></a>'+
                                '</div>'+
                                '</td>'+
                                ' </tr> ';
                        }
                        docentenLijst += "";
                        document.getElementById("docGegevens").innerHTML = docentenLijst;
                    }
                    else{ document.getElementById("docGegevens").innerHTML = "<tr><td style=\"text-align:center;padding: 30px;\" colspan=\"7\">Er zijn geen studenten geregistreerd</td></tr>";}

                }
                else{
                    document.getElementById("docGegevens").innerHTML = "<tr><td style=\"text-align:center;padding: 30px;\" colspan=\"7\">Iets is misgegaan. Maak contact met de administrator</td></tr>";
                }
            };
            xhttp.open("GET", OPHAAL_URL, true);
            xhttp.send();
        }
        window.onload = docentenOphalen();
        function docentToevoegen() {

            let voornaam = document.getElementById("voornaam").value;
            let achternaam = document.getElementById("achternaam").value;
            let email = document.getElementById("email").value;
            let telefoon = document.getElementById("telefoon").value;
            let mobiel = document.getElementById("mobiel").value;
            let geslacht = document.getElementById("geslacht").value;

            let dataString = {
                "voornaam": voornaam,
                "achternaam": achternaam,
                "email": email,
                "telefoon": telefoon,
                "mobiel": mobiel,
                "geslacht": geslacht
            }
            let json = JSON.stringify(dataString)

            let xhttp = new XMLHttpRequest();
            xhttp.open("POST", "http://localhost:7070/studentenvolgsysteem/api/docenten/addDocent", true);
            xhttp.onreadystatechange = function() {
                if (xhttp.readyState>3 && xhttp.status==200) {
                    docentenOphalen(); clearInputFields();
                    $('#docentenToevoegen').modal('hide');
                    $('.modal-backdrop').remove();
                document.getElementById("error_message").innerHTML = '<div class="alert alert-success alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>U heeft succesvol een nieuwe docent toegevoegd  </div>';
}
                else{document.getElementById("error_message").innerHTML = '<div class="alert alert-danger alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Toevoegen is mislukt</div>';}
            };
            xhttp.setRequestHeader("Content-Type", "application/json");
            xhttp.send(json);

        }
        function clearInputFields() {
            document.getElementById("voornaam").value = "";
            document.getElementById("achternaam").value = "";
            document.getElementById("email").value = "";
            document.getElementById("telefoon").value = "";
            document.getElementById("mobiel").value = "";
            document.getElementById("geslacht").value = "";
            document.getElementById("docent_vak_id").value = "";
            document.getElementById("vakkenList").value = "";
            document.getElementById("docentenList").value = "";
        }
    </script>
<?php  include'inc/bottom.php';?>


