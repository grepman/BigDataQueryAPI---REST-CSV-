<?php
	
	if(isset($_REQUEST['token'])){

			if($_REQUEST['token'] == "New"){
				include("./inc/new-points.php");
			}
			elseif($_REQUEST['token'] == "OldPlusNew"){
				include("./inc/oldplusnew-points.php");
			}
			elseif ($_REQUEST['token'] == "NinNout") {
				include("./inc/ninnout-points.php");
			}
			elseif ($_REQUEST['token'] == "Granular") {
				include("./inc/granular-points.php");
			}
			else{
				include("./index.php");
			}
	}
	else{
		include("./index.php");
	}

?>