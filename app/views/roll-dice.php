<!doctype html>
<html lang="en">
<head>
    <title>Roll Dice</title>
</head>
<body>
    <h1>Roll = <?php echo $random; ?></h1>
    <h1>Guess = <?php echo $guess; ?></h1>
    <?php if ($guess != $random) : ?>
    	<h1>Wrong guess!</h1>
    <?php else : ?>
    	<h1>GOOD GUESS!</h1>
    <?php endif; ?>
</body>
</html>
