# Address for Place of Origin - CH Core (R4) v7.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Address for Place of Origin**

## Data Type Profile: Address for Place of Origin 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-address-ech-11-placeoforigin | *Version*:7.0.0-ballot |
| Active as of 2026-06-10 | *Computable Name*:CHCoreAddressECH11PlaceOfOrigin |
| **Copyright/Legal**: CC0-1.0 | |

 
Place of Origin for eCH-0011 

**Usages:**

* Use this DataType Profile: [Place of Origin according to eCH-0011](StructureDefinition-ch-core-patient-ech-11-placeoforigin.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-core|current/StructureDefinition/StructureDefinition-ch-core-address-ech-11-placeoforigin.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-core-address-ech-11-placeoforigin.csv), [Excel](StructureDefinition-ch-core-address-ech-11-placeoforigin.xlsx), [Schematron](StructureDefinition-ch-core-address-ech-11-placeoforigin.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-core-address-ech-11-placeoforigin",
  "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-address-ech-11-placeoforigin",
  "version" : "7.0.0-ballot",
  "name" : "CHCoreAddressECH11PlaceOfOrigin",
  "title" : "Address for Place of Origin",
  "status" : "active",
  "date" : "2026-06-10T14:59:48+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [{
    "name" : "HL7 Switzerland",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.ch/"
    }]
  },
  {
    "name" : "HL7 Switzerland",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.ch/",
      "use" : "work"
    }]
  }],
  "description" : "Place of Origin for eCH-0011",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "fhirVersion" : "4.0.1",
  "mapping" : [{
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
  }],
  "kind" : "complex-type",
  "abstract" : false,
  "type" : "Address",
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-address",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Address",
      "path" : "Address",
      "mapping" : [{
        "identity" : "eCH-0011",
        "map" : "3.3.10 placeoforigin"
      }]
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
      "short" : "Name of place of origin (municipality)",
      "definition" : "optional if country is not Switzerland",
      "mapping" : [{
        "identity" : "eCH-0011",
        "map" : "3.3.10.1 originName, BFS-42"
      }]
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
      "definition" : "Canton 2 letter abbreviation",
      "min" : 1,
      "mapping" : [{
        "identity" : "eCH-0011",
        "map" : "3.3.10.2 canton"
      }]
    },
    {
      "id" : "Address.postalCode",
      "path" : "Address.postalCode",
      "max" : "0"
    },
    {
      "id" : "Address.country",
      "path" : "Address.country",
      "short" : "Country if place of orgin is not Switzerland",
      "definition" : "Country if place of orgin is not Switzerland",
      "max" : "0"
    },
    {
      "id" : "Address.country.extension:countrycode",
      "path" : "Address.country.extension",
      "sliceName" : "countrycode",
      "definition" : "The content of the country code element (if present) SHALL be selected EITHER from ValueSet ISO Country Alpha-2 http://hl7.org/fhir/ValueSet/iso3166-1-2 OR MAY be selected from ISO Country Alpha-3 Value Set http://hl7.org/fhir/ValueSet/iso3166-1-3, if the country is not specified in value Set ISO Country Alpha-2 http://hl7.org/fhir/ValueSet/iso3166-1-2.",
      "mapping" : [{
        "identity" : "eCH-0011",
        "map" : "3.3.6 nationalityData"
      }]
    },
    {
      "id" : "Address.period",
      "path" : "Address.period",
      "max" : "0"
    }]
  }
}

```
