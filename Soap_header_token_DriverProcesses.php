<?php
include("client_DriverProcessesWS.php");
include("call_core.php");
$AssetData="http://www.omnibridge.com/SDKWebServices/AssetData";//vehicles , drivers ,sites ,trips,subtrips,tacho data, trailers , vehicle configration,recorded events
$header_AssetData[] = new SoapHeader($AssetData,'TokenHeader',$authHeader, false);
$salida=$DriverProcessesWS ->__setSoapHeaders($header_AssetData);
?>