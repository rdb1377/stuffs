<definitions xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:SOAP-ENC="http://schemas.xmlsoap.org/soap/encoding/" xmlns:tns="urn:SMSwsdl" xmlns:soap="http://schemas.xmlsoap.org/wsdl/soap/" xmlns:wsdl="http://schemas.xmlsoap.org/wsdl/" xmlns="http://schemas.xmlsoap.org/wsdl/" targetNamespace="urn:SMSwsdl">
<types>
<xsd:schema targetNamespace="urn:SMSwsdl">
<xsd:import namespace="http://schemas.xmlsoap.org/soap/encoding/"/>
<xsd:import namespace="http://schemas.xmlsoap.org/wsdl/"/>
<xsd:complexType name="message">
<xsd:all>
<xsd:element name="box" type="xsd:string"/>
<xsd:element name="text" type="xsd:string"/>
<xsd:element name="sms_id" type="xsd:int"/>
<xsd:element name="send_date" type="xsd:string"/>
<xsd:element name="credit" type="xsd:string"/>
<xsd:element name="line_no" type="xsd:string"/>
<xsd:element name="mobile_no" type="xsd:string"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="array_msg">
<xsd:complexContent>
<xsd:restriction base="SOAP-ENC:Array">
<xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:message[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="delivery">
<xsd:all>
<xsd:element name="mobile" type="xsd:string"/>
<xsd:element name="status" type="xsd:int"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="array_delivery">
<xsd:complexContent>
<xsd:restriction base="SOAP-ENC:Array">
<xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:delivery[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="account">
<xsd:all>
<xsd:element name="acc_id" type="xsd:string"/>
<xsd:element name="title" type="xsd:string"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="array_account">
<xsd:complexContent>
<xsd:restriction base="SOAP-ENC:Array">
<xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:account[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
</xsd:schema>
</types>
<message name="sendSMSRequest">
<part name="domain" type="xsd:string"/>
<part name="username" type="xsd:string"/>
<part name="password" type="xsd:string"/>
<part name="from" type="xsd:string"/>
<part name="to" type="xsd:ArrayOfString"/>
<part name="text" type="xsd:string"/>
<part name="isflash" type="xsd:int"/>
</message>
<message name="sendSMSResponse">
<part name="return" type="xsd:string"/>
</message>
<message name="sendMultiSMSRequest">
<part name="domain" type="xsd:string"/>
<part name="username" type="xsd:string"/>
<part name="password" type="xsd:string"/>
<part name="from" type="xsd:string"/>
<part name="to" type="xsd:ArrayOfString"/>
<part name="texts" type="xsd:ArrayOfString"/>
<part name="isflash" type="xsd:int"/>
</message>
<message name="sendMultiSMSResponse">
<part name="return" type="xsd:string"/>
</message>
<message name="getCreditRequest">
<part name="domain" type="xsd:string"/>
<part name="username" type="xsd:string"/>
<part name="password" type="xsd:string"/>
</message>
<message name="getCreditResponse">
<part name="return" type="xsd:string"/>
</message>
<message name="getDeliveryRequest">
<part name="domain" type="xsd:string"/>
<part name="username" type="xsd:string"/>
<part name="password" type="xsd:string"/>
<part name="id" type="xsd:int"/>
</message>
<message name="getDeliveryResponse">
<part name="result" type="tns:array_delivery"/>
</message>
<message name="getDeliveryMultiRequest">
<part name="domain" type="xsd:string"/>
<part name="username" type="xsd:string"/>
<part name="password" type="xsd:string"/>
<part name="id" type="xsd:int"/>
</message>
<message name="getDeliveryMultiResponse">
<part name="result" type="tns:array_delivery"/>
</message>
<message name="checkReceiveRequest">
<part name="mobile_no" type="xsd:string"/>
<part name="text" type="xsd:string"/>
<part name="line_number" type="xsd:string"/>
<part name="domain" type="xsd:string"/>
<part name="username" type="xsd:string"/>
<part name="password" type="xsd:string"/>
</message>
<message name="checkReceiveResponse">
<part name="result" type="xsd:string"/>
<part name="status" type="xsd:string"/>
</message>
<message name="getMessagesRequest">
<part name="domain" type="xsd:string"/>
<part name="username" type="xsd:string"/>
<part name="password" type="xsd:string"/>
<part name="smsType" type="xsd:string"/>
<part name="start" type="xsd:string"/>
<part name="count" type="xsd:string"/>
<part name="from" type="xsd:string"/>
</message>
<message name="getMessagesResponse">
<part name="result" type="tns:array_msg"/>
</message>
<message name="getMessagesCountRequest">
<part name="domain" type="xsd:string"/>
<part name="username" type="xsd:string"/>
<part name="password" type="xsd:string"/>
<part name="smsType" type="xsd:string"/>
<part name="from" type="xsd:string"/>
<part name="box" type="xsd:string"/>
</message>
<message name="getMessagesCountResponse">
<part name="return" type="xsd:string"/>
</message>
<message name="removeMessageRequest">
<part name="domain" type="xsd:string"/>
<part name="username" type="xsd:string"/>
<part name="password" type="xsd:string"/>
<part name="ids" type="xsd:string"/>
<part name="smsType" type="xsd:string"/>
</message>
<message name="removeMessageResponse">
<part name="return" type="xsd:string"/>
</message>
<message name="getPayAccountsRequest">
<part name="domain" type="xsd:string"/>
<part name="username" type="xsd:string"/>
<part name="password" type="xsd:string"/>
</message>
<message name="getPayAccountsResponse">
<part name="result" type="xsd:string"/>
<part name="accounts" type="tns:array_account"/>
</message>
<message name="payRequestRequest">
<part name="domain" type="xsd:string"/>
<part name="username" type="xsd:string"/>
<part name="password" type="xsd:string"/>
<part name="account" type="xsd:string"/>
<part name="amount" type="xsd:string"/>
<part name="r_url" type="xsd:string"/>
</message>
<message name="payRequestResponse">
<part name="result" type="xsd:string"/>
<part name="pay_id" type="xsd:int"/>
<part name="url" type="xsd:string"/>
</message>
<message name="getCreditPriceRequest">
<part name="domain" type="xsd:string"/>
<part name="username" type="xsd:string"/>
<part name="password" type="xsd:string"/>
<part name="amount" type="xsd:string"/>
</message>
<message name="getCreditPriceResponse">
<part name="result" type="xsd:string"/>
<part name="price" type="xsd:int"/>
</message>
<portType name="SMSwsdlPortType">
<operation name="sendSMS">
<documentation>Send SMS To Provided Phone Numbers</documentation>
<input message="tns:sendSMSRequest"/>
<output message="tns:sendSMSResponse"/>
</operation>
<operation name="sendMultiSMS">
<documentation>Send Array Of SMS To Provided Phone Numbers</documentation>
<input message="tns:sendMultiSMSRequest"/>
<output message="tns:sendMultiSMSResponse"/>
</operation>
<operation name="getCredit">
<documentation>Get Credit of Each Clinet</documentation>
<input message="tns:getCreditRequest"/>
<output message="tns:getCreditResponse"/>
</operation>
<operation name="getDelivery">
<documentation>Get Message Delivery</documentation>
<input message="tns:getDeliveryRequest"/>
<output message="tns:getDeliveryResponse"/>
</operation>
<operation name="getDeliveryMulti">
<documentation>Get Message Delivery</documentation>
<input message="tns:getDeliveryMultiRequest"/>
<output message="tns:getDeliveryMultiResponse"/>
</operation>
<operation name="checkReceive">
<documentation>Get Credit of Each Clinet</documentation>
<input message="tns:checkReceiveRequest"/>
<output message="tns:checkReceiveResponse"/>
</operation>
<operation name="getMessages">
<documentation>return messages list</documentation>
<input message="tns:getMessagesRequest"/>
<output message="tns:getMessagesResponse"/>
</operation>
<operation name="getMessagesCount">
<documentation>Get Total Number Of Messages</documentation>
<input message="tns:getMessagesCountRequest"/>
<output message="tns:getMessagesCountResponse"/>
</operation>
<operation name="removeMessage">
<documentation>Get Credit of Each Clinet</documentation>
<input message="tns:removeMessageRequest"/>
<output message="tns:removeMessageResponse"/>
</operation>
<operation name="getPayAccounts">
<documentation>return accounts list</documentation>
<input message="tns:getPayAccountsRequest"/>
<output message="tns:getPayAccountsResponse"/>
</operation>
<operation name="payRequest">
<documentation>Pay Online</documentation>
<input message="tns:payRequestRequest"/>
<output message="tns:payRequestResponse"/>
</operation>
<operation name="getCreditPrice">
<documentation>return price</documentation>
<input message="tns:getCreditPriceRequest"/>
<output message="tns:getCreditPriceResponse"/>
</operation>
</portType>
<binding name="SMSwsdlBinding" type="tns:SMSwsdlPortType">
<soap:binding style="rpc" transport="http://schemas.xmlsoap.org/soap/http"/>
<operation name="sendSMS">
<soap:operation soapAction="urn:SMSwsdl#SMS" style="rpc"/>
<input>
<soap:body use="encoded" namespace="urn:SMSwsdl" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
</input>
<output>
<soap:body use="encoded" namespace="urn:SMSwsdl" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
</output>
</operation>
<operation name="sendMultiSMS">
<soap:operation soapAction="urn:SMSwsdl#SMS" style="rpc"/>
<input>
<soap:body use="encoded" namespace="urn:SMSwsdl" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
</input>
<output>
<soap:body use="encoded" namespace="urn:SMSwsdl" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
</output>
</operation>
<operation name="getCredit">
<soap:operation soapAction="urn:SMSwsdl#GetCredit" style="rpc"/>
<input>
<soap:body use="encoded" namespace="urn:SMSwsdl" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
</input>
<output>
<soap:body use="encoded" namespace="urn:SMSwsdl" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
</output>
</operation>
<operation name="getDelivery">
<soap:operation soapAction="urn:SMSwsdl#getDelivery" style="rpc"/>
<input>
<soap:body use="encoded" namespace="urn:SMSwsdl" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
</input>
<output>
<soap:body use="encoded" namespace="urn:SMSwsdl" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
</output>
</operation>
<operation name="getDeliveryMulti">
<soap:operation soapAction="urn:SMSwsdl#getDeliveryMulti" style="rpc"/>
<input>
<soap:body use="encoded" namespace="urn:SMSwsdl" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
</input>
<output>
<soap:body use="encoded" namespace="urn:SMSwsdl" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
</output>
</operation>
<operation name="checkReceive">
<soap:operation soapAction="urn:SMSwsdl#checkReceive" style="rpc"/>
<input>
<soap:body use="encoded" namespace="urn:SMSwsdl" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
</input>
<output>
<soap:body use="encoded" namespace="urn:SMSwsdl" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
</output>
</operation>
<operation name="getMessages">
<soap:operation soapAction="http://www.mohitasms.ir/APPs/SMS/WebService.php/getMessages" style="rpc"/>
<input>
<soap:body use="encoded" namespace="urn:SMSwsdl" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
</input>
<output>
<soap:body use="encoded" namespace="urn:SMSwsdl" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
</output>
</operation>
<operation name="getMessagesCount">
<soap:operation soapAction="urn:SMSwsdl#getMessagesCount" style="rpc"/>
<input>
<soap:body use="encoded" namespace="urn:SMSwsdl" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
</input>
<output>
<soap:body use="encoded" namespace="urn:SMSwsdl" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
</output>
</operation>
<operation name="removeMessage">
<soap:operation soapAction="urn:SMSwsdl#removeMessage" style="rpc"/>
<input>
<soap:body use="encoded" namespace="urn:SMSwsdl" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
</input>
<output>
<soap:body use="encoded" namespace="urn:SMSwsdl" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
</output>
</operation>
<operation name="getPayAccounts">
<soap:operation soapAction="http://www.mohitasms.ir/APPs/SMS/WebService.php/getPayAccounts" style="rpc"/>
<input>
<soap:body use="encoded" namespace="urn:SMSwsdl" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
</input>
<output>
<soap:body use="encoded" namespace="urn:SMSwsdl" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
</output>
</operation>
<operation name="payRequest">
<soap:operation soapAction="urn:SMSwsdl#SMS" style="rpc"/>
<input>
<soap:body use="encoded" namespace="urn:SMSwsdl" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
</input>
<output>
<soap:body use="encoded" namespace="urn:SMSwsdl" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
</output>
</operation>
<operation name="getCreditPrice">
<soap:operation soapAction="urn:SMSwsdl#SMS" style="rpc"/>
<input>
<soap:body use="encoded" namespace="urn:SMSwsdl" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
</input>
<output>
<soap:body use="encoded" namespace="urn:SMSwsdl" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
</output>
</operation>
</binding>
<service name="SMSwsdl">
<port name="SMSwsdlPort" binding="tns:SMSwsdlBinding">
<soap:address location="http://www.mohitasms.ir/APPs/SMS/WebService.php"/>
</port>
</service>
</definitions>
