# Generate export document - Implementation Guide CH VACD v7.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Generate export document**

## OperationDefinition: Generate export document 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-vacd/OperationDefinition/ch-vacd-patient-export-operation | *Version*:7.0.0-ballot |
| Active as of 2026-06-11 | *Computable Name*:GeneratePatientExportDocument |
| **Copyright/Legal**: CC0-1.0 | |

 
Generate export document according to the selected export type 



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "ch-vacd-patient-export-operation",
  "url" : "http://fhir.ch/ig/ch-vacd/OperationDefinition/ch-vacd-patient-export-operation",
  "version" : "7.0.0-ballot",
  "name" : "GeneratePatientExportDocument",
  "title" : "Generate export document",
  "status" : "active",
  "kind" : "operation",
  "date" : "2026-06-11T13:35:24+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [{
    "name" : "HL7 Switzerland",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.ch/"
    }]
  }],
  "description" : "Generate export document according to the selected export type",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CHE"
    }]
  }],
  "affectsState" : false,
  "code" : "export-document",
  "resource" : ["Patient"],
  "system" : false,
  "type" : true,
  "instance" : false,
  "parameter" : [{
    "name" : "type",
    "use" : "in",
    "min" : 1,
    "max" : "1",
    "type" : "Coding",
    "binding" : {
      "strength" : "extensible",
      "valueSet" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-patient-export-operation-vs"
    }
  },
  {
    "name" : "document",
    "use" : "out",
    "min" : 1,
    "max" : "1",
    "type" : "Bundle",
    "targetProfile" : ["http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-vaccination-record",
    "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-recommendation-request-message"]
  }]
}

```
