# Module Questionnaire Receiver Copy - CH ORF (R4) v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Module Questionnaire Receiver Copy**

## Questionnaire: Module Questionnaire Receiver Copy 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-orf/Questionnaire/ch-orf-module-receivercopy | *Version*:3.0.2 |
| Active as of 2022-05-04 | *Computable Name*:ModuleQuestionnaireOrderReceiverCopy |
| **Copyright/Legal**: CC0-1.0 | |



## Resource Content

```json
{
  "resourceType" : "Questionnaire",
  "id" : "ch-orf-module-receivercopy",
  "language" : "de-CH",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-assemble-expectation",
      "valueCode" : "assemble-child"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-orf/Questionnaire/ch-orf-module-receivercopy",
  "version" : "3.0.2",
  "name" : "ModuleQuestionnaireOrderReceiverCopy",
  "title" : "Module Questionnaire Order Receiver Copy",
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
      "linkId" : "receiverCopy.practitionerRole",
      "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole#PractitionerRole",
      "text" : "Gesundheitsfachperson oder -organisation",
      "type" : "group",
      "repeats" : true,
      "item" : [
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/variable",
              "valueExpression" : {
                "name" : "linkIdPrefix",
                "language" : "text/fhirpath",
                "expression" : "'receiverCopy.practitionerRole.practitioner.'"
              }
            }
          ],
          "linkId" : "receiverCopy.practitionerRole.practitioner",
          "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole#PractitionerRole.practitioner",
          "text" : "Gesundheitsfachperson",
          "type" : "group",
          "item" : [
            {
              "extension" : [
                {
                  "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-subQuestionnaire",
                  "valueCanonical" : "http://fhir.ch/ig/ch-orf/Questionnaire/ch-orf-module-practitioner-nametel|3.0.1"
                }
              ],
              "linkId" : "receiverCopy.practitionerRole.practitioner.1",
              "text" : "Unable to resolve 'practitioner-nametel' sub-questionnaire",
              "type" : "display"
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
                "expression" : "'receiverCopy.practitionerRole.organization.'"
              }
            }
          ],
          "linkId" : "receiverCopy.practitionerRole.organization",
          "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole#PractitionerRole.organization",
          "text" : "Gesundheitsorganisatiton",
          "type" : "group",
          "item" : [
            {
              "linkId" : "receiverCopy.practitionerRole.organization.name",
              "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization#Organization.name",
              "text" : "Name der Organisation",
              "type" : "string"
            },
            {
              "extension" : [
                {
                  "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-subQuestionnaire",
                  "valueCanonical" : "http://fhir.ch/ig/ch-orf/Questionnaire/ch-orf-module-address|3.0.1"
                }
              ],
              "linkId" : "receiverCopy.practitionerRole.organization.1",
              "text" : "Unable to resolve 'address' sub-questionnaire",
              "type" : "display"
            }
          ]
        }
      ]
    },
    {
      "linkId" : "receiverCopy.patient",
      "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient#Patient",
      "text" : "Patient selbst",
      "type" : "boolean"
    },
    {
      "linkId" : "receiverCopy.relatedPerson",
      "definition" : "http://hl7.org/fhir/StructureDefinition/RelatedPerson#RelatedPerson",
      "text" : "Andere Person",
      "type" : "group",
      "repeats" : true,
      "item" : [
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/variable",
              "valueExpression" : {
                "name" : "linkIdPrefix",
                "language" : "text/fhirpath",
                "expression" : "'receiverCopy.relatedPerson.'"
              }
            }
          ],
          "linkId" : "receiverCopy.relatedPerson.familyName",
          "definition" : "http://hl7.org/fhir/StructureDefinition/RelatedPerson#RelatedPerson.name.family",
          "text" : "Name",
          "type" : "string"
        },
        {
          "linkId" : "receiverCopy.relatedPerson.givenName",
          "definition" : "http://hl7.org/fhir/StructureDefinition/RelatedPerson#RelatedPerson.name.given",
          "text" : "Vorname",
          "type" : "string"
        },
        {
          "linkId" : "receiverCopy.relatedPerson.phone",
          "definition" : "http://hl7.org/fhir/StructureDefinition/RelatedPerson#RelatedPerson.telecom.value",
          "text" : "Telefon",
          "type" : "string",
          "repeats" : true
        },
        {
          "linkId" : "receiverCopy.relatedPerson.email",
          "definition" : "http://hl7.org/fhir/StructureDefinition/RelatedPerson#RelatedPerson.telecom.value",
          "text" : "E-Mail",
          "type" : "string"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-subQuestionnaire",
              "valueCanonical" : "http://fhir.ch/ig/ch-orf/Questionnaire/ch-orf-module-address|3.0.1"
            }
          ],
          "linkId" : "receiverCopy.relatedPerson.1",
          "text" : "Unable to resolve 'address' sub-questionnaire",
          "type" : "display"
        }
      ]
    }
  ]
}

```
