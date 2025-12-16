# UC 1: RelatedPerson Biological Father - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC 1: RelatedPerson Biological Father**

## Example RelatedPerson: UC 1: RelatedPerson Biological Father

Language: de-CH

> **Patient Citizenship**
* code: Switzerland

**patient**: [Anonymous Patient Female, DoB Unknown ( Patient internal identifier: A)](Patient-UC1-Child.md)

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
  "id" : "UC1-RelatedPerson-BiologicalFather",
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
    "reference" : "Patient/UC1-Child"
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
