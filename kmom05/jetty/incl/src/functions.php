<?php

function getLoadedFiles()
{
    return count(get_included_files());
}

function getPageLoadTime()
{
    $ts1 = $_SERVER["REQUEST_TIME_FLOAT"];
    $ts2 = microtime(true);
    $diff = $ts2 - $ts1;
    return round($diff*1000, 2);
}

function memoryUsage()
{
    $memoryMax = memory_get_peak_usage(true);
    $memoryCurrent = memory_get_usage(true);
    $memoryLimit = ini_get("memory_limit");
    return "Maximum memory: " . $memoryMax . " bytes." . " | " . "Current memory: " . $memoryCurrent . " bytes." . " | " . "Memory limit: " . $memoryLimit;
}

function connectToDatabase($dsn)
{
    try {
        $db = new PDO($dsn);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Failed to connect to the database using DSN:<br>$dsn<br>";
        throw $e;
    }
    return $db;
}

function printJettyResultsettoHTMLTable($res)
{
    $rows = "";
    foreach ($res as $row) {
        $rows .= "<tr>";
        $rows .= "<td>{$row['position']}</td>";
        $rows .= "<td>{$row['boatType']}</td>";
        $rows .= "<td>{$row['boatEngine']}</td>";
        $rows .= "<td>{$row['boatLength']}</td>";
        $rows .= "<td>{$row['boatWidth']}</td>";
        $rows .= "<td>{$row['ownerName']}</td>";
        $rows .= "<td><a href='jetty.php?page=B&position={$row['position']}'>Detaljer</a></td>";
        $rows .= "</tr>\n";
    }
    echo <<<EOD
    <table>
    <thead>
    <tr>
        <th>position</th>
        <th>boatType</th>
        <th>boatEngine</th>
        <th>boatLength</th>
        <th>boatWidth</th>
        <th>ownerName</th>
        <th>Detaljer</th>
    </tr>
    </thead>
    <tbody>
    $rows
    </tbody>
    </table>
EOD;
}

function printJettyDetails($res)
{
    $boat = $res[0];

    $details = "";
    $details .= "<tr><td>Position</td><td>{$boat['position']}</td></tr>";
    $details .= "<tr><td>boatType</td><td>{$boat['boatType']}</td></tr>";
    $details .= "<tr><td>boatEngine</td><td>{$boat['boatEngine']}</td></tr>";
    $details .= "<tr><td>boatLength</td><td>{$boat['boatLength']}</td></tr>";
    $details .= "<tr><td>boatWidth</td><td>{$boat['boatWidth']}</td></tr>";
    $details .= "<tr><td>ownerName</td><td>{$boat['ownerName']}</td></tr>";

    echo <<<EOD
    <table>
    <thead>
    <tr>
        <th>Detalj</th>
        <th>Data</th>
    </tr>
    </thead>
    <tbody>
    $details
    </tbody>
    </table>
EOD;
}
