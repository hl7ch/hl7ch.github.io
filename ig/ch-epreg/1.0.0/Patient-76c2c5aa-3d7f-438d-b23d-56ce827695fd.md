# UC 2: Fabienne Babyglück - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC 2: Fabienne Babyglück**

## Example Patient: UC 2: Fabienne Babyglück

Language: de-CH

Fabienne Madeleine Babyglück Female, DoB: 1999-05-10 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#80756098765432100000)

-------

| | |
| :--- | :--- |
| Contact Detail | * [fabienne.babyglueck@example.com](mailto:fabienne.babyglueck@example.com)
* [+41 66 666 66 66](tel:+41666666666)
* [+41 79 987 65 43](tel:+41799876543)
* [+41 43 434 34 34](tel:+41434343434)
* Mustergasse 1 Zürich 8000 Schweiz 
 |
| Language: | German (Switzerland) |
| guardian: | * Marius Beistand 
* [marius.beistand@example.com](mailto:marius.beistand@example.com)
* [+41 99 999 99 99](tel:+41999999999)
* [+41 79 777 77 77](tel:+41797777777)
* [+41 88 888 88 88](tel:+41888888888)
 |
| Links: | * Also see: [RelatedPerson Fabienne Babyglück](Bundle-UC2-Document.md#urn-uuid-67d0e290-21b9-4255-9182-5fe9f21cdbb4)
 |
| Individual Pronouns: | * value: she/her/her/hers/herself
 |
| Patient Citizenship: | * code: Switzerland
 |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "76c2c5aa-3d7f-438d-b23d-56ce827695fd",
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
      "value" : "80756098765432100000"
    }
  ],
  "name" : [
    {
      "text" : "Fabienne Madeleine Babyglück",
      "family" : "Babyglück",
      "given" : ["Fabienne", "Madeleine"]
    }
  ],
  "telecom" : [
    {
      "system" : "email",
      "value" : "fabienne.babyglueck@example.com"
    },
    {
      "system" : "phone",
      "value" : "+41 66 666 66 66",
      "use" : "home"
    },
    {
      "system" : "phone",
      "value" : "+41 79 987 65 43",
      "use" : "mobile"
    },
    {
      "system" : "phone",
      "value" : "+41 43 434 34 34",
      "use" : "work"
    }
  ],
  "gender" : "female",
  "birthDate" : "1999-05-10",
  "address" : [
    {
      "line" : ["Mustergasse 1"],
      "city" : "Zürich",
      "postalCode" : "8000",
      "country" : "Schweiz"
    }
  ],
  "contact" : [
    {
      "relationship" : [
        {
          "coding" : [
            {
              "system" : "http://terminology.hl7.org/CodeSystem/v3-RoleCode",
              "code" : "GUARD",
              "display" : "guardian"
            }
          ]
        }
      ],
      "name" : {
        "family" : "Beistand",
        "given" : ["Marius"]
      },
      "telecom" : [
        {
          "system" : "email",
          "value" : "marius.beistand@example.com"
        },
        {
          "system" : "phone",
          "value" : "+41 99 999 99 99",
          "use" : "home"
        },
        {
          "system" : "phone",
          "value" : "+41 79 777 77 77",
          "use" : "mobile"
        },
        {
          "system" : "phone",
          "value" : "+41 88 888 88 88",
          "use" : "work"
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
        "reference" : "urn:uuid:67d0e290-21b9-4255-9182-5fe9f21cdbb4",
        "display" : "RelatedPerson Fabienne Babyglück"
      },
      "type" : "seealso"
    }
  ]
}

```
