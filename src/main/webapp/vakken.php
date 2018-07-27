<?php include 'inc/head.php'; ?>
    <div class="container-fluid">
    <div class="row">
        <?php include 'inc/sidebar.php'; ?>
        <div class="main col-md-10">
            <section class="jumbotron text-center header-jumbo">
                <div class="container">
                    <h4 class="jumbotron-heading">Vakken Overzicht</h4>
                    <button type="button" class="btn_dark_bg" data-toggle="modal" data-target="#vakkenToevoegen">
                        Toevoegen
                    </button>
                </div>
            </section>
            <div class="content">
                <div id="error_message"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="widget">
                            <div class="widget-content">
                                <div class="table-responsive">
                                    <table data-sortable="" class="table table-hover" data-sortable-initialized="true">
                                        <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Vak Naam</th>
                                            <th>Afkorting</th>

                                            <th data-sortable="false">Bewerken</th>
                                        </tr>
                                        </thead>
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
                                <input type="text" class="form-control" id="vaknaam" placeholder="Naam">
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
                        <input type="hidden" id="vak_id_bewerken_input" value=""/>
                        <div class="form-group">
                            <div class="offset-md-2 col-md-8">
                                <label>Vak Naam</label>
                                <input type="text" class="form-control" id="vaknaam_bewerken_input" value="" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="offset-md-2 col-md-8">
                                <label>Afkorting</label>
                                <input type="text" class="form-control" id="afkorting_bewerken_input" value="" />
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="updatevak(document.getElementById('vak_id_bewerken_input'))">Bewerken</button>
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
                        <input type="hidden" id="dit_vak_verwijderen" value=""/>
                        <p style="text-align:center;">Bent u zeker dat u <Strong><span id="vaknaamVerwijder"></span>
                                </Strong> wilt verwijderen?</p>
                        <div class="offset-md-3 col-md-6">
                            <button type="button" class="btn btn-primary offset-md-1 col-md-4" data-dismiss="modal">
                                Nee
                            </button>
                            <button type="button" class="btn btn-primary offset-md-1 col-md-4"
                                    onclick="deleteVak(document.getElementById('dit_vak_verwijderen').value)">Ja
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <script>
        vakkenOphalen();
        function vakkenToevoegen() {
            let vak = document.getElementById("vaknaam").value;
            let afkorting = document.getElementById("afkorting").value;

            let dataString = {
                "vaknaam": vak,
                "afkorting": afkorting
            };
            let json = JSON.stringify(dataString);

            let xhttp = new XMLHttpRequest();
            xhttp.open("POST", "http://localhost:7070/studentenvolgsysteem/api/vakken/addVak", true);
            xhttp.onreadystatechange = function () {
                if (xhttp.readyState > 3 && xhttp.status == 200) {
                    clearInputFields();
                    window.onload = vakkenOphalen();
                    $('#vakkenToevoegen').modal('hide');
                    $('.modal-backdrop').remove();
                    document.getElementById("error_message").innerHTML = '<div class="alert alert-success alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>U heeft succesvol een nieuwe vak toegevoegd  </div>';
                }
                else {
                    document.getElementById("error_message").innerHTML = '<div class="alert alert-danger alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Toevoegen is mislukt</div>';
                }

            };
            xhttp.setRequestHeader("Content-Type", "application/json");
            xhttp.send(json);
        }
        function vakkenOphalen() {
            let OPHAAL_URL = "http://localhost:7070/studentenvolgsysteem/api/vakken/list";

            let xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    let vakkenDataList = JSON.parse(this.responseText);
                    let vakkenLijst = '';
                    let countRecords=1;
                    vakkenDataList.reverse();

                    if(vakkenDataList.length > 0){
                        for (let index = 0; index < vakkenDataList.length; index++) {
                            vakkenLijst +=
                                ' <tr>' +
                                ' <td>'+ countRecords +' </td> ' +
                                ' <td>'+ vakkenDataList[index].vaknaam + '</td> ' +
                                ' <td>'+ vakkenDataList[index].afkorting + '</td> ' +
                                ' <td> '+
                                '<div class="btn-group btn-group-xs">'+
                                '<a onclick="getVak('+ vakkenDataList[index].vak_id +')" data-toggle="modal" data-target="#vakkenBewerken" title="Edit" class="btn btn-default"><i class="fa fa-edit"></i></a>'+
                                '<a onclick="getVak('+ vakkenDataList[index].vak_id +')" data-toggle="modal" data-target="#vakkenVerwijderen" title="delete" class="btn btn-default"><i class="fa fa-trash-alt"></i></a>'+
                                '</div>'+
                                '</td>'+
                                ' </tr> ';
                            countRecords++;
                        }
                        vakkenLijst += "";
                        document.getElementById("vakkenGegevens").innerHTML = vakkenLijst;
                    }
                    else{ document.getElementById("vakkenGegevens").innerHTML = "<tr><td style=\"text-align:center;padding: 30px;\" colspan=\"7\">Er zijn geen Vakken</td></tr>";}

                }
                else{
                    document.getElementById("vakkenGegevens").innerHTML = "<tr><td style=\"text-align:center;padding: 30px;\" colspan=\"7\">Iets is misgegaan. Maak contact met de administrator</td></tr>";
                }
            };
            xhttp.open("GET", OPHAAL_URL, true);
            xhttp.send();
        }
        function updatevak() {
            let vak_id = document.getElementById("vak_id_bewerken_input").value;
            let vak = document.getElementById("vaknaam_bewerken_input").value;
            let afkorting = document.getElementById("afkorting_bewerken_input").value;

            let dataString = {
                "vak_id": vak_id,
                "vaknaam": vak,
                "afkorting": afkorting
            };
            let json = JSON.stringify(dataString);

            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("POST", "http://localhost:7070/studentenvolgsysteem/api/vakken/updateVak", true);
            xmlhttp.onreadystatechange = function () {
                if (xmlhttp.readyState > 3 && xmlhttp.status == 200) {
                    window.onload = vakkenOphalen();
                    clearInputFields();
                    $('#vakkenBewerken').modal('hide');
                    $('.modal-backdrop').remove();
                    document.getElementById("error_message").innerHTML = '<div class="alert alert-success alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Aanpassingen waren succesvol</div>';
                }
                else {
                    document.getElementById("error_message").innerHTML = '<div class="alert alert-danger alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Iets is mis gegaan tijdens het aanpassen</div>';
                }

            };
            xmlhttp.setRequestHeader("Content-Type", "application/json");
            xmlhttp.send(json);
        }
        function getVak(vak_id) {

            let dataString = {
                "vak_id": vak_id,
            };
            let json = JSON.stringify(dataString);

            let xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (xhttp.readyState > 3 && xhttp.status == 200) {
                    let foundVak = JSON.parse(this.responseText);
                    document.getElementById("vak_id_bewerken_input").value = foundVak.vak_id;
                    document.getElementById("dit_vak_verwijderen").value = foundVak.vak_id;
                    document.getElementById("vaknaam_bewerken_input").value = foundVak.vaknaam;
                    document.getElementById("vaknaamVerwijder").innerHTML = foundVak.vaknaam;
                    document.getElementById("afkorting_bewerken_input").value = foundVak.afkorting;

                }
            };
            xhttp.open("POST", "http://localhost:7070/studentenvolgsysteem/api/vakken/getVak", true);
            xhttp.setRequestHeader("Content-Type", "application/json");
            xhttp.send(json);
        }

        function deleteVak(vak_id) {
            let dataString = {
                "vak_id": vak_id,
            }
            let json = JSON.stringify(dataString)

            let xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (xhttp.readyState>3 && xhttp.status==200) {
                    window.onload = vakkenOphalen();
                    clearInputFields();
                    $('#vakkenVerwijderen').modal('hide');
                    $('.modal-backdrop').remove();
                    document.getElementById("error_message").innerHTML = '<div class="alert alert-success alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Succesvol een Vak verwijderd</div>';
                }
                else{document.getElementById("error_message").innerHTML = '<div class="alert alert-danger alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Iets is mis gegaan tijdens het verwijderen</div>';}
            };
            xhttp.open("POST", "http://localhost:7070/studentenvolgsysteem/api/vakken/removeVak", true);
            xhttp.setRequestHeader("Content-Type", "application/json");
            xhttp.send(json);
        }

        function validateForm() {
            let pass = true;
            let vak_id = document.getElementById("vak_id").value;
            let vak = document.getElementById("vak").value;
            let afkorting = document.getElementById("afkorting").value;

            if (vak == "") {
                alert("Please fill in all fields.");
                pass = false;
            }

            return pass;
        }

        function clearInputFields() {
            document.getElementById("vaknaam").value = "";
            document.getElementById("afkorting").value = "";
        }

    </script>

<?php include 'inc/bottom.php'; ?>