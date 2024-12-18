<?xml version="1.0" encoding="UTF-8"?>
<sch:schema xmlns:sch="http://purl.oclc.org/dsdl/schematron" queryBinding="xslt2">
  <sch:ns prefix="f" uri="http://hl7.org/fhir"/>
  <sch:ns prefix="h" uri="http://www.w3.org/1999/xhtml"/>
  <!-- 
    This file contains just the constraints for the profile CHCoreCondition
    It includes the base constraints for the resource as well.
    Because of the way that schematrons and containment work, 
    you may need to use this schematron fragment to build a, 
    single schematron that validates contained resources (if you have any) 
  -->
  <sch:pattern>
    <sch:title>f:Condition</sch:title>
    <sch:rule context="f:Condition">
      <sch:assert test="count(f:extension[@url = 'http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-caveat-type']) &gt;= 1">extension with URL = 'http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-caveat-type': minimum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-caveat-type']) &lt;= 1">extension with URL = 'http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-caveat-type': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-qualifier-value']) &gt;= 1">extension with URL = 'http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-qualifier-value': minimum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-qualifier-value']) &lt;= 1">extension with URL = 'http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-qualifier-value': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:category) &gt;= 1">category: minimum cardinality of 'category' is 1</sch:assert>
      <sch:assert test="count(f:category) &lt;= 1">category: maximum cardinality of 'category' is 1</sch:assert>
      <sch:assert test="count(f:code) &gt;= 1">code: minimum cardinality of 'code' is 1</sch:assert>
    </sch:rule>
  </sch:pattern>
</sch:schema>
