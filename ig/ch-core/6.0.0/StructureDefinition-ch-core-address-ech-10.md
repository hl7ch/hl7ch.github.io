# CH Core Postal Address - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH Core Postal Address**

## Data Type Profile: CH Core Postal Address 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-address-ech-10 | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHCoreAddressECH10 |
| **Copyright/Legal**: CC0-1.0 | |

 
Postal address according to eCH-0010 

**Usages:**

* Use this DataType Profile: [CH Core Location](StructureDefinition-ch-core-location.md) and [CH Core Patient](StructureDefinition-ch-core-patient.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-core|current/StructureDefinition/ch-core-address-ech-10)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-core-address-ech-10.csv), [Excel](StructureDefinition-ch-core-address-ech-10.xlsx), [Schematron](StructureDefinition-ch-core-address-ech-10.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-core-address-ech-10",
  "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-address-ech-10",
  "version" : "6.0.0",
  "name" : "CHCoreAddressECH10",
  "title" : "CH Core Postal Address",
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
  "description" : "Postal address according to eCH-0010",
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
      "identity" : "eCH-0011",
      "uri" : "http://www.ech.ch/standards/39485",
      "name" : "eCH-0011 Datenstandard Personendaten"
    },
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
    },
    {
      "identity" : "vcard",
      "uri" : "http://w3.org/vcard",
      "name" : "vCard Mapping"
    }
  ],
  "kind" : "complex-type",
  "abstract" : false,
  "type" : "Address",
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-address",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Address",
        "path" : "Address",
        "mapping" : [
          {
            "identity" : "eCH",
            "map" : "eCH-0010: addressInformation"
          }
        ]
      },
      {
        "id" : "Address.type",
        "path" : "Address.type",
        "short" : "postal",
        "fixedCode" : "postal"
      },
      {
        "id" : "Address.city",
        "path" : "Address.city",
        "min" : 1,
        "mapping" : [
          {
            "identity" : "eCH",
            "map" : "eCH-0010: town"
          }
        ]
      },
      {
        "id" : "Address.postalCode",
        "path" : "Address.postalCode",
        "min" : 1,
        "mapping" : [
          {
            "identity" : "eCH",
            "map" : "eCH-0010: swissZipCode, swissZipCodeAddOn, swissZipCodeId, foreignZipCode"
          }
        ]
      },
      {
        "id" : "Address.country",
        "path" : "Address.country",
        "min" : 1,
        "mapping" : [
          {
            "identity" : "eCH",
            "map" : "eCH-0010: country"
          }
        ]
      },
      {
        "id" : "Address.period",
        "path" : "Address.period",
        "max" : "0"
      }
    ]
  }
}

```
