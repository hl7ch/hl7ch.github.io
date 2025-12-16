# Home - CH EMED (R4) v6.0.0

* [**Table of Contents**](toc.md)
* **Home**

## Home

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emed/ImplementationGuide/ch.fhir.ig.ch-emed | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CH_EMED |
| **Copyright/Legal**: CC0-1.0 | |

### Introduction

The CH EMED implementation guide describes the FHIR representation of the **documents for the exchange of medication information** in the context of the EPR (electronic patient record) in Switzerland. This implementation guide is dependent on [CH Core](http://fhir.ch/ig/ch-core/index.html) and [CH Term](http://fhir.ch/ig/ch-term/index.html), which describe the Swiss specific context, especially related to the Swiss EPR.

Initially this implementation guide was based on the CDA-CH-EMED eMedication ART-DECOR® specification which has been published by [eHealth Suisse](https://www.e-health-suisse.ch/en/home.html). CDA-CH-EMED defined the eMedication documents for the information exchange in the context of the EPR in Switzerland. The documents were based on the IHE Pharmacy Technical Framework modelled and specialized in the Building Block Repository CH-PHARM. Base for this modelling was the report from [IPAG eMedikation, 7.6.2017](https://www.e-health-suisse.ch/fileadmin/user_upload/Dokumente/2017/D/170607_Bericht_eMedikation_IPAG.pdf) and the work of IPAG/eHealth Suisse.

Due to difficulties in modeling and mapping, the further development of the specifications, especially in the area of dosage, has been difficult. This and the fact that the format CDA-CH-EMED was only little in use, led then to the fact that the CDA format was abandoned and the exchange format on the basis of FHIR was developed further.

#### Scope

The following documents have been defined (and described in more detail on the respective subsections):

* [Medication Treatment Plan document](medication-treatment-plan-document.md)
* [Medication Prescription document](medication-prescription-document.md)
* [Medication Dispense document](medication-dispense-document.md)
* [Pharmaceutical Advice document](pharmaceutical-advice-document.md)
* [Medication List document](medication-list-document.md)
* [Medication Card document](medication-card-document.md)

The use case ([de](usecase-german.md), [fr](usecase-french.md)) illustrates the processes related to medication. In successive steps, situations are depicted in which the various eMedication documents are used. For each step, the structured FHIR examples are provided.

To explain the different focus areas in more detail, there is a guidance section with the following topics:

* [Dosage](dosage.md)
* [Repeated Dispense (Prescription)](repeated-dispense.md)
* [Authorship (Author(s) & Timestamp)](authorship.md)
* [Relationship Between Documents](relationship-between-documents.md)

[Changelog](changelog.md) with significant changes, open and closed issues.

**Download**: You can download this implementation guide in [npm format](https://confluence.hl7.org/display/FHIR/NPM+Package+Specification) from [here](package.tgz).

### Conformance Expectations

#### Key Words

The key words MUST, MUST NOT, REQUIRED, SHALL, SHALL NOT, SHOULD, SHOULD NOT, RECOMMENDED, MAY, and OPTIONAL in this implementation guide are to be interpreted as described in [RFC 2119](https://www.ietf.org/rfc/rfc2119.txt).

#### MustSupport

For all elements listed in the **minimum data set in the[IPAG report](https://www.e-health-suisse.ch/fileadmin/user_upload/Dokumente/2017/D/170607_Bericht_eMedikation_IPAG.pdf)** the corresponding FHIR elements 'mustSupport' flag have been set to `true`. 'MustSupport' flags are currently only defined for the [Medication Card document](medication-card-document.md#fhir-document-bundle).

##### Meaning of the Flag MustSupport for this Implementation Guide

The flag [mustSupport](https://www.hl7.org/fhir/profiling.html#mustsupport) follows the IHE use of **R2** as defined in [Appendix Z](https://profiles.ihe.net/ITI/TF/Volume2/ch-Z.html#z.10-profiling-conventions-for-constraints-on-fhir). It demands that the content creator **'must support' these elements if they are known**. If the sending application has data for the element, it is REQUIRED to populate the element with a non-empty value. If the value is not known, the element MAY be omitted. A receiving application MAY ignore the information conveyed by the element. A receiving application SHALL NOT raise an error solely due to the presence or absence of the element.

##### Implication of MustSupport to the Original Representation

The original representation of the [Medication Card document](medication-card-document.md#fhir-document-bundle) and the [Medication Prescription document](medication-prescription-document.md#fhir-document-bundle) MUST be embedded as a PDF in PDF/A-1 or PDF/A-2 format. If elements of the minimum data set in the IPAG report are provided in the bundle, they are also REQUIRED to be represented in the original representation (PDF). Guidance on the readable representation of EPR documents with an example of handling the referencing from narrative to data can be found [here](https://fhir.ch/ig/ch-core/guidance.html#readable-representation-of-epr-documents).

### Collaboration

This guide is the product of collaborative work undertaken with participants from:

* [Swiss FHIR Implementers Community](https://www.fhir.ch)
* [HL7 Switzerland](https://www.hl7.ch)
* [eHealth Suisse](https://www.e-health-suisse.ch/startseite.html)

### IP Statements

This document is licensed under Creative Commons "No Rights Reserved" ([CC0](https://creativecommons.org/publicdomain/zero/1.0/)).

HL7®, HEALTH LEVEL SEVEN®, FHIR® and the FHIR ![](icon-fhir-16.png)® are trademarks owned by Health Level Seven International, registered with the United States Patent and Trademark Office.

This implementation guide contains and references intellectual property owned by third parties ("Third Party IP"). Acceptance of these License Terms does not grant any rights with respect to Third Party IP. The licensee alone is responsible for identifying and obtaining any necessary licenses or authorizations to utilize Third Party IP in connection with the specification or otherwise.

This publication includes IP covered under the following statements.

* CC0-1.0

* [EDQM - Standard Terms](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-edqm-standardterms.html): [Bundle/1-1-MedicationTreatmentPlan](Bundle-1-1-MedicationTreatmentPlan.md), [Bundle/1-2-MedicationDispense](Bundle-1-2-MedicationDispense.md)...Show 36 more,[Bundle/2-1-MedicationList](Bundle-2-1-MedicationList.md),[Bundle/2-3-MedicationTreatmentPlan](Bundle-2-3-MedicationTreatmentPlan.md),[Bundle/2-4-MedicationDispense](Bundle-2-4-MedicationDispense.md),[Bundle/2-5-MedicationTreatmentPlan](Bundle-2-5-MedicationTreatmentPlan.md),[Bundle/2-6-MedicationPrescription](Bundle-2-6-MedicationPrescription.md),[Bundle/2-7-MedicationCard](Bundle-2-7-MedicationCard.md),[Bundle/2-7-MedicationCard-UUIDfullUrl](Bundle-2-7-MedicationCard-UUIDfullUrl.md),[Bundle/3-1-MedicationDispense](Bundle-3-1-MedicationDispense.md),[Bundle/3-2-MedicationDispense](Bundle-3-2-MedicationDispense.md),[Bundle/PharmaceuticalAdvice-ChangeDosage](Bundle-PharmaceuticalAdvice-ChangeDosage.md),[CHEMEDDosage](StructureDefinition-ch-emed-dosage.md),[CHEMEDMedication](StructureDefinition-ch-emed-medication.md),[CHEMEDMedicationAdministration](StructureDefinition-ch-emed-medicationadministration.md),[Medication/MedicationWithATC](Medication-MedicationWithATC.md),[Medication/MedicationWithTwoIngredients](Medication-MedicationWithTwoIngredients.md),[Medication/TriatecWithCodeNotFromVS](Medication-TriatecWithCodeNotFromVS.md),[Medication/TriatecWithLocalCodes](Medication-TriatecWithLocalCodes.md),[MedicationAdministration/3-1-MedAdminNacl](MedicationAdministration-3-1-MedAdminNacl.md),[MedicationAdministration/3-2-MedAdminFentanyl](MedicationAdministration-3-2-MedAdminFentanyl.md),[MedicationDispense/1-2-MedDispTriatec](MedicationDispense-1-2-MedDispTriatec.md),[MedicationDispense/2-1-MedDispTriatec](MedicationDispense-2-1-MedDispTriatec.md),[MedicationDispense/2-4-MedDispBeloczok](MedicationDispense-2-4-MedDispBeloczok.md),[MedicationDispense/MedDispTriatec-WasNotSubstituted](MedicationDispense-MedDispTriatec-WasNotSubstituted.md),[MedicationDispense/MedDispTriatec-WasSubstituted](MedicationDispense-MedDispTriatec-WasSubstituted.md),[MedicationRequest/2-6-MedReqNorvasc](MedicationRequest-2-6-MedReqNorvasc.md),[MedicationRequest/MedReq-ChangeMedication](MedicationRequest-MedReq-ChangeMedication.md),[MedicationRequest/MedReq-ComplexDosage](MedicationRequest-MedReq-ComplexDosage.md),[MedicationStatement/1-1-MedStatTriatec](MedicationStatement-1-1-MedStatTriatec.md),[MedicationStatement/2-1-MedStatTriatec](MedicationStatement-2-1-MedStatTriatec.md),[MedicationStatement/2-3-MedStatBeloczok](MedicationStatement-2-3-MedStatBeloczok.md),[MedicationStatement/2-5-MedStatNorvasc](MedicationStatement-2-5-MedStatNorvasc.md),[MedicationStatement/2-7-MedStatBeloczok](MedicationStatement-2-7-MedStatBeloczok.md),[MedicationStatement/2-7-MedStatNorvasc](MedicationStatement-2-7-MedStatNorvasc.md),[MedicationStatement/AsNeededWithMaxDose](MedicationStatement-AsNeededWithMaxDose.md),[MedicationStatement/MedStatTriatec-ChangeDosage](MedicationStatement-MedStatTriatec-ChangeDosage.md)and[MedicationStatement/NotRecommendedTimingCodes](MedicationStatement-NotRecommendedTimingCodes.md)
* [IHE Pharmaceutical Advice Status List](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-ihe-pharmaceuticaladvicestatuslist.html): [Bundle/2-2-PharmaceuticalAdvice](Bundle-2-2-PharmaceuticalAdvice.md), [Bundle/PharmaceuticalAdvice-ChangeDosage](Bundle-PharmaceuticalAdvice-ChangeDosage.md)...Show 4 more,[CHEMEDObservation](StructureDefinition-ch-emed-observation.md),[Observation/2-2-ObsPharmaceuticalAdvice](Observation-2-2-ObsPharmaceuticalAdvice.md),[Observation/Obs-ChangeDosage](Observation-Obs-ChangeDosage.md)and[Observation/PharmaceuticalAdvice-ChangeMedicament](Observation-PharmaceuticalAdvice-ChangeMedicament.md)


* ISO maintains the copyright on the country codes, and controls its use carefully. For further details see the ISO 3166 web page: [https://www.iso.org/iso-3166-country-codes.html](https://www.iso.org/iso-3166-country-codes.html)

* [ISO 3166-1 Codes for the representation of names of countries and their subdivisions — Part 1: Country code](http://terminology.hl7.org/6.5.0/CodeSystem-ISO3166Part1.html): [CHEMEDCompositionMedicationCard](StructureDefinition-ch-emed-composition-medicationcard.md), [CHEMEDCompositionMedicationDispense](StructureDefinition-ch-emed-composition-medicationdispense.md)...Show 42 more,[CHEMEDCompositionMedicationList](StructureDefinition-ch-emed-composition-medicationlist.md),[CHEMEDCompositionMedicationPrescription](StructureDefinition-ch-emed-composition-medicationprescription.md),[CHEMEDCompositionMedicationTreatmentPlan](StructureDefinition-ch-emed-composition-medicationtreatmentplan.md),[CHEMEDCompositionPharmaceuticalAdvice](StructureDefinition-ch-emed-composition-pharmaceuticaladvice.md),[CHEMEDDocumentMedicationCard](StructureDefinition-ch-emed-document-medicationcard.md),[CHEMEDDocumentMedicationDispense](StructureDefinition-ch-emed-document-medicationdispense.md),[CHEMEDDocumentMedicationList](StructureDefinition-ch-emed-document-medicationlist.md),[CHEMEDDocumentMedicationPrescription](StructureDefinition-ch-emed-document-medicationprescription.md),[CHEMEDDocumentMedicationTreatmentPlan](StructureDefinition-ch-emed-document-medicationtreatmentplan.md),[CHEMEDDocumentPharmaceuticalAdvice](StructureDefinition-ch-emed-document-pharmaceuticaladvice.md),[CHEMEDDosage](StructureDefinition-ch-emed-dosage.md),[CHEMEDDosageMedicationRequest](StructureDefinition-ch-emed-dosage-medicationrequest.md),[CHEMEDDosageSplit](StructureDefinition-ch-emed-dosage-split.md),[CHEMEDExtDispense](StructureDefinition-ch-emed-ext-dispense.md),[CHEMEDExtLastConsideredDocument](StructureDefinition-ch-emed-ext-last-considered-document.md),[CHEMEDExtMedicationRequestChanged](StructureDefinition-ch-emed-ext-medicationrequest-changed.md),[CHEMEDExtMedicationStatementChanged](StructureDefinition-ch-emed-ext-medicationstatement-changed.md),[CHEMEDExtPharmaceuticalAdvice](StructureDefinition-ch-emed-ext-pharmaceuticaladvice.md),[CHEMEDExtPrescription](StructureDefinition-ch-emed-ext-prescription.md),[CHEMEDExtTreatmentPlan](StructureDefinition-ch-emed-ext-treatmentplan.md),[CHEMEDMedication](StructureDefinition-ch-emed-medication.md),[CHEMEDMedicationAdministration](StructureDefinition-ch-emed-medicationadministration.md),[CHEMEDMedicationAdministrationList](StructureDefinition-ch-emed-medicationadministration-list.md),[CHEMEDMedicationDispense](StructureDefinition-ch-emed-medicationdispense.md),[CHEMEDMedicationDispenseList](StructureDefinition-ch-emed-medicationdispense-list.md),[CHEMEDMedicationMedicationDispense](StructureDefinition-ch-emed-medication-medicationdispense.md),[CHEMEDMedicationRequest](StructureDefinition-ch-emed-medicationrequest.md),[CHEMEDMedicationRequestChanged](StructureDefinition-ch-emed-medicationrequest-changed.md),[CHEMEDMedicationRequestChangedList](StructureDefinition-ch-emed-medicationrequest-changed-list.md),[CHEMEDMedicationRequestList](StructureDefinition-ch-emed-medicationrequest-list.md),[CHEMEDMedicationStatement](StructureDefinition-ch-emed-medicationstatement.md),[CHEMEDMedicationStatementCard](StructureDefinition-ch-emed-medicationstatement-card.md),[CHEMEDMedicationStatementChanged](StructureDefinition-ch-emed-medicationstatement-changed.md),[CHEMEDMedicationStatementChangedList](StructureDefinition-ch-emed-medicationstatement-changed-list.md),[CHEMEDMedicationStatementList](StructureDefinition-ch-emed-medicationstatement-list.md),[CHEMEDObservation](StructureDefinition-ch-emed-observation.md),[CHEMEDObservationList](StructureDefinition-ch-emed-observation-list.md),[CHEMEDOrganization](StructureDefinition-ch-emed-organization.md),[CHEMEDPractitioner](StructureDefinition-ch-emed-practitioner.md),[CHEMEDPractitionerRole](StructureDefinition-ch-emed-practitionerrole.md),[CHEMEDUUIDIdentifier](StructureDefinition-ch-emed-uuid-identifier.md)and[CH_EMED](index.md)


* The UCUM codes, UCUM table (regardless of format), and UCUM Specification are copyright 1999-2009, Regenstrief Institute, Inc. and the Unified Codes for Units of Measures (UCUM) Organization. All rights reserved. [https://ucum.org/trac/wiki/TermsOfUse](https://ucum.org/trac/wiki/TermsOfUse)

* [Unified Code for Units of Measure (UCUM)](http://terminology.hl7.org/6.5.0/CodeSystem-v3-ucum.html): [Bundle/1-1-MedicationTreatmentPlan](Bundle-1-1-MedicationTreatmentPlan.md), [Bundle/1-2-MedicationDispense](Bundle-1-2-MedicationDispense.md)...Show 33 more,[Bundle/2-1-MedicationList](Bundle-2-1-MedicationList.md),[Bundle/2-3-MedicationTreatmentPlan](Bundle-2-3-MedicationTreatmentPlan.md),[Bundle/2-4-MedicationDispense](Bundle-2-4-MedicationDispense.md),[Bundle/2-5-MedicationTreatmentPlan](Bundle-2-5-MedicationTreatmentPlan.md),[Bundle/2-6-MedicationPrescription](Bundle-2-6-MedicationPrescription.md),[Bundle/2-7-MedicationCard](Bundle-2-7-MedicationCard.md),[Bundle/2-7-MedicationCard-UUIDfullUrl](Bundle-2-7-MedicationCard-UUIDfullUrl.md),[Bundle/3-1-MedicationDispense](Bundle-3-1-MedicationDispense.md),[Bundle/3-2-MedicationDispense](Bundle-3-2-MedicationDispense.md),[Bundle/PharmaceuticalAdvice-ChangeDosage](Bundle-PharmaceuticalAdvice-ChangeDosage.md),[Medication/MedicationWithATC](Medication-MedicationWithATC.md),[Medication/MedicationWithTwoIngredients](Medication-MedicationWithTwoIngredients.md),[Medication/TriatecWithCodeNotFromVS](Medication-TriatecWithCodeNotFromVS.md),[Medication/TriatecWithLocalCodes](Medication-TriatecWithLocalCodes.md),[MedicationAdministration/3-1-MedAdminNacl](MedicationAdministration-3-1-MedAdminNacl.md),[MedicationAdministration/3-2-MedAdminFentanyl](MedicationAdministration-3-2-MedAdminFentanyl.md),[MedicationDispense/1-2-MedDispTriatec](MedicationDispense-1-2-MedDispTriatec.md),[MedicationDispense/2-1-MedDispTriatec](MedicationDispense-2-1-MedDispTriatec.md),[MedicationDispense/2-4-MedDispBeloczok](MedicationDispense-2-4-MedDispBeloczok.md),[MedicationDispense/MedDispTriatec-WasNotSubstituted](MedicationDispense-MedDispTriatec-WasNotSubstituted.md),[MedicationDispense/MedDispTriatec-WasSubstituted](MedicationDispense-MedDispTriatec-WasSubstituted.md),[MedicationRequest/2-6-MedReqNorvasc](MedicationRequest-2-6-MedReqNorvasc.md),[MedicationRequest/MedReq-ChangeMedication](MedicationRequest-MedReq-ChangeMedication.md),[MedicationRequest/MedReq-ComplexDosage](MedicationRequest-MedReq-ComplexDosage.md),[MedicationStatement/1-1-MedStatTriatec](MedicationStatement-1-1-MedStatTriatec.md),[MedicationStatement/2-1-MedStatTriatec](MedicationStatement-2-1-MedStatTriatec.md),[MedicationStatement/2-3-MedStatBeloczok](MedicationStatement-2-3-MedStatBeloczok.md),[MedicationStatement/2-5-MedStatNorvasc](MedicationStatement-2-5-MedStatNorvasc.md),[MedicationStatement/2-7-MedStatBeloczok](MedicationStatement-2-7-MedStatBeloczok.md),[MedicationStatement/2-7-MedStatNorvasc](MedicationStatement-2-7-MedStatNorvasc.md),[MedicationStatement/AsNeededWithMaxDose](MedicationStatement-AsNeededWithMaxDose.md),[MedicationStatement/MedStatTriatec-ChangeDosage](MedicationStatement-MedStatTriatec-ChangeDosage.md)and[MedicationStatement/NotRecommendedTimingCodes](MedicationStatement-NotRecommendedTimingCodes.md)


* This material contains content from [LOINC](http://loinc.org). LOINC is copyright © 1995-2020, Regenstrief Institute, Inc. and the Logical Observation Identifiers Names and Codes (LOINC) Committee and is available at no cost under the [license](http://loinc.org/license). LOINC® is a registered United States trademark of Regenstrief Institute, Inc.

* [LOINC](http://terminology.hl7.org/6.5.0/CodeSystem-v3-loinc.html): [Bundle/1-1-MedicationTreatmentPlan](Bundle-1-1-MedicationTreatmentPlan.md), [Bundle/1-2-MedicationDispense](Bundle-1-2-MedicationDispense.md)...Show 27 more,[Bundle/2-1-MedicationList](Bundle-2-1-MedicationList.md),[Bundle/2-2-PharmaceuticalAdvice](Bundle-2-2-PharmaceuticalAdvice.md),[Bundle/2-3-MedicationTreatmentPlan](Bundle-2-3-MedicationTreatmentPlan.md),[Bundle/2-4-MedicationDispense](Bundle-2-4-MedicationDispense.md),[Bundle/2-5-MedicationTreatmentPlan](Bundle-2-5-MedicationTreatmentPlan.md),[Bundle/2-6-MedicationPrescription](Bundle-2-6-MedicationPrescription.md),[Bundle/2-7-MedicationCard](Bundle-2-7-MedicationCard.md),[Bundle/2-7-MedicationCard-UUIDfullUrl](Bundle-2-7-MedicationCard-UUIDfullUrl.md),[Bundle/3-1-MedicationDispense](Bundle-3-1-MedicationDispense.md),[Bundle/3-2-MedicationDispense](Bundle-3-2-MedicationDispense.md),[Bundle/PharmaceuticalAdvice-ChangeDosage](Bundle-PharmaceuticalAdvice-ChangeDosage.md),[CHEMEDCompositionMedicationCard](StructureDefinition-ch-emed-composition-medicationcard.md),[CHEMEDCompositionMedicationDispense](StructureDefinition-ch-emed-composition-medicationdispense.md),[CHEMEDCompositionMedicationList](StructureDefinition-ch-emed-composition-medicationlist.md),[CHEMEDCompositionMedicationPrescription](StructureDefinition-ch-emed-composition-medicationprescription.md),[CHEMEDCompositionMedicationTreatmentPlan](StructureDefinition-ch-emed-composition-medicationtreatmentplan.md),[CHEMEDCompositionPharmaceuticalAdvice](StructureDefinition-ch-emed-composition-pharmaceuticaladvice.md),[Composition/1-1-Composition](Composition-1-1-Composition.md),[Composition/1-2-Composition](Composition-1-2-Composition.md),[Composition/2-1-Composition](Composition-2-1-Composition.md),[Composition/2-2-Composition](Composition-2-2-Composition.md),[Composition/2-3-Composition](Composition-2-3-Composition.md),[Composition/2-4-Composition](Composition-2-4-Composition.md),[Composition/2-5-Composition](Composition-2-5-Composition.md),[Composition/3-1-Composition](Composition-3-1-Composition.md),[Composition/3-2-Composition](Composition-3-2-Composition.md)and[Composition/Comp-ChangeDosage](Composition-Comp-ChangeDosage.md)


* This material contains content that is copyright of SNOMED International. Implementers of these specifications must have the appropriate SNOMED CT Affiliate license - for more information contact [https://www.snomed.org/get-snomed](https://www.snomed.org/get-snomed) or [info@snomed.org](mailto:info@snomed.org).

* [SNOMED Clinical Terms&reg; (SNOMED CT&reg;)](http://tx.fhir.org/r4/ValueSet/snomedct): [Bundle/1-1-MedicationTreatmentPlan](Bundle-1-1-MedicationTreatmentPlan.md), [Bundle/1-2-MedicationDispense](Bundle-1-2-MedicationDispense.md)...Show 51 more,[Bundle/2-1-MedicationList](Bundle-2-1-MedicationList.md),[Bundle/2-2-PharmaceuticalAdvice](Bundle-2-2-PharmaceuticalAdvice.md),[Bundle/2-3-MedicationTreatmentPlan](Bundle-2-3-MedicationTreatmentPlan.md),[Bundle/2-4-MedicationDispense](Bundle-2-4-MedicationDispense.md),[Bundle/2-5-MedicationTreatmentPlan](Bundle-2-5-MedicationTreatmentPlan.md),[Bundle/2-6-MedicationPrescription](Bundle-2-6-MedicationPrescription.md),[Bundle/2-7-MedicationCard](Bundle-2-7-MedicationCard.md),[Bundle/2-7-MedicationCard-UUIDfullUrl](Bundle-2-7-MedicationCard-UUIDfullUrl.md),[Bundle/3-1-MedicationDispense](Bundle-3-1-MedicationDispense.md),[Bundle/3-2-MedicationDispense](Bundle-3-2-MedicationDispense.md),[Bundle/PharmaceuticalAdvice-ChangeDosage](Bundle-PharmaceuticalAdvice-ChangeDosage.md),[CHEMEDCompositionMedicationCard](StructureDefinition-ch-emed-composition-medicationcard.md),[CHEMEDCompositionMedicationDispense](StructureDefinition-ch-emed-composition-medicationdispense.md),[CHEMEDCompositionMedicationList](StructureDefinition-ch-emed-composition-medicationlist.md),[CHEMEDCompositionMedicationPrescription](StructureDefinition-ch-emed-composition-medicationprescription.md),[CHEMEDCompositionMedicationTreatmentPlan](StructureDefinition-ch-emed-composition-medicationtreatmentplan.md),[CHEMEDCompositionPharmaceuticalAdvice](StructureDefinition-ch-emed-composition-pharmaceuticaladvice.md),[CHEMEDMedication](StructureDefinition-ch-emed-medication.md),[Composition/1-1-Composition](Composition-1-1-Composition.md),[Composition/1-2-Composition](Composition-1-2-Composition.md),[Composition/2-1-Composition](Composition-2-1-Composition.md),[Composition/2-2-Composition](Composition-2-2-Composition.md),[Composition/2-3-Composition](Composition-2-3-Composition.md),[Composition/2-4-Composition](Composition-2-4-Composition.md),[Composition/2-5-Composition](Composition-2-5-Composition.md),[Composition/3-1-Composition](Composition-3-1-Composition.md),[Composition/3-2-Composition](Composition-3-2-Composition.md),[Composition/Comp-ChangeDosage](Composition-Comp-ChangeDosage.md),[Medication/MedicationWithATC](Medication-MedicationWithATC.md),[Medication/MedicationWithTwoIngredients](Medication-MedicationWithTwoIngredients.md),[Medication/TriatecWithCodeNotFromVS](Medication-TriatecWithCodeNotFromVS.md),[Medication/TriatecWithLocalCodes](Medication-TriatecWithLocalCodes.md),[MedicationAdministration/3-1-MedAdminNacl](MedicationAdministration-3-1-MedAdminNacl.md),[MedicationAdministration/3-2-MedAdminFentanyl](MedicationAdministration-3-2-MedAdminFentanyl.md),[MedicationDispense/1-2-MedDispTriatec](MedicationDispense-1-2-MedDispTriatec.md),[MedicationDispense/2-1-MedDispTriatec](MedicationDispense-2-1-MedDispTriatec.md),[MedicationDispense/2-4-MedDispBeloczok](MedicationDispense-2-4-MedDispBeloczok.md),[MedicationDispense/MedDispTriatec-WasNotSubstituted](MedicationDispense-MedDispTriatec-WasNotSubstituted.md),[MedicationDispense/MedDispTriatec-WasSubstituted](MedicationDispense-MedDispTriatec-WasSubstituted.md),[MedicationRequest/2-6-MedReqNorvasc](MedicationRequest-2-6-MedReqNorvasc.md),[MedicationRequest/MedReq-ChangeMedication](MedicationRequest-MedReq-ChangeMedication.md),[MedicationRequest/MedReq-ComplexDosage](MedicationRequest-MedReq-ComplexDosage.md),[MedicationStatement/1-1-MedStatTriatec](MedicationStatement-1-1-MedStatTriatec.md),[MedicationStatement/2-1-MedStatTriatec](MedicationStatement-2-1-MedStatTriatec.md),[MedicationStatement/2-3-MedStatBeloczok](MedicationStatement-2-3-MedStatBeloczok.md),[MedicationStatement/2-5-MedStatNorvasc](MedicationStatement-2-5-MedStatNorvasc.md),[MedicationStatement/2-7-MedStatBeloczok](MedicationStatement-2-7-MedStatBeloczok.md),[MedicationStatement/2-7-MedStatNorvasc](MedicationStatement-2-7-MedStatNorvasc.md),[MedicationStatement/AsNeededWithMaxDose](MedicationStatement-AsNeededWithMaxDose.md),[MedicationStatement/MedStatTriatec-ChangeDosage](MedicationStatement-MedStatTriatec-ChangeDosage.md)and[MedicationStatement/NotRecommendedTimingCodes](MedicationStatement-NotRecommendedTimingCodes.md)


* This material derives from the HL7 Terminology (THO). THO is copyright ©1989+ Health Level Seven International and is made available under the CC0 designation. For more licensing information see: [https://terminology.hl7.org/license.html](https://terminology.hl7.org/license.html)

* [identifierType](http://terminology.hl7.org/7.0.1/CodeSystem-v2-0203.html): [Bundle/1-1-MedicationTreatmentPlan](Bundle-1-1-MedicationTreatmentPlan.md), [Bundle/1-2-MedicationDispense](Bundle-1-2-MedicationDispense.md)...Show 13 more,[Bundle/2-1-MedicationList](Bundle-2-1-MedicationList.md),[Bundle/2-2-PharmaceuticalAdvice](Bundle-2-2-PharmaceuticalAdvice.md),[Bundle/2-3-MedicationTreatmentPlan](Bundle-2-3-MedicationTreatmentPlan.md),[Bundle/2-4-MedicationDispense](Bundle-2-4-MedicationDispense.md),[Bundle/2-5-MedicationTreatmentPlan](Bundle-2-5-MedicationTreatmentPlan.md),[Bundle/2-6-MedicationPrescription](Bundle-2-6-MedicationPrescription.md),[Bundle/2-7-MedicationCard](Bundle-2-7-MedicationCard.md),[Bundle/2-7-MedicationCard-UUIDfullUrl](Bundle-2-7-MedicationCard-UUIDfullUrl.md),[Bundle/3-1-MedicationDispense](Bundle-3-1-MedicationDispense.md),[Bundle/3-2-MedicationDispense](Bundle-3-2-MedicationDispense.md),[Bundle/PharmaceuticalAdvice-ChangeDosage](Bundle-PharmaceuticalAdvice-ChangeDosage.md),[Patient/MaxMoser](Patient-MaxMoser.md)and[Patient/MonikaWegmueller](Patient-MonikaWegmueller.md)
* [Substance Admin Substitution](http://terminology.hl7.org/7.0.1/CodeSystem-v3-substanceAdminSubstitution.html): [Bundle/1-2-MedicationDispense](Bundle-1-2-MedicationDispense.md), [Bundle/2-1-MedicationList](Bundle-2-1-MedicationList.md)...Show 10 more,[Bundle/2-4-MedicationDispense](Bundle-2-4-MedicationDispense.md),[Bundle/2-6-MedicationPrescription](Bundle-2-6-MedicationPrescription.md),[CHEMEDMedicationDispense](StructureDefinition-ch-emed-medicationdispense.md),[CHEMEDMedicationRequest](StructureDefinition-ch-emed-medicationrequest.md),[MedicationDispense/1-2-MedDispTriatec](MedicationDispense-1-2-MedDispTriatec.md),[MedicationDispense/2-1-MedDispTriatec](MedicationDispense-2-1-MedDispTriatec.md),[MedicationDispense/2-4-MedDispBeloczok](MedicationDispense-2-4-MedDispBeloczok.md),[MedicationDispense/MedDispTriatec-WasSubstituted](MedicationDispense-MedDispTriatec-WasSubstituted.md),[MedicationRequest/2-6-MedReqNorvasc](MedicationRequest-2-6-MedReqNorvasc.md)and[MedicationRequest/MedReq-ChangeMedication](MedicationRequest-MedReq-ChangeMedication.md)


### Cross Version Analysis

This is an R4 IG. None of the features it uses are changed in R4B, so it can be used as is with R4B systems. Packages for both [R4 (ch.fhir.ig.ch-emed.r4)](package.r4.tgz) and [R4B (ch.fhir.ig.ch-emed.r4b)](package.r4b.tgz) are available.

### Dependency Table





### Globals Table

*There are no Global profiles defined*



## Resource Content

```json
{
  "resourceType" : "ImplementationGuide",
  "id" : "ch.fhir.ig.ch-emed",
  "url" : "http://fhir.ch/ig/ch-emed/ImplementationGuide/ch.fhir.ig.ch-emed",
  "version" : "6.0.0",
  "name" : "CH_EMED",
  "title" : "CH EMED (R4)",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-16",
  "publisher" : "HL7 Switzerland",
  "contact" : [
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch/"
        }
      ]
    },
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch/",
          "use" : "work"
        }
      ]
    }
  ],
  "description" : "Implementation Guide for the eMedication in Switzerland.",
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
  "packageId" : "ch.fhir.ig.ch-emed",
  "license" : "CC0-1.0",
  "fhirVersion" : ["4.0.1"],
  "dependsOn" : [
    {
      "id" : "ch_fhir_ig_ch_core",
      "uri" : "http://fhir.ch/ig/ch-core/ImplementationGuide/ch.fhir.ig.ch-core",
      "packageId" : "ch.fhir.ig.ch-core",
      "version" : "6.0.0"
    },
    {
      "id" : "hl7_terminology_r4",
      "uri" : "http://terminology.hl7.org/ImplementationGuide/hl7.terminology",
      "packageId" : "hl7.terminology.r4",
      "version" : "7.0.1"
    },
    {
      "id" : "hl7_fhir_uv_extensions_r4",
      "uri" : "http://hl7.org/fhir/extensions/ImplementationGuide/hl7.fhir.uv.extensions",
      "packageId" : "hl7.fhir.uv.extensions.r4",
      "version" : "5.2.0"
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
            "valueString" : "2020+"
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
            "valueString" : "http://fhir.ch/ig/ch-emed/history.html"
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
            "valueString" : "2020+"
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
            "valueString" : "http://fhir.ch/ig/ch-emed/history.html"
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
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/1-1-Composition"
        },
        "name" : "1-1 Composition for Medication Treatment Plan document",
        "description" : "Example for Composition - Use case step 1-1: First entry (including header information, section(s) and references) in the MTP document.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-composition-medicationtreatmentplan"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MedicationStatement"
          }
        ],
        "reference" : {
          "reference" : "MedicationStatement/1-1-MedStatTriatec"
        },
        "name" : "1-1 Medication Statement with Medication Triatec",
        "description" : "Example for MedicationStatement (MTP) - Use case step 1-1: The record of the medication Triatec, to be taken by Monika Wegmüller in the future.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationstatement"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/1-1-MedicationTreatmentPlan"
        },
        "name" : "1-1 Medication Treatment Plan document",
        "description" : "Example for Bundle - Use case step 1-1: Decision for Triatec as medication treatment for Monika Wegmüller.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-document-medicationtreatmentplan"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/1-2-Composition"
        },
        "name" : "1-2 Composition for Medication Dispense document",
        "description" : "Example for Composition - Use case step 1-2: First entry (including header information, section(s) and references) in the DIS document.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-composition-medicationdispense"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/1-2-MedicationDispense"
        },
        "name" : "1-2 Medication Dispense document",
        "description" : "Example for Bundle - Use case step 1-2: Medication dispense of Triatec to Monika Wegmüller.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-document-medicationdispense"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MedicationDispense"
          }
        ],
        "reference" : {
          "reference" : "MedicationDispense/2-4-MedDispBeloczok"
        },
        "name" : "1-2 Medication Dispense with Medication Beloc Zok",
        "description" : "Example for MedicationDispense (DIS) - Use case step 2-4: The record of the supply of Beloc Zok.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationdispense"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MedicationDispense"
          }
        ],
        "reference" : {
          "reference" : "MedicationDispense/1-2-MedDispTriatec"
        },
        "name" : "1-2 Medication Dispense with Medication Triatec",
        "description" : "Example for MedicationDispense (DIS) - Use case step 1-1: The record of the supply of Triatec.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationdispense"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/2-1-Composition"
        },
        "name" : "2-1 Composition for Medication List document",
        "description" : "Example for Composition - Use case step 2-1: First entry (including header information, section(s) and references) in the LIST document.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-composition-medicationlist"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MedicationDispense"
          }
        ],
        "reference" : {
          "reference" : "MedicationDispense/2-1-MedDispTriatec"
        },
        "name" : "2-1 Medication Dispense with Medication Triatec",
        "description" : "Example for MedicationDispense (LIST) - Use case step 2-1: Entry in the dynamically generated medication list for Monika Wegmüller.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationdispense-list"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/2-1-MedicationList"
        },
        "name" : "2-1 Medication List document",
        "description" : "Example for Bundle - Use case step 2-1: Dynamically generated medication list for Monika Wegmüller.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-document-medicationlist"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MedicationStatement"
          }
        ],
        "reference" : {
          "reference" : "MedicationStatement/2-1-MedStatTriatec"
        },
        "name" : "2-1 Medication Statement with Medication Triatec",
        "description" : "Example for MedicationStatement (LIST) - Use case step 2-1: Entry in the dynamically generated medication list for Monika Wegmüller.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationstatement-list"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/2-2-Composition"
        },
        "name" : "2-2 Composition for Pharmaceutical Advice document",
        "description" : "Example for Composition - Use case step 2-2: First entry (including header information, section(s) and references) in the PADV document.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-composition-pharmaceuticaladvice"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/2-2-ObsPharmaceuticalAdvice"
        },
        "name" : "2-2 Observation for Pharmaceutical Advice document",
        "description" : "Example for Observation (PADV) - Use case step 2-2: Cancellation of Triatec due to undesired side effects.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-observation"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/2-2-PharmaceuticalAdvice"
        },
        "name" : "2-2 Pharmaceutical Advice document",
        "description" : "Example for Bundle - Use case step 2-2: Cancellation of medication with Triatec due to undesired side effects of the active ingredient Ramipril.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-document-pharmaceuticaladvice"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/2-3-Composition"
        },
        "name" : "2-3 Composition for Medication Treatment Plan document",
        "description" : "Example for Composition - Use case step 2-3: First entry (including header information, section(s) and references) in the MTP document.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-composition-medicationtreatmentplan"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MedicationStatement"
          }
        ],
        "reference" : {
          "reference" : "MedicationStatement/2-3-MedStatBeloczok"
        },
        "name" : "2-3 Medication Statement with Medication Beloc Zok",
        "description" : "Example for MedicationStatement (MTP) - Use case step 2-3: The record of the medication Beloc Zok, to be taken by Monika Wegmüller in the future.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationstatement"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/2-3-MedicationTreatmentPlan"
        },
        "name" : "2-3 Medication Treatment Plan document",
        "description" : "Example for Bundle - Use case step 2-3: Decistion for Beloc Zok as new medication treatment for Monika Wegmüller.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-document-medicationtreatmentplan"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/2-4-Composition"
        },
        "name" : "2-4 Composition for Medication Dispense document",
        "description" : "Example for Composition - Use case step 2-4: First entry (including header information, section(s) and references) in the DIS document.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-composition-medicationdispense"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/2-4-MedicationDispense"
        },
        "name" : "2-4 Medication Dispense document",
        "description" : "Example for Bundle - Use case step 2-4: Medication dispense of Beloc Zok to Monika Wegmüller.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-document-medicationdispense"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/2-5-Composition"
        },
        "name" : "2-5 Composition for Medication Treatment Plan document",
        "description" : "Example for Composition - Use case step 2-5: First entry (including header information, section(s) and references) in the MTP document. The authors of the document are represented as person and device.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-composition-medicationtreatmentplan"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MedicationStatement"
          }
        ],
        "reference" : {
          "reference" : "MedicationStatement/2-5-MedStatNorvasc"
        },
        "name" : "2-5 Medication Statement with Medication Norvasc",
        "description" : "Example for MedicationStatement (MTP) - Use case step 2-5: The record of the medication Norvasc, to be taken by Monika Wegmüller in the future.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationstatement"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/2-5-MedicationTreatmentPlan"
        },
        "name" : "2-5 Medication Treatment Plan document",
        "description" : "Example for Bundle - Use case step 2-5: Decistion for Norvasc as new medication treatment for Monika Wegmüller.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-document-medicationtreatmentplan"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/2-6-MedicationPrescription"
        },
        "name" : "2-6 Medication Prescription document",
        "description" : "Example for Bundle - Use case 2-6: Prescription for Belok Zok for Monika Wegmüller.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-document-medicationprescription"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MedicationRequest"
          }
        ],
        "reference" : {
          "reference" : "MedicationRequest/2-6-MedReqNorvasc"
        },
        "name" : "2-6 Medication Request with Medication Norvasc",
        "description" : "Example for MedicationRequest (PRE) - Use case step 2-6: The order for the supply of Norvasc.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationrequest"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Binary"
          }
        ],
        "reference" : {
          "reference" : "Binary/2-6-pdf"
        },
        "name" : "2-6 PDF as original representation of the Medication Prescription document",
        "description" : "Example for Binary - Use case step 2-6: Original representation (PDF) in the PRE document.",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/2-7-MedicationCard"
        },
        "name" : "2-7 Medication Card document",
        "description" : "Example for Bundle - Use case step 2-7: Medication plan for Monika Wegmüller, created by her general practitioner. The 'fullUrl' elements of the entries and the references use absolute URLs.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-document-medicationcard"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/2-7-MedicationCard-UUIDfullUrl"
        },
        "name" : "2-7 Medication Card document (with references/fullUrls as UUIDs)",
        "description" : "Example for Bundle - Use case step 2-7: Medication plan for Monika Wegmüller, created by her general practitioner. The 'fullUrl' elements of the entries and the references use UUIDs.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-document-medicationcard"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MedicationStatement"
          }
        ],
        "reference" : {
          "reference" : "MedicationStatement/2-7-MedStatBeloczok"
        },
        "name" : "2-7 Medication Statement with Medication Beloc Zok",
        "description" : "Example for MedicationStatement (CARD) - Use case step 2-7: The record of Beloc Zok as part of the current medication of Monika Wegmüller.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationstatement-card"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MedicationStatement"
          }
        ],
        "reference" : {
          "reference" : "MedicationStatement/2-7-MedStatNorvasc"
        },
        "name" : "2-7 Medication Statement with Medication Norvasc",
        "description" : "Example for MedicationStatement (CARD) - Use case step 2-7: The record of Norvasc as part of the current medication of Monika Wegmüller.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationstatement-card"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Binary"
          }
        ],
        "reference" : {
          "reference" : "Binary/2-7-pdf"
        },
        "name" : "2-7 PDF as original representation of the Medication Card document",
        "description" : "Example for Binary - Use case step 2-7: Original representation (PDF) in the CARD document.",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/3-1-Composition"
        },
        "name" : "3-1 Composition for Medication Dispense document",
        "description" : "Example for Composition - Use case step 3-1: First entry (including header information, section(s) and references) in the DIS document.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-composition-medicationdispense"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/3-1-MedicationDispense"
        },
        "name" : "3-1 Medication Dispense document",
        "description" : "Example for Bundle - Use case step 3-1: Documentation of the medication administration of NaCl to Max Moser.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-document-medicationdispense"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/3-2-Composition"
        },
        "name" : "3-2 Composition for Medication Dispense document",
        "description" : "Example for Composition - Use case step 3-3: First entry (including header information, section(s) and references) in the DIS document.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-composition-medicationdispense"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/3-2-MedicationDispense"
        },
        "name" : "3-2 Medication Dispense document",
        "description" : "Example for Bundle - Use case step 3-2: Documentation of the medication administration of Fentanyl to Max Moser.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-document-medicationdispense"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:complex-type"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-emed-dosage-medicationrequest"
        },
        "name" : "CH EMED Dosage (MedicationRequest)",
        "description" : "Definition of the dosage (used in MedicationRequest)",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:complex-type"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-emed-dosage"
        },
        "name" : "CH EMED Dosage (MedicationStatement / MedicationDispense)",
        "description" : "Definition of the dosage (used in MedicationStatement / MedicationDispense)",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:complex-type"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-emed-dosage-split"
        },
        "name" : "CH EMED Dosage Split",
        "description" : "Definition of the split dosage (used in MedicationStatement / MedicationDispense / MedicationRequest)",
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
          "reference" : "StructureDefinition/ch-emed-ext-dispense"
        },
        "name" : "CH EMED Extension Dispense",
        "description" : "Extension to reference an external MedicationDispense/MedicationAdministration and the Medication Dispense document that contains it",
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
          "reference" : "StructureDefinition/ch-emed-ext-last-considered-document"
        },
        "name" : "CH EMED Extension Last Considered Document",
        "description" : "Extension including the identifier of the last considered document for consolidating this MedicationStatement.",
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
          "reference" : "StructureDefinition/ch-emed-ext-medicationrequest-changed"
        },
        "name" : "CH EMED Extension MedicationRequest Changed",
        "description" : "Extension to represent the changed MedicationRequest",
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
          "reference" : "StructureDefinition/ch-emed-ext-medicationstatement-changed"
        },
        "name" : "CH EMED Extension MedicationStatement Changed",
        "description" : "Extension to represent the changed MedicationStatement",
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
          "reference" : "StructureDefinition/ch-emed-ext-pharmaceuticaladvice"
        },
        "name" : "CH EMED Extension Pharmaceutical Advice",
        "description" : "Extension to reference an external Observation and the Pharmaceutical Advice document that contains it",
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
          "reference" : "StructureDefinition/ch-emed-ext-prescription"
        },
        "name" : "CH EMED Extension Prescription",
        "description" : "Extension to reference an external MedicationRequest and the Medication Prescription document that contains it",
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
          "reference" : "StructureDefinition/ch-emed-ext-treatmentplan"
        },
        "name" : "CH EMED Extension Treatment Plan",
        "description" : "Extension to reference an external MedicationStatement and the Medication Treatment Plan document that contains it",
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
          "reference" : "StructureDefinition/ch-emed-medication"
        },
        "name" : "CH EMED Medication",
        "description" : "Definition of the medication",
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
          "reference" : "StructureDefinition/ch-emed-medication-medicationdispense"
        },
        "name" : "CH EMED Medication (MedicationDispense)",
        "description" : "Definition of the medication for the medication dispense",
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
          "reference" : "StructureDefinition/ch-emed-composition-medicationcard"
        },
        "name" : "CH EMED Medication Card Composition",
        "description" : "Definition of the composition for the medication card document",
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
          "reference" : "StructureDefinition/ch-emed-document-medicationcard"
        },
        "name" : "CH EMED Medication Card Document",
        "description" : "Definition of the bundle for the medication card document",
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
          "reference" : "StructureDefinition/ch-emed-composition-medicationdispense"
        },
        "name" : "CH EMED Medication Dispense Composition",
        "description" : "Definition of the composition for the medication dispense document",
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
          "reference" : "StructureDefinition/ch-emed-document-medicationdispense"
        },
        "name" : "CH EMED Medication Dispense Document",
        "description" : "Definition of the bundle for the medication dispense document",
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
          "reference" : "StructureDefinition/ch-emed-composition-medicationlist"
        },
        "name" : "CH EMED Medication List Composition",
        "description" : "Definition of the composition for the medication list document",
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
          "reference" : "StructureDefinition/ch-emed-document-medicationlist"
        },
        "name" : "CH EMED Medication List Document",
        "description" : "Definition of the bundle for the medication list document",
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
          "reference" : "StructureDefinition/ch-emed-composition-medicationprescription"
        },
        "name" : "CH EMED Medication Prescription Composition",
        "description" : "Definition of the composition for the medication prescription document",
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
          "reference" : "StructureDefinition/ch-emed-document-medicationprescription"
        },
        "name" : "CH EMED Medication Prescription Document",
        "description" : "Definition of the bundle for the medication prescription document",
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
          "reference" : "StructureDefinition/ch-emed-composition-medicationtreatmentplan"
        },
        "name" : "CH EMED Medication Treatment Plan Composition",
        "description" : "Definition of the composition for the medication treatment plan document",
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
          "reference" : "StructureDefinition/ch-emed-document-medicationtreatmentplan"
        },
        "name" : "CH EMED Medication Treatment Plan Document",
        "description" : "Definition of the bundle for the medication treatment plan document",
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
          "reference" : "StructureDefinition/ch-emed-medicationadministration"
        },
        "name" : "CH EMED MedicationAdministration (DIS)",
        "description" : "Definition of the medication administration for the medication dispense document",
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
          "reference" : "StructureDefinition/ch-emed-medicationadministration-list"
        },
        "name" : "CH EMED MedicationAdministration (LIST)",
        "description" : "Definition of the medication administration for the medication list document",
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
          "reference" : "StructureDefinition/ch-emed-medicationdispense"
        },
        "name" : "CH EMED MedicationDispense (DIS)",
        "description" : "Definition of the medication dispense for the medication dispense document",
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
          "reference" : "StructureDefinition/ch-emed-medicationdispense-list"
        },
        "name" : "CH EMED MedicationDispense (LIST)",
        "description" : "Definition of the medication dispense for the medication list document",
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
          "reference" : "StructureDefinition/ch-emed-medicationrequest-list"
        },
        "name" : "CH EMED MedicationRequest (LIST)",
        "description" : "Definition of the medication request for the medication list document",
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
          "reference" : "StructureDefinition/ch-emed-medicationrequest"
        },
        "name" : "CH EMED MedicationRequest (PRE)",
        "description" : "Definition of the medication request for the medication prescription document",
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
          "reference" : "StructureDefinition/ch-emed-medicationrequest-changed"
        },
        "name" : "CH EMED MedicationRequest Changed",
        "description" : "Definition of the changed medication request for the pharmaceutical advice document",
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
          "reference" : "StructureDefinition/ch-emed-medicationrequest-changed-list"
        },
        "name" : "CH EMED MedicationRequest Changed (LIST)",
        "description" : "Definition of the changed medication request for the medication list document",
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
          "reference" : "StructureDefinition/ch-emed-medicationstatement"
        },
        "name" : "CH EMED MedicationStatement",
        "description" : "Definition of the medication statement for the medication treatment plan document (and as basis medication statement)",
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
          "reference" : "StructureDefinition/ch-emed-medicationstatement-card"
        },
        "name" : "CH EMED MedicationStatement (CARD)",
        "description" : "Definition of the medication statement for the medication card document",
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
          "reference" : "StructureDefinition/ch-emed-medicationstatement-list"
        },
        "name" : "CH EMED MedicationStatement (LIST)",
        "description" : "Definition of the medication statement for the medication list document",
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
          "reference" : "StructureDefinition/ch-emed-medicationstatement-changed"
        },
        "name" : "CH EMED MedicationStatement Changed",
        "description" : "Definition of the changed medication statement for the pharmaceutical advice document",
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
          "reference" : "StructureDefinition/ch-emed-medicationstatement-changed-list"
        },
        "name" : "CH EMED MedicationStatement Changed (LIST)",
        "description" : "Definition of the changed medication statement for the medication list document",
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
          "reference" : "StructureDefinition/ch-emed-observation-list"
        },
        "name" : "CH EMED Observation (LIST)",
        "description" : "Definition of the observation for the medication list document",
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
          "reference" : "StructureDefinition/ch-emed-observation"
        },
        "name" : "CH EMED Observation (PADV)",
        "description" : "Definition of the observation for the pharmaceutical advice document",
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
          "reference" : "StructureDefinition/ch-emed-organization"
        },
        "name" : "CH EMED Organization",
        "description" : "Definition of the organization for the eMedication context",
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
          "reference" : "StructureDefinition/ch-emed-composition-pharmaceuticaladvice"
        },
        "name" : "CH EMED Pharmaceutical Advice Composition",
        "description" : "Definition of the composition for the pharmaceutical advice document",
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
          "reference" : "StructureDefinition/ch-emed-document-pharmaceuticaladvice"
        },
        "name" : "CH EMED Pharmaceutical Advice Document",
        "description" : "Definition of the bundle for the pharmaceutical advice document",
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
          "reference" : "StructureDefinition/ch-emed-practitioner"
        },
        "name" : "CH EMED Practitioner",
        "description" : "Definition of the practitioner for the eMedication context",
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
          "reference" : "StructureDefinition/ch-emed-practitionerrole"
        },
        "name" : "CH EMED PractitionerRole",
        "description" : "Definition of the practitioner role for the eMedication context",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:complex-type"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-emed-uuid-identifier"
        },
        "name" : "CH EMED UUID Identifier",
        "description" : "An Identifier profile enforcing CH EMED rules for UUID-based identifiers.     \n- `system` SHALL be `urn:ietf:rfc:3986`\n- `value` SHALL be a UUID in URN format (`urn:uuid:[uuid]`)     \n\nSee also [Relationship between Documents](relationship-between-documents.html#identifier-format) for more information.",
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
          "reference" : "Composition/Comp-ChangeDosage"
        },
        "name" : "Composition - Change Dosage",
        "description" : "Example for Composition - First entry (including header information, section(s) and references) in the PADV document with a dosage change.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-composition-pharmaceuticaladvice"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Device"
          }
        ],
        "reference" : {
          "reference" : "Device/ExampleDevice"
        },
        "name" : "Example Device",
        "description" : "Example for Device - A device as (one of the) author(s) of a document.",
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
          "reference" : "Practitioner/FamilienHausarzt"
        },
        "name" : "Familien Hausarzt",
        "description" : "Example for Practitioner - Use case steps 1.x-2.x: General practitioner with a GLN.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-practitioner"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "PractitionerRole"
          }
        ],
        "reference" : {
          "reference" : "PractitionerRole/FamilienHausarztAtHausarzt"
        },
        "name" : "Familien Hausarzt @ Hausarzt",
        "description" : "Example for PractitionerRole - Use case steps 1.x-2.x: Representing the relationship between 'Familien Hausarzt' (practitioner) and 'Hausarzt' (organization).",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-practitionerrole"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/Hausarzt"
        },
        "name" : "Hausarzt",
        "description" : "Example for Organization - Use case steps 1.x-2.x: Organization with a GLN and the address.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-organization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Patient"
          }
        ],
        "reference" : {
          "reference" : "Patient/MaxMoser"
        },
        "name" : "Max Moser",
        "description" : "Example for Patient - Use case steps 3.x: Male patient with a local patient identifier, date of birth and address.",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MedicationAdministration"
          }
        ],
        "reference" : {
          "reference" : "MedicationAdministration/3-2-MedAdminFentanyl"
        },
        "name" : "Medication Administration Fentanyl",
        "description" : "Example for MedicationAdministration (DIS) - Use case step 3-2: The record of the administration (consumation) of Fentanyl.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationadministration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MedicationAdministration"
          }
        ],
        "reference" : {
          "reference" : "MedicationAdministration/3-1-MedAdminNacl"
        },
        "name" : "Medication Administration NaCL",
        "description" : "Example for MedicationAdministration (DIS) - Use case step 3-1: The record of the administration (consumation) of NaCL.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationadministration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MedicationDispense"
          }
        ],
        "reference" : {
          "reference" : "MedicationDispense/MedDispTriatec-WasNotSubstituted"
        },
        "name" : "Medication Dispense was not substituted",
        "description" : "Example for MedicationDispense (DIS) - Triatec with the explicit statement, that is was NOT substituted.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationdispense"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MedicationDispense"
          }
        ],
        "reference" : {
          "reference" : "MedicationDispense/MedDispTriatec-WasSubstituted"
        },
        "name" : "Medication Dispense was substituted",
        "description" : "Example for MedicationDispense (DIS) - Triatec with the statement, that is was substituted.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationdispense"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MedicationRequest"
          }
        ],
        "reference" : {
          "reference" : "MedicationRequest/MedReq-ChangeMedication"
        },
        "name" : "Medication Request - Changed Medication",
        "description" : "Example for MedicationRequest - A new MedicationRequest with the new medication. It is referenced from Observation (PADV 'CHANGE') which includes the note to the change and it references the Observation itself.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationrequest-changed"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MedicationRequest"
          }
        ],
        "reference" : {
          "reference" : "MedicationRequest/MedReq-ComplexDosage"
        },
        "name" : "Medication Request - Complex Dosage",
        "description" : "Example for MedicationRequest - Order for the supply of Wallwurz Gel with a complex dosage (free text), as a reserve medication and without timing information.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationrequest"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MedicationStatement"
          }
        ],
        "reference" : {
          "reference" : "MedicationStatement/AsNeededWithMaxDose"
        },
        "name" : "Medication Statement with a medication in reserve and a maximum dosage",
        "description" : "Example for MedicationStatment - Nitrostat with the dosage instruction: 'Take 1 tablet as needed for chest pain, maximum 3 tablets in 15 minutes'.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationstatement"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MedicationStatement"
          }
        ],
        "reference" : {
          "reference" : "MedicationStatement/MedStatTriatec-ChangeDosage"
        },
        "name" : "Medication Statement with changed dosage",
        "description" : "Example for MedicationStatment - A new MedicationStatement with the a new dosage. It is referenced from the Observation (PADV 'CHANGE') which includes the note to the change and it references the Observation itself.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationstatement-changed"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MedicationStatement"
          }
        ],
        "reference" : {
          "reference" : "MedicationStatement/NotRecommendedTimingCodes"
        },
        "name" : "Medication Statement with NOT recommended timing codes",
        "description" : "Example for MedicationStatment - Norvasc with NOT recommended timing codes.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationstatement-card"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Medication"
          }
        ],
        "reference" : {
          "reference" : "Medication/MedicationWithTwoIngredients"
        },
        "name" : "Medication with 2 ingredients",
        "description" : "Example for Medication - Exforge with the two ingredients Amlodipine and Valsartan.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medication-medicationdispense"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Medication"
          }
        ],
        "reference" : {
          "reference" : "Medication/MedicationWithATC"
        },
        "name" : "Medication with ATC",
        "description" : "Example for Medication - NaraDex as a foreign product (non-Swiss) and therefore using the ATC code.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medication"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Patient"
          }
        ],
        "reference" : {
          "reference" : "Patient/MonikaWegmueller"
        },
        "name" : "Monika Wegmueller",
        "description" : "Example for Patient - Use case steps 1.x-2.x: Female patient with a local patient identifier, date of birth and address.",
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
          "reference" : "Observation/Obs-ChangeDosage"
        },
        "name" : "Observation for Pharmaceutical Advice document",
        "description" : "Example for Observation (PADV) - CHANGE with new MedicationStatement (change in dosage: 1 tablet in the morning instead of 0.5 tablet).",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-observation"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/PharmaceuticalAdvice-ChangeMedicament"
        },
        "name" : "Observation for Pharmaceutical Advice document",
        "description" : "Example for Observation (PADV) - CHANGE with new MedicationRequest (generic medication: Amlodipine instead of Norvasc).",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-observation"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/PharmaceuticalAdvice-ChangeDosage"
        },
        "name" : "Pharmaceutical Advice document to change the dosage",
        "description" : "Example for Bundle - Documentation of a dosage change (1 tablet in the morning instead of 0.5 tablet) for the medication Triatec.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-document-pharmaceuticaladvice"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Practitioner"
          }
        ],
        "reference" : {
          "reference" : "Practitioner/PriskaHuber"
        },
        "name" : "Priska Huber",
        "description" : "Example for Practitioner - Use case steps 3.x: Paramedic with a GLN.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-practitioner"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "PractitionerRole"
          }
        ],
        "reference" : {
          "reference" : "PractitionerRole/PriskaHuberAtRettungsdienst"
        },
        "name" : "Priska Huber @ Rettungsdienst",
        "description" : "Example for PractitionerRole - Use case steps 3.x: Representing the relationship between 'Priska Huber' (practitioner) and 'Rettungsdienst' (organization).",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-practitionerrole"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/Rettungsdienst"
        },
        "name" : "Rettungsdienst",
        "description" : "Example for Organization - Use case steps 3.x: Organization with a GLN and the address.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-organization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Medication"
          }
        ],
        "reference" : {
          "reference" : "Medication/TriatecWithCodeNotFromVS"
        },
        "name" : "Triatec with code not from VS",
        "description" : "Example for Medication - Triatec with an ingredient code (SCT), which is NOT included in the SCT-VS which has an extensible binding.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medication"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Medication"
          }
        ],
        "reference" : {
          "reference" : "Medication/TriatecWithLocalCodes"
        },
        "name" : "Triatec with local codes",
        "description" : "Example for Medication - Triatec with the defined GTIN and a local medication code.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medication-medicationdispense"
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
              "valueUrl" : "medication-treatment-plan-document.html"
            }
          ],
          "nameUrl" : "medication-treatment-plan-document.html",
          "title" : "Medication Treatment Plan document",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "medication-prescription-document.html"
            }
          ],
          "nameUrl" : "medication-prescription-document.html",
          "title" : "Medication Prescription document",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "medication-dispense-document.html"
            }
          ],
          "nameUrl" : "medication-dispense-document.html",
          "title" : "Medication Dispense document",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "pharmaceutical-advice-document.html"
            }
          ],
          "nameUrl" : "pharmaceutical-advice-document.html",
          "title" : "Pharmaceutical Advice document",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "medication-list-document.html"
            }
          ],
          "nameUrl" : "medication-list-document.html",
          "title" : "Medication List document",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "medication-card-document.html"
            }
          ],
          "nameUrl" : "medication-card-document.html",
          "title" : "Medication Card document",
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
          "title" : "Cas d’application",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "dosage.html"
            }
          ],
          "nameUrl" : "dosage.html",
          "title" : "Dosage",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "repeated-dispense.html"
            }
          ],
          "nameUrl" : "repeated-dispense.html",
          "title" : "Repeated Dispense",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "authorship.html"
            }
          ],
          "nameUrl" : "authorship.html",
          "title" : "Authorship",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "relationship-between-documents.html"
            }
          ],
          "nameUrl" : "relationship-between-documents.html",
          "title" : "Relationship Between Documents",
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
              "valueUrl" : "extensions.html"
            }
          ],
          "nameUrl" : "extensions.html",
          "title" : "Extensions",
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
          "title" : "Change Log",
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
