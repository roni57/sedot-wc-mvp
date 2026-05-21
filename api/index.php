<?php

// Ensure writable compiled views directory exists in Vercel lambda environment
if (!is_dir('/tmp/storage/framework/views')) {
    mkdir('/tmp/storage/framework/views', 0775, true);
}

// Forward Vercel serverless requests to Laravel public/index.php
require __DIR__ . '/../public/index.php';
