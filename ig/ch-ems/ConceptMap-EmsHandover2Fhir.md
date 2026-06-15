# EMS Handover to FHIR Mapping - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EMS Handover to FHIR Mapping**

## ConceptMap: EMS Handover to FHIR Mapping 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/ConceptMap/EmsHandover2Fhir | *Version*:2.0.0-ballot |
| Active as of 2026-06-15 | *Computable Name*:EmsHandover2Fhir |
| **Copyright/Legal**: CC0-1.0 | |

 
This map shows how the handover section from the EMS Protocol is represented using FHIR. 

Mapping from (not specified) to (not specified)

**Group 1 **Mapping from [EMS Protocol](StructureDefinition-logicalmodel-ems-protocol.md) to [CH EMS Composition](StructureDefinition-ch-ems-composition.md)

* **Source Code**: [EMSProtocol.handover](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.handover)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Composition.section:handover](StructureDefinition-ch-ems-composition-definitions.md#Composition.section:handover)
  * **Card.**: 0..1
  * **Type**: todo

-------

**Group 2 **Mapping from [EMS Protocol](StructureDefinition-logicalmodel-ems-protocol.md) to [CH EMS Observation: Status Priority](StructureDefinition-ch-ems-observation-statuspriority.md)

* **Source Code**: [EMSProtocol.handover.priority](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.handover.priority)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Observation.value[x]](StructureDefinition-ch-ems-observation-statuspriority-definitions.md#Observation.value[x])
  * **Card.**: 0..1
  * **Type**: todo

-------

**Group 3 **Mapping from [EMS Protocol](StructureDefinition-logicalmodel-ems-protocol.md) to [CH EMS Observation: Condition Change](StructureDefinition-ch-ems-observation-conditionchange.md)

* **Source Code**: [EMSProtocol.handover.conditionChange](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.handover.conditionChange)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Observation.value[x]](StructureDefinition-ch-ems-observation-conditionchange-definitions.md#Observation.value[x])
  * **Card.**: 0..1
  * **Type**: todo

-------

**Group 4 **Mapping from [EMS Protocol](StructureDefinition-logicalmodel-ems-protocol.md) to [CH EMS Observation: NACA](StructureDefinition-ch-ems-observation-naca.md)

* **Source Code**: [EMSProtocol.handover.injurySeverity](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.handover.injurySeverity)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Observation.value[x]](StructureDefinition-ch-ems-observation-naca-definitions.md#Observation.value[x])
  * **Card.**: 0..1
  * **Type**: todo

-------

**Group 5 **Mapping from [EMS Protocol](StructureDefinition-logicalmodel-ems-protocol.md) to [CH EMS Observation: GCS](StructureDefinition-ch-ems-observation-gcs.md)

* **Source Code**: [EMSProtocol.handover.gcs.total](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.handover.gcs.total)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Observation.value[x]](StructureDefinition-ch-ems-observation-gcs-definitions.md#Observation.value[x])
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.handover.gcs.eyeOpening.score](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.handover.gcs.eyeOpening.score)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Observation.component:eyeOpening.value[x].coding.extension:itemWeight](StructureDefinition-ch-ems-observation-gcs-definitions.md#Observation.component:eyeOpening.value[x].coding.extension:itemWeight)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.handover.gcs.eyeOpening.description](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.handover.gcs.eyeOpening.description)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Observation.component:eyeOpening.value[x]](StructureDefinition-ch-ems-observation-gcs-definitions.md#Observation.component:eyeOpening.value[x])
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.handover.gcs.verbalResponse.score](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.handover.gcs.verbalResponse.score)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Observation.component:verbal.value[x].coding.extension:itemWeight](StructureDefinition-ch-ems-observation-gcs-definitions.md#Observation.component:verbal.value[x].coding.extension:itemWeight)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.handover.gcs.verbalResponse.description](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.handover.gcs.verbalResponse.description)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Observation.component:verbal.value[x]](StructureDefinition-ch-ems-observation-gcs-definitions.md#Observation.component:verbal.value[x])
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.handover.gcs.motorResponse.score](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.handover.gcs.motorResponse.score)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Observation.component:motor.value[x].coding.extension:itemWeight](StructureDefinition-ch-ems-observation-gcs-definitions.md#Observation.component:motor.value[x].coding.extension:itemWeight)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.handover.gcs.motorResponse.description](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.handover.gcs.motorResponse.description)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Observation.component:motor.value[x]](StructureDefinition-ch-ems-observation-gcs-definitions.md#Observation.component:motor.value[x])
  * **Card.**: 0..1
  * **Type**: todo

-------

**Group 6 **Mapping from [EMS Protocol](StructureDefinition-logicalmodel-ems-protocol.md) to [CH EMS Organization](StructureDefinition-ch-ems-organization.md)

* **Source Code**: [EMSProtocol.handover.recipient.organisation](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.handover.recipient.organisation)
  * **Card.**: 1..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Organization](StructureDefinition-ch-ems-organization-definitions.md#Organization)
  * **Card.**: 0..*
  * **Type**: todo

-------

**Group 7 **Mapping from [EMS Protocol](StructureDefinition-logicalmodel-ems-protocol.md) to [CH EMS Practitioner](StructureDefinition-ch-ems-practitioner.md)

* **Source Code**: [EMSProtocol.handover.recipient.practitioner](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.handover.recipient.practitioner)
  * **Card.**: 0..*
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Practitioner](StructureDefinition-ch-ems-practitioner-definitions.md#Practitioner)
  * **Card.**: 0..*
  * **Type**: todo



## Resource Content

```json
{
  "resourceType" : "ConceptMap",
  "id" : "EmsHandover2Fhir",
  "url" : "http://fhir.ch/ig/ch-ems/ConceptMap/EmsHandover2Fhir",
  "version" : "2.0.0-ballot",
  "name" : "EmsHandover2Fhir",
  "title" : "EMS Handover to FHIR Mapping",
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
  "description" : "This map shows how the handover section from the EMS Protocol is represented using FHIR.",
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
      "code" : "EMSProtocol.handover",
      "target" : [{
        "code" : "Composition.section:handover",
        "equivalence" : "equivalent"
      }]
    }]
  },
  {
    "source" : "http://fhir.ch/ig/ch-ems/StructureDefinition/logicalmodel-ems-protocol",
    "target" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-observation-statuspriority",
    "element" : [{
      "code" : "EMSProtocol.handover.priority",
      "target" : [{
        "code" : "Observation.value[x]",
        "equivalence" : "equivalent"
      }]
    }]
  },
  {
    "source" : "http://fhir.ch/ig/ch-ems/StructureDefinition/logicalmodel-ems-protocol",
    "target" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-observation-conditionchange",
    "element" : [{
      "code" : "EMSProtocol.handover.conditionChange",
      "target" : [{
        "code" : "Observation.value[x]",
        "equivalence" : "equivalent"
      }]
    }]
  },
  {
    "source" : "http://fhir.ch/ig/ch-ems/StructureDefinition/logicalmodel-ems-protocol",
    "target" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-observation-naca",
    "element" : [{
      "code" : "EMSProtocol.handover.injurySeverity",
      "target" : [{
        "code" : "Observation.value[x]",
        "equivalence" : "equivalent"
      }]
    }]
  },
  {
    "source" : "http://fhir.ch/ig/ch-ems/StructureDefinition/logicalmodel-ems-protocol",
    "target" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-observation-gcs",
    "element" : [{
      "code" : "EMSProtocol.handover.gcs.total",
      "target" : [{
        "code" : "Observation.value[x]",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.handover.gcs.eyeOpening.score",
      "target" : [{
        "code" : "Observation.component:eyeOpening.value[x].coding.extension:itemWeight",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.handover.gcs.eyeOpening.description",
      "target" : [{
        "code" : "Observation.component:eyeOpening.value[x]",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.handover.gcs.verbalResponse.score",
      "target" : [{
        "code" : "Observation.component:verbal.value[x].coding.extension:itemWeight",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.handover.gcs.verbalResponse.description",
      "target" : [{
        "code" : "Observation.component:verbal.value[x]",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.handover.gcs.motorResponse.score",
      "target" : [{
        "code" : "Observation.component:motor.value[x].coding.extension:itemWeight",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.handover.gcs.motorResponse.description",
      "target" : [{
        "code" : "Observation.component:motor.value[x]",
        "equivalence" : "equivalent"
      }]
    }]
  },
  {
    "source" : "http://fhir.ch/ig/ch-ems/StructureDefinition/logicalmodel-ems-protocol",
    "target" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-organization",
    "element" : [{
      "code" : "EMSProtocol.handover.recipient.organisation",
      "target" : [{
        "code" : "Organization",
        "equivalence" : "equivalent"
      }]
    }]
  },
  {
    "source" : "http://fhir.ch/ig/ch-ems/StructureDefinition/logicalmodel-ems-protocol",
    "target" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-practitioner",
    "element" : [{
      "code" : "EMSProtocol.handover.recipient.practitioner",
      "target" : [{
        "code" : "Practitioner",
        "equivalence" : "equivalent"
      }]
    }]
  }]
}

```
