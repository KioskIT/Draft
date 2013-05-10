<!DOCTYPE html>
<html>
	<head>
		<style>
			html,body
			{
				margin:0;
				width:100%;
				height:100%;
			}
			#msg_bg
			{
				background:rgba(0,0,0,0.8); 
				width:100%;
				height:100%;
				
			}
			#msg_band
			{
				position:relative;
				height:100%%;
				width:50%;
				background:#5F6FFE;
				margin:0 auto;
				padding:1%;
			}
			
			#msg_band h1
			{
				margin:0;
				color:white;
				font-weight:bold;
				border-bottom:2px solid white;
			}
			
			#form
			{
				border:2px solid white;
				margin-top:1%;
				padding:1%;
			}
			
			#msg_band h2
			{
				margin:0;
				color:white;
				margin-top:1%;
				margin-bottom:1%;
			}
			.field
			{
				position:relative;
				left:2%;
				font-size:1.2em;
				padding:0.5%;
				min-width:40%;
				background:transparent;
				border:2px solid white;
				color:white;
				font-weight:bold;
			}
			#msg_band h3{
				font-weight:white;
				margin:0;
				margin-top:0.5%;
				margin-bottom:0.5%;
				color:white;
			}
			.radio_lbl
			{
				font-size:1.3em;
				font-weight:bold;
				color:white;
			}
			.color
			{
				position:relative;
				width:100px;
				height:50px;
				left:2%;
				border:2px solid white;

			}
			.button
			{
				position:relative;
				font-size:1.5em;
				color:white;
				font-weight:bold;
				padding:1%;
				cursor:pointer;
				background:transparent;
				border:5px solid white; 
				float:right;
			}
		</style>
		<script>
			function getDay(id)
			{
				if(id ==0)
				{
					id = 'from';
				}else{
					id = 'to';
				}
				var xmlhttp;
				if (window.XMLHttpRequest)
				{// code for IE7+, Firefox, Chrome, Opera, Safari
					xmlhttp=new XMLHttpRequest();
				}
				else
				{// code for IE6, IE5
					xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
				}
				xmlhttp.onreadystatechange=function()
				{
					if (xmlhttp.readyState==4 && xmlhttp.status==200)
					{
						
						document.getElementById(id + '_day').innerHTML=xmlhttp.responseText;
					}
				}
				var year = document.getElementById(id +'_year').value;
				var month = document.getElementById(id + '_month').value;
				xmlhttp.open("GET","get-days.php?y="+ year + "&m="+ month + "&i=" + Math.random(),true);
				xmlhttp.send();
			}
		</script>
	</head>
	<body>
		<div id = 'msg_bg'>
			<div id = 'msg_band'>
				<h1>Add a New Announcement</h1>
				<div id = 'form'>
					<h2>Type of Message</h2>
					<select class = 'field' name = '' style = 'color:#5F6FFE'>
						<option value = '0'>Ticker-Tape</option>
						<option value = '0'>Modal Message</option>					
					</select>
					<h2>Message</h2>
					<input  class = 'field' type = 'text' value ='' style = 'width:90%'/>
					
					
					<h2>Schedule</h2>
					
					<h3>From</h3>
					<select class = 'field' id = 'from_year'  style = 'min-width:10%;color:#5F6FFE'>
						<option selected>Year</option>
						<?php
							$year = date('Y',time());
							$nextYear = $year+1;
							echo "<option value = '$year'>$year</option>";
							echo "<option bvalue = '$nextYear'>$nextYear</option>";
						?>
					</select>
					<select class = 'field' id = 'from_month'  style = 'min-width:10%;color:#5F6FFE' onChange = 'getDay(0)'>
						<option selected>Month</option>
						<option value = '1'>Jan</option>
						<option value = '2'>Feb</option>
						<option value = '3'>Mar</option>
						<option value = '4'>Apr</option>
						<option value = '5'>May</option>
						<option value = '6'>Jun</option>
						<option value = '7'>Jul</option>
						<option value = '8'>Aug</option>
						<option value = '9'>Sep</option>
						<option value = '10'>Oct</option>
						<option value = '11'>Nov</option>
						<option value = '12'>Dec</option>
					</select>

					<select class = 'field' id = 'from_day'  style = 'min-width:10%;color:#5F6FFE'>
						<option selected>Day</option>
					</select>
					<select class = 'field' id = 'from_hour' style = 'min-width:10%;color:#5F6FFE'>
						<option value = '1' selected>Hour</option>
						<?php
							for($i=0;$i<=23;$i++)
							{
								if($i<=9)
								{
									$val = '0'.$i;
								}else{
									$val = $i;
								}
								echo "<option value = '$i'>$val</option>";
							}
						?>
					</select>
					<select class = 'field' id = 'from_min' style = 'min-width:10%;color:#5F6FFE'>
						<option value = '1' selected>min</option>
						<?php
							for($i=0;$i<=59;$i++)
							{
								if($i<=9)
								{
									$val = '0'.$i;
								}else{
									$val = $i;
								}
								echo "<option value = '$i'>$val</option>";
							}
						?>
					</select>

					<h3>To</h3>
					<input  type = 'radio' name = 'type' value = '0' style = 'position:relative;left:2%' checked onClick = 'document.getElementById("period_fields").style.display="none"'/> <span class = 'radio_lbl'  style = 'position:relative;left:2%'> Indefinitely</span>
					<input  type = 'radio' name = 'type' value = '1'  style = 'position:relative;left:2%' onClick = 'document.getElementById("period_fields").style.display="block"'/> <span class = 'radio_lbl'  style = 'position:relative;left:2%'>Period</span>
					<br/>
					<div id = 'period_fields' style = 'display:none'>
						<select class = 'field' id = 'to_year'  style = 'min-width:10%;color:#5F6FFE'>
							<option selected>Year</option>
							<?php
								$year = date('Y',time());
								$nextYear = $year+1;
								echo "<option value = '$year'>$year</option>";
								echo "<option bvalue = '$nextYear'>$nextYear</option>";
							?>
						</select>
						<select class = 'field' id = 'to_month'  style = 'min-width:10%;color:#5F6FFE' onChange = 'getDay(1)'>
							<option selected>Month</option>"
							<option value = '1'>Jan</option>
							<option value = '2'>Feb</option>
							<option value = '3'>Mar</option>
							<option value = '4'>Apr</option>
							<option value = '5'>May</option>
							<option value = '6'>Jun</option>
							<option value = '7'>Jul</option>
							<option value = '8'>Aug</option>
							<option value = '9'>Sep</option>
							<option value = '10'>Oct</option>
							<option value = '11'>Nov</option>
							<option value = '12'>Dec</option>
						</select>

						<select class = 'field' id = 'to_day' style = 'min-width:10%;color:#5F6FFE'>
							<option selected>Day</option>
						</select>
						<select class = 'field' id = 'to_hour' style = 'min-width:10%;color:#5F6FFE'>
							<option value = '1' selected>Hour</option>
							<?php
								for($i=0;$i<=23;$i++)
								{
									if($i<=9)
									{
										$val = '0'.$i;
									}else{
										$val = $i;
									}
									echo "<option value = '$i'>$val</option>";
								}
							?>
						</select>
						<select class = 'field' id = 'to_min' style = 'min-width:10%;color:#5F6FFE'>
							<option value = '1' selected>min</option>
							<?php
								for($i=0;$i<=59;$i++)
								{
									if($i<=9)
									{
										$val = '0'.$i;
									}else{
										$val = $i;
									}
									echo "<option value = '$i'>$val</option>";
								}
							?>
						</select>

					</div>
						<h2>Colours</h2>
							<h3>Backcolor</h3>
								<input type = 'color' id = 'forecolor' class = 'color' onChange = 'document.write(document.getElementById("forecolor").value)'/>
							<h3>Forecolor</h3>
								<input type = 'color' id = 'backcolor' class = 'color'/>
					<input class = 'button' type = 'button' value = 'Cancel' />								
					<input class = 'button' type = 'button' value = 'Add Announcement' />
					
				</div>

			</div>
		</div>
		
		<div id = ''>
		
		</div>
	</body>
</html>