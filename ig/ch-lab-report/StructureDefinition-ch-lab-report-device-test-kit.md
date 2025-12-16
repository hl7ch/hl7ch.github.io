# CH LAB-Report Device: TestKit - CH LAB-Report (R4) v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH LAB-Report Device: TestKit**

## Resource Profile: CH LAB-Report Device: TestKit 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-report-device-test-kit | *Version*:2.0.0 |
| Active as of 2025-12-16 | *Computable Name*:ChLabReportDeviceTestKit |
| **Copyright/Legal**: CC0-1.0 | |

 
Holds Laboratory Test-Kit Data. 

**Usages:**

* Examples for this Profile: [Device/523fa1b9-f24d-4ae6-aa98-92d7f57b2066](Device-523fa1b9-f24d-4ae6-aa98-92d7f57b2066.md), [Device/729d1c62-051e-4e3a-80d4-06f861b2a794](Device-729d1c62-051e-4e3a-80d4-06f861b2a794.md) and [Device/Combur-Test](Device-Combur-Test.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-lab-report|current/StructureDefinition/ch-lab-report-device-test-kit)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-lab-report-device-test-kit.csv), [Excel](StructureDefinition-ch-lab-report-device-test-kit.xlsx), [Schematron](StructureDefinition-ch-lab-report-device-test-kit.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-lab-report-device-test-kit",
  "url" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-report-device-test-kit",
  "version" : "2.0.0",
  "name" : "ChLabReportDeviceTestKit",
  "title" : "CH LAB-Report Device: TestKit",
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
  "description" : "Holds Laboratory Test-Kit Data.",
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
              "code" : "303607000"
            }
          ]
        }
      },
      {
        "id" : "Device.parent",
        "path" : "Device.parent",
        "mustSupport" : true
      }
    ]
  }
}

```
