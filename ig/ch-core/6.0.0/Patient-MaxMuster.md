# Max Muster - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Max Muster**

## Example Patient: Max Muster

Language: de-CH

Profiles: [CH Core Patient](StructureDefinition-ch-core-patient.md), [CH Core Patient EPR](StructureDefinition-ch-core-patient-epr.md)

Max Muster (official) Male, DoB: 1938-12-12 ( Medical record number)

-------

| | |
| :--- | :--- |
| Contact Detail | * [+41326851234](tel:+41326851234)
* ph: 079 333 22 11(Mobile)
* [+41321237788](tel:+41321237788)
* [max.muster@example.com](mailto:max.muster@example.com)
* [http://example.com](http://example.com)
* 079 333 22 11
* Leidensweg 10 Specimendorf 9999 CH (home)
 |
| Links: | * Managing Organization: [Organization Gruppenpraxis CH](Organization-GruppenpraxisCH.md)
 |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "MaxMuster",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient",
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient-epr"
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
      "system" : "urn:oid:2.999.1.2.3.4",
      "value" : "8733"
    }
  ],
  "name" : [
    {
      "use" : "official",
      "family" : "Muster",
      "_family" : {
        "extension" : [
          {
            "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-ech-11-name",
            "valueCode" : "officialName"
          }
        ]
      },
      "given" : ["Max"],
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
    }
  ],
  "telecom" : [
    {
      "system" : "phone",
      "value" : "+41326851234",
      "use" : "home",
      "_use" : {
        "extension" : [
          {
            "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-ech-46-phonecategory",
            "valueCodeableConcept" : {
              "coding" : [
                {
                  "system" : "http://fhir.ch/ig/ch-core/CodeSystem/ech-46-phonecategory",
                  "code" : "1",
                  "display" : "private Telefonnummer"
                }
              ]
            }
          }
        ]
      }
    },
    {
      "system" : "phone",
      "value" : "079 333 22 11",
      "use" : "mobile",
      "_use" : {
        "extension" : [
          {
            "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-ech-46-phonecategory",
            "valueCodeableConcept" : {
              "coding" : [
                {
                  "system" : "http://fhir.ch/ig/ch-core/CodeSystem/ech-46-phonecategory",
                  "code" : "2",
                  "display" : "private Mobil-Nummer"
                }
              ]
            }
          }
        ]
      }
    },
    {
      "system" : "phone",
      "value" : "+41321237788",
      "use" : "work",
      "_use" : {
        "extension" : [
          {
            "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-ech-46-phonecategory",
            "valueCodeableConcept" : {
              "coding" : [
                {
                  "system" : "http://fhir.ch/ig/ch-core/CodeSystem/ech-46-phonecategory",
                  "code" : "6",
                  "display" : "geschäftliche Nummer (Durchwahl)"
                }
              ]
            }
          }
        ]
      }
    },
    {
      "system" : "email",
      "value" : "max.muster@example.com",
      "use" : "home",
      "_use" : {
        "extension" : [
          {
            "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-ech-46-emailcategory",
            "valueCodeableConcept" : {
              "coding" : [
                {
                  "system" : "http://fhir.ch/ig/ch-core/CodeSystem/ech-46-emailcategory",
                  "code" : "1",
                  "display" : "private Email-Adresse"
                }
              ]
            }
          }
        ]
      }
    },
    {
      "system" : "url",
      "value" : "http://example.com",
      "use" : "work",
      "_use" : {
        "extension" : [
          {
            "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-ech-46-internetcategory",
            "valueCodeableConcept" : {
              "coding" : [
                {
                  "system" : "http://fhir.ch/ig/ch-core/CodeSystem/ech-46-internetcategory",
                  "code" : "2",
                  "display" : "geschäftliche Internet-Adresse"
                }
              ]
            }
          }
        ]
      }
    },
    {
      "system" : "sms",
      "value" : "079 333 22 11"
    }
  ],
  "gender" : "male",
  "birthDate" : "1938-12-12",
  "address" : [
    {
      "use" : "home",
      "line" : ["Leidensweg", "10"],
      "city" : "Specimendorf",
      "postalCode" : "9999",
      "country" : "CH"
    }
  ],
  "managingOrganization" : {
    "reference" : "Organization/GruppenpraxisCH"
  }
}

```
