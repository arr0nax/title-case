<?php

    class TitleCaseGenerator
    {

        private $forbidden_words = ["and", "or", "nor", "but", "a", "an", "the", "as", "at", "by", "for", "in", "on", "of", "per", "to"];

        function titleCaseIt($input)
        {
            $input = strtolower($input);
            $input_array = explode(' ', $input);
            $middle_array = [];
            $result = [];

            foreach ($input_array as $input) {
                if (preg_match("/-/", $input)) {
                    $input = explode("-", $input);
                    $input[1] = ucfirst($input[1]);
                    $input = implode("-", $input);
                    array_push($middle_array, $input);
                }
                else
                {
                array_push($middle_array, $input);
                }
            }

            foreach($middle_array as $word) {
                $test_word = preg_replace("/[[:punct:]]/", "", $word);
                if (!in_array($test_word, $this->forbidden_words))
                {
                    $word = ucfirst($word);
                    array_push($result, $word);
                }
                else
                {
                    array_push($result, $word);
                }
            }
            
            $result[0] = ucfirst($result[0]);
            $result = implode(' ', $result);
            return $result;
        }

    }

?>
