<?php

// Days of the week
$daysOfWeek = [
    'Monday',
    'Tuesday',
    'Wednesday',
    'Thursday',
    'Friday',
    'Saturday',
    'Sunday'
];

// Breakfast options
$breakfastOptions = [
    'Oatmeal',
    'Scrambled eggs',
    'Avocado toast',
    'Pancakes',
    'Cheesecakes',
    'Porridge',
    'Smoothies',
    'Pancakes',
    'Omelette'
];

// Generate random menu
$menu = [];
foreach ($daysOfWeek as $day) {
    $menu[$day] = $breakfastOptions[array_rand($breakfastOptions)];
}

// Output menu
foreach ($menu as $day => $breakfast) {
    echo "<p>$day: $breakfast</p>";
}
