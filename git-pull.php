<?php

$repoOwner = 'ShaikhFahim1';
$repoName = '23gca'; // Remove the GitHub URL from the repository name
$branch = 'main';

$accessToken = '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';

// GitHub API endpoint for creating a new deployment
$apiUrl = "https://api.github.com/repos/$repoOwner/$repoName/deployments";

// Prepare data for the API request
$data = [
    'ref' => $branch,
    'auto_merge' => false,
];

// Prepare headers for the API request, including the Authorization header with your access token
$headers = [
    'Authorization: Bearer ' . $accessToken, // Use 'Bearer' instead of 'token'
    'Accept: application/vnd.github.v3+json',
    'Content-Type: application/json',
    'User-Agent: YourAppName', // Add a User-Agent header as per GitHub's requirements
];

// Initialize cURL session
$ch = curl_init($apiUrl);

// Set cURL options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

// Execute cURL session and get the response
$response = curl_exec($ch);

// Check for errors
if (curl_errno($ch)) {
    echo 'Error: ' . curl_error($ch);
} else {
    // Decode the JSON response
    $responseData = json_decode($response, true);

    // Check if the deployment was successful
    if (isset($responseData['id'])) {
        echo 'Deployment successful. Deployment ID: ' . $responseData['id'];
    } else {
        echo 'Error in deployment. Response: ' . $response;
    }
}

// Close cURL session
curl_close($ch);
?>
