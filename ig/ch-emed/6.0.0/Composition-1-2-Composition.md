# 1-2 Composition for Medication Dispense document - CH EMED (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **1-2 Composition for Medication Dispense document**

## Example Composition: 1-2 Composition for Medication Dispense document

Language: de-CH

Profile: [CH EMED Medication Dispense Composition](StructureDefinition-ch-emed-composition-medicationdispense.md)

**identifier**: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/6.5.0/NamingSystem-uri.html)/urn:uuid:d428e837-46fe-49cc-9212-245d153c68ee

**status**: Final

**type**: Medication dispense document (record artifact)

**date**: 2011-11-29 11:01:00+0100

**author**: [PractitionerRole](PractitionerRole-FamilienHausarztAtHausarzt.md)

**title**: Abgabe

**confidentiality**: normal



## Resource Content

```json
{
  "resourceType" : "Composition",
  "id" : "1-2-Composition",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-composition-medicationdispense"
    ]
  },
  "language" : "de-CH",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:d428e837-46fe-49cc-9212-245d153c68ee"
  },
  "status" : "final",
  "type" : {
    "coding" : [
      {
        "system" : "http://snomed.info/sct",
        "version" : "http://snomed.info/sct/2011000195101",
        "code" : "82291000195104",
        "display" : "Medication dispense document (record artifact)"
      },
      {
        "system" : "http://loinc.org",
        "code" : "60593-1",
        "display" : "Medication dispensed.extended Document"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/MonikaWegmueller"
  },
  "date" : "2011-11-29T11:01:00+01:00",
  "author" : [
    {
      "reference" : "PractitionerRole/FamilienHausarztAtHausarzt"
    }
  ],
  "title" : "Abgabe",
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
      "title" : "Abgabe eines Medikaments",
      "code" : {
        "coding" : [
          {
            "system" : "http://loinc.org",
            "code" : "60590-7",
            "display" : "Medication dispensed.brief Document"
          }
        ]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><table><thead><tr><th>Präpartename</th><th>Wirkstoffname</th><th>Galenische Form</th><th>Dosis pro Einheit</th><th>Anzahl Packungen</th><th>Packungsgrösse</th><th>Dos.Morgen</th><th>Dos.Mittag</th><th>Dos.Abend</th><th>Dos.Nacht</th><th>Verabreichungsweg</th><th>Kommentar</th><th>Behandlungsrund</th><th>Datum/Zeit der Abgabe/ Anwendung</th><th>Identifikation des Empfängers</th></tr></thead><tbody><tr id=\"dis.1\"><td id=\"dis.1.brandedmedication\">Triatec</td><td id=\"dis.1.ingredient\">Ramipril</td><td id=\"dis.1.dosequantity\">2.5 mg</td><td id=\"dis.1.packageform\">Tbl</td><td id=\"dis.1.nopackages\">1</td><td id=\"dis.1.packagesize\">20</td><td id=\"dis.1.dosagemorning\">0.5</td><td id=\"dis.1.dosagelunch\">0</td><td id=\"dis.1.dosageevening\">0</td><td id=\"dis.1.dosagenight\">0</td><td id=\"dis.1.routecode\">oral</td><td id=\"dis.1.note\"/><td id=\"dis.1.datefromto\"/><td id=\"dis.1.reason\">Bluthochdruck</td><td id=\"dis.1.dipsensedate\"/><td id=\"dis.1.dipsenseto\"/></tr></tbody></table></div>"
      },
      "entry" : [
        {
          "reference" : "MedicationDispense/1-2-MedDispTriatec"
        }
      ]
    }
  ]
}

```
