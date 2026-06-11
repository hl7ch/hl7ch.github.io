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
      <sch:assert test="count(f:clinicalStatus) &lt;= 0">clinicalStatus: maximum cardinality of 'clinicalStatus' is 0</sch:assert>
      <sch:assert test="count(f:category) &lt;= 0">category: maximum cardinality of 'category' is 0</sch:assert>
      <sch:assert test="count(f:severity) &lt;= 0">severity: maximum cardinality of 'severity' is 0</sch:assert>
      <sch:assert test="count(f:code) &gt;= 1">code: minimum cardinality of 'code' is 1</sch:assert>
      <sch:assert test="count(f:evidence) &gt;= 1">evidence: minimum cardinality of 'evidence' is 1</sch:assert>
      <sch:assert test="count(f:evidence) &lt;= 1">evidence: maximum cardinality of 'evidence' is 1</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>f:Condition/f:evidence</sch:title>
    <sch:rule context="f:Condition/f:evidence">
      <sch:assert test="count(f:detail) &gt;= 1">detail: minimum cardinality of 'detail' is 1</sch:assert>
      <sch:assert test="count(f:detail) &lt;= 1">detail: maximum cardinality of 'detail' is 1</sch:assert>
    </sch:rule>
  </sch:pattern>
</sch:schema>
