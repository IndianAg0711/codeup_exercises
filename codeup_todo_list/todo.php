<?php

// Create array to hold list of todo items
$items = array();


// Function library

// function for listing items in array
function list_items($list) {
    $string = "";
    foreach ($list as $key => $value) {
        $string .= ($key + 1) . " " . $value . PHP_EOL;
    }
    return $string;
}

// function for correcting user input
function get_input($upper = false) {
    if ($upper == TRUE) {
        return strtoupper(trim(fgets(STDIN)));
    }   else {
            return trim(fgets(STDIN));
        }
}

// add items to existing array using external file
function add_external_data($filename) {
    $file = "$filename";
    $handle = fopen($file, 'r');
    $string = fread($handle, filesize($file));
    $new_array = explode("\n", $string);
    return $new_array;
}


// The loop!
do {
    // Iterate through list items
    echo list_items($items);

    // Show the menu options
    echo '(N)ew item, (R)emove item, (SO)rt, (S)ave Document, (O)pen document, (A)dd external data, (Q)uit : ';

    // Get the input from user
    // Use trim() to remove whitespace and newlines

    $input = get_input(TRUE);

    // Check for actionable input
    if ($input == 'N') {

        // Ask for entry
        echo 'Enter item: ';
        // Add entry to list array
        $new_item = get_input();
        // Ask user if item should be at beginning or end of list
        echo "Place item at (B)eginning or (E)nd of list? ";
        $priority = get_input(TRUE);
            if ($priority == 'B') {
                array_unshift($items, $new_item);
            } 
            else {
                $items[] = $new_item;

            }
        
    } elseif ($input == 'R') {
        // Remove which item?
        echo 'Enter item number to remove: ';
        // Get array key
        $key = get_input();
        // Remove from array
        unset($items[$key - 1]);
        $items = array_values($items);
    } elseif ($input == 'SO') {
            //sort options
        do {
            echo "Options: (A)-Z or (Z)-A: ";
            //get order option
            $option = get_input(TRUE);
            //sort according to user input
            if ($option == 'A') {
            sort($items);
            break;
        }   elseif ($option == 'Z') {
            rsort($items);
            break;
        }
        } while ($option != 'A' || $option !='Z');
        
        
    } elseif ($input == 'F') {
        // Hidden command to remove first item in list
        array_shift($items);
    } elseif ($input == 'L') {
        // Hidden command to remove last item in list
        array_pop($items);
    } elseif ($input == 'O') {
        $filename = "todo_list.txt";
        $handle = fopen($filename, "r");
        $string = fread($handle, filesize($filename));
        $items = explode("\n", $string);
        fclose($handle);
    }  elseif ($input == 'A') {
        $external_array = add_external_data("todo_list.txt");
        $items = array_merge($items, $external_array);
    } elseif ($input == 'S') {
        echo "Save as: ";
        $filename = fgets(STDIN);
        $file = "$filename";
        $handle = fopen($file, 'w');
        $item_string = implode("\n", $items);
        fwrite($handle, $item_string . PHP_EOL);
        fclose($handle);
        echo "Save Successful!" . PHP_EOL; 
    }
// Exit when input is (Q)uit
} while ($input != 'Q');

// Say Goodbye!
echo "Goodbye!\n";

// Exit with 0 errors
exit(0);