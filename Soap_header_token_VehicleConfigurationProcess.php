<?php
include("client_VehicleConfigurationProcessesWS.php");
include("call_core.php");
$AssetData="http://www.mixtelematics.com/WebServices/UnitConfiguration";
$header_AssetData[] = new SoapHeader($AssetData,'TokenHeader',$authHeader, false);
$salida=$VehicleConfigurationProcessWS->__setSoapHeaders($header_AssetData);
?>