# Module Questionnaire Diagnosis - CH RAD-Order (R4) v2.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Module Questionnaire Diagnosis**

## Questionnaire: Module Questionnaire Diagnosis 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-rad-order/Questionnaire/ch-rad-order-module-diagnosis | *Version*:2.0.1 |
| Active as of 2024-03-02 | *Computable Name*:ModuleQuestionnaireRadiologyOrderDiagnosis |
| **Copyright/Legal**: CC0-1.0 | |



## Resource Content

```json
{
  "resourceType" : "Questionnaire",
  "id" : "ch-rad-order-module-diagnosis",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-assemble-expectation",
      "valueCode" : "assemble-child"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-rad-order/Questionnaire/ch-rad-order-module-diagnosis",
  "version" : "2.0.1",
  "name" : "ModuleQuestionnaireRadiologyOrderDiagnosis",
  "title" : "Module Questionnaire Radiologyorder Diagnosis",
  "status" : "active",
  "date" : "2024-03-02",
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
      "linkId" : "diagnosisList",
      "text" : "Diagnosen und Befunde",
      "type" : "group",
      "item" : [
        {
          "linkId" : "diagnosisList.primaryDiagnosis",
          "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-servicerequest-definitions#reasonReference",
          "text" : "Hauptdiagnose",
          "type" : "string",
          "repeats" : true
        },
        {
          "linkId" : "diagnosisList.secondaryDiagnosis",
          "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-servicerequest-definitions#ServiceRequest.supportingInfo:diagnosis",
          "text" : "Nebendiagnose",
          "type" : "string",
          "repeats" : true
        },
        {
          "linkId" : "diagnosisList.bodyHeight",
          "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-servicerequest-definitionServiceRequest.supportingInfo:bodyHeight",
          "text" : "Grösse (cm)",
          "type" : "quantity",
          "repeats" : false
        },
        {
          "linkId" : "diagnosisList.bodyWeight",
          "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-servicerequest-definitions#supportingInfo:#ServiceRequest.supportingInfo:bodyWeight",
          "text" : "Gewicht (kg)",
          "type" : "quantity",
          "repeats" : false
        }
      ]
    }
  ]
}

```
