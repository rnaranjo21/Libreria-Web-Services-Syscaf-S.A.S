<?php
include("client_PositioningWS.php");
include("call_core.php");
$Positioning="http://www.omnibridge.com/SDKWebServices/Positioning";
$header_Positioning[] = new SoapHeader($Positioning,'TokenHeader',$authHeader, false);
$salida=$PositioningWS ->__setSoapHeaders($header_Positioning);

?>