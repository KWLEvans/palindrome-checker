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
}
?>
