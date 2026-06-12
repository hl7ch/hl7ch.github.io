# ALIS Diagnosis to FHIR Mapping - CH ALIS Connect (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ALIS Diagnosis to FHIR Mapping**

## ConceptMap: ALIS Diagnosis to FHIR Mapping 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-alis-connect/ConceptMap/Alis2FhirDiagnosis | *Version*:1.0.0-ballot |
| Active as of 2026-06-12 | *Computable Name*:Alis2FhirDiagnosis |
| **Copyright/Legal**: CC0-1.0 | |

 
Mapping of the ALIS Diagnosis logical model to the FHIR Condition profile. 

Mapping from (not specified) to (not specified)

**Group 1 **Mapping from [CH ALIS Leistungsschnittstelle - Diagnosis](StructureDefinition-Diagnosis.md) to [CH ALIS Condition Profile](StructureDefinition-ch-alis-connect-condition.md)

* **Source Code**: [Diagnosis.DiagnosisCode](StructureDefinition-Diagnosis.md#Diagnosis.DiagnosisCode)
  * **Card.**: 1..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Condition.code.coding.code](StructureDefinition-ch-alis-connect-condition-definitions.md#Condition.code.coding.code)
  * **Card.**: 1..1
  * **Type**: todo
* **Source Code**: [Diagnosis.DiagnosisSystem](StructureDefinition-Diagnosis.md#Diagnosis.DiagnosisSystem)
  * **Card.**: 1..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Condition.code.coding.system](StructureDefinition-ch-alis-connect-condition-definitions.md#Condition.code.coding.system)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [Diagnosis.DiagnosisVersion](StructureDefinition-Diagnosis.md#Diagnosis.DiagnosisVersion)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Condition.code.coding.version](StructureDefinition-ch-alis-connect-condition-definitions.md#Condition.code.coding.version)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [Diagnosis.DiagnosisConfidential](StructureDefinition-Diagnosis.md#Diagnosis.DiagnosisConfidential)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Condition.extension:DiagnosisConfidential](StructureDefinition-ch-alis-connect-condition-definitions.md#Condition.extension:DiagnosisConfidential)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [Diagnosis.OnSetDateTime](StructureDefinition-Diagnosis.md#Diagnosis.OnSetDateTime)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Condition.onset[x]:onsetDateTime](StructureDefinition-ch-alis-connect-condition-definitions.md#Condition.onset[x]:onsetDateTime)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [Diagnosis.Laterality](StructureDefinition-Diagnosis.md#Diagnosis.Laterality)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Condition.bodySite](StructureDefinition-ch-alis-connect-condition-definitions.md#Condition.bodySite)
  * **Card.**: 0..1
  * **Type**: todo



## Resource Content

```json
{
  "resourceType" : "ConceptMap",
  "id" : "Alis2FhirDiagnosis",
  "url" : "http://fhir.ch/ig/ch-alis-connect/ConceptMap/Alis2FhirDiagnosis",
  "version" : "1.0.0-ballot",
  "name" : "Alis2FhirDiagnosis",
  "title" : "ALIS Diagnosis to FHIR Mapping",
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
  "description" : "Mapping of the ALIS Diagnosis logical model to the FHIR Condition profile.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "group" : [{
    "source" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/Diagnosis",
    "target" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-condition",
    "element" : [{
      "code" : "Diagnosis.DiagnosisCode",
      "target" : [{
        "code" : "Condition.code.coding.code",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "Diagnosis.DiagnosisSystem",
      "target" : [{
        "code" : "Condition.code.coding.system",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "Diagnosis.DiagnosisVersion",
      "target" : [{
        "code" : "Condition.code.coding.version",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "Diagnosis.DiagnosisConfidential",
      "target" : [{
        "code" : "Condition.extension:DiagnosisConfidential",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "Diagnosis.OnSetDateTime",
      "target" : [{
        "code" : "Condition.onset[x]:onsetDateTime",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "Diagnosis.Laterality",
      "target" : [{
        "code" : "Condition.bodySite",
        "equivalence" : "equivalent"
      }]
    }]
  }]
}

```
