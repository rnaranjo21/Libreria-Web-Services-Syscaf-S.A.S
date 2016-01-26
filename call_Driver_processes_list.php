<?php
include("Soap_header_token_DriverProcesses.php");
include('call_core_orgid.php');
try {
$param_Driver_list=array("TokenHeader");
$response_Driver_list =$DriverProcessesWS ->__soapCall('GetDriverList',array($param_Driver_list));
echo '<pre>';
//print_r($response_Driver_list);
$Driver_result= $response_Driver_list->GetDriverListResult->Driver;
for($i=0;$i<count($Driver_result);$i++){
$Driver_ID=$Driver_result[$i]->ID;
$Driver_SiteID=$Driver_result[$i]->SiteID;
$Driver_GroupID=$Driver_result[$i]->GroupID;
//$Driver_EmployeeNumber=$Driver_result[$i]->EmployeeNumber;
$Driver_Name=$Driver_result[$i]->Name;
$Driver_DefaultAllowVehicleAccess=$Driver_result[$i]->DefaultAllowVehicleAccess;
$Driver_License=$Driver_result[$i]->License;
$Driver_LastLicense=$Driver_result[$i]->LastLicense;
$Driver_NextLicense=$Driver_result[$i]->NextLicense;
$Driver_LicenseInterval=$Driver_result[$i]->LicenseInterval;
$Driver_LicenseRemind=$Driver_result[$i]->LicenseRemind;
$Driver_LicenseRemind2=$Driver_result[$i]->LicenseRemind2;
$Driver_DistanceChecked=$Driver_result[$i]->DistanceChecked;
$Driver_Created=$Driver_result[$i]->Created;
$date_Created = new DateTime($Driver_Created);
$Driver_Updated=$Driver_result[$i]->Updated;
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
//print_r("EmployeeNumber.".$Driver_EmployeeNumber);
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


}


?>