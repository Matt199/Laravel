<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of test
 *
 * @author maciej
 */
class Test {
    //put your code here
    public function ZapytanieMySqli($zapytanie){
		$user = 'spaceapp';
		$password = 'spaceapp';
		$database = "spaceapp_laravel";
		$mysqli = new mysqli("localhost", $user , $password, $database);

	
			if ($mysqli->connect_errno) {
		    printf("Connect failed: %s\n", $mysqli->connect_error);
		    exit();
			}

		
		$odpowiedz = mysqli_query($mysqli,$zapytanie);

		$i = 0;
            if($odpowiedz != FALSE)
                {                 
                    while($row = mysqli_fetch_array($odpowiedz, MYSQLI_BOTH))
                    {
                            $tab_odp[$i++] = $row;
                           
                    }
                    
                $mysqli->close();
		//print_r($odpowiedz);
		return $tab_odp;
                }
    }
}
$test = new Test;
$sql ='';
$test->ZapytanieMySqli($sql);
        