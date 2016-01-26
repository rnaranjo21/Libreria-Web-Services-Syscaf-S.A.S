<?php
include("Soap_header_token_TachoDataprocesses.php");
include('call_core_orgid.php');
try {
$param_TachoData_Description=array("VehicleID"=>871,"NotConnectedString"=>"");
$response_TachoData_Description=$TachoDataProcessesWs->__soapCall('GetVehicleTachoLineDescriptions',array($param_TachoData_Description));
echo '<pre>';
//print_r($response_TachoData_Description);

$result_TachoData_Description=$response_TachoData_Description->GetVehicleTachoLineDescriptionsResult->ArrayOfString;
for ($i = 0; $i < count($result_TachoData_Description); $i++) {
$result_TachoData_LineUnitsF2=$result_TachoData_Description[$i]->string[0];
echo "<br>";
$result_TachoData_LineUnits2=$result_TachoData_Description[$i]->string[1];
} catch (SoapFault $fault) {
    trigger_error("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
}
print_r($result_TachoData_LineUnitsF2);
print "\t";
print_r($result_TachoData_LineUnits2);
}
?>