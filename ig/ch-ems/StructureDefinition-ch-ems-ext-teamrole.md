# CH EMS Extension: Team Role - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EMS Extension: Team Role**

## Extension: CH EMS Extension: Team Role 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-ext-teamrole | *Version*:2.0.0-ballot |
| Active as of 2026-06-15 | *Computable Name*:CHEmsExtTeamRole |
| **Copyright/Legal**: CC0-1.0 | |

Extension to define the role of the team member.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [CH EMS Encounter](StructureDefinition-ch-ems-encounter.md)
* Examples for this Extension: [Bundle/1-Einsatzprotokoll](Bundle-1-Einsatzprotokoll.md), [Bundle/1b-Einsatzprotokoll](Bundle-1b-Einsatzprotokoll.md), [Bundle/2-Einsatzprotokoll](Bundle-2-Einsatzprotokoll.md), [Bundle/2b-Einsatzprotokoll](Bundle-2b-Einsatzprotokoll.md)... Show 3 more, [Encounter/1-Einsatz](Encounter-1-Einsatz.md), [Encounter/2-Einsatz](Encounter-2-Einsatz.md) and [Encounter/EncounterExample](Encounter-EncounterExample.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-ems|current/StructureDefinition/StructureDefinition-ch-ems-ext-teamrole.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-ems-ext-teamrole.csv), [Excel](StructureDefinition-ch-ems-ext-teamrole.xlsx), [Schematron](StructureDefinition-ch-ems-ext-teamrole.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-ems-ext-teamrole",
  "url" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-ext-teamrole",
  "version" : "2.0.0-ballot",
  "name" : "CHEmsExtTeamRole",
  "title" : "CH EMS Extension: Team Role",
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
  "description" : "Extension to define the role of the team member.",
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
    "expression" : "Encounter.participant"
  }],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Extension",
      "path" : "Extension",
      "short" : "CH EMS Extension: Team Role",
      "definition" : "Extension to define the role of the team member."
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-ext-teamrole"
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
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-teamRole"
      }
    }]
  }
}

```
