<?php
/* Este script es para consulta de la informacion de los vehiculos de una flota en especifico*/
include("Soap_header_token_VehicleProcesses.php");
include('call_core_orgid.php');
try {
$param_list_vehicles=array("TokenHeader");
$response_list_vehicles =$VehicleProcessesWS->__soapCall('GetVehiclesList',array($param_list_vehicles));
echo '<pre>';
//print_r($response_list_vehicles);

$Vehicle_result= $response_list_vehicles->GetVehiclesListResult->Vehicle;
for($i=0;$i<count($Vehicle_result);$i++){
$Vehicle_ID=$Vehicle_result[$i]->ID;
$Vehicle_Site_Id=$Vehicle_result[$i]->SiteID;
$Vehicle_Group_Id=$Vehicle_result[$i]->GroupID;
$Vehicle_Description=$Vehicle_result[$i]->Description;
$Vehicle_RegistrationNumber=$Vehicle_result[$i]->RegistrationNumber;
$Vehicle_UnitType=$Vehicle_result[$i]->UnitType;
$Vehicle_VehicleIcon=$Vehicle_result[$i]->VehicleIcon;
$Vehicle_TargetHourlyConsumption=$Vehicle_result[$i]->TargetHourlyConsumption;
$Vehicle_DefaultDriverID=$Vehicle_result[$i]->DefaultDriverID;
$Vehicle_LastUpdate=$Vehicle_result[$i]->LastUpdate;
$date_lastUpdate = new DateTime($Vehicle_LastUpdate);
$Vehicle_DistanceChecked=$Vehicle_result[$i]->DistanceChecked;
$Vehicle_LastOdometer=$Vehicle_result[$i]->LastOdometer;
$Vehicle_LastTrip=$Vehicle_result[$i]->LastTrip;
$date_lastTrip = new DateTime($Vehicle_LastTrip);
$Vehicle_LastEngineSeconds=$Vehicle_result[$i]->LastEngineSeconds;
$Vehicle_LastServiceKey=$Vehicle_result[$i]->LastServiceKey;
$Vehicle_NextServiceKm=$Vehicle_result[$i]->NextServiceKm;
$Vehicle_ServiceKm=$Vehicle_result[$i]->ServiceKm;
$Vehicle_RemindKm=$Vehicle_result[$i]->RemindKm;
$Vehicle_RemindKm2=$Vehicle_result[$i]->RemindKm2;
$Vehicle_NextServiceDate=$Vehicle_result[$i]->NextServiceDate;
$Vehicle_ServiceMonths=$Vehicle_result[$i]->ServiceMonths;
$Vehicle_RemindWeeks=$Vehicle_result[$i]->RemindWeeks;
$Vehicle_RemindWeeks2=$Vehicle_result[$i]->RemindWeeks2;
$Vehicle_NextServiceSeconds=$Vehicle_result[$i]->NextServiceSeconds;
$Vehicle_ServiceSeconds=$Vehicle_result[$i]->ServiceSeconds;
$Vehicle_RemindSeconds=$Vehicle_result[$i]->RemindSeconds;
$Vehicle_RemindSeconds2=$Vehicle_result[$i]->RemindSeconds2;
$Vehicle_LastLicense=$Vehicle_result[$i]->LastLicense;
$Vehicle_NextLicense=$Vehicle_result[$i]->NextLicense;
$Vehicle_LicenseInterval=$Vehicle_result[$i]->LicenseInterval;
$Vehicle_LicenseRemind=$Vehicle_result[$i]->LicenseRemind;
$Vehicle_LicenseRemind2=$Vehicle_result[$i]->LicenseRemind2;
$Vehicle_LastCOR=$Vehicle_result[$i]->LastCOR;
$Vehicle_NextCOR=$Vehicle_result[$i]->NextCOR;
$Vehicle_CORInterval=$Vehicle_result[$i]->CORInterval;
$Vehicle_CORRemind=$Vehicle_result[$i]->CORRemind;
$Vehicle_CORRemind2=$Vehicle_result[$i]->CORRemind2;
$Vehicle_IgnoreLateDownload=$Vehicle_result[$i]->IgnoreLateDownload;
$Vehicle_RemindOnDistance=$Vehicle_result[$i]->RemindOnDistance;
$Vehicle_RemindOnDuration=$Vehicle_result[$i]->RemindOnDuration;
$Vehicle_ServiceHours=$Vehicle_result[$i]->ServiceHours;
$Vehicle_License=$Vehicle_result[$i]->License;
$Vehicle_COR=$Vehicle_result[$i]->COR;
$Vehicle_DefaultAllowDriverAccess=$Vehicle_result[$i]->DefaultAllowDriverAccess;
$Vehicle_Created=$Vehicle_result[$i]->Created;
$date_Created = new DateTime($Vehicle_Created);
$Vehicle_Active=$Vehicle_result[$i]->Active;
$Vehicle_ActiveState=$Vehicle_result[$i]->ActiveState;
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

}
?>