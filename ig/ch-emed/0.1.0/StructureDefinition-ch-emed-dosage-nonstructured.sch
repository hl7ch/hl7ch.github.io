<?xml version="1.0" encoding="UTF-8"?>
<sch:schema xmlns:sch="http://purl.oclc.org/dsdl/schematron" queryBinding="xslt2">
  <sch:ns prefix="f" uri="http://hl7.org/fhir"/>
  <sch:ns prefix="h" uri="http://www.w3.org/1999/xhtml"/>
  <!-- 
    This file contains just the constraints for the profile Dosage
    It includes the base constraints for the resource as well.
    Because of the way that schematrons and containment work, 
    you may need to use this schematron fragment to build a, 
    single schematron that validates contained resources (if you have any) 
  -->
  <sch:pattern>
    <sch:title>f:Dosage</sch:title>
    <sch:rule context="f:Dosage">
      <sch:assert test="count(f:sequence) &lt;= 0">sequence: maximum cardinality of 'sequence' is 0</sch:assert>
      <sch:assert test="count(f:text) &gt;= 1">text: minimum cardinality of 'text' is 1</sch:assert>
      <sch:assert test="count(f:additionalInstruction) &lt;= 0">additionalInstruction: maximum cardinality of 'additionalInstruction' is 0</sch:assert>
      <sch:assert test="count(f:patientInstruction) &lt;= 0">patientInstruction: maximum cardinality of 'patientInstruction' is 0</sch:assert>
      <sch:assert test="count(f:timing) &lt;= 0">timing: maximum cardinality of 'timing' is 0</sch:assert>
      <sch:assert test="count(f:asNeeded[x]) &lt;= 0">asNeeded[x]: maximum cardinality of 'asNeeded[x]' is 0</sch:assert>
      <sch:assert test="count(f:site) &lt;= 0">site: maximum cardinality of 'site' is 0</sch:assert>
      <sch:assert test="count(f:route) &lt;= 0">route: maximum cardinality of 'route' is 0</sch:assert>
      <sch:assert test="count(f:method) &lt;= 0">method: maximum cardinality of 'method' is 0</sch:assert>
      <sch:assert test="count(f:doseAndRate) &lt;= 0">doseAndRate: maximum cardinality of 'doseAndRate' is 0</sch:assert>
      <sch:assert test="count(f:maxDosePerPeriod) &lt;= 0">maxDosePerPeriod: maximum cardinality of 'maxDosePerPeriod' is 0</sch:assert>
      <sch:assert test="count(f:maxDosePerAdministration) &lt;= 0">maxDosePerAdministration: maximum cardinality of 'maxDosePerAdministration' is 0</sch:assert>
      <sch:assert test="count(f:maxDosePerLifetime) &lt;= 0">maxDosePerLifetime: maximum cardinality of 'maxDosePerLifetime' is 0</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>Dosage</sch:title>
    <sch:rule context="f:Dosage">
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>Dosage.extension</sch:title>
    <sch:rule context="f:Dosage/f:extension">
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children</sch:assert>
      <sch:assert test="exists(f:extension)!=exists(f:*[starts-with(local-name(.), &quot;value&quot;)])">Must have either extensions or value[x], not both</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>Dosage.modifierExtension</sch:title>
    <sch:rule context="f:Dosage/f:modifierExtension">
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
      <sch:assert test="exists(f:extension)!=exists(f:*[starts-with(local-name(.), &quot;value&quot;)])">Must have either extensions or value[x], not both (inherited)</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>Dosage.sequence</sch:title>
    <sch:rule context="f:Dosage/f:sequence">
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>Dosage.text</sch:title>
    <sch:rule context="f:Dosage/f:text">
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>Dosage.additionalInstruction</sch:title>
    <sch:rule context="f:Dosage/f:additionalInstruction">
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>Dosage.patientInstruction</sch:title>
    <sch:rule context="f:Dosage/f:patientInstruction">
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>Dosage.timing</sch:title>
    <sch:rule context="f:Dosage/f:timing">
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>Dosage.asNeeded[x] 1</sch:title>
    <sch:rule context="f:Dosage/f:asNeeded[x]">
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>Dosage.site</sch:title>
    <sch:rule context="f:Dosage/f:site">
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>Dosage.route</sch:title>
    <sch:rule context="f:Dosage/f:route">
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>Dosage.method</sch:title>
    <sch:rule context="f:Dosage/f:method">
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>Dosage.doseAndRate</sch:title>
    <sch:rule context="f:Dosage/f:doseAndRate">
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>Dosage.doseAndRate.extension</sch:title>
    <sch:rule context="f:Dosage/f:doseAndRate/f:extension">
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children</sch:assert>
      <sch:assert test="exists(f:extension)!=exists(f:*[starts-with(local-name(.), &quot;value&quot;)])">Must have either extensions or value[x], not both</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>Dosage.doseAndRate.type</sch:title>
    <sch:rule context="f:Dosage/f:doseAndRate/f:type">
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>Dosage.doseAndRate.dose[x] 1</sch:title>
    <sch:rule context="f:Dosage/f:doseAndRate/f:dose[x]">
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>Dosage.doseAndRate.rate[x] 1</sch:title>
    <sch:rule context="f:Dosage/f:doseAndRate/f:rate[x]">
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>Dosage.maxDosePerPeriod</sch:title>
    <sch:rule context="f:Dosage/f:maxDosePerPeriod">
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>Dosage.maxDosePerAdministration</sch:title>
    <sch:rule context="f:Dosage/f:maxDosePerAdministration">
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>Dosage.maxDosePerLifetime</sch:title>
    <sch:rule context="f:Dosage/f:maxDosePerLifetime">
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
    </sch:rule>
  </sch:pattern>
</sch:schema>
