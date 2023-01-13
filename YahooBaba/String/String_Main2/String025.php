<?php

echo "<pre>";

print_r(get_html_translation_table(HTML_SPECIALCHARS));

echo "</pre>";


// Output
// Array
// (
//     ["] => "
//     [&] => &
//     ['] => '
//     [<] => <
//     [>] => >
// )

?>