# Artifacts Summary - CH IPS (R4) v2.0.0

* [**Table of Contents**](toc.md)
* **Artifacts Summary**

## Artifacts Summary

This page provides a list of the FHIR artifacts defined as part of this implementation guide.

### Structures: Resource Profiles 

These define constraints on FHIR resources for systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [CH IPS AllergyIntolerance](StructureDefinition-ch-ips-allergyintolerance.md) | This CH IPS profile for the resource AllergyIntolerance is derived from the corresponding CH Core profile and also ensures IPS conformity via the IPS profile referenced by the so-called imposeProfile extension. |
| [CH IPS Composition](StructureDefinition-ch-ips-composition.md) | This CH IPS profile for the resource Composition is derived from the corresponding CH Core profile and also ensures IPS conformity via the IPS profile referenced by the so-called imposeProfile extension. |
| [CH IPS Condition](StructureDefinition-ch-ips-condition.md) | This CH IPS profile for the resource Condition is derived from the corresponding CH Core profile and also ensures IPS conformity via the IPS profile referenced by the so-called imposeProfile extension. |
| [CH IPS Document](StructureDefinition-ch-ips-document.md) | This CH IPS profile for the resource Bundle is derived from the corresponding CH Core profile and also ensures IPS conformity via the IPS profile referenced by the so-called imposeProfile extension. |
| [CH IPS Document EPR](StructureDefinition-ch-ips-document-epr.md) | This CH IPS EPR profile for the resource Bundle is derived from the CH IPS Document profile and additionally ensures Swiss EPR conformity via the CH Core Document EPR profile referenced by the imposeProfile extension. |
| [CH IPS Immunization](StructureDefinition-ch-ips-immunization.md) | This CH IPS profile for the resource Immunization is derived from the corresponding CH Core profile and also ensures IPS conformity via the IPS profile referenced by the so-called imposeProfile extension. |
| [CH IPS Medication](StructureDefinition-ch-ips-medication.md) | This CH IPS profile for the resource Medication is derived from the corresponding CH Core profile and also ensures IPS conformity via the IPS profile referenced by the so-called imposeProfile extension. |
| [CH IPS MedicationRequest](StructureDefinition-ch-ips-medicationrequest.md) | This CH IPS profile for the resource MedicationRequest is derived from the corresponding CH Core profile and also ensures IPS conformity via the IPS profile referenced by the so-called imposeProfile extension. |
| [CH IPS MedicationStatement](StructureDefinition-ch-ips-medicationstatement.md) | This CH IPS profile for the resource MedicationStatement is derived from the corresponding CH Core profile and also ensures IPS conformity via the IPS profile referenced by the so-called imposeProfile extension. |
| [CH IPS Organization](StructureDefinition-ch-ips-organization.md) | This CH IPS profile for the resource Organization is derived from the corresponding CH Core profile and also ensures IPS conformity via the IPS profile referenced by the so-called imposeProfile extension. |
| [CH IPS Patient](StructureDefinition-ch-ips-patient.md) | This CH IPS profile for the resource Patient is derived from the corresponding CH Core profile and also ensures IPS conformity via the IPS profile referenced by the so-called imposeProfile extension. |
| [CH IPS Practitioner](StructureDefinition-ch-ips-practitioner.md) | This CH IPS profile for the resource Practitioner is derived from the corresponding CH Core profile and also ensures IPS conformity via the IPS profile referenced by the so-called imposeProfile extension. |
| [CH IPS PractitionerRole](StructureDefinition-ch-ips-practitionerrole.md) | This CH IPS profile for the resource PractitionerRole is derived from the corresponding CH Core profile and also ensures IPS conformity via the IPS profile referenced by the so-called imposeProfile extension. |

### Example: Example Instances 

These are example instances that show what data produced and consumed by systems conforming with this implementation guide might look like.

| | |
| :--- | :--- |
| [UC 1.1.: Familien Hausarzt](Practitioner-FamilienHausarzt.md) | Example for CH IPS Practitioner |
| [UC 1.1: Candesartan](MedicationStatement-MedStatCandesartan.md) | Example for CH IPS MedicationStatement - Dosage 1-0-0-0 |
| [UC 1.1: Composition](Composition-UC1-Composition1.md) | Example for CH IPS Composition |
| [UC 1.1: Coronary Heart Disease](Condition-CoronaryHeartDisease.md) | Example for CH IPS Condition |
| [UC 1.1: Diabetes Mellitus](Condition-DiabetesMellitus.md) | Example for CH IPS Condition |
| [UC 1.1: Familien Hausarzt @ Hausarzt](PractitionerRole-FamilienHausarztAtHausarzt.md) | Example for CH IPS PractitionerRole |
| [UC 1.1: Hausarzt](Organization-Hausarzt.md) | Example for CH IPS Organization |
| [UC 1.1: High Blood Pressure](Condition-HighBloodPressure.md) | Example for CH IPS Condition |
| [UC 1.1: Metformin](MedicationStatement-MedStatMetformin.md) | Example for CH IPS MedicationStatement - Dosage 1-0-1-0 |
| [UC 1.1: Monika Wegmüller](Patient-MonikaWegmueller.md) | Example for CH IPS Patient |
| [UC 1.1: Swiss IPS Document](Bundle-UC1-SwissIpsDocument1.md) | Example for CH IPS Document (required sections (incl. 'empty section') and recommended section) - using absolute URLs for fullUrls/references |
| [UC 1.2: Aspirin](MedicationStatement-f27b9345-6ba6-4fd6-83ab-6db6c2acd981.md) | Example for CH IPS MedicationStatement - Dosage 1-0-0-0 |
| [UC 1.2: Atorvastatin](MedicationStatement-6f369210-adb1-4f11-893d-9977e34932de.md) | Example for CH IPS MedicationStatement - Dosage 0.5-0-1-0 |
| [UC 1.2: Body Height](Observation-07b2e450-a62e-4734-98bf-51462f008e0f.md) | Example for Observation (Vital Signs) |
| [UC 1.2: Body Weight](Observation-db5ef7b0-e946-4260-a604-128b8887a41b.md) | Example for Observation (Vital Signs) |
| [UC 1.2: Clopidogrel](MedicationStatement-e463547f-7414-47cb-b97f-04a81e1ab7d8.md) | Example for CH IPS MedicationStatement - Dosage 1-0-0-0 |
| [UC 1.2: Coronary Heart Disease](Condition-2c67cf62-d712-44c7-aedb-b5582bc707f1.md) | Example for CH IPS Condition |
| [UC 1.2: DiTePe](Immunization-19efd704-3461-4120-b3cf-a76ae046e150.md) | Example for CH IPS Immunization |
| [UC 1.2: Diabetes Mellitus](Condition-506b9fef-be0a-4398-bb7e-7d14c311912f.md) | Example for CH IPS Condition |
| [UC 1.2: Heart Attack](Condition-12d8debe-5e03-465d-83f3-17675be9db4a.md) | Example for CH IPS Condition |
| [UC 1.2: High Blood Pressure](Condition-8a79d459-0d2f-460b-87fd-a7de12d49871.md) | Example for CH IPS Condition |
| [UC 1.2: Martina Meier](Practitioner-4d4e3587-42eb-4921-8c87-8bbf89b7eb4b.md) | Example for CH IPS Practitioner |
| [UC 1.2: Martina Meier @ Spital](PractitionerRole-869a4dd9-3a4a-4838-ad1e-42453d341147.md) | Example for CH IPS PractitionerRole |
| [UC 1.2: Metformin](MedicationStatement-88ee1ffb-26d0-49a2-95e4-6212261805a6.md) | Example for CH IPS MedicationStatement - Dosage 1-0-1-0 |
| [UC 1.2: Monika Wegmüller](Patient-8383926c-ece1-4384-94bc-b4250b4cb71b.md) | Example for CH IPS Patient |
| [UC 1.2: No Known Allergy](AllergyIntolerance-27da84cc-526a-4098-afb5-f08c7836d893.md) | Example for CH IPS AllergyIntolerance |
| [UC 1.2: Spital](Organization-a27376ce-fa12-458d-a2dc-f90e63de126b.md) | Example for CH IPS Organization |
| [UC 1.2: Stent Placement](Procedure-StentPlacement.md) | Example for Procedure |
| [UC 1.2: Stent Placement](Procedure-ad3ec07d-1814-4faf-86fd-1a8ebeecb5fe.md) | Example for Procedure |
| [UC 1.2: Stent Placement](Procedure-d646c888-7af0-4439-8aae-9fd490054583.md) | Example for Procedure |
| [UC 1.2: Swiss IPS Document - EPR conform](Bundle-UC1-SwissIpsDocument2.md) | Example for CH IPS Document (with required, some recommended and some optional sections) - using UUIDs for fullUrls/references |
| [UC 1.2: Tobacco Use](Observation-93fe0d81-a547-494e-941c-113506108b76.md) | Example for Observation (Tobacco Use) |

