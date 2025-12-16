# Module Questionnaire Sender - CH ORF (R4) v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Module Questionnaire Sender**

## Questionnaire: Module Questionnaire Sender 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-orf/Questionnaire/ch-orf-module-sender | *Version*:3.0.2 |
| Active as of 2022-05-04 | *Computable Name*:ModuleQuestionnaireOrderSender |
| **Copyright/Legal**: CC0-1.0 | |



## Resource Content

```json
{
  "resourceType" : "Questionnaire",
  "id" : "ch-orf-module-sender",
  "language" : "de-CH",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-assemble-expectation",
      "valueCode" : "assemble-child"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-orf/Questionnaire/ch-orf-module-sender",
  "version" : "3.0.2",
  "name" : "ModuleQuestionnaireOrderSender",
  "title" : "Module Questionnaire Order Sender",
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
      "extension" : [
        {
          "url" : "http://hl7.org/fhir/StructureDefinition/variable",
          "valueExpression" : {
            "name" : "senderPractitionerRoles",
            "language" : "application/x-fhir-query",
            "expression" : "PractitionerRole?practitioner={{%user.id}}"
          }
        },
        {
          "url" : "http://hl7.org/fhir/StructureDefinition/variable",
          "valueExpression" : {
            "name" : "senderPractitionerRole",
            "language" : "text/fhirpath",
            "expression" : "%senderPractitionerRoles.entry[0].resource"
          }
        },
        {
          "url" : "http://hl7.org/fhir/StructureDefinition/variable",
          "valueExpression" : {
            "name" : "senderOrganizations",
            "language" : "application/x-fhir-query",
            "expression" : "Organization?_id={{%senderPractitionerRole.organization.reference}}"
          }
        },
        {
          "url" : "http://hl7.org/fhir/StructureDefinition/variable",
          "valueExpression" : {
            "name" : "senderOrganization",
            "language" : "text/fhirpath",
            "expression" : "%senderOrganizations.entry[0].resource"
          }
        },
        {
          "url" : "http://hl7.org/fhir/StructureDefinition/variable",
          "valueExpression" : {
            "name" : "address",
            "language" : "text/fhirpath",
            "expression" : "%senderOrganization.address"
          }
        }
      ],
      "linkId" : "sender.author",
      "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-composition#Composition.author",
      "text" : "Verantwortlicher",
      "type" : "group",
      "required" : true,
      "item" : [
        {
          "linkId" : "sender.author.practitioner",
          "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole#PractitionerRole.practitioner",
          "text" : "Verantwortliche Person",
          "type" : "group",
          "item" : [
            {
              "linkId" : "sender.author.practitioner.title",
              "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner#Practitioner.name.prefix",
              "text" : "Titel",
              "type" : "string"
            },
            {
              "extension" : [
                {
                  "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
                  "valueExpression" : {
                    "language" : "text/fhirpath",
                    "expression" : "%user.name.family"
                  }
                }
              ],
              "linkId" : "sender.author.practitioner.familyName",
              "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner#Practitioner.name.family",
              "text" : "Name",
              "type" : "string"
            },
            {
              "extension" : [
                {
                  "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
                  "valueExpression" : {
                    "language" : "text/fhirpath",
                    "expression" : "%user.name.given"
                  }
                }
              ],
              "linkId" : "sender.author.practitioner.givenName",
              "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner#Practitioner.name.given",
              "text" : "Vorname",
              "type" : "string"
            },
            {
              "extension" : [
                {
                  "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
                  "valueExpression" : {
                    "language" : "text/fhirpath",
                    "expression" : "%user.identifier.where(system='urn:oid:2.51.1.3').value"
                  }
                }
              ],
              "linkId" : "sender.author.practitioner.gln",
              "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner#Practitioner.identifier:GLN.value",
              "text" : "GLN",
              "type" : "string"
            },
            {
              "extension" : [
                {
                  "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
                  "valueExpression" : {
                    "language" : "text/fhirpath",
                    "expression" : "%user.identifier.where(system='urn:oid:2.16.756.5.30.1.123.100.2.1.1').value"
                  }
                }
              ],
              "linkId" : "sender.author.practitioner.zsr",
              "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner#Practitioner.identifier:ZSR.value",
              "text" : "ZSR (fr/it: RCC)",
              "type" : "string"
            },
            {
              "extension" : [
                {
                  "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
                  "valueExpression" : {
                    "language" : "text/fhirpath",
                    "expression" : "%user.telecom.where(system='phone').value"
                  }
                }
              ],
              "linkId" : "sender.author.practitioner.phone",
              "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner#Practitioner.telecom.value",
              "text" : "Telefon",
              "type" : "string"
            },
            {
              "extension" : [
                {
                  "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
                  "valueExpression" : {
                    "language" : "text/fhirpath",
                    "expression" : "%user.telecom.where(system='email').value"
                  }
                }
              ],
              "linkId" : "sender.author.practitioner.email",
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
                "expression" : "'sender.author.organization.'"
              }
            }
          ],
          "linkId" : "sender.author.organization",
          "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole#PractitionerRole.organization",
          "text" : "Verantwortliche Organisation",
          "type" : "group",
          "item" : [
            {
              "extension" : [
                {
                  "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
                  "valueExpression" : {
                    "language" : "text/fhirpath",
                    "expression" : "%senderOrganization.name"
                  }
                }
              ],
              "linkId" : "sender.author.organization.name",
              "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization#Organization.name",
              "text" : "Name der Organisation",
              "type" : "string"
            },
            {
              "extension" : [
                {
                  "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
                  "valueExpression" : {
                    "language" : "text/fhirpath",
                    "expression" : "%senderOrganization.identifier.where(system='urn:oid:2.51.1.3').value"
                  }
                }
              ],
              "linkId" : "sender.author.organization.gln",
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
              "linkId" : "sender.author.organization.1",
              "text" : "Unable to resolve 'address' sub-questionnaire",
              "type" : "display"
            }
          ]
        }
      ]
    },
    {
      "linkId" : "sender.dataenterer",
      "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-composition#Composition.extension",
      "text" : "Erfasser",
      "type" : "group",
      "item" : [
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/variable",
              "valueExpression" : {
                "name" : "linkIdPrefix",
                "language" : "text/fhirpath",
                "expression" : "'sender.dataenterer.practitioner.'"
              }
            }
          ],
          "linkId" : "sender.dataenterer.practitioner",
          "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole#PractitionerRole.practitioner",
          "text" : "Erfassende Person",
          "type" : "group",
          "item" : [
            {
              "extension" : [
                {
                  "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-subQuestionnaire",
                  "valueCanonical" : "http://fhir.ch/ig/ch-orf/Questionnaire/ch-orf-module-practitioner-nametel|3.0.1"
                }
              ],
              "linkId" : "sender.dataenterer.practitioner.1",
              "text" : "Unable to resolve 'practitioner-nametel' sub-questionnaire",
              "type" : "display"
            }
          ]
        }
      ]
    }
  ]
}

```
