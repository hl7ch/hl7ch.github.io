# EMS Diagnosis to FHIR Mapping - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EMS Diagnosis to FHIR Mapping**

## ConceptMap: EMS Diagnosis to FHIR Mapping 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/ConceptMap/EmsDiagnosis2Fhir | *Version*:2.0.0-ballot |
| Active as of 2026-06-15 | *Computable Name*:EmsDiagnosis2Fhir |
| **Copyright/Legal**: CC0-1.0 | |

 
This map shows how the diagnosis section from the EMS Protocol is represented using FHIR. 

Mapping from (not specified) to (not specified)

**Group 1 **Mapping from [EMS Protocol](StructureDefinition-logicalmodel-ems-protocol.md) to [CH EMS Composition](StructureDefinition-ch-ems-composition.md)

* **Source Code**: [EMSProtocol.diagnosis](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.diagnosis)
  * **Card.**: 0..*
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Composition.section:diagnosis](StructureDefinition-ch-ems-composition-definitions.md#Composition.section:diagnosis)
  * **Card.**: 0..1
  * **Type**: todo

-------

**Group 2 **Mapping from [EMS Protocol](StructureDefinition-logicalmodel-ems-protocol.md) to [CH EMS Observation: Diagnosis](StructureDefinition-ch-ems-observation-diagnosis.md)

* **Source Code**: [EMSProtocol.diagnosis.type](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.diagnosis.type)
  * **Card.**: 1..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Observation.code](StructureDefinition-ch-ems-observation-diagnosis-definitions.md#Observation.code)
  * **Card.**: 1..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.diagnosis.author](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.diagnosis.author)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Observation.performer](StructureDefinition-ch-ems-observation-diagnosis-definitions.md#Observation.performer)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.diagnosis.icd10](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.diagnosis.icd10)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Observation.value[x].coding:icd10](StructureDefinition-ch-ems-observation-diagnosis-definitions.md#Observation.value[x].coding:icd10)
  * **Card.**: 0..1
  * **Type**: todo

-------

**Group 3 **Mapping from [EMS Protocol](StructureDefinition-logicalmodel-ems-protocol.md) to [CH EMS Practitioner](StructureDefinition-ch-ems-practitioner.md)

* **Source Code**: [EMSProtocol.diagnosis.author.name](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.diagnosis.author.name)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Practitioner.name](StructureDefinition-ch-ems-practitioner-definitions.md#Practitioner.name)
  * **Card.**: 0..*
  * **Type**: todo
* **Source Code**: [EMSProtocol.diagnosis.author.name.firstName](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.diagnosis.author.name.firstName)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Practitioner.name.given](StructureDefinition-ch-ems-practitioner-definitions.md#Practitioner.name.given)
  * **Card.**: 0..*
  * **Type**: todo
* **Source Code**: [EMSProtocol.diagnosis.author.name.lastName](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.diagnosis.author.name.lastName)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Practitioner.name.family](StructureDefinition-ch-ems-practitioner-definitions.md#Practitioner.name.family)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.diagnosis.author.gln](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.diagnosis.author.gln)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Practitioner.identifier:GLN](StructureDefinition-ch-ems-practitioner-definitions.md#Practitioner.identifier:GLN)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.diagnosis.author.formation](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.diagnosis.author.formation)
  * **Card.**: 0..*
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Practitioner.qualification.code](StructureDefinition-ch-ems-practitioner-definitions.md#Practitioner.qualification.code)
  * **Card.**: 1..1
  * **Type**: todo



## Resource Content

```json
{
  "resourceType" : "ConceptMap",
  "id" : "EmsDiagnosis2Fhir",
  "url" : "http://fhir.ch/ig/ch-ems/ConceptMap/EmsDiagnosis2Fhir",
  "version" : "2.0.0-ballot",
  "name" : "EmsDiagnosis2Fhir",
  "title" : "EMS Diagnosis to FHIR Mapping",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-06-15T08:00:21+00:00",
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
  "description" : "This map shows how the diagnosis section from the EMS Protocol is represented using FHIR.",
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
      "code" : "EMSProtocol.diagnosis",
      "target" : [{
        "code" : "Composition.section:diagnosis",
        "equivalence" : "equivalent"
      }]
    }]
  },
  {
    "source" : "http://fhir.ch/ig/ch-ems/StructureDefinition/logicalmodel-ems-protocol",
    "target" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-observation-diagnosis",
    "element" : [{
      "code" : "EMSProtocol.diagnosis.type",
      "target" : [{
        "code" : "Observation.code",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.diagnosis.author",
      "target" : [{
        "code" : "Observation.performer",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.diagnosis.icd10",
      "target" : [{
        "code" : "Observation.value[x].coding:icd10",
        "equivalence" : "equivalent"
      }]
    }]
  },
  {
    "source" : "http://fhir.ch/ig/ch-ems/StructureDefinition/logicalmodel-ems-protocol",
    "target" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-practitioner",
    "element" : [{
      "code" : "EMSProtocol.diagnosis.author.name",
      "target" : [{
        "code" : "Practitioner.name",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.diagnosis.author.name.firstName",
      "target" : [{
        "code" : "Practitioner.name.given",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.diagnosis.author.name.lastName",
      "target" : [{
        "code" : "Practitioner.name.family",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.diagnosis.author.gln",
      "target" : [{
        "code" : "Practitioner.identifier:GLN",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.diagnosis.author.formation",
      "target" : [{
        "code" : "Practitioner.qualification.code",
        "equivalence" : "equivalent"
      }]
    }]
  }]
}

```
