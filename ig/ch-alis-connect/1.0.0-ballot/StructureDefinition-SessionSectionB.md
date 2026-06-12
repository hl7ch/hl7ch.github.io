# CH ALIS Leistungsschnittstelle - SessionSectionB - CH ALIS Connect (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ALIS Leistungsschnittstelle - SessionSectionB**

## Logical Model: CH ALIS Leistungsschnittstelle - SessionSectionB 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-alis-connect/StructureDefinition/SessionSectionB | *Version*:1.0.0-ballot |
| Active as of 2026-06-12 | *Computable Name*:ChAlisLeistungsschnittstelleSessionSectionB |
| **Copyright/Legal**: CC0-1.0 | |

 
This logical model describes the Treatment of 'Leistungsschnittstelle ALIS Version 5.1'. 

**Usages:**

* Use this Logical Model: [CH ALIS Leistungsschnittstelle - Service](StructureDefinition-Service.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-alis-connect|current/StructureDefinition/StructureDefinition-SessionSectionB.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-SessionSectionB.csv), [Excel](StructureDefinition-SessionSectionB.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "SessionSectionB",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/elementdefinition-namespace",
    "valueUri" : "noNamespace"
  }],
  "url" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/SessionSectionB",
  "version" : "1.0.0-ballot",
  "name" : "ChAlisLeistungsschnittstelleSessionSectionB",
  "title" : "CH ALIS Leistungsschnittstelle - SessionSectionB",
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
  "description" : "This logical model describes the Treatment of 'Leistungsschnittstelle ALIS Version 5.1'.",
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
  "type" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/SessionSectionB",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "SessionSectionB",
      "path" : "SessionSectionB",
      "short" : "CH ALIS Leistungsschnittstelle - SessionSectionB",
      "definition" : "3.19 (*)\tSitzung Anhang B"
    },
    {
      "id" : "SessionSectionB.SessionIDSectionB",
      "path" : "SessionSectionB.SessionIDSectionB",
      "short" : "3.19.1 (*)\tSitzungsID\tGUID\tMuss für Leistungen im Rahmen einer Sitzung gemäss Anhang B abgefüllt werden. Wird das Feld verwendet, müssen ALLE Leistungen zur Sitzung mit der gleichen GUID übermittelt werden.\tOptional\tSessionIDSectionB",
      "definition" : "3.19.1 (*)\tSitzungsID\tGUID\tMuss für Leistungen im Rahmen einer Sitzung gemäss Anhang B abgefüllt werden. Wird das Feld verwendet, müssen ALLE Leistungen zur Sitzung mit der gleichen GUID übermittelt werden.\tOptional\tSessionIDSectionB",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/Text"
      }]
    },
    {
      "id" : "SessionSectionB.AssignedSessionSectionB",
      "path" : "SessionSectionB.AssignedSessionSectionB",
      "short" : "3.19.2 (*)\tReferenz auf Sitzung\tGUID\tMuss für Leistungen, die gemäss Anhang B Kap 4 zugeordnet werden sollen, befüllt sein.\tOptional\tAssignedSessionSectionB",
      "definition" : "3.19.2 (*)\tReferenz auf Sitzung\tGUID\tMuss für Leistungen, die gemäss Anhang B Kap 4 zugeordnet werden sollen, befüllt sein.\tOptional\tAssignedSessionSectionB",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/Text"
      }]
    }]
  }
}

```
