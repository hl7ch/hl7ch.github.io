# Document - CH LAB-Report (R4) v2.0.0

* [**Table of Contents**](toc.md)
* **Document**

## Document

### FHIR document (Bundle)

This exchange format is defined as a [document type](https://www.hl7.org/fhir/r4/documents.html) that corresponds to a [Bundle](https://www.hl7.org/fhir/r4/bundle.html) as a FHIR resource. A [Bundle](https://www.hl7.org/fhir/r4/bundle.html) has a list of entries. The first entry is the [Composition](https://www.hl7.org/fhir/r4/composition.html), in which all contained entries are then referenced.

![](LabReport.png)

*Fig.: Laboratory Report*

* **Profile**: [CH LAB-Report-Report](StructureDefinition-ch-lab-report-document.md)
* **Example Deep Vein Thrombosis**: CH LAB-Report Document ([XML](Bundle-LabResultReport-1-tvt.xml.md), [JSON](Bundle-LabResultReport-1-tvt.json.md))
* **Example Electrophoresis**: CH LAB-Report Document ([XML](Bundle-LabResultReport-2-electrophoresis.xml.md), [JSON](Bundle-LabResultReport-2-electrophoresis.json.md))
* **Example Breath-Test**: CH LAB-Report Document ([XML](Bundle-LabResultReport-3-breath-test.xml.md), [JSON](Bundle-LabResultReport-3-breath-test.json.md))
* **Example Sepsis**: CH LAB-Report Document ([XML](Bundle-LabResultReport-4-sepsis.xml.md), [JSON](Bundle-LabResultReport-4-sepsis.json.md))

