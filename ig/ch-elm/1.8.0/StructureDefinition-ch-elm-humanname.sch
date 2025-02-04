<?xml version="1.0" encoding="UTF-8"?>
<sch:schema xmlns:sch="http://purl.oclc.org/dsdl/schematron" queryBinding="xslt2">
  <sch:ns prefix="f" uri="http://hl7.org/fhir"/>
  <sch:ns prefix="h" uri="http://www.w3.org/1999/xhtml"/>
  <!-- 
    This file contains just the constraints for the profile CHCoreHumanName
    It includes the base constraints for the resource as well.
    Because of the way that schematrons and containment work, 
    you may need to use this schematron fragment to build a, 
    single schematron that validates contained resources (if you have any) 
  -->
  <sch:pattern>
    <sch:title>f:HumanName</sch:title>
    <sch:rule context="f:HumanName">
      <sch:assert test="count(f:extension[@url = 'http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-ext-vct-code']) &lt;= 1">extension with URL = 'http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-ext-vct-code': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-ext-hiv-code']) &lt;= 1">extension with URL = 'http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-ext-hiv-code': maximum cardinality of 'extension' is 1</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>f:HumanName/f:family</sch:title>
    <sch:rule context="f:HumanName/f:family">
      <sch:assert test="count(f:extension[@url = 'http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-ech-11-name']) &lt;= 1">extension with URL = 'http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-ech-11-name': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://hl7.org/fhir/StructureDefinition/data-absent-reason']) &lt;= 1">extension with URL = 'http://hl7.org/fhir/StructureDefinition/data-absent-reason': maximum cardinality of 'extension' is 1</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>f:HumanName/f:given</sch:title>
    <sch:rule context="f:HumanName/f:given">
      <sch:assert test="count(f:extension[@url = 'http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-ech-11-firstname']) &lt;= 1">extension with URL = 'http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-ech-11-firstname': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://hl7.org/fhir/StructureDefinition/data-absent-reason']) &lt;= 1">extension with URL = 'http://hl7.org/fhir/StructureDefinition/data-absent-reason': maximum cardinality of 'extension' is 1</sch:assert>
    </sch:rule>
  </sch:pattern>
</sch:schema>
