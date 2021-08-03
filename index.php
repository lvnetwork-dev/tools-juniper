<!DOCTYPE html>

<html lang="pt-br">
	
	<head>
	  	
	  	<title>Gerar VLAN Juniper</title>
	  	
	  	<meta charset="utf-8">
	  	<meta name="viewport" content="width=device-width, initial-scale=1">
	  	
	  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	  	
	  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	  	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
	
	</head>
	
	<body>

		<div class="jumbotron text-center">
  			<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/31/Juniper_Networks_logo.svg/330px-Juniper_Networks_logo.svg.png">
		</div>
		  
		<div class="container">

			<form id="gerarScript" method="post" action="">
		  	
			  	<div class="row">

				    <div class="col-sm-2">
				    	<div class="form-group">
	  						<label>Primeira VLAN:</label>
	  						<input type="number" class="form-control" id="fristVLAN" name="fristVLAN" placeholder="1000" value="1000">
						</div>
				    </div>

				    <div class="col-sm-2">
				    	<div class="form-group">
	  						<label>Última VLAN:</label>
	  						<input type="number" class="form-control" id="endVLAN" name="endVLAN" placeholder="1100" value="1100">
						</div>
				    </div>

				    <div class="col-sm-2">
				    	<div class="form-group">
	  						<label>Interface:</label>
	  						<input type="text" class="form-control" id="interface" name="interface" placeholder="et-0/0/5" value="et-0/0/5">
						</div>
				    </div>

				    <div class="col-sm-3">
				    	<div class="form-group">
	  						<label>Concentrador:</label>
	  						<input type="text" class="form-control" id="acsConcen" name="acsConcen" placeholder="B-RAS-NOVABRASILIA" value="B-RAS-NOVABRASILIA">
						</div>
				    </div>

				    <div class="col-sm-3">
				    	<div class="form-group">
	  						<label>Dynamic Profile:</label>
	  						<input type="text" class="form-control" id="dynProfile" name="dynProfile" placeholder="ARROBANET-PROFILES" value="ARROBANET-PROFILES">
						</div>
				    </div>

				    <div class="col-sm-12">
				    	<div class="form-group">
	  						<button type="button" class="btn btn-success" id="btnGerarScript" name="btnGerarScript">Gerar Script</button>
						</div>
				    </div>

				    <div class="col-sm-12">

				    	<span id="scriptGerado"></span>

				    </div>

			  	</div>

		  	</form>
		
		</div>

		<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
	    <script type="text/javascript" src="app.js"></script>

	</body>

</html>