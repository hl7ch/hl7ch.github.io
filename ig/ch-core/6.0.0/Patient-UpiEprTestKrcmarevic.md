# UPI EPR Test Krcmarevic - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UPI EPR Test Krcmarevic**

## Example Patient: UPI EPR Test Krcmarevic

* **EPR-SPID**: 7560521127080
* **Date of Birth**: 20.03.1982
* **First Name**: Claude-Hélène Marguerite
* **Official Name**: Krcmarevic
* **Original Name**: Scheuble
* **Sex**: 2 (Needs transformation to HL7 ValueSet, see [ConceptMap Sex eCH-011 to FHIR mapping](https://fhir.ch/ig/ch-term/ConceptMap-sex-ech11-to-fhir.html))
* **Mother**

* **First Name**: Hui Xue
* **Last Name**: Dalkiliç


* **Father**

* **First Name**: Fabio Nicola
* **Last Name**: Dalkiliç


* **Nationality**: Switzerland (8100)
* **Country of Birth**: Switzerland (8100)
* **Place of Birth**: Zürich (261)

Base test data for Projectathon from UPI, see
[Google Doc for more examples.](https://docs.google.com/spreadsheets/d/1yWPhTI7DDgYDMXPVFGRmdb50c8TuUnQp9fECM3iGTBo/edit#gid=0)



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "UpiEprTestKrcmarevic",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient"
    ]
  },
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
      "url" : "http://hl7.org/fhir/StructureDefinition/patient-birthPlace",
      "valueAddress" : {
        "city" : "Zürich",
        "_city" : {
          "extension" : [
            {
              "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-ech-7-municipalityid",
              "valueString" : "261"
            }
          ]
        },
        "country" : "Switzerland",
        "_country" : {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/iso21090-codedString",
              "valueCoding" : {
                "system" : "urn:iso:std:iso:3166",
                "code" : "CH"
              }
            }
          ]
        }
      }
    }
  ],
  "identifier" : [
    {
      "system" : "urn:oid:2.16.756.5.30.1.127.3.10.3",
      "value" : "761337611234567897"
    }
  ],
  "name" : [
    {
      "use" : "official",
      "family" : "Krcmarevic",
      "given" : ["Claude-Hélène Marguerite"]
    },
    {
      "use" : "maiden",
      "family" : "Scheuble"
    }
  ],
  "gender" : "female",
  "birthDate" : "1982-03-20",
  "contact" : [
    {
      "relationship" : [
        {
          "coding" : [
            {
              "system" : "http://terminology.hl7.org/CodeSystem/v3-RoleCode",
              "code" : "PRN",
              "display" : "parent"
            }
          ]
        }
      ],
      "name" : {
        "family" : "Dalkiliç",
        "given" : ["Hui Xue"]
      }
    },
    {
      "relationship" : [
        {
          "coding" : [
            {
              "system" : "http://terminology.hl7.org/CodeSystem/v3-RoleCode",
              "code" : "PRN",
              "display" : "parent"
            }
          ]
        }
      ],
      "name" : {
        "family" : "Dalkiliç",
        "given" : ["Fabio Nicola"]
      }
    }
  ]
}

```
