# CH LAB-Order Form example - CH LAB-Order (R4) v3.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH LAB-Order Form example**

## Questionnaire: CH LAB-Order Form example 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-lab-order/Questionnaire/LabOrder-form | *Version*:3.0.0 |
| Active as of 2022-10-10 | *Computable Name*:LabOrderFormCaseStudies |
| **Copyright/Legal**: CC0-1.0 | |



## Resource Content

```json
{
  "resourceType" : "Questionnaire",
  "id" : "LabOrder-form",
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
      "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-targetStructureMap",
      "valueCanonical" : "http://fhir.ch/ig/ch-orf/StructureMap/OrfQrToBundle"
    },
    {
      "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-sourceStructureMap",
      "valueCanonical" : "http://fhir.ch/ig/ch-orf/StructureMap/OrfQrToBundle"
    },
    {
      "extension" : [
        {
          "url" : "name",
          "valueCoding" : {
            "system" : "http://hl7.org/fhir/uv/sdc/CodeSystem/launchContext",
            "code" : "patient"
          }
        },
        {
          "url" : "type",
          "valueCode" : "Patient"
        }
      ],
      "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-launchContext"
    },
    {
      "extension" : [
        {
          "url" : "name",
          "valueCoding" : {
            "system" : "http://hl7.org/fhir/uv/sdc/CodeSystem/launchContext",
            "code" : "user",
            "display" : "User"
          }
        },
        {
          "url" : "type",
          "valueCode" : "Practitioner"
        },
        {
          "url" : "description",
          "valueString" : "The practitioner that is to be used to pre-populate the form"
        }
      ],
      "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-launchContext"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-lab-order/Questionnaire/LabOrder-form",
  "version" : "3.0.0",
  "name" : "LabOrderFormCaseStudies",
  "title" : "Questionnaire Lab Order Case Studies",
  "status" : "active",
  "subjectType" : ["Patient"],
  "date" : "2022-10-10",
  "publisher" : "HL7 Switzerland",
  "contact" : [
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch"
        }
      ]
    },
    {
      "name" : "Marcel Hanselmann",
      "telecom" : [
        {
          "system" : "email",
          "value" : "laborprojektgruppe@gmail.com",
          "use" : "work"
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
          "linkId" : "order.placerOrderIdentifier",
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
          "text" : "Identifier Domain der Auftragsnummer des Auftraggebers",
          "type" : "string"
        },
        {
          "linkId" : "order.fillerOrderIdentifier",
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
          "text" : "Identifier des Vorgängerdokuments",
          "type" : "string"
        },
        {
          "linkId" : "order.notificationContactDocument",
          "text" : "Dringender Benachrichtigungskontakt für dieses Dokument",
          "type" : "group",
          "item" : [
            {
              "linkId" : "order.notificationContactDocument.practitioner",
              "text" : "Zu benachrichtigende Person",
              "type" : "group",
              "item" : [
                {
                  "linkId" : "order.notificationContactDocument.practitioner.title",
                  "text" : "Titel",
                  "type" : "string"
                },
                {
                  "linkId" : "order.notificationContactDocument.practitioner.familyName",
                  "text" : "Name",
                  "type" : "string"
                },
                {
                  "linkId" : "order.notificationContactDocument.practitioner.givenName",
                  "text" : "Vorname",
                  "type" : "string"
                },
                {
                  "linkId" : "order.notificationContactDocument.practitioner.phone",
                  "text" : "Telefon",
                  "type" : "string"
                },
                {
                  "linkId" : "order.notificationContactDocument.practitioner.email",
                  "text" : "E-Mail",
                  "type" : "string"
                }
              ]
            }
          ]
        },
        {
          "linkId" : "order.notificationContactDocumentResponse",
          "text" : "Dringender Benachrichtigungskontakt für die Antwort auf dieses Dokument",
          "type" : "group",
          "item" : [
            {
              "linkId" : "order.notificationContactDocumentResponse.practitioner",
              "text" : "Zu benachrichtigende Person",
              "type" : "group",
              "item" : [
                {
                  "linkId" : "order.notificationContactDocumentResponse.practitioner.title",
                  "text" : "Titel",
                  "type" : "string"
                },
                {
                  "linkId" : "order.notificationContactDocumentResponse.practitioner.familyName",
                  "text" : "Name",
                  "type" : "string"
                },
                {
                  "linkId" : "order.notificationContactDocumentResponse.practitioner.givenName",
                  "text" : "Vorname",
                  "type" : "string"
                },
                {
                  "linkId" : "order.notificationContactDocumentResponse.practitioner.phone",
                  "text" : "Telefon",
                  "type" : "string"
                },
                {
                  "linkId" : "order.notificationContactDocumentResponse.practitioner.email",
                  "text" : "E-Mail",
                  "type" : "string"
                }
              ]
            }
          ]
        },
        {
          "linkId" : "order.priority",
          "text" : "Auftragspriorität",
          "type" : "choice",
          "answerOption" : [
            {
              "valueCoding" : {
                "system" : "http://hl7.org/fhir/request-priority",
                "code" : "routine",
                "display" : "Routine"
              },
              "initialSelected" : true
            },
            {
              "valueCoding" : {
                "system" : "http://hl7.org/fhir/request-priority",
                "code" : "urgent",
                "display" : "Urgent"
              }
            },
            {
              "valueCoding" : {
                "system" : "http://hl7.org/fhir/request-priority",
                "code" : "asap",
                "display" : "ASAP"
              }
            },
            {
              "valueCoding" : {
                "system" : "http://hl7.org/fhir/request-priority",
                "code" : "stat",
                "display" : "STAT"
              }
            }
          ]
        }
      ]
    },
    {
      "linkId" : "receiver",
      "text" : "Empfänger",
      "type" : "group",
      "item" : [
        {
          "linkId" : "receiver.practitioner",
          "text" : "Empfangende Person",
          "type" : "group",
          "item" : [
            {
              "linkId" : "receiver.practitioner.title",
              "text" : "Titel",
              "type" : "string"
            },
            {
              "linkId" : "receiver.practitioner.familyName",
              "text" : "Name",
              "type" : "string"
            },
            {
              "linkId" : "receiver.practitioner.givenName",
              "text" : "Vorname",
              "type" : "string"
            },
            {
              "linkId" : "receiver.practitioner.gln",
              "text" : "GLN",
              "type" : "string"
            },
            {
              "linkId" : "receiver.practitioner.zsr",
              "text" : "ZSR",
              "type" : "string"
            },
            {
              "linkId" : "receiver.practitioner.phone",
              "text" : "Telefon",
              "type" : "string"
            },
            {
              "linkId" : "receiver.practitioner.email",
              "text" : "E-Mail",
              "type" : "string"
            }
          ]
        },
        {
          "linkId" : "receiver.organization",
          "text" : "Empfangende Organisation",
          "type" : "group",
          "item" : [
            {
              "linkId" : "receiver.organization.name",
              "text" : "Name der Organisation",
              "type" : "string"
            },
            {
              "linkId" : "receciver.organization.gln",
              "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-gln-identifier",
              "text" : "GLN",
              "type" : "string"
            },
            {
              "linkId" : "receiver.organization.streetAddressLine",
              "text" : "Strasse, Hausnummer, Postfach etc.",
              "type" : "string",
              "repeats" : true
            },
            {
              "linkId" : "receiver.organization.postalCode",
              "text" : "PLZ",
              "type" : "string"
            },
            {
              "linkId" : "receiver.organization.city",
              "text" : "Ort",
              "type" : "string"
            },
            {
              "linkId" : "receiver.organization.country",
              "text" : "Land",
              "type" : "string"
            }
          ]
        }
      ]
    },
    {
      "linkId" : "patient",
      "text" : "Patient",
      "type" : "group",
      "required" : true,
      "item" : [
        {
          "linkId" : "patient.familyName",
          "text" : "Name",
          "type" : "string"
        },
        {
          "linkId" : "patient.maidenName",
          "text" : "Ledigname",
          "type" : "string"
        },
        {
          "linkId" : "patient.givenName",
          "text" : "Vorname",
          "type" : "string"
        },
        {
          "linkId" : "patient.localPid",
          "text" : "Lokale Patienten-ID",
          "type" : "string"
        },
        {
          "linkId" : "patient.birthDate",
          "text" : "Geburtsdatum",
          "type" : "date"
        },
        {
          "linkId" : "patient.gender",
          "text" : "Geschlecht",
          "type" : "choice",
          "answerOption" : [
            {
              "valueCoding" : {
                "system" : "http://hl7.org/fhir/administrative-gender",
                "code" : "male",
                "display" : "Male"
              },
              "initialSelected" : true
            },
            {
              "valueCoding" : {
                "system" : "http://hl7.org/fhir/administrative-gender",
                "code" : "female",
                "display" : "Female"
              }
            },
            {
              "valueCoding" : {
                "system" : "http://hl7.org/fhir/administrative-gender",
                "code" : "other",
                "display" : "Other"
              }
            }
          ]
        },
        {
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
                "display" : "aufgelöste Partnerschaft"
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
          "linkId" : "patient.phone",
          "text" : "Telefon",
          "type" : "string"
        },
        {
          "linkId" : "patient.email",
          "text" : "E-Mail",
          "type" : "string"
        },
        {
          "linkId" : "patient.streetAddressLine",
          "text" : "Strasse, Hausnummer, Postfach etc.",
          "type" : "string",
          "repeats" : true
        },
        {
          "linkId" : "patient.postalCode",
          "text" : "PLZ",
          "type" : "string"
        },
        {
          "linkId" : "patient.city",
          "text" : "Ort",
          "type" : "string"
        },
        {
          "linkId" : "patient.country",
          "text" : "Land",
          "type" : "string"
        },
        {
          "linkId" : "patient.contactperson",
          "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient#Patient.contact",
          "text" : "Kontaktperson",
          "type" : "group",
          "item" : [
            {
              "linkId" : "patient.contactperson.relationship",
              "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient#Patient.contact.relationship.text",
              "text" : "Beziehung",
              "type" : "string"
            },
            {
              "linkId" : "patient.contactperson.familyName",
              "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient#Patient.contact.name.family",
              "text" : "Name",
              "type" : "string"
            },
            {
              "linkId" : "patient.contactperson.givenName",
              "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient#Patient.contact.name.given",
              "text" : "Vorname",
              "type" : "string"
            },
            {
              "linkId" : "patient.contactperson.phone",
              "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient#Patient.contact.telecom.value",
              "text" : "Telefon",
              "type" : "string",
              "repeats" : true
            },
            {
              "linkId" : "patient.contactperson.email",
              "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient#Patient.contact.telecom.value",
              "text" : "E-Mail",
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
          "linkId" : "sender.author",
          "text" : "Verantwortlicher",
          "type" : "group",
          "required" : true,
          "item" : [
            {
              "linkId" : "sender.author.practitioner",
              "text" : "Verantwortliche Person",
              "type" : "group",
              "item" : [
                {
                  "linkId" : "sender.author.practitioner.title",
                  "text" : "Titel",
                  "type" : "string"
                },
                {
                  "linkId" : "sender.author.practitioner.familyName",
                  "text" : "Name",
                  "type" : "string"
                },
                {
                  "linkId" : "sender.author.practitioner.givenName",
                  "text" : "Vorname",
                  "type" : "string"
                },
                {
                  "linkId" : "sender.author.practitioner.gln",
                  "text" : "GLN",
                  "type" : "string"
                },
                {
                  "linkId" : "sender.author.practitioner.zsr",
                  "text" : "ZSR",
                  "type" : "string"
                },
                {
                  "linkId" : "sender.author.practitioner.phone",
                  "text" : "Telefon",
                  "type" : "string"
                },
                {
                  "linkId" : "sender.author.practitioner.email",
                  "text" : "E-Mail",
                  "type" : "string"
                }
              ]
            },
            {
              "linkId" : "sender.author.organization",
              "text" : "Verantwortliche Organisation",
              "type" : "group",
              "item" : [
                {
                  "linkId" : "sender.author.organization.name",
                  "text" : "Name der Organisation",
                  "type" : "string"
                },
                {
                  "linkId" : "sender.author.organization.streetAddressLine",
                  "text" : "Strasse, Hausnummer, Postfach etc.",
                  "type" : "string",
                  "repeats" : true
                },
                {
                  "linkId" : "sender.author.organization.postalCode",
                  "text" : "PLZ",
                  "type" : "string"
                },
                {
                  "linkId" : "sender.author.organization.city",
                  "text" : "Ort",
                  "type" : "string"
                },
                {
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
          "text" : "Erfasser",
          "type" : "group",
          "item" : [
            {
              "linkId" : "sender.dataenterer.practitioner",
              "text" : "Erfassende Person",
              "type" : "group",
              "item" : [
                {
                  "linkId" : "sender.dataenterer.practitioner.familyName",
                  "text" : "Name",
                  "type" : "string"
                },
                {
                  "linkId" : "sender.dataenterer.practitioner.givenName",
                  "text" : "Vorname",
                  "type" : "string"
                },
                {
                  "linkId" : "sender.dataenterer.practitioner.phone",
                  "text" : "Telefon",
                  "type" : "string"
                },
                {
                  "linkId" : "sender.dataenterer.practitioner.email",
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
      "linkId" : "receiverCopies",
      "text" : "Kopieempfänger",
      "type" : "group",
      "item" : [
        {
          "linkId" : "receiverCopy",
          "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole#PractitionerRole",
          "text" : "Kopieempfangende Organisation oder Person",
          "type" : "group",
          "repeats" : true,
          "item" : [
            {
              "linkId" : "receiverCopy.organization.name",
              "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole#PractitionerRole.practitioner",
              "text" : "Name der Organisation",
              "type" : "string",
              "item" : [
                {
                  "linkId" : "receiverCopy.practitionerRole.practitioner.title",
                  "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-humanname#HumanName.prefix",
                  "text" : "Titel",
                  "type" : "string"
                },
                {
                  "linkId" : "receiverCopy.practitionerRole.practitioner.familyName",
                  "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-humanname#HumanName.family",
                  "text" : "Name",
                  "type" : "string"
                },
                {
                  "linkId" : "receiverCopy.practitionerRole.practitioner.givenName",
                  "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-humanname#HumanName.given",
                  "text" : "Vorname",
                  "type" : "string"
                },
                {
                  "linkId" : "receiverCopy.practitionerRole.practitioner.phone",
                  "definition" : "http://hl7.org/fhir/StructureDefinition/ContactPoint#ContactPoint.value",
                  "text" : "Telefon",
                  "type" : "string"
                },
                {
                  "linkId" : "receiverCopy.practitionerRole.practitioner.email",
                  "definition" : "http://hl7.org/fhir/StructureDefinition/ContactPoint#ContactPoint.value",
                  "text" : "E-Mail",
                  "type" : "string"
                }
              ]
            },
            {
              "linkId" : "receiverCopy.title",
              "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole#PractitionerRole.organization",
              "text" : "Titel",
              "type" : "string",
              "item" : [
                {
                  "linkId" : "receiverCopy.practitionerRole.organization.name",
                  "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization#Organization.name",
                  "text" : "Name der Organisation",
                  "type" : "string"
                },
                {
                  "linkId" : "receiverCopy.practitionerRole.organization.streetAddressLine",
                  "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-address#Address.line",
                  "text" : "Strasse, Hausnummer, Postfach etc.",
                  "type" : "string",
                  "repeats" : true
                },
                {
                  "linkId" : "receiverCopy.practitionerRole.organization.postalCode",
                  "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-address#Address.postalCode",
                  "text" : "PLZ",
                  "type" : "string"
                },
                {
                  "linkId" : "receiverCopy.practitionerRole.organization.city",
                  "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-address#Address.city",
                  "text" : "Ort",
                  "type" : "string"
                },
                {
                  "linkId" : "receiverCopy.practitionerRole.organization.country",
                  "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-address#Address.country",
                  "text" : "Land",
                  "type" : "string"
                }
              ]
            },
            {
              "linkId" : "receiverCopy.familyName",
              "text" : "Name",
              "type" : "string"
            },
            {
              "linkId" : "receiverCopy.givenName",
              "text" : "Vorname",
              "type" : "string"
            },
            {
              "linkId" : "receiverCopy.phone",
              "text" : "Telefon",
              "type" : "string"
            },
            {
              "linkId" : "receiverCopy.email",
              "text" : "E-Mail",
              "type" : "string"
            },
            {
              "linkId" : "receiverCopy.streetAddressLine",
              "text" : "Strasse, Hausnummer, Postfach etc.",
              "type" : "string",
              "repeats" : true
            },
            {
              "linkId" : "receiverCopy.postalCode",
              "text" : "PLZ",
              "type" : "string"
            },
            {
              "linkId" : "receiverCopy.city",
              "text" : "Ort",
              "type" : "string"
            },
            {
              "linkId" : "receiverCopy.country",
              "text" : "Land",
              "type" : "string"
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
              "linkId" : "receiverCopy.relatedPerson.familyName",
              "definition" : "http://hl7.org/fhir/StructureDefinition/RelatedPerson#RelatedPerson.name.family",
              "text" : "Name",
              "type" : "string"
            },
            {
              "linkId" : "receiverCopy.relatedPerson.givenName",
              "definition" : "http://hl7.org/fhir/StructureDefinition/RelatedPerson#RelatedPerson.name.given",
              "text" : "Vorame",
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
              "linkId" : "receiverCopy.relatedPerson.streetAddressLine",
              "definition" : "http://hl7.org/fhir/StructureDefinition/RelatedPerson#RelatedPerson.address.line",
              "text" : "Strasse, Hausnummer, Postfach etc.",
              "type" : "string",
              "repeats" : true
            },
            {
              "linkId" : "receiverCopy.relatedPerson.postalCode",
              "definition" : "http://hl7.org/fhir/StructureDefinition/RelatedPerson#RelatedPerson.address.postalCode",
              "text" : "PLZ",
              "type" : "string"
            },
            {
              "linkId" : "receiverCopy.relatedPerson.city",
              "definition" : "http://hl7.org/fhir/StructureDefinition/RelatedPerson#RelatedPerson.address.city",
              "text" : "Ort",
              "type" : "string"
            },
            {
              "linkId" : "receiverCopy.relatedPerson.country",
              "definition" : "http://hl7.org/fhir/StructureDefinition/RelatedPerson#RelatedPerson.address.country",
              "text" : "Land",
              "type" : "string"
            }
          ]
        }
      ]
    },
    {
      "linkId" : "consent",
      "definition" : "http://fhir.ch/ig/ch-lab-order/StructureDefinition/ch-lab-order-SR#ServiceRequest.supportingInfo",
      "text" : "Einverständniserklärung",
      "type" : "group",
      "item" : [
        {
          "linkId" : "consent.treatment",
          "text" : "Einverständnis des Patienten zur Behandlung",
          "type" : "string"
        },
        {
          "linkId" : "consent.patientPrivacy",
          "text" : "Einverständnis des Patienten zum Datenschutz",
          "type" : "string"
        },
        {
          "linkId" : "consent.research",
          "text" : "Einverständnis des Patienten zur Forschung",
          "type" : "string"
        },
        {
          "linkId" : "consent.advancedCareDirective",
          "text" : "Patientenverfügung",
          "type" : "string"
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
          "linkId" : "coverage.uvg",
          "text" : "Unfallversicherung (nach UVG)",
          "type" : "string"
        },
        {
          "linkId" : "coverage.kvg",
          "text" : "Grundversicherung (nach KVG)",
          "type" : "string"
        },
        {
          "linkId" : "coverage.vvg",
          "text" : "Zusatzversicherung (nach VVG)",
          "type" : "string"
        },
        {
          "linkId" : "coverage.vvgOther",
          "text" : "Andere (nach VVG)",
          "type" : "string"
        }
      ]
    },
    {
      "linkId" : "previousResult",
      "definition" : "http://fhir.ch/ig/ch-lab-order/StructureDefinition/ch-lab-order-SR#ServiceRequest.supportingInfo",
      "text" : "Vorheriges Untersuchungsresultat",
      "type" : "group",
      "item" : [
        {
          "linkId" : "previousResult.result",
          "text" : "Untersuchungsresultat",
          "type" : "string",
          "repeats" : true
        }
      ]
    },
    {
      "linkId" : "casestudy",
      "text" : "Case Studies",
      "type" : "group",
      "item" : [
        {
          "linkId" : "1-tvt",
          "text" : "Tiefe Venenthrombose Questionnaire",
          "type" : "boolean",
          "item" : [
            {
              "linkId" : "1-tvt.labServices",
              "text" : "Case Study tiefe Venenthrombose",
              "type" : "group",
              "enableWhen" : [
                {
                  "question" : "1-tvt",
                  "operator" : "=",
                  "answerBoolean" : true
                }
              ],
              "item" : [
                {
                  "linkId" : "hematology-1",
                  "text" : "Hematology",
                  "type" : "group",
                  "item" : [
                    {
                      "linkId" : "hemato-subset",
                      "text" : "Hämatologie Subset",
                      "type" : "choice",
                      "repeats" : true,
                      "answerOption" : [
                        {
                          "valueCoding" : {
                            "system" : "http://loinc.org",
                            "code" : "24360-0",
                            "display" : "Hemoglobin and Hematocrit panel - Blood"
                          }
                        },
                        {
                          "valueCoding" : {
                            "system" : "http://loinc.org",
                            "code" : "43113-0",
                            "display" : "Hemoglobin electrophoresis panel in Blood"
                          }
                        },
                        {
                          "valueCoding" : {
                            "system" : "http://loinc.org",
                            "code" : "57021-8",
                            "display" : "CBC W Auto Differential panel - Blood"
                          }
                        },
                        {
                          "valueCoding" : {
                            "system" : "http://loinc.org",
                            "code" : "58410-2",
                            "display" : "CBC panel - Blood by Automated count"
                          }
                        },
                        {
                          "valueCoding" : {
                            "system" : "http://loinc.org",
                            "code" : "57021-8",
                            "display" : "CBC W Auto Differential panel - Blood"
                          }
                        }
                      ]
                    }
                  ]
                },
                {
                  "linkId" : "coagulation",
                  "text" : "Coagulation",
                  "type" : "group",
                  "item" : [
                    {
                      "linkId" : "d-dimer",
                      "text" : "D-Dimer",
                      "type" : "choice",
                      "repeats" : true,
                      "answerOption" : [
                        {
                          "valueCoding" : {
                            "system" : "http://loinc.org",
                            "code" : "55398-2",
                            "display" : "Short Fibrin D-dimer FEU and DDU panel - Platelet poor plasma"
                          }
                        }
                      ]
                    }
                  ]
                },
                {
                  "linkId" : "clinical-chemistry-1",
                  "text" : "Clinical Chemistry",
                  "type" : "group",
                  "item" : [
                    {
                      "linkId" : "crp-1",
                      "text" : "CRP",
                      "type" : "choice",
                      "repeats" : true,
                      "answerOption" : [
                        {
                          "valueCoding" : {
                            "system" : "http://loinc.org",
                            "code" : "1988-5",
                            "display" : "C reactive protein [Mass/Volume] in Serum or Plasma"
                          },
                          "initialSelected" : true
                        },
                        {
                          "valueCoding" : {
                            "system" : "http://loinc.org",
                            "code" : "76485-2",
                            "display" : "C reactive protein [Moles/volume] in Serum or Plasma"
                          }
                        },
                        {
                          "valueCoding" : {
                            "system" : "http://loinc.org",
                            "code" : "30522-7",
                            "display" : "C reactive protein [Mass/volume] in Serum or Plasma by High sensitivity method"
                          }
                        },
                        {
                          "valueCoding" : {
                            "system" : "http://loinc.org",
                            "code" : "76486-0",
                            "display" : "C reactive protein [Moles/volume] in Serum or Plasma by High sensitivity method"
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
          "linkId" : "2-pertussis",
          "text" : "Abklärung Husten Questionnaire",
          "type" : "boolean",
          "item" : [
            {
              "linkId" : "2-pertussis.labServices",
              "text" : "Case Study Husten",
              "type" : "group",
              "enableWhen" : [
                {
                  "question" : "2-pertussis",
                  "operator" : "=",
                  "answerBoolean" : true
                }
              ],
              "item" : [
                {
                  "linkId" : "microbiology-2",
                  "text" : "Mikrobiologie",
                  "type" : "group",
                  "item" : [
                    {
                      "linkId" : "per",
                      "text" : "Pertussis and Parapertussis DNA",
                      "type" : "choice",
                      "repeats" : true,
                      "answerOption" : [
                        {
                          "valueCoding" : {
                            "system" : "http://loinc.org",
                            "code" : "90441-7",
                            "display" : "B pert+parapert DNA Pnl Nph"
                          }
                        }
                      ]
                    }
                  ]
                },
                {
                  "linkId" : "hematology-2",
                  "text" : "Hämatologie",
                  "type" : "group",
                  "item" : [
                    {
                      "linkId" : "Blood-diff",
                      "text" : "Manual Differential panel - Blood",
                      "type" : "choice",
                      "repeats" : true,
                      "answerOption" : [
                        {
                          "valueCoding" : {
                            "system" : "http://loinc.org",
                            "code" : "57782-5",
                            "display" : "CBC W Ordered Manual Differential panel - Blood"
                          }
                        }
                      ]
                    }
                  ]
                },
                {
                  "linkId" : "clinical-chemistry-2",
                  "text" : "Klinische Chemie",
                  "type" : "group",
                  "item" : [
                    {
                      "linkId" : "crp-2",
                      "text" : "C-reactive Protein",
                      "type" : "choice",
                      "repeats" : true,
                      "answerOption" : [
                        {
                          "valueCoding" : {
                            "system" : "http://loinc.org",
                            "code" : "1988-5",
                            "display" : "C reactive protein [Mass/volume] in Serum or Plasma"
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
          "linkId" : "3-gyn",
          "text" : "Gynäkologische Vorsorge Questionnaire",
          "type" : "boolean",
          "item" : [
            {
              "linkId" : "3-gyn.labServices",
              "text" : "Case Study Gynäkologische Vorsorge",
              "type" : "group",
              "enableWhen" : [
                {
                  "question" : "3-gyn",
                  "operator" : "=",
                  "answerBoolean" : true
                }
              ],
              "item" : [
                {
                  "linkId" : "cytology",
                  "text" : "Cytology and Microbiology",
                  "type" : "group",
                  "item" : [
                    {
                      "linkId" : "cervicalSmear",
                      "text" : "Cervical Smear",
                      "type" : "choice",
                      "repeats" : true,
                      "answerOption" : [
                        {
                          "valueCoding" : {
                            "system" : "http://loinc.org",
                            "code" : "86662-4",
                            "display" : "Pap smear tests - FPAR 2.0 set"
                          }
                        },
                        {
                          "valueCoding" : {
                            "system" : "http://loinc.org",
                            "code" : "14503-7",
                            "display" : "Human papilloma virus 16+18 Ag [Presence] in Cervix"
                          }
                        }
                      ]
                    }
                  ]
                },
                {
                  "linkId" : "urin",
                  "text" : "Urin",
                  "type" : "group",
                  "item" : [
                    {
                      "linkId" : "combur9",
                      "text" : "Combur-9",
                      "type" : "choice",
                      "repeats" : true,
                      "answerOption" : [
                        {
                          "valueCoding" : {
                            "system" : "http://loinc.org",
                            "code" : "50556-0",
                            "display" : "Urinalysis dipstick panel - Urine by Automated test strip"
                          }
                        }
                      ]
                    }
                  ]
                },
                {
                  "linkId" : "obstetricalPanels",
                  "text" : "Schwangerschaftsvorsorge",
                  "type" : "group",
                  "item" : [
                    {
                      "linkId" : "obstetric",
                      "text" : "Obstetric 1996 panel – Serum and Blood",
                      "type" : "choice",
                      "repeats" : true,
                      "answerOption" : [
                        {
                          "valueCoding" : {
                            "system" : "http://loinc.org",
                            "code" : "24364-2",
                            "display" : "Obstetric 1996 Pnl Ser+Bld"
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
          "linkId" : "4-sepis",
          "text" : "Abklärung Sepsis Questionnaire",
          "type" : "boolean",
          "item" : [
            {
              "linkId" : "4-sepis.labServices",
              "text" : "Case Study Sepis",
              "type" : "group",
              "enableWhen" : [
                {
                  "question" : "4-sepis",
                  "operator" : "=",
                  "answerBoolean" : true
                }
              ],
              "item" : [
                {
                  "linkId" : "hematology-4",
                  "text" : "Hematology",
                  "type" : "group",
                  "item" : [
                    {
                      "linkId" : "lab-4",
                      "text" : "Laborwerte",
                      "type" : "choice",
                      "repeats" : true,
                      "answerOption" : [
                        {
                          "valueCoding" : {
                            "system" : "http://loinc.org",
                            "code" : "24360-0",
                            "display" : "Hemoglobin and Hematocrit panel - Blood"
                          }
                        },
                        {
                          "valueCoding" : {
                            "system" : "http://loinc.org",
                            "code" : "43113-0",
                            "display" : "Hemoglobin electrophoresis panel in Blood"
                          }
                        },
                        {
                          "valueCoding" : {
                            "system" : "http://loinc.org",
                            "code" : "57021-8",
                            "display" : "CBC W Auto Differential panel - Blood"
                          }
                        },
                        {
                          "valueCoding" : {
                            "system" : "http://loinc.org",
                            "code" : "58410-2",
                            "display" : "CBC panel - Blood by Automated count"
                          }
                        },
                        {
                          "valueCoding" : {
                            "system" : "http://loinc.org",
                            "code" : "57021-8",
                            "display" : "CBC W Auto Differential panel - Blood"
                          }
                        }
                      ]
                    }
                  ]
                },
                {
                  "linkId" : "microbiology-4",
                  "text" : "Mikrobiologie",
                  "type" : "group",
                  "item" : [
                    {
                      "linkId" : "culture",
                      "text" : "Blood by Culture",
                      "type" : "choice",
                      "repeats" : true,
                      "answerOption" : [
                        {
                          "valueCoding" : {
                            "system" : "http://loinc.org",
                            "code" : "90423-5",
                            "display" : "Microorganism preliminary growth detection panel - Blood by Culture"
                          }
                        }
                      ]
                    },
                    {
                      "linkId" : "id-susc",
                      "text" : "Bacterial Identification and Susceptibility",
                      "type" : "choice",
                      "repeats" : true,
                      "answerOption" : [
                        {
                          "valueCoding" : {
                            "system" : "http://loinc.org",
                            "code" : "85421-6",
                            "display" : "Bacterial identification and susceptibility panel - Isolate"
                          }
                        }
                      ]
                    }
                  ]
                },
                {
                  "linkId" : "clinical-chemistry-4",
                  "text" : "Klinische Chemie",
                  "type" : "group",
                  "item" : [
                    {
                      "linkId" : "crp-4",
                      "text" : "CRP",
                      "type" : "choice",
                      "repeats" : true,
                      "answerOption" : [
                        {
                          "valueCoding" : {
                            "system" : "http://loinc.org",
                            "code" : "1988-5",
                            "display" : "C reactive protein [Mass/Volume] in Serum or Plasma"
                          },
                          "initialSelected" : true
                        },
                        {
                          "valueCoding" : {
                            "system" : "http://loinc.org",
                            "code" : "76485-2",
                            "display" : "C reactive protein [Moles/volume] in Serum or Plasma"
                          }
                        },
                        {
                          "valueCoding" : {
                            "system" : "http://loinc.org",
                            "code" : "30522-7",
                            "display" : "C reactive protein [Mass/volume] in Serum or Plasma by High sensitivity method"
                          }
                        },
                        {
                          "valueCoding" : {
                            "system" : "http://loinc.org",
                            "code" : "76486-0",
                            "display" : "C reactive protein [Moles/volume] in Serum or Plasma by High sensitivity method"
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
          "linkId" : "5-biol-monit",
          "text" : "Biologisches Monitoring Questionnaire",
          "type" : "boolean",
          "item" : [
            {
              "linkId" : "5-biol-monit.labServices",
              "text" : "Case Study biologisches Monitoring",
              "type" : "group",
              "enableWhen" : [
                {
                  "question" : "5-biol-monit",
                  "operator" : "=",
                  "answerBoolean" : true
                }
              ],
              "item" : [
                {
                  "linkId" : "hematology-5",
                  "text" : "Hematology",
                  "type" : "group",
                  "item" : [
                    {
                      "linkId" : "lab-5",
                      "text" : "Laborwerte",
                      "type" : "choice",
                      "repeats" : true,
                      "answerOption" : [
                        {
                          "valueCoding" : {
                            "system" : "http://loinc.org",
                            "code" : "24360-0",
                            "display" : "Hemoglobin and Hematocrit panel - Blood"
                          }
                        },
                        {
                          "valueCoding" : {
                            "system" : "http://loinc.org",
                            "code" : "43113-0",
                            "display" : "Hemoglobin electrophoresis panel in Blood"
                          }
                        },
                        {
                          "valueCoding" : {
                            "system" : "http://loinc.org",
                            "code" : "57021-8",
                            "display" : "CBC W Auto Differential panel - Blood"
                          }
                        },
                        {
                          "valueCoding" : {
                            "system" : "http://loinc.org",
                            "code" : "58410-2",
                            "display" : "CBC panel - Blood by Automated count"
                          }
                        },
                        {
                          "valueCoding" : {
                            "system" : "http://loinc.org",
                            "code" : "57021-8",
                            "display" : "CBC W Auto Differential panel - Blood"
                          }
                        }
                      ]
                    }
                  ]
                },
                {
                  "linkId" : "toxicology",
                  "text" : "Toxicology",
                  "type" : "group",
                  "item" : [
                    {
                      "linkId" : "tox",
                      "text" : "Toxic Content",
                      "type" : "choice",
                      "repeats" : true,
                      "answerOption" : [
                        {
                          "valueCoding" : {
                            "system" : "http://loinc.org",
                            "code" : "29587-3",
                            "display" : "Toxicology panel - Blood"
                          }
                        },
                        {
                          "valueCoding" : {
                            "system" : "http://loinc.org",
                            "code" : "54454-4",
                            "display" : "Arsenic fractions panel - Urine"
                          }
                        },
                        {
                          "valueCoding" : {
                            "system" : "http://loinc.org",
                            "code" : "29589-9",
                            "display" : "Heavy metals panel - Urine"
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
          "linkId" : "6-histopath",
          "text" : "Pathologische Untersuchung einer Gewebsprobe Questionnaire",
          "type" : "boolean",
          "item" : [
            {
              "linkId" : "6-histopath.labServices",
              "text" : "Case Study Pathologische Untersuchung einer Gewebsprobe",
              "type" : "group",
              "enableWhen" : [
                {
                  "question" : "6-histopath",
                  "operator" : "=",
                  "answerBoolean" : true
                }
              ],
              "item" : [
                {
                  "linkId" : "labSpecialties",
                  "text" : "Labor Sparten",
                  "type" : "group",
                  "item" : [
                    {
                      "linkId" : "labSpecialties.pathology",
                      "code" : [
                        {
                          "system" : "http://loinc.org",
                          "code" : "27898-6"
                        }
                      ],
                      "text" : "Pathology",
                      "type" : "boolean",
                      "item" : [
                        {
                          "linkId" : "labSpecialties.pathology.panels",
                          "text" : "Pathology Panels",
                          "type" : "group",
                          "enableWhen" : [
                            {
                              "question" : "labSpecialties.pathology",
                              "operator" : "=",
                              "answerBoolean" : true
                            }
                          ],
                          "item" : [
                            {
                              "linkId" : "labSpecialties.pathology.panels.Autopsy",
                              "code" : [
                                {
                                  "system" : "http://loinc.org",
                                  "code" : "18743-5"
                                }
                              ],
                              "text" : "Autopsy report",
                              "type" : "boolean"
                            },
                            {
                              "linkId" : "labSpecialties.pathology.panels.PathologyStudy",
                              "code" : [
                                {
                                  "system" : "http://loinc.org",
                                  "code" : "11526-1"
                                }
                              ],
                              "text" : "Pathology Study",
                              "type" : "boolean"
                            },
                            {
                              "linkId" : "labSpecialties.pathology.panels.SurgicalPathologyStudy",
                              "code" : [
                                {
                                  "system" : "http://loinc.org",
                                  "code" : "11529-5"
                                }
                              ],
                              "text" : "Surgical pathology study",
                              "type" : "boolean"
                            }
                          ]
                        }
                      ]
                    }
                  ]
                }
              ]
            }
          ]
        }
      ]
    }
  ]
}

```
