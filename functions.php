<?php
function findFiles($directory, $extensions = array()) {
    function glob_recursive($directory, &$directories = array()) {
        foreach(glob($directory, GLOB_ONLYDIR | GLOB_NOSORT) as $folder) {
            $directories[] = $folder;
            glob_recursive("{$folder}/*", $directories);
        }
    }
    glob_recursive($directory, $directories);
    $files = array ();
    foreach($directories as $directory) {
        foreach($extensions as $extension) {
            foreach(glob("{$directory}/*.{$extension}") as $file) {
                $files[$extension][] = $file;
            }
        }
    }
    return $files;
}
?>