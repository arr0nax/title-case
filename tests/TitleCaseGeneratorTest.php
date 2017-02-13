<?php

    require_once "src/TitleCaseGenerator.php";

    class TitleCaseGeneratorTest extends PHPUnit_Framework_TestCase
    {

        function test_titleCaseIt_oneWord()
        {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "boats";

            //Act
            $result = $test_TitleCaseGenerator->titleCaseIt($input);

            //Assert
            $this->assertEquals("Boats", $result);
        }

        function test_titleCaseIt_multipleWords()
        {
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "boats will float";

            $result = $test_TitleCaseGenerator->titleCaseIt($input);

            $this->assertEquals('Boats Will Float', $result);
        }
    }

?>
