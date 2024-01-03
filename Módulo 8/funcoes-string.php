<?php
// addslashes e stripslashes
$str = "This is an example string with 'single' and \"double\" quotes.";
$escapedStr = addslashes($str);
$unescapedStr = stripslashes($escapedStr);
echo "Original String: $str\n";
echo "Escaped String: $escapedStr\n";
echo "Unescaped String: $unescapedStr\n\n";

// echo
echo "Teste Funções para Strings!\n\n";

// explode e implode
$dateString = "2024-01-03";
$dateArray = explode('-', $dateString);
$newDateString = implode('/', $dateArray);
echo "Original Date String: $dateString\n";
echo "Exploded Date Array: " . print_r($dateArray, true) . "\n";
echo "Imploded Date String: $newDateString\n\n";

// htmlentities e html_entity_decode
$htmlString = "<p>This is a <b>bold</b> paragraph.</p>";
$encodedHtml = htmlentities($htmlString);
$decodedHtml = html_entity_decode($encodedHtml);
echo "Original HTML String: $htmlString\n";
echo "Encoded HTML String: $encodedHtml\n";
echo "Decoded HTML String: $decodedHtml\n\n";

// trim, ltrim e rtrim
$whitespaceString = "   Trim this string   ";
$trimmedString = trim($whitespaceString);
$ltrimmedString = ltrim($whitespaceString);
$rtrimmedString = rtrim($whitespaceString);
echo "Original String: \"$whitespaceString\"\n";
echo "Trimmed String: \"$trimmedString\"\n";
echo "Left Trimmed String: \"$ltrimmedString\"\n";
echo "Right Trimmed String: \"$rtrimmedString\"\n\n";

// number_format
$number = 1234567.89;
$formattedNumber = number_format($number, 2, ',', '.');
echo "Original Number: $number\n";
echo "Formatted Number: $formattedNumber\n\n";

// print e printf
$name = "John";
$age = 30;
print("Name: $name, Age: $age\n");
printf("Name: %s, Age: %d\n\n", $name, $age);

// similar_text
$str1 = "Hello, World!";
$str2 = "Hello, W0rld!";
$similarity = similar_text($str1, $str2);
echo "String 1: $str1\n";
echo "String 2: $str2\n";
echo "Similarity: $similarity%\n\n";

// str_contains, str_start_with e str_ends_with
$haystack = "This is a sample string";
$needle1 = "sample";
$needle2 = "example";
echo "Haystack: $haystack\n";
echo "Contains 'sample': " . (str_contains($haystack, $needle1) ? "Yes" : "No") . "\n";
echo "Starts with 'This': " . (str_starts_with($haystack, "This") ? "Yes" : "No") . "\n";
echo "Ends with 'string': " . (str_ends_with($haystack, "string") ? "Yes" : "No") . "\n\n";

// str_pad e str_repeat
$inputStr = "PHP";
$paddedStr = str_pad($inputStr, 10, "_", STR_PAD_BOTH);
$repeatedStr = str_repeat($inputStr, 3);
echo "Original String: $inputStr\n";
echo "Padded String: $paddedStr\n";
echo "Repeated String: $repeatedStr\n\n";

// str_word_count e strlen
$text = "This is a sample text.";
$wordCount = str_word_count($text);
$length = strlen($text);
echo "Text: $text\n";
echo "Word Count: $wordCount\n";
echo "Length: $length\n\n";

// strip_tags
$htmlContent = "<p>This is <b>bold</b> and <i>italic</i>.</p>";
$strippedContent = strip_tags($htmlContent);
echo "Original HTML: $htmlContent\n";
echo "Stripped Text: $strippedContent\n\n";

// strpos e stripos
$haystack = "This is a sample text.";
$needle = "sample";
$position = strpos($haystack, $needle);
$caseInsensitivePosition = stripos($haystack, $needle);
echo "Haystack: $haystack\n";
echo "Position of 'sample': $position\n";
echo "Case-insensitive Position: $caseInsensitivePosition\n\n";

// strtolower e strtoupper
$lowercaseStr = strtolower($haystack);
$uppercaseStr = strtoupper($haystack);
echo "Original String: $haystack\n";
echo "Lowercase String: $lowercaseStr\n";
echo "Uppercase String: $uppercaseStr\n\n";

// ucfirst e ucwords
$ucfirstStr = ucfirst($haystack);
$ucwordsStr = ucwords($haystack);
echo "Original String: $haystack\n";
echo "Ucfirst String: $ucfirstStr\n";
echo "Ucwords String: $ucwordsStr\n\n";

// substr
$substring = substr($haystack, 5, 6);
echo "Original String: $haystack\n";
echo "Substring: $substring\n";
