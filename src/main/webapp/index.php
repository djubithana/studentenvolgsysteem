<?php  include'inc/head.php';?>
<div class="container">
	<div class="row">

		<div class="login-box container col-md-6 col-offset-3">
		<img class="logo_login" src="img/havo.png" alt="havo logo" width="150px"/>
		<h2 class="login-header">Cijfer Volgsysteem</h2>
				<div class="inner-login-box">
					<input class="form-control" type="email" id="email" placeholder="Email"></input>

					<input class="form-control" type="password" id="password" placeholder="Password"></input>
					<a href="dashboard.php"><button class="school-btn-dark btn btn-default">Login</button></a>
				<div>

		</div>
	</div>
</div>
<script>
function emptyInputCheck() {
        let pass = true;
        let email = document.getElementById("email").value;
        let wachtwoord = document.getElementById("wachtwoord").value;
        let address = document.getElementById("address").value;
        let phone = document.getElementById("phone").value;

        if (email == "" || wachtwoord == "" )
        {
            alert("U heeft iets niet ingevuld");
            pass = false;
        }

        return pass;
    }
function getLoginCredentials(clientId) {

        let email = document.getElementById("email").value;
        let wachtwoord = document.getElementById("wachtwoord").value;

        let dataString = {
            "wachtwoord": wachtwoord,
            "email": email
        }
        let json = JSON.stringify(dataString)

        let xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (xhttp.readyState>3 && xhttp.status==200) {
                let foundClient = JSON.parse(this.responseText);

                document.getElementById("email").value = foundClient.email;
                document.getElementById("wachtwoord").value = foundClient.wachtwoord;

                document.getElementById("btnLogin").innerHTML = "Login";
            }
        };
        xhttp.open("GET", "http://localhost:7071/studentenvolgsysteem/api/gebruikers/getGebruiker", true);
        xhttp.setRequestHeader("Content-Type", "application/json");
        xhttp.send(json);
    }
</script>
<?php  include'inc/bottom.php';?>



