<?php
include("Soap_header_token_DriverProcesses.php");
include('call_core_orgid.php');
try {

$param_Driver_reporting_group=array("GroupID"=>1);
$response_Driver_reporting_group =$DriverProcessesWS ->__soapCall('GetDriverReportingGroup',array($param_Driver_reporting_group));
} catch (SoapFault $fault) {
    trigger_error("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
}
echo '<pre>';
print_r($response_Driver_reporting_group);
?>