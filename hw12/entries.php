<script src="assets/js/jquery-3.5.1.js"></script>
<?php
echo '<h3 align="center">Contact Form Data Results</h3>';

echo'<table border = "1" width = "100%">';
echo '<tr>';
echo '<th>Record #</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Username</th><th>Comments</th>';
echo '</tr>';

echo '<tbody id="entries">';

echo '</tbody>';

echo '</table>';
?>
<script>
function refresh_div() {
	$.ajax( { // ajax call from jquery
		type: "post", // not needed, but good to know you're getting data asynchronously
		url: "https://ec2-3-89-220-194.compute-1.amazonaws.com/hw12/query.php", // exact location to send data to
		success: function(data) {
			$('#entries').html(data); // uses jquery tag to address the results variable and take data recieved from jquery data and feed it into the results element
		}
	} );	
};
setInterval(function() { refresh_div(); }, 500); // run refresh_div every 1/2 second
	
</script>