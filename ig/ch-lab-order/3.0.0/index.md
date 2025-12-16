# Home - CH LAB-Order (R4) v3.0.0

* [**Table of Contents**](toc.md)
* **Home**

## Home

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-lab-order/ImplementationGuide/ch.fhir.ig.ch-lab-order | *Version*:3.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CH_LAB_ORDER |
| **Copyright/Legal**: CC0-1.0 | |

### HL7 Swiss FHIR Implementation Guide for Generic Laboratory Orders

During the STU3 ballot by [HL7 Switzerland](https://www.hl7.ch/de/) negative comments were raised that a further evolution of the Laboratory Order Implementation Guide should not be document-based, but based on the fundamental patterns described in the [Clinical Order Workflow (COW) Implementation Guide](https://hl7.org/fhir/uv/cow/2025May/). The lab group agreed that clinical order workflows should be the long-term goal and future of LAB Order. However, due to lack of resources it is proposed to stick with the document-based approach. The successful implementation and establishment of this approach is already considered a significant improvement.

[Changelog](changelog.md) with significant changes, open and closed issues.

#### Laboratory Order with Service Request

This is the HL7 Swiss FHIR Implementation Guide for Laboratory Orders. Electronic Medical Records (EMR) systems can send an electronic laboratory order to a Laboratory Information System (the order filler of a LIS). This laboratory order consists of a FHIR bundle resource of type 'document' with the necessary information about the patient, his medication and his conditions (the clinical context), the ordering practitioner, the organization, the laboratory, etc. The analyses that are requested are available as code and as text in the ServiceRequest resource. This resource contains further important information about the reason for the order, the payer, and the material sample. This specimen resource, in turn, contains information about the collection, the processing details, any required additives, and the container type to be used, among other things. So all the necessary information for executing the laboratory order is available for the receiving laboratory, and there is no necessity for a Questionnaire and QuestionnaireResponse resource. This quite common use case primarily occurs in hospitals that operate their own medical laboratory.

[CH Core](https://fhir.ch/ig/ch-core/index.html) and [CH Term](https://fhir.ch/ig/ch-term/index.html) are used to take account of national requirements.

#### Laboratory Order with Service Request and Form (optional)

There is another use case in which the commissioning laboratory provides the client with a form, similar to how laboratories forms are used to serve clients with paper-based forms. The lab order appears again as a FHIR bundle resource of type 'document'. This situation is implemented here using [CH ORF, Order & Referral by Form Implementation Guide](http://fhir.ch/ig/ch-orf/index.html) to structure the input of the administrative and clinical data (data provider, contact for order-document, recipient, copy recipient, document type and document class, patient, author, tests, specimen etc). It includes the two resources Questionnaire (form) and QuestionnaireResponse (completed form) in the document in addition to the ServiceRequest resource. The CH ORF Implementation Guide is based on the [SDC](http://hl7.org/fhir/uv/sdc/STU3/) framework and applies its concepts to provide user-friendly forms featuring pre-populated fields and ValueSet-driven selections.

#### Download

You can download this Implementation Guide in [NPM-format](https://confluence.hl7.org/display/FHIR/NPM+Package+Specification) from [here](https://fhir.ch/ig/ch-lab-order/package.tgz).

### Foundation

Data exchange with different information systems (practice, hospital, laboratory) quickly becomes confusing due to proprietary solutions (n:m cardinality). Therefore, the question arises whether a standardized order interface is the more favorable solution in the long run.

#### Laboratory Order with Service Request

This implementation Guide uses FHIR Resources. The complete laboratory order is a bundle resource of type document. The first entry is the composition containing the structured data of the order (status, type, category, subject, encounter, date, author, confidentiality, attester etc). A section element has an entry with the Service request reference.

The ServiceRequest may instantiate an ActivityDefinition, a coded procedure to execute a single laboratory test (e.g. Sodium concentration in Serum), or to execute an entire test panel (e.g. concentration of Electrolytes in Serum). Using a ServiceRequest Container we can reference to other ServiceRequest Containers or to Single Test Service Requests.

#### Laboratory Order with Service Request and Form

The lab order can optionally and in addition to the ServiceRequest contain forms as resources, which in this context are called Questionnaire and QuestionnaireResponse. The structure of these forms is [based on ORF](http://fhir.ch/ig/ch-orf/ImplementationGuide/ch.fhir.ig.ch-orf). This allows the data for the laboratory order to be placed in a structured way.

### Requirements

The lab order should define the structure of the order details so it can be used by different laboratories and different providers of practice or clinic systems or independent tool.

1. The partly or fully filled electronic order should be storable in the order placer system (practice system, hospital system), so it can be changed until the samples are scanned by the receiver laboratory.
1. Data about practitioner, patient and treatment should be transferable to the electronic order.
1. In the electronic order all available analyses should be presentable, a search option should be available. The content of panels should be visible.
* The the electronic order should contain analyses and test-panels. Groups of tests, e.g. for "blood count" are usually requested as panels. They are split into service requests for single analyses in the ServiceRequest Container. If the LIS (Laboratory Information System) knows the components of the panels, it can do the splitting itself.

1. Analyses, Sample type, required Sample additives and pre-analytic handling should be presented to the order filler.
* Information for the sample taking should be available for the person preparing the taking of blood.
* A numbering system should be supported, so that relabeling at the laboratory can be limited (eg. practitioner number + number-range).

1. The electronic order should be able to handle the request of analyses for samples that were sent at an earlier point of time.
1. The electronic order should receive updates on the process of the laboratory analyses: as sample received in laboratory, first results available, report finished [Domain of Lab-Report].
* The status of the order at the practitioner site should be supported as well: new order, replaced order (enhanced or partly deleted), printed sample labels, documentation of blood take (additional Information as urine volume and Date and Time of withdrawal of blood).

### Case Studies with Examples for the Order Document

Using concrete case studies ([en](case-studies-english.md), [de](case-studies-german.md), [fr](case-studies-french.md)), we have created examples of documents that contain a laboratory order. These are requirements of laboratory analyses in the field of hematology, clinical chemistry, coagulation and infectious serology. The biological monitoring example covers the special case where several employees of a company send their biological material (serum, urine) to the laboratory for determination of substances hazardous to health (toxicology).

### Copyright

This artefact includes content from SNOMED Clinical Terms® (SNOMED CT®) which is copyright of the International Health Terminology Standards Development Organisation (IHTSDO). Implementers of these artifacts must have the appropriate SNOMED CT Affiliate license - for more information contact [http://www.snomed.org/snomed-ct/getsnomed-ct](http://www.snomed.org/snomed-ct/getsnomed-ct) or [info@snomed.org](mailto:info@snomed.org).

This artefact includes content from LOINC®. This content LOINC® is copyright © 1995 Regenstrief Institute, Inc. and the LOINC Committee, and available at no cost under the license at [http://loinc.org/terms-of-use](http://loinc.org/terms-of-use).

### Safety Considerations

This Implementation Guide defines data elements, resources, formats, and methods for exchanging healthcare data between different participants in the healthcare process. As such, clinical safety is a key concern. Additional guidance regarding safety for the specification’s many and various implementations is available at: [https://www.hl7.org/FHIR/safety.html](https://www.hl7.org/FHIR/safety.html).

Although the present specification gives users the opportunity to observe data protection and data security regulations, its use does not guarantee compliance with these regulations. Effective compliance must be ensured by appropriate measures during implementation projects and in daily operations. The corresponding implementation measures are explained in the standard. In addition, the present specification can only influence compliance with the security regulations in the technical area of standardisation. It cannot influence organisational and contractual matters.

### IP Statements

This document is licensed under Creative Commons "No Rights Reserved" ([CC0](https://creativecommons.org/publicdomain/zero/1.0/)).

HL7®, HEALTH LEVEL SEVEN®, FHIR® and the FHIR ![](icon-fhir-16.png)® are trademarks owned by Health Level Seven International, registered with the United States Patent and Trademark Office.

This Implementation Guide contains and references intellectual property owned by third parties ("Third Party IP"). Acceptance of these License Terms does not grant any rights with respect to Third Party IP. The licensee alone is responsible for identifying and obtaining any necessary licenses or authorizations to utilize Third Party IP in connection with the specification or otherwise.

This publication includes IP covered under the following statements.

* CC0-1.0

* [BFS Medizinische Statistik - 25 1.4.V02 - Hauptkostenträger für Grundversicherungsleistungen / Prise en charge des soins de base / Unità d’imputazione principale per le prestazioni dell’assicurazione di base](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-bfs-medstats-25-mainguarantor.html): [Bundle/1-tvt-document-with-sr](Bundle-1-tvt-document-with-sr.md) and [Bundle/1-tvt-document-with-sr-and-form](Bundle-1-tvt-document-with-sr-and-form.md)
* [eCH-011 MaritalStatus](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-ech-11-maritalstatus.html): [Bundle/0-best-practice-document-with-sr](Bundle-0-best-practice-document-with-sr.md), [Bundle/1-tvt-document-with-sr](Bundle-1-tvt-document-with-sr.md)...Show 12 more,[Bundle/1-tvt-document-with-sr-and-form](Bundle-1-tvt-document-with-sr-and-form.md),[Bundle/2-pertussis-document-with-sr](Bundle-2-pertussis-document-with-sr.md),[Bundle/2-pertussis-document-with-sr-and-form](Bundle-2-pertussis-document-with-sr-and-form.md),[Bundle/3-gyn-document](Bundle-3-gyn-document.md),[Bundle/3-gyn-document-with-sr-and-form](Bundle-3-gyn-document-with-sr-and-form.md),[Bundle/5-biol-monit-document-with-sr](Bundle-5-biol-monit-document-with-sr.md),[Bundle/5-biol-monit-document-with-sr-and-form](Bundle-5-biol-monit-document-with-sr-and-form.md),[Bundle/6-histopath-document-with-sr](Bundle-6-histopath-document-with-sr.md),[Bundle/6-histopath-document-with-sr-and-form](Bundle-6-histopath-document-with-sr-and-form.md),[Bundle/ch-lab-order-document-with-sr](Bundle-ch-lab-order-document-with-sr.md),[Bundle/ch-lab-order-with-sr-and-form](Bundle-ch-lab-order-with-sr-and-form.md)and[LabOrderFormCaseStudies](Questionnaire-LabOrder-form.md)
* [Service Request Categories for Questionnaires](CodeSystem-ServiceRequest.categories.md): [ServiceRequestCategories](ValueSet-ServiceRequest.categories.md)
* [Coverage Identifier Type](http://fhir.ch/ig/ch-orf/3.0.2/CodeSystem-ch-orf-cs-coverageidentifiertype.html): [Bundle/1-tvt-document-with-sr](Bundle-1-tvt-document-with-sr.md) and [Bundle/1-tvt-document-with-sr-and-form](Bundle-1-tvt-document-with-sr-and-form.md)
* [ch-ehealth-codesystem-medreg](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-2.16.756.5.30.1.127.3.5.html): [Bundle/5-biol-monit-document-with-sr](Bundle-5-biol-monit-document-with-sr.md), [Bundle/5-biol-monit-document-with-sr-and-form](Bundle-5-biol-monit-document-with-sr-and-form.md), [Bundle/6-histopath-document-with-sr](Bundle-6-histopath-document-with-sr.md) and [Bundle/6-histopath-document-with-sr-and-form](Bundle-6-histopath-document-with-sr-and-form.md)


* ISO maintains the copyright on the country codes, and controls its use carefully. For further details see the ISO 3166 web page: [https://www.iso.org/iso-3166-country-codes.html](https://www.iso.org/iso-3166-country-codes.html)

* [ISO 3166-1 Codes for the representation of names of countries and their subdivisions — Part 1: Country code](http://terminology.hl7.org/6.5.0/CodeSystem-ISO3166Part1.html): [Bundle/1-tvt-document-with-sr-and-form](Bundle-1-tvt-document-with-sr-and-form.md), [Bundle/2-pertussis-document-with-sr-and-form](Bundle-2-pertussis-document-with-sr-and-form.md)...Show 19 more,[Bundle/3-gyn-document-with-sr-and-form](Bundle-3-gyn-document-with-sr-and-form.md),[Bundle/5-biol-monit-document-with-sr-and-form](Bundle-5-biol-monit-document-with-sr-and-form.md),[Bundle/6-histopath-document-with-sr-and-form](Bundle-6-histopath-document-with-sr-and-form.md),[Bundle/ch-lab-order-with-sr-and-form](Bundle-ch-lab-order-with-sr-and-form.md),[CH_LAB_ORDER](index.md),[ChLabOrderCompositionWithSR](StructureDefinition-ch-lab-order-composition-with-sr.md),[ChLabOrderCompositionWithSR_AndForm](StructureDefinition-ch-lab-order-composition-with-sr-and-form.md),[ChLabOrderDocumentReference](StructureDefinition-ch-lab-order-document-reference.md),[ChLabOrderDocumentWithSR](StructureDefinition-ch-lab-order-document-with-sr.md),[ChLabOrderDocumentWithSR_AndForm](StructureDefinition-ch-lab-order-document-with-sr-and-form.md),[ChLabOrderLabStudyTypes](ValueSet-ch-lab-order-study-types.md),[ChLabOrderSR](StructureDefinition-ch-lab-order-SR.md),[ChLabOrderServiceRequestCategories](CodeSystem-ServiceRequest.categories.md),[ChLabOrderSpecimenProcessingProcedure](CodeSystem-Specimen.processing.procedure.md),[ChLabVSOrderControl](ValueSet-ch-lab-vs-order-control.md),[LabOrderFormCaseStudies](Questionnaire-LabOrder-form.md),[MicrobiolProcedures](ValueSet-MicrobiolProcedures.md),[ReasonsForOrder](ValueSet-reasons-for-order.md)and[ServiceRequestCategories](ValueSet-ServiceRequest.categories.md)


* The UCUM codes, UCUM table (regardless of format), and UCUM Specification are copyright 1999-2009, Regenstrief Institute, Inc. and the Unified Codes for Units of Measures (UCUM) Organization. All rights reserved. [https://ucum.org/trac/wiki/TermsOfUse](https://ucum.org/trac/wiki/TermsOfUse)

* [Unified Code for Units of Measure (UCUM)](http://terminology.hl7.org/6.5.0/CodeSystem-v3-ucum.html): [Bundle/0-best-practice-document-with-sr](Bundle-0-best-practice-document-with-sr.md)


* This material contains content from [LOINC](http://loinc.org). LOINC is copyright © 1995-2020, Regenstrief Institute, Inc. and the Logical Observation Identifiers Names and Codes (LOINC) Committee and is available at no cost under the [license](http://loinc.org/license). LOINC® is a registered United States trademark of Regenstrief Institute, Inc.

* [LOINC](http://terminology.hl7.org/6.5.0/CodeSystem-v3-loinc.html): [Bundle/0-best-practice-document-with-sr](Bundle-0-best-practice-document-with-sr.md), [Bundle/1-tvt-document-with-sr](Bundle-1-tvt-document-with-sr.md)...Show 14 more,[Bundle/1-tvt-document-with-sr-and-form](Bundle-1-tvt-document-with-sr-and-form.md),[Bundle/2-pertussis-document-with-sr](Bundle-2-pertussis-document-with-sr.md),[Bundle/2-pertussis-document-with-sr-and-form](Bundle-2-pertussis-document-with-sr-and-form.md),[Bundle/3-gyn-document](Bundle-3-gyn-document.md),[Bundle/3-gyn-document-with-sr-and-form](Bundle-3-gyn-document-with-sr-and-form.md),[Bundle/5-biol-monit-document-with-sr](Bundle-5-biol-monit-document-with-sr.md),[Bundle/5-biol-monit-document-with-sr-and-form](Bundle-5-biol-monit-document-with-sr-and-form.md),[Bundle/6-histopath-document-with-sr](Bundle-6-histopath-document-with-sr.md),[Bundle/6-histopath-document-with-sr-and-form](Bundle-6-histopath-document-with-sr-and-form.md),[Bundle/ch-lab-order-document-with-sr](Bundle-ch-lab-order-document-with-sr.md),[Bundle/ch-lab-order-with-sr-and-form](Bundle-ch-lab-order-with-sr-and-form.md),[ChLabOrderCompositionWithSR_AndForm](StructureDefinition-ch-lab-order-composition-with-sr-and-form.md),[ChLabOrderLabStudyTypes](ValueSet-ch-lab-order-study-types.md)and[LabOrderFormCaseStudies](Questionnaire-LabOrder-form.md)


* This material contains content that is copyright of SNOMED International. Implementers of these specifications must have the appropriate SNOMED CT Affiliate license - for more information contact [https://www.snomed.org/get-snomed](https://www.snomed.org/get-snomed) or [info@snomed.org](mailto:info@snomed.org).

* [SNOMED Clinical Terms&reg; (SNOMED CT&reg;)](http://tx.fhir.org/r4/ValueSet/snomedct): [Bundle/0-best-practice-document-with-sr](Bundle-0-best-practice-document-with-sr.md), [Bundle/1-tvt-document-with-sr](Bundle-1-tvt-document-with-sr.md)...Show 16 more,[Bundle/1-tvt-document-with-sr-and-form](Bundle-1-tvt-document-with-sr-and-form.md),[Bundle/2-pertussis-document-with-sr](Bundle-2-pertussis-document-with-sr.md),[Bundle/2-pertussis-document-with-sr-and-form](Bundle-2-pertussis-document-with-sr-and-form.md),[Bundle/3-gyn-document](Bundle-3-gyn-document.md),[Bundle/3-gyn-document-with-sr-and-form](Bundle-3-gyn-document-with-sr-and-form.md),[Bundle/5-biol-monit-document-with-sr](Bundle-5-biol-monit-document-with-sr.md),[Bundle/5-biol-monit-document-with-sr-and-form](Bundle-5-biol-monit-document-with-sr-and-form.md),[Bundle/6-histopath-document-with-sr](Bundle-6-histopath-document-with-sr.md),[Bundle/6-histopath-document-with-sr-and-form](Bundle-6-histopath-document-with-sr-and-form.md),[Bundle/ch-lab-order-document-with-sr](Bundle-ch-lab-order-document-with-sr.md),[Bundle/ch-lab-order-with-sr-and-form](Bundle-ch-lab-order-with-sr-and-form.md),[ChLabOrderCompositionWithSR](StructureDefinition-ch-lab-order-composition-with-sr.md),[ChLabOrderCompositionWithSR_AndForm](StructureDefinition-ch-lab-order-composition-with-sr-and-form.md),[ChLabOrderSR](StructureDefinition-ch-lab-order-SR.md),[MicrobiolProcedures](ValueSet-MicrobiolProcedures.md)and[ReasonsForOrder](ValueSet-reasons-for-order.md)


* This material derives from the HL7 Terminology (THO). THO is copyright ©1989+ Health Level Seven International and is made available under the CC0 designation. For more licensing information see: [https://terminology.hl7.org/license.html](https://terminology.hl7.org/license.html)

* [Condition Category Codes](http://terminology.hl7.org/7.0.1/CodeSystem-condition-category.html): [Bundle/0-best-practice-document-with-sr](Bundle-0-best-practice-document-with-sr.md), [Bundle/1-tvt-document-with-sr](Bundle-1-tvt-document-with-sr.md) and [Bundle/1-tvt-document-with-sr-and-form](Bundle-1-tvt-document-with-sr-and-form.md)
* [Condition Clinical Status Codes](http://terminology.hl7.org/7.0.1/CodeSystem-condition-clinical.html): [Bundle/0-best-practice-document-with-sr](Bundle-0-best-practice-document-with-sr.md), [Bundle/1-tvt-document-with-sr](Bundle-1-tvt-document-with-sr.md) and [Bundle/1-tvt-document-with-sr-and-form](Bundle-1-tvt-document-with-sr-and-form.md)
* [ConditionVerificationStatus](http://terminology.hl7.org/7.0.1/CodeSystem-condition-ver-status.html): [Bundle/0-best-practice-document-with-sr](Bundle-0-best-practice-document-with-sr.md), [Bundle/1-tvt-document-with-sr](Bundle-1-tvt-document-with-sr.md) and [Bundle/1-tvt-document-with-sr-and-form](Bundle-1-tvt-document-with-sr-and-form.md)
* [diagnosticServiceSectionId](http://terminology.hl7.org/7.0.1/CodeSystem-v2-0074.html): [Bundle/6-histopath-document-with-sr](Bundle-6-histopath-document-with-sr.md) and [Bundle/6-histopath-document-with-sr-and-form](Bundle-6-histopath-document-with-sr-and-form.md)
* [orderControlCodes](http://terminology.hl7.org/7.0.1/CodeSystem-v2-0119.html): [Bundle/2-pertussis-document-with-sr](Bundle-2-pertussis-document-with-sr.md), [Bundle/2-pertussis-document-with-sr-and-form](Bundle-2-pertussis-document-with-sr-and-form.md), [ChLabOrderSR](StructureDefinition-ch-lab-order-SR.md) and [ChLabVSOrderControl](ValueSet-ch-lab-vs-order-control.md)
* [identifierType](http://terminology.hl7.org/7.0.1/CodeSystem-v2-0203.html): [Bundle/0-best-practice-document-with-sr](Bundle-0-best-practice-document-with-sr.md), [Bundle/1-tvt-document-with-sr](Bundle-1-tvt-document-with-sr.md)...Show 12 more,[Bundle/1-tvt-document-with-sr-and-form](Bundle-1-tvt-document-with-sr-and-form.md),[Bundle/2-pertussis-document-with-sr](Bundle-2-pertussis-document-with-sr.md),[Bundle/2-pertussis-document-with-sr-and-form](Bundle-2-pertussis-document-with-sr-and-form.md),[Bundle/3-gyn-document](Bundle-3-gyn-document.md),[Bundle/3-gyn-document-with-sr-and-form](Bundle-3-gyn-document-with-sr-and-form.md),[Bundle/5-biol-monit-document-with-sr](Bundle-5-biol-monit-document-with-sr.md),[Bundle/5-biol-monit-document-with-sr-and-form](Bundle-5-biol-monit-document-with-sr-and-form.md),[Bundle/6-histopath-document-with-sr](Bundle-6-histopath-document-with-sr.md),[Bundle/6-histopath-document-with-sr-and-form](Bundle-6-histopath-document-with-sr-and-form.md),[Bundle/ch-lab-order-document-with-sr](Bundle-ch-lab-order-document-with-sr.md),[Bundle/ch-lab-order-with-sr-and-form](Bundle-ch-lab-order-with-sr-and-form.md)and[ChLabOrderSR](StructureDefinition-ch-lab-order-SR.md)
* [additivePreservative](http://terminology.hl7.org/7.0.1/CodeSystem-v2-0371.html): [Bundle/0-best-practice-document-with-sr](Bundle-0-best-practice-document-with-sr.md), [Bundle/1-tvt-document-with-sr](Bundle-1-tvt-document-with-sr.md) and [Bundle/1-tvt-document-with-sr-and-form](Bundle-1-tvt-document-with-sr-and-form.md)
* [relevantClincialInformation](http://terminology.hl7.org/7.0.1/CodeSystem-v2-0916.html): [Bundle/0-best-practice-document-with-sr](Bundle-0-best-practice-document-with-sr.md), [Bundle/1-tvt-document-with-sr](Bundle-1-tvt-document-with-sr.md)...Show 5 more,[Bundle/1-tvt-document-with-sr-and-form](Bundle-1-tvt-document-with-sr-and-form.md),[Bundle/3-gyn-document](Bundle-3-gyn-document.md),[Bundle/3-gyn-document-with-sr-and-form](Bundle-3-gyn-document-with-sr-and-form.md),[Bundle/ch-lab-order-document-with-sr](Bundle-ch-lab-order-document-with-sr.md)and[Bundle/ch-lab-order-with-sr-and-form](Bundle-ch-lab-order-with-sr-and-form.md)
* [ActCode](http://terminology.hl7.org/7.0.1/CodeSystem-v3-ActCode.html): [Bundle/0-best-practice-document-with-sr](Bundle-0-best-practice-document-with-sr.md)
* [Religious Affiliation](http://terminology.hl7.org/7.0.1/CodeSystem-v3-ReligiousAffiliation.html): [Bundle/0-best-practice-document-with-sr](Bundle-0-best-practice-document-with-sr.md), [Bundle/1-tvt-document-with-sr](Bundle-1-tvt-document-with-sr.md)...Show 11 more,[Bundle/1-tvt-document-with-sr-and-form](Bundle-1-tvt-document-with-sr-and-form.md),[Bundle/2-pertussis-document-with-sr](Bundle-2-pertussis-document-with-sr.md),[Bundle/2-pertussis-document-with-sr-and-form](Bundle-2-pertussis-document-with-sr-and-form.md),[Bundle/3-gyn-document](Bundle-3-gyn-document.md),[Bundle/3-gyn-document-with-sr-and-form](Bundle-3-gyn-document-with-sr-and-form.md),[Bundle/5-biol-monit-document-with-sr](Bundle-5-biol-monit-document-with-sr.md),[Bundle/5-biol-monit-document-with-sr-and-form](Bundle-5-biol-monit-document-with-sr-and-form.md),[Bundle/6-histopath-document-with-sr](Bundle-6-histopath-document-with-sr.md),[Bundle/6-histopath-document-with-sr-and-form](Bundle-6-histopath-document-with-sr-and-form.md),[Bundle/ch-lab-order-document-with-sr](Bundle-ch-lab-order-document-with-sr.md)and[Bundle/ch-lab-order-with-sr-and-form](Bundle-ch-lab-order-with-sr-and-form.md)


### Cross Version Analysis

This is an R4 IG. None of the features it uses are changed in R4B, so it can be used as is with R4B systems. Packages for both [R4 (ch.fhir.ig.ch-lab-order.r4)](package.r4.tgz) and [R4B (ch.fhir.ig.ch-lab-order.r4b)](package.r4b.tgz) are available.

### Dependency Table









### Globals Table

*There are no Global profiles defined*



## Resource Content

```json
{
  "resourceType" : "ImplementationGuide",
  "id" : "ch.fhir.ig.ch-lab-order",
  "url" : "http://fhir.ch/ig/ch-lab-order/ImplementationGuide/ch.fhir.ig.ch-lab-order",
  "version" : "3.0.0",
  "name" : "CH_LAB_ORDER",
  "title" : "CH LAB-Order (R4)",
  "status" : "active",
  "date" : "2025-12-16",
  "publisher" : "HL7 Switzerland",
  "contact" : [
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch"
        }
      ]
    },
    {
      "name" : "Marcel Hanselmann",
      "telecom" : [
        {
          "system" : "email",
          "value" : "laborprojektgruppe@gmail.com",
          "use" : "work"
        }
      ]
    }
  ],
  "description" : "Implementation guide CH CH LAB-Order (R4)",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CH"
        }
      ]
    }
  ],
  "copyright" : "CC0-1.0",
  "packageId" : "ch.fhir.ig.ch-lab-order",
  "license" : "CC0-1.0",
  "fhirVersion" : ["4.0.1"],
  "dependsOn" : [
    {
      "id" : "hl7tx",
      "extension" : [
        {
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/implementationguide-dependency-comment",
          "valueMarkdown" : "Automatically added as a dependency - all IGs depend on HL7 Terminology"
        }
      ],
      "uri" : "http://terminology.hl7.org/ImplementationGuide/hl7.terminology",
      "packageId" : "hl7.terminology.r4",
      "version" : "7.0.1"
    },
    {
      "id" : "hl7ext",
      "extension" : [
        {
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/implementationguide-dependency-comment",
          "valueMarkdown" : "Automatically added as a dependency - all IGs depend on the HL7 Extension Pack"
        }
      ],
      "uri" : "http://hl7.org/fhir/extensions/ImplementationGuide/hl7.fhir.uv.extensions",
      "packageId" : "hl7.fhir.uv.extensions.r4",
      "version" : "5.2.0"
    },
    {
      "id" : "ch_fhir_ig_ch_core",
      "uri" : "http://fhir.ch/ig/ch-core/ImplementationGuide/ch.fhir.ig.ch-core",
      "packageId" : "ch.fhir.ig.ch-core",
      "version" : "6.0.0"
    },
    {
      "id" : "ch_fhir_ig_ch_term",
      "uri" : "http://fhir.ch/ig/ch-term/ImplementationGuide/ch.fhir.ig.ch-term",
      "packageId" : "ch.fhir.ig.ch-term",
      "version" : "3.3.x"
    },
    {
      "id" : "ch_fhir_ig_ch_orf",
      "uri" : "http://fhir.ch/ig/ch-orf/ImplementationGuide/ch.fhir.ig.ch-orf",
      "packageId" : "ch.fhir.ig.ch-orf",
      "version" : "3.0.2"
    }
  ],
  "definition" : {
    "extension" : [
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "copyrightyear"
          },
          {
            "url" : "value",
            "valueString" : "2025+"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "releaselabel"
          },
          {
            "url" : "value",
            "valueString" : "trial-use"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "allow-extensible-warnings"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "display-warnings"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-expansion-params"
          },
          {
            "url" : "value",
            "valueString" : "../../expansion-params.json"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "pin-canonicals"
          },
          {
            "url" : "value",
            "valueString" : "pin-multiples"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "autoload-resources"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-liquid"
          },
          {
            "url" : "value",
            "valueString" : "template/liquid"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-liquid"
          },
          {
            "url" : "value",
            "valueString" : "input/liquid"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-qa"
          },
          {
            "url" : "value",
            "valueString" : "temp/qa"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-temp"
          },
          {
            "url" : "value",
            "valueString" : "temp/pages"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-output"
          },
          {
            "url" : "value",
            "valueString" : "output"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-suppressed-warnings"
          },
          {
            "url" : "value",
            "valueString" : "input/ignoreWarnings.txt"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-history"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-lab-order/history.html"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "template-html"
          },
          {
            "url" : "value",
            "valueString" : "template-page.html"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "template-md"
          },
          {
            "url" : "value",
            "valueString" : "template-page-md.html"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-contact"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-context"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-copyright"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-jurisdiction"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-license"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-publisher"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-version"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-wg"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "active-tables"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "fmm-definition"
          },
          {
            "url" : "value",
            "valueString" : "http://hl7.org/fhir/versions.html#maturity"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "propagate-status"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "excludelogbinaryformat"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "tabbed-snapshots"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/expansion-parameters",
        "valueReference" : {
          "reference" : "Parameters/expansion-parameters"
        }
      },
      {
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-internal-dependency",
        "valueCode" : "hl7.fhir.uv.tools.r4#0.8.0"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "copyrightyear"
          },
          {
            "url" : "value",
            "valueString" : "2025+"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "releaselabel"
          },
          {
            "url" : "value",
            "valueString" : "trial-use"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "allow-extensible-warnings"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "display-warnings"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-expansion-params"
          },
          {
            "url" : "value",
            "valueString" : "../../expansion-params.json"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "pin-canonicals"
          },
          {
            "url" : "value",
            "valueString" : "pin-multiples"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "autoload-resources"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-liquid"
          },
          {
            "url" : "value",
            "valueString" : "template/liquid"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-liquid"
          },
          {
            "url" : "value",
            "valueString" : "input/liquid"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-qa"
          },
          {
            "url" : "value",
            "valueString" : "temp/qa"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-temp"
          },
          {
            "url" : "value",
            "valueString" : "temp/pages"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-output"
          },
          {
            "url" : "value",
            "valueString" : "output"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-suppressed-warnings"
          },
          {
            "url" : "value",
            "valueString" : "input/ignoreWarnings.txt"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-history"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-lab-order/history.html"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "template-html"
          },
          {
            "url" : "value",
            "valueString" : "template-page.html"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "template-md"
          },
          {
            "url" : "value",
            "valueString" : "template-page-md.html"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-contact"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-context"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-copyright"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-jurisdiction"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-license"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-publisher"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-version"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-wg"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "active-tables"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "fmm-definition"
          },
          {
            "url" : "value",
            "valueString" : "http://hl7.org/fhir/versions.html#maturity"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "propagate-status"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "excludelogbinaryformat"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "tabbed-snapshots"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      }
    ],
    "resource" : [
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/reasons-for-order"
        },
        "name" : "All Valid Reasons for Ordering a Lab Service",
        "description" : "Broadest value set of valid reasons for ordering laboratory services",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/0-best-practice-document-with-sr"
        },
        "name" : "Anticoagulant Effect",
        "description" : "CH LAB-Order Document with Service Request",
        "exampleCanonical" : "http://fhir.ch/ig/ch-lab-order/StructureDefinition/ch-lab-order-document-with-sr"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/5-biol-monit-document-with-sr"
        },
        "name" : "Biological Monitoring",
        "description" : "CH LAB-Order Document with Service Request",
        "exampleCanonical" : "http://fhir.ch/ig/ch-lab-order/StructureDefinition/ch-lab-order-document-with-sr"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/5-biol-monit-document-with-sr-and-form"
        },
        "name" : "Biological Monitoring",
        "description" : "CH LAB-Order Document with Service Request and Form",
        "exampleCanonical" : "http://fhir.ch/ig/ch-lab-order/StructureDefinition/ch-lab-order-document-with-sr-and-form"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-lab-order-composition-with-sr"
        },
        "name" : "CH LAB-Order Composition with ServiceRequest",
        "description" : "Definition of the Composition resource using ServiceRequest.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-lab-order-composition-with-sr-and-form"
        },
        "name" : "CH LAB-Order Composition with ServiceRequest and Form",
        "description" : "Definition of the Composition resource using ServiceRequest and Form.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-lab-order-document-with-sr"
        },
        "name" : "CH LAB-Order Document with ServiceRequest",
        "description" : "Definition of the Bundle resource to describe the lab order document using ServiceRequest.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/ch-lab-order-document-with-sr"
        },
        "name" : "CH LAB-Order Document with ServiceRequest",
        "description" : "Document for referral/order of Potassium in Serum",
        "exampleCanonical" : "http://fhir.ch/ig/ch-lab-order/StructureDefinition/ch-lab-order-document-with-sr"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-lab-order-document-with-sr-and-form"
        },
        "name" : "CH LAB-Order Document with ServiceRequest and Form",
        "description" : "Definition of the Bundle resource to describe the lab order document using ServiceRequest and Form.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/ch-lab-order-with-sr-and-form"
        },
        "name" : "CH LAB-Order Document with ServiceRequest and Form",
        "description" : "Document for referral/order due to suspected deep vein thrombosis",
        "exampleCanonical" : "http://fhir.ch/ig/ch-lab-order/StructureDefinition/ch-lab-order-document-with-sr-and-form"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-lab-order-document-reference"
        },
        "name" : "CH LAB-Order DocumentReference",
        "description" : "Definition of the DocumentReference resource to describe how to provide a reference to a document to make it available to a healthcare system.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Questionnaire"
          }
        ],
        "reference" : {
          "reference" : "Questionnaire/LabOrder-form"
        },
        "name" : "CH LAB-Order Form example",
        "description" : "assembled from LabOrder-form-modular",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-lab-order-SR"
        },
        "name" : "CH LAB-Order ServiceRequest",
        "description" : "Definition of the ServiceRequest resource to describe a single lab test order.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/1-tvt-document-with-sr"
        },
        "name" : "Deep Vein Thrombosis",
        "description" : "CH LAB-Order Document with Service Request",
        "exampleCanonical" : "http://fhir.ch/ig/ch-lab-order/StructureDefinition/ch-lab-order-document-with-sr"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/1-tvt-document-with-sr-and-form"
        },
        "name" : "Deep Vein Thrombosis",
        "description" : "CH LAB-Order Document with Service Request and Form",
        "exampleCanonical" : "http://fhir.ch/ig/ch-lab-order/StructureDefinition/ch-lab-order-document-with-sr-and-form"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/3-gyn-document"
        },
        "name" : "Gynecological Checkup",
        "description" : "CH LAB-Order Document with Service Request",
        "exampleCanonical" : "http://fhir.ch/ig/ch-lab-order/StructureDefinition/ch-lab-order-document-with-sr"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/3-gyn-document-with-sr-and-form"
        },
        "name" : "Gynecological Checkup",
        "description" : "CH LAB-Order Document with Service Request and Form",
        "exampleCanonical" : "http://fhir.ch/ig/ch-lab-order/StructureDefinition/ch-lab-order-document-with-sr-and-form"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/6-histopath-document-with-sr"
        },
        "name" : "Histopathological Examination",
        "description" : "CH LAB-Order Document with Service Request",
        "exampleCanonical" : "http://fhir.ch/ig/ch-lab-order/StructureDefinition/ch-lab-order-document-with-sr"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/6-histopath-document-with-sr-and-form"
        },
        "name" : "Histopathological Examination",
        "description" : "CH LAB-Order Document with Service Request and Form",
        "exampleCanonical" : "http://fhir.ch/ig/ch-lab-order/StructureDefinition/ch-lab-order-document-with-sr-and-form"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-lab-order-study-types"
        },
        "name" : "Laboratory Study Types",
        "description" : "refers to https://wiki.ihe.net/index.php/1.3.6.1.4.1.19376.1.3.3.2.1, but without some errors",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/MicrobiolProcedures"
        },
        "name" : "Microbiological Procedure",
        "description" : "Valueset Snomed CT Codes of Microbiological Procedures",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-lab-vs-order-control"
        },
        "name" : "Order Control Codes used in CH LAB-Order",
        "description" : "Contains some codes of placer applications from v2-0119 table",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/2-pertussis-document-with-sr"
        },
        "name" : "Pertussis",
        "description" : "CH LAB-Order Document with Service Request",
        "exampleCanonical" : "http://fhir.ch/ig/ch-lab-order/StructureDefinition/ch-lab-order-document-with-sr"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/2-pertussis-document-with-sr-and-form"
        },
        "name" : "Pertussis",
        "description" : "CH LAB-Order Document with Service Request and Form",
        "exampleCanonical" : "http://fhir.ch/ig/ch-lab-order/StructureDefinition/ch-lab-order-document-with-sr-and-form"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ServiceRequest.categories"
        },
        "name" : "Service Request Categories for Questionnaires",
        "description" : "ch-lab-order Service Request Categories",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ServiceRequest.categories"
        },
        "name" : "Service Request Categories for Questionnaires",
        "description" : "ch-lab-order defines 10 different Kinds of Service Request",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/Specimen.processing.procedure"
        },
        "name" : "Service Request Processing Procedure",
        "description" : "ch-lab-order defines 2 different Kinds of Processing Procedures, replaced by http://hl7.org/fhir/ValueSet/handling-condition",
        "exampleBoolean" : false
      }
    ],
    "page" : {
      "extension" : [
        {
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
          "valueUrl" : "toc.html"
        }
      ],
      "nameUrl" : "toc.html",
      "title" : "Table of Contents",
      "generation" : "html",
      "page" : [
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "index.html"
            }
          ],
          "nameUrl" : "index.html",
          "title" : "Home",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "usecases-english.html"
            }
          ],
          "nameUrl" : "usecases-english.html",
          "title" : "Use Cases",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "usecases-german.html"
            }
          ],
          "nameUrl" : "usecases-german.html",
          "title" : "Anwendungsfälle",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "usecases-french.html"
            }
          ],
          "nameUrl" : "usecases-french.html",
          "title" : "Cas d’application",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "case-studies-english.html"
            }
          ],
          "nameUrl" : "case-studies-english.html",
          "title" : "Case Studies",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "case-studies-german.html"
            }
          ],
          "nameUrl" : "case-studies-german.html",
          "title" : "Fallstudien",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "case-studies-french.html"
            }
          ],
          "nameUrl" : "case-studies-french.html",
          "title" : "Études de cas",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "document-lo-sr.html"
            }
          ],
          "nameUrl" : "document-lo-sr.html",
          "title" : "CH LAB-Order with Service Request",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "document-lo-sr-and-form.html"
            }
          ],
          "nameUrl" : "document-lo-sr-and-form.html",
          "title" : "CH LAB-Order with Service Request and Form",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "profiles.html"
            }
          ],
          "nameUrl" : "profiles.html",
          "title" : "Profiles",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "terminology.html"
            }
          ],
          "nameUrl" : "terminology.html",
          "title" : "Terminology",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "changelog.html"
            }
          ],
          "nameUrl" : "changelog.html",
          "title" : "Changelog",
          "generation" : "markdown"
        }
      ]
    },
    "parameter" : [
      {
        "code" : "path-resource",
        "value" : "input/capabilities"
      },
      {
        "code" : "path-resource",
        "value" : "input/examples"
      },
      {
        "code" : "path-resource",
        "value" : "input/extensions"
      },
      {
        "code" : "path-resource",
        "value" : "input/models"
      },
      {
        "code" : "path-resource",
        "value" : "input/operations"
      },
      {
        "code" : "path-resource",
        "value" : "input/profiles"
      },
      {
        "code" : "path-resource",
        "value" : "input/resources"
      },
      {
        "code" : "path-resource",
        "value" : "input/vocabulary"
      },
      {
        "code" : "path-resource",
        "value" : "input/maps"
      },
      {
        "code" : "path-resource",
        "value" : "input/testing"
      },
      {
        "code" : "path-resource",
        "value" : "input/history"
      },
      {
        "code" : "path-resource",
        "value" : "fsh-generated/resources"
      },
      {
        "code" : "path-pages",
        "value" : "template/config"
      },
      {
        "code" : "path-pages",
        "value" : "input/images"
      },
      {
        "code" : "path-tx-cache",
        "value" : "input-cache/txcache"
      }
    ]
  }
}

```
