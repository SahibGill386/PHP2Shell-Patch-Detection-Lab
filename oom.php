<?php
// Lab-only test page. Uses memory until PHP hits memory_limit, which writes the
// "Allowed memory size ... exhausted" error that the detection search looks for.
// This is a normal out-of-memory error, not the exploit.
$a = [];
while (true) {
    $a[] = str_repeat("A", 1024 * 1024);
}
