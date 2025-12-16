<?xml version="1.0" encoding="UTF-8"?>
<sch:schema xmlns:sch="http://purl.oclc.org/dsdl/schematron" queryBinding="xslt2">
  <sch:ns prefix="f" uri="http://hl7.org/fhir"/>
  <sch:ns prefix="h" uri="http://www.w3.org/1999/xhtml"/>
  <!-- 
    This file contains just the constraints for the profile CHCoreEncounter
    It includes the base constraints for the resource as well.
    Because of the way that schematrons and containment work, 
    you may need to use this schematron fragment to build a, 
    single schematron that validates contained resources (if you have any) 
  -->
  <sch:pattern>
    <sch:title>f:Encounter</sch:title>
    <sch:rule context="f:Encounter">
      <sch:assert test="count(f:extension[@url = 'http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-desiredaccommodation']) &lt;= 1">extension with URL = 'http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-desiredaccommodation': maximum cardinality of 'extension' is 1</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>f:Encounter/f:hospitalization</sch:title>
    <sch:rule context="f:Encounter/f:hospitalization">
      <sch:assert test="count(f:extension[@url = 'http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-bfs-ms-admitrole']) &lt;= 1">extension with URL = 'http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-bfs-ms-admitrole': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-accident']) &lt;= 1">extension with URL = 'http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-accident': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-encounter-susp-readmission']) &lt;= 1">extension with URL = 'http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-encounter-susp-readmission': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-bfs-ms-dischargedecision']) &lt;= 1">extension with URL = 'http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-bfs-ms-dischargedecision': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-bfs-ms-dischargedestination']) &lt;= 1">extension with URL = 'http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-bfs-ms-dischargedestination': maximum cardinality of 'extension' is 1</sch:assert>
    </sch:rule>
  </sch:pattern>
</sch:schema>
