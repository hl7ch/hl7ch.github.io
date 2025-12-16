# Document 1 GFP Gemeinschaft Composition - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Document 1 GFP Gemeinschaft Composition**

## Example Composition: Document 1 GFP Gemeinschaft Composition

### Immunization Administration

**Id:**A-D2-HCP1-C1-Composition

**Identifier:**urn:ietf:rfc:3986#urn:uuid:ab0add6e-0049-4567-8609-8d3ffdd84af0

**Status:**Final

**Code:**Immunization record (http://snomed.info/sct#41000179103)

**Patient:**[Patient/TC-patient](Patient-TC-patient.md) Wegmueller Monika

**Date:**June 15, 2021

**Authors:**

| |
| :--- |
| [Practitioner/TC-HCP1-C1](Practitioner-TC-HCP1-C1.md)Bereit Allzeit[Organization/TC-ORG1](Organization-TC-ORG1.md)Gruppenpraxis CH |

**Confidentiality:**nullNormal (qualifier value) (http://snomed.info/sct#17621005)

**Sections:**

| |
| :--- |
| Immunization Administration |



## Resource Content

```json
{
  "resourceType" : "Composition",
  "id" : "F-D4-HCP1-C1-Composition",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-immunization-administration"
    ]
  },
  "language" : "en-US",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:9f0d4bfd-9232-401f-9c5c-1a0187c22d1a"
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
  "date" : "2022-01-05T00:00:00.390+02:00",
  "author" : [
    {
      "reference" : "PractitionerRole/TC-HCP1-ORG1-ROLE-author"
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
      "id" : "allergies",
      "title" : "Allergies",
      "code" : {
        "coding" : [
          {
            "system" : "http://loinc.org",
            "code" : "48765-2",
            "display" : "Allergies and adverse reactions Document"
          }
        ]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xml:lang=\"en-US\" xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en-US\"><p><b>Code: </b><span>Allergies and adverse reactions Document (http://loinc.org#48765-2)</span></p><p><b>Entries:</b></p><table><tr><td><a href=\"AllergyIntolerance-TCF02-ALLINTO2.html\">AllergyIntolerance/TCF02-ALLINTO2</a></td></tr></table></div>"
      },
      "entry" : [
        {
          "reference" : "AllergyIntolerance/TCF02-ALLINTO2"
        }
      ]
    }
  ]
}

```
