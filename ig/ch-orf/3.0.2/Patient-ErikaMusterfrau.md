# Erika Musterfrau - CH ORF (R4) v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Erika Musterfrau**

## Example Patient: Erika Musterfrau

Language: de-CH

Profile: [CH Core Patient](http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-patient.html)

Erika Musterfrau (official) Female, DoB: 1970-03-14 ( Medical record number)

-------

| | |
| :--- | :--- |
| Marital Status: | ledig |
| Alt. Name: | Ledigname (Name changed for Marriage) |
| Contact Detail | * ph: 079 979 79 79
* [erika@musterfrau.ch](mailto:erika@musterfrau.ch)
* Musterweg 6a Zürich 8000 Schweiz 
 |
| Language: | German (Region=Switzerland)(preferred) |
| : | * Max Freund 
* ph: 079 111 22 33
* [max@freund.ch](mailto:max@freund.ch)
 |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "ErikaMusterfrau",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient"
    ]
  },
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
      "system" : "urn:oid:2.999.1.2",
      "value" : "11.22.33.4567"
    }
  ],
  "name" : [
    {
      "use" : "official",
      "family" : "Musterfrau",
      "_family" : {
        "extension" : [
          {
            "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-ech-11-name",
            "valueCode" : "officialName"
          }
        ]
      },
      "given" : ["Erika"],
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
      "family" : "Ledigname",
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
      "value" : "079 979 79 79"
    },
    {
      "system" : "email",
      "value" : "erika@musterfrau.ch"
    }
  ],
  "gender" : "female",
  "birthDate" : "1970-03-14",
  "address" : [
    {
      "line" : ["Musterweg", "6a"],
      "city" : "Zürich",
      "postalCode" : "8000",
      "country" : "Schweiz"
    }
  ],
  "maritalStatus" : {
    "coding" : [
      {
        "system" : "http://fhir.ch/ig/ch-core/CodeSystem/ech-11-maritalstatus",
        "code" : "1",
        "display" : "ledig"
      }
    ]
  },
  "contact" : [
    {
      "relationship" : [
        {
          "text" : "Guter Freund"
        }
      ],
      "name" : {
        "family" : "Freund",
        "given" : ["Max"]
      },
      "telecom" : [
        {
          "system" : "phone",
          "value" : "079 111 22 33"
        },
        {
          "system" : "email",
          "value" : "max@freund.ch"
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
            "code" : "de-CH"
          }
        ]
      },
      "preferred" : true
    }
  ]
}

```
