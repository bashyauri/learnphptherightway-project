<?php

declare(strict_types = 1);

// Your Code
function getTransactionFiles(string $dirPath): array 
{
    $files = [];
    foreach (scandir($dirPath) as $file) {
        if(is_dir($file)){
            continue;
        }
        $files[] = $file;
    }
    return $files;
}