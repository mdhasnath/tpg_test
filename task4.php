<?php


/**
 * Question 4: Write a PHP function to convert Arabic Numbers to Roman Numerals.
 *
 * ArabicToRoman
 * Convert any positive value of a signed integer to its modern roman
 * numeral representation. Numerals within parentheses are multiplied by
 * 1000. ie. M == 1 000, (M) == 1 000 000, ((M)) == 1 000 000 000
 *
 * @param number - positive integer number
 * @return roman numeral representation of number
 */
function ArabicToRoman($number)
{
    if (!is_int($number) || $number < 1) return false; // ignore negative numbers and zero

    $integers = array(900, 500,  400, 100,   90,  50,   40,  10,    9,   5,    4,   1);
    $numerals = array('CM', 'D', 'CD', 'C', 'XC', 'L', 'XL', 'X', 'IX', 'V', 'IV', 'I');
    $major = intval($number / 1000) * 1000;
    $minor = $number - $major;
    $numeral = $leastSig = '';

    for ($i = 0; $i < sizeof($integers); $i++) {
        while ($minor >= $integers[$i]) {
            $leastSig .= $numerals[$i];
            $minor  -= $integers[$i];
        }
    }

    if ($number >= 1000 && $number < 40000) {
        if ($major >= 10000) {
            $numeral .= '(';
            while ($major >= 10000) {
                $numeral .= 'X';
                $major -= 10000;
            }
            $numeral .= ')';
        }
        if ($major == 9000) {
            $numeral .= 'M(X)';
            return $numeral . $leastSig;
        }
        if ($major == 4000) {
            $numeral .= 'M(V)';
            return $numeral . $leastSig;
        }
        if ($major >= 5000) {
            $numeral .= '(V)';
            $major -= 5000;
        }
        while ($major >= 1000) {
            $numeral .= 'M';
            $major -= 1000;
        }
    }

    if ($number >= 40000) {
        $major = $major/1000;
        $numeral .= '(' . ArabicToRoman($major) . ')';
    }

    return $numeral . $leastSig;
}

echo 'Roman numerals for "1000" is: ' . ArabicToRoman(1000);
echo '<br/>';
echo 'Roman numerals for "123456" is: ' . ArabicToRoman(123456);
echo '<br/>';
echo 'Roman numerals for "5000" is: ' . ArabicToRoman(5000);