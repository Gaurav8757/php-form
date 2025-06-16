<?php
// switch.php
$day = "Monday";
$dayCount = 1; // Example variable to demonstrate switch usage
switch ($day) {
    case "Monday":
        echo "It's Monday, start of the week!";
        break;
    case "Tuesday":
        echo "It's Tuesday, keep going!";
        break;
    case "Wednesday":
        echo "It's Wednesday, halfway through!";
        break;
    case "Thursday":
        echo "It's Thursday, almost there!";
        break;
    case "Friday":
        echo "It's Friday, weekend is near!";
        break;
    case "Saturday":
        echo "It's Saturday, enjoy your day!";
        break;
    case "Sunday":
        echo "It's Sunday, rest and recharge!";
        break;
    default:
        echo "Not a valid day.";
}
echo "<br>Switch statement executed successfully.<br>";
// Example of using a switch statement with a variable
switch($dayCount){
    case 0:
        echo "No days counted yet.";
        break;
    case 1:
        echo "One day counted.";
        break;
    case 2:
        echo "Two days counted.";
        break;
    default:
        echo "More than two days counted.";
        break;
}

echo
"<br>Switch statement executed successfully.";
// End of switch.php
?>