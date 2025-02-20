# PHP Unexpected Array Modification with explode() in Recursive Function

This repository demonstrates an uncommon bug in PHP related to unexpected array modifications when using the `explode()` function within a recursive function that processes nested arrays.  The issue arises when a string containing the pipe symbol ('|') as a delimiter is encountered.

The `explode()` function, while seemingly straightforward, can lead to unexpected side effects if not handled carefully within a recursive context, particularly when modifying the original array being processed.