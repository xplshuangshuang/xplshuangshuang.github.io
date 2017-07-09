<!DOCTYPE html>

<html>
    <head>
	<link href="dotaOMG.css" rel="stylesheet" type="text/css" />
	<script src="textChange.js" type="text/javascript"> </script>

	<title>DOTAOMG</title>
    </head>

    <body>
    	<nav class = "navBar">
    		<h1>User Page</h1>
    	</nav>
    	
    	<div class = "userBox">
    		<div class = "userProfile">
    			<img style='height: 100%; width: 100%; object-fit: cover' src='images/profile.jpg' />
    		</div>
    		<div class = "userInfo">
    			<?php
    				$fileName = "profile/chiyu.txt";
    				$data = file($fileName);
        			foreach($data as $data){
						print "<h1> $data </h1>";
            		}
    			?>
    		</div>
    		<div class = "recentGame">
    			<?php
    				$fileName = "profile/chiyu_record.txt";
    				$data = file($fileName);
    				$info_array = array();
					$count = 0;
        			foreach($data as $data){
        				$count = $count + 1;
        				if ($count <= 4){
        					$info = explode(" ", $data);
            				$info_array[] = $info;
            			}
        			}	
    				print "<table style='width:100%'>
  					<tr>
    					<th>GameNumber</th>
    					<th>Kill</th> 
    					<th>Death</th>
    					<th>Assists</th>
  					</tr>
  					<tr>
    					<td>{$info_array[0][0]}</td>
    					<td>{$info_array[0][1]}</td>
    					<td>{$info_array[0][2]}</td>
    					<td>{$info_array[0][3]}</td>
    					<td><a href='stats.php' class='button button_stats'><span>Check</span></a></td>
  					</tr>
  					<tr>
    					<td>{$info_array[1][0]}</td>
    					<td>{$info_array[1][1]}</td>
    					<td>{$info_array[1][2]}</td>
    					<td>{$info_array[1][3]}</td>
    					<td><a href='stats.php' class='button button_stats'><span>Check</span></a></td>
  					</tr>
  					<tr>
    					<td>{$info_array[2][0]}</td>
    					<td>{$info_array[2][1]}</td>
    					<td>{$info_array[2][2]}</td>
    					<td>{$info_array[2][3]}</td>
    					<td><a href='stats.php' class='button button_stats'><span>Check</span></a></td>
  					</tr>
  					 <tr>
    					<td>{$info_array[3][0]}</td>
    					<td>{$info_array[3][1]}</td>
    					<td>{$info_array[3][2]}</td>
    					<td>{$info_array[3][3]}</td>
    					<td><a href='stats.php' class='button button_stats'><span>Check</span></a></td>
  					</tr>
					</table>";
				?>
    		</div>    		
    	</div>
    </body>
</html>