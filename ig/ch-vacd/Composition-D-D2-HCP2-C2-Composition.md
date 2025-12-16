# Administration Document Composition - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Administration Document Composition**

## Example Composition: Administration Document Composition

### Immunization Administration

**Id:**D-D2-HCP2-C2-Composition

**Identifier:**urn:ietf:rfc:3986#urn:uuid:cb155588-9718-42b0-9e2e-f50f8bab5bcf

**Status:**Final

**Code:**Immunization record (http://snomed.info/sct#41000179103)

**Patient:**[Patient/TC-patient](Patient-TC-patient.md) Wegmueller Monika

**Date:**October 6, 2021

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
  "id" : "D-D2-HCP2-C2-Composition",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-immunization-administration"
    ]
  },
  "language" : "en-US",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:cb155588-9718-42b0-9e2e-f50f8bab5bcf"
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
          "code" : "urn:che:epr:ch-vacd:immunization-administration:2022"
        }
      ]
    }
  ],
  "subject" : {
    "reference" : "Patient/TC-patient"
  },
  "date" : "2021-10-06T00:00:00.390+02:00",
  "author" : [
    {
      "reference" : "Patient/TC-patient"
    }
  ],
  "title" : "Immunization Administration",
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
        "div" : "<div xml:lang=\"en-US\" xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en-US\"><p><b>Code: </b><span>Hx of Immunization (http://loinc.org#11369-6)</span></p><p><b>Entries:</b></p><table><tr><td><a href=\"Immunization-TCD01-IMMUN3.html\">Immunization/TCD01-IMMUN3</a></td></tr><tr><td><a href=\"Immunization-TCD01-IMMUN4.html\">Immunization/TCD01-IMMUN4</a></td></tr><tr><td><a href=\"Immunization-TCD01-IMMUN5.html\">Immunization/TCD01-IMMUN5</a></td></tr></table></div>"
      },
      "entry" : [
        {
          "reference" : "Immunization/TCD01-IMMUN3"
        },
        {
          "reference" : "Immunization/TCD01-IMMUN4"
        },
        {
          "reference" : "Immunization/TCD01-IMMUN5"
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
