<?xml version="1.0" encoding="UTF-8"?>
<sch:schema xmlns:sch="http://purl.oclc.org/dsdl/schematron" queryBinding="xslt2">
  <sch:ns prefix="f" uri="http://hl7.org/fhir"/>
  <sch:ns prefix="h" uri="http://www.w3.org/1999/xhtml"/>
  <!-- 
    This file contains just the constraints for the profile AuditEvent
    It includes the base constraints for the resource as well.
    Because of the way that schematrons and containment work, 
    you may need to use this schematron fragment to build a, 
    single schematron that validates contained resources (if you have any) 
  -->
  <sch:pattern>
    <sch:title>f:AuditEvent</sch:title>
    <sch:rule context="f:AuditEvent">
      <sch:assert test="count(f:modifierExtension) &lt;= 0">modifierExtension: maximum cardinality of 'modifierExtension' is 0</sch:assert>
      <sch:assert test="count(f:outcome) &gt;= 1">outcome: minimum cardinality of 'outcome' is 1</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>f:AuditEvent/f:agent</sch:title>
    <sch:rule context="f:AuditEvent/f:agent">
      <sch:assert test="count(f:type) &gt;= 1">type: minimum cardinality of 'type' is 1</sch:assert>
      <sch:assert test="count(f:who) &gt;= 1">who: minimum cardinality of 'who' is 1</sch:assert>
      <sch:assert test="count(f:network) &gt;= 1">network: minimum cardinality of 'network' is 1</sch:assert>
      <sch:assert test="count(f:type) &gt;= 1">type: minimum cardinality of 'type' is 1</sch:assert>
      <sch:assert test="count(f:who) &gt;= 1">who: minimum cardinality of 'who' is 1</sch:assert>
      <sch:assert test="count(f:network) &gt;= 1">network: minimum cardinality of 'network' is 1</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>f:AuditEvent/f:entity</sch:title>
    <sch:rule context="f:AuditEvent/f:entity">
      <sch:assert test="count(f:what) &gt;= 1">what: minimum cardinality of 'what' is 1</sch:assert>
      <sch:assert test="count(f:type) &gt;= 1">type: minimum cardinality of 'type' is 1</sch:assert>
      <sch:assert test="count(f:what) &gt;= 1">what: minimum cardinality of 'what' is 1</sch:assert>
      <sch:assert test="count(f:type) &gt;= 1">type: minimum cardinality of 'type' is 1</sch:assert>
    </sch:rule>
  </sch:pattern>
</sch:schema>
