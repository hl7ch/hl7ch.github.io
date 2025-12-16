# Module Questionnaire Initiator - CH ORF (R4) v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Module Questionnaire Initiator**

## Questionnaire: Module Questionnaire Initiator 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-orf/Questionnaire/ch-orf-module-initiator | *Version*:3.0.2 |
| Active as of 2022-06-20 | *Computable Name*:ModuleQuestionnaireOrderInitiator |
| **Copyright/Legal**: CC0-1.0 | |



## Resource Content

```json
{
  "resourceType" : "Questionnaire",
  "id" : "ch-orf-module-initiator",
  "language" : "de-CH",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-assemble-expectation",
      "valueCode" : "assemble-child"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-orf/Questionnaire/ch-orf-module-initiator",
  "version" : "3.0.2",
  "name" : "ModuleQuestionnaireOrderInitiator",
  "title" : "Module Questionnaire Order Initiator",
  "status" : "active",
  "date" : "2022-06-20",
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
      "linkId" : "initiator.legalrelation",
      "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-initiator#Extension",
      "text" : "Juristische Beziehung zum Patienten",
      "type" : "choice",
      "answerOption" : [
        {
          "valueCoding" : {
            "system" : "http://snomed.info/sct",
            "code" : "373068000",
            "display" : "Nicht definiert"
          }
        },
        {
          "valueCoding" : {
            "system" : "http://snomed.info/sct",
            "code" : "58626002",
            "display" : "Gesetzlicher Vertreter"
          }
        }
      ]
    },
    {
      "linkId" : "initiator.personalrelation",
      "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-initiator#Extension",
      "text" : "Persönliche Beziehung zum Patienten?",
      "type" : "choice",
      "answerOption" : [
        {
          "valueCoding" : {
            "system" : "http://snomed.info/sct",
            "code" : "66089001",
            "display" : "Tochter"
          }
        },
        {
          "valueCoding" : {
            "system" : "http://snomed.info/sct",
            "code" : "65616008",
            "display" : "Sohn"
          }
        },
        {
          "valueCoding" : {
            "system" : "http://snomed.info/sct",
            "code" : "127849001",
            "display" : "Ehemann"
          }
        },
        {
          "valueCoding" : {
            "system" : "http://snomed.info/sct",
            "code" : "127850001",
            "display" : "Ehefrau"
          }
        },
        {
          "valueCoding" : {
            "system" : "http://snomed.info/sct",
            "code" : "394921008",
            "display" : "Partner (eingetragene  Partnerschaft)"
          }
        },
        {
          "valueCoding" : {
            "system" : "http://snomed.info/sct",
            "code" : "70924004",
            "display" : "Bruder"
          }
        },
        {
          "valueCoding" : {
            "system" : "http://snomed.info/sct",
            "code" : "27733009",
            "display" : "Schwester"
          }
        },
        {
          "valueCoding" : {
            "system" : "http://snomed.info/sct",
            "code" : "72705000",
            "display" : "Mutter"
          }
        },
        {
          "valueCoding" : {
            "system" : "http://snomed.info/sct",
            "code" : "66839005",
            "display" : "Vater"
          }
        },
        {
          "valueCoding" : {
            "system" : "http://snomed.info/sct",
            "code" : "48385004",
            "display" : "Bekannt"
          }
        }
      ]
    },
    {
      "linkId" : "initiator.practitionerRole",
      "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole#PractitionerRole.practitioner",
      "text" : "Gesundheitsfachperson oder -organisation",
      "type" : "group",
      "item" : [
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/variable",
              "valueExpression" : {
                "name" : "linkIdPrefix",
                "language" : "text/fhirpath",
                "expression" : "'initiator.practitionerRole.practitioner.'"
              }
            }
          ],
          "linkId" : "initiator.practitionerRole.practitioner",
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
              "linkId" : "initiator.practitionerRole.practitioner.1",
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
                "expression" : "'initiator.practitionerRole.organization.'"
              }
            }
          ],
          "linkId" : "initiator.practitionerRole.organization",
          "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole#PractitionerRole.organization",
          "text" : "Gesundheitsorganisatiton",
          "type" : "group",
          "item" : [
            {
              "linkId" : "initiator.practitionerRole.organization.name",
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
              "linkId" : "initiator.practitionerRole.organization.1",
              "text" : "Unable to resolve 'address' sub-questionnaire",
              "type" : "display"
            }
          ]
        }
      ]
    },
    {
      "linkId" : "initiator.relatedPerson",
      "definition" : "http://hl7.org/fhir/StructureDefinition/RelatedPerson#RelatedPerson",
      "text" : "Andere Person",
      "type" : "group",
      "item" : [
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/variable",
              "valueExpression" : {
                "name" : "linkIdPrefix",
                "language" : "text/fhirpath",
                "expression" : "'initiator.relatedPerson.'"
              }
            }
          ],
          "linkId" : "initiator.relatedPerson.familyName",
          "definition" : "http://hl7.org/fhir/StructureDefinition/RelatedPerson#RelatedPerson.name.family",
          "text" : "Name",
          "type" : "string"
        },
        {
          "linkId" : "initiator.relatedPerson.givenName",
          "definition" : "http://hl7.org/fhir/StructureDefinition/RelatedPerson#RelatedPerson.name.given",
          "text" : "Vorname",
          "type" : "string"
        },
        {
          "linkId" : "initiator.relatedPerson.phone",
          "definition" : "http://hl7.org/fhir/StructureDefinition/RelatedPerson#RelatedPerson.telecom.value",
          "text" : "Telefon",
          "type" : "string",
          "repeats" : true
        },
        {
          "linkId" : "initiator.relatedPerson.email",
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
          "linkId" : "initiator.relatedPerson.1",
          "text" : "Unable to resolve 'address' sub-questionnaire",
          "type" : "display"
        }
      ]
    }
  ]
}

```
