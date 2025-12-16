# Module Questionnaire Attachment - CH eTOC (R4) v3.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Module Questionnaire Attachment**

## Questionnaire: Module Questionnaire Attachment 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-etoc/Questionnaire/ch-etoc-module-attachment | *Version*:3.0.1 |
| Active as of 2024-03-02 | *Computable Name*:ModuleQuestionnaireAttachment |
| **Copyright/Legal**: CC0-1.0 | |



## Resource Content

```json
{
  "resourceType" : "Questionnaire",
  "id" : "ch-etoc-module-attachment",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-assemble-expectation",
      "valueCode" : "assemble-child"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-etoc/Questionnaire/ch-etoc-module-attachment",
  "version" : "3.0.1",
  "name" : "ModuleQuestionnaireAttachment",
  "title" : "Module Questionnaire Attachment",
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
      "linkId" : "attachedFile",
      "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-documentreference#DocumentReference.content.attachment",
      "text" : "Datei",
      "type" : "attachment",
      "repeats" : true,
      "item" : [
        {
          "linkId" : "attachedFile.description",
          "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-documentreference#DocumentReference.description",
          "text" : "Beschreibung",
          "type" : "string"
        }
      ]
    }
  ]
}

```
