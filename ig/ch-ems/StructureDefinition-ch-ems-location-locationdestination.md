# CH EMS Location: Location and Destination - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EMS Location: Location and Destination**

## Resource Profile: CH EMS Location: Location and Destination 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-location-locationdestination | *Version*:2.0.0-ballot |
| Active as of 2026-06-15 | *Computable Name*:CHEmsLocationLocationDestination |
| **Copyright/Legal**: CC0-1.0 | |

 
This profile constrains the Location resource for representing the location and the destination of the mission, either as physical location (address) or geographic location (position). 

**Usages:**

* Refer to this Profile: [CH EMS Encounter](StructureDefinition-ch-ems-encounter.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-ems|current/StructureDefinition/StructureDefinition-ch-ems-location-locationdestination.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-ems-location-locationdestination.csv), [Excel](StructureDefinition-ch-ems-location-locationdestination.xlsx), [Schematron](StructureDefinition-ch-ems-location-locationdestination.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-ems-location-locationdestination",
  "url" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-location-locationdestination",
  "version" : "2.0.0-ballot",
  "name" : "CHEmsLocationLocationDestination",
  "title" : "CH EMS Location: Location and Destination",
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
  "description" : "This profile constrains the Location resource for representing the location and the destination of the mission, either as physical location (address) or geographic location (position).",
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
      "short" : "CH EMS Location: Location and Destination"
    },
    {
      "id" : "Location.identifier",
      "path" : "Location.identifier",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "$this"
        }],
        "rules" : "open"
      }
    },
    {
      "id" : "Location.identifier:GLN",
      "path" : "Location.identifier",
      "sliceName" : "GLN",
      "short" : "GLN of the destination hospital",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Identifier",
        "profile" : ["http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-gln-identifier"]
      }],
      "patternIdentifier" : {
        "system" : "urn:oid:2.51.1.3"
      },
      "mustSupport" : true
    },
    {
      "id" : "Location.name",
      "path" : "Location.name",
      "mustSupport" : true
    },
    {
      "id" : "Location.address",
      "path" : "Location.address",
      "mustSupport" : true
    },
    {
      "id" : "Location.address.line",
      "path" : "Location.address.line",
      "short" : "Strasse"
    },
    {
      "id" : "Location.address.city",
      "path" : "Location.address.city",
      "short" : "Ort"
    },
    {
      "id" : "Location.address.postalCode",
      "path" : "Location.address.postalCode",
      "short" : "PLZ"
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
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-locationType"
      }
    },
    {
      "id" : "Location.position.longitude",
      "path" : "Location.position.longitude",
      "mustSupport" : true
    },
    {
      "id" : "Location.position.latitude",
      "path" : "Location.position.latitude",
      "mustSupport" : true
    }]
  }
}

```
