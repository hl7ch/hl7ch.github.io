# CH ALIS Leistungsschnittstelle - PersonV40 - CH ALIS Connect (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ALIS Leistungsschnittstelle - PersonV40**

## Logical Model: CH ALIS Leistungsschnittstelle - PersonV40 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-alis-connect/StructureDefinition/PersonV40 | *Version*:1.0.0-ballot |
| Active as of 2026-06-12 | *Computable Name*:ChAlisLeistungsschnittstellePersonV40 |
| **Copyright/Legal**: CC0-1.0 | |

 
This logical model describes the PersonV40 of 'Leistungsschnittstelle ALIS Version 5.1'. 

**Usages:**

* Use this Logical Model: [CH ALIS Leistungsschnittstelle - Service](StructureDefinition-Service.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-alis-connect|current/StructureDefinition/StructureDefinition-PersonV40.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-PersonV40.csv), [Excel](StructureDefinition-PersonV40.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "PersonV40",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/elementdefinition-namespace",
    "valueUri" : "noNamespace"
  }],
  "url" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/PersonV40",
  "version" : "1.0.0-ballot",
  "name" : "ChAlisLeistungsschnittstellePersonV40",
  "title" : "CH ALIS Leistungsschnittstelle - PersonV40",
  "status" : "active",
  "date" : "2026-06-12T18:35:48+00:00",
  "publisher" : "ALIS-Connect",
  "contact" : [{
    "name" : "ALIS-Connect",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.alis-connect.ch/"
    }]
  }],
  "description" : "This logical model describes the PersonV40 of 'Leistungsschnittstelle ALIS Version 5.1'.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "fhirVersion" : "4.0.1",
  "kind" : "logical",
  "abstract" : false,
  "type" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/PersonV40",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "PersonV40",
      "path" : "PersonV40",
      "short" : "CH ALIS Leistungsschnittstelle - PersonV40",
      "definition" : "3.22, PersonV40\tOptional (0,N)"
    },
    {
      "id" : "PersonV40.PersonTyp",
      "path" : "PersonV40.PersonTyp",
      "representation" : ["xmlAttr"],
      "short" : "3.22.1\tPersonTyp\tAlphanum.\t\tObligatorisch",
      "definition" : "3.22.1\tPersonTyp\tAlphanum.\t\tObligatorisch",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "PersonV40.PersonID",
      "path" : "PersonV40.PersonID",
      "short" : "3.22.2\tPersonID Alphanum.Obligatorisch",
      "definition" : "3.22.2\tPersonID Alphanum.Obligatorisch",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/Text"
      }]
    }]
  }
}

```
