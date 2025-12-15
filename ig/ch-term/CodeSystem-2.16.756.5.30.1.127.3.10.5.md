# ch-ehealth-codesystem-purposeOfUse - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ch-ehealth-codesystem-purposeOfUse**

## CodeSystem: ch-ehealth-codesystem-purposeOfUse 

| | |
| :--- | :--- |
| *Official URL*:urn:oid:2.16.756.5.30.1.127.3.10.5 | *Version*:3.3.0 |
| Active as of 2025-12-15 | *Computable Name*:ChEhealthCodesystemPurposeOfUse |
| **Copyright/Legal**: CC0-1.0 | |

 
Purpose Of Use as per Annex 5 EPRO-FDHA, Extension 1. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [EprPurposeOfUse](ValueSet-EprPurposeOfUse.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "2.16.756.5.30.1.127.3.10.5",
  "meta" : {
    "source" : "https://art-decor.org/fhir/ValueSet/2.16.756.5.30.1.127.3.10.15.2--20230412152346"
  },
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/resource-effectivePeriod",
      "valuePeriod" : {
        "start" : "2023-04-12T15:23:46+02:00"
      }
    }
  ],
  "url" : "urn:oid:2.16.756.5.30.1.127.3.10.5",
  "version" : "3.3.0",
  "name" : "ChEhealthCodesystemPurposeOfUse",
  "title" : "ch-ehealth-codesystem-purposeOfUse",
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
  "copyright" : "CC0-1.0",
  "caseSensitive" : true,
  "content" : "complete",
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

```
