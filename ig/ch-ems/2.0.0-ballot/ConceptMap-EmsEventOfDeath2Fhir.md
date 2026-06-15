# EMS Event of Death to FHIR Mapping - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EMS Event of Death to FHIR Mapping**

## ConceptMap: EMS Event of Death to FHIR Mapping 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/ConceptMap/EmsEventOfDeath2Fhir | *Version*:2.0.0-ballot |
| Active as of 2026-06-15 | *Computable Name*:EmsEventOfDeath2Fhir |
| **Copyright/Legal**: CC0-1.0 | |

 
This map shows how the event of death section from the EMS Protocol is represented using FHIR. 

Mapping from (not specified) to (not specified)

**Group 1 **Mapping from [EMS Protocol](StructureDefinition-logicalmodel-ems-protocol.md) to [CH EMS Composition](StructureDefinition-ch-ems-composition.md)

* **Source Code**: [EMSProtocol.eventOfDeath](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.eventOfDeath)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Composition.section:eventOfDeath](StructureDefinition-ch-ems-composition-definitions.md#Composition.section:eventOfDeath)
  * **Card.**: 0..1
  * **Type**: todo

-------

**Group 2 **Mapping from [EMS Protocol](StructureDefinition-logicalmodel-ems-protocol.md) to [CH EMS Observation: Death Manner](StructureDefinition-ch-ems-observation-deathmanner.md)

* **Source Code**: [EMSProtocol.eventOfDeath.deathManner](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.eventOfDeath.deathManner)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Observation.value[x]](StructureDefinition-ch-ems-observation-deathmanner-definitions.md#Observation.value[x])
  * **Card.**: 0..1
  * **Type**: todo



## Resource Content

```json
{
  "resourceType" : "ConceptMap",
  "id" : "EmsEventOfDeath2Fhir",
  "url" : "http://fhir.ch/ig/ch-ems/ConceptMap/EmsEventOfDeath2Fhir",
  "version" : "2.0.0-ballot",
  "name" : "EmsEventOfDeath2Fhir",
  "title" : "EMS Event of Death to FHIR Mapping",
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
  "description" : "This map shows how the event of death section from the EMS Protocol is represented using FHIR.",
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
      "code" : "EMSProtocol.eventOfDeath",
      "target" : [{
        "code" : "Composition.section:eventOfDeath",
        "equivalence" : "equivalent"
      }]
    }]
  },
  {
    "source" : "http://fhir.ch/ig/ch-ems/StructureDefinition/logicalmodel-ems-protocol",
    "target" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-observation-deathmanner",
    "element" : [{
      "code" : "EMSProtocol.eventOfDeath.deathManner",
      "target" : [{
        "code" : "Observation.value[x]",
        "equivalence" : "equivalent"
      }]
    }]
  }]
}

```
