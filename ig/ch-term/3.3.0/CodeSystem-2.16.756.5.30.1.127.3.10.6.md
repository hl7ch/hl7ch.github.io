# ch-ehealth-codesystem-role - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ch-ehealth-codesystem-role**

## CodeSystem: ch-ehealth-codesystem-role 

| | |
| :--- | :--- |
| *Official URL*:urn:oid:2.16.756.5.30.1.127.3.10.6 | *Version*:3.3.0 |
| Active as of 2025-12-15 | *Computable Name*:ChEhealthCodesystemRole |
| **Copyright/Legal**: CC0-1.0 | |

 
Role codes as per Annex 5 EPRO-FDHA, version July 2019 

 This Code system is referenced in the content logical definition of the following value sets: 

* [DocumentEntryAuthorRole](ValueSet-DocumentEntry.authorRole.md)
* [DocumentEntryOriginalProviderRole](ValueSet-DocumentEntry.originalProviderRole.md)
* [EprRole](ValueSet-EprRole.md)
* [SubmissionSetAuthorAuthorRole](ValueSet-SubmissionSet.Author.AuthorRole.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "2.16.756.5.30.1.127.3.10.6",
  "meta" : {
    "source" : "https://art-decor.org/fhir/ValueSet/2.16.756.5.30.1.127.3.10.15.1--20220626152355"
  },
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/resource-effectivePeriod",
      "valuePeriod" : {
        "start" : "2022-06-26T15:23:55+02:00"
      }
    }
  ],
  "url" : "urn:oid:2.16.756.5.30.1.127.3.10.6",
  "version" : "3.3.0",
  "name" : "ChEhealthCodesystemRole",
  "title" : "ch-ehealth-codesystem-role",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-15T10:36:18+00:00",
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
    },
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch/",
          "use" : "work"
        }
      ]
    }
  ],
  "description" : "Role codes as per Annex 5 EPRO-FDHA, version July 2019",
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
  "caseSensitive" : true,
  "content" : "complete",
  "concept" : [
    {
      "code" : "PAT",
      "display" : "Patient",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Patient"
        },
        {
          "language" : "fr-CH",
          "value" : "Patient"
        },
        {
          "language" : "it-CH",
          "value" : "Paziente"
        },
        {
          "language" : "en-US",
          "value" : "Patient"
        },
        {
          "language" : "rm-CH",
          "value" : "Pazient"
        }
      ]
    },
    {
      "code" : "HCP",
      "display" : "Healthcare professional",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Gesundheitsfachperson"
        },
        {
          "language" : "fr-CH",
          "value" : "Professionnel de la santé"
        },
        {
          "language" : "it-CH",
          "value" : "Professionista della salute"
        },
        {
          "language" : "en-US",
          "value" : "Healthcare professional"
        },
        {
          "language" : "rm-CH",
          "value" : "Persuna spezialisada dal sectur da sanadad"
        }
      ]
    },
    {
      "code" : "ASS",
      "display" : "Assistant",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Hilfsperson"
        },
        {
          "language" : "fr-CH",
          "value" : "Assistant"
        },
        {
          "language" : "it-CH",
          "value" : "Assistente"
        },
        {
          "language" : "en-US",
          "value" : "Assistant"
        },
        {
          "language" : "rm-CH",
          "value" : "Persuna d'agid"
        }
      ]
    },
    {
      "code" : "REP",
      "display" : "Representative",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Stellvertretung"
        },
        {
          "language" : "fr-CH",
          "value" : "Représentant"
        },
        {
          "language" : "it-CH",
          "value" : "Rappresentante"
        },
        {
          "language" : "en-US",
          "value" : "Representative"
        },
        {
          "language" : "rm-CH",
          "value" : "Substituziun"
        }
      ]
    },
    {
      "code" : "TCU",
      "display" : "Technical user",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Technischer Nutzer"
        },
        {
          "language" : "fr-CH",
          "value" : "Utilisateur technique"
        },
        {
          "language" : "it-CH",
          "value" : "Utente tecnico"
        },
        {
          "language" : "en-US",
          "value" : "Technical user"
        },
        {
          "language" : "rm-CH",
          "value" : "Utilisader tecnic"
        }
      ]
    },
    {
      "code" : "DADM",
      "display" : "Document Administrator",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Dokumenten-Administrator"
        },
        {
          "language" : "fr-CH",
          "value" : "Administrateur des documents"
        },
        {
          "language" : "it-CH",
          "value" : "Amministratore documenti"
        },
        {
          "language" : "en-US",
          "value" : "Document Administrator"
        },
        {
          "language" : "rm-CH",
          "value" : "Administratur da documents"
        }
      ]
    },
    {
      "code" : "PADM",
      "display" : "Policy Administrator",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Datenschutzrichtlinien-Administrator"
        },
        {
          "language" : "fr-CH",
          "value" : "Administrateur des directives de protection des données"
        },
        {
          "language" : "it-CH",
          "value" : "Amministratore diritti di accesso"
        },
        {
          "language" : "en-US",
          "value" : "Policy Administrator"
        },
        {
          "language" : "rm-CH",
          "value" : "Administratur da las directivas davart la protecziun da datas"
        }
      ]
    }
  ]
}

```
