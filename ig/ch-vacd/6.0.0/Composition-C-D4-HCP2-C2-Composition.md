# Document 4 GFP Gemeinschaft 2 Composition - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Document 4 GFP Gemeinschaft 2 Composition**

## Example Composition: Document 4 GFP Gemeinschaft 2 Composition

### Immunization Administration

**Id:**C-D4-HCP2-C2-Composition

**Identifier:**urn:ietf:rfc:3986#urn:uuid:9686dae0-448c-49f8-9c78-2db1aa95b921

**Status:**Final

**Code:**Immunization record (http://snomed.info/sct#41000179103)

**Patient:**[Patient/TC-patient2](Patient-TC-patient2.md) Knecht Lea

**Date:**August 20, 2021

**Authors:**

| |
| :--- |
| [Practitioner/TC-HCP2-C2](Practitioner-TC-HCP2-C2.md)Gesund Meist[Organization/TC-ORG2](Organization-TC-ORG2.md)Praxis Dr. Gesund |

**Confidentiality:**nullNormal (qualifier value) (http://snomed.info/sct#17621005)

**Sections:**

| |
| :--- |
| Medical Problems |



## Resource Content

```json
{
  "resourceType" : "Composition",
  "id" : "C-D4-HCP2-C2-Composition",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-immunization-administration"
    ]
  },
  "language" : "en-US",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:9686dae0-448c-49f8-9c78-2db1aa95b921"
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
    "reference" : "Patient/TC-patient2"
  },
  "date" : "2021-08-20T00:00:00.390+02:00",
  "author" : [
    {
      "reference" : "PractitionerRole/TC-HCP2-ORG2-ROLE-author"
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
  "section" : [
    {
      "id" : "medicalproblems",
      "title" : "Medical Problems",
      "code" : {
        "coding" : [
          {
            "system" : "http://loinc.org",
            "code" : "11450-4",
            "display" : "Problem list Reported"
          }
        ]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xml:lang=\"en-US\" xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en-US\"><p><b>Code: </b><span>Problem list Reported (http://loinc.org#11450-4)</span></p><p><b>Entries:</b></p><table><tr><td><a href=\"Condition-TCC04-EXPRISK1.html\">Condition/TCC04-EXPRISK1</a></td></tr></table></div>"
      },
      "entry" : [
        {
          "reference" : "Condition/TCC04-EXPRISK1"
        }
      ]
    }
  ]
}

```
