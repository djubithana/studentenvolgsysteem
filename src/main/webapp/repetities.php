<?php  include'inc/head.php';?>
    <div class="container-fluid">
        <div class="row">
            <?php  include'inc/sidebar.php';?>
            <div class="main col-md-10">
                <section class="jumbotron text-center header-jumbo">
                    <div class="container">
                        <h4 class="jumbotron-heading">Repetities Toevoegen</h4>
                        <button class="btn_dark_bg" data-toggle="modal" data-target="#repetitieToevoegen">Toevoegen</button>
                    </div>
                </section>
                <div class="content">
                    <div class="row">
                <table class="table table-condensed">
                    <thead>
                    <tr>
                        <th scope="col">Kwartaal</th>
                        <th scope="col">Vaknaam</th>
                        <th scope="col">Docent</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody id="repetitieGegevens">

                    </tbody>
                </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="repetitieToevoegen" tabindex="-1" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Repetitie Toevoegen</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" action="">
                        <div id="error_message"</div>
                        <div class="form-group">
                        <div class="offset-2 col-md-8">
                            <select class="form-control" id="kwartaaldropdown">
                                <option value="" disabled selected>Select kwartaal</option>
                            </select>
                        </div>
                        </div>
                            <div class="form-group">
                            <div class="offset-md-2 col-md-8">
                                <select class="form-control" id="vakdropdown" >
                                    <option value="" id="vakId"  disabled selected>Select vak</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="offset-md-2 col-md-8">
                                <select class="form-control" id="docentdropdown" >
                                    <option value=""  disabled selected >Select docent</option>
                                </select>
                            </div>
                        </div>
                <input type="hidden" class="form-control" id="repetitie_id" >
                <input type="hidden" class="form-control" id="kwartaal_id">
                </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button id="btn" type="button" class="btn btn-primary" onclick="repetitiesOphalen() kwartalenOPhalen()">Toevoegen</button>
            </div>
        </div>
<script>
    vakkenOPhalen();
    docentenOPhalen();
    repetitiesOphalen();
    kwartalenOPhalen();
    kwartalenLijstOPhalen();



    function kwartalenLijstOPhalen() {
        let URL = "http://localhost:7070/studentenvolgsysteem/api/kwartaal/list";


        let xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                let kwartaalDataList = JSON.parse(this.responseText);
                let kwartaalLijst = '';
                kwartaalDataList.reverse();

                for (let index = 0; index < kwartaalDataList.length; index++) {
                    kwartaalLijst +=
                        ' <tr>' +
                        ' <td>'+ kwartaalDataList[index].kwartaalnaam + '</td> ' +
                        ' <td>'+ kwartaalDataList[index].kwartaal_id + '</td> ' +
                        ' <td> '+
                        '<td><button id= ' + kwartaalDataList[index].kwartaal_id + ' onclick="kwartaalBewerken(this.id)" ' +
                        'class="btn_tabel" data-toggle="modal" data-target="#kwartaalToevoegen" title="Edit" class="btn btn-default"><i class="fas fa-edit"></i></button></td>' +
                        '<td><button id= ' + kwartaalDataList[index].kwartaal_id + ' onclick="kwartaalVerwijderen(this.id)" ' +
                        ' title="delete" class="btn_tabel"><i class="fa fa-trash-alt"></i></button></td>'  +

                        '</td>'+
                        ' </tr> ';
                }
                kwartaalLijst += "";
                document.getElementById("kwartaalGegevens").innerHTML = kwartaalLijst;
            }
            else{
                document.getElementById("kwartaalGegevens").innerHTML = "<tr><td style=\"text-align:center;padding: 30px;\" colspan=\"7\">Er zijn momenteel geen kwartalen geregistreerd</td></tr>";
            }
        };
        xhttp.open("GET", URL, true);
        xhttp.send();
    }
    window.onload = kwartalenOPhalen();

    function repetitiesOphalen() {
        let URL = "http://localhost:7070/studentenvolgsysteem/api/repetitie/list";


        let xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                let repetitieDataList = JSON.parse(this.responseText);
                let repetitiesLijst = '';
                repetitieDataList.reverse();

                for (let index = 0; index < repetitieDataList.length; index++) {
                    repetitiesLijst +=
                        ' <tr>' +
                        ' <td>'+ repetitieDataList[index].docent_vak_id.vak_id.vaknaam + '</td> ' +
                        ' <td>'+ repetitieDataList[index].docent_vak_id.docent_id.achternaam + '</td> ' +
                        ' <td> '+
                        '<td><button id= ' + repetitieDataList[index].repetitie_id + ' onclick="repetitieBewerken(this.id)" ' +
                        'class="btn_tabel" data-toggle="modal" data-target="#repetitieToevoegen" title="Edit" class="btn btn-default"><i class="fas fa-edit"></i></button></td>' +
                        '<td><button id= ' + repetitieDataList[index].repetitie_id + ' onclick="repetitieVerwijderen(this.id)" ' +
                        ' title="delete" class="btn_tabel"><i class="fa fa-trash-alt"></i></button></td>'  +

                        '</td>'+
                        ' </tr> ';
                }
                repetitiesLijst += "";
                document.getElementById("repetitieGegevens").innerHTML = repetitiesLijst;
            }
            else{
                document.getElementById("repetitieGegevens").innerHTML = "<tr><td style=\"text-align:center;padding: 30px;\" colspan=\"7\">Er zijn momenteel geen repetities geregistreerd</td></tr>";
            }
        };
        xhttp.open("GET", URL, true);
        xhttp.send();
    }
    window.onload = repetitiesOphalen();


    function kwartalenOPhalen() {

        let URL = "http://localhost:7070/studentenvolgsysteem/api/kwartaal/list";

        let select = document.getElementById("kwartaaldropdown");

        let xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.onreadystatechange == 4 && this.status == 200) {
                let kwartaalDatalist = JSON.parse(this.responseText);
                for (let index = 0; index < kwartaalDatalist.length; index++){
                    let option = document.getElementById("OPTION");
                    option.text = kwartaalDatalist[index].kwartaalnaam;
                    option.value = kwartaalDatalist[index].kwartaal_id;
                    select.add(option);
                }
            }
        };
        xhttp.open("GET" , URL, true);
        xhttp.send();

    }

    function vakkenOPhalen() {

        let URL = "http://localhost:7070/studentenvolgsysteem/api/docentenVakken/list";

        let select = document.getElementById("vakdropdown");

        let xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.onreadystatechange == 4 && this.status == 200) {
                let vakDatalist = JSON.parse(this.responseText);
                for (let index = 0; index < vakDatalist.length; index++){
                    let option = document.getElementById("OPTION");
                    option.text = vakDatalist[index].vak_id.vaknaam;
                    option.value = vakDatalist[index].docent_vak_id;
                    select.add(option);
                }
            }
        };
        xhttp.open("GET" , URL, true);
        xhttp.send();

    }

    function docentenOPhalen() {

        let URL = "http://localhost:7070/studentenvolgsysteem/api/docenten/list";

        let select = document.getElementById("docentdropdown");

        let xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.onreadystatechange == 4 && this.status == 200) {
                let docentDatalist = JSON.parse(this.responseText);
                for (let index = 0; index < docentDatalist.length; index++){
                    let option = document.getElementById("OPTION");
                    option.text = docentDatalist[index].docent_id.achternaam + ", " + docentDatalist[index].docent_id.voornaam;
                    option.value = docentDatalist[index].docent_vak_id;
                    select.add(option);
                }
            }
        };
        xhttp.open("GET" , URL, true);
        xhttp.send();

    }
</script>

<?php  include'inc/bottom.php';?>