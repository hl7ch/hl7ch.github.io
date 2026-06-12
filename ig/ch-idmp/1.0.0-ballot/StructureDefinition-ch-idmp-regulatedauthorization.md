# RegulatedAuthorization - CH IDMP (R5) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **RegulatedAuthorization**

## Resource Profile: RegulatedAuthorization 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-regulatedauthorization | *Version*:1.0.0-ballot |
| Active as of 2026-06-12 | *Computable Name*:CHIDMPRegulatedAuthorization |
| **Copyright/Legal**: CC0-1.0 | |

 
Profile of the RegulatedAuthorization resource for representing the market authorization of a (packaged) medicinal product. 

**Usages:**

* Use this Profile: [Bundle](StructureDefinition-ch-idmp-bundle.md)
* Examples for this Profile: [RegulatedAuthorization/MA-123456002](RegulatedAuthorization-MA-123456002.md), [RegulatedAuthorization/MA-12345601](RegulatedAuthorization-MA-12345601.md), [RegulatedAuthorization/MA-67211001](RegulatedAuthorization-MA-67211001.md), [RegulatedAuthorization/MA-6721101](RegulatedAuthorization-MA-6721101.md)... Show 4 more, [RegulatedAuthorization/MA-68291001](RegulatedAuthorization-MA-68291001.md), [RegulatedAuthorization/MA-68291002](RegulatedAuthorization-MA-68291002.md), [RegulatedAuthorization/MA-6829103](RegulatedAuthorization-MA-6829103.md) and [RegulatedAuthorization/MA-6829104](RegulatedAuthorization-MA-6829104.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-idmp|current/StructureDefinition/StructureDefinition-ch-idmp-regulatedauthorization.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-idmp-regulatedauthorization.csv), [Excel](StructureDefinition-ch-idmp-regulatedauthorization.xlsx), [Schematron](StructureDefinition-ch-idmp-regulatedauthorization.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-idmp-regulatedauthorization",
  "url" : "http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-regulatedauthorization",
  "version" : "1.0.0-ballot",
  "name" : "CHIDMPRegulatedAuthorization",
  "title" : "RegulatedAuthorization",
  "status" : "active",
  "date" : "2026-06-12T16:14:23+00:00",
  "publisher" : "Refdata Foundation",
  "contact" : [{
    "name" : "Refdata Foundation",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.refdata.ch/de/"
    }]
  }],
  "description" : "Profile of the RegulatedAuthorization resource for representing the market authorization of a (packaged) medicinal product.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "fhirVersion" : "5.0.0",
  "mapping" : [{
    "identity" : "w5",
    "uri" : "http://hl7.org/fhir/fivews",
    "name" : "FiveWs Pattern Mapping"
  },
  {
    "identity" : "idmp",
    "uri" : "https://www.iso.org/obp/ui/#iso:std:iso:11615",
    "name" : "IDMP Mapping"
  },
  {
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "RegulatedAuthorization",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/RegulatedAuthorization",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "RegulatedAuthorization",
      "path" : "RegulatedAuthorization",
      "short" : "RegulatedAuthorization"
    },
    {
      "id" : "RegulatedAuthorization.subject",
      "path" : "RegulatedAuthorization.subject",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-medicinalproductdefinition",
        "http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-packagedproductdefinition",
        "http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-manufactureditemdefinition",
        "http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-ingredient"]
      }]
    },
    {
      "id" : "RegulatedAuthorization.type",
      "path" : "RegulatedAuthorization.type",
      "binding" : {
        "strength" : "required",
        "valueSet" : "http://fhir.ch/ig/ch-idmp/ValueSet/ch-authorisation-type-vs"
      }
    },
    {
      "id" : "RegulatedAuthorization.region",
      "path" : "RegulatedAuthorization.region",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "urn:iso:std:iso:3166",
          "code" : "CH"
        }]
      }
    },
    {
      "id" : "RegulatedAuthorization.status",
      "path" : "RegulatedAuthorization.status",
      "binding" : {
        "strength" : "required",
        "valueSet" : "http://fhir.ch/ig/ch-idmp/ValueSet/ch-SMC-authorisation-status"
      }
    },
    {
      "id" : "RegulatedAuthorization.holder",
      "path" : "RegulatedAuthorization.holder",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/Organization"],
        "aggregation" : ["contained"]
      }]
    },
    {
      "id" : "RegulatedAuthorization.regulator",
      "path" : "RegulatedAuthorization.regulator",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/Organization"],
        "aggregation" : ["contained"]
      }]
    }]
  }
}

```
