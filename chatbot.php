<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);
    echo json_encode(["error" => "Method Not Allowed"]);
    exit();
}

session_start();

// Tumhari API key replace karo
$api_key = "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";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // User input ko validate aur sanitize karo
    if (isset($_POST["message"])) {
        $user_input = htmlspecialchars($_POST["message"], ENT_QUOTES, 'UTF-8');
    } else {
        echo json_encode(["error" => "Koi message provide nahi kiya"]);
        exit();
    }

    // Request payload create karo
    $data = [
        "model" => "gpt-3.5-turbo",
        "messages" => [
            ["role" => "system", "content" => "Tum ek AI Assistant ho. Users ke queries ka response do."],
            ["role" => "user", "content" => $user_input]
        ]
    ];

    // cURL initialize karo
    $ch = curl_init("https://api.openai.com/v1/chat/completions");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Content-Type: application/json",
        "Authorization: Bearer $api_key"
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

    // Request execute karo
    $response = curl_exec($ch);
    
    // cURL errors check karo
    if ($response === false) {
        echo json_encode(["error" => "Curl error: " . curl_error($ch)]);
        curl_close($ch);
        exit();
    }

    // HTTP status code lo
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    // API response errors check karo
    if ($http_code !== 200) {
        echo json_encode(["error" => "API Error: $http_code", "response" => $response]);
        exit();
    }

    // Response parse karo aur return karo
    $response_data = json_decode($response, true);
    if (isset($response_data["choices"][0]["message"]["content"])) {
        echo json_encode(["message" => $response_data["choices"][0]["message"]["content"]]);
    } else {
        echo json_encode(["error" => "Invalid response from API"]);
    }
}
?>
