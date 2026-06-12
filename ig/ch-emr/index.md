# Home - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* **Home**

## Home

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emr/ImplementationGuide/ch.fhir.ig.ch-emr | *Version*:1.0.0-ballot |
| Active as of 2026-06-12 | *Computable Name*:CH_EMR |
| **Copyright/Legal**: CC0-1.0 | |

### Introduction

The **emergency record** contains all the important medical information needed in situations in which quick access or a quick overview of medical data is required. For example, in cases of unconsciousness, language barriers or limited health literacy. 
 The emergency record combines key administrative and clinical data such as patient details, emergency contacts, medication, allergies, vaccinations, implants, diagnose, CPR status and references to living wills and other relevant documents.

The CH EMR implementation guide describes the FHIR representation of the electronic emergency record in Switzerland. It is dependent on [CH Core](http://fhir.ch/ig/ch-core/index.html) and [CH Term](http://fhir.ch/ig/ch-term/index.html), which describe the Swiss-specific context, particularly in relation to the Swiss Electronic Patient Record (EPR). 
 This implementation guide is based on the concept for the exchange format of the electronic emergency record ([de](https://www.e-health-suisse.ch/upload/documents/Konzept_eNotfallpass_DE.pdf), [fr](https://www.e-health-suisse.ch/upload/documents/Konzept_Notfallpass_FR.pdf)).

### Dependencies Overview

The CH EMR (Emergency Record) implementation guide builds upon several Swiss FHIR specifications. The following diagram illustrates the relationships between these implementation guides:

**Fig. 1: Schematic representation of the dependency mechanism of the implementation guides**

The **CH EMR** is primarily derived from the [CH IPS (International Patient Summary)](https://fhir.ch/ig/ch-ips/index.html), which provides the foundational clinical profiles for patient summaries in Switzerland. CH IPS itself is based on the international [IPS UV](https://hl7.org/fhir/uv/ips/) specification by HL7, ensuring cross-border interoperability.

Both CH EMR and CH IPS depend on [CH Core](https://fhir.ch/ig/ch-core/index.html), which defines the Swiss-specific base profiles (e.g. patient, practitioner, organization) including Swiss identifiers such as AHV, GLN and EPR-SPID. [CH Term](https://fhir.ch/ig/ch-term/index.html) provides the shared Swiss terminologies, value sets and code systems used across all Swiss FHIR implementation guides.

For the medication content, CH EMR additionally depends on [CH EMED](https://fhir.ch/ig/ch-emed/index.html), the Swiss eMedikation specification. CH EMR's Medication Statement reuses the CH EMED dosage profiles (`ch-emed-dosage` and `ch-emed-dosage-split`) so that dosing schedules in the Emergency Record follow the same structure as the rest of the Swiss eMedikation ecosystem.

Where CH IPS profiles were available and applicable, CH EMR profiles inherit from them (e.g. Patient, Medication, AllergyIntolerance, Condition, Immunization). For emergency-specific content not covered by IPS, such as resuscitation status, emergency contacts, risk factors and disabilities, CH EMR defines its own profiles based on CH Core or FHIR base resources.

This implementation guide is under STU ballot by [HL7 Switzerland](https://www.hl7.ch/de/) from August 4th, 2026 until end of 2026. 
 Please add your feedback via the ‘Propose a change’-link in the footer on the page where you have comments.

[Changelog](changelog.md) with significant changes, open and closed issues.

**Download**: You can download this implementation guide in the [npm package format](https://confluence.hl7.org/display/FHIR/NPM+Package+Specification) from [here](package.tgz).

### Objective

The emergency report is designed to give medical professionals quick and structured access to a patient's most important medical information in emergency situations. However, this medical information can also be used in unforeseen patient contacts where, for example, language barriers exist or health literacy is limited.

### Content scope

#### Core units

* **Patient information**: Demographic data and contact information
* **Emergency contacts**: Family and trusted persons
* **Care Team**: Treating Health care professional
* **Resuscitation status**: Patient's wishes regarding resuscitation measures in emergency situations
* **Current medication**: Information and dosage of medications
* **Vaccinations**: Current vaccinations
* **Allergies and intolerances**: Known allergic reactions and intolerances
* **Risk factors**: Risks relevant to treatment
* **Problem list**: Diagnoses and problems
* **Advance directive**: Information on advance directives or medical directives
* **Other documents**: Other documents like organ donor cards
* **Implants**: Medical devices
* **Pregnancy**: Current pregnancy information
* **Disability**: Information about disabilities

#### Profiles

The Implementation Guide defines the following main profiles:

| | | |
| :--- | :--- | :--- |
| [CH Emergency Record Bundle](StructureDefinition-ch-emr-bundle.md) | Bundle profile for Emergency Record. | [CH IPS Document](http://fhir.ch/ig/ch-ips/StructureDefinition-ch-ips-document.html) |
| [CH Emergency Record Composition](StructureDefinition-ch-emr-composition.md) | Swiss Emergency Record based on International Patient Summary. | [CH IPS Composition](http://fhir.ch/ig/ch-ips/StructureDefinition-ch-ips-composition.html) |
| [CH Emergency Record Device Use Statement](StructureDefinition-ch-emr-deviceusestatement.md) | Use of an implanted device in the Emergency Record. | [IPS DeviceUseStatement](http://hl7.org/fhir/uv/ips/StructureDefinition-DeviceUseStatement-uv-ips.html) |
| [CH Emergency Record Device](StructureDefinition-ch-emr-device.md) | Device profile for implants in the Emergency Record. | [IPS Device](http://hl7.org/fhir/uv/ips/StructureDefinition-Device-uv-ips.html) |
| [CH Emergency Record Body Structure](StructureDefinition-ch-emr-bodystructure.md) | Structured anatomical location of an implant, carrying an unlateralised body site and the laterality qualifier. | [BodyStructure (FHIR R4)](http://hl7.org/fhir/R4/bodystructure.html) |
| [CH Emergency Record RelatedPerson](StructureDefinition-ch-emr-relatedperson.md) | RelatedPerson profile for emergency contacts and family members in the Emergency Record. | [CH Core RelatedPerson](http://fhir.ch/ig/ch-core/StructureDefinition-ch-core-relatedperson.html) |
| [CH Emergency Record Observation Resuscitation Status](StructureDefinition-ch-emr-observation-resuscitation-status.md) | Observation profile for documenting the patient's resuscitation (code) status. | [Observation (FHIR R4)](http://hl7.org/fhir/R4/observation.html) |
| [CH Emergency Record Advance Directive DocumentReference](StructureDefinition-ch-emr-documentreference-advance-directive.md) | Reference to advance directives and emergency medical orders. | [CH Core DocumentReference](http://fhir.ch/ig/ch-core/StructureDefinition-ch-core-documentreference.html) |
| [CH Emergency Record Risk to Healthcare Personnel](StructureDefinition-ch-emr-flag-risk-to-healthcare-personnel.md) | Risk to healthcare personnel emanating from the patient (e.g. communicable disease). | [IPS Flag (alert)](http://hl7.org/fhir/uv/ips/StructureDefinition-Flag-alert-uv-ips.html) |
| [CH Emergency Record DocumentReference](StructureDefinition-ch-emr-documentreference.md) | DocumentReference profile for information on documents in the Emergency Record. | [CH Core DocumentReference](http://fhir.ch/ig/ch-core/StructureDefinition-ch-core-documentreference.html) |
| [CH Emergency Record Observation Cognitive Disability](StructureDefinition-ch-emr-observation-cognitive-disability.md) | Observation profile for cognitive disability in the Emergency Record. | [Observation (FHIR R4)](http://hl7.org/fhir/R4/observation.html) |
| [CH Emergency Record Physical Disability Observation](StructureDefinition-ch-emr-observation-physical-disability.md) | Observation profile for physical disability in the Emergency Record. | [Observation (FHIR R4)](http://hl7.org/fhir/R4/observation.html) |
| [CH Emergency Record MedicationStatement](StructureDefinition-ch-emr-medicationstatement.md) | MedicationStatement profile for medication in the Emergency Record. | [CH IPS MedicationStatement](http://fhir.ch/ig/ch-ips/StructureDefinition-ch-ips-medicationstatement.html) |

### IP Statements

This document is licensed under Creative Commons "No Rights Reserved" ([CC0](https://creativecommons.org/publicdomain/zero/1.0/)).

HL7®, HEALTH LEVEL SEVEN®, FHIR® and the FHIR ![](icon-fhir-16.png)® are trademarks owned by Health Level Seven International, registered with the United States Patent and Trademark Office.

This implementation guide contains and references intellectual property owned by third parties ("Third Party IP"). Acceptance of these License Terms does not grant any rights with respect to Third Party IP. The licensee alone is responsible for identifying and obtaining any necessary licenses or authorizations to utilize Third Party IP in connection with the specification or otherwise.

This publication includes IP covered under the following statements.

* CC0-1.0

* [eCH-011 Types](http://fhir.ch/ig/ch-term/3.4.0/CodeSystem-ech-11.html): [ChEmrDocument](StructureDefinition-ch-emr-bundle.md)
* [CH EMR MRI Safety Status](CodeSystem-ch-emr-mri-safety-status-cs.md): [Bundle/UC1-Bundle-emr-MusterMax](Bundle-UC1-Bundle-emr-MusterMax.md), [Bundle/UC3-Bundle-emr-LaraKeller](Bundle-UC3-Bundle-emr-LaraKeller.md)... Show 4 more, [ChEmrDevice](StructureDefinition-ch-emr-device.md), [ChEmrMriSafetyStatusVS](ValueSet-ch-emr-mri-safety-status-vs.md), [Device/UC1-Device-Pacemaker](Device-UC1-Device-Pacemaker.md) and [Device/UC3-Device-AorticValve](Device-UC3-Device-AorticValve.md)
* [CH VACD Swissmedic Authorized Vaccines](http://fhir.ch/ig/ch-term/3.4.0/CodeSystem-ch-vacd-swissmedic-cs.html): [Bundle/EX-Bundle](Bundle-EX-Bundle.md) and [Immunization/EX-Immunization](Immunization-EX-Immunization.md)
* [EDQM - Standard Terms](http://fhir.ch/ig/ch-term/3.4.0/CodeSystem-edqm-standardterms.html): [Bundle/EX-Bundle](Bundle-EX-Bundle.md), [Bundle/UC1-Bundle-emr-MusterMax](Bundle-UC1-Bundle-emr-MusterMax.md)... Show 30 more, [Bundle/UC2-Bundle-emr-WalterSchmid](Bundle-UC2-Bundle-emr-WalterSchmid.md), [Bundle/UC3-Bundle-emr-LaraKeller](Bundle-UC3-Bundle-emr-LaraKeller.md), [Bundle/UC4-Bundle-emr-BeatFrei](Bundle-UC4-Bundle-emr-BeatFrei.md), [Bundle/UC5-Bundle-emr-AnnaMeier](Bundle-UC5-Bundle-emr-AnnaMeier.md), [Medication/EX-Metformin](Medication-EX-Metformin.md), [Medication/UC1-Medication-BelocZok](Medication-UC1-Medication-BelocZok.md), [Medication/UC1-Medication-Plavix](Medication-UC1-Medication-Plavix.md), [Medication/UC2-Medication-AspirinCardio](Medication-UC2-Medication-AspirinCardio.md), [Medication/UC2-Medication-Atorvastatin](Medication-UC2-Medication-Atorvastatin.md), [Medication/UC2-Medication-Epril](Medication-UC2-Medication-Epril.md), [Medication/UC2-Medication-XigduoXR](Medication-UC2-Medication-XigduoXR.md), [Medication/UC3-Medication-Marcoumar](Medication-UC3-Medication-Marcoumar.md), [Medication/UC4-Medication-Bilol](Medication-UC4-Medication-Bilol.md), [Medication/UC5-Medication-AspirinCardio](Medication-UC5-Medication-AspirinCardio.md), [Medication/UC5-Medication-Atorvastatin](Medication-UC5-Medication-Atorvastatin.md), [Medication/UC5-Medication-Bilol](Medication-UC5-Medication-Bilol.md), [Medication/UC5-Medication-Pemzek](Medication-UC5-Medication-Pemzek.md), [MedicationStatement/EX-MedicationStatement](MedicationStatement-EX-MedicationStatement.md), [MedicationStatement/UC1-MedicationStatement-BelocZok](MedicationStatement-UC1-MedicationStatement-BelocZok.md), [MedicationStatement/UC1-MedicationStatement-Plavix](MedicationStatement-UC1-MedicationStatement-Plavix.md), [MedicationStatement/UC2-MedicationStatement-AspirinCardio](MedicationStatement-UC2-MedicationStatement-AspirinCardio.md), [MedicationStatement/UC2-MedicationStatement-Atorvastatin](MedicationStatement-UC2-MedicationStatement-Atorvastatin.md), [MedicationStatement/UC2-MedicationStatement-Epril](MedicationStatement-UC2-MedicationStatement-Epril.md), [MedicationStatement/UC2-MedicationStatement-XigduoXR](MedicationStatement-UC2-MedicationStatement-XigduoXR.md), [MedicationStatement/UC3-MedicationStatement-Marcoumar](MedicationStatement-UC3-MedicationStatement-Marcoumar.md), [MedicationStatement/UC4-MedicationStatement-Bilol](MedicationStatement-UC4-MedicationStatement-Bilol.md), [MedicationStatement/UC5-MedicationStatement-AspirinCardio](MedicationStatement-UC5-MedicationStatement-AspirinCardio.md), [MedicationStatement/UC5-MedicationStatement-Atorvastatin](MedicationStatement-UC5-MedicationStatement-Atorvastatin.md), [MedicationStatement/UC5-MedicationStatement-Bilol](MedicationStatement-UC5-MedicationStatement-Bilol.md) and [MedicationStatement/UC5-MedicationStatement-Pemzek](MedicationStatement-UC5-MedicationStatement-Pemzek.md)


* ISO maintains the copyright on the country codes, and controls its use carefully. For further details see the ISO 3166 web page: [https://www.iso.org/iso-3166-country-codes.html](https://www.iso.org/iso-3166-country-codes.html)

* [ISO 3166-1 Codes for the representation of names of countries and their subdivisions — Part 1: Country code](http://terminology.hl7.org/6.5.0/CodeSystem-ISO3166Part1.html): [CH_EMR](index.md), [ChEmrAdvanceDirectiveTypeVS](ValueSet-ch-emr-advance-directive-type-vs.md)... Show 24 more, [ChEmrBodyStructure](StructureDefinition-ch-emr-bodystructure.md), [ChEmrBodyStructureReference](StructureDefinition-ch-emr-body-structure-reference.md), [ChEmrClinicalDocumentTypesVS](ValueSet-ch-emr-clinical-document-types-vs.md), [ChEmrCognitiveDisabilityTypesVS](ValueSet-ch-emr-cognitive-disability-types-vs.md), [ChEmrComposition](StructureDefinition-ch-emr-composition.md), [ChEmrDevice](StructureDefinition-ch-emr-device.md), [ChEmrDeviceUseStatement](StructureDefinition-ch-emr-deviceusestatement.md), [ChEmrDocument](StructureDefinition-ch-emr-bundle.md), [ChEmrDocumentReference](StructureDefinition-ch-emr-documentreference.md), [ChEmrDocumentReferenceAdvanceDirective](StructureDefinition-ch-emr-documentreference-advance-directive.md), [ChEmrFlagRiskToHealthcarePersonnel](StructureDefinition-ch-emr-flag-risk-to-healthcare-personnel.md), [ChEmrImplantTypeVS](ValueSet-ch-emr-implant-type-vs.md), [ChEmrMedicationStatement](StructureDefinition-ch-emr-medicationstatement.md), [ChEmrMriSafetyStatusCS](CodeSystem-ch-emr-mri-safety-status-cs.md), [ChEmrMriSafetyStatusVS](ValueSet-ch-emr-mri-safety-status-vs.md), [ChEmrObservationCognitiveDisability](StructureDefinition-ch-emr-observation-cognitive-disability.md), [ChEmrObservationPhysicalDisability](StructureDefinition-ch-emr-observation-physical-disability.md), [ChEmrObservationResuscitationStatus](StructureDefinition-ch-emr-observation-resuscitation-status.md), [ChEmrPhysicalDisabilityTypesVS](ValueSet-ch-emr-physical-disability-types-vs.md), [ChEmrRelatedPerson](StructureDefinition-ch-emr-relatedperson.md), [ChEmrResuscitationStatusVS](ValueSet-ch-emr-resuscitation-status-vs.md), [ChEmrRiskToHealthcarePersonnelVS](ValueSet-ch-emr-risk-to-healthcare-personnel-vs.md), [EuropeanCommissionUDI](NamingSystem-eu-ec-udi.md) and [GS1DeviceIdentifier](NamingSystem-gs1-di.md)


* This material contains content from [LOINC](http://loinc.org). LOINC is copyright © 1995-2020, Regenstrief Institute, Inc. and the Logical Observation Identifiers Names and Codes (LOINC) Committee and is available at no cost under the [license](http://loinc.org/license). LOINC® is a registered United States trademark of Regenstrief Institute, Inc.

* [LOINC](http://terminology.hl7.org/6.5.0/CodeSystem-v3-loinc.html): [Bundle/EX-Bundle](Bundle-EX-Bundle.md), [Bundle/UC1-Bundle-emr-MusterMax](Bundle-UC1-Bundle-emr-MusterMax.md)... Show 18 more, [Bundle/UC2-Bundle-emr-WalterSchmid](Bundle-UC2-Bundle-emr-WalterSchmid.md), [Bundle/UC3-Bundle-emr-LaraKeller](Bundle-UC3-Bundle-emr-LaraKeller.md), [Bundle/UC4-Bundle-emr-BeatFrei](Bundle-UC4-Bundle-emr-BeatFrei.md), [Bundle/UC5-Bundle-emr-AnnaMeier](Bundle-UC5-Bundle-emr-AnnaMeier.md), [ChEmrAdvanceDirectiveTypeVS](ValueSet-ch-emr-advance-directive-type-vs.md), [ChEmrComposition](StructureDefinition-ch-emr-composition.md), [ChEmrDocumentReferenceAdvanceDirective](StructureDefinition-ch-emr-documentreference-advance-directive.md), [Composition/EX-Composition](Composition-EX-Composition.md), [Composition/UC1-Composition-emr-MusterMax](Composition-UC1-Composition-emr-MusterMax.md), [Composition/UC2-Composition-emr-WalterSchmid](Composition-UC2-Composition-emr-WalterSchmid.md), [Composition/UC3-Composition-emr-LaraKeller](Composition-UC3-Composition-emr-LaraKeller.md), [Composition/UC4-Composition-emr-BeatFrei](Composition-UC4-Composition-emr-BeatFrei.md), [Composition/UC5-Composition-emr-AnnaMeier](Composition-UC5-Composition-emr-AnnaMeier.md), [DocumentReference/EX-AdvanceDirective](DocumentReference-EX-AdvanceDirective.md), [DocumentReference/UC1-DocumentReference-Notanordnung](DocumentReference-UC1-DocumentReference-Notanordnung.md), [DocumentReference/UC1-DocumentReference-Patientenverfuegung](DocumentReference-UC1-DocumentReference-Patientenverfuegung.md), [DocumentReference/UC2-DocumentReference-Patientenverfuegung](DocumentReference-UC2-DocumentReference-Patientenverfuegung.md) and [Observation/EX-Pregnancy](Observation-EX-Pregnancy.md)


* This material contains content that is copyright of SNOMED International. Implementers of these specifications must have the appropriate SNOMED CT Affiliate license - for more information contact [https://www.snomed.org/get-snomed](https://www.snomed.org/get-snomed) or [info@snomed.org](mailto:info@snomed.org).

* [SNOMED Clinical Terms&reg; (SNOMED CT&reg;)](http://hl7.org/fhir/R4/codesystem-snomedct.html): [AllergyIntolerance/EX-AllergyIntolerance](AllergyIntolerance-EX-AllergyIntolerance.md), [AllergyIntolerance/UC2-AllergyIntolerance-Penicillin](AllergyIntolerance-UC2-AllergyIntolerance-Penicillin.md)... Show 72 more, [Bundle/EX-Bundle](Bundle-EX-Bundle.md), [Bundle/UC1-Bundle-emr-MusterMax](Bundle-UC1-Bundle-emr-MusterMax.md), [Bundle/UC2-Bundle-emr-WalterSchmid](Bundle-UC2-Bundle-emr-WalterSchmid.md), [Bundle/UC3-Bundle-emr-LaraKeller](Bundle-UC3-Bundle-emr-LaraKeller.md), [Bundle/UC4-Bundle-emr-BeatFrei](Bundle-UC4-Bundle-emr-BeatFrei.md), [Bundle/UC5-Bundle-emr-AnnaMeier](Bundle-UC5-Bundle-emr-AnnaMeier.md), [ChEmrBodyStructure](StructureDefinition-ch-emr-bodystructure.md), [ChEmrClinicalDocumentTypesVS](ValueSet-ch-emr-clinical-document-types-vs.md), [ChEmrCognitiveDisabilityTypesVS](ValueSet-ch-emr-cognitive-disability-types-vs.md), [ChEmrDevice](StructureDefinition-ch-emr-device.md), [ChEmrDeviceUseStatement](StructureDefinition-ch-emr-deviceusestatement.md), [ChEmrDocumentReference](StructureDefinition-ch-emr-documentreference.md), [ChEmrFlagRiskToHealthcarePersonnel](StructureDefinition-ch-emr-flag-risk-to-healthcare-personnel.md), [ChEmrImplantTypeVS](ValueSet-ch-emr-implant-type-vs.md), [ChEmrObservationCognitiveDisability](StructureDefinition-ch-emr-observation-cognitive-disability.md), [ChEmrObservationPhysicalDisability](StructureDefinition-ch-emr-observation-physical-disability.md), [ChEmrObservationResuscitationStatus](StructureDefinition-ch-emr-observation-resuscitation-status.md), [ChEmrPhysicalDisabilityTypesVS](ValueSet-ch-emr-physical-disability-types-vs.md), [ChEmrResuscitationStatusVS](ValueSet-ch-emr-resuscitation-status-vs.md), [ChEmrRiskToHealthcarePersonnelVS](ValueSet-ch-emr-risk-to-healthcare-personnel-vs.md), [Composition/EX-Composition](Composition-EX-Composition.md), [Composition/UC1-Composition-emr-MusterMax](Composition-UC1-Composition-emr-MusterMax.md), [Composition/UC2-Composition-emr-WalterSchmid](Composition-UC2-Composition-emr-WalterSchmid.md), [Composition/UC3-Composition-emr-LaraKeller](Composition-UC3-Composition-emr-LaraKeller.md), [Composition/UC4-Composition-emr-BeatFrei](Composition-UC4-Composition-emr-BeatFrei.md), [Composition/UC5-Composition-emr-AnnaMeier](Composition-UC5-Composition-emr-AnnaMeier.md), [Condition/EX-Condition](Condition-EX-Condition.md), [Condition/UC1-Condition-Hypertonie](Condition-UC1-Condition-Hypertonie.md), [Condition/UC1-Condition-KoronareHerzkrankheit](Condition-UC1-Condition-KoronareHerzkrankheit.md), [Condition/UC2-Condition-Schlaganfall](Condition-UC2-Condition-Schlaganfall.md), [Condition/UC3-Condition-AngeborenerHerzfehler](Condition-UC3-Condition-AngeborenerHerzfehler.md), [Condition/UC3-Condition-Eisenmangelanaemie](Condition-UC3-Condition-Eisenmangelanaemie.md), [Condition/UC4-Condition-Aortenaneurysma](Condition-UC4-Condition-Aortenaneurysma.md), [Condition/UC5-Condition-KoronareHerzkrankheit](Condition-UC5-Condition-KoronareHerzkrankheit.md), [Device/EX-MedicalDevice](Device-EX-MedicalDevice.md), [Device/UC1-Device-Pacemaker](Device-UC1-Device-Pacemaker.md), [Device/UC3-Device-AorticValve](Device-UC3-Device-AorticValve.md), [DeviceUseStatement/EX-DeviceUseStatement](DeviceUseStatement-EX-DeviceUseStatement.md), [DeviceUseStatement/UC1-DeviceUseStatement-Pacemaker](DeviceUseStatement-UC1-DeviceUseStatement-Pacemaker.md), [DeviceUseStatement/UC3-DeviceUseStatement-AorticValve](DeviceUseStatement-UC3-DeviceUseStatement-AorticValve.md), [DocumentReference/EX-AdvanceDirective](DocumentReference-EX-AdvanceDirective.md), [DocumentReference/EX-DocumentReferences](DocumentReference-EX-DocumentReferences.md), [DocumentReference/UC1-DocumentReference-Notanordnung](DocumentReference-UC1-DocumentReference-Notanordnung.md), [DocumentReference/UC1-DocumentReference-Patientenverfuegung](DocumentReference-UC1-DocumentReference-Patientenverfuegung.md), [DocumentReference/UC1-DocumentReference-Schrittmacherausweis](DocumentReference-UC1-DocumentReference-Schrittmacherausweis.md), [DocumentReference/UC2-DocumentReference-Patientenverfuegung](DocumentReference-UC2-DocumentReference-Patientenverfuegung.md), [Flag/EX-RiskFactor](Flag-EX-RiskFactor.md), [Gynäkologie Praxis Basel](Organization-EX-Organization-GynPraxis.md), [Hausarztpraxis UC1](Organization-UC1-Organization-Hausarztpraxis.md), [Hausarztpraxis UC2](Organization-UC2-Organization-Hausarztpraxis.md), [Hausarztpraxis UC3](Organization-UC3-Organization-Hausarztpraxis.md), [Hausarztpraxis UC4](Organization-UC4-Organization-Hausarztpraxis.md), [Hausarztpraxis UC5](Organization-UC5-Organization-Hausarztpraxis.md), [Immunization/EX-Immunization](Immunization-EX-Immunization.md), [Medication/EX-Metformin](Medication-EX-Metformin.md), [MedicationStatement/EX-MedicationStatement](MedicationStatement-EX-MedicationStatement.md), [Observation/EX-CognitiveDisability](Observation-EX-CognitiveDisability.md), [Observation/EX-PhysicalDisability](Observation-EX-PhysicalDisability.md), [Observation/EX-Resuscitation](Observation-EX-Resuscitation.md), [Observation/UC2-PhysicalDisability-Aphasie](Observation-UC2-PhysicalDisability-Aphasie.md), [Practitioner/EX-Practitioner](Practitioner-EX-Practitioner.md), [Practitioner/UC1-Practitioner-Hausarzt](Practitioner-UC1-Practitioner-Hausarzt.md), [Practitioner/UC2-Practitioner-Hausarzt](Practitioner-UC2-Practitioner-Hausarzt.md), [Practitioner/UC3-Practitioner-Hausarzt](Practitioner-UC3-Practitioner-Hausarzt.md), [Practitioner/UC4-Practitioner-Hausarzt](Practitioner-UC4-Practitioner-Hausarzt.md), [Practitioner/UC5-Practitioner-Hausarzt](Practitioner-UC5-Practitioner-Hausarzt.md), [PractitionerRole/EX-PractitionerRole](PractitionerRole-EX-PractitionerRole.md), [PractitionerRole/UC1-PractitionerRole-Hausarzt](PractitionerRole-UC1-PractitionerRole-Hausarzt.md), [PractitionerRole/UC2-PractitionerRole-Hausarzt](PractitionerRole-UC2-PractitionerRole-Hausarzt.md), [PractitionerRole/UC3-PractitionerRole-Hausarzt](PractitionerRole-UC3-PractitionerRole-Hausarzt.md), [PractitionerRole/UC4-PractitionerRole-Hausarzt](PractitionerRole-UC4-PractitionerRole-Hausarzt.md) and [PractitionerRole/UC5-PractitionerRole-Hausarzt](PractitionerRole-UC5-PractitionerRole-Hausarzt.md)


### Cross Version Analysis

This is an R4 IG. None of the features it uses are changed in R4B, so it can be used as is with R4B systems. Packages for both [R4 (ch.fhir.ig.ch-emr.r4)](package.r4.tgz) and [R4B (ch.fhir.ig.ch-emr.r4b)](package.r4b.tgz) are available.

### Dependency Table













### Globals Table

*There are no Global profiles defined*



## Resource Content

```json
{
  "resourceType" : "ImplementationGuide",
  "id" : "ch.fhir.ig.ch-emr",
  "url" : "http://fhir.ch/ig/ch-emr/ImplementationGuide/ch.fhir.ig.ch-emr",
  "version" : "1.0.0-ballot",
  "name" : "CH_EMR",
  "title" : "CH EMR (R4)",
  "status" : "active",
  "date" : "2026-06-12",
  "publisher" : "HL7 Switzerland",
  "contact" : [{
    "name" : "HL7 Switzerland",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.ch/"
    }]
  }],
  "description" : "FHIR Implementation Guide for the Swiss Electronic Emergency Record",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CHE"
    }]
  }],
  "copyright" : "CC0-1.0",
  "packageId" : "ch.fhir.ig.ch-emr",
  "license" : "CC0-1.0",
  "fhirVersion" : ["4.0.1"],
  "dependsOn" : [{
    "id" : "hl7_terminology_r4",
    "uri" : "http://terminology.hl7.org/ImplementationGuide/hl7.terminology",
    "packageId" : "hl7.terminology.r4",
    "version" : "7.1.0"
  },
  {
    "id" : "ch_fhir_ig_ch_core",
    "uri" : "http://fhir.ch/ig/ch-core/ImplementationGuide/ch.fhir.ig.ch-core",
    "packageId" : "ch.fhir.ig.ch-core",
    "version" : "7.0.0-ballot"
  },
  {
    "id" : "ch_fhir_ig_ch_term",
    "uri" : "http://fhir.ch/ig/ch-term/ImplementationGuide/ch.fhir.ig.ch-term",
    "packageId" : "ch.fhir.ig.ch-term",
    "version" : "3.4.x"
  },
  {
    "id" : "ch_fhir_ig_ch_ips",
    "uri" : "http://fhir.ch/ig/ch-ips/ImplementationGuide/ch.fhir.ig.ch-ips",
    "packageId" : "ch.fhir.ig.ch-ips",
    "version" : "2.0.0"
  },
  {
    "id" : "ch_fhir_ig_ch_emed",
    "uri" : "http://fhir.ch/ig/ch-emed/ImplementationGuide/ch.fhir.ig.ch-emed",
    "packageId" : "ch.fhir.ig.ch-emed",
    "version" : "6.0.0"
  },
  {
    "id" : "hl7_fhir_uv_extensions_r4",
    "uri" : "http://hl7.org/fhir/extensions/ImplementationGuide/hl7.fhir.uv.extensions",
    "packageId" : "hl7.fhir.uv.extensions.r4",
    "version" : "5.2.0"
  },
  {
    "id" : "hl7_fhir_uv_ips",
    "uri" : "http://hl7.org/fhir/uv/ips/ImplementationGuide/hl7.fhir.uv.ips",
    "packageId" : "hl7.fhir.uv.ips",
    "version" : "2.0.0"
  }],
  "definition" : {
    "extension" : [{
      "extension" : [{
        "url" : "code",
        "valueString" : "copyrightyear"
      },
      {
        "url" : "value",
        "valueString" : "2026+"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "releaselabel"
      },
      {
        "url" : "value",
        "valueString" : "ballot"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "excludettl"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "allow-extensible-warnings"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "display-warnings"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "path-expansion-params"
      },
      {
        "url" : "value",
        "valueString" : "../../expansion-params.json"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "pin-canonicals"
      },
      {
        "url" : "value",
        "valueString" : "pin-multiples"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "autoload-resources"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "path-liquid"
      },
      {
        "url" : "value",
        "valueString" : "template/liquid"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "path-liquid"
      },
      {
        "url" : "value",
        "valueString" : "input/liquid"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "path-qa"
      },
      {
        "url" : "value",
        "valueString" : "temp/qa"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "path-temp"
      },
      {
        "url" : "value",
        "valueString" : "temp/pages"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "path-output"
      },
      {
        "url" : "value",
        "valueString" : "output"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "path-suppressed-warnings"
      },
      {
        "url" : "value",
        "valueString" : "input/ignoreWarnings.txt"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "path-history"
      },
      {
        "url" : "value",
        "valueString" : "http://fhir.ch/ig/ch-emr/history.html"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "template-html"
      },
      {
        "url" : "value",
        "valueString" : "template-page.html"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "template-md"
      },
      {
        "url" : "value",
        "valueString" : "template-page-md.html"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "apply-contact"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "apply-context"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "apply-copyright"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "apply-jurisdiction"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "apply-license"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "apply-publisher"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "apply-version"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "apply-wg"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "active-tables"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "fmm-definition"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org/fhir/versions.html#maturity"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "propagate-status"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "excludelogbinaryformat"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "tabbed-snapshots"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
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
      "valueCode" : "hl7.fhir.uv.tools.r4#1.1.2"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "copyrightyear"
      },
      {
        "url" : "value",
        "valueString" : "2026+"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "releaselabel"
      },
      {
        "url" : "value",
        "valueString" : "ballot"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "excludettl"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "allow-extensible-warnings"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "display-warnings"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "path-expansion-params"
      },
      {
        "url" : "value",
        "valueString" : "../../expansion-params.json"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "pin-canonicals"
      },
      {
        "url" : "value",
        "valueString" : "pin-multiples"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "autoload-resources"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "path-liquid"
      },
      {
        "url" : "value",
        "valueString" : "template/liquid"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "path-liquid"
      },
      {
        "url" : "value",
        "valueString" : "input/liquid"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "path-qa"
      },
      {
        "url" : "value",
        "valueString" : "temp/qa"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "path-temp"
      },
      {
        "url" : "value",
        "valueString" : "temp/pages"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "path-output"
      },
      {
        "url" : "value",
        "valueString" : "output"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "path-suppressed-warnings"
      },
      {
        "url" : "value",
        "valueString" : "input/ignoreWarnings.txt"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "path-history"
      },
      {
        "url" : "value",
        "valueString" : "http://fhir.ch/ig/ch-emr/history.html"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "template-html"
      },
      {
        "url" : "value",
        "valueString" : "template-page.html"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "template-md"
      },
      {
        "url" : "value",
        "valueString" : "template-page-md.html"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "apply-contact"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "apply-context"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "apply-copyright"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "apply-jurisdiction"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "apply-license"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "apply-publisher"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "apply-version"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "apply-wg"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "active-tables"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "fmm-definition"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org/fhir/versions.html#maturity"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "propagate-status"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "excludelogbinaryformat"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "tabbed-snapshots"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    }],
    "resource" : [{
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      }],
      "reference" : {
        "reference" : "ValueSet/ch-emr-advance-directive-type-vs"
      },
      "name" : "Advance Directive Type",
      "description" : "Types of advance directives and emergency medical orders.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/ch-emr-documentreference-advance-directive"
      },
      "name" : "CH Emergency Record Advance Directive DocumentReference",
      "description" : "Reference to advance directives and emergency medical",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/ch-emr-bodystructure"
      },
      "name" : "CH Emergency Record Body Structure",
      "description" : "Structured anatomical location of an implant in the Emergency Record. Carries an unlateralised body site in `location` and the laterality (or other directional qualifier) in `locationQualifier`.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/ch-emr-bundle"
      },
      "name" : "CH Emergency Record Bundle",
      "description" : "Bundle profile for Emergency Record.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/ch-emr-composition"
      },
      "name" : "CH Emergency Record Composition",
      "description" : "Swiss Emergency Record based on International Patient Summary",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/ch-emr-device"
      },
      "name" : "CH Emergency Record Device",
      "description" : "Device profile for implants in the Emergency Record.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/ch-emr-deviceusestatement"
      },
      "name" : "CH Emergency Record Device Use Statement",
      "description" : "Use of an implanted device in the Emergency Record. The `bodySite` CodeableConcept may carry the ChEmrBodyStructureReference extension to link to a `ChEmrBodyStructure` for structured anatomy + laterality.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/ch-emr-documentreference"
      },
      "name" : "CH Emergency Record DocumentReference",
      "description" : "DocumentReference profile for information on documents in the Emergency Record.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/ch-emr-medicationstatement"
      },
      "name" : "CH Emergency Record Medication Statement",
      "description" : "Medication Statement for the Swiss Emergency Record. Captures a medication the patient is taking with a treatment reason, a dose quantity, and a dosing schedule expressed using the CH EMED dosage pattern.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/ch-emr-observation-cognitive-disability"
      },
      "name" : "CH Emergency Record Observation Disability",
      "description" : "Observation profile for cognitive disability in the Emergency Record.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/ch-emr-observation-resuscitation-status"
      },
      "name" : "CH Emergency Record Observation Resuscitation Status",
      "description" : "Observation profile for documenting the patient's resuscitation (code) status.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/ch-emr-observation-physical-disability"
      },
      "name" : "CH Emergency Record Physical Disability Observation",
      "description" : "Observation profile for physical disability in the Emergency Record.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/ch-emr-relatedperson"
      },
      "name" : "CH Emergency Record RelatedPerson",
      "description" : "RelatedPerson profile for emergency contacts and family members in the Emergency Record.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/ch-emr-flag-risk-to-healthcare-personnel"
      },
      "name" : "CH Emergency Record Risk to Healthcare Personnel",
      "description" : "Risk to healthcare personnel emanating from the patient — typically a communicable / infectious-disease condition or another patient-side circumstance that healthcare personnel need to be aware of for their own safety when treating the patient in an emergency context.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:extension"
      }],
      "reference" : {
        "reference" : "StructureDefinition/ch-emr-body-structure-reference"
      },
      "name" : "CH EMR Body Structure Reference",
      "description" : "Links a CodeableConcept body site to a BodyStructure resource carrying structured anatomy and laterality. Used where the FHIR UV bodySite extension is not allowed by its context list.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      }],
      "reference" : {
        "reference" : "ValueSet/ch-emr-mri-safety-status-vs"
      },
      "name" : "CH EMR MRI Safety Status",
      "description" : "Permitted values for the MRI safety status property of a device, per ASTM F2503: MR Safe, MR Conditional, MR Unsafe.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      }],
      "reference" : {
        "reference" : "CodeSystem/ch-emr-mri-safety-status-cs"
      },
      "name" : "CH EMR MRI Safety Status",
      "description" : "Safety classification of a medical device in the magnetic resonance imaging (MRI) environment. Semantics aligned with ASTM F2503 (Standard Practice for Marking Medical Devices and Other Items for Safety in the Magnetic Resonance Environment). Defined locally because SNOMED CT International does not currently publish dedicated qualifier-value concepts for these classifications.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      }],
      "reference" : {
        "reference" : "ValueSet/ch-emr-clinical-document-types-vs"
      },
      "name" : "Clinical Document Types",
      "description" : "Value Set for clinical document types",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      }],
      "reference" : {
        "reference" : "ValueSet/ch-emr-cognitive-disability-types-vs"
      },
      "name" : "Cognitive disability types",
      "description" : "Value set for the types of cognitive disabilities based on SNOMED CT.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "NamingSystem"
      }],
      "reference" : {
        "reference" : "NamingSystem/eu-ec-udi"
      },
      "name" : "European Commission UDI Jurisdiction",
      "description" : "UDI jurisdiction for the European Commission (republished from the FHIR Device documentation).",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Practitioner"
      }],
      "reference" : {
        "reference" : "Practitioner/EX-Practitioner"
      },
      "name" : "EX - Practitioner Dr. Sarah Huber",
      "description" : "General example of a practitioner",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "DocumentReference"
      }],
      "reference" : {
        "reference" : "DocumentReference/EX-AdvanceDirective"
      },
      "name" : "EX-AdvanceDirective",
      "description" : "General example of a advance directive",
      "exampleCanonical" : "http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-documentreference-advance-directive"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "AllergyIntolerance"
      }],
      "reference" : {
        "reference" : "AllergyIntolerance/EX-AllergyIntolerance"
      },
      "name" : "EX-AllergyIntolerance (Allergy to contrast media)",
      "description" : "General example of an allergy",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Bundle"
      }],
      "reference" : {
        "reference" : "Bundle/EX-Bundle"
      },
      "name" : "EX-Bundle",
      "description" : "Complete Emergency Record Bundle",
      "exampleCanonical" : "http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-bundle"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Observation"
      }],
      "reference" : {
        "reference" : "Observation/EX-CognitiveDisability"
      },
      "name" : "EX-CognitiveDisability",
      "description" : "Example: Dementia",
      "exampleCanonical" : "http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-observation-cognitive-disability"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Composition"
      }],
      "reference" : {
        "reference" : "Composition/EX-Composition"
      },
      "name" : "EX-Composition",
      "description" : "General composition for the Emergency Record",
      "exampleCanonical" : "http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-composition"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Condition"
      }],
      "reference" : {
        "reference" : "Condition/EX-Condition"
      },
      "name" : "EX-Condition (Type 2 diabetes mellitus)",
      "description" : "General example of a condition",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "DeviceUseStatement"
      }],
      "reference" : {
        "reference" : "DeviceUseStatement/EX-DeviceUseStatement"
      },
      "name" : "EX-DeviceUseStatement",
      "description" : "General example for a device",
      "exampleCanonical" : "http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-deviceusestatement"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "DocumentReference"
      }],
      "reference" : {
        "reference" : "DocumentReference/EX-DocumentReferences"
      },
      "name" : "EX-DocumentReferences (organ donation)",
      "description" : "General example of a Document References",
      "exampleCanonical" : "http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-documentreference"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Immunization"
      }],
      "reference" : {
        "reference" : "Immunization/EX-Immunization"
      },
      "name" : "EX-Immunization",
      "description" : "General example of a vaccination",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Device"
      }],
      "reference" : {
        "reference" : "Device/EX-MedicalDevice"
      },
      "name" : "EX-MedicalDevice",
      "description" : "General example of a medical device",
      "exampleCanonical" : "http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-device"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "MedicationStatement"
      }],
      "reference" : {
        "reference" : "MedicationStatement/EX-MedicationStatement"
      },
      "name" : "EX-MedicationStatement (Metformin)",
      "description" : "General example of a medication statement",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Medication"
      }],
      "reference" : {
        "reference" : "Medication/EX-Metformin"
      },
      "name" : "EX-Metformin",
      "description" : "Example of Metformin 500 mg tablet medication",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Organization"
      }],
      "reference" : {
        "reference" : "Organization/EX-Organization-GynPraxis"
      },
      "name" : "EX-Organization-GynPraxis",
      "description" : "Gynecology practice in Basel",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Patient"
      }],
      "reference" : {
        "reference" : "Patient/EX-Patient"
      },
      "name" : "EX-Patient",
      "description" : "General example of a Patient",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Observation"
      }],
      "reference" : {
        "reference" : "Observation/EX-PhysicalDisability"
      },
      "name" : "EX-PhysicalDisability",
      "description" : "General example of a physical disability",
      "exampleCanonical" : "http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-observation-physical-disability"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "PractitionerRole"
      }],
      "reference" : {
        "reference" : "PractitionerRole/EX-PractitionerRole"
      },
      "name" : "EX-PractitionerRole",
      "description" : "General example of a practitioner role",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Observation"
      }],
      "reference" : {
        "reference" : "Observation/EX-Pregnancy"
      },
      "name" : "EX-Pregnancy",
      "description" : "General example of a Pregnancy",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "RelatedPerson"
      }],
      "reference" : {
        "reference" : "RelatedPerson/EX-RelatedPerson"
      },
      "name" : "EX-RelatedPerson",
      "description" : "General example of a related person",
      "exampleCanonical" : "http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-relatedperson"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Observation"
      }],
      "reference" : {
        "reference" : "Observation/EX-Resuscitation"
      },
      "name" : "EX-Resuscitation",
      "description" : "General example of a resuscitation status observation (for CPR)",
      "exampleCanonical" : "http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-observation-resuscitation-status"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Flag"
      }],
      "reference" : {
        "reference" : "Flag/EX-RiskFactor"
      },
      "name" : "EX-RiskFactor",
      "description" : "Risk to healthcare personnel emanating from the patient — viral hepatitis type B.",
      "exampleCanonical" : "http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-flag-risk-to-healthcare-personnel"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "NamingSystem"
      }],
      "reference" : {
        "reference" : "NamingSystem/gs1-di"
      },
      "name" : "GS1 Device Identifiers",
      "description" : "GS1 device identifier namespace recognised as a UDI issuer (republished from the FHIR Device documentation).",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      }],
      "reference" : {
        "reference" : "ValueSet/ch-emr-implant-type-vs"
      },
      "name" : "Implant Type",
      "description" : "Codes for implant types",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      }],
      "reference" : {
        "reference" : "ValueSet/ch-emr-physical-disability-types-vs"
      },
      "name" : "Physical disability types",
      "description" : "Value sets for the types of disabilities",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      }],
      "reference" : {
        "reference" : "ValueSet/ch-emr-resuscitation-status-vs"
      },
      "name" : "Resuscitation status",
      "description" : "Coded resuscitation status values based on SNOMED CT, including all descendants of 304251008 (Resuscitation status).",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      }],
      "reference" : {
        "reference" : "ValueSet/ch-emr-risk-to-healthcare-personnel-vs"
      },
      "name" : "Risk to Healthcare Personnel",
      "description" : "SNOMED CT concepts that may indicate a risk to healthcare personnel emanating from the patient.\nIncludes selected children of the Infectious disease hierarchy whose descendants are person-to-person transmissible — viral, bacterial, sexually transmitted, respiratory, healthcare-associated and parasitic disease — plus an aggressive behavior finding.\nBranches that do not pose a meaningful staff-transmission risk (anatomical-location infections, post-procedural / device-associated infections, sepsis variants, congenital and perinatal infections, plant / Microspora / Oomycota / fish infections, and the like) are excluded.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Bundle"
      }],
      "reference" : {
        "reference" : "Bundle/UC1-Bundle-emr-MusterMax"
      },
      "name" : "UC1-Bundle-emr-MusterMax",
      "description" : "Vollständiger eNotfallpass für Muster Max (Anwendungsfall 1).",
      "exampleCanonical" : "http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-bundle"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Composition"
      }],
      "reference" : {
        "reference" : "Composition/UC1-Composition-emr-MusterMax"
      },
      "name" : "UC1-Composition-emr-MusterMax",
      "description" : "Elektronischer Notfallpass für Muster Max — Anwendungsfall 1.",
      "exampleCanonical" : "http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-composition"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Condition"
      }],
      "reference" : {
        "reference" : "Condition/UC1-Condition-Hypertonie"
      },
      "name" : "UC1-Condition-Hypertonie",
      "description" : "Diagnose arterielle Hypertonie (Muster Max, 2016).",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Condition"
      }],
      "reference" : {
        "reference" : "Condition/UC1-Condition-KoronareHerzkrankheit"
      },
      "name" : "UC1-Condition-KoronareHerzkrankheit",
      "description" : "Diagnose koronare Herzkrankheit (Muster Max, 2015).",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Device"
      }],
      "reference" : {
        "reference" : "Device/UC1-Device-Pacemaker"
      },
      "name" : "UC1-Device-Pacemaker",
      "description" : "Herzschrittmacher implantiert bei Muster Max (2015).",
      "exampleCanonical" : "http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-device"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "DeviceUseStatement"
      }],
      "reference" : {
        "reference" : "DeviceUseStatement/UC1-DeviceUseStatement-Pacemaker"
      },
      "name" : "UC1-DeviceUseStatement-Pacemaker",
      "description" : "Muster Max trägt einen Herzschrittmacher (implantiert 2015).",
      "exampleCanonical" : "http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-deviceusestatement"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "DocumentReference"
      }],
      "reference" : {
        "reference" : "DocumentReference/UC1-DocumentReference-Notanordnung"
      },
      "name" : "UC1-DocumentReference-Notanordnung",
      "description" : "Ärztliche Notanordnung von Muster Max (2024, im EPD hinterlegt).",
      "exampleCanonical" : "http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-documentreference-advance-directive"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "DocumentReference"
      }],
      "reference" : {
        "reference" : "DocumentReference/UC1-DocumentReference-Patientenverfuegung"
      },
      "name" : "UC1-DocumentReference-Patientenverfuegung",
      "description" : "Patientenverfügung von Muster Max (2022, beim Hausarzt hinterlegt).",
      "exampleCanonical" : "http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-documentreference-advance-directive"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "DocumentReference"
      }],
      "reference" : {
        "reference" : "DocumentReference/UC1-DocumentReference-Schrittmacherausweis"
      },
      "name" : "UC1-DocumentReference-Schrittmacherausweis",
      "description" : "Schrittmacherausweis (2015, im EPD hinterlegt).",
      "exampleCanonical" : "http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-documentreference"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Medication"
      }],
      "reference" : {
        "reference" : "Medication/UC1-Medication-BelocZok"
      },
      "name" : "UC1-Medication-BelocZok",
      "description" : "BELOC ZOK Retardtabletten 50 mg (Metoprolol), Packung à 100 Stk (Swissmedic 52110).",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Medication"
      }],
      "reference" : {
        "reference" : "Medication/UC1-Medication-Plavix"
      },
      "name" : "UC1-Medication-Plavix",
      "description" : "PLAVIX Filmtabletten 75 mg (Clopidogrel), Packung à 28 Stk (Swissmedic 54509).",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "MedicationStatement"
      }],
      "reference" : {
        "reference" : "MedicationStatement/UC1-MedicationStatement-BelocZok"
      },
      "name" : "UC1-MedicationStatement-BelocZok",
      "description" : "Beloc Zok 50 mg (Metoprolol) für Bluthochdruck — Dosierung 1-0-0.5-0.",
      "exampleCanonical" : "http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-medicationstatement"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "MedicationStatement"
      }],
      "reference" : {
        "reference" : "MedicationStatement/UC1-MedicationStatement-Plavix"
      },
      "name" : "UC1-MedicationStatement-Plavix",
      "description" : "Plavix 75 mg (Clopidogrel) zur Prophylaxe nach Schlaganfall — Dosierung 1-0-0-0.",
      "exampleCanonical" : "http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-medicationstatement"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Organization"
      }],
      "reference" : {
        "reference" : "Organization/UC1-Organization-Hausarztpraxis"
      },
      "name" : "UC1-Organization-Hausarztpraxis",
      "description" : "Generic Hausarztpraxis for UC1 (Care-Team filler).",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Patient"
      }],
      "reference" : {
        "reference" : "Patient/UC1-Patient-MusterMax"
      },
      "name" : "UC1-Patient-MusterMax",
      "description" : "Patient Muster Max — Anwendungsfall 1: Bewusstlose Person im Spitalnotfall.",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Practitioner"
      }],
      "reference" : {
        "reference" : "Practitioner/UC1-Practitioner-Hausarzt"
      },
      "name" : "UC1-Practitioner-Hausarzt",
      "description" : "Generic Hausarzt for UC1 (Care-Team filler).",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "PractitionerRole"
      }],
      "reference" : {
        "reference" : "PractitionerRole/UC1-PractitionerRole-Hausarzt"
      },
      "name" : "UC1-PractitionerRole-Hausarzt",
      "description" : "PractitionerRole linking UC1 Hausarzt to UC1 Hausarztpraxis.",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "RelatedPerson"
      }],
      "reference" : {
        "reference" : "RelatedPerson/UC1-RelatedPerson-VreniMuster"
      },
      "name" : "UC1-RelatedPerson-VreniMuster",
      "description" : "Notfallkontakt: Vreni Muster (Ehefrau von Max Muster).",
      "exampleCanonical" : "http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-relatedperson"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "AllergyIntolerance"
      }],
      "reference" : {
        "reference" : "AllergyIntolerance/UC2-AllergyIntolerance-Penicillin"
      },
      "name" : "UC2-AllergyIntolerance-Penicillin",
      "description" : "Penicillin-Allergie mit Reaktion Atemnot (Walter Schmid).",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Bundle"
      }],
      "reference" : {
        "reference" : "Bundle/UC2-Bundle-emr-WalterSchmid"
      },
      "name" : "UC2-Bundle-emr-WalterSchmid",
      "description" : "Vollständiger eNotfallpass für Walter Schmid (Anwendungsfall 2).",
      "exampleCanonical" : "http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-bundle"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Composition"
      }],
      "reference" : {
        "reference" : "Composition/UC2-Composition-emr-WalterSchmid"
      },
      "name" : "UC2-Composition-emr-WalterSchmid",
      "description" : "Elektronischer Notfallpass für Walter Schmid — Anwendungsfall 2.",
      "exampleCanonical" : "http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-composition"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Condition"
      }],
      "reference" : {
        "reference" : "Condition/UC2-Condition-Schlaganfall"
      },
      "name" : "UC2-Condition-Schlaganfall",
      "description" : "Diagnose Schlaganfall (Walter Schmid, 2023).",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Condition"
      }],
      "reference" : {
        "reference" : "Condition/UC2-Condition-Splenektomie"
      },
      "name" : "UC2-Condition-Splenektomie",
      "description" : "Status nach Splenektomie (Walter Schmid, 1969 nach Motorradunfall).",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "DocumentReference"
      }],
      "reference" : {
        "reference" : "DocumentReference/UC2-DocumentReference-Patientenverfuegung"
      },
      "name" : "UC2-DocumentReference-Patientenverfuegung",
      "description" : "Patientenverfügung von Walter Schmid (2022, beim Hausarzt hinterlegt).",
      "exampleCanonical" : "http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-documentreference-advance-directive"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Medication"
      }],
      "reference" : {
        "reference" : "Medication/UC2-Medication-AspirinCardio"
      },
      "name" : "UC2-Medication-AspirinCardio",
      "description" : "ASPIRIN CARDIO Filmtabletten 100 mg (Acetylsalicylsäure), Packung à 28 Stk (Swissmedic 51795).",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Medication"
      }],
      "reference" : {
        "reference" : "Medication/UC2-Medication-Atorvastatin"
      },
      "name" : "UC2-Medication-Atorvastatin",
      "description" : "SORTIS Filmtabletten 40 mg (Atorvastatin), Packung à 30 Stk (Swissmedic 54085).",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Medication"
      }],
      "reference" : {
        "reference" : "Medication/UC2-Medication-Epril"
      },
      "name" : "UC2-Medication-Epril",
      "description" : "EPRIL Tabletten 20 mg (Enalapril), Packung à 30 Stk (Swissmedic 55229).",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Medication"
      }],
      "reference" : {
        "reference" : "Medication/UC2-Medication-XigduoXR"
      },
      "name" : "UC2-Medication-XigduoXR",
      "description" : "XIGDUO XR Filmtabletten 5 mg Dapagliflozin / 1000 mg Metformin (Fixkombination), Packung à 28 Stk (Swissmedic 65377).",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "MedicationStatement"
      }],
      "reference" : {
        "reference" : "MedicationStatement/UC2-MedicationStatement-AspirinCardio"
      },
      "name" : "UC2-MedicationStatement-AspirinCardio",
      "description" : "Aspirin cardio 100 mg, 1-0-0-0 — Status nach Schlaganfall.",
      "exampleCanonical" : "http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-medicationstatement"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "MedicationStatement"
      }],
      "reference" : {
        "reference" : "MedicationStatement/UC2-MedicationStatement-Atorvastatin"
      },
      "name" : "UC2-MedicationStatement-Atorvastatin",
      "description" : "Atorvastatin 40 mg, 0-0-1-0 — Status nach Schlaganfall (vaskulär bedingt).",
      "exampleCanonical" : "http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-medicationstatement"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "MedicationStatement"
      }],
      "reference" : {
        "reference" : "MedicationStatement/UC2-MedicationStatement-Epril"
      },
      "name" : "UC2-MedicationStatement-Epril",
      "description" : "Epril 20 mg (Enalapril), 1-0-0-0 — Bluthochdruck.",
      "exampleCanonical" : "http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-medicationstatement"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "MedicationStatement"
      }],
      "reference" : {
        "reference" : "MedicationStatement/UC2-MedicationStatement-XigduoXR"
      },
      "name" : "UC2-MedicationStatement-XigduoXR",
      "description" : "Xigduo XR 1000/5 mg, 0-0-2-0 — Diabetes.",
      "exampleCanonical" : "http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-medicationstatement"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Organization"
      }],
      "reference" : {
        "reference" : "Organization/UC2-Organization-Hausarztpraxis"
      },
      "name" : "UC2-Organization-Hausarztpraxis",
      "description" : "Generic Hausarztpraxis for UC2 (Care-Team filler).",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Patient"
      }],
      "reference" : {
        "reference" : "Patient/UC2-Patient-WalterSchmid"
      },
      "name" : "UC2-Patient-WalterSchmid",
      "description" : "Patient (78 J., alleinlebend, Spitex 2x/Tag) — Anwendungsfall 2: Allgemeiner Notfalldienst am Wochenende.",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Observation"
      }],
      "reference" : {
        "reference" : "Observation/UC2-PhysicalDisability-Aphasie"
      },
      "name" : "UC2-PhysicalDisability-Aphasie",
      "description" : "Aphasie als Kommunikationsbeeinträchtigung nach Schlaganfall.",
      "exampleCanonical" : "http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-observation-physical-disability"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Practitioner"
      }],
      "reference" : {
        "reference" : "Practitioner/UC2-Practitioner-Hausarzt"
      },
      "name" : "UC2-Practitioner-Hausarzt",
      "description" : "Generic Hausarzt for UC2 (Care-Team filler).",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "PractitionerRole"
      }],
      "reference" : {
        "reference" : "PractitionerRole/UC2-PractitionerRole-Hausarzt"
      },
      "name" : "UC2-PractitionerRole-Hausarzt",
      "description" : "PractitionerRole linking UC2 Hausarzt to UC2 Hausarztpraxis.",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "RelatedPerson"
      }],
      "reference" : {
        "reference" : "RelatedPerson/UC2-RelatedPerson-Spitex"
      },
      "name" : "UC2-RelatedPerson-Spitex",
      "description" : "Spitex (Hausbesuch 2x täglich) als Notfallkontakt für UC2.",
      "exampleCanonical" : "http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-relatedperson"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Bundle"
      }],
      "reference" : {
        "reference" : "Bundle/UC3-Bundle-emr-LaraKeller"
      },
      "name" : "UC3-Bundle-emr-LaraKeller",
      "description" : "Vollständiger eNotfallpass für Lara Keller (Anwendungsfall 3).",
      "exampleCanonical" : "http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-bundle"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Composition"
      }],
      "reference" : {
        "reference" : "Composition/UC3-Composition-emr-LaraKeller"
      },
      "name" : "UC3-Composition-emr-LaraKeller",
      "description" : "Elektronischer Notfallpass für Lara Keller — Anwendungsfall 3.",
      "exampleCanonical" : "http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-composition"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Condition"
      }],
      "reference" : {
        "reference" : "Condition/UC3-Condition-AngeborenerHerzfehler"
      },
      "name" : "UC3-Condition-AngeborenerHerzfehler",
      "description" : "Angeborener Herzfehler (Lara Keller, 2008).",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Condition"
      }],
      "reference" : {
        "reference" : "Condition/UC3-Condition-Eisenmangelanaemie"
      },
      "name" : "UC3-Condition-Eisenmangelanaemie",
      "description" : "Eisenmangelanämie (Lara Keller, 2024).",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Device"
      }],
      "reference" : {
        "reference" : "Device/UC3-Device-AorticValve"
      },
      "name" : "UC3-Device-AorticValve",
      "description" : "Mechanische Aortenklappenprothese (implantiert 2010).",
      "exampleCanonical" : "http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-device"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "DeviceUseStatement"
      }],
      "reference" : {
        "reference" : "DeviceUseStatement/UC3-DeviceUseStatement-AorticValve"
      },
      "name" : "UC3-DeviceUseStatement-AorticValve",
      "description" : "Lara Keller trägt eine mechanische Aortenklappenprothese (implantiert 2010).",
      "exampleCanonical" : "http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-deviceusestatement"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Medication"
      }],
      "reference" : {
        "reference" : "Medication/UC3-Medication-Marcoumar"
      },
      "name" : "UC3-Medication-Marcoumar",
      "description" : "MARCOUMAR Tabletten 3 mg (Phenprocoumon), Plastflasche à 25 Stk (Swissmedic 19395).",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "MedicationStatement"
      }],
      "reference" : {
        "reference" : "MedicationStatement/UC3-MedicationStatement-Marcoumar"
      },
      "name" : "UC3-MedicationStatement-Marcoumar",
      "description" : "Marcoumar 3 mg (Phenprocoumon) — Thromboembolieprophylaxe nach mechanischem Klappenersatz. Dosierung nach separater Verordnung (INR-gesteuert).",
      "exampleCanonical" : "http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-medicationstatement"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Organization"
      }],
      "reference" : {
        "reference" : "Organization/UC3-Organization-Hausarztpraxis"
      },
      "name" : "UC3-Organization-Hausarztpraxis",
      "description" : "Generic Hausarztpraxis for UC3 (Care-Team filler).",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Patient"
      }],
      "reference" : {
        "reference" : "Patient/UC3-Patient-LaraKeller"
      },
      "name" : "UC3-Patient-LaraKeller",
      "description" : "Patientin (32 J.) bei der Dermatologin — Anwendungsfall 3: Patientin in Arztpraxis.",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Practitioner"
      }],
      "reference" : {
        "reference" : "Practitioner/UC3-Practitioner-Hausarzt"
      },
      "name" : "UC3-Practitioner-Hausarzt",
      "description" : "Generic Hausarzt for UC3 (Care-Team filler).",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "PractitionerRole"
      }],
      "reference" : {
        "reference" : "PractitionerRole/UC3-PractitionerRole-Hausarzt"
      },
      "name" : "UC3-PractitionerRole-Hausarzt",
      "description" : "PractitionerRole linking UC3 Hausarzt to UC3 Hausarztpraxis.",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "RelatedPerson"
      }],
      "reference" : {
        "reference" : "RelatedPerson/UC3-RelatedPerson-Mutter"
      },
      "name" : "UC3-RelatedPerson-Mutter",
      "description" : "Mutter als Notfallkontakt von Lara Keller (Care-Team filler).",
      "exampleCanonical" : "http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-relatedperson"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Bundle"
      }],
      "reference" : {
        "reference" : "Bundle/UC4-Bundle-emr-BeatFrei"
      },
      "name" : "UC4-Bundle-emr-BeatFrei",
      "description" : "Vollständiger eNotfallpass für Beat Frei (Anwendungsfall 4).",
      "exampleCanonical" : "http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-bundle"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Composition"
      }],
      "reference" : {
        "reference" : "Composition/UC4-Composition-emr-BeatFrei"
      },
      "name" : "UC4-Composition-emr-BeatFrei",
      "description" : "Elektronischer Notfallpass für Beat Frei — Anwendungsfall 4.",
      "exampleCanonical" : "http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-composition"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Condition"
      }],
      "reference" : {
        "reference" : "Condition/UC4-Condition-Aortenaneurysma"
      },
      "name" : "UC4-Condition-Aortenaneurysma",
      "description" : "Aortenaneurysma (Beat Frei, 2024).",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Medication"
      }],
      "reference" : {
        "reference" : "Medication/UC4-Medication-Bilol"
      },
      "name" : "UC4-Medication-Bilol",
      "description" : "BILOL Filmtabletten 5 mg (Bisoprolol), Packung à 30 Stk (Swissmedic 54030).",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "MedicationStatement"
      }],
      "reference" : {
        "reference" : "MedicationStatement/UC4-MedicationStatement-Bilol"
      },
      "name" : "UC4-MedicationStatement-Bilol",
      "description" : "Bilol 5 mg (Bisoprolol) — Blutdrucksenkung bei Aortenaneurysma. Dosierung 1-0-0-0.",
      "exampleCanonical" : "http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-medicationstatement"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Organization"
      }],
      "reference" : {
        "reference" : "Organization/UC4-Organization-Hausarztpraxis"
      },
      "name" : "UC4-Organization-Hausarztpraxis",
      "description" : "Generic Hausarztpraxis for UC4 (Care-Team filler).",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Patient"
      }],
      "reference" : {
        "reference" : "Patient/UC4-Patient-BeatFrei"
      },
      "name" : "UC4-Patient-BeatFrei",
      "description" : "Patient in Physiotherapie wegen rezidivierender Lumbalgien — Anwendungsfall 4: Patient in Physiotherapie.",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Practitioner"
      }],
      "reference" : {
        "reference" : "Practitioner/UC4-Practitioner-Hausarzt"
      },
      "name" : "UC4-Practitioner-Hausarzt",
      "description" : "Generic Hausarzt for UC4 (Care-Team filler).",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "PractitionerRole"
      }],
      "reference" : {
        "reference" : "PractitionerRole/UC4-PractitionerRole-Hausarzt"
      },
      "name" : "UC4-PractitionerRole-Hausarzt",
      "description" : "PractitionerRole linking UC4 Hausarzt to UC4 Hausarztpraxis.",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "RelatedPerson"
      }],
      "reference" : {
        "reference" : "RelatedPerson/UC4-RelatedPerson-Ehefrau"
      },
      "name" : "UC4-RelatedPerson-Ehefrau",
      "description" : "Ehefrau als Notfallkontakt von Beat Frei (Care-Team filler).",
      "exampleCanonical" : "http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-relatedperson"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Bundle"
      }],
      "reference" : {
        "reference" : "Bundle/UC5-Bundle-emr-AnnaMeier"
      },
      "name" : "UC5-Bundle-emr-AnnaMeier",
      "description" : "Vollständiger eNotfallpass für Anna Meier (Anwendungsfall 5).",
      "exampleCanonical" : "http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-bundle"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Composition"
      }],
      "reference" : {
        "reference" : "Composition/UC5-Composition-emr-AnnaMeier"
      },
      "name" : "UC5-Composition-emr-AnnaMeier",
      "description" : "Elektronischer Notfallpass für Anna Meier — Anwendungsfall 5.",
      "exampleCanonical" : "http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-composition"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Condition"
      }],
      "reference" : {
        "reference" : "Condition/UC5-Condition-KoronareHerzkrankheit"
      },
      "name" : "UC5-Condition-KoronareHerzkrankheit",
      "description" : "Chronische koronare Herzkrankheit (Anna Meier, 2018).",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Medication"
      }],
      "reference" : {
        "reference" : "Medication/UC5-Medication-AspirinCardio"
      },
      "name" : "UC5-Medication-AspirinCardio",
      "description" : "ASPIRIN CARDIO Filmtabletten 100 mg (Acetylsalicylsäure), Packung à 28 Stk (Swissmedic 51795).",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Medication"
      }],
      "reference" : {
        "reference" : "Medication/UC5-Medication-Atorvastatin"
      },
      "name" : "UC5-Medication-Atorvastatin",
      "description" : "SORTIS Filmtabletten 40 mg (Atorvastatin), Packung à 30 Stk (Swissmedic 54085).",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Medication"
      }],
      "reference" : {
        "reference" : "Medication/UC5-Medication-Bilol"
      },
      "name" : "UC5-Medication-Bilol",
      "description" : "BILOL Filmtabletten 5 mg (Bisoprolol), Packung à 30 Stk (Swissmedic 54030).",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Medication"
      }],
      "reference" : {
        "reference" : "Medication/UC5-Medication-Pemzek"
      },
      "name" : "UC5-Medication-Pemzek",
      "description" : "PEMZEK Tabletten 16 mg (Candesartan), Packung à 28 Stk (Swissmedic 62498).",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "MedicationStatement"
      }],
      "reference" : {
        "reference" : "MedicationStatement/UC5-MedicationStatement-AspirinCardio"
      },
      "name" : "UC5-MedicationStatement-AspirinCardio",
      "description" : "Aspirin cardio 100 mg, 1-0-0-0 — Koronare Herzkrankheit.",
      "exampleCanonical" : "http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-medicationstatement"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "MedicationStatement"
      }],
      "reference" : {
        "reference" : "MedicationStatement/UC5-MedicationStatement-Atorvastatin"
      },
      "name" : "UC5-MedicationStatement-Atorvastatin",
      "description" : "Atorvastatin 40 mg, 1-0-0-0 — Koronare Herzkrankheit.",
      "exampleCanonical" : "http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-medicationstatement"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "MedicationStatement"
      }],
      "reference" : {
        "reference" : "MedicationStatement/UC5-MedicationStatement-Bilol"
      },
      "name" : "UC5-MedicationStatement-Bilol",
      "description" : "Bilol 5 mg (Bisoprolol), 1-0-0-0 — Koronare Herzkrankheit.",
      "exampleCanonical" : "http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-medicationstatement"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "MedicationStatement"
      }],
      "reference" : {
        "reference" : "MedicationStatement/UC5-MedicationStatement-Pemzek"
      },
      "name" : "UC5-MedicationStatement-Pemzek",
      "description" : "Pemzek 16 mg (Candesartan), 1-0-0-0 — Koronare Herzkrankheit.",
      "exampleCanonical" : "http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-medicationstatement"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Organization"
      }],
      "reference" : {
        "reference" : "Organization/UC5-Organization-Hausarztpraxis"
      },
      "name" : "UC5-Organization-Hausarztpraxis",
      "description" : "Generic Hausarztpraxis for UC5 (Care-Team filler).",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Patient"
      }],
      "reference" : {
        "reference" : "Patient/UC5-Patient-AnnaMeier"
      },
      "name" : "UC5-Patient-AnnaMeier",
      "description" : "Patientin Anna Meier — Anwendungsfall 5: Präklinik (Rettungsdienst) vor Ankunft im Spital.",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Practitioner"
      }],
      "reference" : {
        "reference" : "Practitioner/UC5-Practitioner-Hausarzt"
      },
      "name" : "UC5-Practitioner-Hausarzt",
      "description" : "Generic Hausarzt for UC5 (Care-Team filler).",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "PractitionerRole"
      }],
      "reference" : {
        "reference" : "PractitionerRole/UC5-PractitionerRole-Hausarzt"
      },
      "name" : "UC5-PractitionerRole-Hausarzt",
      "description" : "PractitionerRole linking UC5 Hausarzt to UC5 Hausarztpraxis.",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "RelatedPerson"
      }],
      "reference" : {
        "reference" : "RelatedPerson/UC5-RelatedPerson-Ehemann"
      },
      "name" : "UC5-RelatedPerson-Ehemann",
      "description" : "Ehemann als Notfallkontakt von Anna Meier (Care-Team filler).",
      "exampleCanonical" : "http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-relatedperson"
    }],
    "page" : {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
        "valueUrl" : "toc.html"
      }],
      "nameUrl" : "toc.html",
      "title" : "Table of Contents",
      "generation" : "html",
      "page" : [{
        "extension" : [{
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
          "valueUrl" : "index.html"
        }],
        "nameUrl" : "index.html",
        "title" : "Home",
        "generation" : "markdown"
      },
      {
        "extension" : [{
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
          "valueUrl" : "document.html"
        }],
        "nameUrl" : "document.html",
        "title" : "Document",
        "generation" : "markdown"
      },
      {
        "extension" : [{
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
          "valueUrl" : "usecase-german.html"
        }],
        "nameUrl" : "usecase-german.html",
        "title" : "Anwendungsfälle",
        "generation" : "markdown"
      },
      {
        "extension" : [{
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
          "valueUrl" : "usecase-french.html"
        }],
        "nameUrl" : "usecase-french.html",
        "title" : "Cas d'application",
        "generation" : "markdown"
      },
      {
        "extension" : [{
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
          "valueUrl" : "profiles.html"
        }],
        "nameUrl" : "profiles.html",
        "title" : "Profiles",
        "generation" : "markdown"
      },
      {
        "extension" : [{
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
          "valueUrl" : "extensions.html"
        }],
        "nameUrl" : "extensions.html",
        "title" : "Extensions",
        "generation" : "markdown"
      },
      {
        "extension" : [{
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
          "valueUrl" : "terminology.html"
        }],
        "nameUrl" : "terminology.html",
        "title" : "Terminology",
        "generation" : "markdown"
      },
      {
        "extension" : [{
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
          "valueUrl" : "security.html"
        }],
        "nameUrl" : "security.html",
        "title" : "Security and Privacy",
        "generation" : "markdown"
      },
      {
        "extension" : [{
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
          "valueUrl" : "changelog.html"
        }],
        "nameUrl" : "changelog.html",
        "title" : "Changelog",
        "generation" : "markdown"
      }]
    },
    "parameter" : [{
      "code" : "path-resource",
      "value" : "input/resources"
    },
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
      "value" : "input/vocabulary"
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
    }]
  }
}

```
