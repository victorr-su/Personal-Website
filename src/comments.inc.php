<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>

<?php
function setComments($connect){
    if (isset($_POST ['commentSubmit'])){
        $uid = $_POST['uid'];
        $date = $_POST['date'];
        $message = $_POST['message'];

        $sql = "INSERT INTO comments(uid, date, message) 
        VALUES ('$uid', '$date', '$message')";
        $result = $connect->query($sql);
    }
}

function getComments($connect){
    $sql = "SELECT * FROM comments";
    $result = $connect->query($sql);
    while($row = $result ->fetch_assoc()){
        echo "<div class = 'commentBoxContainer'>
        <div class = 'commentBox'><p>";
            echo $row['uid']."<br>";
            echo $row['date']."<br><br>";
            echo nl2br($row['message']);
        echo "</p></div></div>";
    }
}
