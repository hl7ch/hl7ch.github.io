# Composition - Change Dosage - CH EMED (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Composition - Change Dosage**

## Example Composition: Composition - Change Dosage

Language: de-CH

Profile: [CH EMED Pharmaceutical Advice Composition](StructureDefinition-ch-emed-composition-pharmaceuticaladvice.md)

**identifier**: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/6.5.0/NamingSystem-uri.html)/urn:uuid:adab8d2d-ae14-48d6-8d15-b726d6ea82c5

**status**: Final

**type**: Medication pharmaceutical advice.extended Document

**date**: 2012-02-04 14:00:00+0100

**author**: [PractitionerRole](PractitionerRole-FamilienHausarztAtHausarzt.md)

**title**: Kommentar zur Medikation

**confidentiality**: normal



## Resource Content

```json
{
  "resourceType" : "Composition",
  "id" : "Comp-ChangeDosage",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-composition-pharmaceuticaladvice"
    ]
  },
  "language" : "de-CH",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:adab8d2d-ae14-48d6-8d15-b726d6ea82c5"
  },
  "status" : "final",
  "type" : {
    "coding" : [
      {
        "system" : "http://loinc.org",
        "code" : "61356-2",
        "display" : "Medication pharmaceutical advice.extended Document"
      },
      {
        "system" : "http://snomed.info/sct",
        "code" : "419891008",
        "display" : "Record artifact (record artifact)"
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
    }
  ],
  "title" : "Kommentar zur Medikation",
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
      "title" : "Hinweise zur Medikation",
      "code" : {
        "coding" : [
          {
            "system" : "http://loinc.org",
            "code" : "61357-0",
            "display" : "Medication pharmaceutical advice.brief Document"
          }
        ]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><table><thead><tr><th>Präpartename</th><th>Wirkstoffname</th><th>Galenische Form</th><th>Dosis pro Einheit</th><th>Dos.Morgen</th><th>Dos.Mittag</th><th>Dos.Abend</th><th>Dos.Nacht</th><th>Verabreichungsweg</th><th>Anwendungsdauer</th><th>Behandlungsgrund</th><th>Kommentar</th></tr></thead><tbody><tr id=\"padv.1\"><td id=\"padv.1.brandedmedication\">Triatec</td><td id=\"padv.1.ingredient\">Ramipril</td><td id=\"padv.1.packageform\">Tbl</td><td id=\"padv.1.dosequantity\">2.5 mg</td><td id=\"padv.1.dosagemorning\">1</td><td id=\"padv.1.dosagelunch\">0</td><td id=\"padv.1.dosageevening\">0</td><td id=\"padv.1.dosagenight\">0</td><td id=\"padv.1.routecode\">oral</td><td id=\"padv.1.datefromto\"/><td id=\"padv.1.reason\">Bluthochdruck</td><td id=\"padv.1.note\">Dosierungsänderung: Morgens 1 Tablette anstatt 0.5 Tablette</td></tr></tbody></table></div>"
      },
      "entry" : [
        {
          "reference" : "Observation/Obs-ChangeDosage"
        }
      ]
    }
  ]
}

```
