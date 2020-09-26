
<?php 
$marks = array(95, 65, 46, 98, 78, 65); 
  
 
$max_marks = sizeof($marks) * 100; 
  
$total = 0; 
   
$grade = 'F'; 
   
for ($i = 0; $i < sizeof($marks); $i++)  
{ 
    $total += $marks[$i]; 
} 
  
$percentage = (($total) / $max_marks) * 100; 
  

if ($percentage >= 90) 
{ 
    $grade = 'A'; 
} 
else
{ 
    if ($percentage >= 80 && $percentage <= 89) 
    { 
        $grade = 'B'; 
    } 
    else 
    { 
        if ($percentage >= 60 && $percentage <= 79) 
        { 
            $grade = 'C'; 
        } 
        else 
        { 
            if ($percentage >= 33 && $percentage <= 59)  
            { 
                $grade = 'D'; 
            } 
            else 
            { 
                $grade = 'Fail'; 
            } 
        } 
    } 
} 
  
echo "Your grade is ".$grade ;  
?> 