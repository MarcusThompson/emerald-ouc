function parsePersonDetails(data) {
	var person = data.details,
		meta = data.meta,
		html = "";

	if (meta.lichterman_eligible) {
		html += "<div class=\"callout\">";
		html += "<div class=\"row\">";
		html += "<div class=\"columns small-2\">";
		html += "<img src=\"http://devel.uthsc.edu/images/w932_lichterman.jpg\" alt=\"\" />";
		html += "</div>";
		html += "<div class=\"columns small-10\">";
		html += "<p>" + person.name + " might be eligible for the Lichterman Award!</p>";
		html += "<a href=\"\" ><span class=\"fa fa-trophy\" aria-hidden=\"true\"></span>&nbsp;Nominate " + person.name + "</a>";
		html += "</div>";
		html += "</div>";
		html += "</div>";
	} else {
		html += "<div class=\"callout\">";;
		html += "<div class=\"row\">";
		html += "<div class=\"columns small-2\">";
		html += "<img src=\"http://devel.uthsc.edu/images/w932_lichterman.jpg\" alt=\"\" />";
		html += "</div>";
		html += "<div class=\"columns small-10\">";
		html += "<p>" + person.name + " is not eligible for the Lichterman Award. Only full-time,";
		html += "non-exempt employees with three years of service are eligible.</p>";
		html += "</div>";
		html += "</div>";
		html += "</div>";
	}

	html += "<table>";
	html += "<tbody>";
	html += "<tr><td><strong>Name:</strong></td><td>" + person.name + "</td></tr>";
	html += "<tr><td><strong>Campus:</strong></td><td>" + person.campus + "</td></tr>";
	html += "<tr><td><strong>Department:</strong></td><td>" + person.department + "</td></tr>";
	html += "<tr><td><strong>Address:</strong></td><td>" + person.address + "</td></tr>";
	html += "<tr><td><strong>Location:</strong></td><td>" + person.location + "</td></tr>";
	html += "<tr><td><strong>Phone Number:</strong></td><td>" + person.phone + "</td></tr>";
	html += "<tr><td><strong>Designation:</strong></td><td>" + person.designation + "</td></tr>";
	html += "<tr><td><strong>Title:</strong></td><td>" + person.title + "</td></tr>";
	html += "<tr><td><strong>NetID:</strong></td><td>" + person.netid + "</td></tr>";
	html += "<tr><td><strong>E-Mail:</strong></td><td><a href=\"" + person.email + "\">" + person.email + "</a></td></tr>";
	html += "</tbody>";
	html += "</table>";

	return html;
}

function RenderPersonDetails (data) {

	var html = "";

	if (peopleSearchId) {
		html = parsePersonDetails(data);
	}

	$('.people-search-detail').html(html);
	
}

$(document).ready(function () {
	if(peopleSearchId){
		$.ajax({
			type: "GET",
			url: 'http://uthsc.edu/search/scripts/lookup-detail.php?id=' + peopleSearchId,
			dataType: "json",
			success: function (data) {
				RenderPersonDetails(data);
			},
			error: function (xhr, status, error) {
				var err = eval("(" + xhr.responseText + ")");
				alert(err.Message);
			}
		});
		// .done(function () {
		// 	console.log("success");
		// })
		// .fail(function () {
		// 	console.log("error");
		// })
		// .always(function () {
		// 	console.log("complete");
		// });
	}
});