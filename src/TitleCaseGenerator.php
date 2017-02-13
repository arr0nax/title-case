<?php

    class TitleCaseGenerator
    {
        function titleCaseIt($input)
        {
            $input_array = explode(' ', $input);
            $result = [];
            foreach($input_array as $word) {
                $word = ucfirst($word);
                array_push($result, $word);
            }
            $result = implode(' ', $result);
            return $result;
        }

    }

?>
