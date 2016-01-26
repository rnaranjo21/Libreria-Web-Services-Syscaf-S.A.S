<?php
include("client_SiteProcessesWS.php");
include("call_core.php");
$AssetData="http://www.omnibridge.com/SDKWebServices/AssetData";//vehicles , drivers ,sites ,trips,subtrips,tacho data, trailers , vehicle configration,recorded events
//cabecera token en consulta funcion Assestdata client vehicleProcessWS
$header_AssetData[] = new SoapHeader($AssetData,'TokenHeader',$authHeader, false);
$salida=$SiteProcessesWS->__setSoapHeaders($header_AssetData);
?>