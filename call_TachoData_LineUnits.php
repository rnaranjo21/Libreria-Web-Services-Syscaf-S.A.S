<?php
include("Soap_header_token_TachoDataprocesses.php");
include('call_core_orgid.php');
try {
$param_TachoData_LineUnits=array("VehicleID"=>871);
$response_TachoData_LineUnits=$TachoDataProcessesWs->__soapCall('GetVehicleTachoLineUnits',array($param_TachoData_LineUnits));
echo '<pre>';
//print_r($response_TachoData_LineUnits);

$result_TachoData_LineUnits=$response_TachoData_LineUnits->GetVehicleTachoLineUnitsResult->ArrayOfString;
for ($i = 0; $i < count($result_TachoData_LineUnits); $i++) {
$result_TachoData_LineUnitsF2=$result_TachoData_LineUnits[$i]->string[0];
echo "<br>";
$result_TachoData_LineUnits2=$result_TachoData_LineUnits[$i]->string[1];

print_r($result_TachoData_LineUnitsF2);
print "\t";
print_r($result_TachoData_LineUnits2);
}
} catch (SoapFault $fault) {
    trigger_error("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
}
?>