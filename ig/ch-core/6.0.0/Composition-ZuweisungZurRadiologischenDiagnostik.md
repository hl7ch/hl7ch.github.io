# Zuweisung zur radiologischen Diagnostik - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Zuweisung zur radiologischen Diagnostik**

## Example Composition: Zuweisung zur radiologischen Diagnostik

Language: de-CH

Profiles: [CH Core Composition](StructureDefinition-ch-core-composition.md), [CH Core Composition EPR](StructureDefinition-ch-core-composition-epr.md)

**identifier**: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/6.5.0/NamingSystem-uri.html)/urn:uuid:31397b31-be60-47e1-bec6-f37816d42b0c

**status**: Final

**type**: Physician Transfer note

**date**: 2017-10-03 17:33:00+0100

**author**: [Practitioner Allzeit Bereit (official)](Practitioner-AllzeitBereit.md)

**title**: Zuweisung zur Radiologischen Diagnostik

**confidentiality**: normal

### Attesters

| | | | |
| :--- | :--- | :--- | :--- |
| - | **Mode** | **Time** | **Party** |
| * | Legal | 2017-10-03 | [Practitioner Allzeit Bereit (official)](Practitioner-AllzeitBereit.md) |

**custodian**: [Organization Gruppenpraxis CH](Organization-GruppenpraxisCH.md)



## Resource Content

```json
{
  "resourceType" : "Composition",
  "id" : "ZuweisungZurRadiologischenDiagnostik",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-composition",
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-composition-epr"
    ]
  },
  "language" : "de-CH",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:31397b31-be60-47e1-bec6-f37816d42b0c"
  },
  "status" : "final",
  "type" : {
    "coding" : [
      {
        "system" : "http://loinc.org",
        "code" : "28616-1",
        "display" : "Physician Transfer note"
      },
      {
        "system" : "http://snomed.info/sct",
        "code" : "371535009",
        "display" : "Transfer summary report"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/MaxMuster"
  },
  "date" : "2017-10-03T17:33:00+01:00",
  "author" : [
    {
      "reference" : "Practitioner/AllzeitBereit"
    }
  ],
  "title" : "Zuweisung zur Radiologischen Diagnostik",
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
              "display" : "Normal"
            }
          ]
        }
      }
    ]
  },
  "attester" : [
    {
      "mode" : "legal",
      "time" : "2017-10-03",
      "party" : {
        "reference" : "Practitioner/AllzeitBereit"
      }
    }
  ],
  "custodian" : {
    "reference" : "Organization/GruppenpraxisCH"
  },
  "section" : [
    {
      "title" : "Gewünschte Untersuchung",
      "text" : {
        "status" : "additional",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\">Der Patient erwartet Ihr Aufgebot zur Untersuchung.<br/><i>Spezifizierung der gewünschten Untersuchung</i><br/></div>"
      }
    },
    {
      "title" : "Dringlichkeit / Wunschtermin",
      "text" : {
        "status" : "additional",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><i>Angaben zum gewünschten Termin</i></div>"
      }
    },
    {
      "title" : "Fragestellung",
      "text" : {
        "status" : "additional",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><i>Grund für die Durchführung der Untersuchung und Angaben zum aktuellen Leiden resp. zum Grund der Untersuchung</i></div>"
      }
    },
    {
      "title" : "Angaben zum Patienten",
      "text" : {
        "status" : "additional",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><i>Erfolgte Voruntersuchungen<br/>Befundkopie – Empfänger</i><br/></div>"
      }
    },
    {
      "title" : "Klinische Angaben",
      "text" : {
        "status" : "additional",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><i>Beschreibung des aktuellen Leidens<br/>Schwangerschaft ja / nein<br/>Laborwerte (Quick / Tc, Kreatinin)<br/>Bekannte Allergien</i><br/></div>"
      }
    }
  ]
}

```
