<?php
include("Soap_header_token_Siteprocesses.php");
include('call_core_orgid.php');
try {
$param_Site_list=array("TokenHeader");
$response_Site_list =$SiteProcessesWS ->__soapCall('GetSiteList',array($param_Site_list));
echo '<pre>';
//print_r($response_Site_list);
$Site_list=$response_Site_list->GetSiteListResult->Site;
for($i=0;$i<count($Site_list);$i++){
	$Site_result_ID=$Site_list[$i]->ID;
	$Site_result_Name=$Site_list[$i]->Name;
	$Site_result_FromDriverID=$Site_list[$i]->FromDriverID;
	$Site_result_ToDriverID=$Site_list[$i]->ToDriverID;
	$Site_result_FromVehicleID=$Site_list[$i]->ToDriverID;
	$Site_result_ToVehicleID=$Site_list[$i]->FromVehicleID;
	
	print_r("ID.".$Site_result_ID);
    print "\t";
    print_r("Name.".$Site_result_Name);
    print "\t";
    print_r("FromDriverID.".$Site_result_FromDriverID);
    print "\t";
    print_r("ToVehicleID.".$Site_result_ToVehicleID);
    print "\t";
    echo '<br>';
	}
	} catch (SoapFault $fault) {
    trigger_error("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
}
?>