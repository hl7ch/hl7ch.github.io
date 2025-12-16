# Artifacts Summary - CH ORF (R4) v3.0.2

* [**Table of Contents**](toc.md)
* **Artifacts Summary**

## Artifacts Summary

This page provides a list of the FHIR artifacts defined as part of this implementation guide.

### Structures: Questionnaires 

These define forms used by systems conforming to this implementation guide to capture or expose data to end users.

| | |
| :--- | :--- |
| [Module Questionnaire Address](Questionnaire-ch-orf-module-address.md) | Subquestionnaire address |
| [Module Questionnaire Appointment](Questionnaire-ch-orf-module-appointment.md) | Subquestionnaire appointment |
| [Module Questionnaire Consent](Questionnaire-ch-orf-module-consent.md) | Subquestionnaire consent |
| [Module Questionnaire Coverage](Questionnaire-ch-orf-module-coverage.md) | Subquestionnaire coverage |
| [Module Questionnaire Familydoctor](Questionnaire-ch-orf-module-familydoctor.md) | Subquestionnaire familyDoctor |
| [Module Questionnaire Initiator](Questionnaire-ch-orf-module-initiator.md) | Subquestionnaire initiator |
| [Module Questionnaire Order](Questionnaire-ch-orf-module-order.md) | Subquestionnaire order |
| [Module Questionnaire Patient](Questionnaire-ch-orf-module-patient.md) | Subquestionnaire patient |
| [Module Questionnaire Practitioner Name Tel](Questionnaire-ch-orf-module-practitioner-nametel.md) | Subquestionnaire Practitioner with Name and Telecom |
| [Module Questionnaire Receiver](Questionnaire-ch-orf-module-receiver.md) | Subquestionnaire receiver |
| [Module Questionnaire Receiver Copy](Questionnaire-ch-orf-module-receivercopy.md) | Subquestionnaire receiverCopy |
| [Module Questionnaire Requested Encounter](Questionnaire-ch-orf-module-requestedencounter.md) | Subquestionnaire requestedEncounter |
| [Module Questionnaire Sender](Questionnaire-ch-orf-module-sender.md) | Subquestionnaire sender |

### Structures: Resource Profiles 

These define constraints on FHIR resources for systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [CH ORF Appointment](StructureDefinition-ch-orf-appointment.md) | Profile to describe the location and time for the fulfillment of the service request. In this resource, the status of the appointment is defined, patient-oriented instructions are listed here and where and when the service request is to be fulfilled. |
| [CH ORF Composition](StructureDefinition-ch-orf-composition.md) | Profile to specify how the generic elements (e.g. patient, author) and the healthcare domain specific elements must be structured in the Composition as the first entry of the document. |
| [CH ORF Consent](StructureDefinition-ch-orf-consent.md) | Profile to specify if the patient gave an informed consent to this order; in particulars for spitex and transfer to retirement home etc. |
| [CH ORF Coverage](StructureDefinition-ch-orf-coverage.md) | Profile to specify how the coverage is represented. This provides an organization or the individual, which will pay for services requested. |
| [CH ORF Document](StructureDefinition-ch-orf-document.md) | Profile to set constraints that specify the CH ORF-conformant presentation of a document. The CH ORF exchange format is defined as a document type corresponding to a Bundle resource. |
| [CH ORF DocumentReference](StructureDefinition-ch-orf-documentreference.md) | Profile to describe how to provide a reference to a document to make it available to a healthcare system. |
| [CH ORF Episode of Care](StructureDefinition-ch-orf-episodeofcare.md) | Profile to document the antecedent episode of care e.g hospitalisation in case of care transfer between instituitons e.g. hospitals, rehab. clinics, retirement homes etc. |
| [CH ORF Location](StructureDefinition-ch-orf-location.md) | Profile to define the details of the location of the appointment. |
| [CH ORF Questionnaire](StructureDefinition-ch-orf-questionnaire.md) | Profile to define how a CH ORF-conformant Questionnaire resource must be structured. This is independent of the content and content structure of the questionnaire instance itself. |
| [CH ORF QuestionnaireResponse](StructureDefinition-ch-orf-questionnaireresponse.md) | Profile to define how a CH ORF-conformant QuestionnaireResponse resource must be structured. This is independent of the content and content structure of the response items to a specific questionnaire. |
| [CH ORF Requested Encounter](StructureDefinition-ch-orf-encounter.md) | Profile to describe which details are represented at the requested encounter for the fulfillment of the service request. These are, for example, the status of the encounter or the class and the desired accomodation during the encounter. |
| [CH ORF ServiceRequest](StructureDefinition-ch-orf-servicerequest.md) | Profile to define how the record of a request for service to be performed is represented in the context of an order. This resource is used to share relevant information required to support an CH ORF request from the order placer to the order filler. |

### Structures: Extension Definitions 

These define constraints on FHIR data types for systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [CH ORF Consent Code](StructureDefinition-ch-orf-consentcode.md) | Consent Code |
| [CH ORF Consent Note](StructureDefinition-ch-orf-consentnote.md) | Consent Note |
| [CH ORF Copy Receiver](StructureDefinition-ch-orf-copyreceiver.md) | Receiver of the copy of this order and the results therefrom |
| [CH ORF Desired Accommodation](StructureDefinition-ch-orf-desiredaccommodation.md) | Desired Accommodation during the Requested Encounter. |
| [CH ORF Episode of Care](StructureDefinition-ch-orf-antecedentepisodeofcare.md) | Documentation of the antecedent episode of care e.g hospitalisation in case of care transfer between instituitons e.g. hospitals, rehab. clinics, retirement homes etc. |
| [CH ORF Initiator](StructureDefinition-ch-orf-initiator.md) | Initiator and his realtion to the patient |
| [CH ORF Location and Time](StructureDefinition-ch-orf-locationandtime.md) | Location and Time of ServiceRequest Fulfillment. |
| [CH ORF Patient Consent](StructureDefinition-ch-orf-patientconsent.md) | Patient Consent to this Order |
| [CH ORF Precedent Document](StructureDefinition-ch-orf-precedentdocument.md) | Identifier of the document which precedes this document in a thread. |
| [CH ORF Receiver](StructureDefinition-ch-orf-receiver.md) | Person/organization who receives the document |
| [CH ORF Requested Encounter Details](StructureDefinition-ch-orf-requestedencounterdetails.md) | Requested Encounter Details for ServiceRequest Fulfillment. |
| [CH ORF Urgent Notification Contact For The Response To This Document](StructureDefinition-ch-orf-urgentnoficationcontactfortheresponsetothisdocument.md) | An information recipient to notify for urgent matters about the response. (e.g. in a clinical setting, the referring doctor has to be called by phone right away at the time the images and reports arrive. The Urgent Notification Contact for the Response can be specified already in the request. At the time the response is written, this element shall be populated to the Urgent Notification Contact element in the response.) |
| [CH ORF Urgent Notification Contact For This Documet](StructureDefinition-ch-orf-urgentnoficationcontactforthisdocument.md) | An information recipient to notify for urgent matters (e.g. in a radiology service, the radiologist has to be called by phone right away at the time the doucment is received). |

### Terminology: Value Sets 

These define sets of codes used by systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [Appointment Status](ValueSet-ch-orf-vs-appointmentstatus.md) | Value Set for CH ORF Appointment Status |
| [Consent Status](ValueSet-ch-orf-vs-consentstatus.md) | Value Set for CH ORF Consent Status |
| [Coverage Identifier Type](ValueSet-ch-orf-vs-coverageidentifiertype.md) | Value Set for CH ORF Coverage Identifier Type |
| [Desired Accommodation](ValueSet-ch-orf-vs-desiredaccommodation.md) | Value Set for CH ORF Desired Accomodation |
| [Encounter Class](ValueSet-ch-orf-vs-encounterclass.md) | Value Set for CH ORF Encounter Class |
| [Legal Relation](ValueSet-ch-orf-vs-legalrelation.md) | Value Set for Legal Relation |
| [Personal Relation](ValueSet-ch-orf-vs-personalrelation.md) | Value Set for Personal Relation |

### Terminology: Code Systems 

These define new code systems used by systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [Consent Status](CodeSystem-ch-orf-cs-consentstatus.md) | Value Set for CH ORF Consent Status |
| [Coverage Identifier Type](CodeSystem-ch-orf-cs-coverageidentifiertype.md) | Code System for CH ORF Coverage Identifier Type |

### Terminology: Structure Maps 

These define transformations to convert between data structures used by systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [Map ORF](StructureMap-OrfQrToBundle.md) | Mapping ORF QuestionnaireResponse to Bundle |

### Example: Example Instances 

These are example instances that show what data produced and consumed by systems conforming with this implementation guide might look like.

| | |
| :--- | :--- |
| [Appointment Booked](Appointment-AppointmentBooked.md) | Example for Appointment with status=booked |
| [Appointment Pending](Appointment-AppointmentPending.md) | Example for Appointment with status=pending |
| [Appointment Proposed](Appointment-AppointmentProposed.md) | Example for Appointment with status=proposed |
| [Bundle Order-Referral-Form](Bundle-bundle-order-referral-form.md) | Example for Bundle |
| [Composition Order-Referral-Form](Composition-comp-order-referral-form.md) | Example for Composition |
| [Composition Spitex-Order](Composition-spitex-order.md) | Example for Composition |
| [Consent](Consent-ChOrfConsentSUfferer.md) | Example for Consent |
| [Copy Receiver Praxis Seeblick](Organization-CopyReceiverPraxisSeeblick.md) | Example for PractitionerRole |
| [Copy Receiver Sabine Meier](Practitioner-CopyReceiverSabineMeier.md) | Example for Practitioner |
| [Copy Receiver Sabine Meier @ Praxis Seeblick](PractitionerRole-CopyReceiverSabineMeierPraxisSeeblick.md) | Example for PractitionerRole |
| [Coverage KVG](Coverage-CoverageMusterfrau.md) | Example for Coverage |
| [Coverage Self (Patient)](Coverage-CoverageSelfPatient.md) | Example for Coverage |
| [Coverage Self (RelatedPerson)](Coverage-CoverageSelfRelatedPerson.md) | Example for Coverage |
| [DocumentReference](DocumentReference-DocRef.md) | Example for DocumentReference |
| [Eisode of Care](EpisodeOfCare-ChOrfEpisodeOfCareSUfferer.md) | Example for Discharge Date in EpisodeOfCare |
| [Encounter Emergency](Encounter-EncounterMusterfrau.md) | Example for Encounter |
| [Erika Musterfrau](Patient-ErikaMusterfrau.md) | Example for Patient |
| [Florence Amily](Practitioner-ChOrfPractitionerFAmily.md) | Example for Practitioner |
| [Florence Amily @ Praxis Allzeitbereit](PractitionerRole-ChOrfPractitionerRoleFAmily.md) | Example for PractitionerRole |
| [Hans Röntgen](Practitioner-HansRoentgen.md) | Example for Practitioner |
| [Hans Röntgen @ Kantonsspital](PractitionerRole-HansRoentgenKantonsspital.md) | Example for PractitionerRole |
| [Kantonsspital](Organization-Kantonsspital.md) | Example for Organization |
| [Location of Appointment](Location-LocationOfAppointment.md) | Example for Location |
| [Max Ufferer](RelatedPerson-ChOrfRelatedPersonMUfferer.md) | Example for Related Person (Husband of Susanna Ufferer) |
| [Notification Contact Hans Röntgen](Practitioner-NotificationContactHansRoentgen.md) | Example for Practitioner |
| [Notification Contact Hans Röntgen](PractitionerRole-NotificationContactHansRoentgen.md) | Example for PractitionerRole |
| [Notification Contact Sabine Meier](Practitioner-NotificationContactSabineMeier.md) | Example for Practitioner |
| [Notification Contact Sabine Meier](PractitionerRole-NotificationContactSabineMeier.md) | Example for PractitionerRole |
| [Order External Diagnostics](Bundle-external-diagnostics-order.md) | Example for Bundle |
| [Praxis Seeblick](Organization-PraxisSeeblick.md) | Example for Organization |
| [Questionnaire Order-Referral-Form](Questionnaire-order-referral-form.md) | Example for Questionnaire |
| [Questionnaire Order-Referral-Form (Modular version)](Questionnaire-order-referral-form-modular.md) | Example for Questionnaire (Modular version) |
| [QuestionnaireResponse External Diagnostics Order](QuestionnaireResponse-qr-external-diagnostics-order.md) | Example for QuestionnaireResponse |
| [QuestionnaireResponse Medical Referral](QuestionnaireResponse-qr-order-referral-form.md) | Example for QuestionnaireResponse |
| [QuestionnaireResponse Radiology Order](QuestionnaireResponse-qr-radiology-order.md) | Example for QuestionnaireResponse |
| [Radiology Order](Bundle-radiology-order.md) | Example for Bundle |
| [SDCModularQuestionnaireExampleForIssue126](Questionnaire-sdc-modular-issue126.md) | SDC Modular Questionnaire Example for Issue 126 |
| [Sabine Meier](Practitioner-SabineMeier.md) | Example for Practitioner |
| [Sabine Meier @ Praxis Seeblick](PractitionerRole-SabineMeierPraxisSeeblick.md) | Example for PractitionerRole |
| [Samuel Pitex](Practitioner-ChOrfPractitionerSPitex.md) | Example for Practitioner |
| [ServiceRequest Order-Referral-Form](ServiceRequest-sr-order-referral-form.md) | Example for ServiceRequest |
| [Spital Trubschachen](Organization-OrganizationSpitalTrubschachen.md) | Example for Organization |
| [Spitex](PractitionerRole-ChOrfPractitionerRoleSPitex.md) | Example for PractitionerRole |
| [Stabilo Boss](Practitioner-StabiloBoss.md) | Example for Practitioner |
| [Stabilo Boss @ Praxis Seeblick](PractitionerRole-StabiloBossPraxisSeeblick.md) | Example for PractitionerRole |
| [Susanna Ufferer](Patient-SUfferer.md) | Example for Patient |
| [Thomas Rub](Practitioner-ChCorePractitionerTRub.md) | Example for Practitioner |

