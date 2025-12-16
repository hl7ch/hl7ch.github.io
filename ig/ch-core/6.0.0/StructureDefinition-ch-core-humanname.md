# Human Name - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Human Name**

## Data Type Profile: Human Name 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-humanname | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHCoreHumanName |
| **Copyright/Legal**: CC0-1.0 | |

 
Name with extensions for ech-11 

**Usages:**

* Use this DataType Profile: [CH Core Patient](StructureDefinition-ch-core-patient.md), [CH Core Practitioner](StructureDefinition-ch-core-practitioner.md) and [CH Core RelatedPerson](StructureDefinition-ch-core-relatedperson.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-core|current/StructureDefinition/ch-core-humanname)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-core-humanname.csv), [Excel](StructureDefinition-ch-core-humanname.xlsx), [Schematron](StructureDefinition-ch-core-humanname.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-core-humanname",
  "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-humanname",
  "version" : "6.0.0",
  "name" : "CHCoreHumanName",
  "title" : "Human Name",
  "status" : "active",
  "date" : "2025-12-16T07:58:48+00:00",
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
  "description" : "Name with extensions for ech-11",
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
  "fhirVersion" : "4.0.1",
  "mapping" : [
    {
      "identity" : "eCH",
      "uri" : "http://www.ech.ch/",
      "name" : "eCH-Standards"
    },
    {
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    },
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "servd",
      "uri" : "http://www.omg.org/spec/ServD/1.0/",
      "name" : "ServD"
    }
  ],
  "kind" : "complex-type",
  "abstract" : false,
  "type" : "HumanName",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/HumanName",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "HumanName",
        "path" : "HumanName",
        "constraint" : [
          {
            "key" : "ch-core-hm-1",
            "severity" : "error",
            "human" : "if officalName with eCH-011 Extension is specified, it can only be put on a name where use attribute is official",
            "expression" : "family.extension.where(url='http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-ech-11-name' and value='officialName').empty() or (family.extension.where(url='http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-ech-11-name' and value='officialName').exists() and use='official')",
            "source" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-humanname"
          },
          {
            "key" : "ch-core-hm-2",
            "severity" : "error",
            "human" : "if orginalName with eCH-011 Extension is specified, it can only be put on a name where use attribute is maiden",
            "expression" : "family.extension.where(url='http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-ech-11-name' and value='originalName').empty() or ((family.extension.where(url='http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-ech-11-name' and value='originalName').exists() and use='maiden'))",
            "source" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-humanname"
          },
          {
            "key" : "ch-core-hm-3",
            "severity" : "error",
            "human" : "ch-ext-ech-11-name can only be put on a family name",
            "expression" : "descendants().extension.where(url='http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-ech-11-name').count()=family.extension.where(url='http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-ech-11-name').count()",
            "source" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-humanname"
          },
          {
            "key" : "ch-core-hm-4",
            "severity" : "error",
            "human" : "ch-ext-ech-11-firstname can only be put on a given name",
            "expression" : "descendants().extension.where(url='http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-ech-11-firstname').count()=given.extension.where(url='http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-ech-11-firstname').count()",
            "source" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-humanname"
          }
        ]
      },
      {
        "id" : "HumanName.family",
        "path" : "HumanName.family",
        "mapping" : [
          {
            "identity" : "eCH",
            "map" : "eCH-0010: lastName"
          }
        ]
      },
      {
        "id" : "HumanName.family.extension",
        "path" : "HumanName.family.extension",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "url"
            }
          ],
          "rules" : "open"
        }
      },
      {
        "id" : "HumanName.family.extension:ech11name",
        "path" : "HumanName.family.extension",
        "sliceName" : "ech11name",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-ech-11-name"
            ]
          }
        ],
        "mapping" : [
          {
            "identity" : "eCH",
            "map" : "eCH-0011: officialName, originalName, allianceName, nameOnForeignPassport, aliasName, otherName, declaredForeignName"
          }
        ]
      },
      {
        "id" : "HumanName.given",
        "path" : "HumanName.given",
        "mapping" : [
          {
            "identity" : "eCH",
            "map" : "eCH-0010: firstName equivalent to callName of eCH-0011"
          }
        ]
      },
      {
        "id" : "HumanName.given.extension",
        "path" : "HumanName.given.extension",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "url"
            }
          ],
          "rules" : "open"
        }
      },
      {
        "id" : "HumanName.given.extension:ech11firstname",
        "path" : "HumanName.given.extension",
        "sliceName" : "ech11firstname",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-ech-11-firstname"
            ]
          }
        ],
        "mapping" : [
          {
            "identity" : "eCH",
            "map" : "eCH-0011: officialFirstName, callName, allianceName, firstNameOnForeignPassport, declaredForeignFirstName"
          }
        ]
      },
      {
        "id" : "HumanName.prefix",
        "path" : "HumanName.prefix",
        "short" : "For a salutation use a prefix without the iso21090-EN-qualifier extension. For academical titles and legal status use the http://hl7.org/fhir/ExtensionDefinition/iso21090-EN-qualifier with the codes AC, LS.",
        "mapping" : [
          {
            "identity" : "eCH",
            "map" : "eCH-0010: mrMrs, title"
          }
        ]
      },
      {
        "id" : "HumanName.prefix.extension",
        "path" : "HumanName.prefix.extension",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "url"
            }
          ],
          "rules" : "open"
        }
      },
      {
        "id" : "HumanName.prefix.extension:salutationandtitle",
        "path" : "HumanName.prefix.extension",
        "sliceName" : "salutationandtitle",
        "short" : "For academical titles and legal status use the http://hl7.org/fhir/ExtensionDefinition/iso21090-EN-qualifier with the codes AC, LS.",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://hl7.org/fhir/StructureDefinition/iso21090-EN-qualifier|5.3.0-ballot-tc1"
            ]
          }
        ]
      }
    ]
  }
}

```
