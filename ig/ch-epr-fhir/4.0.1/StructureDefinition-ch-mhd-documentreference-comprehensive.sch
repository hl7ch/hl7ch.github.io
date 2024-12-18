<?xml version="1.0" encoding="UTF-8"?>
<sch:schema xmlns:sch="http://purl.oclc.org/dsdl/schematron" queryBinding="xslt2">
  <sch:ns prefix="f" uri="http://hl7.org/fhir"/>
  <sch:ns prefix="h" uri="http://www.w3.org/1999/xhtml"/>
  <!-- 
    This file contains just the constraints for the profile CHCoreDocumentReference
    It includes the base constraints for the resource as well.
    Because of the way that schematrons and containment work, 
    you may need to use this schematron fragment to build a, 
    single schematron that validates contained resources (if you have any) 
  -->
  <sch:pattern>
    <sch:title>f:DocumentReference</sch:title>
    <sch:rule context="f:DocumentReference">
      <sch:assert test="count(f:extension[@url = 'http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-ext-deletionstatus']) &lt;= 1">extension with URL = 'http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-ext-deletionstatus': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-ext-author-authorrole']) &gt;= 1">extension with URL = 'http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-ext-author-authorrole': minimum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-ext-author-authorrole']) &lt;= 1">extension with URL = 'http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-ext-author-authorrole': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:masterIdentifier) &gt;= 1">masterIdentifier: minimum cardinality of 'masterIdentifier' is 1</sch:assert>
      <sch:assert test="count(f:docStatus) &lt;= 0">docStatus: maximum cardinality of 'docStatus' is 0</sch:assert>
      <sch:assert test="count(f:type) &gt;= 1">type: minimum cardinality of 'type' is 1</sch:assert>
      <sch:assert test="count(f:category) &gt;= 1">category: minimum cardinality of 'category' is 1</sch:assert>
      <sch:assert test="count(f:category) &lt;= 1">category: maximum cardinality of 'category' is 1</sch:assert>
      <sch:assert test="count(f:subject) &gt;= 1">subject: minimum cardinality of 'subject' is 1</sch:assert>
      <sch:assert test="count(f:date) &gt;= 1">date: minimum cardinality of 'date' is 1</sch:assert>
      <sch:assert test="count(f:custodian) &lt;= 0">custodian: maximum cardinality of 'custodian' is 0</sch:assert>
      <sch:assert test="count(f:securityLabel) &gt;= 1">securityLabel: minimum cardinality of 'securityLabel' is 1</sch:assert>
      <sch:assert test="count(f:content) &lt;= 1">content: maximum cardinality of 'content' is 1</sch:assert>
      <sch:assert test="count(f:context) &gt;= 1">context: minimum cardinality of 'context' is 1</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>f:DocumentReference/f:content</sch:title>
    <sch:rule context="f:DocumentReference/f:content">
      <sch:assert test="count(f:format) &gt;= 1">format: minimum cardinality of 'format' is 1</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>f:DocumentReference/f:content/f:attachment</sch:title>
    <sch:rule context="f:DocumentReference/f:content/f:attachment">
      <sch:assert test="count(f:contentType) &gt;= 1">contentType: minimum cardinality of 'contentType' is 1</sch:assert>
      <sch:assert test="count(f:language) &gt;= 1">language: minimum cardinality of 'language' is 1</sch:assert>
      <sch:assert test="count(f:data) &lt;= 0">data: maximum cardinality of 'data' is 0</sch:assert>
      <sch:assert test="count(f:url) &gt;= 1">url: minimum cardinality of 'url' is 1</sch:assert>
      <sch:assert test="count(f:title) &gt;= 1">title: minimum cardinality of 'title' is 1</sch:assert>
      <sch:assert test="count(f:creation) &gt;= 1">creation: minimum cardinality of 'creation' is 1</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>f:DocumentReference/f:context</sch:title>
    <sch:rule context="f:DocumentReference/f:context">
      <sch:assert test="count(f:facilityType) &gt;= 1">facilityType: minimum cardinality of 'facilityType' is 1</sch:assert>
      <sch:assert test="count(f:practiceSetting) &gt;= 1">practiceSetting: minimum cardinality of 'practiceSetting' is 1</sch:assert>
      <sch:assert test="count(f:sourcePatientInfo) &gt;= 1">sourcePatientInfo: minimum cardinality of 'sourcePatientInfo' is 1</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>f:DocumentReference/f:context/f:related</sch:title>
    <sch:rule context="f:DocumentReference/f:context/f:related">
      <sch:assert test="count(f:id) &lt;= 1">id: maximum cardinality of 'id' is 1</sch:assert>
      <sch:assert test="count(f:reference) &lt;= 1">reference: maximum cardinality of 'reference' is 1</sch:assert>
      <sch:assert test="count(f:type) &lt;= 1">type: maximum cardinality of 'type' is 1</sch:assert>
      <sch:assert test="count(f:identifier) &lt;= 1">identifier: maximum cardinality of 'identifier' is 1</sch:assert>
      <sch:assert test="count(f:display) &lt;= 1">display: maximum cardinality of 'display' is 1</sch:assert>
    </sch:rule>
  </sch:pattern>
</sch:schema>
