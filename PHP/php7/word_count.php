<?php
    class world_counter {
        const ASC = 1; //Tên hằng không bắt buộc bắt đầu $
        const DESC = 2;
        private $words;
        function __construct($filename) {
            $file_content = file_get_contents($filename);
            $this->words = (array_count_values(str_word_count(strtolower($file_content),1)));
        }
        public function count($order) {
            if($order == self::ASC)
                asort($this->words);
            else if($order == self::DESC)
                asort($this->words);
            foreach ($this->words as $key=>$value)
                echo $key."=".$value."<br/>";
        }
    }
?>

