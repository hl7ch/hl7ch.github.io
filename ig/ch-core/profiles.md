# Profiles - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* **Profiles**

## Profiles

### Resource Profiles

The following profiles set the minimum expectations to record, search and fetch health data associated with a Patient:

* [CH Core AllergyIntolerance](StructureDefinition-ch-core-allergyintolerance.md) 
Base definition of the AllergyIntolerance resource for use in Swiss specific use cases. 

* [CH Core Claim](StructureDefinition-ch-core-claim.md) 
Base definition of the claim resource for the representation of a list of professional services (e.g. doctor's visit) and products (e.g. medication) that have been or are to be provided for a patient. The profile defines general basic elements that can occur in Swiss use cases. In Switzerland, there are external standards for administrative processes between service providers and payers (e.g. Forum Datenaustausch, SHIP, eCH), therefore see the corresponding mapping. 

* [CH Core Composition](StructureDefinition-ch-core-composition.md) 
Base definition of the Composition resource for use in Swiss specific use cases. 

* [CH Core Composition EPR](StructureDefinition-ch-core-composition-epr.md) 
Definition of the Composition resource for use in the context of the electronic patient record (EPR). 

* [CH Core Condition](StructureDefinition-ch-core-condition.md) 
Base definition of the Condition resource for use in Swiss specific use cases. 

* [CH Core Coverage](StructureDefinition-ch-core-coverage.md) 
Base definition of the Coverage resource for use in Swiss specific use cases. 

* [CH Core Document](StructureDefinition-ch-core-document.md) 
Base definition of the Bundle resource for use in Swiss specific use cases. 

* [CH Core Document EPR](StructureDefinition-ch-core-document-epr.md) 
Definition of the Bundle resource for use in the context of the electronic patient record (EPR). 

* [CH Core DocumentReference](StructureDefinition-ch-core-documentreference.md) 
Base definition of the DocumentReference resource for use in Swiss specific use cases. 

* [CH Core EPR-Consent](StructureDefinition-ch-core-epr-consent.md) 
Definition of the Consent resource to document in an external system (outside the EPR) that a patient has an electronic patient record (EPR) in Switzerland. This profile is used by healthcare organizations to track which patients have an EPR. Optionally, specific encounters can be excluded from EPR publication by referencing them in the provision element, documenting the patient's request that certain information should not be published to their EPR. 
Note: This profile is NOT used to manage actual consent conditions within the EPR itself - those are managed through proper PPQ Consents (see CH EPR FHIR IG). 

* [CH Core Encounter](StructureDefinition-ch-core-encounter.md) 
Base definition of the Encounter resource for use in Swiss specific use cases. 

* [CH Core Immunization](StructureDefinition-ch-core-immunization.md) 
Base definition of the Immunization resource for use in Swiss specific use cases. 

* [CH Core Immunization Recommendation](StructureDefinition-ch-core-immunization-recommendation.md) 
Base definition of the ImmunizationRecommendation resource for use in Swiss specific use cases. 

* [CH Core Location](StructureDefinition-ch-core-location.md) 
Base definition of the Location resource for use in Swiss specific use cases. 

* [CH Core Medication](StructureDefinition-ch-core-medication.md) 
Base definition of the Medication resource for use in Swiss specific use cases. 

* [CH Core MedicationAdministration](StructureDefinition-ch-core-medicationadministration.md) 
Base definition of the MedicationAdministration resource for use in Swiss specific use cases. 

* [CH Core MedicationDispense](StructureDefinition-ch-core-medicationdispense.md) 
Base definition of the MedicationDispense resource for use in Swiss specific use cases. 

* [CH Core MedicationRequest](StructureDefinition-ch-core-medicationrequest.md) 
Base definition of the MedicationRequest resource for use in Swiss specific use cases. 

* [CH Core MedicationStatement](StructureDefinition-ch-core-medicationstatement.md) 
Base definition of the MedicationStatement resource for use in Swiss specific use cases. 

* [CH Core Organization](StructureDefinition-ch-core-organization.md) 
Base definition of the Organization resource for use in Swiss specific use cases. 

* [CH Core Organization EPR](StructureDefinition-ch-core-organization-epr.md) 
Definition of the Organization resource for use in the context of the electronic patient record (EPR). 

* [CH Core Patient](StructureDefinition-ch-core-patient.md) 
Base definition of the Patient resource for use in Swiss specific use cases. Relevant are definitions by the eCH-0010 V7.0 data standard mailing address and eCH-0011 V8.1 data standard personal data. The CH Core Patient is based upon the core FHIR Patient Resource and designed to meet the applicable patient demographic data elements in Switzerland. See also[BFS](https://www.bfs.admin.ch/bfs/de/home/register/personenregister/registerharmonisierung/nomenklaturen.html)for further information 

* [CH Core Patient EPR](StructureDefinition-ch-core-patient-epr.md) 
Definition of the Patient resource for use in the context of the electronic patient record (EPR). It is used to include the patient in an EPR document (referenced in Composition/DocumentReference). 

* [CH Core Practitioner](StructureDefinition-ch-core-practitioner.md) 
Base definition of the Practitioner resource for use in Swiss specific use cases. 

* [CH Core Practitioner EPR](StructureDefinition-ch-core-practitioner-epr.md) 
Definition of the Practitioner resource for use in the context of the electronic patient record (EPR). 

* [CH Core PractitionerRole](StructureDefinition-ch-core-practitionerrole.md) 
Base definition of the PractitionerRole resource for use in Swiss specific use cases. 

* [CH Core PractitionerRole EPR](StructureDefinition-ch-core-practitionerrole-epr.md) 
Definition of the PractitionerRole resource for use in the context of the electronic patient record (EPR). 

* [CH Core RelatedPerson](StructureDefinition-ch-core-relatedperson.md) 
Base definition of the RelatedPerson resource for use in Swiss specific use cases. 

* [CH Core ServiceRequest](StructureDefinition-ch-core-servicerequest.md) 
Base definition of the ServiceRequest resource for use in Swiss specific use cases. 

### Data Type Profiles

These define constraints on FHIR data types for systems conforming to this implementation guide:

*  [CH Core Postal Address](StructureDefinition-ch-core-address-ech-10.md) 

*  [Address for Place of Birth](StructureDefinition-ch-core-address-ech-11-placeofbirth.md) 

*  [Address for Place of Origin](StructureDefinition-ch-core-address-ech-11-placeoforigin.md) 

*  [CH Core Address](StructureDefinition-ch-core-address.md) 

*  [AHVN13 / NAVS13 Identifier](StructureDefinition-ch-core-ahvn13-identifier.md) 

*  [BER Identifier](StructureDefinition-ch-core-ber-identifier.md) 

*  [CH Core ContactPoint eCH-0046 Email](StructureDefinition-ch-core-contactpoint-ech-46-email.md) 

*  [CH Core ContactPoint eCH-0046 Internet](StructureDefinition-ch-core-contactpoint-ech-46-internet.md) 

*  [CH Core ContactPoint eCH-0046 Phone](StructureDefinition-ch-core-contactpoint-ech-46-phone.md) 

*  [CH Core Dosage](StructureDefinition-ch-core-dosage.md) 

*  [EPR-SPID Identifier](StructureDefinition-ch-core-epr-spid-identifier.md) 

*  [GLN Identifier](StructureDefinition-ch-core-gln-identifier.md) 

*  [Human Name](StructureDefinition-ch-core-humanname.md) 

*  [CH Core Quantity with EMED Units](StructureDefinition-ch-core-quantity-with-emed-units.md) 

*  [CH Core Range with EMED Units](StructureDefinition-ch-core-range-with-emed-units.md) 

*  [UIDB Identifier](StructureDefinition-ch-core-uidb-identifier.md) 

*  [Insurance Card Number (Identifier)](StructureDefinition-ch-core-veka-identifier.md) 

*  [ZSR Identifier](StructureDefinition-ch-core-zsr-identifier.md) 

*  [CH EMED Ratio with EMED Units](StructureDefinition-ch-emed-ratio-with-emed-units.md) 

