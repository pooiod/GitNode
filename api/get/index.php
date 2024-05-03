<?php
    $repoParam = $_GET['rep'];
    list($repoOwner, $repoName) = explode('/', $repoParam);

    $branch = 'master';
    $zipUrl = "https://github.com/$repoOwner/$repoName/archive/$branch.zip";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $zipUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    if ($httpCode == 200) {
        // Set appropriate headers for downloading the zip file
        header("Content-Type: application/zip");
        header("Content-Disposition: attachment; filename={$repoName}-{$branch}.zip");
        echo $response;
    } else {
        echo "$httpCode";
    }

    curl_close($ch);
?>
