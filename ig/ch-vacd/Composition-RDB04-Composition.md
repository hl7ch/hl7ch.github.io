# Aggregated Document Composition - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Aggregated Document Composition**

## Example Composition: Aggregated Document Composition

### Vaccination Record

**Id:**RDB04-Composition

**Identifier:**urn:ietf:rfc:3986#urn:uuid:f9a26a92-662e-4601-b1ae-183c8f19d3e2

**Status:**Final

**Code:**Immunization record (http://snomed.info/sct#41000179103)

**Patient:**[Patient/TC-patient](Patient-TC-patient.md) Wegmueller Monika

**Date:**October 28, 2021

**Authors:**

| |
| :--- |
| [Patient/TC-patient](Patient-TC-patient.md)Wegmueller Monika |

**Confidentiality:**nullNormal (qualifier value) (http://snomed.info/sct#17621005)

**Sections:**

| |
| :--- |
| Immunization Administration |
| Laboratory-Serology |



## Resource Content

```json
{
  "resourceType" : "Composition",
  "id" : "RDB04-Composition",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-vaccination-record"
    ]
  },
  "language" : "en-US",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:f9a26a92-662e-4601-b1ae-183c8f19d3e2"
  },
  "status" : "final",
  "type" : {
    "coding" : [
      {
        "system" : "http://snomed.info/sct",
        "code" : "41000179103",
        "display" : "Immunization record"
      }
    ]
  },
  "category" : [
    {
      "coding" : [
        {
          "system" : "urn:oid:2.16.756.5.30.1.127.3.10.10",
          "code" : "urn:che:epr:ch-vacd:vaccination-record:2022"
        }
      ]
    }
  ],
  "subject" : {
    "reference" : "Patient/TC-patient"
  },
  "date" : "2021-10-28T14:00:00.390+02:00",
  "author" : [
    {
      "reference" : "Patient/TC-patient"
    }
  ],
  "title" : "Vaccination Record",
  "confidentiality" : "N",
  "_confidentiality" : {
    "extension" : [
      {
        "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-epr-confidentialitycode",
        "valueCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "17621005",
              "display" : "Normal (qualifier value)"
            }
          ]
        }
      }
    ]
  },
  "custodian" : {
    "reference" : "Organization/TC-ORG1"
  },
  "section" : [
    {
      "id" : "administration",
      "title" : "Immunization Administration",
      "code" : {
        "coding" : [
          {
            "system" : "http://loinc.org",
            "code" : "11369-6",
            "display" : "Hx of Immunization"
          }
        ]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xml:lang=\"en-US\" xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en-US\"><p><b>Code: </b><span>Hx of Immunization (http://loinc.org#11369-6)</span></p><p><b>Entries:</b></p><table><tr><td><a href=\"Immunization-TCB01-IMMUN1.html\">Immunization/TCB01-IMMUN1</a></td></tr><tr><td><a href=\"Immunization-TCB01-IMMUN2.html\">Immunization/TCB01-IMMUN2</a></td></tr></table></div>"
      },
      "entry" : [
        {
          "reference" : "Immunization/TCB01-IMMUN1"
        },
        {
          "reference" : "Immunization/TCB01-IMMUN2"
        }
      ]
    },
    {
      "id" : "laboratory-serology",
      "title" : "Laboratory-Serology",
      "code" : {
        "coding" : [
          {
            "system" : "http://loinc.org",
            "code" : "18727-8",
            "display" : "Serology studies (set)"
          }
        ]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xml:lang=\"en-US\" xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en-US\"><p><b>Code: </b><span>Serology studies (set) (http://loinc.org#18727-8)</span></p><p><b>Entries:</b></p><table><tr><td><a href=\"Observation-TCB04-LABRES1.html\">Observation/TCB04-LABRES1</a></td></tr></table></div>"
      },
      "entry" : [
        {
          "reference" : "Observation/TCB04-LABRES1"
        }
      ]
    }
  ]
}

```
