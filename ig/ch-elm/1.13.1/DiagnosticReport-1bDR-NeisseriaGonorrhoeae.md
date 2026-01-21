# 1bDR - Neisseria Gonorrhoeae - CH ELM (R4) v1.13.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **1bDR - Neisseria Gonorrhoeae**

## Example DiagnosticReport: 1bDR - Neisseria Gonorrhoeae



## Resource Content

```json
{
  "resourceType" : "DiagnosticReport",
  "id" : "1bDR-NeisseriaGonorrhoeae",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-DiagnosticReport.composition",
      "valueReference" : {
        "reference" : "Composition/1bComp-NeisseriaGonorrhoeae"
      }
    }
  ],
  "identifier" : [
    {
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:uuid:1901332d-6012-443f-9690-9291df32e177"
    }
  ],
  "basedOn" : [
    {
      "reference" : "ServiceRequest/1bSR-Order"
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
      "reference" : "Organization/1bOrg-Labor"
    }
  ],
  "specimen" : [
    {
      "reference" : "Specimen/1bSpec-Specimen"
    }
  ],
  "result" : [
    {
      "reference" : "Observation/1bObs-NeisseriaGonorrhoeae"
    }
  ]
}

```
