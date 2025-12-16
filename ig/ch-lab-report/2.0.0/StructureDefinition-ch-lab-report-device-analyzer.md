# CH LAB-Report Device: Analyzer - CH LAB-Report (R4) v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH LAB-Report Device: Analyzer**

## Resource Profile: CH LAB-Report Device: Analyzer 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-report-device-analyzer | *Version*:2.0.0 |
| Active as of 2025-12-16 | *Computable Name*:ChLabReportDeviceAnalyzer |
| **Copyright/Legal**: CC0-1.0 | |

 
Holds Laboratory Analyzer Data. 

**Usages:**

* Examples for this Profile: [Device/3b9c6849-cf71-45e9-9d88-31f7879342f0](Device-3b9c6849-cf71-45e9-9d88-31f7879342f0.md) and [Device/Afinion-2](Device-Afinion-2.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-lab-report|current/StructureDefinition/ch-lab-report-device-analyzer)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-lab-report-device-analyzer.csv), [Excel](StructureDefinition-ch-lab-report-device-analyzer.xlsx), [Schematron](StructureDefinition-ch-lab-report-device-analyzer.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-lab-report-device-analyzer",
  "url" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-report-device-analyzer",
  "version" : "2.0.0",
  "name" : "ChLabReportDeviceAnalyzer",
  "title" : "CH LAB-Report Device: Analyzer",
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
  "description" : "Holds Laboratory Analyzer Data.",
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
      "identity" : "udi",
      "uri" : "http://fda.gov/UDI",
      "name" : "UDI Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Device",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Device",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Device",
        "path" : "Device"
      },
      {
        "id" : "Device.udiCarrier",
        "path" : "Device.udiCarrier",
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Device.udiCarrier.deviceIdentifier",
        "path" : "Device.udiCarrier.deviceIdentifier",
        "min" : 1
      },
      {
        "id" : "Device.status",
        "path" : "Device.status",
        "mustSupport" : true
      },
      {
        "id" : "Device.manufacturer",
        "path" : "Device.manufacturer",
        "mustSupport" : true
      },
      {
        "id" : "Device.deviceName",
        "path" : "Device.deviceName",
        "mustSupport" : true
      },
      {
        "id" : "Device.type",
        "path" : "Device.type",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "30234008"
            }
          ]
        }
      }
    ]
  }
}

```
