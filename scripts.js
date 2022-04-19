$('document').ready(function(){
	getCountries();
	getAllOrders();
	$('#country').change(function(){
		getOrdersByCountryId($("#country").val());
	});
	$('#addOrderButton').click(function(){
		addOrder($("#name").val(), $("#delivery").val());
	});
});
 
function getCountries(){
	$.get("getcountries.php", {}, function(data){
		countries = JSON.parse(data);

		htmlData="<option value='0'>Select country</option>";
		for(i=0; i<countries.length; i++){
			htmlData+="<option value='"+countries[i]['id']+"'>"+countries[i]['name']+"</option>";
		}
		$('#country').html(htmlData);
	});
}

function getOrdersByCountryId(countryId){
	$.get("getShippingMethod.php", {"id":countryId}, function(data){
		cities = JSON.parse(data);

		htmlData = "<option value='0'>Select delivery</option>";

		for(i=0;i<cities.length; i++){
			htmlData += "<option value='"+cities[i]['id']+"'>"+cities[i]['name']+"</option>";
		}

		$('#delivery').html(htmlData);
	});
}

function getAllOrders(){
	$.get("getOrders.php", {}, function(data){
		orders = JSON.parse(data);

		htmlData = "";

		for(i=0; i<clubs.length; i++){
			htmlData += "<tr>";
			htmlData += "<td>"+orders[i]['id']+"</td>";
			htmlData += "<td>"+orders[i]['name']+"</td>";
			htmlData += "<td>"+orders[i]['countryName']+"</td>";
			htmlData += "<td>"+orders[i]['cityName']+"</td>";
			htmlData += "<td><button class='btn' onclick='deleteOrder("+clubs[i]['id']+")'>DELETE</button></td>";
			htmlData += "</tr>";
		}

		$("#result").html(htmlData);
	});
}

function deleteOrder(clubId){
	$.post("deleteOrder.php", {
		"id":clubId
	}, function(data){
		getAllOrders();
	});
}

function addOrder(clubName, clubCity){
	$.post("addOrder.php", {
		"name": clubName, 
		"delivery": clubCity
	}, function(data){
		result = JSON.parse(data);

		if(result['status'] =='OK'){
			$("#message_alert").attr('class', 'alert alert-success');
		}
		else{
			$("#message_alert").attr('class', 'alert alert-danger');
		}

		$("#message_alert").fadeIn();
		$("#message_alert").html(result['message']);

		getAllOrders();
	});

}

