<!DOCTYPE html>
<html>
	<head>
		<title>Hard and Soft Vowels</title>
		<meta charset= "unicode"/>
	</head>
	
	<body>
	
			<nav>
				<a href= "index.html">Introduction</a>
				<a href= "hardAndSoftVowels.html" class= "currentPage">Hard and Soft Vowels</a>
				<a href= "hardAndSoftConsonants.html">Hard and Soft Consonants</a>
				<a href= "softAndHardSigns.html">The Soft and Hard Signs</a>
				<a href= "softL.html">The Soft Л</a>
				<a href= "softLContinued.html">The Soft Л (continued)</a>
				<a href= "softT.html">The Soft Т</a>
				<a href= "otherSoftConsonants.html">Other Soft Consonants</a>
				<a href= "exceptionsAlwaysHard.html">Exceptions: Ж, Ш, and Ц (Always Hard)</a>
				<a href= "exceptionsAlwaysSoft.html">Exceptions: Ч and Щ (Always Soft)</a>
				<a href= "hardAndSoftTagger.php">Soft Consonant Tagging Tool</a>
			</nav>
		
		
		
			<h1>Hard and Soft Vowels</h1>
		
		<main>	
		
				<p>
					The Russian language contains two types of vowels: hard and soft. Each of the five hard vowels (а, э, ы, о, у) has its own soft counter-part (я, е, и, ё, ю). The difference between hard and soft vowels is that all soft vowels are pronounced with an English "y" sound at the beginning of the vowel (so "y" + а = я, "y" + э = е, etc.). The table below shows a comparison between hard and soft vowels. Click on each vowel to hear how it is pronounced.
				</p>
			
			<table border="1">
				<tr>
					<td class= "inactive">Hard Vowels</td>
					
		<!-- We talked about these links on Wednesday, Dec. 17th. Despite several hours of trying to use JavaScript to get the audio to play, I resorted to in-line scripting in order to save time (ironic, I know). I realize this isn't the best way to do it, but it's better than nothing. -->
					<td onClick= "document.getElementById('vowelA').play()">а</td>
					<td onClick= "document.getElementById('vowelE').play()">э</td>
					<td onClick= "document.getElementById('vowelY').play()">ы</td>
					<td onClick= "document.getElementById('vowelO').play()">о</td>
					<td onClick= "document.getElementById('vowelU').play()">у</td>
				</tr>
				<tr>
					<td class= "inactive">Soft Vowels</td>
					<td onClick= "document.getElementById('vowelYa').play()">я</td>
					<td onClick= "document.getElementById('vowelYe').play()">е</td>
					<td onClick= "document.getElementById('vowelI').play()">и</td>
					<td onClick= "document.getElementById('vowelYo').play()">ё</td>
					<td onClick= "document.getElementById('vowelYu').play()">ю</td>
				</tr>
			</table>
		
			<p>
				You may have noticed that и is a little different from the other soft vowels. With the other soft vowels, the "y" sound is pronounced at the beginning of the vowel; with и, the "y" sound is pronounced throughout the entire vowel.
			</p>
			
		</main>
		</div>
		
				<audio id= "vowelA">
					<source  src= "audio/vowelA.wav">
				</audio>
				<audio id= "vowelE">
					<source  src= "audio/vowelE.wav">
				</audio>
				<audio id= "vowelY">
					<source  src= "audio/vowelY.wav">
				</audio>
				<audio id= "vowelO">
					<source  src= "audio/vowelO.wav">
				</audio>
				<audio id= "vowelU">
					<source  src= "audio/vowelU.wav">
				</audio>
				<audio id= "vowelYa">
					<source  src= "audio/vowelYa.wav">
				</audio>
				<audio id= "vowelYe">
					<source  src= "audio/vowelYe.wav">
				</audio>
				<audio id= "vowelI">
					<source  src= "audio/vowelI.wav">
				</audio>
				<audio id= "vowelYo">
					<source  src= "audio/vowelYo.wav">
				</audio>
				<audio id= "vowelYu">
					<source  src= "audio/vowelYu.wav">
				</audio>
		
	</body>
</html>