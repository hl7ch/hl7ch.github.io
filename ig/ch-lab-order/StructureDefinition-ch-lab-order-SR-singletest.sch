<?xml version="1.0" encoding="UTF-8"?>
<sch:schema xmlns:sch="http://purl.oclc.org/dsdl/schematron" queryBinding="xslt2">
  <sch:ns prefix="f" uri="http://hl7.org/fhir"/>
  <sch:ns prefix="h" uri="http://www.w3.org/1999/xhtml"/>
  <!-- 
    This file contains just the constraints for the profile ChOrfServiceRequest
    It includes the base constraints for the resource as well.
    Because of the way that schematrons and containment work, 
    you may need to use this schematron fragment to build a, 
    single schematron that validates contained resources (if you have any) 
  -->
  <sch:pattern>
    <sch:title>f:ServiceRequest</sch:title>
    <sch:rule context="f:ServiceRequest">
      <sch:assert test="count(f:extension[@url = 'http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-requestedencounterdetails']) &lt;= 1">extension with URL = 'http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-requestedencounterdetails': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:instantiatesCanonical) &gt;= 1">instantiatesCanonical: minimum cardinality of 'instantiatesCanonical' is 1</sch:assert>
      <sch:assert test="count(f:instantiatesCanonical) &lt;= 1">instantiatesCanonical: maximum cardinality of 'instantiatesCanonical' is 1</sch:assert>
      <sch:assert test="count(f:requisition) &gt;= 1">requisition: minimum cardinality of 'requisition' is 1</sch:assert>
      <sch:assert test="count(f:code) &gt;= 1">code: minimum cardinality of 'code' is 1</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>f:ServiceRequest/f:reasonCode</sch:title>
    <sch:rule context="f:ServiceRequest/f:reasonCode">
      <sch:assert test="count(f:id) &lt;= 1">id: maximum cardinality of 'id' is 1</sch:assert>
      <sch:assert test="count(f:text) &gt;= 1">text: minimum cardinality of 'text' is 1</sch:assert>
      <sch:assert test="count(f:text) &lt;= 1">text: maximum cardinality of 'text' is 1</sch:assert>
    </sch:rule>
  </sch:pattern>
</sch:schema>
