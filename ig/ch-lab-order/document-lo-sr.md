# CH LAB-Order with Service Request - CH LAB-Order (R4) v3.0.0

* [**Table of Contents**](toc.md)
* **CH LAB-Order with Service Request**

## CH LAB-Order with Service Request

### FHIR document (Bundle)

This exchange format is defined as a [document type](https://www.hl7.org/fhir/documents.html) that corresponds to a [Bundle](https://www.hl7.org/fhir/bundle.html) as a FHIR resource. A [Bundle](https://www.hl7.org/fhir/bundle.html) has a list of entries. The first entry is the [Composition](https://www.hl7.org/fhir/composition.html), in which all contained entries are then referenced.

![](LabOrderWithSR.png)

*Fig.: Laboratory Order without Questionnaire*

* **Profile:** [CH LAB-Order Document with Service Request](StructureDefinition-ch-lab-order-document-with-sr.md)
* **Example**: CH LAB-Order Example Document with Service Request ([XML](Bundle-ch-lab-order-document-with-sr.xml.md), [JSON](Bundle-ch-lab-order-document-with-sr.json.md))

