<?php
include("client_DataSheduleWS.php");
include("call_core.php");
$AssetData="http://www.omnibridge.com/SDKWebServices/Positioning";
$header_AssetData[] = new SoapHeader($AssetData,'TokenHeader',$authHeader, false);
$salida=$DataScheduleWS ->__setSoapHeaders($header_AssetData);
?>