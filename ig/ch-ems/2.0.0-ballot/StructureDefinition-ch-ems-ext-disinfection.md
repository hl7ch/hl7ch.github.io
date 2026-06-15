# CH EMS Extension: Disinfection - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EMS Extension: Disinfection**

## Extension: CH EMS Extension: Disinfection 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-ext-disinfection | *Version*:2.0.0-ballot |
| Active as of 2026-06-15 | *Computable Name*:CHEmsExtDisinfection |
| **Copyright/Legal**: CC0-1.0 | |

Extension to define the disinfection of the ambulance.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [CH EMS Location: Ambulance](StructureDefinition-ch-ems-location-ambulance.md)
* Examples for this Extension: [Location/LocationAmbulance](Location-LocationAmbulance.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-ems|current/StructureDefinition/StructureDefinition-ch-ems-ext-disinfection.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-ems-ext-disinfection.csv), [Excel](StructureDefinition-ch-ems-ext-disinfection.xlsx), [Schematron](StructureDefinition-ch-ems-ext-disinfection.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-ems-ext-disinfection",
  "url" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-ext-disinfection",
  "version" : "2.0.0-ballot",
  "name" : "CHEmsExtDisinfection",
  "title" : "CH EMS Extension: Disinfection",
  "status" : "active",
  "date" : "2026-06-15T08:00:21+00:00",
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
  "description" : "Extension to define the disinfection of the ambulance.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "fhirVersion" : "4.0.1",
  "mapping" : [{
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  }],
  "kind" : "complex-type",
  "abstract" : false,
  "context" : [{
    "type" : "element",
    "expression" : "Location"
  }],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Extension",
      "path" : "Extension",
      "short" : "CH EMS Extension: Disinfection",
      "definition" : "Extension to define the disinfection of the ambulance."
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-ext-disinfection"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "min" : 1,
      "type" : [{
        "code" : "CodeableConcept",
        "profile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-codeableconcept"]
      }],
      "binding" : {
        "strength" : "extensible",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-transDisinfection"
      }
    }]
  }
}

```
