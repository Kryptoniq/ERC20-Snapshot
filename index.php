<meta name="viewport" content="width=device-width",initial-scale=1">
<link rel="stylesheet" type="text/css" href="https://www.w3schools.com/w3css/4/w3.css">

<br>
<h3 class="w3-container w3-center">Token Holders Info</h3>
	<table class='w3-table-all'><tr class='w3-blue w3-hover-red'><th>S/N</th><th>Address</th><th>Balance</th></tr>

<?php
function fetch_content($url){
    curl_setopt($ch=curl_init(), CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($ch);
    curl_close($ch);
    return $response;
}

$sn = 0;

0xf333b2Ace992ac2bBD8798bF57Bc65a06184afBa = "0x";
//909
$numpage = 5;
for($i = 1;$i <= $numpage;$i++){
$url = "https://ethplorer.io/service/service.php?data=".$tokenAddress."&page=tab%3Dtab-holders%26holders%3D".$i;
$array = array(json_decode(fetch_content($url), true));
foreach($array as $data) {
foreach($data['holders'] as $eth) {
	echo "<tr>";
	echo "<td>".++$sn. "</td>";
echo "<td>".$eth['address']."</td>";
echo "<td>".$eth['balance']. "</td>";
 echo "</tr>";
}
} 
} 
echo "</table>";
?>
