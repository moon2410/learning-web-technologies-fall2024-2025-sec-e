<?php
while ($row = mysqli_fetch_assoc($query)) {
    $unread_count = $row['unread_count'] > 0 ? '<span class="unread-count">' . $row['unread_count'] . '</span>' : '';
    $last_message = $row['last_message'] ?? "No messages yet"; 
    (strlen($last_message) > 28) ? $short_message = substr($last_message, 0, 28) . '...' : $short_message = $last_message;
    ($row['status'] == "Offline now") ? $offline = "offline" : $offline = "";

    $output .= '<a href="chat.php?user_id=' . $row['unique_id'] . '">
                    <div class="content">
                        <img src="controller/images/' . $row['img'] . '" alt="">
                        <div class="details">
                            <span>' . $row['fname'] . " " . $row['lname'] . '</span>
                            <p>' . $short_message . '</p>
                        </div>
                    </div>
                    <div class="status-dot ' . $offline . '"><i class="actstat">o</i>' . $unread_count . '</div>
                </a>';
}
?>
