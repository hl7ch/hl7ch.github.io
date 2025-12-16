# Artifacts Summary - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* **Artifacts Summary**

## Artifacts Summary

This page provides a list of the FHIR artifacts defined as part of this implementation guide.

### Structures: Resource Profiles 

These define constraints on FHIR resources for systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [CH EPREG Appointment: Next Examination](StructureDefinition-ch-epreg-appointment-next-examination.md) | This profile constrains the Appointment resource to represent the date of the planned next pregnancy examination. |
| [CH EPREG Composition](StructureDefinition-ch-epreg-composition.md) | This profile constrains the Composition resource to represent the first entry in the CH EPREG Document. |
| [CH EPREG Coverage](StructureDefinition-ch-epreg-coverage.md) | This profile constrains the Coverage resource to represent the insurance data. |
| [CH EPREG Document](StructureDefinition-ch-epreg-document.md) | This profile constrains the Bundle resource to represent the pregnancy passport. |
| [CH EPREG Encounter: Child](StructureDefinition-ch-epreg-encounter-child.md) | This profile constrains the Encounter resource to represent a pregnancy examination from the child's perspective. |
| [CH EPREG Encounter: Mother](StructureDefinition-ch-epreg-encounter-mother.md) | This profile constrains the Encounter resource to represent a pregnancy examination from the mother's perspective. |
| [CH EPREG Observation (Base): Pregnancy Progress](StructureDefinition-ch-epreg-observation-preg-progress.md) | This base profile constrains the Observation resource to represent the pregnancy progress. |
| [CH EPREG Observation (Base): Results Laboratory](StructureDefinition-ch-epreg-observation-results-lab.md) | This base profile constrains the Observation resource to represent the laboratory results. |
| [CH EPREG Observation (Child): Fetal Heart Feature](StructureDefinition-ch-epreg-observation-fetal-heart-feature.md) | This profile constrains the Observation resource to represent the fetal heart feature (e.g. rate, sounds, rhythm). |
| [CH EPREG Observation (Child): Fetal Movement](StructureDefinition-ch-epreg-observation-fetal-movement.md) | This profile constrains the Observation resource to represent the movement of the fetus (e.g. activity, strength). |
| [CH EPREG Observation (Child): Fetal Position](StructureDefinition-ch-epreg-observation-fetal-position.md) | This profile constrains the Observation resource to represent the position of the fetus. |
| [CH EPREG Observation (Lab): Blood Group](StructureDefinition-ch-epreg-observation-blood-group.md) | This profile constrains the Observation resource to represent the blood group. |
| [CH EPREG Observation (Lab): Fetal RhD](StructureDefinition-ch-epreg-observation-fetal-rhd.md) | This profile constrains the Observation resource to represent the fetal Rhesus D determination from the maternal blood. |
| [CH EPREG Observation (Mother): Abdominal Circumference](StructureDefinition-ch-epreg-observation-abdominal-circumference.md) | This profile constrains the Observation resource to represent the birth abdominal circumference. |
| [CH EPREG Observation (Mother): Blood Pressure](StructureDefinition-ch-epreg-observation-blood-pressure.md) | This profile constrains the Observation resource to represent the blood pressure. |
| [CH EPREG Observation (Mother): Body Weight](StructureDefinition-ch-epreg-observation-body-weight.md) | This profile constrains the Observation resource to represent the body weight. |
| [CH EPREG Observation (Mother): Fundus Height](StructureDefinition-ch-epreg-observation-fundus-height.md) | This profile constrains the Observation resource to represent the the height of the gravid uterus. |
| [CH EPREG Observation (Mother): Gestational Age in Days](StructureDefinition-ch-epreg-observation-gestational-age-in-days.md) | This profile constrains the Observation resource to represent the gestational age in days. |
| [CH EPREG Observation (Mother): Urine Finding](StructureDefinition-ch-epreg-observation-urine-finding.md) | This profile constrains the Observation resource to represent the findings of the urine dipstick test (e.g. protein, glucose, nitrite, bacteria). |
| [CH EPREG Observation (Mother): Vagina Feature](StructureDefinition-ch-epreg-observation-vagina-feature.md) | This profile constrains the Observation resource to represent the vagina feature (e.g. cervix, cervical os). |
| [CH EPREG Observation (Mother): Weight Gain](StructureDefinition-ch-epreg-observation-weight-gain.md) | This profile constrains the Observation resource to represent the gestational weight gain. |
| [CH EPREG Organization: Treating Healthcare Provider](StructureDefinition-ch-epreg-organization-thcp.md) | This profile constrains the Organization resource to represent the treating healthcare provider. |
| [CH EPREG Patient: Child](StructureDefinition-ch-epreg-patient-child.md) | This profile constrains the Patient resource to represent the child (fetus/newborn). (See also the[IBCM Fetal Record Profile](https://hl7.org/fhir/uv/ibcm/2024Sep/StructureDefinition-ibcm-fetal-record.html).) |
| [CH EPREG Patient: Mother](StructureDefinition-ch-epreg-patient-mother.md) | This profile constrains the Patient resource to represent the pregnant individual. |
| [CH EPREG Practitioner: Treating Healthcare Provider](StructureDefinition-ch-epreg-practitioner-thcp.md) | This profile constrains the PractitionerRole resource to represent the treating healthcare provider. |
| [CH EPREG PractitionerRole: Treating Healthcare Provider](StructureDefinition-ch-epreg-practitionerrole-thcp.md) | This profile constrains the PractitionerRole resource to represent the treating healthcare provider. |
| [CH EPREG RelatedPerson: Mother](StructureDefinition-ch-epreg-relatedperson-mother.md) | This profile constrains the RelatedPerson resource to represent the relationship between the mother and the child. |
| [CH EPREG RelatedPerson: Parent](StructureDefinition-ch-epreg-relatedperson-parent.md) | This profile constrains the RelatedPerson resource to represent the relationship between the parent (besides the biological mother) and the child. |

### Structures: Extension Definitions 

These define constraints on FHIR data types for systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [CH EPREG Extension: Examination Sequence](StructureDefinition-ch-epreg-ext-examination-sequence.md) | This extension represents the sequential number of a pregnancy-related examination (e.g., 1 = first examination, 2 = second examination, or second ultrasound). It indicates the order of occurrence within the pregnancy. |

### Terminology: Value Sets 

These define sets of codes used by systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [CH EPREG VS: Blood Group](ValueSet-blood-group.md) | This value set includes SNOMED CT codes for blood group findings. |
| [CH EPREG VS: Fetal Position](ValueSet-fetal-position.md) | This value set includes SNOMED CT codes for fetal positions. |
| [CH EPREG VS: Fetal RhD Antigen](ValueSet-fetal-rhd-antigen.md) | This value set includes LOINC codes for the fetal Rhesus D determination. |
| [CH EPREG VS: Parent](ValueSet-parent.md) | This value set includes SNOMED CT codes for the type of parent. |

### Example: Example Instances 

These are example instances that show what data produced and consumed by systems conforming with this implementation guide might look like.

| | |
| :--- | :--- |
| [UC 1: 101 cm (05.02.2025)](Observation-UC1-AbdominalCircumference-20250205.md) | Example for CH EPREG Observation (Mother): Abdominal Circumference |
| [UC 1: 11.1 kg (23.01.2025)](Observation-UC1-WeightGain-20250123.md) | Example for CH EPREG Observation (Mother): Weight Gain |
| [UC 1: 12.5 kg (05.02.2025)](Observation-UC1-WeightGain-20250205.md) | Example for CH EPREG Observation (Mother): Weight Gain |
| [UC 1: 120/80 mmHg (23.01.2025)](Observation-UC1-BloodPressure-20250123.md) | Example for CH EPREG Observation (Mother): Blood Pressure |
| [UC 1: 160/100 mmHg (05.02.2025)](Observation-UC1-BloodPressure-20250205.md) | Example for CH EPREG Observation (Mother): Blood Pressure |
| [UC 1: 162 /min (05.02.2025)](Observation-UC1-FetalHeartFeature-20250205.md) | Example for CH EPREG Observation (Child): Fetal Heart Feature |
| [UC 1: 35 Weeks (23.01.2025)](Observation-UC1-GestationalAgeInDays-20250123.md) | Example for CH EPREG Observation (Mother): Gestational Age |
| [UC 1: 37 Weeks (05.02.2025)](Observation-UC1-GestationalAgeInDays-20250205.md) | Example for CH EPREG Observation (Mother): Gestational Age |
| [UC 1: 80.6 kg (23.01.2025)](Observation-UC1-BodyWeight-20250123.md) | Example for CH EPREG Observation (Mother): Body Weight |
| [UC 1: 82.0 kg (05.02.2025)](Observation-UC1-BodyWeight-20250205.md) | Example for CH EPREG Observation (Mother): Body Weight |
| [UC 1: ALAT 98 U/L (05.02.2025)](Observation-UC1-ALAT-20250205.md) | Example for CH EPREG Observation (Lab) |
| [UC 1: AP 109 U/L (05.02.2025)](Observation-UC1-AP-20250205.md) | Example for CH EPREG Observation (Lab) |
| [UC 1: AST 43 U/L (05.02.2025)](Observation-UC1-AST-20250205.md) | Example for CH EPREG Observation (Lab) |
| [UC 1: Basic Insurance](Coverage-UC1-BasicInsurance.md) | Example for CH EPREG Coverage |
| [UC 1: Bland (05.02.2025)](Observation-UC1-VaginaFeature-20250205.md) | Example for CH EPREG Observation (Mother): Vagina Feature |
| [UC 1: Blood Group AB Rh+ (05.02.2025)](Observation-UC1-BloodGroup-20250205.md) | Example for CH EPREG Observation (Lab): Blood Group |
| [UC 1: Child](Patient-UC1-Child.md) | Example for CH EPREG Patient: Child |
| [UC 1: Composition](Composition-UC1-Composition.md) | Example for CH EPREG Composition |
| [UC 1: Creatinine 1.2 mg/dL (05.02.2025)](Observation-UC1-Creatinine-20250205.md) | Example for CH EPREG Observation (Lab) |
| [UC 1: Examination 05.02.2025](Encounter-UC1-EncounterChild20250205.md) | Example for CH EPREG Encounter: Child |
| [UC 1: Examination 05.02.2025](Encounter-UC1-EncounterMother20250205.md) | Example for CH EPREG Encounter: Mother |
| [UC 1: Examination 23.01.2025](Encounter-UC1-EncounterChild20250123.md) | Example for CH EPREG Encounter: Child |
| [UC 1: Examination 23.01.2025](Encounter-UC1-EncounterMother20250123.md) | Example for CH EPREG Encounter: Mother |
| [UC 1: Fetal RhD Rh+ (05.02.2025)](Observation-UC1-FetalRhD-20250205.md) | Example for CH EPREG Observation (Lab): Fetal RhD |
| [UC 1: Frauenzimmer](Organization-UC1-Frauenzimmer.md) | Example for CH EPREG Organization: Treating Healthcare Provider |
| [UC 1: GFR 54 mL/min (05.02.2025)](Observation-UC1-GFR-20250205.md) | Example for CH EPREG Observation (Lab) |
| [UC 1: GGT 43 U/L (05.02.2025)](Observation-UC1-GGT-20250205.md) | Example for CH EPREG Observation (Lab) |
| [UC 1: Glucose 8.1 mmol/L (05.02.2025)](Observation-UC1-GlucoseLab-20250205.md) | Example for CH EPREG Observation (Lab) |
| [UC 1: Glucose positive, Nitrite positive (05.02.2025)](Observation-UC1-UrineFinding-20250205.md) | Example for CH EPREG Observation (Mother): Urine Finding |
| [UC 1: Hematocrit 46 % (05.02.2025)](Observation-UC1-Hematocrit-20250205.md) | Example for CH EPREG Observation (Lab) |
| [UC 1: Katrin Kinderlieb](Patient-UC1-KatrinKinderlieb.md) | Example for CH EPREG Patient: Mother |
| [UC 1: Labor Pipette](Organization-UC1-LaborPipette.md) | Example for CH Core Organization |
| [UC 1: Normal (05.02.2025)](Observation-UC1-FetalMovement-20250205.md) | Example for CH EPREG Observation (Child): Fetal Movement |
| [UC 1: Petra Sectionata](Practitioner-UC1-PetraSectionata.md) | Example for CH EPREG Practitioner: Treating Healthcare Provider |
| [UC 1: Petra Sectionata @ Frauenzimmer](PractitionerRole-UC1-PetraSectionataAtFrauenzimmer.md) | Example for CH EPREG PractitionerRole |
| [UC 1: Platelets 130 (05.02.2025)](Observation-UC1-Platelets-20250205.md) | Example for CH EPREG Observation (Lab) |
| [UC 1: Pregnancy Passport](Bundle-UC1-Document.md) | Example for CH EPREG Document - using absolute URLs for fullUrls/references |
| [UC 1: Rb/0 (05.02.2025)](Observation-UC1-FundusHeight-20250205.md) | Example for CH EPREG Observation (Mother): Fundus Height |
| [UC 1: RelatedPerson Biological Father](RelatedPerson-UC1-RelatedPerson-BiologicalFather.md) | Example for CH EPREG RelatedPerson: Parent |
| [UC 1: RelatedPerson Mother](RelatedPerson-UC1-RelatedPerson-Mother.md) | Example for CH EPREG RelatedPerson: Mother |
| [UC 1: Supplementary Insurance](Coverage-UC1-SupplementaryInsurance.md) | Example for CH EPREG Coverage |
| [UC 1: Urate 6.3 mg/dL (05.02.2025)](Observation-UC1-Urate-20250205.md) | Example for CH EPREG Observation (Lab) |
| [UC 1: Vertex Presentation (05.02.2025)](Observation-UC1-FetalPosition-20250205.md) | Example for CH EPREG Observation (Child): Fetal Position |
| [UC 2: 110 /min (27.03.2025)](Observation-d0b53779-fde0-4780-9ff4-9ba2a4cf9393.md) | Example for CH EPREG Observation (Child): Fetal Movement |
| [UC 2: 122/83 mmHg (26.03.2025)](Observation-e949f912-fc27-4849-8632-09caad9fe897.md) | Example for CH EPREG Observation (Mother): Blood Pressure |
| [UC 2: 160/60 mmHg (27.03.2025)](Observation-4268bd90-eff8-41f4-a7b4-2178dac0e470.md) | Example for CH EPREG Observation (Mother): Blood Pressure |
| [UC 2: 32 Weeks (26.03.2025)](Observation-2f167f2f-44f7-49e3-a970-d7f7a6573cd3.md) | Example for CH EPREG Observation (Mother): Gestational Age |
| [UC 2: 32 Weeks (27.03.2025)](Observation-84869994-4348-4ad3-95ee-d9b0faf75dba.md) | Example for CH EPREG Observation (Mother): Gestational Age |
| [UC 2: 65 kg (27.03.2025)](Observation-e1c73669-f935-47d1-9dcd-fab76a38bdb7.md) | Example for CH EPREG Observation (Mother): Body Weight |
| [UC 2: 65.1 kg (26.03.2025)](Observation-f339e056-53d6-4247-9226-5339123fbd14.md) | Example for CH EPREG Observation (Mother): Body Weight |
| [UC 2: Bland (27.03.2025)](Observation-2db81543-7bf1-4965-a75e-00400c62e78b.md) | Example for CH EPREG Observation (Mother): Urine Finding |
| [UC 2: Breech Presentation (26.03.2025)](Observation-4a907770-6665-4fb4-b186-afd0ddf48742.md) | Example for CH EPREG Observation (Child): Fetal Position |
| [UC 2: Breech Presentation (27.03.2025)](Observation-a5c14df0-3dca-4530-a22a-072af14178b1.md) | Example for CH EPREG Observation (Child): Fetal Position |
| [UC 2: Child](Patient-111d5e66-f17e-4369-90c6-9382e566040e.md) | Example for CH EPREG Patient: Child |
| [UC 2: Examination 26.03.2025](Encounter-22aeb067-85f9-4b3b-9301-161604005206.md) | Example for CH EPREG Encounter: Child |
| [UC 2: Examination 26.03.2025](Encounter-8e89c502-964f-4234-9728-540d881b0380.md) | Example for CH EPREG Encounter: Mother |
| [UC 2: Examination 27.03.2025](Encounter-1ba6df42-ae1a-4b4a-886f-33d6b2223b1f.md) | Example for CH EPREG Encounter: Mother |
| [UC 2: Examination 27.03.2025](Encounter-833fd8f2-b75f-4dba-990f-6c46aa468d51.md) | Example for CH EPREG Encounter: Child |
| [UC 2: Fabienne Babyglück](Patient-76c2c5aa-3d7f-438d-b23d-56ce827695fd.md) | Example for CH EPREG Patient: Mother |
| [UC 2: Geburtsklinik](Organization-fbe019f1-6574-40be-940f-d03da0c743db.md) | Example for CH EPREG Organization: Treating Healthcare Provider |
| [UC 2: Glucose 3.9 mmol/L (27.03.2025)](Observation-b9145a94-ea12-479b-a031-b07d4ac9f297.md) | Example for CH EPREG Observation (Lab) |
| [UC 2: Glucose Strip (26.03.2025)](Observation-bbd6f1bc-1d87-4c90-a313-98bea06c3dfb.md) | Example for CH EPREG Observation (Mother): Pregnancy Progress - Further Examination |
| [UC 2: Glucose Strip (27.03.2025)](Observation-4b9ca365-383e-41c8-9bac-b3c79aea1c7e.md) | Example for CH EPREG Observation (Mother): Pregnancy Progress - Further Examination |
| [UC 2: Heartburn (27.03.2025)](Observation-1ce882f2-953f-428e-a90b-a55271020fca.md) | Example for CH EPREG Observation (Mother): Pregnancy Progress - Further Examination |
| [UC 2: MM 5 cm (27.03.2025)](Observation-c9bba019-9ed9-4574-84e2-f7d302e8f5d0.md) | Example for CH EPREG Observation (Mother): Vagina Feature |
| [UC 2: Pregnancy Passport](Bundle-UC2-Document.md) | Example for CH EPREG Document - using UUIDs for fullUrls/references |
| [UC 2: Rb/2 (27.03.2025)](Observation-6eafd07b-c40a-4864-874c-cfe2d5b222ed.md) | Example for CH EPREG Observation (Mother): Fundus Height |
| [UC 2: RelatedPerson Mother](RelatedPerson-67d0e290-21b9-4255-9182-5fe9f21cdbb4.md) | Example for CH EPREG RelatedPerson: Mother |
| [UC 2: Ruth Ohazwei](Practitioner-c314ae56-7edb-4ef9-b38a-216c9a979374.md) | Example for CH EPREG Practitioner: Treating Healthcare Provider |
| [UC 2: Ruth Ohazwei @ Geburtsklinik](PractitionerRole-e1b736e3-10bb-41aa-8d17-c7ba28895880.md) | Example for CH EPREG PractitionerRole |
| [UC 2: Tanja Allesgut](Practitioner-a61d6a0b-ee42-443e-92e5-167d2e42f137.md) | Example for CH EPREG Practitioner: Treating Healthcare Provider |
| [UC 2: Tanja Allesgut @ Geburtsklinik](PractitionerRole-89029102-999c-4b69-a836-e4dbfbd55527.md) | Example for CH EPREG PractitionerRole |
| [UC 2: Weak (27.03.2025)](Observation-3e120206-7aa2-4ced-82c3-3704868e023f.md) | Example for CH EPREG Observation (Child): Fetal Movement |
| [UC 3: 120/75 mmHg (10.02.2025)](Observation-UC3-BloodPressure-20250210.md) | Example for CH EPREG Observation (Mother): Blood Pressure |
| [UC 3: 155 /min (10.02.2025 - Child A)](Observation-UC3-FetalHeartFeatureChildA-20250210.md) | Example for CH EPREG Observation (Child): Fetal Heart Feature |
| [UC 3: 155 /min (10.02.2025 - Child B)](Observation-UC3-FetalHeartFeatureChildB-20250210.md) | Example for CH EPREG Observation (Child): Fetal Heart Feature |
| [UC 3: 64 kg (10.02.2025)](Observation-UC3-BodyWeight-20250210.md) | Example for CH EPREG Observation (Mother): Body Weight |
| [UC 3: 7 Weeks (10.02.2025)](Observation-UC3-GestationalAgeInDays-20250210.md) | Example for CH EPREG Observation (Mother): Gestational Age |
| [UC 3: Bland (10.02.2025)](Observation-UC3-UrineFinding-20250210.md) | Example for CH EPREG Observation (Mother): Urine Finding |
| [UC 3: Child A](Patient-UC3-ChildA.md) | Example for CH EPREG Patient: Child |
| [UC 3: Child B](Patient-UC3-ChildB.md) | Example for CH EPREG Patient: Child |
| [UC 3: Claudia Frühblick](Practitioner-UC3-ClaudiaFruehblick.md) | Example for CH EPREG Practitioner: Treating Healthcare Provider |
| [UC 3: Claudia Frühblick @ Frauenzimmer](PractitionerRole-UC3-ClaudiaFruehblickAtFrauenzimmer.md) | Example for CH EPREG PractitionerRole |
| [UC 3: Composition](Composition-UC3-Composition.md) | Example for CH EPREG Composition |
| [UC 3: Examination 10.02.2025](Encounter-UC3-EncounterMother20250210.md) | Example for CH EPREG Encounter: Mother |
| [UC 3: Examination 10.02.2025 - Child A](Encounter-UC3-EncounterChildA20250210.md) | Example for CH EPREG Encounter: Child |
| [UC 3: Examination 10.02.2025 - Child B](Encounter-UC3-EncounterChildB20250210.md) | Example for CH EPREG Encounter: Child |
| [UC 3: Frauenzimmer](Organization-UC3-Frauenzimmer.md) | Example for CH EPREG Organization: Treating Healthcare Provider |
| [UC 3: Next Examination 10.03.2025](Appointment-UC3-Appointment20250310.md) | Example for CH EPREG Appointment: Next Examination |
| [UC 3: Pregnancy Passport](Bundle-UC3-Document.md) | Example for CH EPREG Document |
| [UC 3: RelatedPerson Child A - Mother](RelatedPerson-UC3-RelatedPerson-ChildA-Mother.md) | Example for CH EPREG RelatedPerson: Mother |
| [UC 3: RelatedPerson Child B - Mother](RelatedPerson-UC3-RelatedPerson-ChildB-Mother.md) | Example for CH EPREG RelatedPerson: Mother |
| [UC 3: Sophie Doppelherz](Patient-UC3-SophieDoppelherz.md) | Example for CH EPREG Patient: Mother |

