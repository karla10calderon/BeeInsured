<?php
include 'header.php';
?>
    
<form action="search.php" method="post">
    <input type="text" name="search" placeholder="Search">
    <button type="submit" name="submit-search"></button>
</form>
<h1>Front Page</h1>
<h2>All articles:</h2>

<div class="article-container">
    <?php 
    $sql = "SELECT * FROM article";
    $result = mysqli_query($conn, $sql);
    $queryResults = mysqli_num_rows($result);
    
    if ($queryResults > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div
            <h3>".$row['a_title']."</h3>
            <p>".$row['a_text']."</p>
            <p>".$row['a_date']."</p>
            <p>".$row['a_author']."</p>
            
            >"
        
    }
?> 


</div>

    </body>
</html>