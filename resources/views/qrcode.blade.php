<?php
use Illuminate\Support\Facades\Http;

$apiKey = 'W1ZedYxwe6zsOlAYsyiVYTSI3aGUU31rmiR2JVcCrYbzrFTx8T3W1foQ9TW0zsz_';
$frameName = 'no-frame';
$qrCodeText = 'https://www.qr-code-generator.com/';

$response = Http::withHeaders([
    'Api-Key' => $apiKey,
])->post("https://api.qr-code-generator.com/v1/create?access-token=$apiKey", [
    'frame_name' => $frameName,
    'qr_code_text' => $qrCodeText,
]);


echo '<div style="width:200px; "><pre>'. $response . '</pre></div>';
