<?php
include("client_EventDescriptionProcesesWS.php");
include("call_core.php");
$AssetData="http://www.mixtelematics.com/WebServices/UnitConfiguration";
$header_AssetData[] = new SoapHeader($AssetData,'TokenHeader',$authHeader, false);
$salida=$EventDescriptionProcessWS ->__setSoapHeaders($header_AssetData);
?>