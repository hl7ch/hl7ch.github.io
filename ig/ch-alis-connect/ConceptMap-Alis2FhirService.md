# ALIS Service to FHIR Mapping - CH ALIS Connect (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ALIS Service to FHIR Mapping**

## ConceptMap: ALIS Service to FHIR Mapping 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-alis-connect/ConceptMap/Alis2FhirService | *Version*:1.0.0-ballot |
| Active as of 2026-06-12 | *Computable Name*:Alis2FhirService |
| **Copyright/Legal**: CC0-1.0 | |

 
Mapping of the ALIS Service logical model to the FHIR ChargeItem and Condition profiles. 

Mapping from (not specified) to (not specified)

**Group 1 **Mapping from [CH ALIS Leistungsschnittstelle - Service](StructureDefinition-Service.md) to [CH ALIS ChargeItem Profile](StructureDefinition-ch-alis-connect-chargeitem.md)

* **Source Code**: [Service](StructureDefinition-Service.md#Service)
  * **Card.**: 0..*
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [ChargeItem](StructureDefinition-ch-alis-connect-chargeitem-definitions.md#ChargeItem)
  * **Card.**: 0..*
  * **Type**: todo
* **Source Code**: [Service.ServiceDate](StructureDefinition-Service.md#Service.ServiceDate)
  * **Card.**: 1..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [ChargeItem.occurrence[x]:occurrenceDateTime](StructureDefinition-ch-alis-connect-chargeitem-definitions.md#ChargeItem.occurrence[x]:occurrenceDateTime)
  * **Card.**: 1..1
  * **Type**: todo
* **Source Code**: [Service.SessionID](StructureDefinition-Service.md#Service.SessionID)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [ChargeItem.extension:SessionID](StructureDefinition-ch-alis-connect-chargeitem-definitions.md#ChargeItem.extension:SessionID)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [Service.OrderID](StructureDefinition-Service.md#Service.OrderID)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [ChargeItem.extension:OrderID](StructureDefinition-ch-alis-connect-chargeitem-definitions.md#ChargeItem.extension:OrderID)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [Service.OrderDate](StructureDefinition-Service.md#Service.OrderDate)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [ChargeItem.extension:OrderDate](StructureDefinition-ch-alis-connect-chargeitem-definitions.md#ChargeItem.extension:OrderDate)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [Service.ReferrerID](StructureDefinition-Service.md#Service.ReferrerID)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [ChargeItem.costCenter.display](StructureDefinition-ch-alis-connect-chargeitem-definitions.md#ChargeItem.costCenter.display)
  * **Card.**: 1..1
  * **Type**: todo
* **Source Code**: [Service.ServiceType](StructureDefinition-Service.md#Service.ServiceType)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [ChargeItem.code.coding.system](StructureDefinition-ch-alis-connect-chargeitem-definitions.md#ChargeItem.code.coding.system)
  * **Card.**: 1..1
  * **Type**: todo
* **Source Code**: [Service.ServiceItem](StructureDefinition-Service.md#Service.ServiceItem)
  * **Card.**: 1..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [ChargeItem.code.coding.code](StructureDefinition-ch-alis-connect-chargeitem-definitions.md#ChargeItem.code.coding.code)
  * **Card.**: 1..1
  * **Type**: todo
* **Source Code**: [Service.Form](StructureDefinition-Service.md#Service.Form)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [ChargeItem.extension:Form](StructureDefinition-ch-alis-connect-chargeitem-definitions.md#ChargeItem.extension:Form)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [Service.EnteredDateTime](StructureDefinition-Service.md#Service.EnteredDateTime)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [ChargeItem.enteredDate](StructureDefinition-ch-alis-connect-chargeitem-definitions.md#ChargeItem.enteredDate)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [Service.ProviderID](StructureDefinition-Service.md#Service.ProviderID)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [ChargeItem.performingOrganization.display](StructureDefinition-ch-alis-connect-chargeitem-definitions.md#ChargeItem.performingOrganization.display)
  * **Card.**: 1..1
  * **Type**: todo
* **Source Code**: [Service.SectionCode](StructureDefinition-Service.md#Service.SectionCode)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [ChargeItem.extension:SectionCode](StructureDefinition-ch-alis-connect-chargeitem-definitions.md#ChargeItem.extension:SectionCode)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [Service.EnteredBy](StructureDefinition-Service.md#Service.EnteredBy)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [ChargeItem.enterer.display](StructureDefinition-ch-alis-connect-chargeitem-definitions.md#ChargeItem.enterer.display)
  * **Card.**: 1..1
  * **Type**: todo
* **Source Code**: [Service.ItemNumber](StructureDefinition-Service.md#Service.ItemNumber)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [ChargeItem.extension:ItemNumber](StructureDefinition-ch-alis-connect-chargeitem-definitions.md#ChargeItem.extension:ItemNumber)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [Service.RefItemNumber](StructureDefinition-Service.md#Service.RefItemNumber)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [ChargeItem.extension:RefItemNumber](StructureDefinition-ch-alis-connect-chargeitem-definitions.md#ChargeItem.extension:RefItemNumber)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [Service.Quantity](StructureDefinition-Service.md#Service.Quantity)
  * **Card.**: 1..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [ChargeItem.quantity.value](StructureDefinition-ch-alis-connect-chargeitem-definitions.md#ChargeItem.quantity.value)
  * **Card.**: 1..1
  * **Type**: todo
* **Source Code**: [Service.TPValue](StructureDefinition-Service.md#Service.TPValue)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [ChargeItem.extension:TPValue](StructureDefinition-ch-alis-connect-chargeitem-definitions.md#ChargeItem.extension:TPValue)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [Service.SessionSectionB](StructureDefinition-Service.md#Service.SessionSectionB)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [ChargeItem.extension:SessionAnnexB](StructureDefinition-ch-alis-connect-chargeitem-definitions.md#ChargeItem.extension:SessionAnnexB)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [Service.ServiceAssignment](StructureDefinition-Service.md#Service.ServiceAssignment)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [ChargeItem.extension:ServiceAssignment](StructureDefinition-ch-alis-connect-chargeitem-definitions.md#ChargeItem.extension:ServiceAssignment)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [Service.ServiceItemErrorCode](StructureDefinition-Service.md#Service.ServiceItemErrorCode)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [ChargeItem.extension:ServiceItemErrorCode](StructureDefinition-ch-alis-connect-chargeitem-definitions.md#ChargeItem.extension:ServiceItemErrorCode)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [Service.PersonV40](StructureDefinition-Service.md#Service.PersonV40)
  * **Card.**: 0..*
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [ChargeItem.performer](StructureDefinition-ch-alis-connect-chargeitem-definitions.md#ChargeItem.performer)
  * **Card.**: 0..*
  * **Type**: todo
* **Source Code**: [Service.ParameterV40](StructureDefinition-Service.md#Service.ParameterV40)
  * **Card.**: 0..*
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [ChargeItem.extension:ParameterV40](StructureDefinition-ch-alis-connect-chargeitem-definitions.md#ChargeItem.extension:ParameterV40)
  * **Card.**: 0..*
  * **Type**: todo

-------

**Group 2 **Mapping from [CH ALIS Leistungsschnittstelle - Service](StructureDefinition-Service.md) to [CH ALIS Condition Profile](StructureDefinition-ch-alis-connect-condition.md)

* **Source Code**: [Service.Diagnosis](StructureDefinition-Service.md#Service.Diagnosis)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Condition](StructureDefinition-ch-alis-connect-condition-definitions.md#Condition)
  * **Card.**: 0..*
  * **Type**: todo



## Resource Content

```json
{
  "resourceType" : "ConceptMap",
  "id" : "Alis2FhirService",
  "url" : "http://fhir.ch/ig/ch-alis-connect/ConceptMap/Alis2FhirService",
  "version" : "1.0.0-ballot",
  "name" : "Alis2FhirService",
  "title" : "ALIS Service to FHIR Mapping",
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
  "description" : "Mapping of the ALIS Service logical model to the FHIR ChargeItem and Condition profiles.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "group" : [{
    "source" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/Service",
    "target" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-chargeitem",
    "element" : [{
      "code" : "Service",
      "target" : [{
        "code" : "ChargeItem",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "Service.ServiceDate",
      "target" : [{
        "code" : "ChargeItem.occurrence[x]:occurrenceDateTime",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "Service.SessionID",
      "target" : [{
        "code" : "ChargeItem.extension:SessionID",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "Service.OrderID",
      "target" : [{
        "code" : "ChargeItem.extension:OrderID",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "Service.OrderDate",
      "target" : [{
        "code" : "ChargeItem.extension:OrderDate",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "Service.ReferrerID",
      "target" : [{
        "code" : "ChargeItem.costCenter.display",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "Service.ServiceType",
      "target" : [{
        "code" : "ChargeItem.code.coding.system",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "Service.ServiceItem",
      "target" : [{
        "code" : "ChargeItem.code.coding.code",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "Service.Form",
      "target" : [{
        "code" : "ChargeItem.extension:Form",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "Service.EnteredDateTime",
      "target" : [{
        "code" : "ChargeItem.enteredDate",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "Service.ProviderID",
      "target" : [{
        "code" : "ChargeItem.performingOrganization.display",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "Service.SectionCode",
      "target" : [{
        "code" : "ChargeItem.extension:SectionCode",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "Service.EnteredBy",
      "target" : [{
        "code" : "ChargeItem.enterer.display",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "Service.ItemNumber",
      "target" : [{
        "code" : "ChargeItem.extension:ItemNumber",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "Service.RefItemNumber",
      "target" : [{
        "code" : "ChargeItem.extension:RefItemNumber",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "Service.Quantity",
      "target" : [{
        "code" : "ChargeItem.quantity.value",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "Service.TPValue",
      "target" : [{
        "code" : "ChargeItem.extension:TPValue",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "Service.SessionSectionB",
      "target" : [{
        "code" : "ChargeItem.extension:SessionAnnexB",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "Service.ServiceAssignment",
      "target" : [{
        "code" : "ChargeItem.extension:ServiceAssignment",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "Service.ServiceItemErrorCode",
      "target" : [{
        "code" : "ChargeItem.extension:ServiceItemErrorCode",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "Service.PersonV40",
      "target" : [{
        "code" : "ChargeItem.performer",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "Service.ParameterV40",
      "target" : [{
        "code" : "ChargeItem.extension:ParameterV40",
        "equivalence" : "equivalent"
      }]
    }]
  },
  {
    "source" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/Service",
    "target" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-condition",
    "element" : [{
      "code" : "Service.Diagnosis",
      "target" : [{
        "code" : "Condition",
        "equivalence" : "equivalent"
      }]
    }]
  }]
}

```
