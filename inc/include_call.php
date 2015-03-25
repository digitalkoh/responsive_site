<?php
	if (isset($_GET["section"])){
	
		$sectionName = $_GET["section"];
        
        if(isset($_GET["page"])){
			// interior pages of a section
			$pageName = $_GET["page"];
			include("pg/".$pageName.".php");
		}else{
			// landing page or home only
			include("views/tab_".$sectionName.".php");
		}
		
	} else {
	
		include("views/tab_index.php");
		
	}
?>