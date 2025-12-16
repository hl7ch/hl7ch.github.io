# CH Core ContactPoint eCH-0046 Phone - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH Core ContactPoint eCH-0046 Phone**

## Data Type Profile: CH Core ContactPoint eCH-0046 Phone 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-contactpoint-ech-46-phone | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHCoreContactPointECH46Phone |
| **Copyright/Legal**: CC0-1.0 | |

 
Phone number as contact point of a person or organization according to eCH-0046 

**Usages:**

* Use this DataType Profile: [CH Core Location](StructureDefinition-ch-core-location.md), [CH Core Organization](StructureDefinition-ch-core-organization.md), [CH Core Patient](StructureDefinition-ch-core-patient.md), [CH Core Practitioner](StructureDefinition-ch-core-practitioner.md) and [CH Core RelatedPerson](StructureDefinition-ch-core-relatedperson.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-core|current/StructureDefinition/ch-core-contactpoint-ech-46-phone)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-core-contactpoint-ech-46-phone.csv), [Excel](StructureDefinition-ch-core-contactpoint-ech-46-phone.xlsx), [Schematron](StructureDefinition-ch-core-contactpoint-ech-46-phone.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-core-contactpoint-ech-46-phone",
  "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-contactpoint-ech-46-phone",
  "version" : "6.0.0",
  "name" : "CHCoreContactPointECH46Phone",
  "title" : "CH Core ContactPoint eCH-0046 Phone",
  "status" : "active",
  "date" : "2025-12-16T08:02:49+00:00",
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
  "description" : "Phone number as contact point of a person or organization according to eCH-0046",
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
      "uri" : "https://www.ech.ch/",
      "name" : "eCH Standards"
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
  "type" : "ContactPoint",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/ContactPoint",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "ContactPoint",
        "path" : "ContactPoint",
        "short" : "CH Core ContactPoint eCH-0046 Phone",
        "mapping" : [
          {
            "identity" : "eCH",
            "map" : "eCH-0046: phone"
          }
        ]
      },
      {
        "id" : "ContactPoint.system",
        "path" : "ContactPoint.system",
        "min" : 1,
        "fixedCode" : "phone",
        "mapping" : [
          {
            "identity" : "eCH",
            "map" : "eCH-0046: phoneType"
          }
        ]
      },
      {
        "id" : "ContactPoint.value",
        "path" : "ContactPoint.value",
        "min" : 1,
        "mapping" : [
          {
            "identity" : "eCH",
            "map" : "eCH-0046: phoneNumber"
          }
        ]
      },
      {
        "id" : "ContactPoint.use",
        "path" : "ContactPoint.use",
        "mapping" : [
          {
            "identity" : "eCH",
            "map" : "eCH-0046: phoneCategory/otherPhoneCategory"
          }
        ]
      },
      {
        "id" : "ContactPoint.use.extension",
        "path" : "ContactPoint.use.extension",
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
        "id" : "ContactPoint.use.extension:phoneCategory",
        "path" : "ContactPoint.use.extension",
        "sliceName" : "phoneCategory",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-ech-46-phonecategory"
            ]
          }
        ],
        "mapping" : [
          {
            "identity" : "eCH",
            "map" : "eCH-0046: phoneNumberCategory"
          }
        ]
      },
      {
        "id" : "ContactPoint.period",
        "path" : "ContactPoint.period",
        "mapping" : [
          {
            "identity" : "eCH",
            "map" : "eCH-0046: validity"
          }
        ]
      },
      {
        "id" : "ContactPoint.period.start",
        "path" : "ContactPoint.period.start",
        "mapping" : [
          {
            "identity" : "eCH",
            "map" : "eCH-0046: dateFrom"
          }
        ]
      },
      {
        "id" : "ContactPoint.period.end",
        "path" : "ContactPoint.period.end",
        "mapping" : [
          {
            "identity" : "eCH",
            "map" : "eCH-0046: dateTo"
          }
        ]
      }
    ]
  }
}

```
