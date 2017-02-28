<!DOCTYPE html>
<html>
	<head>
		<title>The Soft Л</title>
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
				<a href= "softL.html"  class= "currentPage">The Soft Л</a>
				<a href= "softLContinued.html">The Soft Л (continued)</a>
				<a href= "softT.html">The Soft Т</a>
				<a href= "otherSoftConsonants.html">Other Soft Consonants</a>
				<a href= "exceptionsAlwaysHard.html">Exceptions: Ж, Ш, and Ц (Always Hard)</a>
				<a href= "exceptionsAlwaysSoft.html">Exceptions: Ч and Щ (Always Soft)</a>
				<a href= "hardAndSoftTagger.php">Soft Consonant Tagging Tool</a>
			</nav>
		
		<div class= "h1Box"> <h1>The Soft Л</h1> </div>
			
		<div class= "mainBox">	
		<main>
		
			<div id="softLFigures">	
				<figure>
					<img src= "images/loveHard.png" width= "222" height= "218"/>
					<figcaption>Hard Л</figcaption>
				</figure>
				<figure>
					<img src= "images/loveSoft.png" width= "222" height= "218"/>
					<figcaption>Soft Л</figcaption>
				</figure>
			</div>
			
				<p>The Soft Л is one of the hallmark sounds of a "good" Russian accent. However, most English speakers are not accustomed to pronouncing soft л's. In general, English speakers use hard л's when pronouncing English words. For example, try saying the word "love" a few times. As you do so, pay extra attention to the tip of your tongue. Chances are, when you say the "L" of love, the tip of your tongue makes contact either with your upper front teeth, or with a spot right behind them (see diagram to right). This is a hard л. Click on the button below to hear "love" with a hard л.</p>
			
					
					<span class= "active, testWords" id= "loveHardButton" onClick= "document.getElementById('loveHard').play()">love (hard л)</span>
					
				<p id= "softLFixBottomMargin">Now repeat the word "love" again, only this time try moving the tip of your tongue back, so that it makes contact with the center of your hard palate, instead of with your front teeth (see diagram to right). If you're doing it correctly, the L of love should start to sound different. This is a soft л. One comparison that may help is the Spanish word for hello, <i>hola</i>. When you say <i>hola</i> with a "good" Spanish accent, you are using a soft л. When you say <i>hola</i> with an American accent, you are using a hard л. </p>
				
					<span class= "active, testWords" id= "loveSoftButton" onClick= "document.getElementById('loveSoft').play()">love (soft л)</span>
				
			</main>
			</div>
			
				<audio id= "loveHard">
					<source  src= "audio/loveHard.wav">
				</audio>
				<audio id= "loveSoft">
					<source  src= "audio/loveSoft.wav">
				</audio>
	</body>
</html>