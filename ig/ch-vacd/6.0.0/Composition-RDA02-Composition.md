# Aggregated Document Composition - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Aggregated Document Composition**

## Example Composition: Aggregated Document Composition

### Vaccination Record

**Id:**RDA02-Composition

**Identifier:**urn:ietf:rfc:3986#urn:uuid:84354ab2-d076-4d3f-80cd-48af836147df

**Status:**Final

**Code:**Immunization record (http://snomed.info/sct#41000179103)

**Patient:**[Patient/TC-patient](Patient-TC-patient.md) Wegmueller Monika

**Date:**August 21, 2021

**Authors:**

| |
| :--- |
| [Patient/TC-patient](Patient-TC-patient.md)Wegmueller Monika |

**Confidentiality:**nullNormal (qualifier value) (http://snomed.info/sct#17621005)

**Sections:**

| |
| :--- |
| Immunization Administration |
| Comments |



## Resource Content

```json
{
  "resourceType" : "Composition",
  "id" : "RDA02-Composition",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-vaccination-record"
    ]
  },
  "language" : "en-US",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:193c84c3-a388-443d-a656-105325bb2703"
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
  "date" : "2021-08-21T00:00:00.390+02:00",
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
        "div" : "<div xml:lang=\"en-US\" xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en-US\"><p><b>Code: </b><span>Hx of Immunization (http://loinc.org#11369-6)</span></p><p><b>Entries:</b></p><table><tr><td><a href=\"Immunization-TCA01-IMMUN1-patient.html\">Immunization/TCA01-IMMUN1-patient</a></td></tr><tr><td><a href=\"Immunization-TCA01-IMMUN2-HCP1-ORG1-ROLE.html\">Immunization/TCA01-IMMUN2-HCP1-ORG1-ROLE</a></td></tr><tr><td><a href=\"Immunization-TCA01-IMMUN3-HCP2-ORG2-ROLE.html\">Immunization/TCA01-IMMUN3-HCP2-ORG2-ROLE</a></td></tr><tr><td><a href=\"Immunization-TCA02-IMMUN4-HCP2-ORG2-ROLE.html\">Immunization/TCA02-IMMUN4-HCP2-ORG2-ROLE</a></td></tr></table></div>"
      },
      "entry" : [
        {
          "reference" : "Immunization/TCA01-IMMUN1-patient"
        },
        {
          "reference" : "Immunization/TCA01-IMMUN2-HCP1-ORG1-ROLE"
        },
        {
          "reference" : "Immunization/TCA01-IMMUN3-HCP2-ORG2-ROLE"
        },
        {
          "reference" : "Immunization/TCA02-IMMUN4-HCP2-ORG2-ROLE"
        }
      ]
    },
    {
      "id" : "Annotation",
      "title" : "Comments",
      "code" : {
        "coding" : [
          {
            "system" : "http://loinc.org",
            "code" : "48767-8",
            "display" : "Annotation comment Imp"
          }
        ]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xml:lang=\"en-US\" xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en-US\"><p><b>Code: </b><span>Annotation comment [Interpretation] Narrative (http://loinc.org#48767-8)</span></p></div>"
      }
    }
  ]
}

```
