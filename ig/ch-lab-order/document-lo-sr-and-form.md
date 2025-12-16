# CH LAB-Order with Service Request and Form - CH LAB-Order (R4) v3.0.0

* [**Table of Contents**](toc.md)
* **CH LAB-Order with Service Request and Form**

## CH LAB-Order with Service Request and Form

### FHIR document (Bundle)

This exchange format is defined as a [document type](https://www.hl7.org/fhir/documents.html) that corresponds to a [Bundle](https://www.hl7.org/fhir/bundle.html) as a FHIR resource. A [Bundle](https://www.hl7.org/fhir/bundle.html) has a list of entries. The first entry is the [Composition](https://www.hl7.org/fhir/composition.html), in which all contained entries are then referenced.

![](LabOrderWithSR_andForm.png)

*Fig.: Laboratory Order with Questionnaire*

* **Profile**: [CH LAB-Order Document with ServiceRequest and Form](StructureDefinition-ch-lab-order-document-with-sr-and-form.md)
* **Example**: CH LAB-Order Document with ServiceRequest and Form ([XML](Bundle-ch-lab-order-with-sr-and-form.xml.md), [JSON](Bundle-ch-lab-order-with-sr-and-form.json.md))
* **Specification:** [Specification Questionnaire](Questionnaire-LabOrder-form.md)
* **Example Form:** [Questionnaire Lab Order](https://laborprojektgruppe.ch/questionnaire/)

