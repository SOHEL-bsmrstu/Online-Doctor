<?php


class Formated {
    public static function validation($data){
        $data= trim($data);
        $data= htmlspecialchars($data);
        $data= stripcslashes($data);
      
        return $data;
    }
    	public function textShorten($text, $limit = 400){
		$text = $text. " ";
		$text = substr($text, 0, $limit);
		$text = substr($text, 0, strrpos($text, ' '));
		$text = $text.".....";
		return $text;
	}
}
