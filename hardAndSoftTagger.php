<!DOCTYPE html>
<html>
	<head>
		<title>Hard and Soft Consonant Tagger</title>
		<meta charset= "unicode"/>
		<link rel= "stylesheet" href= "style.css" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	</head>
	
	<body>
	
			<nav>
				<a href= "index.html">Introduction</a>
				<a href= "hardAndSoftVowels.html">Hard and Soft Vowels</a>
				<a href= "hardAndSoftConsonants.html">Hard and Soft Consonants</a>
				<a href= "softAndHardSigns.html">The Soft and Hard Signs</a>
				<a href= "softL.html">The Soft Л</a>
				<a href= "softLContinued.html">The Soft Л (continued)</a>
				<a href= "softT.html">The Soft Т</a>
				<a href= "otherSoftConsonants.html">Other Soft Consonants</a>
				<a href= "exceptionsAlwaysHard.html">Exceptions: Ж, Ш, and Ц (Always Hard)</a>
				<a href= "exceptionsAlwaysSoft.html">Exceptions: Ч and Щ (Always Soft)</a>
				<a href= "hardAndSoftTagger.php" class= "currentPage">Soft Consonant Tagging Tool</a>
			</nav>
		
		
		<div class= "h1Box"><h1>Hard and Soft Consonant Tagger</h1></div>
		
		<div class= "mainBox">
		<main>
			<p>Now that you've learned the rules pronouncing of hard and soft consonants, you can practice reading aloud! Try pasting some Russian text into this box and press Go. Your text will appear below with consonants highlighted according to the following system:
					<ul>
						<li><span class= "soft">Yellow</span> = consonant is pronounced soft</li>
						<li><span class= "alwaysHard">Blue</span> = vowel is usually pronounced soft, but should be pronounced hard here</li>
						<li><span class= "alwaysSoft">Pink</span> = vowel is usually pronounced hard, but should be pronounced soft here</li>
					</ul>
			</p>
			<p>If you're looking for some text to start with, try <a href= "https://www.lds.org/scriptures/bofm/1-ne/1?lang=rus" style= "color: rgb(121,189,237);" target= "_blank">1 Nephi 1</a> from the Book of Mormon.
			</p>
			<form id= "pasteArea" method= "post" accept-charset="UTF-8">
				<textarea id= "pastedText" name= "pastedText" placeholder= "Paste Russian text here."></textarea><br>
				<div style="text-align:center">
					<input id= "goButton" type= "submit" name= "highlightText" value= "Go" />
				</div>
			</form>
			<?php
				if( !empty($_POST["highlightText"]) ):
					$softConsonants = preg_replace("/([БбВвГгДдЗзКкЛлМмНнПпРрСсТтФфХх])(?=[ЯяЕеИиЁёЮюЬь])/u", "<span class= 'soft'>$1</span>", $_POST["pastedText"]);
					$exceptionsAlwaysHard = preg_replace("/(?<=[ШшЦцЖж])([ЯяЕеИиЁёЮю])/u", "<span class= 'alwaysHard'>$1</span>", $softConsonants);
					$exceptionsAlwaysSoft = preg_replace("/(?<=[ЩщЧч])([АаЭэЫыОоУу])/u", "<span class= 'alwaysSoft'>$1</span>", $exceptionsAlwaysHard);
					$withLineBreaks = preg_replace("/\n/", "<br>", $exceptionsAlwaysSoft);
					
					echo "
						<div id= 'resultText'>
							".$withLineBreaks."
						</div>
					
					";
				endif;
			?>
		</main>
	</body>
</html>

<script>
	function removeYellow(){
		document.getElementsByClassName('soft').style.color = 'green';
	}
</script>