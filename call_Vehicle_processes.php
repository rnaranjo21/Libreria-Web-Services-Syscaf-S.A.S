<?php
/* Este Script es para la consulta de un vehiculo en especifico solo proporcionando su ID*/

include("Soap_header_token_VehicleProcesses.php");
include('call_core_orgid.php');
try {
$param_vehicles=array("VehicleID"=>921);
$response_vehicles =$VehicleProcessesWS->__soapCall('GetVehicle',array($param_vehicles));
echo '<pre>';
//print_r($response_vehicles);
$Vehicle_result= $response_vehicles->GetVehicleResult;
$Vehicle_ID=$Vehicle_result->ID;
$Vehicle_Site_Id=$Vehicle_result->SiteID;
$Vehicle_Group_Id=$Vehicle_result->GroupID;
$Vehicle_Description=$Vehicle_result->Description;
$Vehicle_RegistrationNumber=$Vehicle_result->RegistrationNumber;
$Vehicle_UnitType=$Vehicle_result->UnitType;
$Vehicle_VehicleIcon=$Vehicle_result->VehicleIcon;
$Vehicle_TargetHourlyConsumption=$Vehicle_result->TargetHourlyConsumption;
$Vehicle_DefaultDriverID=$Vehicle_result->DefaultDriverID;
$Vehicle_LastUpdate=$Vehicle_result->LastUpdate;
$date_lastUpdate = new DateTime($Vehicle_LastUpdate);
$Vehicle_DistanceChecked=$Vehicle_result->DistanceChecked;
$Vehicle_LastOdometer=$Vehicle_result->LastOdometer;
$Vehicle_LastTrip=$Vehicle_result->LastTrip;
$date_lastTrip = new DateTime($Vehicle_LastTrip);
$Vehicle_LastEngineSeconds=$Vehicle_result->LastEngineSeconds;
$Vehicle_LastServiceKey=$Vehicle_result->LastServiceKey;
$Vehicle_NextServiceKm=$Vehicle_result->NextServiceKm;
$Vehicle_ServiceKm=$Vehicle_result->ServiceKm;
$Vehicle_RemindKm=$Vehicle_result->RemindKm;
$Vehicle_RemindKm2=$Vehicle_result->RemindKm2;
$Vehicle_NextServiceDate=$Vehicle_result->NextServiceDate;
$Vehicle_ServiceMonths=$Vehicle_result->ServiceMonths;
$Vehicle_RemindWeeks=$Vehicle_result->RemindWeeks;
$Vehicle_RemindWeeks2=$Vehicle_result->RemindWeeks2;
$Vehicle_NextServiceSeconds=$Vehicle_result->NextServiceSeconds;
$Vehicle_ServiceSeconds=$Vehicle_result->ServiceSeconds;
$Vehicle_RemindSeconds=$Vehicle_result->RemindSeconds;
$Vehicle_RemindSeconds2=$Vehicle_result->RemindSeconds2;
$Vehicle_LastLicense=$Vehicle_result->LastLicense;
$Vehicle_NextLicense=$Vehicle_result->NextLicense;
$Vehicle_LicenseInterval=$Vehicle_result->LicenseInterval;
$Vehicle_LicenseRemind=$Vehicle_result->LicenseRemind;
$Vehicle_LicenseRemind2=$Vehicle_result->LicenseRemind2;
$Vehicle_LastCOR=$Vehicle_result->LastCOR;
$Vehicle_NextCOR=$Vehicle_result->NextCOR;
$Vehicle_CORInterval=$Vehicle_result->CORInterval;
$Vehicle_CORRemind=$Vehicle_result->CORRemind;
$Vehicle_CORRemind2=$Vehicle_result->CORRemind2;
$Vehicle_IgnoreLateDownload=$Vehicle_result->IgnoreLateDownload;
$Vehicle_RemindOnDistance=$Vehicle_result->RemindOnDistance;
$Vehicle_RemindOnDuration=$Vehicle_result->RemindOnDuration;
$Vehicle_ServiceHours=$Vehicle_result->ServiceHours;
$Vehicle_License=$Vehicle_result->License;
$Vehicle_COR=$Vehicle_result->COR;
$Vehicle_DefaultAllowDriverAccess=$Vehicle_result->DefaultAllowDriverAccess;
$Vehicle_Created=$Vehicle_result->Created;
$date_Created = new DateTime($Vehicle_Created);
$Vehicle_Active=$Vehicle_result->Active;
$Vehicle_ActiveState=$Vehicle_result->ActiveState;
} catch (SoapFault $fault) {
    trigger_error("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
}
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
print "\t";
print "LastUpdate.".$date_lastUpdate->format('d/m/Y (H:i:s)');
print "\t";
print_r("LastOdometer.".$Vehicle_LastOdometer);
print "\t";
print "LastTrip.".$date_lastTrip->format('d/m/Y (H:i:s)');
print "\t";
print_r("LastOdometer.".$Vehicle_LastOdometer);
print "\t";
print_r("LastEngineSeconds.".$Vehicle_LastEngineSeconds);
print "\t";
print_r("DefaultAllowDriverAccess.".$Vehicle_DefaultAllowDriverAccess);
print "\t";
print "Created.".$date_Created->format('d/m/Y (H:i:s)');
print "\t";
print_r("Active.".$Vehicle_Active);
print "\t";
print_r("ActiveState.".$Vehicle_ActiveState);
print "\t";
echo '<br>';


?>