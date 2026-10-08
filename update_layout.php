<?php

$welcome_path = 'c:/Users/willi/Desktop/KENYAN BADDIES CLUB/resources/views/welcome.blade.php';
$guest_path = 'c:/Users/willi/Desktop/KENYAN BADDIES CLUB/resources/views/layouts/guest.blade.php';

$lines = file($welcome_path);

$header = array_slice($lines, 0, 299);
$footer = array_slice($lines, 1614);

$guest_content = implode("", $header) . "\n  {{ \$slot }}\n\n" . implode("", $footer);

// Add CSRF token to head
$head_end_pos = strpos($guest_content, '</head>');
if ($head_end_pos !== false) {
    $guest_content = substr_replace($guest_content, "  <meta name=\"csrf-token\" content=\"{{ csrf_token() }}\">\n</head>", $head_end_pos, 7);
}

file_put_contents($guest_path, $guest_content);

echo "Done.";
