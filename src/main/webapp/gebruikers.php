<?php  include'inc/head.php';?>
<div class="container-fluid">
	<div class="row">
		<?php  include'inc/sidebar.php';?>
		<div class="main col-md-10">
		<section class="jumbotron text-center header-jumbo">
			<div class="container">
				<h4 class="jumbotron-heading">Gebruikers</h4>
				<button class="btn_dark_bg">Toevoegen</button>
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
			  <th scope="col">Rol</th>
			  <th scope="col"></th>
			</tr>
		  </thead>
		  <tbody>
			<tr>
			  <td>Jane</td>
			  <td>Doe</td>
			  <td>naam@domein.com</td>
			  <td>Docent</td>
			  <td><button class="btn_tabel"><i class="fas fa-edit fa-1x"></i></button><button class="btn_tabel"><i class="fas fa-trash-alt fa-1x"></i></button></td>
			</tr>
		  </tbody>
		</table>
			</div>
		</div>
		</div>
	</div>
</div>
<script>

    function emptyInputCheck() {
        let registratie = true;
        let voornaam = document.getElementById("voornaam").value;
        let achternaam = document.getElementById("achternaam").value;
        let email = document.getElementById("email").value;
        let wachtwoord = document.getElementById("wachtwoord").value;
        let rolId = document.getElementById("roldropdown").value

        if (voornaam == "" || achternaam == "" || email == "" ||wachtwoord == "" || rolId == "")
        {
            document.getElementById("error_message").innerHTML = "Alle velden moeten ingevuld worden";
            registratie = false;
        }else{
            addGebruiker();
        }

        return registratie;

    }




    function addGebruiker() {
        let registratie = true;
        let gebruikerId = document.getElementById(gebruikerId);
        let voornaam = document.getElementById("voornaam").value;
        let achternaam = document.getElementById("achternaam").value;
        let email = document.getElementById("email").value;
        let rolId = document.getElementById("roldropdown").value;

        let dataString = {
            "gebruikersId": null,
            "voornaam": voornaam,
            "achternaam": achternaam,
            "email": email,
            "rolId": {"rolId": rolId, "rol": document.getElementById("roldropdown").text}

        let json = JSON.stringify(dataString)

        let xhttp = new XMLHttpRequest();
        xhttp.open("POST", "http://localhost:7070/studentenvolgsysteem/api/Gebruikers/addGebruiker", true);
        xhttp.onreadystatechange = function() {
            if (xhttp.readyState>3 && xhttp.status==200) { loadGebruikersList(); clearInputFields();}
        };
        xhttp.setRequestHeader("Content-Type", "application/json");
        xhttp.send(json);
        
    }
</script>

<?php  include'inc/bottom.php';?>