<?php
try {
 $DataScheduleWS =new SoapClient("https://api.fm-web.us/webservices/DataScheduleWebSvc/DataScheduleWS.asmx?WSDL",array("trace"=>1));
} catch (SoapFault $fault) {
    trigger_error("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
}

?>