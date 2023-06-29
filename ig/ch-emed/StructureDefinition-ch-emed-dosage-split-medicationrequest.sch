<?xml version="1.0" encoding="UTF-8"?>
<sch:schema xmlns:sch="http://purl.oclc.org/dsdl/schematron" queryBinding="xslt2">
  <sch:ns prefix="f" uri="http://hl7.org/fhir"/>
  <sch:ns prefix="h" uri="http://www.w3.org/1999/xhtml"/>
  <!-- 
    This file contains just the constraints for the profile CHEMEDDosageSplit
    It includes the base constraints for the resource as well.
    Because of the way that schematrons and containment work, 
    you may need to use this schematron fragment to build a, 
    single schematron that validates contained resources (if you have any) 
  -->
  <sch:pattern>
    <sch:title>f:Dosage</sch:title>
    <sch:rule context="f:Dosage">
      <sch:assert test="count(f:timing) &gt;= 1">timing: minimum cardinality of 'timing' is 1</sch:assert>
      <sch:assert test="count(f:doseAndRate) &gt;= 1">doseAndRate: minimum cardinality of 'doseAndRate' is 1</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>f:Dosage/f:timing</sch:title>
    <sch:rule context="f:Dosage/f:timing">
      <sch:assert test="count(f:repeat) &gt;= 1">repeat: minimum cardinality of 'repeat' is 1</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>f:Dosage/f:timing/f:repeat</sch:title>
    <sch:rule context="f:Dosage/f:timing/f:repeat">
      <sch:assert test="count(f:when) &gt;= 1">when: minimum cardinality of 'when' is 1</sch:assert>
    </sch:rule>
  </sch:pattern>
</sch:schema>
