# Artifacts Summary - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* **Artifacts Summary**

## Artifacts Summary

This page provides a list of the FHIR artifacts defined as part of this implementation guide.

### Structures: Resource Profiles 

These define constraints on FHIR resources for systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [CH Emergency Record Advance Directive DocumentReference](StructureDefinition-ch-emr-documentreference-advance-directive.md) | Reference to advance directives and emergency medical |
| [CH Emergency Record Body Structure](StructureDefinition-ch-emr-bodystructure.md) | Structured anatomical location of an implant in the Emergency Record. Carries an unlateralised body site in `location` and the laterality (or other directional qualifier) in `locationQualifier`. |
| [CH Emergency Record Bundle](StructureDefinition-ch-emr-bundle.md) | Bundle profile for Emergency Record. |
| [CH Emergency Record Composition](StructureDefinition-ch-emr-composition.md) | Swiss Emergency Record based on International Patient Summary |
| [CH Emergency Record Device](StructureDefinition-ch-emr-device.md) | Device profile for implants in the Emergency Record. |
| [CH Emergency Record Device Use Statement](StructureDefinition-ch-emr-deviceusestatement.md) | Use of an implanted device in the Emergency Record. The `bodySite` CodeableConcept may carry the ChEmrBodyStructureReference extension to link to a `ChEmrBodyStructure` for structured anatomy + laterality. |
| [CH Emergency Record DocumentReference](StructureDefinition-ch-emr-documentreference.md) | DocumentReference profile for information on documents in the Emergency Record. |
| [CH Emergency Record Medication Statement](StructureDefinition-ch-emr-medicationstatement.md) | Medication Statement for the Swiss Emergency Record. Captures a medication the patient is taking with a treatment reason, a dose quantity, and a dosing schedule expressed using the CH EMED dosage pattern. |
| [CH Emergency Record Observation Disability](StructureDefinition-ch-emr-observation-cognitive-disability.md) | Observation profile for cognitive disability in the Emergency Record. |
| [CH Emergency Record Observation Resuscitation Status](StructureDefinition-ch-emr-observation-resuscitation-status.md) | Observation profile for documenting the patient's resuscitation (code) status. |
| [CH Emergency Record Physical Disability Observation](StructureDefinition-ch-emr-observation-physical-disability.md) | Observation profile for physical disability in the Emergency Record. |
| [CH Emergency Record RelatedPerson](StructureDefinition-ch-emr-relatedperson.md) | RelatedPerson profile for emergency contacts and family members in the Emergency Record. |
| [CH Emergency Record Risk to Healthcare Personnel](StructureDefinition-ch-emr-flag-risk-to-healthcare-personnel.md) | Risk to healthcare personnel emanating from the patient — typically a communicable / infectious-disease condition or another patient-side circumstance that healthcare personnel need to be aware of for their own safety when treating the patient in an emergency context. |

### Structures: Extension Definitions 

These define constraints on FHIR data types for systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [CH EMR Body Structure Reference](StructureDefinition-ch-emr-body-structure-reference.md) | Links a CodeableConcept body site to a BodyStructure resource carrying structured anatomy and laterality. Used where the FHIR UV bodySite extension is not allowed by its context list. |

### Terminology: Value Sets 

These define sets of codes used by systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [Advance Directive Type](ValueSet-ch-emr-advance-directive-type-vs.md) | Types of advance directives and emergency medical orders. |
| [CH EMR MRI Safety Status](ValueSet-ch-emr-mri-safety-status-vs.md) | Permitted values for the MRI safety status property of a device, per ASTM F2503: MR Safe, MR Conditional, MR Unsafe. |
| [Clinical Document Types](ValueSet-ch-emr-clinical-document-types-vs.md) | Value Set for clinical document types |
| [Cognitive disability types](ValueSet-ch-emr-cognitive-disability-types-vs.md) | Value set for the types of cognitive disabilities based on SNOMED CT. |
| [Implant Type](ValueSet-ch-emr-implant-type-vs.md) | Codes for implant types |
| [Physical disability types](ValueSet-ch-emr-physical-disability-types-vs.md) | Value sets for the types of disabilities |
| [Resuscitation status](ValueSet-ch-emr-resuscitation-status-vs.md) | Coded resuscitation status values based on SNOMED CT, including all descendants of 304251008 (Resuscitation status). |
| [Risk to Healthcare Personnel](ValueSet-ch-emr-risk-to-healthcare-personnel-vs.md) | SNOMED CT concepts that may indicate a risk to healthcare personnel emanating from the patient. Includes selected children of the Infectious disease hierarchy whose descendants are person-to-person transmissible — viral, bacterial, sexually transmitted, respiratory, healthcare-associated and parasitic disease — plus an aggressive behavior finding. Branches that do not pose a meaningful staff-transmission risk (anatomical-location infections, post-procedural / device-associated infections, sepsis variants, congenital and perinatal infections, plant / Microspora / Oomycota / fish infections, and the like) are excluded. |

### Terminology: Code Systems 

These define new code systems used by systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [CH EMR MRI Safety Status](CodeSystem-ch-emr-mri-safety-status-cs.md) | Safety classification of a medical device in the magnetic resonance imaging (MRI) environment. Semantics aligned with ASTM F2503 (Standard Practice for Marking Medical Devices and Other Items for Safety in the Magnetic Resonance Environment). Defined locally because SNOMED CT International does not currently publish dedicated qualifier-value concepts for these classifications. |

### Terminology: Naming Systems 

These define identifier and/or code system identities used by systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [European Commission UDI Jurisdiction](NamingSystem-eu-ec-udi.md) | UDI jurisdiction for the European Commission (republished from the FHIR Device documentation). |
| [GS1 Device Identifiers](NamingSystem-gs1-di.md) | GS1 device identifier namespace recognised as a UDI issuer (republished from the FHIR Device documentation). |

### Example: Example Instances 

These are example instances that show what data produced and consumed by systems conforming with this implementation guide might look like.

| | |
| :--- | :--- |
| [EX - Practitioner Dr. Sarah Huber](Practitioner-EX-Practitioner.md) | General example of a practitioner |
| [EX-AdvanceDirective](DocumentReference-EX-AdvanceDirective.md) | General example of a advance directive |
| [EX-AllergyIntolerance (Allergy to contrast media)](AllergyIntolerance-EX-AllergyIntolerance.md) | General example of an allergy |
| [EX-Bundle](Bundle-EX-Bundle.md) | Complete Emergency Record Bundle |
| [EX-CognitiveDisability](Observation-EX-CognitiveDisability.md) | Example: Dementia |
| [EX-Composition](Composition-EX-Composition.md) | General composition for the Emergency Record |
| [EX-Condition (Type 2 diabetes mellitus)](Condition-EX-Condition.md) | General example of a condition |
| [EX-DeviceUseStatement](DeviceUseStatement-EX-DeviceUseStatement.md) | General example for a device |
| [EX-DocumentReferences (organ donation)](DocumentReference-EX-DocumentReferences.md) | General example of a Document References |
| [EX-Immunization](Immunization-EX-Immunization.md) | General example of a vaccination |
| [EX-MedicalDevice](Device-EX-MedicalDevice.md) | General example of a medical device |
| [EX-MedicationStatement (Metformin)](MedicationStatement-EX-MedicationStatement.md) | General example of a medication statement |
| [EX-Metformin](Medication-EX-Metformin.md) | Example of Metformin 500 mg tablet medication |
| [EX-Organization-GynPraxis](Organization-EX-Organization-GynPraxis.md) | Gynecology practice in Basel |
| [EX-Patient](Patient-EX-Patient.md) | General example of a Patient |
| [EX-PhysicalDisability](Observation-EX-PhysicalDisability.md) | General example of a physical disability |
| [EX-PractitionerRole](PractitionerRole-EX-PractitionerRole.md) | General example of a practitioner role |
| [EX-Pregnancy](Observation-EX-Pregnancy.md) | General example of a Pregnancy |
| [EX-RelatedPerson](RelatedPerson-EX-RelatedPerson.md) | General example of a related person |
| [EX-Resuscitation](Observation-EX-Resuscitation.md) | General example of a resuscitation status observation (for CPR) |
| [EX-RiskFactor](Flag-EX-RiskFactor.md) | Risk to healthcare personnel emanating from the patient — viral hepatitis type B. |
| [UC1-Bundle-emr-MusterMax](Bundle-UC1-Bundle-emr-MusterMax.md) | Vollständiger eNotfallpass für Muster Max (Anwendungsfall 1). |
| [UC1-Composition-emr-MusterMax](Composition-UC1-Composition-emr-MusterMax.md) | Elektronischer Notfallpass für Muster Max — Anwendungsfall 1. |
| [UC1-Condition-Hypertonie](Condition-UC1-Condition-Hypertonie.md) | Diagnose arterielle Hypertonie (Muster Max, 2016). |
| [UC1-Condition-KoronareHerzkrankheit](Condition-UC1-Condition-KoronareHerzkrankheit.md) | Diagnose koronare Herzkrankheit (Muster Max, 2015). |
| [UC1-Device-Pacemaker](Device-UC1-Device-Pacemaker.md) | Herzschrittmacher implantiert bei Muster Max (2015). |
| [UC1-DeviceUseStatement-Pacemaker](DeviceUseStatement-UC1-DeviceUseStatement-Pacemaker.md) | Muster Max trägt einen Herzschrittmacher (implantiert 2015). |
| [UC1-DocumentReference-Notanordnung](DocumentReference-UC1-DocumentReference-Notanordnung.md) | Ärztliche Notanordnung von Muster Max (2024, im EPD hinterlegt). |
| [UC1-DocumentReference-Patientenverfuegung](DocumentReference-UC1-DocumentReference-Patientenverfuegung.md) | Patientenverfügung von Muster Max (2022, beim Hausarzt hinterlegt). |
| [UC1-DocumentReference-Schrittmacherausweis](DocumentReference-UC1-DocumentReference-Schrittmacherausweis.md) | Schrittmacherausweis (2015, im EPD hinterlegt). |
| [UC1-Medication-BelocZok](Medication-UC1-Medication-BelocZok.md) | BELOC ZOK Retardtabletten 50 mg (Metoprolol), Packung à 100 Stk (Swissmedic 52110). |
| [UC1-Medication-Plavix](Medication-UC1-Medication-Plavix.md) | PLAVIX Filmtabletten 75 mg (Clopidogrel), Packung à 28 Stk (Swissmedic 54509). |
| [UC1-MedicationStatement-BelocZok](MedicationStatement-UC1-MedicationStatement-BelocZok.md) | Beloc Zok 50 mg (Metoprolol) für Bluthochdruck — Dosierung 1-0-0.5-0. |
| [UC1-MedicationStatement-Plavix](MedicationStatement-UC1-MedicationStatement-Plavix.md) | Plavix 75 mg (Clopidogrel) zur Prophylaxe nach Schlaganfall — Dosierung 1-0-0-0. |
| [UC1-Organization-Hausarztpraxis](Organization-UC1-Organization-Hausarztpraxis.md) | Generic Hausarztpraxis for UC1 (Care-Team filler). |
| [UC1-Patient-MusterMax](Patient-UC1-Patient-MusterMax.md) | Patient Muster Max — Anwendungsfall 1: Bewusstlose Person im Spitalnotfall. |
| [UC1-Practitioner-Hausarzt](Practitioner-UC1-Practitioner-Hausarzt.md) | Generic Hausarzt for UC1 (Care-Team filler). |
| [UC1-PractitionerRole-Hausarzt](PractitionerRole-UC1-PractitionerRole-Hausarzt.md) | PractitionerRole linking UC1 Hausarzt to UC1 Hausarztpraxis. |
| [UC1-RelatedPerson-VreniMuster](RelatedPerson-UC1-RelatedPerson-VreniMuster.md) | Notfallkontakt: Vreni Muster (Ehefrau von Max Muster). |
| [UC2-AllergyIntolerance-Penicillin](AllergyIntolerance-UC2-AllergyIntolerance-Penicillin.md) | Penicillin-Allergie mit Reaktion Atemnot (Walter Schmid). |
| [UC2-Bundle-emr-WalterSchmid](Bundle-UC2-Bundle-emr-WalterSchmid.md) | Vollständiger eNotfallpass für Walter Schmid (Anwendungsfall 2). |
| [UC2-Composition-emr-WalterSchmid](Composition-UC2-Composition-emr-WalterSchmid.md) | Elektronischer Notfallpass für Walter Schmid — Anwendungsfall 2. |
| [UC2-Condition-Schlaganfall](Condition-UC2-Condition-Schlaganfall.md) | Diagnose Schlaganfall (Walter Schmid, 2023). |
| [UC2-Condition-Splenektomie](Condition-UC2-Condition-Splenektomie.md) | Status nach Splenektomie (Walter Schmid, 1969 nach Motorradunfall). |
| [UC2-DocumentReference-Patientenverfuegung](DocumentReference-UC2-DocumentReference-Patientenverfuegung.md) | Patientenverfügung von Walter Schmid (2022, beim Hausarzt hinterlegt). |
| [UC2-Medication-AspirinCardio](Medication-UC2-Medication-AspirinCardio.md) | ASPIRIN CARDIO Filmtabletten 100 mg (Acetylsalicylsäure), Packung à 28 Stk (Swissmedic 51795). |
| [UC2-Medication-Atorvastatin](Medication-UC2-Medication-Atorvastatin.md) | SORTIS Filmtabletten 40 mg (Atorvastatin), Packung à 30 Stk (Swissmedic 54085). |
| [UC2-Medication-Epril](Medication-UC2-Medication-Epril.md) | EPRIL Tabletten 20 mg (Enalapril), Packung à 30 Stk (Swissmedic 55229). |
| [UC2-Medication-XigduoXR](Medication-UC2-Medication-XigduoXR.md) | XIGDUO XR Filmtabletten 5 mg Dapagliflozin / 1000 mg Metformin (Fixkombination), Packung à 28 Stk (Swissmedic 65377). |
| [UC2-MedicationStatement-AspirinCardio](MedicationStatement-UC2-MedicationStatement-AspirinCardio.md) | Aspirin cardio 100 mg, 1-0-0-0 — Status nach Schlaganfall. |
| [UC2-MedicationStatement-Atorvastatin](MedicationStatement-UC2-MedicationStatement-Atorvastatin.md) | Atorvastatin 40 mg, 0-0-1-0 — Status nach Schlaganfall (vaskulär bedingt). |
| [UC2-MedicationStatement-Epril](MedicationStatement-UC2-MedicationStatement-Epril.md) | Epril 20 mg (Enalapril), 1-0-0-0 — Bluthochdruck. |
| [UC2-MedicationStatement-XigduoXR](MedicationStatement-UC2-MedicationStatement-XigduoXR.md) | Xigduo XR 1000/5 mg, 0-0-2-0 — Diabetes. |
| [UC2-Organization-Hausarztpraxis](Organization-UC2-Organization-Hausarztpraxis.md) | Generic Hausarztpraxis for UC2 (Care-Team filler). |
| [UC2-Patient-WalterSchmid](Patient-UC2-Patient-WalterSchmid.md) | Patient (78 J., alleinlebend, Spitex 2x/Tag) — Anwendungsfall 2: Allgemeiner Notfalldienst am Wochenende. |
| [UC2-PhysicalDisability-Aphasie](Observation-UC2-PhysicalDisability-Aphasie.md) | Aphasie als Kommunikationsbeeinträchtigung nach Schlaganfall. |
| [UC2-Practitioner-Hausarzt](Practitioner-UC2-Practitioner-Hausarzt.md) | Generic Hausarzt for UC2 (Care-Team filler). |
| [UC2-PractitionerRole-Hausarzt](PractitionerRole-UC2-PractitionerRole-Hausarzt.md) | PractitionerRole linking UC2 Hausarzt to UC2 Hausarztpraxis. |
| [UC2-RelatedPerson-Spitex](RelatedPerson-UC2-RelatedPerson-Spitex.md) | Spitex (Hausbesuch 2x täglich) als Notfallkontakt für UC2. |
| [UC3-Bundle-emr-LaraKeller](Bundle-UC3-Bundle-emr-LaraKeller.md) | Vollständiger eNotfallpass für Lara Keller (Anwendungsfall 3). |
| [UC3-Composition-emr-LaraKeller](Composition-UC3-Composition-emr-LaraKeller.md) | Elektronischer Notfallpass für Lara Keller — Anwendungsfall 3. |
| [UC3-Condition-AngeborenerHerzfehler](Condition-UC3-Condition-AngeborenerHerzfehler.md) | Angeborener Herzfehler (Lara Keller, 2008). |
| [UC3-Condition-Eisenmangelanaemie](Condition-UC3-Condition-Eisenmangelanaemie.md) | Eisenmangelanämie (Lara Keller, 2024). |
| [UC3-Device-AorticValve](Device-UC3-Device-AorticValve.md) | Mechanische Aortenklappenprothese (implantiert 2010). |
| [UC3-DeviceUseStatement-AorticValve](DeviceUseStatement-UC3-DeviceUseStatement-AorticValve.md) | Lara Keller trägt eine mechanische Aortenklappenprothese (implantiert 2010). |
| [UC3-Medication-Marcoumar](Medication-UC3-Medication-Marcoumar.md) | MARCOUMAR Tabletten 3 mg (Phenprocoumon), Plastflasche à 25 Stk (Swissmedic 19395). |
| [UC3-MedicationStatement-Marcoumar](MedicationStatement-UC3-MedicationStatement-Marcoumar.md) | Marcoumar 3 mg (Phenprocoumon) — Thromboembolieprophylaxe nach mechanischem Klappenersatz. Dosierung nach separater Verordnung (INR-gesteuert). |
| [UC3-Organization-Hausarztpraxis](Organization-UC3-Organization-Hausarztpraxis.md) | Generic Hausarztpraxis for UC3 (Care-Team filler). |
| [UC3-Patient-LaraKeller](Patient-UC3-Patient-LaraKeller.md) | Patientin (32 J.) bei der Dermatologin — Anwendungsfall 3: Patientin in Arztpraxis. |
| [UC3-Practitioner-Hausarzt](Practitioner-UC3-Practitioner-Hausarzt.md) | Generic Hausarzt for UC3 (Care-Team filler). |
| [UC3-PractitionerRole-Hausarzt](PractitionerRole-UC3-PractitionerRole-Hausarzt.md) | PractitionerRole linking UC3 Hausarzt to UC3 Hausarztpraxis. |
| [UC3-RelatedPerson-Mutter](RelatedPerson-UC3-RelatedPerson-Mutter.md) | Mutter als Notfallkontakt von Lara Keller (Care-Team filler). |
| [UC4-Bundle-emr-BeatFrei](Bundle-UC4-Bundle-emr-BeatFrei.md) | Vollständiger eNotfallpass für Beat Frei (Anwendungsfall 4). |
| [UC4-Composition-emr-BeatFrei](Composition-UC4-Composition-emr-BeatFrei.md) | Elektronischer Notfallpass für Beat Frei — Anwendungsfall 4. |
| [UC4-Condition-Aortenaneurysma](Condition-UC4-Condition-Aortenaneurysma.md) | Aortenaneurysma (Beat Frei, 2024). |
| [UC4-Medication-Bilol](Medication-UC4-Medication-Bilol.md) | BILOL Filmtabletten 5 mg (Bisoprolol), Packung à 30 Stk (Swissmedic 54030). |
| [UC4-MedicationStatement-Bilol](MedicationStatement-UC4-MedicationStatement-Bilol.md) | Bilol 5 mg (Bisoprolol) — Blutdrucksenkung bei Aortenaneurysma. Dosierung 1-0-0-0. |
| [UC4-Organization-Hausarztpraxis](Organization-UC4-Organization-Hausarztpraxis.md) | Generic Hausarztpraxis for UC4 (Care-Team filler). |
| [UC4-Patient-BeatFrei](Patient-UC4-Patient-BeatFrei.md) | Patient in Physiotherapie wegen rezidivierender Lumbalgien — Anwendungsfall 4: Patient in Physiotherapie. |
| [UC4-Practitioner-Hausarzt](Practitioner-UC4-Practitioner-Hausarzt.md) | Generic Hausarzt for UC4 (Care-Team filler). |
| [UC4-PractitionerRole-Hausarzt](PractitionerRole-UC4-PractitionerRole-Hausarzt.md) | PractitionerRole linking UC4 Hausarzt to UC4 Hausarztpraxis. |
| [UC4-RelatedPerson-Ehefrau](RelatedPerson-UC4-RelatedPerson-Ehefrau.md) | Ehefrau als Notfallkontakt von Beat Frei (Care-Team filler). |
| [UC5-Bundle-emr-AnnaMeier](Bundle-UC5-Bundle-emr-AnnaMeier.md) | Vollständiger eNotfallpass für Anna Meier (Anwendungsfall 5). |
| [UC5-Composition-emr-AnnaMeier](Composition-UC5-Composition-emr-AnnaMeier.md) | Elektronischer Notfallpass für Anna Meier — Anwendungsfall 5. |
| [UC5-Condition-KoronareHerzkrankheit](Condition-UC5-Condition-KoronareHerzkrankheit.md) | Chronische koronare Herzkrankheit (Anna Meier, 2018). |
| [UC5-Medication-AspirinCardio](Medication-UC5-Medication-AspirinCardio.md) | ASPIRIN CARDIO Filmtabletten 100 mg (Acetylsalicylsäure), Packung à 28 Stk (Swissmedic 51795). |
| [UC5-Medication-Atorvastatin](Medication-UC5-Medication-Atorvastatin.md) | SORTIS Filmtabletten 40 mg (Atorvastatin), Packung à 30 Stk (Swissmedic 54085). |
| [UC5-Medication-Bilol](Medication-UC5-Medication-Bilol.md) | BILOL Filmtabletten 5 mg (Bisoprolol), Packung à 30 Stk (Swissmedic 54030). |
| [UC5-Medication-Pemzek](Medication-UC5-Medication-Pemzek.md) | PEMZEK Tabletten 16 mg (Candesartan), Packung à 28 Stk (Swissmedic 62498). |
| [UC5-MedicationStatement-AspirinCardio](MedicationStatement-UC5-MedicationStatement-AspirinCardio.md) | Aspirin cardio 100 mg, 1-0-0-0 — Koronare Herzkrankheit. |
| [UC5-MedicationStatement-Atorvastatin](MedicationStatement-UC5-MedicationStatement-Atorvastatin.md) | Atorvastatin 40 mg, 1-0-0-0 — Koronare Herzkrankheit. |
| [UC5-MedicationStatement-Bilol](MedicationStatement-UC5-MedicationStatement-Bilol.md) | Bilol 5 mg (Bisoprolol), 1-0-0-0 — Koronare Herzkrankheit. |
| [UC5-MedicationStatement-Pemzek](MedicationStatement-UC5-MedicationStatement-Pemzek.md) | Pemzek 16 mg (Candesartan), 1-0-0-0 — Koronare Herzkrankheit. |
| [UC5-Organization-Hausarztpraxis](Organization-UC5-Organization-Hausarztpraxis.md) | Generic Hausarztpraxis for UC5 (Care-Team filler). |
| [UC5-Patient-AnnaMeier](Patient-UC5-Patient-AnnaMeier.md) | Patientin Anna Meier — Anwendungsfall 5: Präklinik (Rettungsdienst) vor Ankunft im Spital. |
| [UC5-Practitioner-Hausarzt](Practitioner-UC5-Practitioner-Hausarzt.md) | Generic Hausarzt for UC5 (Care-Team filler). |
| [UC5-PractitionerRole-Hausarzt](PractitionerRole-UC5-PractitionerRole-Hausarzt.md) | PractitionerRole linking UC5 Hausarzt to UC5 Hausarztpraxis. |
| [UC5-RelatedPerson-Ehemann](RelatedPerson-UC5-RelatedPerson-Ehemann.md) | Ehemann als Notfallkontakt von Anna Meier (Care-Team filler). |

