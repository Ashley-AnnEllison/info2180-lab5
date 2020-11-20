<?php
$host = 'localhost';
$username = 'lab5_user';
$password = 'password123';
$dbname = 'world';
//$country = null;

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
//$stmt = $conn->query("SELECT * FROM countries WHERE name LIKE '%$country%'");
$stmt = $conn->query("SELECT * FROM cities");


$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?php if(isset($GET['cities'])) {
        echo $_GET['cities'];
      }
?>

<?php 
  $contextfound = (isset($_GET['context']));
  if($contextfound) {
    echo $_GET['context'];
  }
?>

<?php $query = filter_input(INPUT_GET, "query", FILTER_SANITIZE_STRING); ?>


<table>
  <tr>
    <th>Name</th>
    <th>District</th>
    <th>Population</th>
  </tr>

<?php
foreach($results as $row):
  echo "<tr><td>".$row['name']."</td><td>".$row['district']."</td><td>".$row['population']."</td></tr>";
?>
<?php endforeach; ?>
</table>

<ul>
<?php foreach ($results as $row): ?>
  <li> <?php $row['name'] . ' is ruled by ' . $row['head_of_state']; ?> </li>
<?php endforeach; ?>
</ul>