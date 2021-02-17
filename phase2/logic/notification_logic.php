<?php
include('connection.php');
$sql = "UPDATE user SET new_notification='false' WHERE username='$_SESSION[username]'; ";
$query = mysqli_query($link, $sql);
$sql = "SELECT * FROM user WHERE username='$_SESSION[username]';";
$query = mysqli_query($link, $sql);
$result_user = mysqli_fetch_assoc($query);
$info_json = ["progressInpercent" => $result_user['progress'], "barProgress" => $result_user['courseProgress'], 'new_notification' => 'false'];
$open_json = fopen("json/$_SESSION[active_user_key]_progress.json", "w");
$write_json = fwrite($open_json, json_encode($info_json), JSON_PRETTY_PRINT);
fclose($open_json);
$username = $_SESSION['username'];
$sql = "SELECT * FROM notifications WHERE specifically_for='$username' OR specifically_for='' ORDER BY milliseconds DESC;";
$query = mysqli_query($link, $sql);
$result = mysqli_num_rows($query);
$empty_msg = '';
$notification_container = '';
if ($result == 0) {
    $empty_msg = "<span class='empty-msg'>No Notifications yet</span>";
} else {
    $notifications = mysqli_fetch_all($query);

    foreach ($notifications as $notification) {
        $notification[2] = strtoupper($notification[2]);
        $notification_container .= "
    <div class='notification-card'>
    <h3> $notification[2]</h3>
    <p>$notification[3]</p>
    </div>
    ";
    }
}

