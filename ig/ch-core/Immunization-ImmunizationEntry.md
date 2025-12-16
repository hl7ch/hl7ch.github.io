# Immunization example for Immunization Administration - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Immunization example for Immunization Administration**

## Example Immunization: Immunization example for Immunization Administration

> **Entry Resource Cross References**
* entry: Identifier: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/6.5.0/NamingSystem-uri.html)/urn:uuid:19aaeae7-05cc-4b97-9d03-a65ae4aac2ac
* container: Identifier: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/6.5.0/NamingSystem-uri.html)/urn:uuid:1d118906-ede6-4109-bca1-0fc25f58bc69
* relationcode: replaces

**identifier**: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/6.5.0/NamingSystem-uri.html)/urn:uuid:9f326dee-1265-4b59-88b3-fd63bb2da934

**status**: Completed

**vaccineCode**: Vaccine product containing only Hepatitis A virus antigen (medicinal product)

**patient**: [Max Muster (official) Male, DoB: 1938-12-12 ( Medical record number)](Bundle-1-ZuweisungZurRadiologischenDiagnostik-FHIR.md#http-//test.fhir.ch/r4/Patient/MaxMuster)

**occurrence**: 2021-06-01

**recorded**: 2021-06-02 00:00:00+0200

**lotNumber**: AHAVB946A

**route**: Intramuscular use

### Performers

| | |
| :--- | :--- |
| - | **Actor** |
| * | [Practitioner Allzeit Bereit (official)](Bundle-1-ZuweisungZurRadiologischenDiagnostik-FHIR.md#http-//test.fhir.ch/r4/Practitioner/AllzeitBereit) |

**note**: By http://test.fhir.ch/r4/Practitioner/AllzeitBereit @2021-06-01

> 

Der Patient hat diese Impfung ohne jegliche Nebenwirkungen gut vertragen.


### ProtocolApplieds

| | | |
| :--- | :--- | :--- |
| - | **TargetDisease** | **DoseNumber[x]** |
| * | Viral hepatitis, type A (disorder) | 1 |



## Resource Content

```json
{
  "resourceType" : "Immunization",
  "id" : "ImmunizationEntry",
  "extension" : [
    {
      "extension" : [
        {
          "url" : "entry",
          "valueReference" : {
            "type" : "Immunization",
            "identifier" : {
              "system" : "urn:ietf:rfc:3986",
              "value" : "urn:uuid:19aaeae7-05cc-4b97-9d03-a65ae4aac2ac"
            }
          }
        },
        {
          "url" : "container",
          "valueReference" : {
            "type" : "Composition",
            "identifier" : {
              "system" : "urn:ietf:rfc:3986",
              "value" : "urn:uuid:1d118906-ede6-4109-bca1-0fc25f58bc69"
            }
          }
        },
        {
          "url" : "relationcode",
          "valueCode" : "replaces"
        }
      ],
      "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-ext-entry-resource-cross-references"
    }
  ],
  "identifier" : [
    {
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:uuid:9f326dee-1265-4b59-88b3-fd63bb2da934"
    }
  ],
  "status" : "completed",
  "vaccineCode" : {
    "coding" : [
      {
        "system" : "http://snomed.info/sct",
        "code" : "871751006",
        "display" : "Vaccine product containing only Hepatitis A virus antigen (medicinal product)"
      }
    ]
  },
  "patient" : {
    "reference" : "http://test.fhir.ch/r4/Patient/MaxMuster"
  },
  "occurrenceDateTime" : "2021-06-01",
  "recorded" : "2021-06-02T00:00:00.390+02:00",
  "lotNumber" : "AHAVB946A",
  "route" : {
    "coding" : [
      {
        "system" : "http://standardterms.edqm.eu",
        "code" : "20035000",
        "display" : "Intramuscular use"
      }
    ]
  },
  "performer" : [
    {
      "actor" : {
        "reference" : "http://test.fhir.ch/r4/Practitioner/AllzeitBereit"
      }
    }
  ],
  "note" : [
    {
      "authorReference" : {
        "reference" : "http://test.fhir.ch/r4/Practitioner/AllzeitBereit"
      },
      "time" : "2021-06-01",
      "text" : "Der Patient hat diese Impfung ohne jegliche Nebenwirkungen gut vertragen."
    }
  ],
  "protocolApplied" : [
    {
      "targetDisease" : [
        {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "40468003",
              "display" : "Viral hepatitis, type A (disorder)"
            }
          ]
        }
      ],
      "doseNumberPositiveInt" : 1
    }
  ]
}

```
