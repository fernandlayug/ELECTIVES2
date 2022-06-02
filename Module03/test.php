<!-- <?php
$booktilte = "The Cast of Amontillado";
echo str_word_count($booktilte);
?> -->
<!-- 
<?php

$confusingtext = "THis SenTEnce iS nOT iN PrOPEr foRmat";
$properformat = strtolower($confusingtext);
echo ucfirst($properformat);
?> -->

<!-- <?php
$sample = "Password";
echo md5($sample);
?> -->

<!-- <?php
$examplestring = "woodworking project";
echo substr($examplestring, 4) . "<br />";
echo substr($examplestring, 4, 7) . "<br />";
echo substr($examplestring, 0, 8) . "<br />";
echo substr($examplestring, -7) . "<br />";
echo substr($examplestring, -12, 4) . "<br />";
?> -->

<!-- <?php
$email = "technicalsupport@auf.edu";
echo strpos($email, '@');
?> -->

<!-- <?php
$email = "technicalsupport@auf.edu";
echo "<p>The top-level domain of the email address is " . strrchr($email, ".");
?> -->

<!-- <?php
$email = "technicalsupport@auf.edu";
$newemail = str_replace("technicalsupport", "registrar", $email);
echo $newemail;
?> -->

<!-- <?php
$president = "Rodrigo Duterte;Benigno Aquino;Gloria Macapagall;Fidel Ramos";
$president = strtok($president,";");
while ($president != NULL){
    echo "$president <br />";
    $president = strtok(";");
}
?> -->
<!-- <?php
$president = "Rodrigo Duterte;Benigno Aquino;Gloria Macapagall;Fidel Ramos";
$presidentarray = explode(";", $president);
foreach ($presidentarray as $president){
    echo "$president<br />";
}
?> -->

<!-- 
<?php
$presidentarray = array("Rodrigo Duterte","Benigno Aquino","Gloria Macapagall","Fidel Ramos");
$president = implode(",", $presidentarray);
echo $president;

?> -->

<!-- <?php
$firstletter = "C";
$secondletter = "B";
if ($secondletter > $firstletter)
echo "The second letter is higher in the alphabet than the first letter";
else
echo "The second letter is lower in the alphabet"
?> -->

<!-- <?php
echo strcmp ("Donald", "Don");
?> -->

<!-- <?php
$firstname = "Dons";
$secondname = "Dans";
echo "<p> The names \"$firstname\" and \"$secondname\" have " . similar_text($firstname, $secondname) . "characters in common.</p>";
echo "<p> You must change" . levenshtein($firstname, $secondname) . " character(s) to make the names \"$firstname\" and \"$secondname\" the samne.</p> ";
?> -->

<?php
$firstword = "Gosselin";
$secondword = "Gavselin";
$firstwordsound = metaphone($firstword);
$secondwordsound = metaphone($secondword);

if ($firstwordsound ==  $secondwordsound)
echo "The word are pronounce the same.";
else
echo "The word are not pronounce the same.";
?>