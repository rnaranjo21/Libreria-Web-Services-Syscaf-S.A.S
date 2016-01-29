<?php
include("Soap_header_token_VehicleConfigurationProcess.php");
include('call_core_orgid.php');
try {
$param_CommissioningHistoryList=array("vehicleId"=>921);
$response_CommissioningHistoryList =$VehicleConfigurationProcessWS->__soapCall('GetCommissioningHistoryList',array($param_CommissioningHistoryList));
} catch (SoapFault $fault) {
    trigger_error("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
}
echo '<pre>';
print_r($response_CommissioningHistoryList);
?>