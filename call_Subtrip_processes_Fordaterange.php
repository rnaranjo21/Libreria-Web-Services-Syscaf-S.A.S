<?php
include("Soap_header_token_Subprocesses.php");
include('call_core_orgid.php');
try {

$StartDateTime='2016-01-14T00:00:00';
$EndDateTime='2016-01-14T23:59:59';
$param_SubTrip_ForDaterange=array("StartDateTime"=>$StartDateTime ,"EndDateTime"=>$EndDateTime);
$response_SubTrip_ForDaterange =$SubTripProcessesWS ->__soapCall('GetSubTripsForDateRange',array($param_SubTrip_ForDaterange));
echo '<pre>';
//print_r($response_SubTrip_ForDaterange);
$result_subTrip_driver_ForDaterange=$response_SubTrip_ForDaterange->GetSubTripsForDateRangeResult->SubTrip;
for($i=0;$i<count($result_subTrip_driver_ForDaterange);$i++){
$result_subTrip_driver_TripID=$result_subTrip_driver_ForDaterange[$i]->TripID;
$result_subTrip_driver_Seq=$result_subTrip_driver_ForDaterange[$i]->Seq;
$result_subTrip_driver_VehicleID=$result_subTrip_driver_ForDaterange[$i]->VehicleID;
$result_subTrip_driver_Depart=$result_subTrip_driver_ForDaterange[$i]->Depart;
$date_Depart = new DateTime($result_subTrip_driver_Depart);
$result_subTrip_driver_Halt=$result_subTrip_driver_ForDaterange[$i]->Halt;
$date_Halt = new DateTime($result_subTrip_driver_Halt);
$result_subTrip_driver_TripDistance=$result_subTrip_driver_ForDaterange[$i]->TripDistance;
$result_subTrip_driver_Odometer=$result_subTrip_driver_ForDaterange[$i]->Odometer;
$result_subTrip_driver_MaxSpeed=$result_subTrip_driver_ForDaterange[$i]->MaxSpeed;
$result_subTrip_driver_SpeedTime=$result_subTrip_driver_ForDaterange[$i]->SpeedTime;
$result_subTrip_driver_SpeedOccurs=$result_subTrip_driver_ForDaterange[$i]->SpeedOccurs;
$result_subTrip_driver_SpeedScore=$result_subTrip_driver_ForDaterange[$i]->SpeedScore;
$result_subTrip_driver_MaxBrake=$result_subTrip_driver_ForDaterange[$i]->MaxBrake;
$result_subTrip_driver_BrakeTime=$result_subTrip_driver_ForDaterange[$i]->BrakeTime;
$result_subTrip_driver_BrakeOccurs=$result_subTrip_driver_ForDaterange[$i]->BrakeOccurs;
$result_subTrip_driver_BrakeScore=$result_subTrip_driver_ForDaterange[$i]->BrakeScore;
$result_subTrip_driver_MaxAccel=$result_subTrip_driver_ForDaterange[$i]->MaxAccel;
$result_subTrip_driver_AccelTime=$result_subTrip_driver_ForDaterange[$i]->AccelTime;
$result_subTrip_driver_AccelOccurs=$result_subTrip_driver_ForDaterange[$i]->AccelOccurs;
$result_subTrip_driver_AccelScore=$result_subTrip_driver_ForDaterange[$i]->AccelScore;
$result_subTrip_driver_MaxRPM=$result_subTrip_driver_ForDaterange[$i]->MaxRPM;
$result_subTrip_driver_RPMTime=$result_subTrip_driver_ForDaterange[$i]->RPMTime;
$result_subTrip_driver_RPMOccurs=$result_subTrip_driver_ForDaterange[$i]->RPMOccurs;
$result_subTrip_driver_RPMScore=$result_subTrip_driver_ForDaterange[$i]->RPMScore;
$result_subTrip_driver_GBTime=$result_subTrip_driver_ForDaterange[$i]->GBTime;
$result_subTrip_driver_GBScore=$result_subTrip_driver_ForDaterange[$i]->GBScore;
$result_subTrip_driver_ExIdleTime=$result_subTrip_driver_ForDaterange[$i]->ExIdleTime;
$result_subTrip_driver_ExIdleOccurs=$result_subTrip_driver_ForDaterange[$i]->ExIdleOccurs;
$result_subTrip_driver_ExIdleScore=$result_subTrip_driver_ForDaterange[$i]->ExIdleScore;
$result_subTrip_driver_NIdleTime=$result_subTrip_driver_ForDaterange[$i]->NIdleTime;
$result_subTrip_driver_NIdleOccurs=$result_subTrip_driver_ForDaterange[$i]->NIdleOccurs;
$result_subTrip_driver_Litres=$result_subTrip_driver_ForDaterange[$i]->Litres;
$result_subTrip_driver_PulseParameterID=$result_subTrip_driver_ForDaterange[$i]->PulseParameterID;
$result_subTrip_driver_PulseValue=$result_subTrip_driver_ForDaterange[$i]->PulseValue;
$result_subTrip_driver_StartGPSID=$result_subTrip_driver_ForDaterange[$i]->StartGPSID;
$result_subTrip_driver_EndGPSID=$result_subTrip_driver_ForDaterange[$i]->EndGPSID;
$result_subTrip_driver_StartEngineSeconds=$result_subTrip_driver_ForDaterange[$i]->StartEngineSeconds;
$result_subTrip_driver_EndEngineSeconds=$result_subTrip_driver_ForDaterange[$i]->EndEngineSeconds;
$result_subTrip_driver_StandingTime=$result_subTrip_driver_ForDaterange[$i]->StandingTime;

print_r("TripID.".$result_subTrip_driver_TripID);
print "\t";
print_r("Seq.".$result_subTrip_driver_Seq);
print "\t";
print_r("VehicleID.".$result_subTrip_driver_VehicleID);
print "\t";
print "Depart.".$date_Depart->format('d/m/Y (H:i:s)');
print "\t";
print "Halt.".$date_Halt->format('d/m/Y (H:i:s)');
print "\t";
print_r("TripDistance.".$result_subTrip_driver_TripDistance);
print "\t";
print_r("Odometer.".$result_subTrip_driver_Odometer);
print "\t";
print_r("MaxSpeed.".$result_subTrip_driver_MaxSpeed);
print "\t";
print_r("SpeedTime.".$result_subTrip_driver_SpeedTime);
print "\t";
print_r("SpeedOccurs.".$result_subTrip_driver_SpeedOccurs);
print "\t";
print_r("SpeedScore.".$result_subTrip_driver_SpeedScore);
print "\t";
print_r("MaxBrake.".$result_subTrip_driver_MaxBrake);
print "\t";
print_r("BrakeTime.".$result_subTrip_driver_BrakeTime);
print "\t";
print_r("BrakeOccurs.".$result_subTrip_driver_BrakeOccurs);
print "\t";
print_r("BrakeScore.".$result_subTrip_driver_BrakeScore);
print "\t";
print_r("MaxAccel.".$result_subTrip_driver_MaxAccel);
print "\t";
print_r("AccelTime.".$result_subTrip_driver_AccelTime);
print "\t";
print_r("AccelOccurs.".$result_subTrip_driver_AccelOccurs);
print "\t";
print_r("AccelScore.".$result_subTrip_driver_AccelScore);
print "\t";
print_r("MaxRPM.".$result_subTrip_driver_MaxRPM);
print "\t";
print_r("RPMTime.".$result_subTrip_driver_RPMTime);
print "\t";
print_r("RPMOccurs.".$result_subTrip_driver_RPMOccurs);
print "\t";
print_r("RPMScore.".$result_subTrip_driver_RPMScore);
print "\t";
print_r("GBTime.".$result_subTrip_driver_GBTime);
print "\t";
print_r("GBScore.".$result_subTrip_driver_GBScore);
print "\t";
print_r("ExIdleTime.".$result_subTrip_driver_ExIdleTime);
print "\t";
print_r("ExIdleOccurs.".$result_subTrip_driver_ExIdleOccurs);
print "\t";
print_r("ExIdleScore.".$result_subTrip_driver_ExIdleScore);
print "\t";
print_r("NIdleTime.".$result_subTrip_driver_NIdleTime);
print "\t";
print_r("NIdleOccurs.".$result_subTrip_driver_NIdleOccurs);
print "\t";
print_r("Litres.".$result_subTrip_driver_Litres);
print "\t";
print_r("PulseParameterID.".$result_subTrip_driver_PulseParameterID);
print "\t";
print_r("PulseValue.".$result_subTrip_driver_PulseValue);
print "\t";
print_r("StartGPSID.".$result_subTrip_driver_StartGPSID);
print "\t";
print_r("EndGPSID.".$result_subTrip_driver_EndGPSID);
print "\t";
print_r("StartEngineSeconds.".$result_subTrip_driver_StartEngineSeconds);
print "\t";
print_r("EndEngineSeconds.".$result_subTrip_driver_EndEngineSeconds);
print "\t";
print_r("StandingTime.".$result_subTrip_driver_StandingTime);
print "\t";
echo '<br>';
}
} catch (SoapFault $fault) {
    trigger_error("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
}
?>