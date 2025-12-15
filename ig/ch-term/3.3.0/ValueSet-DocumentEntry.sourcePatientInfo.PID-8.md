# DocumentEntry.sourcePatientInfo.PID-8 - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DocumentEntry.sourcePatientInfo.PID-8**

## ValueSet: DocumentEntry.sourcePatientInfo.PID-8 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-term/ValueSet/DocumentEntry.sourcePatientInfo.PID-8 | *Version*:3.3.0 |
| Active as of 2025-12-15 | *Computable Name*:DocumentEntrySourcePatientInfoPID8 |
| *Other Identifiers:*OID:2.16.840.1.113883.4.642.3.1 (use: official, ) | |
| **Copyright/Legal**: CC0-1.0 | |

 
Patient’s gender as per Annex 3; EPRO-FDHA. 

 **References** 

 Detailed information about the **current version** of this artifact, including cross-references to resources that use it, can be found [here](http://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-term%7Ccurrent/ValueSet/DocumentEntry.sourcePatientInfo.PID-8) via the XIG (Cross-IG) index for FHIR specifications. 

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
  "id" : "DocumentEntry.sourcePatientInfo.PID-8",
  "meta" : {
    "source" : "https://art-decor.org/fhir/ValueSet/2.16.840.1.113883.4.642.3.1--20230522173837",
    "profile" : ["http://hl7.org/fhir/StructureDefinition/shareablevalueset"]
  },
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/resource-effectivePeriod",
      "valuePeriod" : {
        "start" : "2023-05-22T17:38:37+02:00"
      }
    }
  ],
  "url" : "http://fhir.ch/ig/ch-term/ValueSet/DocumentEntry.sourcePatientInfo.PID-8",
  "identifier" : [
    {
      "use" : "official",
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:oid:2.16.840.1.113883.4.642.3.1"
    }
  ],
  "version" : "3.3.0",
  "name" : "DocumentEntrySourcePatientInfoPID8",
  "title" : "DocumentEntry.sourcePatientInfo.PID-8",
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
  "description" : "Patient’s gender as per Annex 3; EPRO-FDHA.",
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
        "system" : "http://hl7.org/fhir/administrative-gender",
        "concept" : [
          {
            "code" : "female",
            "display" : "Female",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Weiblich"
              },
              {
                "language" : "fr-CH",
                "value" : "Féminin"
              },
              {
                "language" : "it-CH",
                "value" : "Femminile"
              },
              {
                "language" : "en-US",
                "value" : "Female"
              },
              {
                "language" : "rm-CH",
                "value" : "Feminin"
              }
            ]
          },
          {
            "code" : "male",
            "display" : "Male",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Männlich"
              },
              {
                "language" : "fr-CH",
                "value" : "Masculin"
              },
              {
                "language" : "it-CH",
                "value" : "Maschile"
              },
              {
                "language" : "en-US",
                "value" : "Male"
              },
              {
                "language" : "rm-CH",
                "value" : "Masculin"
              }
            ]
          },
          {
            "code" : "other",
            "display" : "Other",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Anderes"
              },
              {
                "language" : "fr-CH",
                "value" : "Autre"
              },
              {
                "language" : "it-CH",
                "value" : "Altro"
              },
              {
                "language" : "en-US",
                "value" : "Other"
              },
              {
                "language" : "rm-CH",
                "value" : "Auter"
              }
            ]
          },
          {
            "code" : "unknown",
            "display" : "Unknown",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Unbekannt"
              },
              {
                "language" : "fr-CH",
                "value" : "Inconnu"
              },
              {
                "language" : "it-CH",
                "value" : "Sconosciuto"
              },
              {
                "language" : "en-US",
                "value" : "Unknown"
              },
              {
                "language" : "rm-CH",
                "value" : "Nunenconuschent"
              }
            ]
          }
        ]
      }
    ]
  }
}

```
