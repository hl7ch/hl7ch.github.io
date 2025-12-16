# Document 2 HCP1 Community 1 Composition - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Document 2 HCP1 Community 1 Composition**

## Example Composition: Document 2 HCP1 Community 1 Composition

### Immunization Administration

**Id:**C-D2-HCP1-C1-Composition

**Identifier:**urn:ietf:rfc:3986#urn:uuid:f9433823-f08a-4ccb-a3cb-b62011c72489

**Status:**Final

**Code:**Immunization record (http://snomed.info/sct#41000179103)

**Patient:**[Patient/TC-patient](Patient-TC-patient.md) Wegmueller Monika

**Date:**August 21, 2021

**Authors:**

| |
| :--- |
| [Practitioner/TC-HCP1-C1](Practitioner-TC-HCP1-C1.md)Bereit Allzeit[Organization/TC-ORG1](Organization-TC-ORG1.md)Gruppenpraxis CH |

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
  "id" : "C-D2-HCP1-C1-Composition",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-immunization-administration"
    ]
  },
  "language" : "en-US",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:f9433823-f08a-4ccb-a3cb-b62011c72489"
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
  "date" : "2021-08-21T00:00:00.390+02:00",
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
    "reference" : "Organization/TC-ORG2"
  },
  "relatesTo" : [
    {
      "code" : "replaces",
      "targetReference" : {
        "type" : "Composition",
        "identifier" : {
          "system" : "urn:ietf:rfc:3986",
          "value" : "urn:uuid:9686dae0-448c-49f8-9c78-2db1aa95b921"
        }
      }
    }
  ],
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
        "div" : "<div xml:lang=\"en-US\" xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en-US\"><p><b>Code: </b><span>Hx of Immunization (http://loinc.org#11369-6)</span></p><p><b>Entries:</b></p><table><tr><td><a href=\"Immunization-TCC02-IMMUN3-HCP1-ORG1-ROLE.html\">Immunization/TCC02-IMMUN3-HCP1-ORG1-ROLE</a></td></tr></table></div>"
      },
      "entry" : [
        {
          "reference" : "Immunization/TCC02-IMMUN3-HCP1-ORG1-ROLE"
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
        "div" : "<div xml:lang=\"en-US\" xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en-US\"><p><b>Code: </b><span>Annotation comment Imp (http://loinc.org#48767-8)</span></p></div>"
      }
    }
  ]
}

```
