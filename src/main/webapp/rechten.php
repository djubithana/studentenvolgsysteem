<?php  include'inc/head.php';?>
    <div class="container-fluid">
        <div class="row">
            <?php  include'inc/sidebar.php';?>
            <div class="main col-md-10">
                <section class="jumbotron text-center header-jumbo">
                    <div class="container">
                        <h4 class="jumbotron-heading">Rechten Overzicht</h4>
                        <button type="button" class="btn_dark_bg" data-toggle="modal" data-target="#rechtToevoegen">Toevoegen</button>
                        <button type="button" class="btn_dark_bg" data-toggle="modal" data-target="#rechtAanRolToevoegen">Voeg student toe aan klas</button>

                    </div>
                </section>
                <div class="content">
                    <div class="row">

                        <table class="table table-condensed">
                            <thead>
                            <tr>
                                <th scope="col">Rechten</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>

                            <tbody id="rechtenData">

                            </tbody>

                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="rechtToevoegen" tabindex="-1" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Nieuwe recht toevoegen</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" action="/action_page.php">

                        <div class="form-group">
                            <div class="offset-md-2 col-md-8">
                                <input type="hidden" class="form-control" id="recht_id">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="offset-md-2 col-md-8">

                                <input id="rechtnaam" class="form-control" type="text" placeholder="Recht">

                            </div>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button id="btn" type="button" onclick="saveRecht()" class="btn btn-primary">Toevoegen</button>
                </div>
            </div>

        </div>
    </div>

    <div id="rechtAanRolToevoegen" tabindex="-1" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Recht toevoegen aan rol</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" action="/action_page.php">

                        <div class="form-group">
                            <div class="offset-md-2 col-md-8">
                                <input type="hidden" class="form-control" id="rol_recht_id">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="offset-md-2 col-md-8">
                                <select id = "rechtenList" class="form-control">
                                    <option value="" disabled>Rechten</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="offset-md-2 col-md-8">
                                <select id = "rollenList" class="form-control">
                                    <option value="" disabled>Rollen</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button id="btn" type="button" onclick="addRechtToRol()" class="btn btn-primary">Toevoegen</button>
                </div>
            </div>

        </div>
    </div>

<script>

    loadRechten();
    populateRechten();
    populateRollen();

    function addRechtToRol(){
        let rol_recht_id = document.getElementById("rol_recht_id").value;
        let recht_id = document.getElementById("rechtenList").value;
        let rol_id = document.getElementById("rollenList").value;

        let data = {
            "rol_recht_id": null,
            "recht_id":{"recht_id": recht_id, "rechtnaam": document.getElementById("rechtenList").text},
            "rol_id":  {"rol_id": rol_id, "rolnaam": document.getElementById("rollenList").text}
        };
        let json = JSON.stringify(data);

        let url = "http://localhost:7070/studentenvolgsysteem/api/rollenRechten/addRolRecht";

        let xhttp = new XMLHttpRequest();
        xhttp.open("POST", url , true);
        xhttp.onreadystatechange = function() {
            if (xhttp.readyState>3 && xhttp.status==200) { clearInputFields();}
        };
        xhttp.setRequestHeader("Content-Type", "application/json");
        xhttp.send(json);
    }

    function populateRechten() {
        let URL = "http://localhost:7070/studentenvolgsysteem/api/rechten/list";

        let select = document.getElementById("rechtenList");

        let xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                let rechtenDataList = JSON.parse(this.responseText);
                for (let index = 0; index < rechtenDataList.length; index++) {
                    let option = document.createElement("OPTION");
                    option.text = rechtenDataList[index].rechtnaam;
                    option.value = rechtenDataList[index].recht_id;
                    select.add(option);
                }
            }
        };
        xhttp.open("GET", URL, true);
        xhttp.send();
    }

    function populateRollen() {
        let URL = "http://localhost:7070/studentenvolgsysteem/api/rollen/list";

        let select = document.getElementById("rollenList");

        let xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                let rollenDataList = JSON.parse(this.responseText);
                for (let index = 0; index < rollenDataList.length; index++) {
                    let option = document.createElement("OPTION");
                    option.text = rollenDataList[index].rolnaam;
                    option.value = rollenDataList[index].rol_id;
                    select.add(option);
                }
            }
        };
        xhttp.open("GET", URL, true);
        xhttp.send();
    }

    function loadRechten() {
        let URL = "http://localhost:7070/studentenvolgsysteem/api/rechten/list";

        let xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                let rechtenDataList = JSON.parse(this.responseText);
                let rechtenList = '';

                rechtenDataList.reverse();

                for (let index = 0; index < rechtenDataList.length; index++) {
                    rechtenList +=

                        ' <tr> ' +
                        '<th scope="row">' + rechtenDataList[index].rechtnaam + "</th>" +
                        '<td><button id= ' + rechtenDataList[index].recht_id + ' onclick="editRecht(this.id)" ' +
                        'class="btn_tabel" data-toggle="modal" data-target="#rechtToevoegen"><i class="fas fa-edit fa-1x"></i></button></td>' +
                        '</tr>'
                    ;

                }
                rechtenList += '';
                document.getElementById("rechtenData").innerHTML = rechtenList;
            }
        };
        xhttp.open("GET", URL, true);
        xhttp.send();
    }

    function addRecht(){
        let recht_id = document.getElementById("recht_id").value;
        let rechtnaam = document.getElementById("rechtnaam").value;

        let dataString = {
            "recht_id": null,
            "rechtnaam": rechtnaam,

        };
        let json = JSON.stringify(dataString);

        let xhttp = new XMLHttpRequest();
        xhttp.open("POST", "http://localhost:7070/studentenvolgsysteem/api/rechten/addRecht", true);
        xhttp.onreadystatechange = function() {
            if (xhttp.readyState>3 && xhttp.status==200) { loadRechten(); clearInputFields();}
        };
        xhttp.setRequestHeader("Content-Type", "application/json");
        xhttp.send(json);
    }

    function updateRecht() {
        let recht_id = document.getElementById("recht_id").value;
        let rechtnaam = document.getElementById("rechtnaam").value;

        let dataString = {
            "recht_id": recht_id,
            "rechtnaam": rechtnaam,
        };
        let json = JSON.stringify(dataString);

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("POST", "http://localhost:7070/studentenvolgsysteem/api/rechten/updateRecht", true);
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState>3 && xmlhttp.status==200) {
                loadRechten();
                clearInputFields();
                document.getElementById("btn").innerHTML = "Toevoegen";}
        };
        xmlhttp.setRequestHeader("Content-Type", "application/json");
        xmlhttp.send(json);
    }

    function getRecht(recht_id) {

        let rechtnaam = document.getElementById("rechtnaam").value;

        let dataString = {
            "recht_id": recht_id,
            "rechtnaam": rechtnaam,
        };
        let json = JSON.stringify(dataString);

        let xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (xhttp.readyState>3 && xhttp.status==200) {
                let foundRecht = JSON.parse(this.responseText);

                document.getElementById("recht_id").value = foundRecht.recht_id;
                document.getElementById("rechtnaam").value = foundRecht.rechtnaam;

                document.getElementById("btn").innerHTML = "Wijzigen";
            }
        };
        xhttp.open("POST", "http://localhost:7070/studentenvolgsysteem/api/rechten/getRecht", true);
        xhttp.setRequestHeader("Content-Type", "application/json");
        xhttp.send(json);
    }

    function editRecht(recht_id) {
        getRecht(recht_id);
    }

    function saveRecht() {
        if(validateForm())
        {
            if(document.getElementById("btn").innerHTML == 'Toevoegen') {
                addRecht();
            }else{
                updateRecht();
            }
        }
    }

    /*function removeRecht(recht_id) {
        if ( confirm("Are you sure you want to delete this class?") ) {
            deleteRecht(recht_id);
        }
    }

    function deleteRecht(recht_id) {
        let rechtnaam = document.getElementById("rechtnaam").value;

        let dataString = {
            "recht_id": recht_id,
            "rechtnaam": rechtnaam,
        };
        let json = JSON.stringify(dataString)

        var xhttp = new XMLHttpRequest();
        xhttp.open("POST", "http://localhost:7070/studentenvolgsysteem/api/rechten/removeRecht", true);
        xhttp.onreadystatechange = function() {
            if (xhttp.readyState>3 && xhttp.status==200) { loadRechten(); }
        };
        xhttp.setRequestHeader("Content-Type", "application/json");
        xhttp.send(json);
    }*/

    function validateForm() {
        let pass = true;
        let recht_id = document.getElementById("recht_id").value;
        let rechtnaam = document.getElementById("rechtnaam").value;

        if (rechtnaam == "")
        {
            alert("Please fill in field.");
            pass = false;
        }

        return pass;
    }

    function clearInputFields() {

        document.getElementById("recht_id").value = "";
        document.getElementById("rechtnaam").value = "";
        document.getElementById("rol_recht_id").value = "";
        document.getElementById("rechtenList").value = "";
        document.getElementById("rollenList").value = "";
        document.getElementById("btn").innerHTML = "Toevoegen";
    }

</script>

<?php  include'inc/bottom.php';?>