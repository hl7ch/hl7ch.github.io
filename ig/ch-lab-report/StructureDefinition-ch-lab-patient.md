# CH LAB-Report Patient - CH LAB-Report (R4) v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH LAB-Report Patient**

## Resource Profile: CH LAB-Report Patient 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-patient | *Version*:2.0.0 |
| Active as of 2025-12-16 | *Computable Name*:ChLabPatient |
| **Copyright/Legal**: CC0-1.0 | |

 
This profile constrains the Patient resource for the purpose of laboratory test reports in Switzerland. 

**Usages:**

* Use this Profile: [CH LAB-Report Document: Laboratory Report](StructureDefinition-ch-lab-report-document.md)
* Refer to this Profile: [CH LAB-Report DiagnosticReport: Laboratory Report](StructureDefinition-ch-lab-diagnosticreport.md), [CH LAB-Report Observation Results: Laboratory Report](StructureDefinition-ch-lab-observation-results-laboratory.md), [CH LAB-Report Composition: Laboratory Report](StructureDefinition-ch-lab-report-composition.md), [CH LAB-Report ServiceRequest: Laboratory Order](StructureDefinition-ch-lab-report-servicerequest.md) and [CH LAB-Report Specimen](StructureDefinition-ch-lab-specimen.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-lab-report|current/StructureDefinition/ch-lab-patient)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-lab-patient.csv), [Excel](StructureDefinition-ch-lab-patient.xlsx), [Schematron](StructureDefinition-ch-lab-patient.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-lab-patient",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-imposeProfile",
      "valueCanonical" : "http://hl7.eu/fhir/laboratory/StructureDefinition/Patient-eu-lab"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-patient",
  "version" : "2.0.0",
  "name" : "ChLabPatient",
  "title" : "CH LAB-Report Patient",
  "status" : "active",
  "date" : "2025-12-16T10:40:10+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch"
        }
      ]
    },
    {
      "name" : "Marcel Hanselmann",
      "telecom" : [
        {
          "system" : "email",
          "value" : "laborprojektgruppe@gmail.com",
          "use" : "work"
        }
      ]
    }
  ],
  "description" : "This profile constrains the Patient resource for the purpose of laboratory test reports in Switzerland.",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CH"
        }
      ]
    }
  ],
  "copyright" : "CC0-1.0",
  "fhirVersion" : "4.0.1",
  "mapping" : [
    {
      "identity" : "eCH",
      "uri" : "http://www.ech.ch/",
      "name" : "eCH-Standards"
    },
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "cda",
      "uri" : "http://hl7.org/v3/cda",
      "name" : "CDA (R2)"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    },
    {
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    },
    {
      "identity" : "loinc",
      "uri" : "http://loinc.org",
      "name" : "LOINC code for the element"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Patient",
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Patient",
        "path" : "Patient",
        "short" : "CH LAB Patient"
      }
    ]
  }
}

```
