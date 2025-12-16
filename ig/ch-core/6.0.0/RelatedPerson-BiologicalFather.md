# Biological Father - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Biological Father**

## Example RelatedPerson: Biological Father

Language: de-CH

Profile: [CH Core RelatedPerson](StructureDefinition-ch-core-relatedperson.md)

> **Patient Citizenship**
* code: Switzerland

**patient**: Ungeborenes Kind

**relationship**: Natural father (person)

**name**: Pierre Kinderlieb 

**birthDate**: 1987-07-21

### Communications

| | |
| :--- | :--- |
| - | **Language** |
| * | German (Switzerland) |



## Resource Content

```json
{
  "resourceType" : "RelatedPerson",
  "id" : "BiologicalFather",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-relatedperson"
    ]
  },
  "language" : "de-CH",
  "extension" : [
    {
      "extension" : [
        {
          "url" : "code",
          "valueCodeableConcept" : {
            "coding" : [
              {
                "system" : "urn:iso:std:iso:3166",
                "code" : "CH",
                "display" : "Switzerland"
              }
            ]
          }
        }
      ],
      "url" : "http://hl7.org/fhir/StructureDefinition/patient-citizenship"
    }
  ],
  "patient" : {
    "display" : "Ungeborenes Kind"
  },
  "relationship" : [
    {
      "coding" : [
        {
          "system" : "http://snomed.info/sct",
          "code" : "9947008",
          "display" : "Natural father (person)"
        }
      ]
    }
  ],
  "name" : [
    {
      "family" : "Kinderlieb",
      "given" : ["Pierre"]
    }
  ],
  "birthDate" : "1987-07-21",
  "communication" : [
    {
      "language" : {
        "coding" : [
          {
            "system" : "urn:ietf:bcp:47",
            "code" : "de-CH",
            "display" : "German (Switzerland)"
          }
        ]
      }
    }
  ]
}

```
