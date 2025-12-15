# SubmissionSet.Author.AuthorRole - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **SubmissionSet.Author.AuthorRole**

## ValueSet: SubmissionSet.Author.AuthorRole 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-term/ValueSet/SubmissionSet.Author.AuthorRole | *Version*:3.3.0 |
| Active as of 2025-12-15 | *Computable Name*:SubmissionSetAuthorAuthorRole |
| *Other Identifiers:*OID:2.16.756.5.30.1.127.3.10.1.41 (use: official, ) | |
| **Copyright/Legal**: CC0-1.0 | |

 
SubmissionSet.author.authorRole 

 **References** 

 Detailed information about the **current version** of this artifact, including cross-references to resources that use it, can be found [here](http://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-term%7Ccurrent/ValueSet/SubmissionSet.Author.AuthorRole) via the XIG (Cross-IG) index for FHIR specifications. 

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
  "id" : "SubmissionSet.Author.AuthorRole",
  "meta" : {
    "source" : "https://art-decor.org/fhir/ValueSet/2.16.756.5.30.1.127.3.10.1.41--20230522175817",
    "profile" : ["http://hl7.org/fhir/StructureDefinition/shareablevalueset"]
  },
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/resource-effectivePeriod",
      "valuePeriod" : {
        "start" : "2023-05-22T17:58:17+02:00"
      }
    }
  ],
  "url" : "http://fhir.ch/ig/ch-term/ValueSet/SubmissionSet.Author.AuthorRole",
  "identifier" : [
    {
      "use" : "official",
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:oid:2.16.756.5.30.1.127.3.10.1.41"
    }
  ],
  "version" : "3.3.0",
  "name" : "SubmissionSetAuthorAuthorRole",
  "title" : "SubmissionSet.Author.AuthorRole",
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
  "description" : "SubmissionSet.author.authorRole",
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
            "code" : "DADM",
            "display" : "Document administrator",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Document administrator"
              },
              {
                "language" : "de-CH",
                "value" : "Dokumenten-Administrator"
              },
              {
                "language" : "fr-CH",
                "value" : "Administrateur de documents"
              },
              {
                "language" : "it-CH",
                "value" : "Amministratore dei documenti"
              },
              {
                "language" : "rm-CH",
                "value" : "Administratur da documents"
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
                "language" : "rm-CH",
                "value" : "Persuna spezialisada dal sectur da sanadad"
              },
              {
                "language" : "en-US",
                "value" : "Healthcare professional"
              }
            ]
          },
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
                "language" : "rm-CH",
                "value" : "Pazient"
              },
              {
                "language" : "en-US",
                "value" : "Patient"
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
                "value" : "Auxiliaire"
              },
              {
                "language" : "it-CH",
                "value" : "Persona ausiliara"
              },
              {
                "language" : "rm-CH",
                "value" : "Persuna d'agid"
              },
              {
                "language" : "en-US",
                "value" : "Assistant"
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
                "language" : "rm-CH",
                "value" : "Substituziun"
              },
              {
                "language" : "en-US",
                "value" : "Representative"
              }
            ]
          },
          {
            "code" : "TCU",
            "display" : "Technical user",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Technischer Benutzer"
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
                "language" : "rm-CH",
                "value" : "Utilisader tecnic"
              },
              {
                "language" : "en-US",
                "value" : "Technical user"
              }
            ]
          }
        ]
      }
    ]
  }
}

```
