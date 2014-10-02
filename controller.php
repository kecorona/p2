<?php
     function &doGeneratePasswords()
     {
         //////////////////////////////////////
         // lowercase L left out for clarity //
         //////////////////////////////////////
         $l_achLowercase = array("a","b","c","d","e","f","g","h",
                                   "i","j","k","m","n","o","p","q",
                                   "r","s","t","u","v","w","x",
                                   "y","z");
         $l_iNumLowercase = count($l_achLowercase);

         ////////////////////////////////////////////
         // uppercase I and O left out for clarity //
         ////////////////////////////////////////////
         $l_achUppercase = array("A","B","C","D","E","F","G","H",
                                   "J","K","L","M","N","P","Q",
                                   "R","S","T","U","V","W",
                                   "X","Y","Z");
         $l_iNumUppercase = count($l_achUppercase);

         $l_aiNumbers = array("1","2","3","4","5","6","7","8","9","0");
         $l_iNumNumbers = count($l_aiNumbers);

         $l_achSpecialChars = array("!","#","%","@","*","&");
         $l_iNumSpecialChars = count($l_achSpecialChars);

         ///////////////////////////////////////////////////////////////////
         // Make sure to create enough blank spaces as you want passwords //
         ///////////////////////////////////////////////////////////////////
         $l_astPasswds = array("","","","");

         //////////////////////////////////////////
         // Hopefully these are self explanatory //
         //////////////////////////////////////////
         $l_astPasswdSchemes = array("SLUUSLNN","LSUNLLNU","NNUSLLSN","LNLSUNLU");

         $l_iNumPasswds = count($l_astPasswdSchemes);

         for ($i=0; $i < $l_iNumPasswds; $i++) {
             $l_iSchemeLength = strlen($l_astPasswdSchemes[$i]);

             $l_achRandLowercase = array_values(array_rand($l_achLowercase, $l_iNumLowercase));
             $l_achRandUppercase = array_values(array_rand($l_achUppercase, $l_iNumUppercase));
             $l_aiRandNumbers = array_values(array_rand($l_aiNumbers, $l_iNumNumbers));
             $l_achRandSpecialChars = array_values(array_rand($l_achSpecialChars, $l_iNumSpecialChars));

             for ($j=0; $j < $l_iSchemeLength; $j++) {
                 $l_chCurrentOne = $l_astPasswdSchemes[$i]{$j};

                 switch ($l_chCurrentOne) {
                     case "L":
                         $l_astPasswds[$i] .= $l_achLowercase[array_shift($l_achRandLowercase)];
                         break;

                     case "U":
                         $l_astPasswds[$i] .= $l_achUppercase[array_shift($l_achRandUppercase)];
                         break;

                     case "N":
                         $l_astPasswds[$i] .= $l_aiNumbers[array_shift($l_aiRandNumbers)];
                         break;

                     case "S":
                         $l_astPasswds[$i] .= $l_achSpecialChars[array_shift($l_achRandSpecialChars)];
                         break;

                     default:
                         break;
                 }
             }
         }

         return $l_astPasswds;
     }
?>