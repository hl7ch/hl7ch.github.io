# Module Questionnaire Diagnosis - CH eTOC (R4) v3.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Module Questionnaire Diagnosis**

## Questionnaire: Module Questionnaire Diagnosis 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-etoc/Questionnaire/ch-etoc-module-diagnosis | *Version*:3.0.1 |
| Active as of 2023-06-21 | *Computable Name*:ModuleQuestionnaireEtocDiagnosis |
| **Copyright/Legal**: CC0-1.0 | |



## Resource Content

```json
{
  "resourceType" : "Questionnaire",
  "id" : "ch-etoc-module-diagnosis",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-assemble-expectation",
      "valueCode" : "assemble-child"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-etoc/Questionnaire/ch-etoc-module-diagnosis",
  "version" : "3.0.1",
  "name" : "ModuleQuestionnaireEtocDiagnosis",
  "title" : "Module Questionnaire Order Diagnosis",
  "status" : "active",
  "date" : "2023-06-21",
  "publisher" : "HL7 Switzerland",
  "contact" : [
    {
      "name" : "Juerg P. Bleuer",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch"
        }
      ]
    }
  ],
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CH"
        }
      ]
    }
  ],
  "copyright" : "CC0-1.0",
  "item" : [
    {
      "linkId" : "diagnosisList.primaryDiagnosis",
      "text" : "Hauptdiagnosen / Probleme",
      "type" : "group",
      "item" : [
        {
          "linkId" : "diagnosisList.primaryDiagnosis.item",
          "definition" : "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-servicerequest#ServiceRequest.reasonReference",
          "text" : "Hauptdiagnose / Problem",
          "type" : "string",
          "repeats" : true
        }
      ]
    },
    {
      "linkId" : "diagnosisList.secondaryDiagnosis",
      "text" : "Nebendiagnosen / Probleme",
      "type" : "group",
      "item" : [
        {
          "linkId" : "diagnosisList.secondaryDiagnosis.item",
          "definition" : "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-servicerequest#ServiceRequest.supportingInfo",
          "text" : "Nebendiagnose / Problem",
          "type" : "string",
          "repeats" : true
        }
      ]
    },
    {
      "linkId" : "diagnosisList.bodyHeight",
      "definition" : "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-servicerequest#ServiceRequest.supportingInfo",
      "text" : "Grösse (cm)",
      "type" : "quantity"
    },
    {
      "linkId" : "diagnosisList.bodyWeight",
      "definition" : "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-servicerequest#ServiceRequest.supportingInfo",
      "text" : "Gewicht (kg)",
      "type" : "quantity"
    },
    {
      "linkId" : "diagnosisList.pregnancy",
      "text" : "Schwangerschaft",
      "type" : "group",
      "item" : [
        {
          "linkId" : "diagnosisList.pregnancy.present",
          "definition" : "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-servicerequest#ServiceRequest.supportingInfo",
          "text" : "Schwanger",
          "type" : "boolean"
        },
        {
          "linkId" : "diagnosisList.pregnancy.expectedDeliveryDate",
          "definition" : "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-servicerequest#ServiceRequest.supportingInfo",
          "text" : "Erwarteter Geburtstermin",
          "type" : "dateTime"
        }
      ]
    }
  ]
}

```
