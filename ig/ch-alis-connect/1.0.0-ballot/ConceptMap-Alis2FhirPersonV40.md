# ALIS PersonV40 to FHIR Mapping - CH ALIS Connect (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ALIS PersonV40 to FHIR Mapping**

## ConceptMap: ALIS PersonV40 to FHIR Mapping 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-alis-connect/ConceptMap/Alis2FhirPersonV40 | *Version*:1.0.0-ballot |
| Active as of 2026-06-12 | *Computable Name*:Alis2FhirPersonV40 |
| **Copyright/Legal**: CC0-1.0 | |

 
Mapping of the ALIS PersonV40 logical model to the FHIR ChargeItem.performer element. 

Mapping from (not specified) to (not specified)

**Group 1 **Mapping from [CH ALIS Leistungsschnittstelle - PersonV40](StructureDefinition-PersonV40.md) to [CH ALIS ChargeItem Profile](StructureDefinition-ch-alis-connect-chargeitem.md)

* **Source Code**: [PersonV40](StructureDefinition-PersonV40.md#PersonV40)
  * **Card.**: 0..*
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [ChargeItem.performer](StructureDefinition-ch-alis-connect-chargeitem-definitions.md#ChargeItem.performer)
  * **Card.**: 0..*
  * **Type**: todo
* **Source Code**: [PersonV40.PersonTyp](StructureDefinition-PersonV40.md#PersonV40.PersonTyp)
  * **Card.**: 1..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [ChargeItem.performer.function.coding.code](StructureDefinition-ch-alis-connect-chargeitem-definitions.md#ChargeItem.performer.function.coding.code)
  * **Card.**: 1..1
  * **Type**: todo
* **Source Code**: [PersonV40.PersonID](StructureDefinition-PersonV40.md#PersonV40.PersonID)
  * **Card.**: 1..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [ChargeItem.performer.actor.display](StructureDefinition-ch-alis-connect-chargeitem-definitions.md#ChargeItem.performer.actor.display)
  * **Card.**: 1..1
  * **Type**: todo



## Resource Content

```json
{
  "resourceType" : "ConceptMap",
  "id" : "Alis2FhirPersonV40",
  "url" : "http://fhir.ch/ig/ch-alis-connect/ConceptMap/Alis2FhirPersonV40",
  "version" : "1.0.0-ballot",
  "name" : "Alis2FhirPersonV40",
  "title" : "ALIS PersonV40 to FHIR Mapping",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-06-12T18:35:48+00:00",
  "publisher" : "ALIS-Connect",
  "contact" : [{
    "name" : "ALIS-Connect",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.alis-connect.ch/"
    }]
  }],
  "description" : "Mapping of the ALIS PersonV40 logical model to the FHIR ChargeItem.performer element.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "group" : [{
    "source" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/PersonV40",
    "target" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-chargeitem",
    "element" : [{
      "code" : "PersonV40",
      "target" : [{
        "code" : "ChargeItem.performer",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "PersonV40.PersonTyp",
      "target" : [{
        "code" : "ChargeItem.performer.function.coding.code",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "PersonV40.PersonID",
      "target" : [{
        "code" : "ChargeItem.performer.actor.display",
        "equivalence" : "equivalent"
      }]
    }]
  }]
}

```
