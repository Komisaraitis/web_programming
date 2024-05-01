<?php
require 'vendor/autoload.php';
error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);


$client = new \Google_Client();
$client->setApplicationName('lab4');
$client->setScopes(['https://www.googleapis.com/auth/spreadsheets']);
$client->setAccessType('offline');
$client->setAuthConfig('winged-math-422013-f2-2a46a5bdfeb0.json');

$service = new \Google_Service_Sheets($client);

$spreadsheetId = '1P6u7dIY8mc5XVH5LHhbdqXE98zhQcTrDFVvPJx3HShg';

if ('POST' === $_SERVER['REQUEST_METHOD'])
{
    $category = $_POST['categories'] ?? '';
    $title = $_POST['title'] ?? '';
    $email = $_POST['email'] ?? '';
    $description = $_POST['text'] ?? '';
    $data = [
        [$category, $title, $email, $description]
    ];
}

$range = 'a1';

$body = new Google_Service_Sheets_ValueRange([
    'values' => $data
]);
$params = [
    'valueInputOption' => 'RAW'
];

$result = $service->spreadsheets_values->append($spreadsheetId, $range, $body, $params);

header('Location: index.php');
exit();
?>