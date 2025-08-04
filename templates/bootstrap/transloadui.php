
<div class="container"><div class="row">

	<div class="progress">

		<div id="done" class="progress-bar" role="progressbar" style="width:0%;"></div>

	</div>



	<div class="col-lg-4" id="received">kb/s</div>

	<div class="col-lg-4" id="percent"></div>

	<div class="col-lg-4" id="speed"></div>

</div>

</div>

<div id="resume" align="center"></div>

<script type="text/javascript">

/* <![CDATA[ */

function pr(percent, received, speed,eta)

{

	document.getElementById("received").innerHTML = '<b>' + received + "<\/b>";

	document.getElementById("percent").innerHTML = '<b>' + percent + "%<\/b>";

	document.getElementById("done").style.width = percent + '%';

	document.getElementById("speed").innerHTML = '<b>' + speed + " KB\/s<\/b>";

	document.title = percent + '% Downloaded';

	return true;

}



function mail(str, field)

{

	document.getElementById("mailPart." + field).innerHTML = str;

	return true;

}

/* ]]> */

</script>

