# Artifacts Summary - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* **Artifacts Summary**

## Artifacts Summary

This page provides a list of the FHIR artifacts defined as part of this implementation guide.

### Structures: Logical Models 

These define data models that represent the domain covered by this implementation guide in more business-friendly terms than the underlying FHIR resources.

| | |
| :--- | :--- |
| [EMS Protocol](StructureDefinition-logicalmodel-ems-protocol.md) | The logical model represents the Emergency Medical Service protocol as an abstract data model. The data elements defined in this model are mapped to the FHIR document structure. |

### Structures: Resource Profiles 

These define constraints on FHIR resources for systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [CH EMS AllergyIntolerance](StructureDefinition-ch-ems-allergyintolerance.md) | This profile constrains the AllergyIntolerance resource for representing the allergies and intolerances. |
| [CH EMS Composition](StructureDefinition-ch-ems-composition.md) | This profile constrains the Composition resource for representing the first entry in the CH EMS Document. |
| [CH EMS Coverage](StructureDefinition-ch-ems-coverage.md) | This profile constrains the Coverage resource for representing the insurance information of the patient. |
| [CH EMS Device](StructureDefinition-ch-ems-device.md) | This profile constrains the Device resource for representing aids and their owner. |
| [CH EMS Document](StructureDefinition-ch-ems-document.md) | This profile constrains the Bundle resource for representing the emergency medical service protocol. |
| [CH EMS Encounter](StructureDefinition-ch-ems-encounter.md) | This profile constrains the Encounter resource for representing the mission with its details. |
| [CH EMS Location: Ambulance](StructureDefinition-ch-ems-location-ambulance.md) | This profile constrains the Location resource for representing the ambulance with its type. |
| [CH EMS Location: Location and Destination](StructureDefinition-ch-ems-location-locationdestination.md) | This profile constrains the Location resource for representing the location and the destination of the mission, either as physical location (address) or geographic location (position). |
| [CH EMS Medication](StructureDefinition-ch-ems-medication.md) | This profile constrains the Medication resource for representing the medication for the purpose of making statements about use and administering. |
| [CH EMS MedicationAdministration](StructureDefinition-ch-ems-medicationadministration.md) | This profile constrains the MedicationAdministration resource for representing a administration of a medication to a patient. |
| [CH EMS MedicationStatement](StructureDefinition-ch-ems-medicationstatement.md) | This profile constrains the MedicationStatement resource for representing a record of a medication that is being consumed by a patient. |
| [CH EMS Observation (Base)](StructureDefinition-ch-ems-observation.md) | This profile constrains the Observation resource to define the requirements for all specialized CH EMS Observation profiles. |
| [CH EMS Observation: AVPU](StructureDefinition-ch-ems-observation-avpu.md) | This profile constrains the Observation resource for representing the level of responsiveness according the AVPU (alert, voice, pain, unresponsive) scheme. |
| [CH EMS Observation: Airways](StructureDefinition-ch-ems-observation-airways.md) | This profile constrains the Observation resource for representing the findings of the airways. |
| [CH EMS Observation: Anamnesis Event](StructureDefinition-ch-ems-observation-anamnesisevent.md) | This profile constrains the Observation resource for representing the anamnestic event description. |
| [CH EMS Observation: Anamnesis Symptom](StructureDefinition-ch-ems-observation-anamnesissymptom.md) | This profile constrains the Observation resource for representing the anamnestic symptom description. |
| [CH EMS Observation: Blood Pressure](StructureDefinition-ch-ems-observation-bloodpressure.md) | This profile constrains the Observation resource for representing the blood pressure (systolic and diastolic), incl. method. |
| [CH EMS Observation: Breathing](StructureDefinition-ch-ems-observation-breathing.md) | This profile constrains the Observation resource for representing the findings of the breathing. |
| [CH EMS Observation: Cardiac Arrest](StructureDefinition-ch-ems-observation-cardiacarrest.md) | This profile constrains the Observation resource for representing or a cardiac arrest. |
| [CH EMS Observation: Cold Exposure](StructureDefinition-ch-ems-observation-coldexposure.md) | This profile constrains the Observation resource for representing the degree of frostbite through cold exposure. |
| [CH EMS Observation: Condition Change](StructureDefinition-ch-ems-observation-conditionchange.md) | This profile constrains the Observation resource for representing the change of condition when the patient is handed over. |
| [CH EMS Observation: Death Manner](StructureDefinition-ch-ems-observation-deathmanner.md) | This profile constrains the Observation resource for representing the manner of death. |
| [CH EMS Observation: Diagnosis](StructureDefinition-ch-ems-observation-diagnosis.md) | This profile constrains the Observation resource for representing the diagnosis; as a probable diagnosis, differential diagnosis, etc. |
| [CH EMS Observation: GCS](StructureDefinition-ch-ems-observation-gcs.md) | This profile constrains the Observation resource for representing the GCS (Glasgow Coma Scale). |
| [CH EMS Observation: Heart Rate](StructureDefinition-ch-ems-observation-heartrate.md) | This profile constrains the Observation resource for representing the heart rate, incl. interpretation and method. |
| [CH EMS Observation: Heat Exposure](StructureDefinition-ch-ems-observation-heatexposure.md) | This profile constrains the Observation resource for representing the degree of burn through heat exposure. |
| [CH EMS Observation: Mission Time Status](StructureDefinition-ch-ems-observation-missiontimestatus.md) | This profile constrains the Observation resource for representing the various mission times with their specific status, e.g. alarm, arrival at patient, handover patient. |
| [CH EMS Observation: NACA](StructureDefinition-ch-ems-observation-naca.md) | This profile constrains the Observation resource for representing the injury severity using the NACA score. |
| [CH EMS Observation: Pupil Shape](StructureDefinition-ch-ems-observation-pupilshape.md) | This profile constrains the Observation resource for representing the pupil shape. |
| [CH EMS Observation: Pupil Size](StructureDefinition-ch-ems-observation-pupilsize.md) | This profile constrains the Observation resource for representing the size of the pupil. |
| [CH EMS Observation: Status Priority](StructureDefinition-ch-ems-observation-statuspriority.md) | This profile constrains the Observation resource for representing the status of the priority (green, yellow, red). |
| [CH EMS Observation: Stroke/FAST](StructureDefinition-ch-ems-observation-stroke-fast.md) | This profile constrains the Observation resource for representing the FAST (face, arm, speech, time) test in the context of a stroke examination. |
| [CH EMS Organization](StructureDefinition-ch-ems-organization.md) | This profile constrains the Organization resource for representing organizations involved in the emergency chain, e.g. emergency services. |
| [CH EMS Patient](StructureDefinition-ch-ems-patient.md) | This profile constrains the Patient resource for representing patient information and information about any participants involved. |
| [CH EMS Practitioner](StructureDefinition-ch-ems-practitioner.md) | This profile constrains the Practitioner resource for representing practitioners involved in the emergency chain, e.g. paramedic (in training), transport paramedic, emergency doctor. |
| [CH EMS PractitionerRole](StructureDefinition-ch-ems-practitionerrole.md) | This profile constrains the PractitionerRole resource for representing practitioners involved with the roles they perform, e.g. physician, caregiver. |
| [CH EMS Procedure (Base)](StructureDefinition-ch-ems-procedure.md) | This profile constrains the Procedure resource to define the requirements for all specialized CH EMS Procedure profiles. |
| [CH EMS Procedure: Airways](StructureDefinition-ch-ems-procedure-airways.md) | This profile constrains the Procedure resource for representing the airways procedures. |
| [CH EMS Procedure: Breathing](StructureDefinition-ch-ems-procedure-breathing.md) | This profile constrains the Procedure resource for representing the breathing procedures. |
| [CH EMS Procedure: Precautions Infection](StructureDefinition-ch-ems-procedure-precautionsinfection.md) | This profile constrains the Procedure resource for representing the precautions personnel when infectious mission/transport. |
| [CH EMS Procedure: Pretreatment](StructureDefinition-ch-ems-procedure-pretreatment.md) | This profile constrains the Procedure resource for representing the pretreatment procedures. |
| [CH EMS Procedure: Transportation](StructureDefinition-ch-ems-procedure-transportation.md) | This profile constrains the Procedure resource for representing the details of patient positioning and the used recovery aids. |
| [CH EMS Procedure: Wound Treatment](StructureDefinition-ch-ems-procedure-woundtreatment.md) | This profile constrains the Procedure resource for representing the treatment of a wound. |
| [CH EMS ServiceRequest](StructureDefinition-ch-ems-servicerequest.md) | This profile constrains the ServiceRequest resource for representing the requesting organization and further mission details. |

### Structures: Data Type Profiles 

These define constraints on FHIR data types for systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [CH EMS CodeableConcept](StructureDefinition-ch-ems-codeableconcept.md) | This profile constrains the CodeableConcept data type. |
| [CH EMS Coding](StructureDefinition-ch-ems-coding.md) | This profile constrains the Coding data type. |
| [CH EMS Quantity](StructureDefinition-ch-ems-quantity.md) | This profile constrains the Quantity data type. |

### Structures: Extension Definitions 

These define constraints on FHIR data types for systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [CH EMS Extension: Disinfection](StructureDefinition-ch-ems-ext-disinfection.md) | Extension to define the disinfection of the ambulance. |
| [CH EMS Extension: Emergency Doctor System](StructureDefinition-ch-ems-ext-emergencydoctorsystem.md) | Extension to define the system (residental, pick-up, rendez-vous) with the emergency doctor. |
| [CH EMS Extension: Identification](StructureDefinition-ch-ems-ext-identification.md) | Extension to define the medium and the source for the identification of the patient. |
| [CH EMS Extension: Laterality](StructureDefinition-ch-ems-ext-laterality.md) | Extension to define the side of the affected body region. |
| [CH EMS Extension: Owner](StructureDefinition-ch-ems-ext-owner.md) | Extension to define the owner of a device (e.g. aid). |
| [CH EMS Extension: Performer](StructureDefinition-ch-ems-ext-performer.md) | Extension to define the performer of the pretreatment. |
| [CH EMS Extension: Person Role](StructureDefinition-ch-ems-ext-personrole.md) | Extension to define the role of the involved participant. |
| [CH EMS Extension: Team Role](StructureDefinition-ch-ems-ext-teamrole.md) | Extension to define the role of the team member. |
| [CH EMS Extension: Urgency Adequate](StructureDefinition-ch-ems-ext-urgencyadequate.md) | Extension to define if the urgency (of SNZ) was adequate. |
| [CH EMS Extension: Valuables Patient](StructureDefinition-ch-ems-ext-valuablespatient.md) | Extension to define the valuables of a patient. |
| [CH EMS Extension: Violence](StructureDefinition-ch-ems-ext-violence.md) | Extension to define possible violence against emergency services team. |

### Terminology: Value Sets 

These define sets of codes used by systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [IVR Ambulance Type](ValueSet-IVR-VS-ambulanceType.md) | List of possible rescue devices. |
| [IVR Blood Pressure Method](ValueSet-IVR-VS-pressureMethod.md) | List of methods for measuring the blood pressure. |
| [IVR Cold Exposure](ValueSet-IVR-VS-coldExposure.md) | List of possible degrees of frostbite. |
| [IVR Death Manner](ValueSet-IVR-VS-deathManner.md) | List of possible causes of death. |
| [IVR Diagnosis Type](ValueSet-IVR-VS-diagType.md) | List of types of diagnosis. |
| [IVR Emergency Doctor System](ValueSet-IVR-VS-emergDoctSystem.md) | List of types of emergency doctor systems. |
| [IVR Event](ValueSet-IVR-VS-event.md) | List of types of emergency events. |
| [IVR Eye Form](ValueSet-IVR-VS-eyeForm.md) | List of shapes of the pupils. |
| [IVR Findings Airway](ValueSet-IVR-VS-findingsAirway.md) | List of findings on the condition of the airways. |
| [IVR Formation](ValueSet-IVR-VS-formation.md) | List of the formation of rescue personnel. |
| [IVR GCS Eye Opening](ValueSet-IVR-VS-gcs-augenoeffnung.md) | List of GCS observations of the eye opening. |
| [IVR GCS Motoric Response](ValueSet-IVR-VS-gcsMotoric.md) | List of GCS observations of the motoric response. |
| [IVR GCS Verbal Response](ValueSet-IVR-VS-gcsVerbal.md) | List of GCS observations of the verbal response. |
| [IVR Heat Exposure](ValueSet-IVR-VS-heatExposure.md) | List of degrees of burning. |
| [IVR Hospital Priority](ValueSet-IVR-VS-hospitalPriority.md) | List of priorities for hospital admission. |
| [IVR Identification Medium](ValueSet-IVR-VS-idMedium.md) | List of identification medium. |
| [IVR Identification Source](ValueSet-IVR-VS-idSource.md) | List of persons who identified the patient. |
| [IVR Infection Transport Precaution Personnel](ValueSet-IVR-VS-InfectPersPrecaution.md) | List of precautions to be taken by staff when transporting infected persons. |
| [IVR Intensity](ValueSet-IVR-VS-intensity.md) | List of pulse strengths. |
| [IVR Laterality](ValueSet-IVR-VS-laterality.md) | List of laterality codes |
| [IVR Location Type](ValueSet-IVR-VS-locationType.md) | List of types of event locations. |
| [IVR Mission Time Role](ValueSet-IVR-VS-missionTimeRole.md) | List of defined status times. |
| [IVR Mission Type](ValueSet-IVR-VS-missionType.md) | List of types of the missions. |
| [IVR NACA](ValueSet-IVR-VS-NACA.md) | List of NACA score states. |
| [IVR Offender](ValueSet-IVR-VS-offender.md) | List of types of attackers on the rescue staff. |
| [IVR Owner](ValueSet-IVR-VS-actRespiOwner.md) | List of owners of tools. |
| [IVR Person Role](ValueSet-IVR-VS-personRole.md) | List of roles of other persons involved in the event or in connection with the patient. |
| [IVR Pretreatment](ValueSet-IVR-VS-preTreatment.md) | List of types of persons who performed pretreatment. |
| [IVR Pretreatment Type](ValueSet-IVR-VS-preTreatType.md) | List of types of pretreatment. |
| [IVR Procedure Airway Type](ValueSet-IVR-VS-procAirType.md) | List of procedures for securing the airway. |
| [IVR Pulse Method](ValueSet-IVR-VS-pulseMethod.md) | List of methods for assessing heart function. |
| [IVR Pulse Result](ValueSet-IVR-VS-pulesResult.md) | List of pulse findings. |
| [IVR Recovery Aid](ValueSet-IVR-VS-actRecovAid.md) | List of tools used during the rescue and transportation of the patient. |
| [IVR Respiration Observation](ValueSet-IVR-VS-respirationObservation.md) | List of findings in the assessment of breathing. |
| [IVR Result](ValueSet-IVR-VS-result.md) | List of effects of procedures on the patient. |
| [IVR Size](ValueSet-IVR-VS-size.md) | List of the size of an object compared to normal. |
| [IVR Symptom](ValueSet-IVR-VS-symptom.md) | List of symptoms of a patient. |
| [IVR Team Role](ValueSet-IVR-VS-teamRole.md) | List of the crew member's role. |
| [IVR Transport Bedding](ValueSet-IVR-VS-bedding.md) | List of possible positions of the patient during the mission. |
| [IVR Transport Reason](ValueSet-IVR-VS-transReason.md) | List of triggers for a mission. |
| [IVR Transport Unit Disinfection](ValueSet-IVR-VS-transDisinfection.md) | List of methods for cleaning and disinfecting the rescue device. |
| [IVR Urgency](ValueSet-IVR-VS-urgency.md) | List of the mission's priorities. |
| [IVR Urgency Adequate](ValueSet-IVR-VS-urgency-adequate.md) | List of assessments of the priority of the mission set by the emergency call center. |
| [IVR Valuables Type](ValueSet-IVR-VS-valType.md) | List of types of the patient's valuables. |
| [IVR Ventilation](ValueSet-IVR-VS-ventilation.md) | List of types of artificial respiration. |
| [IVR Vigilanz (AVPU)](ValueSet-IVR-VS-vigilanzAvpu.md) | List of the states of vigilance of a patient (AVPU). |
| [IVR Violence Form](ValueSet-IVR-VS-violenceForm.md) | List of types of violence against ambulance personnel. |
| [IVR Violence Result](ValueSet-IVR-VS-violenceResult.md) | List of the consequences of violence against emergency service personnel. |
| [IVR Wound Treatment](ValueSet-IVR-VS-woundTreat.md) | List of wound treatment types. |
| [IVR Yes/No/Unknown](ValueSet-IVR-VS-yesNoUnknown.md) | List of answers (yes/no/unknown). |

### Terminology: Code Systems 

These define new code systems used by systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [IVR Codes](CodeSystem-IVR.md) | Code system containing concepts defined by IVR. |

### Terminology: Concept Maps 

These define transformations to convert between codes by systems conforming with this implementation guide.

| | |
| :--- | :--- |
| [EMS Administrative to FHIR Mapping](ConceptMap-EmsAdministrative2Fhir.md) | This map shows how the administrative section from the EMS Protocol is represented using FHIR. |
| [EMS Anamnesis to FHIR Mapping](ConceptMap-EmsAnamnesis2Fhir.md) | This map shows how the anamnesis section from the EMS Protocol is represented using FHIR. |
| [EMS Annotation to FHIR Mapping](ConceptMap-EmsAnnotation2Fhir.md) | This map shows how the mission section from the EMS Protocol is represented using FHIR. |
| [EMS Diagnosis to FHIR Mapping](ConceptMap-EmsDiagnosis2Fhir.md) | This map shows how the diagnosis section from the EMS Protocol is represented using FHIR. |
| [EMS Event of Death to FHIR Mapping](ConceptMap-EmsEventOfDeath2Fhir.md) | This map shows how the event of death section from the EMS Protocol is represented using FHIR. |
| [EMS Findings to FHIR Mapping](ConceptMap-EmsFindings2Fhir.md) | This map shows how the findings section from the EMS Protocol is represented using FHIR. |
| [EMS Handover to FHIR Mapping](ConceptMap-EmsHandover2Fhir.md) | This map shows how the handover section from the EMS Protocol is represented using FHIR. |
| [EMS Mission to FHIR Mapping](ConceptMap-EmsMission2Fhir.md) | This map shows how the mission section from the EMS Protocol is represented using FHIR. |
| [EMS Patient to FHIR Mapping](ConceptMap-EmsPatient2Fhir.md) | This map shows how the patient section from the EMS Protocol is represented using FHIR. |
| [EMS Pretreatment to FHIR Mapping](ConceptMap-EmsPretreatment2Fhir.md) | This map shows how the pretreatment section from the EMS Protocol is represented using FHIR. |
| [EMS Procedures to FHIR Mapping](ConceptMap-EmsProcedures2Fhir.md) | This map shows how the procedures section from the EMS Protocol is represented using FHIR. |
| [EMS Transport to FHIR Mapping](ConceptMap-EmsTransport2Fhir.md) | This map shows how the transport section from the EMS Protocol is represented using FHIR. |

### Example: Example Instances 

These are example instances that show what data produced and consumed by systems conforming with this implementation guide might look like.

| | |
| :--- | :--- |
| [1 Alarm](Observation-1-Alarm.md) | Example for CH EMS Observation: Mission Time Status |
| [1 Anamnese](Observation-1-Anamnese.md) | Example for CH EMS Observation: Anamnesis Event |
| [1 Arrival Patient](Observation-1-ArrivalPatient.md) | Example for CH EMS Observation: Mission Time Status |
| [1 Arrival at target](Observation-1-ArrivalAtTarget.md) | Example for CH EMS Observation: Mission Time Status |
| [1 Arrival on scene](Observation-1-ArrivalOnScene.md) | Example for CH EMS Observation: Mission Time Status |
| [1 Aspirin Cardio](MedicationStatement-1-AspirinCardio.md) | Example for CH EMS MedicationStatement |
| [1 Aufbietende Organisation](ServiceRequest-1-AufbietendeOrganisation.md) | Example for CH EMS ServiceRequest - SNZ as requesting organization (as contained organization resource) |
| [1 Baumpollen](AllergyIntolerance-1-Baumpollen.md) | Example for CH EMS AllergyIntolerance - allergy to tree pollen |
| [1 Blutdruck](Observation-1-Blutdruck.md) | Example for CH EMS Observation: Blood Pressure - with value and method/body site |
| [1 Coverage Thomas Müller](Coverage-1-CoverageThomasMueller.md) | Example for CH EMS Coverage - with insurance (as contained organization) and insurance card number |
| [1 Departure from scene](Observation-1-DepartureFromScene.md) | Example for CH EMS Observation: Mission Time Status |
| [1 Diagnose](Observation-1-Diagnose.md) | Example for CH EMS Observation: Diagnosis - STEMI as probable diagnosis |
| [1 Disposition](Observation-1-Disposition.md) | Example for CH EMS Observation: Mission Time Status |
| [1 Einsatz](Encounter-1-Einsatz.md) | Example for CH EMS Encounter - the mission with its details |
| [1 Einsatzort](Location-1-Einsatzort.md) | Example for CH EMS Location: Location and Destination - mission location with address and position (coordinates) |
| [1 Einsatzprotokoll](Bundle-1-Einsatzprotokoll.md) | Example for CH EMS Document - Use case 1 at patient handover (EPR conform) |
| [1 Einsatzprotokoll](Composition-1-Einsatzprotokoll-Composition.md) | Example for CH EMS Composition |
| [1 GCS Befund](Observation-1-GCSBefund.md) | Example for CH EMS Observation: GCS - total score 15 (motor 6, verbal 5, eye opening 4) |
| [1 GCS Uebergabe](Observation-1-GCSUebergabe.md) | Example for CH EMS Observation: GCS - total score 15 (motor 6, verbal 5, eye opening 4) |
| [1 Infusion](MedicationAdministration-1-Infusion.md) | Example for CH EMS MedicationAdministration |
| [1 Medikamente](AllergyIntolerance-1-Medikamente.md) | Example for CH EMS AllergyIntolerance - intolerance to some medications |
| [1 NACA Uebergabe](Observation-1-NACAUebergabe.md) | Example for CH EMS Observation: NACA - III |
| [1 Notarzt](Practitioner-1-NotarztPierreUrgentiste.md) | Example for CH EMS Practitioner - emergency doctor with GLN |
| [1 Practitioner Rettungssanitaeter in Ausbildung](Practitioner-SaniInAusbildung.md) | Example for CH EMS Practitioner - paramedic in training without GLN (and therefore not EPR conform) |
| [1 PractitionerRole Notarzt](PractitionerRole-1-NotarztPierreUrgentiste-PR.md) | Example for CH EMS PractitionerRole - emergency doctor with his role physician |
| [1 PractitionerRole Rettungssanitaeterin](PractitionerRole-1-SaniPetraMuster-PR.md) | Example for CH EMS PractitionerRole - paramedic with her role caregiver |
| [1 Rettungsdienst](Organization-1-Rettungsdienst.md) | Example for CH EMS Organization - SRZ as requested emergency service |
| [1 Rettungssanitaeterin](Practitioner-1-SaniPetraMuster.md) | Example for CH EMS Practitioner - paramedic with GLN |
| [1 Rettungswagen](Location-1-Rettungswagen.md) | Example for CH EMS Location: Ambulance |
| [1 Rollout](Observation-1-Rollout.md) | Example for CH EMS Observation: Mission Time Status |
| [1 Spray](MedicationAdministration-1-Spray.md) | Example for CH EMS MedicationAdministration |
| [1 Symptom](Observation-1-Symptome.md) | Example for CH EMS Observation: Anamnesis Symptom |
| [1 Team Rettungsdienst](Organization-1-TeamRettungsdienst.md) | Example for CH EMS Organization - SRZ as emergency service team |
| [1 Teammitglied Hans Transportsanitäter](Practitioner-1-TeamMemberHansTransportsanitaeter.md) | Example for CH EMS Practitioner - transport paramedic with GLN as team member |
| [1 Teammitglied Petra Muster](Practitioner-1-TeamMemberPetraMuster.md) | Example for CH EMS Practitioner - paramedic with GLN as team member |
| [1 Teammitglied Pierre Urgentiste](Practitioner-1-TeamMemberPierreUrgentiste.md) | Example for CH EMS Practitioner - emergency doctor with GLN as team member |
| [1 Thomas Müller](Patient-1-ThomasMueller.md) | Example for CH EMS Patient - with detailed information and his wife as involved participant |
| [1 Transport](Procedure-1-Transport.md) | Example for CH EMS Procedure: Transportation |
| [1 Zielort](Location-1-Zielort.md) | Example for CH EMS Location: Location and Destination - destination of the mission with address |
| [1 Zustand Uebergabe](Observation-1-ZustandUebergabe.md) | Example for CH EMS Observation: Condition Change - improved at handover |
| [120/80 mmHg](Observation-ObservationBloodPressure12080.md) | Example for CH EMS Observation: Blood Pressure - with value and method |
| [1b Departure from target](Observation-1b-DepartureFromTarget.md) | Example for CH EMS Observation: Mission Time Status |
| [1b Einsatzprotokoll](Bundle-1b-Einsatzprotokoll.md) | Example for CH EMS Document - Use case 1 at operational readiness (EPR conform) |
| [1b Einsatzprotokoll](Composition-1b-Einsatzprotokoll-Composition.md) | Example for CH EMS Composition |
| [1b Operational readiness](Observation-1b-OperationalReadiness.md) | Example for CH EMS Observation: Mission Time Status |
| [2 AVPU Befund](Observation-2-AVPUBefund.md) | Example for CH EMS Observation: AVPU - level of responsiveness (AVPU) = V |
| [2 Airways Befund](Observation-2-AirwaysBefund.md) | Example for CH EMS Observation: Airways - no finding |
| [2 Alarm](Observation-2-Alarm.md) | Example for CH EMS Observation: Mission Time Status |
| [2 Arrival Patient](Observation-2-ArrivalPatient.md) | Example for CH EMS Observation: Mission Time Status |
| [2 Arrival at target](Observation-2-ArrivalAtTarget.md) | Example for CH EMS Observation: Mission Time Status |
| [2 Arrival on scene](Observation-2-ArrivalOnScene.md) | Example for CH EMS Observation: Mission Time Status |
| [2 Aufbietende Organisation](ServiceRequest-2-AufbietendeOrganisation.md) | Example for CH EMS ServiceRequest - SNZ as requesting organization (as contained organization resource) |
| [2 Departure from scene](Observation-2-DepartureFromScene.md) | Example for CH EMS Observation: Mission Time Status |
| [2 Diagnose](Observation-2-Diagnose.md) | Example for CH EMS Observation: Diagnosis - stroke as probable diagnosis |
| [2 Disposition](Observation-2-Disposition.md) | Example for CH EMS Observation: Mission Time Status |
| [2 Einsatz](Encounter-2-Einsatz.md) | Example for CH EMS Encounter - the mission with its details |
| [2 Einsatzort](Location-2-Einsatzort.md) | Example for CH EMS Location: Location and Destination - mission location with address |
| [2 Einsatzprotokoll](Bundle-2-Einsatzprotokoll.md) | Example for CH EMS Document - Use case 2 at patient handover (not EPR conform because of unknown patient) |
| [2 Einsatzprotokoll](Composition-2-Einsatzprotokoll-Composition.md) | Example for CH EMS Composition |
| [2 GCS Befund](Observation-2-GCSBefund.md) | Example for CH EMS Observation: GCS - total score 9 (motor 3, verbal 3, eye opening 3) |
| [2 GCS Uebergabe](Observation-2-GCSUebergabe.md) | Example for CH EMS Observation: GCS - total score 10 (motor 3, verbal 4, eye opening 3) |
| [2 NACA Uebergabe](Observation-2-NACAUebergabe.md) | Example for CH EMS Observation: NACA - III |
| [2 Patient unbekannt](Patient-2-PatientUnbekannt.md) | Example for CH EMS Patient - not EPR conform because of missing name and date of birth |
| [2 Rollout](Observation-2-Rollout.md) | Example for CH EMS Observation: Mission Time Status |
| [2 Zustand Uebergabe](Observation-2-ZustandUebergabe.md) | Example for CH EMS Observation: Condition Change - improved at handover |
| [2b Departure from target](Observation-2b-DepartureFromTarget.md) | Example for CH EMS Observation: Mission Time Status |
| [2b Einsatzprotokoll](Bundle-2b-Einsatzprotokoll.md) | Example for CH EMS Document - Use case 2 at operational readiness (not EPR conform because of unknown patient) |
| [2b Einsatzprotokoll](Composition-2b-Einsatzprotokoll-Composition.md) | Example for CH EMS Composition |
| [2b Operational readiness](Observation-2b-OperationalReadiness.md) | Example for CH EMS Observation: Mission Time Status |
| [Administration Fentanyl](MedicationAdministration-MedAdminFentanyl.md) | Example for CH EMS MedicationAdministration |
| [Allergy Grass Pollen](AllergyIntolerance-AllergyIntoleranceGrassPollen.md) | Example for CH EMS AllergyIntolerance - allergy to grass pollen |
| [Blood Pressure without value](Observation-ObservationBloodPressure.md) | Example for CH EMS Observation: Heart Rate - without value (data absent reason) and with method |
| [Bradycardia](Observation-ObservationHeartRateBradycardia.md) | Example for CH EMS Observation: Heart Rate - without value (data absent reason), with interpretation and method |
| [Cardiac Arrest Befund](Observation-CardiacArrestBefund.md) | Example for CH EMS Observation: Cardiac Arrest - yes |
| [Dyspnea](Observation-ObservationBreathingDyspnea.md) | Example for CH EMS Observation: Breathing |
| [Example Encounter](Encounter-EncounterExample.md) | Example for CH EMS Encounter - the mission (primary mission) with its details (e.g. pick-up emergency doctor, with siren (but not adequate/necessary), valuables patient, violence) |
| [Example Patient](Patient-PatientExample.md) | Example for CH EMS Patient |
| [Helicopter Ambulance](Location-LocationAmbulance.md) | Example for CH EMS Location: Ambulance |
| [Intubation](Procedure-ProcedureAirwaysIntubation.md) | Example for CH EMS Procedure: Airways |
| [Natural Death](Observation-ObservationDeathManner.md) | Example for CH EMS Observation: Death Manner |
| [Normal Pupil Size](Observation-ObservationPupilSizeNormal.md) | Example for CH EMS Observation: Pupil Size |
| [Patch](Procedure-ProcedureWoundTreatment.md) | Example for CH EMS Procedure: Wound Treatment |
| [Pupil Round](Observation-ObservationPupilShapeRound.md) | Example for CH EMS Observation: Pupil Shape |
| [Second-degree Burn](Observation-ObservationSecondDegreeBurn.md) | Example for CH EMS Observation: Heat Exposure |
| [Second-degree Frostbite](Observation-ObservationSecondDegreeFrostbite.md) | Example for CH EMS Observation: Cold Exposure |
| [Status Priorität Übergabe](Observation-StatusPrioUebergabe.md) | Example for CH EMS Observation: Status Priority - yellow at handover |
| [Stroke Befund](Observation-StrokeBefund.md) | Example for CH EMS Observation: Stroke/FAST - face drooping right, arm weakness no, speech unknown at 12:25 on 10th December 2016 |
| [Surgial Face Mask](Procedure-ProcedurePrecautionsInfectionMask.md) | Example for CH EMS Procedure: Precautions Infection |
| [Tachycardia](Observation-ObservationHeartRateTachycardia.md) | Example for CH EMS Observation: Heart Rate - with value, interpretation and method |
| [Taking Triatec](MedicationStatement-MedStatTriatec.md) | Example for CH EMS MedicationStatement |
| [Transportation](Procedure-ProcedureTransportation.md) | Example for CH EMS Procedure: Transportation - laying with spine board and vacuum pillow |
| [Ventilated](Procedure-ProcedureBreathingVentilated.md) | Example for CH EMS Procedure: Breathing |
| [Ventilator](Device-Device.md) | Example for CH EMS Device |
| [Vorbehandlung](Procedure-Vorbehandlung.md) | Example for CH EMS Procedure: Pretreatment |

### Other 

These are resources that are used within this implementation guide that do not fit into one of the other categories.

| | |
| :--- | :--- |
| [1 Spitalarzt as information recipient](Practitioner-1-InformationRecipientSpitalarzt.md) | Example for CH EMS Practitioner - hospital doctor as information recipient at handover |
| [1 USZ as information recipient](Organization-1-InformationRecipientUSZ.md) | Example for CH EMS Organization - USZ as information recipient at handover |

