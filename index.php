<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">

	<title>Immigration Tracker</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

	<!-- Bootstrap Theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

	<style type="text/css">
    .top-buffer { margin-top:40px; }
    .center-title { text-align: center;}
    .paddingleft { padding-left:100px; float: right;}
	</style>


    <!-- jQuery Installed -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

	<!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>	

	 <!-- Firebase JavaScript -->
    <script src='https://cdn.firebase.com/js/client/2.2.1/firebase.js'></script>

</head>

<body>

<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Trackr</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav navbar-right">

        <li>
        	<form class="navbar-form navbar-left" role="search">
        	    <div class="input-group">
  						<input type="text" class="form-control" placeholder="Looking for ..." aria-describedby="basic-addon2">
  						<span class="input-group-addon" id="basic-addon2">Search</span>
				</div>
      		</form>
        </li>
       <li><a href="#new_entry">Update Data</a></li>
       <li class="divider"></li>
        <li><a href="#dashboard">Dashboard</a></li>
        <li class="divider"></li>
        <li><a href="#forms">Forms</a></li>
        <li class="divider"></li>
        <li><a href="#applications">Applications</a></li>
        <li class="divider"></li>
        <li><a href="#notifications">Notifications (0)</a></li>
        <li class="divider"></li>
        <li><a href="#connect_apps">Connect Apps</a></li>


      </ul> 

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="bs-docs-header" id="content" tabindex="-1" style="backbground-color: green; text-align: center;">
      <div class="container">
        <h1>All Your Personal Data, in One Place</h1>
      </div>
</div>  

 <div role="tabpanel" class="container">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#enter_data" aria-controls="enter_data" role="tab" data-toggle="tab"> Enter Data</a></li>
    <li role="presentation"><a href="#select_visa" aria-controls="select_visa" role="tab" data-toggle="tab"> Generate Traval History</a></li>
    <li role="presentation"><a href="#apply" aria-controls="apply" role="tab" data-toggle="tab"> Translate</a></li>
    <li role="presentation"><a href="#track_progress" aria-controls="track_progress" role="tab" data-toggle="tab"> Manage Apps</a></li>
     <li role="presentation"><a href="#live_qa" aria-controls="live_qa" role="tab" data-toggle="tab"> Download</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content" class="container">
    <div role="tabpanel" class="tab-pane active" id="enter_data" style="padding-top: 40px;"> <?php include 'new_entry.php';?> </div>
    <div role="tabpanel" class="tab-pane" id="select_visa">
   
         <h2>Full Travel History</h2>
         <div class="form-group col-md-6">
         		    <label for="expiration_date">From Date</label>
		    <input type="date" class="form-control" id="expiration_date" placeholder="11-11-2017">
		</div>

		<div class="form-group col-md-6">
		    <label for="expiration_date">Until Date</label>
		    <input type="date" class="form-control" id="expiration_date" placeholder="11-11-2017">
		</div>

    <div id='messagesDiv'></div></div>
    <div role="tabpanel" class="tab-pane" id="apply"><h2>All Documents are in English</h2></div>
    <div role="tabpanel" class="tab-pane" id="track_progress"><h2>Manage Access to Your Data</h2>
    <h3>If you want to give access to any of the 3rd party services below, please check the correponding box: </h3>
    <div class="checkbox">
    <label>
      <input type="checkbox" checked> FileRight
    </label>
  </div>
    <div class="checkbox">
    <label>
      <input type="checkbox"> Bridge.US
    </label>
  </div>
    <div class="checkbox">
    <label>
      <input type="checkbox"> TeleBorder
    </label>
  </div>

     <a href="https://immitrackr.firebaseio.com/.json" target="_blank" >Download My JSON Data</a>

      <h3>Which data you want to share with 3rd party applications: </h3>
    <div class="checkbox">
    <label>
      <input type="checkbox" checked> Travel History
    </label>
  </div>
    <div class="checkbox">
    <label>
      <input type="checkbox"> Education and Work
    </label>
  </div>
    <div class="checkbox">
    <label>
      <input type="checkbox"> Criminal Record
    </label>
  </div>
     <div class="checkbox">
    <label>
      <input type="checkbox"> Financial Information
    </label>
  </div>


    </div>
    <div role="tabpanel" class="tab-pane" id="live_qa">Live Q&A</div>
  </div>

</div>   
</body>
</html>