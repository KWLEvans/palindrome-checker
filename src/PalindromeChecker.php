<?php
class PalindromeChecker
{
    function checkPalindrome($input)
    {
        $input = strtolower($input);
        $input = preg_replace("/\W*/", "", $input);
        if (strlen($input) <= 1)
          return true;
        $a = $input[0];
        $z = $input[strlen($input) - 1];
        $rest = substr($input, 1, -1);
        return $a == $z && $this->checkPalindrome($rest);
    }
}
?>
