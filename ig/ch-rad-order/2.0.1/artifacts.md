# Artifacts Summary - CH RAD-Order (R4) v2.0.1

* [**Table of Contents**](toc.md)
* **Artifacts Summary**

## Artifacts Summary

This page provides a list of the FHIR artifacts defined as part of this implementation guide.

### Structures: Resource Profiles 

These define constraints on FHIR resources for systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [CH RAD-Order Body Height Observation](StructureDefinition-ch-rad-order-bodyheight-observation.md) | Definition for the Body Height Observation resource in the context of CH RAD-Order. |
| [CH RAD-Order Body Weight Observation](StructureDefinition-ch-rad-order-bodyweight-observation.md) | Definition for the Body Weight Observation resource in the context of CH RAD-Order. |
| [CH RAD-Order Caveat Condition](StructureDefinition-ch-rad-order-caveat-condition.md) | Definition for the Caveat Condition resource in the context of CH RAD-Order. |
| [CH RAD-Order Composition](StructureDefinition-ch-rad-order-composition.md) | Definition for the Composition resource in the context of CH RAD-Order. |
| [CH RAD-Order Creatinine Clearance Observation](StructureDefinition-ch-rad-order-creatinineclearance-observation.md) | Definition for the Creatinine Clearance Observation resource in the context of CH RAD-Order. |
| [CH RAD-Order Creatinine Observation](StructureDefinition-ch-rad-order-creatinine-observation.md) | Definition for the Creatinine Observation resource in the context of CH RAD-Order. |
| [CH RAD-Order Diagnosis Condition](StructureDefinition-ch-rad-order-diagnosis-condition.md) | Definition for the Diagnosis Condition resource in the context of CH RAD-Order. |
| [CH RAD-Order Document](StructureDefinition-ch-rad-order-document.md) | Definition for the Bundle (document) resource in the context of CH RAD-Order. |
| [CH RAD-Order INR Observation](StructureDefinition-ch-rad-order-INR-observation.md) | Definition for the INR Observation resource in the context of CH RAD-Order. |
| [CH RAD-Order ImagingStudy](StructureDefinition-ch-rad-order-imagingstudy.md) | Definition for the ImagingStudy resource in the context of CH RAD-Order. |
| [CH RAD-Order Platelets Observation](StructureDefinition-ch-rad-order-platelets-observation.md) | Definition for the Platelets Observation resource in the context of CH RAD-Order. |
| [CH RAD-Order ServiceRequest](StructureDefinition-ch-rad-order-servicerequest.md) | Definition for the ServiceRequest resource in the context of CH RAD-Order. |

### Structures: Extension Definitions 

These define constraints on FHIR data types for systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [CH RAD-Order Caveat Type](StructureDefinition-ch-rad-order-caveat-type.md) | Extension to define the type of caveat in the context CH RAD-Order. |
| [CH RAD-Order Order Detail Type](StructureDefinition-ch-rad-order-order-detail-type.md) | Extension to define the Type of Order Detail in context of CH RAD-Order. |
| [CH RAD-Order Qualifier Value](StructureDefinition-ch-rad-order-qualifier-value.md) | Extension to define the value of the qualifier in the context of CH RAD-Order. |

### Terminology: Value Sets 

These define sets of codes used by systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [Caveat Condition](ValueSet-ch-rad-order-caveat-condition.md) | Definition for Caveat Condition Value Set in the context of CH RAD-Order. |
| [Caveat Device](ValueSet-ch-rad-order-caveat-device.md) | Definition for Caveat Device Value Set in the context of CH RAD-Order. |
| [Guidance for Action](ValueSet-ch-rad-order-guidance-for-action.md) | Definition for Guidance for Action Value Set in the context of CH RAD-Order. |
| [Imaging Focus](ValueSet-ch-rad-order-imaging-focus.md) | Definition for Imaging Focus Value Set in the context of CH RAD-Order. |
| [Imaging Region](ValueSet-ch-rad-order-imaging-region.md) | Definition for Imaging Region Value Set in the context of CH RAD-Order. |
| [Laterality](ValueSet-ch-rad-order-laterality.md) | Definition for Laterality Value Set in the context of CH RAD-Order. |
| [Maneuver Type](ValueSet-ch-rad-order-maneuver-type.md) | Definition for Maneuver Type Value Set in the context of CH RAD-Order. |
| [Modality Type](ValueSet-ch-rad-order-modality-type.md) | Definition for Modality Type Value Set in the context of CH RAD-Order. |
| [Modality that created the series](ValueSet-ch-rad-order-acquisition-modality.md) | Valuset for the Type of equipment, or function or technique of that equipment, that created the data |
| [Qualifier Value](ValueSet-ch-rad-order-caveat-qualifier-value.md) | Qualifier values in the context of CH RAD-Order. |
| [Requested Service](ValueSet-ch-rad-order-requested-service.md) | Definition for Requested Service Value Set in the context of CH RAD-Order. |
| [Type of Caveat](ValueSet-ch-rad-order-caveat-type.md) | Definition for Type of Caveat Value Set in the context of CH RAD-Order. |
| [Type of Order Detail](ValueSet-ch-rad-order-order-detail-type.md) | Definition for Type of Order Detail Value Set in the context of CH RAD-Order. |
| [View Type](ValueSet-ch-rad-order-view-type.md) | Definition for View Type Value Set in the context of CH RAD-Order. |

### Terminology: Code Systems 

These define new code systems used by systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [Contains Code for UNKNOWN in dicom context](CodeSystem-ch-rad-order-dicom-unknown.md) | Definition for UNKNOWN in the context CH RAD-Order in order to handle non conformant Dicom metadata. |
| [Requested Service](CodeSystem-ch-rad-order-requested-service.md) | Definition for Requested Service Code System in the context of CH RAD-Order. |
| [Type of Order Detail](CodeSystem-ch-rad-order-order-detail-type.md) | Definition for Type of Order Detail Code System in the context of CH RAD-Order. |

### Terminology: Structure Maps 

These define transformations to convert between data structures used by systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [RadOrderQrToBundle](StructureMap-RadOrderQrToBundle.md) | Maps RadOrder QuestionnaireResponse to Bundle |

### Example: Example Instances 

These are example instances that show what data produced and consumed by systems conforming with this implementation guide might look like.

| | |
| :--- | :--- |
| [Appointment Radiography](Appointment-AppointmentRadiography.md) | Example of Appointment |
| [Befund_Rx_Thorax_S_Ufferer_20190401](DocumentReference-DocumentReferenceNonDicom.md) | Example of Document Reference for Attachment (e.g. pdf) |
| [Body Height 176 cm](Observation-BodyHeight.md) | Example of Body Height Observation |
| [Body Weight 99 kg](Observation-BodyWeight.md) | Example of Body Weight Observation |
| [Bundle Radiology Order](Bundle-DocumentRadiologyOrder.md) | Example of Bundle |
| [Caveat Blood Coagulation](Condition-CaveatBloodCoagulation.md) | Example of Caveat Condition |
| [Caveat Blood Coagulation INR](Observation-CaveatBloodCoagulationINR.md) | Example of INR Observation |
| [Caveat Blood Coagulation Platelets](Observation-CaveatBloodCoagulationPlatelets.md) | Example of Platelets Observation |
| [Caveat Body Piercing](Condition-CaveatBodyPiercing.md) | Example of Caveat Condition |
| [Caveat Device Cardiac Pacemaker](Condition-CaveatDeviceCardiacPacemaker.md) | Example of Caveat Condition |
| [Caveat Drug Prescription Metformin](Condition-CaveatDrugPrescriptionMetformin.md) | Example of Caveat Condition |
| [Caveat Renal Insufficiency](Condition-CaveatRenalInsufficiency.md) | Example of Caveat Condition |
| [Caveat Renal Insufficiency Creatinine](Observation-CaveatRenalInsufficiencyCreatinine.md) | Example of Creatinine Observation |
| [Caveat Renal Insufficiency Creatinine Clearance](Observation-CaveatRenalInsufficiencyCreatinineClearance.md) | Example of CreatinineClearance Observation |
| [Composition Radiology Order](Composition-CompositionRadiologyOrderImagingRequest.md) | Example of Composition |
| [Coverage KVG](Coverage-CoverageKVG.md) | Example of Coverage |
| [DICOM conformant SOP Instance](ImagingStudy-DicomSopInstanceConformant.md) | Rx-Knie-S_Ufferer_05032024; Example of DICOM conformant SOP Instance (regarding Coding of Series-Modality) |
| [Doris Ataenterer](Practitioner-PractDAtaenterer.md) | Example of Practitioner |
| [Doris Ataenterer (Role)](PractitionerRole-RoleDAtaenterer.md) | Example of PractionerRole |
| [Gemeinschaftspraxis Happy Doctors](Organization-OrgHappyDoctors.md) | Example of Organization |
| [Kurt NowIt-All (Role)](PractitionerRole-RoleKNowit-All.md) | Example of PractionerRole |
| [Kurt Nowit-All](Practitioner-PractKNowit-All.md) | Example of Practitioner |
| [Location Radiography](Location-LocationRadiography.md) | Example of Location |
| [Module Questionnaire Attachment](Questionnaire-ch-rad-order-module-previousresults.md) | Subquestionnaire Attachment |
| [Module Questionnaire Caveats](Questionnaire-ch-rad-order-module-caveats.md) | Subquestionnaire Caveats |
| [Module Questionnaire Diagnosis](Questionnaire-ch-rad-order-module-diagnosis.md) | Subquestionnaire Diagnosis |
| [Module Questionnaire Instruction](Questionnaire-ch-rad-order-module-medinfo.md) | Subquestionnaire Instruction |
| [Olga Rderplacer-Junior](Practitioner-PractORderplacerJunior.md) | Example of Practitioner |
| [Olga Rderplacer-Junior (Role)](PractitionerRole-RoleORderplacerJunior.md) | Example of PractionerRole |
| [Ottilie Rderplacer](Practitioner-PractORderplacer.md) | Example of Practitioner |
| [Ottilie Rderplacer (Role)](PractitionerRole-RoleORderplacer.md) | Example of PractionerRole |
| [Otto Rderfiller](Practitioner-PractORderfiller.md) | Example of Practitioner |
| [Otto Rderfiller (Role)](PractitionerRole-RoleORderfiller.md) | Example of PractionerRole |
| [Primary Diagnosis](Condition-PrimaryDiagnosis.md) | Example of Diagnosis Condition |
| [Questionnaire](Questionnaire-QuestionnaireRadiologyOrder.md) | Questionnarie with all modules assembled |
| [QuestionniaireResponse Radiology Order for Imaging](QuestionnaireResponse-QuestionnaireResponseRadiologyOrderImagingRequest.md) | Example of a QuestionnaireResponse for a Imaging |
| [QuestionniaireResponse Radiology Order for Imaging with Intervention](QuestionnaireResponse-QuestionnaireResponseRadiologyOrderImagIntervent.md) | Example of a QuestionnaireResponse for Imaging with Intervention |
| [QuestionniaireResponse Radiology Order for Request for previous Report and Images](QuestionnaireResponse-QuestionnaireResponseRadiologyOrderRequestPrevious.md) | Example of a QuestionnaireResponse for previous Report and Images |
| [QuestionniaireResponse Radiology Order for remote Reporting](QuestionnaireResponse-QuestionnaireResponseRadiologyOrderRemoteReporting.md) | Example of a QuestionnaireResponse for remote Reporting |
| [QuestionniaireResponse Radiology Order for second Opinion](QuestionnaireResponse-QuestionnaireResponseRadiologyOrderSecondOpinion.md) | Example of a QuestionnaireResponse for a second Opinion |
| [Radiologie Klinik Happy Hospital](Organization-OrgRadHappyHospital.md) | Example of Organization |
| [Secondary Diagnosis 1](Condition-SecondaryDiagnosis1.md) | Example of Diagnosis Condition |
| [Secondary Diagnosis 2](Condition-SecondaryDiagnosis2.md) | Example of Diagnosis Condition |
| [ServiceRequest Radiology Order](ServiceRequest-ServiceRequestRadiologyOrder.md) | Example of ServiceRequest |
| [Spital Small Hospital](Organization-OrgSmallHospital.md) | Example of Organization |
| [Susanna Ufferer](Patient-PatSUfferer.md) | Example of Patient |

