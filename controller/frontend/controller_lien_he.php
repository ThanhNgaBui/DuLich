<?php
	class controller_lien_he extends controller{
		public function __construct(){
			parent::__construct();
			include "view/frontend/view_lien_he.php";
		}
	}
	new controller_lien_he();
?>