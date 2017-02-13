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

        function test_titleCaseIt_prepositions()
        {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "boats are the best on water and i love them";

            //Act
            $result = $test_TitleCaseGenerator->titleCaseIt($input);

            //Assert
            $this->assertEquals("Boats Are the Best on Water and I Love Them", $result);
        }

        function test_titleCaseIt_firstWordCapitalized()
        {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "on water there are boats";

            //Act
            $result = $test_TitleCaseGenerator->titleCaseIt($input);

            //Assert
            $this->assertEquals("On Water There Are Boats", $result);
        }

        function test_titleCaseIt_ignoreCapitalization()
        {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "oN WatEr tHerE arE Boats";

            //Act
            $result = $test_TitleCaseGenerator->titleCaseIt($input);

            //Assert
            $this->assertEquals("On Water There Are Boats", $result);
        }

        function test_titleCaseIt_punctuationIgnored()
        {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "boat on: a boat sTory";

            //Act
            $result = $test_TitleCaseGenerator->titleCaseIt($input);

            //Assert
            $this->assertEquals("Boat on: a Boat Story", $result);
        }
     }

?>
