# EprRole - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EprRole**

## ValueSet: EprRole 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-term/ValueSet/EprRole | *Version*:3.3.0 |
| Active as of 2025-12-15 | *Computable Name*:EprRole |
| *Other Identifiers:*OID:2.16.756.5.30.1.127.3.10.15.1 (use: official, ) | |
| **Copyright/Legal**: CC0-1.0 | |

 
Role codes as per Annex 5 EPRO-FDHA, version July 2019 

 **References** 

 Detailed information about the **current version** of this artifact, including cross-references to resources that use it, can be found [here](http://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-term%7Ccurrent/ValueSet/EprRole) via the XIG (Cross-IG) index for FHIR specifications. 

### Logical Definition (CLD)

 

### Expansion

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "EprRole",
  "meta" : {
    "source" : "https://art-decor.org/fhir/ValueSet/2.16.756.5.30.1.127.3.10.15.1--20220626152355",
    "profile" : ["http://hl7.org/fhir/StructureDefinition/shareablevalueset"]
  },
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/resource-effectivePeriod",
      "valuePeriod" : {
        "start" : "2022-06-26T15:23:55+02:00"
      }
    }
  ],
  "url" : "http://fhir.ch/ig/ch-term/ValueSet/EprRole",
  "identifier" : [
    {
      "use" : "official",
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:oid:2.16.756.5.30.1.127.3.10.15.1"
    }
  ],
  "version" : "3.3.0",
  "name" : "EprRole",
  "title" : "EprRole",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-15T10:47:47+00:00",
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
  "immutable" : false,
  "copyright" : "CC0-1.0",
  "compose" : {
    "include" : [
      {
        "system" : "urn:oid:2.16.756.5.30.1.127.3.10.6",
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
    ]
  }
}

```
