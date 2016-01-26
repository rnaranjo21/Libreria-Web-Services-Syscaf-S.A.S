<?php
include("client_LocationProcessesWS.php");
include("call_core.php");
$AssetData="http://www.omnibridge.com/SDKWebServices/Mapping";
$header_AssetData[] = new SoapHeader($AssetData,'TokenHeader',$authHeader, false);
$salida=$LocationProcessesWS ->__setSoapHeaders($header_AssetData);
?>