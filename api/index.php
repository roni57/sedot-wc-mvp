<?php

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
