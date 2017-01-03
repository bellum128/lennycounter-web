<!-- LennyCounter by bellum128 Productions -->
<script language="JavaScript" type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

<script>
	$(document).ready(function() {
	  refreshdata();
	});

	function refreshdata()
	{
	    $('#count').load('lennyval.php', function() {
	       setTimeout(refreshdata, 1000);
	    });
	}
</script>

<html>
	<head>
		<title>( ͡° ͜ʖ ͡°) Counter | By - bellum128</title>

		<style>
			body
			{
				color: white;
				background-color: black;
				font-family: Arial;
				font-weight: bold;

				background: #000000;
				background: -webkit-linear-gradient(#000000, #333333);
		    	background: -o-linear-gradient(#000000, #333333);
		    	background: -moz-linear-gradient(#000000, #333333);
		    	background: linear-gradient(#000000, #333333);
			}

			.center
			{
			    position: absolute;
			    width: 220px;
			    height: 50px;
			    top: 50%;
			    left: 50%;
			    margin-left: -110px;
			    margin-top: -25px;
			}
		</style>
	</head>

	<body>
		<div class="center">There have been <span id="count"></span> ( ͡° ͜ʖ ͡°)s on this day!</div>
	</body>
</html>