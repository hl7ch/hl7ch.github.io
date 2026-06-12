# CH ALIS Leistungsschnittstelle - Visit - CH ALIS Connect (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ALIS Leistungsschnittstelle - Visit**

## Logical Model: CH ALIS Leistungsschnittstelle - Visit 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-alis-connect/StructureDefinition/Visit | *Version*:1.0.0-ballot |
| Active as of 2026-06-12 | *Computable Name*:ChAlisLeistungsschnittstelleVisit |
| **Copyright/Legal**: CC0-1.0 | |

 
This logical model describes the Visit of 'Leistungsschnittstelle ALIS Version 5.1'. 

**Usages:**

* This Logical Model is not used by any profiles in this Specification

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-alis-connect|current/StructureDefinition/StructureDefinition-Visit.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-Visit.csv), [Excel](StructureDefinition-Visit.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "Visit",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/elementdefinition-namespace",
    "valueUri" : "noNamespace"
  }],
  "url" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/Visit",
  "version" : "1.0.0-ballot",
  "name" : "ChAlisLeistungsschnittstelleVisit",
  "title" : "CH ALIS Leistungsschnittstelle - Visit",
  "status" : "active",
  "date" : "2026-06-12T18:37:15+00:00",
  "publisher" : "ALIS-Connect",
  "contact" : [{
    "name" : "ALIS-Connect",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.alis-connect.ch/"
    }]
  }],
  "description" : "This logical model describes the Visit of 'Leistungsschnittstelle ALIS Version 5.1'.",
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
  "type" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/Visit",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "Visit",
      "path" : "Visit",
      "short" : "CH ALIS Leistungsschnittstelle - Visit",
      "definition" : "2, Patient"
    },
    {
      "id" : "Visit.VisitNumber",
      "path" : "Visit.VisitNumber",
      "short" : "2.1, Fall, Alphanum. Max. 40 Zeichen, FID = eindeutiger Schlüssel (ev. Kombination aus PID und lfd. Nr.), der FID ist eindeutig, Obligatorisch",
      "definition" : "2.1, Fall, Alphanum. Max. 40 Zeichen, FID = eindeutiger Schlüssel (ev. Kombination aus PID und lfd. Nr.), der FID ist eindeutig, Obligatorisch",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/Text"
      }]
    },
    {
      "id" : "Visit.PatientID",
      "path" : "Visit.PatientID",
      "short" : "2.2, Patient.PID, Numerisch, Max. 20 Zeichen, PID, Optional",
      "definition" : "2.2, Patient.PID, Numerisch, Max. 20 Zeichen, PID, Optional",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/Text"
      }]
    },
    {
      "id" : "Visit.PatientName",
      "path" : "Visit.PatientName",
      "short" : "2.3, Patient.Name, 50 Zeichen, Name, Optional",
      "definition" : "2.3, Patient.Name, 50 Zeichen, Name, Optional",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/Text"
      }]
    },
    {
      "id" : "Visit.PatientGivenName",
      "path" : "Visit.PatientGivenName",
      "short" : "2.4, Patient.Vorname, 50 Zeichen, Vorname, Optional",
      "definition" : "2.4, Patient.Vorname, 50 Zeichen, Vorname, Optional",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/Text"
      }]
    },
    {
      "id" : "Visit.PatientBirthDate",
      "path" : "Visit.PatientBirthDate",
      "short" : "2.5, Patient.GebDat, XML-Format date, Geb.Datum, Optional",
      "definition" : "2.5, Patient.GebDat, XML-Format date, Geb.Datum, Optional",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/Date"
      }]
    },
    {
      "id" : "Visit.PatientGender",
      "path" : "Visit.PatientGender",
      "short" : "M|F",
      "definition" : "2.6, Patient Geschlecht, 1 Zeichen, Geschlecht, Optional M,F",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/Text"
      }]
    },
    {
      "id" : "Visit.TerminationVisit",
      "path" : "Visit.TerminationVisit",
      "short" : "2.7, Fall Abschluss, XML-Format date, Optional",
      "definition" : "2.7, Fall Abschluss, XML-Format date, Optional",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/Date"
      }]
    },
    {
      "id" : "Visit.TerminationReason",
      "path" : "Visit.TerminationReason",
      "short" : "2.8, Fall Abschlussgrund, Alphanum., Grunde des Fallabschlusses, Optional",
      "definition" : "2.8, Fall Abschlussgrund, Alphanum., Grunde des Fallabschlusses, Optional",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/Text"
      }]
    },
    {
      "id" : "Visit.Service",
      "path" : "Visit.Service",
      "short" : "3, Leistung, Leistungen stehen zum Patient im Verhältnis 1:N",
      "definition" : "3, Leistung, Leistungen stehen zum Patient im Verhältnis 1:N",
      "min" : 1,
      "max" : "*",
      "type" : [{
        "code" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/Service"
      }]
    }]
  }
}

```
