<?php 
	class model{
		//truy van de lay ra nhieu ban ghi
		public function fetch($sql){
			global $link;
			$result = mysqli_query($link,$sql);
			// if (!$result) {
			 //	print_r($sql);
			// }
			$arr = array();
			while($rows = mysqli_fetch_array($result))
				$arr[] = $rows;
			return $arr;
		}
		//truy van de lay ra mot ban ghi
		public function fetch_one($sql){
			global $link;
			$result = mysqli_query($link,$sql);
			$arr = mysqli_fetch_array($result);
			return $arr;
		}
		//thuc thi cau truy van
		public function execute($sql){
			global $link;
			mysqli_query($link,$sql);
		}
		//tra ve so luong ban ghi
		public function num_rows($sql){
			global $link;
			$result = mysqli_query($link,$sql);
			return mysqli_num_rows($result);
		}
		
	}
 ?>