# Administration Document Composition - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Administration Document Composition**

## Example Composition: Administration Document Composition

### Immunization Administration

**Id:**B-D3-HCP1-C1-Composition

**Identifier:**urn:ietf:rfc:3986#urn:uuid:b9d9efbc-2115-42c0-98e6-b374f942560b

**Status:**Final

**Code:**Immunization record (http://snomed.info/sct#41000179103)

**Patient:**[Patient/TC-patient](Patient-TC-patient.md) Wegmueller Monika

**Date:**October 6, 2021

**Authors:**

| |
| :--- |
| [Practitioner/TC-HCP1-C1](Practitioner-TC-HCP1-C1.md)Bereit Allzeit[Organization/TC-ORG1](Organization-TC-ORG1.md)Gruppenpraxis CH |

**Confidentiality:**nullNormal (qualifier value) (http://snomed.info/sct#17621005)

**Sections:**

| |
| :--- |
| Previous illnesses |



## Resource Content

```json
{
  "resourceType" : "Composition",
  "id" : "B-D3-HCP1-C1-Composition",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-immunization-administration"
    ]
  },
  "language" : "en-US",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:b9d9efbc-2115-42c0-98e6-b374f942560b"
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
