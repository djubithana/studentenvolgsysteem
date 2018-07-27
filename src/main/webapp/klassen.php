<?php  include'inc/head.php';?>
<div class="container-fluid">
	<div class="row">
		<?php  include'inc/sidebar.php';?>
		<div class="main col-md-10">
			<section class="jumbotron text-center header-jumbo">
				<div class="container">
					<h4 class="jumbotron-heading">Klassen Overzicht</h4>
                    <button type="button" class="btn_dark_bg" data-toggle="modal" data-target="#klasToevoegen">Klas toevoegen</button>
                    <button type="button" class="btn_dark_bg" data-toggle="modal" data-target="#studentAanKlasToevoegen">Voeg student toe aan klas</button>

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
                                            <th scope="col">Klasnaam</th>
                                            <th scope="col">Klassenvoogd</th>
                                            <th scope="col">Aantal Studenten</th>
                                            <th scope="col">Schooljaar</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>

                                    <tbody id="klassenData">

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

<div id="klasToevoegen" tabindex="-1" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">

        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Nieuwe klas toevoegen</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="/action_page.php">

                    <div class="form-group">
                        <div class="offset-md-2 col-md-8">
                            <input type="hidden" class="form-control" id="klas_id">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="offset-md-2 col-md-8">

                            <input id="klasnaam" class="form-control" type="text" placeholder="Klasnaam">

                        </div>
                    </div>

                    <div class="form-group">
                        <div class="offset-md-2 col-md-8">
                            <select id = "schooljaarList" class="form-control">
                                <option value="" disabled>Schooljaar</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button id="btn" type="button" onclick="saveKlas()" class="btn btn-primary">Toevoegen</button>
            </div>
        </div>

    </div>
</div>

    <div id="studentAanKlasToevoegen" tabindex="-1" class="modal fade" role="dialog">
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
                                <input type="hidden" class="form-control" id="klas_student_id">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="offset-md-2 col-md-8">
                                <select id = "klassenList" class="form-control">
                                    <option value="" disabled>Klassen</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="offset-md-2 col-md-8">
                                <select id = "studentenList" class="form-control">
                                    <option value="" disabled>Studenten</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button id="btn" type="button" onclick="addKlasToStudent()" class="btn btn-primary">Toevoegen</button>
                </div>
            </div>

        </div>
    </div>

<script>
    populateKlassen();
    populateStudenten();
/*
    countStudenten();
*/
    loadKlassen();
    loadSchooljaar();

    function addKlasToStudent(){
        let klas_student_id = document.getElementById("klas_student_id").value;
        let klas_id = document.getElementById("klassenList").value;
        let student_id = document.getElementById("studentenList").value;

        let data = {
            "klas_student_id": null,
            "klas_id":{"klas_id": klas_id, "klasnaam": document.getElementById("klassenList").text},
            "student_id":  {"student_id": student_id, "achternaam": document.getElementById("studentenList").text, "voornaam": document.getElementById("studentenList").text}
        };
        let json = JSON.stringify(data);

        let url = "http://localhost:7070/studentenvolgsysteem/api/klassenStudenten/addKlasStudent";

        let xhttp = new XMLHttpRequest();
        xhttp.open("POST", url , true);
        xhttp.onreadystatechange = function() {
            if (xhttp.readyState>3 && xhttp.status==200) {
                clearInputFields();
                $('#studentAanKlasToevoegen').modal('hide');
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

    function populateKlassen() {
        let BOOK_URL = "http://localhost:7070/studentenvolgsysteem/api/klassen/list";

        let select = document.getElementById("klassenList");

        let xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                let klassenDataList = JSON.parse(this.responseText);
                for (let index = 0; index < klassenDataList.length; index++) {
                    let option = document.createElement("OPTION");
                    option.text = klassenDataList[index].klasnaam;
                    option.value = klassenDataList[index].klas_id;
                    select.add(option);
                }
            }
        };
        xhttp.open("GET", BOOK_URL, true);
        xhttp.send();
    }

    function populateStudenten() {
        let BOOK_URL = "http://localhost:7070/studentenvolgsysteem/api/studenten/list";

        let select = document.getElementById("studentenList");

        let xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                let studentenDataList = JSON.parse(this.responseText);
                for (let index = 0; index < studentenDataList.length; index++) {
                    let option = document.createElement("OPTION");
                    option.text = studentenDataList[index].achternaam + ", " + studentenDataList[index].voornaam;
                    option.value = studentenDataList[index].student_id;
                    select.add(option);
                }
            }
        };
        xhttp.open("GET", BOOK_URL, true);
        xhttp.send();
    }

    function loadKlassen() {
        let URL = "http://localhost:7070/studentenvolgsysteem/api/klassen/list";

        let xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                let klassenDataList = JSON.parse(this.responseText);
                let klassenList = '';

                klassenDataList.reverse();

                for (let index = 0; index < klassenDataList.length; index++) {
                    klassenList +=

                        ' <tr> ' +
                        '<td scope="row">' + klassenDataList[index].klasnaam + "</td>" +
                        '<td scope="row">' + klassenDataList[index].klasnaam + "</td>" +
                        '<td scope="row">' + klassenDataList[index].klasnaam + "</td>" +
                        '<td>' + klassenDataList[index].schooljaar_id.schooljaar.toString() + "</td>" +
                        '<td>' +
                        '<div class="btn-group btn-group-xs">'+
                        '<a href="klas" id='+ klassenDataList[index].klas_id +'  class="btn btn-default" ><i class="fa fa-folder-open"></i></a>' +
                        '<a id='+ klassenDataList[index].klas_id +' onclick="editKlas(this.id)" class="btn btn-default" data-toggle="modal" data-target="#klasToevoegen"><i class="fa fa-edit"></i></a>'+
                        '<a id='+ klassenDataList[index].klas_id +' onclick="removeKlas(this.id)" class="btn btn-default" ><i class="fa fa-trash-alt"></i></a>' +
                        '</div>'+
                        '</td>'+
                        '</tr>'
                    ;

                }
                klassenList += '';
                document.getElementById("klassenData").innerHTML = klassenList;
            }
        };
        xhttp.open("GET", URL, true);
        xhttp.send();
    }

    function countStudenten() {
        let URL = "http://localhost:7070/studentenvolgsysteem/api/klassenStudenten/list";

        let xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                let aantalStudenten = JSON.parse(this.responseText);
                let countAantalStudenten = '';

                aantalStudenten.reverse();

                for (let index = 0; index < aantalStudenten.length; index++) {
                    countAantalStudenten +=

                        ' <tr> ' +
                        '<th scope="row">' + aantalStudenten[index].klas_student_id + "</th>" +
                        '</tr>'
                    ;

                }
                countAantalStudenten += '';
                document.getElementById("count").innerHTML = countAantalStudenten.size;
            }
        };
        xhttp.open("GET", URL, true);
        xhttp.send();
    }

    function addKlas(){
        let klas_id = document.getElementById("klas_id").value;
        let klasnaam = document.getElementById("klasnaam").value;
        let schooljaar_id = document.getElementById("schooljaarList").value;


        let dataString = {
            "klas_id": null,
            "klasnaam": klasnaam,
            "schooljaar_id": {"schooljaar_id": schooljaar_id, "schooljaar": document.getElementById("schooljaarList").text}

        };
        let json = JSON.stringify(dataString);

        let xhttp = new XMLHttpRequest();
        xhttp.open("POST", "http://localhost:7070/studentenvolgsysteem/api/klassen/addKlas", true);
        xhttp.onreadystatechange = function() {
            if (xhttp.readyState>3 && xhttp.status==200) { loadKlassen(); clearInputFields();
                $('#klasToevoegen').modal('hide');
                $('.modal-backdrop').remove();
                document.getElementById("error_message").innerHTML = '<div class="alert alert-success alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>U heeft succesvol een nieuwe klas toegevoegd  </div>';
            }
            else{
                document.getElementById("error_message").innerHTML = '<div class="alert alert-danger alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Toevoegen is mislukt</div>';
            }
        };
        xhttp.setRequestHeader("Content-Type", "application/json");
        xhttp.send(json);
    }

    function updateKlas() {
        let klas_id = document.getElementById("klas_id").value;
        let klasnaam = document.getElementById("klasnaam").value;
        let schooljaar_id = document.getElementById("schooljaarList").value;

        let dataString = {
            "klas_id": klas_id,
            "klasnaam": klasnaam,
            "schooljaar_id": {"schooljaar_id": schooljaar_id, "schooljaar": document.getElementById("schooljaarList").text}
        };
        let json = JSON.stringify(dataString);

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("POST", "http://localhost:7070/studentenvolgsysteem/api/klassen/updateKlas", true);
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState>3 && xmlhttp.status==200) {
                loadKlassen();
                clearInputFields();
                $('#klasToevoegen').modal('hide');
                $('.modal-backdrop').remove();
                document.getElementById("error_message").innerHTML = '<div class="alert alert-success alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Aanpassingen waren succesvol</div>';
                document.getElementById("btn").innerHTML = "Toevoegen";
            }
            else{document.getElementById("error_message").innerHTML = '<div class="alert alert-danger alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Iets is mis gegaan tijdens het aanpassen</div>';}
        };
        xmlhttp.setRequestHeader("Content-Type", "application/json");
        xmlhttp.send(json);
    }

    function getKlas(klas_id) {

        let klasnaam = document.getElementById("klasnaam").value;
        let schooljaar_id = document.getElementById("schooljaarList").value;

        let dataString = {
            "klas_id": klas_id,
            "klasnaam": klasnaam,
            "schooljaar_id": {"schooljaar_id": schooljaar_id, "schooljaar": document.getElementById("schooljaarList").text}
        };
        let json = JSON.stringify(dataString);

        let xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (xhttp.readyState>3 && xhttp.status==200) {
                let foundKlas = JSON.parse(this.responseText);

                document.getElementById("klas_id").value = foundKlas.klas_id;
                document.getElementById("klasnaam").value = foundKlas.klasnaam;
                document.getElementById("schooljaarList").value = foundKlas.schooljaar_id;

                document.getElementById("btn").innerHTML = "Wijzigen";
            }
        };
        xhttp.open("POST", "http://localhost:7070/studentenvolgsysteem/api/klassen/getKlas", true);
        xhttp.setRequestHeader("Content-Type", "application/json");
        xhttp.send(json);
    }

    function editKlas(klas_id) {
        getKlas(klas_id);
    }

    function saveKlas() {
        if(validateForm())
        {
            if(document.getElementById("btn").innerHTML == 'Toevoegen') {
                addKlas();
            }else{
                updateKlas();
            }
        }
    }

    function loadSchooljaar() {
        let BOOK_URL = "http://localhost:7070/studentenvolgsysteem/api/schooljaar/list";

        let select = document.getElementById("schooljaarList");

        let xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                let schooljaarDataList = JSON.parse(this.responseText);
                for (let index = 0; index < schooljaarDataList.length; index++) {
                    let option = document.createElement("OPTION");
                    option.text = schooljaarDataList[index].schooljaar;
                    option.value = schooljaarDataList[index].schooljaar_id;
                    select.add(option);
                }
            }
        };
        xhttp.open("GET", BOOK_URL, true);
        xhttp.send();
    }

    function removeKlas(klas_id) {
        if ( confirm("Are you sure you want to delete this class?") ) {
            deleteKlas(klas_id);
        }
    }

    function deleteKlas(klas_id) {
        let klasnaam = document.getElementById("klasnaam").value;
        let schooljaar_id = document.getElementById("schooljaarList").value;

        let dataString = {
            "klas_id": klas_id,
            "klasnaam": klasnaam,
            "schooljaar_id": {"schooljaar_id": schooljaar_id, "schooljaar": document.getElementById("schooljaarList").text}
        };
        let json = JSON.stringify(dataString)

        var xhttp = new XMLHttpRequest();
        xhttp.open("POST", "http://localhost:7070/studentenvolgsysteem/api/klassen/removeKlas", true);
        xhttp.onreadystatechange = function() {
            if (xhttp.readyState>3 && xhttp.status==200) { loadKlassen(); }
        };
        xhttp.setRequestHeader("Content-Type", "application/json");
        xhttp.send(json);
    }

    function validateForm() {
        let pass = true;
        let klas_id = document.getElementById("klas_id").value;
        let klasnaam = document.getElementById("klasnaam").value;
        let schooljaar = document.getElementById("schooljaarList").value;

        if (klasnaam == "" || schooljaar == "")
        {
            alert("Please fill in all fields.");
            pass = false;
        }

        return pass;
    }

    function clearInputFields() {

        document.getElementById("klas_id").value = "";
        document.getElementById("klasnaam").value = "";
        document.getElementById("schooljaarList").value = "";
        document.getElementById("klas_student_id").value = "";
        document.getElementById("klassenList").value = "";
        document.getElementById("studentenList").value = "";
        document.getElementById("btn").innerHTML = "Toevoegen";
    }
</script>

<?php  include'inc/bottom.php';?>