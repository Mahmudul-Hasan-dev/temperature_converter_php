<?php
// Define constants for conversion formulas
define("C_TO_F", 9/5);
define("F_TO_C", 5/9);
define("FREEZING_POINT_C", 32); // Freezing point of water in Fahrenheit

// Step 1: Ask the user to enter a temperature value and the conversion type
$temperature = readline("Enter the temperature value: ");
$conversionType = readline("Convert to (C for Celsius, F for Fahrenheit): ");

// Step 2: To perform the conversion
switch (strtoupper($conversionType)) {
    case 'C':
        // Convert Fahrenheit to Celsius
        $convertedTemperature = ($temperature - FREEZING_POINT_C) * F_TO_C;
        echo "$temperature °F is " . round($convertedTemperature, 2) . " °C\n";
        break;

    case 'F':
        // Convert Celsius to Fahrenheit
        $convertedTemperature = ($temperature * C_TO_F) + FREEZING_POINT_C;
        echo "$temperature °C is " . round($convertedTemperature, 2) . " °F\n";
        break;

    default:
        echo "Invalid conversion type. Please enter 'C' for Celsius or 'F' for Fahrenheit.\n";
        break;
}
?>