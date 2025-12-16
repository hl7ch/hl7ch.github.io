# Aggregated Document Composition - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Aggregated Document Composition**

## Example Composition: Aggregated Document Composition

### Vaccination Record

**Id:**RDC04-Composition

**Identifier:**urn:ietf:rfc:3986#urn:uuid:09cb062b-ae01-44c8-9814-eca4c8e1b90c

**Status:**Final

**Code:**Immunization record (http://snomed.info/sct#41000179103)

**Patient:**[Patient/TC-patient2](Patient-TC-patient2.md) Knecht Lea

**Date:**September 11, 2021

**Authors:**

| |
| :--- |
| [Patient/TC-patient2](Patient-TC-patient2.md)Knecht Lea |

**Confidentiality:**nullNormal (qualifier value) (http://snomed.info/sct#17621005)

**Sections:**

| |
| :--- |
| Medical Problems |



## Resource Content

```json
{
  "resourceType" : "Composition",
  "id" : "RDC04-Composition",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-vaccination-record"
    ]
  },
  "language" : "en-US",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:09cb062b-ae01-44c8-9814-eca4c8e1b90c"
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
    "reference" : "Patient/TC-patient2"
  },
  "date" : "2021-09-11T00:00:00.390+02:00",
  "author" : [
    {
      "reference" : "Patient/TC-patient2"
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
        "div" : "<div xml:lang=\"en-US\" xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en-US\"><p><b>Code: </b><span>Problem list Reported (http://loinc.org#11450-4)</span></p><p><b>Entries:</b></p><table><tr><td><a href=\"Condition-TCC04-EXPRISK3.html\">Condition/TCC04-EXPRISK3</a></td></tr></table></div>"
      },
      "entry" : [
        {
          "reference" : "Condition/TCC04-EXPRISK3"
        }
      ]
    }
  ]
}

```
