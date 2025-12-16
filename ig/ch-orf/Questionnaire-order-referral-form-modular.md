# Questionnaire Order-Referral-Form (Modular version) - CH ORF (R4) v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Questionnaire Order-Referral-Form (Modular version)**

## Questionnaire: Questionnaire Order-Referral-Form (Modular version) 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-orf/Questionnaire/order-referral-form-modular | *Version*:3.0.2 |
| Active as of 2022-07-07 | *Computable Name*:OrderReferralForm |
| **Copyright/Legal**: CC0-1.0 | |



## Resource Content

```json
{
  "resourceType" : "Questionnaire",
  "id" : "order-referral-form-modular",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-questionnaire",
      "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire",
      "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-extr-smap",
      "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-pop-exp"
    ]
  },
  "language" : "de-CH",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-assemble-expectation",
      "valueCode" : "assemble-root"
    },
    {
      "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-targetStructureMap",
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
  "url" : "http://fhir.ch/ig/ch-orf/Questionnaire/order-referral-form-modular",
  "version" : "3.0.2",
  "name" : "OrderReferralForm",
  "title" : "Order Referral Form",
  "status" : "active",
  "subjectType" : ["Patient"],
  "date" : "2022-07-07",
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
      "linkId" : "order",
      "text" : "Auftrag",
      "type" : "group",
      "required" : true,
      "item" : [
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-subQuestionnaire",
              "valueCanonical" : "http://fhir.ch/ig/ch-orf/Questionnaire/ch-orf-module-order|3.0.1"
            }
          ],
          "linkId" : "order.1",
          "text" : "Unable to resolve 'order' sub-questionnaire",
          "type" : "display"
        }
      ]
    },
    {
      "linkId" : "receiver",
      "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-composition#Composition.extension",
      "text" : "Empfänger",
      "type" : "group",
      "item" : [
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-subQuestionnaire",
              "valueCanonical" : "http://fhir.ch/ig/ch-orf/Questionnaire/ch-orf-module-receiver|3.0.1"
            }
          ],
          "linkId" : "receiver.1",
          "text" : "Unable to resolve 'receiver' sub-questionnaire",
          "type" : "display"
        }
      ]
    },
    {
      "linkId" : "initiator",
      "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-composition#Composition.extension",
      "text" : "Initiant dieser Anmeldung",
      "type" : "group",
      "item" : [
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-subQuestionnaire",
              "valueCanonical" : "http://fhir.ch/ig/ch-orf/Questionnaire/ch-orf-module-initiator|3.0.1"
            }
          ],
          "linkId" : "initiator.1",
          "text" : "Unable to resolve 'intitiator' sub-questionnaire",
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
              "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-subQuestionnaire",
              "valueCanonical" : "http://fhir.ch/ig/ch-orf/Questionnaire/ch-orf-module-patient|3.0.1"
            }
          ],
          "linkId" : "patient.1",
          "text" : "Unable to resolve 'patient' sub-questionnaire",
          "type" : "display"
        }
      ]
    },
    {
      "linkId" : "requestedEncounter",
      "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-servicerequest#ServiceRequest.extension",
      "text" : "Patientenaufnahme",
      "type" : "group",
      "item" : [
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-subQuestionnaire",
              "valueCanonical" : "http://fhir.ch/ig/ch-orf/Questionnaire/ch-orf-module-requestedencounter|3.0.1"
            }
          ],
          "linkId" : "requestedEncounter.1",
          "text" : "Unable to resolve 'requestedEncounter' sub-questionnaire",
          "type" : "display"
        }
      ]
    },
    {
      "linkId" : "coverage",
      "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-servicerequest#ServiceRequest.insurance",
      "text" : "Kostenträger",
      "type" : "group",
      "item" : [
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-subQuestionnaire",
              "valueCanonical" : "http://fhir.ch/ig/ch-orf/Questionnaire/ch-orf-module-coverage|3.0.1"
            }
          ],
          "linkId" : "coverage.1",
          "text" : "Unable to resolve 'coverage' sub-questionnaire",
          "type" : "display"
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
              "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-subQuestionnaire",
              "valueCanonical" : "http://fhir.ch/ig/ch-orf/Questionnaire/ch-orf-module-sender|3.0.1"
            }
          ],
          "linkId" : "sender.1",
          "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-composition#Composition.author",
          "text" : "Unable to resolve 'sender' sub-questionnaire",
          "type" : "display",
          "required" : true
        }
      ]
    },
    {
      "linkId" : "receiverCopy",
      "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-composition#Composition.extension",
      "text" : "Kopieempfänger (Kopie dieses Auftrags und aller daraus resultierenden Resultate)",
      "type" : "group",
      "item" : [
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-subQuestionnaire",
              "valueCanonical" : "http://fhir.ch/ig/ch-orf/Questionnaire/ch-orf-module-receivercopy|3.0.1"
            }
          ],
          "linkId" : "receiverCopy.1",
          "text" : "Unable to resolve 'receiverCopy' sub-questionnaire",
          "type" : "display"
        }
      ]
    },
    {
      "linkId" : "antecedentEpisodeOfCare",
      "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-composition#Composition.extension",
      "text" : "Vorgängiger Aufenthalt in Spital / Heim",
      "type" : "group",
      "item" : [
        {
          "linkId" : "antecedentEpisodeOfCare.start",
          "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-episodeofcare#EpisodeOfCare.statusHistory.period",
          "text" : "Von",
          "type" : "dateTime"
        },
        {
          "linkId" : "antecedentEpisodeOfCare.end",
          "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-episodeofcare#EpisodeOfCare.statusHistory.period",
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
                "expression" : "'antecedentEpisodeOfCare.managingOrganization.'"
              }
            }
          ],
          "linkId" : "antecedentEpisodeOfCare.managingOrganization",
          "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-episodeofcare#EpisodeOfCare.managingOrganization",
          "text" : "Spital /Heim",
          "type" : "group",
          "item" : [
            {
              "linkId" : "antecedentEpisodeOfCare.managingOrganization.name",
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
              "linkId" : "antecedentEpisodeOfCare.managingOrganization.1",
              "text" : "Unable to resolve 'address' sub-questionnaire",
              "type" : "display"
            }
          ]
        }
      ]
    },
    {
      "linkId" : "appointment",
      "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-servicerequest#ServiceRequest.extension",
      "text" : "Ort und Zeit der Durchführung der angeforderten Leistung",
      "type" : "group",
      "repeats" : true,
      "item" : [
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-subQuestionnaire",
              "valueCanonical" : "http://fhir.ch/ig/ch-orf/Questionnaire/ch-orf-module-appointment|3.0.1"
            }
          ],
          "linkId" : "appointment.1",
          "text" : "Unable to resolve 'appointment' sub-questionnaire",
          "type" : "display"
        }
      ]
    },
    {
      "linkId" : "consent",
      "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-composition#Composition.extension",
      "text" : "Einverständniserklärung",
      "type" : "group",
      "item" : [
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-subQuestionnaire",
              "valueCanonical" : "http://fhir.ch/ig/ch-orf/Questionnaire/ch-orf-module-consent|3.0.1"
            }
          ],
          "linkId" : "consent.1",
          "text" : "Unable to resolve 'consent' sub-questionnaire",
          "type" : "display"
        }
      ]
    },
    {
      "linkId" : "note",
      "text" : "Bemerkungen",
      "type" : "group",
      "repeats" : true,
      "item" : [
        {
          "linkId" : "note.text",
          "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-servicerequest#ServiceRequest.note.text",
          "text" : "Kommentar",
          "type" : "string"
        }
      ]
    }
  ]
}

```
