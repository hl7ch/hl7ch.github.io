# Susanna Ufferer - CH RAD-Order (R4) v2.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Susanna Ufferer**

## Example Patient: Susanna Ufferer

Profile: [CH Core Patient](http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-patient.html)

Susanna Ufferer (official) Female, DoB: 1945-03-14

-------

| | |
| :--- | :--- |
| Alt. Name: | Leidend (Name changed for Marriage) |
| Contact Detail | * [+41 79 979 79 79](tel:+41799797979)
* [susanna@ufferer.ch](mailto:susanna@ufferer.ch)
* Musterweg 6a Zürich 8000 Schweiz (home)
 |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "PatSUfferer",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient"
    ]
  },
  "name" : [
    {
      "use" : "official",
      "family" : "Ufferer",
      "_family" : {
        "extension" : [
          {
            "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-ech-11-name",
            "valueCode" : "officialName"
          }
        ]
      },
      "given" : ["Susanna"],
      "_given" : [
        {
          "extension" : [
            {
              "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-ech-11-firstname",
              "valueCode" : "officialFirstName"
            }
          ]
        }
      ]
    },
    {
      "use" : "maiden",
      "family" : "Leidend",
      "_family" : {
        "extension" : [
          {
            "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-ech-11-name",
            "valueCode" : "originalName"
          }
        ]
      }
    }
  ],
  "telecom" : [
    {
      "system" : "phone",
      "value" : "+41 79 979 79 79"
    },
    {
      "system" : "email",
      "value" : "susanna@ufferer.ch"
    }
  ],
  "gender" : "female",
  "birthDate" : "1945-03-14",
  "address" : [
    {
      "use" : "home",
      "line" : ["Musterweg", "6a"],
      "city" : "Zürich",
      "postalCode" : "8000",
      "country" : "Schweiz"
    }
  ]
}

```
