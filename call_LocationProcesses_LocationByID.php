<?php
include("Soap_header_token_LocationProcesses.php");
include('call_core_orgid.php');
try {
$param_LocationBYid=array("LocationID"=>31166);
$response_LocationByID =$LocationProcessesWS ->__soapCall('GetLocationByID',array($param_LocationBYid));

echo '<pre>';
//print_r($response_LocationByID);
$result_locationById=$response_LocationByID->GetLocationByIDResult;

$result_location_list_ID=$result_locationById->ID;
$result_location_list_Name=$result_locationById->Name;
$result_location_list_Details=$result_locationById->Details;
$result_location_list_Type=$result_locationById->Type;
$result_location_list_ShapeType=$result_locationById->ShapeType;
$result_location_list_Source=$result_locationById->Source;
$result_location_list_Longitude=$result_locationById->Longitude;
$result_location_list_Latitude=$result_locationById->Latitude;
$result_location_list_Radius=$result_locationById->Radius;
$result_location_list_UpperLeftLongitude=$result_locationById->UpperLeftLongitude;
$result_location_list_UpperLeftLatitude=$result_locationById->UpperLeftLatitude;
$result_location_list_LowerRightLongitude=$result_locationById->LowerRightLongitude;
$result_location_list_LowerRightLatitude=$result_locationById->LowerRightLatitude;
$result_location_list_Deleted=$result_locationById->Deleted;
$result_location_list_ShowOnMap=$result_locationById->ShowOnMap;
$result_location_list_CustomerCode=$result_locationById->CustomerCode;
$result_location_list_TaxType=$result_locationById->TaxType;
$result_location_list_SiteID=$result_locationById->SiteID;
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
print_r("Latitude.".$result_location_list_Latitude);
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
?>