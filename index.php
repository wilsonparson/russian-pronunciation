<!DOCTYPE HTML>
<html>
    <head>
        <?php include 'includes/persistent-head-elements.php' ?>	
    </head>
	<body>
        <?php include 'includes/header.php' ?>
        <?php include 'includes/nav.php' ?>
        
        <main>    
			<h1>1. Hard and Soft Vowels</h1>
		
				<p>The Russian language contains two types of vowels: hard and soft. Each of the five hard vowels (а, э, ы, о, у) has its own soft counter-part (я, е, и, ё, ю). The difference between hard and soft vowels is that all soft vowels are pronounced with an English <q>y</q> sound at the beginning of the vowel (so <q>y</q> + а = я, <q>y</q> + э = е, etc.). The table below shows a comparison between hard and soft vowels. Click on each vowel to hear how it is pronounced.</p>
		        <table>
                    <thead>
                        <tr>
                            <th colspan="2">Hard and Soft Vowels</th>
                        </tr>
                        <tr>
                            <th>Hard</th>
                            <th>Soft</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><button type="button">а</button></td>
                            <td><button type="button">я</button></td>
                        </tr>
                        <tr>
					        <td><button type="button">э</button></td>
					        <td><button type="button">е</button></td>
                        </tr>
                        <tr>
					        <td><button type="button">ы</button></td>
					        <td><button type="button">и</button></td>
                        </tr>
                        <tr>
					        <td><button type="button">о</button></td>
					        <td><button type="button">ё</button></td>
                        </tr>
                        <tr>
                            <td><button type="button">у</button></td>
                            <td><button type="button">ю</button></td>
                        </tr>
                    </tbody>
                </table>

		
			<p>You may have noticed that и is a little different from the other soft vowels. With the other soft vowels, the <q>y</q> sound is pronounced at the beginning of the vowel; with и, the <q>y</q> sound is pronounced throughout the entire vowel.</p>
			
            <?php include 'includes/audio-hard-and-soft-vowels.php'?>	
		</main>
	    <?php include 'includes/footer.php' ?>	
	</body>
</html>
