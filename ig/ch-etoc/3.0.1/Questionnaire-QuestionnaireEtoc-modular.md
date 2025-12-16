# Questionnaire eTOC (Modular version) - CH eTOC (R4) v3.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Questionnaire eTOC (Modular version)**

## Questionnaire: Questionnaire eTOC (Modular version) 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-etoc/Questionnaire/QuestionnaireEtoc-modular | *Version*:3.0.1 |
| Active as of 2023-06-21 | *Computable Name*:QuestionnaireEtoc-modular |
| **Copyright/Legal**: CC0-1.0 | |



## Resource Content

```json
{
  "resourceType" : "Questionnaire",
  "id" : "QuestionnaireEtoc-modular",
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
      "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-assemble-expectation",
      "valueCode" : "assemble-root"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-etoc/Questionnaire/QuestionnaireEtoc-modular",
  "version" : "3.0.1",
  "name" : "QuestionnaireEtoc-modular",
  "title" : "QuestionnaireEtoc-modular",
  "status" : "active",
  "subjectType" : ["Patient"],
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
      "linkId" : "order",
      "text" : "Auftrag",
      "type" : "group",
      "required" : true,
      "item" : [
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-subQuestionnaire",
              "valueCanonical" : "http://fhir.ch/ig/ch-orf/Questionnaire/ch-orf-module-order|2.0.0"
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
      "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-composition#Composition.extension:receiver",
      "text" : "Empfänger",
      "type" : "group",
      "item" : [
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-subQuestionnaire",
              "valueCanonical" : "http://fhir.ch/ig/ch-orf/Questionnaire/ch-orf-module-receiver|2.0.0"
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
      "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-composition#Composition.extension:initiator",
      "text" : "Initiant dieser Anmeldung",
      "type" : "group",
      "item" : [
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-subQuestionnaire",
              "valueCanonical" : "http://fhir.ch/ig/ch-orf/Questionnaire/ch-orf-module-initiator|2.0.0"
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
              "valueCanonical" : "http://fhir.ch/ig/ch-orf/Questionnaire/ch-orf-module-patient|2.0.0"
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
      "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-servicerequest#ServiceRequest.extension:requestedEncounterDetails",
      "text" : "Patientenaufnahme",
      "type" : "group",
      "item" : [
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-subQuestionnaire",
              "valueCanonical" : "http://fhir.ch/ig/ch-orf/Questionnaire/ch-orf-module-requestedencounter|2.0.0"
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
              "valueCanonical" : "http://fhir.ch/ig/ch-orf/Questionnaire/ch-orf-module-coverage|2.0.0"
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
              "valueCanonical" : "http://fhir.ch/ig/ch-orf/Questionnaire/ch-orf-module-sender|2.0.0"
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
      "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-composition#Composition.extension:copyReceiver",
      "text" : "Kopieempfänger (Kopie dieses Auftrags und aller daraus resultierenden Resultate)",
      "type" : "group",
      "item" : [
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-subQuestionnaire",
              "valueCanonical" : "http://fhir.ch/ig/ch-orf/Questionnaire/ch-orf-module-receivercopy|2.0.0"
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
                  "valueCanonical" : "http://fhir.ch/ig/ch-orf/Questionnaire/ch-orf-module-address|3.0.0-ci-build"
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
      "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-servicerequest#ServiceRequest.extension:locationAndTime",
      "text" : "Ort und Zeit",
      "type" : "group",
      "repeats" : true,
      "item" : [
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-subQuestionnaire",
              "valueCanonical" : "http://fhir.ch/ig/ch-orf/Questionnaire/ch-orf-module-appointment|2.0.0"
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
      "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-composition#Composition.extension:patientConsent",
      "text" : "Einverständniserklärung",
      "type" : "group",
      "item" : [
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-subQuestionnaire",
              "valueCanonical" : "http://fhir.ch/ig/ch-orf/Questionnaire/ch-orf-module-consent|2.0.0"
            }
          ],
          "linkId" : "consent.1",
          "text" : "Unable to resolve 'consent' sub-questionnaire",
          "type" : "display"
        }
      ]
    },
    {
      "linkId" : "purpose",
      "text" : "Zweck?",
      "type" : "group",
      "item" : [
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-subQuestionnaire",
              "valueCanonical" : "http://fhir.ch/ig/ch-etoc/Questionnaire/ch-etoc-module-purpose|2.0.0"
            }
          ],
          "linkId" : "purpose.1",
          "text" : "Unable to resolve 'anamnesis' sub-questionnaire",
          "type" : "display"
        }
      ]
    },
    {
      "linkId" : "diagnosisList",
      "text" : "Diagnosen und Befunde",
      "type" : "group",
      "item" : [
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-subQuestionnaire",
              "valueCanonical" : "http://fhir.ch/ig/ch-etoc/Questionnaire/ch-etoc-module-diagnosis"
            }
          ],
          "linkId" : "diagnosisList.1",
          "text" : "Unable to resolve 'diagnosisist' sub-questionnaire",
          "type" : "display"
        }
      ]
    },
    {
      "linkId" : "anamnesis",
      "text" : "Anamnese",
      "type" : "group",
      "item" : [
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-subQuestionnaire",
              "valueCanonical" : "http://fhir.ch/ig/ch-etoc/Questionnaire/ch-etoc-module-anamnesis|2.0.0"
            }
          ],
          "linkId" : "anamnesis.1",
          "text" : "Unable to resolve 'anamnesis' sub-questionnaire",
          "type" : "display"
        }
      ]
    },
    {
      "linkId" : "medication",
      "text" : "Medikation",
      "type" : "group",
      "item" : [
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-subQuestionnaire",
              "valueCanonical" : "http://fhir.ch/ig/ch-etoc/Questionnaire/ch-etoc-module-medication|2.0.0"
            }
          ],
          "linkId" : "medication.1",
          "text" : "Unable to resolve 'medication' sub-questionnaire",
          "type" : "display"
        }
      ]
    },
    {
      "linkId" : "allergyIntolerance",
      "text" : "Allergien und Intoleranzen",
      "type" : "group",
      "item" : [
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-subQuestionnaire",
              "valueCanonical" : "http://fhir.ch/ig/ch-etoc/Questionnaire/ch-etoc-module-allergyIntolerance|2.0.0"
            }
          ],
          "linkId" : "allergyIntolerance.1",
          "text" : "Unable to resolve 'allergyIntolerance' sub-questionnaire",
          "type" : "display"
        }
      ]
    },
    {
      "linkId" : "immunizationStatus",
      "text" : "Impfstatus",
      "type" : "group",
      "item" : [
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-subQuestionnaire",
              "valueCanonical" : "http://fhir.ch/ig/ch-etoc/Questionnaire/ch-etoc-module-immunizationstatus|2.0.0"
            }
          ],
          "linkId" : "immunizationStatus.1",
          "text" : "Unable to resolve 'immunizationstatus' sub-questionnaire",
          "type" : "display"
        }
      ]
    },
    {
      "linkId" : "lab",
      "text" : "Labor",
      "type" : "group",
      "item" : [
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-subQuestionnaire",
              "valueCanonical" : "http://fhir.ch/ig/ch-etoc/Questionnaire/ch-etoc-module-lab|2.0.0"
            }
          ],
          "linkId" : "lab.1",
          "text" : "Unable to resolve 'lab' sub-questionnaire",
          "type" : "display"
        }
      ]
    },
    {
      "linkId" : "pathology",
      "text" : "Pathologie",
      "type" : "group",
      "item" : [
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-subQuestionnaire",
              "valueCanonical" : "http://fhir.ch/ig/ch-etoc/Questionnaire/ch-etoc-module-pathology|2.0.0"
            }
          ],
          "linkId" : "pathology.1",
          "text" : "Unable to resolve 'pathology' sub-questionnaire",
          "type" : "display"
        }
      ]
    },
    {
      "linkId" : "imaging",
      "text" : "Bildgebung",
      "type" : "group",
      "item" : [
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-subQuestionnaire",
              "valueCanonical" : "http://fhir.ch/ig/ch-etoc/Questionnaire/ch-etoc-module-imaging|2.0.0"
            }
          ],
          "linkId" : "imaging.1",
          "text" : "Unable to resolve 'lab' sub-questionnaire",
          "type" : "display"
        }
      ]
    },
    {
      "linkId" : "cardiology",
      "text" : "Kardiologie",
      "type" : "group",
      "item" : [
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-subQuestionnaire",
              "valueCanonical" : "http://fhir.ch/ig/ch-etoc/Questionnaire/ch-etoc-module-cardiology|2.0.0"
            }
          ],
          "linkId" : "cardiology.1",
          "text" : "Unable to resolve 'cardiology' sub-questionnaire",
          "type" : "display"
        }
      ]
    },
    {
      "linkId" : "attachment",
      "text" : "Anhang",
      "type" : "group",
      "item" : [
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-subQuestionnaire",
              "valueCanonical" : "http://fhir.ch/ig/ch-etoc/Questionnaire/ch-etoc-module-attachment|2.0.0"
            }
          ],
          "linkId" : "attachment.1",
          "text" : "Unable to resolve 'attachment' sub-questionnaire",
          "type" : "display"
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
          "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-servicerequest#ServiceRequest.note.text",
          "text" : "Kommentar",
          "type" : "string"
        }
      ]
    }
  ]
}

```
