# ALIS ServiceAssignment to FHIR Mapping - CH ALIS Connect (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ALIS ServiceAssignment to FHIR Mapping**

## ConceptMap: ALIS ServiceAssignment to FHIR Mapping 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-alis-connect/ConceptMap/Alis2FhirServiceAssignment | *Version*:1.0.0-ballot |
| Active as of 2026-06-12 | *Computable Name*:Alis2FhirServiceAssignment |
| **Copyright/Legal**: CC0-1.0 | |

 
Mapping of the ALIS ServiceAssignment logical model to the FHIR ServiceAssignment extension (on ChargeItem). 

Mapping from (not specified) to (not specified)

**Group 1 **Mapping from [CH ALIS Leistungsschnittstelle - ServiceAssignment](StructureDefinition-ServiceAssignment.md) to [CH ALIS Extension ServiceAssignment](StructureDefinition-ch-alis-connect-ext-serviceassignment.md)

* **Source Code**: [ServiceAssignment.OrderingProviderID](StructureDefinition-ServiceAssignment.md#ServiceAssignment.OrderingProviderID)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Extension.extension:OrderingProviderID.value[x]:valueString](StructureDefinition-ch-alis-connect-ext-serviceassignment-definitions.md#Extension.extension:OrderingProviderID.value[x]:valueString)
  * **Card.**: 1..1
  * **Type**: todo
* **Source Code**: [ServiceAssignment.OrderSectionCode](StructureDefinition-ServiceAssignment.md#ServiceAssignment.OrderSectionCode)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Extension.extension:OrderSectionCode.value[x]:valueCoding](StructureDefinition-ch-alis-connect-ext-serviceassignment-definitions.md#Extension.extension:OrderSectionCode.value[x]:valueCoding)
  * **Card.**: 1..1
  * **Type**: todo
* **Source Code**: [ServiceAssignment.OrderDate](StructureDefinition-ServiceAssignment.md#ServiceAssignment.OrderDate)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Extension.extension:OrderDate.value[x]:valueDateTime](StructureDefinition-ch-alis-connect-ext-serviceassignment-definitions.md#Extension.extension:OrderDate.value[x]:valueDateTime)
  * **Card.**: 1..1
  * **Type**: todo
* **Source Code**: [ServiceAssignment.FollowUpOrder](StructureDefinition-ServiceAssignment.md#ServiceAssignment.FollowUpOrder)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Extension.extension:FollowUpOrder.value[x]:valueBoolean](StructureDefinition-ch-alis-connect-ext-serviceassignment-definitions.md#Extension.extension:FollowUpOrder.value[x]:valueBoolean)
  * **Card.**: 1..1
  * **Type**: todo



## Resource Content

```json
{
  "resourceType" : "ConceptMap",
  "id" : "Alis2FhirServiceAssignment",
  "url" : "http://fhir.ch/ig/ch-alis-connect/ConceptMap/Alis2FhirServiceAssignment",
  "version" : "1.0.0-ballot",
  "name" : "Alis2FhirServiceAssignment",
  "title" : "ALIS ServiceAssignment to FHIR Mapping",
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
  "description" : "Mapping of the ALIS ServiceAssignment logical model to the FHIR ServiceAssignment extension (on ChargeItem).",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "group" : [{
    "source" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ServiceAssignment",
    "target" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-ext-serviceassignment",
    "element" : [{
      "code" : "ServiceAssignment.OrderingProviderID",
      "target" : [{
        "code" : "Extension.extension:OrderingProviderID.value[x]:valueString",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "ServiceAssignment.OrderSectionCode",
      "target" : [{
        "code" : "Extension.extension:OrderSectionCode.value[x]:valueCoding",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "ServiceAssignment.OrderDate",
      "target" : [{
        "code" : "Extension.extension:OrderDate.value[x]:valueDateTime",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "ServiceAssignment.FollowUpOrder",
      "target" : [{
        "code" : "Extension.extension:FollowUpOrder.value[x]:valueBoolean",
        "equivalence" : "equivalent"
      }]
    }]
  }]
}

```
