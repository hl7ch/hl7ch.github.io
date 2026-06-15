# EMS Administrative to FHIR Mapping - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EMS Administrative to FHIR Mapping**

## ConceptMap: EMS Administrative to FHIR Mapping 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/ConceptMap/EmsAdministrative2Fhir | *Version*:2.0.0-ballot |
| Active as of 2026-06-15 | *Computable Name*:EmsAdministrative2Fhir |
| **Copyright/Legal**: CC0-1.0 | |

 
This map shows how the administrative section from the EMS Protocol is represented using FHIR. 

Mapping from (not specified) to (not specified)

**Group 1 **Mapping from [EMS Protocol](StructureDefinition-logicalmodel-ems-protocol.md) to [CH EMS Composition](StructureDefinition-ch-ems-composition.md)

* **Source Code**: [EMSProtocol.administrative](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.administrative)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Composition.section:administrative](StructureDefinition-ch-ems-composition-definitions.md#Composition.section:administrative)
  * **Card.**: 0..1
  * **Type**: todo

-------

**Group 2 **Mapping from [EMS Protocol](StructureDefinition-logicalmodel-ems-protocol.md) to [CH EMS Patient](StructureDefinition-ch-ems-patient.md)

* **Source Code**: [EMSProtocol.administrative.involvedParticipant](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.administrative.involvedParticipant)
  * **Card.**: 0..*
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Patient.contact:involvedParticipant](StructureDefinition-ch-ems-patient-definitions.md#Patient.contact:involvedParticipant)
  * **Card.**: 0..*
  * **Type**: todo
* **Source Code**: [EMSProtocol.administrative.involvedParticipant.role](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.administrative.involvedParticipant.role)
  * **Card.**: 0..*
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Patient.contact:involvedParticipant.extension:personRole](StructureDefinition-ch-ems-patient-definitions.md#Patient.contact:involvedParticipant.extension:personRole)
  * **Card.**: 0..*
  * **Type**: todo
* **Source Code**: [EMSProtocol.administrative.involvedParticipant.name](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.administrative.involvedParticipant.name)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Patient.contact:involvedParticipant.name](StructureDefinition-ch-ems-patient-definitions.md#Patient.contact:involvedParticipant.name)
  * **Card.**: 0..1
  * **Type**: todo



## Resource Content

```json
{
  "resourceType" : "ConceptMap",
  "id" : "EmsAdministrative2Fhir",
  "url" : "http://fhir.ch/ig/ch-ems/ConceptMap/EmsAdministrative2Fhir",
  "version" : "2.0.0-ballot",
  "name" : "EmsAdministrative2Fhir",
  "title" : "EMS Administrative to FHIR Mapping",
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
  "description" : "This map shows how the administrative section from the EMS Protocol is represented using FHIR.",
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
      "code" : "EMSProtocol.administrative",
      "target" : [{
        "code" : "Composition.section:administrative",
        "equivalence" : "equivalent"
      }]
    }]
  },
  {
    "source" : "http://fhir.ch/ig/ch-ems/StructureDefinition/logicalmodel-ems-protocol",
    "target" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-patient",
    "element" : [{
      "code" : "EMSProtocol.administrative.involvedParticipant",
      "target" : [{
        "code" : "Patient.contact:involvedParticipant",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.administrative.involvedParticipant.role",
      "target" : [{
        "code" : "Patient.contact:involvedParticipant.extension:personRole",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.administrative.involvedParticipant.name",
      "target" : [{
        "code" : "Patient.contact:involvedParticipant.name",
        "equivalence" : "equivalent"
      }]
    }]
  }]
}

```
