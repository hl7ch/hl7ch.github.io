# UC 1: Katrin Kinderlieb - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC 1: Katrin Kinderlieb**

## Example Patient: UC 1: Katrin Kinderlieb

Language: de-CH

Katrin Emily Kinderlieb Female, DoB: 1986-01-18 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#80756015090002647590)

-------

| | |
| :--- | :--- |
| Contact Detail | * [katrin.kinderlieb@example.com](mailto:katrin.kinderlieb@example.com)
* [+41 33 333 33 33](tel:+41333333333)
* [+41 79 123 45 67](tel:+41791234567)
* [+41 45 454 54 54](tel:+41454545454)
* Musterstrasse 1 Zürich 8000 Schweiz 
 |
| Language: | German (Switzerland) |
| Emergency Contact: | * Pierre Kinderlieb 
* [+41 33 333 33 33](tel:+41333333333)
* [+41 79 111 22 33](tel:+41791112233)
* [+41 46 464 64 64](tel:+41464646464)
 |
| Emergency Contact: | * Anna Kinderlieb 
* [+41 88 888 88 88](tel:+41888888888)
 |
| Links: | * Also see: [RelatedPerson: relationship = Natural mother (person)](RelatedPerson-UC1-RelatedPerson-Mother.md)
 |
| Individual Pronouns: | * value: she/her/her/hers/herself
 |
| Patient Citizenship: | * code: Switzerland
 |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "UC1-KatrinKinderlieb",
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
    },
    {
      "extension" : [
        {
          "url" : "value",
          "valueCodeableConcept" : {
            "coding" : [
              {
                "system" : "http://loinc.org",
                "code" : "LA29519-8",
                "display" : "she/her/her/hers/herself"
              }
            ]
          }
        }
      ],
      "url" : "http://hl7.org/fhir/StructureDefinition/individual-pronouns"
    }
  ],
  "identifier" : [
    {
      "system" : "urn:oid:2.16.756.5.30.1.123.100.1.1.1",
      "value" : "80756015090002647590"
    }
  ],
  "name" : [
    {
      "text" : "Katrin Emily Kinderlieb",
      "family" : "Kinderlieb",
      "given" : ["Katrin", "Emily"]
    }
  ],
  "telecom" : [
    {
      "system" : "email",
      "value" : "katrin.kinderlieb@example.com"
    },
    {
      "system" : "phone",
      "value" : "+41 33 333 33 33",
      "use" : "home"
    },
    {
      "system" : "phone",
      "value" : "+41 79 123 45 67",
      "use" : "mobile"
    },
    {
      "system" : "phone",
      "value" : "+41 45 454 54 54",
      "use" : "work"
    }
  ],
  "gender" : "female",
  "birthDate" : "1986-01-18",
  "address" : [
    {
      "line" : ["Musterstrasse 1"],
      "city" : "Zürich",
      "postalCode" : "8000",
      "country" : "Schweiz"
    }
  ],
  "contact" : [
    {
      "extension" : [
        {
          "url" : "http://hl7.org/fhir/StructureDefinition/patient-contactPriority",
          "valuePositiveInt" : 1
        }
      ],
      "relationship" : [
        {
          "coding" : [
            {
              "system" : "http://terminology.hl7.org/CodeSystem/v2-0131",
              "code" : "C",
              "display" : "Emergency Contact"
            }
          ]
        }
      ],
      "name" : {
        "family" : "Kinderlieb",
        "given" : ["Pierre"]
      },
      "telecom" : [
        {
          "system" : "phone",
          "value" : "+41 33 333 33 33",
          "use" : "home"
        },
        {
          "system" : "phone",
          "value" : "+41 79 111 22 33",
          "use" : "mobile"
        },
        {
          "system" : "phone",
          "value" : "+41 46 464 64 64",
          "use" : "work"
        }
      ]
    },
    {
      "relationship" : [
        {
          "coding" : [
            {
              "system" : "http://terminology.hl7.org/CodeSystem/v2-0131",
              "code" : "C",
              "display" : "Emergency Contact"
            }
          ]
        }
      ],
      "name" : {
        "family" : "Kinderlieb",
        "given" : ["Anna"]
      },
      "telecom" : [
        {
          "system" : "phone",
          "value" : "+41 88 888 88 88",
          "use" : "home"
        }
      ]
    }
  ],
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
  ],
  "link" : [
    {
      "other" : {
        "reference" : "RelatedPerson/UC1-RelatedPerson-Mother"
      },
      "type" : "seealso"
    }
  ]
}

```
