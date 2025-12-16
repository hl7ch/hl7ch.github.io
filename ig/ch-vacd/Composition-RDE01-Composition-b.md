# Aggregated Document Composition - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Aggregated Document Composition**

## Example Composition: Aggregated Document Composition

### Impfdossier

**Id:**RDE01-Composition

**Identifier:**urn:ietf:rfc:3986#urn:uuid:6258cc39-4e8c-4608-983b-0912791ca797

**Status:**Final

**Code:**Immunization record (http://snomed.info/sct#41000179103)

**Patient:**[Patient/TC-patient](Patient-TC-patient.md) Wegmueller Monika

**Date:**November 20, 2021

**Authors:**

| |
| :--- |
| [Patient/TC-patient](Patient-TC-patient.md)Wegmueller Monika |

**Confidentiality:**nullNormal (qualifier value) (http://snomed.info/sct#17621005)

**Sections:**

| |
| :--- |
| Liste der verabreichten Impfungen |
| Bisherige Krankheiten |



## Resource Content

```json
{
  "resourceType" : "Composition",
  "id" : "RDE01-Composition-b",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-vaccination-record"
    ]
  },
  "language" : "de-CH",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:6258cc39-4e8c-4608-983b-0912791ca797"
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
  "date" : "2021-11-20T14:00:00.390+02:00",
  "author" : [
    {
      "reference" : "Device/TC-Device-Aggregator"
    }
  ],
  "title" : "Impfdossier",
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
      "title" : "Liste der verabreichten Impfungen",
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
        "div" : "<div xml:lang=\"de-CH\" xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"de-CH\"><p><b>Code: </b><span>Hx of Immunization (http://loinc.org#11369-6)</span></p><p><b>Entries:</b></p><table><tr><td><a href=\"Immunization-TCE01-IMMUN1-de.html\">Immunization/TCE01-IMMUN1-de</a></td></tr><tr><td><a href=\"Immunization-TCE01-IMMUN2-de.html\">Immunization/TCE01-IMMUN2-de</a></td></tr></table></div>"
      },
      "entry" : [
        {
          "reference" : "Immunization/TCE01-IMMUN1-de"
        },
        {
          "reference" : "Immunization/TCE01-IMMUN2-de"
        }
      ]
    },
    {
      "id" : "pastillnesses",
      "title" : "Bisherige Krankheiten",
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
        "div" : "<div xml:lang=\"de-CH\" xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"de-CH\"><p><b>Code: </b><span>Hx of Past illness (http://loinc.org#11348-0)</span></p><p><b>Entries:</b></p><table><tr><td><a href=\"Condition-TCE01-UNDILL1-de.html\">Condition/TCE01-UNDILL1-de</a></td></tr></table></div>"
      },
      "entry" : [
        {
          "reference" : "Condition/TCE01-UNDILL1-de"
        }
      ]
    }
  ]
}

```
