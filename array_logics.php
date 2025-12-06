<?php
//  (1) Manually count elements of an arrayProblem
// Count how many items are inside an array.

// Solution 
$arr = [10, 20, 30, 40];
$length = 0;

foreach ($arr as $v) {
    $length++;
}

echo $length; // 4

// ✅ (2) Find the largest number
// Solution

$arr = [3, 9, 1, 7];
$max = $arr[0];

foreach ($arr as $v) {
    if ($v > $max) {
        $max = $v;
    }
}

echo $max; // 9

// ✅ (3) Find the smallest number
// Solution

$arr = [4, 2, 10, 1];
$min = $arr[0];

foreach ($arr as $v) {
    if ($v < $min) {
        $min = $v;
    }
}

echo $min; // 1

// ✅ (4) Count even and odd numbers
// Solution

$arr = [1, 2, 3, 4, 5, 6];
$even = 0;
$odd = 0;

foreach ($arr as $v) {
    if ($v % 2 == 0)
        $even++;
    else
        $odd++;
}

echo "Even: $even, Odd: $odd";

// ✅ (5) Reverse an array (manual, no array_reverse)
// Solution

$arr = [1, 2, 3, 4];
$rev = [];

// Step 1: count manually
$length = 0;
foreach ($arr as $v)
    $length++;

// Step 2: reverse using indexes
for ($i = $length - 1; $i >= 0; $i--) {
    $rev[] = $arr[$i];
}

print_r($rev); // [4,3,2,1]

// ✅ (6) Check if a value exists (manual search)
// Solution

$arr = ["apple", "banana", "mango"];
$search = "banana";
$found = false;

foreach ($arr as $v) {
    if ($v === $search) {
        $found = true;
        break;
    }
}

echo $found ? "Found" : "Not found";

// ✅ (7) Sum all values
// Solution

$arr = [5, 10, 15];
$sum = 0;

foreach ($arr as $v) {
    $sum += $v;
}

echo $sum; // 30

// ✅ (8) Copy array to another array
// Solution


$arr = [1, 2, 3];
$copy = [];

foreach ($arr as $v) {
    $copy[] = $v;
}

print_r($copy);

// ✅ (9) Filter values greater than 10
// Solution

$arr = [5, 12, 3, 20, 8];
$new = [];

foreach ($arr as $v) {
    if ($v > 10) {
        $new[] = $v;
    }
}

print_r($new); // [12,20]

// ✅ (10) Count how many times a value appears
// Solution

$arr = ["a", "b", "a", "c", "a"];
$search = "a";
$count = 0;

foreach ($arr as $v) {
    if ($v === $search) {
        $count++;
    }
}

echo $count; // 3

// 1️⃣ Find the second largest numb erProblem 
// Get second highest value without sorting.

// Solution
$arr = [10, 5, 20, 8, 12];

$max1 = $arr[0];
$max2 = $arr[0];

foreach ($arr as $v) {
    if ($v > $max1) {
        $max2 = $max1;
        $max1 = $v;
    } elseif ($v > $max2 && $v != $max1) {
        $max2 = $v;
    }
}

echo $max2; // 12

// 2️⃣ Remove duplicates manually
// Solution
$arr = [1, 1, 2, 3, 3, 4];
$unique = [];

foreach ($arr as $v) {
    $exists = false;
    foreach ($unique as $u) {
        if ($u === $v) {
            $exists = true;
            break;
        }
    }
    if (!$exists) {
        $unique[] = $v;
    }
}

print_r($unique); // [1,2,3,4]

// 3️⃣ Merge two arrays manually
// Solution
$a = [1, 2];
$b = [3, 4];
$merged = [];

foreach ($a as $x)
    $merged[] = $x;
foreach ($b as $x)
    $merged[] = $x;

print_r($merged); // [1,2,3,4]

// 4️⃣ Check if an array is sorted (ASC)
// Solution
$arr = [1, 2, 3, 4];
$isSorted = true;

for ($i = 0; isset($arr[$i + 1]); $i++) {
    if ($arr[$i] > $arr[$i + 1]) {
        $isSorted = false;
        break;
    }
}

echo $isSorted ? "Sorted" : "Not sorted";

// 5️⃣ Count frequency of each value
// Solution
$arr = ["a", "b", "a", "c", "b"];
$freq = [];

foreach ($arr as $v) {
    $found = false;

    foreach ($freq as $key => $item) {
        if ($item['value'] === $v) {
            $freq[$key]['count']++;
            $found = true;
            break;
        }
    }

    if (!$found) {
        $freq[] = ['value' => $v, 'count' => 1];
    }
}

print_r($freq);

// 6️⃣ Compare two arrays (find missing items)
// Solution
$a = [1, 2, 3, 4];
$b = [2, 4];

$missing = [];

foreach ($a as $x) {
    $found = false;
    foreach ($b as $y) {
        if ($x === $y) {
            $found = true;
            break;
        }
    }
    if (!$found)
        $missing[] = $x;
}

print_r($missing); // [1,3]

// 8️⃣ Move all zeros to the end
// Solution
$arr = [0, 1, 0, 3, 0, 5];
$new = [];

// non-zero first
foreach ($arr as $v)
    if ($v != 0)
        $new[] = $v;

// zeros next
foreach ($arr as $v)
    if ($v == 0)
        $new[] = $v;

print_r($new); // [1,3,5,0,0,0]

// 🔟 Print array in reverse (without creating new array)
// Solution
$arr = [1, 2, 3, 4];

for ($i = 0; isset($arr[$i]); $i++)
    ; // count manually

for ($i = $i - 1; $i >= 0; $i--) {
    echo $arr[$i] . " ";
}