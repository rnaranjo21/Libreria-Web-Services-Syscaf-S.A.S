<?php
try {
 $PositioningWS=new SoapClient("https://api.fm-web.us/webservices/PositioningWebSvc/PositioningWS.asmx?WSDL",array("trace"=>1));
} catch (SoapFault $fault) {
    trigger_error("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
}
?>