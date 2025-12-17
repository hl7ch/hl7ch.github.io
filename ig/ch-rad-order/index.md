# Home - CH RAD-Order (R4) v2.0.1

* [**Table of Contents**](toc.md)
* **Home**

## Home

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-rad-order/ImplementationGuide/ch.fhir.ig.ch-rad-order | *Version*:2.0.1 |
| Active as of 2025-12-16 | *Computable Name*:CH_RAD_Order |
| **Copyright/Legal**: CC0-1.0 | |

### Purpose

The CH RAD-Order Implementation Guide defines the content of a radiology order and covers the following use cases:

* Referral for imaging
* Referral for radiological intervention
* Request for second Opinion
* Request for remote reporting
* Request for previous imaging results

CH RAD-Order is intended for use in directional communication as well as for the use in the SWISS EPR.

[Changelog](changelog.md) with significant changes, open and closed issues.

**Download**: You can download this implementation guide in [npm format](https://confluence.hl7.org/display/FHIR/NPM+Package+Specification) from [here](package.tgz).

### Foundation

This Implementation Guide uses FHIR defined resources. For details on HL7 FHIR R4 see [http://hl7.org/fhir/r4](http://hl7.org/fhir/r4).

Because the Implementation Guide relies heavily on the FHIR Resources Questionnaire and QuestionnaireResponse, forms are addressed here as Questionnaires.

This Implementation Guide is derived from the [CH Order & Referral by Form (CH ORF) Implementation Guide (CH ORF)](https://fhir.ch/ig/ch-orf/3.0.0/index.html) which relies on HL7 Structured Data Capture Implementation Guide, see [SDC](https://hl7.org/fhir/uv/sdc/STU3/) and uses the Swiss Core Profiles, see [CH Core](https://fhir.ch/ig/ch-core/5.0.0/index.html).

There has been a discussion whether population of the resources such as Patient Resource, ServiceRequest Resource etc. with the content of the QuestionnaireResponse Resource should be done by the order placer application or rather by the order filler application. The argument for assigning the task to the order placer is a result of the following consideration: the authors of a particular implementation guide may decide to define a questionnaire and its rendering but to leave it open if in a particular implementation the questionnaire is implemented or if the representation towards the user is made (in accordance to the questionnaire definition) by other technical means. In such a case, there would be no QuestionnaireResponse Resource in the bundle because all content is already in concerning resources. In order to handle all FHIR exchange formats equal (as far as sensible), the authors decided to mandate the order placer application with the task.

Applications claiming for conformance with the ORF Implementation Guide shall:

* Render (and in case of the Questionnaire Filler allow for data entry) all elements of a questionnaire in the user interface (e.g. on screen, in print). Grouping of items and the order of items within shall be adequately reproduced according to the questionnaire.
* In case of an implementation without the resources Questionnaire and QuestionnaireResponse, the content of otherwise implemented user interfaces shall be in accordance to the questionnaire definition.
* Be able to process all codes related to the generic elements in a Questionnaire.

Actors, transactions and safety considerations are covered in the corresponding sections of [CH ORF](https://fhir.ch/ig/ch-orf/3.0.0/index.html).

### Terminology

CH RAD-Order allows coding of the requested imaging service by means of [LOINC/RSNA RADIOL0GY PLAYBOOK](https://loinc.org/collaboration/rsna/).

Systems such as PIS and KIS may not yet support RADIOLOGY PLAYBOOK. For this reason, CH RAD-Order allows coding of the relevant dimensions by means of [RADLEX](https://www.rsna.org/practice-tools/data-tools-and-standards/radlex-radiology-lexicon).

The relevant dimensions are defined by PLAYBOOK such as:

Modality Region Focus Laterality Maneuvre Guidance for action (used for interventions)

Coding of these dimensions is done by [RADLEX terms](https://www.rsna.org/practice-tools/data-tools-and-standards/radlex-radiology-lexicon).

IMPORTANT NOTICE: Value sets, in particular those containing Radlex terms, are still experimental. Definitive value sets will be defined when CH-Rad-Order becomes operational.All coding is preliminary and not yet approved by eHealth Suisse.

#### Previous Images

Results from earlier can be provided be means of attachments or - in case of DICOM SOP Instances - by means of a DICOM Service (e.g. WADO-RS). The ImagingStudy Resource allows for indicating DICOM tags such as SOP Instance UID, Series instance UID etc. DICOM Imaging data as well as other data (pdf, jpeg etc.) can be attached by means of a document reference.

The implementation of a DICOM service requires prerequisites in terms of infrastructure and policies (e.g. access rights). CH RAD-Order does not give guidance about that.

IMPORTANT NOTICE: Questionnaire items allowing entry for DICOM tags (such as study instance ID, series instance ID etc.) are for illustration / experimental use. A real world application shall hopefully provide other means for the selection of images / reports etc.

#### IP Statements

This document is licensed under Creative Commons "No Rights Reserved" ([CC0](https://creativecommons.org/publicdomain/zero/1.0/)).

HL7®, HEALTH LEVEL SEVEN®, FHIR® and the FHIR ![](icon-fhir-16.png)® are trademarks owned by Health Level Seven International, registered with the United States Patent and Trademark Office.

This implementation guide contains and references intellectual property owned by third parties ("Third Party IP"). Acceptance of these License Terms does not grant any rights with respect to Third Party IP. The licensee alone is responsible for identifying and obtaining any necessary licenses or authorizations to utilize Third Party IP in connection with the specification or otherwise.

This publication includes IP covered under the following statements.

* CC0-1.0

* [BFS Medizinische Statistik - 21 1.3.V02 - Klasse / Classe / Classe](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-bfs-medstats-21-encountertype.html): [Bundle/DocumentRadiologyOrder](Bundle-DocumentRadiologyOrder.md) and [QuestionnaireRadiologyOrder](Questionnaire-QuestionnaireRadiologyOrder.md)
* [BFS Medizinische Statistik - 25 1.4.V02 - Hauptkostenträger für Grundversicherungsleistungen / Prise en charge des soins de base / Unità d’imputazione principale per le prestazioni dell’assicurazione di base](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-bfs-medstats-25-mainguarantor.html): [Bundle/DocumentRadiologyOrder](Bundle-DocumentRadiologyOrder.md) and [Coverage/CoverageKVG](Coverage-CoverageKVG.md)
* [eCH-011 MaritalStatus](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-ech-11-maritalstatus.html): [Bundle/DocumentRadiologyOrder](Bundle-DocumentRadiologyOrder.md), [QuestionnaireRadiologyOrder](Questionnaire-QuestionnaireRadiologyOrder.md)...Show 5 more,[QuestionnaireResponse/QuestionnaireResponseRadiologyOrderImagIntervent](QuestionnaireResponse-QuestionnaireResponseRadiologyOrderImagIntervent.md),[QuestionnaireResponse/QuestionnaireResponseRadiologyOrderImagingRequest](QuestionnaireResponse-QuestionnaireResponseRadiologyOrderImagingRequest.md),[QuestionnaireResponse/QuestionnaireResponseRadiologyOrderRemoteReporting](QuestionnaireResponse-QuestionnaireResponseRadiologyOrderRemoteReporting.md),[QuestionnaireResponse/QuestionnaireResponseRadiologyOrderRequestPrevious](QuestionnaireResponse-QuestionnaireResponseRadiologyOrderRequestPrevious.md)and[QuestionnaireResponse/QuestionnaireResponseRadiologyOrderSecondOpinion](QuestionnaireResponse-QuestionnaireResponseRadiologyOrderSecondOpinion.md)
* [Consent Status](http://fhir.ch/ig/ch-orf/3.0.2/CodeSystem-ch-orf-cs-consentstatus.html): [Bundle/DocumentRadiologyOrder](Bundle-DocumentRadiologyOrder.md), [QuestionnaireRadiologyOrder](Questionnaire-QuestionnaireRadiologyOrder.md)...Show 5 more,[QuestionnaireResponse/QuestionnaireResponseRadiologyOrderImagIntervent](QuestionnaireResponse-QuestionnaireResponseRadiologyOrderImagIntervent.md),[QuestionnaireResponse/QuestionnaireResponseRadiologyOrderImagingRequest](QuestionnaireResponse-QuestionnaireResponseRadiologyOrderImagingRequest.md),[QuestionnaireResponse/QuestionnaireResponseRadiologyOrderRemoteReporting](QuestionnaireResponse-QuestionnaireResponseRadiologyOrderRemoteReporting.md),[QuestionnaireResponse/QuestionnaireResponseRadiologyOrderRequestPrevious](QuestionnaireResponse-QuestionnaireResponseRadiologyOrderRequestPrevious.md)and[QuestionnaireResponse/QuestionnaireResponseRadiologyOrderSecondOpinion](QuestionnaireResponse-QuestionnaireResponseRadiologyOrderSecondOpinion.md)
* [Coverage Identifier Type](http://fhir.ch/ig/ch-orf/3.0.2/CodeSystem-ch-orf-cs-coverageidentifiertype.html): [Bundle/DocumentRadiologyOrder](Bundle-DocumentRadiologyOrder.md) and [Coverage/CoverageKVG](Coverage-CoverageKVG.md)
* [Contains Code for UNKNOWN in dicom context](CodeSystem-ch-rad-order-dicom-unknown.md): [ChRadOrderAcquisitionModality](ValueSet-ch-rad-order-acquisition-modality.md)
* [Type of Order Detail](CodeSystem-ch-rad-order-order-detail-type.md): [Bundle/DocumentRadiologyOrder](Bundle-DocumentRadiologyOrder.md), [ChRadOrderOrderDetailType](ValueSet-ch-rad-order-order-detail-type.md) and [ServiceRequest/ServiceRequestRadiologyOrder](ServiceRequest-ServiceRequestRadiologyOrder.md)
* [Requested Service](CodeSystem-ch-rad-order-requested-service.md): [Bundle/DocumentRadiologyOrder](Bundle-DocumentRadiologyOrder.md), [ChRadOrderRequestedService](ValueSet-ch-rad-order-requested-service.md)...Show 9 more,[ChRadOrderServiceRequest](StructureDefinition-ch-rad-order-servicerequest.md),[ModuleQuestionnaireRadiologyOrderInstruction](Questionnaire-ch-rad-order-module-medinfo.md),[QuestionnaireRadiologyOrder](Questionnaire-QuestionnaireRadiologyOrder.md),[QuestionnaireResponse/QuestionnaireResponseRadiologyOrderImagIntervent](QuestionnaireResponse-QuestionnaireResponseRadiologyOrderImagIntervent.md),[QuestionnaireResponse/QuestionnaireResponseRadiologyOrderImagingRequest](QuestionnaireResponse-QuestionnaireResponseRadiologyOrderImagingRequest.md),[QuestionnaireResponse/QuestionnaireResponseRadiologyOrderRemoteReporting](QuestionnaireResponse-QuestionnaireResponseRadiologyOrderRemoteReporting.md),[QuestionnaireResponse/QuestionnaireResponseRadiologyOrderRequestPrevious](QuestionnaireResponse-QuestionnaireResponseRadiologyOrderRequestPrevious.md),[QuestionnaireResponse/QuestionnaireResponseRadiologyOrderSecondOpinion](QuestionnaireResponse-QuestionnaireResponseRadiologyOrderSecondOpinion.md)and[ServiceRequest/ServiceRequestRadiologyOrder](ServiceRequest-ServiceRequestRadiologyOrder.md)
* [ch-ehealth-codesystem-language](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-2.16.756.5.30.1.127.3.10.12.html): [QuestionnaireRadiologyOrder](Questionnaire-QuestionnaireRadiologyOrder.md)


* Copyright 2014 – The Radiological Society of North America (RSNA), all rights reserved. Licensed under RadLex License Version 2.0. You may obtain a copy of the license at: [http://www.rsna.org/radlexdownloads/](http://www.rsna.org/radlexdownloads/)This work is distributed under the above noted license on an “AS IS” basis, WITHOUT WARRANTIES OF ANY KIND, either express or implied. Please see the license for complete terms and conditions.Subject to the terms and conditions of this Agreement, Licensor hereby grants to You a worldwide, non-exclusive, no-charge, royalty-free copyright license to reproduce, prepare Adaptations of, publicly display, publicly perform, sublicense, and distribute the Work and such Adaptations in any medium.RadLex is licensed freely for commercial and non-commercial users. Review and download the license: [http://www.rsna.org/uploadedFiles/RSNA/Content/Informatics/RadLex_License_Agreement_and_Terms_of_Use_V2_Final.pdf](http://www.rsna.org/uploadedFiles/RSNA/Content/Informatics/RadLex_License_Agreement_and_Terms_of_Use_V2_Final.pdf)

* [RadLex radiology lexicon](http://terminology.hl7.org/6.5.0/CodeSystem-RadLex.html): [Bundle/DocumentRadiologyOrder](Bundle-DocumentRadiologyOrder.md), [ChRadOrderGuidanceForAction](ValueSet-ch-rad-order-guidance-for-action.md)...Show 14 more,[ChRadOrderImagingFocus](ValueSet-ch-rad-order-imaging-focus.md),[ChRadOrderImagingRegion](ValueSet-ch-rad-order-imaging-region.md),[ChRadOrderLaterality](ValueSet-ch-rad-order-laterality.md),[ChRadOrderManeuverType](ValueSet-ch-rad-order-maneuver-type.md),[ChRadOrderModalityType](ValueSet-ch-rad-order-modality-type.md),[ChRadOrderServiceRequest](StructureDefinition-ch-rad-order-servicerequest.md),[ChRadOrderViewType](ValueSet-ch-rad-order-view-type.md),[ModuleQuestionnaireRadiologyOrderInstruction](Questionnaire-ch-rad-order-module-medinfo.md),[QuestionnaireRadiologyOrder](Questionnaire-QuestionnaireRadiologyOrder.md),[QuestionnaireResponse/QuestionnaireResponseRadiologyOrderImagIntervent](QuestionnaireResponse-QuestionnaireResponseRadiologyOrderImagIntervent.md),[QuestionnaireResponse/QuestionnaireResponseRadiologyOrderImagingRequest](QuestionnaireResponse-QuestionnaireResponseRadiologyOrderImagingRequest.md),[QuestionnaireResponse/QuestionnaireResponseRadiologyOrderRemoteReporting](QuestionnaireResponse-QuestionnaireResponseRadiologyOrderRemoteReporting.md),[QuestionnaireResponse/QuestionnaireResponseRadiologyOrderSecondOpinion](QuestionnaireResponse-QuestionnaireResponseRadiologyOrderSecondOpinion.md)and[ServiceRequest/ServiceRequestRadiologyOrder](ServiceRequest-ServiceRequestRadiologyOrder.md)


* ISO maintains the copyright on the country codes, and controls its use carefully. For further details see the ISO 3166 web page: [https://www.iso.org/iso-3166-country-codes.html](https://www.iso.org/iso-3166-country-codes.html)

* [ISO 3166-1 Codes for the representation of names of countries and their subdivisions — Part 1: Country code](http://terminology.hl7.org/6.5.0/CodeSystem-ISO3166Part1.html): [Bundle/DocumentRadiologyOrder](Bundle-DocumentRadiologyOrder.md), [CH_RAD_Order](index.md)...Show 32 more,[ChRadOrderAcquisitionModality](ValueSet-ch-rad-order-acquisition-modality.md),[ChRadOrderBodyHeightObservation](StructureDefinition-ch-rad-order-bodyheight-observation.md),[ChRadOrderBodyWeightObservation](StructureDefinition-ch-rad-order-bodyweight-observation.md),[ChRadOrderCaveatCondition](ValueSet-ch-rad-order-caveat-condition.md),[ChRadOrderCaveatDevice](ValueSet-ch-rad-order-caveat-device.md),[ChRadOrderCaveatType](ValueSet-ch-rad-order-caveat-type.md),[ChRadOrderComposition](StructureDefinition-ch-rad-order-composition.md),[ChRadOrderCreatinineClearanceObservation](StructureDefinition-ch-rad-order-creatinineclearance-observation.md),[ChRadOrderCreatinineObservation](StructureDefinition-ch-rad-order-creatinine-observation.md),[ChRadOrderDiagnosisCondition](StructureDefinition-ch-rad-order-diagnosis-condition.md),[ChRadOrderDicomUnknown](CodeSystem-ch-rad-order-dicom-unknown.md),[ChRadOrderDocument](StructureDefinition-ch-rad-order-document.md),[ChRadOrderGuidanceForAction](ValueSet-ch-rad-order-guidance-for-action.md),[ChRadOrderINRObservation](StructureDefinition-ch-rad-order-INR-observation.md),[ChRadOrderImagingFocus](ValueSet-ch-rad-order-imaging-focus.md),[ChRadOrderImagingRegion](ValueSet-ch-rad-order-imaging-region.md),[ChRadOrderImagingStudy](StructureDefinition-ch-rad-order-imagingstudy.md),[ChRadOrderLaterality](ValueSet-ch-rad-order-laterality.md),[ChRadOrderManeuverType](ValueSet-ch-rad-order-maneuver-type.md),[ChRadOrderModalityType](ValueSet-ch-rad-order-modality-type.md),[ChRadOrderOrderDetailType](ValueSet-ch-rad-order-order-detail-type.md),[ChRadOrderPlateletsObservation](StructureDefinition-ch-rad-order-platelets-observation.md),[ChRadOrderQualifierValue](ValueSet-ch-rad-order-caveat-qualifier-value.md),[ChRadOrderRequestedService](ValueSet-ch-rad-order-requested-service.md),[ChRadOrderServiceRequest](StructureDefinition-ch-rad-order-servicerequest.md),[ChRadOrderViewType](ValueSet-ch-rad-order-view-type.md),[ModuleQuestionnaireRadiologyOrderCaveats](Questionnaire-ch-rad-order-module-caveats.md),[ModuleQuestionnaireRadiologyOrderDiagnosis](Questionnaire-ch-rad-order-module-diagnosis.md),[ModuleQuestionnaireRadiologyOrderInstruction](Questionnaire-ch-rad-order-module-medinfo.md),[ModuleQuestionnaireRadiologyOrderPreviousResults](Questionnaire-ch-rad-order-module-previousresults.md),[QuestionnaireRadiologyOrder](Questionnaire-QuestionnaireRadiologyOrder.md)and[RadOrderQrToBundle](StructureMap-RadOrderQrToBundle.md)


* The UCUM codes, UCUM table (regardless of format), and UCUM Specification are copyright 1999-2009, Regenstrief Institute, Inc. and the Unified Codes for Units of Measures (UCUM) Organization. All rights reserved. [https://ucum.org/trac/wiki/TermsOfUse](https://ucum.org/trac/wiki/TermsOfUse)

* [Unified Code for Units of Measure (UCUM)](http://terminology.hl7.org/6.5.0/CodeSystem-v3-ucum.html): [Bundle/DocumentRadiologyOrder](Bundle-DocumentRadiologyOrder.md), [Observation/BodyHeight](Observation-BodyHeight.md)...Show 9 more,[Observation/BodyWeight](Observation-BodyWeight.md),[Observation/CaveatBloodCoagulationINR](Observation-CaveatBloodCoagulationINR.md),[Observation/CaveatBloodCoagulationPlatelets](Observation-CaveatBloodCoagulationPlatelets.md),[Observation/CaveatRenalInsufficiencyCreatinine](Observation-CaveatRenalInsufficiencyCreatinine.md),[Observation/CaveatRenalInsufficiencyCreatinineClearance](Observation-CaveatRenalInsufficiencyCreatinineClearance.md),[QuestionnaireResponse/QuestionnaireResponseRadiologyOrderImagIntervent](QuestionnaireResponse-QuestionnaireResponseRadiologyOrderImagIntervent.md),[QuestionnaireResponse/QuestionnaireResponseRadiologyOrderImagingRequest](QuestionnaireResponse-QuestionnaireResponseRadiologyOrderImagingRequest.md),[QuestionnaireResponse/QuestionnaireResponseRadiologyOrderRemoteReporting](QuestionnaireResponse-QuestionnaireResponseRadiologyOrderRemoteReporting.md)and[QuestionnaireResponse/QuestionnaireResponseRadiologyOrderSecondOpinion](QuestionnaireResponse-QuestionnaireResponseRadiologyOrderSecondOpinion.md)


* This material contains content from [LOINC](http://loinc.org). LOINC is copyright © 1995-2020, Regenstrief Institute, Inc. and the Logical Observation Identifiers Names and Codes (LOINC) Committee and is available at no cost under the [license](http://loinc.org/license). LOINC® is a registered United States trademark of Regenstrief Institute, Inc.

* [LOINC](http://terminology.hl7.org/6.5.0/CodeSystem-v3-loinc.html): [Bundle/DocumentRadiologyOrder](Bundle-DocumentRadiologyOrder.md), [ChRadOrderComposition](StructureDefinition-ch-rad-order-composition.md)...Show 12 more,[ChRadOrderCreatinineClearanceObservation](StructureDefinition-ch-rad-order-creatinineclearance-observation.md),[ChRadOrderCreatinineObservation](StructureDefinition-ch-rad-order-creatinine-observation.md),[ChRadOrderINRObservation](StructureDefinition-ch-rad-order-INR-observation.md),[ChRadOrderPlateletsObservation](StructureDefinition-ch-rad-order-platelets-observation.md),[ChRadOrderServiceRequest](StructureDefinition-ch-rad-order-servicerequest.md),[Composition/CompositionRadiologyOrderImagingRequest](Composition-CompositionRadiologyOrderImagingRequest.md),[Observation/BodyHeight](Observation-BodyHeight.md),[Observation/BodyWeight](Observation-BodyWeight.md),[Observation/CaveatBloodCoagulationINR](Observation-CaveatBloodCoagulationINR.md),[Observation/CaveatBloodCoagulationPlatelets](Observation-CaveatBloodCoagulationPlatelets.md),[Observation/CaveatRenalInsufficiencyCreatinine](Observation-CaveatRenalInsufficiencyCreatinine.md)and[Observation/CaveatRenalInsufficiencyCreatinineClearance](Observation-CaveatRenalInsufficiencyCreatinineClearance.md)


* This material contains content that is copyright of SNOMED International. Implementers of these specifications must have the appropriate SNOMED CT Affiliate license - for more information contact [https://www.snomed.org/get-snomed](https://www.snomed.org/get-snomed) or [info@snomed.org](mailto:info@snomed.org).

* [SNOMED Clinical Terms&reg; (SNOMED CT&reg;)](http://tx.fhir.org/r4/ValueSet/snomedct): [Bundle/DocumentRadiologyOrder](Bundle-DocumentRadiologyOrder.md), [ChRadOrderCaveatCondition](ValueSet-ch-rad-order-caveat-condition.md)...Show 16 more,[ChRadOrderCaveatDevice](ValueSet-ch-rad-order-caveat-device.md),[ChRadOrderCaveatType](ValueSet-ch-rad-order-caveat-type.md),[ChRadOrderComposition](StructureDefinition-ch-rad-order-composition.md),[ChRadOrderQualifierValue](ValueSet-ch-rad-order-caveat-qualifier-value.md),[Composition/CompositionRadiologyOrderImagingRequest](Composition-CompositionRadiologyOrderImagingRequest.md),[Condition/CaveatBloodCoagulation](Condition-CaveatBloodCoagulation.md),[Condition/CaveatBodyPiercing](Condition-CaveatBodyPiercing.md),[Condition/CaveatDeviceCardiacPacemaker](Condition-CaveatDeviceCardiacPacemaker.md),[Condition/CaveatDrugPrescriptionMetformin](Condition-CaveatDrugPrescriptionMetformin.md),[Condition/CaveatRenalInsufficiency](Condition-CaveatRenalInsufficiency.md),[ModuleQuestionnaireRadiologyOrderCaveats](Questionnaire-ch-rad-order-module-caveats.md),[QuestionnaireRadiologyOrder](Questionnaire-QuestionnaireRadiologyOrder.md),[QuestionnaireResponse/QuestionnaireResponseRadiologyOrderImagIntervent](QuestionnaireResponse-QuestionnaireResponseRadiologyOrderImagIntervent.md),[QuestionnaireResponse/QuestionnaireResponseRadiologyOrderImagingRequest](QuestionnaireResponse-QuestionnaireResponseRadiologyOrderImagingRequest.md),[QuestionnaireResponse/QuestionnaireResponseRadiologyOrderRemoteReporting](QuestionnaireResponse-QuestionnaireResponseRadiologyOrderRemoteReporting.md)and[QuestionnaireResponse/QuestionnaireResponseRadiologyOrderSecondOpinion](QuestionnaireResponse-QuestionnaireResponseRadiologyOrderSecondOpinion.md)


* This material derives from the HL7 Terminology (THO). THO is copyright ©1989+ Health Level Seven International and is made available under the CC0 designation. For more licensing information see: [https://terminology.hl7.org/license.html](https://terminology.hl7.org/license.html)

* [Condition Category Codes](http://terminology.hl7.org/7.0.1/CodeSystem-condition-category.html): [Bundle/DocumentRadiologyOrder](Bundle-DocumentRadiologyOrder.md), [ChRadOrderCaveatCondition](StructureDefinition-ch-rad-order-caveat-condition.md)...Show 9 more,[ChRadOrderDiagnosisCondition](StructureDefinition-ch-rad-order-diagnosis-condition.md),[Condition/CaveatBloodCoagulation](Condition-CaveatBloodCoagulation.md),[Condition/CaveatBodyPiercing](Condition-CaveatBodyPiercing.md),[Condition/CaveatDeviceCardiacPacemaker](Condition-CaveatDeviceCardiacPacemaker.md),[Condition/CaveatDrugPrescriptionMetformin](Condition-CaveatDrugPrescriptionMetformin.md),[Condition/CaveatRenalInsufficiency](Condition-CaveatRenalInsufficiency.md),[Condition/PrimaryDiagnosis](Condition-PrimaryDiagnosis.md),[Condition/SecondaryDiagnosis1](Condition-SecondaryDiagnosis1.md)and[Condition/SecondaryDiagnosis2](Condition-SecondaryDiagnosis2.md)
* [Condition Clinical Status Codes](http://terminology.hl7.org/7.0.1/CodeSystem-condition-clinical.html): [Bundle/DocumentRadiologyOrder](Bundle-DocumentRadiologyOrder.md), [Condition/CaveatBloodCoagulation](Condition-CaveatBloodCoagulation.md)...Show 7 more,[Condition/CaveatBodyPiercing](Condition-CaveatBodyPiercing.md),[Condition/CaveatDeviceCardiacPacemaker](Condition-CaveatDeviceCardiacPacemaker.md),[Condition/CaveatDrugPrescriptionMetformin](Condition-CaveatDrugPrescriptionMetformin.md),[Condition/CaveatRenalInsufficiency](Condition-CaveatRenalInsufficiency.md),[Condition/PrimaryDiagnosis](Condition-PrimaryDiagnosis.md),[Condition/SecondaryDiagnosis1](Condition-SecondaryDiagnosis1.md)and[Condition/SecondaryDiagnosis2](Condition-SecondaryDiagnosis2.md)
* [Observation Category Codes](http://terminology.hl7.org/7.0.1/CodeSystem-observation-category.html): [Bundle/DocumentRadiologyOrder](Bundle-DocumentRadiologyOrder.md), [Observation/BodyHeight](Observation-BodyHeight.md) and [Observation/BodyWeight](Observation-BodyWeight.md)
* [identifierType](http://terminology.hl7.org/7.0.1/CodeSystem-v2-0203.html): [Bundle/DocumentRadiologyOrder](Bundle-DocumentRadiologyOrder.md), [ChRadOrderImagingStudy](StructureDefinition-ch-rad-order-imagingstudy.md), [ChRadOrderServiceRequest](StructureDefinition-ch-rad-order-servicerequest.md), [ImagingStudy/DicomSopInstanceConformant](ImagingStudy-DicomSopInstanceConformant.md) and [ServiceRequest/ServiceRequestRadiologyOrder](ServiceRequest-ServiceRequestRadiologyOrder.md)
* [ActCode](http://terminology.hl7.org/7.0.1/CodeSystem-v3-ActCode.html): [Bundle/DocumentRadiologyOrder](Bundle-DocumentRadiologyOrder.md), [QuestionnaireRadiologyOrder](Questionnaire-QuestionnaireRadiologyOrder.md), [QuestionnaireResponse/QuestionnaireResponseRadiologyOrderImagIntervent](QuestionnaireResponse-QuestionnaireResponseRadiologyOrderImagIntervent.md) and [QuestionnaireResponse/QuestionnaireResponseRadiologyOrderImagingRequest](QuestionnaireResponse-QuestionnaireResponseRadiologyOrderImagingRequest.md)


#### Cross Version Analysis

This is an R4 IG. None of the features it uses are changed in R4B, so it can be used as is with R4B systems. Packages for both [R4 (ch.fhir.ig.ch-rad-order.r4)](package.r4.tgz) and [R4B (ch.fhir.ig.ch-rad-order.r4b)](package.r4b.tgz) are available.

#### Dependency Table







#### Globals Table

*There are no Global profiles defined*



## Resource Content

```json
{
  "resourceType" : "ImplementationGuide",
  "id" : "ch.fhir.ig.ch-rad-order",
  "url" : "http://fhir.ch/ig/ch-rad-order/ImplementationGuide/ch.fhir.ig.ch-rad-order",
  "version" : "2.0.1",
  "name" : "CH_RAD_Order",
  "title" : "CH RAD-Order (R4)",
  "status" : "active",
  "date" : "2025-12-16",
  "publisher" : "HL7 Switzerland",
  "contact" : [
    {
      "name" : "Juerg P. Bleuer",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch"
        }
      ]
    }
  ],
  "description" : "Implementation guide CH RAD-Order (R4)",
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
  "packageId" : "ch.fhir.ig.ch-rad-order",
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
            "valueString" : "2021+"
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
            "valueString" : "excludettl"
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
            "valueString" : "http://fhir.ch/ig/ch-rad-order/history.html"
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
        "valueCode" : "hl7.fhir.uv.tools.r4#0.9.0"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "copyrightyear"
          },
          {
            "url" : "value",
            "valueString" : "2021+"
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
            "valueCode" : "excludettl"
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
            "valueString" : "http://fhir.ch/ig/ch-rad-order/history.html"
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
            "valueString" : "Appointment"
          }
        ],
        "reference" : {
          "reference" : "Appointment/AppointmentRadiography"
        },
        "name" : "Appointment Radiography",
        "description" : "Example of Appointment",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "DocumentReference"
          }
        ],
        "reference" : {
          "reference" : "DocumentReference/DocumentReferenceNonDicom"
        },
        "name" : "Befund_Rx_Thorax_S_Ufferer_20190401",
        "description" : "Example of Document Reference for Attachment (e.g. pdf)",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/BodyHeight"
        },
        "name" : "Body Height 176 cm",
        "description" : "Example of Body Height Observation",
        "exampleCanonical" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-bodyheight-observation"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/BodyWeight"
        },
        "name" : "Body Weight 99 kg",
        "description" : "Example of Body Weight Observation",
        "exampleCanonical" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-bodyweight-observation"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/DocumentRadiologyOrder"
        },
        "name" : "Bundle Radiology Order",
        "description" : "Example of Bundle",
        "exampleCanonical" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-document"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Condition"
          }
        ],
        "reference" : {
          "reference" : "Condition/CaveatBloodCoagulation"
        },
        "name" : "Caveat Blood Coagulation",
        "description" : "Example of Caveat Condition",
        "exampleCanonical" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-caveat-condition"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/CaveatBloodCoagulationINR"
        },
        "name" : "Caveat Blood Coagulation INR",
        "description" : "Example of INR Observation",
        "exampleCanonical" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-INR-observation"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/CaveatBloodCoagulationPlatelets"
        },
        "name" : "Caveat Blood Coagulation Platelets",
        "description" : "Example of Platelets Observation",
        "exampleCanonical" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-platelets-observation"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Condition"
          }
        ],
        "reference" : {
          "reference" : "Condition/CaveatBodyPiercing"
        },
        "name" : "Caveat Body Piercing",
        "description" : "Example of Caveat Condition",
        "exampleCanonical" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-caveat-condition"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-rad-order-caveat-condition"
        },
        "name" : "Caveat Condition",
        "description" : "Definition for Caveat Condition Value Set in the context of CH RAD-Order.",
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
          "reference" : "ValueSet/ch-rad-order-caveat-device"
        },
        "name" : "Caveat Device",
        "description" : "Definition for Caveat Device Value Set in the context of CH RAD-Order.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Condition"
          }
        ],
        "reference" : {
          "reference" : "Condition/CaveatDeviceCardiacPacemaker"
        },
        "name" : "Caveat Device Cardiac Pacemaker",
        "description" : "Example of Caveat Condition",
        "exampleCanonical" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-caveat-condition"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Condition"
          }
        ],
        "reference" : {
          "reference" : "Condition/CaveatDrugPrescriptionMetformin"
        },
        "name" : "Caveat Drug Prescription Metformin",
        "description" : "Example of Caveat Condition",
        "exampleCanonical" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-caveat-condition"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Condition"
          }
        ],
        "reference" : {
          "reference" : "Condition/CaveatRenalInsufficiency"
        },
        "name" : "Caveat Renal Insufficiency",
        "description" : "Example of Caveat Condition",
        "exampleCanonical" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-caveat-condition"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/CaveatRenalInsufficiencyCreatinine"
        },
        "name" : "Caveat Renal Insufficiency Creatinine",
        "description" : "Example of Creatinine Observation",
        "exampleCanonical" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-creatinine-observation"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/CaveatRenalInsufficiencyCreatinineClearance"
        },
        "name" : "Caveat Renal Insufficiency Creatinine Clearance",
        "description" : "Example of CreatinineClearance Observation",
        "exampleCanonical" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-creatinineclearance-observation"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-rad-order-bodyheight-observation"
        },
        "name" : "CH RAD-Order Body Height Observation",
        "description" : "Definition for the Body Height Observation resource in the context of CH RAD-Order.",
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
          "reference" : "StructureDefinition/ch-rad-order-bodyweight-observation"
        },
        "name" : "CH RAD-Order Body Weight Observation",
        "description" : "Definition for the Body Weight Observation resource in the context of CH RAD-Order.",
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
          "reference" : "StructureDefinition/ch-rad-order-caveat-condition"
        },
        "name" : "CH RAD-Order Caveat Condition",
        "description" : "Definition for the Caveat Condition resource in the context of CH RAD-Order.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-rad-order-caveat-type"
        },
        "name" : "CH RAD-Order Caveat Type",
        "description" : "Extension to define the type of caveat in the context CH RAD-Order.",
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
          "reference" : "StructureDefinition/ch-rad-order-composition"
        },
        "name" : "CH RAD-Order Composition",
        "description" : "Definition for the Composition resource in the context of CH RAD-Order.",
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
          "reference" : "StructureDefinition/ch-rad-order-creatinineclearance-observation"
        },
        "name" : "CH RAD-Order Creatinine Clearance Observation",
        "description" : "Definition for the Creatinine Clearance Observation resource in the context of CH RAD-Order.",
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
          "reference" : "StructureDefinition/ch-rad-order-creatinine-observation"
        },
        "name" : "CH RAD-Order Creatinine Observation",
        "description" : "Definition for the Creatinine Observation resource in the context of CH RAD-Order.",
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
          "reference" : "StructureDefinition/ch-rad-order-diagnosis-condition"
        },
        "name" : "CH RAD-Order Diagnosis Condition",
        "description" : "Definition for the Diagnosis Condition resource in the context of CH RAD-Order.",
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
          "reference" : "StructureDefinition/ch-rad-order-document"
        },
        "name" : "CH RAD-Order Document",
        "description" : "Definition for the Bundle (document) resource in the context of CH RAD-Order.",
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
          "reference" : "StructureDefinition/ch-rad-order-imagingstudy"
        },
        "name" : "CH RAD-Order ImagingStudy",
        "description" : "Definition for the ImagingStudy resource in the context of CH RAD-Order.",
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
          "reference" : "StructureDefinition/ch-rad-order-INR-observation"
        },
        "name" : "CH RAD-Order INR Observation",
        "description" : "Definition for the INR Observation resource in the context of CH RAD-Order.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-rad-order-order-detail-type"
        },
        "name" : "CH RAD-Order Order Detail Type",
        "description" : "Extension to define the Type of Order Detail in context of CH RAD-Order.",
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
          "reference" : "StructureDefinition/ch-rad-order-platelets-observation"
        },
        "name" : "CH RAD-Order Platelets Observation",
        "description" : "Definition for the Platelets Observation resource in the context of CH RAD-Order.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-rad-order-qualifier-value"
        },
        "name" : "CH RAD-Order Qualifier Value",
        "description" : "Extension to define the value of the qualifier in the context of CH RAD-Order.",
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
          "reference" : "StructureDefinition/ch-rad-order-servicerequest"
        },
        "name" : "CH RAD-Order ServiceRequest",
        "description" : "Definition for the ServiceRequest resource in the context of CH RAD-Order.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/CompositionRadiologyOrderImagingRequest"
        },
        "name" : "Composition Radiology Order",
        "description" : "Example of Composition",
        "exampleCanonical" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-composition"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ch-rad-order-dicom-unknown"
        },
        "name" : "Contains Code for UNKNOWN in dicom context",
        "description" : "Definition for UNKNOWN in the context CH RAD-Order in order to handle non conformant Dicom metadata.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Coverage"
          }
        ],
        "reference" : {
          "reference" : "Coverage/CoverageKVG"
        },
        "name" : "Coverage KVG",
        "description" : "Example of Coverage",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ImagingStudy"
          }
        ],
        "reference" : {
          "reference" : "ImagingStudy/DicomSopInstanceConformant"
        },
        "name" : "DICOM conformant SOP Instance",
        "description" : "Rx-Knie-S_Ufferer_05032024; Example of DICOM conformant SOP Instance (regarding Coding of Series-Modality)",
        "exampleCanonical" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-imagingstudy"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Practitioner"
          }
        ],
        "reference" : {
          "reference" : "Practitioner/PractDAtaenterer"
        },
        "name" : "Doris Ataenterer",
        "description" : "Example of Practitioner",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "PractitionerRole"
          }
        ],
        "reference" : {
          "reference" : "PractitionerRole/RoleDAtaenterer"
        },
        "name" : "Doris Ataenterer (Role)",
        "description" : "Example of PractionerRole",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/OrgHappyDoctors"
        },
        "name" : "Gemeinschaftspraxis Happy Doctors",
        "description" : "Example of Organization",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-rad-order-guidance-for-action"
        },
        "name" : "Guidance for Action",
        "description" : "Definition for Guidance for Action Value Set in the context of CH RAD-Order.",
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
          "reference" : "ValueSet/ch-rad-order-imaging-focus"
        },
        "name" : "Imaging Focus",
        "description" : "Definition for Imaging Focus Value Set in the context of CH RAD-Order.",
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
          "reference" : "ValueSet/ch-rad-order-imaging-region"
        },
        "name" : "Imaging Region",
        "description" : "Definition for Imaging Region Value Set in the context of CH RAD-Order.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Practitioner"
          }
        ],
        "reference" : {
          "reference" : "Practitioner/PractKNowit-All"
        },
        "name" : "Kurt Nowit-All",
        "description" : "Example of Practitioner",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "PractitionerRole"
          }
        ],
        "reference" : {
          "reference" : "PractitionerRole/RoleKNowit-All"
        },
        "name" : "Kurt NowIt-All (Role)",
        "description" : "Example of PractionerRole",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-rad-order-laterality"
        },
        "name" : "Laterality",
        "description" : "Definition for Laterality Value Set in the context of CH RAD-Order.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Location"
          }
        ],
        "reference" : {
          "reference" : "Location/LocationRadiography"
        },
        "name" : "Location Radiography",
        "description" : "Example of Location",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-rad-order-maneuver-type"
        },
        "name" : "Maneuver Type",
        "description" : "Definition for Maneuver Type Value Set in the context of CH RAD-Order.",
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
          "reference" : "ValueSet/ch-rad-order-acquisition-modality"
        },
        "name" : "Modality that created the series",
        "description" : "Valuset for the Type of equipment, or function or technique of that equipment, that created the data",
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
          "reference" : "ValueSet/ch-rad-order-modality-type"
        },
        "name" : "Modality Type",
        "description" : "Definition for Modality Type Value Set in the context of CH RAD-Order.",
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
          "reference" : "Questionnaire/ch-rad-order-module-previousresults"
        },
        "name" : "Module Questionnaire Attachment",
        "description" : "Subquestionnaire Attachment",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Questionnaire"
          }
        ],
        "reference" : {
          "reference" : "Questionnaire/ch-rad-order-module-caveats"
        },
        "name" : "Module Questionnaire Caveats",
        "description" : "Subquestionnaire Caveats",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Questionnaire"
          }
        ],
        "reference" : {
          "reference" : "Questionnaire/ch-rad-order-module-diagnosis"
        },
        "name" : "Module Questionnaire Diagnosis",
        "description" : "Subquestionnaire Diagnosis",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Questionnaire"
          }
        ],
        "reference" : {
          "reference" : "Questionnaire/ch-rad-order-module-medinfo"
        },
        "name" : "Module Questionnaire Instruction",
        "description" : "Subquestionnaire Instruction",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Practitioner"
          }
        ],
        "reference" : {
          "reference" : "Practitioner/PractORderplacerJunior"
        },
        "name" : "Olga Rderplacer-Junior",
        "description" : "Example of Practitioner",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "PractitionerRole"
          }
        ],
        "reference" : {
          "reference" : "PractitionerRole/RoleORderplacerJunior"
        },
        "name" : "Olga Rderplacer-Junior (Role)",
        "description" : "Example of PractionerRole",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Practitioner"
          }
        ],
        "reference" : {
          "reference" : "Practitioner/PractORderplacer"
        },
        "name" : "Ottilie Rderplacer",
        "description" : "Example of Practitioner",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "PractitionerRole"
          }
        ],
        "reference" : {
          "reference" : "PractitionerRole/RoleORderplacer"
        },
        "name" : "Ottilie Rderplacer (Role)",
        "description" : "Example of PractionerRole",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Practitioner"
          }
        ],
        "reference" : {
          "reference" : "Practitioner/PractORderfiller"
        },
        "name" : "Otto Rderfiller",
        "description" : "Example of Practitioner",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "PractitionerRole"
          }
        ],
        "reference" : {
          "reference" : "PractitionerRole/RoleORderfiller"
        },
        "name" : "Otto Rderfiller (Role)",
        "description" : "Example of PractionerRole",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Condition"
          }
        ],
        "reference" : {
          "reference" : "Condition/PrimaryDiagnosis"
        },
        "name" : "Primary Diagnosis",
        "description" : "Example of Diagnosis Condition",
        "exampleCanonical" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-diagnosis-condition"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-rad-order-caveat-qualifier-value"
        },
        "name" : "Qualifier Value",
        "description" : "Qualifier values in the context of CH RAD-Order.",
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
          "reference" : "Questionnaire/QuestionnaireRadiologyOrder"
        },
        "name" : "Questionnaire",
        "description" : "Questionnarie with all modules assembled",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "QuestionnaireResponse"
          }
        ],
        "reference" : {
          "reference" : "QuestionnaireResponse/QuestionnaireResponseRadiologyOrderImagingRequest"
        },
        "name" : "QuestionniaireResponse Radiology Order for Imaging",
        "description" : "Example of a QuestionnaireResponse for a Imaging",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "QuestionnaireResponse"
          }
        ],
        "reference" : {
          "reference" : "QuestionnaireResponse/QuestionnaireResponseRadiologyOrderImagIntervent"
        },
        "name" : "QuestionniaireResponse Radiology Order for Imaging with Intervention",
        "description" : "Example of a QuestionnaireResponse for Imaging with Intervention",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "QuestionnaireResponse"
          }
        ],
        "reference" : {
          "reference" : "QuestionnaireResponse/QuestionnaireResponseRadiologyOrderRemoteReporting"
        },
        "name" : "QuestionniaireResponse Radiology Order for remote Reporting",
        "description" : "Example of a QuestionnaireResponse for remote Reporting",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "QuestionnaireResponse"
          }
        ],
        "reference" : {
          "reference" : "QuestionnaireResponse/QuestionnaireResponseRadiologyOrderRequestPrevious"
        },
        "name" : "QuestionniaireResponse Radiology Order for Request for previous Report and Images",
        "description" : "Example of a QuestionnaireResponse for previous Report and Images",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "QuestionnaireResponse"
          }
        ],
        "reference" : {
          "reference" : "QuestionnaireResponse/QuestionnaireResponseRadiologyOrderSecondOpinion"
        },
        "name" : "QuestionniaireResponse Radiology Order for second Opinion",
        "description" : "Example of a QuestionnaireResponse for a second Opinion",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/OrgRadHappyHospital"
        },
        "name" : "Radiologie Klinik Happy Hospital",
        "description" : "Example of Organization",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureMap"
          }
        ],
        "reference" : {
          "reference" : "StructureMap/RadOrderQrToBundle"
        },
        "name" : "RadOrderQrToBundle",
        "description" : "Maps RadOrder QuestionnaireResponse to Bundle"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-rad-order-requested-service"
        },
        "name" : "Requested Service",
        "description" : "Definition for Requested Service Value Set in the context of CH RAD-Order.",
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
          "reference" : "CodeSystem/ch-rad-order-requested-service"
        },
        "name" : "Requested Service",
        "description" : "Definition for Requested Service Code System in the context of CH RAD-Order.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Condition"
          }
        ],
        "reference" : {
          "reference" : "Condition/SecondaryDiagnosis1"
        },
        "name" : "Secondary Diagnosis 1",
        "description" : "Example of Diagnosis Condition",
        "exampleCanonical" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-diagnosis-condition"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Condition"
          }
        ],
        "reference" : {
          "reference" : "Condition/SecondaryDiagnosis2"
        },
        "name" : "Secondary Diagnosis 2",
        "description" : "Example of Diagnosis Condition",
        "exampleCanonical" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-diagnosis-condition"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ServiceRequest"
          }
        ],
        "reference" : {
          "reference" : "ServiceRequest/ServiceRequestRadiologyOrder"
        },
        "name" : "ServiceRequest Radiology Order",
        "description" : "Example of ServiceRequest",
        "exampleCanonical" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-servicerequest"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/OrgSmallHospital"
        },
        "name" : "Spital Small Hospital",
        "description" : "Example of Organization",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Patient"
          }
        ],
        "reference" : {
          "reference" : "Patient/PatSUfferer"
        },
        "name" : "Susanna Ufferer",
        "description" : "Example of Patient",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-rad-order-caveat-type"
        },
        "name" : "Type of Caveat",
        "description" : "Definition for Type of Caveat Value Set in the context of CH RAD-Order.",
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
          "reference" : "ValueSet/ch-rad-order-order-detail-type"
        },
        "name" : "Type of Order Detail",
        "description" : "Definition for Type of Order Detail Value Set in the context of CH RAD-Order.",
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
          "reference" : "CodeSystem/ch-rad-order-order-detail-type"
        },
        "name" : "Type of Order Detail",
        "description" : "Definition for Type of Order Detail Code System in the context of CH RAD-Order.",
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
          "reference" : "ValueSet/ch-rad-order-view-type"
        },
        "name" : "View Type",
        "description" : "Definition for View Type Value Set in the context of CH RAD-Order.",
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
              "valueUrl" : "usecase-english.html"
            }
          ],
          "nameUrl" : "usecase-english.html",
          "title" : "Use Cases",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "usecase-german.html"
            }
          ],
          "nameUrl" : "usecase-german.html",
          "title" : "Anwendungsfälle",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "usecase-french.html"
            }
          ],
          "nameUrl" : "usecase-french.html",
          "title" : "Cas d'application",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "questionnaire-form.html"
            }
          ],
          "nameUrl" : "questionnaire-form.html",
          "title" : "Questionnaire",
          "generation" : "html"
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
          "generation" : "html"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "extensions.html"
            }
          ],
          "nameUrl" : "extensions.html",
          "title" : "Extensions",
          "generation" : "html"
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
          "generation" : "html"
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
