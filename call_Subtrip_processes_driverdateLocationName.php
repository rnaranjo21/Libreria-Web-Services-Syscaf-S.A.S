<?php
include("Soap_header_token_Subprocesses.php");
include('call_core_orgid.php');
try {
$StartDateTime='2016-01-14T00:00:00';
$EndDateTime='2016-01-14T23:59:59';
$param_SubTrip_driver_Location=array("DriverID"=>9095,"StartDateTime"=>$StartDateTime ,"EndDateTime"=>$EndDateTime);
$response_SubTrip_driver_Location =$SubTripProcessesWS ->__soapCall('GetDriverSubTripsWithLocationNamesInDateRange',array($param_SubTrip_driver_Location));
echo '<pre>';
//print_r($response_SubTrip_driver_Location);
$result_subTrip_driver_Location=$response_SubTrip_driver_Location->GetDriverSubTripsWithLocationNamesInDateRangeResult->SubTripWithLocationNames;

for($i=0;$i<count($result_subTrip_driver_Location);$i++){
$result_subTrip_driver_TripID=$result_subTrip_driver_Location[$i]->SubTrip->TripID;
$result_subTrip_driver_Seq=$result_subTrip_driver_Location[$i]->SubTrip->Seq;
$result_subTrip_driver_VehicleID=$result_subTrip_driver_Location[$i]->SubTrip->VehicleID;
$result_subTrip_driver_Depart=$result_subTrip_driver_Location[$i]->SubTrip->Depart;
$date_Depart = new DateTime($result_subTrip_driver_Depart);
$result_subTrip_driver_Halt=$result_subTrip_driver_Location[$i]->SubTrip->Halt;
$date_Halt = new DateTime($result_subTrip_driver_Halt);
$result_subTrip_driver_TripDistance=$result_subTrip_driver_Location[$i]->SubTrip->TripDistance;
$result_subTrip_driver_Odometer=$result_subTrip_driver_Location[$i]->SubTrip->Odometer;
$result_subTrip_driver_MaxSpeed=$result_subTrip_driver_Location[$i]->SubTrip->MaxSpeed;
$result_subTrip_driver_SpeedTime=$result_subTrip_driver_Location[$i]->SubTrip->SpeedTime;
$result_subTrip_driver_SpeedOccurs=$result_subTrip_driver_Location[$i]->SubTrip->SpeedOccurs;
$result_subTrip_driver_SpeedScore=$result_subTrip_driver_Location[$i]->SubTrip->SpeedScore;
$result_subTrip_driver_MaxBrake=$result_subTrip_driver_Location[$i]->SubTrip->MaxBrake;
$result_subTrip_driver_BrakeTime=$result_subTrip_driver_Location[$i]->SubTrip->BrakeTime;
$result_subTrip_driver_BrakeOccurs=$result_subTrip_driver_Location[$i]->SubTrip->BrakeOccurs;
$result_subTrip_driver_BrakeScore=$result_subTrip_driver_Location[$i]->SubTrip->BrakeScore;
$result_subTrip_driver_MaxAccel=$result_subTrip_driver_Location[$i]->SubTrip->MaxAccel;
$result_subTrip_driver_AccelTime=$result_subTrip_driver_Location[$i]->SubTrip->AccelTime;
$result_subTrip_driver_AccelOccurs=$result_subTrip_driver_Location[$i]->SubTrip->AccelOccurs;
$result_subTrip_driver_AccelScore=$result_subTrip_driver_Location[$i]->SubTrip->AccelScore;
$result_subTrip_driver_MaxRPM=$result_subTrip_driver_Location[$i]->SubTrip->MaxRPM;
$result_subTrip_driver_RPMTime=$result_subTrip_driver_Location[$i]->SubTrip->RPMTime;
$result_subTrip_driver_RPMOccurs=$result_subTrip_driver_Location[$i]->SubTrip->RPMOccurs;
$result_subTrip_driver_RPMScore=$result_subTrip_driver_Location[$i]->SubTrip->RPMScore;
$result_subTrip_driver_GBTime=$result_subTrip_driver_Location[$i]->SubTrip->GBTime;
$result_subTrip_driver_GBScore=$result_subTrip_driver_Location[$i]->SubTrip->GBScore;
$result_subTrip_driver_ExIdleTime=$result_subTrip_driver_Location[$i]->SubTrip->ExIdleTime;
$result_subTrip_driver_ExIdleOccurs=$result_subTrip_driver_Location[$i]->SubTrip->ExIdleOccurs;
$result_subTrip_driver_ExIdleScore=$result_subTrip_driver_Location[$i]->SubTrip->ExIdleScore;
$result_subTrip_driver_NIdleTime=$result_subTrip_driver_Location[$i]->SubTrip->NIdleTime;
$result_subTrip_driver_NIdleOccurs=$result_subTrip_driver_Location[$i]->SubTrip->NIdleOccurs;
$result_subTrip_driver_Litres=$result_subTrip_driver_Location[$i]->SubTrip->Litres;
$result_subTrip_driver_PulseParameterID=$result_subTrip_driver_Location[$i]->SubTrip->PulseParameterID;
$result_subTrip_driver_PulseValue=$result_subTrip_driver_Location[$i]->SubTrip->PulseValue;
$result_subTrip_driver_StartGPSID=$result_subTrip_driver_Location[$i]->SubTrip->StartGPSID;
$result_subTrip_driver_EndGPSID=$result_subTrip_driver_Location[$i]->SubTrip->EndGPSID;
$result_subTrip_driver_StartEngineSeconds=$result_subTrip_driver_Location[$i]->SubTrip->StartEngineSeconds;
$result_subTrip_driver_EndEngineSeconds=$result_subTrip_driver_Location[$i]->SubTrip->EndEngineSeconds;
$result_subTrip_driver_StandingTime=$result_subTrip_driver_Location[$i]->SubTrip->StandingTime;
$result_subTrip_driver_StartLocationName=$result_subTrip_driver_Location[$i]->StartLocationName;
$result_subTrip_driver_EndLocationName=$result_subTrip_driver_Location[$i]->EndLocationName;


$Vehicle_ID=$result_subTrip_driver_Location[$i]->Vehicle->ID;
$Vehicle_Site_Id=$result_subTrip_driver_Location[$i]->Vehicle->SiteID;
$Vehicle_Group_Id=$result_subTrip_driver_Location[$i]->Vehicle->GroupID;
$Vehicle_Description=$result_subTrip_driver_Location[$i]->Vehicle->Description;
$Vehicle_RegistrationNumber=$result_subTrip_driver_Location[$i]->Vehicle->RegistrationNumber;
$Vehicle_UnitType=$result_subTrip_driver_Location[$i]->Vehicle->UnitType;
$Vehicle_VehicleIcon=$result_subTrip_driver_Location[$i]->Vehicle->VehicleIcon;
$Vehicle_TargetHourlyConsumption=$result_subTrip_driver_Location[$i]->Vehicle->TargetHourlyConsumption;
$Vehicle_DefaultDriverID=$result_subTrip_driver_Location[$i]->Vehicle->DefaultDriverID;
$Vehicle_LastUpdate=$result_subTrip_driver_Location[$i]->Vehicle->LastUpdate;
$date_lastUpdate = new DateTime($Vehicle_LastUpdate);
$Vehicle_DistanceChecked=$result_subTrip_driver_Location[$i]->Vehicle->DistanceChecked;
$Vehicle_LastOdometer=$result_subTrip_driver_Location[$i]->Vehicle->LastOdometer;
$Vehicle_LastTrip=$result_subTrip_driver_Location[$i]->Vehicle->LastTrip;
$date_lastTrip = new DateTime($Vehicle_LastTrip);
$Vehicle_LastEngineSeconds=$result_subTrip_driver_Location[$i]->Vehicle->LastEngineSeconds;
$Vehicle_LastServiceKey=$result_subTrip_driver_Location[$i]->Vehicle->LastServiceKey;
$Vehicle_NextServiceKm=$result_subTrip_driver_Location[$i]->Vehicle->NextServiceKm;
$Vehicle_ServiceKm=$result_subTrip_driver_Location[$i]->Vehicle->ServiceKm;
$Vehicle_RemindKm=$result_subTrip_driver_Location[$i]->Vehicle->RemindKm;
$Vehicle_RemindKm2=$result_subTrip_driver_Location[$i]->Vehicle->RemindKm2;
$Vehicle_NextServiceDate=$result_subTrip_driver_Location[$i]->Vehicle->NextServiceDate;
$Vehicle_ServiceMonths=$result_subTrip_driver_Location[$i]->Vehicle->ServiceMonths;
$Vehicle_RemindWeeks=$result_subTrip_driver_Location[$i]->Vehicle->RemindWeeks;
$Vehicle_RemindWeeks2=$result_subTrip_driver_Location[$i]->Vehicle->RemindWeeks2;
$Vehicle_NextServiceSeconds=$result_subTrip_driver_Location[$i]->Vehicle->NextServiceSeconds;
$Vehicle_ServiceSeconds=$result_subTrip_driver_Location[$i]->Vehicle->ServiceSeconds;
$Vehicle_RemindSeconds=$result_subTrip_driver_Location[$i]->Vehicle->RemindSeconds;
$Vehicle_RemindSeconds2=$result_subTrip_driver_Location[$i]->Vehicle->RemindSeconds2;
$Vehicle_LastLicense=$result_subTrip_driver_Location[$i]->Vehicle->LastLicense;
$Vehicle_NextLicense=$result_subTrip_driver_Location[$i]->Vehicle->NextLicense;
$Vehicle_LicenseInterval=$result_subTrip_driver_Location[$i]->Vehicle->LicenseInterval;
$Vehicle_LicenseRemind=$result_subTrip_driver_Location[$i]->Vehicle->LicenseRemind;
$Vehicle_LicenseRemind2=$result_subTrip_driver_Location[$i]->Vehicle->LicenseRemind2;
$Vehicle_LastCOR=$result_subTrip_driver_Location[$i]->Vehicle->LastCOR;
$Vehicle_NextCOR=$result_subTrip_driver_Location[$i]->Vehicle->NextCOR;
$Vehicle_CORInterval=$result_subTrip_driver_Location[$i]->Vehicle->CORInterval;
$Vehicle_CORRemind=$result_subTrip_driver_Location[$i]->Vehicle->CORRemind;
$Vehicle_CORRemind2=$result_subTrip_driver_Location[$i]->Vehicle->CORRemind2;
$Vehicle_IgnoreLateDownload=$result_subTrip_driver_Location[$i]->Vehicle->IgnoreLateDownload;
//$Vehicle_RemindOnDistance=$result_subTrip_driver_Location[$i]->Vehicle>RemindOnDistance;
$Vehicle_RemindOnDuration=$result_subTrip_driver_Location[$i]->Vehicle->RemindOnDuration;
$Vehicle_ServiceHours=$result_subTrip_driver_Location[$i]->Vehicle->ServiceHours;
$Vehicle_License=$result_subTrip_driver_Location[$i]->Vehicle->License;
$Vehicle_COR=$result_subTrip_driver_Location[$i]->Vehicle->COR;
//$Vehicle_DefaultAllowDriverAccess=$Vehicle_result->DefaultAllowDriverAccess;
$Vehicle_Created=$result_subTrip_driver_Location[$i]->Vehicle->Created;
$date_Created = new DateTime($Vehicle_Created);
$Vehicle_Active=$result_subTrip_driver_Location[$i]->Vehicle->Active;
$Vehicle_ActiveState=$result_subTrip_driver_Location[$i]->Vehicle->ActiveState;



print_r("TripID.".$result_subTrip_driver_TripID);
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
print_r("MaxRPM.".$result_subTrip_driver_MaxRPM);
print "\t";
print_r("Startlocation_Name".$result_subTrip_driver_StartLocationName);
print "\t";
print_r("EndLocationName".$result_subTrip_driver_EndLocationName);
print "\t";

print_r("ID.".$Vehicle_ID);
print "\t";
print_r("SiteID.".$Vehicle_Site_Id);
print "\t";
print_r("GroupID.".$Vehicle_Group_Id);
print "\t";
print_r("Description.".$Vehicle_Description);
print "\t";
print_r("RegistrationNumber.".$Vehicle_RegistrationNumber);
print "\t";
print_r("UnitType.".$Vehicle_UnitType);
print_r("LastTrip.".$date_lastTrip->format('d/m/Y (H:i:s)'));
print "\t";
print_r("LastOdometer.".$Vehicle_LastOdometer);
echo '<br>';
}

} catch (SoapFault $fault) {
    trigger_error("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
}

?>