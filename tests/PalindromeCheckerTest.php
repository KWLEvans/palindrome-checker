<?php
require_once 'src/PalindromeChecker.php';

class PalindromeCheckerTest extends PHPUnit_Framework_TestCase
{
    function test_checkPalindrome_singleCharacter()
    {
        //Arrange
        $test_PalindromeChecker = new PalindromeChecker;
        $input = 'A';

        //Act
        $result = $test_PalindromeChecker->checkPalindrome($input);

        //Assert
        $this->assertEquals(true, $result);
    }

    function test_checkPalindrome_multipleCharacters()
    {
        //Arrange
        $test_PalindromeChecker = new PalindromeChecker;
        $input = 'Hello olleH';

        //Act
        $result = $test_PalindromeChecker->checkPalindrome($input);

        //Assert
        $this->assertEquals(true, $result);
    }

    function test_checkPalindrome_multipleCharacters_false()
    {
        //Arrange
        $test_PalindromeChecker = new PalindromeChecker;
        $input = 'Hello orlleH';

        //Act
        $result = $test_PalindromeChecker->checkPalindrome($input);

        //Assert
        $this->assertEquals(false, $result);
    }
}
?>
