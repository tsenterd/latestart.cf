<html>
<head>

<title>Late Start</title>

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800' rel='stylesheet' type='text/css'>

<script type="text/javascript">

    function getElementByClass (className, parent) {
      parent || (parent = document);
	  var descendants= parent.getElementsByTagName('*'), i=-1, e, result=[];
	  while (e=descendants[++i]) {
	    ((' '+(e['class']||e.className)+' ').indexOf(' '+className+' ') > -1) && result.push(e);
	  }
	  return result;
	}

	function toggleVisible () {
		var calendar = document.getElementById("calendar");
		
		if (calendar.style.display == "block") {
			calendar.style.display = "none";
		}
		else {
			calendar.style.display = "block";
		}
		
	}

    function compareDates ()
    {
    	var today = new Date();
	
		document.getElementById("date").innerHTML = today.toISOString().slice(0, -14);
	
		currentTime = today.get
	
		today.setHours(0, 0, 0, 0);

		var lateStarts = new Array;
		lateStarts[0] = new Date(2013, 9, 8);
		lateStarts[1] = new Date(2013, 9, 25);
		lateStarts[2] = new Date(2013, 10, 05);
		lateStarts[3] = new Date(2013, 11, 10);
		lateStarts[4] = new Date(2014, 0, 07);
		lateStarts[5] = new Date(2014, 1, 04);
		lateStarts[6] = new Date(2014, 1, 14);
		lateStarts[7] = new Date(2014, 2, 04);
		lateStarts[8] = new Date(2014, 2, 21);
		lateStarts[9] = new Date(2014, 3, 8);
		lateStarts[10] = new Date(2014, 4, 06);
		lateStarts[11] = new Date(2014, 4, 13);
		lateStarts[12] = new Date(2014, 5, 03);
		
		for (var i = 0; i < lateStarts.length; i++) {												
												
			if (today.getTime() === lateStarts[i].getTime()){
				document.getElementById("lateStart").innerHTML = "Today is a late start.";
				document.getElementById("lateStart").classList.add('green');
				break;
			}
			else
			{
				document.getElementById("lateStart").innerHTML = "Today is not a late start. ****.";
				document.getElementById("lateStart").classList.add('red');
			}
			
		}
		
		for (var i = 0; i < lateStarts.length; i++) {
			var tomorrow = new Date();
			tomorrow.setDate(today.getDate() + 1);			
			tomorrow.setHours(0, 0, 0, 0);
						
			if (tomorrow.getTime() === lateStarts[i].getTime())
			{
				document.getElementById("tomorrow").innerHTML = "Tomorrow is a late start.";
				document.getElementById("tomorrow").classList.add('green');
				break;
			}
			else
			{
				document.getElementById("tomorrow").innerHTML = "Tomorrow is not a late start.";
				document.getElementById("tomorrow").classList.add('red');
			}
		}
		
	}
	
</script>

<style type = "text/css">
* {
	margin: 0;
	padding: 0;
}

html {
	background-color: #FFEED5;
}

a {
	text-decoration: none;
}

.green {
	color: #137c13;
}

.red {
	color: #E04765;
}

p {
	font-family: 'Open Sans', sans-serif;
    font-weight: bold;
    font-size: 50px;
	text-align: center;
}

#tomorrow {
	font-size: 20px; 
}

.number {
	font-family: 'Open Sans', sans-serif;
	color: #000000;
    font-weight: bold;
    font-size: 15px;
	text-align: center;
	margin-top: 40px;
}

h1 {
	font-family: 'Open Sans', sans-serif;
    color: #493F3D;
    font-size: 25px;
	text-align: center;
}

h2 {
    font-family: 'Open Sans', sans-serif;
    font-size: 20px;
    text-align: center;
}

#container {
	display: block;
	width: 100%;
	height: 300px;
	margin: 0 auto;
}

#footer {
	display: block;
	width: 100%;
	height: 100px;
	margin: 0 auto;
    text-align: center;
}

#footer p {
	font-size: 10px;
	color: #493F3D;
}

#calendar {
	display: none;
	width: 800px;
	height: 600px;
	margin: 0 auto;
	margin-top: 40px;
}

/* Modified pure-button styling from https://github.com/yui/pure/blob/master/src/buttons/css/buttons.css */

.pure-button {
	position: relative;
	top: 20px;
    font-family: 'Open Sans', sans-serif;
    *font-size: 90%; /*IE 6/7 - To reduce IE's oversized button text*/
    *overflow: visible; /*IE 6/7 - Because of IE's overly large left/right padding on buttons */
    padding: 0.5em 1.5em 0.5em;
    color: #444; /* rgba not supported (IE 8) */
    color: rgba(0, 0, 0, 0.80); /* rgba supported */
    *color: #444; /* IE 6 & 7 */
    border: 1px solid #999;  /*IE 6/7/8*/
    border: none rgba(0, 0, 0, 0);  /*IE9 + everything else*/
    background-color: #E6E6E6;
    text-decoration: none;
    border-radius: 2px;
    /* Transitions */
    -webkit-transition: 0.1s linear -webkit-box-shadow;
    -moz-transition: 0.1s linear -moz-box-shadow;
    -ms-transition: 0.1s linear box-shadow;
    -o-transition: 0.1s linear box-shadow;
    transition: 0.1s linear box-shadow;
}

.pure-button-hover,
.pure-button:hover,
.pure-button:focus {
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#1a000000',GradientType=0);
    background-image: -webkit-gradient(linear, 0 0, 0 100%, from(transparent), color-stop(40%, rgba(0,0,0, 0.05)), to(rgba(0,0,0, 0.10)));
    background-image: -webkit-linear-gradient(transparent, rgba(0,0,0, 0.05) 40%, rgba(0,0,0, 0.10));
    background-image: -moz-linear-gradient(top, rgba(0,0,0, 0.05) 0%, rgba(0,0,0, 0.10));
    background-image: -ms-linear-gradient(transparent, rgba(0,0,0, 0.05) 40%, rgba(0,0,0, 0.10));
    background-image: -o-linear-gradient(transparent, rgba(0,0,0, 0.05) 40%, rgba(0,0,0, 0.10));
    background-image: linear-gradient(transparent, rgba(0,0,0, 0.05) 40%, rgba(0,0,0, 0.10));
}
.pure-button:focus {
    outline: 0;
}
.pure-button-active,
.pure-button:active {
    box-shadow: 0 0 0 1px rgba(0,0,0, 0.15) inset, 0 0 6px rgba(0,0,0, 0.20) inset;
}

/* Firefox: Get rid of the inner focus border */
.pure-button::-moz-focus-inner{
    padding: 0;
    border: 0;
}

.pure-button-primary,
.pure-button-selected,
a.pure-button-primary,
a.pure-button-selected {
    background-color: rgb(0, 120, 231);
    color: #fff;
}

@media all and (max-width:1020px)
{
    #container, #footer {
	    float: none;
	    width: auto;
    }
	
	p { font-size: 10em;}
    
    .number {
	    font-size: 5em;
    }
    
    #tomorrow {
	    font-size: 5em;
    }
    
    h1, h2 {
	    font-size: 6em;
    }
    
}
	
	</style>

</head>

<body onload="compareDates()">
<div id = "container">
	<h1> WLMAC Late Start</h1>
	<h2 id = "date"> </h2>
	<p id = "lateStart"> </p>
	<p id = "tomorrow"> </p>
	<p class = "number"> School Number: <a href="tel://416-395-3330">416.395.3330</a> </p>
	<div id = "footer">
		<p>Developed by Jonathan Galperin, Lead Designer Alex Zvorygin.</p>
		<a class = "pure-button pure-button-primary" href="#" onclick = "toggleVisible();">View The School Calendar</a>
		<div id = "calendar">
			<iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showTz=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=wlmacci%40gmail.com&amp;color=%23060D5E&amp;ctz=America%2FToronto" style=" border-width:0 " width="800" height="600" frameborder="0" scrolling="no"></iframe>
			</div>
	</div>
</div>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-44558016-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>

</html>