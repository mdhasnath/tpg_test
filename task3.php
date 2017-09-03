<?php

/**
 * Question 3: Write a PHP script to find the first character that is different between two strings.
 *
 * stringMisMatchAt
 * @param $str1 first input strings
 * @param $str2 second input string
 * @return array containing the index of first mismatching character in two strings and the mismatching characters
 *
 */

function stringMisMatchAt($str1, $str2)
{

    if (empty($str1) || empty($str2)) {
        echo 'Input string cannot be empty!';
        return;
    }
    $index = strspn($str1 ^ $str2, "\0");

    return array('index' => $index, 'str1' => $str1[$index], 'str2' => $str2[$index]);
}

$result1 = stringMisMatchAt('Good Morning', 'Good Evening');
echo 'First difference between two strings at position ' . $result1['index'] . ': "' . $result1['str1'] . '" vs "'  .$result1['str2']. '" <br/>';

$result2 = stringMisMatchAt('Let\'s play football', 'Let\'s play foosball');
echo 'First difference between two strings at position ' . $result2['index'] . ': "' . $result2['str1'] . '" vs "'  .$result2['str2']. '" <br/>';
