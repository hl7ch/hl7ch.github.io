# Artifacts Summary - CH LAB-Order (R4) v3.0.0

* [**Table of Contents**](toc.md)
* **Artifacts Summary**

## Artifacts Summary

This page provides a list of the FHIR artifacts defined as part of this implementation guide.

### Structures: Resource Profiles 

These define constraints on FHIR resources for systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [CH LAB-Order Composition with ServiceRequest](StructureDefinition-ch-lab-order-composition-with-sr.md) | Definition of the Composition resource using ServiceRequest. |
| [CH LAB-Order Composition with ServiceRequest and Form](StructureDefinition-ch-lab-order-composition-with-sr-and-form.md) | Definition of the Composition resource using ServiceRequest and Form. |
| [CH LAB-Order Document with ServiceRequest](StructureDefinition-ch-lab-order-document-with-sr.md) | Definition of the Bundle resource to describe the lab order document using ServiceRequest. |
| [CH LAB-Order Document with ServiceRequest and Form](StructureDefinition-ch-lab-order-document-with-sr-and-form.md) | Definition of the Bundle resource to describe the lab order document using ServiceRequest and Form. |
| [CH LAB-Order DocumentReference](StructureDefinition-ch-lab-order-document-reference.md) | Definition of the DocumentReference resource to describe how to provide a reference to a document to make it available to a healthcare system. |
| [CH LAB-Order ServiceRequest](StructureDefinition-ch-lab-order-SR.md) | Definition of the ServiceRequest resource to describe a single lab test order. |

### Terminology: Value Sets 

These define sets of codes used by systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [All Valid Reasons for Ordering a Lab Service](ValueSet-reasons-for-order.md) | Broadest value set of valid reasons for ordering laboratory services |
| [Laboratory Study Types](ValueSet-ch-lab-order-study-types.md) | refers to https://wiki.ihe.net/index.php/1.3.6.1.4.1.19376.1.3.3.2.1, but without some errors |
| [Microbiological Procedure](ValueSet-MicrobiolProcedures.md) | Valueset Snomed CT Codes of Microbiological Procedures |
| [Order Control Codes used in CH LAB-Order](ValueSet-ch-lab-vs-order-control.md) | Contains some codes of placer applications from v2-0119 table |
| [Service Request Categories for Questionnaires](ValueSet-ServiceRequest.categories.md) | ch-lab-order Service Request Categories |

### Terminology: Code Systems 

These define new code systems used by systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [Service Request Categories for Questionnaires](CodeSystem-ServiceRequest.categories.md) | ch-lab-order defines 10 different Kinds of Service Request |
| [Service Request Processing Procedure](CodeSystem-Specimen.processing.procedure.md) | ch-lab-order defines 2 different Kinds of Processing Procedures, replaced by http://hl7.org/fhir/ValueSet/handling-condition |

### Example: Example Instances 

These are example instances that show what data produced and consumed by systems conforming with this implementation guide might look like.

| | |
| :--- | :--- |
| [Anticoagulant Effect](Bundle-0-best-practice-document-with-sr.md) | CH LAB-Order Document with Service Request |
| [Biological Monitoring](Bundle-5-biol-monit-document-with-sr.md) | CH LAB-Order Document with Service Request |
| [Biological Monitoring](Bundle-5-biol-monit-document-with-sr-and-form.md) | CH LAB-Order Document with Service Request and Form |
| [CH LAB-Order Document with ServiceRequest](Bundle-ch-lab-order-document-with-sr.md) | Document for referral/order of Potassium in Serum |
| [CH LAB-Order Document with ServiceRequest and Form](Bundle-ch-lab-order-with-sr-and-form.md) | Document for referral/order due to suspected deep vein thrombosis |
| [CH LAB-Order Form example](Questionnaire-LabOrder-form.md) | assembled from LabOrder-form-modular |
| [Deep Vein Thrombosis](Bundle-1-tvt-document-with-sr.md) | CH LAB-Order Document with Service Request |
| [Deep Vein Thrombosis](Bundle-1-tvt-document-with-sr-and-form.md) | CH LAB-Order Document with Service Request and Form |
| [Gynecological Checkup](Bundle-3-gyn-document.md) | CH LAB-Order Document with Service Request |
| [Gynecological Checkup](Bundle-3-gyn-document-with-sr-and-form.md) | CH LAB-Order Document with Service Request and Form |
| [Histopathological Examination](Bundle-6-histopath-document-with-sr.md) | CH LAB-Order Document with Service Request |
| [Histopathological Examination](Bundle-6-histopath-document-with-sr-and-form.md) | CH LAB-Order Document with Service Request and Form |
| [Pertussis](Bundle-2-pertussis-document-with-sr.md) | CH LAB-Order Document with Service Request |
| [Pertussis](Bundle-2-pertussis-document-with-sr-and-form.md) | CH LAB-Order Document with Service Request and Form |

