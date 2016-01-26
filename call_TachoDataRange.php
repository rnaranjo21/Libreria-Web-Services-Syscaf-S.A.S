<?php
include("Soap_header_token_TachoDataprocesses.php");
include('call_core_orgid.php');
try {
$StartDateTime='2015-12-07T00:00:00';
$EndDateTime='2015-12-07T11:59:59';
$param_TachoData_range=array("VehicleID"=>871,"Start"=>$StartDateTime ,"End"=>$EndDateTime);
$response_TachoData_range=$TachoDataProcessesWs->__soapCall('GetVehicleCalibratedTachoRange',array($param_TachoData_range));
echo '<pre>';
//print_r($response_TachoData_range);
$result_TachoData_range=$response_TachoData_range->GetVehicleCalibratedTachoRangeResult->TachoInterval;
for($i=0;$i<count($result_TachoData_range);$i++){
$result_TachoData_range_Time=$result_TachoData_range[$i]->Time;
$date_Tacho_Time = new DateTime($result_TachoData_range_Time);
$result_TachoData_range_Speed=$result_TachoData_range[$i]->Speed;
$result_TachoData_range_RPM=$result_TachoData_range[$i]->RPM;
$result_TachoData_range_F3=$result_TachoData_range[$i]->F3;
$result_TachoData_range_Odometer=$result_TachoData_range[$i]->Odometer;
$result_TachoData_range_I1=$result_TachoData_range[$i]->I1;
$result_TachoData_range_I2=$result_TachoData_range[$i]->I2;
$result_TachoData_range_I3=$result_TachoData_range[$i]->I3;
$result_TachoData_range_I4=$result_TachoData_range[$i]->I4;
} catch (SoapFault $fault) {
    trigger_error("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
}
print_r("Time.".$date_Tacho_Time->format('d/m/Y (H:i:s)'));
print "\t";
print_r("Speed.".$result_TachoData_range_Speed);
print "\t";
print_r("RPM.".$result_TachoData_range_RPM);
print "\t";
print_r("F3.".$result_TachoData_range_F3);
print "\t";
print_r("Odometer.".$result_TachoData_range_Odometer);
print "\t";

print_r("I1.".$result_TachoData_range_I1);
print "\t";
print_r("I2.".$result_TachoData_range_I2);
print "\t";
print_r("I3.".$result_TachoData_range_I3);
print "\t";
print_r("I4.".$result_TachoData_range_I4);
print "\t";

echo '<br>';

}
?>