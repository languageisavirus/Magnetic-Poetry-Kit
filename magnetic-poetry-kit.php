<!-- Create Your Own Magnetic Poetry Kit by Lake @ http://www.languageisavirus.com/electronicpoetry/createyourown.php -->

<!DOCTYPE HTML><html><head><title>Create Your Own Magnetic Poetry Kit</title>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<link rel="stylesheet" href="magnetic-style.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
 <script>
$(function() {
$( ".draggable" ).draggable({ snap: true });

});
</script>
</head>
<body><h1>Create Your Own Magnetic Poetry Kit</h1> 
<a href="#entertext">Enter Text to use for magnets</a><br />
<table border=0 width=100% height=800><tr><td align=left valign=top>
<strong>Refrigerator</strong><br /><div id="refridgerator"></div>
<strong>Drag Magnets onto refrigerator</strong><br /><div id="thewords">
<?
    if ($_POST) {
    // submit changes

$message = $_POST['magnet-words'] ; //unadulterad text we got via Post
$message = preg_replace('/[^a-z]+/i', ' ', $message);
$modifiedTextAreaText=str_replace( ' ','</p></div><div class="draggable ui-widget-content button green"><p>',$message);
echo '<div class="draggable ui-widget-content button green"><p>';
echo $modifiedTextAreaText;
echo '</p></div>';
    ?> 
</div>
</td></tr></table>

<table border=0 width=100%><tr><td align=left valign=top>
<br><a name="entertext"><strong>Enter text to use for magnets</strong></a> (1300 character limit)<br>
	<form name="myTextArea" method="post" action="?ac=Generate">
	<textarea name="magnet-words" maxlength="1300" style=width:400px;height:100px;></textarea>
	<br><input type="submit" name="Submit" value="Generate New Poetry Kit"></form>
	<?
	} else {
	// display text and wait for changes
	?>
<br><strong>Enter text to use for magnets</strong> (1300 character limit)<br>
	<form name="myTextArea" method="post" action="?ac=Generate">
	<textarea name="magnet-words" maxlength="1300" style=width:500px;height:300px;></textarea>
	<br><input type="submit" name="Submit" value="Generate Poetry Kit"></form>
	<?
	}
?>
</td></tr></table>

<p><strong>Brought to you by <a href="http://www.languageisavirus.com/" target="_blank">LanguageIsAVirus.com</a></p>

</body></html>
