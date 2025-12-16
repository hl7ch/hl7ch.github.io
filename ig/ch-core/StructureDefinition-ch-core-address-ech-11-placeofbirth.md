# Address for Place of Birth - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Address for Place of Birth**

## Data Type Profile: Address for Place of Birth 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-address-ech-11-placeofbirth | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHCoreAddressEch11PlaceOfBirth |
| **Copyright/Legal**: CC0-1.0 | |

 
PlaceOfBirth for ech-11 

**Usages:**

* Use this DataType Profile: [Place of Birth according to eCH-0011](StructureDefinition-ch-core-patient-ech-11-placeofbirth.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-core|current/StructureDefinition/ch-core-address-ech-11-placeofbirth)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-core-address-ech-11-placeofbirth.csv), [Excel](StructureDefinition-ch-core-address-ech-11-placeofbirth.xlsx), [Schematron](StructureDefinition-ch-core-address-ech-11-placeofbirth.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-core-address-ech-11-placeofbirth",
  "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-address-ech-11-placeofbirth",
  "version" : "6.0.0",
  "name" : "CHCoreAddressEch11PlaceOfBirth",
  "title" : "Address for Place of Birth",
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
  "description" : "PlaceOfBirth for ech-11",
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
            "identity" : "eCH-0011",
            "map" : "3.3.2 placeOfBirth"
          }
        ]
      },
      {
        "id" : "Address.use",
        "path" : "Address.use",
        "max" : "0"
      },
      {
        "id" : "Address.type",
        "path" : "Address.type",
        "max" : "0"
      },
      {
        "id" : "Address.text",
        "path" : "Address.text",
        "max" : "0"
      },
      {
        "id" : "Address.line",
        "path" : "Address.line",
        "max" : "0"
      },
      {
        "id" : "Address.city",
        "path" : "Address.city",
        "short" : "Place of Birth (municipality)",
        "definition" : "optional if country is not Switzerland",
        "mapping" : [
          {
            "identity" : "eCH-0011",
            "map" : "Place of Birth (BFS-323, BFS-324)"
          }
        ]
      },
      {
        "id" : "Address.city.extension:bfs",
        "path" : "Address.city.extension",
        "sliceName" : "bfs",
        "mapping" : [
          {
            "identity" : "eCH-0011",
            "map" : "placeOfBirth - BFS Number for municipality Switzerland - BFS-323"
          }
        ]
      },
      {
        "id" : "Address.district",
        "path" : "Address.district",
        "max" : "0"
      },
      {
        "id" : "Address.state",
        "path" : "Address.state",
        "short" : "Canton",
        "definition" : "Canton 2 letter abbreviation"
      },
      {
        "id" : "Address.postalCode",
        "path" : "Address.postalCode",
        "max" : "0"
      },
      {
        "id" : "Address.country",
        "path" : "Address.country",
        "short" : "Country if place of Birth is not Switzerland",
        "definition" : "Country if place of Birth is not Switzerland",
        "mapping" : [
          {
            "identity" : "eCH-0011",
            "map" : "BFS-322"
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
