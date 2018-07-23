<?php  include'inc/head.php';?>
<div class="container">
	<div class="row">

		<div class="login-box container col-md-6 col-offset-3">
		<img class="logo_login" src="img/havo.png" alt="havo logo" width="150px"/>
		<h2 class="login-header">Cijfer Volgsysteem</h2>

				<div class="inner-login-box">
                    <div id="error_message"></div>
					<input class="form-control" type="email" id="email" placeholder="Email"></input>

					<input class="form-control" type="password" id="wachtwoord" placeholder="Password"></input>
					<a href="#"><button type="submit" onclick="emptyInputCheck()" class="school-btn-dark btn btn-default" id="btnLogin">Login</button></a>
				<div>

		</div>
	</div>
</div>
<script>
function emptyInputCheck() {
        let pass = true;
        let email = document.getElementById("email").value;
        let wachtwoord = document.getElementById("wachtwoord").value;

        if (email == "" || wachtwoord == "" )
        {
            document.getElementById("error_message").innerHTML = "U heeft iets niet ingevuld";
            pass = false;
        }else{
            getLoginCredentials();
        }

        return pass;

    }
function getLoginCredentials() {

        let emailInput = document.getElementById("email").value;
        let wachtwoordInput = document.getElementById("wachtwoord").value;

        let xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            let responseUser = this.responseText;

            if (xhttp.readyState>3 && xhttp.status==200) {
                document.getElementById("error_message").innerHTML = responseUser;
                if (responseUser === 'true'){
                    window.location.href = 'dashboard.php';
                }
                else{
    document.getElementById("error_message").innerHTML = "Oops!! Er is iets mis gegaan";
}

}



            }
        xhttp.open("POST", "http://localhost:7070/studentenvolgsysteem/api/gebruikers/checkLogin?email="+emailInput+"&wachtwoord="+wachtwoordInput, true);
        xhttp.setRequestHeader("Content-Type", "text/plain");
        xhttp.setRequestHeader('Access-Control-Allow-Origin', '*')
        xhttp.send();

    }
</script>
<?php include'inc/bottom.php';?>



