<div class="row ol-md-10">

<div class="row col-md-10 paddingleft">
     <script src='https://cdn.firebase.com/js/client/2.2.1/firebase.js'></script>
     <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
	<h3> - Upload a Passport </h3>


    <form id="passports_form" action="https://api.idolondemand.com/1/api/sync/ocrdocument/v1" method="post" enctype="multipart/form-data">
  
		<div class="form-group">
		    <p><input type="hidden" name="apikey" value="e1c97619-b755-4fb0-8fec-e06d8594962e"></p>
		    
		    <input class="col-md-5" type="file" id="passports" name="file">
		    <span><input  class="col-md-5 btn-primary" type="submit"></span>
		</div>
	</form>

<form>
  		<div class="form-group  col-md-5">
		    <label for="first_name">First Name</label>
		    <input type="text" class="form-control" id="full_name" placeholder="Joe Doe">
  		</div>
  		<div class="form-group  col-md-5">
		    <label for="last_name">Last Name</label>
		    <input type="text" class="form-control" id="full_name" placeholder="Joe Doe">
  		</div>
  		<div class="form-group col-md-5">
		    <label for="citizenship">Citizenship</label>
		    <input type="text" class="form-control" id="citizenship" placeholder="Ireland">
		</div>
		<div class="form-group col-md-5">
		    <label for="citizenship">Issued by</label>
		    <input type="text" class="form-control" id="citizenship" placeholder="Gvt of Ireland">
		</div>
		<div class="form-group col-md-5">
		    <label for="expiration_date">Issue Date</label>
		    <input type="date" class="form-control" id="expiration_date" placeholder="11-11-2017">
		</div>

		<div class="form-group col-md-5">
		    <label for="expiration_date">Expiration Date</label>
		    <input type="date" class="form-control" id="expiration_date" placeholder="11-11-2017">
		</div>
		<div class="form-group col-md-10">
    		<button type="submit" class="btn btn-success">Save</button>
    	</div>	
</form>


</div>
<div class="row col-md-10 paddingleft">


	<h3> - Upload an Air Ticket </h3>
    <p>Image Recognition works best with AirFrance air tickets</p>
	<form id="air_tickets_form">
  
		  <div class="form-group">
		    <p><input type="hidden" name="apikey" value="e1c97619-b755-4fb0-8fec-e06d8594962e"></p>
		   
		    <input class="col-md-5" type="file" id="air_tickets" name="file">
		    <span><input  class="col-md-5 btn-primary" type="submit"></span>
		  </div>
	</form>

	<form id="air_tickets_output">
  		<div class="form-group  col-md-5">
		    <label for="first_name">Departure Airport</label>
		    <input type="text" class="form-control" id="departure_airport" placeholder="Algiers International Airport">
  		</div>
  		<div class="form-group  col-md-5">
		    <label for="last_name">Destination Airport</label>
		    <input type="text" class="form-control" id="arrival_airport" placeholder="London Heathrow International Airport">
  		</div>
		<div class="form-group col-md-5">
		    <label for="expiration_date">Departure Date</label>
		    <input type="text" class="form-control" id="departure_date" placeholder="Monday, January 19, 2015">
		</div>

		<div class="form-group col-md-5">
		    <label for="expiration_date">Arrival Date</label>
		    <input type="text" class="form-control" id="arrival_date" placeholder="Monday, January 20, 2015">
		</div>

		<div class="form-group col-md-5">
		    <label for="expiration_date">Purpose</label>
		    <input type="textarea" class="form-control" id="travel_purpose" placeholder="I traveled to ...">
		</div>

		<div class="form-group col-md-5">
		    <label for="expiration_date">Number of Days Stayed</label>
		    <input type="number" class="form-control" id="stay">
		</div>
		<div class="form-group col-md-5">
		    <label for="expiration_date">Notes</label>
		   <input type='text' id='messageInput' placeholder='Message'>
		</div>

        
		<div class="form-group col-md-10">
    		<button type="submit" id="add_ticket_info" class="btn btn-success">Save</button>
    	</div>	
</form>

</div>
<div class="row col-md-10 paddingleft">

	<h3> - Upload a Boarding Pass </h3>

	<form id="boarding_passes_form">
   
		  <div class="form-group">
		    <p><input type="hidden" name="apikey" value="e1c97619-b755-4fb0-8fec-e06d8594962e"></p>
		    <input class="col-md-5" type="file" id="boarding_passes" name="file">
		    <span><input  class="col-md-5 btn-primary" type="submit"></span>
		    
		  </div>
	</form>
</div>	
<div class="row col-md-10 paddingleft">

	
	<form>
  		<div class="form-group  col-md-5">
		    <label for="first_name">Departure Airport</label>
		    <input type="text" class="form-control" id="full_name" placeholder="San Francisco International Airport">
  		</div>
  		<div class="form-group  col-md-5">
		    <label for="last_name">Destination Airport</label>
		    <input type="text" class="form-control" id="full_name" placeholder="Londen Heathrow International Airport">
  		</div>
		<div class="form-group col-md-5">
		    <label for="expiration_date">Departure Date</label>
		    <input type="text" class="form-control" id="expiration_date" placeholder="11-11-2017">
		</div>

		<div class="form-group col-md-5">
		    <label for="expiration_date">Arrival Date</label>
		    <input type="text" class="form-control" id="expiration_date" placeholder="10-10-2017">
		</div>

		

		<div class="form-group col-md-10">
    		<button type="submit" class="btn btn-success">Save</button>
    	</div>	
	</form>

</div>

<div class="row col-md-10 paddingleft">

	<h3> - Upload Other Travel Documents </h3>

	<form id="other_documents_form">
  
		  <div class="form-group">
		    <p><input type="hidden" name="apikey" value="e1c97619-b755-4fb0-8fec-e06d8594962e"></p>
		    <input class="col-md-5" type="file" id="other_documents" name="file">
		    <span><input  class="col-md-5 btn-primary" type="submit"></span>
		   
		  </div>
	</form>
</div> 
</div> 
    <script type="text/javascript">

     
                   $("form#passports_form").submit(function(event){
 
								  //disable the default form submission
								  event.preventDefault();
 
								  //grab all form data  
								  var formData = new FormData($(this)[0]);

  $.ajax({
    url: 'https://api.idolondemand.com/1/api/sync/ocrdocument/v1',
    type: 'POST',
    data: formData,
    async: false,
    cache: false,
    contentType: false,
    processData: false,
    success: function (data) {
    
       console.log(data.text_block[0].text);
      

    }
  });
  x = 'http://upload.wikimedia.org/wikipedia/commons/d/d9/Test.png';
  $.ajax({
    url: 'https://api.idolondemand.com/1/api/sync/storeobject/v1',
    type: 'POST',
    data: formData,
    async: false,
    cache: false,
    contentType: false,
    processData: false,
    success: function (data) {
      console.log(data); 	
      console.log(x);
    }
  });


/*

   $.ajax({
    url: 'https://api.imgur.com/3/upload',
    type: 'POST',
    headers: {
        'Authorization': 'Client-ID a6fd11d8e416886'
    },
    data: {
        'image': btoa(x)
    },
    async: false,
    cache: false,
    contentType: false,
    processData: false,
    success: function (data) {
       console.log(x);
    }
  });
*/

 
  return false;
});


   
                   $("form#air_tickets_form").submit(function(event){
 
								  //disable the default form submission
								  event.preventDefault();
 
								  //grab all form data  
								  var formData = new FormData($(this)[0]);

  $.ajax({
    url: 'https://api.idolondemand.com/1/api/sync/extracttext/v1',
    type: 'POST',
    data: formData,
    async: false,
    cache: false,
    contentType: false,
    processData: false,
    success: function (data) {
    
        console.log(data.document[0].content);
        var str = data.document[0].content;
        var ref_reservation_reference = "Your reservation reference number:";
        var start_reservation_reference_index = str.indexOf(ref_reservation_reference) + ref_reservation_reference.length;
        var end_reservation_reference_index = start_reservation_reference_index + 6;
        var reservation_reference = str.substring(start_reservation_reference_index, end_reservation_reference_index);
        console.log(reservation_reference);

        var timings = str.match(/([0-2][0-9]| [0-9]):[0-5][0-9] [A-Z][A-Z]/g);
        console.log(timings);

        var travel_dates = str.match(/(Friday|Saturday|Sunday|Monday|Tuesday|Wednesday|Thursday), (January|February|March|April|May|June|July|August|September|October|November|December|January |February |March |April |May |June |July |August |September |October |November |December )([0-3][0-9]| [0-9]), [1-2][0-9][0-9][0-9]/g);
        console.log(travel_dates);
        departure_date = travel_dates[0];
        arrival_date = travel_dates[travel_dates.length-1];
        console.log(departure_date + ' || ' + arrival_date);

        $("#departure_date").attr('value', departure_date);
        $("#arrival_date").attr('value', arrival_date);

        var ref_airports = "Your flight : ";
        var start_airports_index = str.indexOf(ref_airports) + ref_airports.length;
        var end_airports_index = str.indexOf(departure_date);
        var airports = str.substring(start_airports_index, end_airports_index);
        console.log('airports:' + airports);

        airports = airports.match(/(Paris|Dublin|London|Algiers|San Francisco|New York)/g);
        departure_city = airports[0];
        arrival_city = airports[airports.length-1];
        console.log('departure city: ' + departure_city + '  || arrival_city: ' + arrival_city);

        $("#departure_airport").attr('value', departure_city + " International Airport");
        $("#arrival_airport").attr('value', arrival_city + " International Airport");

          
        /*
      myDataRef.on('child_added', function(snapshot) {
        var message = snapshot.val();
        displayChatMessage(message.name, message.text);
      });
      function displayChatMessage(name, text) {
        $('<div/>').text(text).prepend($('<em/>').text(name+': ')).appendTo($('#messagesDiv'));
        $('#messagesDiv')[0].scrollTop = $('#messagesDiv')[0].scrollHeight;
      };
        */
    //    $("#departure_airport").val() = departure_city;




       

        
    //    Sunday, December 21, 2014
    //    January 5, 2015
    //     Thursday 27 November 2014 
     //   var arrival_date =

        

      

    }
  });

  $.ajax({
    url: 'https://api.idolondemand.com/1/api/sync/storeobject/v1',
    type: 'POST',
    data: formData,
    async: false,
    cache: false,
    contentType: false,
    processData: false,
    success: function (data) {
      console.log(data);
    }
  });
 
  return false;
});

    </script>
	
  <script src='https://cdn.firebase.com/js/client/2.2.1/firebase.js'></script>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
    
    <input type='text' id='nameInput' placeholder='Name'>
    

    <script type="text/javascript">
    var myDataRef = new Firebase('https://immitrackr.firebaseio.com/');
      $('#messageInput').keypress(function (e) {
        if (e.keyCode == 13) {
          var departure_airport_fb = $('#departure_airport').val();
          var arrival_airport_fb = $('#arrival_airport').val();
          var departure_date_fb = $('#departure_date').val();
          var arrival_date_fb = $('#arrival_date').val();
          var travel_purpose_fb = $('#travel_purpose').val();
          var stay_fb = $('#stay').val();
          var text2 = $('#messageInput').val();
          myDataRef.push({departure_airport: departure_airport_fb, arrival_airport: arrival_airport_fb, stay: stay_fb, departure_date: departure_date_fb, arrival_date: arrival_date_fb, travel_purpose: travel_purpose_fb });
          $('#messageInput').val('');
        }
      });
      myDataRef.on('child_added', function(snapshot) {
        var table = snapshot.val();
        displayAirports(table.departure_airport, table.arrival_airport, table.arrival_date, table.departure_date, table.stay, table.travel_purpose);
      });
      function displayAirports(departure_airport, arrival_airport, arrival_date, departure_date, stay, travel_purpose) {
        $('<div/>').html('<h3>Arrival Airport:</h3>' + arrival_airport).prepend($('<em/>').html('<h3>Departure Airport: </h3></b>' + departure_airport + ' | ')).appendTo($('#messagesDiv'));
        $('#messagesDiv').append('<b>Departure Date: ' + departure_date + ' | ');
        $('#messagesDiv').append('Arrival Date: ' + arrival_date + ' </b> <br/>');
        $('#messagesDiv').append('<b>Stay: </b>' + stay + ' days <br/><br/>');
        $('#messagesDiv').append('<b>Purpose of Travel: </b>' + travel_purpose + '<br><br><hr>');
        

        $('#messagesDiv')[0].scrollTop = $('#messagesDiv')[0].scrollHeight;
      };


    </script>>