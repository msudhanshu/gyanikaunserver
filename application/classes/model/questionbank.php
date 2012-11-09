<?php defined('SYSPATH') or die('No direct script access.');
 
class Model_Questionbank extends ORM {
     
	 protected $_table_name = "questionbanks";
	//static $connection = 'development';
	 
	 public static function getTitleMsg()
	 {
	 	//Model_Introduction
		//$m = new Model_Introduction();
	 //$retval = $m->find('all');//,array();
	 return $retval;
	 }
	 
	 
	public static function to_questionanswer_json($quest_id){
	//print '.........'.$quest_id;
	// Temp : 
	$quest_id = $quest_id + 1;
             $questionanswer = ORM::factory('questionbank')->where('quest_id', '=', $quest_id)->find();;	
	        //    $str = '"nextQuestion": [  ';
				$str = '[';
				$str = $str . '{"quest_id:":'. $questionanswer->quest_id . ", ";
				if($questionanswer->question != null)
					$str = $str . '"Question" : "'. $questionanswer->question .'",';
 				if($questionanswer->option_a != null)
					$str = $str . '"OptionA" : "'. $questionanswer->option_a  .'",';
				if($questionanswer->option_b != null)
					$str = $str . '"OptionB" : "'.$questionanswer->option_b .'",';
				if($questionanswer->option_c != null)
					$str = $str . '"OptionC" : "'. $questionanswer->option_c .'",';
				if ($questionanswer->option_d != null)
					$str = $str . '"OptionD" : "'. $questionanswer->option_d .'",';
				if ($questionanswer->answer != null)
					$str = $str . '"Answer" : "'. $questionanswer->answer .'",';
					
					
				if ($questionanswer->solution != null)
					$str = $str . '"Information" : "'. $questionanswer->solution .'",';
				if ($questionanswer->resources != null)
					$str = $str . '"ResourceLink" : "'. $questionanswer->resources .'",';

					
					return  substr($str, 0, -1) . '}]';
	//	return  $str;
	}	
	
	
	
}