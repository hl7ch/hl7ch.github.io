# SDCModularQuestionnaireExampleForIssue126 - CH ORF (R4) v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **SDCModularQuestionnaireExampleForIssue126**

## Questionnaire: SDCModularQuestionnaireExampleForIssue126 (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-orf/Questionnaire/sdc-modular-issue126 | *Version*:3.0.2 |
| Draft as of 2025-12-16 | *Computable Name*:SDCModularQuestionnaireExampleForIssue126 |
| **Copyright/Legal**: CC0-1.0 | |

 
SDC Modular Questionnaire Example for ch-orf issue #126 



## Resource Content

```json
{
  "resourceType" : "Questionnaire",
  "id" : "sdc-modular-issue126",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-assemble-expectation",
      "valueCode" : "assemble-root"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-orf/Questionnaire/sdc-modular-issue126",
  "version" : "3.0.2",
  "name" : "SDCModularQuestionnaireExampleForIssue126",
  "title" : "SDC Modular Questionnaire Example for Issue 126",
  "status" : "draft",
  "experimental" : true,
  "date" : "2025-12-16T09:33:08+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch/"
        }
      ]
    }
  ],
  "description" : "SDC Modular Questionnaire Example for ch-orf issue #126",
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
      "linkId" : "1",
      "type" : "group",
      "item" : [
        {
          "linkId" : "1.1",
          "text" : "Unable to resolve 'name' sub-questionnaire",
          "type" : "display"
        }
      ]
    }
  ]
}

```
