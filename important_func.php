<?php
echo strlen("This is a string length example") . "<br>";
echo str_word_count("This is a string word count example") . "<br>";
echo strrev("This is a string reverse example") . "<br>";
echo strpos("This is a string position example", "string") . "<br>";
echo str_replace("string", "text", "This is a string replace example") . "<br>";
echo strtoupper("This is a string to uppercase example") . "<br>";
echo strtolower("This is a STRING to lowercase example") . "<br>";
echo ucfirst("this is a string to capitalize first letter example") . "<br>";
echo ucwords("this is a string to capitalize each word example") . "<br>";
echo trim("   This is a string trim example   ") . "<br>";
echo nl2br("This is a string with\nnew line example") . "<br>";
echo htmlspecialchars("<h1>This is a string with HTML tags example</h1>") . "<br>";
echo htmlentities("<h1>This is a string with HTML entities example</h1>") . "<br>";
echo addslashes("This is a string with 'single quotes' and \"double quotes\" example") . "<br>";
echo stripslashes("This is a string with \'single quotes\' and \"double quotes\" example") . "<br>";
echo str_repeat("This is a string repeat example ", 3) . "<br>";
echo substr("This is a string substring example", 10, 6) . "<br>";

echo str_pad("This is a string pad example", 30, "*", STR_PAD_BOTH) . "<br>";
echo str_split("This is a string split example", 5) . "<br>";
echo implode(", ", str_split("This is a string implode example", 5)) . "<br>";
echo str_shuffle("This is a string shuffle example") . "<br>";
echo strcasecmp("This is a string case-insensitive compare example", "this is a STRING CASE-INSENSITIVE COMPARE EXAMPLE") . "<br>";
echo strnatcmp("This is a string natural compare example", "This is a string natural compare example") . "<br>";
echo strcoll("This is a string collate example", "This is a string collate example") . "<br>";
echo strtr("This is a string translate example", "string", "text") . "<br>";
echo strcspn("This is a string cspn example", "aeiou") . "<br>";
echo strspn("This is a string spn example", "aeiou") . "<br>";
echo strcasecmp("This is a string case-insensitive compare example", "this is a STRING CASE-INSENSITIVE COMPARE EXAMPLE") . "<br>";
echo strncasecmp("This is a string case-insensitive compare example", "this is a STRING CASE-INSENSITIVE COMPARE EXAMPLE", 10) . "<br>";
echo stristr("This is a string case-insensitive search example", "STRING") . "<br>";
echo strrchr("This is a string reverse search example", "s") . "<br>";


echo date("Y-m-d H:i:s") . "<br>";
echo time() . "<br>";
echo mktime(0, 0, 0, 1, 1, 2023) . "<br>";
echo strtotime("now") . "<br>";
echo date("Y-m-d H:i:s", strtotime("+1 day")) . "<br>";
echo date("Y-m-d H:i:s", strtotime("-1 week")) . "<br>";
echo date("Y-m-d H:i:s", strtotime("next Monday")) . "<br>";
echo date("Y-m-d H:i:s", strtotime("last Friday")) . "<br>";    
echo date("Y-m-d H:i:s", strtotime("first day of January 2023")) . "<br>";
echo date("Y-m-d H:i:s", strtotime("last day of February 2023")) . "<br>";
echo date("Y-m-d H:i:s", strtotime("next month")) . "<br>";
echo date("Y-m-d H:i:s", strtotime("last month")) . "<br>";
echo date("Y-m-d H:i:s", strtotime("first day of this month")) . "<br>";
echo date("Y-m-d H:i:s", strtotime("last day of this month")) . "<br>";
echo date("Y-m-d H:i:s", strtotime("first day of next month")) . "<br>";
echo date("Y-m-d H:i:s", strtotime("last day of next month")) . "<br>";
echo date("Y-m-d H:i:s", strtotime("first day of this year")) . "<br>";
echo date("Y-m-d H:i:s", strtotime("last day of this year")) . "<br>";
echo date("Y-m-d H:i:s", strtotime("next year")) . "<br>";
echo date("Y-m-d H:i:s", strtotime("last year")) . "<br>";
echo date("Y-m-d H:i:s", strtotime("next week")) . "<br>";
echo date("Y-m-d H:i:s", strtotime("last week")) . "<br>";
echo date("Y-m-d H:i:s", strtotime("next Sunday")) . "<br>";
echo date("Y-m-d H:i:s", strtotime("last Sunday")) . "<br>";
echo date("Y-m-d H:i:s", strtotime("next Friday")) . "<br>";
echo date("Y-m-d H:i:s", strtotime("last Friday")) . "<br>";
echo date("Y-m-d H:i:s", strtotime("next Monday")) . "<br>";
echo date("Y-m-d H:i:s", strtotime("last Monday")) . "<br>";
echo date("Y-m-d H:i:s", strtotime("next Tuesday")) . "<br>";
echo date("Y-m-d H:i:s", strtotime("last Tuesday")) . "<br>";
echo date("Y-m-d H:i:s", strtotime("next Wednesday")) . "<br>";
echo date("Y-m-d H:i:s", strtotime("last Wednesday")) . "<br>";
echo date("Y-m-d H:i:s", strtotime("next Thursday")) . "<br>";
echo date("Y-m-d H:i:s", strtotime("last Thursday")) . "<br>";
echo date("Y-m-d H:i:s", strtotime("next Saturday")) . "<br>";
echo date("Y-m-d H:i:s", strtotime("last Saturday")) . "<br>";
echo date("Y-m-d H:i:s", strtotime("first day of January 2023")) . "<br>";
echo date("Y-m-d H:i:s", strtotime("last day of February 2023")) . "<br>";

echo date("l")."<br>"; // Full textual representation of the day of the week
echo date("D")."<br>"; // Three-letter abbreviation of the day of the week
echo date("M")."<br>"; // Three-letter abbreviation of the month
echo date("F")."<br>"; // Full textual representation of the month
echo date("Y")."<br>"; // Four-digit representation of the year
echo date("y")."<br>"; // Two-digit representation of the year
echo date("H")."<br>"; // 24-hour format of an hour with leading zeros
echo date("h")."<br>"; // 12-hour format of an hour with leading zeros
?>

