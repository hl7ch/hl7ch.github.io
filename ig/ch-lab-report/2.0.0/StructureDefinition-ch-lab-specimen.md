# CH LAB-Report Specimen - CH LAB-Report (R4) v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH LAB-Report Specimen**

## Resource Profile: CH LAB-Report Specimen 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-specimen | *Version*:2.0.0 |
| Active as of 2025-12-16 | *Computable Name*:ChLabSpecimen |
| **Copyright/Legal**: CC0-1.0 | |

 
This profile constrains the Specimen resource for the purpose of laboratory test reports in Switzerland. 

**Usages:**

* Use this Profile: [CH LAB-Report Document: Laboratory Report](StructureDefinition-ch-lab-report-document.md)
* Refer to this Profile: [CH LAB-Report DiagnosticReport: Laboratory Report](StructureDefinition-ch-lab-diagnosticreport.md), [CH LAB-Report Observation Results: Laboratory Report](StructureDefinition-ch-lab-observation-results-laboratory.md), [CH LAB-Report ServiceRequest: Laboratory Order](StructureDefinition-ch-lab-report-servicerequest.md) and [CH LAB-Report Specimen](StructureDefinition-ch-lab-specimen.md)
* Examples for this Profile: [Specimen/BloodCBC](Specimen-BloodCBC.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-lab-report|current/StructureDefinition/ch-lab-specimen)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-lab-specimen.csv), [Excel](StructureDefinition-ch-lab-specimen.xlsx), [Schematron](StructureDefinition-ch-lab-specimen.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-lab-specimen",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-imposeProfile",
      "valueCanonical" : "http://hl7.eu/fhir/laboratory/StructureDefinition/Specimen-eu-lab"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-specimen",
  "version" : "2.0.0",
  "name" : "ChLabSpecimen",
  "title" : "CH LAB-Report Specimen",
  "status" : "active",
  "date" : "2025-12-16T10:27:41+00:00",
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
  "description" : "This profile constrains the Specimen resource for the purpose of laboratory test reports in Switzerland.",
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
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
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
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Specimen",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Specimen",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Specimen",
        "path" : "Specimen",
        "short" : "Laboratory Specimen",
        "definition" : "Laboratory specimen"
      },
      {
        "id" : "Specimen.type",
        "path" : "Specimen.type",
        "comment" : "If the specimen.type conveys information about the site the specimen has been collected from, then, if the bodySite is present it shall be coherent with the type.",
        "binding" : {
          "strength" : "preferred",
          "valueSet" : "http://hl7.eu/fhir/laboratory/ValueSet/lab-specimenType-eu-lab"
        }
      },
      {
        "id" : "Specimen.subject",
        "path" : "Specimen.subject",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-patient",
              "http://hl7.eu/fhir/laboratory/StructureDefinition/Patient-animal-eu-lab",
              "http://hl7.org/fhir/StructureDefinition/Group",
              "http://hl7.org/fhir/StructureDefinition/Device",
              "http://hl7.org/fhir/StructureDefinition/Substance",
              "http://hl7.org/fhir/StructureDefinition/Location"
            ]
          }
        ]
      },
      {
        "id" : "Specimen.parent",
        "path" : "Specimen.parent",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-specimen"
            ]
          }
        ]
      },
      {
        "id" : "Specimen.request",
        "path" : "Specimen.request",
        "short" : "Why the specimen was collected.",
        "comment" : "If the specimen information are known when the order is created then the ServiceRequest.specimen should be used.\nIf the ServiceRequest can be updated when the specimen is collected then the ServiceRequest.specimen or the Specimen.request could be used.\nOtherwise the relationship is recorded in the Specimen.request element"
      },
      {
        "id" : "Specimen.collection.extension",
        "path" : "Specimen.collection.extension",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "url"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        }
      },
      {
        "id" : "Specimen.collection.extension:bodySite",
        "path" : "Specimen.collection.extension",
        "sliceName" : "bodySite",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://hl7.org/fhir/StructureDefinition/bodySite|5.3.0-ballot-tc1"
            ]
          }
        ]
      },
      {
        "id" : "Specimen.collection.extension:bodySite.value[x]",
        "path" : "Specimen.collection.extension.value[x]",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://hl7.eu/fhir/laboratory/StructureDefinition/BodyStructure-eu-lab"
            ]
          }
        ]
      },
      {
        "id" : "Specimen.collection.bodySite",
        "path" : "Specimen.collection.bodySite",
        "comment" : "If the specimen.type conveys information about the site the specimen has been collected from, then, if the bodySite if present it shall be coherent with the type",
        "binding" : {
          "strength" : "preferred",
          "valueSet" : "http://hl7.org/fhir/ValueSet/body-site"
        }
      },
      {
        "id" : "Specimen.processing.additive",
        "path" : "Specimen.processing.additive",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://hl7.org/fhir/StructureDefinition/Substance",
              "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-specimen-additive-substance"
            ]
          }
        ]
      },
      {
        "id" : "Specimen.container.extension",
        "path" : "Specimen.container.extension",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "url"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        }
      },
      {
        "id" : "Specimen.container.extension:device",
        "path" : "Specimen.container.extension",
        "sliceName" : "device",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://hl7.org/fhir/5.0/StructureDefinition/extension-Specimen.container.device"
            ]
          }
        ]
      },
      {
        "id" : "Specimen.container.type",
        "path" : "Specimen.container.type",
        "binding" : {
          "strength" : "preferred",
          "valueSet" : "http://hl7.eu/fhir/laboratory/ValueSet/lab-specimenContainer-eu-lab"
        }
      },
      {
        "id" : "Specimen.container.additive[x]",
        "path" : "Specimen.container.additive[x]",
        "max" : "0"
      }
    ]
  }
}

```
