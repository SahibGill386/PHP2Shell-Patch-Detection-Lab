<?php
// Non-destructive exposure check: just report the running version.
$fixed = "8.3.36";
$v = PHP_VERSION;
echo "PHP version: $v\n";
echo version_compare($v, $fixed, "<")
    ? "EXPOSED: older than $fixed (PHP2Shell fix)\n"
    : "PATCHED: $fixed or newer\n";
