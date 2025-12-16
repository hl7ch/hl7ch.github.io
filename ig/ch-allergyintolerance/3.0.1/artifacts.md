# Artifacts Summary - CH AllergyIntolerance (R4) v3.0.1

* [**Table of Contents**](toc.md)
* **Artifacts Summary**

## Artifacts Summary

This page provides a list of the FHIR artifacts defined as part of this implementation guide.

### Structures: Resource Profiles 

These define constraints on FHIR resources for systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [CH AllergyIntolerance](StructureDefinition-ch-allergyintolerance.md) | This profile represents the constraints applied to the AllergyIntolerance resource in the Swiss context (based on CH IPS). A record of an allergy or intolerance is represented in the Swiss EPR, in a TransitionOfCare transaction or similar as an instance of an AllergyIntolerance resource constrained by this profile. It documents the relevant allergies or intolerances for a patient, describing the kind of reaction (e.g. rash, anaphylaxis,..); preferably the agents that cause it; and optionally the criticality and the certainty of the allergy. |
| [CH AllergyIntolerance Composition](StructureDefinition-ch-allergyintolerance-composition-epr.md) | Definition of the composition for the allergy intolerance document |
| [CH AllergyIntolerance Condition](StructureDefinition-ch-allergyintolerance-condition.md) | This profile represents the constraints applied to the Condition resource in the context of AllergyIntolerance as a problem-list item or a encounter-diagnosis entry in the Swiss realm - in adaption of the respective usecases provided in the Implementation Guide for Use of SNOMED CT in Documentation of Allergy, Non-allergic Hypersensitivity and Intolerance. |
| [CH AllergyIntolerance Document](StructureDefinition-ch-allergyintolerance-document-epr.md) | Definition of the bundle for the allergy intolerance document |

### Example: Example Instances 

These are example instances that show what data produced and consumed by systems conforming with this implementation guide might look like.

| | |
| :--- | :--- |
| [AgparMarc](Practitioner-AgparMarc.md) | Example for Practitioner |
| [AllergyIntoleranceComposition](Composition-AllergyIntoleranceComposition.md) | Example for Composition of a CH AllergyIntolerance Composition for the Swiss EPR |
| [AllergyToCatDander](AllergyIntolerance-AllergyToCatDander.md) | Example for AllergyIntolerance |
| [CH-AllergyIntolerance-Composition-Example](Composition-ch-allergyintolerance-composition-example.md) | Example for Composition of a CH AllergyIntolerance Composition for the Swiss EPR |
| [CH-AllergyIntolerance-Condition-Usecase-3](Condition-CH-AllergyIntolerance-Condition-Usecase-3.md) | Example for Condition |
| [CH-AllergyIntolerance-Condition-Usecase-7](Condition-CH-AllergyIntolerance-Condition-Usecase-7.md) | Example for Condition |
| [CH-AllergyIntolerance-Condition-Visit1-Usecase-1](Condition-CH-AllergyIntolerance-Condition-Visit1-Usecase-1.md) | Example for Condition |
| [CH-AllergyIntolerance-Condition-Visit2-Usecase-1](Condition-CH-AllergyIntolerance-Condition-Visit2-Usecase-1.md) | Example for Condition |
| [CH-AllergyIntolerance-Document-Example](Bundle-ch-allergyintolerance-document-example.md) | Example for Bundle |
| [CH-AllergyIntolerance-IPAG-Recommendation-Table-1](AllergyIntolerance-CH-AllergyIntolerance-IPAG-Recommendation-Table-1.md) | Example for AllergyIntolerance |
| [CH-AllergyIntolerance-MultipleManifestationEntries](AllergyIntolerance-CH-AllergyIntolerance-MultipleManifestationEntries.md) | Example for AllergyIntolerance - Allergy to shrimps with multiple manifestation entries |
| [CH-AllergyIntolerance-MultipleReactionEntries](AllergyIntolerance-CH-AllergyIntolerance-MultipleReactionEntries.md) | Example for AllergyIntolerance - Allergy to penicillin with multiple reation entries |
| [CH-AllergyIntolerance-Usecase-2](AllergyIntolerance-CH-AllergyIntolerance-Usecase-2.md) | Example for AllergyIntolerance |
| [CH-AllergyIntolerance-Usecase-3](AllergyIntolerance-CH-AllergyIntolerance-Usecase-3.md) | Example for AllergyIntolerance |
| [CH-AllergyIntolerance-Usecase-5](AllergyIntolerance-CH-AllergyIntolerance-Usecase-5.md) | Example for AllergyIntolerance |
| [CH-AllergyIntolerance-Usecase-6](AllergyIntolerance-CH-AllergyIntolerance-Usecase-6.md) | Example for AllergyIntolerance |
| [CH-AllergyIntolerance-Usecase-7](AllergyIntolerance-CH-AllergyIntolerance-Usecase-7.md) | Example for AllergyIntolerance |
| [CH-AllergyIntolerance-Usecase-8](AllergyIntolerance-CH-AllergyIntolerance-Usecase-8.md) | Example for AllergyIntolerance |
| [ElisabethBroennimannByBFH](Patient-ElisabethBroennimannByBFH.md) | Example for Patient |
| [ExAllergyIntolerance](AllergyIntolerance-ExAllergy.md) | Example AllergyIntolerance |
| [Familien Hausarzt](Practitioner-FamilienHausarzt.md) | Example for Practitioner |
| [Familien Hausarzt @ Hausarzt](PractitionerRole-FamilienHausarztAtHausarzt.md) | Example for PractitionerRole |

### Other 

These are resources that are used within this implementation guide that do not fit into one of the other categories.

| | |
| :--- | :--- |
| [Custodian](Organization-Custodian.md) | Example for Organization |
| [Hausarzt](Organization-Hausarzt.md) | Example for Organization |
| [Monika Wegmueller](Patient-MonikaWegmueller.md) | Example for Patient |
| [Monika Wegmueller as Information Recipient](Patient-MonikaWegmuellerRecipient.md) | Example for Patient |

