# EprPurposeOfUse - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EprPurposeOfUse**

## ValueSet: EprPurposeOfUse 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-term/ValueSet/EprPurposeOfUse | *Version*:3.3.0 |
| Active as of 2025-12-15 | *Computable Name*:EprPurposeOfUse |
| *Other Identifiers:*OID:2.16.756.5.30.1.127.3.10.15.2 (use: official, ) | |
| **Copyright/Legal**: CC0-1.0 | |

 
Purpose Of Use as per Annex 5 EPRO-FDHA, Extension 1. 

 **References** 

 Detailed information about the **current version** of this artifact, including cross-references to resources that use it, can be found [here](http://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-term%7Ccurrent/ValueSet/EprPurposeOfUse) via the XIG (Cross-IG) index for FHIR specifications. 

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
  "id" : "EprPurposeOfUse",
  "meta" : {
    "source" : "https://art-decor.org/fhir/ValueSet/2.16.756.5.30.1.127.3.10.15.2--20230412152346",
    "profile" : ["http://hl7.org/fhir/StructureDefinition/shareablevalueset"]
  },
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/resource-effectivePeriod",
      "valuePeriod" : {
        "start" : "2023-04-12T15:23:46+02:00"
      }
    }
  ],
  "url" : "http://fhir.ch/ig/ch-term/ValueSet/EprPurposeOfUse",
  "identifier" : [
    {
      "use" : "official",
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:oid:2.16.756.5.30.1.127.3.10.15.2"
    }
  ],
  "version" : "3.3.0",
  "name" : "EprPurposeOfUse",
  "title" : "EprPurposeOfUse",
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
  "description" : "Purpose Of Use as per Annex 5 EPRO-FDHA, Extension 1.",
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
        "system" : "urn:oid:2.16.756.5.30.1.127.3.10.5",
        "concept" : [
          {
            "code" : "DICOM_AUTO",
            "display" : "Automatic upload of radiological contents",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Automatic upload of radiological contents"
              },
              {
                "language" : "de-CH",
                "value" : "Automatisches Hochladen von radiologischen Inhalten"
              },
              {
                "language" : "fr-CH",
                "value" : "Téléchargement automatique de contenus radiologiques"
              },
              {
                "language" : "it-CH",
                "value" : "Caricamento automatico del contenuto radiologico"
              },
              {
                "language" : "rm-CH",
                "value" : "Chargia automatica dal cuntegn radiologic"
              }
            ]
          },
          {
            "code" : "EMER",
            "display" : "Emergency Access",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Notfallzugriff"
              },
              {
                "language" : "fr-CH",
                "value" : "Accès d’urgence"
              },
              {
                "language" : "it-CH",
                "value" : "Accesso di emergenza"
              },
              {
                "language" : "en-US",
                "value" : "Emergency Access"
              },
              {
                "language" : "rm-CH",
                "value" : "Access d'urgenza"
              }
            ]
          },
          {
            "code" : "NORM",
            "display" : "Normal Access",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Normaler Zugriff"
              },
              {
                "language" : "fr-CH",
                "value" : "Accès normal"
              },
              {
                "language" : "it-CH",
                "value" : "Accesso normale"
              },
              {
                "language" : "en-US",
                "value" : "Normal Access"
              },
              {
                "language" : "rm-CH",
                "value" : "Access normal"
              }
            ]
          },
          {
            "code" : "AUTO",
            "display" : "Automatic Upload",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Automatisches Hochladen"
              },
              {
                "language" : "fr-CH",
                "value" : "Téléchargement automatique"
              },
              {
                "language" : "it-CH",
                "value" : "Caricamento automatico"
              },
              {
                "language" : "en-US",
                "value" : "Automatic Upload"
              },
              {
                "language" : "rm-CH",
                "value" : "Chargia automatica"
              }
            ]
          }
        ]
      }
    ]
  }
}

```
