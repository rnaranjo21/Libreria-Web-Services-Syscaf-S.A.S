<?php
include("Soap_header_token_VehicleConfigurationProcess.php");
include('call_core_orgid.php');
try {
$param_GetDefaultVehicleConfigParams=array("VehicleID"=>921);
$response_DefaultVehicleConfigParams =$VehicleConfigurationProcessWS->__soapCall('GetVehicleConfigParams',array($param_GetDefaultVehicleConfigParams));
echo '<pre>';
//print_r($response_DefaultVehicleConfigParams);
$result_DefaultVehicleConfigParams=$response_DefaultVehicleConfigParams->GetVehicleConfigParamsResult->KeyValuePairOfIntConfigParam;
for ($i=0; $i <count($result_DefaultVehicleConfigParams) ; $i++) { 
	$result_DefaultVehicleConfigParams_value_ID=$result_DefaultVehicleConfigParams[$i]->Value->ParameterID;
    $result_DefaultVehicleConfigParams_value_Description=$result_DefaultVehicleConfigParams[$i]->Value->Description;
    $result_DefaultVehicleConfigParams_value_DeviceType=$result_DefaultVehicleConfigParams[$i]->Value->DeviceType;
    $result_DefaultVehicleConfigParams_value_ValueFormat=$result_DefaultVehicleConfigParams[$i]->Value->ValueFormat;
    $result_DefaultVehicleConfigParams_value_CalibrationType=$result_DefaultVehicleConfigParams[$i]->Value->CalibrationType;
    $result_DefaultVehicleConfigParams_value_FuelCounter=$result_DefaultVehicleConfigParams[$i]->Value->FuelCounter;
    $result_DefaultVehicleConfigParams_value_Calibration1=$result_DefaultVehicleConfigParams[$i]->Value->Calibration1;
    $result_DefaultVehicleConfigParams_value_Value1=$result_DefaultVehicleConfigParams[$i]->Value->Value1;
    $result_DefaultVehicleConfigParams_value_Calibration2=$result_DefaultVehicleConfigParams[$i]->Value->Calibration2;
    $result_DefaultVehicleConfigParams_value_Value2=$result_DefaultVehicleConfigParams[$i]->Value->Value2;
    $result_DefaultVehicleConfigParams_value_DMIInputID=$result_DefaultVehicleConfigParams[$i]->Value->DMIInputID;
    $result_DefaultVehicleConfigParams_value_DDriver=$result_DefaultVehicleConfigParams[$i]->Value->DDriver;
    $result_DefaultVehicleConfigParams_value_DDriverCallMethod=$result_DefaultVehicleConfigParams[$i]->Value->DDriverCallMethod;
    $result_DefaultVehicleConfigParams_value_DParamA=$result_DefaultVehicleConfigParams[$i]->Value->DParamA;
    $result_DefaultVehicleConfigParams_value_DDRInpExt=$result_DefaultVehicleConfigParams[$i]->Value->DDRInpExt;
    $result_DefaultVehicleConfigParams_value_DParamB=$result_DefaultVehicleConfigParams[$i]->Value->DParamB;
    $result_DefaultVehicleConfigParams_value_DParamC=$result_DefaultVehicleConfigParams[$i]->Value->DParamC;
    $result_DefaultVehicleConfigParams_value_DFunc=$result_DefaultVehicleConfigParams[$i]->Value->DFunc;
    $result_DefaultVehicleConfigParams_value_DFuncAct=$result_DefaultVehicleConfigParams[$i]->Value->DFuncAct;
    $result_DefaultVehicleConfigParams_value_Size=$result_DefaultVehicleConfigParams[$i]->Value->Size;
    $result_DefaultVehicleConfigParams_value_DeviceDefault=$result_DefaultVehicleConfigParams[$i]->Value->DeviceDefault;
    $result_DefaultVehicleConfigParams_value_InputID=$result_DefaultVehicleConfigParams[$i]->Value->InputID;
    //$result_DefaultVehicleConfigParams_value_Units=$result_DefaultVehicleConfigParams[$i]->Value->Units;
  
print_r("ParameterID.".$result_DefaultVehicleConfigParams_value_ID);
print "\t";        
print_r("Description.".$result_DefaultVehicleConfigParams_value_Description);
print "\t";   
print_r("DeviceType.".$result_DefaultVehicleConfigParams_value_DeviceType);
print "\t";   
print_r("ValueFormat.".$result_DefaultVehicleConfigParams_value_ValueFormat);
print "\t";              
print_r("CalibrationType.".$result_DefaultVehicleConfigParams_value_CalibrationType);
print "\t"; 
print_r("FuelCounter.".$result_DefaultVehicleConfigParams_value_FuelCounter);
print "\t"; 
print_r("Calibration1.".$result_DefaultVehicleConfigParams_value_Calibration1);
print "\t"; 
print_r("Value1.".$result_DefaultVehicleConfigParams_value_Value1);
print "\t"; 
print_r("Calibration2.".$result_DefaultVehicleConfigParams_value_Calibration2);
print "\t"; 
print_r("Value2.".$result_DefaultVehicleConfigParams_value_Value2);
print "\t"; 
print_r("DMIInputID.".$result_DefaultVehicleConfigParams_value_DMIInputID);
print "\t";
print_r("DDriver.".$result_DefaultVehicleConfigParams_value_DDriver);
print "\t";
print_r("DDriverCallMethod.".$result_DefaultVehicleConfigParams_value_DDriverCallMethod);
print "\t";
print_r("DParamA.".$result_DefaultVehicleConfigParams_value_DParamA);
print "\t";
print_r("DDRInpExt.".$result_DefaultVehicleConfigParams_value_DDRInpExt);
print "\t";
print_r("DParamB.".$result_DefaultVehicleConfigParams_value_DParamB);
print "\t";
print_r("DParamC.".$result_DefaultVehicleConfigParams_value_DParamC);
print "\t";
print_r("DFunc.".$result_DefaultVehicleConfigParams_value_DFunc);
print "\t";
print_r("DFuncAct.".$result_DefaultVehicleConfigParams_value_DFuncAct);
print "\t";
print_r("Size.".$result_DefaultVehicleConfigParams_value_Size);
print "\t";
print_r("DeviceDefault.".$result_DefaultVehicleConfigParams_value_DeviceDefault);
print "\t";
print_r("InputID.".$result_DefaultVehicleConfigParams_value_InputID);
print "\t";
//print_r("Units.".$result_DefaultVehicleConfigParams_value_Units);
//print "\t";
echo '<br>';
}
} catch (SoapFault $fault) {
    trigger_error("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
}  
?>
