function renderUthscAlert(uthscAlert) {

	var currentDate = new Date(),
		effectiveDate = new Date(uthscAlert['effective']),
		expireDate = new Date(uthscAlert['expires']),
		alertIsLive = (effectiveDate.getTime() < currentDate.getTime() < expireDate.getTime());

	//var effectiveDateTest = uthscAlert['effective'],
	//	  expireDateTest = new uthscAlert['expires'];

	//console.log(uthscAlert);
	//console.log(Date());
	//console.log(effectiveDate);
	//console.log(expireDate);
	//console.log( alertIsLive );

	if (alertIsLive) { //check if alert is live

		var callOutColor = "success", //set call out color class to success (green)
			html = "";

		if (uthscAlert['type'].toLowerCase() != 'allclear' ) { //if type is not "all clear",
			callOutColor = 'alert'; //set call out color class to alert (red)
		}

		//generate html
		html += '<div class="columns callout large-12 ' + callOutColor + '"' +
			'style="margin-bottom:0; padding-top: 0; padding-bottom: 0;" data-closable="">' +
			'<div class="row">' +
			'<h2>' + uthscAlert['event'] + '</h2>' +
			'<p><strong>' + uthscAlert['headline'] + '</strong></p>' +
			'<p>' + uthscAlert['description'] + '</p>' +
			'<button class="close-button" aria-label="Dismiss alert" type="button" data-close="">' +
			'<span aria-hidden="true">&times;</span>' +
			'</button>' +
			'</div>' +
			'</div>';

		$('.uthsc-emergency-notification').html(html); //render html

		//console.log(html);
	}
}

$.ajax({
	type: "GET",
	url: '/alert/emergency-notifications/',
	dataType: "json",
	success: function (uthscAlert) {
		renderUthscAlert(uthscAlert);
	},
	error: function(xhr, status, error) {
		var err = eval(xhr.responseText);
		alert(err.Message);
	}
});