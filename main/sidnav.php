<div id="mySidenav" class="sidenav">
        <a href="students2.php">Manage students</a>
        <a href="teachers2.php">Manage teachers</a>
		<br><br><br><br><br><br><br><br><br><br><br>
		<div class="date-time">
			<h3 style="margin:5px">Date</h3>
			<button style="
			border: 1px solid #112d80;
			width: 220px;
			background-color: #C6DCF5;
			padding: 10px;
			text-decoration: none;
			font-weight: normal;
			color: #112d80;
			transition: 0.3s;"><?php
			$Today = date('y:m:d');
			$new = date('l, F d, Y', strtotime($Today));
			echo $new;
			?></button>
			
			<form name="clock">
			<br>
			<h3 style="margin:5px">Time</h3>
			<input style="
			border: 1px solid #112d80;
			padding: 10px;
			width: 220px;
			background-color: #C6DCF5;
			text-decoration: none;
			font-weight: normal;
			color: #112d80;
			transition: 0.3s;"  type="submit" class="trans" name="face" value="">
			</form>
		</div>
</div>