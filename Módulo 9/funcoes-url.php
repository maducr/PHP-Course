<?php
// base64_encode e base64_decode
$data = "Teste Funções para URL";
$encodedData = base64_encode($data);
$decodedData = base64_decode($encodedData);
echo "Original Data: $data\n";
echo "Encoded Data: $encodedData\n";
echo "Decoded Data: $decodedData\n\n";

// get_headers
$url = "https://www.example.com";
$headers = get_headers($url);
echo "URL: $url\n";
echo "Headers:\n" . print_r($headers, true) . "\n\n";

// get_meta_tags
$html = file_get_contents($url);
$metaTags = get_meta_tags($url);
echo "HTML content:\n$html\n";
echo "Meta Tags:\n" . print_r($metaTags, true) . "\n\n";

// http_build_query
$params = array(
    'name' => 'John Doe',
    'age' => 25,
    'city' => 'New York'
);
$queryString = http_build_query($params);
echo "Parameters:\n" . print_r($params, true) . "\n";
echo "Query String: $queryString\n\n";

// parse_url
$url = "https://www.example.com/path/page?query=value#fragment";
$parsedUrl = parse_url($url);
echo "Original URL: $url\n";
echo "Parsed URL:\n" . print_r($parsedUrl, true) . "\n\n";

// rawurlencode e rawurldecode
$rawString = "This is a raw string!";
$encodedString = rawurlencode($rawString);
$decodedString = rawurldecode($encodedString);
echo "Original String: $rawString\n";
echo "Encoded String: $encodedString\n";
echo "Decoded String: $decodedString\n\n";

// urldecode e urlencode
$urlEncodedString = "This+is+an+encoded+string%21";
$decodedUrlString = urldecode($urlEncodedString);
$encodedUrlString = urlencode($rawString);
echo "URL Encoded String: $urlEncodedString\n";
echo "Decoded URL String: $decodedUrlString\n";
echo "URL Encoded String: $encodedUrlString\n\n";