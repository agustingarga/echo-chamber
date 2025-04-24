<?php
function respond($message) {
    $quirks = ["...", "?!", " ~", " lol", " haha"];
    $suffix = $quirks[array_rand($quirks)];
    return "You said: \"$message$suffix\"";
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $input = $_POST['message'] ?? '';
    echo respond($input);
}
?>
<form method="POST">
    <input type="text" name="message" placeholder="Say something..." />
    <button type="submit">Send</button>
</form>
