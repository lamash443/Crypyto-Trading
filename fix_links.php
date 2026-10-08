<?php

$dir = 'c:/Users/willi/Desktop/KENYAN BADDIES CLUB/resources/views';

$replacements = [
    'signup.html' => '{{ route(\'register\') }}',
    'signin.html' => '{{ route(\'login\') }}',
    'forgot-pass.html' => '{{ route(\'password.request\') }}',
    'index.html' => '{{ url(\'/\') }}',
];

$iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));
foreach ($iterator as $file) {
    if ($file->isFile() && str_ends_with($file->getFilename(), '.blade.php')) {
        $path = $file->getPathname();
        $content = file_get_contents($path);
        $original = $content;
        
        foreach ($replacements as $search => $replace) {
            $content = str_replace($search, $replace, $content);
        }
        
        if ($content !== $original) {
            file_put_contents($path, $content);
            echo "Updated: $path\n";
        }
    }
}
echo "Done.";
