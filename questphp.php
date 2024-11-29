<?php

class Questphp{

	public $title;
	public $total_questions;
	private $questions = [];
	private $type;

	public function __construct($title, $total_questions) {
		$this->title = $title;
		$this->total_questions = $total_questions;
	}

	public function Mode($type){

	}

	public function Add($title_questions, $options, $correct_answer) {
      
        if (empty($options)) {
            throw new Exception("Array Null.");
        }

        $correct_found = false;
        foreach ($options as $option) {
            if ($option['key'] == $correct_answer) {
                $correct_found = true;
                break;
            }
        }

        if (!$correct_found) {
            throw new Exception("Correct answer null");
        }

        $questionBlock = [
            'title' => $title_questions, 
            'correct' => $correct_answer,
            'options' => $options
        ];

        
        foreach ($options as $index => $option) {

            $questionBlock[] = [
                'key' => (string)($index + 1), 
                'title' => $option['title']
            ];
            
        }
       
        $this->questions[] = $questionBlock;
  
        return $questionBlock;

    }

   
    public function getQuestions() {
        return $this->questions;
    }

	public function Finish(){

		return [
			'title' => $this->title,
			'total_questions' => $this->total_questions,
			'questions_hits' => 0,
			'questions_failures' => 0,
		];

	}

}

?>