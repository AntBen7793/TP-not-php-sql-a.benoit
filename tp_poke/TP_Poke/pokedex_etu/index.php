<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Pokedex</title>
  </head>
  <body>
 <h1>My Pokedex</h1>
    <table>
      <thead>
        <tr>
          <th>Sprite</th>
          <th>ID</th>
          <th>Name</th>
          <th>Height</th>
          <th>Weight</th>
          <th>Base exp</th>
        </tr>
      </thead>
      <tbody>
		  
		  
		  <?php

    $link=mysqli_connect("localhost","root","root","Pokedex");
    if(!$link)
    {
        echo "Erreur : Impossible de se connecter  MySQL." . PHP_EOL;
        echo "Errno de dbogage : " . mysqli_connect_errno() . PHP_EOL;
        echo "Erreur de dbogage : " . mysqli_connect_error() . PHP_EOL;
        exit;
    }


    
    
     $res = $link->query("SELECT id,identifier,height,weight,base_experience FROM Pokemon");
        if($res)
        {
            while($row = mysqli_fetch_array($res, MYSQLI_ASSOC))
            {
			      echo "<tr>";
			      if($row["base_experience"]>=200)
			      {
					  echo "<div class='super'>";
					  echo "<td class='super'><img src='sprites/".$row["identifier"].".png' alt='".$row["identifier"]."'></td>";
					echo "<td class='super'>".$row["id"]."</td>";
					echo "<td class='super'>".$row["identifier"]."</td>";
					echo "<td class='super'>".$row["height"]."</td>";
					echo "<td class='super'>".$row["weight"]."</td>";
					echo "<td class='super'>".$row["base_experience"]."</td>";
					  echo "</div>";
				  }
				  else{
				  echo "<td><img src='sprites/".$row["identifier"].".png' alt='".$row["identifier"]."'></td>";
					echo "<td>".$row["id"]."</td>";
					echo "<td>".$row["identifier"]."</td>";
					echo "<td>".$row["height"]."</td>";
					echo "<td>".$row["weight"]."</td>";
					echo "<td>".$row["base_experience"]."</td>";}
				  echo"</tr>";
            }
        }
   
?>
		  
		  
        <tr>
          <td><img src="sprites/bulbasaur.png" alt="bulbasaur"></td>
          <td>1</td>
          <td>bulbasaur</td>
          <td>7</td>
          <td>69</td>
          <td>64</td>
        </tr>
        <tr>
          <td><img src="sprites/ivysaur.png" alt="bulbasaur"></td>
          <td>2</td>
          <td>ivysaur</td>
          <td>10</td>
          <td>130</td>
          <td>1</td>
        </tr>
      </tbody>
    </table>
  </body>
</html>
