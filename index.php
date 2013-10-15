<html>
<head>

<title>Late Start</title>

<link href='http://fonts.googleapis.com/css?family=Cabin:600' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>


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
	
		document.getElementById("date").innerHTML = today.toDateString();
	
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
				document.getElementById("lateStart").innerHTML = "TODAY IS A LATE START";
				document.getElementById("lateStart").classList.add('blue');
				break;
			}
			else
			{
				document.getElementById("lateStart").innerHTML = "TODAY IS NOT A LATE START";
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
				document.getElementById("tomorrow").classList.add('blue');
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

a {
	color: tomato;
	text-decoration: none;
}

a[href^="tel:"]:before {
    content: "\260E";
    display: block;
    margin-right: 0.2em;
}

.inline-link {
  display: inline-block;
  margin: 0 0.2em;
  padding: 3px;
  background: #08C;
  border-radius: 2px;
  transition: all 0.3s ease-out;

  /* Font styles */
  text-decoration: none;
  font-weight: bold;
  color: white;
}

.inline-link:hover   { background: #53A7EA; }
.inline-link:active  { background: #C4E1F8; }
.inline-link:visited { background: #F2BF97; }
	

.metro {
  font-family: 'Lato', sans-serif;
  display: inline;
  padding: 10px;
  width: intrinsic;
  margin: 0 auto;
  margin-top: 10px;
  margin-bottom: 10px;
  background: #08C;

 -webkit-transition: 0.3s ease-out;
 -moz-transition: 0.3s ease-out;
 -o-transition: 0.3s ease-out;
 -ms-transition: 0.3s ease-out;
 transition: 0.3s ease-out;

  /* Font styles */
  color: white;
  font-weight: 400;
  text-decoration: none;
}

.metro:hover { background: #0AF; }

.metro.three-d {
  position: relative;
  box-shadow: 
    1px 1px #53A7EA,
    2px 2px #53A7EA,
    3px 3px #53A7EA;
  transition: all 0.1s ease-in;
}

.metro.three-d:active { 
  box-shadow: none;
  top: 3px;
  left: 3px;
}

.blue {
	color: rgb(0, 120, 231);
}

.red {
	color: #E04765;
}

p {
  font-family: 'Lato', sans-serif;
  font-weight: 300;
    font-size: 50px;
	text-align: center;
}

#links {
	display: block;
	text-align: center;
}

#button_container {
	display: block;
	width: 331px;
	margin: 0 auto;
	margin-top: 20px;
	margin-bottom: 20px;	
}

#tomorrow {
	font-size: 20px; 
}

.number {
  font-family: 'Lato', sans-serif;
	color: #000000;
    font-weight: bold;
    font-size: 15px;
	text-align: center;
	margin-top: 40px;
}

h1 {
  font-family: 'Lato', sans-serif;
    color: #493F3D;
    font-size: 25px;
	text-align: center;
}

h2 {
  font-family: 'Lato', sans-serif;
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
	<h1 id = "date"> </h1>
	<p id = "lateStart"> </p>
	<p id = "tomorrow"> </p>
	<p class = "number"><a href="tel://416-395-3330">416.395.3330</a> </p>
	<div id = "button_container">
		<a class = "metro" href="https://www.facebook.com/groups/macevents2014/" target="_blank">Facebook</a>
		<a class = "metro" href="https://twitter.com/mackenzielyon" target="_blank">Twitter</a>
		<a class = "metro" href="http://www.wlmac.ca" target="_blank">Website</a>
		<a class = "metro" href="#" onclick ="toggleVisible();">Calendar</a>
	</div>
	<div id = "footer">
		<p>Developed by Jonathan Galperin, Lead Designer Alex Zvorygin.</p>
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