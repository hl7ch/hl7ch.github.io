# Module Questionnaire Pathologyg - CH eTOC (R4) v3.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Module Questionnaire Pathologyg**

## Questionnaire: Module Questionnaire Pathologyg 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-etoc/Questionnaire/ch-etoc-module-pathology | *Version*:3.0.1 |
| Active as of 2023-06-21 | *Computable Name*:ModuleQuestionnaireEtocPathology |
| **Copyright/Legal**: CC0-1.0 | |



## Resource Content

```json
{
  "resourceType" : "Questionnaire",
  "id" : "ch-etoc-module-pathology",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-assemble-expectation",
      "valueCode" : "assemble-child"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-etoc/Questionnaire/ch-etoc-module-pathology",
  "version" : "3.0.1",
  "name" : "ModuleQuestionnaireEtocPathology",
  "title" : "Module Questionnaire Pathology",
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
      "linkId" : "pathology.result",
      "definition" : "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-servicerequest#ServiceRequest.supportingInfo",
      "text" : "Pathologiebefunde",
      "type" : "text"
    }
  ]
}

```
