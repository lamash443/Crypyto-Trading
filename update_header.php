<?php
$file = 'c:/Users/willi/Desktop/KENYAN BADDIES CLUB/resources/views/welcome.blade.php';
$lines = file($file);

$start = -1;
$end = -1;

for ($i = 0; $i < count($lines); $i++) {
    if (strpos($lines[$i], '<li class="megamenu">') !== false && strpos($lines[$i+1], '<a href="#">Demos </a>') !== false) {
        $start = $i;
    }
    // Search for the end of the Demos megamenu block.
    // It's followed by <li><a href="#">Services</a>
    if ($start !== -1 && $i > $start) {
        if (strpos($lines[$i], '<li>') !== false && strpos($lines[$i+1], '<a href="#">Services</a>') !== false) {
            $end = $i - 1; // The line before <li> for Services
            break;
        }
    }
}

if ($start !== -1 && $end !== -1) {
    array_splice($lines, $start, $end - $start + 1, ["              <li><a href=\"{{ url('/') }}\">Home</a></li>\n"]);
    file_put_contents($file, implode("", $lines));
    echo "Successfully replaced Demos with Home in welcome.blade.php\n";
} else {
    echo "Could not find the Demos menu block.\n";
}
