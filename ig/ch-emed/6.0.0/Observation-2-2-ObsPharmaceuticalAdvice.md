# 2-2 Observation for Pharmaceutical Advice document - CH EMED (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **2-2 Observation for Pharmaceutical Advice document**

## Example Observation: 2-2 Observation for Pharmaceutical Advice document

Profile: [CH EMED Observation (PADV)](StructureDefinition-ch-emed-observation.md)

> **CH EMED Extension Treatment Plan**
* id: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/6.5.0/NamingSystem-uri.html)/urn:uuid:7aa20b27-eac0-4fef-a7b9-b10196718b9f
* externalDocumentId: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/6.5.0/NamingSystem-uri.html)/urn:uuid:7aa20b27-eac0-4fef-a7b9-b10196718b9f

**identifier**: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/6.5.0/NamingSystem-uri.html)/urn:uuid:e68055ce-1540-4b26-b72d-d9c3e595416a

**status**: Final

**code**: CANCEL

**subject**: [Monika Wegmüller Female, DoB: 1943-05-15 ( Medical record number)](Patient-MonikaWegmueller.md)

**effective**: 2012-02-04 14:00:00+0100

**issued**: 2012-02-04 14:00:00+0100

**performer**: [PractitionerRole](PractitionerRole-FamilienHausarztAtHausarzt.md)

**note**: 

> 

Abgesetzt aufgrund UAW trockener Husten




## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "2-2-ObsPharmaceuticalAdvice",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-observation"
    ]
  },
  "extension" : [
    {
      "extension" : [
        {
          "url" : "id",
          "valueIdentifier" : {
            "system" : "urn:ietf:rfc:3986",
            "value" : "urn:uuid:7aa20b27-eac0-4fef-a7b9-b10196718b9f"
          }
        },
        {
          "url" : "externalDocumentId",
          "valueIdentifier" : {
            "system" : "urn:ietf:rfc:3986",
            "value" : "urn:uuid:7aa20b27-eac0-4fef-a7b9-b10196718b9f"
          }
        }
      ],
      "url" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-ext-treatmentplan"
    }
  ],
  "identifier" : [
    {
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:uuid:e68055ce-1540-4b26-b72d-d9c3e595416a"
    }
  ],
  "status" : "final",
  "code" : {
    "coding" : [
      {
        "system" : "urn:oid:1.3.6.1.4.1.19376.1.9.2.1",
        "code" : "CANCEL"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/MonikaWegmueller"
  },
  "effectiveDateTime" : "2012-02-04T14:00:00+01:00",
  "issued" : "2012-02-04T14:00:00+01:00",
  "performer" : [
    {
      "reference" : "PractitionerRole/FamilienHausarztAtHausarzt"
    }
  ],
  "note" : [
    {
      "text" : "Abgesetzt aufgrund UAW trockener Husten"
    }
  ]
}

```
