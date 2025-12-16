# Artifacts Summary - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* **Artifacts Summary**

## Artifacts Summary

This page provides a list of the FHIR artifacts defined as part of this implementation guide.

### Structures: Resource Profiles 

These define constraints on FHIR resources for systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [CH Core AllergyIntolerance](StructureDefinition-ch-core-allergyintolerance.md) | Base definition of the AllergyIntolerance resource for use in Swiss specific use cases. |
| [CH Core Claim](StructureDefinition-ch-core-claim.md) | Base definition of the claim resource for the representation of a list of professional services (e.g. doctor's visit) and products (e.g. medication) that have been or are to be provided for a patient. The profile defines general basic elements that can occur in Swiss use cases. In Switzerland, there are external standards for administrative processes between service providers and payers (e.g. Forum Datenaustausch, SHIP, eCH), therefore see the corresponding mapping. |
| [CH Core Composition](StructureDefinition-ch-core-composition.md) | Base definition of the Composition resource for use in Swiss specific use cases. |
| [CH Core Composition EPR](StructureDefinition-ch-core-composition-epr.md) | Definition of the Composition resource for use in the context of the electronic patient record (EPR). |
| [CH Core Condition](StructureDefinition-ch-core-condition.md) | Base definition of the Condition resource for use in Swiss specific use cases. |
| [CH Core Coverage](StructureDefinition-ch-core-coverage.md) | Base definition of the Coverage resource for use in Swiss specific use cases. |
| [CH Core Document](StructureDefinition-ch-core-document.md) | Base definition of the Bundle resource for use in Swiss specific use cases. |
| [CH Core Document EPR](StructureDefinition-ch-core-document-epr.md) | Definition of the Bundle resource for use in the context of the electronic patient record (EPR). |
| [CH Core DocumentReference](StructureDefinition-ch-core-documentreference.md) | Base definition of the DocumentReference resource for use in Swiss specific use cases. |
| [CH Core EPR-Consent](StructureDefinition-ch-core-epr-consent.md) | Definition of the Consent resource to document in an external system (outside the EPR) that a patient has an electronic patient record (EPR) in Switzerland. This profile is used by healthcare organizations to track which patients have an EPR. Optionally, specific encounters can be excluded from EPR publication by referencing them in the provision element, documenting the patient's request that certain information should not be published to their EPR.Note: This profile is NOT used to manage actual consent conditions within the EPR itself - those are managed through proper PPQ Consents (see CH EPR FHIR IG). |
| [CH Core Encounter](StructureDefinition-ch-core-encounter.md) | Base definition of the Encounter resource for use in Swiss specific use cases. |
| [CH Core Immunization](StructureDefinition-ch-core-immunization.md) | Base definition of the Immunization resource for use in Swiss specific use cases. |
| [CH Core Immunization Recommendation](StructureDefinition-ch-core-immunization-recommendation.md) | Base definition of the ImmunizationRecommendation resource for use in Swiss specific use cases. |
| [CH Core Location](StructureDefinition-ch-core-location.md) | Base definition of the Location resource for use in Swiss specific use cases. |
| [CH Core Medication](StructureDefinition-ch-core-medication.md) | Base definition of the Medication resource for use in Swiss specific use cases. |
| [CH Core MedicationAdministration](StructureDefinition-ch-core-medicationadministration.md) | Base definition of the MedicationAdministration resource for use in Swiss specific use cases. |
| [CH Core MedicationDispense](StructureDefinition-ch-core-medicationdispense.md) | Base definition of the MedicationDispense resource for use in Swiss specific use cases. |
| [CH Core MedicationRequest](StructureDefinition-ch-core-medicationrequest.md) | Base definition of the MedicationRequest resource for use in Swiss specific use cases. |
| [CH Core MedicationStatement](StructureDefinition-ch-core-medicationstatement.md) | Base definition of the MedicationStatement resource for use in Swiss specific use cases. |
| [CH Core Organization](StructureDefinition-ch-core-organization.md) | Base definition of the Organization resource for use in Swiss specific use cases. |
| [CH Core Organization EPR](StructureDefinition-ch-core-organization-epr.md) | Definition of the Organization resource for use in the context of the electronic patient record (EPR). |
| [CH Core Patient](StructureDefinition-ch-core-patient.md) | Base definition of the Patient resource for use in Swiss specific use cases. Relevant are definitions by the eCH-0010 V7.0 data standard mailing address and eCH-0011 V8.1 data standard personal data. The CH Core Patient is based upon the core FHIR Patient Resource and designed to meet the applicable patient demographic data elements in Switzerland. See also[BFS](https://www.bfs.admin.ch/bfs/de/home/register/personenregister/registerharmonisierung/nomenklaturen.html)for further information |
| [CH Core Patient EPR](StructureDefinition-ch-core-patient-epr.md) | Definition of the Patient resource for use in the context of the electronic patient record (EPR). It is used to include the patient in an EPR document (referenced in Composition/DocumentReference). |
| [CH Core Practitioner](StructureDefinition-ch-core-practitioner.md) | Base definition of the Practitioner resource for use in Swiss specific use cases. |
| [CH Core Practitioner EPR](StructureDefinition-ch-core-practitioner-epr.md) | Definition of the Practitioner resource for use in the context of the electronic patient record (EPR). |
| [CH Core PractitionerRole](StructureDefinition-ch-core-practitionerrole.md) | Base definition of the PractitionerRole resource for use in Swiss specific use cases. |
| [CH Core PractitionerRole EPR](StructureDefinition-ch-core-practitionerrole-epr.md) | Definition of the PractitionerRole resource for use in the context of the electronic patient record (EPR). |
| [CH Core RelatedPerson](StructureDefinition-ch-core-relatedperson.md) | Base definition of the RelatedPerson resource for use in Swiss specific use cases. |
| [CH Core ServiceRequest](StructureDefinition-ch-core-servicerequest.md) | Base definition of the ServiceRequest resource for use in Swiss specific use cases. |

### Structures: Data Type Profiles 

These define constraints on FHIR data types for systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [AHVN13 / NAVS13 Identifier](StructureDefinition-ch-core-ahvn13-identifier.md) | Identifier holding a 13 digit social security number. The number shall have exactly 13 digits and shall not contain point characters for separation. |
| [Address for Place of Birth](StructureDefinition-ch-core-address-ech-11-placeofbirth.md) | PlaceOfBirth for ech-11 |
| [Address for Place of Origin](StructureDefinition-ch-core-address-ech-11-placeoforigin.md) | Place of Origin for eCH-0011 |
| [BER Identifier](StructureDefinition-ch-core-ber-identifier.md) | Identifier holding a number for BER (Business and Enterprise Register), BUR (Betriebs- und Unternehmensregister), REE (Registre des entreprises et des établissements), RIS (Registro delle imprese e degli stabilimenti) |
| [CH Core Address](StructureDefinition-ch-core-address.md) | address incorporating eCH-0010 postal address extensions |
| [CH Core ContactPoint eCH-0046 Email](StructureDefinition-ch-core-contactpoint-ech-46-email.md) | E-mail address as contact point of a person or organization according to eCH-0046 |
| [CH Core ContactPoint eCH-0046 Internet](StructureDefinition-ch-core-contactpoint-ech-46-internet.md) | Internet address as contact point of a person or organization according to eCH-0046 |
| [CH Core ContactPoint eCH-0046 Phone](StructureDefinition-ch-core-contactpoint-ech-46-phone.md) | Phone number as contact point of a person or organization according to eCH-0046 |
| [CH Core Dosage](StructureDefinition-ch-core-dosage.md) | Dosage for medication use cases |
| [CH Core Postal Address](StructureDefinition-ch-core-address-ech-10.md) | Postal address according to eCH-0010 |
| [CH Core Quantity with EMED Units](StructureDefinition-ch-core-quantity-with-emed-units.md) | A quantity with defined units |
| [CH Core Range with EMED Units](StructureDefinition-ch-core-range-with-emed-units.md) | A range with defined quantity/units |
| [CH EMED Ratio with EMED Units](StructureDefinition-ch-emed-ratio-with-emed-units.md) | A ratio with defined units |
| [EPR-SPID Identifier](StructureDefinition-ch-core-epr-spid-identifier.md) | EPR-SPID Identifier (https://www.fedlex.admin.ch/eli/cc/2017/205/de) |
| [GLN Identifier](StructureDefinition-ch-core-gln-identifier.md) | Identifier holding a 13 digit GLN |
| [Human Name](StructureDefinition-ch-core-humanname.md) | Name with extensions for ech-11 |
| [Insurance Card Number (Identifier)](StructureDefinition-ch-core-veka-identifier.md) | Identifier in 20-digit format. The number shall have exactly 20 digits and start with 807560. |
| [UIDB Identifier](StructureDefinition-ch-core-uidb-identifier.md) | Identifier holding a number for UIDB (Unique Identification Business), UID (Verwendung der Unternehmens-Identifikationsnummer), IDE (Utilisation du numéro d'identification des entreprises), IDI (Utilizzo del numero d'identificazione delle imprese) |
| [ZSR Identifier](StructureDefinition-ch-core-zsr-identifier.md) | Identifier holding a number for ZSR (Zahlstellenregister), RCC (Registre des codes-créanciers), RCC (Registro dei codici creditori) |

### Structures: Extension Definitions 

These define constraints on FHIR data types for systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [Address Line Type](StructureDefinition-ch-ext-ech-10-linetype.md) | eCH-0010: Extension to define line types for addresses |
| [Author of the content](StructureDefinition-ch-ext-author.md) | Extension to reference the person (and her/his organization) who is responsible for the content (e.g. an author of an eMedication document or a recorder of an immunization). This extension is used to differentiate on entry level between the author of the content (represented with this extension) and the author of the medical decision or the performer of an event (represented e.g. with Resource.performer/informationSource). |
| [BFS Extension Medical Statistic: Admit Role for Encounter](StructureDefinition-ch-ext-bfs-ms-admitrole.md) | BFS Extension Admit Role for Encounter |
| [BFS Extension Medical Statistic: Discharge Destination for Encounter](StructureDefinition-ch-ext-bfs-ms-dischargedestination.md) | BFS Extension Discharge Destination for Encounter |
| [BFS Extension Medical Statistic: Discharge Décision for Encounter](StructureDefinition-ch-ext-bfs-ms-dischargedecision.md) | BFS Extension Discharge Décision for Encounter |
| [Biller](StructureDefinition-ch-ext-biller.md) | Extension to reference the biller in the case of a professional service or poduct provided. |
| [EPR Confidentiality Code](StructureDefinition-ch-ext-epr-confidentialitycode.md) | Extension for the confidentiality code according to the Swiss EPR regulation |
| [EPR Data Enterer](StructureDefinition-ch-ext-epr-dataenterer.md) | Extension to define the information about the person and organization that entered data and the time of the data input.**Note:**This extension has its origin from CDA and is deprecated. It will be removed in a future version. |
| [EPR Information Recipient](StructureDefinition-ch-ext-epr-informationrecipient.md) | Extension for a recipient of this document (corresponds to the addressee of a letter - person or organization).**DEPRECATED**: This extension has CDA origins and will be removed in a future version. |
| [EPR Time](StructureDefinition-ch-ext-epr-time.md) | Additional timestamp for the author or other elements.**Note:**This extension has its origin from CDA and is deprecated. It will be removed in a future version. |
| [Encounter, Suspected Readmission](StructureDefinition-ch-ext-encounter-susp-readmission.md) | Encounter Extension for suspected readmission |
| [Entry Resource Cross References](StructureDefinition-ch-core-ext-entry-resource-cross-references.md) | Extension to make a reference beween resources as entries in i.e. document bundles. |
| [First Name](StructureDefinition-ch-ext-ech-11-firstname.md) | eCH-0011: Extension to define first name type |
| [If an encounter is caused by an accident](StructureDefinition-ch-ext-accident.md) | Extension to define an encounter that is caused by an accident and at which time the accident happened |
| [Marital Data - Separation Type](StructureDefinition-ch-ext-ech-11-maritaldata-separation.md) | eCH-0011: Extension to define the separation type. For married but separated persons and for persons in a registered partnership but living separately. |
| [Name](StructureDefinition-ch-ext-ech-11-name.md) | eCH-0011: Extension to define name type |
| [Place of Birth according to eCH-0011](StructureDefinition-ch-core-patient-ech-11-placeofbirth.md) | The registered place of birth of the patient. |
| [Place of Origin according to eCH-0011](StructureDefinition-ch-core-patient-ech-11-placeoforigin.md) | The place of origin of the patient. |
| [Responsible](StructureDefinition-ch-ext-responsible.md) | Extension to reference the responsible for a professional service or product provided. |
| [Substitution](StructureDefinition-ch-emed-ext-substitution.md) | This extension is used to indicate whether the medication can be substituted for this patient, i.e. whether it is allowed. (For a prescription, MedicationRequest.substitution is used to record whether a substitution is allowed or not. When dispensing, a performed substitution is recorded in MedicationDispense.substitution.) |
| [Treatment Reason](StructureDefinition-ch-emed-ext-treatmentreason.md) | Extension to represent the treatment reason |
| [eCH-0007 Municipality Id – BFS Gemeindenummer](StructureDefinition-ch-ext-ech-7-municipalityid.md) | eCH-0007: Extension to define a BFS Number for a municipality |
| [eCH-0046 Email Category](StructureDefinition-ch-ext-ech-46-emailcategory.md) | Extension to define the e-mail category according to eCH-0046 |
| [eCH-0046 Internet Category](StructureDefinition-ch-ext-ech-46-internetcategory.md) | Extension to define the internet category according to eCH-0046 |
| [eCH-0046 Phone Category](StructureDefinition-ch-ext-ech-46-phonecategory.md) | Extension to define the phone category according to eCH-0046 |

### Example: Example Instances 

These are example instances that show what data produced and consumed by systems conforming with this implementation guide might look like.

| | |
| :--- | :--- |
| [1-1 Medication Statement with Medication Triatec](MedicationStatement-1-1-MedStatTriatec.md) | Example for MedicationStatement (one dosage element) |
| [1-2 Medication Dispense with Medication Beloc Zok](MedicationDispense-2-4-MedDispBeloczok.md) | Example for MedicationDispense (two dosage elements) |
| [2-6 Medication Request with Medication Norvasc](MedicationRequest-2-6-MedReqNorvasc.md) | Example for MedicationRequest (with substitution) |
| [Agpar Marc](Practitioner-AgparMarc.md) | Practitioner with GLN and name |
| [AllergyToCatDander](AllergyIntolerance-AllergyToCatDander.md) | Example for AllergyIntolerance |
| [Allzeit Bereit](Practitioner-AllzeitBereit.md) | Practitioner EPR with name with prefixes (salutation, academic title, legal status) and suffix (‘Facharzt für Allgemeine Medizin’) |
| [Author example for immunization](Practitioner-ImmunizationAuthorExample.md) | Example of Practitioner resource for use in Swiss specific immunization use cases. |
| [Biological Father](RelatedPerson-BiologicalFather.md) | Example for RelatedPerson |
| [CH Core Immunization Example](Immunization-CHCoreImmunizationExample.md) | Example of Immunization resource for use in Swiss specific use cases. |
| [CH Core ImmunizationRecommendation Example](ImmunizationRecommendation-CHCoreImmunizationRecommendationExample.md) | Example of ImmunizationRecommendation resource for use in Swiss specific use cases. |
| [Claim Inpatient Treatment Psychiatry](Claim-ClaimInpatientTreatmentPsychiatry.md) | Example for CH Core Claim |
| [Consent for Swiss EPR](Consent-PatientHasEpr.md) | Consent that Patient has a Swiss EPR |
| [Consent for Swiss EPR with Encounter exclusions](Consent-EncounterExcludedForEpr.md) | Consent that Patient has a Swiss EPR but exclude it for a specific Encounter |
| [Coverage Broennimann](Coverage-CoverageBroennimann.md) | Coverage with Mrs. Broenimann as beneficiary and the health insurance Sanitas as issuer of the policy (represented as contained resource) |
| [DocumentReference to a PDF](DocumentReference-Docu.md) | DocumentReference with metadata about the document and the referenced document (PDF) as Base64 attachment |
| [Dokument Eintrag referenz zu anderem Eintrag in einem anderen Dokument](Bundle-2-ResourceCrossReferencesDokument.md) | Ein Beispieldokument mit einem Eintrag welcher die Extension zur kreuzreferenzierung auf einen anderen Eintrag in einem anderen Dokument enthält. |
| [Elisabeth Broennimann by BFH](Patient-ElisabethBroennimannByBFH.md) | Patient with insurance card number as identifier, contact details, marital status (eCH & FHIR) and reference to the general practitioner (GP) |
| [Encounter Accident Broennimann](Encounter-EncounterAccidentBroennimann.md) | Inpatient Encounter of Mrs. Broennimann which is flagged as an accident |
| [Encounter Ambulant Broennimann](Encounter-EncounterAmbulantBroennimann.md) | Ambulant Encounter of Mrs. Broennimann, representing the visit number (Fallnummer) and the BFS variables |
| [Franz Muster](Patient-FranzMuster.md) | Patient with place of birth, place of origin (Heimatort), religion, local PID and language of correspondence |
| [Gruppenpraxis CH](Organization-GruppenpraxisCH.md) | Organization EPR with GLN, different contact details (e.g. phone, email) and address |
| [Hanspeter Wenger @ Spital Seeblick](PractitionerRole-HPWengerRole.md) | PractitionerRole EPR with profession (role) and specialisation |
| [Hanspeter Wenger by BFH](Practitioner-HanspeterWengerByBFH.md) | Practitioner with GLN and ZSR, name with prefixes, gender and birth date |
| [Immunization example for Immunization Administration](Immunization-ImmunizationEntry.md) | An Immunization example with extension for cross dokument referencing. |
| [Klinik für Psychiatrie](Organization-ClaimBiller.md) | Example of a organization used in the claim example |
| [Klinik für Psychiatrie](Organization-ClaimProvider.md) | Example of a organization used in the claim example |
| [Krankenkasse AG](Coverage-ClaimCoverage.md) | Example of a coverage used in the claim example |
| [Laboratory Order](ServiceRequest-LabOrder.md) | Example for ServiceRequest |
| [Manuela Muster](Patient-ManuelaMuster.md) | Patient with EPR-SPID ending on 0 |
| [Marvin Muster](Patient-MarvinMuster.md) | Patient with AHVN13/NAVS13 as identifier |
| [Max Muster](Patient-MaxMuster.md) | Patient EPR with eCH-0011 family & and given name, eCH-0046 contact points and reference to the organization that is the custodian of the patient record |
| [Medication Administration Fentanyl](MedicationAdministration-3-2-MedAdminFentanyl.md) | Example for MedicationAdministration |
| [Organization example for immunization](Organization-ImmunizationOrganizationExample.md) | Example of Organization resource for use in Swiss specific immunization use cases. |
| [Patient Document 1 Stammgemeinschaft Composition](Composition-ResourceCrossReferencesDokumentComposition.md) | Example for Composition Immunization Administration |
| [Patient example for immunization](Patient-ImmunizationPatientExample.md) | Example of Patient resource for use in Swiss specific immunization use cases. |
| [Person eCH-011](Patient-PersonEch011.md) | Patient eCH-011 with names, marital status and separation type, delivery address if it is not the address of the patient (detailed explanation in narrative) |
| [Peter Muster](Patient-ClaimPatient.md) | Example of a patient used in the claim example |
| [Physiotherapie CH](Organization-PhysiotherapieCH.md) | Organization with GLN (ending on 0), UIDB, BER |
| [PractitionerRole example for immunization](PractitionerRole-ImmunizationPractitionerRoleExample.md) | Example of PractitionerRole resource for use in Swiss specific immunization use cases. |
| [Radiologieinstitut](Organization-Radiologieinstitut.md) | Organization EPR with specified healthcare facility type (Diagnostic institution) |
| [Schreib Kraft](Practitioner-SchreibKraft.md) | Practitioner (physician assistants) with local identifier (neither GLN nor ZSR) |
| [Schreib Kraft @ Gruppenpraxis CH](PractitionerRole-SchreibKraftAtGruppenpraxisCH.md) | PractitionerRole with referenced practitioner and organization |
| [Spital Seeblick](Organization-SpitalSeeblick.md) | Organization with specified healthcare facility type (Hospital) |
| [Transfer note for radiological diagnostics](Bundle-DocumentContainingOriginalRepresentationAsPdfA.md) | EPR Document containing original representation as PDF-A (fullUrls of entries with ‘urn:uuid:’) |
| [UPI EPR Test Krcmarevic](Patient-UpiEprTestKrcmarevic.md) | Test Patient from UPI for Swiss EPR Projectathon |
| [Urticaria](Condition-Urticaria.md) | Example for Condition |
| [Zuweisung zur radiologischen Diagnostik](Bundle-1-ZuweisungZurRadiologischenDiagnostik-FHIR.md) | Document EPR (fullUrls of entries with ‘http’) |
| [Zuweisung zur radiologischen Diagnostik](Composition-ZuweisungZurRadiologischenDiagnostik.md) | Composition EPR with the information about the transfer in different sections |

