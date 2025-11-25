# 1DR - Neisseria Gonorrhoeae - CH ELM (R4) v1.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **1DR - Neisseria Gonorrhoeae**

## Example DiagnosticReport: 1DR - Neisseria Gonorrhoeae

## Laboratory report 

| | |
| :--- | :--- |
| Subject | D M Male, DoB: 1960-08-22 ( urn:oid:2.16.756.5.32#7562295883070) |
| Performer | [Organization SanLab](Organization-1Org-Labor.md) |
| Identifier | [Uniform Resource Identifier (URI)](http://terminology.hl7.org/5.3.0/NamingSystem-uri.html)/urn:uuid:1901332d-6012-443f-9690-9291adb2e19d |

**Report Details**

* **Code**: [Neisseria gonorrhoeae [Presence] in Urethra by Organism specific culture](Observation-1Obs-NeisseriaGonorrhoeae.md)
  * **Value**: Positive
  * **Flags**: Final,Positive
  * **When For**: 2023-07-14 11:10:00+0200



## Resource Content

```json
{
  "resourceType" : "DiagnosticReport",
  "id" : "1DR-NeisseriaGonorrhoeae",
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
      "reference" : "ServiceRequest/1SR-Order"
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
