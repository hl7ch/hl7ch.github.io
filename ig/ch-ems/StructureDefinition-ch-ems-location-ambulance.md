# CH EMS Location: Ambulance - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EMS Location: Ambulance**

## Resource Profile: CH EMS Location: Ambulance 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-location-ambulance | *Version*:2.0.0-ballot |
| Active as of 2026-06-15 | *Computable Name*:CHEmsLocationAmbulance |
| **Copyright/Legal**: CC0-1.0 | |

 
This profile constrains the Location resource for representing the ambulance with its type. 

**Usages:**

* Refer to this Profile: [CH EMS Composition](StructureDefinition-ch-ems-composition.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-ems|current/StructureDefinition/StructureDefinition-ch-ems-location-ambulance.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-ems-location-ambulance.csv), [Excel](StructureDefinition-ch-ems-location-ambulance.xlsx), [Schematron](StructureDefinition-ch-ems-location-ambulance.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-ems-location-ambulance",
  "url" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-location-ambulance",
  "version" : "2.0.0-ballot",
  "name" : "CHEmsLocationAmbulance",
  "title" : "CH EMS Location: Ambulance",
  "status" : "active",
  "date" : "2026-06-15T08:07:03+00:00",
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
  "description" : "This profile constrains the Location resource for representing the ambulance with its type.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "fhirVersion" : "4.0.1",
  "mapping" : [{
    "identity" : "eCH",
    "uri" : "https://www.ech.ch/",
    "name" : "eCH Standards"
  },
  {
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  },
  {
    "identity" : "w5",
    "uri" : "http://hl7.org/fhir/fivews",
    "name" : "FiveWs Pattern Mapping"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Location",
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-location",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Location",
      "path" : "Location",
      "short" : "CH EMS Location: Ambulance"
    },
    {
      "id" : "Location.extension",
      "path" : "Location.extension",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "url"
        }],
        "ordered" : false,
        "rules" : "open"
      }
    },
    {
      "id" : "Location.extension:disinfection",
      "path" : "Location.extension",
      "sliceName" : "disinfection",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-ext-disinfection"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Location.physicalType",
      "path" : "Location.physicalType",
      "type" : [{
        "code" : "CodeableConcept",
        "profile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-codeableconcept"]
      }],
      "mustSupport" : true,
      "binding" : {
        "strength" : "extensible",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-ambulanceType"
      }
    }]
  }
}

```
