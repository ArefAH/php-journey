<?php
function palindrome($word) {
    $reversed = 0;
    $original = strlen($word);
    while ($reversed < $original) {
        if ($word[$reversed] !== $word[$original]) {
            return 'false';
        }
        $reversed++;
        $original--;
    }
    return 'true';
}

echo palindrome('');

?>