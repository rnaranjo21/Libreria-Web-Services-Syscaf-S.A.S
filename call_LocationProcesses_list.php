<?php
include("Soap_header_token_LocationProcesses.php");
include('call_core_orgid.php');
try {
$param_Location_List=array("TokenHeader");
$response_Location_List =$LocationProcessesWS ->__soapCall('GetLocationsList',array($param_Location_List));

echo '<pre>';
//print_r($response_Location_List);

$result_location_list=$response_Location_List->GetLocationsListResult->Location;
for($i=0;$i<count($result_location_list);$i++){
$result_location_list_ID=$result_location_list[$i]->ID;
$result_location_list_Name=$result_location_list[$i]->Name;
$result_location_list_Details=$result_location_list[$i]->Details;
$result_location_list_Type=$result_location_list[$i]->Type;
$result_location_list_ShapeType=$result_location_list[$i]->ShapeType;
$result_location_list_Source=$result_location_list[$i]->Source;
$result_location_list_Longitude=$result_location_list[$i]->Longitude;
$result_location_list_Latitude=$result_location_list[$i]->Latitude;
$result_location_list_Radius=$result_location_list[$i]->Radius;
$result_location_list_UpperLeftLongitude=$result_location_list[$i]->UpperLeftLongitude;
$result_location_list_UpperLeftLatitude=$result_location_list[$i]->UpperLeftLatitude;
$result_location_list_LowerRightLongitude=$result_location_list[$i]->LowerRightLongitude;
$result_location_list_LowerRightLatitude=$result_location_list[$i]->LowerRightLatitude;
$result_location_list_Deleted=$result_location_list[$i]->Deleted;
$result_location_list_ShowOnMap=$result_location_list[$i]->ShowOnMap;
$result_location_list_CustomerCode=$result_location_list[$i]->CustomerCode;
$result_location_list_TaxType=$result_location_list[$i]->TaxType;
$result_location_list_SiteID=$result_location_list[$i]->SiteID;
} catch (SoapFault $fault) {
    trigger_error("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
}
print_r("ID.".$result_location_list_ID);
print "\t";
print_r("Name.".$result_location_list_Name);
print "\t";
print_r("Details.".$result_location_list_Details);
print "\t";
print_r("Type.".$result_location_list_Type);
print "\t";
print_r("ShapeType.".$result_location_list_ShapeType);
print "\t";
print_r("Source.".$result_location_list_Source);
print "\t";
print_r("Longitude.".$result_location_list_Longitude);
print "\t";
print_r("Latitude.".$result_location_list_Longitude);
print "\t";
print_r("Radius.".$result_location_list_Radius);
print "\t";
print_r("UpperLeftLongitude.".$result_location_list_UpperLeftLongitude);
print "\t";
print_r("UpperLeftLatitude.".$result_location_list_UpperLeftLatitude);
print "\t";
print_r("LowerRightLongitude.".$result_location_list_LowerRightLongitude);
print "\t";
print_r("LowerRightLatitude.".$result_location_list_LowerRightLatitude);
print "\t";
print_r("Deleted.".$result_location_list_Deleted);
print "\t";
print_r("ShowOnMap.".$result_location_list_ShowOnMap);
print "\t";
print_r("CustomerCode.".$result_location_list_CustomerCode);
print "\t";
print_r("TaxType.".$result_location_list_TaxType);
print "\t";
print_r("SiteID.".$result_location_list_SiteID);
print "\t";
echo '<br>';
}
?>