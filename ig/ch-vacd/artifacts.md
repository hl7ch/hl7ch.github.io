# Artifacts Summary - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* **Artifacts Summary**

## Artifacts Summary

This page provides a list of the FHIR artifacts defined as part of this implementation guide.

### Structures: Resource Profiles 

These define constraints on FHIR resources for systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [CH VACD AllergyIntolerance](StructureDefinition-ch-vacd-allergyintolerances.md) | Definition of the AllergyIntolerance part for vaccination record documents. |
| [CH VACD Basic Immunization](StructureDefinition-ch-vacd-basic-immunization.md) | Condition to declare Basic Immunization done by one single condition for the declared vaccinations according to the ValueSet[Basic Immunization Codes](ValueSet-ch-vacd-basic-immunization-vs.md).This is for cases the patient does not have a vaccination certificate to declare, but knows that it is done. |
| [CH VACD Condition Profile (Abstract)](StructureDefinition-ch-vacd-condition.md) | Generic definition (abstract profile) of the condition for all documents except recommendation request or response. |
| [CH VACD Immunization](StructureDefinition-ch-vacd-immunization.md) | Definition of the immunization part for all documents. |
| [CH VACD Immunization Administration Composition](StructureDefinition-ch-vacd-composition-immunization-administration.md) | Definition of the composition for the immunization administration document. |
| [CH VACD Immunization Administration Document](StructureDefinition-ch-vacd-document-immunization-administration.md) | Definition of the bundle for the immunization administration document. This document is allowed to be used in context of the Swiss EPR but can also used in context of data exchange next to the Swiss EPR. |
| [CH VACD Immunization Recommendation Request MessageHeader](StructureDefinition-ch-vacd-recommendation-request-messageheader.md) | Definition of the MessageHeader for the immunization recommendation request. |
| [CH VACD Immunization Recommendation Response MessageHeader](StructureDefinition-ch-vacd-recommendation-response-messageheader.md) | Definition of the MessageHeader for the immunization recommendation response. |
| [CH VACD Immunization Recommendations](StructureDefinition-ch-vacd-immunization-recommendation.md) | Definition of the immunization recommendation part for all documents. |
| [CH VACD Laboratory And Serology](StructureDefinition-ch-vacd-laboratory-serology.md) | Definition of the labor and serology part for all documents. |
| [CH VACD Medical Problems](StructureDefinition-ch-vacd-medical-problems.md) | Definition of the medical problems part for all documents. |
| [CH VACD Medication For Immunization](StructureDefinition-ch-vacd-medication-for-immunization.md) | Definition of the medication for immunization. |
| [CH VACD Message Immunization Recommendation Request](StructureDefinition-ch-vacd-recommendation-request-message.md) | Definition of the bundle for the immunization recommendation request. |
| [CH VACD Message Immunization Recommendation Response](StructureDefinition-ch-vacd-recommendation-response-message.md) | Definition of the bundle for the immunization recommendation response. |
| [CH VACD Past Illness](StructureDefinition-ch-vacd-pastillnesses.md) | Definition of the past illness part for all documents. |
| [CH VACD Vaccination Record Document](StructureDefinition-ch-vacd-document-vaccination-record.md) | Definition of the bundle for the vaccination record document. This document is allowed to be used in context of the Swiss EPR but can also used in context of data exchange next to the Swiss EPR. |
| [CH VACD VaccinationRecord Composition](StructureDefinition-ch-vacd-composition-vaccination-record.md) | Definition of the composition for the vaccination record document. |

### Structures: Extension Definitions 

These define constraints on FHIR data types for systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [CH VACD Extension Immunization Medication Reference](StructureDefinition-ch-vacd-ext-immunization-medication-reference.md) | Extension to make a reference to the medication for the immunization. |
| [CH VACD Extension Merging Conflict Entry Reference](StructureDefinition-ch-vacd-ext-merging-conflict-entry-reference.md) | Extension to make a reference to an entry conflicting with other entries. |
| [CH VACD Extension verificationStatus](StructureDefinition-ch-vacd-ext-verification-status.md) | Extension to define the verificationStatus on resources not defining this field like Immunization and Observation.With the verificationStatus, practitioners can express that they verified the data added by a patient or related person. |

### Terminology: Value Sets 

These define sets of codes used by systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [Allergies and Intolerance values for Immunization](ValueSet-ch-vacd-immunization-allergyintolerances-vs.md) | The allergies and adverse reactions which have an influence on the immunization recommendations. |
| [Basic Immunization Codes](ValueSet-ch-vacd-basic-immunization-vs.md) | The codes for declaring basic immunization. |
| [Entry Conflict Codes](ValueSet-ch-vacd-entry-conflict-vs.md) | The codes for declaring document entry conflicts |
| [Laboratory Serology for Immunization](ValueSet-ch-vacd-laboratory-serology-vs.md) | Laboratory Serology for immunization |
| [Swiss Medical Risks For Immunizations](ValueSet-ch-vacd-risks-medical-vs.md) | The medical risks used in Switzerland. |
| [Swiss Occupation Risks For Immunizations](ValueSet-ch-vacd-risks-occupation-vs.md) | The occupation exposition risks used in Switzerland. |
| [Swiss Preillness Risks For Immunizations](ValueSet-ch-vacd-risks-preillness-vs.md) | The preillness risks used in Switzerland. |
| [Swiss Risks For Immunizations](ValueSet-ch-vacd-risks-vs.md) | The medical and exposition risks used in Switzerland. |
| [Swiss Social Risks For Immunizations](ValueSet-ch-vacd-risks-social-vs.md) | The social exposition risks used in Switzerland. |
| [Verification Status Codes](ValueSet-ch-vacd-verification-status-vs.md) | Definition the verification status codes for the extension ch-vacd-ext-verification-status. |

### Terminology: Code Systems 

These define new code systems used by systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [Basic Immunization codes](CodeSystem-ch-vacd-basic-immunization-cs.md) | Clinical Decision Support Event |
| [CDS Event](CodeSystem-ch-vacd-clinical-decision-support-event-cs.md) | Clinical Decision Support Event |
| [Entry Conflict Code System](CodeSystem-ch-vacd-entry-conflict-cs.md) | The entry conflict codesystem |
| [Swiss Exposure Risks Codesystem](CodeSystem-ch-vacd-exposure-risks-cs.md) | Exposure risks codes available in Switzerland. |

### Example: Example Instances 

These are example instances that show what data produced and consumed by systems conforming with this implementation guide might look like.

| | |
| :--- | :--- |
| [1.1 Immunization Administration](Bundle-1-1-ImmunizationAdministration.md) | Example for Bundle Immunization Administration |
| [1.3 Vaccination Record](Bundle-1-3-VaccinationRecord.md) | Example for Bundle Vaccination Record |
| [1.4 Immunization Recommendation Request](Bundle-1-4-ImmunizationRecommendationRequest.md) | Example for Bundle Immunization Recommendation Request |
| [1.5 Immunization Recommendation Response](Bundle-1-5-ImmunizationRecommendationResponse.md) | Example for Bundle Immunization Recommendation Response |
| [10.1 ImmunizationRecommendation](ImmunizationRecommendation-10-1-ImmunizationRecommendation.md) | Example ImmunizationRecommendation |
| [10.2 ImmunizationRecommendation](ImmunizationRecommendation-10-2-ImmunizationRecommendation.md) | Example ImmunizationRecommendation |
| [10.3 ImmunizationRecommendation (Recommendation Request/Response)](ImmunizationRecommendation-10-3-ImmunizationRecommendation.md) | Example ImmunizationRecommendation for Recommendation Request/Response |
| [10.4 ImmunizationRecommendation (Recommendation Request/Response)](ImmunizationRecommendation-10-4-ImmunizationRecommendation.md) | Example ImmunizationRecommendation for Recommendation Request/Response |
| [11.1 AllergyIntolerance](AllergyIntolerance-11-1-AllergyIntolerance.md) | Example AllergyIntolerance |
| [11.2 AllergyIntolerance](AllergyIntolerance-11-2-AllergyIntolerance.md) | Example AllergyIntolerance |
| [11.3 AllergyIntolerance (Recommendation Request/Response)](AllergyIntolerance-11-3-AllergyIntolerance.md) | Example AllergyIntolerance for Recommendation Request/Response |
| [11.4 AllergyIntolerance (Recommendation Request/Response)](AllergyIntolerance-11-4-AllergyIntolerance.md) | Example AllergyIntolerance for Recommendation Request/Response |
| [2.1 Composition Immunization Administration](Composition-2-1-ImmunizationAdministrationComposition.md) | Example for Composition Immunization Administration |
| [2.3 Composition Vaccination Record](Composition-2-3-VaccinationRecordComposition.md) | Example for Composition Vaccination Record |
| [2.4 Immunization Recommendation Request MessageHeader](MessageHeader-2-4-ImmunizationRecommendationRequestMessageHeader.md) | Example for Bundle Immunization Recommendation Request MessageHeader |
| [2.4 Immunization Recommendation Response MessageHeader](MessageHeader-2-5-ImmunizationRecommendationResponseMessageHeader.md) | Example for Bundle Immunization Recommendation Response MessageHeader |
| [3.2 Patient](Patient-3-2-Patient.md) | Example for Patient in Immunization Recommendation Request/Response |
| [4.1 Practitioner](Practitioner-4-1-Practitioner.md) | Example for Practitioner for all documents except Recommendation Request/Response |
| [4.4 Practitioner (Recommendation Request/Response)](Practitioner-4-4-Practitioner.md) | Example for Practitioner in Immunization Recommendation Request/Response |
| [4.5 Practitioner (Recommendation Request/Response)](Practitioner-4-5-Practitioner.md) | Example for Practitioner in Immunization Recommendation Request/Response |
| [4.6 Practitioner (Recommendation Request/Response)](Practitioner-4-6-Practitioner.md) | Example for Practitioner in Immunization Recommendation Request/Response |
| [5.4 Organization (Recommendation Request/Response)](Organization-5-4-Organization.md) | Example for Organization in Immunization Recommendation Request/Response |
| [5.5 Organization (Recommendation Request/Response)](Organization-5-5-Organization.md) | Example for Organization in Immunization Recommendation Request/Response |
| [5.6 Organization (Recommendation Request/Response)](Organization-5-6-Organization.md) | Example for Organization in Immunization Recommendation Request/Response |
| [6.4 Practitioner Role (Recommendation Request/Response)](PractitionerRole-6-4-PractitionerRole.md) | Example for Practitioner Role in Immunization Recommendation Request |
| [6.5 Practitioner Role (Recommendation Request/Response)](PractitionerRole-6-5-PractitionerRole.md) | Example for Practitioner Role in Immunization Recommendation Request |
| [6.6 Practitioner Role (Recommendation Request/Response)](PractitionerRole-6-6-PractitionerRole.md) | Example for Practitioner Role in Immunization Recommendation Request |
| [7.1 Immunization](Immunization-7-1-Immunization.md) | Example for Immunization for all documents except Recommendation Request/Response |
| [7.1 Immunization](Immunization-7-1-Immunization2.md) | Example for Immunization with absent reason |
| [7.10 Immunization (Recommendation Request/Response)](Immunization-7-10-Immunization.md) | Example forImmunization for Recommendation Request/Response |
| [7.11 Immunization (Recommendation Request/Response)](Immunization-7-11-Immunization.md) | Example forImmunization for Recommendation Request/Response |
| [7.12 Immunization](Immunization-7-12-Immunization.md) | Example forImmunization for occurrenceString |
| [7.2 Immunization](Immunization-7-2-Immunization.md) | Example forImmunization for all documents except Recommendation Request/Response |
| [7.3 Immunization](Immunization-7-3-Immunization.md) | Example forImmunization for all documents except Recommendation Request/Response |
| [7.4 Immunization](Immunization-7-4-Immunization.md) | Example forImmunization for all documents except Recommendation Request/Response |
| [7.5 Immunization](Immunization-7-5-Immunization.md) | Example forImmunization for all documents except Recommendation Request/Response |
| [7.6 Immunization](Immunization-7-6-Immunization.md) | Example forImmunization for all documents except Recommendation Request/Response |
| [7.7 Immunization (Recommendation Request/Response)](Immunization-7-7-Immunization.md) | Example forImmunization for Recommendation Request/Response |
| [7.8 Immunization (Recommendation Request/Response)](Immunization-7-8-Immunization.md) | Example forImmunization for Recommendation Request/Response |
| [7.9 Immunization (Recommendation Request/Response)](Immunization-7-9-Immunization.md) | Example forImmunization for Recommendation Request/Response |
| [8.2 Condition (Medical Problems)](Condition-8-2-Condition.md) | Example Condition for medical problems |
| [8.3 Condition (Medical Problems)](Condition-8-3-Condition.md) | Example Condition for medical problems |
| [8.4 Condition (Past Illnesses)](Condition-8-4-Condition.md) | Example Condition for past illnesses |
| [8.6 Condition (Medical Problems for Recommendation Request/Response)](Condition-8-6-Condition.md) | Example Condition for medical problems for Recommendation Request/Response |
| [8.7 Condition (Medical Problems for Recommendation Request/Response)](Condition-8-7-Condition.md) | Example Condition for medical problems for Recommendation Request/Response |
| [8.8 Condition (Past Illnesses for Recommendation Request/Response)](Condition-8-8-Condition.md) | Example Condition for past illnesses for Recommendation Request/Response |
| [8.9 Condition (Past Illnesses)](Condition-8-9-Condition.md) | Example Condition for past illnesses |
| [9.1 Observation (Labor and Serology)](Observation-9-1-Observation.md) | Example Observation for labor and serology |
| [9.2 Observation (Labor and Serology for Recommendation Request/Response)](Observation-9-2-Observation.md) | Example Observation for labor and serology for Recommendation Request/Response |
| [Administration Document Composition](Composition-B-D1-HCP1-C1-Composition.md) | Example for Composition Immunization Administration |
| [Administration Document Composition](Composition-B-D2-HCP1-C1-Composition.md) | Example for Composition Immunization Administration |
| [Administration Document Composition](Composition-B-D3-HCP1-C1-Composition.md) | Example for Composition Immunization Administration |
| [Administration Document Composition](Composition-B-D4-HCP1-C1-Composition.md) | Example for Composition Immunization Administration |
| [Administration Document Composition](Composition-B-D5-HCP1-C1-Composition.md) | Example for Composition Immunization Administration |
| [Administration Document Composition](Composition-B-D6-HCP1-C1-Composition.md) | Example for Composition Immunization Administration |
| [Administration Document Composition](Composition-C-D3-HCP1-C1-Composition.md) | Example for Composition Immunization Administration |
| [Administration Document Composition](Composition-C-D6-P-C1-Composition.md) | Example for Composition Immunization Administration |
| [Administration Document Composition](Composition-C-D7-HCP1-C1-Composition.md) | Example for Composition Immunization Administration |
| [Administration Document Composition](Composition-D-D1-HCP1-C1-Composition.md) | Example for Composition Immunization Administration |
| [Administration Document Composition](Composition-D-D2-HCP2-C2-Composition.md) | Example for Composition Immunization Administration |
| [Administration Document Composition](Composition-D-D3-HCP1-C1-Composition.md) | Example for Composition Immunization Administration |
| [Administration Document Composition](Composition-D-D4-HCP2-C2-Composition.md) | Example for Composition Immunization Administration |
| [Administration Document Composition](Composition-D-D5-HCP1-C1-Composition.md) | Example for Composition Immunization Administration |
| [Administration Document Composition](Composition-D-D6-HCP2-C2-Composition.md) | Example for Composition Immunization Administration |
| [Administration Document Composition](Composition-D-D7-HCP3-C1-Composition.md) | Example for Composition Immunization Administration |
| [Administration Document Composition](Composition-E-D1-HCP1-C1-Composition.md) | Example for Composition Immunization Administration |
| [Administration Document Composition](Composition-E-D2-HCP1-C1-Composition.md) | Example for Composition Immunization Administration |
| [Administration Document Composition](Composition-F-D5-HCP1-C1-Composition.md) | Example for Composition Immunization Administration |
| [Administration Document Composition](Composition-F-D6-HCP1-C1-Composition.md) | Example for Composition Immunization Administration |
| [Aggregated Document Composition](Composition-RDA01-Composition.md) | Example for Composition Vaccination Record |
| [Aggregated Document Composition](Composition-RDA01-Composition-b.md) | Example for Composition Vaccination Record |
| [Aggregated Document Composition](Composition-RDA02-Composition.md) | Example for Composition Vaccination Record |
| [Aggregated Document Composition](Composition-RDA02-Composition-b.md) | Example for Composition Vaccination Record |
| [Aggregated Document Composition](Composition-RDA03-Composition.md) | Example for Composition Vaccination Record |
| [Aggregated Document Composition](Composition-RDA03-Composition-b.md) | Example for Composition Vaccination Record |
| [Aggregated Document Composition](Composition-RDA04-Composition.md) | Example for Composition Vaccination Record |
| [Aggregated Document Composition](Composition-RDA04-Composition-b.md) | Example for Composition Vaccination Record |
| [Aggregated Document Composition](Composition-RDB01-Composition.md) | Example for Composition Vaccination Record |
| [Aggregated Document Composition](Composition-RDB01-Composition-b.md) | Example for Composition Vaccination Record |
| [Aggregated Document Composition](Composition-RDB02-Composition.md) | Example for Composition Vaccination Record |
| [Aggregated Document Composition](Composition-RDB02-Composition-b.md) | Example for Composition Vaccination Record |
| [Aggregated Document Composition](Composition-RDB03-Composition.md) | Example for Composition Vaccination Record |
| [Aggregated Document Composition](Composition-RDB03-Composition-b.md) | Example for Composition Vaccination Record |
| [Aggregated Document Composition](Composition-RDB04-Composition.md) | Example for Composition Vaccination Record |
| [Aggregated Document Composition](Composition-RDB04-Composition-b.md) | Example for Composition Vaccination Record |
| [Aggregated Document Composition](Composition-RDB05-Composition.md) | Example for Composition Vaccination Record |
| [Aggregated Document Composition](Composition-RDB05-Composition-b.md) | Example for Composition Vaccination Record |
| [Aggregated Document Composition](Composition-RDC01-Composition.md) | Example for Composition Vaccination Record |
| [Aggregated Document Composition](Composition-RDC01-Composition-b.md) | Example for Composition Vaccination Record |
| [Aggregated Document Composition](Composition-RDC02-Composition.md) | Example for Composition Vaccination Record |
| [Aggregated Document Composition](Composition-RDC02-Composition-b.md) | Example for Composition Vaccination Record |
| [Aggregated Document Composition](Composition-RDC03-Composition.md) | Example for Composition Vaccination Record |
| [Aggregated Document Composition](Composition-RDC03-Composition-b.md) | Example for Composition Vaccination Record |
| [Aggregated Document Composition](Composition-RDC04-Composition.md) | Example for Composition Vaccination Record |
| [Aggregated Document Composition](Composition-RDC04-Composition-b.md) | Example for Composition Vaccination Record |
| [Aggregated Document Composition](Composition-RDC05-Composition.md) | Example for Composition Vaccination Record |
| [Aggregated Document Composition](Composition-RDC05-Composition-b.md) | Example for Composition Vaccination Record |
| [Aggregated Document Composition](Composition-RDD01-Composition.md) | Example for Composition Vaccination Record |
| [Aggregated Document Composition](Composition-RDD01-Composition-b.md) | Example for Composition Vaccination Record |
| [Aggregated Document Composition](Composition-RDD02-Composition.md) | Example for Composition Vaccination Record |
| [Aggregated Document Composition](Composition-RDD02-Composition-b.md) | Example for Composition Vaccination Record |
| [Aggregated Document Composition](Composition-RDD03-Composition.md) | Example for Composition Vaccination Record |
| [Aggregated Document Composition](Composition-RDD03-Composition-b.md) | Example for Composition Vaccination Record |
| [Aggregated Document Composition](Composition-RDE01-Composition.md) | Example for Composition Vaccination Record |
| [Aggregated Document Composition](Composition-RDE01-Composition-b.md) | Example for Composition Vaccination Record |
| [Aggregated Document Composition](Composition-RDF01-Composition.md) | Example for Composition Vaccination Record |
| [Aggregated Document Composition](Composition-RDF01-Composition-b.md) | Example for Composition Vaccination Record |
| [Aggregated Document Composition](Composition-RDF02-Composition.md) | Example for Composition Vaccination Record |
| [Aggregated Document Composition](Composition-RDF02-Composition-b.md) | Example for Composition Vaccination Record |
| [Aggregated Document Composition](Composition-RDF03-Composition.md) | Example for Composition Vaccination Record |
| [Aggregated Document Composition](Composition-RDF03-Composition-b.md) | Example for Composition Vaccination Record |
| [CDSS Organization](Organization-CDSS-Organization.md) | Example for Organization for CDS Service |
| [Document 1 GFP Gemeinschaft Composition](Composition-F-D1-HCP1-C1-Composition.md) | Example for Composition Immunization Administration |
| [Document 1 GFP Gemeinschaft Composition](Composition-F-D2-HCP1-C1-Composition.md) | Example for Composition Immunization Administration |
| [Document 1 GFP Gemeinschaft Composition](Composition-F-D3-HCP1-C1-Composition.md) | Example for Composition Immunization Administration |
| [Document 1 GFP Gemeinschaft Composition](Composition-F-D4-HCP1-C1-Composition.md) | Example for Composition Immunization Administration |
| [Document 2 GFP Gemeinschaft Composition](Composition-A-D2-HCP1-C1-Composition.md) | Example for Composition Immunization Administration |
| [Document 2 HCP1 Community 1 Composition](Composition-C-D2-HCP1-C1-Composition.md) | Example for Composition Immunization Administration to fix Immunization entry. |
| [Document 3 GFP Gemeinschaft 2 Composition](Composition-A-D3-HCP2-C2-Composition.md) | Example for Composition Immunization Administration |
| [Document 4 GFP Gemeinschaft 2 Composition](Composition-A-D4-HCP2-C2-Composition.md) | Example for Composition Immunization Administration |
| [Document 4 GFP Gemeinschaft 2 Composition](Composition-C-D4-HCP2-C2-Composition.md) | Example for Composition Immunization Administration |
| [Exposition Risk "Bat researcher or guard" (Condition)](Condition-TCC04-EXPRISK1.md) | Example Condition for expositionrisk "Bat researcher or guard" |
| [Exposition Risk "Bat researcher or guard" (Condition)](Condition-TCC04-EXPRISK2.md) | Example Condition for canceling expositionrisk "FLEDERMAUSFORSCHER_UND_SCHUETZER'" |
| [Exposition Risk "Bat researcher or guard" (Condition)](Condition-TCC04-EXPRISK3.md) | Example Condition for canceling expositionrisk "Bat researcher or guard" |
| [Exposition Risk Worker in Healthcare (Condition)](Condition-TCB03-EXPRISK1.md) | Example Condition for expositionrisk Worker in Healthcare |
| [Exposition Risk Worker in Healthcare (Condition)](Condition-TCB03-EXPRISK1-2.md) | Example Condition for expositionrisk Worker in Healthcare |
| [Exposition Risk Worker in Healthcare (Condition)](Condition-TCC03-EXPRISK1.md) | Example Condition for expositionrisk Worker in Healthcare |
| [Exposition Risk Worker in Healthcare (Condition)](Condition-TCD02-EXPRISK1.md) | Example Condition for expositionrisk Worker in Healthcare |
| [Exposition Risk Worker in Healthcare (Condition)](Condition-TCD02-EXPRISK1-2.md) | Example Condition for expositionrisk Worker in Healthcare |
| [Exposition Risk Worker in Healthcare (Condition)](Condition-TCD03-EXPRISK1.md) | Example Condition for expositionrisk Worker in Healthcare |
| [Exposition Risk Worker in Healthcare (Condition)](Condition-TCD03-EXPRISK1-2.md) | Example Condition for expositionrisk Worker in Healthcare |
| [Exposition Risk Worker in Healthcare (Condition)](Condition-TCD03-EXPRISK2.md) | Example Condition for expositionrisk Worker in Healthcare |
| [Exposition Risk Worker in Healthcare (Condition)](Condition-TCD03-EXPRISK2-2.md) | Example Condition for expositionrisk Worker in Healthcare |
| [Exposition Risk Worker in Healthcare (Condition)](Condition-TCD03-EXPRISK3.md) | Example Condition for expositionrisk Worker in Healthcare |
| [Exposition Risk Worker in Healthcare (Condition)](Condition-TCD03-EXPRISK3-2.md) | Example Condition for expositionrisk Worker in Healthcare |
| [GFP Document 6 Stammgemeinschaft Composition](Composition-A-D6-HCP1-C1-Composition.md) | Example for Composition Immunization Administration |
| [Laboratory And Serology Labresult](Observation-TCB04-LABRES1.md) | Example Observation for Hepatitis B virus surface Ab |
| [Medical Risk Pregnancy (Condition)](Condition-TCB05-EXPRISK2.md) | Example Condition for expositionrisk Worker in Healthcare |
| [Patient Document 1 Stammgemeinschaft Composition](Composition-A-D1-P-C1-Composition.md) | Example for Composition Immunization Administration |
| [Patient Document 1 Stammgemeinschaft Composition](Composition-C-D1-P-C1-Composition.md) | Example for Composition Immunization Administration |
| [Patient Document 5 Stammgemeinschaft Composition](Composition-A-D5-P-C1-Composition.md) | Example for Composition Immunization Administration |
| [TC Device Aggregator](Device-TC-Device-Aggregator.md) | A Device example representing am aggregation service |
| [TC HCP1 C1](Practitioner-TC-HCP1-C1.md) | Testcase practitioner HCP1 of C1 |
| [TC HCP2 G2](Practitioner-TC-HCP2-C2.md) | Testcase practitione HCP2 of C2 |
| [TC HCP3 C1](Practitioner-TC-HCP3-C1.md) | Testcase practitioner HCP3 of C1 |
| [TC Medication for Immunization (Boostrix)](Medication-TC-IMMUN-MEDIC-BOOSTRIX.md) | Testcase example of medication for immunization extension Boostrix |
| [TC Medication for Immunization (Gardasil) against HPV](Medication-TC-IMMUN-MEDIC-GARDASIL9.md) | Testcase example of medication for immunization extension Gardasil® 9 |
| [TC Medication for Immunization (Priorix) against MMR](Medication-TC-IMMUN-MEDIC-PRIORIX.md) | Testcase example of medication for immunization extension Priorix |
| [TC02 Immunization by GFP](Immunization-TCA02-IMMUN4-HCP2-ORG2-ROLE.md) | Testcase 2 example of immunization from GFP for second dose hepatite A |
| [TC1 Immunization by HCP1](Immunization-TCA01-IMMUN2-HCP1-ORG1-ROLE.md) | Testcase 1 example of immunization from HCP1 |
| [TC1 Immunization by HCP1](Immunization-TCB01-IMMUN1.md) | Testcase D01 example of immunization against Central European encephalitis (disorder) |
| [TC1 Immunization by HCP1](Immunization-TCB01-IMMUN2.md) | Testcase D01 example of immunization against Tetanus, Pertussis, Diphtheria |
| [TC1 Immunization by HCP1](Immunization-TCB05-IMMUN1.md) | Testcase D01 example of immunization against Central European encephalitis (disorder) |
| [TC1 Immunization by HCP1](Immunization-TCB05-IMMUN2.md) | Testcase D01 example of immunization against Tetanus, Pertussis, Diphtheria |
| [TC1 Immunization by HCP1](Immunization-TCD01-IMMUN1.md) | Testcase D01 example of immunization against Central European encephalitis (disorder) |
| [TC1 Immunization by HCP1](Immunization-TCD01-IMMUN2.md) | Testcase D01 example of immunization against Tetanus, Pertussis, Diphtheria |
| [TC1 Immunization by HCP1](Immunization-TCD01-IMMUN2-2.md) | Testcase D01 example of immunization against Tetanus, Pertussis, Diphtheria |
| [TC1 Immunization by HCP1](Immunization-TCE01-IMMUN1-de.md) | Testcase D01 example of immunization against Central European encephalitis (disorder) |
| [TC1 Immunization by HCP1](Immunization-TCE01-IMMUN1-fr.md) | Testcase D01 example of immunization against Central European encephalitis (disorder) |
| [TC1 Immunization by HCP1](Immunization-TCE01-IMMUN2-de.md) | Testcase D01 example of immunization against Tetanus, Pertussis, Diphtheria |
| [TC1 Immunization by HCP1](Immunization-TCE01-IMMUN2-fr.md) | Testcase D01 example of immunization against Tetanus, Pertussis, Diphtheria |
| [TC1 Immunization by HCP2](Immunization-TCA01-IMMUN3-HCP2-ORG2-ROLE.md) | Testcase 1 example of immunization from HCP2 |
| [TC1 Immunization by HCP2](Immunization-TCD01-IMMUN3.md) | Testcase D01 example of immunization against Tetanus, Pertussis, Diphtheria |
| [TC1 Immunization by HCP2](Immunization-TCD01-IMMUN3-2.md) | Testcase D01 example of immunization against Tetanus, Pertussis, Diphtheria |
| [TC1 Immunization by HCP2](Immunization-TCD01-IMMUN4.md) | Testcase D01 example of immunization against MMR |
| [TC1 Immunization by HCP2](Immunization-TCD01-IMMUN5.md) | Testcase D01 example of immunization against HPV |
| [TC1 Immunization by Patient](Immunization-TCA03-IMMUN5-patient.md) | Testcase 3 example of immunization against Central European encephalitis (disorder) from patient |
| [TC1 Immunization by Patient](Immunization-TCA04-IMMUN5-patient-val-gfp.md) | Testcase 3 example of immunization against Central European encephalitis (disorder) from patient |
| [TC1 Medication for Immunization by patient](Medication-TC-IMMUN-MEDIC-FSMEIMMCC.md) | Testcase 1 example of medication for immunization extension |
| [TC1 Medication for Immunization by patient](Medication-TC-IMMUN-MEDIC-HAVRIX1440.md) | Testcase 1 example of medication for immunization extension |
| [TCA1 Immunization by patient](Immunization-TCA01-IMMUN1-patient.md) | Testcase A 1 example of immunization |
| [TCB01 AllergyIntolerance](AllergyIntolerance-TCB01-ALLINTO1.md) | Testcase B 1 example of allergyintolerance to typhoid vaccine. |
| [TCC1 Immunization by HCP2 corrected by HCP1](Immunization-TCC02-IMMUN3-HCP1-ORG1-ROLE.md) | Testcase C 02 example of correction of immunization of HCP2 by HCP1 |
| [TCC1 Immunization by HCP2 corrected by HCP1](Immunization-TCC02-IMMUN4-HCP1-ORG1-ROLE.md) | Testcase C 02 example of correction of immunization of HCP2 by HCP1 |
| [TCC1 Immunization by patient](Immunization-TCC01-IMMUN1-patient.md) | Testcase C 1 example of immunization |
| [TCC1 Immunization by patient](Immunization-TCC01-IMMUN2-patient.md) | Testcase C 1 example of immunization |
| [TCF02 AllergyIntolerance 1](AllergyIntolerance-TCF02-ALLINTO1.md) | Testcase F2: Add comment (note) to an existing AllergyIntolerance |
| [TCF02 AllergyIntolerance 2](AllergyIntolerance-TCF02-ALLINTO2.md) | Testcase F 2: Add comment (note) to an existing AllergyIntolerance |
| [TCF02 AllergyIntolerance 3](AllergyIntolerance-TCF02-ALLINTO3.md) | Testcase F 2: Add comment (note) to an existing AllergyIntolerance |
| [TCF1 Immunization 1](Immunization-TCF01-IMMUN1.md) | Testcase F 1 example of immunization |
| [TCF1 Immunization 2](Immunization-TCF01-IMMUN2.md) | Testcase F 1 example of immunization with added note |
| [TCF1 Immunization 3](Immunization-TCF01-IMMUN3.md) | Testcase F 1 example of immunization with added note |
| [TC_Device Aggregator Location](Location-TC-Device-Aggregator-Location.md) | The location of the device. |
| [Test Case A 01: Aggregated Dokument (RDA01)](Bundle-RDA01.md) | Test Case A 01: Patient hat drei Impfdokumente in zwei unterschiedlichen Gemeinschaften (eines davon vom Patient selbst erfasst). Dies ist das vom Patienten erstellte Dokument |
| [Test Case A 01: Aggregated Dokument (RDA01)](Bundle-RDA01b.md) | Test Case A 01: Patient hat drei Impfdokumente in zwei unterschiedlichen Gemeinschaften (eines davon vom Patient selbst erfasst). Dies ist das vom Patienten erstellte Dokument |
| [Test Case A 01: GFP Dokument (A_D2_HCP1_C1)](Bundle-A-D2-HCP1-C1.md) | Test Case A 01: Patient hat drei Impfdokumente in zwei unterschiedlichen Gemeinschaften (eines davon vom Patient selbst erfasst). Dies ist das vom Patienten erstellte Dokument |
| [Test Case A 01: GFP Dokument (A_D3_HCP2_C2)](Bundle-A-D3-HCP2-C2.md) | Test Case A 01: Patient hat drei Impfdokumente in zwei unterschiedlichen Gemeinschaften (eines davon vom Patient selbst erfasst). Dies ist das vom Patienten erstellte Dokument |
| [Test Case A 01: Patient Dokument (A-D1-P_C1)](Bundle-A-D1-P-C1.md) | Test Case A 01: Patient hat drei Impfdokumente in zwei unterschiedlichen Gemeinschaften (eines davon vom Patient selbst erfasst). Dies ist das vom Patienten erstellte Dokument |
| [Test Case A 02: Aggregated Dokument (RDA02)](Bundle-RDA02.md) | Test Case A 02: GFP trägt zweite Dosis einer Impfung (Hepatitis A) ein |
| [Test Case A 02: Aggregated Dokument (RDA02)](Bundle-RDA02b.md) | Test Case A 02: GFP trägt zweite Dosis einer Impfung (Hepatitis A) ein |
| [Test Case A 02: GFP aus andere Gemeinschaft trägt zweite Dosis einer Impfung (Hepatitis A) ein](Bundle-A-D4-HCP2-C2.md) | Test Case A 02: GFP trägt zweite Dosis einer Impfung (Hepatitis A) ein. |
| [Test Case A 03: Aggregated Dokument (RDA03)](Bundle-RDA03.md) | Test Case A 03: Patient trägt zweite Dosis einer Impfung (FSME) ein. |
| [Test Case A 03: Aggregated Dokument (RDA03)](Bundle-RDA03b.md) | Test Case A 03: Patient trägt zweite Dosis einer Impfung (FSME) ein. |
| [Test Case A 03: Patient Dokument 5 (D5_P_C1)](Bundle-A-D5-P-C1.md) | Test Case A 03: Patient trägt zweite Dosis einer Impfung (FSME) ein |
| [Test Case A 04: Aggregated Dokument (RDA04)](Bundle-RDA04.md) | Test Case A 04: GFP validiert die Impfung (FSME)(Dok6) welche vom Patienten eingetragen wurde (Dok5) |
| [Test Case A 04: Aggregated Dokument (RDA04)](Bundle-RDA04b.md) | Test Case A 04: GFP validiert die Impfung (FSME)(Dok6) welche vom Patienten eingetragen wurde (Dok5) |
| [Test Case A 04: GFP Dokument (A_D6_HCP1_C1)](Bundle-A-D6-HCP1-C1.md) | Test Case A 04: GFP validiert die Impfung (FSME)(Dok6) welche vom Patienten eingetragen wurde (Dok5) |
| [Test Case B 01: Document HCP1 with AllergyIntolerance Entry](Bundle-B-D2-HCP1-C1.md) | Test Case B 01: ImmunizationAdministration document created by HCP1 for Patient with AllergyIntolerance entry. |
| [Test Case B 01: Document HCP1 with Immunization Entries](Bundle-B-D1-HCP1-C1.md) | Test Case B 01: ImmunizationAdministration document created by HCP1 for Patient with Immunization Entries. |
| [Test Case B 01: Resulting Document TC B 1 (RDB01)](Bundle-RDB01.md) | Test Case B 01: VaccinationRecord document created as merging result with immunization and allergyintolerance entries. |
| [Test Case B 01: Resulting Document TC B 1 (RDB01)](Bundle-RDB01b.md) | Test Case B 01: VaccinationRecord document created as merging result with immunization and allergyintolerance entries. |
| [Test Case B 02: Document HCP1 with Past Illness Entries](Bundle-B-D3-HCP1-C1.md) | Test Case B 02: ImmunizationAdministration document created by HCP1 for patient with past illness entries. |
| [Test Case B 02: Resulting Document TC B 2 (RDB02)](Bundle-RDB02.md) | Test Case B 02: VaccinationRecord document created as merging result with immunization and past illness entries. |
| [Test Case B 02: Resulting Document TC B 2 (RDB02)](Bundle-RDB02b.md) | Test Case B 02: VaccinationRecord document created as merging result with immunization and past illness entries. |
| [Test Case B 03: Document HCP1 with Medical Problem Entries](Bundle-B-D4-HCP1-C1.md) | Test Case B 03: ImmunizationAdministration document created by HCP1 for patient with medical problem entry. |
| [Test Case B 03: Resulting Document TC B 3 (RDB03)](Bundle-RDB03.md) | Test Case B 03: VaccinationRecord document created as merging result with immunization and exposition risk entries. |
| [Test Case B 03: Resulting Document TC B 3 (RDB03)](Bundle-RDB03b.md) | Test Case B 03: VaccinationRecord document created as merging result with immunization and exposition risk entries. |
| [Test Case B 04: Document HCP1 with Laboratory Entries](Bundle-B-D5-HCP1-C1.md) | Test Case B 04: ImmunizationAdministration document created by HCP1 for patient with laboratory entry. |
| [Test Case B 04: Resulting Document TC B 4 (RDB04)](Bundle-RDB04.md) | Test Case B 04: VaccinationRecord document created as merging result with immunization and laboratory entries. |
| [Test Case B 04: Resulting Document TC B 4 (RDB04)](Bundle-RDB04b.md) | Test Case B 04: VaccinationRecord document created as merging result with immunization and laboratory entries. |
| [Test Case B 05: Document HCP1 with Medical Problem and Pregnancy Entries](Bundle-B-D6-HCP1-C1.md) | Test Case B 05: ImmunizationAdministration document created by HCP1 for patient with medical problem entry and pregnancy. |
| [Test Case B 05: Resulting Document TC B 4 (RDB05)](Bundle-RDB05.md) | Test Case B 05: VaccinationRecord document created as merging result with immunization, medical problem and pregnancy entries. |
| [Test Case B 05: Resulting Document TC B 4 (RDB05)](Bundle-RDB05b.md) | Test Case B 05: VaccinationRecord document created as merging result with immunization, medical problem and pregnancy entries. |
| [Test Case C 01: Aggregated Dokument (RDD01)](Bundle-RDC01.md) | Test Case C 01: Correction of own Immunization entry. |
| [Test Case C 01: Aggregated Dokument (RDD01)](Bundle-RDC01b.md) | Test Case C 01: Correction of own Immunization entry. |
| [Test Case C 01: Patient Dokument (C_D1_P_C1)](Bundle-C-D1-P-C1.md) | Test Case C 01: patient corrects an entry of its own document |
| [Test Case C 02: Aggregated Dokument (RDD01)](Bundle-RDC02.md) | Test Case C 02: Correction of foreign Immunization entry. |
| [Test Case C 02: Aggregated Dokument (RDD01)](Bundle-RDC02b.md) | Test Case C 02: Correction of foreign Immunization entry. |
| [Test Case C 02: GFP Dokument (C_D2_HCP1_C1)](Bundle-C-D2-HCP1-C1.md) | Test Case C 02: Example for Document Immunization Administration to fix Immunization entry. |
| [Test Case C 03: Document HCP1 with Medical Problem Entries](Bundle-C-D3-HCP1-C1.md) | Test Case C 03: ImmunizationAdministration document created by HCP1 for patient with medical problem entry. |
| [Test Case C 03: Resulting Document TC B 3 (RDC03)](Bundle-RDC03.md) | Test Case C 03: VaccinationRecord document created as merging result with immunization and exposition risk entries. |
| [Test Case C 03: Resulting Document TC B 3 (RDC03)](Bundle-RDC03b.md) | Test Case C 03: VaccinationRecord document created as merging result with immunization and exposition risk entries. |
| [Test Case C 04: Document 4 HCP Community 2 Composition](Composition-C-D5-HCP1-C1-Composition.md) | Example for Composition Immunization Administration |
| [Test Case C 04: Medical Problem "Bat researcher or guard"](Bundle-C-D4-HCP2-C2.md) | Test Case C 04: HCP2 enters medical problem (exposition risk) "Bat researcher or guard" |
| [Test Case C 04: Medical Problem "Bat researcher or guard"](Bundle-C-D5-HCP1-C1.md) | Test Case C 04: HCP2 enters medical problem (exposition risk) "Bat researcher or guard" |
| [Test Case C 04: Resulting Document TC C 4 (RDC04)](Bundle-RDC04.md) | Test Case C 04: VaccinationRecord document created as merging result with exposition risk entries. |
| [Test Case C 04: Resulting Document TC C 4 (RDC04)](Bundle-RDC04b.md) | Test Case C 04: VaccinationRecord document created as merging result with exposition risk entries. |
| [Test Case C 05: Document Patient with Past Illness Entries](Bundle-C-D6-P-C1.md) | Test Case C 05: ImmunizationAdministration document created by Patient with past illness entries. |
| [Test Case C 05: Document by HCP1 with Past Illness Entries](Bundle-C-D7-HCP1-C1.md) | Test Case C 05: ImmunizationAdministration document created by HCP1 with past illness entries. |
| [Test Case C 05: Resulting Document TC C 5 (RDC05)](Bundle-RDC05.md) | Test Case C 05: VaccinationRecord document created as merging result with past illness entry. |
| [Test Case C 05: Resulting Document TC C 5 (RDC05)](Bundle-RDC05b.md) | Test Case C 05: VaccinationRecord document created as merging result with past illness entry. |
| [Test Case D 01: Aggregated Dokument (RDD01)](Bundle-RDD01.md) | Test Case D 01: Error aggregating documents due to dupplicated Immunization entry. |
| [Test Case D 01: Aggregated Dokument (RDD01)](Bundle-RDD01b.md) | Test Case D 01: Error aggregating documents due to dupplicated Immunization entry. |
| [Test Case D 01: Document HCP1 with Immunization Entries (RDD01)](Bundle-D-D1-HCP1-C1.md) | Test Case D 01: ImmunizationAdministration document created by HCP1 for Patient with Immunization Entries. |
| [Test Case D 01: Document HCP1 with Immunization Entries (RDD01)](Bundle-D-D2-HCP2-C2.md) | Test Case D 01: ImmunizationAdministration document created by HCP1 for Patient with Immunization Entries. |
| [Test Case D 01: Document HCP1 with Immunization Entries (RDD01)](Bundle-D-D3-HCP1-C1.md) | Test Case D 01: ImmunizationAdministration document created by HCP1 for Patient with Immunization Entries. |
| [Test Case D 01: Document HCP1 with Immunization Entries (RDD01)](Bundle-D-D4-HCP2-C2.md) | Test Case D 01: ImmunizationAdministration document created by HCP1 for Patient with Immunization Entries. |
| [Test Case D 02: Aggregated Dokument (RDD02)](Bundle-RDD02.md) | Test Case D 01: Error aggregating documents due to dupplicated entries for immunization and medical risks. |
| [Test Case D 02: Aggregated Dokument (RDD02)](Bundle-RDD02b.md) | Test Case D 01: Error aggregating documents due to dupplicated entries for immunization and medical risks. |
| [Test Case D 03: Aggregated Dokument (RDD03)](Bundle-RDD03.md) | Test Case D 03: Error aggregating documents due to dupplicated entries for medical risks. |
| [Test Case D 03: Aggregated Dokument (RDD03)](Bundle-RDD03b.md) | Test Case D 03: Error aggregating documents due to dupplicated entries for medical risks. |
| [Test Case D 03: Document HCP1 with MedicalProblem Entries (RDD02)](Bundle-D-D5-HCP1-C1.md) | Test Case D 03: ImmunizationAdministration document created by HCP1 for Patient with Immunization Entries. |
| [Test Case D 03: Document HCP1 with MedicalProblem Entries (RDD02)](Bundle-D-D6-HCP2-C2.md) | Test Case D 03: ImmunizationAdministration document created by HCP1 for Patient with Immunization Entries. |
| [Test Case D 03: Document HCP1 with MedicalProblem Entries (RDD02)](Bundle-D-D7-HCP3-C1.md) | Test Case D 03: ImmunizationAdministration document created by HCP1 for Patient with Immunization Entries. |
| [Test Case E 01: Aggregated Dokument (RDE01)](Bundle-RDE01.md) | Test Case E 01: Aggregating documents with different languages merge to document in german language. |
| [Test Case E 01: Aggregated Dokument (RDE01)](Bundle-RDE01b.md) | Test Case E 01: Aggregating documents with different languages merge to document in german language. |
| [Test Case E 01: Document HCP1 with Immunization Entries English](Bundle-E-D2-HCP1-C1.md) | Test Case E 01: ImmunizationAdministration document created by HCP1 for Patient with Immunization entries in english language |
| [Test Case E 01: Document HCP1 with Immunization Entries French](Bundle-E-D1-HCP1-C1.md) | Test Case E 01: ImmunizationAdministration document created by HCP1 for Patient with Immunization entries in french language |
| [Test Case F 01: Add comment (note) to an existing AllergyIntolerance](Bundle-F-D3-HCP1-C1.md) | Test Case F 01: Add comment (note) to an existing AllergyIntolerance |
| [Test Case F 01: Add comment (note) to an existing AllergyIntolerance](Bundle-F-D4-HCP1-C1.md) | Test Case F 01: Add comment (note) to an existing AllergyIntolerance |
| [Test Case F 01: Add comment (note) to an existing Immunization](Bundle-F-D1-HCP1-C1.md) | Test Case F 01: Patient hat ein Impfdokumente mit einer Impfung Havrix 1440. |
| [Test Case F 01: Add comment (note) to an existing Immunization](Bundle-F-D2-HCP1-C1.md) | Test Case F 01: Arzt fügt ein Kommentar (note) zur impfung hinzu. |
| [Test Case F 01: Add comment (note) to an existing Immunization](Bundle-RDF01.md) | Test Case F 01: Arzt fügt ein Kommentar (note) zur impfung hinzu. |
| [Test Case F 01: Add comment (note) to an existing Immunization](Bundle-RDF01b.md) | Test Case F 01: Arzt fügt ein Kommentar (note) zur impfung hinzu. |
| [Test Case F 02: Add comment (note) to an existing AllergyIntolerance](Bundle-RDF02.md) | Test Case F 02: Add comment (note) to an existing AllergyIntolerance |
| [Test Case F 02: Add comment (note) to an existing AllergyIntolerance](Bundle-RDF02b.md) | Test Case F 02: Add comment (note) to an existing AllergyIntolerance |
| [Test Case F 03: Add comment (note) to an existing Condition(PastIllness)](Bundle-F-D5-HCP1-C1.md) | Test Case F 03: Add comment (note) to an existing Condition(PastIllness) |
| [Test Case F 03: Add comment (note) to an existing Condition(PastIllness)](Bundle-F-D6-HCP1-C1.md) | Test Case F 03: Add comment (note) to an existing Condition(PastIllness) |
| [Test Case F 03: Add comment (note) to an existing Condition(PastIllness)](Bundle-RDF03.md) | Test Case F 03: Add comment (note) to an existing Condition(PastIllness) |
| [Test Case F 03: Add comment (note) to an existing Condition(PastIllness)](Bundle-RDF03b.md) | Test Case F 03: Add comment (note) to an existing Condition(PastIllness) |
| [Undergone Illness Chickenpox (Past Illnesses)](Condition-TCB02-UNDILL1.md) | Example Condition for past illnesses chickenpox |
| [Undergone Illness Chickenpox (Past Illnesses)](Condition-TCB02-UNDILL1-2.md) | Example Condition for past illnesses chickenpox |
| [Undergone Illness Chickenpox (Past Illnesses)](Condition-TCC05-UNDILL1.md) | Example Condition for past illnesses chickenpox |
| [Undergone Illness Chickenpox (Past Illnesses)](Condition-TCC05-UNDILL2.md) | Example Condition for past illnesses chickenpox |
| [Undergone Illness Chickenpox (Past Illnesses)](Condition-TCC05-UNDILL3.md) | Example Condition for past illnesses chickenpox |
| [Undergone Illness Chickenpox (Past Illnesses)](Condition-TCD02-UNDILL1.md) | Example Condition for past illnesses chickenpox |
| [Undergone Illness Chickenpox (Past Illnesses)](Condition-TCD02-UNDILL1-2.md) | Example Condition for past illnesses chickenpox |
| [Undergone Illness Chickenpox (Past Illnesses)](Condition-TCE01-UNDILL1-de.md) | Example Condition for past illnesses chickenpox |
| [Undergone Illness Chickenpox (Past Illnesses)](Condition-TCF03-UNDILL1.md) | Example Condition for past illnesses chickenpox |
| [Undergone Illness Chickenpox (Past Illnesses)](Condition-TCF03-UNDILL2.md) | Example Condition for past illnesses chickenpox |
| [Undergone Illness Chickenpox (Past Illnesses)](Condition-TCF03-UNDILL3.md) | Example Condition for past illnesses chickenpox |

### Other 

These are resources that are used within this implementation guide that do not fit into one of the other categories.

| | |
| :--- | :--- |
| [13.1 Binary Original Representation (Immunization Certificate)](Binary-1-1-ImmunizationAdministration-Binary.md) | Example Binary for original represenation in section immunization certificate. |
| [13.1 Binary Original Representation (Immunization Certificate)](Binary-originalRepresentation1.md) | Example Binary for original represenation in section immunization certificate. |
| [3.1 Patient](Patient-3-1-Patient.md) | Example for Patient for all document except Recommendation Request/Response |
| [4.2 Practitioner](Practitioner-4-2-Practitioner.md) | Example for Practitioner for all documents except Recommendation Request/Response |
| [4.3 Practitioner](Practitioner-4-3-Practitioner.md) | Example for Practitioner for all documents except Recommendation Request/Response |
| [5.1 Organization](Organization-5-1-Organization.md) | Example for Organization for all documents except Recommendation Request/Response |
| [5.2 Organization](Organization-5-2-Organization.md) | Example for Organization for all documents except Recommendation Request/Response |
| [5.3 Organization](Organization-5-3-Organization.md) | Example for Organization for all documents except Recommendation Request/Response |
| [6.1 Practitioner Role](PractitionerRole-6-1-PractitionerRole.md) | Example for Practitioner Role for all documents except Recommendation Request/Response |
| [6.2 Practitioner Role](PractitionerRole-6-2-PractitionerRole.md) | Example for Practitioner Role for all documents except Recommendation Request/Response |
| [6.3 Practitioner Role](PractitionerRole-6-3-PractitionerRole.md) | Example for Practitioner Role for all documents except Recommendation Request/Response |
| [Manufacturer GlaxoSmithKline AG](Organization-TC-ORG-GSK.md) | Manufacturer GlaxoSmithKline AG |
| [Manufacturer GlaxoSmithKline AG](Organization-TC-ORG-MSD.md) | Manufacturer GlaxoSmithKline AG |
| [Manufacturer Pfizer AG](Organization-TC-ORG-PFIZER.md) | Manufacturer Pfizer AG |
| [TC HCP1 ORG1 Role Author in C1](PractitionerRole-TC-HCP1-ORG1-ROLE-author.md) | Testcase practitionerole HCP1 ORG1 as author |
| [TC HCP1 ORG1 Role Performer](PractitionerRole-TC-HCP1-ORG1-ROLE-performer.md) | Testcase practitionerole HCP1 ORG1 as performer in C1 |
| [TC HCP2 G2 ORG2 Role Author](PractitionerRole-TC-HCP2-ORG2-ROLE-author.md) | Testcase practitionerole HCP2 ORG2 as author in G2 |
| [TC HCP2 ORG2 Role Performer](PractitionerRole-TC-HCP2-ORG2-ROLE-performer.md) | Testcase practitionerole HCP2 ORG2 as performer |
| [TC HCP3 ORG1 Role Author in C1](PractitionerRole-TC-HCP3-ORG1-ROLE-author.md) | Testcase practitionerole HCP3 ORG1 as author |
| [TC HCP3 ORG1 Role Performer](PractitionerRole-TC-HCP3-ORG1-ROLE-performer.md) | Testcase practitionerole HCP3 ORG1 as performer in C1 |
| [TC Labor Organization](Organization-TC-ORG3.md) | Testcase labor organization for lab results |
| [TC Organization 1](Organization-TC-ORG1.md) | Testcase organization of HCP1 |
| [TC Organization 2](Organization-TC-ORG2.md) | Testcase organization of HCP2 in C2 |
| [TC patient 1](Patient-TC-patient.md) | Testcase: Example of patient |
| [TC patient 2](Patient-TC-patient2.md) | Testcase: Example of patient |

