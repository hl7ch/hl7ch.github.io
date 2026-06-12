# ALIS Visit to FHIR Mapping - CH ALIS Connect (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ALIS Visit to FHIR Mapping**

## ConceptMap: ALIS Visit to FHIR Mapping 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-alis-connect/ConceptMap/Alis2FhirVisit | *Version*:1.0.0-ballot |
| Active as of 2026-06-12 | *Computable Name*:Alis2FhirVisit |
| **Copyright/Legal**: CC0-1.0 | |

 
Mapping of the ALIS Visit logical model to the FHIR Encounter, Patient and ChargeItem profiles. 

Mapping from (not specified) to (not specified)

**Group 1 **Mapping from [CH ALIS Leistungsschnittstelle - Visit](StructureDefinition-Visit.md) to [CH ALIS Encounter Profile](StructureDefinition-ch-alis-connect-encounter.md)

* **Source Code**: [Visit](StructureDefinition-Visit.md#Visit)
  * **Card.**: 0..*
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Encounter](StructureDefinition-ch-alis-connect-encounter-definitions.md#Encounter)
  * **Card.**: 0..*
  * **Type**: todo
* **Source Code**: [Visit.VisitNumber](StructureDefinition-Visit.md#Visit.VisitNumber)
  * **Card.**: 1..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Encounter.identifier.value](StructureDefinition-ch-alis-connect-encounter-definitions.md#Encounter.identifier.value)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [Visit.TerminationVisit](StructureDefinition-Visit.md#Visit.TerminationVisit)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Encounter.extension:Termination](StructureDefinition-ch-alis-connect-encounter-definitions.md#Encounter.extension:Termination)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [Visit.TerminationReason](StructureDefinition-Visit.md#Visit.TerminationReason)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Encounter.extension:Termination](StructureDefinition-ch-alis-connect-encounter-definitions.md#Encounter.extension:Termination)
  * **Card.**: 0..1
  * **Type**: todo

-------

**Group 2 **Mapping from [CH ALIS Leistungsschnittstelle - Visit](StructureDefinition-Visit.md) to [CH ALIS Patient Profile](StructureDefinition-ch-alis-connect-patient.md)

* **Source Code**: [Visit.PatientID](StructureDefinition-Visit.md#Visit.PatientID)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Patient.identifier:LocalPid.value](StructureDefinition-ch-alis-connect-patient-definitions.md#Patient.identifier:LocalPid.value)
  * **Card.**: 1..1
  * **Type**: todo
* **Source Code**: [Visit.PatientName](StructureDefinition-Visit.md#Visit.PatientName)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Patient.name.family](StructureDefinition-ch-alis-connect-patient-definitions.md#Patient.name.family)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [Visit.PatientGivenName](StructureDefinition-Visit.md#Visit.PatientGivenName)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Patient.name.given](StructureDefinition-ch-alis-connect-patient-definitions.md#Patient.name.given)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [Visit.PatientGender](StructureDefinition-Visit.md#Visit.PatientGender)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Patient.gender](StructureDefinition-ch-alis-connect-patient-definitions.md#Patient.gender)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [Visit.PatientBirthDate](StructureDefinition-Visit.md#Visit.PatientBirthDate)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Patient.birthDate](StructureDefinition-ch-alis-connect-patient-definitions.md#Patient.birthDate)
  * **Card.**: 0..1
  * **Type**: todo

-------

**Group 3 **Mapping from [CH ALIS Leistungsschnittstelle - Visit](StructureDefinition-Visit.md) to [CH ALIS ChargeItem Profile](StructureDefinition-ch-alis-connect-chargeitem.md)

* **Source Code**: [Visit.Service](StructureDefinition-Visit.md#Visit.Service)
  * **Card.**: 1..*
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [ChargeItem](StructureDefinition-ch-alis-connect-chargeitem-definitions.md#ChargeItem)
  * **Card.**: 0..*
  * **Type**: todo



## Resource Content

```json
{
  "resourceType" : "ConceptMap",
  "id" : "Alis2FhirVisit",
  "url" : "http://fhir.ch/ig/ch-alis-connect/ConceptMap/Alis2FhirVisit",
  "version" : "1.0.0-ballot",
  "name" : "Alis2FhirVisit",
  "title" : "ALIS Visit to FHIR Mapping",
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
  "description" : "Mapping of the ALIS Visit logical model to the FHIR Encounter, Patient and ChargeItem profiles.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "group" : [{
    "source" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/Visit",
    "target" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-encounter",
    "element" : [{
      "code" : "Visit",
      "target" : [{
        "code" : "Encounter",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "Visit.VisitNumber",
      "target" : [{
        "code" : "Encounter.identifier.value",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "Visit.TerminationVisit",
      "target" : [{
        "code" : "Encounter.extension:Termination",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "Visit.TerminationReason",
      "target" : [{
        "code" : "Encounter.extension:Termination",
        "equivalence" : "equivalent"
      }]
    }]
  },
  {
    "source" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/Visit",
    "target" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-patient",
    "element" : [{
      "code" : "Visit.PatientID",
      "target" : [{
        "code" : "Patient.identifier:LocalPid.value",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "Visit.PatientName",
      "target" : [{
        "code" : "Patient.name.family",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "Visit.PatientGivenName",
      "target" : [{
        "code" : "Patient.name.given",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "Visit.PatientGender",
      "target" : [{
        "code" : "Patient.gender",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "Visit.PatientBirthDate",
      "target" : [{
        "code" : "Patient.birthDate",
        "equivalence" : "equivalent"
      }]
    }]
  },
  {
    "source" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/Visit",
    "target" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-chargeitem",
    "element" : [{
      "code" : "Visit.Service",
      "target" : [{
        "code" : "ChargeItem",
        "equivalence" : "equivalent"
      }]
    }]
  }]
}

```
