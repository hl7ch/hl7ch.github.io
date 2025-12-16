# UC 3: Sophie Doppelherz - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC 3: Sophie Doppelherz**

## Example Patient: UC 3: Sophie Doppelherz

Language: de-CH

Sophie Doppelherz Female, DoB: 1992-07-22 ( Medical record number)

-------

| | |
| :--- | :--- |
| Links: | * Also see: [RelatedPerson: relationship = Natural mother (person)](RelatedPerson-UC3-RelatedPerson-ChildA-Mother.md)
* Also see: [RelatedPerson: relationship = Natural mother (person)](RelatedPerson-UC3-RelatedPerson-ChildB-Mother.md)
 |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "UC3-SophieDoppelherz",
  "language" : "de-CH",
  "identifier" : [
    {
      "type" : {
        "coding" : [
          {
            "system" : "http://terminology.hl7.org/CodeSystem/v2-0203",
            "code" : "MR"
          }
        ]
      },
      "system" : "http://example.com/identifiers/patient",
      "value" : "123456"
    }
  ],
  "name" : [
    {
      "family" : "Doppelherz",
      "given" : ["Sophie"]
    }
  ],
  "gender" : "female",
  "birthDate" : "1992-07-22",
  "link" : [
    {
      "other" : {
        "reference" : "RelatedPerson/UC3-RelatedPerson-ChildA-Mother"
      },
      "type" : "seealso"
    },
    {
      "other" : {
        "reference" : "RelatedPerson/UC3-RelatedPerson-ChildB-Mother"
      },
      "type" : "seealso"
    }
  ]
}

```
