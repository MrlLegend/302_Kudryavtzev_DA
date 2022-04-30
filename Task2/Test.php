<?php 

function runTest() 
{
    // String representation test
    $m1 = new Fraction(4, 8);
    echo "���������: 1/2" . PHP_EOL;
    echo "��������: " . $m1 . PHP_EOL;

    // Adding test
    $m2 = new Fraction(1, 4);
    $m3 = $m1->add($m2);
    echo "���������: 3/4" . PHP_EOL;
    echo "��������: " . $m3 . PHP_EOL;

    // Subtraction test
    $m4 = new Fraction(-5, 2);
    $m5 = $m4->sub($m2);
    echo "���������: -2'3/4" . PHP_EOL;
    echo "��������: " . $m5 . PHP_EOL;
    
    $m6 = new Fraction(25, 6);
    $m7 = $m6->add($m4);
    echo "���������: 1'5/12" . PHP_EOL;
    echo "��������: " . $m7 . PHP_EOL;

    $m8 = new Fraction(-7, 8);
    $m9 = $m6->sub($m8);
    echo "���������: 2'7/24" . PHP_EOL;
    echo "��������: " . $m9 . PHP_EOL;
}