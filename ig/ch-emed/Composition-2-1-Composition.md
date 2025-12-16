# 2-1 Composition for Medication List document - CH EMED (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **2-1 Composition for Medication List document**

## Example Composition: 2-1 Composition for Medication List document

Language: de-CH

Profile: [CH EMED Medication List Composition](StructureDefinition-ch-emed-composition-medicationlist.md)

**identifier**: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/6.5.0/NamingSystem-uri.html)/urn:uuid:67a4e752-c39a-4620-9516-a02b36ff5061

**status**: Final

**type**: Medication summary Document

**date**: 2012-02-04 13:55:00+0100

**author**: [Device](Device-ExampleDevice.md)

**title**: Medikationsliste

**confidentiality**: normal



## Resource Content

```json
{
  "resourceType" : "Composition",
  "id" : "2-1-Composition",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-composition-medicationlist"
    ]
  },
  "language" : "de-CH",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:67a4e752-c39a-4620-9516-a02b36ff5061"
  },
  "status" : "final",
  "type" : {
    "coding" : [
      {
        "system" : "http://loinc.org",
        "code" : "56445-0",
        "display" : "Medication summary Document"
      },
      {
        "system" : "http://snomed.info/sct",
        "code" : "721912009",
        "display" : "Medication summary document (record artifact)"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/MonikaWegmueller"
  },
  "date" : "2012-02-04T13:55:00+01:00",
  "author" : [
    {
      "reference" : "Device/ExampleDevice"
    }
  ],
  "title" : "Medikationsliste",
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
      "title" : "Medikamentenliste",
      "code" : {
        "coding" : [
          {
            "system" : "http://loinc.org",
            "code" : "10160-0",
            "display" : "History of Medication use Narrative"
          }
        ]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><table><thead><tr><th>Präpartename</th><th>Wirkstoffname</th><th>Galenische Form</th><th>Dosis pro Einheit</th><th>Dos.Morgen</th><th>Dos.Mittag</th><th>Dos.Abend</th><th>Dos.Nacht</th><th>Verabreichungsweg</th><th>Kommentar</th><th>Anwendungsdauer</th><th>Behandlungsgrund</th></tr></thead><tbody><tr id=\"mtp.1\"><td id=\"mtp.1.brandedmedication\">Triatec</td><td id=\"mtp.1.ingredient\">Ramipril</td><td id=\"mtp.1.packageform\">Tbl</td><td id=\"mtp.1.dosequantity\">2.5 mg</td><td id=\"mtp.1.dosagemorning\">0.5</td><td id=\"mtp.1.dosagelunch\">0</td><td id=\"mtp.1.dosageevening\">0</td><td id=\"mtp.1.dosagenight\">0</td><td id=\"mtp.1.routecode\">oral</td><td id=\"mtp.1.note\"/><td id=\"mtp.1.datefromto\"/><td id=\"mtp.1.reason\">Bluthochdruck</td></tr></tbody></table></div>"
      },
      "entry" : [
        {
          "reference" : "MedicationStatement/2-1-MedStatTriatec"
        },
        {
          "reference" : "MedicationDispense/2-1-MedDispTriatec"
        }
      ]
    }
  ]
}

```
