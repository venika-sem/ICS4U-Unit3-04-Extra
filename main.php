<?php

    /*
     * This program uses recursion to solve the Towers of Hanoi
     * By Venika Sem
     * @version 1.0
     * @since Feb-2024
     */
    
    // Tower of Hanoi function
    function towerOfHanoi($nOfDisk, $startPeg, $endPeg) {
        $pegNumber = 6;
        if ($nOfDisk == 1) {
            echo "Move disk 1 from peg $startPeg to peg $endPeg\n";
            return;
        } else {
            towerOfHanoi($nOfDisk - 1, $startPeg, $pegNumber - $startPeg - $endPeg);
            echo "Move disk $nOfDisk from peg $startPeg to peg $endPeg\n";
            towerOfHanoi($nOfDisk - 1, $pegNumber - $startPeg - $endPeg, $endPeg);
        }
    }
    
    // Get user input
    $inputNumber = readline("How many disks would you like in your tower: ");
    
    // Make sure the user input a number in the right range
    if ($inputNumber < 0) {
        echo "\nInput a number over 0.\n";
        exit();
    }
    
    // Run the Tower of Hanoi function
    $startPeg = 1;
    $endPeg = 3;
    
    towerOfHanoi($inputNumber, $startPeg, $endPeg);

    echo "\nDone.";

?>
