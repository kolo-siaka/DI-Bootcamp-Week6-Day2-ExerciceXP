<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ExerciceXP</title>
</head>
<body>
      <!-- Exercice 1 -->

     <?php 
     
        $val1 = 5;
        $val2 = 6;
        $somme = $val1 + $val2;
        echo " La somme de $val1 + $val2 =",  $somme .'<br>';     

      ?>
      <!-- Exercice 2 -->
      <?php 
        for ($i=5; $i <= 15 ; $i++) { 
        	echo "{$i}<br>";
        }
       ?>
        <!-- Exercice 3 -->
        <?php 
           $note = 46;
            if ($note <= 33) {
            	echo 't\'as echouer .<br> ';
            }
             elseif($note >=60){
               	echo 'Super t\'es le premier .<br>';
            }
             elseif ($note >= 45 && $note <= 59) {
            	      echo 't\'es le second de ta classe .<br>';
            }
             else {
            	  echo 't\es le troisieme de la classe .<br>';
            }
            

         ?>
         <!-- Exercice 4 -->
         <?php 
             $date = 9;

             switch ($date) {
             	case 1:
             		echo "Welcome Monday !";
             		break;
             		case 2:
             		echo "Welcome tuesday !";
             		break;
             		case 3:
             		echo "Welcome wednesday !";
             		break;
             		case 4:
             		echo "Welcome thursday !";
             		break;
             		case 5:
             		echo "Welcome friday !";
             		break;
             		case 6:
             		echo "Welcome saturday !";
             		break;
             		case 7:
             		echo "Welcome sunday  !";
             		break;

             	
             	default:
             		echo "we are only seven days on a week !";
             		break;
             }
          ?>

</body>
</html>