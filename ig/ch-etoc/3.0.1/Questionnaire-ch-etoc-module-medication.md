# Module Questionnaire Medication - CH eTOC (R4) v3.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Module Questionnaire Medication**

## Questionnaire: Module Questionnaire Medication 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-etoc/Questionnaire/ch-etoc-module-medication | *Version*:3.0.1 |
| Active as of 2023-06-21 | *Computable Name*:ModuleQuestionnaireEtocMedication |
| **Copyright/Legal**: CC0-1.0 | |



## Resource Content

```json
{
  "resourceType" : "Questionnaire",
  "id" : "ch-etoc-module-medication",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-assemble-expectation",
      "valueCode" : "assemble-child"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-etoc/Questionnaire/ch-etoc-module-medication",
  "version" : "3.0.1",
  "name" : "ModuleQuestionnaireEtocMedication",
  "title" : "Module Questionnaire Order Medication",
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
      "linkId" : "medication.medication",
      "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-medication#Medication.code.text",
      "text" : "Medikament",
      "type" : "string",
      "repeats" : true,
      "item" : [
        {
          "linkId" : "medication.dosage",
          "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-medicationstatement#MedicationStatement.dosage:nonstructured",
          "text" : "Dosierung",
          "type" : "string"
        }
      ]
    }
  ]
}

```
