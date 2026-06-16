# Artifacts Summary - CH UMZH Connect IG (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* **Artifacts Summary**

## Artifacts Summary

This page provides a list of the FHIR artifacts defined as part of this implementation guide.

### Requirements: Actor Definitions 

The following artifacts define the types of individuals and/or systems that will interact as part of the use cases covered by this implementation guide.

| | |
| :--- | :--- |
| [Fulfiller](ActorDefinition-ch-umzh-connect-fulfiller.md) | The party performing the requested service. Hosts the Coordination Task and related output resources. |
| [Placer](ActorDefinition-ch-umzh-connect-placer.md) | The party initiating the referral or order. Hosts the ServiceRequest and all referenced clinical resources. |

### Behavior: Capability Statements 

The following artifacts define the specific capabilities that different types of systems are expected to have in order to comply with this implementation guide. Systems conforming to this implementation guide are expected to declare conformance to one or more of the following capability statements.

| | |
| :--- | :--- |
| [ChUmzhConnectCapabilityStatement](CapabilityStatement-ChUmzhConnectCapabilityStatement.md) | UMZH Connect API requirements. This CapabilityStatement applies to both the [Placer](ActorDefinition-ch-umzh-connect-placer.md) and [Fulfiller](ActorDefinition-ch-umzh-connect-fulfiller.md) server roles. The required interactions overlap significantly; the applicable subset depends on the actor role:* **Placer server** — hosts the ServiceRequest and all referenced clinical resources. 
 The Fulfiller queries these via `read` and `search`.
* **Fulfiller server** — hosts the Coordination Task and related output resources. 
 The Placer creates it via `create`, applies selective updates via `patch`, and queries via `read` and `search`.
 |

### Behavior: Search Parameters 

These define the properties by which a RESTful server can be searched. They can also be used for sorting and including related resources.

| | |
| :--- | :--- |
| [ch-umzhconnectig-servicerequest-insurance](SearchParameter-ch-umzhconnectig-servicerequest-insurance.md) | Custom search parameter for ServiceRequest.insurance |
| [ch-umzhconnectig-servicerequest-reasonreference](SearchParameter-ch-umzhconnectig-servicerequest-reasonreference.md) | Custom search parameter for ServiceRequest.reasonReference |
| [ch-umzhconnectig-servicerequest-supportinginfo](SearchParameter-ch-umzhconnectig-servicerequest-supportinginfo.md) | Custom search parameter for ServiceRequest.supportingInfo |
| [ch-umzhconnectig-task-inputreference](SearchParameter-ch-umzhconnectig-task-inputreference.md) | Custom search parameter for Task.input.valueReference |
| [ch-umzhconnectig-task-outputcanonical](SearchParameter-ch-umzhconnectig-task-outputcanonical.md) | Custom search parameter for Task.output.valueCanonical |
| [ch-umzhconnectig-task-outputreference](SearchParameter-ch-umzhconnectig-task-outputreference.md) | Custom search parameter for Task.output.valueReference |

### Structures: Resource Profiles 

These define constraints on FHIR resources for systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [CH UMZH Connect Coordination Task](StructureDefinition-ch-umzh-connect-coordinationtask.md) | CH UMZH Connect Coordination Task |
| [CH UMZH Connect ServiceRequest](StructureDefinition-ch-umzh-connect-servicerequest.md) | CH UMZH Connect ServiceRequest is derived from CH eTOC |

### Terminology: Value Sets 

These define sets of codes used by systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [CH UMZH Connect ServiceRequest Category](ValueSet-ch-umzh-connect-servicerequest-category.md) | Value set for ServiceRequest.category defining the type of service request. |

### Example: Example Instances 

These are example instances that show what data produced and consumed by systems conforming with this implementation guide might look like.

| | |
| :--- | :--- |
| [AllergyGado](AllergyIntolerance-AllergyGado.md) | Allergy intolerance against gadolinium-based contrast agent. Hosted on placer. |
| [Appointment Orthopedic Pre-Surgery Consultation](Appointment-AppointmentOrthopedicConsultation.md) | Pre-operative orthopedic consultation scheduled before the planned knee surgery. Intermediary result referenced in the completed Coordination Task output. Hosted on fulfiller. |
| [Austrittsbericht Orthopädie](DocumentReference-DocDischargeReportOrthopedics.md) | Discharge report after knee surgery. Referenced in the completed Coordination Task output. Hosted on fulfiller. |
| [Coverage P. Meier](Coverage-CoverageMeier.md) | Coverage (Garant) with Mrs. Meier as beneficiary and the health insurance Krankenkasse as issuer of the policy (represented as contained resource). Hosted on placer. |
| [Discharge Medication Aspirin](MedicationStatement-MedicationAspirin.md) | Aspirin (Acetylsalicylic acid 100 mg) blood thinner for thromboprophylaxis after knee surgery. Discharge medication referenced in the completed Coordination Task output. Hosted on fulfiller. |
| [Endpoint Fulfiller](Endpoint-EndpointFulfiller.md) | FHIR REST API endpoint for Fulfiller. Hosted on registry. |
| [Endpoint Placer](Endpoint-EndpointPlacer.md) | FHIR REST API endpoint for Placer. Hosted on registry. |
| [Fulfiller](Organization-Fulfiller.md) | Example Organization for Fulfiller. Hosted on registry. |
| [Hans Muster](Practitioner-HansMuster.md) | Example for CH IG Practitioner. Hosted on placer. |
| [Hans Muster Role](PractitionerRole-HansMusterRole.md) | Example PractitionerRole for Hans Muster as referring physician at Placer. Hosted on placer. |
| [HealthcareService Orthopedics Fulfiller](HealthcareService-HealthcareServiceOrthopedicsFulfiller.md) | Example HealthcareService for orthopedic referrals provided by Fulfiller. Hosted on registry. |
| [HealthcareService Sarcoma Tumor Board Fulfiller](HealthcareService-HealthcareServiceTumorboardFulfiller.md) | Example HealthcareService for sarcoma tumor board provided by Fulfiller. Hosted on registry. |
| [Heart Failure HFrEF](Condition-HeartFailureHFrEF.md) | Chronic heart failure with reduced ejection fraction (HFrEF), NYHA class II. Hosted on placer. |
| [ImagingCT](ImagingStudy-ImagingCT.md) | CT Scan Right Knee. Hosted on placer. |
| [ImagingPET](ImagingStudy-ImagingPET.md) | PET Scan Whole Body (external). Hosted on placer. |
| [Medication Aspirin](Medication-MedAspirin.md) | Aspirin (Acetylsalicylic acid 100 mg) film tablet. Standalone (non-contained) Medication resource referenced by the discharge MedicationStatement. |
| [Medication Concor](MedicationStatement-MedicationConcor.md) | Concor (Bisoprolol 10 mg) beta-blocker for heart failure treatment. Hosted on placer. |
| [Medication Entresto](MedicationStatement-MedicationEntresto.md) | Entresto (Sacubitril/valsartan 97/103 mg) for heart failure treatment. Hosted on placer. |
| [Petra Meier](Patient-PetraMeier.md) | Example for CH Core Patient. Hosted on placer. |
| [Placer](Organization-Placer.md) | Example Organization for Placer. Hosted on registry. |
| [Referral Orthopedic Surgery](ServiceRequest-ReferralOrthopedicSurgery.md) | Example ServiceRequest for a referral to orthopedic surgery for knee replacement evaluation using the CH eTOC profile. Hosted on placer. |
| [Referral Sarcoma Tumor Board](ServiceRequest-ReferralTumorboard.md) | Example ServiceRequest for a referral to tumor board for sarcoma. Hosted on placer. |
| [SarcomaKnee](Condition-SarcomaKnee.md) | Synovial sarcoma of the right knee. Hosted on placer. |
| [Smoking Status Questionnaire](Questionnaire-QuestionnaireSmokingStatus.md) | Questionnaire sent by Fulfiller to Placer to inquire about the patient's smoking status. Hosted on fulfiller. |
| [Smoking Status Questionnaire Response](QuestionnaireResponse-QuestionnaireResponseSmokingStatus.md) | QuestionnaireResponse sent by Placer to Fulfiller providing the patient's smoking status. Hosted on fulfiller. |
| [Sprechstundenbericht Kardiologie](DocumentReference-DocCardiologyAttachment.md) | Example of Document Reference with attachment (pdf). Hosted on placer. |
| [Suspected ACL Rupture](Condition-SuspectedACLRupture.md) | Suspected rupture of left anterior cruciate ligament after an accident. Hosted on placer. |
| [Task for Referral Orthopedic Surgery (Completed with Results)](Task-TaskReferralOrthopedicSurgeryCompleted.md) | Completed Task after Fulfiller has performed the knee surgery. Carries forward the smoking-status Questionnaire (output) and the returned QuestionnaireResponse (input), and adds the results: the intermediary pre-surgery consultation Appointment, the discharge report and the discharge medication (blood thinner) in Task.output. Hosted on fulfiller. |
| [Task for Referral Orthopedic Surgery (Initial)](Task-TaskReferralOrthopedicSurgery.md) | Initial Task created by Placer based on the ServiceRequest and sent to Fulfiller. Hosted on fulfiller. |
| [Task for Referral Orthopedic Surgery (Updated with Questionnaire)](Task-TaskReferralOrthopedicSurgeryUpdated.md) | Updated Task after Fulfiller has accepted the initial Task and added a reference to the Questionnaire to request smoking status from Placer. Hosted on fulfiller. |

