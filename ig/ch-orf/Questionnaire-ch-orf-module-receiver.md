# Module Questionnaire Receiver - CH ORF (R4) v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Module Questionnaire Receiver**

## Questionnaire: Module Questionnaire Receiver 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-orf/Questionnaire/ch-orf-module-receiver | *Version*:3.0.2 |
| Active as of 2022-05-04 | *Computable Name*:ModuleQuestionnaireOrderReceiver |
| **Copyright/Legal**: CC0-1.0 | |



## Resource Content

```json
{
  "resourceType" : "Questionnaire",
  "id" : "ch-orf-module-receiver",
  "language" : "de-CH",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-assemble-expectation",
      "valueCode" : "assemble-child"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-orf/Questionnaire/ch-orf-module-receiver",
  "version" : "3.0.2",
  "name" : "ModuleQuestionnaireOrderReceiver",
  "title" : "Module Questionnaire Order Receiver",
  "status" : "active",
  "date" : "2022-05-04",
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
      "linkId" : "receiver.practitioner",
      "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole#PractitionerRole.practitioner",
      "text" : "Empfangende Person",
      "type" : "group",
      "item" : [
        {
          "linkId" : "receiver.practitioner.title",
          "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner#Practitioner.name.prefix",
          "text" : "Titel",
          "type" : "string"
        },
        {
          "linkId" : "receiver.practitioner.familyName",
          "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner#Practitioner.name.family",
          "text" : "Name",
          "type" : "string"
        },
        {
          "linkId" : "receiver.practitioner.givenName",
          "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner#Practitioner.name.given",
          "text" : "Vorname",
          "type" : "string"
        },
        {
          "linkId" : "receiver.practitioner.gln",
          "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner#Practitioner.identifier:GLN.value",
          "text" : "GLN",
          "type" : "string"
        },
        {
          "linkId" : "receiver.practitioner.zsr",
          "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner#Practitioner.identifier:ZSR.value",
          "text" : "ZSR (fr/it: RCC)",
          "type" : "string"
        },
        {
          "linkId" : "receiver.practitioner.phone",
          "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner#Practitioner.telecom.value",
          "text" : "Telefon",
          "type" : "string"
        },
        {
          "linkId" : "receiver.practitioner.email",
          "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner#Practitioner.telecom.value",
          "text" : "E-Mail",
          "type" : "string"
        }
      ]
    },
    {
      "extension" : [
        {
          "url" : "http://hl7.org/fhir/StructureDefinition/variable",
          "valueExpression" : {
            "name" : "linkIdPrefix",
            "language" : "text/fhirpath",
            "expression" : "'receiver.organization.'"
          }
        }
      ],
      "linkId" : "receiver.organization",
      "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole#PractitionerRole.organization",
      "text" : "Empfangende Organisation",
      "type" : "group",
      "item" : [
        {
          "linkId" : "receiver.organization.name",
          "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization#Organization.name",
          "text" : "Name der Organisation",
          "type" : "string"
        },
        {
          "linkId" : "receiver.organization.gln",
          "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization#Organization.identifier:GLN",
          "text" : "GLN",
          "type" : "string"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-subQuestionnaire",
              "valueCanonical" : "http://fhir.ch/ig/ch-orf/Questionnaire/ch-orf-module-address|3.0.1"
            }
          ],
          "linkId" : "receiver.organization.1",
          "text" : "Unable to resolve 'address' sub-questionnaire",
          "type" : "display"
        }
      ]
    }
  ]
}

```
