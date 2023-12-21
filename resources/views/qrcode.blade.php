<?php
use Illuminate\Support\Facades\Http;

$api_key = 'W1ZedYxwe6zsOlAYsyiVYTSI3aGUU31rmiR2JVcCrYbzrFTx8T3W1foQ9TW0zsz_';
$frame_name = 'no-frame';
$image_format = 'SVG';
$response = null;

if (!is_null($_POST)) {
    $qr_code_text = $_POST['qr_code_text'];
    $qr_code_pattern = $_POST['qr_code_pattern'];
    $foreground_color = $_POST['foreground_color'];
    $background_color = $_POST['background_color'];
    $marker_left_inner_color = $_POST['marker_left_inner_color'];
    $marker_left_outer_color = $_POST['marker_left_outer_color'];
    $marker_right_inner_color = $_POST['marker_right_inner_color'];
    $marker_right_outer_color = $_POST['marker_right_outer_color'];
    $marker_bottom_inner_color = $_POST['marker_bottom_inner_color'];
    $marker_bottom_outer_color = $_POST['marker_bottom_outer_color'];
    $marker_template = $_POST['marker_template'];
    
    $response = Http::withHeaders([
        'Api-Key' => $api_key,
        ])->post("https://api.qr-code-generator.com/v1/create?access-token=$api_key", [
        'frame_name' => $frame_name,
        'qr_code_text' => $qr_code_text,
        'image_format' => $image_format,
        'qr_code_pattern' => $qr_code_pattern,
        'foreground_color' => $foreground_color,
        'background_color' => $background_color,
        'marker_left_inner_color' => $marker_left_inner_color,
        'marker_left_outer_color' => $marker_left_outer_color,
        'marker_right_inner_color' => $marker_right_inner_color,
        'marker_right_outer_color' => $marker_right_outer_color,
        'marker_bottom_inner_color' => $marker_bottom_inner_color,
        'marker_bottom_outer_color' => $marker_bottom_outer_color,
        'marker_left_template' => $marker_template,
        'marker_right_template' => $marker_template,
        'marker_bottom_template' => $marker_template
    ]);
    
    if ($response->successful()) {
        echo '<div style="width:500px;"><pre>' . $response . '</pre></div>';
    } else {
        echo "Er is een probleem opgetreden bij het genereren van de QR-code.";
    }
}
?>