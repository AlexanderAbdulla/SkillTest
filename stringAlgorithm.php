<?php
   
   /* This class defines our string occurence calculation algorithm */
   class stringAglorithm {
    
        //Randomly generated string
        public $randomString; 
        //First string from our form
        public $firstString;
        //Second string from our form
        public $secondString;
        //Third string from our form
        public $thirdString;
        //Counter for occurences of the first string
        public $firstStringCounter;
        //Counter for occurences of the second string
        public $secondStringCounter;
        //Counter for occurences of the third string
        public $thirdStringCounter; 

        /*Constructs a stringAlgorithm */
        public function __construct($firstString, $secondString,  $thirdString){
            $this->randomString = $this->generateRandomString();
            $this->firstString = $firstString;
            $this->seconddString = $secondString;
            $this->thirdString = $thirdString;
            $this->firstStringCounter = 0;
            $this->secondStringCounter = 0;
            $this->thirdStringCounter = 0; 
        }

        /* Populates the random string and returns it */
        function generateRandomString(){

            //All potential character values
            $allCharacters = "qwertyuiopasdfghjklzxcvbnm";
            //Total number of characters 
            $totalNumOfCharacters = strlen($allCharacters);
            //Length of our random string
            $randomStringLength = 1024;
            //Empty random string to be populated
            $randomString = '';
            
            /* Iterate through the random string and populate it  */
            for($i = 0; $i < $randomStringLength; $i++){
                $randomIndex = mt_rand(0, $totalNumOfCharacters - 1);
                $randomString .= $allCharacters[$randomIndex];
            }
            
            return $randomString;
        }
        
        /*Checks for occurences of our three strings in the randomly generated string and updates counters*/
        function checkOccurences(){
            for($i = 0; $i < 1024; $i++){
            
                //Checks that the first letter of the first string matches 
                if($this->firstString[0] === $this->randomString[$i]){
                    //Sets a counter for character matches
                    $matchCounter = 0;
                    //Sets a new index so we can check ahead in the string
                    $newIndex = $i;
                    
                    //Checks the remaining letters for matches
                    for($x = 0; $x < strlen($this->firstString); $x++){
        
                        if($this->firstString[$x] != $this->randomString[$newIndex]) {    
                            break;
                        } else {
                            $matchCounter++;
                            $newIndex++;
        
                            //Check that we have found as many matches as characters
                            if(strlen($this->firstString) === $matchCounter){
                                $this->firstStringCounter++;
                            }
                        }
        
                    }
                }
        
                //Checks that the first letter of the second string matches
                if($this->secondString[0] === $this->randomString[$i]){
                    //Sets a counter for character matches
                    $matchCounter = 0;
                    //Sets a new index so we can check ahead in the string
                    $newIndex = $i;
        
                    //Checks the remaining letters for matches
                    for($x = 0; $x < strlen($this->secondString); $x++){
        
                        if($this->secondString[$x] != $this->randomString[$newIndex]) {    
                            break;
                        } else {
                            $matchCounter++;
                            $newIndex++;
        
                            //Check that we have found as many matches as characters
                            if(strlen($this->secondString) === $matchCounter){
                                $this->secondStringCounter++;
                            }
                        }
        
                    }
                }
        
                //Checks that the first letter of the third string matches
                if($this->thirdString[0] === $this->randomString[$i]){
                    //Sets a counter for character matches
                    $matchCounter = 0;
                    //Sets a new index so we can check ahead in the string
                    $newIndex = $i;
        
                    //Checks the remaining letters for matches
                    for($x = 0; $x < strlen($this->thirdString); $x++){
        
                        if($this->thirdString[$x] != $this->randomString[$newIndex]) {    
                            break;
                        } else {
                            $matchCounter++;
                            $newIndex++;
        
                            //Check that we have found as many matches as characters
                            if(strlen($this->thirdString) === $matchCounter){
                                $this->thirdStringCounter++;
                            }
                        }
                    }
                }
            }
        }
    }
?>