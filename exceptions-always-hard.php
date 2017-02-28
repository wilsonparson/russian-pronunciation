<!DOCTYPE html>
<html>
	<head>
		<title>Exceptions: Ж, Ш, and Ц (Always Hard)</title>
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
				<a href= "exceptionsAlwaysHard.html" class= "currentPage">Exceptions: Ж, Ш, and Ц (Always Hard)</a>
				<a href= "exceptionsAlwaysSoft.html">Exceptions: Ч and Щ (Always Soft)</a>
				<a href= "hardAndSoftTagger.php">Soft Consonant Tagging Tool</a>
			</nav>
		
		
		<div class= "h1Box"> <h1>Exceptions: Ж, Ш, and Ц (Always Hard)</h1> </div>
		
		<div class= "mainBox">
		<main>
		
			
				<p>
					There are three consonants that never change their pronunciation, even when they are followed by soft vowels. These three consonants (Ж, Ш, and Ц) are always pronounced hard. In fact they actually tend to change the pronunciation of the vowels that follow them, making them hard as well. For example, if a "ж" is followed by a "е," that "e" will no longer be pronounced soft, but will sound more like "э."
				</p>
				
				<table border= "1">
					<tr>
						<td class= "inactive">Correct Pronunciation</td>
						<td class= "inactive">Incorrect Pronunciation</td>
					</tr>
					<tr>
						<td onClick= "document.getElementById('zhenaHard').play()">жена (жэна)</td>
						<td onClick= "document.getElementById('zhenaSoft').play()">жена (жьена)</td>
					</tr>
					<tr>
						<td onClick= "document.getElementById('shestHard').play()">шесть (шэсть)</td>
						<td onClick= "document.getElementById('shestSoft').play()">шесть (шьесть)</td>
					</tr>
					<tr>
						<td onClick= "document.getElementById('tserkovHard').play()">церковь (цэрковь)</td>
						<td onClick= "document.getElementById('tserkovSoft').play()">церковь (цьерковь)</td>
					</tr>
					<tr>
						<td rowspan= "3" onClick= "document.getElementById('tselHardSoft').play()">цель (цэль)</td>
						<td onClick= "document.getElementById('tselSoftHard').play()">цель (цьел)</td>
					</tr>
					<tr>
						<td onClick= "document.getElementById('tselSoftSoft').play()">цель (цьель)</td>
					</tr>
					<tr>
						<td onClick= "document.getElementById('tselHardHard').play()">цель (цэл)</td>
					</tr>
				</table>
				
				<p>
					As you can tell, the word цель can be very problematic, because it starts with a ц and ends with a soft л. The pronunciation for this word in the left column is correct. The pronunciations in the right column are all of the ways missionaries tend to mispronounce this difficult word.
				</p>
				
		
		</main>
		</div>
		
				<audio id= "zhenaHard">
					<source  src= "audio/zhenaHard.wav">
				</audio>
				<audio id= "zhenaSoft">
					<source  src= "audio/zhenaSoft.wav">
				</audio>
				<audio id= "shestHard">
					<source  src= "audio/shestHard.wav">
				</audio>
				<audio id= "shestSoft">
					<source  src= "audio/shestSoft.wav">
				</audio>
				<audio id= "tserkovHard">
					<source  src= "audio/tserkovHard.wav">
				</audio>
				<audio id= "tserkovSoft">
					<source  src= "audio/tserkovSoft.wav">
				</audio>
				<audio id= "tselHardSoft">
					<source  src= "audio/tselHardSoft.wav">
				</audio>
				<audio id= "tselSoftHard">
					<source  src= "audio/tselSoftHard.wav">
				</audio>
				<audio id= "tselSoftSoft">
					<source  src= "audio/tselSoftSoft.wav">
				</audio>
				<audio id= "tselHardHard">
					<source  src= "audio/tselHardHard.wav">
				</audio>
		
	</body>
</html>
