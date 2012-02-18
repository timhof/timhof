<?php
/*
Template Name: Knicks
*/
?>

<?php get_header(); ?>
<div id="content">

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript">

			var show_played = true;

			$(document).ready(function() {
				getSchedule();
			});
			
			function processData(allText) {
				var allTextLines = allText.split(/\r\n|\n/);
				var headers = allTextLines[0].split(",");
				
				//$("#schedule_table").find('thead').append('<tr></tr>');
				//for (var j=0; j<headers.length; j++) {
					//$('table#schedule_table tr:last').append('<th>' + headers[j] + '</th>');
					//tarr.push(headers[j]+":"+data[j]);
				//}
						
				var lines = [];

				$("table#schedule_table").find("tr").remove();

				var currentTime = new Date()
				for (var i=1; i<allTextLines.length; i++) {
					var data = allTextLines[i].split(",");
					var date = new Date(data[1]);
					var className = data[0].indexOf('@') == 0 ? "away" : "home";
					if (!show_played && date.getTime() < currentTime.getTime()) {
						continue;
					}
					if(data[data.length-1].length > 0){
						var score = data[data.length-1].split("-");
						//alert(score[0] + "," + score[1]);
						className += (" " + (parseInt(score[0]) > parseInt(score[1]) ? "win" : "loss"));
					}
					if (data.length >= headers.length) {
						$("#schedule_table").find('tbody').append("<tr class='" + className + "'></tr>");
						//var tarr = [];
						for (var j=0; j<headers.length; j++) {
							if(headers[j].length == 0){
								continue;
							}
							else if(headers[j] == 'Description'){
								$('table#schedule_table tr:last').append('<td>' + data[j].substring(data[j].indexOf(' on ')+4).replace(/~/g, ',') + '</td>');
							}
							else{
								$('table#schedule_table tr:last').append('<td>' + data[j] + '</td>');
							}
							//tarr.push(headers[j]+":"+data[j]);
						}
						//lines.push(tarr);
						//alert(allTextLines[i]);
					}
					else{
						//alert(allTextLines[i] + " has " + data.length + " elements");
					}
				}
			}

			var getSchedule = function(){
				$.ajax({
					type: "GET",
					url: "<?php echo get_stylesheet_directory_uri() ?>/schedule.csv",
					dataType: "text",
					success: function(data) {processData(data);}
			 	});
			};

			var toggle_played = function(){
				show_played = !show_played;
				if ($('#played_checkbox').is(':checked')){
					$('.win').show();
					$('.loss').show();	
				}
				else{
					$('.win').hide();
					$('.loss').hide();	
				}
			};

		</script>
	<div id="schedule_title">New York Knicks 2011-2012 Schedule</div>
	<div id="toggle_played_div">
		<input type="checkbox" id="played_checkbox" name="played_checkbox" value="1" onclick="toggle_played()" checked />
		<label for="played_checkbox">Show Played</label>
	</div>
	<table id="schedule_table">
		<thead>
		</thead>
		<tbody>
		</tbody>
	</table>

</div><!--content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
