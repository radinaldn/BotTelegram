<?php
/* -----------------------------------------------------
Simple PHP script for Sending Telegram Bot Message
------------------------------------------------------ */
function sendMessage($telegram_id, $message_text, $secret_token) {
    $url = "https://api.telegram.org/" . $secret_token . "/sendMessage?parse_mode=markdown&chat_id=" . $telegram_id;
    $url = $url . "&text=" . urlencode($message_text);
    $ch = curl_init();
    $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true
    );
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    curl_close($ch);
}
/*----------------------
only basic POST method :
-----------------------*/
$telegram_id = $_POST ['telegram_id'];
$message_text = $_POST ['message_text'];
/*--------------------------------
Isi TOKEN dibawah ini: 
--------------------------------*/
$secret_token = "bot606487592:AAENXJkGMImCJe7vX1Dl-j7xT6ng6ClOgL4";
sendMessage($telegram_id, $message_text, $secret_token);
echo "<script>alert('Pesan berhasil terkirim!'); window.location.href = './';</script>";
?>
