# EMS Findings to FHIR Mapping - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EMS Findings to FHIR Mapping**

## ConceptMap: EMS Findings to FHIR Mapping 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/ConceptMap/EmsFindings2Fhir | *Version*:2.0.0-ballot |
| Active as of 2026-06-15 | *Computable Name*:EmsFindings2Fhir |
| **Copyright/Legal**: CC0-1.0 | |

 
This map shows how the findings section from the EMS Protocol is represented using FHIR. 

Mapping from (not specified) to (not specified)

**Group 1 **Mapping from [EMS Protocol](StructureDefinition-logicalmodel-ems-protocol.md) to [CH EMS Composition](StructureDefinition-ch-ems-composition.md)

* **Source Code**: [EMSProtocol.findings](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.findings)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Composition.section:findings](StructureDefinition-ch-ems-composition-definitions.md#Composition.section:findings)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.findings.airway](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.findings.airway)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Composition.section:findings.section:airway](StructureDefinition-ch-ems-composition-definitions.md#Composition.section:findings.section:airway)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.findings.breathing](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.findings.breathing)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Composition.section:findings.section:breathing](StructureDefinition-ch-ems-composition-definitions.md#Composition.section:findings.section:breathing)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.findings.circulation](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.findings.circulation)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Composition.section:findings.section:circulation](StructureDefinition-ch-ems-composition-definitions.md#Composition.section:findings.section:circulation)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.findings.disability](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.findings.disability)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Composition.section:findings.section:disability](StructureDefinition-ch-ems-composition-definitions.md#Composition.section:findings.section:disability)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.findings.exposure](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.findings.exposure)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Composition.section:findings.section:exposure](StructureDefinition-ch-ems-composition-definitions.md#Composition.section:findings.section:exposure)
  * **Card.**: 0..1
  * **Type**: todo

-------

**Group 2 **Mapping from [EMS Protocol](StructureDefinition-logicalmodel-ems-protocol.md) to [CH EMS Observation: Airways](StructureDefinition-ch-ems-observation-airways.md)

* **Source Code**: [EMSProtocol.findings.time](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.findings.time)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Observation.effective[x]](StructureDefinition-ch-ems-observation-airways-definitions.md#Observation.effective[x])
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.findings.airway.respiratoryStatus](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.findings.airway.respiratoryStatus)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Observation.value[x]](StructureDefinition-ch-ems-observation-airways-definitions.md#Observation.value[x])
  * **Card.**: 0..1
  * **Type**: todo

-------

**Group 3 **Mapping from [EMS Protocol](StructureDefinition-logicalmodel-ems-protocol.md) to [CH EMS Observation: Breathing](StructureDefinition-ch-ems-observation-breathing.md)

* **Source Code**: [EMSProtocol.findings.time](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.findings.time)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Observation.effective[x]](StructureDefinition-ch-ems-observation-breathing-definitions.md#Observation.effective[x])
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.findings.breathing.respiratoryFunction](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.findings.breathing.respiratoryFunction)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Observation.value[x]](StructureDefinition-ch-ems-observation-breathing-definitions.md#Observation.value[x])
  * **Card.**: 0..1
  * **Type**: todo

-------

**Group 4 **Mapping from [EMS Protocol](StructureDefinition-logicalmodel-ems-protocol.md) to [CH EMS Observation: Cardiac Arrest](StructureDefinition-ch-ems-observation-cardiacarrest.md)

* **Source Code**: [EMSProtocol.findings.time](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.findings.time)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Observation.effective[x]](StructureDefinition-ch-ems-observation-cardiacarrest-definitions.md#Observation.effective[x])
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.findings.circulation.cardiacArrest](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.findings.circulation.cardiacArrest)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Observation.value[x]](StructureDefinition-ch-ems-observation-cardiacarrest-definitions.md#Observation.value[x])
  * **Card.**: 0..1
  * **Type**: todo

-------

**Group 5 **Mapping from [EMS Protocol](StructureDefinition-logicalmodel-ems-protocol.md) to [CH EMS Observation: Heart Rate](StructureDefinition-ch-ems-observation-heartrate.md)

* **Source Code**: [EMSProtocol.findings.time](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.findings.time)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Observation.effective[x]](StructureDefinition-ch-ems-observation-heartrate-definitions.md#Observation.effective[x])
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.findings.circulation.heartRate.rate](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.findings.circulation.heartRate.rate)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Observation.value[x]](StructureDefinition-ch-ems-observation-heartrate-definitions.md#Observation.value[x])
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.findings.circulation.heartRate.arrhythmia](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.findings.circulation.heartRate.arrhythmia)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Observation.interpretation:arrhythmia](StructureDefinition-ch-ems-observation-heartrate-definitions.md#Observation.interpretation:arrhythmia)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.findings.circulation.heartRate.intensity](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.findings.circulation.heartRate.intensity)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Observation.interpretation:intensity](StructureDefinition-ch-ems-observation-heartrate-definitions.md#Observation.interpretation:intensity)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.findings.circulation.heartRate.measurementMethod](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.findings.circulation.heartRate.measurementMethod)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Observation.method](StructureDefinition-ch-ems-observation-heartrate-definitions.md#Observation.method)
  * **Card.**: 0..1
  * **Type**: todo

-------

**Group 6 **Mapping from [EMS Protocol](StructureDefinition-logicalmodel-ems-protocol.md) to [CH EMS Observation: Blood Pressure](StructureDefinition-ch-ems-observation-bloodpressure.md)

* **Source Code**: [EMSProtocol.findings.time](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.findings.time)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Observation.effective[x]](StructureDefinition-ch-ems-observation-bloodpressure-definitions.md#Observation.effective[x])
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.findings.circulation.bloodPressure.systolic](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.findings.circulation.bloodPressure.systolic)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Observation.component.value[x]](StructureDefinition-ch-ems-observation-bloodpressure-definitions.md#Observation.component.value[x])
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.findings.circulation.bloodPressure.diastolic](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.findings.circulation.bloodPressure.diastolic)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Observation.component.value[x]](StructureDefinition-ch-ems-observation-bloodpressure-definitions.md#Observation.component.value[x])
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.findings.circulation.bloodPressure.measurementMethod](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.findings.circulation.bloodPressure.measurementMethod)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Observation.method](StructureDefinition-ch-ems-observation-bloodpressure-definitions.md#Observation.method)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.findings.circulation.bloodPressure.measurementMethod.bodySite](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.findings.circulation.bloodPressure.measurementMethod.bodySite)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Observation.bodySite](StructureDefinition-ch-ems-observation-bloodpressure-definitions.md#Observation.bodySite)
  * **Card.**: 0..1
  * **Type**: todo

-------

**Group 7 **Mapping from [EMS Protocol](StructureDefinition-logicalmodel-ems-protocol.md) to [CH EMS Observation: GCS](StructureDefinition-ch-ems-observation-gcs.md)

* **Source Code**: [EMSProtocol.findings.time](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.findings.time)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Observation.effective[x]](StructureDefinition-ch-ems-observation-gcs-definitions.md#Observation.effective[x])
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.findings.disability.gcs.total](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.findings.disability.gcs.total)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Observation.value[x]](StructureDefinition-ch-ems-observation-gcs-definitions.md#Observation.value[x])
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.findings.disability.gcs.eyeOpening.score](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.findings.disability.gcs.eyeOpening.score)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Observation.component:eyeOpening.value[x].coding.extension:itemWeight](StructureDefinition-ch-ems-observation-gcs-definitions.md#Observation.component:eyeOpening.value[x].coding.extension:itemWeight)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.findings.disability.gcs.eyeOpening.description](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.findings.disability.gcs.eyeOpening.description)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Observation.component:eyeOpening.value[x]](StructureDefinition-ch-ems-observation-gcs-definitions.md#Observation.component:eyeOpening.value[x])
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.findings.disability.gcs.verbalResponse.score](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.findings.disability.gcs.verbalResponse.score)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Observation.component:verbal.value[x].coding.extension:itemWeight](StructureDefinition-ch-ems-observation-gcs-definitions.md#Observation.component:verbal.value[x].coding.extension:itemWeight)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.findings.disability.gcs.verbalResponse.description](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.findings.disability.gcs.verbalResponse.description)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Observation.component:verbal.value[x]](StructureDefinition-ch-ems-observation-gcs-definitions.md#Observation.component:verbal.value[x])
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.findings.disability.gcs.motorResponse.score](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.findings.disability.gcs.motorResponse.score)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Observation.component:motor.value[x].coding.extension:itemWeight](StructureDefinition-ch-ems-observation-gcs-definitions.md#Observation.component:motor.value[x].coding.extension:itemWeight)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.findings.disability.gcs.motorResponse.description](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.findings.disability.gcs.motorResponse.description)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Observation.component:motor.value[x]](StructureDefinition-ch-ems-observation-gcs-definitions.md#Observation.component:motor.value[x])
  * **Card.**: 0..1
  * **Type**: todo

-------

**Group 8 **Mapping from [EMS Protocol](StructureDefinition-logicalmodel-ems-protocol.md) to [CH EMS Observation: AVPU](StructureDefinition-ch-ems-observation-avpu.md)

* **Source Code**: [EMSProtocol.findings.time](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.findings.time)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Observation.effective[x]](StructureDefinition-ch-ems-observation-avpu-definitions.md#Observation.effective[x])
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.findings.disability.levelOfResponsiveness](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.findings.disability.levelOfResponsiveness)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Observation.value[x]](StructureDefinition-ch-ems-observation-avpu-definitions.md#Observation.value[x])
  * **Card.**: 0..1
  * **Type**: todo

-------

**Group 9 **Mapping from [EMS Protocol](StructureDefinition-logicalmodel-ems-protocol.md) to [CH EMS Observation: Pupil Shape](StructureDefinition-ch-ems-observation-pupilshape.md)

* **Source Code**: [EMSProtocol.findings.time](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.findings.time)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Observation.effective[x]](StructureDefinition-ch-ems-observation-pupilshape-definitions.md#Observation.effective[x])
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.findings.disability.pupilShape](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.findings.disability.pupilShape)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Observation.value[x]](StructureDefinition-ch-ems-observation-pupilshape-definitions.md#Observation.value[x])
  * **Card.**: 0..1
  * **Type**: todo

-------

**Group 10 **Mapping from [EMS Protocol](StructureDefinition-logicalmodel-ems-protocol.md) to [CH EMS Observation: Pupil Size](StructureDefinition-ch-ems-observation-pupilsize.md)

* **Source Code**: [EMSProtocol.findings.time](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.findings.time)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Observation.effective[x]](StructureDefinition-ch-ems-observation-pupilsize-definitions.md#Observation.effective[x])
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.findings.disability.pupilSize](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.findings.disability.pupilSize)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Observation.value[x]](StructureDefinition-ch-ems-observation-pupilsize-definitions.md#Observation.value[x])
  * **Card.**: 0..1
  * **Type**: todo

-------

**Group 11 **Mapping from [EMS Protocol](StructureDefinition-logicalmodel-ems-protocol.md) to [CH EMS Observation: Stroke/FAST](StructureDefinition-ch-ems-observation-stroke-fast.md)

* **Source Code**: [EMSProtocol.findings.disability.fast.face](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.findings.disability.fast.face)
  * **Card.**: 1..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Observation.component:face.value[x]](StructureDefinition-ch-ems-observation-stroke-fast-definitions.md#Observation.component:face.value[x])
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.findings.disability.fast.face.laterality](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.findings.disability.fast.face.laterality)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Observation.component:face.extension:laterality](StructureDefinition-ch-ems-observation-stroke-fast-definitions.md#Observation.component:face.extension:laterality)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.findings.disability.fast.arm](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.findings.disability.fast.arm)
  * **Card.**: 1..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Observation.component:arm.value[x]](StructureDefinition-ch-ems-observation-stroke-fast-definitions.md#Observation.component:arm.value[x])
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.findings.disability.fast.arm.laterality](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.findings.disability.fast.arm.laterality)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Observation.component:arm.extension:laterality](StructureDefinition-ch-ems-observation-stroke-fast-definitions.md#Observation.component:arm.extension:laterality)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.findings.disability.fast.speech](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.findings.disability.fast.speech)
  * **Card.**: 1..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Observation.component:speech.value[x]](StructureDefinition-ch-ems-observation-stroke-fast-definitions.md#Observation.component:speech.value[x])
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.findings.disability.fast.time](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.findings.disability.fast.time)
  * **Card.**: 1..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Observation.effective[x]](StructureDefinition-ch-ems-observation-stroke-fast-definitions.md#Observation.effective[x])
  * **Card.**: 1..1
  * **Type**: todo

-------

**Group 12 **Mapping from [EMS Protocol](StructureDefinition-logicalmodel-ems-protocol.md) to [CH EMS Observation: Heat Exposure](StructureDefinition-ch-ems-observation-heatexposure.md)

* **Source Code**: [EMSProtocol.findings.time](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.findings.time)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Observation.effective[x]](StructureDefinition-ch-ems-observation-heatexposure-definitions.md#Observation.effective[x])
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.findings.exposure.heat](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.findings.exposure.heat)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Observation.value[x]](StructureDefinition-ch-ems-observation-heatexposure-definitions.md#Observation.value[x])
  * **Card.**: 0..1
  * **Type**: todo

-------

**Group 13 **Mapping from [EMS Protocol](StructureDefinition-logicalmodel-ems-protocol.md) to [CH EMS Observation: Cold Exposure](StructureDefinition-ch-ems-observation-coldexposure.md)

* **Source Code**: [EMSProtocol.findings.time](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.findings.time)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Observation.effective[x]](StructureDefinition-ch-ems-observation-coldexposure-definitions.md#Observation.effective[x])
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.findings.exposure.cold](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.findings.exposure.cold)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Observation.value[x]](StructureDefinition-ch-ems-observation-coldexposure-definitions.md#Observation.value[x])
  * **Card.**: 0..1
  * **Type**: todo



## Resource Content

```json
{
  "resourceType" : "ConceptMap",
  "id" : "EmsFindings2Fhir",
  "url" : "http://fhir.ch/ig/ch-ems/ConceptMap/EmsFindings2Fhir",
  "version" : "2.0.0-ballot",
  "name" : "EmsFindings2Fhir",
  "title" : "EMS Findings to FHIR Mapping",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-06-15T08:07:03+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [{
    "name" : "HL7 Switzerland",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.ch/"
    }]
  },
  {
    "name" : "HL7 Switzerland",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.ch/",
      "use" : "work"
    }]
  }],
  "description" : "This map shows how the findings section from the EMS Protocol is represented using FHIR.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "group" : [{
    "source" : "http://fhir.ch/ig/ch-ems/StructureDefinition/logicalmodel-ems-protocol",
    "target" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-composition",
    "element" : [{
      "code" : "EMSProtocol.findings",
      "target" : [{
        "code" : "Composition.section:findings",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.findings.airway",
      "target" : [{
        "code" : "Composition.section:findings.section:airway",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.findings.breathing",
      "target" : [{
        "code" : "Composition.section:findings.section:breathing",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.findings.circulation",
      "target" : [{
        "code" : "Composition.section:findings.section:circulation",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.findings.disability",
      "target" : [{
        "code" : "Composition.section:findings.section:disability",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.findings.exposure",
      "target" : [{
        "code" : "Composition.section:findings.section:exposure",
        "equivalence" : "equivalent"
      }]
    }]
  },
  {
    "source" : "http://fhir.ch/ig/ch-ems/StructureDefinition/logicalmodel-ems-protocol",
    "target" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-observation-airways",
    "element" : [{
      "code" : "EMSProtocol.findings.time",
      "target" : [{
        "code" : "Observation.effective[x]",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.findings.airway.respiratoryStatus",
      "target" : [{
        "code" : "Observation.value[x]",
        "equivalence" : "equivalent"
      }]
    }]
  },
  {
    "source" : "http://fhir.ch/ig/ch-ems/StructureDefinition/logicalmodel-ems-protocol",
    "target" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-observation-breathing",
    "element" : [{
      "code" : "EMSProtocol.findings.time",
      "target" : [{
        "code" : "Observation.effective[x]",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.findings.breathing.respiratoryFunction",
      "target" : [{
        "code" : "Observation.value[x]",
        "equivalence" : "equivalent"
      }]
    }]
  },
  {
    "source" : "http://fhir.ch/ig/ch-ems/StructureDefinition/logicalmodel-ems-protocol",
    "target" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-observation-cardiacarrest",
    "element" : [{
      "code" : "EMSProtocol.findings.time",
      "target" : [{
        "code" : "Observation.effective[x]",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.findings.circulation.cardiacArrest",
      "target" : [{
        "code" : "Observation.value[x]",
        "equivalence" : "equivalent"
      }]
    }]
  },
  {
    "source" : "http://fhir.ch/ig/ch-ems/StructureDefinition/logicalmodel-ems-protocol",
    "target" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-observation-heartrate",
    "element" : [{
      "code" : "EMSProtocol.findings.time",
      "target" : [{
        "code" : "Observation.effective[x]",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.findings.circulation.heartRate.rate",
      "target" : [{
        "code" : "Observation.value[x]",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.findings.circulation.heartRate.arrhythmia",
      "target" : [{
        "code" : "Observation.interpretation:arrhythmia",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.findings.circulation.heartRate.intensity",
      "target" : [{
        "code" : "Observation.interpretation:intensity",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.findings.circulation.heartRate.measurementMethod",
      "target" : [{
        "code" : "Observation.method",
        "equivalence" : "equivalent"
      }]
    }]
  },
  {
    "source" : "http://fhir.ch/ig/ch-ems/StructureDefinition/logicalmodel-ems-protocol",
    "target" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-observation-bloodpressure",
    "element" : [{
      "code" : "EMSProtocol.findings.time",
      "target" : [{
        "code" : "Observation.effective[x]",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.findings.circulation.bloodPressure.systolic",
      "target" : [{
        "code" : "Observation.component.value[x]",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.findings.circulation.bloodPressure.diastolic",
      "target" : [{
        "code" : "Observation.component.value[x]",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.findings.circulation.bloodPressure.measurementMethod",
      "target" : [{
        "code" : "Observation.method",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.findings.circulation.bloodPressure.measurementMethod.bodySite",
      "target" : [{
        "code" : "Observation.bodySite",
        "equivalence" : "equivalent"
      }]
    }]
  },
  {
    "source" : "http://fhir.ch/ig/ch-ems/StructureDefinition/logicalmodel-ems-protocol",
    "target" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-observation-gcs",
    "element" : [{
      "code" : "EMSProtocol.findings.time",
      "target" : [{
        "code" : "Observation.effective[x]",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.findings.disability.gcs.total",
      "target" : [{
        "code" : "Observation.value[x]",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.findings.disability.gcs.eyeOpening.score",
      "target" : [{
        "code" : "Observation.component:eyeOpening.value[x].coding.extension:itemWeight",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.findings.disability.gcs.eyeOpening.description",
      "target" : [{
        "code" : "Observation.component:eyeOpening.value[x]",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.findings.disability.gcs.verbalResponse.score",
      "target" : [{
        "code" : "Observation.component:verbal.value[x].coding.extension:itemWeight",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.findings.disability.gcs.verbalResponse.description",
      "target" : [{
        "code" : "Observation.component:verbal.value[x]",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.findings.disability.gcs.motorResponse.score",
      "target" : [{
        "code" : "Observation.component:motor.value[x].coding.extension:itemWeight",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.findings.disability.gcs.motorResponse.description",
      "target" : [{
        "code" : "Observation.component:motor.value[x]",
        "equivalence" : "equivalent"
      }]
    }]
  },
  {
    "source" : "http://fhir.ch/ig/ch-ems/StructureDefinition/logicalmodel-ems-protocol",
    "target" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-observation-avpu",
    "element" : [{
      "code" : "EMSProtocol.findings.time",
      "target" : [{
        "code" : "Observation.effective[x]",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.findings.disability.levelOfResponsiveness",
      "target" : [{
        "code" : "Observation.value[x]",
        "equivalence" : "equivalent"
      }]
    }]
  },
  {
    "source" : "http://fhir.ch/ig/ch-ems/StructureDefinition/logicalmodel-ems-protocol",
    "target" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-observation-pupilshape",
    "element" : [{
      "code" : "EMSProtocol.findings.time",
      "target" : [{
        "code" : "Observation.effective[x]",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.findings.disability.pupilShape",
      "target" : [{
        "code" : "Observation.value[x]",
        "equivalence" : "equivalent"
      }]
    }]
  },
  {
    "source" : "http://fhir.ch/ig/ch-ems/StructureDefinition/logicalmodel-ems-protocol",
    "target" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-observation-pupilsize",
    "element" : [{
      "code" : "EMSProtocol.findings.time",
      "target" : [{
        "code" : "Observation.effective[x]",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.findings.disability.pupilSize",
      "target" : [{
        "code" : "Observation.value[x]",
        "equivalence" : "equivalent"
      }]
    }]
  },
  {
    "source" : "http://fhir.ch/ig/ch-ems/StructureDefinition/logicalmodel-ems-protocol",
    "target" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-observation-stroke-fast",
    "element" : [{
      "code" : "EMSProtocol.findings.disability.fast.face",
      "target" : [{
        "code" : "Observation.component:face.value[x]",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.findings.disability.fast.face.laterality",
      "target" : [{
        "code" : "Observation.component:face.extension:laterality",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.findings.disability.fast.arm",
      "target" : [{
        "code" : "Observation.component:arm.value[x]",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.findings.disability.fast.arm.laterality",
      "target" : [{
        "code" : "Observation.component:arm.extension:laterality",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.findings.disability.fast.speech",
      "target" : [{
        "code" : "Observation.component:speech.value[x]",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.findings.disability.fast.time",
      "target" : [{
        "code" : "Observation.effective[x]",
        "equivalence" : "equivalent"
      }]
    }]
  },
  {
    "source" : "http://fhir.ch/ig/ch-ems/StructureDefinition/logicalmodel-ems-protocol",
    "target" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-observation-heatexposure",
    "element" : [{
      "code" : "EMSProtocol.findings.time",
      "target" : [{
        "code" : "Observation.effective[x]",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.findings.exposure.heat",
      "target" : [{
        "code" : "Observation.value[x]",
        "equivalence" : "equivalent"
      }]
    }]
  },
  {
    "source" : "http://fhir.ch/ig/ch-ems/StructureDefinition/logicalmodel-ems-protocol",
    "target" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-observation-coldexposure",
    "element" : [{
      "code" : "EMSProtocol.findings.time",
      "target" : [{
        "code" : "Observation.effective[x]",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.findings.exposure.cold",
      "target" : [{
        "code" : "Observation.value[x]",
        "equivalence" : "equivalent"
      }]
    }]
  }]
}

```
