<?php
$arr = ["name" => "Gaurav", "email" => "use@gmail.com", "mobile" => "1234567890", "dob" => "1990-01-20"];
echo "<pre>";
print_r($arr);
echo "</pre>";

// length of the array use count() function
echo "Array Length: " . count($arr) . "<br>";
echo "<br>";
// echo "Name: " . $arr['name'] . "<br>";
// echo "Email: " . $arr['email'] . "<br>";
// echo "Mobile: " . $arr['mobile'] . "<br>";
// echo "Date of Birth: " . $arr['dob'] . "<br>";
$arr2 = ['2', 'users', 3];
echo $arr2[0] . "<br>";
echo $arr2[1] . "<br>";
echo $arr2[2] . "<br>";
echo "<br>";

// Loop through the array using foreach
foreach ($arr2 as $key => $value) {
    echo "Key: " . $key . ", Value: " . $value . "<br>";
}

// Associative array example
$assocArr = [
    "name" => "Gaurav",
    "email" => "use@gmail.com"
];
echo "<br>Associative Array:<br>";
foreach ($assocArr as $key => $value) {
    echo "Key: " . $key . ", Value: " . $value . "<br>";
}

?>


<?php
// Multidimensional array example
$multiArr = [
    "users" => [
        ["name" => "Gaurav", "email" => "newuser@gmail.com", "mobile" => "1234567890"],
        ["name" => "John", "email" => "user1@gmail.com", "mobile" => "0987654321"],
        ["name" => "Jane", "email" => "user2@gmail.com", "mobile" => "1122334455"]
    ]
];

$multiArr2 = [
    [1, "Gaurav", "Kumar"],
    [2, "John", "Doe"],
    [3, "Jane", "Doe"]
];



echo "<br>Multidimensional Array:<br>";
foreach ($multiArr['users'] as $user) {
    echo "Name: " . $user['name'] . ", Email: " . $user['email'] . ", Mobile: " . $user['mobile'] . "<br>";
}

echo "<br>Multidimensional Array 2:<br>";
foreach ($multiArr2 as $user) {
    echo "ID: " . $user[0] . ", First Name: " . $user[1] . ", Last Name: " . $user[2] . "<br>";
    echo $user[0] . " " . $user[1] . " " . $user[2] . "<br>";
    echo "<br>";
}

// Do in Table
echo "<br>Multidimensional Array in Table Format:<br>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr>
<th>ID</th>
<th>First Name</th>
<th>Last Name</th>
</tr>";
foreach ($multiArr2 as $user) {
    echo "<tr>";
    echo "<td>" . $user[0] . "</td>";
    echo "<td>" . $user[1] . "</td>";
    echo "<td>" . $user[2] . "</td>";
    echo "</tr>";
}
echo "</table>";

?>