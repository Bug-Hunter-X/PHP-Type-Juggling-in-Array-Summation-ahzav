# PHP Type Juggling Bug

This repository demonstrates a common, yet subtle, bug in PHP related to type juggling when working with arrays of mixed data types.  The `calculateSum` function attempts to sum an array's elements, but fails to handle non-numeric values appropriately. This can lead to unexpected results and difficult-to-debug errors.

The `bug.php` file contains the buggy code, while `bugSolution.php` offers a corrected version that addresses the type-juggling issue.

This example highlights the importance of robust type checking and validation in PHP to prevent such errors.