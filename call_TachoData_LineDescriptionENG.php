<?php
include("Soap_header_token_TachoDataprocesses.php");
include('call_core_orgid.php');
try {
$param_TachoData_DescriptionENG=array("VehicleID"=>871);
$response_TachoData_DescriptionENG=$TachoDataProcessesWs->__soapCall('GetVehicleTachoLineDescriptionsEng',array($param_TachoData_DescriptionENG));
echo '<pre>';
//print_r($response_TachoData_DescriptionENG);
$result_TachoData_DescriptionENG=$response_TachoData_DescriptionENG->GetVehicleTachoLineDescriptionsEngResult->ArrayOfString;
for ($i = 0; $i < count($result_TachoData_DescriptionENG); $i++) {
$result_TachoData_LineUnitsF2=$result_TachoData_DescriptionENG[$i]->string[0];
echo "<br>";
$result_TachoData_LineUnits2=$result_TachoData_DescriptionENG[$i]->string[1];
} catch (SoapFault $fault) {
    trigger_error("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
}
print_r($result_TachoData_LineUnitsF2);
print "\t";
print_r($result_TachoData_LineUnits2);

}
?>