<?php
$host = 'localhost';
$username = 'lab5_user';
$password = 'password123';
$dbname = 'world';
//$country = null;

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
//$stmt = $conn->query("SELECT * FROM countries WHERE name LIKE '%$country%'");
$stmt = $conn->query("SELECT * FROM countries");

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?php //if(isset($GET['country'])) {
        //echo $_GET['country'];
        //echo htmlentities($results['country']);
      }
?>

<?php //$query = filter_input(INPUT_GET, "query", FILTER_SANITIZE_STRING); ?>

<ul>
<?php foreach ($results as $row): ?>
  <li><?= $row['name'] . ' is ruled by ' . $row['head_of_state']; ?></li>
<?php endforeach; ?>
</ul>
