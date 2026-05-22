<?php

// Temporary debug code to print out the directory structure
if (isset($_GET['debug'])) {
    header('Content-Type: text/plain');
    echo "Current directory (__DIR__): " . __DIR__ . "\n";
    echo "Parent directory: " . realpath(__DIR__ . '/..') . "\n";
    echo "Is /var/task/user/database directory? " . (is_dir('/var/task/user/database') ? 'Yes' : 'No') . "\n";
    if (is_dir('/var/task/user/database')) {
        echo "Files in database/:\n";
        print_r(scandir('/var/task/user/database'));
    }
    echo "Files in parent directory:\n";
    print_r(scandir(realpath(__DIR__ . '/..')));
    exit;
}

// Ensure writable compiled views directory exists in Vercel lambda environment
if (!is_dir('/tmp/storage/framework/views')) {
    mkdir('/tmp/storage/framework/views', 0775, true);
}

// Copy SQLite database to writable /tmp directory if running on Vercel
if (!file_exists('/tmp/database.sqlite')) {
    copy(__DIR__ . '/../database/database.sqlite', '/tmp/database.sqlite');
    chmod('/tmp/database.sqlite', 0666);
}

// Forward Vercel serverless requests to Laravel public/index.php
require __DIR__ . '/../public/index.php';
