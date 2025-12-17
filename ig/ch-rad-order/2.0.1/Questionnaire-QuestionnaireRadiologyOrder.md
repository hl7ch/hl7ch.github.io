# Questionnaire - CH RAD-Order (R4) v2.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Questionnaire**

## Questionnaire: Questionnaire 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-rad-order/Questionnaire/QuestionnaireRadiologyOrder | *Version*:2.0.1 |
| Active as of 2022-08-24 | *Computable Name*:QuestionnaireRadiologyOrder |
| **Copyright/Legal**: CC0-1.0 | |



## Resource Content

```json
{
  "resourceType" : "Questionnaire",
  "id" : "QuestionnaireRadiologyOrder",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-questionnaire",
      "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire",
      "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-extr-smap",
      "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-pop-exp"
    ]
  },
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-assembledFrom",
      "valueCanonical" : "http://fhir.ch/ig/ch-orf/Questionnaire/ch-orf-module-order|2.0.0-ci-build"
    },
    {
      "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-assembledFrom",
      "valueCanonical" : "http://fhir.ch/ig/ch-orf/Questionnaire/ch-orf-module-practitioner-nametel|2.0.0-ci-build"
    },
    {
      "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-assembledFrom",
      "valueCanonical" : "http://fhir.ch/ig/ch-orf/Questionnaire/ch-orf-module-receiver|2.0.0-ci-build"
    },
    {
      "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-assembledFrom",
      "valueCanonical" : "http://fhir.ch/ig/ch-orf/Questionnaire/ch-orf-module-address|2.0.0-ci-build"
    },
    {
      "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-assembledFrom",
      "valueCanonical" : "http://fhir.ch/ig/ch-orf/Questionnaire/ch-orf-module-initiator|2.0.0-ci-build"
    },
    {
      "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-assembledFrom",
      "valueCanonical" : "http://fhir.ch/ig/ch-orf/Questionnaire/ch-orf-module-patient|2.0.0-ci-build"
    },
    {
      "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-assembledFrom",
      "valueCanonical" : "http://fhir.ch/ig/ch-orf/Questionnaire/ch-orf-module-familydoctor|2.0.0-ci-build"
    },
    {
      "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-assembledFrom",
      "valueCanonical" : "http://fhir.ch/ig/ch-orf/Questionnaire/ch-orf-module-requestedencounter|2.0.0-ci-build"
    },
    {
      "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-assembledFrom",
      "valueCanonical" : "http://fhir.ch/ig/ch-orf/Questionnaire/ch-orf-module-coverage|2.0.0-ci-build"
    },
    {
      "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-assembledFrom",
      "valueCanonical" : "http://fhir.ch/ig/ch-orf/Questionnaire/ch-orf-module-sender|2.0.0-ci-build"
    },
    {
      "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-assembledFrom",
      "valueCanonical" : "http://fhir.ch/ig/ch-orf/Questionnaire/ch-orf-module-receivercopy|2.0.0-ci-build"
    },
    {
      "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-assembledFrom",
      "valueCanonical" : "http://fhir.ch/ig/ch-orf/Questionnaire/ch-orf-module-appointment|2.0.0-ci-build"
    },
    {
      "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-assembledFrom",
      "valueCanonical" : "http://fhir.ch/ig/ch-orf/Questionnaire/ch-orf-module-consent|2.0.0-ci-build"
    },
    {
      "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-assembledFrom",
      "valueCanonical" : "http://fhir.ch/ig/ch-rad-order/Questionnaire/ch-rad-order-module-medinfo|2.0.0-ci-build"
    },
    {
      "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-assembledFrom",
      "valueCanonical" : "http://fhir.ch/ig/ch-rad-order/Questionnaire/ch-rad-order-module-diagnosis|2.0.0-ci-build"
    },
    {
      "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-assembledFrom",
      "valueCanonical" : "http://fhir.ch/ig/ch-rad-order/Questionnaire/ch-rad-order-module-caveats|2.0.0-ci-build"
    },
    {
      "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-assembledFrom",
      "valueCanonical" : "http://fhir.ch/ig/ch-rad-order/Questionnaire/ch-rad-order-module-previousresults|2.0.0-ci-build"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-rad-order/Questionnaire/QuestionnaireRadiologyOrder",
  "version" : "2.0.1",
  "name" : "QuestionnaireRadiologyOrder",
  "title" : "QuestionnaireRadiologyOrder",
  "status" : "active",
  "subjectType" : ["Patient"],
  "date" : "2022-08-24",
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
      "linkId" : "order",
      "text" : "Auftrag",
      "type" : "group",
      "required" : true,
      "item" : [
        {
          "linkId" : "order.authoredOn",
          "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition-ch-orf-servicerequest#ServiceRequest.authoredOn",
          "text" : "Datum/Zeit der Auftragserteilung",
          "type" : "dateTime"
        },
        {
          "linkId" : "order.placerOrderIdentifier",
          "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-servicerequest#ServiceRequest.identifier:placerOrderIdentifier.value",
          "text" : "Auftragsnummer des Auftraggebers",
          "type" : "string"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/questionnaire-hidden",
              "valueBoolean" : true
            }
          ],
          "linkId" : "order.placerOrderIdentifierDomain",
          "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-servicerequest#ServiceRequest.identifier:placerOrderIdentifier.system",
          "text" : "Identifier Domain der Auftragsnummer des Auftraggebers",
          "type" : "string"
        },
        {
          "linkId" : "order.fillerOrderIdentifier",
          "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-servicerequest#ServiceRequest.identifier:fillerOrderIdentifier.value",
          "text" : "Auftragsnummer des Auftragsempfängers",
          "type" : "string"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/questionnaire-hidden",
              "valueBoolean" : true
            }
          ],
          "linkId" : "order.fillerOrderIdentifierDomain",
          "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-servicerequest#ServiceRequest.identifier:fillerOrderIdentifier.system",
          "text" : "Identifier Domain der Auftragsnummer des Auftragsempfängers",
          "type" : "string"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/questionnaire-hidden",
              "valueBoolean" : true
            }
          ],
          "linkId" : "order.precedentDocumentIdentifier",
          "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-composition#Composition.extension:precedentDocument",
          "text" : "Identifier des Vorgängerdokuments",
          "type" : "string"
        },
        {
          "linkId" : "order.notificationContactDocument",
          "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-composition#Composition.extension:urgentNoficationContactForThisDocument",
          "text" : "Dringender Benachrichtigungskontakt für dieses Dokument",
          "type" : "group",
          "item" : [
            {
              "extension" : [
                {
                  "url" : "http://hl7.org/fhir/StructureDefinition/variable",
                  "valueExpression" : {
                    "name" : "linkIdPrefix",
                    "language" : "text/fhirpath",
                    "expression" : "'order.notificationContactDocument.practitioner.'"
                  }
                }
              ],
              "linkId" : "order.notificationContactDocument.practitioner",
              "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole#PractitionerRole.practitioner",
              "text" : "Zu benachrichtigende Person",
              "type" : "group",
              "item" : [
                {
                  "linkId" : "order.notificationContactDocument.practitioner.title",
                  "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner#Practitioner.name.prefix",
                  "text" : "Titel",
                  "type" : "string"
                },
                {
                  "linkId" : "order.notificationContactDocument.practitioner.familyName",
                  "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner#Practitioner.name.family",
                  "text" : "Name",
                  "type" : "string"
                },
                {
                  "linkId" : "order.notificationContactDocument.practitioner.givenName",
                  "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner#Practitioner.name.given",
                  "text" : "Vorname",
                  "type" : "string"
                },
                {
                  "linkId" : "order.notificationContactDocument.practitioner.phone",
                  "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner#Practitioner.telecom.value",
                  "text" : "Telefon",
                  "type" : "string"
                },
                {
                  "linkId" : "order.notificationContactDocument.practitioner.email",
                  "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner#Practitioner.telecom.value",
                  "text" : "E-Mail",
                  "type" : "string"
                }
              ]
            }
          ]
        },
        {
          "linkId" : "order.notificationContactDocumentResponse",
          "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-composition#Composition.extension:urgentNoficationContactForTheResponseToThisDocument",
          "text" : "Dringender Benachrichtigungskontakt für die Antwort auf dieses Dokument",
          "type" : "group",
          "item" : [
            {
              "extension" : [
                {
                  "url" : "http://hl7.org/fhir/StructureDefinition/variable",
                  "valueExpression" : {
                    "name" : "linkIdPrefix",
                    "language" : "text/fhirpath",
                    "expression" : "'order.notificationContactDocumentResponse.practitioner.'"
                  }
                }
              ],
              "linkId" : "order.notificationContactDocumentResponse.practitioner",
              "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole#PractitionerRole.practitioner",
              "text" : "Zu benachrichtigende Person",
              "type" : "group",
              "item" : [
                {
                  "linkId" : "order.notificationContactDocumentResponse.practitioner.title",
                  "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner#Practitioner.name.prefix",
                  "text" : "Titel",
                  "type" : "string"
                },
                {
                  "linkId" : "order.notificationContactDocumentResponse.practitioner.familyName",
                  "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner#Practitioner.name.family",
                  "text" : "Name",
                  "type" : "string"
                },
                {
                  "linkId" : "order.notificationContactDocumentResponse.practitioner.givenName",
                  "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner#Practitioner.name.given",
                  "text" : "Vorname",
                  "type" : "string"
                },
                {
                  "linkId" : "order.notificationContactDocumentResponse.practitioner.phone",
                  "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner#Practitioner.telecom.value",
                  "text" : "Telefon",
                  "type" : "string"
                },
                {
                  "linkId" : "order.notificationContactDocumentResponse.practitioner.email",
                  "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner#Practitioner.telecom.value",
                  "text" : "E-Mail",
                  "type" : "string"
                }
              ]
            }
          ]
        },
        {
          "linkId" : "order.priority",
          "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-servicerequest#ServiceRequest.priority",
          "text" : "Auftragspriorität",
          "type" : "choice",
          "answerOption" : [
            {
              "valueCoding" : {
                "system" : "http://hl7.org/fhir/request-priority",
                "code" : "routine",
                "display" : "Die Anfrage hat normale Priorität."
              },
              "initialSelected" : true
            },
            {
              "valueCoding" : {
                "system" : "http://hl7.org/fhir/request-priority",
                "code" : "urgent",
                "display" : "Die Anfrage sollte dringend bearbeitet werden - höhere Priorität als normal."
              }
            },
            {
              "valueCoding" : {
                "system" : "http://hl7.org/fhir/request-priority",
                "code" : "asap",
                "display" : "Die Anfrage sollte so schnell wie möglich bearbeitet werden - höhere Priorität als dringend."
              }
            },
            {
              "valueCoding" : {
                "system" : "http://hl7.org/fhir/request-priority",
                "code" : "stat",
                "display" : "Die Anfrage sollte sofort bearbeitet werden - höchstmögliche Priorität. Z.B. bei einem Notfall."
              }
            }
          ]
        }
      ]
    },
    {
      "linkId" : "receiver",
      "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-composition#Composition.extension:receiver",
      "text" : "Empfänger",
      "type" : "group",
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
              "text" : "ZSR",
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
                  "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
                  "valueExpression" : {
                    "language" : "text/fhirpath",
                    "expression" : "%address.line"
                  }
                }
              ],
              "linkId" : "receiver.organization.streetAddressLine",
              "text" : "Strasse, Hausnummer, Postfach etc.",
              "type" : "string",
              "repeats" : true
            },
            {
              "extension" : [
                {
                  "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
                  "valueExpression" : {
                    "language" : "text/fhirpath",
                    "expression" : "%address.postalCode"
                  }
                }
              ],
              "linkId" : "receiver.organization.postalCode",
              "text" : "PLZ",
              "type" : "string"
            },
            {
              "extension" : [
                {
                  "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
                  "valueExpression" : {
                    "language" : "text/fhirpath",
                    "expression" : "%address.city"
                  }
                }
              ],
              "linkId" : "receiver.organization.city",
              "text" : "Ort",
              "type" : "string"
            },
            {
              "extension" : [
                {
                  "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
                  "valueExpression" : {
                    "language" : "text/fhirpath",
                    "expression" : "%address.country"
                  }
                }
              ],
              "linkId" : "receiver.organization.country",
              "text" : "Land",
              "type" : "string"
            }
          ]
        }
      ]
    },
    {
      "linkId" : "initiator",
      "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-composition#Composition.extension:initiator",
      "text" : "Initiant dieser Anmeldung",
      "type" : "group",
      "item" : [
        {
          "linkId" : "initiator.legalrelation",
          "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-initiator#Extension.extension:ch-orf-personalrelation",
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
          "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-initiator#Extension.extension:ch-orf-personalrelation",
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
                  "linkId" : "initiator.practitionerRole.practitioner.title",
                  "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner#Practitioner.name.prefix",
                  "text" : "Titel",
                  "type" : "string"
                },
                {
                  "linkId" : "initiator.practitionerRole.practitioner.familyName",
                  "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner#Practitioner.name.family",
                  "text" : "Name",
                  "type" : "string"
                },
                {
                  "linkId" : "initiator.practitionerRole.practitioner.givenName",
                  "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner#Practitioner.name.given",
                  "text" : "Vorname",
                  "type" : "string"
                },
                {
                  "linkId" : "initiator.practitionerRole.practitioner.phone",
                  "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner#Practitioner.telecom.value",
                  "text" : "Telefon",
                  "type" : "string"
                },
                {
                  "linkId" : "initiator.practitionerRole.practitioner.email",
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
                      "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
                      "valueExpression" : {
                        "language" : "text/fhirpath",
                        "expression" : "%address.line"
                      }
                    }
                  ],
                  "linkId" : "initiator.practitionerRole.organization.streetAddressLine",
                  "text" : "Strasse, Hausnummer, Postfach etc.",
                  "type" : "string",
                  "repeats" : true
                },
                {
                  "extension" : [
                    {
                      "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
                      "valueExpression" : {
                        "language" : "text/fhirpath",
                        "expression" : "%address.postalCode"
                      }
                    }
                  ],
                  "linkId" : "initiator.practitionerRole.organization.postalCode",
                  "text" : "PLZ",
                  "type" : "string"
                },
                {
                  "extension" : [
                    {
                      "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
                      "valueExpression" : {
                        "language" : "text/fhirpath",
                        "expression" : "%address.city"
                      }
                    }
                  ],
                  "linkId" : "initiator.practitionerRole.organization.city",
                  "text" : "Ort",
                  "type" : "string"
                },
                {
                  "extension" : [
                    {
                      "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
                      "valueExpression" : {
                        "language" : "text/fhirpath",
                        "expression" : "%address.country"
                      }
                    }
                  ],
                  "linkId" : "initiator.practitionerRole.organization.country",
                  "text" : "Land",
                  "type" : "string"
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
                  "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
                  "valueExpression" : {
                    "language" : "text/fhirpath",
                    "expression" : "%address.line"
                  }
                }
              ],
              "linkId" : "initiator.relatedPerson.streetAddressLine",
              "text" : "Strasse, Hausnummer, Postfach etc.",
              "type" : "string",
              "repeats" : true
            },
            {
              "extension" : [
                {
                  "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
                  "valueExpression" : {
                    "language" : "text/fhirpath",
                    "expression" : "%address.postalCode"
                  }
                }
              ],
              "linkId" : "initiator.relatedPerson.postalCode",
              "text" : "PLZ",
              "type" : "string"
            },
            {
              "extension" : [
                {
                  "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
                  "valueExpression" : {
                    "language" : "text/fhirpath",
                    "expression" : "%address.city"
                  }
                }
              ],
              "linkId" : "initiator.relatedPerson.city",
              "text" : "Ort",
              "type" : "string"
            },
            {
              "extension" : [
                {
                  "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
                  "valueExpression" : {
                    "language" : "text/fhirpath",
                    "expression" : "%address.country"
                  }
                }
              ],
              "linkId" : "initiator.relatedPerson.country",
              "text" : "Land",
              "type" : "string"
            }
          ]
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
            "expression" : "'patient.'"
          }
        },
        {
          "url" : "http://hl7.org/fhir/StructureDefinition/variable",
          "valueExpression" : {
            "name" : "address",
            "language" : "text/fhirpath",
            "expression" : "%patient.address"
          }
        }
      ],
      "linkId" : "patient",
      "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-composition#Composition.subject",
      "text" : "Patient",
      "type" : "group",
      "required" : true,
      "item" : [
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
              "valueExpression" : {
                "language" : "text/fhirpath",
                "expression" : "%patient.name.where(use='official').family"
              }
            }
          ],
          "linkId" : "patient.familyName",
          "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient#Patient.name.family",
          "text" : "Name",
          "type" : "string"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
              "valueExpression" : {
                "language" : "text/fhirpath",
                "expression" : "%patient.name.where(use='maiden').family"
              }
            }
          ],
          "linkId" : "patient.maidenName",
          "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient#Patient.name.family",
          "text" : "Ledigname",
          "type" : "string"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
              "valueExpression" : {
                "language" : "text/fhirpath",
                "expression" : "%patient.name.where(use='official').given"
              }
            }
          ],
          "linkId" : "patient.givenName",
          "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient#Patient.name.given",
          "text" : "Vorname",
          "type" : "string"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
              "valueExpression" : {
                "language" : "text/fhirpath",
                "expression" : "%patient.identifier.where(type.coding.where(system='http://terminology.hl7.org/CodeSystem/v2-0203' and code='MR').exists()).value"
              }
            }
          ],
          "linkId" : "patient.localPid",
          "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient#Patient.identifier:LocalPid.value",
          "text" : "Lokale Patienten-ID",
          "type" : "string"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/questionnaire-hidden",
              "valueBoolean" : true
            }
          ],
          "linkId" : "patient.localPidDomain",
          "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient#Patient.identifier:LocalPid.system",
          "text" : "Lokale Patienten-ID Domain",
          "type" : "string"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
              "valueExpression" : {
                "language" : "text/fhirpath",
                "expression" : "%patient.birthDate"
              }
            }
          ],
          "linkId" : "patient.birthDate",
          "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient#Patient.birthDate",
          "text" : "Geburtsdatum",
          "type" : "date"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
              "valueExpression" : {
                "language" : "text/fhirpath",
                "expression" : "%questionnaire.repeat(item).where(linkId='patient.gender').answerOption.valueCoding.where(code=%patient.gender)"
              }
            }
          ],
          "linkId" : "patient.gender",
          "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient#Patient.gender",
          "text" : "Geschlecht",
          "type" : "choice",
          "answerOption" : [
            {
              "valueCoding" : {
                "system" : "http://hl7.org/fhir/administrative-gender",
                "code" : "male",
                "display" : "Männlich"
              },
              "initialSelected" : true
            },
            {
              "valueCoding" : {
                "system" : "http://hl7.org/fhir/administrative-gender",
                "code" : "female",
                "display" : "Weiblich"
              }
            },
            {
              "valueCoding" : {
                "system" : "http://hl7.org/fhir/administrative-gender",
                "code" : "other",
                "display" : "Anderes"
              }
            }
          ]
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
              "valueExpression" : {
                "language" : "text/fhirpath",
                "expression" : "%patient.maritalStatus"
              }
            }
          ],
          "linkId" : "patient.maritalStatus",
          "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient#Patient.maritalStatus",
          "text" : "Zivilstand",
          "type" : "choice",
          "answerOption" : [
            {
              "valueCoding" : {
                "system" : "http://fhir.ch/ig/ch-core/CodeSystem/ech-11-maritalstatus",
                "code" : "1",
                "display" : "ledig"
              }
            },
            {
              "valueCoding" : {
                "system" : "http://fhir.ch/ig/ch-core/CodeSystem/ech-11-maritalstatus",
                "code" : "2",
                "display" : "verheiratet"
              }
            },
            {
              "valueCoding" : {
                "system" : "http://fhir.ch/ig/ch-core/CodeSystem/ech-11-maritalstatus",
                "code" : "3",
                "display" : "verwitwet"
              }
            },
            {
              "valueCoding" : {
                "system" : "http://fhir.ch/ig/ch-core/CodeSystem/ech-11-maritalstatus",
                "code" : "4",
                "display" : "geschieden"
              }
            },
            {
              "valueCoding" : {
                "system" : "http://fhir.ch/ig/ch-core/CodeSystem/ech-11-maritalstatus",
                "code" : "5",
                "display" : "unverheiratet"
              }
            },
            {
              "valueCoding" : {
                "system" : "http://fhir.ch/ig/ch-core/CodeSystem/ech-11-maritalstatus",
                "code" : "6",
                "display" : "in eingetragener Partnerschaft"
              }
            },
            {
              "valueCoding" : {
                "system" : "http://fhir.ch/ig/ch-core/CodeSystem/ech-11-maritalstatus",
                "code" : "7",
                "display" : "aufgelöste Partnerschaft"
              }
            },
            {
              "valueCoding" : {
                "system" : "http://fhir.ch/ig/ch-core/CodeSystem/ech-11-maritalstatus",
                "code" : "9",
                "display" : "unbekannt"
              }
            }
          ]
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
              "valueExpression" : {
                "language" : "text/fhirpath",
                "expression" : "%patient.telecom.where(system='phone').value"
              }
            }
          ],
          "linkId" : "patient.phone",
          "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient#Patient.telecom.value",
          "text" : "Telefon",
          "type" : "string",
          "repeats" : true
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
              "valueExpression" : {
                "language" : "text/fhirpath",
                "expression" : "%patient.telecom.where(system='email').value"
              }
            }
          ],
          "linkId" : "patient.email",
          "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient#Patient.telecom.value",
          "text" : "E-Mail",
          "type" : "string"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
              "valueExpression" : {
                "language" : "text/fhirpath",
                "expression" : "%address.line"
              }
            }
          ],
          "linkId" : "patient.streetAddressLine",
          "text" : "Strasse, Hausnummer, Postfach etc.",
          "type" : "string",
          "repeats" : true
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
              "valueExpression" : {
                "language" : "text/fhirpath",
                "expression" : "%address.postalCode"
              }
            }
          ],
          "linkId" : "patient.postalCode",
          "text" : "PLZ",
          "type" : "string"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
              "valueExpression" : {
                "language" : "text/fhirpath",
                "expression" : "%address.city"
              }
            }
          ],
          "linkId" : "patient.city",
          "text" : "Ort",
          "type" : "string"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
              "valueExpression" : {
                "language" : "text/fhirpath",
                "expression" : "%address.country"
              }
            }
          ],
          "linkId" : "patient.country",
          "text" : "Land",
          "type" : "string"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
              "valueExpression" : {
                "language" : "text/fhirpath",
                "expression" : "%patient.communication.where(preferred=true).language.coding"
              }
            }
          ],
          "linkId" : "patient.languageOfCorrespondence",
          "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient#Patient.communication:languageOfCorrespondence",
          "text" : "Korrespondenzsprache",
          "type" : "choice",
          "answerValueSet" : "http://fhir.ch/ig/ch-term/ValueSet/DocumentEntry.languageCode"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/variable",
              "valueExpression" : {
                "name" : "contact",
                "language" : "text/fhirpath",
                "expression" : "%patient.contact"
              }
            }
          ],
          "linkId" : "patient.contactperson",
          "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient#Patient.contact",
          "text" : "Kontaktperson",
          "type" : "group",
          "repeats" : true,
          "item" : [
            {
              "extension" : [
                {
                  "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
                  "valueExpression" : {
                    "language" : "text/fhirpath",
                    "expression" : "%contact.relationship.text"
                  }
                }
              ],
              "linkId" : "patient.contactperson.relationship",
              "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient#Patient.contact.relationship.text",
              "text" : "Beziehung",
              "type" : "string"
            },
            {
              "extension" : [
                {
                  "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
                  "valueExpression" : {
                    "language" : "text/fhirpath",
                    "expression" : "%contact.name.family"
                  }
                }
              ],
              "linkId" : "patient.contactperson.familyName",
              "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient#Patient.contact.name.family",
              "text" : "Name",
              "type" : "string"
            },
            {
              "extension" : [
                {
                  "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
                  "valueExpression" : {
                    "language" : "text/fhirpath",
                    "expression" : "%contact.name.given"
                  }
                }
              ],
              "linkId" : "patient.contactperson.givenName",
              "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient#Patient.contact.name.given",
              "text" : "Vorname",
              "type" : "string"
            },
            {
              "extension" : [
                {
                  "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
                  "valueExpression" : {
                    "language" : "text/fhirpath",
                    "expression" : "%contact.telecom.where(system='phone').value"
                  }
                }
              ],
              "linkId" : "patient.contactperson.phone",
              "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient#Patient.contact.telecom.value",
              "text" : "Telefon",
              "type" : "string",
              "repeats" : true
            },
            {
              "extension" : [
                {
                  "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
                  "valueExpression" : {
                    "language" : "text/fhirpath",
                    "expression" : "%contact.telecom.where(system='email').value"
                  }
                }
              ],
              "linkId" : "patient.contactperson.email",
              "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient#Patient.contact.telecom.value",
              "text" : "E-Mail",
              "type" : "string"
            }
          ]
        },
        {
          "linkId" : "familydoctor",
          "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient#Patient.generalPractitioner",
          "text" : "Hausarzt",
          "type" : "group",
          "item" : [
            {
              "linkId" : "familydoctor.practitioner",
              "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole#PractitionerRole.practitioner",
              "text" : "Hausarzt Person",
              "type" : "group",
              "item" : [
                {
                  "linkId" : "familydoctor.practitioner.title",
                  "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner#Practitioner.name.prefix",
                  "text" : "Titel",
                  "type" : "string"
                },
                {
                  "linkId" : "familydoctor.practitioner.familyName",
                  "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner#Practitioner.name.family",
                  "text" : "Name",
                  "type" : "string"
                },
                {
                  "linkId" : "familydoctor.practitioner.givenName",
                  "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner#Practitioner.name.given",
                  "text" : "Vorname",
                  "type" : "string"
                },
                {
                  "linkId" : "familydoctor.practitioner.gln",
                  "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner#Practitioner.identifier:GLN.value",
                  "text" : "GLN",
                  "type" : "string"
                },
                {
                  "linkId" : "familydoctor.practitioner.zsr",
                  "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner#Practitioner.identifier:ZSR.value",
                  "text" : "ZSR",
                  "type" : "string"
                },
                {
                  "linkId" : "familydoctor.practitioner.phone",
                  "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner#Practitioner.telecom.value",
                  "text" : "Telefon",
                  "type" : "string"
                },
                {
                  "linkId" : "familydoctor.practitioner.email",
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
                    "expression" : "'familydoctor.organization.'"
                  }
                }
              ],
              "linkId" : "familydoctor.organization",
              "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole#PractitionerRole.organization",
              "text" : "Hausarzt Organisation",
              "type" : "group",
              "item" : [
                {
                  "linkId" : "familydoctor.organization.name",
                  "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization#Organization.name",
                  "text" : "Name der Organisation",
                  "type" : "string"
                },
                {
                  "linkId" : "familydoctor.organization.gln",
                  "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization#Organization.identifier:GLN",
                  "text" : "GLN",
                  "type" : "string"
                },
                {
                  "extension" : [
                    {
                      "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
                      "valueExpression" : {
                        "language" : "text/fhirpath",
                        "expression" : "%address.line"
                      }
                    }
                  ],
                  "linkId" : "familydoctor.organization.streetAddressLine",
                  "text" : "Strasse, Hausnummer, Postfach etc.",
                  "type" : "string",
                  "repeats" : true
                },
                {
                  "extension" : [
                    {
                      "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
                      "valueExpression" : {
                        "language" : "text/fhirpath",
                        "expression" : "%address.postalCode"
                      }
                    }
                  ],
                  "linkId" : "familydoctor.organization.postalCode",
                  "text" : "PLZ",
                  "type" : "string"
                },
                {
                  "extension" : [
                    {
                      "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
                      "valueExpression" : {
                        "language" : "text/fhirpath",
                        "expression" : "%address.city"
                      }
                    }
                  ],
                  "linkId" : "familydoctor.organization.city",
                  "text" : "Ort",
                  "type" : "string"
                },
                {
                  "extension" : [
                    {
                      "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
                      "valueExpression" : {
                        "language" : "text/fhirpath",
                        "expression" : "%address.country"
                      }
                    }
                  ],
                  "linkId" : "familydoctor.organization.country",
                  "text" : "Land",
                  "type" : "string"
                }
              ]
            }
          ]
        }
      ]
    },
    {
      "linkId" : "requestedEncounter",
      "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-servicerequest#extension:requestedEncounterDetails",
      "text" : "Patientenaufnahme",
      "type" : "group",
      "item" : [
        {
          "linkId" : "requestedEncounter.class",
          "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-encounter#Encounter.class",
          "text" : "Voraussichtlich: Ambulant / Stationär / Notfall",
          "type" : "choice",
          "answerOption" : [
            {
              "valueCoding" : {
                "system" : "http://terminology.hl7.org/CodeSystem/v3-ActCode",
                "code" : "AMB",
                "display" : "Ambulant"
              }
            },
            {
              "valueCoding" : {
                "system" : "http://terminology.hl7.org/CodeSystem/v3-ActCode",
                "code" : "IMP",
                "display" : "Stationär"
              }
            },
            {
              "valueCoding" : {
                "system" : "http://terminology.hl7.org/CodeSystem/v3-ActCode",
                "code" : "EMER",
                "display" : "Notfall"
              }
            }
          ]
        },
        {
          "linkId" : "requestedEncounter.desiredAccommodation",
          "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-encounter#Encounter.extension:desiredAccommodation",
          "text" : "Zimmerkategorie",
          "type" : "choice",
          "answerOption" : [
            {
              "valueCoding" : {
                "system" : "http://fhir.ch/ig/ch-core/CodeSystem/bfs-medstats-21-encountertype",
                "code" : "1",
                "display" : "allgemein"
              }
            },
            {
              "valueCoding" : {
                "system" : "http://fhir.ch/ig/ch-core/CodeSystem/bfs-medstats-21-encountertype",
                "code" : "2",
                "display" : "halbprivat"
              }
            },
            {
              "valueCoding" : {
                "system" : "http://fhir.ch/ig/ch-core/CodeSystem/bfs-medstats-21-encountertype",
                "code" : "3",
                "display" : "privat"
              }
            }
          ]
        }
      ]
    },
    {
      "linkId" : "coverage",
      "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-servicerequest#insurance",
      "text" : "Kostenträger",
      "type" : "group",
      "item" : [
        {
          "linkId" : "coverage.beneficiary",
          "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-coverage#Coverage.beneficiary",
          "text" : "Begünstigter (Patient)",
          "type" : "group",
          "item" : [
            {
              "linkId" : "coverage.beneficiary.ahvn13",
              "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient#Patient.identifier:AHVN13",
              "text" : "AHV-Nr. des Patienten",
              "type" : "string"
            }
          ]
        },
        {
          "linkId" : "coverage.kvg",
          "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-coverage#Coverage.type",
          "text" : "Krankenkasse (nach KVG)",
          "type" : "group",
          "item" : [
            {
              "linkId" : "coverage.kvg.name",
              "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-coverage#Coverage.payor",
              "text" : "Name der Versicherung",
              "type" : "string"
            },
            {
              "linkId" : "coverage.kvg.insuranceCardNumber",
              "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-coverage#Coverage.identifier",
              "text" : "Kennnummer der Versichertenkarte",
              "type" : "string"
            }
          ]
        },
        {
          "linkId" : "coverage.uvg",
          "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-coverage#Coverage.type",
          "text" : "Unfallversicherung (nach UVG)",
          "type" : "group",
          "item" : [
            {
              "linkId" : "coverage.uvg.name",
              "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-coverage#Coverage.payor",
              "text" : "Name der Versicherung",
              "type" : "string"
            },
            {
              "linkId" : "coverage.uvg.claimNumber",
              "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-coverage#Coverage.identifier",
              "text" : "Schadennummer",
              "type" : "string"
            }
          ]
        },
        {
          "linkId" : "coverage.vvg",
          "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-coverage#Coverage.type",
          "text" : "Zusatzversicherung (nach VVG)",
          "type" : "group",
          "item" : [
            {
              "linkId" : "coverage.vvg.name",
              "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-coverage#Coverage.payor",
              "text" : "Name der Versicherung",
              "type" : "string"
            },
            {
              "linkId" : "coverage.vvg.insuranceCardNumber",
              "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-coverage#Coverage.identifier",
              "text" : "Kennnummer der Versichertenkarte",
              "type" : "string"
            }
          ]
        },
        {
          "linkId" : "coverage.iv",
          "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-coverage#Coverage.type",
          "text" : "Invalidenversicherung (IV)",
          "type" : "group",
          "item" : [
            {
              "linkId" : "coverage.iv.verfuegungsnummer",
              "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-coverage#Coverage.identifier",
              "text" : "IV-Verfügungsnummer",
              "type" : "string"
            }
          ]
        },
        {
          "linkId" : "coverage.mv",
          "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-coverage#Coverage.type",
          "text" : "Militärversicherung (MV)",
          "type" : "group",
          "item" : [
            {
              "linkId" : "coverage.mv.versichertennummer",
              "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-coverage#Coverage.identifier",
              "text" : "MV-Versichertennummer",
              "type" : "string"
            }
          ]
        },
        {
          "linkId" : "coverage.self",
          "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-coverage#Coverage.type",
          "text" : "Selbstzahler",
          "type" : "group",
          "item" : [
            {
              "linkId" : "coverage.self.patient",
              "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-coverage#Coverage.payor",
              "text" : "Patient selbst",
              "type" : "boolean"
            },
            {
              "linkId" : "coverage.self.patientRelatedPerson",
              "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-coverage#Coverage.payor",
              "text" : "Andere Person",
              "type" : "boolean",
              "enableWhen" : [
                {
                  "question" : "coverage.self.patient",
                  "operator" : "=",
                  "answerBoolean" : false
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
                    "expression" : "'coverage.self.relatedPerson.'"
                  }
                }
              ],
              "linkId" : "coverage.self.relatedPerson",
              "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-coverage#Coverage.payor",
              "text" : "Andere Person",
              "type" : "group",
              "enableWhen" : [
                {
                  "question" : "coverage.self.patientRelatedPerson",
                  "operator" : "=",
                  "answerBoolean" : true
                }
              ],
              "item" : [
                {
                  "linkId" : "coverage.self.relatedPerson.familyName",
                  "definition" : "http://hl7.org/fhir/StructureDefinition/RelatedPerson#RelatedPerson.name.family",
                  "text" : "Name",
                  "type" : "string"
                },
                {
                  "linkId" : "coverage.self.relatedPerson.givenName",
                  "definition" : "http://hl7.org/fhir/StructureDefinition/RelatedPerson#RelatedPerson.name.given",
                  "text" : "Vorname",
                  "type" : "string"
                },
                {
                  "linkId" : "coverage.self.relatedPerson.phone",
                  "definition" : "http://hl7.org/fhir/StructureDefinition/RelatedPerson#RelatedPerson.telecom.value",
                  "text" : "Telefon",
                  "type" : "string",
                  "repeats" : true
                },
                {
                  "linkId" : "coverage.self.relatedPerson.email",
                  "definition" : "http://hl7.org/fhir/StructureDefinition/RelatedPerson#RelatedPerson.telecom.value",
                  "text" : "E-Mail",
                  "type" : "string"
                },
                {
                  "extension" : [
                    {
                      "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
                      "valueExpression" : {
                        "language" : "text/fhirpath",
                        "expression" : "%address.line"
                      }
                    }
                  ],
                  "linkId" : "coverage.self.relatedPerson.streetAddressLine",
                  "text" : "Strasse, Hausnummer, Postfach etc.",
                  "type" : "string",
                  "repeats" : true
                },
                {
                  "extension" : [
                    {
                      "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
                      "valueExpression" : {
                        "language" : "text/fhirpath",
                        "expression" : "%address.postalCode"
                      }
                    }
                  ],
                  "linkId" : "coverage.self.relatedPerson.postalCode",
                  "text" : "PLZ",
                  "type" : "string"
                },
                {
                  "extension" : [
                    {
                      "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
                      "valueExpression" : {
                        "language" : "text/fhirpath",
                        "expression" : "%address.city"
                      }
                    }
                  ],
                  "linkId" : "coverage.self.relatedPerson.city",
                  "text" : "Ort",
                  "type" : "string"
                },
                {
                  "extension" : [
                    {
                      "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
                      "valueExpression" : {
                        "language" : "text/fhirpath",
                        "expression" : "%address.country"
                      }
                    }
                  ],
                  "linkId" : "coverage.self.relatedPerson.country",
                  "text" : "Land",
                  "type" : "string"
                }
              ]
            }
          ]
        },
        {
          "linkId" : "coverage.other",
          "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-coverage#Coverage.type",
          "text" : "Anderer Kostenträger",
          "type" : "group",
          "item" : [
            {
              "linkId" : "coverage.other.name",
              "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-coverage#Coverage.payor",
              "text" : "Name des Kostenträgers",
              "type" : "string"
            },
            {
              "linkId" : "coverage.other.id",
              "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-coverage#Coverage.identifier",
              "text" : "Beliebige ID",
              "type" : "string"
            },
            {
              "linkId" : "coverage.other.id.note",
              "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-coverage#Coverage.identifier.type.text",
              "text" : "Bemerkung zur ID",
              "type" : "string"
            }
          ]
        }
      ]
    },
    {
      "linkId" : "sender",
      "text" : "Absender",
      "type" : "group",
      "required" : true,
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
                  "text" : "ZSR",
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
                      "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
                      "valueExpression" : {
                        "language" : "text/fhirpath",
                        "expression" : "%address.line"
                      }
                    }
                  ],
                  "linkId" : "sender.author.organization.streetAddressLine",
                  "text" : "Strasse, Hausnummer, Postfach etc.",
                  "type" : "string",
                  "repeats" : true
                },
                {
                  "extension" : [
                    {
                      "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
                      "valueExpression" : {
                        "language" : "text/fhirpath",
                        "expression" : "%address.postalCode"
                      }
                    }
                  ],
                  "linkId" : "sender.author.organization.postalCode",
                  "text" : "PLZ",
                  "type" : "string"
                },
                {
                  "extension" : [
                    {
                      "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
                      "valueExpression" : {
                        "language" : "text/fhirpath",
                        "expression" : "%address.city"
                      }
                    }
                  ],
                  "linkId" : "sender.author.organization.city",
                  "text" : "Ort",
                  "type" : "string"
                },
                {
                  "extension" : [
                    {
                      "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
                      "valueExpression" : {
                        "language" : "text/fhirpath",
                        "expression" : "%address.country"
                      }
                    }
                  ],
                  "linkId" : "sender.author.organization.country",
                  "text" : "Land",
                  "type" : "string"
                }
              ]
            }
          ]
        },
        {
          "linkId" : "sender.dataenterer",
          "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-composition#Composition.extension:dataEnterer",
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
                  "linkId" : "sender.dataenterer.practitioner.title",
                  "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner#Practitioner.name.prefix",
                  "text" : "Titel",
                  "type" : "string"
                },
                {
                  "linkId" : "sender.dataenterer.practitioner.familyName",
                  "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner#Practitioner.name.family",
                  "text" : "Name",
                  "type" : "string"
                },
                {
                  "linkId" : "sender.dataenterer.practitioner.givenName",
                  "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner#Practitioner.name.given",
                  "text" : "Vorname",
                  "type" : "string"
                },
                {
                  "linkId" : "sender.dataenterer.practitioner.phone",
                  "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner#Practitioner.telecom.value",
                  "text" : "Telefon",
                  "type" : "string"
                },
                {
                  "linkId" : "sender.dataenterer.practitioner.email",
                  "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner#Practitioner.telecom.value",
                  "text" : "E-Mail",
                  "type" : "string"
                }
              ]
            }
          ]
        }
      ]
    },
    {
      "linkId" : "receiverCopy",
      "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-composition#Composition.extension:copyReceiver",
      "text" : "Kopieempfänger (Kopie dieses Auftrags und aller daraus resultierenden Resultate)",
      "type" : "group",
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
                  "linkId" : "receiverCopy.practitionerRole.practitioner.title",
                  "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner#Practitioner.name.prefix",
                  "text" : "Titel",
                  "type" : "string"
                },
                {
                  "linkId" : "receiverCopy.practitionerRole.practitioner.familyName",
                  "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner#Practitioner.name.family",
                  "text" : "Name",
                  "type" : "string"
                },
                {
                  "linkId" : "receiverCopy.practitionerRole.practitioner.givenName",
                  "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner#Practitioner.name.given",
                  "text" : "Vorname",
                  "type" : "string"
                },
                {
                  "linkId" : "receiverCopy.practitionerRole.practitioner.phone",
                  "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner#Practitioner.telecom.value",
                  "text" : "Telefon",
                  "type" : "string"
                },
                {
                  "linkId" : "receiverCopy.practitionerRole.practitioner.email",
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
                      "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
                      "valueExpression" : {
                        "language" : "text/fhirpath",
                        "expression" : "%address.line"
                      }
                    }
                  ],
                  "linkId" : "receiverCopy.practitionerRole.organization.streetAddressLine",
                  "text" : "Strasse, Hausnummer, Postfach etc.",
                  "type" : "string",
                  "repeats" : true
                },
                {
                  "extension" : [
                    {
                      "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
                      "valueExpression" : {
                        "language" : "text/fhirpath",
                        "expression" : "%address.postalCode"
                      }
                    }
                  ],
                  "linkId" : "receiverCopy.practitionerRole.organization.postalCode",
                  "text" : "PLZ",
                  "type" : "string"
                },
                {
                  "extension" : [
                    {
                      "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
                      "valueExpression" : {
                        "language" : "text/fhirpath",
                        "expression" : "%address.city"
                      }
                    }
                  ],
                  "linkId" : "receiverCopy.practitionerRole.organization.city",
                  "text" : "Ort",
                  "type" : "string"
                },
                {
                  "extension" : [
                    {
                      "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
                      "valueExpression" : {
                        "language" : "text/fhirpath",
                        "expression" : "%address.country"
                      }
                    }
                  ],
                  "linkId" : "receiverCopy.practitionerRole.organization.country",
                  "text" : "Land",
                  "type" : "string"
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
                  "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
                  "valueExpression" : {
                    "language" : "text/fhirpath",
                    "expression" : "%address.line"
                  }
                }
              ],
              "linkId" : "receiverCopy.relatedPerson.streetAddressLine",
              "text" : "Strasse, Hausnummer, Postfach etc.",
              "type" : "string",
              "repeats" : true
            },
            {
              "extension" : [
                {
                  "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
                  "valueExpression" : {
                    "language" : "text/fhirpath",
                    "expression" : "%address.postalCode"
                  }
                }
              ],
              "linkId" : "receiverCopy.relatedPerson.postalCode",
              "text" : "PLZ",
              "type" : "string"
            },
            {
              "extension" : [
                {
                  "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
                  "valueExpression" : {
                    "language" : "text/fhirpath",
                    "expression" : "%address.city"
                  }
                }
              ],
              "linkId" : "receiverCopy.relatedPerson.city",
              "text" : "Ort",
              "type" : "string"
            },
            {
              "extension" : [
                {
                  "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
                  "valueExpression" : {
                    "language" : "text/fhirpath",
                    "expression" : "%address.country"
                  }
                }
              ],
              "linkId" : "receiverCopy.relatedPerson.country",
              "text" : "Land",
              "type" : "string"
            }
          ]
        }
      ]
    },
    {
      "linkId" : "antecedentEpisodeOfCare",
      "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-composition#Composition.extension:antecedentEpisodeOfCare",
      "text" : "Vorgängiger Aufenthalt in Spital / Heim",
      "type" : "group",
      "item" : [
        {
          "linkId" : "antecedentEpisodeOfCare.start",
          "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-episodeofcare#EpisodeOfCare.Period.end",
          "text" : "Von",
          "type" : "dateTime"
        },
        {
          "linkId" : "antecedentEpisodeOfCare.end",
          "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-episodeofcare#EpisodeOfCare.Period.end",
          "text" : "Bis",
          "type" : "dateTime"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/variable",
              "valueExpression" : {
                "name" : "linkIdPrefix",
                "language" : "text/fhirpath",
                "expression" : "'antecedentEpisodeOfCare.organization.'"
              }
            }
          ],
          "linkId" : "antecedentEpisodeOfCare.organization",
          "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-episodeofcare#EpisodeOfCare.Period.organization",
          "text" : "Spital /Heim",
          "type" : "group",
          "item" : [
            {
              "linkId" : "antecedentEpisodeOfCare.organization.name",
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
                    "expression" : "%address.line"
                  }
                }
              ],
              "linkId" : "antecedentEpisodeOfCare.organization.streetAddressLine",
              "text" : "Strasse, Hausnummer, Postfach etc.",
              "type" : "string",
              "repeats" : true
            },
            {
              "extension" : [
                {
                  "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
                  "valueExpression" : {
                    "language" : "text/fhirpath",
                    "expression" : "%address.postalCode"
                  }
                }
              ],
              "linkId" : "antecedentEpisodeOfCare.organization.postalCode",
              "text" : "PLZ",
              "type" : "string"
            },
            {
              "extension" : [
                {
                  "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
                  "valueExpression" : {
                    "language" : "text/fhirpath",
                    "expression" : "%address.city"
                  }
                }
              ],
              "linkId" : "antecedentEpisodeOfCare.organization.city",
              "text" : "Ort",
              "type" : "string"
            },
            {
              "extension" : [
                {
                  "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
                  "valueExpression" : {
                    "language" : "text/fhirpath",
                    "expression" : "%address.country"
                  }
                }
              ],
              "linkId" : "antecedentEpisodeOfCare.organization.country",
              "text" : "Land",
              "type" : "string"
            }
          ]
        }
      ]
    },
    {
      "linkId" : "appointment",
      "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-servicerequest#extension:locationAndTime",
      "text" : "Ort und Zeit",
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
                "expression" : "'appointment.location.'"
              }
            }
          ],
          "linkId" : "appointment.location",
          "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-appointment#Appointment.participant.actor",
          "text" : "Ort der Durchführung",
          "type" : "group",
          "item" : [
            {
              "linkId" : "appointment.location.name",
              "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-location#Location.name",
              "text" : "Name",
              "type" : "string",
              "required" : true
            },
            {
              "linkId" : "appointment.location.phone",
              "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-location#Location.telecom",
              "text" : "Telefon",
              "type" : "string"
            },
            {
              "linkId" : "appointment.location.email",
              "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-location#Location.telecom",
              "text" : "E-Mail",
              "type" : "string"
            },
            {
              "extension" : [
                {
                  "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
                  "valueExpression" : {
                    "language" : "text/fhirpath",
                    "expression" : "%address.line"
                  }
                }
              ],
              "linkId" : "appointment.location.streetAddressLine",
              "text" : "Strasse, Hausnummer, Postfach etc.",
              "type" : "string",
              "repeats" : true
            },
            {
              "extension" : [
                {
                  "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
                  "valueExpression" : {
                    "language" : "text/fhirpath",
                    "expression" : "%address.postalCode"
                  }
                }
              ],
              "linkId" : "appointment.location.postalCode",
              "text" : "PLZ",
              "type" : "string"
            },
            {
              "extension" : [
                {
                  "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
                  "valueExpression" : {
                    "language" : "text/fhirpath",
                    "expression" : "%address.city"
                  }
                }
              ],
              "linkId" : "appointment.location.city",
              "text" : "Ort",
              "type" : "string"
            },
            {
              "extension" : [
                {
                  "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
                  "valueExpression" : {
                    "language" : "text/fhirpath",
                    "expression" : "%address.country"
                  }
                }
              ],
              "linkId" : "appointment.location.country",
              "text" : "Land",
              "type" : "string"
            }
          ]
        },
        {
          "linkId" : "appointment.requestedPeriod",
          "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-appointment#Appointment.requestedPeriod",
          "text" : "Datum und Zeit, wann der Termin bevorzugt geplant werden soll",
          "type" : "group",
          "item" : [
            {
              "linkId" : "appointment.requestedPeriod.start",
              "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-appointment#Appointment.requestedPeriod.start",
              "text" : "Von",
              "type" : "dateTime"
            },
            {
              "linkId" : "appointment.requestedPeriod.end",
              "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-appointment#Appointment.requestedPeriod.end",
              "text" : "Bis",
              "type" : "dateTime"
            }
          ]
        },
        {
          "linkId" : "appointment.status",
          "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-appointment#Appointment.status",
          "text" : "Status",
          "type" : "choice",
          "required" : true,
          "answerOption" : [
            {
              "valueCoding" : {
                "system" : "http://hl7.org/fhir/appointmentstatus",
                "code" : "proposed",
                "display" : "Wunsch des Patienten (vorgeschlagen)"
              },
              "initialSelected" : true
            },
            {
              "valueCoding" : {
                "system" : "http://hl7.org/fhir/appointmentstatus",
                "code" : "pending",
                "display" : "Vom Patienten bestätigt, aber vom Leistungserbringer noch nicht (ausstehend)"
              }
            },
            {
              "valueCoding" : {
                "system" : "http://hl7.org/fhir/appointmentstatus",
                "code" : "booked",
                "display" : "Vom Patienten und Leistungserbringer bestätigt (gebucht)"
              }
            }
          ]
        },
        {
          "linkId" : "appointment.patientInstruction",
          "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-appointment#Appointment.patientInstruction",
          "text" : "Patienteninformation für diesen Termin",
          "type" : "string"
        }
      ]
    },
    {
      "linkId" : "consent",
      "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-composition#Composition.extension:patientConsent",
      "text" : "Einverständniserklärung",
      "type" : "group",
      "item" : [
        {
          "linkId" : "patient.consent.statement",
          "text" : "Ist der Patient über die Anmeldung informiert und explizit einverstanden?",
          "type" : "choice",
          "answerOption" : [
            {
              "valueCoding" : {
                "system" : "http://fhir.ch/ig/ch-orf/CodeSystem/ch-orf-cs-consentstatus",
                "code" : "ExplicitAgreement",
                "display" : "Patient is informed and has explicitly agreed"
              }
            },
            {
              "valueCoding" : {
                "system" : "http://fhir.ch/ig/ch-orf/CodeSystem/ch-orf-cs-consentstatus",
                "code" : "Other",
                "display" : "Other situation such as 'implicit agreement', 'agreed by legal guardian' etc."
              }
            }
          ],
          "item" : [
            {
              "linkId" : "patient.consent.statement.note",
              "text" : "Anmerkung",
              "type" : "string"
            }
          ]
        }
      ]
    },
    {
      "linkId" : "medicalInformation",
      "type" : "group",
      "item" : [
        {
          "linkId" : "requestedService",
          "text" : "Angeforderte Leistung",
          "type" : "group",
          "required" : true,
          "item" : [
            {
              "linkId" : "requestedService.service",
              "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-servicerequest-definitions#ServiceRequest.category",
              "text" : "Leistung",
              "type" : "choice",
              "required" : true,
              "answerValueSet" : "http://fhir.ch/ig/ch-rad-order/ValueSet/ch-rad-order-requested-service"
            }
          ]
        },
        {
          "linkId" : "reason",
          "text" : "Klinische Fragestellung",
          "type" : "group",
          "item" : [
            {
              "linkId" : "reason.question",
              "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-servicerequest-definitions#ServiceRequest.reasonCode",
              "text" : "Fragestellung",
              "type" : "string",
              "repeats" : true
            }
          ]
        },
        {
          "linkId" : "imagingService",
          "text" : "Bildgebendes Verfahren",
          "type" : "group",
          "item" : [
            {
              "linkId" : "imagingService.type",
              "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-servicerequest-definitions#ServiceRequest.code",
              "text" : "Art",
              "type" : "choice",
              "answerValueSet" : "http://fhir.ch/ig/ch-rad-order/ValueSet/ch-rad-order-modality-type"
            }
          ]
        },
        {
          "linkId" : "orderDetail",
          "text" : "Weitere Angaben zur Bildgebung",
          "type" : "group",
          "item" : [
            {
              "linkId" : "orderDetail.imagingRegion",
              "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-servicerequestServiceRequest.orderDetail:imagingRegion",
              "text" : "Region",
              "type" : "choice",
              "repeats" : true,
              "answerValueSet" : "http://fhir.ch/ig/ch-rad-order/ValueSet/ch-rad-order-imaging-region"
            },
            {
              "linkId" : "orderDetail.imagingFocus",
              "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-servicerequest-definitions#ServiceRequest.bodySite",
              "text" : "Fokus",
              "type" : "choice",
              "repeats" : true,
              "answerValueSet" : "http://fhir.ch/ig/ch-rad-order/ValueSet/ch-rad-order-imaging-focus"
            },
            {
              "linkId" : "orderDetail.laterality",
              "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-servicerequest-definitions.html#ServiceRequest.orderDetail:laterality",
              "text" : "Seitenangabe",
              "type" : "choice",
              "answerValueSet" : "http://fhir.ch/ig/ch-rad-order/ValueSet/ch-rad-order-laterality"
            },
            {
              "linkId" : "orderDetail.viewType",
              "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-servicerequest-definitions#orderDetail:viewType",
              "text" : "Ansicht",
              "type" : "choice",
              "repeats" : true,
              "answerValueSet" : "http://fhir.ch/ig/ch-rad-order/ValueSet/ch-rad-order-view-type"
            },
            {
              "linkId" : "orderDetail.maneuverType",
              "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-servicerequest-definitions#orderDetail:maneuverType",
              "text" : "Manöver",
              "type" : "choice",
              "repeats" : true,
              "answerValueSet" : "http://fhir.ch/ig/ch-rad-order/ValueSet/ch-rad-order-maneuver-type"
            },
            {
              "linkId" : "orderDetail.guidanceForAction",
              "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-servicerequest-definitions#orderDetail:guidanceForAction",
              "text" : "Handlungsanleitung",
              "type" : "choice",
              "enableWhen" : [
                {
                  "question" : "requestedService.service",
                  "operator" : "=",
                  "answerCoding" : {
                    "system" : "http://fhir.ch/ig/ch-rad-order/CodeSystem/ch-rad-order-requested-service",
                    "code" : "RadIntervention"
                  }
                },
                {
                  "question" : "requestedService.service",
                  "operator" : "=",
                  "answerCoding" : {
                    "system" : "http://fhir.ch/ig/ch-rad-order/CodeSystem/ch-rad-order-requested-service",
                    "code" : "ImagingRequestWithIntervention"
                  }
                }
              ],
              "enableBehavior" : "any",
              "repeats" : true,
              "answerValueSet" : "http://fhir.ch/ig/ch-rad-order/ValueSet/ch-rad-order-guidance-for-action"
            }
          ]
        },
        {
          "linkId" : "desiredRadiologist",
          "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-servicerequest-definitions#performer",
          "text" : "Gewünschter Radiologe für die Befundung / für die Intervention",
          "type" : "group",
          "item" : [
            {
              "linkId" : "desiredRadiologist.familyName",
              "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner#Practitioner.name.family",
              "text" : "Name",
              "type" : "string"
            },
            {
              "linkId" : "desiredRadiologist.givenName",
              "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner#Practitioner.name.given",
              "text" : "Vorname",
              "type" : "string"
            }
          ]
        }
      ]
    },
    {
      "linkId" : "diagnosis",
      "type" : "group",
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
    },
    {
      "linkId" : "caveats",
      "type" : "group",
      "item" : [
        {
          "linkId" : "caveatList",
          "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-servicerequest-definitions#ServiceRequest.supportingInfo:caveats",
          "text" : "Caveats",
          "type" : "group",
          "item" : [
            {
              "linkId" : "caveatList.bloodCoagulation",
              "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-caveat-condition-definitions#Condition.category.coding.code",
              "text" : "Beinträchtigte Blutgerinnung",
              "type" : "choice",
              "required" : true,
              "answerValueSet" : "http://fhir.ch/ig/ch-rad-order/ValueSet/ch-rad-order-caveat-qualifier-value",
              "initial" : [
                {
                  "valueCoding" : {
                    "system" : "http://snomed.info/sct",
                    "code" : "373068000"
                  }
                }
              ],
              "item" : [
                {
                  "linkId" : "caveatList.bloodCoagulation.INR",
                  "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-caveat-condition-definitions#Condition.evidence.detail",
                  "text" : "INR",
                  "type" : "group",
                  "enableWhen" : [
                    {
                      "question" : "caveatList.bloodCoagulation",
                      "operator" : "=",
                      "answerCoding" : {
                        "system" : "http://snomed.info/sct",
                        "code" : "52101004"
                      }
                    }
                  ],
                  "item" : [
                    {
                      "linkId" : "caveatList.bloodCoagulation.INR.quantity",
                      "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-INR-observation-definitions#Observation.valueQuantity",
                      "text" : "Wert (INR)",
                      "type" : "quantity"
                    },
                    {
                      "linkId" : "caveatList.bloodCoagulation.INR.dateTime",
                      "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-INR-observation-definitions#Observation.effectiveDateTime",
                      "text" : "Zeitpunkt der Bestimmung",
                      "type" : "dateTime"
                    }
                  ]
                },
                {
                  "linkId" : "caveatList.bloodCoagulation.platelets",
                  "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-caveat-condition-definitions#Condition.evidence.detail",
                  "text" : "Thrombozyten",
                  "type" : "group",
                  "item" : [
                    {
                      "linkId" : "caveatList.bloodCoagulation.platelets.quantity",
                      "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-platelets-observation-definitions#Observation.valueQuantity",
                      "text" : "Wert (10^9/L)",
                      "type" : "quantity"
                    },
                    {
                      "linkId" : "caveatList.bloodCoagulation.platelets.dateTime",
                      "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-platelets-observation-definitions#Observation.effectiveDateTime",
                      "text" : "Zeitpunkt der Bestimmung",
                      "type" : "dateTime"
                    }
                  ]
                }
              ]
            },
            {
              "linkId" : "caveatList.renalInsufficiency",
              "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-caveat-condition-definitions#Condition.code",
              "text" : "Niereninsuffizienz",
              "type" : "choice",
              "required" : true,
              "answerValueSet" : "http://fhir.ch/ig/ch-rad-order/ValueSet/ch-rad-order-caveat-qualifier-value",
              "initial" : [
                {
                  "valueCoding" : {
                    "system" : "http://snomed.info/sct",
                    "code" : "373068000"
                  }
                }
              ],
              "item" : [
                {
                  "linkId" : "caveatList.renalInsufficiency.creatinineClearance",
                  "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-caveat-condition-definitions#Condition.evidence.detail",
                  "text" : "Creatinin-Clearance",
                  "type" : "group",
                  "item" : [
                    {
                      "linkId" : "caveatList.renalInsufficiency.creatinineClearance.quantity",
                      "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-creatinineclearance-observation-definitions#Observation.valueQuantity",
                      "text" : "Wert (mL/min)",
                      "type" : "quantity"
                    },
                    {
                      "linkId" : "caveatList.renalInsufficiency.creatinineClearance.dateTime",
                      "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-creatinineclearance-observation-definitions#Observation.effectiveDateTime",
                      "text" : "Zeitpunkt der Bestimmung",
                      "type" : "dateTime"
                    }
                  ]
                },
                {
                  "linkId" : "caveatList.renalInsufficiency.creatinine",
                  "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-caveat-condition-definitions#Condition.evidence.detail",
                  "text" : "Creatinin",
                  "type" : "group",
                  "item" : [
                    {
                      "linkId" : "caveatList.renalInsufficiency.creatinine.quantity",
                      "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-creatinine-observation-definitions#Observation.valueQuantity",
                      "text" : "Wert (µmol/L)",
                      "type" : "quantity"
                    },
                    {
                      "linkId" : "caveatList.renalInsufficiency.creatinine.dateTime",
                      "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-creatinine-observation-definitions#Observation.effectiveDateTime",
                      "text" : "Zeitpunkt der Bestimmung",
                      "type" : "dateTime"
                    }
                  ]
                }
              ]
            },
            {
              "linkId" : "caveatList.claustrophobia",
              "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-caveat-condition-definitions#Condition.code",
              "text" : "Klaustrophobie",
              "type" : "choice",
              "required" : true,
              "answerValueSet" : "http://fhir.ch/ig/ch-rad-order/ValueSet/ch-rad-order-caveat-qualifier-value",
              "initial" : [
                {
                  "valueCoding" : {
                    "system" : "http://snomed.info/sct",
                    "code" : "373068000"
                  }
                }
              ]
            },
            {
              "linkId" : "caveatList.bodyPiercing",
              "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-caveat-condition-definitions#Condition.code",
              "text" : "Körperpiercing",
              "type" : "choice",
              "required" : true,
              "answerValueSet" : "http://fhir.ch/ig/ch-rad-order/ValueSet/ch-rad-order-caveat-qualifier-value",
              "initial" : [
                {
                  "valueCoding" : {
                    "system" : "http://snomed.info/sct",
                    "code" : "373068000"
                  }
                }
              ]
            },
            {
              "linkId" : "caveatList.device",
              "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-caveat-condition-definitions#ch-rad-order-caveat-type",
              "text" : "Device (Herzschrittmacher, Herzklappenersatz, Insulinpumpe etc.)",
              "type" : "choice",
              "repeats" : true,
              "answerValueSet" : "http://fhir.ch/ig/ch-rad-order/ValueSet/ch-rad-order-caveat-device"
            },
            {
              "linkId" : "caveatList.hyperthyroidism",
              "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-caveat-condition-definitions#Condition.code",
              "text" : "Hyperthyreose",
              "type" : "choice",
              "required" : true,
              "answerValueSet" : "http://fhir.ch/ig/ch-rad-order/ValueSet/ch-rad-order-caveat-qualifier-value",
              "initial" : [
                {
                  "valueCoding" : {
                    "system" : "http://snomed.info/sct",
                    "code" : "373068000"
                  }
                }
              ]
            },
            {
              "linkId" : "caveatList.diabetes",
              "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-caveat-condition-definitions#Condition.code",
              "text" : "Diabetes mellitus",
              "type" : "choice",
              "required" : true,
              "answerValueSet" : "http://fhir.ch/ig/ch-rad-order/ValueSet/ch-rad-order-caveat-qualifier-value",
              "initial" : [
                {
                  "valueCoding" : {
                    "system" : "http://snomed.info/sct",
                    "code" : "373068000"
                  }
                }
              ]
            },
            {
              "linkId" : "caveatList.gravida",
              "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-caveat-condition-definitions#Condition.code",
              "text" : "Schwangerschaft",
              "type" : "choice",
              "required" : true,
              "answerValueSet" : "http://fhir.ch/ig/ch-rad-order/ValueSet/ch-rad-order-caveat-qualifier-value",
              "initial" : [
                {
                  "valueCoding" : {
                    "system" : "http://snomed.info/sct",
                    "code" : "373068000"
                  }
                }
              ]
            },
            {
              "linkId" : "caveatList.contrastMediaAllergy",
              "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-caveat-condition-definitions#Condition.code",
              "text" : "Kontrastmittelallergie",
              "type" : "choice",
              "required" : true,
              "answerValueSet" : "http://fhir.ch/ig/ch-rad-order/ValueSet/ch-rad-order-caveat-qualifier-value",
              "initial" : [
                {
                  "valueCoding" : {
                    "system" : "http://snomed.info/sct",
                    "code" : "373068000"
                  }
                }
              ]
            },
            {
              "linkId" : "caveatList.drugPrescription",
              "text" : "Relevante Medikamente",
              "type" : "group",
              "required" : true,
              "item" : [
                {
                  "linkId" : "caveatList.drugPrescription.metformin",
                  "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-caveat-condition-definitions#Condition.code",
                  "text" : "Metformin",
                  "type" : "choice",
                  "required" : true,
                  "answerValueSet" : "http://fhir.ch/ig/ch-rad-order/ValueSet/ch-rad-order-caveat-qualifier-value",
                  "initial" : [
                    {
                      "valueCoding" : {
                        "system" : "http://snomed.info/sct",
                        "code" : "373068000"
                      }
                    }
                  ]
                },
                {
                  "linkId" : "caveatList.drugPrescription.betaBlocker",
                  "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-caveat-condition-definitions#Condition.code",
                  "text" : "Betablocker",
                  "type" : "choice",
                  "required" : true,
                  "answerValueSet" : "http://fhir.ch/ig/ch-rad-order/ValueSet/ch-rad-order-caveat-qualifier-value",
                  "initial" : [
                    {
                      "valueCoding" : {
                        "system" : "http://snomed.info/sct",
                        "code" : "373068000"
                      }
                    }
                  ]
                }
              ]
            }
          ]
        }
      ]
    },
    {
      "linkId" : "previousResults",
      "text" : "Vorherige Untersuchungsresultate",
      "type" : "group",
      "item" : [
        {
          "linkId" : "attachedFile",
          "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-documentreference#DocumentReference.content.attachment.data",
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
        },
        {
          "linkId" : "dicomObject",
          "text" : "DICOM Objekt",
          "type" : "group",
          "repeats" : true,
          "item" : [
            {
              "linkId" : "dicomObject.sopInstanceUid",
              "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-imagingstudy-definitions#ImagingStudy.series.instance.uid",
              "text" : "DICOM SOP Instance UID",
              "type" : "string",
              "required" : true
            },
            {
              "linkId" : "dicomObject.sopClass",
              "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-imagingstudy-definitions#ImagingStudy.series.instance.sopClass.value",
              "text" : "DICOM SOP Class",
              "type" : "choice",
              "required" : true,
              "answerValueSet" : "https://dicom.nema.org/medical/dicom/current/output/chtml/part04/sect_B.5.html#table_B.5-1"
            },
            {
              "linkId" : "dicomObject.modality",
              "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-imagingstudy-definitions#.ImagingStudy.series.modality.coding",
              "text" : "DICOM Series Modality",
              "type" : "choice",
              "required" : true,
              "answerValueSet" : "https://dicom.nema.org/medical/dicom/current/output/chtml/part16/sect_CID_33.html"
            },
            {
              "linkId" : "dicomObject.SeriesInstanceUid",
              "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-imagingstudy-definitions#ImagingStudy.series.uid",
              "text" : "DICOM Series Instance UID",
              "type" : "string",
              "required" : true
            },
            {
              "linkId" : "dicomObject.studyInstanceUid",
              "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-imagingstudy-definitions#ImagingStudy.identifier",
              "text" : "DICOM Study Instance UID",
              "type" : "string",
              "required" : true
            },
            {
              "linkId" : "dicomObject.acsn",
              "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-imagingstudy-definitions#ImagingStudy.identifier",
              "text" : "ACSN",
              "type" : "string"
            }
          ]
        }
      ]
    },
    {
      "linkId" : "note",
      "text" : "Bemerkungen",
      "type" : "group",
      "item" : [
        {
          "linkId" : "note.text",
          "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-servicerequest-definitions#ServiceRequest.note.text",
          "text" : "Kommentar",
          "type" : "string"
        }
      ]
    }
  ]
}

```
