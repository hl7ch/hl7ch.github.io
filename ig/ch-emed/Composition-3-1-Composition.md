# 3-1 Composition for Medication Dispense document - CH EMED (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **3-1 Composition for Medication Dispense document**

## Example Composition: 3-1 Composition for Medication Dispense document

Language: de-CH

Profile: [CH EMED Medication Dispense Composition](StructureDefinition-ch-emed-composition-medicationdispense.md)

**identifier**: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/6.5.0/NamingSystem-uri.html)/urn:uuid:c276c2af-afab-4a78-859b-485324584b37

**status**: Final

**type**: Medication dispense document (record artifact)

**date**: 2020-02-03 17:00:00+0100

**author**: [PractitionerRole](PractitionerRole-PriskaHuberAtRettungsdienst.md)

**title**: Abgabe

**confidentiality**: normal



## Resource Content

```json
{
  "resourceType" : "Composition",
  "id" : "3-1-Composition",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-composition-medicationdispense"
    ]
  },
  "language" : "de-CH",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:c276c2af-afab-4a78-859b-485324584b37"
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
    "reference" : "Patient/MaxMoser"
  },
  "date" : "2020-02-03T17:00:00+01:00",
  "author" : [
    {
      "reference" : "PractitionerRole/PriskaHuberAtRettungsdienst"
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
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><span id=\"co1\">Anwendung: NACL 0.9 %, 14:32, 03.02.2020</span></div>"
      },
      "entry" : [
        {
          "reference" : "MedicationAdministration/3-1-MedAdminNacl"
        }
      ]
    }
  ]
}

```
