



<!doctype html>
<html lang="pl">

<head>
<?php 

function everything()
{
  $date_month = array(1 => 'miesiąc', 2 => 'styczeń', 3 => 'luty', 4 => 'marzec', 5 => 'kwiecień', 6 => 'maj', 7 => 'czerwiec', 8 => 'lipiec', 9 => 'sierpień', 10 => 'wrzesień', 11 => 'październik', 12 => 'listopad', 13 => 'grudzień');

    
  $date_day = array(1 => 'data wpłaty pensji na konto', 2 => 28, 3 => 28, 4 => 30, 5 => 27, 6 => 31, 7 => 29, 8 => 31, 9 => 31, 10 => 28, 11 => 31, 12 => 30, 13 => 31);

    
  $date_bonus = array(1 => 'data wpłaty premii na konto', 2 => 15, 3 => 15, 4 => 15, 5 => 18, 6 => 15, 7 => 15, 8 => 18, 9 => 15, 10 => 19, 11 => 15, 12 => 15, 13 => 31);

  $data_0 = array(1 => 'miesiąc', 2 => 'data wpłaty pensji na konto', 3 => 'data wpłaty premii na konto');
  $data_1 = array(1 => 'styczeń', 2 => 28, 3 => 15);
  $data_2 = array(1 => 'luty', 2 => 28, 3 => 15);
  $data_3 = array(1 => 'marzec', 2 => 30, 3 => 15);
  $data_4 = array(1 => 'kwiecień', 2 => 27, 3 => 18);
  $data_5 = array(1 => 'maj', 2 => 31, 3 => 15);
  $data_6 = array(1 => 'czerwiec', 2 => 29, 3 => 15);
  $data_7 = array(1 => 'lipiec', 2 => 31, 3 => 18);
  $data_8 = array(1 => 'sierpień', 2 => 31, 3 => 15);
  $data_9 = array(1 => 'wrzesień', 2 => 28, 3 => 19);
  $data_10 = array(1 => 'październik', 2 => 31, 3 => 15);
  $data_11 = array(1 => 'listopad', 2 => 30, 3 => 15);
  $data_12 = array(1 => 'grudzień', 2 => 31, 3 => 31);

        
        
  $before = '<form  method="post" action="">
  <input style="disaply:block;" type="submit" name="one" value="zapisz" class="button-1"/></form>';
    
  $after_1 = '<form  method="post" action="">
  <input style="disaply:block;" type="submit" name="one" value="uruchom zadanie" class="button-1"/></form>';
  
  $after_2 = "<a href='index.php'><form  method='post' action=''>
  <input style='' type='submit' name='refresh' value='Powrót na  stronę główną' class='button-2'/></form></a>";

    
    
    
    
  if(isset($_POST['one']))
  {


    echo "<h1 style=''>Tabelka również została zapisana do pliku z rozszerzeniem .csv.<br>Życzę miłego dnia.</h1>";



    $count_one = count($date_month);
    echo '<div class="div_more_1"><table class="tab_more">';
    for($x_one=1; $x_one<=$count_one; $x_one++)
    {
      echo '<tr><td>';
      echo $date_month[$x_one];
    }
    echo '</td></tr></table>';
    echo '<table class="tab_more">';
    $count_two = count($date_day);

    for($y_two=1; $y_two<=$count_two; $y_two++)
    {
      echo '<tr><td>';
      echo $date_day[$y_two];
    }
    echo '</td></tr></table>';
    echo '<table class="tab_more">';
    $count_three = count($date_bonus);

    for($z_three=1; $z_three<=$count_three; $z_three++)
    {
       echo '<tr><td>';
       echo $date_bonus[$z_three];
    }

    echo '</td></tr></table>';  
    echo $after_2;
    if(isset($_POST['refresh']))
    {
      header("Refresh:0");
    }
    echo '</div>';

    }   

    if($before = isset($_POST['one']))
    {
      echo "<h1 style='display:none;'>$before</h1>";          
    }
    else
    {
      echo $after_1;
   }
        
    
        
   
 
       
       
        
  if(isset($after_2))
  {

    $file = fopen('plik.csv', 'w');

    fputcsv($file, $data_0);
    fputcsv($file, $data_1);
    fputcsv($file, $data_2);
    fputcsv($file, $data_3);
    fputcsv($file, $data_4);
    fputcsv($file, $data_5);
    fputcsv($file, $data_6);
    fputcsv($file, $data_7);
    fputcsv($file, $data_8);
    fputcsv($file, $data_9);
    fputcsv($file, $data_10);
    fputcsv($file, $data_11);
    fputcsv($file, $data_12);


    fclose($file);

  }
        

        
}
  
?>
  
<meta charset="UTF-8">
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<title>Programik</title>
<link rel="stylesheet" href="css/main.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

 <body>
 
<?php
    
    everything();
   
?>
      

    
    

  </body>


</html>
