# Aggregated Document Composition - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Aggregated Document Composition**

## Example Composition: Aggregated Document Composition

### Vaccination Record

**Id:**RDB02-Composition

**Identifier:**urn:ietf:rfc:3986#urn:uuid:dd2f00c4-1df6-4298-a289-d59fb5b385c3

**Status:**Final

**Code:**Immunization record (http://snomed.info/sct#41000179103)

**Patient:**[Patient/TC-patient](Patient-TC-patient.md) Wegmueller Monika

**Date:**December 10, 2021

**Authors:**

| |
| :--- |
| [Patient/TC-patient](Patient-TC-patient.md)Wegmueller Monika |

**Confidentiality:**nullNormal (qualifier value) (http://snomed.info/sct#17621005)

**Sections:**

| |
| :--- |
| Immunization Administration |
| Previous illnesses |



## Resource Content

```json
{
  "resourceType" : "Composition",
  "id" : "RDB02-Composition",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-vaccination-record"
    ]
  },
  "language" : "en-US",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:dd2f00c4-1df6-4298-a289-d59fb5b385c3"
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
  "date" : "2021-12-10T14:00:00.390+02:00",
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
      "id" : "pastillnesses",
      "title" : "Previous illnesses",
      "code" : {
        "coding" : [
          {
            "system" : "http://loinc.org",
            "code" : "11348-0",
            "display" : "Hx of Past illness"
          }
        ]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xml:lang=\"en-US\" xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en-US\"><p><b>Code: </b><span>Hx of Past illness (http://loinc.org#11348-0)</span></p><p><b>Entries:</b></p><table><tr><td><a href=\"Condition-TCB02-UNDILL1.html\">Condition/TCB02-UNDILL1</a></td></tr></table></div>"
      },
      "entry" : [
        {
          "reference" : "Condition/TCB02-UNDILL1"
        }
      ]
    }
  ]
}

```
