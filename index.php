<?php
$text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio quis suscipit eveniet obcaecati tenetur, quisquam aliquam quia cum et adipisci commodi unde vero cumque nemo in, accusantium enim rem qui.';
$length = strlen($text);

$word = $_GET['word'];
$new_text = str_replace($word, '***', $text);
?>

<p><?php echo $text; ?></p>
<p>Il testo contiene <?php echo $length; ?> caratteri.</p>

<p><?php echo $new_text; ?></p>
<p>Il testo contiene <?php echo strlen($new_text); ?> caratteri.</p>