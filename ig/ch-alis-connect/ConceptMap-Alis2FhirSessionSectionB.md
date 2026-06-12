# ALIS SessionSectionB to FHIR Mapping - CH ALIS Connect (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ALIS SessionSectionB to FHIR Mapping**

## ConceptMap: ALIS SessionSectionB to FHIR Mapping 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-alis-connect/ConceptMap/Alis2FhirSessionSectionB | *Version*:1.0.0-ballot |
| Active as of 2026-06-12 | *Computable Name*:Alis2FhirSessionSectionB |
| **Copyright/Legal**: CC0-1.0 | |

 
Mapping of the ALIS SessionSectionB logical model to the FHIR SessionAnnexB extension (on ChargeItem). 

Mapping from (not specified) to (not specified)

**Group 1 **Mapping from [CH ALIS Leistungsschnittstelle - SessionSectionB](StructureDefinition-SessionSectionB.md) to [CH ALIS Extension SessionAnnexB](StructureDefinition-ch-alis-connect-ext-sessionannexb.md)

* **Source Code**: [SessionSectionB.SessionIDSectionB](StructureDefinition-SessionSectionB.md#SessionSectionB.SessionIDSectionB)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Extension.extension:SessionIDSectionB.value[x]:valueUuid](StructureDefinition-ch-alis-connect-ext-sessionannexb-definitions.md#Extension.extension:SessionIDSectionB.value[x]:valueUuid)
  * **Card.**: 1..1
  * **Type**: todo
* **Source Code**: [SessionSectionB.AssignedSessionSectionB](StructureDefinition-SessionSectionB.md#SessionSectionB.AssignedSessionSectionB)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Extension.extension:AssignedSessionSectionB.value[x]:valueUuid](StructureDefinition-ch-alis-connect-ext-sessionannexb-definitions.md#Extension.extension:AssignedSessionSectionB.value[x]:valueUuid)
  * **Card.**: 0..1
  * **Type**: todo



## Resource Content

```json
{
  "resourceType" : "ConceptMap",
  "id" : "Alis2FhirSessionSectionB",
  "url" : "http://fhir.ch/ig/ch-alis-connect/ConceptMap/Alis2FhirSessionSectionB",
  "version" : "1.0.0-ballot",
  "name" : "Alis2FhirSessionSectionB",
  "title" : "ALIS SessionSectionB to FHIR Mapping",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-06-12T18:37:15+00:00",
  "publisher" : "ALIS-Connect",
  "contact" : [{
    "name" : "ALIS-Connect",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.alis-connect.ch/"
    }]
  }],
  "description" : "Mapping of the ALIS SessionSectionB logical model to the FHIR SessionAnnexB extension (on ChargeItem).",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "group" : [{
    "source" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/SessionSectionB",
    "target" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-ext-sessionannexb",
    "element" : [{
      "code" : "SessionSectionB.SessionIDSectionB",
      "target" : [{
        "code" : "Extension.extension:SessionIDSectionB.value[x]:valueUuid",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "SessionSectionB.AssignedSessionSectionB",
      "target" : [{
        "code" : "Extension.extension:AssignedSessionSectionB.value[x]:valueUuid",
        "equivalence" : "equivalent"
      }]
    }]
  }]
}

```
