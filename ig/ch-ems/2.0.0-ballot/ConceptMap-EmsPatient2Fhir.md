# EMS Patient to FHIR Mapping - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EMS Patient to FHIR Mapping**

## ConceptMap: EMS Patient to FHIR Mapping 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/ConceptMap/EmsPatient2Fhir | *Version*:2.0.0-ballot |
| Active as of 2026-06-15 | *Computable Name*:EmsPatient2Fhir |
| **Copyright/Legal**: CC0-1.0 | |

 
This map shows how the patient section from the EMS Protocol is represented using FHIR. 

Mapping from (not specified) to (not specified)

**Group 1 **Mapping from [EMS Protocol](StructureDefinition-logicalmodel-ems-protocol.md) to [CH EMS Composition](StructureDefinition-ch-ems-composition.md)

* **Source Code**: [EMSProtocol.patient](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.patient)
  * **Card.**: 1..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Composition.subject](StructureDefinition-ch-ems-composition-definitions.md#Composition.subject)
  * **Card.**: 1..1
  * **Type**: todo

-------

**Group 2 **Mapping from [EMS Protocol](StructureDefinition-logicalmodel-ems-protocol.md) to [CH EMS Patient](StructureDefinition-ch-ems-patient.md)

* **Source Code**: [EMSProtocol.patient.name](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.patient.name)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Patient.name](StructureDefinition-ch-ems-patient-definitions.md#Patient.name)
  * **Card.**: 0..*
  * **Type**: todo
* **Source Code**: [EMSProtocol.patient.name.firstName](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.patient.name.firstName)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Patient.name.given](StructureDefinition-ch-ems-patient-definitions.md#Patient.name.given)
  * **Card.**: 0..*
  * **Type**: todo
* **Source Code**: [EMSProtocol.patient.name.lastName](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.patient.name.lastName)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Patient.name.family](StructureDefinition-ch-ems-patient-definitions.md#Patient.name.family)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.patient.placeOfOrigin](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.patient.placeOfOrigin)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Patient.extension:placeOfOrigin](StructureDefinition-ch-ems-patient-definitions.md#Patient.extension:placeOfOrigin)
  * **Card.**: 0..*
  * **Type**: todo
* **Source Code**: [EMSProtocol.patient.citizenship](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.patient.citizenship)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Patient.extension:citizenship](StructureDefinition-ch-ems-patient-definitions.md#Patient.extension:citizenship)
  * **Card.**: 0..*
  * **Type**: todo
* **Source Code**: [EMSProtocol.patient.birthDate](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.patient.birthDate)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Patient.birthDate](StructureDefinition-ch-ems-patient-definitions.md#Patient.birthDate)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.patient.gender](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.patient.gender)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Patient.gender](StructureDefinition-ch-ems-patient-definitions.md#Patient.gender)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.patient.insuranceCardNumber](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.patient.insuranceCardNumber)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Patient.identifier:AHVN13](StructureDefinition-ch-ems-patient-definitions.md#Patient.identifier:AHVN13)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.patient.oasiNumber](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.patient.oasiNumber)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Patient.identifier:AHVN13](StructureDefinition-ch-ems-patient-definitions.md#Patient.identifier:AHVN13)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.patient.plsId](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.patient.plsId)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Patient.identifier:LocalPid](StructureDefinition-ch-ems-patient-definitions.md#Patient.identifier:LocalPid)
  * **Card.**: 0..*
  * **Type**: todo
* **Source Code**: [EMSProtocol.patient.identification](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.patient.identification)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Patient.extension:identification](StructureDefinition-ch-ems-patient-definitions.md#Patient.extension:identification)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.patient.identification.medium](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.patient.identification.medium)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Patient.extension:identification.extension:medium](StructureDefinition-ch-ems-patient-definitions.md#Patient.extension:identification.extension:medium)
  * **Card.**: 0..*
  * **Type**: todo
* **Source Code**: [EMSProtocol.patient.identification.source](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.patient.identification.source)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Patient.extension:identification.extension:source](StructureDefinition-ch-ems-patient-definitions.md#Patient.extension:identification.extension:source)
  * **Card.**: 0..*
  * **Type**: todo
* **Source Code**: [EMSProtocol.patient.address](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.patient.address)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Patient.address](StructureDefinition-ch-ems-patient-definitions.md#Patient.address)
  * **Card.**: 0..*
  * **Type**: todo
* **Source Code**: [EMSProtocol.patient.address.street](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.patient.address.street)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Patient.address.line](StructureDefinition-ch-ems-patient-definitions.md#Patient.address.line)
  * **Card.**: 0..*
  * **Type**: todo
* **Source Code**: [EMSProtocol.patient.address.zipCode](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.patient.address.zipCode)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Patient.address.postalCode](StructureDefinition-ch-ems-patient-definitions.md#Patient.address.postalCode)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.patient.address.city](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.patient.address.city)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Patient.address.city](StructureDefinition-ch-ems-patient-definitions.md#Patient.address.city)
  * **Card.**: 0..1
  * **Type**: todo

-------

**Group 3 **Mapping from [EMS Protocol](StructureDefinition-logicalmodel-ems-protocol.md) to [CH EMS ServiceRequest](StructureDefinition-ch-ems-servicerequest.md)

* **Source Code**: [EMSProtocol.patient.insurance](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.patient.insurance)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [ServiceRequest.insurance](StructureDefinition-ch-ems-servicerequest-definitions.md#ServiceRequest.insurance)
  * **Card.**: 0..*
  * **Type**: todo

-------

**Group 4 **Mapping from [EMS Protocol](StructureDefinition-logicalmodel-ems-protocol.md) to [CH EMS Coverage](StructureDefinition-ch-ems-coverage.md)

* **Source Code**: [EMSProtocol.patient.insurance](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.patient.insurance)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Coverage.payor](StructureDefinition-ch-ems-coverage-definitions.md#Coverage.payor)
  * **Card.**: 1..*
  * **Type**: todo
* **Source Code**: [EMSProtocol.patient.insuranceCardNumber](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.patient.insuranceCardNumber)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Coverage.identifier:insuranceCardNumber](StructureDefinition-ch-ems-coverage-definitions.md#Coverage.identifier:insuranceCardNumber)
  * **Card.**: 0..1
  * **Type**: todo



## Resource Content

```json
{
  "resourceType" : "ConceptMap",
  "id" : "EmsPatient2Fhir",
  "url" : "http://fhir.ch/ig/ch-ems/ConceptMap/EmsPatient2Fhir",
  "version" : "2.0.0-ballot",
  "name" : "EmsPatient2Fhir",
  "title" : "EMS Patient to FHIR Mapping",
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
  "description" : "This map shows how the patient section from the EMS Protocol is represented using FHIR.",
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
      "code" : "EMSProtocol.patient",
      "target" : [{
        "code" : "Composition.subject",
        "equivalence" : "equivalent"
      }]
    }]
  },
  {
    "source" : "http://fhir.ch/ig/ch-ems/StructureDefinition/logicalmodel-ems-protocol",
    "target" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-patient",
    "element" : [{
      "code" : "EMSProtocol.patient.name",
      "target" : [{
        "code" : "Patient.name",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.patient.name.firstName",
      "target" : [{
        "code" : "Patient.name.given",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.patient.name.lastName",
      "target" : [{
        "code" : "Patient.name.family",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.patient.placeOfOrigin",
      "target" : [{
        "code" : "Patient.extension:placeOfOrigin",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.patient.citizenship",
      "target" : [{
        "code" : "Patient.extension:citizenship",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.patient.birthDate",
      "target" : [{
        "code" : "Patient.birthDate",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.patient.gender",
      "target" : [{
        "code" : "Patient.gender",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.patient.insuranceCardNumber",
      "target" : [{
        "code" : "Patient.identifier:AHVN13",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.patient.oasiNumber",
      "target" : [{
        "code" : "Patient.identifier:AHVN13",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.patient.plsId",
      "target" : [{
        "code" : "Patient.identifier:LocalPid",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.patient.identification",
      "target" : [{
        "code" : "Patient.extension:identification",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.patient.identification.medium",
      "target" : [{
        "code" : "Patient.extension:identification.extension:medium",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.patient.identification.source",
      "target" : [{
        "code" : "Patient.extension:identification.extension:source",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.patient.address",
      "target" : [{
        "code" : "Patient.address",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.patient.address.street",
      "target" : [{
        "code" : "Patient.address.line",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.patient.address.zipCode",
      "target" : [{
        "code" : "Patient.address.postalCode",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.patient.address.city",
      "target" : [{
        "code" : "Patient.address.city",
        "equivalence" : "equivalent"
      }]
    }]
  },
  {
    "source" : "http://fhir.ch/ig/ch-ems/StructureDefinition/logicalmodel-ems-protocol",
    "target" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-servicerequest",
    "element" : [{
      "code" : "EMSProtocol.patient.insurance",
      "target" : [{
        "code" : "ServiceRequest.insurance",
        "equivalence" : "equivalent"
      }]
    }]
  },
  {
    "source" : "http://fhir.ch/ig/ch-ems/StructureDefinition/logicalmodel-ems-protocol",
    "target" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-coverage",
    "element" : [{
      "code" : "EMSProtocol.patient.insurance",
      "target" : [{
        "code" : "Coverage.payor",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.patient.insuranceCardNumber",
      "target" : [{
        "code" : "Coverage.identifier:insuranceCardNumber",
        "equivalence" : "equivalent"
      }]
    }]
  }]
}

```
