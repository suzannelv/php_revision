<?php
// méthode 1: 
// class myException extends Exception
// {
//    function demo(){
//     echo 'effectuer le plan B <br/>';

//    }

// }

// try {
//   echo 'play <br/>';
//   throw new myException('il pleut <br/>');
//   echo 'is playing <br/>';
// }catch(myException $e){
//   echo $e-> getMessage();
//   $e-> demo();
// }catch(Exception $e){
//   echo $e->getMessage();
// }
  

// méthode 2:
function test ($e){
  echo $e -> getMessage();
}

set_exception_handler('test');

throw new Exception('une erreur');
