# CH ALIS Leistungsschnittstelle - Diagnosis - CH ALIS Connect (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ALIS Leistungsschnittstelle - Diagnosis**

## Logical Model: CH ALIS Leistungsschnittstelle - Diagnosis 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-alis-connect/StructureDefinition/Diagnosis | *Version*:1.0.0-ballot |
| Active as of 2026-06-12 | *Computable Name*:ChAlisLeistungsschnittstelleDiagnosis |
| **Copyright/Legal**: CC0-1.0 | |

 
This logical model describes the Diagnosis of 'Leistungsschnittstelle ALIS Version 5.1'. 

**Usages:**

* Use this Logical Model: [CH ALIS Leistungsschnittstelle - Service](StructureDefinition-Service.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-alis-connect|current/StructureDefinition/StructureDefinition-Diagnosis.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-Diagnosis.csv), [Excel](StructureDefinition-Diagnosis.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "Diagnosis",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/elementdefinition-namespace",
    "valueUri" : "noNamespace"
  }],
  "url" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/Diagnosis",
  "version" : "1.0.0-ballot",
  "name" : "ChAlisLeistungsschnittstelleDiagnosis",
  "title" : "CH ALIS Leistungsschnittstelle - Diagnosis",
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
  "description" : "This logical model describes the Diagnosis of 'Leistungsschnittstelle ALIS Version 5.1'.",
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
  "type" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/Diagnosis",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "Diagnosis",
      "path" : "Diagnosis",
      "short" : "CH ALIS Leistungsschnittstelle - Diagnosis",
      "definition" : "3.20 (*)\tDiagnose Optional "
    },
    {
      "id" : "Diagnosis.DiagnosisCode",
      "path" : "Diagnosis.DiagnosisCode",
      "short" : "3.20.1 (*)\tDiagnosecode\tAlphanum.\tDiagnosecode [mind. 2 Zeichen, ICDx 5 Zeichen - abhängig von vereinbarter Codeversion, Originalschreibweise mit Punkten etc.]\tObligatorisch",
      "definition" : "3.20.1 (*)\tDiagnosecode\tAlphanum.\tDiagnosecode [mind. 2 Zeichen, ICDx 5 Zeichen - abhängig von vereinbarter Codeversion, Originalschreibweise mit Punkten etc.]\tObligatorisch",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/Text"
      }]
    },
    {
      "id" : "Diagnosis.DiagnosisSystem",
      "path" : "Diagnosis.DiagnosisSystem",
      "short" : "3.20.2 (*) Diagnosesystem\tAlphanum.\tCodeSystem der Diagnose z.B ICD, Tessinercode\tObligatorisch",
      "definition" : "3.20.2 (*) Diagnosesystem\tAlphanum.\tCodeSystem der Diagnose z.B ICD, Tessinercode\tObligatorisch",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/Text"
      }]
    },
    {
      "id" : "Diagnosis.DiagnosisVersion",
      "path" : "Diagnosis.DiagnosisVersion",
      "short" : "3.20.3 (*)\tVersion\tAlphanum.\tVersion des Codesystems z.B. ICD-GM 2023\tOptional (Empfehlung: Version angeben)",
      "definition" : "3.20.3 (*)\tVersion\tAlphanum.\tVersion des Codesystems z.B. ICD-GM 2023\tOptional (Empfehlung: Version angeben)",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/Text"
      }]
    },
    {
      "id" : "Diagnosis.DiagnosisConfidential",
      "path" : "Diagnosis.DiagnosisConfidential",
      "short" : "3.20.4 (*)\tVertraulichkeit\tBoolean\tFür XML 5.0, gemäss Forum Datenaustausch muss das ärztliche Personal über die Vertraulichkeit von Diagnosen entscheiden.\tOptional",
      "definition" : "3.20.4 (*)\tVertraulichkeit\tBoolean\tFür XML 5.0, gemäss Forum Datenaustausch muss das ärztliche Personal über die Vertraulichkeit von Diagnosen entscheiden.\tOptional",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/Boolean"
      }]
    },
    {
      "id" : "Diagnosis.OnSetDateTime",
      "path" : "Diagnosis.OnSetDateTime",
      "short" : "3.20.5 (*)\tDatum der Diagnose\tXML-Format Datetime\tDatum der Diagnosestellung falls nicht gleich wie Datum der Leistungserbringung (3.)\tOptional",
      "definition" : "3.20.5 (*)\tDatum der Diagnose\tXML-Format Datetime\tDatum der Diagnosestellung falls nicht gleich wie Datum der Leistungserbringung (3.)\tOptional",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/DateTime"
      }]
    },
    {
      "id" : "Diagnosis.Laterality",
      "path" : "Diagnosis.Laterality",
      "short" : "l|r|b",
      "definition" : "3.20.6 (*) Seitigkeit\tAlphanum.\tWerte = l,r,b\tOptional",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/Text"
      }]
    }]
  }
}

```
