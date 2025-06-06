<?xml version="1.0" encoding="UTF-8"?>
<sch:schema xmlns:sch="http://purl.oclc.org/dsdl/schematron" queryBinding="xslt2">
  <sch:ns prefix="f" uri="http://hl7.org/fhir"/>
  <sch:ns prefix="h" uri="http://www.w3.org/1999/xhtml"/>
  <!-- 
    This file contains just the constraints for the profile AllergyIntolerance
    It includes the base constraints for the resource as well.
    Because of the way that schematrons and containment work, 
    you may need to use this schematron fragment to build a, 
    single schematron that validates contained resources (if you have any) 
  -->
  <sch:pattern>
    <sch:title>f:AllergyIntolerance/f:reaction</sch:title>
    <sch:rule context="f:AllergyIntolerance/f:reaction">
      <sch:assert test="count(f:extension[@url = 'http://hl7.org/fhir/StructureDefinition/allergyintolerance-certainty']) &lt;= 1">extension with URL = 'http://hl7.org/fhir/StructureDefinition/allergyintolerance-certainty': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://hl7.org/fhir/StructureDefinition/allergyintolerance-duration']) &lt;= 1">extension with URL = 'http://hl7.org/fhir/StructureDefinition/allergyintolerance-duration': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://hl7.org/fhir/StructureDefinition/openEHR-location']) &lt;= 1">extension with URL = 'http://hl7.org/fhir/StructureDefinition/openEHR-location': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://hl7.org/fhir/StructureDefinition/openEHR-exposureDate']) &lt;= 1">extension with URL = 'http://hl7.org/fhir/StructureDefinition/openEHR-exposureDate': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://hl7.org/fhir/StructureDefinition/openEHR-exposureDuration']) &lt;= 1">extension with URL = 'http://hl7.org/fhir/StructureDefinition/openEHR-exposureDuration': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://hl7.org/fhir/StructureDefinition/openEHR-exposureDescription']) &lt;= 1">extension with URL = 'http://hl7.org/fhir/StructureDefinition/openEHR-exposureDescription': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://hl7.org/fhir/StructureDefinition/openEHR-management']) &lt;= 1">extension with URL = 'http://hl7.org/fhir/StructureDefinition/openEHR-management': maximum cardinality of 'extension' is 1</sch:assert>
    </sch:rule>
  </sch:pattern>
</sch:schema>
