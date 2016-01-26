<?php
include("Soap_header_token_VehicleDeviceProcess.php");
include('call_core_orgid.php');
try {
$param_VehicleBaseCalibrationInfo=array("vehicleId"=>835);
$response_VehicleBaseCalibrationInfo=$VehicleDeviceProcessWS->__soapCall('GetVehicleBaseCalibrationInfo',array($param_VehicleBaseCalibrationInfo));
echo '<pre>';
//print_r($response_VehicleBaseCalibrationInfo);

$result_VehicleBaseCalibrationInfo=$response_VehicleBaseCalibrationInfo->GetVehicleBaseCalibrationInfoResult;

$result_VehicleBaseCalibrationInfo_CalibrationDate=$result_VehicleBaseCalibrationInfo->SpeedCalibration->CalibrationDate;
$CalibrationDate = new DateTime($result_VehicleBaseCalibrationInfo_CalibrationDate);
$result_VehicleBaseCalibrationInfo_CalibrationPulse=$result_VehicleBaseCalibrationInfo->SpeedCalibration->CalibrationPulse;
$result_VehicleBaseCalibrationInfo_MovingSpeed=$result_VehicleBaseCalibrationInfo->SpeedCalibration->MovingSpeed;
$result_VehicleBaseCalibrationInfo_SpeedPower=$result_VehicleBaseCalibrationInfo->SpeedCalibration->SpeedPower;


$result_VehicleBaseCalibrationInfo_CalibrationDate1=$result_VehicleBaseCalibrationInfo->RpmCalibration->CalibrationDate;
$CalibrationDate1 = new DateTime($result_VehicleBaseCalibrationInfo_CalibrationDate1);
$result_VehicleBaseCalibrationInfo_CalibrationPulse1=$result_VehicleBaseCalibrationInfo->RpmCalibration->CalibrationPulse;
$result_VehicleBaseCalibrationInfo_MaximumRPMThreshold=$result_VehicleBaseCalibrationInfo->RpmCalibration->MaximumRPMThreshold;
} catch (SoapFault $fault) {
    trigger_error("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
}
print "CalibrationDate Speed.".$CalibrationDate->format('d/m/Y (H:i:s)');
print "\t";
print_r("CalibrationPulse SPEED.".$result_VehicleBaseCalibrationInfo_CalibrationPulse);
print "\t";       
print_r("MovingSpeed.".$result_VehicleBaseCalibrationInfo_MovingSpeed);
print "\t";    
print_r("SpeedPower.".$result_VehicleBaseCalibrationInfo_SpeedPower);
print "\t";  

print_r("CalibrationDate Rpm.".$result_VehicleBaseCalibrationInfo_CalibrationDate1);
print "\t";
print_r("CalibrationPulse RPM.".$result_VehicleBaseCalibrationInfo_CalibrationPulse1);
print "\t"; 
print_r("MaximumRPMThreshold.".$result_VehicleBaseCalibrationInfo_MaximumRPMThreshold);
print "\t";     
?>
