<?php

echo "
<html>
<head>
<title>Launch Event</title>
<meta name='viewport' content='width=device-width, user-scalable=no'>
<link rel='stylesheet' type='text/css' href='style.css' />
</head>
<body>
<div id='addantendee'>
<a href='addattendee.php'>+ add attendee</a>
</div>
<div id='letterlist'>
<form name='letters' action='letter.php' method='get'>
<button name='submit' type='submit' formaction='letter.php' formmethod='get' value='A'>A</button>
<button name='submit' type='submit' formaction='letter.php' formmethod='get' value='B'>B</button>
<button name='submit' type='submit' formaction='letter.php' formmethod='get' value='C'>C</button>
<button name='submit' type='submit' formaction='letter.php' formmethod='get' value='D'>D</button>
<button name='submit' type='submit' formaction='letter.php' formmethod='get' value='E'>E</button>
<button name='submit' type='submit' formaction='letter.php' formmethod='get' value='F'>F</button>
<button name='submit' type='submit' formaction='letter.php' formmethod='get' value='G'>G</button>
<button name='submit' type='submit' formaction='letter.php' formmethod='get' value='H'>H</button>
<button name='submit' type='submit' formaction='letter.php' formmethod='get' value='I'>I</button>
<button name='submit' type='submit' formaction='letter.php' formmethod='get' value='J'>J</button>
<button name='submit' type='submit' formaction='letter.php' formmethod='get' value='K'>K</button>
<button name='submit' type='submit' formaction='letter.php' formmethod='get' value='L'>L</button>
<button name='submit' type='submit' formaction='letter.php' formmethod='get' value='M'>M</button>
<button name='submit' type='submit' formaction='letter.php' formmethod='get' value='N'>N</button>
<button name='submit' type='submit' formaction='letter.php' formmethod='get' value='O'>O</button>
<button name='submit' type='submit' formaction='letter.php' formmethod='get' value='P'>P</button>
<button name='submit' type='submit' formaction='letter.php' formmethod='get' value='Q'>Q</button>
<button name='submit' type='submit' formaction='letter.php' formmethod='get' value='R'>R</button>
<button name='submit' type='submit' formaction='letter.php' formmethod='get' value='S'>S</button>
<button name='submit' type='submit' formaction='letter.php' formmethod='get' value='T'>T</button>
<button name='submit' type='submit' formaction='letter.php' formmethod='get' value='U'>U</button>
<button name='submit' type='submit' formaction='letter.php' formmethod='get' value='V'>V</button>
<button name='submit' type='submit' formaction='letter.php' formmethod='get' value='W'>W</button>
<button name='submit' type='submit' formaction='letter.php' formmethod='get' value='X'>X</button>
<button name='submit' type='submit' formaction='letter.php' formmethod='get' value='Y'>Y</button>
<button name='submit' type='submit' formaction='letter.php' formmethod='get' value='Z'>Z</button>
</form>
</div>
<div id='links'>
<a href='agenda.php'>Agenda</a><br />
<a href='details.php'>Venue details</a><br />
<a href='report.php'>Report</a><br /><br />
<a href='setup.php'>Setup/Reset Database</a>
</div>
</body>
</html>
";

?>