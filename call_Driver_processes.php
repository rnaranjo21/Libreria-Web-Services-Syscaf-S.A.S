<?php
include("Soap_header_token_DriverProcesses.php");
include('call_core_orgid.php');
try {
$param_Driver=array("DriverID"=>9001);
$response_Driver =$DriverProcessesWS ->__soapCall('GetDriver',array($param_Driver));
echo '<pre>';
//print_r($response_Driver);
$Driver_result=$response_Driver->GetDriverResult;
$Driver_ID=$Driver_result->ID;
$Driver_SiteID=$Driver_result->SiteID;
$Driver_GroupID=$Driver_result->GroupID;
$Driver_EmployeeNumber=$Driver_result->EmployeeNumber;
$Driver_Name=$Driver_result->Name;
$Driver_DefaultAllowVehicleAccess=$Driver_result->DefaultAllowVehicleAccess;
$Driver_License=$Driver_result->License;
$Driver_LastLicense=$Driver_result->LastLicense;
$Driver_NextLicense=$Driver_result->NextLicense;
$Driver_LicenseInterval=$Driver_result->LicenseInterval;
$Driver_LicenseRemind=$Driver_result->LicenseRemind;
$Driver_LicenseRemind2=$Driver_result->LicenseRemind2;
$Driver_DistanceChecked=$Driver_result->DistanceChecked;
$Driver_Created=$Driver_result->Created;
$date_Created = new DateTime($Driver_Created);
$Driver_Updated=$Driver_result->Updated;
$date_Updated = new DateTime($Driver_Updated);
} catch (SoapFault $fault) {
    trigger_error("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
}
print_r("ID.".$Driver_ID);
print "\t";
print_r("SiteID.".$Driver_SiteID);
print "\t";
print_r("GroupID.".$Driver_GroupID);
print "\t";
print_r("EmployeeNumber.".$Driver_EmployeeNumber);
print "\t";
print_r("Name.".$Driver_Name);
print "\t";
print_r("DefaultAllowVehicleAccess.".$Driver_DefaultAllowVehicleAccess);
print "\t";
print "Created.".$date_Created->format('d/m/Y (H:i:s)');
print "\t";
print "Updated.".$date_Updated->format('d/m/Y (H:i:s)');
print "\t";
echo '<br>';

?>