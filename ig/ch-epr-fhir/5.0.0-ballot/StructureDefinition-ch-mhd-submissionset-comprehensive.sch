<?xml version="1.0" encoding="UTF-8"?>
<sch:schema xmlns:sch="http://purl.oclc.org/dsdl/schematron" queryBinding="xslt2">
  <sch:ns prefix="f" uri="http://hl7.org/fhir"/>
  <sch:ns prefix="h" uri="http://www.w3.org/1999/xhtml"/>
  <!-- 
    This file contains just the constraints for the profile SubmissionSetComprehensiveUnContained
    It includes the base constraints for the resource as well.
    Because of the way that schematrons and containment work, 
    you may need to use this schematron fragment to build a, 
    single schematron that validates contained resources (if you have any) 
  -->
  <sch:pattern>
    <sch:title>f:List</sch:title>
    <sch:rule context="f:List">
      <sch:assert test="count(f:extension[@url = 'https://profiles.ihe.net/ITI/MHD/StructureDefinition/ihe-designationType']) &gt;= 1">extension with URL = 'https://profiles.ihe.net/ITI/MHD/StructureDefinition/ihe-designationType': minimum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'https://profiles.ihe.net/ITI/MHD/StructureDefinition/ihe-designationType']) &lt;= 1">extension with URL = 'https://profiles.ihe.net/ITI/MHD/StructureDefinition/ihe-designationType': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'https://profiles.ihe.net/ITI/MHD/StructureDefinition/ihe-sourceId']) &gt;= 1">extension with URL = 'https://profiles.ihe.net/ITI/MHD/StructureDefinition/ihe-sourceId': minimum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'https://profiles.ihe.net/ITI/MHD/StructureDefinition/ihe-sourceId']) &lt;= 1">extension with URL = 'https://profiles.ihe.net/ITI/MHD/StructureDefinition/ihe-sourceId': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-ext-author-authorrole']) &lt;= 1">extension with URL = 'http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-ext-author-authorrole': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:entry) &gt;= 1">entry: minimum cardinality of 'entry' is 1</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>f:List/f:extension</sch:title>
    <sch:rule context="f:List/f:extension">
      <sch:assert test="count(f:id) &lt;= 1">id: maximum cardinality of 'id' is 1</sch:assert>
      <sch:assert test="count(f:url) &gt;= 1">url: minimum cardinality of 'url' is 1</sch:assert>
      <sch:assert test="count(f:url) &lt;= 1">url: maximum cardinality of 'url' is 1</sch:assert>
      <sch:assert test="count(f:value[x]) &gt;= 1">value[x]: minimum cardinality of 'value[x]' is 1</sch:assert>
      <sch:assert test="count(f:value[x]) &lt;= 1">value[x]: maximum cardinality of 'value[x]' is 1</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>f:List/f:subject</sch:title>
    <sch:rule context="f:List/f:subject">
      <sch:assert test="count(f:id) &lt;= 1">id: maximum cardinality of 'id' is 1</sch:assert>
      <sch:assert test="count(f:reference) &lt;= 1">reference: maximum cardinality of 'reference' is 1</sch:assert>
      <sch:assert test="count(f:type) &lt;= 1">type: maximum cardinality of 'type' is 1</sch:assert>
      <sch:assert test="count(f:identifier) &gt;= 1">identifier: minimum cardinality of 'identifier' is 1</sch:assert>
      <sch:assert test="count(f:identifier) &lt;= 1">identifier: maximum cardinality of 'identifier' is 1</sch:assert>
      <sch:assert test="count(f:display) &lt;= 1">display: maximum cardinality of 'display' is 1</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>f:List/f:source</sch:title>
    <sch:rule context="f:List/f:source">
      <sch:assert test="count(f:extension[@url = 'https://profiles.ihe.net/ITI/MHD/StructureDefinition/ihe-authorOrg']) &lt;= 0">extension with URL = 'https://profiles.ihe.net/ITI/MHD/StructureDefinition/ihe-authorOrg': maximum cardinality of 'extension' is 0</sch:assert>
    </sch:rule>
  </sch:pattern>
</sch:schema>
