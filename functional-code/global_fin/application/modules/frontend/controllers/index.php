<?php 
 ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
require __DIR__ . '/vendor/autoload.php';

$client = new \Google_Client();

$client->setApplicationName('Google Sheets and PHP');

$client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);

$client->setAccessType('offline');

$client->setAuthConfig(__DIR__ . '/Zytrio-b8f36a081698.json');

$service = new Google_Service_Sheets($client);

  $spreadsheetId = "1PvhiYH8vCi-lNX5wmwjoUO6eC0ePlNoqBz02U_WCITk"; //It is present in your URL

  $get_range = 'Sheet1';

  $response = $service->spreadsheets_values->get($spreadsheetId, $get_range);

       $values = $response->getValues();

     $no =  count($values)+1;

   $update_range = "Sheet1!A".$no.":E".$no.""; 
   $values = [[1,2,3,4,5]];
   $body = new Google_Service_Sheets_ValueRange([

      'values' => $values

    ]);

    $params = [

      'valueInputOption' => 'RAW'

    ];

    $update_sheet = $service->spreadsheets_values->update($spreadsheetId, $update_range, $body, $params);

 