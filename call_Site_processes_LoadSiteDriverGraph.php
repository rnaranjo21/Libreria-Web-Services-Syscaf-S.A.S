<?php
include("Soap_header_token_Siteprocesses.php");
include('call_core_orgid.php');
try {
$param_Site_DriverGraph=array("TokenHeader");
$response_Site_DriverGraph=$SiteProcessesWS ->__soapCall('LoadSiteDriversGraph',array($param_Site_DriverGraph));
echo '<pre>';
} catch (SoapFault $fault) {
    trigger_error("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
}
print_r($response_Site_DriverGraph);
/*
$Site_list_DriverGraph=$response_Site_DriverGraph->LoadSiteDriversGraphResult->Site;
$Site_list_DriverGraph_Driver=$response_Site_DriverGraph->LoadSiteDriversGraphResult->Site;
for($i=0;$i<count($Site_list_DriverGraph);$i++){
 $Site_result_ID=$Site_list_DriverGraph[$i]->ID;
  $Site_result_Name=$Site_list_DriverGraph[$i]->Name;
 for($j=0;$j<count($Site_list_DriverGraph_Driver);$j++){
 $Site_result_Driver_ID= $Site_list_DriverGraph_Driver->Drivers->Driver[$j]->ID;
 print_r("ID.".$Site_result_ID);
    print "\t";
    echo '<br>';
    print_r("Driver ID.".$Site_result_Driver_ID);
    print "\t";
     echo '<br>';
 }
}
/*for($i=0;$i<count($Site_Site_result_Driver_ID);$i++){
 $Site_result_Driver_ID=$Site_list_DriverGraph_Driver[$i]->Drivers->Driver[$i]->ID;

print_r("Driver ID.".$Site_result_Driver_ID);
    print "\t";
     echo '<br>';
  
 
}*/
?>