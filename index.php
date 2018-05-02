<!DOCTYPE html>
    <html lang="fr">
	    <head>
		    <meta charset="utf-8">
			<title></title>
			<link rel="stylesheet" href="style.css">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
		    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
		</head>
		
		<body>
				<?php
					 $datas = [
						"students" => [
							[
								"firstname" => "DURON",
								"lastname" => "Stacy",
								"address" => [
									"street" => "rue de l'ACS",
									"numero" => "12",
									"zipcode" => 39000,
									"city" => "Lons-le-Saunier",
									"country" => "France"
								]
							],
							[
								"firstname" => "SAULEY",
								"lastname" => "Pierre",
								"address" => [
									"street" => "rue de fedora",
                                    "numero" => "?",
									"zipcode" => 39100,
									"city" => "Dole",
									"country" => "France"
								]
							],
							[
								"firstname" => "CARREY",
								"lastname" => "Raphaël",
								"address" => [
									"street" => "boulevard de l'ES6",
									"numero" => "42",
									"zipcode" => 39100,
									"city" => "Dole",
									"country" => "France"
								]
							]
						],
						"coachs" => [
							[
								"firstname" => "LOUIS",
								"lastname" => "Morgane",
								"skills" => [
									"rainbow", "wireframing", "frontend", "photoshop"
								],
								"birthdate" => new DateTime('1990-10-10')
							],
							[
								"firstname" => "TOURNIER",
								"lastname" => "Anthony",
								"skills" => [
									"pas design", "php", "backend", "unicorn"
								],
								"birthdate" => new DateTime('1990-10-20')
							]
						]
					];
                        echo '<table>';
						
						foreach($datas['students'] as $element){
                            echo '<tr>';
                            echo '<th>Firstname:</th>';
							echo '<td>'. $element['firstname'] . '</td>';
						
                            echo '<th>Lastname:</th>';
                            echo '<td>'. $element['lastname'] . '</td>';
						
							echo '<th>Adress:</th>';
						foreach($element['address'] as $address){
							echo '<td>'.$address . '</td>';
						}
						echo '</tr>';
                        
					}
                    
                    echo '</table>';
                    echo '<table>';
                    
						foreach($datas['coachs'] as $element){
                            echo '<tr>';
                            echo '<th>Firstname:</th>';
							echo '<td>'. $element['firstname'] . '</td>';
						
                            echo '<th>Lastname:</th>';
                            echo '<td>'. $element['lastname'] . '</td>';
						
							echo '<th>Skills:</th>';
                            foreach($element ['skills'] as $skills){
                                echo '<td>'.$skills . '</td>';
                             }
                            $d = $element['birthdate'];
                            echo '<th>Date:</th>';
							echo '<td>'.$d->format('Y-m-d') .'</td><br>';
                            echo '</tr>';
					
                        }
					echo '</table>';
				?>
        
                <br><br><br><br><br><br>
        
                <?php
                    $datas = [
						"students" => [
							[
								"firstname" => "DURON",
								"lastname" => "Stacy",
								"address" => [
									"street" => "rue de l'ACS",
									"numero" => "12",
									"zipcode" => 39000,
									"city" => "Lons-le-Saunier",
									"country" => "France"
								]
							],
							[
								"firstname" => "SAULEY",
								"lastname" => "Pierre",
								"address" => [
									"street" => "rue de fedora",
                                    "numero" => "?",
									"zipcode" => 39100,
									"city" => "Dole",
									"country" => "France"
								]
							],
							[
								"firstname" => "CARREY",
								"lastname" => "Raphaël",
								"address" => [
									"street" => "boulevard de l'ES6",
									"numero" => "42",
									"zipcode" => 39100,
									"city" => "Dole",
									"country" => "France"
								]
							]
						],
						"coachs" => [
							[
								"firstname" => "LOUIS",
								"lastname" => "Morgane",
								"skills" => [
									"design", "wireframing", "frontend", "photoshop"
								],
								"birthdate" => new DateTime('1990-10-10')
							],
							[
								"firstname" => "TOURNIER",
								"lastname" => "Anthony",
								"skills" => [
									"pas design", "php", "backend", "linux"
								],
								"birthdate" => new DateTime('1990-10-20')
							]
						]
					];
                    echo '<table>';
                    
                    $max = count($datas['students']);
                    
                    for ($i = 0; $i < $max; $i++){
                        
                        $student = $datas['students'][$i];
                        
                        echo '<tr>';
                        echo '<th>Firstname:</th>';
                        echo '<td>'.$student['firstname'].'</td>';
                        
                        echo '<th>Lastname:</th>';
                        echo '<td>'.$student['lastname'].'</td>';
                        
                        echo '<th>Address</th>';
                        echo '<td>'.$student['address']['street'].'</td>';
                        echo '<td>'.$student['address']['numero'].'</td>';
                        echo '<td>'.$student['address']['zipcode'].'</td>';
                        echo '<td>'.$student['address']['city'].'</td>';
                        echo '<td>'.$student['address']['country'].'</td>';
                        
                        
                        echo '</tr>';                       		
                    };
                    echo '</table>';
                    echo '<br><br>';
                    echo '<table>';
                    
                    $max = count($datas['coachs']);
                    
                    for ($i = 0; $i < $max; $i++){
                        
                        $coach = $datas['coachs'][$i];
                        $d = $coach['birthdate'];
                        
                        echo '<tr>';
                        echo '<th>Firstname:</th>';
                        echo '<td>'.$coach['firstname'].'</td>';
                        
                        echo '<th>Lastname:</th>';
                        echo '<td>'.$coach['lastname'].'</td>';
                        
                        
                        
                        echo '<th>Skills</th>';                      
                        echo '<td>'.implode("</td><td>",$coach['skills']).'</td>';
                        
                        echo '<th>Date:</th>';
                        echo '<td>'.$d->format('Y-m-d').'</td>';
                            
                                           
                        echo '</tr>';                       		
                    };
                    echo '</table>';
                ?>
                <br><br><br><br><br><br>
                <?php
                    $datas = [
						"students" => [
							[
								"firstname" => "DURON",
								"lastname" => "Stacy",
								"address" => [
									"street" => "rue de l'ACS",
									"numero" => "12",
									"zipcode" => 39000,
									"city" => "Lons-le-Saunier",
									"country" => "France"
								]
							],
							[
								"firstname" => "SAULEY",
								"lastname" => "Pierre",
								"address" => [
									"street" => "rue de fedora",
                                    "numero" => "?",
									"zipcode" => 39100,
									"city" => "Dole",
									"country" => "France"
								]
							],
							[
								"firstname" => "CARREY",
								"lastname" => "Raphaël",
								"address" => [
									"street" => "boulevard de l'ES6",
									"numero" => "42",
									"zipcode" => 39100,
									"city" => "Dole",
									"country" => "France"
								]
							]
						],
						"coachs" => [
							[
								"firstname" => "LOUIS",
								"lastname" => "Morgane",
								"skills" => [
									"design", "wireframing", "frontend", "photoshop"
								],
								"birthdate" => new DateTime('1990-10-10')
							],
							[
								"firstname" => "TOURNIER",
								"lastname" => "Anthony",
								"skills" => [
									"pas design", "php", "backend", "linux"
								],
								"birthdate" => new DateTime('1990-10-20')
							]
						]
					];
                echo '<table>';
                $i = 0;
                while ($i < count($datas['students'])){
                    $student = $datas['students'][$i];
                    echo '<tr>';
                    echo '<th>Firstname</th>';
                    echo '<td>'.$student['firstname'].'</td>';
                    echo '<th>Lastname</th>';
                    echo '<td>'.$student['lastname'].'</td>';
                    
                    echo '<th>Address</th>';
                    echo '<td>'.$student['address']['street'].'</td>';
                    echo '<td>'.$student['address']['numero'].'</td>';
                    echo '<td>'.$student['address']['zipcode'].'</td>';
                    echo '<td>'.$student['address']['city'].'</td>';
                    echo '<td>'.$student['address']['country'].'</td>';
                    
                    echo '</tr>';
                    $i++;   
                };
                echo '</table>';
                echo '<br><br>';
                echo '<table>';
                ;
                
                $i = 0;
                while ($i < count($datas['coachs'])){
                    $coach = $datas['coachs'][$i];
                    $d = $coach['birthdate'];
                    
                    echo '<tr>';
                    echo '<th>Firstname</th>';
                    echo '<td>'.$coach['firstname'].'</td>';
                    echo '<th>Lastname</th>';
                    echo '<td>'.$coach['lastname'].'</td>';
                    
                    echo '<th>Skills</th>';
                    echo '<td>'.implode("</td><td>",$coach['skills']).'</td>';
                    
                    echo '<th>Date:</th>';
                    echo '<td>'.$d->format('Y-m-d').'</td>';
                        
                            
                    echo '</tr>';
                    $i++;   
                };
                echo '</table>';
                
                ?>
			
		    
		</body>
	</html>