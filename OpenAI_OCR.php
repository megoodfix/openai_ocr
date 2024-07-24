<?php
session_start();

$imageURL = $_POST['imageURL'];

//$imageURL = "https://lifeeat.one/Application/apiimages/testocr6.png";
// Specify the log file path
$logFile = 'erroropenai_ocr.log';
// Enable error logging
ini_set('log_errors', 1);
ini_set('error_log', $logFile); // Direct errors to log file

$openai_api_key = 'xxxxxxxxxxxxxxxxx'; // Replace with your actual OpenAI API key
$api_endpoint = 'https://api.openai.com/v1/chat/completions';

$data = [
    'model' => 'gpt-4-vision-preview',
    'messages' => [
        [
            'role' => 'user',
            'content' => [
                [
                    'type' => 'text',
                    'text' => "'" . getString("return the text, like OCR") . "'"
                    //'text' => "return the text inside the image, like OCR"

                ],
                [
                    'type' => 'image_url',
                    'image_url' => [
                        'url' => $imageURL
                    ]
                ]
            ]
        ]
    ],
    'max_tokens' => 2048
];

// Initialize cURL session
$ch = curl_init($api_endpoint);

// Set cURL options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Authorization: Bearer ' . $openai_api_key
]);

// Execute the cURL session and capture the response
$response = curl_exec($ch);
error_log($response);
// Check for errors in the cURL session
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
} else {
    // If no errors, print the response
    echo $response;
}

// Close the cURL session
curl_close($ch);
?>
