<?php
/**
*Format Class
*/
class Format{
	public function formatDate($date){
		return date('F j, Y', strtotime($date));

	}

	public function textShorten($text, $limit = 200){
		$text = $text. " ";
		$text = substr($text, 0, $limit);
		$text = substr($text, 0, strrpos($text, ' '));
		$text = $text.".....";
		return $text;
	}

	public function validation($data){
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
} 

?>