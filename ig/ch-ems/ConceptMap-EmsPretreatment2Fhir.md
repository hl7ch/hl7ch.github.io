# EMS Pretreatment to FHIR Mapping - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EMS Pretreatment to FHIR Mapping**

## ConceptMap: EMS Pretreatment to FHIR Mapping 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/ConceptMap/EmsPretreatment2Fhir | *Version*:2.0.0-ballot |
| Active as of 2026-06-15 | *Computable Name*:EmsPretreatment2Fhir |
| **Copyright/Legal**: CC0-1.0 | |

 
This map shows how the pretreatment section from the EMS Protocol is represented using FHIR. 

Mapping from (not specified) to (not specified)

**Group 1 **Mapping from [EMS Protocol](StructureDefinition-logicalmodel-ems-protocol.md) to [CH EMS Composition](StructureDefinition-ch-ems-composition.md)

* **Source Code**: [EMSProtocol.pretreatment](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.pretreatment)
  * **Card.**: 0..*
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Composition.section:pretreatment](StructureDefinition-ch-ems-composition-definitions.md#Composition.section:pretreatment)
  * **Card.**: 0..1
  * **Type**: todo

-------

**Group 2 **Mapping from [EMS Protocol](StructureDefinition-logicalmodel-ems-protocol.md) to [CH EMS Procedure: Pretreatment](StructureDefinition-ch-ems-procedure-pretreatment.md)

* **Source Code**: [EMSProtocol.pretreatment.type](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.pretreatment.type)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Procedure.code](StructureDefinition-ch-ems-procedure-pretreatment-definitions.md#Procedure.code)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.pretreatment.performer](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.pretreatment.performer)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Procedure.extension:performer](StructureDefinition-ch-ems-procedure-pretreatment-definitions.md#Procedure.extension:performer)
  * **Card.**: 0..1
  * **Type**: todo



## Resource Content

```json
{
  "resourceType" : "ConceptMap",
  "id" : "EmsPretreatment2Fhir",
  "url" : "http://fhir.ch/ig/ch-ems/ConceptMap/EmsPretreatment2Fhir",
  "version" : "2.0.0-ballot",
  "name" : "EmsPretreatment2Fhir",
  "title" : "EMS Pretreatment to FHIR Mapping",
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
  "description" : "This map shows how the pretreatment section from the EMS Protocol is represented using FHIR.",
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
      "code" : "EMSProtocol.pretreatment",
      "target" : [{
        "code" : "Composition.section:pretreatment",
        "equivalence" : "equivalent"
      }]
    }]
  },
  {
    "source" : "http://fhir.ch/ig/ch-ems/StructureDefinition/logicalmodel-ems-protocol",
    "target" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-procedure-pretreatment",
    "element" : [{
      "code" : "EMSProtocol.pretreatment.type",
      "target" : [{
        "code" : "Procedure.code",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.pretreatment.performer",
      "target" : [{
        "code" : "Procedure.extension:performer",
        "equivalence" : "equivalent"
      }]
    }]
  }]
}

```
