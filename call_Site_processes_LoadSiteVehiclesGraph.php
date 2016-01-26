<?php
include("Soap_header_token_Siteprocesses.php");
include('call_core_orgid.php');
try {
$param_Site_DriverGraph=array("TokenHeader");
$response_Site_DriverGraph=$SiteProcessesWS ->__soapCall('LoadSiteVehiclesGraph',array($param_Site_DriverGraph));
echo '<pre>';
} catch (SoapFault $fault) {
    trigger_error("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
}
print_r($response_Site_DriverGraph);
?>
