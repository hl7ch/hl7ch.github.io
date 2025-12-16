# Home - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* **Home**

## Home

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/ImplementationGuide/ch.fhir.ig.ch-core | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CH_Core |
| **Copyright/Legal**: CC0-1.0 | |

### Introduction

This implementation guide is provided to support the use of FHIR®© in Switzerland.

This guide is a working specification. We anticipate that it will be implemented and tested by FHIR system producers whose feedback will help improve its content. With this standard for trial use, we are looking for feedback on whether the following goals have been met:

* The guide provides guidance on essential resources for identifiers, code systems, value sets and naming systems in Switzerland, specifically in relation to the Swiss Electronic Patient Record ([EPR](https://www.patientendossier.ch/en)).
* The guide defines extensions that are necessary for local use in Switzerland.
* The guide covers the requirements for [eCH-0010 postal address (V7.0)](https://www.ech.ch/de/ech/ech-0010/7.0), [eCH-0046 contact (V5.0)](https://www.ech.ch/de/ech/ech-0046/5.0) and [eCH-0011 personal data (V8.1)](https://www.ech.ch/de/ech/ech-0011/8.1) (including [eCH-0007 municipality (V6.0)](https://www.ech.ch/de/ech/ech-0007/6.0) and [eCH-0021 additional personal data (V7.0)](https://www.ech.ch/de/ech/ech-0021/7.0)).
* The guide incorporates Federal Statistics Office (BFS) variables for medical statistics. See [BFS](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.7066232.html) (available in German, French and Italian).
* The guide does not define additions to the FHIR API, for further FHIR API definitions please refer to: 
* [CH EPR FHIR](http://fhir.ch/ig/ch-epr-fhir/) - Swiss EPR FHIR Implementation Guide
* [IPA (International Patient Access)](https://hl7.org/fhir/uv/ipa/) - International FHIR API specification for patient access
* or other FHIR Implementation Guides
 

[Changelog](changelog.md) with significant changes, open and closed issues.

**Download**: You can download this implementation guide in [NPM format](https://confluence.hl7.org/display/FHIR/NPM+Package+Specification) from [here](package.tgz).

### Relation to the Swiss EPR

The Annexes to the Swiss [Electronic Patient Record](https://www.patientendossier.ch/en) (EPR) law specify the technical and semantic requirements for interoperability.

#### Metadata (Annex 3 and Annex 9)

Metadata relating to the Swiss EPR is defined in Annexes 3 and 9 by the [Ministry of Health](https://www.bag.admin.ch/bag/de/home/gesetze-und-bewilligungen/gesetzgebung/gesetzgebung-mensch-gesundheit/gesetzgebung-elektronisches-patientendossier.html). [eHealth Suisse](https://www.e-health-suisse.ch/en/home.html) maintains the value sets with additional provided translations in ART-DECOR in the [CH-EPR](https://art-decor.org/art-decor/decor-project--ch-epr-) project. All code systems and value sets from the CH-EPR project are exported to the FHIR implementation guide [CH Term](http://fhir.ch/ig/ch-term/index.html), which forms the basis for CH Core.

#### Exchange formats (Annex 4)

Exchange formats for the Swiss EPR are defined in Annex 4. Exchange formats can be represented as FHIR documents.

* [CH Core Document Profile EPR](StructureDefinition-ch-core-document.md): the base definition for a structured document in the Swiss EPR.
* [CH Core Composition Profile EPR](StructureDefinition-ch-core-composition-epr.md): the base definition for a composition, providing the basic structure of the FHIR document.

#### CH:ATC Profile (Annex 5, Amendment 2.2)

The CH ATC profile defines the requirements for a patient’s audit trail. It is defined in the [CH EPR FHIR](https://fhir.ch/ig/ch-epr-fhir/ch-atc.html) implementation guide.

### Scope

This document presents Swiss use concepts defined via FHIR processable artifacts:

* [Profiles](profiles.md) - useful constraints of essential FHIR resources and data types for Swiss use.
* [Extensions](extensions.md) - FHIR extensions that are added for local use, covering necessary Swiss concepts.
* [Terminology](https://fhir.ch/ig/ch-term/index.html) - defined or referenced code systems and value sets for Switzerland.

See also the **guidance** section with detailed descriptions about some special topics:

* [Usage of Swiss Core Artifacts](usage-swiss-core-artifacts.md)
* [SNOMED CT Swiss Extension](sct-swiss-ext.md)
* [Readable Representation of EPR Documents](readable-representation-epr-docs.md)

### Governance

The CH Core implementation guide is managed by HL7 Switzerland in the [HL7 Switzerland FHIR technical committee](https://www.hl7.ch/technisches-komitee/), see also [source](https://github.com/hl7ch/ch-core).

### Collaboration

This guide is the product of collaborative work undertaken with participants from:

* [Swiss FHIR Implementers Community](https://www.fhir.ch)
* [HL7 Switzerland](https://www.hl7.ch)
* [eHealth Suisse](https://www.e-health-suisse.ch/en/home.html)

### Safety Considerations

This implementation guide defines data elements, resources, formats, and methods for exchanging healthcare data between different participants in the healthcare process. As such, clinical safety is a key concern. Additional guidance regarding safety for the specification’s many and various implementations is available at: [https://www.hl7.org/FHIR/safety.html](https://www.hl7.org/FHIR/safety.html).

Although the present specification does gives users the opportunity to observe data protection and data security regulations, its use does not guarantee compliance with these regulations. Effective compliance must be ensured by appropriate measures during implementation projects and in daily operations. The corresponding implementation measures are explained in the standard. In addition, the present specification can only influence compliance with the security regulations in the technical area of standardization. It cannot influence organizational and contractual matters.

### IP Statements

This document is licensed under Creative Commons "No Rights Reserved" ([CC0](https://creativecommons.org/publicdomain/zero/1.0/)).

HL7®, HEALTH LEVEL SEVEN®, FHIR® and the FHIR ![](icon-fhir-16.png)® are trademarks owned by Health Level Seven International, registered with the United States Patent and Trademark Office.

This implementation guide contains and references intellectual property owned by third parties ("Third Party IP"). Acceptance of these License Terms does not grant any rights with respect to Third Party IP. The licensee alone is responsible for identifying and obtaining any necessary licenses or authorizations to utilize Third Party IP in connection with the specification or otherwise.

This publication includes IP covered under the following statements.

* CC0-1.0

* [BFS Medizinische Statistik - 17 1.2.V02 - Aufenthaltsort vor dem Eintritt / Séjour avant l’admission / Luogo di soggiorno prima dell’ammissione](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-bfs-medstats-17-admitsource.html): [CHCoreEncounter](StructureDefinition-ch-core-encounter.md), [Encounter/EncounterAccidentBroennimann](Encounter-EncounterAccidentBroennimann.md) and [Encounter/EncounterAmbulantBroennimann](Encounter-EncounterAmbulantBroennimann.md)
* [BFS Medizinische Statistik - 18 1.2.V03 - Eintrittsart / Mode d’admission / Genere di ricovero](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-bfs-medstats-18-admittype.html): [CHCoreEncounter](StructureDefinition-ch-core-encounter.md), [Encounter/EncounterAccidentBroennimann](Encounter-EncounterAccidentBroennimann.md) and [Encounter/EncounterAmbulantBroennimann](Encounter-EncounterAmbulantBroennimann.md)
* [BFS Medizinische Statistik - 19 1.2.V04 - Einweisende Instanz / Décision d’envoi / Istanza ricoverante](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-bfs-medstats-19-admitrole.html): [BfsMsAdmitRole](StructureDefinition-ch-ext-bfs-ms-admitrole.md), [Encounter/EncounterAccidentBroennimann](Encounter-EncounterAccidentBroennimann.md) and [Encounter/EncounterAmbulantBroennimann](Encounter-EncounterAmbulantBroennimann.md)
* [BFS Medizinische Statistik - 20 1.3.V01 - Behandlungsart / Type de prise en charge / Genere di trattamento](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-bfs-medstats-20-encounterclass.html): [CHCoreClaim](StructureDefinition-ch-core-claim.md) and [Claim/ClaimInpatientTreatmentPsychiatry](Claim-ClaimInpatientTreatmentPsychiatry.md)
* [BFS Medizinische Statistik - 25 1.4.V02 - Hauptkostenträger für Grundversicherungsleistungen / Prise en charge des soins de base / Unità d’imputazione principale per le prestazioni dell’assicurazione di base](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-bfs-medstats-25-mainguarantor.html): [CHCoreCoverage](StructureDefinition-ch-core-coverage.md)
* [BFS Medizinische Statistik - 27 1.5.V02 - Entscheid für Austritt / Décision de sortie / Décisione dell’uscita](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-bfs-medstats-27-dischargedecision.html): [BfsDischargeDecision](StructureDefinition-ch-ext-bfs-ms-dischargedecision.md), [Encounter/EncounterAccidentBroennimann](Encounter-EncounterAccidentBroennimann.md) and [Encounter/EncounterAmbulantBroennimann](Encounter-EncounterAmbulantBroennimann.md)
* [BFS Medizinische Statistik - 28 1.5.V03 - Aufenthalt nach Austritt / Séjour après la sortie / Destinazione dopo l’uscita](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-bfs-medstats-28-dischargedestination.html): [BfsDischargeDestination](StructureDefinition-ch-ext-bfs-ms-dischargedestination.md), [Encounter/EncounterAccidentBroennimann](Encounter-EncounterAccidentBroennimann.md) and [Encounter/EncounterAmbulantBroennimann](Encounter-EncounterAmbulantBroennimann.md)
* [BFS Medizinische Statistik - 29 1.5.V04 - Behandlung nach Austritt / Prise en charge après la sortie / Trattamento dopo l’uscita](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-bfs-medstats-29-dischargeencounter.html): [CHCoreEncounter](StructureDefinition-ch-core-encounter.md), [Encounter/EncounterAccidentBroennimann](Encounter-EncounterAccidentBroennimann.md) and [Encounter/EncounterAmbulantBroennimann](Encounter-EncounterAmbulantBroennimann.md)
* [eCH-010 Types](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-ech-10.html): [ECH0010AddressLineType](StructureDefinition-ch-ext-ech-10-linetype.md)
* [eCH-011 Types](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-ech-11.html): [CHCorePatient](StructureDefinition-ch-core-patient.md), [CHCorePatientEPR](StructureDefinition-ch-core-patient-epr.md), [ECH011FirstName](StructureDefinition-ch-ext-ech-11-firstname.md), [ECH011Name](StructureDefinition-ch-ext-ech-11-name.md) and [Patient/PersonEch011](Patient-PersonEch011.md)
* [eCH-011 MaritalData Separation](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-ech-11-maritaldata-separation.html): [ECH011MaritalDataSeparation](StructureDefinition-ch-ext-ech-11-maritaldata-separation.md) and [Patient/PersonEch011](Patient-PersonEch011.md)
* [eCH-011 MaritalStatus](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-ech-11-maritalstatus.html): [CHCorePatient](StructureDefinition-ch-core-patient.md), [Patient/ElisabethBroennimannByBFH](Patient-ElisabethBroennimannByBFH.md)...Show 4 more,[Patient/FranzMuster](Patient-FranzMuster.md),[Patient/ManuelaMuster](Patient-ManuelaMuster.md),[Patient/MarvinMuster](Patient-MarvinMuster.md)and[Patient/PersonEch011](Patient-PersonEch011.md)
* [eCH-0046 Email Category](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-ech-46-emailcategory.html): [Bundle/1-ZuweisungZurRadiologischenDiagnostik-FHIR](Bundle-1-ZuweisungZurRadiologischenDiagnostik-FHIR.md), [Bundle/2-ResourceCrossReferencesDokument](Bundle-2-ResourceCrossReferencesDokument.md), [ECH46EmailCategory](StructureDefinition-ch-ext-ech-46-emailcategory.md) and [Patient/MaxMuster](Patient-MaxMuster.md)
* [eCH-0046 Internet Category](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-ech-46-internetcategory.html): [Bundle/1-ZuweisungZurRadiologischenDiagnostik-FHIR](Bundle-1-ZuweisungZurRadiologischenDiagnostik-FHIR.md), [Bundle/2-ResourceCrossReferencesDokument](Bundle-2-ResourceCrossReferencesDokument.md), [ECH46InternetCategory](StructureDefinition-ch-ext-ech-46-internetcategory.md) and [Patient/MaxMuster](Patient-MaxMuster.md)
* [eCH-0046 Phone Category](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-ech-46-phonecategory.html): [Bundle/1-ZuweisungZurRadiologischenDiagnostik-FHIR](Bundle-1-ZuweisungZurRadiologischenDiagnostik-FHIR.md), [Bundle/2-ResourceCrossReferencesDokument](Bundle-2-ResourceCrossReferencesDokument.md), [ECH46PhoneCategory](StructureDefinition-ch-ext-ech-46-phonecategory.md) and [Patient/MaxMuster](Patient-MaxMuster.md)
* [eCH-0007 Canton Abbreviation incl. FL (Fürstentum Liechtenstein)](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-ech-7-cantonflabbreviation.html): [CHCoreAddress](StructureDefinition-ch-core-address.md)
* [Main guarantor](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-mainguarantor.html): [CHCoreCoverage](StructureDefinition-ch-core-coverage.md)
* [ServiceRequest Category](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-servicerequest-category.html): [CHCoreServiceRequest](StructureDefinition-ch-core-servicerequest.md) and [ServiceRequest/LabOrder](ServiceRequest-LabOrder.md)
* [CH VACD Swiss Immunization Recommendation Categories](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-ch-vacd-recommendation-categories-cs.html): [CHCoreImmunizationRecommendation](StructureDefinition-ch-core-immunization-recommendation.md) and [ImmunizationRecommendation/CHCoreImmunizationRecommendationExample](ImmunizationRecommendation-CHCoreImmunizationRecommendationExample.md)
* [CH VACD Swiss Recommendation Forecast Status](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-ch-vacd-recommendation-forecast-status-cs.html): [CHCoreImmunizationRecommendation](StructureDefinition-ch-core-immunization-recommendation.md)
* [CH VACD Swissmedic Authorized Vaccines](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-ch-vacd-swissmedic-cs.html): [Immunization/CHCoreImmunizationExample](Immunization-CHCoreImmunizationExample.md) and [ImmunizationRecommendation/CHCoreImmunizationRecommendationExample](ImmunizationRecommendation-CHCoreImmunizationRecommendationExample.md)
* [EDQM - Standard Terms](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-edqm-standardterms.html): [CHCoreDosage](StructureDefinition-ch-core-dosage.md), [CHCoreMedication](StructureDefinition-ch-core-medication.md)...Show 5 more,[CHCoreMedicationAdministration](StructureDefinition-ch-core-medicationadministration.md),[MedicationAdministration/3-2-MedAdminFentanyl](MedicationAdministration-3-2-MedAdminFentanyl.md),[MedicationDispense/2-4-MedDispBeloczok](MedicationDispense-2-4-MedDispBeloczok.md),[MedicationRequest/2-6-MedReqNorvasc](MedicationRequest-2-6-MedReqNorvasc.md)and[MedicationStatement/1-1-MedStatTriatec](MedicationStatement-1-1-MedStatTriatec.md)
* [DICOM Unique Identifiers (UIDs)](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-dcmuid.html): [CHCoreDocumentReference](StructureDefinition-ch-core-documentreference.md)
* [ch-ehealth-codesystem-language](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-2.16.756.5.30.1.127.3.10.12.html): [CHCoreDocumentReference](StructureDefinition-ch-core-documentreference.md)
* [ch-ehealth-codesystem-medreg](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-2.16.756.5.30.1.127.3.5.html): [CHCorePractitionerRole](StructureDefinition-ch-core-practitionerrole.md), [CHCorePractitionerRoleEpr](StructureDefinition-ch-core-practitionerrole-epr.md) and [PractitionerRole/HPWengerRole](PractitionerRole-HPWengerRole.md)


* ISO maintains the copyright on the country codes, and controls its use carefully. For further details see the ISO 3166 web page: [https://www.iso.org/iso-3166-country-codes.html](https://www.iso.org/iso-3166-country-codes.html)

* [ISO 3166-1 Codes for the representation of names of countries and their subdivisions — Part 1: Country code](http://terminology.hl7.org/6.5.0/CodeSystem-ISO3166Part1.html): [AHVN13Identifier](StructureDefinition-ch-core-ahvn13-identifier.md), [Accident](StructureDefinition-ch-ext-accident.md)...Show 76 more,[Author](StructureDefinition-ch-ext-author.md),[BERIdentifier](StructureDefinition-ch-core-ber-identifier.md),[BfsDischargeDecision](StructureDefinition-ch-ext-bfs-ms-dischargedecision.md),[BfsDischargeDestination](StructureDefinition-ch-ext-bfs-ms-dischargedestination.md),[BfsMsAdmitRole](StructureDefinition-ch-ext-bfs-ms-admitrole.md),[Biller](StructureDefinition-ch-ext-biller.md),[CHCoreAddress](StructureDefinition-ch-core-address.md),[CHCoreAddressECH10](StructureDefinition-ch-core-address-ech-10.md),[CHCoreAddressECH11PlaceOfOrigin](StructureDefinition-ch-core-address-ech-11-placeoforigin.md),[CHCoreAddressEch11PlaceOfBirth](StructureDefinition-ch-core-address-ech-11-placeofbirth.md),[CHCoreAllergyIntolerance](StructureDefinition-ch-core-allergyintolerance.md),[CHCoreClaim](StructureDefinition-ch-core-claim.md),[CHCoreComposition](StructureDefinition-ch-core-composition.md),[CHCoreCompositionEPR](StructureDefinition-ch-core-composition-epr.md),[CHCoreCondition](StructureDefinition-ch-core-condition.md),[CHCoreContactPointECH46Email](StructureDefinition-ch-core-contactpoint-ech-46-email.md),[CHCoreContactPointECH46Internet](StructureDefinition-ch-core-contactpoint-ech-46-internet.md),[CHCoreContactPointECH46Phone](StructureDefinition-ch-core-contactpoint-ech-46-phone.md),[CHCoreCoverage](StructureDefinition-ch-core-coverage.md),[CHCoreDocument](StructureDefinition-ch-core-document.md),[CHCoreDocumentEPR](StructureDefinition-ch-core-document-epr.md),[CHCoreDocumentReference](StructureDefinition-ch-core-documentreference.md),[CHCoreDosage](StructureDefinition-ch-core-dosage.md),[CHCoreEPRConsent](StructureDefinition-ch-core-epr-consent.md),[CHCoreEncounter](StructureDefinition-ch-core-encounter.md),[CHCoreHumanName](StructureDefinition-ch-core-humanname.md),[CHCoreImmunization](StructureDefinition-ch-core-immunization.md),[CHCoreImmunizationRecommendation](StructureDefinition-ch-core-immunization-recommendation.md),[CHCoreLocation](StructureDefinition-ch-core-location.md),[CHCoreMedication](StructureDefinition-ch-core-medication.md),[CHCoreMedicationAdministration](StructureDefinition-ch-core-medicationadministration.md),[CHCoreMedicationDispense](StructureDefinition-ch-core-medicationdispense.md),[CHCoreMedicationRequest](StructureDefinition-ch-core-medicationrequest.md),[CHCoreMedicationStatement](StructureDefinition-ch-core-medicationstatement.md),[CHCoreOrganization](StructureDefinition-ch-core-organization.md),[CHCoreOrganizationEPR](StructureDefinition-ch-core-organization-epr.md),[CHCorePatient](StructureDefinition-ch-core-patient.md),[CHCorePatientEPR](StructureDefinition-ch-core-patient-epr.md),[CHCorePractitioner](StructureDefinition-ch-core-practitioner.md),[CHCorePractitionerEPR](StructureDefinition-ch-core-practitioner-epr.md),[CHCorePractitionerRole](StructureDefinition-ch-core-practitionerrole.md),[CHCorePractitionerRoleEpr](StructureDefinition-ch-core-practitionerrole-epr.md),[CHCoreQuantityWithEmedUnits](StructureDefinition-ch-core-quantity-with-emed-units.md),[CHCoreRangeWithEmedUnits](StructureDefinition-ch-core-range-with-emed-units.md),[CHCoreRatioWithEmedUnits](StructureDefinition-ch-emed-ratio-with-emed-units.md),[CHCoreRelatedPerson](StructureDefinition-ch-core-relatedperson.md),[CHCoreServiceRequest](StructureDefinition-ch-core-servicerequest.md),[CHEMEDExtSubstitution](StructureDefinition-ch-emed-ext-substitution.md),[CHEMEDExtTreatmentReason](StructureDefinition-ch-emed-ext-treatmentreason.md),[CH_Core](index.md),[ChCorePatientEch11PlaceOfBirth](StructureDefinition-ch-core-patient-ech-11-placeofbirth.md),[ChCorePatientEch11PlaceOfOrigin](StructureDefinition-ch-core-patient-ech-11-placeoforigin.md),[ECH0010AddressLineType](StructureDefinition-ch-ext-ech-10-linetype.md),[ECH007MunicipalityId](StructureDefinition-ch-ext-ech-7-municipalityid.md),[ECH011FirstName](StructureDefinition-ch-ext-ech-11-firstname.md),[ECH011MaritalDataSeparation](StructureDefinition-ch-ext-ech-11-maritaldata-separation.md),[ECH011Name](StructureDefinition-ch-ext-ech-11-name.md),[ECH46EmailCategory](StructureDefinition-ch-ext-ech-46-emailcategory.md),[ECH46InternetCategory](StructureDefinition-ch-ext-ech-46-internetcategory.md),[ECH46PhoneCategory](StructureDefinition-ch-ext-ech-46-phonecategory.md),[EPRConfidentialityCode](StructureDefinition-ch-ext-epr-confidentialitycode.md),[EPRDataEnterer](StructureDefinition-ch-ext-epr-dataenterer.md),[EPRInformationRecipient](StructureDefinition-ch-ext-epr-informationrecipient.md),[EPRSPIDIdentifier](StructureDefinition-ch-core-epr-spid-identifier.md),[EPRTime](StructureDefinition-ch-ext-epr-time.md),[EncounterSupsectedReadmission](StructureDefinition-ch-ext-encounter-susp-readmission.md),[EntryResourceCrossReferences](StructureDefinition-ch-core-ext-entry-resource-cross-references.md),[GLNIdentifier](StructureDefinition-ch-core-gln-identifier.md),[Patient/ElisabethBroennimannByBFH](Patient-ElisabethBroennimannByBFH.md),[Patient/PersonEch011](Patient-PersonEch011.md),[Patient/UpiEprTestKrcmarevic](Patient-UpiEprTestKrcmarevic.md),[RelatedPerson/BiologicalFather](RelatedPerson-BiologicalFather.md),[Responsible](StructureDefinition-ch-ext-responsible.md),[UIDBIdentifier](StructureDefinition-ch-core-uidb-identifier.md),[VEKAIdentifier](StructureDefinition-ch-core-veka-identifier.md)and[ZSRIdentifier](StructureDefinition-ch-core-zsr-identifier.md)


* Some content from IHE® Copyright © 2015 [IHE International, Inc](http://www.ihe.net/Governance/#Intellectual_Property) .

* [IHE Format Code set for use with Document Sharing](https://profiles.ihe.net/fhir/ihe.formatcode.fhir/1.4.0/CodeSystem-formatcode.html): [CHCoreDocumentReference](StructureDefinition-ch-core-documentreference.md) and [DocumentReference/Docu](DocumentReference-Docu.md)


* The UCUM codes, UCUM table (regardless of format), and UCUM Specification are copyright 1999-2009, Regenstrief Institute, Inc. and the Unified Codes for Units of Measures (UCUM) Organization. All rights reserved. [https://ucum.org/trac/wiki/TermsOfUse](https://ucum.org/trac/wiki/TermsOfUse)

* [Unified Code for Units of Measure (UCUM)](http://terminology.hl7.org/6.5.0/CodeSystem-v3-ucum.html): [CHCoreQuantityWithEmedUnits](StructureDefinition-ch-core-quantity-with-emed-units.md), [MedicationAdministration/3-2-MedAdminFentanyl](MedicationAdministration-3-2-MedAdminFentanyl.md), [MedicationDispense/2-4-MedDispBeloczok](MedicationDispense-2-4-MedDispBeloczok.md), [MedicationRequest/2-6-MedReqNorvasc](MedicationRequest-2-6-MedReqNorvasc.md) and [MedicationStatement/1-1-MedStatTriatec](MedicationStatement-1-1-MedStatTriatec.md)


* This artefact includes content from SNOMED Clinical Terms® (SNOMED CT®) which is copyright of the International Health Terminology Standards Development Organisation (IHTSDO). Implementers of these artefacts must have the appropriate SNOMED CT Affiliate license - for more information contact [http://www.snomed.org/snomed-ct/getsnomed-ct](http://www.snomed.org/snomed-ct/getsnomed-ct) or info@snomed.org.

* [ch-ehealth-codesystem-format](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-2.16.756.5.30.1.127.3.10.10.html): [CHCoreDocumentReference](StructureDefinition-ch-core-documentreference.md)
* [ch-ehealth-codesystem-hpd](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-2.16.756.5.30.1.127.3.10.9.html): [CHCorePractitionerRole](StructureDefinition-ch-core-practitionerrole.md) and [CHCorePractitionerRoleEpr](StructureDefinition-ch-core-practitionerrole-epr.md)


* This material contains content from [LOINC](http://loinc.org). LOINC is copyright © 1995-2020, Regenstrief Institute, Inc. and the Logical Observation Identifiers Names and Codes (LOINC) Committee and is available at no cost under the [license](http://loinc.org/license). LOINC® is a registered United States trademark of Regenstrief Institute, Inc.

* [LOINC](http://terminology.hl7.org/6.5.0/CodeSystem-v3-loinc.html): [Bundle/1-ZuweisungZurRadiologischenDiagnostik-FHIR](Bundle-1-ZuweisungZurRadiologischenDiagnostik-FHIR.md), [Bundle/2-ResourceCrossReferencesDokument](Bundle-2-ResourceCrossReferencesDokument.md)...Show 6 more,[Bundle/DocumentContainingOriginalRepresentationAsPdfA](Bundle-DocumentContainingOriginalRepresentationAsPdfA.md),[CHCoreCompositionEPR](StructureDefinition-ch-core-composition-epr.md),[Composition/ResourceCrossReferencesDokumentComposition](Composition-ResourceCrossReferencesDokumentComposition.md),[Composition/ZuweisungZurRadiologischenDiagnostik](Composition-ZuweisungZurRadiologischenDiagnostik.md),[ImmunizationRecommendation/CHCoreImmunizationRecommendationExample](ImmunizationRecommendation-CHCoreImmunizationRecommendationExample.md)and[ServiceRequest/LabOrder](ServiceRequest-LabOrder.md)


* This material contains content that is copyright of SNOMED International. Implementers of these specifications must have the appropriate SNOMED CT Affiliate license - for more information contact [https://www.snomed.org/get-snomed](https://www.snomed.org/get-snomed) or [info@snomed.org](mailto:info@snomed.org).

* [SNOMED Clinical Terms&reg; (SNOMED CT&reg;)](http://tx.fhir.org/r4/ValueSet/snomedct): [AllergyIntolerance/AllergyToCatDander](AllergyIntolerance-AllergyToCatDander.md), [Bundle/1-ZuweisungZurRadiologischenDiagnostik-FHIR](Bundle-1-ZuweisungZurRadiologischenDiagnostik-FHIR.md)...Show 32 more,[Bundle/2-ResourceCrossReferencesDokument](Bundle-2-ResourceCrossReferencesDokument.md),[Bundle/DocumentContainingOriginalRepresentationAsPdfA](Bundle-DocumentContainingOriginalRepresentationAsPdfA.md),[CHCoreAllergyIntolerance](StructureDefinition-ch-core-allergyintolerance.md),[CHCoreClaim](StructureDefinition-ch-core-claim.md),[CHCoreCompositionEPR](StructureDefinition-ch-core-composition-epr.md),[CHCoreCondition](StructureDefinition-ch-core-condition.md),[CHCoreDocumentReference](StructureDefinition-ch-core-documentreference.md),[CHCoreImmunization](StructureDefinition-ch-core-immunization.md),[CHCoreImmunizationRecommendation](StructureDefinition-ch-core-immunization-recommendation.md),[CHCoreMedication](StructureDefinition-ch-core-medication.md),[CHCoreOrganization](StructureDefinition-ch-core-organization.md),[CHCoreOrganizationEPR](StructureDefinition-ch-core-organization-epr.md),[CHCorePractitionerRole](StructureDefinition-ch-core-practitionerrole.md),[CHCorePractitionerRoleEpr](StructureDefinition-ch-core-practitionerrole-epr.md),[CHCoreQuantityWithEmedUnits](StructureDefinition-ch-core-quantity-with-emed-units.md),[Claim/ClaimInpatientTreatmentPsychiatry](Claim-ClaimInpatientTreatmentPsychiatry.md),[Composition/ResourceCrossReferencesDokumentComposition](Composition-ResourceCrossReferencesDokumentComposition.md),[Composition/ZuweisungZurRadiologischenDiagnostik](Composition-ZuweisungZurRadiologischenDiagnostik.md),[Condition/Urticaria](Condition-Urticaria.md),[DocumentReference/Docu](DocumentReference-Docu.md),[EPRConfidentialityCode](StructureDefinition-ch-ext-epr-confidentialitycode.md),[Immunization/CHCoreImmunizationExample](Immunization-CHCoreImmunizationExample.md),[Immunization/ImmunizationEntry](Immunization-ImmunizationEntry.md),[ImmunizationRecommendation/CHCoreImmunizationRecommendationExample](ImmunizationRecommendation-CHCoreImmunizationRecommendationExample.md),[MedicationAdministration/3-2-MedAdminFentanyl](MedicationAdministration-3-2-MedAdminFentanyl.md),[MedicationDispense/2-4-MedDispBeloczok](MedicationDispense-2-4-MedDispBeloczok.md),[MedicationRequest/2-6-MedReqNorvasc](MedicationRequest-2-6-MedReqNorvasc.md),[MedicationStatement/1-1-MedStatTriatec](MedicationStatement-1-1-MedStatTriatec.md),[PractitionerRole/HPWengerRole](PractitionerRole-HPWengerRole.md),[RelatedPerson/BiologicalFather](RelatedPerson-BiologicalFather.md),[RoDiag Radiologieinstitut](Organization-Radiologieinstitut.md)and[Spital Seeblick](Organization-SpitalSeeblick.md)


* This material derives from the HL7 Terminology (THO). THO is copyright ©1989+ Health Level Seven International and is made available under the CC0 designation. For more licensing information see: [https://terminology.hl7.org/license.html](https://terminology.hl7.org/license.html)

* [AllergyIntolerance Clinical Status Codes](http://terminology.hl7.org/7.0.1/CodeSystem-allergyintolerance-clinical.html): [AllergyIntolerance/AllergyToCatDander](AllergyIntolerance-AllergyToCatDander.md)
* [AllergyIntolerance Verification Status](http://terminology.hl7.org/7.0.1/CodeSystem-allergyintolerance-verification.html): [AllergyIntolerance/AllergyToCatDander](AllergyIntolerance-AllergyToCatDander.md)
* [Claim Information Category Codes](http://terminology.hl7.org/7.0.1/CodeSystem-claiminformationcategory.html): [CHCoreClaim](StructureDefinition-ch-core-claim.md) and [Claim/ClaimInpatientTreatmentPsychiatry](Claim-ClaimInpatientTreatmentPsychiatry.md)
* [Condition Category Codes](http://terminology.hl7.org/7.0.1/CodeSystem-condition-category.html): [CHCoreCondition](StructureDefinition-ch-core-condition.md) and [Condition/Urticaria](Condition-Urticaria.md)
* [Condition Clinical Status Codes](http://terminology.hl7.org/7.0.1/CodeSystem-condition-clinical.html): [Condition/Urticaria](Condition-Urticaria.md)
* [ConditionVerificationStatus](http://terminology.hl7.org/7.0.1/CodeSystem-condition-ver-status.html): [Condition/Urticaria](Condition-Urticaria.md)
* [Consent PolicyRule Codes](http://terminology.hl7.org/7.0.1/CodeSystem-consentpolicycodes.html): [CHCoreEPRConsent](StructureDefinition-ch-core-epr-consent.md), [Consent/EncounterExcludedForEpr](Consent-EncounterExcludedForEpr.md) and [Consent/PatientHasEpr](Consent-PatientHasEpr.md)
* [Consent Scope Codes](http://terminology.hl7.org/7.0.1/CodeSystem-consentscope.html): [CHCoreEPRConsent](StructureDefinition-ch-core-epr-consent.md), [Consent/EncounterExcludedForEpr](Consent-EncounterExcludedForEpr.md) and [Consent/PatientHasEpr](Consent-PatientHasEpr.md)
* [Immunization Recommendation Status Codes](http://terminology.hl7.org/7.0.1/CodeSystem-immunization-recommendation-status.html): [ImmunizationRecommendation/CHCoreImmunizationRecommendationExample](ImmunizationRecommendation-CHCoreImmunizationRecommendationExample.md)
* [Process Priority Codes](http://terminology.hl7.org/7.0.1/CodeSystem-processpriority.html): [Claim/ClaimInpatientTreatmentPsychiatry](Claim-ClaimInpatientTreatmentPsychiatry.md)
* [AllergyIntoleranceCertainty](http://terminology.hl7.org/7.0.1/CodeSystem-reaction-event-certainty.html): [AllergyIntolerance/AllergyToCatDander](AllergyIntolerance-AllergyToCatDander.md)
* [identifierType](http://terminology.hl7.org/7.0.1/CodeSystem-v2-0203.html): [Bundle/1-ZuweisungZurRadiologischenDiagnostik-FHIR](Bundle-1-ZuweisungZurRadiologischenDiagnostik-FHIR.md), [Bundle/2-ResourceCrossReferencesDokument](Bundle-2-ResourceCrossReferencesDokument.md)...Show 9 more,[Bundle/DocumentContainingOriginalRepresentationAsPdfA](Bundle-DocumentContainingOriginalRepresentationAsPdfA.md),[CHCoreEncounter](StructureDefinition-ch-core-encounter.md),[CHCorePatient](StructureDefinition-ch-core-patient.md),[CHCorePatientEPR](StructureDefinition-ch-core-patient-epr.md),[Encounter/EncounterAccidentBroennimann](Encounter-EncounterAccidentBroennimann.md),[Encounter/EncounterAmbulantBroennimann](Encounter-EncounterAmbulantBroennimann.md),[Patient/FranzMuster](Patient-FranzMuster.md),[Patient/ImmunizationPatientExample](Patient-ImmunizationPatientExample.md)and[Patient/MaxMuster](Patient-MaxMuster.md)
* [ActCode](http://terminology.hl7.org/7.0.1/CodeSystem-v3-ActCode.html): [Consent/EncounterExcludedForEpr](Consent-EncounterExcludedForEpr.md), [Consent/PatientHasEpr](Consent-PatientHasEpr.md), [Encounter/EncounterAccidentBroennimann](Encounter-EncounterAccidentBroennimann.md) and [Encounter/EncounterAmbulantBroennimann](Encounter-EncounterAmbulantBroennimann.md)
* [MaritalStatus](http://terminology.hl7.org/7.0.1/CodeSystem-v3-MaritalStatus.html): [Patient/ElisabethBroennimannByBFH](Patient-ElisabethBroennimannByBFH.md) and [Patient/PersonEch011](Patient-PersonEch011.md)
* [ParticipationFunction](http://terminology.hl7.org/7.0.1/CodeSystem-v3-ParticipationFunction.html): [CHCoreEncounter](StructureDefinition-ch-core-encounter.md)
* [Religious Affiliation](http://terminology.hl7.org/7.0.1/CodeSystem-v3-ReligiousAffiliation.html): [Patient/FranzMuster](Patient-FranzMuster.md), [Patient/ManuelaMuster](Patient-ManuelaMuster.md) and [Patient/MarvinMuster](Patient-MarvinMuster.md)
* [RoleCode](http://terminology.hl7.org/7.0.1/CodeSystem-v3-RoleCode.html): [CHCorePatient](StructureDefinition-ch-core-patient.md), [CHCorePatientEPR](StructureDefinition-ch-core-patient-epr.md) and [Patient/UpiEprTestKrcmarevic](Patient-UpiEprTestKrcmarevic.md)
* [Substance Admin Substitution](http://terminology.hl7.org/7.0.1/CodeSystem-v3-substanceAdminSubstitution.html): [CHCoreMedicationDispense](StructureDefinition-ch-core-medicationdispense.md), [CHCoreMedicationRequest](StructureDefinition-ch-core-medicationrequest.md), [CHEMEDExtSubstitution](StructureDefinition-ch-emed-ext-substitution.md), [MedicationDispense/2-4-MedDispBeloczok](MedicationDispense-2-4-MedDispBeloczok.md) and [MedicationRequest/2-6-MedReqNorvasc](MedicationRequest-2-6-MedReqNorvasc.md)


* Unless otherwise indicated, reproduction of material posted on Council of Europe websites, and reproduction of photographs for which the Council of Europe holds copyright – see legal notice \“photo credits\” – is authorised for private use and for informational and educational uses relating to the Council of Europe’s work. This authorisation is subject to the condition that the source be indicated and no charge made for reproduction. Persons wishing to make some other use than those specified above, including commercial use, of information and text posted on these sites are asked to apply for prior written authorisation to the Council of Europe, Directorate of Communication.

* [EDQM Standard Terms](http://tx.fhir.org/r4/ValueSet/edqm): [Bundle/2-ResourceCrossReferencesDokument](Bundle-2-ResourceCrossReferencesDokument.md), [CHCoreImmunization](StructureDefinition-ch-core-immunization.md), [Immunization/CHCoreImmunizationExample](Immunization-CHCoreImmunizationExample.md) and [Immunization/ImmunizationEntry](Immunization-ImmunizationEntry.md)


### Cross Version Analysis

This is an R4 IG. None of the features it uses are changed in R4B, so it can be used as is with R4B systems. Packages for both [R4 (ch.fhir.ig.ch-core.r4)](package.r4.tgz) and [R4B (ch.fhir.ig.ch-core.r4b)](package.r4b.tgz) are available.

### Dependency Table






### Globals Table

*There are no Global profiles defined*



## Resource Content

```json
{
  "resourceType" : "ImplementationGuide",
  "id" : "ch.fhir.ig.ch-core",
  "url" : "http://fhir.ch/ig/ch-core/ImplementationGuide/ch.fhir.ig.ch-core",
  "version" : "6.0.0",
  "name" : "CH_Core",
  "title" : "CH Core (R4)",
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
  "description" : "FHIR implementation guide CH Core",
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
  "packageId" : "ch.fhir.ig.ch-core",
  "license" : "CC0-1.0",
  "fhirVersion" : ["4.0.1"],
  "dependsOn" : [
    {
      "id" : "ch_fhir_ig_ch_term",
      "uri" : "http://fhir.ch/ig/ch-term/ImplementationGuide/ch.fhir.ig.ch-term",
      "packageId" : "ch.fhir.ig.ch-term",
      "version" : "3.3.x"
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
      "version" : "5.3.0-ballot-tc1"
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
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "urn:oid:2.16.840.1.113883.6.316"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "urn:oid:2.16.756.5.30.1.127.3.10.10"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-ext-substitution"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-ext-treatmentreason"
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
            "valueString" : "http://fhir.ch/ig/ch-core/history.html"
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
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "urn:oid:2.16.840.1.113883.6.316"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "urn:oid:2.16.756.5.30.1.127.3.10.10"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-ext-substitution"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-ext-treatmentreason"
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
            "valueString" : "http://fhir.ch/ig/ch-core/history.html"
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
            "valueString" : "MedicationStatement"
          }
        ],
        "reference" : {
          "reference" : "MedicationStatement/1-1-MedStatTriatec"
        },
        "name" : "1-1 Medication Statement with Medication Triatec",
        "description" : "Example for MedicationStatement (one dosage element)",
        "exampleCanonical" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-medicationstatement"
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
        "description" : "Example for MedicationDispense (two dosage elements)",
        "exampleCanonical" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-medicationdispense"
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
        "description" : "Example for MedicationRequest (with substitution)",
        "exampleCanonical" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-medicationrequest"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:complex-type"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-core-address-ech-11-placeofbirth"
        },
        "name" : "Address for Place of Birth",
        "description" : "PlaceOfBirth for ech-11",
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
          "reference" : "StructureDefinition/ch-core-address-ech-11-placeoforigin"
        },
        "name" : "Address for Place of Origin",
        "description" : "Place of Origin for eCH-0011",
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
          "reference" : "StructureDefinition/ch-ext-ech-10-linetype"
        },
        "name" : "Address Line Type",
        "description" : "eCH-0010: Extension to define line types for addresses",
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
          "reference" : "Practitioner/AgparMarc"
        },
        "name" : "Agpar Marc",
        "description" : "Practitioner with GLN and name",
        "exampleCanonical" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:complex-type"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-core-ahvn13-identifier"
        },
        "name" : "AHVN13 / NAVS13 Identifier",
        "description" : "Identifier holding a 13 digit social security number. The number shall have exactly 13 digits and shall not contain point characters for separation.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "AllergyIntolerance"
          }
        ],
        "reference" : {
          "reference" : "AllergyIntolerance/AllergyToCatDander"
        },
        "name" : "AllergyToCatDander",
        "description" : "Example for AllergyIntolerance",
        "exampleCanonical" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-allergyintolerance"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Practitioner"
          }
        ],
        "reference" : {
          "reference" : "Practitioner/AllzeitBereit"
        },
        "name" : "Allzeit Bereit",
        "description" : "Practitioner EPR with name with prefixes (salutation, academic title, legal status) and suffix (‘Facharzt für Allgemeine Medizin’)",
        "exampleCanonical" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Practitioner"
          }
        ],
        "reference" : {
          "reference" : "Practitioner/ImmunizationAuthorExample"
        },
        "name" : "Author example for immunization",
        "description" : "Example of Practitioner resource for use in Swiss specific immunization use cases.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-ext-author"
        },
        "name" : "Author of the content",
        "description" : "Extension to reference the person (and her/his organization) who is responsible for the content \n    (e.g. an author of an eMedication document or a recorder of an immunization). \n    This extension is used to differentiate on entry level between the author of the content (represented with this extension) and \n    the author of the medical decision or the performer of an event (represented e.g. with Resource.performer/informationSource).",
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
          "reference" : "StructureDefinition/ch-core-ber-identifier"
        },
        "name" : "BER Identifier",
        "description" : "Identifier holding a number for BER (Business and Enterprise Register), BUR (Betriebs- und Unternehmensregister), REE (Registre des entreprises et des établissements), RIS (Registro delle imprese e degli stabilimenti)",
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
          "reference" : "StructureDefinition/ch-ext-bfs-ms-admitrole"
        },
        "name" : "BFS Extension Medical Statistic: Admit Role for Encounter",
        "description" : "BFS Extension Admit Role for Encounter",
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
          "reference" : "StructureDefinition/ch-ext-bfs-ms-dischargedestination"
        },
        "name" : "BFS Extension Medical Statistic: Discharge Destination for Encounter",
        "description" : "BFS Extension Discharge Destination for Encounter",
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
          "reference" : "StructureDefinition/ch-ext-bfs-ms-dischargedecision"
        },
        "name" : "BFS Extension Medical Statistic: Discharge Décision for Encounter",
        "description" : "BFS Extension Discharge Décision for Encounter",
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
          "reference" : "StructureDefinition/ch-ext-biller"
        },
        "name" : "Biller",
        "description" : "Extension to reference the biller in the case of a professional service or poduct provided.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "RelatedPerson"
          }
        ],
        "reference" : {
          "reference" : "RelatedPerson/BiologicalFather"
        },
        "name" : "Biological Father",
        "description" : "Example for RelatedPerson",
        "exampleCanonical" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-relatedperson"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:complex-type"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-core-address"
        },
        "name" : "CH Core Address",
        "description" : "address incorporating eCH-0010 postal address extensions",
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
          "reference" : "StructureDefinition/ch-core-allergyintolerance"
        },
        "name" : "CH Core AllergyIntolerance",
        "description" : "Base definition of the AllergyIntolerance resource for use in Swiss specific use cases.",
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
          "reference" : "StructureDefinition/ch-core-claim"
        },
        "name" : "CH Core Claim",
        "description" : "Base definition of the claim resource for the representation of a list of professional services (e.g. doctor's visit) and products (e.g. medication) that have been or are to be provided for a patient. The profile defines general basic elements that can occur in Swiss use cases. In Switzerland, there are external standards for administrative processes between service providers and payers (e.g. Forum Datenaustausch, SHIP, eCH), therefore see the corresponding mapping.",
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
          "reference" : "StructureDefinition/ch-core-composition"
        },
        "name" : "CH Core Composition",
        "description" : "Base definition of the Composition resource for use in Swiss specific use cases.",
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
          "reference" : "StructureDefinition/ch-core-composition-epr"
        },
        "name" : "CH Core Composition EPR",
        "description" : "Definition of the Composition resource for use in the context of the electronic patient record (EPR).",
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
          "reference" : "StructureDefinition/ch-core-condition"
        },
        "name" : "CH Core Condition",
        "description" : "Base definition of the Condition resource for use in Swiss specific use cases.",
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
          "reference" : "StructureDefinition/ch-core-contactpoint-ech-46-email"
        },
        "name" : "CH Core ContactPoint eCH-0046 Email",
        "description" : "E-mail address as contact point of a person or organization according to eCH-0046",
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
          "reference" : "StructureDefinition/ch-core-contactpoint-ech-46-internet"
        },
        "name" : "CH Core ContactPoint eCH-0046 Internet",
        "description" : "Internet address as contact point of a person or organization according to eCH-0046",
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
          "reference" : "StructureDefinition/ch-core-contactpoint-ech-46-phone"
        },
        "name" : "CH Core ContactPoint eCH-0046 Phone",
        "description" : "Phone number as contact point of a person or organization according to eCH-0046",
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
          "reference" : "StructureDefinition/ch-core-coverage"
        },
        "name" : "CH Core Coverage",
        "description" : "Base definition of the Coverage resource for use in Swiss specific use cases.",
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
          "reference" : "StructureDefinition/ch-core-document"
        },
        "name" : "CH Core Document",
        "description" : "Base definition of the Bundle resource for use in Swiss specific use cases.",
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
          "reference" : "StructureDefinition/ch-core-document-epr"
        },
        "name" : "CH Core Document EPR",
        "description" : "Definition of the Bundle resource for use in the context of the electronic patient record (EPR).",
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
          "reference" : "StructureDefinition/ch-core-documentreference"
        },
        "name" : "CH Core DocumentReference",
        "description" : "Base definition of the DocumentReference resource for use in Swiss specific use cases.",
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
          "reference" : "StructureDefinition/ch-core-dosage"
        },
        "name" : "CH Core Dosage",
        "description" : "Dosage for medication use cases",
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
          "reference" : "StructureDefinition/ch-core-encounter"
        },
        "name" : "CH Core Encounter",
        "description" : "Base definition of the Encounter resource for use in Swiss specific use cases.",
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
          "reference" : "StructureDefinition/ch-core-epr-consent"
        },
        "name" : "CH Core EPR-Consent",
        "description" : "Definition of the Consent resource to document in an external system (outside the EPR) that a patient has an electronic patient record (EPR) in Switzerland. \nThis profile is used by healthcare organizations to track which patients have an EPR. Optionally, specific encounters can be excluded from EPR publication by referencing them in the provision element, documenting the patient's request that certain information should not be published to their EPR. \n\nNote: This profile is NOT used to manage actual consent conditions within the EPR itself - those are managed through proper PPQ Consents (see CH EPR FHIR IG).",
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
          "reference" : "StructureDefinition/ch-core-immunization"
        },
        "name" : "CH Core Immunization",
        "description" : "Base definition of the Immunization resource for use in Swiss specific use cases.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Immunization"
          }
        ],
        "reference" : {
          "reference" : "Immunization/CHCoreImmunizationExample"
        },
        "name" : "CH Core Immunization Example",
        "description" : "Example of Immunization resource for use in Swiss specific use cases.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-immunization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-core-immunization-recommendation"
        },
        "name" : "CH Core Immunization Recommendation",
        "description" : "Base definition of the ImmunizationRecommendation resource for use in Swiss specific use cases.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ImmunizationRecommendation"
          }
        ],
        "reference" : {
          "reference" : "ImmunizationRecommendation/CHCoreImmunizationRecommendationExample"
        },
        "name" : "CH Core ImmunizationRecommendation Example",
        "description" : "Example of ImmunizationRecommendation resource for use in Swiss specific use cases.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-immunization-recommendation"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-core-location"
        },
        "name" : "CH Core Location",
        "description" : "Base definition of the Location resource for use in Swiss specific use cases.",
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
          "reference" : "StructureDefinition/ch-core-medication"
        },
        "name" : "CH Core Medication",
        "description" : "Base definition of the Medication resource for use in Swiss specific use cases.",
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
          "reference" : "StructureDefinition/ch-core-medicationadministration"
        },
        "name" : "CH Core MedicationAdministration",
        "description" : "Base definition of the MedicationAdministration resource for use in Swiss specific use cases.",
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
          "reference" : "StructureDefinition/ch-core-medicationdispense"
        },
        "name" : "CH Core MedicationDispense",
        "description" : "Base definition of the MedicationDispense resource for use in Swiss specific use cases.",
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
          "reference" : "StructureDefinition/ch-core-medicationrequest"
        },
        "name" : "CH Core MedicationRequest",
        "description" : "Base definition of the MedicationRequest resource for use in Swiss specific use cases.",
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
          "reference" : "StructureDefinition/ch-core-medicationstatement"
        },
        "name" : "CH Core MedicationStatement",
        "description" : "Base definition of the MedicationStatement resource for use in Swiss specific use cases.",
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
          "reference" : "StructureDefinition/ch-core-organization"
        },
        "name" : "CH Core Organization",
        "description" : "Base definition of the Organization resource for use in Swiss specific use cases.",
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
          "reference" : "StructureDefinition/ch-core-organization-epr"
        },
        "name" : "CH Core Organization EPR",
        "description" : "Definition of the Organization resource for use in the context of the electronic patient record (EPR).",
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
          "reference" : "StructureDefinition/ch-core-patient"
        },
        "name" : "CH Core Patient",
        "description" : "Base definition of the Patient resource for use in Swiss specific use cases. Relevant are definitions by the eCH-0010 V7.0 data standard mailing address and eCH-0011 V8.1 data standard personal data.\nThe CH Core Patient is based upon the core FHIR Patient Resource and designed to meet the applicable patient demographic data elements in Switzerland. \nSee also [BFS](https://www.bfs.admin.ch/bfs/de/home/register/personenregister/registerharmonisierung/nomenklaturen.html) for further information",
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
          "reference" : "StructureDefinition/ch-core-patient-epr"
        },
        "name" : "CH Core Patient EPR",
        "description" : "Definition of the Patient resource for use in the context of the electronic patient record (EPR). It is used to include the patient in an EPR document (referenced in Composition/DocumentReference).",
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
          "reference" : "StructureDefinition/ch-core-address-ech-10"
        },
        "name" : "CH Core Postal Address",
        "description" : "Postal address according to eCH-0010",
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
          "reference" : "StructureDefinition/ch-core-practitioner"
        },
        "name" : "CH Core Practitioner",
        "description" : "Base definition of the Practitioner resource for use in Swiss specific use cases.",
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
          "reference" : "StructureDefinition/ch-core-practitioner-epr"
        },
        "name" : "CH Core Practitioner EPR",
        "description" : "Definition of the Practitioner resource for use in the context of the electronic patient record (EPR).",
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
          "reference" : "StructureDefinition/ch-core-practitionerrole"
        },
        "name" : "CH Core PractitionerRole",
        "description" : "Base definition of the PractitionerRole resource for use in Swiss specific use cases.",
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
          "reference" : "StructureDefinition/ch-core-practitionerrole-epr"
        },
        "name" : "CH Core PractitionerRole EPR",
        "description" : "Definition of the PractitionerRole resource for use in the context of the electronic patient record (EPR).",
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
          "reference" : "StructureDefinition/ch-core-quantity-with-emed-units"
        },
        "name" : "CH Core Quantity with EMED Units",
        "description" : "A quantity with defined units",
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
          "reference" : "StructureDefinition/ch-core-range-with-emed-units"
        },
        "name" : "CH Core Range with EMED Units",
        "description" : "A range with defined quantity/units",
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
          "reference" : "StructureDefinition/ch-core-relatedperson"
        },
        "name" : "CH Core RelatedPerson",
        "description" : "Base definition of the RelatedPerson resource for use in Swiss specific use cases.",
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
          "reference" : "StructureDefinition/ch-core-servicerequest"
        },
        "name" : "CH Core ServiceRequest",
        "description" : "Base definition of the ServiceRequest resource for use in Swiss specific use cases.",
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
          "reference" : "StructureDefinition/ch-emed-ratio-with-emed-units"
        },
        "name" : "CH EMED Ratio with EMED Units",
        "description" : "A ratio with defined units",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Claim"
          }
        ],
        "reference" : {
          "reference" : "Claim/ClaimInpatientTreatmentPsychiatry"
        },
        "name" : "Claim Inpatient Treatment Psychiatry",
        "description" : "Example for CH Core Claim",
        "exampleCanonical" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-claim"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Consent"
          }
        ],
        "reference" : {
          "reference" : "Consent/PatientHasEpr"
        },
        "name" : "Consent for Swiss EPR",
        "description" : "Consent that Patient has a Swiss EPR",
        "exampleCanonical" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-epr-consent"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Consent"
          }
        ],
        "reference" : {
          "reference" : "Consent/EncounterExcludedForEpr"
        },
        "name" : "Consent for Swiss EPR with Encounter exclusions",
        "description" : "Consent that Patient has a Swiss EPR but exclude it for a specific Encounter",
        "exampleCanonical" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-epr-consent"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Coverage"
          }
        ],
        "reference" : {
          "reference" : "Coverage/CoverageBroennimann"
        },
        "name" : "Coverage Broennimann",
        "description" : "Coverage with Mrs. Broenimann as beneficiary and the health insurance Sanitas as issuer of the policy (represented as contained resource)",
        "exampleCanonical" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-coverage"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "DocumentReference"
          }
        ],
        "reference" : {
          "reference" : "DocumentReference/Docu"
        },
        "name" : "DocumentReference to a PDF",
        "description" : "DocumentReference with metadata about the document and the referenced document (PDF) as Base64 attachment",
        "exampleCanonical" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-documentreference"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/2-ResourceCrossReferencesDokument"
        },
        "name" : "Dokument Eintrag referenz zu anderem Eintrag in einem anderen Dokument",
        "description" : "Ein Beispieldokument mit einem Eintrag welcher die Extension zur kreuzreferenzierung auf einen anderen Eintrag in einem anderen Dokument enthält.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-document"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-ext-ech-7-municipalityid"
        },
        "name" : "eCH-0007 Municipality Id – BFS Gemeindenummer",
        "description" : "eCH-0007: Extension to define a BFS Number for a municipality",
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
          "reference" : "StructureDefinition/ch-ext-ech-46-emailcategory"
        },
        "name" : "eCH-0046 Email Category",
        "description" : "Extension to define the e-mail category according to eCH-0046",
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
          "reference" : "StructureDefinition/ch-ext-ech-46-internetcategory"
        },
        "name" : "eCH-0046 Internet Category",
        "description" : "Extension to define the internet category according to eCH-0046",
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
          "reference" : "StructureDefinition/ch-ext-ech-46-phonecategory"
        },
        "name" : "eCH-0046 Phone Category",
        "description" : "Extension to define the phone category according to eCH-0046",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Patient"
          }
        ],
        "reference" : {
          "reference" : "Patient/ElisabethBroennimannByBFH"
        },
        "name" : "Elisabeth Broennimann by BFH",
        "description" : "Patient with insurance card number as identifier, contact details, marital status (eCH & FHIR) and reference to the general practitioner (GP)",
        "exampleCanonical" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Encounter"
          }
        ],
        "reference" : {
          "reference" : "Encounter/EncounterAccidentBroennimann"
        },
        "name" : "Encounter Accident Broennimann",
        "description" : "Inpatient Encounter of Mrs. Broennimann which is flagged as an accident",
        "exampleCanonical" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-encounter"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Encounter"
          }
        ],
        "reference" : {
          "reference" : "Encounter/EncounterAmbulantBroennimann"
        },
        "name" : "Encounter Ambulant Broennimann",
        "description" : "Ambulant Encounter of Mrs. Broennimann, representing the visit number (Fallnummer) and the BFS variables",
        "exampleCanonical" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-encounter"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-ext-encounter-susp-readmission"
        },
        "name" : "Encounter, Suspected Readmission",
        "description" : "Encounter Extension for suspected readmission",
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
          "reference" : "StructureDefinition/ch-core-ext-entry-resource-cross-references"
        },
        "name" : "Entry Resource Cross References",
        "description" : "Extension to make a reference beween resources as entries in i.e. document bundles.",
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
          "reference" : "StructureDefinition/ch-ext-epr-confidentialitycode"
        },
        "name" : "EPR Confidentiality Code",
        "description" : "Extension for the confidentiality code according to the Swiss EPR regulation",
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
          "reference" : "StructureDefinition/ch-ext-epr-dataenterer"
        },
        "name" : "EPR Data Enterer",
        "description" : "Extension to define the information about the person and organization that entered data and the time of the data input. **Note:** This extension has its origin from CDA and is deprecated. It will be removed in a future version.",
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
          "reference" : "StructureDefinition/ch-ext-epr-informationrecipient"
        },
        "name" : "EPR Information Recipient",
        "description" : "Extension for a recipient of this document (corresponds to the addressee of a letter - person or organization). **DEPRECATED**: This extension has CDA origins and will be removed in a future version.",
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
          "reference" : "StructureDefinition/ch-ext-epr-time"
        },
        "name" : "EPR Time",
        "description" : "Additional timestamp for the author or other elements. **Note:** This extension has its origin from CDA and is deprecated. It will be removed in a future version.",
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
          "reference" : "StructureDefinition/ch-core-epr-spid-identifier"
        },
        "name" : "EPR-SPID Identifier",
        "description" : "EPR-SPID Identifier (https://www.fedlex.admin.ch/eli/cc/2017/205/de)",
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
          "reference" : "StructureDefinition/ch-ext-ech-11-firstname"
        },
        "name" : "First Name",
        "description" : "eCH-0011: Extension to define first name type",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Patient"
          }
        ],
        "reference" : {
          "reference" : "Patient/FranzMuster"
        },
        "name" : "Franz Muster",
        "description" : "Patient with place of birth, place of origin (Heimatort), religion, local PID and language of correspondence",
        "exampleCanonical" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:complex-type"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-core-gln-identifier"
        },
        "name" : "GLN Identifier",
        "description" : "Identifier holding a 13 digit GLN",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/GruppenpraxisCH"
        },
        "name" : "Gruppenpraxis CH",
        "description" : "Organization EPR with GLN, different contact details (e.g. phone, email) and address",
        "exampleCanonical" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "PractitionerRole"
          }
        ],
        "reference" : {
          "reference" : "PractitionerRole/HPWengerRole"
        },
        "name" : "Hanspeter Wenger @ Spital Seeblick",
        "description" : "PractitionerRole EPR with profession (role) and specialisation",
        "exampleCanonical" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole-epr"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Practitioner"
          }
        ],
        "reference" : {
          "reference" : "Practitioner/HanspeterWengerByBFH"
        },
        "name" : "Hanspeter Wenger by BFH",
        "description" : "Practitioner with GLN and ZSR, name with prefixes, gender and birth date",
        "exampleCanonical" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:complex-type"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-core-humanname"
        },
        "name" : "Human Name",
        "description" : "Name with extensions for ech-11",
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
          "reference" : "StructureDefinition/ch-ext-accident"
        },
        "name" : "If an encounter is caused by an accident",
        "description" : "Extension to define an encounter that is caused by an accident and at which time the accident happened",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Immunization"
          }
        ],
        "reference" : {
          "reference" : "Immunization/ImmunizationEntry"
        },
        "name" : "Immunization example for Immunization Administration",
        "description" : "An Immunization example with extension for cross dokument referencing.",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:complex-type"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-core-veka-identifier"
        },
        "name" : "Insurance Card Number (Identifier)",
        "description" : "Identifier in 20-digit format. The number shall have exactly 20 digits and start with 807560.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/ClaimProvider"
        },
        "name" : "Klinik für Psychiatrie",
        "description" : "Example of a organization used in the claim example",
        "exampleCanonical" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/ClaimBiller"
        },
        "name" : "Klinik für Psychiatrie",
        "description" : "Example of a organization used in the claim example",
        "exampleCanonical" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Coverage"
          }
        ],
        "reference" : {
          "reference" : "Coverage/ClaimCoverage"
        },
        "name" : "Krankenkasse AG",
        "description" : "Example of a coverage used in the claim example",
        "exampleCanonical" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-coverage"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ServiceRequest"
          }
        ],
        "reference" : {
          "reference" : "ServiceRequest/LabOrder"
        },
        "name" : "Laboratory Order",
        "description" : "Example for ServiceRequest",
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
          "reference" : "Patient/ManuelaMuster"
        },
        "name" : "Manuela Muster",
        "description" : "Patient with EPR-SPID ending on 0",
        "exampleCanonical" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-ext-ech-11-maritaldata-separation"
        },
        "name" : "Marital Data - Separation Type",
        "description" : "eCH-0011: Extension to define the separation type. For married but separated persons and for persons in a registered partnership but living separately.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Patient"
          }
        ],
        "reference" : {
          "reference" : "Patient/MarvinMuster"
        },
        "name" : "Marvin Muster",
        "description" : "Patient with AHVN13/NAVS13 as identifier",
        "exampleCanonical" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Patient"
          }
        ],
        "reference" : {
          "reference" : "Patient/MaxMuster"
        },
        "name" : "Max Muster",
        "description" : "Patient EPR with eCH-0011 family & and given name, eCH-0046 contact points and reference to the organization that is the custodian of the patient record",
        "exampleCanonical" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient"
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
        "description" : "Example for MedicationAdministration",
        "exampleCanonical" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-medicationadministration"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-ext-ech-11-name"
        },
        "name" : "Name",
        "description" : "eCH-0011: Extension to define name type",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/ImmunizationOrganizationExample"
        },
        "name" : "Organization example for immunization",
        "description" : "Example of Organization resource for use in Swiss specific immunization use cases.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/ResourceCrossReferencesDokumentComposition"
        },
        "name" : "Patient Document 1 Stammgemeinschaft Composition",
        "description" : "Example for Composition Immunization Administration",
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
          "reference" : "Patient/ImmunizationPatientExample"
        },
        "name" : "Patient example for immunization",
        "description" : "Example of Patient resource for use in Swiss specific immunization use cases.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Patient"
          }
        ],
        "reference" : {
          "reference" : "Patient/PersonEch011"
        },
        "name" : "Person eCH-011",
        "description" : "Patient eCH-011 with names, marital status and separation type, delivery address if it is not the address of the patient (detailed explanation in narrative)",
        "exampleCanonical" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Patient"
          }
        ],
        "reference" : {
          "reference" : "Patient/ClaimPatient"
        },
        "name" : "Peter Muster",
        "description" : "Example of a patient used in the claim example",
        "exampleCanonical" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/PhysiotherapieCH"
        },
        "name" : "Physiotherapie CH",
        "description" : "Organization with GLN (ending on 0), UIDB, BER",
        "exampleCanonical" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-core-patient-ech-11-placeofbirth"
        },
        "name" : "Place of Birth according to eCH-0011",
        "description" : "The registered place of birth of the patient.",
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
          "reference" : "StructureDefinition/ch-core-patient-ech-11-placeoforigin"
        },
        "name" : "Place of Origin according to eCH-0011",
        "description" : "The place of origin of the patient.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "PractitionerRole"
          }
        ],
        "reference" : {
          "reference" : "PractitionerRole/ImmunizationPractitionerRoleExample"
        },
        "name" : "PractitionerRole example for immunization",
        "description" : "Example of PractitionerRole resource for use in Swiss specific immunization use cases.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/Radiologieinstitut"
        },
        "name" : "Radiologieinstitut",
        "description" : "Organization EPR with specified healthcare facility type (Diagnostic institution)",
        "exampleCanonical" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-ext-responsible"
        },
        "name" : "Responsible",
        "description" : "Extension to reference the responsible for a professional service or product provided.",
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
          "reference" : "Practitioner/SchreibKraft"
        },
        "name" : "Schreib Kraft",
        "description" : "Practitioner (physician assistants) with local identifier (neither GLN nor ZSR)",
        "exampleCanonical" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "PractitionerRole"
          }
        ],
        "reference" : {
          "reference" : "PractitionerRole/SchreibKraftAtGruppenpraxisCH"
        },
        "name" : "Schreib Kraft @ Gruppenpraxis CH",
        "description" : "PractitionerRole with referenced practitioner and organization",
        "exampleCanonical" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/SpitalSeeblick"
        },
        "name" : "Spital Seeblick",
        "description" : "Organization with specified healthcare facility type (Hospital)",
        "exampleCanonical" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-emed-ext-substitution"
        },
        "name" : "Substitution",
        "description" : "This extension is used to indicate whether the medication can be substituted for this patient, i.e. whether it is allowed. \n                        (For a prescription, MedicationRequest.substitution is used to record whether a substitution is allowed or not. \n                        When dispensing, a performed substitution is recorded in MedicationDispense.substitution.)",
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
          "reference" : "Bundle/DocumentContainingOriginalRepresentationAsPdfA"
        },
        "name" : "Transfer note for radiological diagnostics",
        "description" : "EPR Document containing original representation as PDF-A (fullUrls of entries with ‘urn:uuid:’)",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-emed-ext-treatmentreason"
        },
        "name" : "Treatment Reason",
        "description" : "Extension to represent the treatment reason",
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
          "reference" : "StructureDefinition/ch-core-uidb-identifier"
        },
        "name" : "UIDB Identifier",
        "description" : "Identifier holding a number for UIDB (Unique Identification Business), UID (Verwendung der Unternehmens-Identifikationsnummer), IDE (Utilisation du numéro d'identification des entreprises), IDI (Utilizzo del numero d'identificazione delle imprese)",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Patient"
          }
        ],
        "reference" : {
          "reference" : "Patient/UpiEprTestKrcmarevic"
        },
        "name" : "UPI EPR Test Krcmarevic",
        "description" : "Test Patient from UPI for Swiss EPR Projectathon",
        "exampleCanonical" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Condition"
          }
        ],
        "reference" : {
          "reference" : "Condition/Urticaria"
        },
        "name" : "Urticaria",
        "description" : "Example for Condition",
        "exampleCanonical" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-condition"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:complex-type"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-core-zsr-identifier"
        },
        "name" : "ZSR Identifier",
        "description" : "Identifier holding a number for ZSR (Zahlstellenregister), RCC (Registre des codes-créanciers), RCC (Registro dei codici creditori)",
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
          "reference" : "Composition/ZuweisungZurRadiologischenDiagnostik"
        },
        "name" : "Zuweisung zur radiologischen Diagnostik",
        "description" : "Composition EPR with the information about the transfer in different sections",
        "exampleCanonical" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-composition"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/1-ZuweisungZurRadiologischenDiagnostik-FHIR"
        },
        "name" : "Zuweisung zur radiologischen Diagnostik",
        "description" : "Document EPR (fullUrls of entries with ‘http’)",
        "exampleCanonical" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-document"
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
              "valueUrl" : "usage-swiss-core-artifacts.html"
            }
          ],
          "nameUrl" : "usage-swiss-core-artifacts.html",
          "title" : "Usage of Swiss Core Artifacts",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "sct-swiss-ext.html"
            }
          ],
          "nameUrl" : "sct-swiss-ext.html",
          "title" : "SNOMED CT Swiss Extension",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "readable-representation-epr-docs.html"
            }
          ],
          "nameUrl" : "readable-representation-epr-docs.html",
          "title" : "Readable Representation of EPR Documents",
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
