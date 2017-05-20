<!DOCTYPE HTML>
<html>
    <head>
        <?php include 'includes/persistent-head-elements.php' ?>
        <script src="scripts/call-colorize-text.js" async></script>
        <link rel="stylesheet" href="styles/practice.css">
    </head>
	<body>
        <?php include 'includes/header.php' ?>
        <?php include 'includes/nav.php' ?>

        <main>
			<h1>10. Practice</h1>

                <p>Now that you've learned the rules pronouncing of hard and soft consonants, you can practice reading aloud! Try pasting some Russian text into this box and press Go. Your text will appear below with consonants highlighted according to the following system:
					<ul>
						<li><span class= "soft">Yellow</span> = consonant is pronounced soft</li>
						<li><span class= "always-hard">Blue</span> = vowel is usually pronounced soft, but should be pronounced hard here</li>
						<li><span class= "always-soft">Pink</span> = vowel is usually pronounced hard, but should be pronounced soft here</li>
					</ul>


                <div contenteditable="true">
                This is the text we start with.
                </div>
                <div id="colorize-text-result">
                </div>
</main>

        <?php include 'includes/prev-next.php'?>
	    <?php include 'includes/footer.php' ?>

	</body>
</html>
