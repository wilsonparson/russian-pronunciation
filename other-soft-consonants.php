<!DOCTYPE html>
<html>
	<head>
		<title>Other Soft Consonants</title>
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
				<a href= "otherSoftConsonants.html" class= "currentPage">Other Soft Consonants</a>
				<a href= "exceptionsAlwaysHard.html">Exceptions: Ж, Ш, and Ц (Always Hard)</a>
				<a href= "exceptionsAlwaysSoft.html">Exceptions: Ч and Щ (Always Soft)</a>
				<a href= "hardAndSoftTagger.php">Soft Consonant Tagging Tool</a>
			</nav>
		
		<div class= "h1Box"> <h1>Other Soft Consonants</h1> </div>
		
		<div class= "mainBox">
		<main>
				<p>
					Although the soft л and soft т are the most noticeable soft consonants in Russian, nearly all of the remaining consonants have a hard and soft pronunciation. Below are a few examples of consonants in their hard and soft forms. Click on the words or phrases to hear how they are pronounced with hard pronunciation, and with soft pronunciation.
				</p>
				
				<table border= "1">
					<tr>
						<td class= "inactive">Hard Pronunciation</td>
						<td class= "inactive">Soft Pronunciation</td>
						<td class= "inactive">Tips</td>
					</tr>
					<tr>
						<td onClick= "document.getElementById('dobryDenHard').play()">Добрый дэн</td>
						<td onClick= "document.getElementById('dobryDenSoft').play()">Добрый день</a></td>
						<td class= "inactive">Soft Д = (Д + pinch of "z")</td>
					</tr>
					<tr>
						<td onClick= "document.getElementById('semHard').play()">сем</td>
						<td onClick= "document.getElementById('semSoft').play()">семь</td>
						<td class= "inactive">Soft М = (М + "smile")</td>
					</tr>
					<tr>
						<td onClick= "document.getElementById('vesHard').play()">вес</td>
						<td onClick= "document.getElementById('vesSoft').play()">весь</td>
						<td class= "inactive">Soft С = (С + "smile")</td>
					</tr>
					<tr>
						<td onClick= "document.getElementById('tsarHard').play()">цар</td>
						<td onClick= "document.getElementById('tsarSoft').play()">царь</td>
						<td class= "inactive">Soft Р = (Р + "smile")</td>
					</tr>
				</table>
				
				<p>
					You may have noticed that the "Tips" column at the right includes some formulas for pronunciation. The word "smile" suggests that the speaker's pronunciation becomes more shallow, as if he or she is "smiling." These soft consonants are not nearly as noticeable as the soft л or soft т. However, you might hear a slight difference in how the words are pronounced when comparing the audio from the "Hard Pronunciation" column to the "Soft Pronunciation" column.
				</p>

			
		</main>
		</div>
		
				<audio id= "dobryDenHard">
					<source  src= "audio/dobryDenHard.wav">
				</audio>
				<audio id= "dobryDenSoft">
					<source  src= "audio/dobryDenSoft.wav">
				</audio>
				<audio id= "semHard">
					<source  src= "audio/semHard.wav">
				</audio>
				<audio id= "semSoft">
					<source  src= "audio/semSoft.wav">
				</audio>
				<audio id= "vesHard">
					<source  src= "audio/vesHard.wav">
				</audio>
				<audio id= "vesSoft">
					<source  src= "audio/vesSoft.wav">
				</audio>
				<audio id= "tsarHard">
					<source  src= "audio/tsarHard.wav">
				</audio>
				<audio id= "tsarSoft">
					<source  src= "audio/tsarSoft.wav">
				</audio>
		
	</body>
</html>