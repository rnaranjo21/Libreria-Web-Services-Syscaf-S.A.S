<?php
include("Soap_header_token_Siteprocesses.php");
include('call_core_orgid.php');
try {
$param_Site=array("SiteID"=>1);
$response_Site=$SiteProcessesWS ->__soapCall('GetSite',array($param_Site));
echo '<pre>';
$Site_list=$response_Site->GetSiteResult;
//print_r($response_Site);
    $Site_result_ID=$Site_list->ID;
	$Site_result_Name=$Site_list->Name;
	$Site_result_FromDriverID=$Site_list->FromDriverID;
	$Site_result_ToDriverID=$Site_list->ToDriverID;
	$Site_result_FromVehicleID=$Site_list->ToDriverID;
	$Site_result_ToVehicleID=$Site_list->FromVehicleID;
} catch (SoapFault $fault) {
    trigger_error("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
}	
	print_r("ID.".$Site_result_ID);
    print "\t";
    print_r("Name.".$Site_result_Name);
    print "\t";
    print_r("FromDriverID.".$Site_result_FromDriverID);
    print "\t";
    print_r("ToVehicleID.".$Site_result_ToVehicleID);
    print "\t";
    echo '<br>';
?>