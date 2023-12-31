<?xml version="1.0" encoding="UTF-8"?>
<sch:schema xmlns:sch="http://purl.oclc.org/dsdl/schematron" queryBinding="xslt2">
  <sch:ns prefix="f" uri="http://hl7.org/fhir"/>
  <sch:ns prefix="h" uri="http://www.w3.org/1999/xhtml"/>
  <!-- 
    This file contains just the constraints for the profile ChOrfComposition
    It includes the base constraints for the resource as well.
    Because of the way that schematrons and containment work, 
    you may need to use this schematron fragment to build a, 
    single schematron that validates contained resources (if you have any) 
  -->
  <sch:pattern>
    <sch:title>f:Composition</sch:title>
    <sch:rule context="f:Composition">
      <sch:assert test="count(f:extension[@url = 'http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-epr-dataenterer']) &lt;= 1">extension with URL = 'http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-epr-dataenterer': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-urgentnoficationcontactforthisdocument']) &lt;= 1">extension with URL = 'http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-urgentnoficationcontactforthisdocument': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-urgentnoficationcontactfortheresponsetothisdocument']) &lt;= 1">extension with URL = 'http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-urgentnoficationcontactfortheresponsetothisdocument': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-receiver']) &lt;= 1">extension with URL = 'http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-receiver': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-precedentdocument']) &lt;= 1">extension with URL = 'http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-precedentdocument': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-antecedentepisodeofcare']) &lt;= 1">extension with URL = 'http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-antecedentepisodeofcare': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-initiator']) &lt;= 1">extension with URL = 'http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-initiator': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-patientconsent']) &lt;= 1">extension with URL = 'http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-patientconsent': maximum cardinality of 'extension' is 1</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>f:Composition/f:section</sch:title>
    <sch:rule context="f:Composition/f:section">
      <sch:assert test="count(f:title) &gt;= 1">title: minimum cardinality of 'title' is 1</sch:assert>
      <sch:assert test="count(f:code) &gt;= 1">code: minimum cardinality of 'code' is 1</sch:assert>
      <sch:assert test="count(f:section) &lt;= 0">section: maximum cardinality of 'section' is 0</sch:assert>
      <sch:assert test="count(f:title) &gt;= 1">title: minimum cardinality of 'title' is 1</sch:assert>
      <sch:assert test="count(f:code) &gt;= 1">code: minimum cardinality of 'code' is 1</sch:assert>
      <sch:assert test="count(f:text) &gt;= 1">text: minimum cardinality of 'text' is 1</sch:assert>
      <sch:assert test="count(f:entry) &gt;= 1">entry: minimum cardinality of 'entry' is 1</sch:assert>
      <sch:assert test="count(f:entry) &lt;= 1">entry: maximum cardinality of 'entry' is 1</sch:assert>
      <sch:assert test="count(f:section) &lt;= 0">section: maximum cardinality of 'section' is 0</sch:assert>
    </sch:rule>
  </sch:pattern>
</sch:schema>
