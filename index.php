<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pirma uzd</h1>
    <?php
$name = "Matthew";
$surName = "McConaughey";

if (strlen($name) > strlen($surName)) {
	echo "$surName";
}
if (strlen($surName) > strlen($name)) {
	echo "$name";
}
echo "<h1>Antra uzd</h1>";

$name1 = "Matthew";
$surname1 = "McConaughey";

echo strtoupper($name1) . " " . strtolower($surname1);

echo "<h1>Trecia uzd</h1>";

$initials = substr($name1, 0, 1) . substr($surname1, 0, 1);
echo $initials;

echo "<h1>Ketvirta uzd</h1>";

$lastThree = substr($name1, -3) . " " . substr($surname1, -3);
echo $lastThree;

echo "<h1>Penkta uzd</h1>";

$american = "An American in Paris";

$newStr = str_replace("A", " ", str_replace("a", " ", $american));
echo $newStr;

echo "<h1>Sesta uzd</h1>";

$occurancies = substr_count($american, "a") + substr_count($american, "A");
echo $occurancies;

echo "<h1>Septinta uzd</h1>";

$vowels = ["a", "e", "i", "o", "u", "A", "E", "I", "O", "U"];

$withoutVowels = str_replace($vowels, "", $american);

echo $withoutVowels;

echo "<h1>Astunta uzd</h1>";

$starwarsString = 'Star Wars: Episode ' . str_repeat(" ", rand(0, 5)) . rand(1, 9) . ' - A New Hope';

echo $starwarsString . "<br><br>";

preg_match_all('!\d+!', $starwarsString, $matches);

$var = implode("", $matches[0]);
echo $var;

echo "<h1>Devinta uzd</h1>";

$dontBe = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";

$arrDontBe = explode(" ", $dontBe);
// print_r($arrDontBe);
$counter = 0;
for ($i = 0; $i < count($arrDontBe); $i++) {

	if (strlen($arrDontBe[$i]) <= 5) {
		$counter++;
	}
}
echo $counter . "<br><br>";

$tikNereik = "Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale";

$arrtikNereik = explode(" ", $tikNereik);
// print_r($arrDontBe);
$counter = 0;
for ($i = 0; $i < count($arrtikNereik); $i++) {

	if (strlen($arrtikNereik[$i]) <= 5) {
		$counter++;
	}
}
echo $counter;

echo "<h1>Desimtauzd</h1>";

$letters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$randStr = '';

for ($i = 0; $i < 3; $i++) {
	$randStr .= $letters[rand(0, strlen($letters) - 1)];
}

echo $randStr;

echo "<h1>Vienuolikta uzd</h1>";

$bendrasStr = explode(" ", $dontBe . " " . $tikNereik);
// print_r($bendrasStr);
$randomWords = [];

for ($i = 0; $i < 10; $i++) {
	$word = $bendrasStr[rand(0, count($bendrasStr) - 1)];
	if (in_array($word, $randomWords) == false) {
		array_push($randomWords, $word);
	}
}
echo implode(" ", $randomWords);
// print_r($randomWords);

?>
</body>
</html>