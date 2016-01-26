<?php
include("client_VehicleDeviceProcesses.php");
include("call_core.php");
$AssetData="http://www.mixtelematics.com/WebServices/UnitConfiguration";
$header_AssetData[] = new SoapHeader($AssetData,'TokenHeader',$authHeader, false);
$salida=$VehicleDeviceProcessWS->__setSoapHeaders($header_AssetData);
?>