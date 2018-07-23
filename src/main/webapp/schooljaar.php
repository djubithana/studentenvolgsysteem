<?php  include'inc/head.php';?>
<div class="container-fluid">
	<div class="row">
		<?php  include'inc/sidebar.php';?>
		<div class="main col-md-10">
		<section class="jumbotron text-center header-jumbo">
			<div class="container">
				<h4 class="jumbotron-heading">Schooljaar Overzicht</h4>
				<button type="button" class="btn_dark_bg" data-toggle="modal" data-target="#schooljaarToevoegen">Toevoegen</button>
			</div>
		</section>
		<div class="content">
			<div class="row">
		<table class="table table-condensed">
		  <thead>
			<tr>
			  <th scope="col">Schooljaar</th>
			  <th scope="col">Status</th>
			  <th scope="col"></th>
			</tr>
		  </thead>

		  <tbody id="schooljaarData">

		  </tbody>

		</table>
			</div>
		</div>
		</div>
	</div>
</div>

<div id="schooljaarToevoegen" tabindex="-1" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">

        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add new school year</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="/action_page.php">

                    <div class="form-group">
                        <div class="offset-md-2 col-md-8">
                            <input type="hidden" class="form-control" id="schooljaar_id">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="offset-md-2 col-md-8">
                            <select class="form-control" id="schooljaar" placeholder="Schooljaar" name="schooljaar">
                                    <option  value="" disabled>Year</option>
                                    <?php
                                    $y=(int)date('Y');
                                    ?>
                                    <option value="<?php echo $y;?>" selected="true"><?php echo $y;?></option>
                                    <?php
                                    $y++;
                                    for(; $y<'2050'; $y++)
                                    {
                                        ?>
                                        <option value="<?php echo $y;?>"><?php echo $y;?></option>
                                    <?php }?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="offset-md-2 col-md-8">

                            <select type="text" class="form-control" id="status">
                                <option value="" disabled>Status</option>
                                <option value="false">Inactive</option>
                                <option value="true">Active</option>
                            </select>

                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button id="btn" type="button" onclick="saveSchooljaar()" class="btn btn-primary">Toevoegen</button>
            </div>
        </div>

    </div>
</div>

<script>
    loadSchooljaar()

    function loadSchooljaar() {
        let URL = "http://localhost:7070/studentenvolgsysteem/api/schooljaar/list";

        let xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                let schooljaarDataList = JSON.parse(this.responseText);
                let schooljaarList = '';

                schooljaarDataList.reverse();

                for (let index = 0; index < schooljaarDataList.length; index++) {
                    schooljaarList +=

                        ' <tr> ' +
                        '<th scope="row">' + schooljaarDataList[index].schooljaar + "</th>" +
                        '<td>' + schooljaarDataList[index].status + "</td>" +
                        '<td><button id= ' + schooljaarDataList[index].schooljaar_id + ' onclick="editSchooljaar(this.id)" ' +
                        'class="btn_tabel" data-toggle="modal" data-target="#schooljaarToevoegen"><i class="fas fa-edit fa-1x"></i></button></td>' +
                        '<td><button id= ' + schooljaarDataList[index].schooljaar_id + ' onclick="openSchooljaar(this.id)" ' +
                        'class="btn_tabel"><i class="far fa-folder-open"></i></button></td>'  +
                        '</tr>'
                    ;

                }
                schooljaarList += '';
                document.getElementById("schooljaarData").innerHTML = schooljaarList;
            }
        };
        xhttp.open("GET", URL, true);
        xhttp.send();
    }

    function addSchooljaar(){
        let schooljaar_id = document.getElementById("schooljaar_id").value;
        let schooljaar = document.getElementById("schooljaar").value;
        let status = document.getElementById("status").value;


        let dataString = {
            "schooljaar_id": null,
            "schooljaar": schooljaar,
            "status": status
        };
        let json = JSON.stringify(dataString);

        let xhttp = new XMLHttpRequest();
        xhttp.open("POST", "http://localhost:7070/studentenvolgsysteem/api/schooljaar/addSchooljaar", true);
        xhttp.onreadystatechange = function() {
            if (xhttp.readyState>3 && xhttp.status==200) { loadSchooljaar(); clearInputFields();}
        };
        xhttp.setRequestHeader("Content-Type", "application/json");
        xhttp.send(json);
    }

    function updateSchooljaar() {
        let schooljaar_id = document.getElementById("schooljaar_id").value;
        let schooljaar = document.getElementById("schooljaar").value;
        let status = document.getElementById("status").value;

        let dataString = {
            "schooljaar_id": schooljaar_id,
            "schooljaar": schooljaar,
            "status": status
        };
        let json = JSON.stringify(dataString);

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("POST", "http://localhost:7070/studentenvolgsysteem/api/schooljaar/updateSchooljaar", true);
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState>3 && xmlhttp.status==200) {
                loadSchooljaar();
                clearInputFields();
                document.getElementById("btn").innerHTML = "Toevoegen";}
        };
        xmlhttp.setRequestHeader("Content-Type", "application/json");
        xmlhttp.send(json);
    }

    function getSchooljaar(schooljaar_id) {

        let schooljaar = document.getElementById("schooljaar").value;
        let status = document.getElementById("status").value;

        let dataString = {
            "schooljaar_id": schooljaar_id,
            "schooljaar": schooljaar,
            "status": status
        };
        let json = JSON.stringify(dataString);

        let xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (xhttp.readyState>3 && xhttp.status==200) {
                let foundSchooljaar = JSON.parse(this.responseText);

                document.getElementById("schooljaar_id").value = foundSchooljaar.schooljaar_id;
                document.getElementById("schooljaar").value = foundSchooljaar.schooljaar;
                document.getElementById("status").value = foundSchooljaar.status;

                document.getElementById("btn").innerHTML = "Wijzigen";
            }
        };
        xhttp.open("POST", "http://localhost:7070/studentenvolgsysteem/api/schooljaar/getSchooljaar", true);
        xhttp.setRequestHeader("Content-Type", "application/json");
        xhttp.send(json);
    }

    function editSchooljaar(schooljaar_id) {
        getSchooljaar(schooljaar_id);
    }

    function saveSchooljaar() {
        if(validateForm())
        {
            if(document.getElementById("btn").innerHTML == 'Toevoegen') {
                addSchooljaar();
            }else{
                updateSchooljaar();
            }
        }
    }

    function validateForm() {
        let pass = true;
        let schooljaar_id = document.getElementById("schooljaar_id").value;
        let schooljaar = document.getElementById("schooljaar").value;
        let status = document.getElementById("status").value;

        if (schooljaar == "")
        {
            alert("Please fill in all fields.");
            pass = false;
        }

        return pass;
    }

    function clearInputFields() {

        document.getElementById("schooljaar_id").value = "";
        document.getElementById("schooljaar").value = "";
        document.getElementById("status").value = "";
        document.getElementById("btn").innerHTML = "Toevoegen";
    }

</script>

<?php  include'inc/bottom.php';?>

