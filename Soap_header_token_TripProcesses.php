<?php
include("client_TripProcessesWS.php");
include("call_core.php");
$AssetData="http://www.omnibridge.com/SDKWebServices/AssetData";//vehicles , drivers ,sites ,trips,subtrips,tacho data, trailers , vehicle configration,recorded events
//cabecera token en consulta funcion Assestdata client vehicleProcessWS
$header_AssetData[] = new SoapHeader($AssetData,'TokenHeader',$authHeader, false);
$salida=$TripsProcessesWS->__setSoapHeaders($header_AssetData);
?>