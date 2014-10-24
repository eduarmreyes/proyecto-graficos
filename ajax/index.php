<?php

$sServer = "localhost";
$sUsuario = "root";
$sPassword = "";
$sDB = "db_ale_app_graficos";
$aValues = array();
if (isset($_REQUEST) && isset($_REQUEST["id"])) {
    $oConn = mysql_connect($sServer, $sUsuario, $sPassword);
    mysql_select_db($sDB, $oConn);
    $aValuesPost = $_REQUEST;
    $sSelectQ = "SELECT * "
            . "FROM apg_respuestas r "
            . "WHERE r.id = {$aValuesPost["id"]}";
    $rQuery = mysql_query($sSelectQ, $oConn);
    $aValues = mysql_fetch_array($rQuery, MYSQL_ASSOC);
    echo json_encode($aValues);
} else {
    array_push($aValues, "Error. Please provide ID");
    echo json_encode($aValues);
}
?>