<?php
// Joshua Deel
// Ch2 GIT Hw2

$continue = true;

// display welcome message
print("Welcome to the Hashing Script!"); 

while($continue == true) {
    // asks user for input and assigns to variable
    print("\n"); 
    $userString = readline("Please enter your string to hash or \"exit\" to quit: ");

    // terminate program
    if(strtolower($userString) == "exit" ) {
        print("Quitting.");
        break;
    }

    print("\nHashing Options: MD5, SHA1, CRC32, SHA256 or exit");
    print("\n");
    $hashChoice = readline("What hashing algorithm do you want to use?");

    // terminates program if exit entered
    if(strtolower($hashChoice) == "exit" ) {
        print("Quitting.");
        break;
    }

    // takes string and removes white space on left and right
    // passes to md5() to hash string and displays the results
    else if(strtolower($hashChoice) == "md5" ){
        print(strtoupper(md5(trim($userString))));
        print("\n\n");
    }

    // takes string and removes white space on left and right
    // passes to sha1() to hash string and displays the results
    else if(strtolower($hashChoice) == "sha1" ){
        print(strtoupper(sha1(trim($userString))));
        print("\n\n");
    }

    // takes string and removes white space on left and right
    // passes to crc32() to hash string and displays the results
    else if(strtolower($hashChoice) == "crc32" ){
        print(strtoupper(crc32(trim($userString))));
        print("\n\n");
    }

    // takes string and removes white space on left and right
    // passes to hash() using the sha256 parameter to hash the string and displays the results
    else if(strtolower($hashChoice) == "sha256" ){
        print(strtoupper(hash("sha256",$userString)));
        print("\n\n");
    }

    // will show if bad input is made
    else{
        print("Sorry, That is an invalid response. Please try again.");
        print("\n\n");
    }
}
?>