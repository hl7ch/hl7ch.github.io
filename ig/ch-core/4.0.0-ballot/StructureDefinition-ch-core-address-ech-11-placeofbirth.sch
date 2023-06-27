<?xml version="1.0" encoding="UTF-8"?>
<sch:schema xmlns:sch="http://purl.oclc.org/dsdl/schematron" queryBinding="xslt2">
  <sch:ns prefix="f" uri="http://hl7.org/fhir"/>
  <sch:ns prefix="h" uri="http://www.w3.org/1999/xhtml"/>
  <!-- 
    This file contains just the constraints for the profile CHCoreAddress
    It includes the base constraints for the resource as well.
    Because of the way that schematrons and containment work, 
    you may need to use this schematron fragment to build a, 
    single schematron that validates contained resources (if you have any) 
  -->
  <sch:pattern>
    <sch:title>f:Address</sch:title>
    <sch:rule context="f:Address">
      <sch:assert test="count(f:use) &lt;= 0">use: maximum cardinality of 'use' is 0</sch:assert>
      <sch:assert test="count(f:type) &lt;= 0">type: maximum cardinality of 'type' is 0</sch:assert>
      <sch:assert test="count(f:text) &lt;= 0">text: maximum cardinality of 'text' is 0</sch:assert>
      <sch:assert test="count(f:line) &lt;= 0">line: maximum cardinality of 'line' is 0</sch:assert>
      <sch:assert test="count(f:district) &lt;= 0">district: maximum cardinality of 'district' is 0</sch:assert>
      <sch:assert test="count(f:postalCode) &lt;= 0">postalCode: maximum cardinality of 'postalCode' is 0</sch:assert>
      <sch:assert test="count(f:period) &lt;= 0">period: maximum cardinality of 'period' is 0</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>f:Address/f:line</sch:title>
    <sch:rule context="f:Address/f:line">
      <sch:assert test="count(f:extension[@url = 'http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-ech-10-linetype']) &lt;= 1">extension with URL = 'http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-ech-10-linetype': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-ech-10-linetype']) &lt;= 1">extension with URL = 'http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-ech-10-linetype': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-ech-10-linetype']) &lt;= 1">extension with URL = 'http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-ech-10-linetype': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://hl7.org/fhir/StructureDefinition/iso21090-ADXP-streetName']) &lt;= 1">extension with URL = 'http://hl7.org/fhir/StructureDefinition/iso21090-ADXP-streetName': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://hl7.org/fhir/StructureDefinition/iso21090-ADXP-houseNumber']) &lt;= 1">extension with URL = 'http://hl7.org/fhir/StructureDefinition/iso21090-ADXP-houseNumber': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://hl7.org/fhir/StructureDefinition/iso21090-ADXP-unitID']) &lt;= 1">extension with URL = 'http://hl7.org/fhir/StructureDefinition/iso21090-ADXP-unitID': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-ech-10-linetype']) &lt;= 1">extension with URL = 'http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-ech-10-linetype': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://hl7.org/fhir/StructureDefinition/iso21090-ADXP-postBox']) &lt;= 1">extension with URL = 'http://hl7.org/fhir/StructureDefinition/iso21090-ADXP-postBox': maximum cardinality of 'extension' is 1</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>f:Address/f:city</sch:title>
    <sch:rule context="f:Address/f:city">
      <sch:assert test="count(f:extension[@url = 'http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-ech-7-municipalityid']) &lt;= 1">extension with URL = 'http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-ech-7-municipalityid': maximum cardinality of 'extension' is 1</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>f:Address/f:country</sch:title>
    <sch:rule context="f:Address/f:country">
      <sch:assert test="count(f:extension[@url = 'http://hl7.org/fhir/StructureDefinition/iso21090-SC-coding']) &lt;= 1">extension with URL = 'http://hl7.org/fhir/StructureDefinition/iso21090-SC-coding': maximum cardinality of 'extension' is 1</sch:assert>
    </sch:rule>
  </sch:pattern>
</sch:schema>
