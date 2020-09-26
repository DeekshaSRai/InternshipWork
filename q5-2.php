<?php  
function Fibonacci($number){ 
	
	
	if ($number == 0) 
		return 0;	 
	else if ($number == 1) 
		return 1;	 
	
	else
		return (Fibonacci($number-1) + 
				Fibonacci($number-2)); 
} 

echo "Fibonaci series= ";
$number = 10; 
for ($counter = 0; $counter < $number; $counter++){ 
	
	echo Fibonacci($counter),' '; 
} 
?> 
