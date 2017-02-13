<?php

    class TitleCaseGenerator
    {

        private $forbidden_words = ["and", "or", "nor", "but", "a", "an", "the", "as", "at", "by", "for", "in", "on", "of", "per", "to"];

        function titleCaseIt($input)
        {
            $input_array = explode(' ', $input);
            $result = [];
            foreach($input_array as $word) {
                if (!in_array($word, $this->forbidden_words))
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
