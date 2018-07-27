<?php  include'inc/head.php';?>
    <div class="container-fluid">
        <div class="row">
            <?php  include'inc/sidebar.php';?>
            <div class="main col-md-10">
                <section class="jumbotron text-center header-jumbo">
                    <div class="container">
                        <h4 class="jumbotron-heading">Studenten</h4>
                        <button  type="button" class="btn_dark_bg" data-toggle="modal" onclick="districtenOphalen(),pakkettenOphalen()" data-target="#studentToevoegen">Toevoegen</button>
                    </div>
                </section>
                <div class="content">
                    <div id="error_message"></div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="widget">
                                <div class="widget-content">
                                    <div class="table-responsive">
                                        <table data-sortable="" class="table" data-sortable-initialized="true">
                                            <thead>
                                            <tr>
                                                <th>Voornaam</th>
                                                <th>Achternaam</th>
                                                <th>Geslacht</th>
                                                <th>District</th>
                                                <th>Adres</th>
                                                <th>Telefoon</th>
                                                <th>Status</th>
                                                <th>Opties</th>
                                            </tr>
                                            </thead>

                                            <tbody id="studGegevens">

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- modals -->
    <div id="studentToevoegen" tabindex="-1" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Docent Toevoegen</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <h2 class="formulier-titels">Persoonlijke Gegevens</h2>
                        <div class="row">
                            <div class="col">
                                <label>Voornaam</label>
                                <input type="text" class="form-control" id="voornaam" >
                            </div>
                            <div class="col">
                                <label>Achternaam</label>
                                <input type="text" class="form-control" id="achternaam">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label>Geboortedatum</label>
                                <input type="date" class="form-control" id="geboortedatum">
                            </div>
                            <div class="col">
                                <label>Geboorteplaats</label>
                                <input type="text" class="form-control" id="geboorteplaats" >
                            </div>
                            <div class="col">
                                <label>Geslacht</label>
                                <select type="text" class="form-control" id="geslacht">
                                    <option disabled>Selecteer</option>
                                    <option value="m">Man</option>
                                    <option value="v">Vrouw</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label>District</label>
                                <select type="text" class="form-control" id="district_id">
                                </select>
                            </div>
                            <div class="col">
                                <label>Adres</label>
                                <input type="text" class="form-control" id="adres" placeholder="Adres">
                            </div>
                            <div class="col">
                                <label>Telefoon</label>
                                <input type="number" class="form-control" id="telefoon" placeholder="Telefoon">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label>Medische Klachten</label>
                                <textarea class="form-control" id="medische_klachten"></textarea>
                            </div>

                        </div>
                        <br>
                        <h2 class="formulier-titels">School Gegevens</h2>
                        <div class="row">
                            <div class="col">
                                <label>Mulo school</label>
                                <input type="text" class="form-control" id="naam_muloschool">
                            </div>
                            <div class="col">
                                <label>Richting Mulo</label>
                                <select type="text" class="form-control" id="richting_mulo">
                                    <option value="a">A</option>
                                    <option value="b">B</option>
                                </select>
                            </div>
                            <div class="col">
                                <label>Gekozen Pakket</label>
                                <select type="text" class="form-control" id="pakket_id">
                                </select>
                            </div>
                        </div>
                        <br>
                        <h2 class="formulier-titels">Verzorger/ouder Gegevens</h2>
                        <div class="row">
                            <div class="col">
                                <label>Naam verzorger/ouder</label>
                                <input type="text" class="form-control" id="naam_verzorger">
                            </div>
                            <div class="col">
                                <label>Type Verzorger</label>
                                <select type="text" class="form-control" id="type_verzorger">
                                    <option value="Ouder">Ouder</option>
                                    <option value="Verzorger">Verzorger</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label>Telefoon</label>
                                <input type="text" class="form-control" id="verzorger_telefoon">
                            </div>

                            <div class="col">
                                <label>District</label>
                                <select type="text" class="form-control" id="verzorger_district_id">

                                </select>
                            </div>
                            <div class="col">
                                <label>Adres</label>
                                <input type="text" class="form-control" id="verzorger_adres">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label>Beroep</label>
                                <input type="text" class="form-control" id="verzorger_beroep">
                            </div>
                            <div class="col">
                                <label>Werk Adres</label>
                                <input type="text" class="form-control" id="verzorger_werkadres">
                            </div>
                            <div class="col">
                                <label>Werk Telefoon</label>
                                <input type="number" class="form-control" id="verzorger_werktelefoon">
                                <input type="hidden" class="form-control" value="1" id="status">
                            </div>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="studentToevoegen()">Toevoegen</button>
                </div>
            </div>

        </div>
    </div>
    <div id="studentBewerken" tabindex="-1" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Student Bewerken</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="" id="student_bewerken_form">
                        <h2 class="formulier-titels">Persoonlijke Gegevens</h2>
                        <div class="row">
                            <div class="col">
                                <label>Voornaam</label>
                                <input type="text" class="form-control" id="voornaam_bew" >
                            </div>
                            <div class="col">
                                <label>Achternaam</label>
                                <input type="text" class="form-control" id="achternaam_bew">
                            </div>
                            <div class="col">
                                <label>Status</label>
                                <select class="form-control" id="status_bew">
                                    <option value="1">Actief</option>
                                    <option value="2">Inactief</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label>Geboortedatum</label>
                                <input type="date" class="form-control" id="geboortedatum_bew">
                            </div>
                            <div class="col">
                                <label>Geboorteplaats</label>
                                <input type="text" class="form-control" id="geboorteplaats_bew" >
                            </div>
                            <div class="col">
                                <label>Geslacht</label>
                                <select type="text" class="form-control" id="geslacht_bew">
                                    <option disabled>Selecteer</option>
                                    <option value="m">Man</option>
                                    <option value="v">Vrouw</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label>District</label>
                                <select class="form-control" id="district_id_bew">
                                    <option id="current_district" value="" selected="selected"></option>
                                    <option value="10">Wanica </option>
                                    <option value="9">Saramacca </option>
                                    <option value="8">Paramaribo </option>
                                    <option value="7">Para </option>
                                    <option value="6">Nickerie </option>
                                    <option value="5">Marowijne </option>
                                    <option value="4">Coronie </option>
                                    <option value="3">Commewijne </option>
                                    <option value="2">Sipaliwini </option>
                                    <option value="1">Brokopondo </option>
                                </select>
                            </div>
                            <div class="col">
                                <label>Adres</label>
                                <input type="text" class="form-control" id="adres_bew" placeholder="Adres">
                            </div>
                            <div class="col">
                                <label>Telefoon</label>
                                <input type="number" class="form-control" id="telefoon_bew" placeholder="Telefoon">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label>Medische Klachten</label>
                                <textarea class="form-control" id="medische_klachten_bew"></textarea>
                            </div>

                        </div>
                        <br>
                        <h2 class="formulier-titels">School Gegevens</h2>
                        <div class="row">
                            <div class="col">
                                <label>Mulo school</label>
                                <input type="text" class="form-control" id="naam_muloschool_bew">
                            </div>
                            <div class="col">
                                <label>Richting Mulo</label>
                                <select type="text" class="form-control" id="richting_mulo_bew">
                                    <option value="a">A</option>
                                    <option value="b">B</option>
                                </select>
                            </div>
                            <div class="col">
                                <label>Gekozen Pakket</label>
                                <select class="form-control" id="pakket_id_bew">
                                    <option disabled>Geen</option>
                                    <option value="3">R </option>
                                    <option value="2">P2 </option>
                                    <option value="1">P1 </option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <h2 class="formulier-titels">Verzorger/ouder Gegevens</h2>
                        <div class="row">
                            <div class="col">
                                <label>Naam verzorger/ouder</label>
                                <input type="text" class="form-control" id="naam_verzorger_bew">
                            </div>
                            <div class="col">
                                <label>Type Verzorger</label>
                                <select type="text" class="form-control" id="type_verzorger_bew">
                                    <option value="Ouder">Ouder</option>
                                    <option value="Verzorger">Verzorger</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label>Telefoon</label>
                                <input type="text" class="form-control" id="verzorger_telefoon_bew">
                            </div>

                            <div class="col">
                                <label>District</label>
                                <select type="text" class="form-control" id="verzorger_district_id_bew">
                                    <option id="current_verzorger_district" value=""></option>
                                    <option value="10">Wanica </option>
                                    <option value="9">Saramacca </option>
                                    <option value="8">Paramaribo </option>
                                    <option value="7">Para </option>
                                    <option value="6">Nickerie </option>
                                    <option value="5">Marowijne </option>
                                    <option value="4">Coronie </option>
                                    <option value="3">Commewijne </option>
                                    <option value="2">Sipaliwini </option>
                                    <option value="1">Brokopondo </option>
                                </select>
                            </div>
                            <div class="col">
                                <label>Adres</label>
                                <input type="text" class="form-control" id="verzorger_adres_bew">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label>Beroep</label>
                                <input type="text" class="form-control" id="verzorger_beroep_bew">
                            </div>
                            <div class="col">
                                <label>Werk Adres</label>
                                <input type="text" class="form-control" id="verzorger_werkadres_bew">
                            </div>
                            <div class="col">
                                <label>Werk Telefoon</label>
                                <input type="number" class="form-control" id="verzorger_werktelefoon_bew">
                                <input type="hidden" class="form-control" id="student_id">

                            </div>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="studentBewerken()">Bewerken</button>
                </div>
            </div>

        </div>
    </div>
    <div id="studentVerwijderen" class="modal fade" role="dialog">
        <div class="modal-dialog modal-md">

            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Student Verwijderen</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" action="">
                        <input type="hidden" id="deze_student_verw" value="" />
                        <p style="text-align:center;">Bent u zeker dat u <Strong><span id="voornaamStudentVerwijder"></span> <span id="achternaamStudentVerwijder"></span></Strong> wilt verwijderen?</p>
                        <div class="offset-md-3 col-md-6">
                            <button type="button"  class="btn btn-primary offset-md-1 col-md-4" data-dismiss="modal">Nee</button>
                            <button type="button"  class="btn btn-primary offset-md-1 col-md-4" onclick="studentenVerwijderen(document.getElementById('deze_student_verw').value)">Ja</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
<script>
    function studentenOphalen() {
        let OPHAAL_URL = "http://localhost:7070/studentenvolgsysteem/api/studenten/list";

        let xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                let studentenDataList = JSON.parse(this.responseText);
                let studentenLijst = '';
                studentenDataList.reverse();
                if(studentenDataList.length > 0){
                    for (let index = 0; index < studentenDataList.length; index++) {
                        let status ="";
                        if(studentenDataList[index].status === 1){
                            status = "Actief";
                        }else{ status = "Inactief";}
                        studentenLijst +=
                            ' <tr>' +
                            ' <td>'+ studentenDataList[index].voornaam +' </td> ' +
                            ' <td>'+ studentenDataList[index].achternaam + '</td> ' +
                            ' <td>'+ studentenDataList[index].geslacht + '</td> ' +
                            ' <td>'+ studentenDataList[index].district_id.district_naam + '</td> ' +
                            ' <td>'+ studentenDataList[index].adres + '</td> ' +
                            ' <td>'+ studentenDataList[index].telefoon + '</td> ' +
                            ' <td>'+ status + '</td> ' +
                            ' <td> '+
                            '<div class="btn-group btn-group-xs">'+
                            '<a onclick="studentOphalen('+ studentenDataList[index].student_id +')" data-toggle="modal" data-target="#studentBewerken" title="Edit" class="btn btn-default"><i class="fa fa-edit"></i></a>'+
                            '<a onclick="studentOphalen('+ studentenDataList[index].student_id +')" data-toggle="modal" data-target="#studentVerwijderen" title="delete" class="btn btn-default"><i class="fa fa-trash-alt"></i></a>'+
                            '</div>'+
                            '</td>'+
                            ' </tr> ';
                    }
                    studentenLijst += "";
                    document.getElementById("studGegevens").innerHTML = studentenLijst;
                }else{
                    document.getElementById("studGegevens").innerHTML = "<tr><td style=\"text-align:center;padding: 30px;\" colspan=\"8\">Er zijn momenteel geen studenten geregistreerd</td></tr>";
                }

            }
            else{
                document.getElementById("studGegevens").innerHTML = "<tr><td style=\"text-align:center;padding: 30px;\" colspan=\"8\">Iets is misgegaan. Contact de administrator</td></tr>";
            }
        };
        xhttp.open("GET", OPHAAL_URL, true);
        xhttp.send();
    }
    window.onload = studentenOphalen();
    function districtenOphalen() {
        let OPHAAL_URL = "http://localhost:7070/studentenvolgsysteem/api/districten/list";

        let xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                let districtenDataList = JSON.parse(this.responseText);
                let districtenLijst = '';
                districtenDataList.reverse();
                if(districtenDataList.length > 0){
                    for (let index = 0; index < districtenDataList.length; index++) {
                        districtenLijst +=
                            ' <option value="'+ districtenDataList[index].district_id +'">'+ districtenDataList[index].district_naam +' </option> ';
                    }
                    districtenLijst += "";
                    document.getElementById("district_id").innerHTML = districtenLijst;
                    document.getElementById("verzorger_district_id").innerHTML = districtenLijst;


                }else{
                    document.getElementById("district_id").innerHTML = "<option style=\"text-align:center;padding: 30px;\" colspan=\"8\">Geen Districten</option>";
                }
            }
        };
        xhttp.open("GET", OPHAAL_URL, true);
        xhttp.send();
    }
    function districtOphalen(district_id) {

        let dataString = {
            "district_id": district_id,
        }
        let json = JSON.stringify(dataString)

        let xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (xhttp.readyState>3 && xhttp.status==200) {
                let districtGevonden = JSON.parse(this.responseText);
                document.getElementById("district_resultaat").innerHTML = districtGevonden.district_naam;
            }
        };
        xhttp.open("POST", "http://localhost:7070/studentenvolgsysteem/api/districten/getDistrict", true);
        xhttp.setRequestHeader("Content-Type", "application/json");
        xhttp.send(json);
    }
    function pakkettenOphalen() {
        let OPHAAL_URL = "http://localhost:7070/studentenvolgsysteem/api/pakketten/list";

        let xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                let pakkettenDataList = JSON.parse(this.responseText);
                let pakkettenLijst = '';
                pakkettenDataList.reverse();
                if(pakkettenDataList.length > 0){
                    for (let index = 0; index < pakkettenDataList.length; index++) {
                        pakkettenLijst +=
                            ' <option value="'+ pakkettenDataList[index].pakket_id +'">'+ pakkettenDataList[index].pakketnaam +' </option> ';
                    }
                    pakkettenLijst += "";
                    document.getElementById("pakket_id").innerHTML = pakkettenLijst;
                }else{
                    document.getElementById("pakket_id").innerHTML = "<option style=\"text-align:center;padding: 30px;\" colspan=\"8\">Geen Pakketten</option>";
                }

            }
        };
        xhttp.open("GET", OPHAAL_URL, true);
        xhttp.send();
    }
    function studentToevoegen() {

        let voornaam = document.getElementById("voornaam").value;
        let achternaam = document.getElementById("achternaam").value;
        let geboortedatum = document.getElementById("geboortedatum").value;
        let geboorteplaats = document.getElementById("geboorteplaats").value;
        let district_id = document.getElementById("district_id").value;
        let adres = document.getElementById("adres").value;
        let telefoon = document.getElementById("telefoon").value;
        let medische_klachten = document.getElementById("medische_klachten").value;
        let naam_muloschool= document.getElementById("naam_muloschool").value;
        let richting_mulo = document.getElementById("richting_mulo").value;
        let naam_verzorger = document.getElementById("naam_verzorger").value;
        let verzorger_beroep = document.getElementById("verzorger_beroep").value;
        let verzorger_district_id = document.getElementById("verzorger_district_id").value;
        let verzorger_adres = document.getElementById("verzorger_adres").value;
        let verzorger_telefoon = document.getElementById("verzorger_telefoon").value;
        let verzorger_werkadres = document.getElementById("verzorger_werkadres").value;
        let verzorger_werktelefoon = document.getElementById("verzorger_werktelefoon").value;
        let type_verzorger = document.getElementById("type_verzorger").value;
        let pakket_id = document.getElementById("pakket_id").value;
        let geslacht = document.getElementById("geslacht").value;
        let status = document.getElementById("status").value;

        let dataString = {
            "voornaam": voornaam,
            "achternaam": achternaam,
            "geboortedatum": geboortedatum,
            "geboorteplaats": geboorteplaats,
            "district_id": district_id,
            "adres": adres,
            "telefoon": telefoon,
            "medische_klachten": medische_klachten,
            "naam_muloschool": naam_muloschool,
            "richting_mulo": richting_mulo,
            "naam_verzorger": naam_verzorger,
            "verzorger_beroep": verzorger_beroep,
            "verzorger_adres": verzorger_adres,
            "verzorger_district_id": verzorger_district_id,
            "verzorger_telefoon": verzorger_telefoon,
            "verzorger_werkadres": verzorger_werkadres,
            "type_verzorger": type_verzorger,
            "verzorger_werktelefoon": verzorger_werktelefoon,
            "pakket_id": {"pakket_id": pakket_id, "pakketnaam": document.getElementById("pakket_id").text},
            "geslacht": geslacht,
            "status": status
        }
        let json = JSON.stringify(dataString)

        let xhttp = new XMLHttpRequest();
        xhttp.open("POST", "http://localhost:7070/studentenvolgsysteem/api/studenten/addStudent", true);
        xhttp.onreadystatechange = function() {
            if (xhttp.readyState>3 && xhttp.status==200) {
                studentenOphalen(); clearInputFields();
                $('#studentToevoegen').modal('hide');
                $('.modal-backdrop').remove();
                document.getElementById("error_message").innerHTML = '<div class="alert alert-success alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>U heeft succesvol een nieuwe Student toegevoegd  </div>';
            }
            else{document.getElementById("error_message").innerHTML = '<div class="alert alert-danger alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Toevoegen is mislukt</div>';}
        };
        xhttp.setRequestHeader("Content-Type", "application/json");
        xhttp.send(json);

    }
    function studentOphalen(student_id) {

        let dataString = {
            "student_id": student_id,
        }
        let json = JSON.stringify(dataString)

        let xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (xhttp.readyState>3 && xhttp.status==200) {
                let studentGevonden = JSON.parse(this.responseText);
                let dateNumberString = studentGevonden.geboortedatum;
                let nieuweDag = new Date(dateNumberString);
                let jaar = nieuweDag.getFullYear();
                let maand = nieuweDag.getMonth()+1;
                let dag = nieuweDag.getUTCDate();
                if(10 > maand){maand = "0"+maand;}
                if(10 > dag){dag = "0"+dag;} else{dag = ""+dag;}
                let dagFormaat = jaar+"-"+maand+"-"+dag;
                document.getElementById("student_id").value = studentGevonden.student_id;
                document.getElementById("voornaam_bew").value = studentGevonden.voornaam;
                document.getElementById("achternaam_bew").value = studentGevonden.achternaam;
                document.getElementById("geboortedatum_bew").value = dagFormaat ;
                document.getElementById("geboorteplaats_bew").value = studentGevonden.geboorteplaats;
                document.getElementById("current_district").value = studentGevonden.district_id.district_id;
                document.getElementById("current_district").textContent = studentGevonden.district_id.district_naam;
                document.getElementById("adres_bew").value = studentGevonden.adres;
                document.getElementById("telefoon_bew").value = studentGevonden.telefoon;
                document.getElementById("medische_klachten_bew").value = studentGevonden.medische_klachten;
                document.getElementById("naam_muloschool_bew").value = studentGevonden.naam_muloschool;
                document.getElementById("richting_mulo_bew").value = studentGevonden.richting_mulo;
                document.getElementById("naam_verzorger_bew").value = studentGevonden.naam_verzorger;
                document.getElementById("verzorger_beroep_bew").value = studentGevonden.verzorger_beroep;
                document.getElementById("current_verzorger_district").value = studentGevonden.verzorger_district_id.district_id;
                document.getElementById("current_verzorger_district").textContent = studentGevonden.verzorger_district_id.district_naam;
                document.getElementById("verzorger_adres_bew").value = studentGevonden.verzorger_adres;
                document.getElementById("verzorger_telefoon_bew").value = studentGevonden.verzorger_telefoon;
                document.getElementById("verzorger_werkadres_bew").value = studentGevonden.verzorger_werkadres;
                document.getElementById("verzorger_werktelefoon_bew").value = studentGevonden.verzorger_werktelefoon;
                document.getElementById("type_verzorger_bew").value = studentGevonden.type_verzorger;
                document.getElementById("pakket_id_bew").value = studentGevonden.pakket_id.pakket_id;
                document.getElementById("geslacht_bew").value = studentGevonden.geslacht;
                document.getElementById("status_bew").value = studentGevonden.status;
                document.getElementById("deze_student_verw").value = studentGevonden.student_id;
                document.getElementById("voornaamStudentVerwijder").innerHTML = studentGevonden.voornaam;
                document.getElementById("achternaamStudentVerwijder").innerHTML = studentGevonden.achternaam;

            }
        };
        xhttp.open("POST", "http://localhost:7070/studentenvolgsysteem/api/studenten/getStudent", true);
        xhttp.setRequestHeader("Content-Type", "application/json");
        xhttp.send(json);
    }
    function studentenVerwijderen(student_id) {

        let dataString = {
            "student_id": student_id,
        }
        let json = JSON.stringify(dataString)

        let xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (xhttp.readyState>3 && xhttp.status==200) {
                studentenOphalen();
                clearInputFields();
                $('#studentVerwijderen').modal('hide');
                $('.modal-backdrop').remove();
                document.getElementById("error_message").innerHTML = '<div class="alert alert-success alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Succesvol een student verwijderd</div>';
            }
            else{document.getElementById("error_message").innerHTML = '<div class="alert alert-danger alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Iets is mis gegaan tijdens het verwijderen</div>';}
        };
        xhttp.open("POST", "http://localhost:7070/studentenvolgsysteem/api/studenten/removeStudent", true);
        xhttp.setRequestHeader("Content-Type", "application/json");
        xhttp.send(json);
    }
    function studentBewerken() {
        let geboortedatum = document.getElementById("geboortedatum_bew").value;
        let nieuweDag = new Date(geboortedatum);
        let jaar = nieuweDag.getFullYear();
        let maand = nieuweDag.getMonth()+1;
        let dag = nieuweDag.getUTCDate()+1;
        if(10 > maand){maand = "0"+maand;}
        if(10 > dag){dag = "0"+dag;} else{dag = ""+dag;}
        let dagFormaat = jaar+"-"+maand+"-"+dag;
        let student_id = document.getElementById("student_id").value;
        let voornaam = document.getElementById("voornaam_bew").value;
        let achternaam = document.getElementById("achternaam_bew").value;
        let geboorteplaats = document.getElementById("geboorteplaats_bew").value;
        let district_id = document.getElementById("district_id_bew").value;
        let adres = document.getElementById("adres_bew").value;
        let telefoon = document.getElementById("telefoon_bew").value;
        let medische_klachten = document.getElementById("medische_klachten_bew").value;
        let naam_muloschool= document.getElementById("naam_muloschool_bew").value;
        let richting_mulo = document.getElementById("richting_mulo_bew").value;
        let naam_verzorger = document.getElementById("naam_verzorger_bew").value;
        let verzorger_beroep = document.getElementById("verzorger_beroep_bew").value;
        let verzorger_district_id = document.getElementById("verzorger_district_id_bew").value;
        let verzorger_adres = document.getElementById("verzorger_adres_bew").value;
        let verzorger_telefoon = document.getElementById("verzorger_telefoon_bew").value;
        let verzorger_werkadres = document.getElementById("verzorger_werkadres_bew").value;
        let verzorger_werktelefoon = document.getElementById("verzorger_werktelefoon_bew").value;
        let type_verzorger = document.getElementById("type_verzorger_bew").value;
        let pakket_id = document.getElementById("pakket_id_bew").value;
        let geslacht = document.getElementById("geslacht_bew").value;
        let status = document.getElementById("status_bew").value;

        let dataString = {
            "student_id":student_id,
            "voornaam": voornaam,
            "achternaam": achternaam,
            "geboortedatum": dagFormaat,
            "geboorteplaats": geboorteplaats,
            "district_id": {"district_id": district_id, "district_naam": document.getElementById("district_id_bew").text},
            "adres": adres,
            "telefoon": telefoon,
            "medische_klachten": medische_klachten,
            "naam_muloschool": naam_muloschool,
            "richting_mulo": richting_mulo,
            "naam_verzorger": naam_verzorger,
            "verzorger_beroep": verzorger_beroep,
            "verzorger_adres": verzorger_adres,
            "verzorger_district_id": {"district_id": verzorger_district_id, "district_naam": document.getElementById("verzorger_district_id_bew").text},
            "verzorger_telefoon": verzorger_telefoon,
            "verzorger_werkadres": verzorger_werkadres,
            "type_verzorger": type_verzorger,
            "verzorger_werktelefoon": verzorger_werktelefoon,
            "pakket_id": {"pakket_id": pakket_id, "pakketnaam": document.getElementById("pakket_id").text},
            "geslacht": geslacht,
            "status": status
        }
        let json = JSON.stringify(dataString)

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("POST", "http://localhost:7070/studentenvolgsysteem/api/studenten/updateStudent", true);
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState>3 && xmlhttp.status==200) {
                clearInputFields();
                document.getElementById("student_bewerken_form").reset();
                window.onload = studentenOphalen();
                $('#studentBewerken').modal('hide');
                $('.modal-backdrop').remove();
                document.getElementById("error_message").innerHTML = '<div class="alert alert-success alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Aanpassingen waren succesvol</div>';
            }
            else{document.getElementById("error_message").innerHTML = '<div class="alert alert-danger alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Iets is mis gegaan tijdens het aanpassen</div>';}
        };
        xmlhttp.setRequestHeader("Content-Type", "application/json");
        xmlhttp.send(json);

    }
    function clearInputFields() {
        document.getElementById("voornaam_bew").value ="";
        document.getElementById("achternaam_bew").value ="";
       document.getElementById("geboorteplaats_bew").value ="";
       document.getElementById("district_id_bew").value ="";
        document.getElementById("adres_bew").value ="";
       document.getElementById("telefoon_bew").value ="";
        document.getElementById("medische_klachten_bew").value ="";
        document.getElementById("naam_muloschool_bew").value ="";
        document.getElementById("richting_mulo_bew").value ="";
         document.getElementById("naam_verzorger_bew").value ="";
        document.getElementById("verzorger_beroep_bew").value ="";
        document.getElementById("verzorger_district_id_bew").value ="";
        document.getElementById("verzorger_adres_bew").value ="";
        document.getElementById("verzorger_telefoon_bew").value ="";
        document.getElementById("verzorger_werkadres_bew").value ="";
        document.getElementById("verzorger_werktelefoon_bew").value ="";
        document.getElementById("type_verzorger_bew").value ="";
        document.getElementById("pakket_id_bew").value ="";
        document.getElementById("geslacht_bew").value ="";
        document.getElementById("status_bew").value ="";
        document.getElementById("voornaam").value ="";
        document.getElementById("achternaam").value ="";
        document.getElementById("geboorteplaats").value ="";
        document.getElementById("district_id").value ="";
        document.getElementById("adres").value ="";
        document.getElementById("telefoon").value ="";
        document.getElementById("medische_klachten").value ="";
        document.getElementById("naam_muloschool").value ="";
        document.getElementById("richting_mulo").value ="";
        document.getElementById("naam_verzorger").value ="";
        document.getElementById("verzorger_beroep").value ="";
        document.getElementById("verzorger_district_id").value ="";
        document.getElementById("verzorger_adres").value ="";
        document.getElementById("verzorger_telefoon").value ="";
        document.getElementById("verzorger_werkadres").value ="";
        document.getElementById("verzorger_werktelefoon").value ="";
        document.getElementById("type_verzorger").value ="";
        document.getElementById("pakket_id").value ="";
        document.getElementById("geslacht").value ="";
        document.getElementById("status").value ="";
    }

</script>

<?php  include'inc/bottom.php';?>