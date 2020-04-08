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

function sessionDestroy()
{
    $_SESSION = [];
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(
            session_name(),
            '',
            time() - 42000,
            $params["path"],
            $params["domain"],
            $params["secure"],
            $params["httponly"]
        );
    }
    session_destroy();
}
