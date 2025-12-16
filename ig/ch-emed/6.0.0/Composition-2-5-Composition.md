# 2-5 Composition for Medication Treatment Plan document - CH EMED (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **2-5 Composition for Medication Treatment Plan document**

## Example Composition: 2-5 Composition for Medication Treatment Plan document

Language: de-CH

Profile: [CH EMED Medication Treatment Plan Composition](StructureDefinition-ch-emed-composition-medicationtreatmentplan.md)

**identifier**: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/6.5.0/NamingSystem-uri.html)/urn:uuid:0e9a0b8a-8306-4e35-bb92-0ba424696349

**status**: Final

**type**: Medication treatment plan.extended Document

**date**: 2012-02-04 14:00:00+0100

**author**: 

* [PractitionerRole](PractitionerRole-FamilienHausarztAtHausarzt.md)
* [Device](Device-ExampleDevice.md)

**title**: Therapieentscheid Medikation

**confidentiality**: normal



## Resource Content

```json
{
  "resourceType" : "Composition",
  "id" : "2-5-Composition",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-composition-medicationtreatmentplan"
    ]
  },
  "language" : "de-CH",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:0e9a0b8a-8306-4e35-bb92-0ba424696349"
  },
  "status" : "final",
  "type" : {
    "coding" : [
      {
        "system" : "http://loinc.org",
        "code" : "77603-9",
        "display" : "Medication treatment plan.extended Document"
      },
      {
        "system" : "http://snomed.info/sct",
        "code" : "761931002",
        "display" : "Medication treatment plan report (record artifact)"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/MonikaWegmueller"
  },
  "date" : "2012-02-04T14:00:00+01:00",
  "author" : [
    {
      "reference" : "PractitionerRole/FamilienHausarztAtHausarzt"
    },
    {
      "reference" : "Device/ExampleDevice"
    }
  ],
  "title" : "Therapieentscheid Medikation",
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
  "section" : [
    {
      "title" : "Medikamentöser Behandlungsplan",
      "code" : {
        "coding" : [
          {
            "system" : "http://loinc.org",
            "code" : "77604-7",
            "display" : "Medication treatment plan.brief Document"
          }
        ]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><table><thead><tr><th>Präpartename</th><th>Wirkstoffname</th><th>Galenische Form</th><th>Dosis pro Einheit</th><th>Dos.Morgen</th><th>Dos.Mittag</th><th>Dos.Abend</th><th>Dos.Nacht</th><th>Verabreichungsweg</th><th>Kommentar</th><th>Anwendungsdauer</th><th>Behandlungsgrund</th></tr></thead><tbody><tr id=\"mtp.1\"><td id=\"mtp.1.brandedmedication\">Norvasc</td><td id=\"mtp.1.ingredient\">Amlodipin</td><td id=\"mtp.1.packageform\">Tbl</td><td id=\"mtp.1.dosequantity\">10 mg</td><td id=\"mtp.1.dosagemorning\">1</td><td id=\"mtp.1.dosagelunch\">0</td><td id=\"mtp.1.dosageevening\">1</td><td id=\"mtp.1.dosagenight\">0</td><td id=\"mtp.1.routecode\">oral</td><td id=\"mtp.1.note\"/><td id=\"mtp.1.datefromto\"/><td id=\"mtp.1.reason\">Bluthochdruck</td></tr></tbody></table></div>"
      },
      "entry" : [
        {
          "reference" : "MedicationStatement/2-5-MedStatNorvasc"
        }
      ]
    }
  ]
}

```
