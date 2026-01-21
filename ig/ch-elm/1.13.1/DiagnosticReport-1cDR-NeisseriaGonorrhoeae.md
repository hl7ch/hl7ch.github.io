# 1cDR - Neisseria Gonorrhoeae - CH ELM (R4) v1.13.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **1cDR - Neisseria Gonorrhoeae**

## Example DiagnosticReport: 1cDR - Neisseria Gonorrhoeae



## Resource Content

```json
{
  "resourceType" : "DiagnosticReport",
  "id" : "1cDR-NeisseriaGonorrhoeae",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-DiagnosticReport.composition",
      "valueReference" : {
        "reference" : "Composition/1Comp-NeisseriaGonorrhoeae"
      }
    }
  ],
  "identifier" : [
    {
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:uuid:1901332d-6012-443f-9690-9291adb2e19d"
    }
  ],
  "basedOn" : [
    {
      "reference" : "ServiceRequest/1cSR-Order"
    }
  ],
  "status" : "final",
  "code" : {
    "coding" : [
      {
        "system" : "http://loinc.org",
        "code" : "11502-2",
        "display" : "Laboratory report"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/Pat-001"
  },
  "performer" : [
    {
      "reference" : "Organization/1Org-Labor"
    }
  ],
  "specimen" : [
    {
      "reference" : "Specimen/1Spec-Specimen"
    }
  ],
  "result" : [
    {
      "reference" : "Observation/1Obs-NeisseriaGonorrhoeae"
    }
  ]
}

```
