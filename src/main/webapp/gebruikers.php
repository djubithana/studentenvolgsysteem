<?php  include'inc/head.php';?>
<div class="container-fluid">
	<div class="row">
		<?php  include'inc/sidebar.php';?>
		<div class="main col-md-10">
		<section class="jumbotron text-center header-jumbo">
			<div class="container">
				<h4 class="jumbotron-heading">Voeg een Gebruiker toe</h4>
                <button type="button" class="btn_dark_bg" data-toggle="modal" data-target="#gebruikerToevoegen">Toevoegen</button>
			</div>
		</section>
		<div class="content">
			<div class="row">
		<table class="table table-condensed">
		  <thead>
			<tr>
			  <th scope="col">Voornaam</th>
			  <th scope="col">Achternaam</th>
			  <th scope="col">Email</th>
              <th scope="col">Wachtwoord</th>
			  <th scope="col">Rol</th>
			  <th scope="col"></th>
			</tr>
		  </thead>
		  <tbody id="gebruikersGegevens">

		  </tbody>
		</table>
			</div>
		</div>
		</div>
	</div>
</div>
    <div id="gebruikerToevoegen" tabindex="-1" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Gebruiker Toevoegen</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" action="">
                        <div class="form-group">
                            <div id="error_message"</div>
                            <div class="offset-md-2 col-md-8">
                                <input type="hidden" class="form-control" id="gebruiker_id" >
                            </div>
                        </div>
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
                                <input type="password" class="form-control" id="wachtwoord" placeholder="Wachtwoord">
                            </div>
                        </div>
                        <div class="dropdown">
                            <div class="offset-md-11 col-md-12">
                                <select id="roldropdown" style="width: 180%; height:  30px">
                                    <option id="rolId"  disabled selected>Select rol</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button id="btn" type="button" class="btn btn-primary" onclick="gebruikerOpslaan()">Toevoegen</button>
                </div>
            </div>
            </div>

        </div>
    </div>

<script>
    rollenRechtenOPhalen();
    gebruikersOphalen();

    function gebruikersOphalen() {
            let URL = "http://localhost:7070/studentenvolgsysteem/api/gebruikers/list";

            let xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    let gebruikersDataList = JSON.parse(this.responseText);
                    let gebruikersLijst = '';
                    gebruikersDataList.reverse();

                    for (let index = 0; index < gebruikersDataList.length; index++) {
                        gebruikersLijst +=
                            ' <tr>' +
                            ' <td>'+ gebruikersDataList[index].voornaam +' </td> ' +
                            ' <td>'+ gebruikersDataList[index].achternaam + '</td> ' +
                            ' <td>'+ gebruikersDataList[index].email + '</td> ' +
                            ' <td>'+ gebruikersDataList[index].wachtwoord + '</td> ' +
                            ' <td>'+ gebruikersDataList[index].rol + '</td> ' +
                            ' <td> '+
                            '<td><button id= ' + gebruikersDataList[index].gebruiker_id + ' onclick="gebruikerBewerken(this.id)" ' +
                            'class="btn_tabel" data-toggle="modal" data-target="#gebruikerToevoegen" title="Edit" class="btn btn-default"><i class="fas fa-edit"></i></button></td>' +
                            '<td><button id= ' + gebruikersDataList[index].gebruiker_id + ' onclick="gebruikerVerwijderen(this.id)" ' +
                            ' title="delete" class="btn_tabel"><i class="fa fa-trash-alt"></i></button></td>'  +

                            '</td>'+
                            ' </tr> ';
                    }
                    gebruikersLijst += "";
                    document.getElementById("gebruikersGegevens").innerHTML = gebruikersLijst;
                }
                else{
                    document.getElementById("gebruikersGegevens").innerHTML = "<tr><td style=\"text-align:center;padding: 30px;\" colspan=\"7\">Er zijn momenteel geen gebruikers geregistreerd</td></tr>";
                }
            };
            xhttp.open("GET", URL, true);
            xhttp.send();
        }
        window.onload = gebruikersOphalen();

    function validateForm() {
        let pass = true;
        let voornaam = document.getElementById("voornaam").value;
        let achternaam = document.getElementById("achternaam").value;
        let email = document.getElementById("email").value;
        let wachtwoord = document.getElementById("wachtwoord").value;
        let rolId = document.getElementById("roldropdown").value

        if (voornaam == "" || achternaam == "" || email == "" ||wachtwoord == "" || rolId == "")
        {
            document.getElementById("error_message").innerHTML = "Alle velden moeten ingevuld worden";
            pass = false;
        }else{
            addGebruiker();
        }

        return pass;

    }

    function rollenRechtenOPhalen() {

        let URL = "http://localhost:7070/studentenvolgsysteem/api/rollenRechten/list";

        let select = document.getElementById("roldropdown");

        let xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.onreadystatechange == 4 && this.status == 200) {
                let rolDatalist = JSON.parse(this.responseText);
                for (let index = 0; index < rolDatalist.length; index++){
                    let option = document.getElementById("OPTION");
                    option.text = rolDatalist[index].rol_id;
                    option.value = rolDatalist[index].rol_id;
                    select.add(option);
                }
            }
        };
        xhttp.open("GET" , URL, true);
        xhttp.send();

    }

    function gebruikerToevoegen(){
        let gebruiker_id = document.getElementById("gebruiker_id").value;
        let voornaam = document.getElementById("voornaam").value;
        let achternaam = document.getElementById("achternaam").value;
        let email = document.getElementById("email").value;
        let wachtwoord = document.getElementById("wachtwoord").value;
        let rol_id = document.getElementById("roldropown").value;


        let dataString = {
            "gebruiker_id": null,
            "voornaam": voornaam,
            "achternaam": achternaam,
            "email": email,
            "wachtwoord": wachtwoord,
            "rol_id": rol_id
        };
        let json = JSON.stringify(dataString);

        let xhttp = new XMLHttpRequest();
        xhttp.open("POST", "http://localhost:7070/studentenvolgsysteem/api/gebruikers/addGebruiker", true);
        xhttp.onreadystatechange = function() {
            if (xhttp.readyState>3 && xhttp.status==200) { gebruikersOphalen(); clearInputFields();}
        };
        xhttp.setRequestHeader("Content-Type", "application/json");
        xhttp.send(json);
    }
    function gebruikerOpslaan() {
        if(validateForm())
        {
            if(document.getElementById("btn").innerHTML == 'Toevoegen') {
                gebruikerToevoegen();
            }else{
                gebruikerBewerken();
            }
        }
    }
    function gebruikerBewerken() {
        let gebruiker_id = document.getElementById("gebruiker_id").value;
        let voornaam = document.getElementById("voornaam").value;
        let achternaam = document.getElementById("achternaam").value;
        let email = document.getElementById("email").value;
        let wachtwoord = document.getElementById("wachtwoord").value;
        let rol = document.getElementById("rol_id").value;


        let dataString = {
            "gebruiker_id": gebruiker_id,
            "voornaam": voornaam,
            "achternaam": achternaam,
            "email": email,
            "wachtwoord": wachtwoord,
            "rol": rol
        };
        let json = JSON.stringify(dataString);

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("POST", "http://localhost:7070/studentenvolgsysteem/api/gebruikers/updateGebruiker", true);
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState>3 && xmlhttp.status==200) {
                gebruikersOphalen();
                clearInputFields();
                document.getElementById("btn").innerHTML = "Toevoegen";}
        };
        xmlhttp.setRequestHeader("Content-Type", "application/json");
        xmlhttp.send(json);
    }
    function gebruikerVerwijderen(gebruiker_id) {
        let voornaam = document.getElementById("voornaam").value;
        let achternaam = document.getElementById("achternaam").value;
        let email = document.getElementById("email").value;
        let wachtwoord = document.getElementById("wachtwoord").value;
        let rol = document.getElementById("roldropdown").value;

        let dataString = {
            "gebruiker_id": gebruiker_id,
            "voornaam": voornaam,
            "achternaam": achternaam,
            "email": email,
            "wachtwoord": wachtwoord,
            "rol_id": rol
        };
        let json = JSON.stringify(dataString);

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("POST", "http://localhost:7070/studentenvolgsysteem/api/gebruikers/updateGebruiker", true);
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState>3 && xmlhttp.status==200) {
                gebruikersOphalen();
                clearInputFields();
                document.getElementById("btn").innerHTML = "Toevoegen";}
        };
        xmlhttp.setRequestHeader("Content-Type", "application/json");
        xmlhttp.send(json);

    }

    function clearInputFields() {

        document.getElementById("gebruiker_id").value = "";
        document.getElementById("voornaam").value = "";
        document.getElementById("achternaam").value = "";
        document.getElementById("email").value = "";
        document.getElementById("roldropdown").value = "";
        document.getElementById("btn").innerHTML = "Toevoegen";
    }

</script>

<?php  include'inc/bottom.php';?>